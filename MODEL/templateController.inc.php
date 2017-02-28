<?php
/****************************************************/
/*ファイル名 : templeteController.inc.php
/*概要   : 表示テンプレート群の一括取り込みセットアップ
/*引数   : なし
/*返却値 : なし
/*作成者 : 村上　慎一郎
/*作成日 : 2011/05/18
/*更新日、更新者、更新内容:
/****************************************************/
?>

<?php require_once ($_SERVER["DOCUMENT_ROOT"].'/VIEW/common/header.tpl.php'); //ヘッダの取り込み?>

<?php 
//各ページで必要なファイルを取り込み
if(is_array($templateControlArray)) {
    for($i = 0; $i < sizeof($templateControlArray); $i++) {
        require_once($templateControlArray[$i]);
        //require_once($templateControlArray[$i]);
            
    }
        
}
?>
<?php require_once($_SERVER["DOCUMENT_ROOT"].'/VIEW/common/footer.tpl.php'); //フッタの取り込み?>
