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
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">

<head>
    <?php //osc_current_web_theme_path('common/head.php'); ?>
    <!--<meta name="robots" content="index, follow" />-->
    <link rel="stylesheet" href="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/css/reset.css">
    <link rel="stylesheet" href="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/css/style.css">
    
    <!--[if IE 6]>
      <style type="text/css">
          * html .group {
              height: 1%;
          }
      </style>
    <![endif]--> 
    <!--[if IE 7]>
      <style type="text/css">
          *:first-child+html .group {
              min-height: 1px;
          }
      </style>
    <![endif]--> 
    <!--[if lt IE 9]> 
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
    <![endif]--> 
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Allura:regular&amp;subset=latin,latin-ext">
</head>

<body>
    <?php //osc_current_web_theme_path('header.php') ; ?>
    <div class="container">
        <?php royal_show_flash_message() ; ?> 
    </div>
    <?php osc_current_web_theme_path('templates/home/'.osc_get_preference('home-royal', 'royal').'.php') ; ?>
    <?php //osc_current_web_theme_path('footer.php') ; ?> 
</body>

</html>