<!--<?php echo basename(__FILE__); ?>-->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<aside class="desktopCatListContainer clearFix">
  <div class="desktopCatList"><?php get_template_part('desktop-cat-list');?></div>
</aside>

<main class="clearFix">

  <?php get_template_part('single-loop'); ?>

</main>


<?php get_footer(); ?>

<!--<?php echo "END OF " . basename(__FILE__); ?>-->
