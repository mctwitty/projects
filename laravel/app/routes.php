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
	return View::make('landing');
});
Route::post('/login', function()
{
	$username = Input::get('username');
	$password = Input::get('password');
	
	if($username && $password) {
		return Redirect::to('/home');
	} else {
		#TODO flash error back
		return 'Redirect::to('/');'
	}
});
Route::post('/register', function()
{
	$full_name = Input::get('full_name');
	$email = Input::get('email');
	$password = Input::get('newpass');

	if($full_name && $email && $password) {
		#TODO if
		return Redirect::to('/home');
	} else {
		#TODO flash error back
		return Redirect::to('/');
	}
});
Route::get('/home', function()
{
	return "hello";
});