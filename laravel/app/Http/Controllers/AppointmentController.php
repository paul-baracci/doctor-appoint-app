<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Contracts\Mail\Mailer;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
    public function setappointment(Request $request)
    {
	$request->validate([
	    'name' => 'required',
	    'email' => 'required|email',
	    'phone' => 'required|numeric'

	]);

	$input = $request->all();

	Appointment::created($input);

    	\Mail::send('emails.appointment', 
    	    [
		'name' => $request->input('name'),   
		'email' => $request->input('email'),
		'phone' => $request->input('phone'), 
	    ], 
    		function (Message $message) use ($request) {
	        $message->to('support@augmented.com');
		$message->from('no-reply@augmented.com');
    		$message->subject('Appointment request: ' . $request->input('subject'));
    	});
	
	return back()->with('success', 'Contact Form Submit Successfully');
    }
}
