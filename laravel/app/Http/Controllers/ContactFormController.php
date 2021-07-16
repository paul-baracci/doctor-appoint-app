<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Contracts\Mail\Mailer;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required',
        ]);

        \Mail::send('emails.email',
            [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'content' => $request->input('content'),
            ],
            function (Message $message) use ($request) {
                $message->to('support@augmented.com');
                $message->from('no-reply@augmented.com');
                $message->subject('Contact Form: ' . $request->input('subject'));
            });

        return back()->with('alert', json_encode([
            'type' => 'success',
            'message' => 'Thank you for contacting us! We will get back to you as soon as possible.'
        ]));
    }
}
