<?php

/**

 * The Header template for our theme

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Twenty_Thirteen

 * @since Twenty Thirteen 1.0

 */

?><!doctype html>
<html>
<head>
<link href="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/style.css">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="google-site-verification" content="Om0dCkhm6BRvNFhqNIw-mydhV5VZos9AVj7rp8i4yyg" />

	<meta name="viewport" content="width=device-width">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>

	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>

	<![endif]-->

    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/tabModule.js"></script>

    <script type="text/javascript">

		$(document).ready(function(){

			 tabModule.init();

		});

	</script>

    <script>

    	$(document).ready(function(){

							$(window).scroll(function(){

				            var sticky = $('.fixedheader'),

					        scroll = $(window).scrollTop();

				

				            if (scroll >= 100) sticky.addClass('fixed');

				            else sticky.removeClass('fixed');

				            });

			});


    </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37617717-1', 'auto');
  ga('send', 'pageview');
</script>
	<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">

<header class="fixedheader">
  <div class="container-fluid">
  <div class="myheader">
    <div class="header-top">
     <div class="col-md-3 social">
        <ul>
          <li><a href="https://www.facebook.com/codoid/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/codoid" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://plus.google.com/+Codoid" target="_blank"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCCmOTDQgcf4W8oo22mBMUYA" target="_blank"><i class="fa fa-youtube"></i></a></li>
          <li><a href="https://www.linkedin.com/company/codoid" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
	   <div class="col-md-9 support">
        <ul>
          <li><a href="mailto:<?php the_field('support_email','52');?>"><i class="fa fa-envelope"></i><span><?php the_field('support_email','52');?></span></a></li>
          <li><a href="tel:<?php the_field('support_number','52');?>"><i class="fa fa-phone"></i><span><?php the_field('support_number','52');?></span></a></li>
		 <!-- <li><a href="#"><i class="glyphicon glyphicon-lock"></i><span>&nbsp; Login</span></a></li>
		  <li><a href="#"><i class="fa fa-user"></i><span>Signup</span></a></li>-->
          
        </ul>
      </div>
    </div>
   </div>

<div id="navbar" class="navbar">
            	<div class="nav-div">
                <div class="logo">
                	<a href="<?php echo get_site_url(); ?>"><img alt="Codoid logo" src="<?php echo site_url();?>/wp-content/themes/twentythirteen-child/assets/images/logo.jpg" /></a>
                </div>
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu navbar-nav', 'menu_id' => 'primary-menu' ) ); ?>
					
				</nav><!-- #site-navigation -->
                
                  <div style="clear:both"></div>
                </div>
			</div><!-- #navbar -->



</header>  

    		<div id="main" class="site-main">