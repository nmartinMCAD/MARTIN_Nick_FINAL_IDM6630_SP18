<!--<?php echo basename(__FILE__); ?>-->
    <footer class="clearFix">
      <nav class="footNav">
        <ul>
          <li><a href="<?php echo get_page_link( get_page_by_title( shop )->ID ); ?>">Shop</a></li>
          <li><a href="<?php echo get_page_link( get_page_by_title( checkout )->ID ); ?>">Checkout</a></li>
          <li><a href="<?php echo get_page_link( get_page_by_title( about )->ID ); ?>">About</a></li>
        </ul>
      </nav>
      <div class="footStoreInfo">
        <h6><?php echo get_bloginfo('name');?></h6>
        <p></p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>

</html>
<!--<?php echo "END OF " . basename(__FILE__); ?>-->
