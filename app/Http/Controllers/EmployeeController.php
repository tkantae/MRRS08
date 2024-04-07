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
    public function statistics()
    {
        //
        return view('titles_Employee.statistics');
=======

    // หน้าสถิติการจอง
    public function statistics(){
        $data = [
            'user_count' => User::count(),
            'room_count' => Room::count(),
        ];
        return view('titles_Employee.statistics' , compact('data'));
>>>>>>> Stashed changes
    }


    public function manage_account()
    {
        //
        $users = User::orderBy('us_id','desc')->paginate(5);
        return view('titles_Employee.manage_account',['users' => $users]);
    }

    public function manage_rooms()
    {
<<<<<<< Updated upstream
        
        $rooms = Room::orderBy('id','desc')->paginate(5);
=======

        $rooms = Room::all();
>>>>>>> Stashed changes
        return view('titles_Employee.manage_rooms',['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_room()
    {
        return view('titles_Employee.add_rooms');
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
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
    }

    public function accout()
    {
        //
        return view('titles_Employee.accout');
    }



<<<<<<< Updated upstream
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
=======





    /*manage_account
    create_user
    store_user
    edit_user
    update_user
    destroy_user
    */

    public function create_user()
    {
        // แสดงหน้าฟอร์มสำหรับเพิ่มข้อมูล
>>>>>>> Stashed changes
        return view('titles_Employee.add_account_user');
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     */

     public function edit(User $user)
    {
        return view('titles_Employee.edit_account_user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $us_id)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'username' => 'required',
            'position' => 'required',
            'password' => 'required'
        ]);

        $newUser = User::find($us_id);
        $newUser->us_fname = $request->first_name;
        $newUser->us_lname = $request->last_name;
        $newUser->us_email = $request->email;
        $newUser->us_tel = $request->mobile;
        $newUser->us_name = $request->username;
        $newUser->roles = $request->position;
        $newUser->us_password = bcrypt($request->password);
        $newUser->save();
        return redirect()->route('titles_Employee.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('titles_Employee.manage_account');

    }

}

