<?php 
/*
Template Name: Donation Page
*/
?>

<?php get_header(); ?>
  <div class="container">
	<div class="page-container row" style="margin-bottom: 25px;">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="col-md-12">				
			<h2 class="page-title"><?php the_title(); ?></h2>			
		</div>
		
		<div id="page-content" class="col-md-6">		
			<?php the_content(); ?>	
		</div>
		
		<?php endwhile; endif; ?>
		
		<div id="donation-form" class="col-md-6">
			<div class="well well-small">
				
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<p><strong>By submitting this form I affirm that:</strong>
			<ol>
				<li class="">I am a United States citizen or a permanent resident alien.</li>
				<li class="">This contribution is made from my own funds, and funds are not being provided to me by another person or entity for the purpose of making this contribution.</li>
				<li class="">I am making this contribution with my own personal credit card and not with a corporate or business credit card or a card issued to another person.</li>
				<li class="">I am not a federal contractor.</li>
				<li class="">I am at least eighteen years old.</li>
			</ol>
		</div>
	</div>
	
	<style>
		ul.gfield_radio li input[type=radio] {
			margin-left: 5px!important;
		}
		ul.gfield_radio li label {
			font-size:  14px;
			margin-top:  5px;
		}
	</style>
  </div>
<?php get_footer(); ?>