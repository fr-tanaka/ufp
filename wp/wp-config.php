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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'kir968538_ufpcms' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'kir968538' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'Juthsoiu6563ydv' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql57s-26.kagoya.net' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '5iR7PYM@hCX+wu<FRcx?%O`PHg3Lr,|{y/c4SYcn4`-W:M3!22,N:?rP4`*__>sv' );
define( 'SECURE_AUTH_KEY',  '%Pd<(hAM6705TP2ZSDI#?9[3&]Qh{iwiDQW6s-NeIc~*Bi|+U=dd]>INRTt{9`<5' );
define( 'LOGGED_IN_KEY',    'L&eRb6G;Rm4e|4iZDAvK{;w.G}&a45t#Yny`rVkX_hYb1qwx~fsb<$!)0rBpT_dN' );
define( 'NONCE_KEY',        'XII|t=J;`]`Zs;l1f;1RE/SV_0+rduFb8`aUTYY{I=|[nfeb0GZ/IGZ4v@Rn@l$C' );
define( 'AUTH_SALT',        '!8K#I0?X(Snry$i}S hf*Z-BD&I;Vyw+O7D2T_*3/)Qm32u3d`4]=BI|[(cMT3/D' );
define( 'SECURE_AUTH_SALT', 'BVYN!@P;5X;eBQ.D2_>ux/=<?XZeRn 16b?vJ4stEeM/ZFbEcALBQVk!-7S}jtOb' );
define( 'LOGGED_IN_SALT',   'r9Wl0Nx#(~?1*&v8KF7[(IL l%mmMA{f[maC*|wD?MTKYtySZ^vNo Gd|-TBnXwO' );
define( 'NONCE_SALT',       'tEtJNeqcB2yP}SH4~73^6<< iOC/$%rI;fKpiDgn1>K%T#-P}.`Wn$$!NpGnjHrV' );

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
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
