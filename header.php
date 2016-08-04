<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  <?php wp_head(); ?>

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@WminSmokeTV">
  <meta name="twitter:creator" content="@WminSmokeTV">
  <meta name="twitter:title" content="Smoke TV">
  <meta name="twitter:description" content="Student television at the University of Westminster">
  <meta name="twitter:image" content="http://uwsu.com/tv/wp-content/uploads/sites/5/2016/08/13669634_1169001193166863_7980080959781773292_n.jpg">

  <meta property="fb:app_id" content="1134129026651501" />
  <meta property="og:url" content="<?php the_permalink() ?>"/>
  <meta property="og:title" content="Smoke TV" />
  <meta property="og:description" content="Student television at the University of Westminster" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="http://uwsu.com/tv/wp-content/uploads/sites/5/2016/08/13669634_1169001193166863_7980080959781773292_n.jpg">

</head>
<body>


<section id="overlay"></section>

<header id="normal" class="mobilehide">
  <div class="container">
    <nav>
      <?php wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
    </nav>
    <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
    </nav>
  </div>
</header>

<?php get_template_part( "search-modal" ); ?>




<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Social-feed css -->
<link href="<?php echo get_template_directory_uri(); ?>/bower_components/social-feed/css/jquery.socialfeed.css" rel="stylesheet" type="text/css">

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Codebird.js - required for TWITTER -->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/codebird-js/codebird.js"></script>
<!-- doT.js for rendering templates -->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/doT/doT.min.js"></script>
<!-- Moment.js for showing "time ago" and/or "date"-->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/moment/min/moment.min.js"></script>
<!-- Moment Locale to format the date to your language (eg. italian lang)-->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/moment/locale/it.js"></script>
<!-- Social-feed js -->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/social-feed/js/jquery.socialfeed.js"></script>
