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
Route::get('/', function(){
	
    return View::make('pages.home');
});
Route::get('about', function(){
	
    return View::make('pages.about');
});
<<<<<<< .merge_file_ryRCzd
Route::get('dockets', function(){
	
    return View::make('pages.dockets');
});  
=======
<<<<<<< HEAD
   
Route::get('/contact', function () {
    return view('contact');
=======
Route::get('dockets', function()
{
    return View::make('pages.dockets');
>>>>>>> e480ed9d85c1dc007d6f8e3881f7c606e594a825
});
>>>>>>> .merge_file_r8n6rd
Route::get('selfservice', function()
{
    return View::make('pages.selfservice');
});
Route::get('lucmaps', function()
{
    return View::make('pages.lucmaps');
});
Route::get('contact', function(){
	
    return View::make('pages.contact');
});
<<<<<<< .merge_file_ryRCzd
Route::get('history', function () {
	
    return view('pages.history');
});
Route::get('procedures', function () {
	
    return view('pages.procedures');
});
=======
<<<<<<< HEAD
Route::get('/history', function () {
    return view('individual_pages/about/history/history');
});

Route::get('/index', function () {
    return view('index');
});
=======

>>>>>>> e480ed9d85c1dc007d6f8e3881f7c606e594a825
>>>>>>> .merge_file_r8n6rd
