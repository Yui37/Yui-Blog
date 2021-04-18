<div class="wrapper">
  <?php get_header(); ?>
  <div class="row middle-container full-width-container">
    <!--main start-->
    <div class="single-main">
      <div class="blog-container">
        <?php while (have_posts()) : the_post(); ?>
        <div class="single-blog-contents">
          <a href="<?php the_permalink(); ?>"></a>
          <div class="single-blog-title">
            <h1>
              <?php the_title(); ?>
            </h1>
          </div>
          <div class="blog-pic">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="single-blog-content">
            <div class="row single-blog-tags">
              <?php the_tags(' ', '  '); ?>
            </div>
            <div class="single-content-texts">
              <h4>
                <?php the_time('F.d.Y'); ?>
              </h4>
              <p class="blog-paragraph">
              <?php the_content( $more_link_text, $stripteaser ); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="pagenation">
      <?php previous_post_link('%link', '前の記事へ'); ?>
      <?php next_post_link('%link', '次の記事へ'); ?>
    </div>
  </div>
  <?php get_footer(); ?>
</div>
