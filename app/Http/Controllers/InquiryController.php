<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function createStep1()
    {
        return view('quiz1');
    }

    public function storeStep1(Request $request)
    {
        $data = $request->validate([
            'room' => 'required'
        ]);

        $request->session()->put('room', $data['room']);

        return redirect()->route('inquiries.create4');
    }

    public function createStep4()
    {
        return view('quiz4');
    }

    public function storeStep4(Request $request)
    {
        $data = $request->validate([
            'position' => 'required'
        ]);

        $request->session()->put('position', $data['position']);

        return redirect()->route('inquiries.create');
    }

    public function create()
    {
        return view('request');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'firstname' => 'required|string',
            'phone' => 'required',
        ]);

        $inquiry = new Inquiry($data);
        $inquiry->room_id = $request->session()->get('room');
        $inquiry->position_id = $request->session()->get('position');
        $inquiry->save();

        return redirect()->route('home');
    }
}
