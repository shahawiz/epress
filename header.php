<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="">
	<meta name="author" content="">

    <title>Gazeta - Responsive Magazine Blog Template</title>
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<!-- Google Fonts & Fontawesome -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,100,300,300italic,100italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

	<!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="js/vendor/slick/slick.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- JS - MEDIAQUERIES -->
	<script src="js/css3-mediaqueries.js"></script>

</head>
<body>
<?php
$today_date=date("l, Fd, Y");
echo <<<header
<!-- Topbar -->
<div class="top-bar container">
	<div class="row">
		<div class="col-md-6">
			<ul class="tb-left">
				<li class="tbl-date">Today is: <span>{$today_date}</span></li>
				<li class="tbl-temp"><i class="fa fa-sun-o"></i>32 C</li>
			</ul>
		</div>
		<div class="col-md-6">
			<ul class="tb-right">
				<li class="tbr-social">
					<span>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-google-plus"></a>
					<a href="#" class="fa fa-pinterest"></a>
					<a href="#" class="fa fa-youtube"></a>
					<a href="#" class="fa fa-rss"></a>
					</span>
				</li>
				<li class="tbr-login">
					<a href="./login.html">Login</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="container wrapper">

	<!-- Header -->
	<header>
		<div class="col-md-12">
			<div class="row">
			
				<!-- Navigation -->
				<div class="col-md-12">
					<div class="menu-trigger"><i class="fa fa-align-justify"></i> Menu</div>
					<nav>
						<ul>
							<li><a href="#">Sport</a></li>
							<li><a href="#">Entertainment</a></li>
							<li><a href="#">Culture</a></li>
							<li><a href="#">Travelling</a></li>
							<li><a href="#">Politic</a></li>
							<li><a href="#">Economy</a></li>
							<li><a href="techposts.php">Technology</a></li>
						</ul>
					</nav>
					
					<!-- Search -->
					<div class="search">
						<form>
							<input type="search" placeholder="Type to search and hit enter">
						</form>
					</div>
					<span class="search-trigger"><i class="fa fa-search"></i></span>
				</div>
			</div>
		</div>
	</header>
	
	<div class="header">
		<div class="col-md-12">
			<div class="col-md-12">
				<!-- Logo -->
				<div class="col-md-4 logo">
					<h1><a href="./index.html">Gazeta</a></h1>
				</div>
				
				<!-- News Ticker -->
				<div class="col-md-8">
					<div class="news-ticker">
						<div id="news-ticker">
							<div class="item">
								<span>Entertainment</span>
								<h4><a href="./single_post.html">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></h4>
								<p>Posted on : November 4, 2014</p>
							</div>
							<div class="item">
								<span>Sport</span>
								<h4><a href="./single_post.html">Temper Cum Soluta Nobis Eleifend Option Congue Nihil</a></h4>
								<p>Posted on : November 2, 2014</p>
							</div>
							<div class="item">
								<span>Business</span>
								<h4><a href="./single_post.html">Duis autem vel irure dolor in hendrerit in vulputate</a></h4>
								<p>Posted on : November 1, 2014</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
header;
?>