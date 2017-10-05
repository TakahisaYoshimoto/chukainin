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

    $locales   = __get('locales');
    $user = osc_user();
    osc_enqueue_style('jquery-ui-custom', osc_current_web_theme_styles_url('jquery-ui/jquery-ui-1.8.20.custom.css'));
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('common/head.php'); ?>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
    </head>
    <body>
    <?php osc_current_web_theme_path('header.php'); ?>
    <div class="container">
        <div class="veraari">
            <div class="col-md-3">
                <?php echo osc_private_user_menu( get_user_menu() ); ?>
                <center class="ads-right"><?php echo osc_get_preference('sidebar-160x600', 'royal'); ?></center>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default row">
                    <div class="panel-heading">
                        <h1><?php _e('Update your profile', 'royal'); ?></h1> </div>
                    <div class="panel-body">
                        <?php UserForm::location_javascript(); ?>
                        <script type="text/javascript">
                        $(document).ready(function()
                        {
                            $("#delete_account").click(function()
                            {
                                $("#dialog-delete-account").dialog('open');
                            });
                            $("#dialog-delete-account").dialog(
                            {
                                autoOpen: false,
                                modal: true,
                                buttons:
                                {
                                    "<?php echo osc_esc_js(__('Delete', 'royal')); ?>": function()
                                    {
                                        window.location = '<?php echo osc_base_url(true).' ? page = user & action = delete & id = '.osc_user_id().' & secret = '.$user['s_secret']; ?>';
                                    },
                                    "<?php echo osc_esc_js(__('Cancel', 'royal')); ?>": function()
                                    {
                                        $(this).dialog("close");
                                    }
                                }
                            });
                        });
                        </script>
                        <form action="<?php echo osc_base_url(true); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="page" value="user" />
                            <input type="hidden" name="action" value="profile_post" />
                            <fieldset>
                                <?php if(osc_get_preference('avatar-royal', 'royal')=="yes" ) { ?>
                                <?php osc_current_web_theme_path('common/avatar1.php') ; ?>
                                <?php } ?>
                                <br>
                                <div class="form-group" id="form_name">
                                    <label class="control-label" for="name">
                                        <?php _e("Name", 'royal'); ?> </label>
                                    <?php UserForm::name_text(osc_user()); ?> </div>
                                <div class="form-group" id="form_username">
                                    <label class="control-label" for="username">
                                        <?php _e("Username", 'royal'); ?> </label> <span class="update">
                                <?php echo osc_user_username(); ?><br />
                                <?php if(osc_user_username()==osc_user_id()) { ?>
                                    <a href="<?php echo osc_change_user_username_url(); ?>"><?php _e("ユーザー名を変更します", 'royal'); ?></a>
                                <?php }; ?>
                            </span> </div>
                                <div class="form-group" id="form_email">
                                    <label class="control-label" for="email">
                                        <?php _e("E-mail", 'royal'); ?> </label> <span class="update">
                                <?php echo osc_user_email(); ?><br />
                                <a href="<?php echo osc_change_user_email_url(); ?>"><?php _e("Modify e-mail", 'royal'); ?></a> <a href="<?php echo osc_change_user_password_url(); ?>" ><?php _e("Modify password", 'royal'); ?></a>
                            </span> </div>
                                <div class="form-group" id="form_usertype">
                                    <label class="control-label" for="user_type">
                                        <?php _e("User type", 'royal'); ?> </label>
                                    <?php UserForm::is_company_select(osc_user()); ?> </div>
                                <!--<div class="form-group" id="form_phoneland">
                                    <label class="control-label" for="phoneLand">
                                        <?php //_e("Phone", 'royal'); ?> </label>
                                    <?php //UserForm::phone_land_text(osc_user()); ?> </div>-->
                                <div class="form-group" id="form_phonemobile">
                                    <label for="phoneMobile">
                                        <?php _e("Cell phone", 'royal'); ?> </label>
                                    <?php UserForm::mobile_text(osc_user()); ?> </div>
                                <div class="form-group" id="form_lineid">
                                    <label class="control-label" for="lineid">
                                        <?php _e("LINE ID", 'royal'); ?> </label>
                                    <?php UserForm::line_id_text(osc_user()); ?> </div>
                                <div class="form-group" id="form_contactways">
                                    <label for="contactways">
                                        <?php _e("希望連絡方法", 'royal'); ?> </label>
                                    <?php UserForm::contact_ways_checkbox(osc_user()); ?> </div>
                                <div class="form-group" id="form_sex">
                                    <label for="sex">
                                        <?php _e("性別", 'royal'); ?> </label>
                                    <?php UserForm::sex_radio(osc_user()); ?> </div>
<!--ALTER TABLE  `oc_t_user` ADD  `s_occupation` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT  '職業'-->
                                <div class="form-group" id="form_occupation">
                                    <label class="control-label" for="occupation">
                                        <?php _e("職業", 'royal'); ?> *</label>
                                    <?php UserForm::occupation_select(osc_user()); ?> </div>
<!--ALTER TABLE  `oc_t_user` ADD  `s_legal_personality` SET(  "法人",  "個人" ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT  '法人個人'-->
                                <div class="form-group" id="form_legalpersonality">
                                    <label for="legalpersonality">
                                        <?php _e("法人個人", 'royal'); ?> </label>
                                    <?php UserForm::legal_personality_radio(osc_user()); ?> </div>
<!--ALTER TABLE  `oc_t_user` ADD  `s_company` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT  '会社名'-->
                                <div class="form-group" id="form_company">
                                    <label class="control-label" for="company">
                                        <?php _e("会社名", 'royal'); ?> </label>
                                    <?php UserForm::company_text(osc_user()); ?> </div>
                                <div class="form-group" id="form_zip">
                                    <label class="control-label" for="zip">
                                        <?php _e("郵便番号", 'royal'); ?> </label>
                                    <?php UserForm::zip_text(osc_user()); ?> </div>
                                <div class="form-group" id="form_region">
                                    <label class="control-label" for="region">
                                        <?php _e("都道府県", 'royal'); ?> *</label>
                                    <?php UserForm::region_select(osc_get_regions(), osc_user()); ?> </div>
                                <div class="form-group" id="form_city">
                                    <label class="control-label" for="city">
                                        <?php _e("市区郡", 'royal'); ?> *</label>
                                    <?php UserForm::city_select(osc_get_cities(), osc_user()); ?> </div>
                                <!--<div class="form-group" id="form_cityarea">
                                    <label class="control-label" for="city_area">
                                        <?php //_e("市町番地", 'royal'); ?> </label>
                                    <?php //UserForm::city_area_text(osc_user()); ?> </div>-->
                                <!--<div class="form-group" id="form_country">
                                    <label class="control-label" for="country">
                                        <?php //_e("Country", 'royal'); ?> *</label>
                                    <?php //UserForm::country_select(osc_get_countries(), osc_user()); ?> </div>-->
                                <!--<div class="form-group" id="form_cityarea">
                                    <label class="control-label" for="city_area">
                                        <?php //_e("City area", 'royal'); ?> </label>
                                    <?php //UserForm::city_area_text(osc_user()); ?> </div>-->
                                <div class="form-group" id="form_address">
                                    <label class="control-label" for="address">
                                        <?php _e("市町番地", 'royal'); ?> </label>
                                    <?php UserForm::address_text(osc_user()); ?> </div>
<!--ALTER TABLE  `oc_t_user` ADD  `s_industry_type` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT  '業種'-->
                                <div class="form-group" id="form_industrytype">
                                    <label class="control-label" for="industrytype">
                                        <?php _e("業種", 'royal'); ?> *</label>
                                    <?php UserForm::industry_type_select(osc_user()); ?> </div>
<!--ALTER TABLE  `oc_t_user` ADD  `s_annual_income` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT  'ご年収'-->
                                <div class="form-group" id="form_annualincome">
                                    <label for="annualincome">
                                        <?php _e("ご年収", 'royal'); ?> </label>
                                    <?php UserForm::annual_income_radio(osc_user()); ?> </div>
<!--ALTER TABLE  `oc_t_user` ADD  `s_own_fund` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT  '自己資金'-->
                                <div class="form-group" id="form_ownfund">
                                    <label for="ownfund">
                                        <?php _e("自己資金", 'royal'); ?> </label>
                                    <?php UserForm::own_fund_radio(osc_user()); ?> </div>
<!--ALTER TABLE  `oc_t_user` ADD  `s_retention_item` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT  '保有物件数'-->
                                <div class="form-group" id="form_retentionitem">
                                    <label for="retentionitem">
                                        <?php _e("保有物件数", 'royal'); ?> </label>
                                    <?php UserForm::retention_item_radio(osc_user()); ?> </div>
<!--ALTER TABLE  `oc_t_user` ADD  `s_buying_wish_area` VARCHAR( 10 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT  '購入希望エリア'-->
                                <div class="form-group" id="form_buyingwisharea">
                                    <label class="control-label" for="buyingwisharea">
                                        <?php _e("購入希望エリア", 'royal'); ?> *</label>
                                    <?php UserForm::buying_wish_area_select(osc_get_regions(), osc_user()); ?> </div>
<!--ALTER TABLE  `oc_t_user` ADD  `s_buying_wish_item` VARCHAR( 30 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT  '購入希望物件'-->
                                <div class="form-group" id="form_buyingwishitem">
                                    <label for="buyingwishitem">
                                        <?php _e("購入希望物件", 'royal'); ?> </label>
                                    <?php UserForm::buying_wish_item_checkbox(osc_user()); ?> </div>
<!--ALTER TABLE  `oc_t_user` ADD  `s_buying_wish_value` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT  '購入物件価格帯'-->
                                <div class="form-group" id="form_buyingwishvalue">
                                    <label for="buyingwishvalue">
                                        <?php _e("購入物件価格帯", 'royal'); ?> </label>
                                    <?php UserForm::buying_wish_value_checkbox(osc_user()); ?> </div>
<!--ALTER TABLE `oc_t_user` ADD `s_room_type` VARCHAR(20) CHARACTER SET utownfundtf8_general_ci NOT NULL COMMENT '部屋タイプ'-->
                                <div class="form-group" id="form_roomtype">
                                    <labelown_funde">
                                        <?php _e("部屋タイプ", 'royal'); ?> </label>
                                    <?php UserForm::room_type_checkbox(osc_user()); ?> </div>
<!--ALTER TABLE `oc_t_user` ADD `s_building_age` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '築年数'-->
                                <div class="form-group" id="form_buildingage">
                                    <label for="buildingage">
                                        <?php _e("築年数", 'royal'); ?> </label>
                                    <?php UserForm::building_age_checkbox(osc_user()); ?> </div>
<!--ALTER TABLE `oc_t_user` ADD `s_time_to_the_nearest_station` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '最寄り駅までの時間'-->
                                <div class="form-group" id="form_timetotheneareststation">
                                    <label for="timetotheneareststation">
                                        <?php _e("最寄り駅までの時間", 'royal'); ?> </label>
                                    <?php UserForm::time_to_the_nearest_station_checkbox(osc_user()); ?> </div>
<!--ALTER TABLE `oc_t_user` ADD `s_coupon_yield` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '表面利回り'-->
                                <div class="form-group" id="form_couponyield">
                                    <label for="couponyield">
                                        <?php _e("表面利回り", 'royal'); ?> </label>
                                    <?php UserForm::coupon_yield_checkbox(osc_user()); ?> </div>
<!--ALTER TABLE `oc_t_user` ADD `s_important_item` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '重視する項目'-->
                                <div class="form-group" id="form_importantitem">
                                    <label for="importantitem">
                                        <?php _e("重視する項目", 'royal'); ?> </label>
                                    <?php UserForm::important_item_checkbox(osc_user()); ?> </div>
<!--ALTER TABLE `oc_t_user` ADD `s_offer_template_title` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'オファーテンプレートタイトル'-->
                                <div class="form-group" id="form_offertemplatetitle">
                                    <label class="control-label" for="offertemplatetitle">
                                        <?php _e("オファーテンプレート（タイトル）", 'royal'); ?> </label>
                                    <?php UserForm::offer_template_title_text(osc_user()); ?> </div>
<!--ALTER TABLE `oc_t_user` ADD `s_offer_template_body` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'オファーテンプレート本文'-->
                                <div class="form-group" id="form_offertemplatebody">
                                    <label class="control-label" for="offertemplatebody">
                                        <?php _e("オファーテンプレート（本文）", 'royal'); ?> </label>
                                    <div class="controls">
                                        <?php UserForm::offer_template_body_textarea( 's_offer_template_body', osc_locale_code(), $user['s_offer_template_body']); ?> </div>
                                <!--<div class="form-group" id="form_website">
                                    <label class="control-label" for="webSite">
                                        <?php //_e("Website", 'royal'); ?> </label>
                                    <?php //UserForm::website_text(osc_user()); ?> </div>-->
                                <!--<div class="form-group" id="form_sinfo">
                                    <label class="control-label" for="s_info">
                                        <?php //_e( 'Description', 'royal'); ?> </label>
                                    <div class="controls">
                                        <?php //UserForm::info_textarea( 's_info', osc_locale_code(), @$osc_user[ 'locale'][osc_locale_code()][ 's_info']); ?> </div>
                                </div>-->
                                <div class="form-group">
                                    <button class="btn btn-primary btn-lg" type="submit"><span class="fa fa-check-square" aria-hidden="true"></span>
                                        <?php _e("Update", 'royal'); ?> </button>
                                    <button class="btn btn-danger btn-lg" id="delete_account" type="button"><span class="fa fa-warning" aria-hidden="true"></span>
                                        <?php _e("Delete my account", 'royal'); ?> </button>
                                </div>
                                <?php osc_run_hook('user_form'); ?> </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="dialog-delete-account" title="<?php echo osc_esc_html(__('Delete account','royal')); ?>" class="has-form-actions">
        <div class="form-horizontal">
            <div class="form-row">
                <p>
                    <?php _e("All your listings and alerts will be removed, this action can not be undone.", 'royal');?> </p>
            </div>
        </div>
    </div>
    <?php osc_current_web_theme_path('footer.php'); ?> 
</body>
</html>