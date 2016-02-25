<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?><?php wp_title(' - ', true, 'left'); ?></title>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/wpcore.css">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/webflow.css">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/norcal-hs-league.webflow.css">

  <!-- OUR FINAL STYLES -->
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Varela Round:400","Archivo Narrow:regular,italic,700,700italic"]
      }
    });
  </script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr.js"></script>
  <!-- FAVICONS SHOULD GO HERE -->
  <?php wp_head(); ?>
</head>
<body class="homebody">