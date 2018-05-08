<!--<?php echo basename(__FILE__); ?>-->
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<div class="pageTitleContainer">
  <h2><?php single_post_title();?></h2>
</div>

<aside class="desktopCatListContainer clearFix">
  <div class="desktopCatList"><?php get_template_part('desktop-cat-list');?></div>
</aside>

<main class="checkoutMain clearFix">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article <?php post_class('clearFix'); ?>>
        <?php the_content();?>
      </article>
  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
<!--<?php echo "END OF " . basename(__FILE__); ?>-->
