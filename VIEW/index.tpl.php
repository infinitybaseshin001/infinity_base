<!-- content begins -->       
<div id="content">
	
	<div class="scrollable">
				<div class="items">
					<div class="item">
						<div class="header1"></div>                                    
					</div> <!-- item -->
					<div class="item">
					    <div class="header2"></div>						
					</div> <!-- item -->
					<div class="item">
					    <div class="header3"></div>						
					</div> <!-- item -->			
											
					
				</div> <!-- items -->
			</div> <!-- scrollable -->
			
    <div style="height: 50px; vertical-align:top;">
    	<div class="navi"></div> <!-- create automatically the point dor the navigation depending on the numbers of items -->	
    </div>
      <div class="i_razd">
      	<div class="i_left">
          <div style="height:10px"></div>
            <div class="i_box_w">
            	<img src="images/img11.jpg" class="img_l" alt="" />
            	<img src="images/h1.png" class="img_h1" alt="" />
           	  <h1><font color ="yellow">@IT情報</font></h1>
              <div style="height:8px"></div>
              <? 
              for($i = 0, $cnt = 0; $i < 5; $i++) { 
                  if(!preg_match("/AD/", $itRSS[$i]['title'])) { 
              ?>
                  <a href="<?=$itRSS[$i]['link']?>" target="blank"> 
                      <?=$itRSS[$i]['title']?>
                  </a>
                  <?=$itRSS[$i]['description']?>
                  <div style="height:4px"></div>
                            <div style="height:20px"></div>
                        
              <? 
                    $cnt++; 
                  } if($cnt == 4)break; 
                  
              } 
              ?>
                    </div> 
          <div class="razd_v"></div>
            <div class="i_box_w">
              <img src="images/h1.png" class="img_h1"  alt="" />
              <h1><font color ="yellow">Wired科学情報</font></h1>
                <div style="height:8px"></div>
                <img src="images/img12.jpg" class="img_r" alt="" />
                <? 
                    for($i = 0, $cnt = 0; $i < 8; $i++) { 
                        if(!preg_match("/PR/", $wiredRSS[$i]['title'])) { 
                ?>
                <a href="<?=$wiredRSS[$i]['link']?>" target="blank"> 
                  <?=$wiredRSS[$i]['title']?>
                </a>
                <?=$wiredRSS[$i]['description']?>
                <br><br>
                <? 
                    $cnt++; 
                  } if($cnt == 4)break; 
                  
                } 
                ?>
                <div style="height:4px"></div>
                <div style="height:20px"></div>
            </div>
            
            
        </div>  
      <div class="i_right">
      		<img src="images/img13.jpg" alt="" />
   		 	<div style="height:7px"></div>
        	<img src="images/h1.png" class="img_h1"  alt="" /><h1><font color ="yellow">Infinity&nbsp;BaseのWEBログ⇒ブログ</font></h1>
          	<div style="height:10px"></div>
                <? 
                for($i = 0, $cnt = 0; $i < 15; $i++) { 
                    if((!strstr($infinityRSS[$i]['title'], "製作日報")) && 
                        (!strstr($infinityRSS[$i]['title'], "事業報告")) &&
                        (!strstr($infinityRSS[$i]['title'], "daily making report"))    ) { 
                ?>
                <a href="<?=$infinityRSS[$i]['link']?>" target="blank"> 
                  <?=$infinityRSS[$i]['title']?><br>
                </a>
                <?=$infinityRSS[$i]['description']?>
                <br><br><br>
                <?
                    $cnt++; 
                    } if($cnt == 5)break; 
                }
                ?>
                <?
                /*
          	<?=$stream['items'][0]['object']['content'];?><br>
                <a href="<?=$stream['items']['0']['object']['attachments'][0]['url'];?>" target ="blank">
                    <?=$stream['items']['0']['object']['attachments'][0]['displayName'];?><br>
                    <? 
                    if($stream['items']['0']['object']['attachments'][0]['image']['url'] != "") {
                    ?>    
                        <img src =<?=$stream['items']['0']['object']['attachments'][0]['image']['url'];?>>
                    <?
                    }
                    ?>
                </a>
                */
                ?>
          	<div style="height:4px"></div>
          
        </div>
      	<div style="clear: both"></div>
      </div>  
      <div style="height:14px"></div>
     <?php require_once("common/bottom.tpl.php"); ?>
     <div style="clear: both; height: 12px;"></div>                  
</div>
    <!-- content ends --> 
    
    
    
<!--shinobi1-->
<script type="text/javascript" src="http://x4.shinobi.jp/ufo/063338200"></script>
<noscript><img src="http://x4.shinobi.jp/bin/ll?063338200" border="0"></noscript>
<!--shinobi2-->
