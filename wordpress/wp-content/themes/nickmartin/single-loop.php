<!--<?php echo basename(__FILE__); ?>-->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class(); ?>>
        <img src="<?php the_field( 'image' );?>">
        <div class="productCopy">
          <h3><?php the_field( 'product_name' );?></h3>
          <h4><?php the_field( 'price' );?></h4>
            <div class="qtyCounter">
              <p>QTY</p>
              <button type="button" name="minusButton"><i class="fas fa-minus"></i></button>
              <input type="text" name="itemQTY" value="1">
              <button type="button" name="minusButton"><i class="fas fa-plus"></i></button>
            </div>
            <div class="clearFix"></div>
          <button class="ctaButton" type="button" name="addToCartButton">Add to Cart</button>
        </div>
        <div class="clearFix"></div>
        <div class="addlInfo">
          <h5>DESC</h5><i class="fas fa-plus"></i>
        </div>
        <div class="addlInfo">
          <h5>SPECS</h5><i class="fas fa-plus"></i>
        </div>
    </article>
    <div class="clearFix"></div>
  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
<!--<?php echo "END OF " . basename(__FILE__); ?>-->
