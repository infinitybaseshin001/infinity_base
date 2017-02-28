<?php
/****************************************************/
/*ファイル名 : product.class.php
/*概要   : productとsalesのモジュール
/*引数   : なし
/*返却値 : なし
/*作成者 : 村上　慎一郎
/*作成日 : 2014/02/18
/*更新日、更新者、更新内容:
/****************************************************/
?>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
class productModule {
    
    function getProductArray(){
        require_once('blog/wp-load.php');
        global $wpdb;
    
        $sql = $wpdb->prepare(
            "select post_date, post_content from wp1_posts  where post_title like %works%  AND post_type like %post% order by post_date desc limit 0, 10"
        , 0);
        $proArray = $wpdb->get_results($sql);
        /*
        ##################################################################################################
        $sql  = "select post_date, post_content from wp1_posts ";
        $sql .= " where post_title like ? ";
        $sql .= " AND post_type like ? ";
        $sql .= " order by post_date desc";
        $sql .= " limit 0, 10";
        
        $array = array("%works%", "%post%");
        ###################################################################################################
        
        $mdb2 = new mdb2ex();
        $proArray = $mdb2->mdb2SelectQuery($sql, $array);
        */

        
        return $proArray;
        
    }
    
    
    
}
?>