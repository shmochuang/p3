<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// landing page
Route::get('/', function()
{
	return View::make('index');
});



// lorem ipsum routes
Route::get('/lorem', function() {
	
	return View::make('loremform');
	
});

Route::post('/lorem', function() {
	
	return View::make('lorem');
	
});


// random user routes
Route::get('/randusr', function() {
	
	return View::make('randusrform');
	
});

Route::post('/randusr', function() {
	
	return View::make('randusr');
	
});