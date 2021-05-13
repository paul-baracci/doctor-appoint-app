<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ContactFormController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/',[HomeController::class, 'index']);
Route::get('/services',[ServiceController::class, 'services']);
Route::get('/service/{id}',[ServiceController::class, 'service']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/blog',[ArticleController::class, 'index']);

Route::get('/contact',[ContactFormController::class, 'contact']);
Route::post('/contact',ContactFormController::class);

Route::get('/terms',[HomeController::class, 'terms']);
Route::get('/article/{id}',[ArticleController::class, 'show']);
Route::get('/category/{id}',[CategoryController::class, 'show']);
Route::get('/tag/{id}',[TagController::class, 'show']);