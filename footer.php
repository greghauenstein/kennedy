<footer>
	<div class="blue-overlay">
	  <div class="container">
		<div class="row">
		  <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
		  	<?php wp_nav_menu( array(
				'menu'              => 'primary',
			    'theme_location'    => 'footer',
			    'depth'             =>  2,
			    'container'         => 'div',
			    'container_class'   => 'navbar-ex1-collapse',
			    'menu_id'         	=> 'footer-nav',
			    'menu_class'        => 'nav nav-pills nav-justified',
			    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			    'walker'            => new wp_bootstrap_navwalker())
			    );
			?>
		  </div>
		</div>
		<div class="row">
		  <div class="col-md-12 col-sm-12">	
			<p class="caps ctr"><?php echo $options['committee_addr'] ?></p>
	
			<div id="disclaimer">
				<p class="caps">Paid for by <?php echo $options['committee_name'] ?></p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
</footer>

<script src="<?php bloginfo('template_url') ?>/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url') ?>/js/plugins.js" type="text/javascript"></script>

<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>  

<?php wp_footer(); ?>
</body>

</html>