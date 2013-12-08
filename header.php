<!doctype html>

<html lang="en">

	<head>
		<title>
		  <?php if(is_home()) { 
			echo bloginfo("name"); echo " | "; echo bloginfo("description"); } 
			else { echo wp_title(" | ", false, right); echo bloginfo("name"); } 
		  ?>
		</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
		<!-- Facebook Open Graph -->
		<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>  
		  
		<!-- if page is content page -->  
		<?php if (is_single()) { ?>  
			<meta property="og:url" content="<?php the_permalink() ?>"/>  
			<meta property="og:title" content="<?php single_post_title(''); ?>" />  
			<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />  
			<meta property="og:type" content="article" />  
	  <?php $featured_image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
		 if ( has_post_thumbnail() ) { ?>	  	
		  <meta property="og:image" content="<?php echo $featured_image_url; ?>" />  
	  <?php } else { ?>
		  <meta property="og:image" content="<?php bloginfo('template_url') ?>/assets/images/fb-default.jpg" />
	  <?php } ?>
			
	  <!-- if page is others -->  
	  <?php } else { ?>  
		  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />  
		  <meta property="og:description" content="<?php bloginfo('description'); ?>" />  
		  <meta property="og:type" content="website" />  
		  <meta property="og:image" content="<?php bloginfo('template_url') ?>/assets/images/fb-default.jpg" /> 
	  <?php } ?>
		
	  <script type="text/javascript" src="//use.typekit.net/bid0pgn.js"></script>
	  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
			  
	  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css" type="text/css" />
	  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" />
				
	  <?php wp_head(); ?>
	
	</head>

	<body>
		<nav class="navbar navbar-blue navbar-fixed-top" role="navigation">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Menu</span>
				<span class="glyphicon glyphicon-tasks"></span> Menu
			  </button>
			  <a class="navbar-brand" href="/"><?php bloginfo('name'); ?></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <?php
							    wp_nav_menu( array(
							        'menu'              => 'primary',
							        'theme_location'    => 'primary',
							        'depth'             =>  2,
							        'container'         => 'div',
							        'container_class'   => 'navbar-ex1-collapse',
							        'menu_class'        => 'nav navbar-nav navbar-right',
							        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							        'walker'            => new wp_bootstrap_navwalker())
							    );
							?>
			</div><!-- /.navbar-collapse -->
		  </div>
		</nav>