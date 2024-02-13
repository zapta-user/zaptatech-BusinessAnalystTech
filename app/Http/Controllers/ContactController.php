<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
        $contact =  Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'message' => $request->message
        ]);
        $admin_email = ['ateeqasif1168@gmail.com'];
        Mail::send(new ContactMail($contact, $request->email, 'user'));
        Mail::send(new ContactMail($contact, $admin_email, 'admin'));
        return response()->json(['message' => 'Contact form sent Successfully']);
    }
}
