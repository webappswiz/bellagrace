<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/css/front-end.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/css/font-awesome.min.css" />
	<script type="text/javascript" src="<?php echo bloginfo('template_url');?>/lib/jquery-1.10.1.min.js"></script>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/new/responsiveslides.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/new/responsiveslides.min.js"></script>
	
	<script>
	var scriptSrc = "http://webappswiz.com/gra/wp-content/themes/bella/new/full.js";
	if (window.innerWidth <= 480)
	  scriptSrc = "http://webappswiz.com/gra/wp-content/themes/bella/new/mobile.js";

	var script = document.createElement('script');
	script.src = scriptSrc;
	var head = document.getElementsByTagName('head')[0];
	head.appendChild(script);
	</script>
	
	<?php wp_head(); ?>
</head>

<body >
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-4 media480above">
					<div class="logo">
						<a href="<?php echo the_permalink(); ?>">
						<img src="<?php echo bloginfo('template_url');?>/images/logo.png">
						</a>
					</div>
				</div><!--logo-->
				<div class="col-md-8 col-sm-8 media480above">
					<div id="full" class="row">
						<div class="col-md-5"></div>
						<div class="col-md-5 pull-right subscription">
							<a href="http://stampington.com/Bella-Grace-Subscription">
								<img src="<?php echo bloginfo('template_url');?>/images/subscribe.png">
							</a>
						</div>
					</div>
					<div class="row main-navigation">
						<div class="col-md-12">
							<nav class="navbar navbar-default" role="navigation">
						  
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav navbar-nav menu-bar', ) ); ?>
							<!--  <ul class="nav navbar-nav menu-bar">
								<li class="active"><a href="#">magazines</a></li>
								<li><a href="#">the shoppe</a></li>
								<li><a href="#">who we are</a></li>
								<li><a href="#">Join the movement</a></li>
								<li><a href="#">get in touch</a></li>
							  </ul>-->
							
							
							</div><!-- /.navbar-collapse -->
						  
						</nav>
						</div>
					</div>
					<div id="phone" class="row">
						<div class="col-md-5"></div>
						<div class="col-md-5 pull-right subscription">
							<a href="http://stampington.com/Bella-Grace-Subscription">
								<img src="<?php echo bloginfo('template_url');?>/images/subscribe.png">
							</a>
						</div>
					</div>
				</div><!--navbar-->
			</div><!--row-->
			<div class="row media-nav">
						<div class="col-md-12">
							<nav class="navbar navbar-default" role="navigation">
						  
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav navbar-nav menu-bar', ) ); ?>
							<!--  <ul class="nav navbar-nav menu-bar">
								<li class="active"><a href="#">magazines</a></li>
								<li><a href="#">the shoppe</a></li>
								<li><a href="#">who we are</a></li>
								<li><a href="#">Join the movement</a></li>
								<li><a href="#">get in touch</a></li>
							  </ul>-->
							
							
							</div><!-- /.navbar-collapse -->
						  
						</nav>
						</div>
					</div>
		</div>
	</header>
	<div class="wrapper">
