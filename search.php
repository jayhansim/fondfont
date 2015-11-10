<?php get_header(); ?>
<h1>Search Result for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('&#8220;'); echo $key; _e('&#8221;'); _e(' &mdash; '); echo $count . ' '; _e('articles'); wp_reset_query(); ?></h1>
<?php get_template_part('loop'); ?>
<?php get_footer(); ?>
