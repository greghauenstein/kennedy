<?php get_header(); ?>

  <div class="container">
	<div class="page-container row">
		<div id="page-content" class="col-md-8">		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<h1 class="page-title"><?php the_title(); ?></h1>
				<p><span class="glyphicon glyphicon-calendar"></span> <?php the_time('F jS, Y') ?></p>
				
				<?php the_content(); ?>
				
				<?php the_tags( '<ul class="tag-list well"><li class="label post-tag"><i class="icon-tag icon-white"></i>&nbsp; ', '</li><li class="label post-tag"><i class="icon-tag icon-white"></i>&nbsp; ', '</li></ul>' ); ?> 
				
				<?php endwhile; endif; ?>
				
			<p><strong><a href="/blog">&laquo; Back to the blog.</a></strong></p>
			
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h4>Your thoughts</h4>
					<?php comments_template(); ?>
				</div>
			</div>
		</div>
		
		<div id="sidebar" class="col-md-4">
			<?php get_sidebar() ?>
		</div>
	</div>
  </div>

<?php include('footer.php'); ?>