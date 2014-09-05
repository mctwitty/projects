@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-sm-4" id="profile_box">
			<h3>{{{ $first_name }}}</h3>
			<div class="col-sm-4">
				<p>Messages</p>
				<p>0</p>
			</div>
			<div class="col-sm-4">
				<p>Following</p>
				<p>0</p>
			</div>
			<div class='col-sm-4'>
				<p>Followers</p>
				<p>0</p>
			</div>
			<form role="form" method="POST" action="/message">
				<div class='centered'>
					<textarea rows='4' name='body' id="tweetbox"></textarea>
				</div>
				<button type="submit" class="btn btn-default">Submit Tweet</button>
			</form>
		</div>
		<div class='col-sm-8'>
			<h3>tweets</h3>
			<ul>
				@foreach ($messages as $message)
					<li class="list-group-item">
						<div>
							<a class="pull-left" href="#">
							<img class="media-object" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" alt="...">
							</a>
							<form method="post" action="/message/delete/{{ $message->id }}">
								<button type="submit" class="btn-link pull-right">X</button>
							</form>
							<div>
								<h4>{{ $message->user->full_name }}</h4>
								{{ $message->body }}
							</div>
						</div>
					</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@stop