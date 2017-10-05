<!-- footer -->
<div class="footer">
  <div class="footer_items hidden-xs hidden-sm col-md-12">
    <a href="<?php echo get_permalink( get_page_by_path('会社案内') ->ID ); ?>">会社案内</a>
    <p>/</p>
    <a href="<?php echo get_permalink( get_page_by_path('利用規約') ->ID ); ?>">利用規約</a>
    <p>/</p>
    <a href="<?php echo get_permalink( get_page_by_path('プライバシーポリシー') ->ID ); ?>">プライバシーポリシー</a>
    <p>/</p>
    <a href="<?php echo esc_url( get_home_url() ); ?>">ホーム</a>
    <p>/</p>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'マガジン' ))) ?>">マガジン</a>
    <p>/</p>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'お買い物' ))) ?>">ショッピング</a>
    <p>/</p>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( '地域のイベント' ))) ?>">地域のイベント</a>
    <p>/</p>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( '地域のお店' ))) ?>">地域のお店</a>
  </div>

  <div class="footer_items hidden-md hidden-lg col-xs-12">
    <a href="<?php echo esc_url( get_home_url() ); ?>">ホーム</a>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'マガジン' ))) ?>">マガジン</a>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'お買い物' ))) ?>">ショッピング</a>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( '地域のイベント' ))) ?>">地域のイベント</a>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( '地域のお店' ))) ?>">地域のお店</a>
    <a href="<?php echo get_permalink( get_page_by_path('会社案内') ->ID ); ?>">会社案内</a>
    <a href="<?php echo get_permalink( get_page_by_path('利用規約') ->ID ); ?>">利用規約</a>
    <a href="<?php echo get_permalink( get_page_by_path('プライバシーポリシー') ->ID ); ?>">プライバシーポリシー</a>
  </div>

  <div class="footer_text">
    <div class="sm_footer hidden-xs hidden-sm col-md-12">
      <p>Copyright &copy; 2017 YOSHIMOTO SHINBUNHO All Rights Reserved.</p>
    </div>
    <div class="xs_footer col-xs-12 hidden-md hidden-lg">
      <p>Copyright &copy; 2017</br> YOSHIMOTO SHINBUNHO All Rights Reserved.</p>
    </div>
  </div>
</div><!-- /footer -->
  <?php wp_footer(); ?>
  <script src="js/lightbox.min.js"></script>
  </body>
</html>
