<?php

namespace Sumanraj\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Sumanraj\Contact\Mail\ContactMail;
use Sumanraj\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contactform');
    }

    public function save_contact(Request $request)
    {
        Contact::create($request->all());
        Mail::to(config('contactconfig.send_to'))->send(new ContactMail($request->fullname, $request->message));
        return redirect(route('contact'));
    }
}
