<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <meta name="description" content="Say goodbye to HR paperwork for good. Collage HR automates your HR tasks so that you and your team can focus on providing the best service possible." />

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@collagehr">
  <meta name="twitter:title" content="Collage HR | All-in-one HR Platform">
  <meta name="twitter:description" content="Say goodbye to HR paperwork for good. Collage HR automates your HR tasks so that you and your team can focus on providing the best service possible.">
  <meta name="twitter:creator" content="@collagehr">

  <!-- Twitter Summary card images must be at least 120x120px -->
  <meta name="twitter:image" content="/wp-content/themes/collage/assets/img/restaurant-manager-with-overlay.png">

  <!-- Open Graph data -->
  <meta property="og:title" content="Collage HR | All-in-one HR Platform" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://www.collage.co/collage-for-restaurants" />
  <meta property="og:description" content="Say goodbye to HR paperwork for good. Collage HR automates your HR tasks so that you and your team can focus on providing the best service possible." /> 
  <meta property="og:site_name" content="Collage HR" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
  <link href="https://unpkg.com/basscss@8.0.2/css/basscss.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


