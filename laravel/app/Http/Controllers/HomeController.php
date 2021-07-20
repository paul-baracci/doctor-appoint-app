<?php

namespace App\Http\Controllers;

use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {

        return view ('index' , [
            'popularServices' => Service::has('appointments', '>', 1)
                ->withCount('appointments')->get(),
	    'recentServices' => Service::orderBy('created_at', 'desc')->get()
	]);
    }

    public function terms()
    {
    	return view('terms');
    }

}
