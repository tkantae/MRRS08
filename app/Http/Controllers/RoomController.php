<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
    }
}
