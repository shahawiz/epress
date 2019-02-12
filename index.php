<?php
include 'header.php';
?>
<?php
$db=new PDO("mysql:host=localhost;dbname=news","root","");

/* Technology Article */
$tech_content = $db->query("select p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='technology'");
$show_tech_content = $tech_content->fetchAll();
$tech_new_date = date("Fd, Y",strtotime($show_tech_content[0]['date']));

/* Sport Article */
$sport_content = $db->query("select p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='sport'");
$show_sport_content = $sport_content->fetchAll();
$sport_new_date = date("Fd, Y",strtotime($show_sport_content[0]['date']));

/* Economy Article */
$economy_content = $db->query("select p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='economy'");
$show_economy_content = $economy_content->fetchAll();
$economy_new_date = date("Fd, Y",strtotime($show_economy_content[0]['date']));

/* Entertainment Article */
$entertain_content = $db->query("select p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='entertainment'");
$show_entertain_content = $entertain_content->fetchAll();
$entertain_new_date = date("Fd, Y",strtotime($show_entertain_content[0]['date']));

/* politic Article */
$politic_content = $db->query("select p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='politic'");
$show_politic_content = $politic_content->fetchAll();
$politic_new_date = date("Fd, Y",strtotime($show_politic_content[0]['date']));

/* culture Article */
$culture_content = $db->query("select p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='culture'");
$show_culture_content = $culture_content->fetchAll();
$culture_new_date = date("Fd, Y",strtotime($show_culture_content[0]['date']));

/* travelling Article */
$travel_content = $db->query("select p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='travelling'");
$show_travel_content = $travel_content->fetchAll();
$travel_new_date = date("Fd, Y",strtotime($show_travel_content[0]['date']));


echo <<<start
<!-- Main Content -->
<div class="main-content container">
		<div class="col-md-8 block-1">
			<div class="row">
				<div class="col-md-3 b1-aside">
					<h5><span>Latest News</span></h5>
					<div class="bla-content">
						<div class="thumb">
							<img src="images/xtra/1.jpg" class="img-responsive" alt=""/>
							<span class="thumb-cat">Technology</span>
						</div>
						<p>Posted on {$tech_new_date}</p>
						<h4><a href="./single_post.html">{$show_tech_content[0]['post_title']}</a></h4>
						<div class="sep"></div>
						<span class="cat-default">Sport</span>
						<p>Posted on {$sport_new_date}</p>
						<h4><a href="./single_post.html">{$show_sport_content[0]['post_title']}</a></h4>
						<div class="sep"></div>
						<span class="cat-default">Economy</span>
						<p>Posted on {$economy_new_date}</p>
						<h4><a href="./single_post.html">{$show_economy_content[0]['post_title']}</a></h4>
						<div class="sep"></div>
						<span class="cat-default">Entertainment</span>
						<p>Posted on {$entertain_new_date}</p>
						<h4><a href="./single_post.html">{$show_entertain_content[0]['post_title']}</a></h4>
						<div class="sep"></div>
						<span class="cat-default">Entertainment</span>
						<p>Posted on {$entertain_new_date}</p>
						<h4><a href="./single_post.html">{$show_entertain_content[0]['post_title']}</a></h4>
						<div class="sep"></div>
						<a href="#" class="btn1">View All Posts</a>
					</div>
					<div class="bla-content banner">
						<img src="images/banner/1.jpg" class="img-responsive" alt=""/>
					</div>
				</div>
				
				<div class="col-md-9 block-right">
					<div class="bl-featured-big">
						<img src="images/xtra/2.jpg" class="img-responsive" alt=""/>
						<div class="bl-info">
							<span>Entertainment</span>
							<h3><a href="./single_post.html">{$show_entertain_content[0]['post_title']}</a></h3>
							<a class="rmore" href="#">Continue Reading <i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
					
					<!-- Featured News -->
					<div class="featured-news">
						<h5><span>Featured News</span></h5>
						<div class="row">
							<div class="col-md-6">
								<div class="fn-inner">
									<div class="fn-thumb">
										<img src="images/xtra/3.jpg" class="img-responsive" alt=""/>
										<div class="fn-meta">Technology</div>
									</div>
									<h4><a href="./single_post.html">{$show_tech_content[0]['post_title']}</a></h4>
									<em>Posted on {$tech_new_date}</em>
									<p>{$show_economy_content[0]['content']}</p>
								</div>
								<div class="fn-inner">
									<div class="fn-thumb">
										<img src="images/xtra/4.jpg" class="img-responsive" alt=""/>
										<div class="fn-meta">Sport</div>
									</div>
									<h4><a href="./single_post.html">{$show_sport_content[0]['post_title']}</a></h4>
									<em>Posted on {$sport_new_date}</em>
									<p>{$show_sport_content[0]['content']}</p>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="fn-inner">
									<div class="fn-thumb">
										<img src="images/xtra/5.jpg" class="img-responsive" alt=""/>
										<div class="fn-meta">Culture</div>
									</div>
									<h4><a href="./single_post.html">{$show_culture_content[0]['post_title']}</a></h4>
									<em>Posted on {$culture_new_date}</em>
									<p>{$show_sport_content[0]['content']}</p>
								</div>
								<div class="fn-inner">
									<div class="fn-thumb">
										<img src="images/xtra/6.jpg" class="img-responsive" alt=""/>
										<div class="fn-meta">Travelling</div>
									</div>
									<h4><a href="./single_post.html">{$show_travel_content[0]['post_title']}</a></h4>
									<em>Posted on {$travel_new_date}</em>
									<p>{$show_travel_content[0]['content']}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Category Blocks -->
			<div class="row">
				<div class="col-md-12">
					<div class="cat-blocks">
						<h4><span>Technology</span></h4>
						<div class="row">
							<div class="col-md-6">
								<div class="cb-big">
									<div class="bl-meta">
										<span><i class="fa fa-comments-o"></i> 4 Comments</span><br>
										<span><i class="fa fa-heart-o"></i> 23 Likes</span>
									</div>
									<img src="images/xtra/7.jpg" class="img-responsive" alt=""/>
									<div class="bl-info">
										<h3><a href="./single_post.html">Eodem Modo Typi, Qui Nunc Nobis Videntur Parum Clari</a></h3>
										<p>Posted on November 02, 2014</p>
									</div>
								</div>
							</div>
							
							<div class="col-md-6 cb-info">
								<span class="cat">Technology</span>									
								<h5><a href="./single_post.html">Eodem Modo Typi, Qui Nunc Nobis Videntur Parum Clari</a></h5>
								<span class="date">Posted on November 02, 2014</span>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet doloremagna aliquam erat volutpat. ex ea commodo</p>
								<ul>
									<li><a href="./single_post.html">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></li>
									<li><a href="./single_post.html">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></li>
									<li><a href="./single_post.html">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></li>
								</ul>
							</div>
						</div>
						<div class="space40"></div>
					</div>
					
					<div class="cat-blocks">
						<h4><span>Business</span></h4>
						<div class="row">
							<div class="col-md-6">
								<div class="cb-big">
									<div class="bl-meta">
										<span><i class="fa fa-comments-o"></i> 4 Comments</span><br>
										<span><i class="fa fa-heart-o"></i> 23 Likes</span>
									</div>
									<img src="images/xtra/8.jpg" class="img-responsive" alt=""/>
									<div class="bl-info">
										<h3><a href="./single_post.html">Eodem Modo Typi, Qui Nunc Nobis Videntur Parum Clari</a></h3>
										<p>Posted on November 02, 2014</p>
									</div>
								</div>
							</div>
							
							<div class="col-md-6 cb-info">
								<span class="cat">Business</span>									
								<h5><a href="./single_post.html">Eodem Modo Typi, Qui Nunc Nobis Videntur Parum Clari</a></h5>
								<span class="date">Posted on November 02, 2014</span>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet doloremagna aliquam erat volutpat. ex ea commodo</p>
								<ul>
									<li><a href="./single_post.html">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></li>
									<li><a href="./single_post.html">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></li>
									<li><a href="./single_post.html">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></li>
								</ul>
							</div>
						</div>
						<div class="space40"></div>
					</div>
					
					<div class="cat-blocks">
						<h4><span>Entertainment</span></h4>
						<div class="row">
							<div class="col-md-6">
								<div class="cb-big">
									<div class="bl-meta">
										<span><i class="fa fa-comments-o"></i> 4 Comments</span><br>
										<span><i class="fa fa-heart-o"></i> 23 Likes</span>
									</div>
									<img src="images/xtra/9.jpg" class="img-responsive" alt=""/>
									<div class="bl-info">
										<h3><a href="./single_post.html">Eodem Modo Typi, Qui Nunc Nobis Videntur Parum Clari</a></h3>
										<p>Posted on November 02, 2014</p>
									</div>
								</div>
							</div>
							
							<div class="col-md-6 cb-info">
								<span class="cat">Entertainment</span>									
								<h5><a href="./single_post.html">Eodem Modo Typi, Qui Nunc Nobis Videntur Parum Clari</a></h5>
								<span class="date">Posted on November 02, 2014</span>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet doloremagna aliquam erat volutpat. ex ea commodo</p>
								<ul>
									<li><a href="./single_post.html">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></li>
									<li><a href="./single_post.html">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></li>
									<li><a href="./single_post.html">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></li>
								</ul>
							</div>
						</div>
						<div class="space40"></div>
					</div>
					
					
				</div>
			</div>
		</div>
start;
?>

<?php
include 'footer.php';
?>
