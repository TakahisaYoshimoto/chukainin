<?php get_header(); ?>

<!-- main -->
<div class="top_slider">
  <?php echo do_shortcode('[metaslider id=4]'); ?>
</div>
<!-- <%# top_slideshow_end %> -->

<!-- <%# main_contents %> -->
<div class="container">
  <div class="user_page">
    <a href="http://192.168.33.10:3000/index.php/register/">新規会員はこちら</a>
    </br>
    <a href="http://192.168.33.10:3000/index.php/login/">ログインはこちら</a>
    </br>
    <a href="http://192.168.33.10:3000/index.php/myaccount/">マイページはこちら</a>
  </div>

  <div class="credit">
    <p>WP Easy Paypal Payment Acceptです</p>
    <?php echo do_shortcode('[wp_paypal_payment]'); ?>
  </div>
  </br>
  </br>
  <div class="credit2">
    <p>WP Simple Paypal Shopping cartです</p>
  <?php echo do_shortcode('[wp_cart_button name=”投資家アクセス” price=”1900″]'); ?>
  <?php echo do_shortcode('[show_wp_shopping_cart]'); ?>
  </div>

</div><!-- /main -->

<?php get_footer(); ?>
