<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'comment' => 'required',
            'desired_date' => 'required',
            'desired_time' => 'required'
        ]);

        Appointment::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'comment' => $request->input('comment'),
            'service_id' => $request->input('service_id'),
            'desired_date' => $request->input('desired_date'),
            'desired_time' => $request->input('desired_time'),
        ]);

        \Mail::send('emails.appointment',
            [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'comment' => $request->input('comment'),
                'service_id' => $request->input('service_id'),
                'service' => $request->input('service'),
                'desired_date' => $request->input('desired_date'),
                'desired_time' => $request->input('desired_time'),
            ],
            function (Message $message) use ($request) {
                $message->to('support@augmented.com');
                $message->from('no-reply@augmented.com');
                $message->subject('Appointment request: ' . $request->input('service'));
            });
        
        Service::where('id', '=', $request->input('service_id'))->increment('requests');

        return back()->with('alert', json_encode([
            'type' => 'success',
            'message' => 'Thank you for your request. We will call you shortly to confirm your appointment.'
        ]));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
