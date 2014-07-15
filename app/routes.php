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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/practice', function() {
	
	echo 'Hello World';
	
});

// lorem ipsum routes
Route::get('/lorem', function() {
	
	return View::make('lorem');
	
});

Route::get('/lorem/{number}', function($number) {
	
	$data['number'] = $number;
	return View::make('lorem', $data);
	
});


// random user routes
Route::get('/randusr/{number}', function($number) {
	
	$data['number'] = $number;
	return View::make('randusr', $data);
	
});
