<!--<?php echo basename(__FILE__); ?>-->

<nav class="mobileTabNav">
  <label for="menuCheckbox" class="menuClose"><i class="far fa-times-circle"></i></label>
  <ul>
    <li><a href="<?php echo get_page_link( get_page_by_title( shop )->ID ); ?>">Shop</a></li>
    <li class="catList"><?php wp_list_categories('title_li=');?></li>
    <li><a href="<?php echo get_page_link( get_page_by_title( checkout )->ID ); ?>">Checkout</a></li>
    <li><a href="<?php echo get_page_link( get_page_by_title( about )->ID ); ?>">About</a></li>
  </ul>
</nav>

<nav class="desktopNav">
  <ul>
    <li><a href="<?php echo get_page_link( get_page_by_title( shop )->ID ); ?>">Shop</a></li>
    <li><a href="<?php echo get_page_link( get_page_by_title( about )->ID ); ?>">About</a></li>
  </ul>
</nav>

<!--<?php echo "END OF " . basename(__FILE__); ?>-->
