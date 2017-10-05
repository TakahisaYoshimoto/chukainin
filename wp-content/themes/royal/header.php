<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="stylesheet" href="css/lightbox.css">
  	<script src="js/prototype.js" type="text/javascript"></script>
  	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <!--bootstrap.min.cssの読み込み-->
    <link href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/homeicon.jpg">

    <?php
    //WordPress自体の読み込みをキャンセル
    wp_deregister_script( 'jquery' );
    //バージョンの指定
    wp_enqueue_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
    ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <p>header.phpが表示されています。</p>
