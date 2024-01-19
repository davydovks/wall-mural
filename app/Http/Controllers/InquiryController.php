<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'firstname' => 'required|string',
            'phone' => 'required',
        ]);

        $inquiry = new Inquiry($data);
        $inquiry->save();

        return redirect()->route('home');
    }
}
