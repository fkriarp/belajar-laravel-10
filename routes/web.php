<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/company', function () {
    return view('company');
})->name('company');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login-register', function () {
    return view('login');
})->name('login');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/features', function () {
    return view('features');
})->name('features');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');


