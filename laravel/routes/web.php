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

Route::get('/about', function () {
    return view('about');
});

   
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dockets', function () {
    return view('dockets');
});

Route::get('/dockets', function () {
    return view('dockets');
});

Route::get('/lucMaps', function () {
    return view('lucMaps');
});

Route::get('/self-service', function () {
    return view('self-service');
});
