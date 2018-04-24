<!--<?php echo basename(__FILE__); ?>-->
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php get_template_part('hero-image'); ?>

<main>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article <?php post_class(); ?>>
        <?php the_content();?>
      </article>
  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
<!--<?php echo "END OF " . basename(__FILE__); ?>-->
