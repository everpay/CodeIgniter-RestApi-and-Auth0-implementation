<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
		<title><?php echo $title; ?></title>
	<?php
	/** -- Copy from here -- */
	if(!empty($meta))
	foreach($meta as $name=>$content){
		echo "\n\t\t";
		?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
			 }
	echo "\n";

	if(!empty($canonical))
	{
		echo "\n\t\t";
		?><link rel="canonical" href="<?php echo $canonical?>" /><?php

	}
	echo "\n\t";

	foreach($css as $file){
	 	echo "\n\t\t";
		?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
	} echo "\n\t";
?>
    <link href="<?php echo base_url(); ?>assets/themes/default/css/style.css" rel="stylesheet">
    <!-- Le styles -->

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons 
    <link rel="shortcut icon" href="<?php //echo base_url(); ?>assets/themes/default/images/favicon.png" type="image/x-icon"/>
	<meta property="og:image" content="<?php //echo base_url(); ?>assets/themes/default/images/facebook-thumb.png"/>
	<link rel="image_src" href="<?php //echo base_url(); ?>assets/themes/default/images/facebook-thumb.png" />-->

</head>
<body class="main-pages homepage">
<!--header start -->
<header id="header">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-4">
            	<div class="logo">
                	<a href="<?php echo site_url(); ?>">&nbsp;</a>
                </div>
                <div class="secondry-nav">
                	<ul>
                    	<li><a href="<?php echo site_url(); ?>">Travel</a></li>
                        <li><a href="<?php echo site_url(); ?>">Destinations</a></li>
                        <li><a href="<?php echo site_url(); ?>">Hotels</a></li>
                        <li><a href="<?php echo site_url(); ?>">Foods</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-8">
            	<div class="right-section clearfix">
                    <ul class="pull-left">
                        <li><a href="<?php echo site_url(); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo site_url(); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo site_url(); ?>">PKR</a></li>
                        <li>
                        	<a href="<?php echo base_url(); ?>auth/login">LOGIN</a>
                        </li>
                        <li class="search-icon"><a href="<?php echo base_url(); ?>"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="navbar-header pull-right">
                    	<em>Menu</em>
                    	<button id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!--<div class="collapse-nav">
                            <em>Menu</em>
                            <button class="collapse-button" type="button">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>-->
                    </div>
                    <div class="navigation-overlay">
                    	<div class="container">
                        	<div class="row">
                            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                	<ul>
                                    	<li>
                                        	<a href="<?php echo site_url(); ?>">Travel</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo site_url(); ?>">Aviation</a></li>
                                                <li><a href="<?php echo site_url(); ?>">Business Traveller</a></li>
                                                <li><a href="<?php echo site_url(); ?>">Destinations</a></li>
                                                <li><a href="<?php echo site_url(); ?>">Features</a></li>
                                                <li><a href="<?php echo site_url(); ?>">Food/Drink</a></li>
                                                <li><a href="<?php echo site_url(); ?>">Hotels</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                	<ul>
                                    	<li>
                                        	<a href="<?php echo site_url(); ?>">Destinations</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo site_url(); ?>">Aviation</a></li>
                                                <li><a href="<?php echo site_url(); ?>">Business Traveller</a></li>
                                                <li><a href="<?php echo site_url(); ?>">Destinations</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                	<ul>
                                    	<li>
                                        	<a href="<?php echo site_url(); ?>">Hotels</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo site_url(); ?>">Aviation</a></li>
                                                <li><a href="<?php echo site_url(); ?>">Business Traveller</a></li>
                                                <li><a href="<?php echo site_url(); ?>">Destinations</a></li>
                                                <li><a href="<?php echo site_url(); ?>">Features</a></li>
                                                <li><a href="<?php echo site_url(); ?>">Food/Drink</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                	<ul>
                                    	<li>
                                        	<a href="<?php echo site_url(); ?>">Foods</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo site_url(); ?>">Aviation</a></li>
                                                <li><a href="<?php echo site_url(); ?>">Business Traveller</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="secondray-footer">
                        	<div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Copyright © <a href="<?php echo site_url(); ?>">Logic Powered Solutions</a></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul>
                                            <li><a href="<?php echo site_url(); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="<?php echo site_url(); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="<?php echo site_url(); ?>">About Jeans trip</a></li>
                                            <li><a href="<?php echo site_url(); ?>">Privacy policy</a></li>
                                            <li><a href="<?php echo site_url(); ?>">FAQs</a></li>
                                            <li><a href="<?php echo site_url(); ?>">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>    
            </div>
        </div>
        
        <input type="search" placeholder="SEARCH" name="searchbar" class="search-bar">
    </div>

</header>
<!--header end -->
	    <?php echo $output;?>
  <footer>
  </footer>

<?php
foreach($js as $file){
			echo "\n\t\t";
			?><script src="<?php echo $file; ?>"></script><?php
	} echo "\n\t";
?>

</body>
</html>
