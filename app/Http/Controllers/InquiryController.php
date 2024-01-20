<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Position;
use App\Models\Room;
use App\Rules\PhoneNumber;
use App\Traits\Upload;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    use Upload;

    public function create(Request $request)
    {
        if (empty($request->session()->get('room'))) {
            return redirect()->route('quiz1.create');
        }
        if (empty($request->session()->get('position'))) {
            return redirect()->route('quiz4.create');
        }
        return view('request');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'firstname' => 'required|string',
            'phone' => ['required', new PhoneNumber()],
            'file' => 'required|image|max:20000',
        ]);

        $inquiry = new Inquiry($data);
        $room = Room::find($request->session()->get('room'));
        $position = Position::find($request->session()->get('position'));
        $inquiry->room()->associate($room);
        $inquiry->position()->associate($position);
        if ($request->hasFile('file')) {
            $path = $this->uploadFile($request->file('file'), 'UserPhoto');
            $inquiry->file = $path;
        }
        $inquiry->save();

        return redirect()->route('home')->with('modal', 'true');
    }
}
