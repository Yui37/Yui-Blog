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
                    <div class="humberger-menu-container column-sm-3">
                        <nav class="navbar navbar-dark">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </nav>
                        <div class="collapse" id="navbarToggleExternalContent">
                            <div class="p-4">
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
                        </div>
                    </div>
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
            </header>

            <main>
                <div class="works-container full-width-container">
                    <div class="works-contets">
                        <div class="works-title">
                            <h1>Works</h1>
                        </div>
                        <div class="works-content">
                            <div class="works-picture">
                                <!-- リンクへ -->
                                <a href="">
                                    <!--自分のポートフォリオに差し替え必要-->
                                    <img src="/wp-content/themes/YUI-BLOG/images/bikewithflag.jpg" alt="Yuiのホームページ">
                                </a>
                            </div>
                            <div class="works-skills">
                                <h2>HTML / CSS / JavaScript / Sass / Bootstrap</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php get_footer(); ?>
        </div>
    </body>
</html>