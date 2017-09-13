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
   
Route::get('/contact', function () {
    return view('contact');
>>>>>>> dev-gabe
});
Route::get('selfservice', function()
{
    return View::make('pages.selfservice');
});
Route::get('lucmaps', function()
{
    return View::make('pages.lucmaps');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});
<<<<<<< HEAD

=======
Route::get('/history', function () {
    return view('individual_pages/about/history/history');
});

Route::get('/index', function () {
    return view('index');
});
>>>>>>> dev-gabe
