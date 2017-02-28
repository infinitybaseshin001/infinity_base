<?php
/****************************************************/
/*ファイル名 : rssFeed.php
/*概要   : rssを取り込み表示する（便宜上MVCに分けていません）
/*引数   : なし
/*返却値 : なし
/*作成者 : 村上　慎一郎
/*作成日 : 2011/05/18
/*更新日、更新者、更新内容:
/****************************************************/
?>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/PEAR/XML/RSS.php");

class rssFeed {
   public function getRSS($url){

        //XML_RSS読み込み
        $rss =& new XML_RSS($url);

        //parse()メソッドによりRSSをパース
        $rss->parse();

        $item = $rss->getItems();

        return $item;
     }
 
}
?>