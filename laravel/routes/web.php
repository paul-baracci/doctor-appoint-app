<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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
Route::get('/',[IndexController::class, 'index']);
Route::get('services',[IndexController::class, 'services']);
Route::get('about',[IndexController::class, 'about']);
Route::get('blog',[IndexController::class, 'blog']);
Route::get('contact',[IndexController::class, 'contact']);
Route::get('terms',[IndexController::class, 'terms']);
Route::get('article',[IndexController::class, 'article']);
