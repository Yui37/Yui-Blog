<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/779dc48fa9.js" crossorigin="anonymous"></script>
    <title><?php bloginfo('name'); ?></title>
    　<?php wp_head(); ?>
  </head>
  <body>
    <!--header start-->
    <div class="wrapper">
        <header>
            <div class="row header-container full-width-container">
                <div class="site-title column-6 column-md-5 column-sm-3">
                    <h1>
                        <a href="http://rain.local">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                </div>
                <div class="row menu-container column-3 column-md-4 column-sm-4">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header-menu',
                                // 'header-menu' => 'primary',
                                // 'link_before' => '<div class="blog">',
                                // 'link_after' => '</div>',
                                )
                            );
                    ?>
                </div>
                <div class="sns column-2 column-md-2 column-sm-2">
                    <?php get_template_part( 'sns' ); ?>
                </div>
            </div>
        </header>