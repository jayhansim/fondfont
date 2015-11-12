<?php get_header(); ?>

  <?php get_template_part('titlebar'); ?>

  <main class="main" role="main">
    <div class="container">
      <div class="content__main">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

        <div class="article__content" id="post-<?php the_ID(); ?>">

          <?php the_content(); ?>

          <div class="font__download">
            <a href="<?php the_field('link'); ?>" class="btn btn-download" target="_blank">Download <?php the_title(); ?></a>
          </div>

          <?php if(get_field('full_image')) : ?>
            <div class="entry-featured-image">
              <h2>Font previews</h2>
              <?php the_field('full_image'); ?>
            </div>
          <?php endif; ?>

          <div class="postmetadata">
            <?php // the_tags(__('<span>Tag:</span>') . ' ', ', ', '<br />'); ?>
            <?php //echo get_the_term_list( $post->ID,'style', 'Style: ', ' ',' ',' '); ?>
          </div>


        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <h1 id="error"><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
        <?php endif; ?>
      </div>

      <div class="content__side">
        <?php get_sidebar(); ?>
      </div>








<?php get_footer(); ?>