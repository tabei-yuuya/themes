<?php
function theme_enqueue_styles_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Gotu&amp;family=Lato:wght@400;700&amp;family=Noto+Sans+JP:wght@400;500;700&amp;family=Noto+Serif+JP:wght@400;700&amp;display=swap',
        [],
        null
    );

    // Theme main stylesheet
    wp_enqueue_style(
        'theme-style',
        get_theme_file_uri('/assets/css/style.css'),
        [],
        filemtime(get_theme_file_path('/assets/css/style.css')) // バージョンとしてファイルの最終更新時刻を使用
    );

    // Swiper CSS
    wp_enqueue_style(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css',
        [],
        null
    );

    // jQuery (WordPressの標準jQueryを使用)
    wp_enqueue_script('jquery');

    // jQuery inview plugin
    wp_enqueue_script(
        'jquery-inview',
        get_theme_file_uri('/assets/js/jquery.inview.min.js'),
        ['jquery'],
        filemtime(get_theme_file_path('/assets/js/jquery.inview.min.js')),
        true
    );

    // Theme main JavaScript file
    wp_enqueue_script(
        'theme-script',
        get_theme_file_uri('/assets/js/script.js'),
        ['jquery'],
        filemtime(get_theme_file_path('/assets/js/script.js')),
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles_scripts');




//TOPスライダー設定
/**
 * @param string $page_title ページのtitle属性値 (必須)
 * @param string $menu_title 管理画面のメニューに表示するタイトル (必須)
 * @param string $capability メニューを操作できる権限 (必須)
 * @param string $menu_slug オプションページのスラッグ (必須)
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page( 'TOPスライダー', 'TOPスライダー', 'edit_posts', 'top_slider' , 'dashicons-admin-generic' , 11);

/**
 * カスタムフィールドを定義
 * 
 * @param array  $settings  MW_WP_Form_Setting オブジェクトの配列
 * @param string $type      投稿タイプ or ロール
 * @param int    $id        投稿ID or ユーザーID
 * @param string $meta_type post | user
 * @return array
 * 
 */
function my_add_meta_box($settings, $type, $id, $meta_type)
{
  if ('top_slider' == $type) {
    $setting = SCF::add_setting('id-top_slider', 'TOPスライダー設定');
    $items = array(
      array(
        'type'        => 'image', //*タイプ
        'name'        => 'top_slider_img_pc', //*名前
        'label'       => '【PC】スライダー画像', //ラベル
        'size'        => 'medium' // プレビューサイズ
      ),
      array(
        'type'        => 'image', //*タイプ
        'name'        => 'top_slider_img_sp', //*名前
        'label'       => '【SP】スライダー画像', //ラベル
        'size'        => 'medium' // プレビューサイズ
      ),
    );
    $setting->add_group('top_slider_group', true, $items);
    $settings[] = $setting;
  }
  return $settings;
}
add_filter('smart-cf-register-fields', 'my_add_meta_box', 10, 4);

function theme_setup() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

function custom_posts_per_page($query)
{
    if (!is_admin() && $query->is_main_query()) {
        // カスタム投稿のスラッグを記述
        if (is_post_type_archive('campaign')) {
            // 表示件数を指定
            $query->set('posts_per_page', 4);
        }
    }
    if ( is_tax( 'campaign_category' ) ) {
      $query->set( 'posts_per_page', 4 );
      return;
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');

//ウィジェット
function sample_widgets(){
  register_sidebar(array(
  'name' => '共通サイドバー',/* ←追加したいウィジェットの名前 */
  'description' => 'サイドバーウィジェット',/* ←追加したいウィジェットの概要 */
  'id' => 'sidebar' ,/* ←追加したいウィジェットのID */
 'before_widget' => '<div>',/* ←追加したいウィジェットを囲う開始タグ */
  'after_widget' => '</div>',/* ←追加したいウィジェットを囲う閉じタグ */
  'before_title' => '<h3>',/* ←追加したいウィジェットのタイトルを囲う開始タグ */
  'after_title' => '</h3>'/* ←追加したいウィジェットのタイトルを囲う閉じタグ */
  ));
 }
 add_action('widgets_init', 'sample_widgets');

//  投稿記事の閲覧数（PV）を表示
 function getPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count == '') {
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return '0 PV';
    // return '0 View';
  }
  return $count.' PV';
  // return $count.'Views';
}

// 投稿記事の閲覧数（PV）をカウント
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count == '') {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
      $title = single_cat_title('',false);
  } elseif (is_tag()) {
      $title = single_tag_title('',false);
} elseif (is_tax()) {
    $title = single_term_title('',false);
} elseif (is_post_type_archive() ){
  $title = post_type_archive_title('',false);
} elseif (is_date()) {
    $title = get_the_time('Y年n月');
} elseif (is_search()) {
    $title = '検索結果：'.esc_html( get_search_query(false) );
} elseif (is_404()) {
    $title = '「404」ページが見つかりません';
} else {

}
  return $title;
});
