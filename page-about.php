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
            <div class="about-container full-width-container">
                <div class="about-contents about-picture">
                    <div class="profile-picture">
                        <img src="/wp-content/themes/YUI-BLOG/bikewithflag.jpg" alt="Yuiのホームページ" class= "bike">
                    </div>

                    <div class="profile-content about">
                        <div class="about-title">
                            <h1>About Me</h1>
                        </div>
                        <div class="about-content dental">
                            <i class="fas fa-tooth"></i>
                            <div class="about-text">
                                <h2>歯科衛生士</h2>
                                <h3>Dental Hygienist</h3>
                            </div>
                        </div>
                        <div class="about-content frontend">
                            <i class="fas fa-code"></i>
                            <div class="about-text">
                                <h2>フロントエンドエンジニア</h2>
                                <h3>Front-end Engineer</h3>
                            </div>
                        </div>
                        <div class="about-content working-holoday">
                            <i class="fab fa-canadian-maple-leaf"></i>
                            <div class="about-text">
                                <h2>カナダワーホリ経験者</h2>
                                <h3>Experienced Canada WH</h3>
                            </div>
                        </div>
                    </div>

                    <div class="profile-content hobby">
                        <div class="hobby-title">
                            <h1>Hobby</h1>
                        </div>
                        <div class="tlavel">
                            <!--自分のパソコン内にある画像に差し替え必要-->
                            <div class="travel-picture hobby-pictures">
                                <img src="/wp-content/themes/YUI-BLOG/bikewithflag.jpg" alt="Yuiのホームページ" class= "bike">
                            </div>
                            <h2>旅行</h2>
                            <h3>travel</h3>
                        </div>
                        <div class="saxophone">
                            <!--自分のパソコン内にある画像に差し替え必要-->
                            <div class="saxophone-picture hobby-pictures">
                                <img src="/wp-content/themes/YUI-BLOG/bikewithflag.jpg" alt="Yuiのホームページ" class= "bike">
                            </div>
                            <h2>Sax演奏</h2>
                            <h3>saxophone</h3>
                        </div>

                        <div class="profile-content skill">
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
            </div>
        </main>
        <?php get_footer(); ?>
    </body>
</html>