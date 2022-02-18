<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);
        Mail::to(request('email'))
            // ->send(new ContactMe('Zabuza momochi'));
            ->send(new Contact());

        return redirect('/contact')->with('message', 'Email sent!');
    }
}
