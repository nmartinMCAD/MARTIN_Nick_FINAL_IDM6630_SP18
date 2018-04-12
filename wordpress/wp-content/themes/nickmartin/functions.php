<?php


  add_theme_support( 'post-thumbnails' );

  function loadCSS() {
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/theme-styles.css');
  }

  add_action( 'wp_enqueue_scripts', 'loadCSS' );

  function customBodyClasses($myClasses) {

    if (is_single()) {
      $myClasses[] = 'mySingleClass';
    }

    $myClasses[] = 'myBodyClass';

    return $myClasses;
  }

  add_filter( 'body_class', 'customBodyClasses' );

  add_filter( 'show_admin_bar', '__return_false' );


?>
