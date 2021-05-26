<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ContactUsMailer;

class ContactFormController extends Controller
{
    private ContactUsMailer $mailer;

    public function __construct(ContactUsMailer $mailer)
    {
	$this->mailer = $mailer;	
    }

    public function __invoke(Request $request)
    {
    	$this->mailer->send($request->all());

	return back()->with('success', 'Contact form submittted successfully');
    }

}
