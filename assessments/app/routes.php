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
Route::get('users', function()
{
    return View::make('users');
<<<<<<< HEAD
});

Route::get('admin', function()
{
    return View::make('users');
=======
>>>>>>> 4dacf007ab4c33609b1b924098ba20b0ee6c85c8
});


Route::get('/', function()
{
	return View::make('hello');
});