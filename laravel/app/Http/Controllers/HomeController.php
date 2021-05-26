<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
	$services = Service::orderBy('requests', 'desc')
			    ->limit(3)
			    ->get();
	$recentServices = Service::orderBy('created_at', 'desc')
			    ->limit(3)
			    ->get();
	
	return view ('index' , [
	    'services' => $services ,
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
