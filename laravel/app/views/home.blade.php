@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-sm-4" id="profile_box">
			<p>Username</p>
			<p>@user</p>
			<div class="col-sm-4">
				<p>Messages</p>
				<p>0</p>
			<div class='centered'>
				<textarea rows='4' name='tweet' id="tweetbox">
				</textarea>
			</div>
			<button type="submit" class="btn btn-default">Submit Tweet</button>
		</div>
		<div class='col-sm-8' id='tweet_stream'>
			tweets go here
		</div>
	</div>
</div>
@stop