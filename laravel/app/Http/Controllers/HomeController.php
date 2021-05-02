<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
    	return view('index');
    }
    public function services()
    {
        $services = Service::all();

    	return view('services', [
            'services' => $services
        ]);
    }
    public function about()
    {
    	return view('about');
    }
    
    public function contact()
    {
    	return view('contact');
    }
    public function terms()
    {
    	return view('terms');
    }
}
