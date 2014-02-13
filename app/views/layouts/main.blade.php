<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!--	<title>Signby.me - pennan är mäktigare än svärdet</title> //-->
		@yield('title')

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css">

		<!-- Add custom CSS here  -->
		{{ HTML::style('assets/css/custom.css') }}
	</head>
	
	<body>

		<!-- navbar here -->
		<div class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar">Kampanjer</span>
						<span class="icon-bar">Tjänster</span>
					</button>
					<a class="navbar-brand" href="/spacelab/maksym/public/"><img src="http://www.signby.me/images/signbyme_100x36.gif" /></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Kampanjer</a>
						</li>
						<li>
							<a href="#about">Tjänster</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

		<div class="container">
			@yield('well')
			<div class="row">
				<div class="col-lg-8">
					@yield('content')
				</div>
				<div class="col-lg-4">
					@yield('contactform')
				</div><!-- row -->
			</div>
			<!-- col-lg-4 -->
		</div><!-- /.container -->

		<!-- Bootstrap core JavaScript -->
		<!-- Placed at the end of the document so the pages load faster -->
		<!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
		<script src="http://signby.me/spacelab/assets/js/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>

	</body>
</html>