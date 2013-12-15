<?php 
/* 
 * Template Name: Archives 
 * Description: A Page Template that lets us created a dedicated Archives page
*/

get_header(); ?>
  <div class="container">
	<div class="page-container row">
		<div id="page-content" class="col-md-8">		
			
			<?php the_post(); ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					
					<?php get_search_form(); ?>
					
					<h2>Archives by Month:</h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
					
					<h2>Archives by Subject:</h2>
					<ul>
						 <?php wp_list_categories(); ?>
					</ul>
		
		</div>
		
		<div id="sidebar" class="col-md-4">
			<?php get_sidebar() ?>
		</div>
	</div>
  </div>
<?php get_footer(); ?>