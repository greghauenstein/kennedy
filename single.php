<?php get_header(); ?>

  <div class="container">
	<div class="page-container row">
		<div id="page-content" class="col-md-8">		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<h1 class="page-title"><?php the_title(); ?></h1>
				<p><span class="glyphicon glyphicon-calendar"></span> <?php the_time('F jS, Y') ?> &nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-comment"></span> <a href="#respond">Comment on this post!</a></p>
				
				<?php the_content(); ?>
				
				<?php the_tags( '<ul class="tag-list well"><li class="label post-tag"><i class="icon-tag icon-white"></i>&nbsp; ', '</li><li class="label post-tag"><i class="icon-tag icon-white"></i>&nbsp; ', '</li></ul>' ); ?> 
				
				<?php endwhile; endif; ?>
				
				<?php comments_template(); ?>
		
		</div>
		
		<div id="sidebar" class="col-md-4">
			<?php get_sidebar() ?>
		</div>
	</div>
  </div>

<?php get_footer(); ?>