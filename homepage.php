<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<section id="first-impression">
  <div class="container">
	
	<div class="row">
	  <div class="col-md-8">
	  	<?php
	  	$fallback = get_theme_mod('first_impressions_mobile_fallback', $default = '' );
	  	if ($fallback !== $default) { 
	  		first_impressions_mobile_fallback(); 
	  	} ?>
	  </div><!-- Close col-8 -->
	  <div class="col-md-4 col-sm-4 col-md-offset-8 col-sm-offset-8">
		  <div id="signupform-wrapper">
			<h2 class="ctr">JOIN THE TEAM</h2>
			<div>
			  <?php include('emailform.php'); ?>
			</div>
		  </div>
	  </div>
	</div><!-- Close .row -->
  </div>
</section>

<section id="little-boxes">
  <div class="container">
	<div class="row">
	  <?php dynamic_sidebar( 'front' );  ?>
	  
	</div>		
  </div><!-- Close container -->		
</section>	
<?php include('footer.php') ?>