<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Geekwise Twitter</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style>
		.centered {
			margin-left: auto;
			margin-right: auto;
		}
		.wrapper {
			margin: 0 auto;
			max-width: 1200px;
		}
		.signin {
			background-color: #eee;
			padding: 5px;
		}
		.signup {
			background-color: #ddd;
			padding: 5px;
		}
		.signup button {
			background-color: #F6B26B;
		}
		.signin button {
			background-color: #53A9EA;
			float: right;
			clear: all;
		}
		#profile_box {
			background-color: #eee;
		}
		#tweetbox {
			width: 100%;
		}
		.tweet {
			border: 1px solid black;
			background-color: gray;
		}

	</style>
</head>
<body>
	@yield('content')


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>