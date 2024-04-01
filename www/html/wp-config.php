<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// Always SSL
$_SERVER['HTTPS'] = 'on';
$_ENV['HTTPS']    = 'on';

define('FS_METHOD','direct');

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp_ultra_pay' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'ultra_pay_user' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'Ed8wQs2DsXdLloUF' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */

/*デフォルト*/
/*
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
*/

/*更新*/
define('AUTH_KEY',         'm+yJ&j-pfSa1]qphtJf)Iw7m+@!*vJz-%Oy$L:p{<58F4gnh%y31kK~Ff4/mtf6(');
define('SECURE_AUTH_KEY',  '.E;dW+p2>[*a ,T|Hp]?M?5gS9C8 9{{$:6yztc~h$|#}Y/%VURzLk]{~F+KzsS9');
define('LOGGED_IN_KEY',    '5tL`+t13#7KXUy4 X.|u&+):>^=a$HoJ6kHX`lEnzNB(S(iA$~ R5UR+n<=^+O6V');
define('NONCE_KEY',        'q(,7e/!#JeQ{]ZDQQe=IsFm>b RgmL;uXS+nm]FLUW%^jB^{:V4xP#X^9C?|VE@c');
define('AUTH_SALT',        '^qbVJtOUf7&zVNK[h%_BgQCku<r9bPcB-j8{[{/PV=|,j;R0Z{(T_q-?=)5 2GKy');
define('SECURE_AUTH_SALT', 'kDwvHDhwxbER+oO~H>mn*D 3{+Cl|VM0Q)A+LOZ.=`D+p)lJL^S<;-#|4ePD-ax|');
define('LOGGED_IN_SALT',   '#O8neF%@8BWx$vU^uMBxF5Ks|3d2]z0|YFI/%1WD-C/&uHS{N$J`o_+6i*1,/X5#');
define('NONCE_SALT',       '$tG-fPd&X{Aa4n7]=b7+,8`{S|9W,o;-XIwW2.|wdeC$UrV;4yZ$To+=O^d5Y4*z');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
