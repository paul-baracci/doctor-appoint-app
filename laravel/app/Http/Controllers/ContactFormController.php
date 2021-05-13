<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Contracts\Mail\Mailer;

class ContactFormController extends Controller
{
private Mailer $mailer;

public function __construct(Mailer $mailer)
	{
		$this->mailer = $mailer;
	}

    public function __invoke(Request $request)
    {
//use form request and validate

    	$this->mailer->send('emails.email', 
    		[
    		 'content' => $request->input('message'), 
    		 'email' => $request->input('email'),
    		], 
    		function (Message $message) use ($request) {
    		$message->to('alo@alo.com');
    		$message->subject('Test subject');
    	});
    }
    public function contact()
    {
    	return view('contact');
    }
}
