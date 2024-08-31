<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderDetailsMail;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders');
    }
    public function submitOrder(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'deadline' => 'required|date',
            'doc.*' => 'file|mimes:pdf,doc,docx,txt,jpg,jpeg,png,gif,mp4,mov,avi,mkv,mp3,wav',
        ]);

        $details = $request->all();
        $details['files'] = $request->file('doc');

        // Mail::to('vikramsuthar.wm@gmail.com')->send(new OrderDetailsMail($details));
        try {
            Mail::to('vikramsuthar.wm@gmail.com')->send(new OrderDetailsMail($details));
        } catch (\Exception $e) {
            return back()->with('error', 'Oops! Something went wrong while sending the email. Please try again.');
            // return back()->with('error', 'Failed to send email! ' . $e->getMessage());
        }

        return back()->with('success', 'Order placed successfully!');
    }
}
