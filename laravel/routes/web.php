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

Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
<<<<<<< HEAD
Route::get('dockets', function()
{
    return View::make('pages.dockets');
=======
<<<<<<< HEAD
   
Route::get('/contact', function () {
    return view('contact');
=======
Route::get('dockets', function()
{
    return View::make('pages.dockets');
>>>>>>> cc17c2cff106f8a99e37368b031c507270a410f7
>>>>>>> dev-qat
});
Route::get('selfservice', function()
{
    return View::make('pages.selfservice');
});
Route::get('lucmaps', function()
{
    return View::make('pages.lucmaps');
<<<<<<< HEAD
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});

=======
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});
<<<<<<< HEAD
Route::get('/history', function () {
    return view('individual_pages/about/history/history');
});

Route::get('/index', function () {
    return view('index');
});
=======

>>>>>>> cc17c2cff106f8a99e37368b031c507270a410f7
>>>>>>> dev-qat
