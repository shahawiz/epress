<?php
session_start();
$db=new PDO("mysql:host=localhost;dbname=news","root","");

$today_date=date("l, Fd, Y");
$article_id = $_GET['postId'];

/* Article Content */
$article_content = $db->query("select post_title,content,date,post_image from posts where post_id={$article_id}");
$show_article_content = $article_content->fetchAll();

/* Article Comment */
$comment_content = $db->query("select c.date,c.comment,u.username from comments c inner join users u on c.user_id = u.user_id where post_id = {$article_id}");
$show_comment_content = $comment_content->fetchAll();

/* Technology Article */
$tech_content = $db->query("select p.post_image,p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='technology'");
$show_tech_content = $tech_content->fetchAll();
$tech_new_date = date("Fd, Y",strtotime($show_tech_content[0]['date']));

/* Sport Article */
$sport_content = $db->query("select p.post_image,p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='sport'");
$show_sport_content = $sport_content->fetchAll();
$sport_new_date = date("Fd, Y",strtotime($show_sport_content[0]['date']));

/* Economy Article */
$economy_content = $db->query("select p.post_image,p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='economy'");
$show_economy_content = $economy_content->fetchAll();
$economy_new_date = date("Fd, Y",strtotime($show_economy_content[0]['date']));

/* Entertainment Article */
$entertain_content = $db->query("select p.post_image,p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='entertainment'");
$show_entertain_content = $entertain_content->fetchAll();
$entertain_new_date = date("Fd, Y",strtotime($show_entertain_content[0]['date']));

/* politic Article */
$politic_content = $db->query("select p.post_image,p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='politic'");
$show_politic_content = $politic_content->fetchAll();
$politic_new_date = date("Fd, Y",strtotime($show_politic_content[0]['date']));

/* culture Article */
$culture_content = $db->query("select p.post_image,p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='culture'");
$show_culture_content = $culture_content->fetchAll();
$culture_new_date = date("Fd, Y",strtotime($show_culture_content[0]['date']));

/* travelling Article */
$travel_content = $db->query("select p.post_image,p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='travelling'");
$show_travel_content = $travel_content->fetchAll();
$travel_new_date = date("Fd, Y",strtotime($show_travel_content[0]['date']));

/* Select The Last Three Row */
$last_three_rows = $db->query("select p.date,p.post_id,c.cat_name,p.post_title from posts p inner join categories c on p.cat_id = c.cat_id order by p.post_id DESC limit 3");
$show_last_rows = $last_three_rows->fetchAll();
$last_rows_date_one = date("Fd, Y",strtotime($show_last_rows[0]['date']));
$last_rows_date_two = date("Fd, Y",strtotime($show_last_rows[1]['date']));
$last_rows_date_three = date("Fd, Y",strtotime($show_last_rows[2]['date']));


?>


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
				<li class="tbl-date">Today is: <span><?php echo $today_date?></span></li>
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
					<h1><a href="./index.html">Gazeta</a></h1>
				</div>
				
				<!-- News Ticker -->
				<div class="col-md-8">
					<div class="news-ticker">
						<div id="news-ticker">
							<div class="item">
								<span><?php echo $show_last_rows[0]['cat_name']?></span>
								<h4><a href="article.php?postId=<?php echo $show_last_rows[0]['post_id'];?>"><?php echo $show_last_rows[0]['post_title']?></a></h4>
								<p>Posted on : <?php echo $last_rows_date_one?></p>
							</div>
							<div class="item">
								<span><?php echo $show_last_rows[1]['cat_name']?></span>
								<h4><a href="article.php?postId=<?php echo $show_last_rows[1]['post_id']?>"><?php echo $show_last_rows[1]['post_title']?></a></h4>
								<p>Posted on : <?php echo $last_rows_date_two?></p>
							</div>
							<div class="item">
								<span><?php echo $show_last_rows[2]['cat_name']?></span>
								<h4><a href="article.php?postId=<?php echo $show_last_rows[2]['post_id']?>"><?php echo $show_last_rows[2]['post_title']?></a></h4>
								<p>Posted on : <?php echo $last_rows_date_three?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Blog Single -->
	<div class="main-content container">
		<div class="col-md-8 blog-single">
			
			<h3><?php echo $show_article_content[0]['post_title']?></h3>
			<div class="row">
				
				<div class="col-md-9">
					<p><?php echo $show_article_content[0]['content']?></p>
					<div class="img-w-caption">
						<img src="images/<?php echo $show_article_content[0]['post_image']?>" class="img-responsive" alt=""/>
					</div>
				</div>
			</div>
			
			
			
			<!-- Comments -->
			<div class="comments-wrap">
				<div id="tabwrap">
					<div id="content">
						<div id="comments" class="current">
							<ul class="comments">
								<?php 
									foreach($show_comment_content as $value){
									echo "<li>
										<div class='comment-inner'>
											<h6><span>{$value['username']}</span></h6>
											<span class='c-date'>{$value['date']}</span>
											<p>{$value['comment']}</p>
										</div>
									</li>";
									}
								?>
							</ul>
							<form class='comment_form' action='article.php?postId=<?php echo $article_id?>' method='POST'>
								<input type='text' name='comment' />
								<input type='submit' name='submit' value='comment' />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php
		if(isset($_POST['submit'])){
			$comment = $_POST['comment'];
			$db->query("insert into comments(user_id,post_id,date,comment) values(1,{$article_id},NOW(),'{$comment}')"); 
		}
		
	
	?>
		<!-- Sidebar -->
		<aside class="col-md-4">
		
			<!-- Popular News -->
			<div class="side-widget p-news">
				<h5><span>Popular news</span></h5>
				<div class="sw-inner">
					<ul>
						<li>
							<img src="images/<?php echo $show_politic_content[0]['post_image']?>" alt=""/>
							<div class="pn-info">
								<span>Politic</span>
								<h4><a href="article.php?postId=<?php echo $show_politic_content[0]['post_id']?>"><?php echo $show_politic_content[0]['post_title']?></a></h4>
							</div>
						</li>
						<li>
							<img src="images/<?php echo $show_politic_content[0]['post_image']?>" alt=""/>
							<div class="pn-info">
								<span>Politic</span>
								<h4><a href="article.php?postId=<?php echo $show_politic_content[0]['post_id']?>"><?php echo $show_politic_content[0]['post_title']?></a></h4>
							</div>
						</li>
						<li>
							<img src="images/<?php echo $show_economy_content[0]['post_image']?>" alt=""/>
							<div class="pn-info">
								<span>Economy</span>
								<h4><a href="article.php?postId=<?php echo $show_economy_content[0]['post_id']?>"><?php 
								echo $show_economy_content[0]['post_title']?></a></h4>
							</div>
						</li>
						<li>
							<img src="images/<?php echo $show_tech_content[0]['post_image']?>" alt=""/>
							<div class="pn-info">
								<span>Technology</span>
								<h4><a href="article.php?postId=<?php echo $show_politic_content[0]['post_id']?>"><?php echo $show_tech_content[0]['post_title']?></a></h4>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
	
		</aside>
	</div>


	
	<!-- Footer -->
	<footer class="container">
		<div class="col-md-4 footer-widget footer-logo">
			<h3>Gazeta</h3>
			<br>
			<p>
				<b>Our Office</b><br>
				Osaman Building 2nd Floor<br>
				Mahalla El-Kubra<br>
				Egypt	
			</p>
			<span class="copy">Copyright &copy; 2014 Gazeta. Web Design by <a href="#">PremiumLayersi</a></span>
		</div>
		
		<div class="col-md-4 footer-widget p-news">
			<h5>Most Commented</h5>
			<ul>
				<li>
					<img src="images/<?php echo $show_politic_content[0]['post_image']?>" alt=""/>
					<div class="pn-info">
						<span>Politic</span>
						<h4><a href="article.php?postId=<?php echo $show_politic_content[0]['post_id']?>"><?php echo $show_politic_content[0]['post_title']?></a></h4>
					</div>
				</li>
				<li>
					<img src="images/<?php echo $show_politic_content[0]['post_image']?>" alt=""/>
					<div class="pn-info">
						<span>Politic</span>
						<h4><a href="article.php?postId=<?php echo $show_politic_content[0]['post_id']?>"><?php echo $show_politic_content[0]['post_title']?></a></h4>
					</div>
				</li>
				<li>
					<img src="images/<?php echo $show_economy_content[0]['post_image']?>" alt=""/>
					<div class="pn-info">
						<span>Economy</span>
						<h4><a href="article.php?postId=<?php echo $show_economy_content[0]['post_id']?>"><?php echo $show_economy_content[0]['post_title']?></a></h4>
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
					<li><a href="index.php">Home</a></li>
				</ul>
			</div>
			<div class="col-md-6">
				<p class="copy1">Copyright &copy; 2014 Gazeta. Web Design by Naguib <a href="#" class="fa fa-arrow-up"></a></p>
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
