<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
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
