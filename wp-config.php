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
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'A2$Do6H> cT(s{raYDjL/yQ@34`+G^!5m^}Wzx#DFh7rsZ(S{[8srCA39YSmqt7Y' );
define( 'SECURE_AUTH_KEY',  'lkCpP?{W:qCj#EO()_Vq+anhP8n[-3h~6L/c@`Wo`Zjb2r3.c{cC|K {z!.nFQzI' );
define( 'LOGGED_IN_KEY',    'iPq@/%B_`B_M:xR@thbZnBb/FMdt1|-fc{bk@dlK2^Yw|oN8gO5V&%1^Tvc_5Z),' );
define( 'NONCE_KEY',        '-pq%xhs;?!35^>KyTf`)Q{?tWSn^#ZKu<(4K96Tp%r_diSU4|-[)h)}<q%#}bq+<' );
define( 'AUTH_SALT',        '(wiL0/^fiI+w3ve:7g88QZ$*`@J=NNkRBd5)ZhPjjnQ6fKl9L9c]=;0i/avm|)X$' );
define( 'SECURE_AUTH_SALT', '(ePOL7aK%m>qa*?V};^Ioth*D168MTk/3ZK<j4,+Rn4(8.rg.A$qOW&_Fym=Ty,A' );
define( 'LOGGED_IN_SALT',   '8?,j+QE*cm4n7dQ^UCb.eENw*<v<|l}YtLSc5<S]mKjGm?nK)ylS!#<@XJ=6d78s' );
define( 'NONCE_SALT',       'nMPeAeLXi6WnWD n~`I|gNxm;<9zbMX*6wB%vL,.Zy|gz$Q/6BP(p$}{bqII:3`.' );

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
