<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact.index');
    }

    // public function sendEmail(Request $request)
    // {
    //     $details = [
    //         'name' => $request->name,
    //         'email'=> $request->email,
    //         'company'=> $request->company,
    //         'phone'=> $request->phone,
    //         'business'=> $request->business,
    //         'msg'  => $request->msg

    //     ];
    //     Mail::to('6150110068@psu.ac.th')->send(new ContactMail($details));
    //     return back()->with('Message_sent','You contact has been sent successfully!');
    // }
}
