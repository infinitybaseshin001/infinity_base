<?php
session_start();
/****************************************************/
/*ファイル名 : index.php
/*概要   : コーポレートサイトトップ
/*引数   : なし
/*返却値 : なし
/*作成者 : 村上　慎一郎
/*作成日 : 2012/01/05
/*更新日、更新者、更新内容:
/****************************************************/
?>
<?php require_once('CONF/ini.inc.php');?>
<?php
/*
//プラグイン機能を取り込む(plugin名…validater⇒入力チェック等)⇒フレームワークとして必要
$pluginControlArray = array(MODEL_PLUGIN.'/extend/mailSend.class.php',
                            MODEL_PLUGIN.'/sanitize/sanitizeExe.class.php');
*/
//取り込む機能郡を指定⇒フレームワークとして必要
$modelControlArray = array('MODEL/common/g+.class.php',
                           'MODEL/common/rssFeed.class.php',
                           'MODEL/plugin/debug/dBug.php',
                            ); 

 ?>
<?php require_once('MODEL/setupController.inc.php'); //上記指定を元に、初期設定と必要関数を取り込む?>
<?php
/* 
 * ここは通常のページ処理 
 */
/*
$g = new g('280400292128.apps.googleusercontent.com',
            'liYj6G6QVuiQbUjU2TxCKM3q',
            'http://infinity-base.oops.jp/index.php',
            'AIzaSyBAKYpQaiv65Is_6pvhho7nrPG_6guWEEo'
            );
$stream = $g->getStream('me');

//new dBug($stream);
*/

$rss = new rssFeed();

$itRSS = $rss->getRSS("http://rss.rssad.jp/rss/itmatmarkit/rss.xml");

$wiredRSS = $rss->getRSS("http://wired.jp/feed/");

$infinityRSS = $rss->getRSS("http://infinity-base.oops.jp/blog/feed");

//new dBug($itRSS);
//new dBug($wiredRSS);
//new dBug($infinityRSS);
?>

<?php
//取り込むテンプレートを指定（複数可能、ヘッダ・フッダはデフォルトで取り込み）⇒フレームワークとして必要
/*
$templateControlArray = array(VIEW_COMMON.'/loginForm.tpl', 
                              VIEW_MEMBER.'/search_member.tpl' );
 * 
 */
$templateControlArray = array('VIEW/index.tpl.php'
        );
?>

<?php require_once('MODEL/templateController.inc.php'); //ヘッダ・指定したテンプレート・フッタを取り込む?>

<?php require_once('MODEL/exitController.inc.php'); //mysql開放・アクセスログ記録・exitで終了?>
