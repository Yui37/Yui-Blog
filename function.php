<?php
    function my_script_init() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_style', 'my_script_init' );
?>