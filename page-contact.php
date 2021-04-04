<!doctype html>
<html lang="jp">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://kit.fontawesome.com/779dc48fa9.js" crossorigin="anonymous"></script>
        <title><?php bloginfo('name'); ?></title>
        　<?php wp_head(); ?>
    </head>
    <body>

        <header>
            <div class="row header-container full-width-container">
                <div class="site-title column-6 column-sm-7 column-md-6">
                    <h1>
                        <?php bloginfo('name'); ?>
                    </h1>
                </div>
                <div class="menu-container column-3 column-md-4 column-sm-2">
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
                <div class="sns column-2 column-sm-3 column-md-2">
                    <?php get_template_part( 'sns' ); ?>
                </div>
            </div>
        </header>

        <main>
            <div class="works full-width-container">
                <div class="works-container">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeVPPdigfbzD8v01iuW7G5u1hsPLgPeAxzbYc-FvBpGvMc1Ag/viewform?embedded=true" width="640" height="852" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
                </div>
            </div>
        </main>
        <?php get_footer(); ?>
    </body>
</html>