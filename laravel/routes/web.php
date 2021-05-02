<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[HomeController::class, 'index']);
//Route::get('/services',[IndexController::class, 'services']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/blog',[ArticleController::class, 'index']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::get('/terms',[HomeController::class, 'terms']);
Route::get('/article/{id}',[ArticleController::class, 'show']);
Route::get('/category/{id}',[CategoryController::class, 'show']);
Route::get('/tag/{id}',[TagController::class, 'show']);
