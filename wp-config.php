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
define('DB_NAME', 'testtest');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'dbuser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'takahisa86');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
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
 define('AUTH_KEY',         '[L^_h.Kr$-:uHNS-23v[yzvJ>-RWj7Y$^=1j5P-43Z,;[miTIsgr=1G1qZr|}TFp');
 define('SECURE_AUTH_KEY',  '%.8ZEh&1?$.y<:Ev>4B_+>Fx+PFvNO(}H7q?6oOZH4x-tAkAx<?q4]o+#X`>!D},');
 define('LOGGED_IN_KEY',    '(eFNuR9s3FO[-jQi{@)=,%rj%94|%0;`:Hd0t#eu?I_{JJj-N(a^_*#2!QC3t]Lm');
 define('NONCE_KEY',        'O-)u8= +c!05mo!:hRI 0qiySc9=A BmVeFX$HybJ+A{l[:-ePSE0T|-eO+ifE*,');
 define('AUTH_SALT',        'SS{Aw4u6V(o#=ORFM>7f|vmiSpV]q]9u-1&laYw=S%B)~*8,>mY w.y&Q2#qYC:<');
 define('SECURE_AUTH_SALT', 'Pxh(a:0kVZ#ttE-sw:>;3-j!rX_:`X%t06D Tb4+i:,=1_G7_6]7IWOj8aX<nC/y');
 define('LOGGED_IN_SALT',   'l&QhMnmT(h-.|M|}LB1kg&b9pxq*i44U-mS^:.P}UM:a5/-z(m<X9S1U/t.i5Of0');
 define('NONCE_SALT',       '~DGG${+n4Vfk^*)WSVl7AL]XH#EM0|J[d13YdyK{zlp,{%63tL3LF6z|cE+BU!,-');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

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

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
