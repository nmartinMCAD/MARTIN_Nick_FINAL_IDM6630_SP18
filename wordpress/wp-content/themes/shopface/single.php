

<!--<?php echo basename(__FILE__); ?>-->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<aside class="desktopCatListContainer clearFix">
  <div class="desktopCatList"><?php get_template_part('desktop-cat-list');?></div>
</aside>

<div class="cartPreview">
  <h3>cart</h3>
  <div class="productDisplay">
    <p>This is ideally where a cart preview feature would live however, coding a dynamic cart from scratch proved too lengthy an endeavor for the time remaining.</p>
  </div>
  <a href="<?php echo get_page_link( get_page_by_title( checkout )->ID ); ?>"><button class="ctaButton" type="button" name="goToButton">Go To Checkout</button></a>
</div>

<main class="clearFix">

  <?php get_template_part('single-loop'); ?>

</main>


<?php get_footer(); ?>

<!--<?php echo "END OF " . basename(__FILE__); ?>-->
