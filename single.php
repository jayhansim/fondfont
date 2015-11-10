<?php get_header(); ?>
<!-- -->
  <main role="main" id="main">

    <div class="entry">
      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <div class="entry-featured-image">
        <?php echo get_post_meta($post->ID, 'full_image', true); ?>
      </div>
      <div class="article" id="post-<?php the_ID(); ?>">

        <?php the_content(); ?>

<div class="ad ad--insidepost">
<!-- FF - MidRec -->
<ins class="adsbygoogle"
style="display:inline-block;width:300px;height:250px"
data-ad-client="ca-pub-8642281896248767"
data-ad-slot="4259793707"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>

        <div class="article-download-link">
          <a href="<?php echo get_post_meta($post->ID, 'link', true) ?>" target="_blank">Download</a>
        </div>

        <div class="postmetadata">
          <?php printf(__('<span>Category:</span> %s'), get_the_category_list(', ')); ?><br />
          <?php the_tags(__('<span>Tag:</span>') . ' ', ', ', '<br />'); ?>
          <?php echo get_the_term_list( $post->ID,'style', 'Style: ', ' ',' ',' '); ?>
        </div>


      </div>
      <?php endwhile; ?>
      <?php else : ?>
      <h1 id="error"><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
      <?php endif; ?>

    <?php get_sidebar(); ?>

  </div>
  </main>

<?php get_footer(); ?>