<!--<?php echo basename(__FILE__); ?>-->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<main>

  <?php get_template_part('single-loop'); ?>

</main>

<?php get_footer(); ?>

<!--<?php echo "END OF " . basename(__FILE__); ?>-->
