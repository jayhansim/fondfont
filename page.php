<?php get_header(); ?>

	<?php get_template_part('titlebar'); ?>

	<main class="main" role="main">
		<div class="container">
			<div class="content__main">
  		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
    		<div class="article__content" id="post-<?php the_ID(); ?>">
          <?php the_content(); ?>
    	  	<?php edit_post_link(__('[Edit this page]'), '<br />', ''); ?>
    		</div>
			<?php endwhile; ?>
			<?php else : ?>
    		<h1><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
			<?php endif; ?>
			</div>
			<div class="content__side">
				<?php get_sidebar(); ?>
			</div>

	<?php get_footer(); ?>