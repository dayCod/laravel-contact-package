<?php

namespace DayCod\Contact\http\controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DayCod\Contact\Models\Contact;
use DayCod\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact-page');
    }

    public function send(Request $request)
    {
        Mail::to($request->email)->send(new ContactMailable($request->message, $request->name));

        Contact::create($request->except('_token'));

        return redirect()->route('contact-page');
    }
}
