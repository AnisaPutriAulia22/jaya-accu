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
    return view('user/home');
});

Route::get('/product', function () {
    return view('user/product');
});
Route::get('/account', function () {
    return view('user/account');
});
Route::get('/about', function () {
    return view('user/about');
});
Route::get('/contact', function () {
    return view('user/contact');
});