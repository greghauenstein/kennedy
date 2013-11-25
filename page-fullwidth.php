<?php 
/*
Template Name: Full width
*/
?>

<?php get_header(); ?>
  <div class="container">
	<div class="page-container row">
		<div id="page-content" class="col-md-8 col-md-8-offset-2 col-sm-8 col-sm-offset-2">		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<h2 class="page-title ctr"><?php the_title(); ?></h2>
				<?php the_content(); ?>				
				
				<?php endwhile; endif; ?>
		
		</div>
	</div>
  </div>
<?php get_footer(); ?>