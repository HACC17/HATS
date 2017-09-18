
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
//========================================
//================DOCKETS=================
//========================================
Route::get('dockets', function(){
	
    return View::make('pages.dockets');
});
Route::get('pending', function(){
	
    return View::make('pages.pending');
}); 
Route::get('completed', function(){
	
    return View::make('pages.completed');
}); 
Route::get('search', function(){
	
    return View::make('pages.search');
}); 
Route::get('results', function(){
	
    return View::make('pages.results');
}); 
Route::get('upload', function(){
	
    return View::make('pages.upload_form');
}); 
Route::post('upload', function(){
	
    return View::make('pages.upload');
}); 
Route::get('selfservice', function()
{
    return View::make('pages.selfservice');
<<<<<<< HEAD
=======

>>>>>>> master
});
Route::get('upload', function()
{
    return View::make('pages.upload');
});
//========================================
//===============ABOUT====================
//========================================

Route::get('about', function(){
	
    return View::make('pages.about');
});
Route::get('history', function () {
	
    return View::make('pages.history');
});
Route::get('members', function () {
	
    return View::make('pages.members');
});
Route::get('state_land_use_districts', function () {
	
    return View::make('pages.state_land_use_districts');
});
//========================================
//===============SELF SERVICE=============
//========================================
Route::get('selfservice', function()
{
    return View::make('pages.selfservice');
});
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
//========================================
//===============PROCEDURES===============
//========================================
Route::get('procedures', function () {
	
    return View::make('pages.procedures');
});
//========================================
//===============LUC MAPS=================
//========================================
Route::get('lucmaps', function()
{
    return View::make('pages.lucmaps');
});
//========================================
//===============CONTACT=================
//========================================
Route::get('contact', function(){
	
    return View::make('pages.contact');
});
