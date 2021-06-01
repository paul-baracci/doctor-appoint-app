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
use App\Http\Middleware\LoggingMiddleware;
use App\Services\ContactUsMailer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/',[HomeController::class, 'index']);
Route::post('/',[AppointmentController::class, 'setAppointment']);

Route::get('/services',[ServiceController::class, 'services']);
Route::post('/services',[AppointmentController::class, 'setAppointment']);
Route::get('/service/{id}',[ServiceController::class, 'service']);

Route::get('/about',[HomeController::class, 'about']);
Route::get('/about',[DoctorController::class, 'index']);

Route::get('/blog',[ArticleController::class, 'index']);
Route::get('/article/{id}',[ArticleController::class, 'show']);
Route::get('/category/{id}',[CategoryController::class, 'show']);
Route::get('/tag/{id}',[TagController::class, 'show']);

Route::get('/contact', [ 'uses' => function () {
    return view ('contact');
}, 'middleware' => LoggingMiddleware::class]);

Route::post('/contact', ContactFormController::class);

Route::get('/terms',[HomeController::class, 'terms']);

