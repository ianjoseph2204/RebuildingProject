<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function create(Request $request)
    {
        $inquiry = new Inquiry([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'title' => $request->input('title'),
            'message' => $request->input('message')
        ]);

        $inquiry->save();
        return redirect('/contact
        ');
    }
}
