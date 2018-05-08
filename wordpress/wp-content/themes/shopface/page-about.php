

<!--<?php echo basename(__FILE__); ?>-->
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php get_template_part('hero-image'); ?>
<div class="pageTitleContainer">
  <h2><?php single_post_title();?></h2>
</div>

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

<main class="aboutMain clearFix">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article <?php post_class('clearFix'); ?>>
        <img src="<?php the_field( 'about_image' ); ?>" alt="Shop owner profile pic">
        <?php the_content();?>
      </article>
  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
<!--<?php echo "END OF " . basename(__FILE__); ?>-->
