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
use App\Services\ContactUsMailer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/',[HomeController::class, 'index'])
    ->middleware('logger');
Route::post('/',[AppointmentController::class, 'setAppointment'])
    ->middleware('logger');

Route::get('/services',[ServiceController::class, 'services'])
    ->middleware('logger');
Route::post('/services',[AppointmentController::class, 'setAppointment'])
    ->middleware('logger');
Route::get('/service/{id}',[ServiceController::class, 'service'])
    ->middleware('logger');

Route::get('/about',[HomeController::class, 'about'])
    ->middleware('logger');
Route::get('/about',[DoctorController::class, 'index'])
    ->middleware('logger');

Route::get('/blog',[ArticleController::class, 'index'])
    ->middleware('logger');
Route::get('/article/{id}',[ArticleController::class, 'show'])
    ->middleware('logger');
Route::get('/category/{id}',[CategoryController::class, 'show'])
    ->middleware('logger');
Route::get('/tag/{id}',[TagController::class, 'show'])
    ->middleware('logger');

Route::get('/contact', function () {
    return view ('contact');
})->middleware('logger');

Route::post('/contact', ContactFormController::class)
    ->middleware('logger');

Route::get('/terms',[HomeController::class, 'terms'])
    ->middleware('logger');

