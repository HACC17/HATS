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

Route::get('dockets', function(){
	
    return View::make('pages.dockets');
});  

>>>>>>> dev-gabe
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
});

Route::get('procedures', function () {
	
    return view('pages.procedures');
});
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dev-gabe
=======
=======

>>>>>>> cc17c2cff106f8a99e37368b031c507270a410f7
>>>>>>> dev-qat
>>>>>>> fe555827d175ad2a77ff4bede5e2152bb80356e0
=======
>>>>>>> dev-gabe
>>>>>>> 558c71b7a7ffd43338400f122d83beacc8087976
