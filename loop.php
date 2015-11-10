<main role="main" id="main">
  <?php /* If this is a category archive */ if (is_category()) { ?>
    <h1><?php printf(__('%s Fonts'), single_cat_title('', false)); ?></h1>
  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    <h1><?php printf(__('Fonts tagged in &#8216;%s&#8217;'), single_tag_title('', false) ); ?></h1>
  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <h1><?php printf(_c('Archive for %s|Daily archive page'), get_the_time(__('F jS, Y'))); ?></h1>
    <?php /* If is a taxonomy archive */ } elseif (is_tax()) { ?>
    <h1>Fonts with <?php echo single_term_title(); ?> styles</h1>
  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h1><?php printf(_c('Archive for %s|Monthly archive page'), get_the_time(__('F, Y'))); ?></h1>
  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h1><?php printf(_c('Archive for %s|Yearly archive page'), get_the_time(__('Y'))); ?></h1>
  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h1><?php _e('Author Archive'); ?></h1>
  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h1><?php _e('Blog Archives'); ?></h1>
  <?php } ?>

  <ul class="loop cf">
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
      <li id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>

  		<?php if ( has_post_thumbnail() ) { ?>
      <?php $imgsrcparam = array(
  					'alt'	=> trim(strip_tags( $post->post_excerpt )),
  					'title'	=> trim(strip_tags( $post->post_title )),
  					);
            $thumbID = get_the_post_thumbnail( $post->ID, 'background', $imgsrcparam ); ?>

      <div class="preview">
        <a href="<?php the_permalink() ?>"><?php echo "$thumbID"; ?></a>
      </div>
      <?php } else {?>
      <div class="preview"><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/images/default-thumbnail.jpg" alt="<?php the_title(); ?>" /></a></div>
      <?php } ?>

      <div class="article-over">
        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>

          <!--<div class="shortcut-download">
            <a href="<?php echo get_post_meta($post->ID,'link',true) ?>" target="_blank">Download</a>
          </div>-->
        </div>
      </li>
      <?php endwhile; ?>
      <?php else : ?>
        <h1 id="error"><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
      <?php endif; ?>
    </ul>

  <div class="ad ad--leaderboard">
  <ins class="adsbygoogle"
       style="display:inline-block;width:728px;height:90px"
       data-ad-client="ca-pub-8642281896248767"
       data-ad-slot="2461358502"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  </div>

  <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</main>