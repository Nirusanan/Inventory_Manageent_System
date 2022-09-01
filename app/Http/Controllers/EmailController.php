<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class EmailController extends Controller
{
    public function testMail(Request $request)
    {
        
        $request->validate(['reciepient_email' => 'required']);
        // echo $request->reciepient_email;

        $information='Today cancel the meeting';
        Mail::to($request->reciepient_email)->send(new SendMail($information));

        return redirect()->back()->withSuccess('Mail Sent Successfully!');
    }
}
