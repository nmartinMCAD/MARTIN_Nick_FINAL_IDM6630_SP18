<!--<?php echo basename(__FILE__); ?>-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo get_bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <header class="siteHeader">
      <i class="fas fa-bars"></i>
      <h1><a href="http://localhost:8080/shop"><?php echo get_bloginfo('name'); ?></a></h1>
      <i class="fas fa-shopping-cart"></i>
      <?php get_template_part('nav'); ?>
    </header>

<?php
    $heroImage_query = array(
      'post_type' => 'heroImage',
      'post_status' => 'publish'
    );

    $get_heroImage = new WP_Query($heroImage_query);

    if ( $get_heroImage->have_posts() ) : while ( $get_heroImage->have_posts() ) : $get_heroImage->the_post(); ?>
      <div class="heroImageContainer">
        <img class="heroImage" src="<?php the_field( 'image' );?>" alt="banner image of guitar pedal board in black and white">
      </div>
    <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no images matched your criteria.' ); ?></p>
    <?php endif; ?>


<!--<?php echo "END OF " . basename(__FILE__); ?>-->
