<?php
session_start();
/****************************************************/
/*ファイル名 : scmEN.php
/*概要   : SCMアプリ海外版WEB版
/*引数   : なし
/*返却値 : なし
/*作成者 : 村上　慎一郎
/*作成日 : 2014/02/03
/*更新日、更新者、更新内容:
/****************************************************/
?>
<?php require_once('../CONF/ini.inc.php');?>
<?php
$modelControlArray = array('../MODEL/common/g+.class.php',
                           '../MODEL/common/rssFeed.class.php',
                           '../MODEL/plugin/debug/dBug.php',
                            ); 
require_once('../MODEL/setupController.inc.php'); //上記指定を元に、初期設定と必要関数を取り込む
?>
<?php
if($_GET["pos"] == "start") { //開始処理
    $_SESSION["cospa"] = 0;
    $_SESSION["toushi"] = 0;
    $_SESSION["kensan"] = 0;
    $_SESSION["hobby"] = 0;
    $_SESSION["este"] = 0;
    $_SESSION["sports"] = 0;
    $_SESSION["communication"] = 0;
    $_SESSION["chochiku"] = 0;
    $_SESSION["gurume"] = 0;
    $_SESSION["fassion"] = 0;
    $_SESSION["adult"] = 0;

    $_SESSION["shoudouFlag"] = 0;
    $_SESSION["brandFlag"] = 0;
    $_SESSION["toushiFlag"] = 0;
    $_SESSION["netaFlag"] = 0;
    $_SESSION["adultFlag"] = 0;

    require_once('../VIEW/scm/q1en.tpl.php'); //1問目設定

}

//new dBug($_SESSION);
//new dBug($_REQUEST);

if($_POST["next1"] != "") {
    switch($_POST["q1"]) {
        case "1":
            $_SESSION["cospa"] = $_SESSION["cospa"] - 5;
            $_SESSION["hobby"] = $_SESSION["hobby"] + 3;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] - 1;
            break;

        case "2":
            $_SESSION["toushi"] = $_SESSION["toushi"] - 1;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 3;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 5;
            break;

        case "3":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 5;
            $_SESSION["gurume"] = $_SESSION["gurume"] - 1;
            $_SESSION["fassion"] = $_SESSION["fassion"] - 3;
            break;

        case "4":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 5;
            $_SESSION["sports"] = $_SESSION["sports"] + 1;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 3;
            break;

        case "5":
            $_SESSION["kensan"] = $_SESSION["kensan"] -3;
            $_SESSION["hobby"] = $_SESSION["hobby"] + 1;
            $_SESSION["communication"] = $_SESSION["communication"] + 5;
            break;
        
        default:
            print("バーカ");

    }
    
    require_once('../VIEW/scm/q2en.tpl.php'); //2問目設定

} elseif($_POST["next2"] != "") {
    switch($_POST["q2"]) { //設問2回答処理		        	
        case "1":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 5;
            $_SESSION["communication"] = $_SESSION["communication"] + 3;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 1;
            break;

        case "2":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 5;
            $_SESSION["sports"] = $_SESSION["sports"] + 1;
            $_SESSION["communication"] = $_SESSION["communication"] - 3;
            break;

        case "3":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 5;
            $_SESSION["communication"] = $_SESSION["communication"] + 3;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 1;
            break;

        case "4":
            $_SESSION["toushi"] = $_SESSION["toushi"] - 1;
            $_SESSION["communication"] = $_SESSION["communication"] - 5;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 3;
            break;

        case "5":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 3;
            $_SESSION["communication"] = $_SESSION["communication"] + 5;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 1;
            break;

    }
    
    require_once('../VIEW/scm/q3en.tpl.php'); //3問目設定

} elseif($_POST["next3"] != "") {
    switch($_POST["q3"]) { //設問3回答処理		        	
        case "1":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 3;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 5;
            $_SESSION["fassion"] = $_SESSION["fassion"] - 1;
            break;

        case "2":
            $_SESSION["hobby"] = $_SESSION["hobby"] + 3;
            $_SESSION["este"] = $_SESSION["este"] + 1;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 5;
            break;

        case "3":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 5;
            $_SESSION["kensan"] = $_SESSION["kensan"] + 3;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 1;
            break;

        case "4":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 3;
            $_SESSION["toushi"] = $_SESSION["toushi"] + 5;
            $_SESSION["este"] = $_SESSION["este"] + 1;
            break;

        case "5":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 3;
            $_SESSION["sports"] = $_SESSION["sports"] + 1;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 5;
            break;

    }
    
    require_once('../VIEW/scm/q4en.tpl.php'); //4問目設定

} elseif($_POST["next4"] != "") {
    switch($_POST["q4"]) { //設問4回答処理		        	
        case "1":
            $_SESSION["hobby"] = $_SESSION["hobby"] + 1;
            $_SESSION["communication"] = $_SESSION["communication"] + 3;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 5;
            break;

        case "2":
            $_SESSION["cospa"] = $_SESSION["cospa"] - 5;
            $_SESSION["communication"] = $_SESSION["communication"] + 3;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] - 1;

            //衝動買いフラグ判定
            if($_SESSION["cospa"] <= 10) {
                $_SESSION["shoudouFlag"] = $_SESSION["shoudouFlag"] + 1;

            } else;

            break;

        case "3":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 3;
            $_SESSION["kensan"] = $_SESSION["kensan"] + 5;
            $_SESSION["sports"] = $_SESSION["sports"] + 1;
            break;

        case "4":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 3;
            $_SESSION["communication"] = $_SESSION["communication"] + 5;
            $_SESSION["gurume"] = $_SESSION["gurume"] + 1;
            break;

        case "5":
            $_SESSION["sports"] = $_SESSION["sports"] + 3;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 5;
            $_SESSION["adult"] = $_SESSION["adult"] + 1;
            break;

    }
    
    require_once('../VIEW/scm/q5en.tpl.php'); //5問目設定

} elseif($_POST["next5"] != "") {
    switch($_POST["q5"]) { //設問5回答処理		        	
        case "1":
            $_SESSION["hobby"] = $_SESSION["hobby"] + 3;
            $_SESSION["sports"] = $_SESSION["sports"] + 1;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 5;
            break;

        case "2":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 1;
            $_SESSION["toushi"] = $_SESSION["toushi"] + 3;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 5;
            break;

        case "3":
            $_SESSION["este"] = $_SESSION["este"] + 1;
            $_SESSION["sports"] = $_SESSION["sports"] + 5;
            $_SESSION["gurume"] = $_SESSION["gurume"] + 3;
            break;

        case "4":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 1;
            $_SESSION["este"] = $_SESSION["este"] + 3;
            $_SESSION["communication"] = $_SESSION["communication"] + 5;
            break;

        case R.id.q5a5button:
            $_SESSION["cospa"] = $_SESSION["cospa"] + 3;
            $_SESSION["sports"] = $_SESSION["sports"] - 5;
            $_SESSION["adult"] = $_SESSION["adult"] + 1;
            break;

    }
    
    require_once('../VIEW/scm/q6en.tpl.php'); //6問目設定

} elseif($_POST["next6"] != "") {
    switch($_POST["q6"]) { //設問6回答処理		        	
        case "1":
            $_SESSION["cospa"] = $_SESSION["cospa"] - 1;
            $_SESSION["este"] = $_SESSION["este"] + 3;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 5;

            //ブランドフラグ判定
            if($_SESSION["fassion"] >= 8) {
                $_SESSION["brandFlag"] = $_SESSION["brandFlag"] + 1;

            } else;

            break;

        case "2":
            $_SESSION["cospa"] = $_SESSION["cospa"] - 5;
            $_SESSION["toushi"] = $_SESSION["toushi"] - 1;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 3;

            //衝動買いフラグ判定
            if($_SESSION["cospa"] <= 15) {
                $_SESSION["shoudouFlag"] = $_SESSION["shoudouFlag"] + 1;

            } else;

            break;

        case "3":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 5;
            $_SESSION["toushi"] = $_SESSION["toushi"] + 3;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 1;
            break;

        case "4":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 1;
            $_SESSION["communication"] = $_SESSION["communication"] + 5;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 3;
            break;

        case R.id.q6a5button:
            $_SESSION["hobby"] = $_SESSION["hobby"] + 5;
            $_SESSION["communication"] = $_SESSION["communication"] + 3;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 1;
            break;

    }
    
    require_once('../VIEW/scm/q7en.tpl.php'); //7問目設定

} elseif($_POST["next7"] != "") {
    switch($_POST["q7"]) { //設問7回答処理		        	
        case "1":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 3;
            $_SESSION["hobby"] = $_SESSION["hobby"] + 1;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 5;
            break;

        case "2":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 1;
            $_SESSION["hobby"] = $_SESSION["hobby"] + 5;
            $_SESSION["communication"] = $_SESSION["communication"] + 3;
            break;

        case "3":
            $_SESSION["hobby"] = $_SESSION["hobby"] + 1;
            $_SESSION["este"] = $_SESSION["este"] + 3;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 5;
            break;

        case "4":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 3;
            $_SESSION["este"] = $_SESSION["este"] + 5;
            $_SESSION["gurume"] = $_SESSION["gurume"] + 1;
            break;

        case "5":
            $_SESSION["sports"] = $_SESSION["sports"] + 5;
            $_SESSION["gurume"] = $_SESSION["gurume"] + 3;
            $_SESSION["adult"] = $_SESSION["adult"] + 1;
            break;

    }
    
    require_once('../VIEW/scm/q8en.tpl.php'); //8問目設定

} elseif($_POST["next8"] != "") {
    switch($_POST["q8"]) { //設問8回答処理		        	
        case "1":
            $_SESSION["hobby"] = $_SESSION["hobby"] + 3;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 5;
            $_SESSION["adult"] = $_SESSION["adult"] + 1;
            break;

        case "2":
            $_SESSION["hobby"] = $_SESSION["hobby"] + 3;
            $_SESSION["sports"] = $_SESSION["sports"] + 1;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 5;
            break;

        case "3":
            $_SESSION["hobby"] = $_SESSION["hobby"] + 5;
            $_SESSION["communication"] = $_SESSION["communication"] + 1;
            $_SESSION["adult"] = $_SESSION["adult"] + 3;

            //アダルトフラグ判定
            if($_SESSION["adult"] >= 4) {
                $_SESSION["adultFlag"] = $_SESSION["adultFlag"] + 1;

            } else;

            break;

        case "4":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 3;
            $_SESSION["kensan"] = $_SESSION["kensan"] + 5;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 1;
            break;

        case "5":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 1;
            $_SESSION["toushi"] = $_SESSION["toushi"] + 3;
            $_SESSION["sports"] = $_SESSION["sports"] + 5;
            break;

    }
    
    require_once('../VIEW/scm/q9en.tpl.php'); //9問目設定

} elseif($_POST["next9"] != "") {
    switch($_POST["q9"]) { //設問9回答処理		        	
        case "1":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 3;
            $_SESSION["hobby"] = $_SESSION["hobby"] + 5;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 1;
            break;

        case "2":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 5;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 1;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 3;

            //ブランドフラグ判定
            if(($_SESSION["fassion"] >= 12) && ($_SESSION["toushi"] >= 7)) {
                $_SESSION["brandFlag"] = $_SESSION["brandFlag"] + 1;

            } else;

            break;

        case "3":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 5;
            $_SESSION["hobby"] = $_SESSION["hobby"] + 1;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 3;
            break;

        case "4":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 1;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 3;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 5;
            break;

        case "5":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 3;
            $_SESSION["toushi"] = $_SESSION["toushi"] + 1;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 5;
            break;

    }
    
    require_once('../VIEW/scm/q10en.tpl.php'); //10問目設定

} elseif($_POST["next10"] != "") {
    switch($_POST["q10"]) { //設問10回答処理		        	
        case "1":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 5;
            $_SESSION["hobby"] = $_SESSION["hobby"] + 3;
            $_SESSION["communication"] = $_SESSION["communication"] + 1;
            break;

        case "2":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 3;
            $_SESSION["sports"] = $_SESSION["sports"] + 5;
            $_SESSION["communication"] = $_SESSION["communication"] + 1;
            break;

        case "3":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 3;
            $_SESSION["hobby"] = $_SESSION["hobby"] + 5;
            $_SESSION["sports"] = $_SESSION["sports"] + 1;
            break;

        case "4":
            $_SESSION["hobby"] = $_SESSION["hobby"] + 1;
            $_SESSION["sports"] = $_SESSION["sports"] + 3;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 5;
            break;

        case R.id.q10a5button:
            $_SESSION["kensan"] = $_SESSION["kensan"] + 3;
            $_SESSION["sports"] = $_SESSION["sports"] + 1;
            $_SESSION["communication"] = $_SESSION["communication"] + 5;
            break;	

    }
    
    require_once('../VIEW/scm/q11en.tpl.php'); //11問目設定

} elseif($_POST["next11"] != "") {
    switch($_POST["q11"]) { //設問11回答処理		        	
        case "1":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 1;
            $_SESSION["hobby"] = $_SESSION["hobby"] + 5;
            $_SESSION["sports"] = $_SESSION["sports"] + 3;
            break;

        case "2":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 1;
            $_SESSION["hobby"] = $_SESSION["hobby"] + 3;
            $_SESSION["sports"] = $_SESSION["sports"] + 5;
            break;

        case "3":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 5;
            $_SESSION["kensan"] = $_SESSION["kensan"] + 3;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 1;
            break;

        case "4":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 1;
            $_SESSION["hobby"] = $_SESSION["hobby"] - 5;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 3;
            break;

        case R.id.q11a5button:
            $_SESSION["kensan"] = $_SESSION["kensan"] + 5;
            $_SESSION["sports"] = $_SESSION["sports"] + 1;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 3;
            break;

    }
    
    require_once('../VIEW/scm/q12en.tpl.php'); //12問目設定

} elseif($_POST["next12"] != "") {
    switch($_POST["q12"]) { //設問12回答処理		        	
        case "1":
            $_SESSION["hobby"] = $_SESSION["hobby"] + 5;
            $_SESSION["este"] = $_SESSION["este"] + 1;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 3;
            break;

        case "2":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 1;
            $_SESSION["toushi"] = $_SESSION["toushi"] + 5;
            $_SESSION["kensan"] = $_SESSION["kensan"] + 3;

            //投資フラグ判定
            if(($_SESSION["toushi"] >= 20) && ($_SESSION["chochiku"] >= 12)) {
                $_SESSION["toushiFlag"] = $_SESSION["toushiFlag"] + 1;

            } else;

            break;

        case "3":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 1;
            $_SESSION["sports"] = $_SESSION["sports"] + 5;
            $_SESSION["adult"] = $_SESSION["adult"] + 3;
            break;

        case "4":
            $_SESSION["hobby"] = $_SESSION["hobby"] + 3;
            $_SESSION["communication"] = $_SESSION["communication"] + 5;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 1;
            break;

        case "5":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 5;
            $_SESSION["sports"] = $_SESSION["sports"] + 3;
            $_SESSION["communication"] = $_SESSION["communication"] + 1;
            break;

    }
    
    require_once('../VIEW/scm/q13en.tpl.php'); //13問目設定

} elseif($_POST["next13"] != "") {
    switch($_POST["q13"]) { //設問13回答処理		        	
        case "1":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 5;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 1;
            $_SESSION["gurume"] = $_SESSION["gurume"] + 3;
            break;

        case "2":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 3;
            $_SESSION["communication"] = $_SESSION["communication"] + 5;
            $_SESSION["adult"] = $_SESSION["adult"] + 1;

            //ネタフラグ判定
            if($_SESSION["communication"] >= 15) {
                $_SESSION["netaFlag"] = $_SESSION["netaFlag"] + 1;

            } else;

            break;

        case "3":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 5;
            $_SESSION["communication"] = $_SESSION["communication"] + 1;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] - 3;
            break;

        case "4":
            $_SESSION["cospa"] = $_SESSION["cospa"] - 5;
            $_SESSION["communication"] = $_SESSION["communication"] + 3;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 1;
            break;

        case "5":
            $_SESSION["kensan"] = $_SESSION["kensan"] - 3;
            $_SESSION["communication"] = $_SESSION["communication"] - 1;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 5;
            break;

    }

    require_once('../VIEW/scm/q14en.tpl.php'); //14問目設定
    
} elseif($_POST["next14"] != "") {
    switch($_POST["q14"]) { //設問14回答処理		        	
        case "1":
            $_SESSION["hobby"] = $_SESSION["hobby"] + 5;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] - 1;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 3;
            break;

        case "2":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 1;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 3;
            $_SESSION["gurume"] = $_SESSION["gurume"] + 5;
            break;

        case "3":
            $_SESSION["cospa"] = $_SESSION["cospa"] + 3;
            $_SESSION["hobby"] = $_SESSION["hobby"] + 1;
            $_SESSION["communication"] = $_SESSION["communication"] + 5;
            break;

        case "4":
            $_SESSION["toushi"] = $_SESSION["toushi"] - 3;
            $_SESSION["sports"] = $_SESSION["sports"] + 1;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 5;
            break;

        case "5":
            $_SESSION["toushi"] = $_SESSION["toushi"] - 1;
            $_SESSION["este"] = $_SESSION["este"] + 3;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 5;
            break;
        
    }
    
    require_once('../VIEW/scm/q15en.tpl.php'); //15問目設定

} elseif($_POST["next15"] != "") {
    switch($_POST["q15"]) { //設問15回答処理		        	
        case "1":
            $_SESSION["gurume"] = $_SESSION["gurume"] + 3;
            $_SESSION["fassion"] = $_SESSION["fassion"] + 1;
            $_SESSION["adult"] = $_SESSION["adult"] + 5;

            //アダルトフラグ判定
            if($_SESSION["adult"] >= 10) {
                $_SESSION["adultFlag"] = $_SESSION["adultFlag"] + 1;

            } else;

            break;

        case "2":
            $_SESSION["este"] = $_SESSION["este"] + 1;
            $_SESSION["sports"] = $_SESSION["sports"] + 5;
            $_SESSION["adult"] = $_SESSION["adult"] + 3;
            break;

        case "3":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 5;
            $_SESSION["chochiku"] = $_SESSION["chochiku"] + 3;
            $_SESSION["adult"] = $_SESSION["adult"] - 1;
            break;

        case "4":
            $_SESSION["toushi"] = $_SESSION["toushi"] + 1;
            $_SESSION["hobby"] = $_SESSION["hobby"] + 5;
            $_SESSION["communication"] = $_SESSION["communication"] + 3;
            break;

        case "5":
            $_SESSION["kensan"] = $_SESSION["kensan"] + 1;
            $_SESSION["hobby"] = $_SESSION["hobby"] + 3;
            $_SESSION["communication"] = $_SESSION["communication"] + 5;

            //ネタフラグ判定
            if(($_SESSION["communication"] >= 35) && ($_SESSION["hobby"] >= 15)){
                $_SESSION["netaFlag"] = $_SESSION["netaFlag"] + 1;

            } else;

            break;
            
    }

            
    if($_SESSION["adultFlag"] >= 2) {
        $url1 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=dvd&keywords=%E3%82%A2%E3%83%80%E3%83%AB%E3%83%88%E3%80%80%E5%A5%B3%E5%84%AA&linkCode=ur2&tag=shin001-22" ;		        
        $url2 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=dvd&keywords=%E3%82%A2%E3%83%80%E3%83%AB%E3%83%88%E3%80%80%E4%BC%81%E7%94%BB&linkCode=ur2&tag=shin001-22" ;
        $url3 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=hpc&keywords=%E3%82%A2%E3%83%80%E3%83%AB%E3%83%88%E3%82%B0%E3%83%83%E3%82%BA&linkCode=ur2&tag=shin001-22" ;	

    } else if(($_SESSION["adultFlag"] >= 1) && ($_SESSION["hobby"] >= 10)) {
        $url1 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=dvd&keywords=%E3%82%A2%E3%83%80%E3%83%AB%E3%83%88%E3%80%80%E7%B4%A0%E4%BA%BA&linkCode=ur2&tag=shin001-22" ;
        $url2 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=dvd&keywords=%E3%82%A2%E3%82%A4%E3%83%89%E3%83%AB&linkCode=ur2#/ref=sr_kk_2?rh=i%3Advd%2Ck%3A%E3%82%B0%E3%83%A9%E3%83%93%E3%82%A2%E3%82%A2%E3%82%A4%E3%83%89%E3%83%AB&keywords=%E3%82%B0%E3%83%A9%E3%83%93%E3%82%A2%E3%82%A2%E3%82%A4%E3%83%89%E3%83%AB&ie=UTF8&qid=1341814634&tag=shin001-22" ;
        $url3 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=dvd&keywords=%E3%82%A4%E3%83%A1%E3%83%BC%E3%82%B8%E3%83%93%E3%83%87%E3%82%AA&linkCode=ur2&tag=shin001-22" ;

    } else if($_SESSION["shoudouFlag"] >= 2) {
        $url1 = "http://user.auctions.yahoo.co.jp/jp/show/recommend" ;		        		        
        $url2 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=aps&keywords=オススメ&tag=shin001-22&linkCode=ur2&pct-off=70-" ;
        $url3 = "http://www.amazon.co.jp/%E3%82%BF%E3%82%A4%E3%83%A0%E3%82%BB%E3%83%BC%E3%83%AB/b/ref=topnav_deals?ie=UTF8&node=2221688051&tag=shin001-22" ;

    } else if($_SESSION["netaFlag"] >= 2) {
        $url1 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=aps&keywords=%E3%83%91%E3%83%BC%E3%83%86%E3%82%A3%E3%83%BC%E3%82%B0%E3%83%83%E3%82%BA&linkCode=ur2&tag=shin001-22" ;		        
        $url2 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=toys&keywords=%E3%83%91%E3%83%BC%E3%83%86%E3%82%A3%E3%83%BC%E3%82%B0%E3%83%83%E3%82%BA&linkCode=ur2&tag=shin001-22" ;
        $url3 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=hobby&keywords=%E3%83%91%E3%83%BC%E3%83%86%E3%82%A3%E3%83%BC%E3%82%B0%E3%83%83%E3%82%BA&linkCode=ur2&tag=shin001-22" ;

    } else if($_SESSION["brandFlag"] >= 2) {				
        $url1 = "http://www.lovelovenavi.jp/" ;
        $url2 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=watches&keywords=%E3%82%AA%E3%83%A1%E3%82%AC%E3%80%80%E3%83%AD%E3%83%AC%E3%83%83%E3%82%AF%E3%82%B9&linkCode=ur2&tag=shin001-22" ;
        $url3 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=jewelry&keywords=%E3%83%96%E3%83%A9%E3%83%B3%E3%83%89&linkCode=ur2&tag=shin001-22" ;

    } else if($_SESSION["gurume"] >= 7) {		
        $url1 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=food-beverage&keywords=%E3%82%B0%E3%83%AB%E3%83%A1%E3%80%80%E9%A3%9F%E5%93%81&linkCode=ur2&tag=shin001-22" ;
        $url2 = "http://www.amazon.co.jp/%E3%81%8A%E9%85%92-%E3%83%AF%E3%82%A4%E3%83%B3-%E6%97%A5%E6%9C%AC%E9%85%92-%E7%84%BC%E9%85%8E/b/ref=sv_fb_5?ie=UTF8&node=71588051&tag=shin001-22" ;
        $url3 = "http://www.amazon.co.jp/%E3%82%B9%E3%82%A4%E3%83%BC%E3%83%84-%E3%81%8A%E8%8F%93%E5%AD%90/b/ref=sv_fb_3?ie=UTF8&node=71314051&tag=shin001-22" ;

    } else if($_SESSION["este"] >= 8) {
        $url1 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=beauty&keywords=%E3%82%A8%E3%82%B9%E3%83%86&linkCode=ur2&tag=shin001-22" ;
        $url2 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=beauty&keywords=%E3%82%AA%E3%82%B9%E3%82%B9%E3%83%A1&linkCode=ur2&tag=shin001-22" ;
        $url3 = "http://www.amazon.co.jp/gp/bestsellers/beauty/ref=sv_beauty_1&tag=shin001-22" ;

    } else if($_SESSION["fassion"] >= 24) {
        $url1 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=apparel&keywords=%E3%83%95%E3%82%A1%E3%83%83%E3%82%B7%E3%83%A7%E3%83%B3&linkCode=ur2&tag=shin001-22" ;
        $url2 = "http://www.amazon.co.jp/gp/bestsellers/dmusic/ref=sv_dmusic_2&tag=shin001-22" ;
        $url3 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=jewelry&keywords=%E3%83%96%E3%83%A9%E3%83%B3%E3%83%89&linkCode=ur2&tag=shin001-22" ;

    } else if($_SESSION["toushi"] >= 19) {
        $url1 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=watches&keywords=&linkCode=ur2&tag=shin001-22" ;
        $url2 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=jewelry&keywords=%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B5%E3%83%AA%E3%83%BC&linkCode=ur2&tag=shin001-22" ;
        $url3 = "http://kakaku.com/fund/" ;

    } else if($_SESSION["chochiku"] >= 17) {
        $url1 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=kitchen&keywords=%E3%82%A4%E3%83%B3%E3%83%86%E3%83%AA%E3%82%A2&linkCode=ur2&tag=shin001-22" ;
        $url2 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=kitchen&keywords=%E7%94%9F%E6%B4%BB%E7%94%A8%E5%93%81&linkCode=ur2&tag=shin001-22" ;
        $url3 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=jewelry&keywords=%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B5%E3%83%AA%E3%83%BC&linkCode=ur2&tag=shin001-22" ;

    } else if($_SESSION["cospa"] >= 12) {
        $url1 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=aps&keywords=オススメ&tag=shin001-22&linkCode=ur2&pct-off=70-" ;
        $url2 = "http://www.amazon.co.jp/%E3%82%BF%E3%82%A4%E3%83%A0%E3%82%BB%E3%83%BC%E3%83%AB/b/ref=topnav_deals?ie=UTF8&node=2221688051&tag=shin001-22" ;
        $url3 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=jewelry&keywords=%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B5%E3%83%AA%E3%83%BC&linkCode=ur2&tag=shin001-22" ;

    } else if($_SESSION["kensan"] >= 14) {
        $url1 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=jewelry&keywords=%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B5%E3%83%AA%E3%83%BC&linkCode=ur2&tag=shin001-22" ;
        $url2 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=books&keywords=%E8%B3%87%E6%A0%BC%E3%80%80%E3%82%AA%E3%82%B9%E3%82%B9%E3%83%A1&linkCode=ur2&tag=shin001-22" ;
        $url3 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=office-products&keywords=%E3%82%AA%E3%82%B9%E3%82%B9%E3%83%A1&linkCode=ur2&tag=shin001-22" ;

    } else if($_SESSION["sports"] >= 14) {
        $url1 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=sporting&keywords=%E3%83%86%E3%83%8B%E3%82%B9&linkCode=ur2&tag=shin001-22" ;
        $url2 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=sporting&keywords=%E3%83%95%E3%83%83%E3%83%88%E3%82%B5%E3%83%AB&linkCode=ur2&tag=shin001-22" ;
        $url3 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=sporting&keywords=%E3%82%B9%E3%83%8E%E3%83%9C%E3%83%BC&linkCode=ur2&tag=shin001-22" ;

    } else if($_SESSION["hobby"] >= 24) {
        $url1 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=aps&keywords=%E3%83%80%E3%83%BC%E3%83%84%E3%80%80%E3%83%93%E3%83%AA%E3%83%A4%E3%83%BC%E3%83%89&linkCode=ur2&tag=shin001-22" ;
        $url2 = "http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=aps&keywords=%E8%B6%A3%E5%91%B3&linkCode=ur2&tag=shin001-22" ;
        $url3 = "http://www.amazon.co.jp/gp/bestsellers/hobby/ref=sv_hb_0&tag=shin001-22" ;

    } else if(($_SESSION["hobby"] >= 12) && ($_SESSION["communication"] >= 15)) {
        $url1 = "http://www.amazon.co.jp/gp/bestsellers/dmusic/ref=sv_dmusic_2&tag=shin001-22" ;
        $url2 = "http://www.amazon.co.jp/gp/bestsellers/dvd/ref=sv_d_3&tag=shin001-22" ;
        $url3 = "http://t.pia.jp/" ;

    } else {
        $url1 = "http://www.amazon.co.jp/gp/bestsellers/videogames/ref=sv_vg_3&tag=shin001-22" ;     
        $url2 = "http://www.amazon.co.jp/b/ref=amb_link_51398406_2?ie=UTF8&node=2278488051&pf_rd_m=AN1VRQENFRJN5&pf_rd_s=center-5&pf_rd_r=0AJK0BZYW2F4N13JB65G&pf_rd_t=101&pf_rd_p=116705109&pf_rd_i=465610&tag=shin001-22" ;
        $url3 = "http://www.amazon.co.jp/%E3%82%BF%E3%82%A4%E3%83%A0%E3%82%BB%E3%83%BC%E3%83%AB/b/ref=topnav_deals?ie=UTF8&node=2221688051&tag=shin001-22" ;

    }
    
    require_once('../VIEW/scm/resultEN.tpl.php'); //結果画面設定

} 

//new dBug($_SESSION);
//new dBug($_REQUEST);
    
?>
<?php
//取り込むテンプレートを指定（複数可能、ヘッダ・フッダはデフォルトで取り込み）⇒フレームワークとして必要
/*
$templateControlArray = array(VIEW_COMMON.'/loginForm.tpl', 
                              VIEW_MEMBER.'/search_member.tpl' );
 * 
 */
/*
$templateControlArray = array(//'VIEW/common/header.tpl.php',
                              '../VIEW/scm/q1jp.tpl.php'
                              //'VIEW/common/footer.tpl.php'
                              );
 * 
 */
?>

<?php require_once('../MODEL/exitController.inc.php'); //mysql開放・アクセスログ記録・exitで終了?>