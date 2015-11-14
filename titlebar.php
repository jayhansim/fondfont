<div class="title-bar">
  <div class="container">
    <?php $page = get_query_var('paged'); ?>

    <!-- Index -->
    <?php if(is_home()): ?>
      <h1 class="page-title">
        Latest free fonts
        <?php if($page != 0): ?>
          <span> . Page <?php echo $page; ?></span>
        <?php endif; ?>
      </h1>

    <!-- Single -->
    <?php elseif(is_single()) : ?>
      <?php if (have_posts()): the_post(); ?>

        <h1 class="entry-title article__title"><?php the_title(); ?></h1>
        <div class="article__time">
          <?php if(in_category('deals')): ?>
            Ends on <?php the_field('dateline'); ?>
          <?php else : ?>
            <?php the_time('j.F.Y'); ?>
          <?php endif; ?>
        </div>

        <div class="article__cat">
          <?php the_category(''); ?>
        </div>

        <?php if(in_category('deals')): ?>
          <div class="deal__price-sticker">
            <?php the_field('price'); ?>
          </div>
        <?php endif; ?>

      <?php endif; ?>
      <?php rewind_posts(); ?>

    <!-- Page -->
    <?php elseif (is_page()): ?>
      <?php if (have_posts()): the_post(); ?>
        <h1 class="entry-title article__title"><?php the_title(); ?></h1>
      <?php endif; ?>
      <?php rewind_posts(); ?>

    <?php elseif (is_category()) : ?>
      <h1 class="page-title">
        <?php printf(__('%s Fonts'), single_cat_title('', false)); ?>
        <?php if($page != 0): ?>
          <span> . Page <?php echo $page; ?></span>
        <?php endif; ?>
      </h1>
    <?php  elseif( is_tag() ) : ?>
      <h1 class="page-title">
        <?php printf(__('Fonts tagged in &#8216;%s&#8217;'), single_tag_title('', false) ); ?>
        <?php if($page != 0): ?>
          <span> . Page <?php echo $page; ?></span>
        <?php endif; ?>
      </h1>
    <?php elseif (is_day()) : ?>
      <h1 class="page-title">
        <?php printf(_c('Archive for %s|Daily archive page'), get_the_time(__('F jS, Y'))); ?>
        <?php if($page != 0): ?>
          <span> . Page <?php echo $page; ?></span>
        <?php endif; ?>
      </h1>
      <?php elseif (is_tax()) : ?>
      <h1 class="page-title">
        Fonts with <?php echo single_term_title(); ?> styles
        <?php if($page != 0): ?>
          <span> . Page <?php echo $page; ?></span>
        <?php endif; ?>
      </h1>
    <?php elseif (is_month()) : ?>
      <h1 class="page-title">
        <?php printf(_c('Archive for %s|Monthly archive page'), get_the_time(__('F, Y'))); ?>
        <?php if($page != 0): ?>
          <span> . Page <?php echo $page; ?></span>
        <?php endif; ?>
      </h1>
    <?php elseif (is_year()) : ?>
      <h1 class="page-title">
        <?php printf(_c('Archive for %s|Yearly archive page'), get_the_time(__('Y'))); ?>
        <?php if($page != 0): ?>
          <span> . Page <?php echo $page; ?></span>
        <?php endif; ?>
      </h1>
    <?php elseif (is_author()) : ?>
      <h1 class="page-title">
        <?php _e('Author Archive'); ?>
        <?php if($page != 0): ?>
          <span> . Page <?php echo $page; ?></span>
        <?php endif; ?>
      </h1>

    <?php elseif (is_search()) : ?>
      <h1 class="page-title">
        <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; echo $count . ' search results for ' . _e(''); _e('&#8220;'); echo $key; _e('&#8221;'); wp_reset_query(); ?>
        <?php if($page != 0): ?>
          <span> . Page <?php echo $page; ?></span>
        <?php endif; ?>
      </h1>
    <?php else : ?>
      Fondfont
    <?php endif; ?>
  </div>
</div>