
  <?php get_template_part('titlebar'); ?>

  <main class="main" role="main">
    <div class="container">

      <ul class="loop cf">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
        <li id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>

    		<?php if ( has_post_thumbnail() ) { ?>
        <?php $imgsrcparam = array(
    					'alt'	=> trim(strip_tags( $post->post_excerpt )),
    					'title'	=> trim(strip_tags( $post->post_title )),
    					);
              $thumbID = get_the_post_thumbnail( $post->ID, 'background', $imgsrcparam ); ?>

        <div class="article__image">
          <?php if(in_category('deals')): ?>
            <div class="deal__price-sticker">
              <?php the_field('price'); ?>
            </div>
          <?php endif; ?>
          <a href="<?php the_permalink() ?>">
            <?php echo "$thumbID"; ?>
          </a>
        </div>
        <?php } else {?>
        <div class="article__image">
          <a href="<?php the_permalink() ?>">
            <img src="<?php bloginfo('template_url'); ?>/images/default-thumbnail.jpg" alt="<?php the_title(); ?>" />
          </a>
        </div>
        <?php } ?>

        <div class="article__content">
          <h2 class="article__title entry-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>

          <div class="article__time">
            <?php if(in_category('deals')): ?>
              Ends on <?php the_field('dateline'); ?>
            <?php else : ?>
              <?php the_time('j.F.Y'); ?>
            <?php endif; ?>

          </div>

          <?php the_excerpt(); ?>

          <div class="article__cat">
            <?php the_category(''); ?>
          </div>


          </div>
        </li>
        <?php endwhile; ?>
        <?php else : ?>
          <h1 class="title__404"><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
        <?php endif; ?>
      </ul>

      <div class="ad ad__leaderboard ad__leaderboard--bottom">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- FF - Leaderboard Responsive -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-8642281896248767"
             data-ad-slot="8464730509"
             data-ad-format="horizontal"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>

      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>