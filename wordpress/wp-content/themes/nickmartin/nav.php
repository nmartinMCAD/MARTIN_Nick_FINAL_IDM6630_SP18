<!--<?php echo basename(__FILE__); ?>-->

<nav class="topNav">
  <label for="menuCheckbox" class="menuClose"><i class="far fa-times-circle"></i></label>
  <ul>
    <li><a href="http://localhost:8080/shop">Shop</a></li>
    <li class="catList"><?php wp_list_categories('title_li=');?></li>
    <li><a href="http://localhost:8080/checkout">Checkout</a></li>
    <li><a href="http://localhost:8080/about">About</a></li>
  </ul>
</nav>

<!--<?php echo "END OF " . basename(__FILE__); ?>-->
