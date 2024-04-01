<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>

  
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TRTKH93');</script>
<!-- End Google Tag Manager -->
  
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  
  <!--Google Font-->
  <link href="https://fonts.googleapis.com/css?family=Alex+Brush%7CNoto+Serif+JP&display=swap" rel="stylesheet">
  <!--favicon-->  
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/favicon.ico">  
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/apple-touch-icon.png">  
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/android-chrome-256x256.png">
  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

  <link rel='dns-prefetch' href='http://www.ajax.googleapis.com' />
  <link rel='dns-prefetch' href='//s.w.org' />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  
 	<?php wp_head(); ?>	  
</head>
  
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRTKH93"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<header class="header">
  <!--SP用Header-->
  <div class="sp">
    <div class="header_title">
      <a class="header_logo" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ultra_tis_logo.png" alt="ultra pay">
      </a>
      <a class="menu_trigger" href="#">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>
    <nav class="header_nav">
      <ul class="header_nav_list">
        <li>
          <a href="<?php echo home_url(); ?>">
             トップ
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/ultracompany">
            会社概要
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/pressrelease">
            ニュース
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/index.php#anchor_service">
            サービス
          </a>
        </li>      
      </ul>
      <div class="header_line sp"></div>
      <div class="header_intec_link">
        <a href="https://www.tis.co.jp/group/" target="_blank">&gt;TISインテックグループ</a>
      </div>
    </nav> 
  </div>
  
  <!--PC用Header-->
  <div class="pc">
    <div class="sub_header">
      <div class="sub_header_contents">
        <a href="https://www.tis.co.jp/group/" target="_blank">&gt;TISインテックグループ</a>
      </div>
    </div>
    <div class="main_header">
      <div class="main_header_wrap">
        <a class="header_logo" href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/ultra_tis_logo.png" alt="ultra pay">
        </a>
        <nav>
          <ul class="header_nav_list">
            <li>
              <a <?php if(is_front_page()):?> class="current"<?php endif;?> href="<?php echo home_url(); ?>">
                 トップ
              </a>
            </li>
            <li>
              <a <?php if(is_page(ultracompany)):?> class="current"<?php endif;?> href="<?php echo esc_url( home_url( '/' ) ); ?>ultracompany">
                会社概要
              </a>
            </li>
            <li>
              <a <?php if(is_post_type_archive("pressrelease")):?> class="current"<?php endif;?> href="<?php echo esc_url( home_url( '/' ) ); ?>pressrelease">
                ニュース
              </a>
            </li>
            <li>
              <a href="<?php echo home_url(); ?>/index.php#anchor_service">
                サービス
              </a>
            </li>      
          </ul>
          <div class="header_line sp"></div>
          <div class="header_intec_link sp">
            <a href="https://www.tis.co.jp/group/" target="_blank">&gt;TISインテックグループ</a>
          </div>
        </nav> 
      </div>
    </div>  
  </div>
</header>  

