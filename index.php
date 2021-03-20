<?php get_header(); ?>
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
    <?php endwhile; ?>
  </div>
  <div class="pagenation">
    <div class="row pages full-width-container">
      <li><</li>
      <li>1</li>
      <li>2</li>
      <li>3</li>
      <li>...</li>
      <li>10</li>
      <li>></li>
    </udiv>
  </div>
</div>
    <!--main end-->
    <!--fotter start-->
<?php get_footer(); ?>