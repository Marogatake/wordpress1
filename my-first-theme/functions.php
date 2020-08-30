<?php

function JointCompany_setup() {
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    // HTML5でマークアップさせる
  add_theme_support( 'automatic-feed-links' );
    // Feedのリンクを自動で生成する
  add_theme_support( 'post-thumbnails' );
    //アイキャッチ画像をON
  add_theme_support( 'menus');
    //メニュー機能をON
  add_theme_support('widgets');
  // 　ウィジェットを追加
  add_theme_support('custom-logo');
    //ロゴを導入する
  add_theme_support( 'custom-background', apply_filters( 'my_theme_background_args', array(
    'default-color' => 'ffffff',
  ) ) );
}
//最後に作成したafter_setup_themeアクションフック※に登録します。
add_action( 'after_setup_theme', 'JointCompany_setup' );

// メニュー設定
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );
add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);
function description_in_nav_menu($item_output, $item){
  return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<span>{$item->attr_title}</span><", $item_output);
}

// ウィジェット
function add_widgets_init() {
  register_sidebar(
    array(
      'name' => 'ウィジェット',
      'id' => 'widgets',
      'description' => '管理画面から編集可能なウィジェットです',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '',
      'after_title' => ''
    )
  );
}
add_action('widgets_init', 'add_widgets_init');

// 追加ファイル
require get_template_directory() . '/function_folder/customizer.php';
require get_template_directory() . '/function_folder/header_functions.php';
require get_template_directory() . '/function_folder/MainVisual.php';
require get_template_directory() . '/function_folder/footer_functions.php';
