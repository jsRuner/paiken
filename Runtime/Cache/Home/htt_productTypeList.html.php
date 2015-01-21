<?php if (!defined('THINK_PATH')) exit(); include \Think\Template\Driver\Dux :: template(C('VIEW_PATH'). C('TPL_NAME').'/head'.C('TMPL_TEMPLATE_SUFFIX')); ?>
<ul id="breadCrumb">
    <li><a href="/">HOME</a></li>
    <li><a href="/Products">產品介紹</a></li>
    <li><a href="/Products"><?php echo $parentCateInfo['name'];?></a></li>

    <li><?php echo $currentCateInfo['name'];?></li>
</ul>
<div id="main">
    <div id="sidebar">
        <h3>產品介紹 Catalog</h3>
        <h4><strong>PIPE KING</strong>METAL PRODUCT CO., LTD.</h4>
        <dl>
            <?php $channelList = service("DuxCms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>1 , "limit"=>5)); if(is_array($channelList)) foreach($channelList as $channel){ ?>
            <dt><a href="/index.php?s=/Home/Index/productTypeList/class_id/<?php echo $channel['class_id'];?>"  <?php if ($currentClassId == $channel['class_id']){ ?> class="current"  <?php } ?>   ><?php echo $channel["name"];?></a></dt>
            <dd  <?php if ($currentClassId == $channel['class_id']){ ?> class="current"  <?php } ?> >

            <?php $listList = service("DuxCms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>$channel['class_id'] , "limit"=>10)); if(is_array($listList)) foreach($listList as $list){ ?>
            <a href="<?php echo $list["curl"];?>"><?php echo $list["name"];?></a>
            <p>
            <?php $listList = service("DuxCms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>$list['class_id'] , "limit"=>10)); if(is_array($listList)) foreach($listList as $list){ ?>
            
            
            <a href="<?php echo $list["curl"];?>"><?php echo $list["name"];?></a>
            <?php } ?>
            
            </p>
            <?php } ?>
            </dd>
            <?php } ?>
            
        </dl>
        </div><!-- sidebar //-->
        <div id="content" ng-controller="ctrl">
            
            <h3 id="products">
            <?php echo $currentCateInfo['name'];?>
            </h3>
            <p>
              <!--   本公司產品系列有美標 (ASTM / ASME / ANSI), 德標 (DIN), 英標 (BS), 日標 (JIS), 俄標 (GOST), 歐標(EN) 等等各國規格型號, 也可以根據客戶提供的產品圖面或樣品來生產加工出口! -->
              <?php echo $currentCateInfo['description'];?>
            </p>
            <cite>(進一步詳細說明, 請點擊產品照片)</cite>
            <ol class="prolist2">


                <?php $listList = service("DuxCms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>$currentCateInfo['class_id'], "limit"=>10)); if(is_array($listList)) foreach($listList as $list){ ?>
              <li>
            <a class="kind" href="<?php echo U('Home/index/productTypeContent',array('class_id'=>$list["class_id"]));?>"><?php echo $list["name"];?></a>
            <em><a href="/C161308_PipeKing/Products/ANSI" target="_blank">B16.5, Class 150, Class 300, Class 600, Class 900.</a></em>
        </li>
<?php } ?>
            </ol>

            <div class="align-c">
    <a class="btn" onclick="javascript:window.history.back();">回上頁</a>
    <a class="btn" href="<?php echo U('Home/index/productList',array('class_id'=>$currentClassId));?>">回列表</a>
</div>


            </div><!-- content //-->
        </div>
        
        </div><!--container //-->
        <!--#include file="foot.html"