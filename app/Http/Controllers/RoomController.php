<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create()
    {
        $cards = Room::where('active', true)->orderBy('id')->get();
        return view('quiz1', compact('cards'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'room' => 'required'
        ]);

        $request->session()->put('room', $data['room']);

        return redirect()->route('quiz4.create');
    }
}
