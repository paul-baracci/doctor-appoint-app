<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\AppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/',[HomeController::class, 'index']);
Route::post('/',[AppointmentController::class, 'setappointment']);
//Route::get('services',[ServiceController::class, 'index']);
//Route::post('services',[AppointmentController::class, 'setappointment']);
//Route::get('services/{id}',[ServiceController::class, 'show']);

Route::resource('services',ServiceController::class); // rename services

Route::get('/about',[HomeController::class, 'about']);
Route::get('/about',[DoctorController::class, 'index']);

Route::get('/articles',[ArticleController::class, 'index']);
Route::get('/articles/{id}',[ArticleController::class, 'show']);
Route::get('/categories/{id}',[CategoryController::class, 'show']);
Route::get('/tags/{id}',[TagController::class, 'show']);

Route::get('/contact',[ContactFormController::class, 'contact']);
Route::post('/contact',[ContactFormController::class, 'contactform']);

Route::get('/terms',[HomeController::class, 'terms']);

