<!--<?php echo basename(__FILE__); ?>-->

<?php define( 'WP_USE_THEMES', false ); get_header();?>
<?php get_template_part('hero-image');?>

<aside class="desktopCatListContainer clearFix">
  <div class="desktopCatList"><?php get_template_part('desktop-cat-list');?></div>
</aside>

<div class="cartPreview">
  <h3>cart</h3>
  <div class="productDisplay">
    <p>Here's where the products will go. How they will go? Excellent question.</p>
  </div>
  <a href="<?php echo get_page_link( get_page_by_title( checkout )->ID ); ?>"><button class="ctaButton" type="button" name="goToButton">Go To Checkout</button></a>
</div>


<main class="clearFix">

  <?php get_template_part('loop'); ?>

</main>

<?php get_footer(); ?>

<!--<?php echo "END OF " . basename(__FILE__); ?>-->
