<?php

function randomAlphaNumeric($length) {
    $pool = array_merge(range(0,9), range('a', 'z'),range('A', 'Z'));
    $key='';
    for($i=0; $i < $length; $i++) {
        $key .= $pool[mt_rand(0, count($pool) - 1)];
    }
    return $key;
}


function podcast_css() {
    wp_enqueue_style('whatever', get_stylesheet_uri().'?random='.randomAlphaNumeric(5));
}

add_action('wp_enqueue_scripts','podcast_css'); 
?>
