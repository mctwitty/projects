@extends('layouts.master')

@section('content')
	<div class="wrapper">
		<div class="row">
			<div class="col-sm-4">
				<img src="https://s3-us-west-1.amazonaws.com/geekweise/message-cup.jpg">
			</div>
			<div class="col-sm-3">
				<div class="signin">
					<form role="form" method="POST" action="/login">
						<div class="form-group">
					    	<label for="username">Email</label>
					    	<input type="email" class="form-control" name="email" id="loginemail" placeholder="Enter Email">
						</div>
						<div class="form-group">
					    	<label for="password">Password</label>
					    	<input type="password" class="form-control" name="password" id="loginpassword" placeholder="Password">
						</div>
						<div class="form-group">
						    <label>
								<input type="checkbox">Remember Me
							</label>
							 &middot;
							 <a href="#">Forgot Password</a>
							 <button type="submit" class="btn btn-primary pull-right">Sign In</button>
						</div>
					</form>
						@if (Session::get('login'))
						<div class="alert alert-warning" role="alert">{{{ Session::get('login') }}}</div>
						@endif
				</div>
				<div class="signup">
					<h2>New to gwaTwitter? Sign Up!</h2>
					<form role="form" method="POST" action="/register">
						<div class="form-group">
							<label for="fullname">Full Name</label>
							<input type="text" class="form-control" name="full_name" placeholder="Enter Full Name">
						</div>
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" class="form-control" name="email" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="newpass">Password</label>
							<input type="password" class="form-control" name="newpass" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-default">Signup for gwaTwitter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop