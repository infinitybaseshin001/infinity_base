<?php
/****************************************************/
/*ファイル名 : tool.php
/*概要   : コーポレートサイトツール
/*引数   : なし
/*返却値 : なし
/*作成者 : 村上　慎一郎
/*作成日 : 2012/01/05
/*更新日、更新者、更新内容:
/****************************************************/
?>
<?php
//取り込むテンプレートを指定（複数可能、ヘッダ・フッダはデフォルトで取り込み）⇒フレームワークとして必要
/*
$templateControlArray = array(VIEW_COMMON.'/loginForm.tpl', 
                              VIEW_MEMBER.'/search_member.tpl' );
 * 
 */
$templateControlArray = array('VIEW/tool.tpl.php');
?>

<?php require_once('MODEL/templateController.inc.php'); //ヘッダ・指定したテンプレート・フッタを取り込む?>

<?php require_once('MODEL/exitController.inc.php'); //mysql開放・アクセスログ記録・exitで終了?>
