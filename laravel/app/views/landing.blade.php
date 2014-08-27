@extends('layouts.master')

@section('content')
	<div class="wrapper">
		<div class="row">
			<div class="col-sm-4">
				<img src="https://s3-us-west-1.amazonaws.com/geekweise/message-cup.jpg">
			</div>
			<div class="col-sm-3">
				<div class="signin">
					<form role="form" method="post" action="/login">
						<div class="form-group">
					    	<label for="username">Username</label>
					    	<input type="text" class="form-control" id="username" placeholder="Enter Username">
						</div>
						<div class="form-group">
					    	<label for="password">Password</label>
					    	<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-default" id="signin_button">Submit</button>
						<div class="checkbox">
						    <label>
								<input type="checkbox">Remember Me &middot; <a href="#">Forgot Password</a>
							</label>
						</div>
					</form>
				</div>
				<div class="signup">
					<h2>New to gwaTwitter? Sign Up!</h2>
					<form role="form" method="post" action="/register">
						<div class="form-group">
							<label for="fullname">Full Name</label>
							<input type="text" class="form-control" id="full_name" placeholder="Enter Full Name">
						</div>
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" class="form-control" id="email" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="newpass">Password</label>
							<input type="password" class="form-control" id="newpass" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-default">Signup for gwaTwitter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop