<?php

namespace App\Http\Controllers;

use App\Models\M_titles;
use App\Models\Room;
use App\Models\User;
use App\Http\Controllers\Validator;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getReserve()
    {
        //
        return view('titles_User.Reserve_room');
    }

    public function getFollow()
    {
        //
        return view('titles_User.follow');
    }

    public function mainpage()
    {
        //
        return view('titles_Employee.mainpage');
    }

    public function reserve()
    {
        //
        return view('titles_Employee.reserve_privet');
    }

    public function petition()
    {
        //
        return view('titles_Employee.petition');
    }

    public function reservation_list()
    {
        //
        return view('titles_Employee.reservation_list');
    }

<<<<<<< Updated upstream
    // หน้าสถิติการจอง
    public function statistics(){
        $data = [
            'user_count' => User::count(),
            'room_count' => Room::count(),
        ];
        return view('titles_Employee.statistics' , compact('data'));
=======
    public function statistics()
    {
        //
        return view('titles_Employee.statistics');
    }

    public function manage_account()
    {
        //
        $users = User::all();
        return view('titles_Employee.manage_account',['users' => $users]);
    }

    public function manage_rooms()
    {

        $rooms = Room::orderBy('id','desc')->paginate(5);
        return view('titles_Employee.manage_rooms',['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_room()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_room(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_room(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_room(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_room(Room $room)
    {
        //
>>>>>>> Stashed changes
    }

    public function accout()
    {
        //
        return view('titles_Employee.accout');
    }

    public function manage_rooms()
    {
        $rooms = Room::orderBy('id')->get();
        return view('titles_Employee.manage_rooms', ['rooms' => $rooms]);
    }

    public function create_rooms(){
        return view('titles_Employee.add_rooms');
    }

    public function store_rooms(Request $request){
        $data = $request->validate([
            'room' => 'required',
            'price'  => 'required',
            'size_room' => 'required',
            'capacity' => 'required',
            'typeroom' => 'required',
            'status_room' => 'required',
            'typesplit' => 'required',
            'notation' => 'required'
        ]);

        $newRoom = new Room;
        $newRoom->ro_name= $request->room;
        $newRoom->ro_price = $request->price;
        $newRoom->ro_size = $request->size_room;
        $newRoom->ro_capacity = $request->capacity;
        $newRoom->ro_typeroom = $request->typeroom;
        $newRoom->ro_avaliable = $request->status_room;
        $newRoom->ro_cansplit = $request->typesplit;
        $newRoom->ro_description = $request->notation;
        $newRoom->save();

        return redirect()->route('titles_Employee.store_rooms');
    }

    public function edit_rooms(Room $rooms)
    {
        return view('titles_Employee.edit_rooms', ['rooms' => $rooms]);
    }
    
    public function update_rooms(Request $request, Room $rooms)
    {
        $data = $request->validate([
            'room' => 'required',
            'price'  => 'required',
            'size_room' => 'required',
            'capacity' => 'required',
            'typeroom' => 'required',
            'status_room' => 'required',
            'typesplit' => 'required',
            'notation' => 'required'
        ]);
        $rooms->ro_name= $request->room;
        $rooms->ro_price = $request->price;
        $rooms->ro_size = $request->size_room;
        $rooms->ro_capacity = $request->capacity;
        $rooms->ro_typeroom = $request->typeroom;
        $rooms->ro_avaliable = $request->status_room;
        $rooms->ro_cansplit = $request->typesplit;
        $rooms->ro_description = $request->notation;
        $rooms->save();
        

        return redirect()->route('titles_Employee.manage_rooms')->with('success', 'แก้ไขข้อมูลห้องสำเร็จ');;
    }
    public function destroy_rooms(Room $rooms)
    {
        // ลบข้อมูลผู้ใช้ออกจากฐานข้อมูล
        $rooms->delete();

        return redirect(route('titles_Employee.manage_rooms'))->with('success', 'ลบข้อมูลห้องสำเร็จ');
    }

    /*manage_account
    create_user
    store_user
    edit_user
    update_user
    destroy_user
    */
    public function manage_account()
    {
        // เรียกดูรายชื่อผู้ใช้ทั้งหมดจากฐานข้อมูล
        $users = User::orderBy('id', 'desc')->paginate(5);
        return view('titles_Employee.manage_account', ['users' => $users]);
    }

    public function create_user()
    {
        // แสดงหน้าฟอร์มสำหรับเพิ่มข้อมูล
        return view('titles_Employee.add_account_user');
    }

    public function store_user(Request $request)
    {
        // ตรวจสอบว่ารหัสผ่านและยืนยันรหัสผ่านตรงกันหรือไม่
        if ($request->password !== $request->confirm_password) {
            return redirect()->back()->withInput()->withErrors(['confirm_password' => 'รหัสผ่านและยืนยันรหัสผ่านไม่ตรงกัน']);
        }

        // ทำการตรวจสอบและบันทึกข้อมูล
        $data = $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'username' => 'required',
            'position' => 'required',
            'password' => 'required'
        ]);

        $newUser = new User;
        $newUser->us_fname = $request->first_name;
        $newUser->us_lname = $request->last_name;
        $newUser->us_email = $request->email;
        $newUser->us_tel = $request->mobile;
        $newUser->us_name = $request->username;
        $newUser->roles = $request->position;
        $newUser->us_password = bcrypt($request->password);
        $newUser->save();

        return redirect()->route('titles_Employee.store');
    }

    public function edit_user(User $user)
    {
        return view('titles_Employee.edit_account_user', ['user' => $user]);
    }

    public function update_user(Request $request, User $user)
    {
        // ทำการอัปเดตข้อมูล
        $data = $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'username' => 'required',
            'position' => 'required',
            'password' => 'required'
        ]);

        $user->us_fname = $request->first_name;
        $user->us_lname = $request->last_name;
        $user->us_email = $request->email;
        $user->us_tel = $request->mobile;
        $user->us_name = $request->username;
        $user->roles = $request->position;
        $user->us_password = bcrypt($request->password);
        $user->save();

        return redirect(route('titles_Employee.manage_account'))->with('success', 'แก้ไขข้อมูลผู้ใช้สำเร็จ');
    }

    public function destroy_user(User $user)
    {
        // ลบข้อมูลผู้ใช้ออกจากฐานข้อมูล
        $user->delete();

        return redirect(route('titles_Employee.manage_account'))->with('success', 'ลบข้อมูลผู้ใช้สำเร็จ');
    }

    }

