<?php

namespace App\Http\Controllers;

use App\Models\M_titles;
use App\Models\Room;
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
        return view('titles_Employee.manage_account');
    }

    public function manage_rooms()
    {
        //

        return view('titles_Employee.manage_rooms');
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //.

    }
}
