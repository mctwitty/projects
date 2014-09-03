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
	if(Auth::check()){
		return Redirect::to('/home');
	}
	return View::make('landing');
});
Route::get('/home', function() {
	return View::make('home');
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

	if(empty($email) || empty($full_name) || empty($password)) {
	    Session::flash('register', 'email, fullname, or password invalid/missing');
		return Redirect::to('/');	
	}
	$user = User::where('email', '=', $email)->first();
	if ($user === null) {
		# new user, register them
		$user = new User;
		$user->email = $email;
		$user->full_name = $full_name;
		$user->password = Hash::make($password);
		$user->save();

		#TODO Set isAuthenticated session
		return Redirect::to('/home');	
	} else {
		# user with this email is already registered
	    Session::flash('register', "$email is already registered");
	    return Redirect::to('/');	
	}
});
// Route::get('/home', function() {
// 	return "hello";
// });