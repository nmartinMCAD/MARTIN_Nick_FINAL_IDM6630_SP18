<!--<?php echo basename(__FILE__); ?>-->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class('clearFix'); ?>>
        <img src="<?php the_field( 'image' );?>">
        <div class="productCopy clearFix">
          <h3><?php the_field( 'product_name' );?></h3>
          <h4><?php the_field( 'price' );?></h4>
            <div class="qtyCounter clearFix">
              <button type="button" name="minusButton"><i class="fas fa-minus"></i></button>
              <input type="text" name="itemQTY" value="1">
              <button type="button" name="minusButton"><i class="fas fa-plus"></i></button>
            </div>
          <button class="ctaButton" type="button" name="addToCartButton">Add to Cart</button>
        </div>
        <div class="addlInfoContainer">
          <div class="addlInfo">
            <h5 class="showMore">DESC</h5><i class="fas fa-plus"></i>
            <div class="descriptionContainer">
              <p><?php the_field( 'description' );?></p>
            </div>
          </div>
          <div class="addlInfo">
            <h5 class="showMore">SPECS</h5><i class="fas fa-plus"></i>
            <div class="specificationsContainer">
              <p><?php the_field( 'specifications' );?></p>
            </div>
          </div>
        </div>
    </article>
  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
<!--<?php echo "END OF " . basename(__FILE__); ?>-->
