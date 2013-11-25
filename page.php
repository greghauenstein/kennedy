<?php get_header(); ?>
  <div class="container">
	<div class="page-container row">
		<div id="page-content" class="col-md-8">		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<h2 class="page-title"><?php the_title(); ?></h2>
				<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>				
				
				<?php endwhile; endif; ?>
		
		</div>
		
		<div id="sidebar" class="col-md-4">
			<?php get_sidebar() ?>
		</div>
	</div>
  </div>
<?php get_footer(); ?>