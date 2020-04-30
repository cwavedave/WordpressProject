<?php

function podcast_css() {
    wp_enqueue_style('whatever', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','podcast_css'); 
?>
