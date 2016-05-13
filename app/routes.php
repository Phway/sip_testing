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

Route::get('about', function()
{
	return View::make('about');
});

<<<<<<< HEAD
Route::get('help', function()
{
	return View::make('help');
=======
Route::get('contact', function()
{
	return View::make('contact');
>>>>>>> Phway_Branch2
});
