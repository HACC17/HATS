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
//========================================
//============MAIN NAVIGATION=============
//========================================
Route::get('/', function(){
	
    return View::make('pages.home');
});
Route::get('about', function(){
	
    return View::make('pages.about');
});
<<<<<<< .merge_file_lLoPKg
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
>>>>>>> .merge_file_CWWEmg
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

//========================================
//===============ABOUT====================
//========================================
});
Route::get('history', function () {
	
    return View::make('pages.history');
});
Route::get('procedures', function () {
	
    return View::make('pages.procedures');
});
<<<<<<< HEAD
Route::get('/history', function () {
    return view('individual_pages/about/history/history');
});

Route::get('/index', function () {
    return view('index');
});
=======

<<<<<<< .merge_file_lLoPKg
//========================================
//===============SELF SERVICE=============
//========================================
Route::get('faq', function()
{
    return View::make('pages.faq');
});
Route::get('first_time', function()
{
    return View::make('pages.first_time');
});
Route::get('returning', function()
{
    return View::make('pages.returning');
});
=======
>>>>>>> e480ed9d85c1dc007d6f8e3881f7c606e594a825
>>>>>>> .merge_file_CWWEmg
