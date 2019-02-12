<?php include('server.php') ?>
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

<!-- Topbar -->
<div class="top-bar container">
	<div class="row">
		<div class="col-md-6">
			<ul class="tb-left">
				<li class="tbl-date">Today is: <span>Tuesday, November 4, 2014</span></li>
				<li class="tbl-temp"><i class="fa fa-sun-o"></i>32 C</li>
			</ul>
		</div>
		<div class="col-md-6">
			<ul class="tb-right">
				<li class="tbr-social">
					<span>
					<a href="http://www.facebook.com" class="fa fa-facebook"></a>
					<a href="http://www.twitter.com" class="fa fa-twitter"></a>
					<a href="http://www.google.com" class="fa fa-google-plus"></a>
					<a href="htttp://www.printtest.com" class="fa fa-pinterest"></a>
					<a href="http://www.youtube.com" class="fa fa-youtube"></a>
					
					</span>
				</li>
				<li class="tbr-login">
					<!---<a href="./login.html">Login</a> -->
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
							<li class="active">
								<a href="#" class="sub-nav">Pages</a>
								<ul class="mega-menu">
									<li class="sub-menu">
										<ul>
											<li><a href="./index.html">Index 1</a></li>
											<li><a href="./index_2.html">Index 2</a></li>
											<li><a href="./index_3.html">Index 3</a></li>
											<li><a href="./about.html">About</a></li>
										</ul>
									</li>
									<li class="sub-menu">
										<ul>
											<li><a href="./archives.html">Archives</a></li>
											<li><a href="./category.html">Category</a></li>
											<li><a href="./contributor.html">Contributor</a></li>
										</ul>
									</li>
									<li class="sub-menu">
										<ul>
											<li><a href="./gallery_index.html">Gallery</a></li>
											<li><a href="./gallery_detail.html">Gallery Details</a></li>
											<li><a href="./login.html">Login</a></li>
										</ul>
									</li>
									<li class="sub-menu">
										<ul>
											<li><a href="./search_results.html">Search Results</a></li>
											<li><a href="./single_post.html">Single Post</a></li>
											<li><a href="./contact.html">Contact</a></li>
										</ul>
									</li>
									<li class="sub-menu">
										<ul>
											<li><a href="./video_index.html">Video Gallery</a></li>
											<li><a href="./video_detail.html">Single Video</a></li>
											<li><a href="./fullwidth.html">Full Width</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#">Sport</a></li>
							<li><a href="#">Live News</a></li>
							<li><a href="#">Entertainment</a></li>
							<li><a href="#">Culture</a></li>
							<li><a href="#">Travelling</a></li>
							<li><a href="#">More</a></li>

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
					<h1><a href="./index.html">BonPom News</a></h1>
				</div>

				<!-- News Ticker -->
				<div class="col-md-8">
					<div class="news-ticker">
						<div id="news-ticker">
							<div class="item">
								<span>Entertainment</span>
								<h4><a href="./single_post.html">Movie : Mother - Real Beauty Comes from the Inside of a Woman</a></h4>
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








		


	<!-- Main Content -->
	<div class="main-content container">
		<div class="col-md-12 blog-single">
			<div class="bs-meta">
				<span class="bs-cat">Login or Register</span>
			</div>
			<div class="space30"></div>
			
			<div class="logreg-content">
				<div class="row">
				<?php include('errors.php'); ?>
					<!-- Login -->
					<form method="post">
					<div class="col-md-6">
						<div class="login-content">
							<h6>Login</h6>
							<form>

							<label>Username</label>
  							<input type="text" name="username" >

							  <label>Password</label>
  							<input type="password" name="password">
							  <button type="submit" class="btn" name="login_user">Login</button>
								<input type="checkbox">Remember me
							</form>
						</div>
					</div>
					
					<!-- Register -->
					<div class="col-md-6">
						<div class="register-content">
							<h6>Register</h6>
							<form method="post">

								<label>Username</label>
  							  	<input type="text" name="username" value="<?php echo $username; ?>">
									<label>Email</label>
  	  								<input type="email" name="email" value="<?php echo $email; ?>">
								<label>Password</label>
  	  							<input type="password" name="password_1">
								<label>Confirm password</label>
  	 							 <input type="password" name="password_2">	
								<button type="submit" class="btn" name="reg_user">Register</button>
								<input type="checkbox">I have read the terms & conditions
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<!-- Footer -->
	<footer class="container">
		<div class="col-md-4 footer-widget footer-logo">
			<h3>BonPon News</h3>
			<br>
			<p>
				<b>Our Office</b><br>
				Street Tapeta, 2nd Floor<br>
				Mahalla e zgjyrave, numer 55518<br>
				Sheher i vogel
			</p>
			<span class="copy">Copyright &copy; 2018 Gazeta. shiwwz <a href="#">PremiumLayers</a></span>
		</div>
		
		<div class="col-md-4 footer-widget p-news">
			<h5>Most Commented</h5>
			<ul>
				<li>
					<img src="images/aside/1.jpg" alt=""/>
					<div class="pn-info">
						<span>Politic</span>
						<h4><a href="./single_post.html">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></h4>
					</div>
				</li>
				<li>
					<img src="images/aside/2.jpg" alt=""/>
					<div class="pn-info">
						<span>Politic</span>
						<h4><a href="./single_post.html">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></h4>
					</div>
				</li>
				<li>
					<img src="images/aside/3.jpg" alt=""/>
					<div class="pn-info">
						<span>Business</span>
						<h4><a href="./single_post.html">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></h4>
					</div>
				</li>
			</ul>
		</div>
		
		<div class="col-md-4 footer-widget f-gallery">
			<h5>Gallery Index</h5>
			<ul>
				<li><a href="#"><img src="images/aside/2/1.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="#"><img src="images/aside/2/2.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="#"><img src="images/aside/2/3.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="#"><img src="images/aside/2/4.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="#"><img src="images/aside/2/5.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="#"><img src="images/aside/2/6.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="#"><img src="images/aside/2/7.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="#"><img src="images/aside/2/8.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="#"><img src="images/aside/2/9.jpg" class="img-responsive" alt=""/></a></li>
			</ul>
		</div>
	</footer>
	
	<!-- Footer - Fixed -->
	<div class="footer-fixed">
		<div class="row">
			<div class="col-md-6">
				<ul class="footer-nav">
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Archives</a></li>
				</ul>
			</div>
			<div class="col-md-6">
				<p class="copy1">Copyright &copy; 2018  shiwwez <a href="#" class="fa fa-arrow-up"></a></p>
			</div>
		</div>
	</div>
</div>
</div>

<div class="clearfix space30"></div>

<!-- Javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/vendor/slick/slick.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/main.js"></script>

</body>
</html>
