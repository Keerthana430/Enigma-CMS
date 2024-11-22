<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get("/", [HomeController::class , 'home'])->name('home');
Route::get("/about", [HomeController::class , 'about'])->name('about');
Route::get('/courses', [HomeController::class , 'course'])->name('courses');
Route::get('/events',[HomeController::class, 'events'])->name('events');
Route::get('/students',[HomeController::class, 'students'])->name('students');
Route::get('/faculties', [HomeController::class ,'faculties'])->name('faculties');
Route::get('/activities', [HomeController::class ,'activities'])->name('activities');
Route::get('/contact', [HomeController::class ,'contact'])->name('contact');
Route::get('/gallery', [HomeController::class ,'gallery'])->name('gallery');
Route::get('blog', [HomeController::class ,'blog'])->name('blog');
Route::get('/login', [AuthController::class ,'login'])->name('login');
Route::get('/register', [AuthController::class ,'register'])->name('register');