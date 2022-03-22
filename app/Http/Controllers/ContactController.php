<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();

        $contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        // $contact->read = 1;
        $contact->save();
        Mail::to($contact->email,$contact->fullname)->send(new ContactSender($contact->fullname,$contact->message));
        return redirect()->back();
    }
}
