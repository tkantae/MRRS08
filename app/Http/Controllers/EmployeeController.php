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
    public function storeUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'us_fname' => 'required',
            'us_lname' => 'required',
            'us_email' => 'required',
            'us_tel' => 'required',
            'us_name' => 'required',
            'roles' => 'required',
            'us_password' => 'required',
        ]);
        $user = new User();
        $user->us_fname = $request->us_fname;
        $user->us_lname = $request->us_lname;
        $user->us_email = $request->us_email;
        $user->us_tel = $request->us_tel;
        $user->us_name = $request->us_name;
        $user->roles = $request->roles;
        $user->password = bcrypt($request->password);
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
    public function editUser(string $id)
    {
        $users = User::find($id);
        return view('editpage', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateUser(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title_id' => 'required',
            'name' => 'required',
            'email' => 'required',//can 1 mail unique
            'password' => 'required',
            'avatar' => 'image',
        ]);
        $user = User::find($id);
        $user->us_fname = $request->us_fname;
        $user->us_lname = $request->us_lname;
        $user->us_email = $request->us_email;
        $user->us_tel = $request->us_tel;
        $user->us_name = $request->us_name;
        $user->roles = $request->roles;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('homepage')->with('success','company has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyUser(string $id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('manage_account')->with('success', 'User has been deleted successfully.');

    }


    public function manage_rooms()
    {
        //
        $rooms = Room::orderBy('ro_id','desc')->paginate(5);
        return view('titles_Employee.manage_rooms', ['rooms' => $rooms]);
    }


}
