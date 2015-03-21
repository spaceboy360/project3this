<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
</head>
<body>
  <div class="container fullwidth">
  	
	<div class="row gray2">
	  	<div class="container">
		  	<div class="navigation noborder spacing1">
		  		<div class="col-xs-4 logodown">
		  			<form class="navbar-form navbar-left" role="search">
  						<div class="form-group">
    						<input type="text" class="form-control" placeholder="Search">
  						</div>
  							<button type="submit" class="btn btn-default">Submit</button>
					</form>
		  		</div>
		  		<div class="col-xs-8 bottom">
				  	<ul class="nav nav-pills pull-right">
				  		<li class="<?php is_active('Home'); ?>"><a class="btn btn-primary btn-sm noborder"  href="<?php bloginfo('url'); ?>/Home">Home</a></li>
						<li class="<?php is_active('about'); ?>"><a class="btn btn-primary btn-sm noborder" href="<?php bloginfo('url'); ?>/about">About</a></li>
						<li class="<?php is_active('contact'); ?>"><a class="btn btn-primary btn-sm noborder" href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
						<li class="<?php is_active('food'); ?>"><a class="btn btn-primary btn-sm noborder" href="<?php bloginfo('url'); ?>/food">Food</a></li>
				  	</ul>
			  	</div>
		  	</div>
		</div>
	</div>

	<div class="row white">
		<div class="container">
			<div class="col-xs-12">
				<img class="img-responsive center3" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo">
			</div>
		</div>
	</div>
	
