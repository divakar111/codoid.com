<?php
/*
Plugin Name: Codoid Home Slider
Plugin URI: http://www.smartsoftwaresinc.com/
Description: Home Slider
Author: SmartSoftwares
Author URI: http://www.smartsoftwaresinc.com/
*/
?>
<?php
add_action('init', 'Home_Slider');
function Home_Slider() {
	$labels = array(
		'name' => _x('Home Slider', 'post type general name'),
		'singular_name' => _x('home_slider', 'post type singular name'),
		'add_new' => _x('Add Slide', 'banner'),
		'add_new_item' => __('Add Slide'),
		'edit_item' => __('Edit Slide'),
		'new_item' => __('New Slide'),
		'view_item' => __('View Slide'),
		'search_items' => __('Search Slide'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => null,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 
	register_post_type( 'home_slider' , $args );
}
?>