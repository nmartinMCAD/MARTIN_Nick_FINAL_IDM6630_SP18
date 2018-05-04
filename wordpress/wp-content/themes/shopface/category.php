<!--<?php echo basename(__FILE__); ?>-->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php get_template_part('hero-image'); ?>
<div class="categoryTitleContainer">
  <h2><?php single_cat_title();?></h2>
</div>

<aside class="desktopCatListContainer clearFix">
  <div class="desktopCatList"><?php get_template_part('desktop-cat-list');?></div>
</aside>

<main class="clearFix">
  <?php

  $product_query = array(
      'post_type' => 'product',
      'post_status' => 'publish',
      'category_name' => get_query_var('category_name')
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
                <p>QTY</p>
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
</main>

<?php get_footer(); ?>

<!--<?php echo "END OF " . basename(__FILE__); ?>-->
