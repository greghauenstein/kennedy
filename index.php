<?php get_header(); ?> 
  <div class="container">
	<div class="page-container row">
		
	<div id="posts" class="col-md-8">
		<h1 class="ctr black">My campaign blog</h1>
			
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			  <div class="entry">
				<h2 id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
				<?php the_title(); ?></a></h2>
				<p><span class="glyphicon glyphicon-calendar"></span> <?php the_time('F jS, Y') ?></p>
				
				<div id="page-content">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
			  </div>
			<?php endwhile; ?>
			
			<?php else : ?>
			 <h2 class="center">Not Found</h2>
			 <p class="center">
			<?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
			
			<?php endif; ?>
	</div><!-- END POSTS -->
	
		<div id="sidebar" class="col-md-4">
			<?php include('sidebar.php') ?>
		</div>
	</div>
  </div>
<?php include('footer.php') ?>