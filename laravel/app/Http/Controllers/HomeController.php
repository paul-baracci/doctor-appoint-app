<?php

namespace App\Http\Controllers;

use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
	return view ('index' , [
            'popularServices' => Service::where('requests', '>', '0')
                ->orderBy('requests', 'desc')
                ->get(),
	    'recentServices' => Service::orderBy('created_at', 'desc')->get()
	]);
    }

    public function terms()
    {
    	return view('terms');
    }
}
