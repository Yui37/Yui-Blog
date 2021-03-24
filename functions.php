<?php
    // css読み込み
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // menuの項目作成
    // function register_my_menus() {
    //     register_nav_menus(
    //       array(
    //         'about' => __( 'About' ),
    //         'works' => __( 'Works' ),
    //         'blog' => __( 'Blog' ),
    //         'contact' => __( 'Contact' )
    //        )
    //      );
    //    }
    //    add_action( 'init', 'register_my_menus' );

    function init_func(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
    add_action('init', 'init_func');
?>