<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category()
    {

	$categories = Category::all();
			return view('categories', ['categories' => DB::table('categories')
	    			->orderBy('name')
	]);

    }
}
