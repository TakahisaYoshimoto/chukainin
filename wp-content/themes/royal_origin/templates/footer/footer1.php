<?php
    /*
     *       Royal Multipurpose Osclass Themes
     *       
     *       Copyright (C) 2016 OSCLASS.me
     * 
     *       This is Royal Multipurpose Osclass Themes with Single License
     *  
     *       This program is a commercial software. Copying or distribution without a license is not allowed.
     *         
     *       If you need more licenses for this software. Please read more here <http://www.osclass.me/osclass-me-license/>.
     */
?>
<!-- footer -->
<div class="container"><center class="ad-footers"><?php echo osc_get_preference('homepage-728x90', 'royal'); ?></center></div>

<footer id="footer" class="navbar-default">
    <div class="full">
        <div id="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 info-box">
                        <h2 class="title"><?php echo osc_get_preference('judul1-royal', 'royal'); ?></h2>
                        <div>
                            <?php echo osc_get_preference('widget1-royal', 'royal'); ?> </div>
                    </div>
                    <div class="col-md-3 col-sm-6 info-box">
                        <h2 class="title"><?php echo osc_get_preference('judul2-royal', 'royal'); ?></h2>
                        <div>
                            <?php echo osc_get_preference('widget2-royal', 'royal'); ?> </div>
                    </div>
                    <div class="col-md-3 col-sm-6 info-box">
                        <h2 class="title"><?php echo osc_get_preference('judul3-royal', 'royal'); ?></h2>
                        <div>
                            <?php echo osc_get_preference('widget3-royal', 'royal'); ?> </div>
                    </div>
                    <div class="col-md-3 col-sm-6 info-box">
                        <h2 class="title"><?php echo osc_get_preference('judul4-royal', 'royal'); ?></h2>
                        <div>
                            <?php echo osc_get_preference('widget4-royal', 'royal'); ?> </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 clearfix">
                        <p class="copyright">
                            <?php echo osc_get_preference('copyright-royal', 'royal'); ?> </p>
                        <div class="links">
                            <a style="margin-right:10px;" href="<?php echo osc_contact_url(); ?>">
                                <?php _e("Contact", 'royal'); ?> </a>
                            <?php osc_reset_static_pages(); ?>
                            <?php while( osc_has_static_pages() ) { ?>
                            <a style="margin-right:10px;" href="<?php echo osc_static_page_url(); ?>">
                                <?php echo osc_static_page_title(); ?> </a>
                            <?php } ?> </div>
                    </div>
                    <?php if ( osc_count_web_enabled_locales()> 1) { ?>
                    <?php osc_goto_first_locale(); ?>
                    <ul class="negara">
                        <li class="layang">
                            <?php _e("Language", 'royal') ; ?> </li>
                        <?php $i=0 ; ?>
                        <?php while ( osc_has_web_enabled_locales() ) { ?>
                        <li <?php if( $i==0 ) { echo "class='first'"; } ?>><a id="<?php echo osc_locale_code(); ?>" href="<?php echo osc_change_language_url ( osc_locale_code() ); ?>"><img src="<?php echo osc_current_web_theme_url() ; ?>/images/language/<?php echo osc_locale_code(); ?>.png"></a> </li>
                        <?php $i++; ?>
                        <?php } ?> </ul>
                    <?php } ?> </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<a href="#0" class="cd-top"><?php _e("Top", 'royal');?></a>
<script src="<?php echo osc_current_web_theme_js_url('top.js') ; ?>"></script>
<script type="text/javascript">
 NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);
</script>
</script>
<script>$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
});
</script>