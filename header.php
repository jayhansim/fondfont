<!DOCTYPE html>
<html>
<head>
	<title>
    <?php wp_title(""); ?>
  </title>
	<meta charset="utf-8" >
  <meta name="viewport" content="initial-scale=1,width=device-width">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1"><![endif]-->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
  <script>var iAJSLoader={scripts:[],stateTracker:[],curGroupIndex:0,onCompleteCalled:!1,onComplete:function(){console.log("iJSLoader Completed!")},onStateChange:function(t,e,a,r){this.stateTracker[t]=this.stateTracker[t]||{},this.stateTracker[t].total=e.length;var o=!1;return function(){o||this.readyState&&"complete"!=this.readyState||(o=!0,iAJSLoader.stateTracker[t].loaded=iAJSLoader.stateTracker[t].loaded||0,iAJSLoader.stateTracker[t].loaded++,iAJSLoader.stateTracker[t].loaded==iAJSLoader.stateTracker[t].total&&iAJSLoader[r]())}},init:function(t){this.scripts=t,this.loadNextGroup()},loadNextGroup:function(){if(!this.scripts.length){if(this.onCompleteCalled)return;this.onCompleteCalled=!0}for(var t=this.scripts.shift(),e=0;e<t.length;e++){var a=t[e],r=document.createElement("script");r.type="text/javascript",r.async="async",r.src=a,r.onload=r.onreadystatechange=this.onStateChange(this.curGroupIndex,t,a,"loadNextGroup");var o=document.head||document.getElementsByTagName("script")[0];o.appendChild(r)}this.curGroupIndex++}};</script>
  <script>
      iAJSLoader.init([
        [
          "//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js",
          "<?php bloginfo('template_url'); ?>/js/modernizr.min.js"
        ],
        [
          "<?php bloginfo('template_url'); ?>/js/main.min.js"
        ]
      ]);
  </script>
</head>
<body <?php body_class(); ?>>

	<header class="header" id="top" role="banner">
    <div class="container">
      <a href="<?php bloginfo("url"); ?>/" class="logo logo--header"><?php bloginfo("name"); ?></a>
      <h3 class="site-description"><?php bloginfo("description"); ?></h3>
    </div>


  </header>

  <div class="title-bar">
    <div class="container">
      <?php if(is_home()): ?>
        Latest font news
      <?php else : ?>
        Fondfont
      <?php endif; ?>
    </div>
  </div>


  <!-- <nav role="navigation" id="menu">
    <div id="cats">
      <ul>
        <li><a href="<?php bloginfo("url"); ?>/" title=""<?php if ( is_front_page()) { ?> class="active"<?php } ?>>Home</a></li>
        <li><a href="#categories" id="menu-cat" title="">Categories</a></li>
        <?php
		      if ( function_exists( 'wp_nav_menu' ) ) {
		    	wp_nav_menu( array( 'theme_location' => 'custom-menu' , 'container' => '' , 'fallback_cb'=> 'custom_menu' , 'depth' => 1 ) ); }
		    else
			    { custom_menu(); }
		    ?>
        <li><a href="#search" id="menu-search" title="">Search</a></li>
      </ul>
    </div>
  </nav> -->

  <!-- <div id="categories" class="cf">
    <ul>
	  <?php
      $data = wp_list_categories('show_count=1&echo=0&title_li=&depth=1&orderby=ID');
      $data = preg_replace('/\<\/a\> \((.*)\)/',' <span>$1</span></a>',$data);
      echo $data;
      ?>
    </ul>
  </div>
  <div id="search" class="cf">
		<?php get_search_form(); ?>
  </div> -->

  <!--<div class="ad ad--leaderboard">
    <div class="container">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
       FF- leaderboard
      <ins class="adsbygoogle"
           style="display:inline-block;width:728px;height:90px"
           data-ad-client="ca-pub-8642281896248767"
           data-ad-slot="3980592108"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
  </div>-->

  <main class="main" role="main">
    <div class="container">
