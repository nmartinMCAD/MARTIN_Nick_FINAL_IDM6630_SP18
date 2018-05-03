<!--<?php echo basename(__FILE__); ?>-->
<?php
    $heroImage_query = array(
      'post_type' => 'heroImage',
      'post_status' => 'publish'
    );

    $get_heroImage = new WP_Query($heroImage_query);

    if ( $get_heroImage->have_posts() ) : while ( $get_heroImage->have_posts() ) : $get_heroImage->the_post(); ?>
      <div class="heroImageContainer">
        <img class="heroImage" src="<?php the_field( 'image' );?>" alt="banner image of guitar pedal board in black and white">
      </div>
    <?php endwhile; else : ?>
    <?php endif; ?>
<!--<?php echo "END OF " . basename(__FILE__); ?>-->
