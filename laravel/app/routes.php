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

Route::get('/', function() {
	return View::make('landing');
});
Route::post('/login', function() {
	$email = Input::get('email');
	$password = Input::get('password');
	
	if($email && $password) {
		#TODO redirect to home if email and password authenticates
		return Redirect::to('/home');
	} else {
		#TODO flash error back
		Session::flash('login', 'Username or password invalid.');
		return Redirect::to('/');
	}
});
Route::post('/register', function() {
	$full_name = Input::get('full_name');
	$email = Input::get('email');
	$password = Input::get('newpass');

	if($full_name && $email && $password) {
		#TODO if successfully inserted into database
		return Redirect::to('/home');
	} else {
		#TODO flash error back
		return Redirect::to('/');
	}
});
Route::get('/home', function() {
	return "hello";
});