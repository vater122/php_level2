<?php
require '../models/News.php';
if(isset($_GET['id'])){
    $arr = News::sqlSelectById($_GET['id']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tripod Blog Theme - Free CSS Templates</title>
    <meta name="keywords" content="free css templates, tripod, blog, theme" />
    <meta name="description" content="Tripod - free CSS template provided by templatemo.com" />
    <link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="templatemo_header_wrapper">
    <div id="templatemo_header">

        <div id="site_title">
            <h1><a href="/">
                    <img src="../images/templatemo_logo.png" alt="tripod blog" /></a>
                <span>free blog template</span>
            </h1>
        </div>

        <div id="templatemo_rss">
            <a href="" target="_parent">SUBSCRIBE<br /><span>OUR FEED</span></a>
        </div>

    </div> <!-- end of header -->

    <div id="templatemo_menu">

        <ul>
            <li><a href="index.html" class="current">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>

    </div> <!-- end of templatemo_menu -->

</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">
    <div id="templatemo_content_wrapper">
        <div id="templatemo_content">

            <?php foreach($arr as $item): ?>
                <!-- start Блок новости -->
                <div class="post_section"><span class="bottom"></span>

                    <span class="comment"><a href="blog_post.html">News</a></span>

                    <h2><a href="#"><?php echo $item['title']; ?></a></h2>

                    <strong>Date:</strong> <?php echo $item['date']; ?> | <strong>Author:</strong> <?php echo $item['author']; ?>

                    <a href="#"><img src="../images/templatemo_image_01.jpg" alt="image 1" /></a>

                    <p><?php echo $item['content']; ?></p>

                    <div class="cleaner"></div>
                    <div class="button float_r"><a href="blog_post.html" class="more">Read more</a></div>
                    <div class="cleaner"></div>
                </div>
                <!-- end Блок новости -->
            <?php endforeach; ?>

            <div class="cleaner_h40"><!-- a spacing between 2 posts --></div>




        </div>

        <div id="templatemo_sidebar_one">

            <h4>Categories</h4>
            <ul class="templatemo_list">
                <li><a href="#">Curabitur sed</a></li>
                <li><a href="#">Praesent adipiscing</a></li>
                <li><a href="#">Duis sed justo</a></li>
                <li><a href="#">Mauris vulputate</a></li>
                <li><a href="#">Nam auctor</a></li>
                <li><a href="#">Aliquam quam</a></li>
            </ul>

            <div class="cleaner_h40"></div>

            <h4>Archives</h4>
            <ul class="templatemo_list">
                <li><a href="#">November 2048</a></li>
                <li><a href="#">October 2048</a></li>
                <li><a href="#">September 2048</a></li>
                <li><a href="#">August 2048</a></li>
                <li><a href="#">July 2048</a></li>
                <li><a href="#">June 2048</a></li>
                <li><a href="#">May 2048</a></li>
                <li><a href="#">April 2048</a></li>
                <li><a href="#">March 2048</a></li>
            </ul>

            <div class="cleaner_h40"></div>

            <h4>Recent Posts</h4>
            <div class="recent_comment_box">
                <a href="#">Lorem ipsum dolor si</a>
                <p>Maecenas tellus erat, dictum vel semper a, dapibus ac elit. Nunc rutrum pretium porta.</p>
            </div>

            <div class="recent_comment_box">
                <a href="#">Aenean feugiat mattis </a>
                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
            </div>

            <div class="recent_comment_box">
                <a href="#"> Lacus enim id lacinia in</a>
                <p>Curabitur ullamcorper ultricies nisi.  Nam eget dui.   Etiam rhoncus.</p>
            </div>

        </div>

        <div id="templatemo_sidebar_two">

            <div class="banner_250x200">
                <a href="" target="_parent"><img src="images/250x200_banner.jpg" alt="templates" /></a>
            </div>

            <div class="banner_125x125">
                <a href="" target="_parent"><img src="images/templatemo_ads.jpg" alt="web 1" /></a>
                <a href="" target="_parent"><img src="images/templatemo_ads.jpg" alt="web 2" /></a>
                <a href="" target="_parent"><img src="images/templatemo_ads.jpg" alt="templates 2" /></a>
                <a href="" target="_parent"><img src="images/templatemo_ads.jpg" alt="templates 1" /></a>
            </div>

            <div class="cleaner_h40"></div>

            <div class="sidebar_two_box">

                <h4>Useful Resources</h4>
                <ul class="templatemo_list">
                    <li><a href="" target="_parent">Free CSS Templates</a></li>
                    <li><a href="" target="_parent">Flash Templates</a></li>
                    <li><a href="" target="_parent">Website Templates</a></li>
                    <li><a href="" target="_parent">Web Design Blog</a></li>
                    <li><a href="" target="_parent">Flash Web Gallery</a></li>
                    <li><a href="#">Curabitur sed lacinia</a></li>
                    <li><a href="#">Vestibulum laoreet tincidunt</a></li>
                    <li><a href="#">Nullam nec mi enim</a></li>
                    <li><a href="#">Aliquam quam nulla</a></li>
                    <li><a href="#">Curabitur non felis massa</a></li>
                </ul>
            </div>

        </div>

        <div class="cleaner"></div>
    </div> <!-- end of content wrapper -->
</div>

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">

        Copyright © 2048 <a href="#">Your Company Name</a> |
        <a href="http://bayguzin.ru/" target="_parent">Website Templates</a> by <a href="http://bayguzin.ru/" target="_parent">Free CSS Templates</a>

    </div> <!-- end of templatemo_copyright -->
</div> <!-- end of copyright wrapper -->

</body>
</html>