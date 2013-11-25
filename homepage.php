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
	  <div class="col-sm-4 col-md-4">
		<div class="thumbnail">
		  <a href="/about"><img alt="" src="<?php bloginfo('template_url') ?>/img/capitol.jpg">
		  <div class="caption">
			<h3>Learn about me</h3></a>
			<p>I'm running to be your representative because we deserve responsible, forward-thinking leadership at the Capitol. 21st Century challanges need 21st Century ideas. Read why my experience makes me the best candidate for this seat.</p>
			<p><a href="/about" class="btn btn-default" role="button">Learn more</a></p>
		  </div>
		</div>
	  </div>
			
	  <div class="col-sm-4 col-md-4">
		<div class="thumbnail">
		  <a href="#"><img src="http://placehold.it/400x247/c70032/ffffff">
		  <div class="caption">
			<h3>Join the team</h3></a>
			<p>This is more than a campaign. This is a community. I need your help to engage our neighbors all over the 99th District and let them know about the choice they have on November 4th. We need door knockers and phone bankers!</p>
			<p><a href="/action" class="btn btn-danger" role="button">Take action</a></p>
		  </div>
		</div>
	  </div>
			  
	  <div class="col-sm-4 col-md-4">
		<div class="thumbnail">
		  <a href="#"><img src="http://placehold.it/400x247/0079aa/ffffff">
		  <div class="caption">
			<h3>Spread the word</h3></a>
			<p>Social media is one of the best ways to influence friends and colleagues on how to vote this coming November. We have a great page on Facebook and are active on Instagram. See how you can help right now!</p>
			<p><a href="#" class="btn btn-primary" role="button">Facebook</a> <a href="#" class="btn btn-default" role="button">Instagram</a></p>
		  </div>
		</div>
	</div>		
  </div><!-- Close container -->		
</section>	
<?php include('footer.php') ?>