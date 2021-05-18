<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
	$services = Service::sortable()
			    ->paginate(3);
	
	return view ('index' , [
	    'services' => $services ,
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
