<div class="wrapper">
  <?php get_header(); ?>
  <div class="row middle-container full-width-container">
    <?php get_sidebar(); ?>
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
</div>