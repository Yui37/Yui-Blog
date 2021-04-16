<!doctype html>
<html lang="jp">
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
        <div class="wrapper">
            <header>
                <div class="row header-container full-width-container">
                    <div class="site-title column-6 column-md-5 column-sm-5">
                        <h1>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?>
                                </a>
                            </li>
                        </h1>
                    </div>
                    <div class="row menu-container column-3 column-md-4">
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
                <nav id="s-navi" class="pcnone">
                    <dl class="acordion">
                        <dt class="trigger"></dt>
                        <div id="nav-drawer">
                            <input id="nav-input" type="checkbox" class="nav-unshown">
                            <label id="nav-open" for="nav-input"><span></span></label>
                            <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                            <div id="nav-content">
                                <!--中身-->
                                <div class="hamburger-top">MENU<label class="cancel" for="nav-input"></label></div>
                                <?php
                                    if ( has_nav_menu( 'smartphone-menu' ) ) :
                                    $defaults = array(
                                        'theme_location' => 'smartphone-menu',
                                    );
                                    else :
                                    $defaults = array(
                                        'theme_location' => 'primary-menu',
                                    );
                                    endif;
                                ?>
                                <?php wp_nav_menu( $defaults ); ?>
                            </div>
                            <!--中身ここまで-->
                        </div>
                    </dl>
                </nav>
            </header>