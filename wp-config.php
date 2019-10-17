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



// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'tomatorat2_wp1');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'tomatorat2');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'm15057714');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql733.db.sakura.ne.jp');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4AeDV=mnQ6Hy|0`7oH{ij%.^pe,[E4N[@.rEA<t^d$s2ic4TlZPU%Dz((VTEQ6CW' );
define( 'SECURE_AUTH_KEY',  '1u]Y3%Qg{*-OqSN(w17QmKA3tn|`R/C-pWB,7+,QV@[0=@]/4?@5ub&M}Qv}q9Fy' );
define( 'LOGGED_IN_KEY',    '_(AuM&AjiofphWds++1B#_Dl3{##Ps6|#vbyV&>IH5*.7@`N![#[B$~vv*4vE cs' );
define( 'NONCE_KEY',        'VFn));~|@Rd!kN/P%Vm(t;qGqy}rvtm3}9H=q@}UR#X,Qt(Du*&%.|v?V1hr0o3q' );
define( 'AUTH_SALT',        'Ce-2&-7 3F5tE(WxFcH}P=hjuFHdsg[cSEq0:kI[2.4C.ldH~mN:_uAUT>HCL)ql' );
define( 'SECURE_AUTH_SALT', '#-}(qd(@$MI^L(H;/Rgu1-CN,:kw:>c=eDuPBZq8@`@T*&.]=({b?df#ALB/)D(y' );
define( 'LOGGED_IN_SALT',   ':E!V&hX#In:4>IE<@` StO6k*j8-;(<m6hS$,;VUBe1uRF,lFz1 F+y&0;GNQ1Rk' );
define( 'NONCE_SALT',       '^ ^*9WI).Ld|Oh;J};-1`t>vLAur!-vguV5i+I6~ sNLZMt]/2LhLLts5{d=?2)`' );

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
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
