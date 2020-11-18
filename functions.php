<?php
function my_enqueue_scripts() {
  wp_enqueue_style( 'reset', get_template_directory_uri(). '/assets/css/destyle.css',array() );
  wp_enqueue_style( 'my_styles', get_template_directory_uri(). '/assets/css/style.css',array() );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'script_js', get_template_directory_uri(). '/assets/js/script.js',array() );
}
add_action( 'wp_enqueue_scripts','my_enqueue_scripts' );


// カスタムメニュー
register_nav_menus(
  array(
   'place_global' => 'グローバル',
   'place_footer' => 'フッターナビ',
  )
);

// カスタムメニューの不要なidやclassを除去し、任意のclass名を付与
function add_class($item_output){
  $search = array(
    '/id=".+?"|class=".+?"/',
    '/(<ul.?)/',
    '/(<li.?)/',
    '/(<a.?)/',
  );
  $replace = array(
    "",
    "$1"."class='navbar'",
    '$1'."class='nav_item'",
    '$1'."class='nav_link'",
  );
  $item_output = preg_replace($search, $replace, $item_output);
  return $item_output;
};
add_filter('wp_nav_menu', 'add_class');

// カスタムメニュー説明
function prefix_nav_description( $item_output, $item, $depth, $args ) {
  if ( !empty( $item->description ) ) { //$item->descriptionが空ではない時。何かある時。
    $item_output = str_replace( 
      '">' . $args->link_before . $item->title,
      '">' . $args->link_before .  '<span>' . $item->description . '<br></span>' .$item->title , 
      $item_output
    );
  }
  return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );


// アイキャッチ画像を利用できるようにする
add_theme_support( 'post-thumbnails' );
// トップイメージのメイン画像用のサイズ設定
add_image_size( 'kv', 1140, 550, true );
// 下層トップイメージのメイン画像用のサイズ設定
add_image_size( 'common_kv', 1140, 180, true );
// NEWSトップページのサムネイル画像
add_image_size( 'front_news', 250, 140, true );
// NEWS投稿ページ用の画像
add_image_size( 'page_news', 810, 578, true );
// STORYトップページの画像
add_image_size( 'front_story', 1140, 420, true );
// STORY個別ページメイン画像
add_image_size( 'page_story', 1140, 635, true );
// STORY個別ページ、各ブロック画像
add_image_size( 'page_story_block', 1140, 325, true );
// COMMENTSの画像用のサイズ設定
add_image_size( 'comments', 810, 215, true );
// CASTのメインキャスト画像
add_image_size( 'main_cast', 220, 220, true );
// CASTのサブキャスト画像
add_image_size( 'sub_cast', 130, 130, true );

// 特定の記事を抽出する関数
function get_specific_posts( $post_type, $taxonomy = null, $term = null, $number = -1){
  $args = array(
    'post_type' => $post_type,
    'posts_per_page' => $number,
    'tax_query' => array(
      array(
        'taxonomy' => $taxonomy,
        'terms' => $term,
        'field' => 'slug',
      ),
    ),
  );
  $specific_posts = new WP_Query($args);
  return $specific_posts;
}

// ページャーの不要なタグの除去し、liタグの追加
function pager_custom($item_output){
  $search = array(
    '/<span class=\'pages\'>.+?span>/',
    '/(<span.+?\/span>)/',
    '/(<a.+?\/a>)/'
  );
  $replace = array(
    "",
    "<li>"."$1"."</li>",
    "<li>"."$1"."</li>"
  );
  $item_output = preg_replace($search, $replace, $item_output);
  return $item_output;
};
add_filter('wp_pagenavi', 'pager_custom');


// パンくずタイトルの書き換え
function my_breadcrumb_title_swapper($title, $type, $id) {
  if( $title == 'NEWS') {
    $title = __('news');
  } 
  elseif ( $title == 'STORY') {
    $title = __('story');
  }
  elseif ( $title == 'COMMENTS') {
    $title = __('著名人コメント');
  }
  elseif ( $title == 'CAST') {
    $title = __('キャスト');
  }
  elseif ( $title == 'INQUIRY') {
    $title = __('お問い合わせ');
  }
  return $title;
};
add_filter('bcn_breadcrumb_title', 'my_breadcrumb_title_swapper', 3, 10);
