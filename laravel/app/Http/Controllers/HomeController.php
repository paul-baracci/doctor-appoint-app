<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
	$popularServices = Service::orderBy('requests', 'desc')->get();
	$recentServices = Service::orderBy('created_at', 'desc')->get();

	return view ('index' , [
	    'popularServices' => $popularServices ,
	    'recentServices' => $recentServices,
	]);
    }

    public function recent()
    {
	return view('index');
    }

    public function about()
    {
    	return view('about');
    }

    public function terms()
    {
    	return view('terms');
    }
}
