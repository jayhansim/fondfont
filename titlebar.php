<div class="title-bar">
  <div class="container">
    <?php $page = get_query_var('paged'); ?>
    <?php if(is_home()): ?>
      <h1 class="page-title">
        Latest free fonts
        <?php if($page != 0): ?>
          <span> . Page <?php echo $page; ?></span>
        <?php endif; ?>
      </h1>
    <?php elseif(is_single()) : ?>
      <?php if (have_posts()): the_post(); ?>

        <h1 class="entry-title article__title"><?php the_title(); ?></h1>
        <div class="article__time">
          <?php the_time('j.F.Y'); ?>
        </div>

        <div class="article__cat">
          <?php the_category(''); ?>
        </div>
      <?php endif; ?>
      <?php rewind_posts(); ?>
    <?php else : ?>
      Fondfont
    <?php endif; ?>
  </div>
</div>