<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php if (function_exists('language_attributes')) { language_attributes(); } ?>>

<head profile="http://gmpg.org/xfn/11">

    <title><?php bloginfo('name'); ?><?php if ( !(is_404()) && (is_single()) or (is_page()) or (is_archive()) ) { ?> | <?php } ?><?php wp_title(''); ?>
    </title>
    
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />       
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
    
    <!--[if lt IE 7]>
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" type="text/css" media="screen, projection">
    <![endif]-->
    
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon2.ico" />

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
    
    <?php wp_head(); ?>

</head>

<body>   <!--start body-->

    <div class="container">   <!--start container-->
    
        <div id="header" class="column span-14">
	        <img class ="bottomless" src ="<?php bloginfo('stylesheet_directory'); ?>/images/bg/home_logo_slogan.png">
			<ul id="menu">
                <li><a href="http://sharek961.org/">Home</a></span></li>
                <li><a href="http://www.sharek961.org/reports/submit">submit an incident</a></span></li>
                <li><a href="http://www.sharek961.org/#">Get Alerts</a></span></li>
                <li><a href="http://www.sharek961.org/sharikblog/">blog</a></span></li>
                <li><a href="http://www.sharek961.org/sharikblog/?page_id=2">about</a></span></li>
                <li><a href="http://www.sharek961.org/sharikblog/?page_id=7">partners</a></span></li>
                <li><a href="http://www.sharek961.org/sharikblog/?page_id=11">how to help</a></span></li>

            </ul>
	        <img src ="<?php bloginfo('stylesheet_directory'); ?>/images/bg/home_banner.png">

            
            <div class="column span-6 border_left last push-0">
            
              
              
            
            </div>
        
        </div>   <!--end header-->
