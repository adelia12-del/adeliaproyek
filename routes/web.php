<?php

use Illuminate\Support\Facades\Route;

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

// Route untuk Home
Route::get('/', function () {
    return view('home'); // Pastikan file view 'home.blade.php' ada di folder resources/views
});

// Route untuk Profile
Route::get('/profile', function () {
    return view('profile'); // File view 'profile.blade.php'
});

// Route untuk About
Route::get('/about', function () {
    return view('about'); // File view 'about.blade.php'
});

// Route untuk Contact
Route::get('/contact', function () {
    return view('contact'); // File view 'contact.blade.php'
});
