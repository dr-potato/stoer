<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicon, generate the favicons with: http://realfavicongenerator.net -->
    <!-- Apple touch icons should be accessible from the root of the site, and do not have to be linked here -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

    <!-- Include only one concatenated stylesheet here, minified -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">

    <!-- Head scripts, avoid including scripts here -->
    <!-- Don't forget to compile and minify the used modernizr features, or to remove it when unused -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/modernizr.js"></script>

    <!-- Wordpress head function -->
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >

  <header class="Header <?php include 'includes/header-bg.php'; ?>">
    <div class="Header-nav">
      <div class="u-gridContainer">
        <!-- Main navigation -->
        <?php include 'includes/navigation.php'; ?>
      </div>
    </div>
    <div class="Header-logo">
      <div class="u-gridContainer">
        <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Stoer Advocatuur Logo"></a>
      </div>
    </div>
  </header>
