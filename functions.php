<?php

/* ========================================= Featured Images ========================================= */

add_theme_support( 'post-thumbnails', array( 'post', 'slides' ) ); /* ===== ADDS FEATURED IMAGE TO PAGES ===== */
add_image_size( 'blog_image', 590, 400, true ); /* ===== SETS FEATURED IMAGE SIZE  ===== */
add_image_size( 'slide_image', 600, 300, true ); /* ===== SETS FEATURED IMAGE SIZE  ===== */
add_image_size( 'single_latest', 170, 120, true ); /* ===== SETS FEATURED IMAGE SIZE  ===== */

function kennedy_customize_register( $wp_customize ) {
	$wp_customize->add_section('kennedy_home_page', array(
	    'title'    => __('Home Page Options', 'Kennedy'),
	    'priority' => 150,
	));
	
		$wp_customize->add_setting('first_impressions_bg', array(
			'default'           => 'http://placehold.it/400x300/eaeaea/aaaaaa&text=Upload+image',
			'capability'        => 'edit_theme_options',
			'type' 				=> 'theme_mod',
		));
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'first_impressions_bg', array(
			    'label'    => __('Background Image', 'Kennedy'),
			    'section'  => 'kennedy_home_page',
			    'settings' => 'first_impressions_bg',
			)));
		
		$wp_customize->add_setting('first_impressions_mobile_fallback', array(
		        'default'           => 'http://placehold.it/400x300/eaeaea/aaaaaa&text=Upload+image',
		        'capability'        => 'edit_theme_options',
		        'type'           	=> 'theme_mod', 
		));
		    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'first_impressions_mobile_fallback', array(
		        'label'    => __('Mobile Fallback Image', 'Kennedy'),
		        'section'  => 'kennedy_home_page',
		        'settings' => 'first_impressions_mobile_fallback',
		    )));	
}
add_action( 'customize_register', 'kennedy_customize_register' );
    
function kennedy_customize_css() { ?>
	<style type="text/css">
    	#first-impression { 
        	background-color: #C3DCE8;
            background-image: url(<?php echo get_theme_mod('first_impressions_bg'); ?>);
            background-repeat: no-repeat;
            background-position: center center; 
             -webkit-background-size: cover;
             -moz-background-size: cover;
             -o-background-size: cover;
            background-size: cover;
        }
    </style>
<?php }

add_action( 'wp_head', 'kennedy_customize_css');

function first_impressions_mobile_fallback() { ?>
	<img class="frame visible-xs" src="<?php echo get_theme_mod('first_impressions_mobile_fallback'); ?>" />
<?php }

/* ========================================= SIDEBAR ========================================= */

if ( function_exists('register_sidebar') ) {

   register_sidebar(array(
	'name' 			=> 'Main Sidebar',
	'id' 			=> 'Sidebar',
	'description'   => __('These widgets will show up on every page and post, excluding the home page.'),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => ''
    ));

   register_sidebar(array(
	'name' 			=> 'Front Page Columns',
	'id' 			=> 'front',
	'description'   => __('These columns are on the front page.'),
	'before_widget' => '<div class="col-sm-4 col-md-4"><div class="thumbnail">',
	'after_widget'  => '</div></div>',
	'before_title'  => '',
	'after_title'   => ''
   ));

}

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Kennedy' ),
) );

add_theme_support('post-thumbnails', array('post'));

/* Add a custom field to the field editor (See editor screenshot) */
add_action("gform_field_standard_settings", "my_standard_settings", 10, 2);

function my_standard_settings($position, $form_id){

// Create settings on position 25 (right after Field Label)

if($position == 25){
?>
		
<li class="admin_label_setting field_setting" style="display: list-item; ">
<label for="field_placeholder">Placeholder Text

<!-- Tooltip to help users understand what this field does -->
<a href="javascript:void(0);" class="tooltip tooltip_form_field_placeholder" tooltip="&lt;h6&gt;Placeholder&lt;/h6&gt;Enter the placeholder/default text for this field.">(?)</a>
			
</label>
		
<input type="text" id="field_placeholder" class="fieldwidth-3" size="35" onkeyup="SetFieldProperty('placeholder', this.value);">
		
</li>
<?php
}
}

/* Now we execute some javascript technicalitites for the field to load correctly */

add_action("gform_editor_js", "my_gform_editor_js");

function my_gform_editor_js(){
?>
<script>
//binding to the load field settings event to initialize the checkbox
jQuery(document).bind("gform_load_field_settings", function(event, field, form){
jQuery("#field_placeholder").val(field["placeholder"]);
});
</script>

<?php
}

/* We use jQuery to read the placeholder value and inject it to its field */

add_action('gform_enqueue_scripts',"my_gform_enqueue_scripts", 10, 2);

function my_gform_enqueue_scripts($form, $is_ajax=false){
?>
<script>

jQuery(function(){
<?php

/* Go through each one of the form fields */

foreach($form['fields'] as $i=>$field){

/* Check if the field has an assigned placeholder */
			
if(isset($field['placeholder']) && !empty($field['placeholder'])){
				
/* If a placeholder text exists, inject it as a new property to the field using jQuery */
				
?>
				
jQuery('#input_<?php echo $form['id']?>_<?php echo $field['id']?>').attr('placeholder','<?php echo $field['placeholder']?>');
				
<?php
}
}
?>
});
</script>
<?php
}




?>