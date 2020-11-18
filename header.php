<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="keywords" content="①,②,③,④" />
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="noindex,nofollow">
  <!-- Twitterカード -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@アカウント">
  <!-- OGP -->
  <meta property="og:title" content="完全版マハーバーラタ" />
  <meta property="og:description" content="" />
  <meta property="og:url" content="https://〜〜.com" />
  <meta property="og:image" content="img/〜.jpg" />
  <meta property="og:site_name" content="完全版マハーバーラタ">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="ja_JP">
  <!--site icon-->
  <link rel="icon" href="img/favicon.ico">
  <!--touch icon-->
  <link rel="apple-touch-icon-precomposed" href="img/touch-icon.png">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <?php
      wp_nav_menu(
        array(
          'theme_location' => 'place_global',
          'container' => false,
        )
      )
    ?>
  </header>