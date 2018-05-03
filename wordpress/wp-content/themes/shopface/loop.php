<!--<?php echo basename(__FILE__); ?>-->

<?php

  $product_query = array(
    'post_type' => 'product',
    'post_status' => 'publish',
    'posts_per_page' => -1
  );

  $get_products = new WP_Query($product_query);

  if ( $get_products->have_posts() ) : while ( $get_products->have_posts() ) : $get_products->the_post(); ?>
      <article <?php post_class('clearFix'); ?>>
        <a href="<?php the_permalink(); ?>">
          <img src="<?php the_field( 'image' );?>">
          <div class="productCopy">
            <h3><?php the_field( 'product_name' );?></h3>
            <h4><?php the_field( 'price' );?></h4>
            <button class="ctaButton" type="button" name="quickViewButton"  data-featherlight="#mylightbox">Quick View</button>
            <div class="hide" id="mylightbox">
                <img src="<?php the_field( 'image' );?>">
                <h3><?php the_field( 'product_name' );?></h3>
                <h4><?php the_field( 'price' );?></h4>
                <p><?php the_field( 'description' );?></p>
            </div>
          </div>
        </a>

      </article>
  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
<!--<?php echo "END OF " . basename(__FILE__); ?>-->
