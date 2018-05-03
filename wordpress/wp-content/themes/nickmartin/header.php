<!--<?php echo basename(__FILE__); ?>-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <header class="siteHeader">
      <input type="checkbox" name="menuCheckbox" id="menuCheckbox" class="menuCheckbox" value="value">
      <label for="menuCheckbox" class="menuCheckbox"><i class="fas fa-bars"></i></label>

      <h1><a href="http://localhost:8080/shop"><?php echo get_bloginfo('name');?></a></h1>

      <a href="http://localhost:8080/checkout"><i class="fas fa-shopping-cart"></i></a>

      <?php get_template_part('nav'); ?>
    </header>
<!--<?php echo "END OF " . basename(__FILE__); ?>-->
