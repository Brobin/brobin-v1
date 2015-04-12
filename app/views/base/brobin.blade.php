<!doctype html>
<html>
<head>

	@yield('title')

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<meta name="google-site-verification" content="0UeIbuWxCWdOcvFokfLXxuDlNDJ2vhaz_FIXU-Xg6pQ" />
	
	{{ HTML::style('/css/style.css') }}
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/yeti.css') }}
	{{ HTML::style('stylesheets/style.css') }}


	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script("/js/brobin.js") }}
	{{ HTML::script('js/bootstrap.js')}}
	{{ HTML::script("/js/prettify.js") }}
	
</head>
<body>
	<div id="wrapper">

		<nav>
		<div class="container">
			<div id="brand-name">
				<a href="/"><h2>Brobin</h2></a>
			</div>
				<ul class="nav-ul">
					<li><a href="/projects">Projects</a></li>
					<li><a href="/blog">Blog</a></li>
				</ul>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-md-9">

					@yield('content')

				</div>

				<div class="col-md-3">

					<div id="sidebar">

						@include('partials.recent')
						<br>
						@include('partials.categories')
						
					</div>

				</div>

			</div>
		</div>

		<br>

  		<div class="footer-primary">
			<div class="container">
				<div class="row">
					<div class="col-sm-2-5">
						<iframe class="google-map" width="100%" max-width="100%" height="200" frameborder="0" style="border:0"
						src="https://www.google.com/maps/embed/v1/place?q=University%20of%20Nebraska-Lincoln%2C%20Lincoln%2C%20NE%2C%20United%20States&key=AIzaSyCzsJROYyeEQNH9uDGCncXi6hTEIg8Ce8I"></iframe>
					</div>
					
					<div class="col-sm-1-5">
						<h4>About Me</h4>
						<p>I'm a CS major at UNL with experience in Java, Python, and PHP. I write about Technology, Dogecoin, Music and more!</p>
					</div>
					<div class="col col-sm-1-5 col-xs-1-2">
						<h4>Connect</h4>
						<p>
							<a href="http://brobin.me/rss.xml" title="Brobin's RSS Feed"><img src="http://brobin.me/images/icons/rss.png"></a>
							<a href="//www.facebook.com/tobinjbrown" target="_blank" title="Tobin on Facebook"><img src="http://brobin.me/images/icons/facebook.png"></a>
							<a href="//twitter.com/RobinWithaT" target="_blank" title="@RobinWithaT"><img src="http://brobin.me/images/icons/twitter.png"></a>
							<a href="http://github.com/Brobin" title="Brobin on Github"><img src="http://brobin.me/images/icons/github.png"></a>
							<a href="//www.linkedin.com/pub/tobin-brown/91/393/720" target="_blank" title="LinkedIn Profile"><img src="http://brobin.me/images/icons/linkedin.png"></a>
							<a href="//steamcommunity.com/id/clevereagle" target="_blank" title="Tobin on Steam"><img src="http://brobin.me/images/icons/steam.png"></a>
						</p>
					</div>
					<div class="col col-sm-1-5 col-xs-1-2">
						<h4>What I've Worked On</h4>
						<p>
							<a href="http://starwars2048.com" target="_blank">Star Wars 2048</a><br>
							<a href="http://vex.brobin.me" target="_blank">Vex Performance Index</a><br>
							<a href="http://www.bulubox.com/?acc=f73b76ce8949fe29bf2a537cfa420e8f&amp;bannerid=1" target="_blank">Bulubox</a><br>
							<a href="http://blastoffcreative.com" target="_blank">Blastoff Creative</a>
						</p>
					</div>
					
				</div>
			</div>
		</div>
		<div class="footer-secondary" >
			<div class="container">
				<span>&copy; 2014 Tobin Brown</span>
			</div>
		</div>

	</div>
</body>
</html>