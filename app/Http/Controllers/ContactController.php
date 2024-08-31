<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contact()
    {
        $data = [
            
            'title' => 'Letslearn | Contact Us Today!',
            'description' => 'Get in touch with us! Reach out via phone, email, or our contact form. We`re here to assist you promptly. Connect with us now!',
            'keyword' => '',
        ];
       
        return view('contact', ['data' => $data]);
    }
    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            
            'phone.required' => 'The phone field is required.',
            'message.required' => 'The message field is required.',
        ]);
        
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];
        Mail::to('vikramsuthar.wm@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent successfully');
    }
}
