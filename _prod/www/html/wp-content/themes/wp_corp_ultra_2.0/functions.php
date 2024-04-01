<?php

/* titleタグの出力 */
add_theme_support('title-tag');

/* 固定ページで抜粋を有効化 */
add_post_type_support('page', 'excerpt');


/* アイキャッチ画像を使用可能にする */
add_theme_support( 'post-thumbnails' );


/*あれこれ一覧ページの抜粋省略文字の変更*/
function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



/* PHPコードを投稿記事内で呼び出せるようにする */
function my_php_Include($params = array()) {
extract(shortcode_atts(array('file' => 'default'), $params));
ob_start();
include(STYLESHEETPATH . "/$file.php");
return ob_get_clean();
}
add_shortcode('call_php', 'my_php_Include');


/*【プラグインカスタマイズ】Public Post Preview 有効期限変更*/
add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
  return 60 * 60 * 24 * 31; // 7 days（秒 x 分 x 時 x 日）
}


/*自動補完リダイレクトを無効化する方法(Public Post PrevieのURLがトップに自動遷移したため)*/
function remove_redirect_guess_404_permalink( $redirect_url ) {
    if ( is_404() )
        return false;
    return $redirect_url;
}
add_filter( 'redirect_canonical', 'remove_redirect_guess_404_permalink' );


/*Wordpress管理画面で管理者アドレス変更完結させる（登録アドレス宛に確認メール不要になる）*/
remove_action( 'add_option_new_admin_email', 'update_option_new_admin_email' );
remove_action( 'update_option_new_admin_email', 'update_option_new_admin_email' );
function wpdocs_update_option_new_admin_email( $old_value, $value ) {
update_option( 'admin_email', $value );
}
add_action( 'add_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );
add_action( 'update_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );





