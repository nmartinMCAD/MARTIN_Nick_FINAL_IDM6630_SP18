<?php

$product_query = array(
    'post_type' => 'product',
    'post_status' => 'publish',
    'category_name' => get_query_var('category_name')
  );

$get_products = new WP_Query($product_query);

if ( $get_products->have_posts() ) : while ( $get_products->have_posts() ) : $get_products->the_post(); ?>
      <article <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>">
          <img src="<?php the_field( 'image' );?>">
          <?php the_field( 'product_name' );?>
          <?php the_field( 'price' );?>
        </a>
      </article>
  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
