<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $mailData = [
            'title' => 'Mail From Vertex Co.',
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        $emails = [
            'thamoddyarashmithadissanayake@gmail.com',
            'thamoddya.working@gmail.com',
            'vertexcooperation@gmail.com',
            'rishikamandakini2005@gmail.com',
        ];
        foreach ($emails as $email) {
            Mail::to($email)->send( new ContactMail($mailData));
        }
        return redirect()->route('Contact-Us')->with('success', 'Email sent successfully.');
    }
}
