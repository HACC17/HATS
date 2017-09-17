
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
Route::get('members', function () {
	
    return View::make('pages.members');
});
Route::get('state_land_use_districts', function () {
	
    return View::make('pages.state_land_use_districts');
});
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
<<<<<<< HEAD

=======
//========================================
//===============PROCEDURES=============
//========================================
Route::get('procedures', function () {
	
    return View::make('pages.procedures');
});
>>>>>>> e2d6d2376f0cd172606fe2cd06049fb63fe75074
