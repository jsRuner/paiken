<?php if (!defined('THINK_PATH')) exit(); include \Think\Template\Driver\Dux :: template(C('VIEW_PATH'). C('TPL_NAME').'/head'.C('TMPL_TEMPLATE_SUFFIX')); ?>
<ul id="breadCrumb">
    <li><a href="/">HOME</a></li>
    <li><a href="/Products">產品介紹</a></li>
    <li><a href="/Products"><?php echo $parentParentCateInfo['name'];?></a></li>
    <li><a href="/Products"><?php echo $parentCateInfo['name'];?></a></li>
    <li><?php echo $currentCateInfo['name'];?></li>
</ul>
<div id="main">
    <div id="sidebar">
        <h3>產品介紹 Catalog</h3>
        <h4><strong>PIPE KING</strong>METAL PRODUCT CO., LTD.</h4>
        <dl>
            <?php $channelList = service("DuxCms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>1 , "limit"=>5)); if(is_array($channelList)) foreach($channelList as $channel){ ?>
            <dt><a href="/index.php?s=/Home/Index/productTypeContent/class_id/<?php echo $channel['class_id'];?>"  <?php if ($currentClassId == $channel['class_id']){ ?> class="current"  <?php } ?>   ><?php echo $channel["name"];?></a></dt>
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
                

<h3 id="products"><?php echo $currentCateInfo['name'];?></h3>

<dl class="prolist">
    <dt><?php echo $parentCateInfo['name'];?></dt>
    <dd><em>【型號】</em></dd>
    <dd><em>【規格】</em>1/2英吋~72英吋</dd>
</dl>


<div id="slider2">
    <!-- <div class="contentdiv"><img src="/Content/images/Products
oPic.jpg"></div> -->

<?php foreach ($articleList as $vo) {?>

  
  <div class="contentdiv" style="display: none;"><img src="<?php echo $vo['image'];?>"></div>
 
<?php } ?>

        <!-- <div class="contentdiv" style="display: none;"><img src="/Themes/htt/images/1S1.jpg"></div>
        <div class="contentdiv" style="display: none; z-index: 1; opacity: 1.1; visibility: visible;"><img src="/Themes/htt/images/2S2.jpg"></div>
        <div class="contentdiv" style="display: block; z-index: 2; opacity: 1.1; visibility: visible;"><img src="/Themes/htt/images/3S3.jpg"></div>
        <div class="contentdiv" style="display: none;"><img src="/Themes/htt/images/4S44_meitu_1.jpg"></div>
        <div class="contentdiv" style="display: none;"><img src="/Themes/htt/images/6S66_meitu_2.jpg"></div>
        <div class="contentdiv" style="display: none;"><img src="/Themes/htt/images/7S7.jpg"></div>
        <div class="contentdiv" style="display: none;"><img src="/Themes/htt/images/8S8.jpg"></div>
        <div class="contentdiv" style="display: none;"><img src="/Themes/htt/images/9S99_meitu_3.jpg"></div> -->

    
</div><!-- slider2 //-->
<!-- 小圖-->
<div id="pager-slider2">

    <?php foreach ($articleList as $vo) {?>

  <a class="toc" href="#" rel="<?php echo $vo["i"];?>"><img src="<?php echo $vo['image'];?>"></a>
 
<?php } ?>

  <!-- 
        <a class="toc" href="#" rel="1"><img src="/Themes/htt/images/1S1.jpg"></a>
        <a class="toc" href="#" rel="2"><img src="/Themes/htt/images/2S2.jpg"></a>
        <a class="toc selected" href="#" rel="3"><img src="/Themes/htt/images/3S3.jpg"></a>
        <a class="toc" href="#" rel="4"><img src="/Themes/htt/images/4S44_meitu_1.jpg"></a>
        <a class="toc" href="#" rel="5"><img src="/Themes/htt/images/6S66_meitu_2.jpg"></a>
        <a class="toc" href="#" rel="6"><img src="/Themes/htt/images/7S7.jpg"></a>
        <a class="toc" href="#" rel="7"><img src="/Themes/htt/images/8S8.jpg"></a>
        <a class="toc" href="#" rel="8"><img src="/Themes/htt/images/9S99_meitu_3.jpg"></a> -->
</div><!-- pager-slider //-->

<script>
    featuredcontentslider.init({
        id: "slider2",
        contentsource: ["inline", ""],     //["inline", ""] or ["ajax", "path_to_file"]
        toc: "markup",                     //"#increment", "markup", ["label1", "label2", etc]
        nextprev: ["", ""],                //"prev" and "next" links. Set to "" to hide.
        revealtype: "mouseover",           //"click" or "mouseover"
        enablefade: [true, 0.1],
        autorotate: [true, 3000],
        onchange: function (previndex, curindex) { }
    })
</script>

<h5>其他說明<span>DESCRIPTION</span></h5>

<div class="editor">
    <!--// 編輯器-->
   <!--  美國標準ANSI規格:<br>
B16.5, Class 150, Class 300, Class 600, Class 900.<br>
<br>
使用材料:<br>
美國標準ASTM規格: A105, Q235, 301, 304, 304L, 316, 316L.<br> -->

<?php echo $currentCateInfo['description'];?>
&nbsp;
</div>
<!--編輯器 //-->

<div class="align-c">
    <a class="btn" onclick="javascript:window.history.back();">回上頁</a>
    <a class="btn" href="<?php echo U('Home/index/productList',array('class_id'=>$currentClassId));?>">回列表</a>
</div>

            </div>

        </div>


            </div><!-- content //-->
        </div>
        
        </div><!--container //-->
        <!--#include file="foot.html"