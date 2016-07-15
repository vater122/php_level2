<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tripod Blog Theme - Free CSS Templates</title>
    <meta name="keywords" content="free css templates, tripod, blog, theme" />
    <meta name="description" content="Tripod - free CSS template provided by templatemo.com" />
    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="templatemo_header_wrapper">
    <div id="templatemo_header">

        <div id="site_title">
            <h1><a href="/php_level2/index.php">
                    <img src="images/templatemo_logo.png" alt="tripod blog" /></a>
                <span>free blog template</span>
            </h1>
        </div>

        <div id="templatemo_rss">
            <a href="/php_level2/index.php" target="_parent">SUBSCRIBE<br /><span>OUR FEED</span></a>
        </div>

    </div> <!-- end of header -->

    <div id="templatemo_menu">

        <ul>
            <li><a href="index.html" class="current">Home</a></li>
            <li><a href="index.php?ctrl=Admin&act=ViewLog">Errors Log</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>

    </div> <!-- end of templatemo_menu -->
    <h1>Error logging file</h1>

    <?php foreach($arr as $item): ?>

        <p><?php echo $item . "<br />"; ?></p>

    <?php endforeach; ?>
</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">

</div>



</body>
</html>