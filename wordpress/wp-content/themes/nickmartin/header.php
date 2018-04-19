<!--<?php echo basename(__FILE__); ?>-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo get_bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <header>
      <h1><?php echo get_bloginfo('name'); ?></h1>
      <h2>SHOP!</h2>
      <?php get_template_part('nav'); ?>
    </header>
<!--<?php echo "END OF " . basename(__FILE__); ?>-->
