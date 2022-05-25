<?php
// ログイン画面のカスタマイズ
function my_login_style() {
 wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/css/login.css' );
// wp_enqueue_script( 'custom-login', get_template_directory_uri() . '/js/login.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_style' );



// ロゴのリンク先を指定
function my_login_logo_url() { // リンク先変更
return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );function my_login_logo_url_title() { // タイトル変更
return 'UFP -UTEC Founders Program-';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );



//管理画面カスタマイズ
//ダッシュボードリセット
function remove_dashboard_widgets() {
if (!current_user_can('administrator')) {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // 現在の状況
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']); // アクティビティ
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // 最近のコメント
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // 被リンク
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // プラグイン
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']); // サイトヘルス
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // クイック投稿
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // 最近の下書き
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPressブログ
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // WordPressフォーラム
}
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');
remove_action( 'welcome_panel', 'wp_welcome_panel' ); // ようこそ！



//オリジナルダッシュボードメニュー2
function announce_add_dashboard_widgets() {
  wp_add_dashboard_widget(
    'announce_dashboard_widget',
    'UFP -UTEC Founders Program-',
    'announce_dashboard_widget_function'
  );
}
function announce_dashboard_widget_function() {
  echo '
  <h2>UFP投稿メニュー</h2>
  
  <div class="wiget-flex">
  
  <div class="cfbtn">
  <div class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-purchase" id="menu-posts-purchase">
	<a href="edit.php?post_type=news" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-news" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image dashicons-before dashicons-admin-post" aria-hidden="true"><br></div><div class="wp-menu-name">お知らせはこちら</div></a>
</div>
  </div>
  
  <div class="cfbtn">
	<div class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-usedcar" id="menu-posts-usedcar">
	<a href="edit.php?post_type=portfolio" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-portfolio menu-top-last" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image dashicons-before dashicons-admin-post" aria-hidden="true"><br></div><div class="wp-menu-name">採択企業はこちら</div></a>
	</div>
	</div>
	
	</div><!-- wiget-flex -->
	  
  <hr>
  
  
  <h2>投稿マニュアル</h2>
  <p>投稿のマニュアルは<a href="#" download="#">こちらよりダウンロードできます</a></p>
  
  ';
}
add_action('wp_dashboard_setup', 'announce_add_dashboard_widgets');





//サイドメニューの設定
/*function remove_menus() {
remove_menu_page( 'index.php' ); // ダッシュボード
remove_menu_page( 'edit.php' ); // 投稿
remove_menu_page( 'upload.php' ); // メディア
remove_menu_page( 'edit.php?post_type=page' ); // 固定
remove_menu_page( 'edit-comments.php' ); // コメント
remove_menu_page( 'themes.php' ); // 外観
remove_menu_page( 'plugins.php' ); // プラグイン
remove_menu_page( 'users.php' ); // ユーザー
remove_menu_page( 'tools.php' ); // ツール
remove_menu_page( 'options-general.php' ); // 設定
}
add_action( 'admin_menu', 'remove_menus' );*/






//管理者以外の権限でメニューを非表示
/*注意！！！
ユーザープロフィール非表示は70行目で権限無視で非表示にしています。
なにか設定等いじる場合はコメントアウトして一度表示してください。*/

function remove_menus () {
if (!current_user_can('administrator')) {
//ここに非表示にする項目を記述
remove_menu_page( 'edit.php' ); // 投稿
remove_menu_page( 'upload.php' ); // メディア
remove_menu_page( 'menu-posts-purchase' ); // 　買取カスタム
remove_menu_page( 'menu-posts-usedcar' ); // 販売カスタム
remove_menu_page( 'edit.php?post_type=page' ); // 固定
remove_menu_page( 'edit-comments.php' ); // コメント
remove_menu_page( 'plugins.php' ); // プラグイン
remove_menu_page( 'users.php' ); // ユーザー
remove_menu_page( 'tools.php' ); // ツール
remove_menu_page( 'options-general.php' ); // 設定
}
}
add_action('admin_menu', 'remove_menus');




//アドミンバー
function remove_admin_bar_menus( $wp_admin_bar ) {
if (!current_user_can('administrator')) {
$wp_admin_bar->remove_menu( 'wp-logo' ); // ロゴ
$wp_admin_bar->remove_menu( 'about' ); // ロゴ / WordPressについて
$wp_admin_bar->remove_menu( 'wporg' ); // ロゴ / WordPress.org
$wp_admin_bar->remove_menu( 'documentation' ); // ロゴ / ドキュメンテーション
$wp_admin_bar->remove_menu( 'support-forums' ); // ロゴ / サポート
$wp_admin_bar->remove_menu( 'feedback' ); // ロゴ / フィードバック
$wp_admin_bar->remove_menu( 'site-name' ); // サイト名
$wp_admin_bar->remove_menu( 'view-site' ); // サイト名 / サイトを表示
$wp_admin_bar->remove_menu( 'updates' ); // 更新
$wp_admin_bar->remove_menu( 'comments' ); // コメント
$wp_admin_bar->remove_menu( 'new-content' ); // 新規
$wp_admin_bar->remove_menu( 'new-post' ); // 新規 / 投稿
$wp_admin_bar->remove_menu( 'new-media' ); // 新規 / メディア
$wp_admin_bar->remove_menu( 'new-page' ); // 新規 / 固定
$wp_admin_bar->remove_menu( 'new-user' ); // 新規 / ユーザー
$wp_admin_bar->remove_menu( 'view' ); // 投稿を表示
$wp_admin_bar->remove_menu( 'edit-profile' ); // ユーザー / プロフィールを編
//$wp_admin_bar->remove_menu( 'menu-toggle' ); // メニュー
$wp_admin_bar->remove_menu( 'search' ); // 検索
}
}
add_action( 'admin_bar_menu', 'remove_admin_bar_menus', 999 );



//管理画面用css読み込み
function my_admin_style(){
    wp_enqueue_style( 'my_admin_style', get_template_directory_uri().'/css/my_admin_style.css' );
}
add_action( 'admin_enqueue_scripts', 'my_admin_style' );
?>