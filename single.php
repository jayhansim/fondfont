<?php get_header(); ?>

  <?php get_template_part('titlebar'); ?>

  <main class="main" role="main">
    <div class="container">
      <div class="content__main">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

        <div class="article__content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php the_content(); ?>

          <?php if(get_field('designer')) : ?>
            <ul class="font__info">
              <li><strong>Designer:</strong> <?php the_field('designer'); ?></li>
              <li><strong>Styles:</strong> <?php the_field('styles'); ?></li>
              <li><strong>Category:</strong> <?php the_category(', '); ?></li>
              <li><strong>Tag:</strong> <?php echo get_the_term_list( $post->ID,'style', '', ' ',' ',' '); ?></li>
            </ul>
          <?php endif; ?>


            <div class="font__download">
              <?php if(!in_category('deals')) : ?>
                <a href="<?php the_field('link'); ?>" class="btn btn-download" target="_blank">Download font</a>

                <?php if(get_field('permission')) : ?>
                  <div class="font__download__info">
                  <p><?php the_field('permission'); ?></p>
                  <?php if(get_field('license')) : ?>
                    <p><?php the_field('license'); ?></p>
                  <?php endif; ?>
                  </div>
                <?php endif; ?>
              <?php else : ?>
                <a href="<?php the_field('link'); ?>" class="btn btn-download" target="_blank"><?php the_field('price'); ?> - Buy at <?php the_field('deal_provider'); ?></a>
                <div class="font__download__info">
                  <p class="color-deal"><?php the_field('saving'); ?></p>
                  <p>Ends on <?php the_field('dateline'); ?></p>
                </div>
              <?php endif; ?>
            </div>


          <?php if(get_field('full_image')) : ?>
            <div class="font__featured-image">
              <h2>Font previews</h2>
              <?php the_field('full_image'); ?>
            </div>
          <?php endif; ?>

          <?php if(get_field('fontbook_preview')) : ?>
            <div class="font__featured-image">
              <h2>Font previews</h2>
              <img class="wp-image" alt="<?php the_title(); ?>" src="<?php the_field('fontbook_preview'); ?>">
            </div>
          <?php endif; ?>

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