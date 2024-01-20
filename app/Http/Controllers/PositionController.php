<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function create(Request $request)
    {
        if (empty($request->session()->get('room'))) {
            return redirect()->route('quiz1.create');
        }

        $cards = Position::where('active', true)->orderBy('id')->get();
        return view('quiz4', compact('cards'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'position' => 'required'
        ]);

        $request->session()->put('position', $data['position']);

        return redirect()->route('inquiries.create');
    }
}
