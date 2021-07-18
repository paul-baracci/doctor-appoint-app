<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\Models\Service;

class CategoryController extends Controller
{
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
        //
    }

    public function articles($id)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $categoryArticles = Article::where('category_id', '=', $id)->paginate(5);  
        
        return view('blog.category', [
            'categoryArticles' => $categoryArticles,
            'categories' => $categories
        ]);
    }
    
    public function services($id)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $categoryServices = Service::where('category_id', '=', $id)->sortable()->paginate(5);       
        return view('services.category', [
            'categoryServices' => $categoryServices,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
