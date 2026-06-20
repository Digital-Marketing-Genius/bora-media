<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


function tp_blogist_scripts(){
   // enqueue parent style
	wp_enqueue_style('tp-blogist-parent-style', get_theme_file_uri() . '/style.css');
    
}
add_action('wp_enqueue_scripts', 'tp_blogist_scripts');


function tp_blogist_register_block_pattern_categories(){
    register_block_pattern_category(
        'tp-blogist',
        array( 'label' => __( 'TP Blogist', 'tp-blogist' ) )
    );

}
add_action('init', 'tp_blogist_register_block_pattern_categories');

