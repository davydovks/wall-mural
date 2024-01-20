<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Inquiry;
use App\Rules\PhoneNumber;
use App\Traits\Upload;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    use Upload;

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

    public function createStep4(Request $request)
    {
        if (empty($request->session()->get('room'))) {
            return redirect()->route('inquiries.create1');
        }
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

    public function create(Request $request)
    {
        if (empty($request->session()->get('room'))) {
            return redirect()->route('inquiries.create1');
        }
        if (empty($request->session()->get('position'))) {
            return redirect()->route('inquiries.create4');
        }
        return view('request');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'firstname' => 'required|string',
            'phone' => ['required', new PhoneNumber],
            'file' => 'required',
        ]);

        $inquiry = new Inquiry($data);
        $inquiry->room_id = $request->session()->get('room');
        $inquiry->position_id = $request->session()->get('position');
        if ($request->hasFile('file')) {
            $path = $this->uploadFile($request->file('file'), 'UserPhoto');
            $inquiry->file = $path;
        }
        $inquiry->save();

        return redirect()->route('home')->with('modal','true');
    }
}
