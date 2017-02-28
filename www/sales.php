<?php
session_start();
/****************************************************/
/*ファイル名 : sales.php
/*概要   : セールス案
/*引数   : なし
/*返却値 : なし
/*作成者 : 村上　慎一郎
/*作成日 : 2013/01/03
/*更新日、更新者、更新内容:
/****************************************************/
?>
<?php require_once('CONF/ini.inc.php');?>
<?php
$modelControlArray = array('blog/wp-load.php',
                            ); 
require_once('MODEL/setupController.inc.php'); //上記指定を元に、初期設定と必要関数を取り込む
?>
<?php
/* 
 * ここは通常のページ処理 
 */
global $wpdb;
    
$proArray = $wpdb->get_results(
    "select post_date, post_content from $wpdb->posts 
        where post_title like '%製作日報%' 
        and post_type = 'post' 
        order by post_date desc 
        limit 0,10");
?>
<?php
//取り込むテンプレートを指定（複数可能、ヘッダ・フッダはデフォルトで取り込み）⇒フレームワークとして必要
/*
$templateControlArray = array(VIEW_COMMON.'/loginForm.tpl', 
                              VIEW_MEMBER.'/search_member.tpl' );
 * 
 */
$templateControlArray = array(//'VIEW/common/header.tpl.php',
                              'VIEW/sales.tpl.php'
                              //'VIEW/common/footer.tpl.php'
                              );
?>

<?php require_once('MODEL/templateController.inc.php'); //ヘッダ・指定したテンプレート・フッタを取り込む?>

<?php require_once('MODEL/exitController.inc.php'); //mysql開放・アクセスログ記録・exitで終了?>
