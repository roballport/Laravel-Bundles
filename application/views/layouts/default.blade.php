<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Laravel Bundles</title>
		{{Asset::styles()}}
		<!-- fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Quattrocento&v2' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	</head>
	<body>

		<!-- Navigation -->
		<div class="topbar-wrapper" style="z-index: 5;">
			<div class="topbar" data-dropdown="dropdown">
				<div class="topbar-inner">
					<div class="container">
						<h3><a href="#">Laravel Bundles</a></h3>
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="<?php echo URL::to('categories'); ?>">Categories</a></li>
							<li><a href="<?php echo URL::to('bundles/add'); ?>">Add Bundle</a></li>
						</ul>
						<form class="pull-left" action="">
							<input type="text" placeholder="Search">
						</form>
						<ul class="secondary-nav">
							<li class="login"><a class="btn primary" href="<?php echo URL::to('user/login'); ?>">Login With GitHub</a></li>
						</ul>
					</div>
				</div><!-- /topbar-inner -->
			</div><!-- /topbar -->
		</div>
		<!-- End Navigation -->

		<div class="container">
			<h1 class="main"><a href="http://laravel.com/">Laravel Bundles</a></h1>
			<div class="row show-grid">
				<div class="span5">
					<h2>Categories</h2>
					<ul>
					@foreach ($categories as $category)
						<li><a href="{{URL::to('category/'.$category->uri)}}">{{$category->title}}</a></li>
					@endforeach
					</ul>
				</div>
				<div class="span11">
					{{$content}}
				</div>
			</div>
			<footer>
				<p>&copy; 2012 Laravel</p>
			</footer>
		</div>
		@yield('scripts')
	</body>
</html>