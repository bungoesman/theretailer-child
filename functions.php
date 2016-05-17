<?php

//import TheRetailer css
add_action( 'wp_enqueue_scripts', 'theretailer_enqueue' );
function theretailer_enqueue() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


?>