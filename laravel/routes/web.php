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
<<<<<<< HEAD
<<<<<<< HEAD
//========================================
//============MAIN NAVIGATION=============
//========================================
Route::get('/', function()
{
=======

Route::get('/', function(){
	
>>>>>>> d8ecfb73ec58e5330bf6a8a789d9c51b6752ee41
=======
//========================================
//============MAIN NAVIGATION=============
//========================================
Route::get('/', function(){
	
>>>>>>> e9729107b15305da204a366f2d92b454251c62ae
    return View::make('pages.home');
});
Route::get('about', function(){
	
    return View::make('pages.about');
});
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('dockets', function()
{
    return View::make('pages.dockets');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('dockets', function()
{
    return View::make('pages.dockets');
=======
   
Route::get('/contact', function () {
    return view('contact');
>>>>>>> dev-gabe
=======
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
>>>>>>> fe555827d175ad2a77ff4bede5e2152bb80356e0
>>>>>>> 558c71b7a7ffd43338400f122d83beacc8087976
});
=======

=======
>>>>>>> e9729107b15305da204a366f2d92b454251c62ae
Route::get('dockets', function(){
	
    return View::make('pages.dockets');
});  
<<<<<<< HEAD

>>>>>>> dev-gabe
=======
>>>>>>> e9729107b15305da204a366f2d92b454251c62ae
Route::get('selfservice', function()
{
    return View::make('pages.selfservice');
});
Route::get('lucmaps', function()
{
    return View::make('pages.lucmaps');
});
<<<<<<< HEAD
Route::get('contact', function()
{
    return View::make('pages.contact');
});
<<<<<<< HEAD
=======

=======
});

Route::get('contact', function(){
	
    return View::make('pages.contact');
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> fe555827d175ad2a77ff4bede5e2152bb80356e0
Route::get('/history', function () {
    return view('individual_pages/about/history/history');
=======

Route::get('history', function () {
	
    return view('pages.history');
>>>>>>> dev-gabe
=======
Route::get('contact', function(){
	
    return View::make('pages.contact');

//========================================
//===============ABOUT====================
//========================================
});
Route::get('history', function () {
	
    return View::make('pages.history');
>>>>>>> e9729107b15305da204a366f2d92b454251c62ae
});
Route::get('procedures', function () {
	
<<<<<<< HEAD
    return view('pages.procedures');
});
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dev-gabe
=======
=======

<<<<<<< HEAD
=======
    return View::make('pages.procedures');
});

>>>>>>> e9729107b15305da204a366f2d92b454251c62ae
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
>>>>>>> cc17c2cff106f8a99e37368b031c507270a410f7
>>>>>>> dev-qat
>>>>>>> fe555827d175ad2a77ff4bede5e2152bb80356e0
=======
>>>>>>> dev-gabe
>>>>>>> 558c71b7a7ffd43338400f122d83beacc8087976
>>>>>>> d8ecfb73ec58e5330bf6a8a789d9c51b6752ee41
