<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineLoginController extends Controller
{
    public function redirectToLineLogin()
    {
        // ทำการ redirect ไปยัง URL ของ Line Login
        return redirect()->away('https://access.line.me/oauth2/v2.1/authorize?response_type=code&client_id='.env('LINE_LOGIN_CHANNEL_ID').'&redirect_uri='.urlencode(env('LINE_LOGIN_CALLBACK_URL')).'&state=12345abcde&scope=openid%20profile');
    }

    public function handleLineCallback(Request $request)
    {
        // ตรวจสอบรหัส code จาก callback ของ Line API
        $code = $request->query('code');

        // เรียกใช้งาน Line API เพื่อรับ Access Token โดยใช้รหัส code
        $response = Http::post('https://api.line.me/oauth2/v2.1/token', [
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => env('LINE_LOGIN_CALLBACK_URL'),
            'client_id' => env('LINE_LOGIN_CHANNEL_ID'),
            'client_secret' => env('LINE_LOGIN_CHANNEL_SECRET')
        ]);

        // ตรวจสอบว่าการเรียกใช้งาน API สำเร็จหรือไม่
        if ($response->successful()) {
            // รับข้อมูล Access Token จากการตอบกลับ
            $accessToken = $response['access_token'];

            // เรียกใช้งาน Line API เพื่อรับข้อมูลผู้ใช้
            $userResponse = Http::withHeaders([
                'Authorization' => 'Bearer '.$accessToken
            ])->get('https://api.line.me/v2/profile');

            // ตรวจสอบว่าการเรียกใช้งาน API สำเร็จหรือไม่
            if ($userResponse->successful()) {
                // รับข้อมูลผู้ใช้จากการตอบกลับ
                $userData = $userResponse->json();

                // นำข้อมูลผู้ใช้ที่ได้รับมาจาก Line API เพื่อทำการบันทึกในฐานข้อมูล MySQL
                // เช่น บันทึก userLineID, displayName, pictureUrl, statusMessage, หรือข้อมูลอื่น ๆ ตามที่ต้องการ
                $user = new User();
                $user->line_user_id = $userData['userId'];
                $user->save();
                // เมื่อบันทึกข้อมูลผู้ใช้ลงในฐานข้อมูลเรียบร้อยแล้ว
                // คุณสามารถทำการ redirect ผู้ใช้ไปยังหน้าหลักหรือหน้าที่ต้องการต่อไป
                return redirect('/home');
            } else {
                // หากการเรียกใช้งาน API ไม่สำเร็จ
                // คุณสามารถแสดงข้อความแจ้งเตือนหรือดำเนินการต่อไปตามที่คุณต้องการ
                return back()->with('error', 'Failed to retrieve user data from Line API');
            }
        } else {
            // หากการเรียกใช้งาน API ไม่สำเร็จ
            // คุณสามารถแสดงข้อความแจ้งเตือนหรือดำเนินการต่อไปตามที่คุณต้องการ
            return back()->with('error', 'Failed to retrieve access token from Line API');
        }
    }
}
