<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<section id="first-impression">
  <div class="container">
	
	<div class="row">
	  <div class="col-md-8">
		<img src="<?php bloginfo('template_url') ?>/img/abby-flag.jpg" class="frame" />
		<h1 class="featured-overlay">Why I'm running</h1>
	  </div><!-- Close col-8 -->
	  <div class="col-md-4">
		<p class="lead"><em>"Here's where some inspirational quote goes talking about how awesome people think you are."</em></p>
		<h2 class="black ctr">JOIN THE TEAM</h2>
		<div>
		  <?php include('emailform.php'); ?>
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