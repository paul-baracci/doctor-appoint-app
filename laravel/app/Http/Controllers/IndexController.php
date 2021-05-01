<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Service;

class IndexController extends Controller
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
    public function blog()
    {

	$articles = Article::all();
	return view('blog', [
	    'articles' => $articles
	
	]);

    }
    public function contact()
    {
    	return view('contact');
    }
    public function terms()
    {
    	return view('terms');
    }
    public function article()
    {
        return view ('article');
    }
}
