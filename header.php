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
	<link rel="stylesheet" href="css/article.css">
	<link rel="stylesheet" href="css/search.css">

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
$db=new PDO("mysql:host=localhost;dbname=news","root","");

/* The Date Of Today */
$today_date=date("l, Fd, Y");

/* Select The Last Three Row */
$last_three_rows = $db->query("select p.date,p.post_id,c.cat_name,p.post_title from posts p inner join categories c on p.cat_id = c.cat_id order by p.post_id DESC limit 3");
$show_last_rows = $last_three_rows->fetchAll();
$last_rows_date_one = date("Fd, Y",strtotime($show_last_rows[0]['date']));
$last_rows_date_two = date("Fd, Y",strtotime($show_last_rows[1]['date']));
$last_rows_date_three = date("Fd, Y",strtotime($show_last_rows[2]['date']));


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
					<a href="login.php">Logout</a>
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
							<li><a href="search.php?search=sport">Sport</a></li>
							<li><a href="search.php?search=entertainment">Entertainment</a></li>
							<li><a href="search.php?search=culture">Culture</a></li>
							<li><a href="search.php?search=travelling">Travelling</a></li>
							<li><a href="search.php?search=politic">Politic</a></li>
							<li><a href="search.php?search=economy">Economy</a></li>
							<li><a href="search.php?search=technology">Technology</a></li>
						</ul>
					</nav>
					
					<!-- Search -->
					<div class="search">
						<form method="GET" action="search.php">
							<input type="search" placeholder="Type to search and hit enter" name="search">
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
					<h1><a href="index.php">Gazeta</a></h1>
				</div>
				
				<!-- News Ticker -->
				<div class="col-md-8">
					<div class="news-ticker">
						<div id="news-ticker">
							<div class="item">
								<span>{$show_last_rows[0]['cat_name']}</span>
								<h4><a href="article.php?postId={$show_last_rows[0]['post_id']}">{$show_last_rows[0]['post_title']}</a></h4>
								<p>Posted on : {$last_rows_date_one}</p>
							</div>
							<div class="item">
								<span>{$show_last_rows[1]['cat_name']}</span>
								<h4><a href="article.php?postId={$show_last_rows[1]['post_id']}">{$show_last_rows[1]['post_title']}</a></h4>
								<p>Posted on : {$last_rows_date_two}</p>
							</div>
							<div class="item">
								<span>{$show_last_rows[1]['cat_name']}</span>
								<h4><a href="article.php?postId={$show_last_rows[2]['post_id']}">{$show_last_rows[2]['post_title']}</a></h4>
								<p>Posted on : {$last_rows_date_three}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
header;
?>