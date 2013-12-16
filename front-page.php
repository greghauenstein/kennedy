<?php get_header(); ?>

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
			<div id="sociallinks">
				<?php if(isset($options['fburl']) && $options['fburl'] !== '') { ?>
					<a href="<?php echo $options['fburl'] ?>" target="new">
						<img id="socialicons" src="<?php bloginfo('template_url') ?>/img/icon-fb.png" width="50" alt="Facebook Profile <?php echo $options['fburl'] ?>">
					</a>
				<?php } ?>
				<?php if(isset($options['twurl']) && $options['twurl'] !== '') { ?>
					<a href="<?php echo $options['twurl'] ?>" target="new">
						<img id="socialicons" src="<?php bloginfo('template_url') ?>/img/icon-tw.png" width="50" alt="Twitter Profile <?php echo $options['twurl'] ?>">
					</a>
				<?php } ?>
				<?php if(isset($options['igurl']) && $options['igurl'] !== '') { ?>
					<a href="<?php echo $options['igurl'] ?>" target="new">
						<img id="socialicons" src="<?php bloginfo('template_url') ?>/img/icon-ig.png" width="50" alt="Instagram Profile <?php echo $options['igurl'] ?>">
					</a>
				<?php } ?>
			</div> 
		  </div>
	  </div>
	</div><!-- Close .row -->
  </div>
</section>

<section id="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
				<p class="lead ctr"><em>This is where a nice quote about you will go. Oh isn't it nice? Yes, it is very nice.</em></p>
				<p class="ctr upper"><strong>Person Who Said It</strong></p>
			</div>
		</div>
	</div>
</section>

<section id="little-boxes">
  <div class="container">
	
	<div class="row">
	  <?php dynamic_sidebar( 'front' );  ?>	  
	</div>
	
	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
			<h2 class="ctr">Latest news</h2>
			<div id="front-page-articles">
				<?php 
				  $temp = $wp_query; 
				  $wp_query = null; 
				  $wp_query = new WP_Query(); 
				  $wp_query->query('showposts=3&post_type=post'); 
				
				  while ($wp_query->have_posts()) : $wp_query->the_post(); 
				?>			
				<article class="article">
			    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			    	<p class="text-muted upper spaced"><?php the_time('D, M j, Y') ?></p>
			    	<?php the_excerpt(); ?>
			    	<p><a href="<?php the_permalink(); ?>">Read the full post &raquo;</a></p>
			    </article>			
			<?php endwhile; ?>
			</div>
			
			<?php 
			  $wp_query = null; 
			  $wp_query = $temp;  // Reset
			?>
		</div>
	</div>
  </div><!-- Close container -->		
</section>	

<?php include('footer.php'); ?>