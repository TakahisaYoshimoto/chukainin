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

    osc_enqueue_script('jquery-validate');
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('common/head.php'); ?>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
    </head>
   <body>
    <style>
    .controls {
    margin-top: 0px;
    }
    .breadcrumb {
        text-align: center;
    }
    </style>
    <?php UserForm::js_validation(); ?>
    <?php osc_current_web_theme_path('header.php'); ?>
    <div class="container">
        <div class="wrapper">
            <form name="register" id="register" action="<?php echo osc_base_url(true); ?>" method="post" class="form-signin">
                <input type="hidden" name="page" value="register" />
                <input type="hidden" name="action" value="register_post" />
                <fieldset>
                    <h3 class="form-signin-heading"><?php _e("Register an account for free", 'royal'); ?></h3>
                    <hr class="colorgraph">
                    <br>
                    <ul id="error_list"></ul>
                    <div class="form-group" id="name_div">
                        <label class="control-label" for="name_last">
                            <?php _e("名前（姓）", 'royal'); ?> </label>
                        <div class="controls" id="name_last_controls div">
                            <?php UserForm::name_last_text(); ?> </div>
                        <label class="control-label" for="name_first">
                            <?php _e("名前（名）", 'royal'); ?> </label>
                        <div class="controls" id="name_first_controls_div">
                            <?php UserForm::name_first_text(); ?> </div>
                    </div>
                    <div class="form-group" id="password_div">
                        <label class="control-label" for="password">
                            <?php _e("Password", 'royal'); ?> </label>
                        <div class="controls" id="password_controls_div">
                            <?php UserForm::password_text(); ?> </div>
                    </div>
                    <div class="form-group" id="retype_password_div">
                        <label class="control-label" for="password">
                            <?php _e("Re-type password", 'royal'); ?> </label>
                        <div class="controls" id="retype_password_controls_div">
                            <?php UserForm::check_password_text(); ?> </div>
                    </div>
                    <p id="password-error" style="display:none;">
                        <?php _e("Passwords don't match", 'royal '); ?>.
                    </p>
                    <div class="form-group" id="email_div">
                       <label class="control-label" for="email"><?php _e("E-mail", 'royal '); ?></label> 
                       <div class="controls" id="email_controls_div"><?php UserForm::email_text(); ?></div>
                    </div>
                    <div class="form-group" id="usertype_div">
                        <label class="control-label" for="user_type">
                            <?php _e("User type", 'royal'); ?> </label>
                        <div class="controls" id="usertype_controls_div">
                            <?php UserForm::company_radio(osc_user()); ?> </div>
                    </div>
                    <div class="form-group">
                       <?php osc_run_hook('user_register_form'); ?>
                    </div>
                    <div class="form-group">
                       <?php osc_show_recaptcha('register'); ?>
                    </div>
                    <button class="btn btn-success btn-lg topper seratus" type="submit"><span class="fa fa-group" aria-hidden="true"></span> <?php _e("新規登録", 'royal '); ?></button>
                    <div class="jarak"></div>
                    <?php if(osc_get_preference('fb-us', 'royal')=="yes" ) { ?>
                    <?php osc_current_web_theme_path('common/fb.php') ; ?> 
                    <?php } ?>
                </fieldset>
            </form>
        </div>
    </div>
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>