<?php

function podcast_css() {
wp_enqueue_script('js',get_theme_file_uri('/js/scripts-bundled.js'), NULL /* Has Dependicies? */ , '1.0' /*Version Number */ , true /* Wordpress wants to know if you want to load this file right before the bottom */ );
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('whatever', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','podcast_css'); 

function university_features() {
    add_theme_support('title-tag');
} 

add_action('after_setup_theme', 'university_features')
?>

