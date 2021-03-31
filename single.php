<!doctype html>
<html lang="">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/779dc48fa9.js" crossorigin="anonymous"></script>
    <title><?php bloginfo('name'); ?></title>
    　<?php wp_head(); ?>
  </head>
  <body>
    <!--header start-->
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
    <!--header end-->
    <div class="row middle-container full-width-container">
    <div class="page-title column-sm-12">
      <h2>Yui Blog</h2>
    </div>
      <!--main start-->
      <div class="main-bar column-9 column-sm-12 column-md-9">
        <div class="blog-container">
        <?php while (have_posts()) : the_post(); ?>
        <div class="blog-contents">
          <a href="<?php the_permalink(); ?>">
          <div class="blog-pic">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="blog-content">
            <div class="row blog-tags">
              <p class="blog-tag"><?php single_tag_title(); ?></p>
              <p class="blog-tag"><?php single_tag_title(); ?></p>
              <p class="blog-tag"><?php single_tag_title(); ?></p>
              <p class="blog-tag"><?php single_tag_title(); ?></p>
              <p class="blog-tag"><?php single_tag_title(); ?></p>
            </div>
            <div class="content-texts">
              <h1>
                <?php the_title(); ?>
              </h1>
              <h4>
                <?php the_time('F.d.Y'); ?>
              </h4>
              <p class="blog-paragraph">
                <?php the_excerpt(); ?>
              </p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <div class="pagenation">
      <?php
        $args = array(
            'mid_size' => 1,
            'prev_text' => '&lt;&lt;prev',
            'next_text' => 'next&gt;&gt;',
            'screen_reader_text' => ' ',
        );
        the_posts_pagination($args);
      ?>
      </div>
    </div>
  </div>
</div>
    <!--main end-->
    <!--fotter start-->
    <?php get_footer(); ?>
  </body>
</html>