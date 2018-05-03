<?php

  function create_custom_post_types() {

    $productLabels =array(
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

    $productArgs =array(
      'labels' => $productLabels,
      'menu_position' => 5,
      'support' => array( 'title', 'editor', 'thumbnail' ),
      'taxonomies' => array( 'tags','category' ),
      'has_archive' => true,
      'public' => true
    );

    register_post_type( 'product', $productArgs );

    register_taxonomy( 'categories', array('products'), array(
      'hierarchical' => true,
      'label' => 'Categories',
      'singular_label' => 'Category',
      'rewrite' => array( 'slug' => 'categories', 'with_front'=> false )
      )
    );

    $heroImageLabels =array(
      'name'                 => _x( 'Hero Images', 'post type general name' ),
      'singular_name'        => _x( 'Hero Image', 'post type singular name' ),
      'add_new'              => _x( 'Add New', 'heroImage' ),
      'add_new_item'         => 'Add New Image',
      'edit_item'            => 'Edit Image',
      'new_item'             => 'New Image',
      'all_items'            => 'All Images',
      'view_item'            => 'View Images',
      'search_items'         => 'Search Images',
      'not_found'            => 'No Images Found',
      'not_found_in_trash'   => 'No Images Found in the Trash',
      'parent_item_colon'    => '',
      'menu_name'            => 'Hero Images'
    );

    $heroImageArgs =array(
      'labels' => $heroImageLabels,
      'menu_position' => 6,
      'public' => true
    );

    register_post_type( 'heroImage', $heroImageArgs );
  }

  add_action('init', 'create_custom_post_types');

  add_theme_support( 'post-thumbnails' );

  function load_theme_scripts() {
    wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/css/theme-styles.css');
    wp_enqueue_script( 'jquery-3.2.1.min', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
    wp_enqueue_script( 'featherlight.min', get_template_directory_uri() . '/js/featherlight.min.js');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', true);
  }

  add_action( 'wp_enqueue_scripts', 'load_theme_scripts' );


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
