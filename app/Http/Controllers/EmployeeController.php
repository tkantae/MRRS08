<?php

namespace App\Http\Controllers;

use App\Models\M_titles;
use App\Models\Room;
use App\Models\User;
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

    public function statistics()
    {
        //
        return view('titles_Employee.statistics');
    }

    public function manage_account()
    {
        //
        $users = User::orderBy('us_id','desc')->paginate(5);
        return view('titles_Employee.manage_account',['users' => $users]);
    }

    public function manage_rooms()
    {
        //
        $rooms = Room::orderBy('ro_id')->get();
        return view('titles_Employee.manage_rooms', ['rooms' => $rooms]);
    }

    public function accout()
    {
        //
        return view('titles_Employee.accout');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('titles_Employee.add_accout_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'avatar' => 'image',
        ]);
        $user = new User();
        $user->title_id = $request->title_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        //เช็คไฟล์ภาพ

        $user->save();
        return redirect()->route('manage_account')->with('success', 'User has been added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::find($id);
        return view('editpage', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title_id' => 'required',
            'name' => 'required',
            'email' => 'required',//can 1 mail unique
            'password' => 'required',
            'avatar' => 'image',
        ]);
        $user = User::find($id);
        $title_name = $request->input('title');
        $title = Title::where('tit_name', $title_name)->first();
        $user->title_id = $title ? $title->id : null;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        //เช็คไฟล์ภาพ
        if ($request->hasFile('avatar')) {
            $fileName = time().$request->file('avatar')->getClientOriginalName();
            $avatarPath = $request->file('avatar')->storeAs('avatars',$fileName,'public');
            $user->avatar = '/storage/'.$avatarPath;
        } else{
            $user -> avatar = null;
        }
        $user->save();
        return redirect()->route('homepage')->with('success','company has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('manage_account')->with('success', 'User has been deleted successfully.');

    }
}
