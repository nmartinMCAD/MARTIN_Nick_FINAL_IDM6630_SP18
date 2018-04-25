<!--<?php echo basename(__FILE__); ?>-->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php get_template_part('hero-image'); ?>
<div class="categoryTitleContainer">
  <h2><?php single_cat_title();?></h2>
</div>

<main>
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
        <div class="productCopy">
          <h3><?php the_field( 'product_name' );?></h3>
          <h4><?php the_field( 'price' );?></h4>
          <button class="ctaButton" type="button" name="quickViewButton">Quick View</button>
        </div>
      </a>
    </article>
  <div class="clearFix"></div>
    <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</main>
<div class="clearFix"></div>

<?php get_footer(); ?>

<!--<?php echo "END OF " . basename(__FILE__); ?>-->
