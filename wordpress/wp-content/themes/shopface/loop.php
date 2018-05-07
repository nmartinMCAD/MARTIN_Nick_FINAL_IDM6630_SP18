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
          </div>
          </a>
          <button class="ctaButton" type="button" name="quickViewButton"  data-featherlight="#quickViewLightbox<?php echo get_the_id(); ?>">Quick View</button>
          <div class="hide clearFix" id="quickViewLightbox<?php echo get_the_id(); ?>">
              <img src="<?php the_field( 'image' );?>">
              <div class="lightboxCopyContainer clearFix">
                <h3><?php the_field( 'product_name' );?></h3>
                <h4><?php the_field( 'price' );?></h4>
                <p class="lightboxCopy"><?php the_field( 'description' );?></p>
              </div>
              <div class="lightboxShoppingUI clearFix">
                <div class="qtyCounter clearFix">
                  <button type="button" name="minusButton"><i class="fas fa-minus"></i></button>
                  <input type="text" name="itemQTY" value="1">
                  <button type="button" name="minusButton"><i class="fas fa-plus"></i></button>
                </div>
                <button class="ctaButton" type="button" name="addToCartButton">Add to Cart</button>
              </div>
              <a class="fullDescLink clearFix" href="<?php the_permalink(); ?>">Go to Full Description<i class="fas fa-caret-right"></i></a>
          </div>
      </article>
  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
<!--<?php echo "END OF " . basename(__FILE__); ?>-->
