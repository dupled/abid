<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/about', function () {
    return view('about');
});
Route::prefix('/contact')->group(function () {
    Route::get('/', function () {
        return view('contact');
    });
    Route::get('/contact-us', function () {
        return view('contact-us');
    });
});