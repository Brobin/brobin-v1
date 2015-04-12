<!doctype html>
<style>
body, html {
	background: #333;
	font-family: 'Roboto' sans-serif;
}
.container {
	width: 100%;
	float: center;
}
#main {
	color:white;
	background: #222;
	width:300px;
    max-height: 275px;
    border-radius: 10px;
    margin: auto;
	position: absolute;
	top: 0; left: 0; bottom: 100px; right: 0;
}
#login {
	margin: 20px;
}
input {
	padding-left: 10px;
	font-family: 'Source Sans Pro';
	background: #111 !important;
	color: white !important;
	height: 25px;
	min-width: 50px;
	border: none;
}
</style>

<html>
<head>
	<title>Admin Login | Tobin Brown</title>
	<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
		<div id="main">
			<div id="login">

				{{ Form::open(array('url' => 'admin')) }}

					@if(isset($message))
					<p>{{ $message }}</p>
					@endif

					<h1>Admin Login</h1>
					<!-- if there are login errors, show them here -->
					<p>
						{{ $errors->first('username') }}
						{{ $errors->first('password') }}
					</p>

					<p>
						{{ Form::label('username', 'Username') }}
						{{ Form::text('username', Input::old('username')) }}
					</p>

					<p>
						{{ Form::label('password', 'Password ') }}
						{{ Form::password('password') }}
					</p>

					<p>{{ Form::submit('Login') }}</p>
				{{ Form::close() }}

			</div>
		</div>
	</div>

</body>
</html>