
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
<<<<<<< HEAD
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
=======
Route::get('dockets', function(){
	
    return View::make('pages.dockets');
});  
>>>>>>> 2091b6ccd6716e61e8ad766b1e788c1046dc4742
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
>>>>>>> 2091b6ccd6716e61e8ad766b1e788c1046dc4742
