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
use App\Http\Controllers\CommentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('about',[DoctorController::class, 'index'])->name('doctors.index');
Route::get('tags/{tag}',[TagController::class, 'show'])->name('tags.show');
Route::get('contact',[ContactFormController::class, 'index'])->name('contact.index');
Route::post('contact',[ContactFormController::class, 'send'])->name('contact.send');
Route::get('terms',[HomeController::class, 'terms'])->name('terms');

Route::resource('services', ServiceController::class);
Route::post('/services/{service}/schedule',[AppointmentController::class, 'store'])->name('schedule');
Route::get('services/categories/{category}',[CategoryController::class, 'services'])->name('categories.services');

Route::resource('articles', ArticleController::class);
Route::post('articles/{article}/comments',[CommentController::class, 'store'])->name('comments.store');
Route::get('articles/categories/{category}',[CategoryController::class, 'articles'])->name('categories.articles');
