<?php
session_start();
/****************************************************/
/*ファイル名 : scmSelect.php
/*概要   : SCM開始解説選択画面
/*引数   : なし
/*返却値 : なし
/*作成者 : 村上　慎一郎
/*作成日 : 2014/02/03
/*更新日、更新者、更新内容:
/****************************************************/
?>
<?php require_once('CONF/ini.inc.php');?>
<?php
$modelControlArray = array(//'MODEL/common/g+.class.php',
                           //'MODEL/common/rssFeed.class.php',
                           'MODEL/plugin/debug/dBug.php',
                            ); 
require_once('MODEL/setupController.inc.php'); //上記指定を元に、初期設定と必要関数を取り込む
?>
<?php
/* 
 * ここは通常のページ処理 
 */


?>
<?php
//取り込むテンプレートを指定（複数可能、ヘッダ・フッダはデフォルトで取り込み）⇒フレームワークとして必要
/*
$templateControlArray = array(VIEW_COMMON.'/loginForm.tpl', 
                              VIEW_MEMBER.'/search_member.tpl' );
 * 
 */
$templateControlArray = array(//'VIEW/common/header.tpl.php',
                              'VIEW/scmSelect.tpl.php'
                              //'VIEW/common/footer.tpl.php'
                              );
?>

<?php require_once('MODEL/templateController.inc.php'); //ヘッダ・指定したテンプレート・フッタを取り込む?>

<?php require_once('MODEL/exitController.inc.php'); //mysql開放・アクセスログ記録・exitで終了?>
