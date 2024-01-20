<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create()
    {
        return view('quiz1');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'room' => 'required'
        ]);

        $request->session()->put('room', $data['room']);

        return redirect()->route('inquiries.create4');
    }
}
