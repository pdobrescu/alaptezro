<?php
add_action( 'wp_enqueue_scripts', 'artificer_enqueue_styles' );
function artificer_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
