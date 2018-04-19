<?php

  function create_custom_post_type() {

    $labels =array(
      'name'                 => _x( 'Products', 'post type general name' ),
      'singular_name'        => _x( 'Product', 'post type singular name' ),
      'add_new'              => _x( 'Add New', 'product' ),
      'add_new_item'         => 'Add New Product',
      'edit_item'            => 'Edit Product',
      'new_item'             => 'New Product',
      'all_items'            => 'All Products',
      'view_item'            => 'View Product',
      'search_items'         => 'Search Products',
      'not_found'            => 'No Products Found',
      'not_found_in_trash'   => 'No Products Found in the Trash',
      'parent_item_colon'    => '',
      'menu_name'            => 'Products'
    );

    $args =array(
      'labels' => $labels,
      'menu_position' => 5,
      'support' => array( 'title', 'editor', 'thumbnail' ),
      'public' => true
    );

    register_post_type( 'product', $args );
  }

  add_action('init', 'create_custom_post_type');

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
