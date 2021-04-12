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
                            <a href="http://rain.local">
                                <?php bloginfo('name'); ?>
                            </a>
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
                <div class="about-wrap full-width-container">
                    <div class="about-contents">
                        <div class="about-content about">
                            <div class="about-title">
                                <h1>About Me</h1>
                            </div>
                            <div class="profile-picture">
                                <img src="/wp-content/themes/YUI-BLOG/images/bikewithflag.jpg" alt="Yuiのホームページ" class="about-bike">
                            </div>
                            <div class="about-who dental">
                                <i class="fas fa-tooth"></i>
                                <div class="about-text">
                                    <h2>歯科衛生士</h2>
                                    <h3>Dental Hygienist</h3>
                                </div>
                            </div>
                            <div class="about-who frontend">
                                <i class="fas fa-code"></i>
                                <div class="about-text">
                                    <h2>フロントエンドエンジニア</h2>
                                    <h3>Front-end Engineer</h3>
                                </div>
                            </div>
                            <div class="about-who working-holoday">
                                <i class="fab fa-canadian-maple-leaf"></i>
                                <div class="about-text">
                                    <h2>カナダワーホリ経験者</h2>
                                    <h3>Experienced Canada WH</h3>
                                </div>
                            </div>
                        </div>

                        <div class="about-content hobby">
                            <div class="hobby-title">
                                <h1>Hobby</h1>
                            </div>
                            <div class="hobby-content">
                                <div class="tlavel">
                                    <div class=" travel-pictures hobby-pictures">
                                        <img src="/wp-content/themes/YUI-BLOG/images/montreal.jpeg" alt="Yuiのホームページmontreal" class= "travel-picture montreal">
                                        <img src="/wp-content/themes/YUI-BLOG/images/uyuni.jpeg" alt="Yuiのホームページuyuni" class= "travel-picture uyuni">
                                        <img src="/wp-content/themes/YUI-BLOG/images/aurora.jpeg" alt="Yuiのホームページaurora" class= "travel-picture aurora">
                                        <img src="/wp-content/themes/YUI-BLOG/images/germany.jpeg" alt="Yuiのホームページgermany" class= "travel-picture germany">
                                    </div>
                                    <div class="about-text">
                                        <h2>旅行</h2>
                                        <h3>travel</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="hobby-content">
                                <div class="saxophone">
                                    <!--自分のパソコン内にある画像に差し替え必要-->
                                    <div class="saxophone-picture hobby-pictures">
                                        <img src="/wp-content/themes/YUI-BLOG/images/sax.jpeg" alt="Yuiのホームページsax" class= "sax">
                                    </div>
                                    <div class="about-text">
                                        <h2>Sax演奏</h2>
                                        <h3>saxophone</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="about-content skill">
                            <div class="skill-title">
                                <h1>Skill</h1>
                            </div>
                            <div class="skill-contents">
                                <div class="skill-content frontend">
                                    <i class="fab fa-html5"></i>
                                    <h2>HTML5</h2>
                                </div>
                                <div class="skill-content frontend">
                                    <i class="fab fa-css3-alt"></i>
                                    <h2>CSS3</h2>
                                </div>
                                <div class="skill-content frontend">
                                    <i class="fab fa-js-square"></i>
                                    <h2>JavaScript</h2>
                                </div>
                                <div class="skill-content frontend">
                                    <i class="fab fa-sass"></i>
                                    <h2>Sass</h2>
                                </div>
                                <div class="skill-content frontend">
                                    <i class="fab fa-bootstrap"></i>
                                    <h2>Bootstrap</h2>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
            <?php get_footer(); ?>
        </div>
    </body>
</html>