<?php
$db=new PDO("mysql:host=localhost;dbname=news","root","");

/* Technology Article */
$tech_content = $db->query("select p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='technology'");
$show_tech_content = $tech_content->fetchAll();
$tech_new_date = date("Fd, Y",strtotime($show_tech_content[0]['date']));

/* Sport Article */
$sport_content = $db->query("select p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='sport'");
$show_sport_content = $sport_content->fetchAll();
$sport_new_date = date("Fd, Y",strtotime($show_sport_content[0]['date']));

/* Economy Article */
$economy_content = $db->query("select p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='economy'");
$show_economy_content = $economy_content->fetchAll();
$economy_new_date = date("Fd, Y",strtotime($show_economy_content[0]['date']));

/* Entertainment Article */
$entertain_content = $db->query("select p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='entertainment'");
$show_entertain_content = $entertain_content->fetchAll();
$entertain_new_date = date("Fd, Y",strtotime($show_entertain_content[0]['date']));

/* politic Article */
$politic_content = $db->query("select p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='politic'");
$show_politic_content = $politic_content->fetchAll();
$politic_new_date = date("Fd, Y",strtotime($show_politic_content[0]['date']));

/* culture Article */
$culture_content = $db->query("select p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='culture'");
$show_culture_content = $culture_content->fetchAll();
$culture_new_date = date("Fd, Y",strtotime($show_culture_content[0]['date']));

/* travelling Article */
$travel_content = $db->query("select p.post_id,p.content,p.post_title,p.date from posts p inner join categories c on c.cat_id=p.cat_id where cat_name='travelling'");
$show_travel_content = $travel_content->fetchAll();
$travel_new_date = date("Fd, Y",strtotime($show_travel_content[0]['date']));
echo <<<footer
<!-- Sidebar -->
<aside class="col-md-4">
		
        <!-- Popular News -->
        <div class="side-widget p-news">
            <h5><span>Popular news</span></h5>
            <div class="sw-inner">
                <ul>
                    <li>
                        <img src="images/aside/1.jpg" alt=""/>
                        <div class="pn-info">
                            <span>Politic</span>
                            <h4><a href="article.php?postId={$show_politic_content[0]['post_id']}">{$show_politic_content[0]['post_title']}</a></h4>
                        </div>
                    </li>
                    <li>
                        <img src="images/aside/2.jpg" alt=""/>
                        <div class="pn-info">
                            <span>Politic</span>
                            <h4><a href="article.php?postId={$show_politic_content[0]['post_id']}">{$show_politic_content[0]['post_title']}</a></h4>
                        </div>
                    </li>
                    <li>
                        <img src="images/aside/3.jpg" alt=""/>
                        <div class="pn-info">
                            <span>Business</span>
                            <h4><a href="article.php?postId={$show_economy_content[0]['post_id']}">{$show_economy_content[0]['post_title']}</a></h4>
                        </div>
                    </li>
                    <li>
                        <img src="images/aside/4.jpg" alt=""/>
                        <div class="pn-info">
                            <span>Technology</span>
                            <h4><a href="article.php?postId={$show_tech_content[0]['post_id']}">{$show_tech_content[0]['post_title']}</a></h4>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
    
        
        
    </aside>
</div>

<!-- All Category Posts -->
<div class="all-cat">
    <h5><span>All Categories</span></h5>
    <div class="ac-inner">
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="bl-featured-big">
                    <img src="images/1/1.jpg" class="img-responsive" alt=""/>
                    <div class="bl-info">
                        <span>Entertainment</span>
                        <h3><a href="article.php?postId={$show_entertain_content[0]['post_id']}">{$show_entertain_content[0]['post_title']}</a></h3>
                        <a class="rmore" href="article.php?postId={$show_entertain_content[0]['post_id']}">Continue Reading <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="allcat-feed">
                    <img src="images/1/2.jpg" class="img-responsive" alt=""/>
                    <p>Technology</p>
                    <h4><a href="article.php?postId={$show_tech_content[0]['post_id']}">{$show_tech_content[0]['post_title']}</a></h4>
                </div>
                <div class="space30"></div>
                <div class="allcat-feed">
                    <img src="images/1/3.jpg" class="img-responsive" alt=""/>
                    <p>Sport</p>
                    <h4><a href="article.php?postId={$show_sport_content[0]['post_id']}">{$show_sport_content[0]['post_title']}</a></h4>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="allcat-feed">
                    <img src="images/1/4.jpg" class="img-responsive" alt=""/>
                    <p>Entertainment</p>
                    <h4><a href="article.php?postId={$show_entertain_content[0]['post_id']}">{$show_entertain_content[0]['post_title']}</a></h4>
                </div>
                <div class="space30"></div>
                <div class="allcat-feed">
                    <img src="images/1/5.jpg" class="img-responsive" alt=""/>
                    <p>Culture</p>
                    <h4><a href="article.php?postId={$show_culture_content[0]['post_id']}">{$show_culture_content[0]['post_title']}</a></h4>
                </div>
            </div>
        </div>
        
        <div class="clearfix"></div>
        
        <div class="col-md-12">
            <div class="col-md-3">
                <div class="allcat-feed">
                    <img src="images/1/6.jpg" class="img-responsive" alt=""/>
                    <p>Politic</p>
                    <h4><a href="article.php?postId={$show_politic_content[0]['post_id']}">{$show_politic_content[0]['post_title']}</a></h4>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="allcat-feed">
                    <img src="images/1/7.jpg" class="img-responsive" alt=""/>
                    <p>Economy</p>
                    <h4><a href="article.php?postId={$show_economy_content[0]['post_id']}">{$show_economy_content[0]['post_title']}</a></h4>
                </div>
            </div>
            
            
            
            <div class="col-md-3">
                <div class="allcat-feed">
                    <img src="images/1/9.jpg" class="img-responsive" alt=""/>
                    <p>Travelling</p>
                    <h4><a href="article.php?postId={$show_travel_content[0]['post_id']}">{$show_travel_content[0]['post_title']}</a></h4>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Footer -->
<footer class="container">
    <div class="col-md-4 footer-widget footer-logo">
        <h3>Gazeta</h3>
        <br>
        <span class="copy">Copyright &copy; 2019 Gazeta. Web Design by <a href="#">A.Naguib</a></span>
    </div>
    
    <div class="col-md-4 footer-widget p-news">
        <h5>Most Commented</h5>
        <ul>
            <li>
                <img src="images/aside/1.jpg" alt=""/>
                <div class="pn-info">
                    <span>Politic</span>
                    <h4><a href="article.php?postId={$show_politic_content[0]['post_id']}">{$show_politic_content[0]['post_title']}</a></h4>
                </div>
            </li>
            <li>
                <img src="images/aside/2.jpg" alt=""/>
                <div class="pn-info">
                    <span>Politic</span>
                    <h4><a href="article.php?postId={$show_politic_content[0]['post_id']}">{$show_politic_content[0]['post_title']}</a></h4>
                </div>
            </li>
            <li>
                <img src="images/aside/3.jpg" alt=""/>
                <div class="pn-info">
                    <span>Economy</span>
                    <h4><a href="article.php?postId={$show_economy_content[0]['post_id']}">{$show_economy_content[0]['post_title']}</a></h4>
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
            <p class="copy1">Copyright &copy; 2019 Gazeta. Web Design by A.Naguib<a href="#" class="fa fa-arrow-up"></a></p>
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
footer;
?>