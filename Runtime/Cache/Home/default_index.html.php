<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $media["title"];?> </title>
<meta name="keywords" content="<?php echo $media["keywords"];?>" />
<meta name="description" content="<?php echo $media["description"];?>" />
<link href="/Themes/default/css/base.css" rel="stylesheet" type="text/css">
<link href="/Themes/default/css/style.css" rel="stylesheet" type="text/css">
<script src="/Public/js/jquery.js"></script>
<script src="/Public/js/switch/jquery.SuperSlide.js"></script>
</head>
<body>
<?php include \Think\Template\Driver\Dux :: template(C('VIEW_PATH'). C('TPL_NAME').'/head'.C('TMPL_TEMPLATE_SUFFIX')); ?>
<div class="g-bd">
	<div class="g-mn">
		<div class="m-hds">
        
            <div id="m-sld" class="m-sld s-box">
                    <div class="hd">
                        <ul>
                        <?php $listList = service("DuxCms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>5, "image"=>true)); if(is_array($listList)) foreach($listList as $list){ ?>
                        <li><?php echo $list["i"];?></li>
                        <?php } ?>
                        </ul>
                    </div>
                    <div class="bd">
                        <ul>
                        	<?php $listList = service("DuxCms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>5, "image"=>true)); if(is_array($listList)) foreach($listList as $list){ ?>
                            <li><a href="<?php echo $list["aurl"];?>" target="_blank"><img src="<?php echo cut_image($list["image"],270,270);?>" width="270" height="270"   /></a></li>
                            <?php } ?>
                        </ul>
                        
                    </div>
                </div>
                
			<div class="m-top-new s-box">
            	<?php $listList = service("DuxCms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>1, "pos_id"=>1)); if(is_array($listList)) foreach($listList as $list){ ?>
				<div class="m-hot">
					<div class="tt"><a href="<?php echo $list["aurl"];?>"><?php echo $list["title"];?></a> <span>推荐置顶</span></div>
					<div class="dsc"><?php echo $list["description"];?></div>
				</div>	
                <?php } ?>
				<div class="m-hot-lst">
					<ul>
                        <?php $listList = service("DuxCms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>"1,5", "pos_id"=>1)); if(is_array($listList)) foreach($listList as $list){ ?>
						<li><a href="<?php echo $list["aurl"];?>"><?php echo $list["title"];?></a><span><?php echo date('Y-m-d',$list['time']);?></span></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="f-cb"></div>
		<div class="u-sep10"></div>
		<div class="m-ad"><img src="/Themes/default/images/ad-1.jpg" width="670" height="90"></div>
		<div class="g-md">
            <?php $classList = service("Article","Label","categoryList",array( "app"=>"Article", "label"=>"categoryList", "limit"=>"4", "type"=>"1")); if(is_array($classList)) foreach($classList as $class){ ?>
			<div class="m-news">
				<div class="tt"><a href="<?php echo $class["curl"];?>"><?php echo $class["name"];?> </a><span><a href="<?php echo $class["curl"];?>">more</a></span></div>                
                <?php $listList = service("DuxCms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>"1", "image"=>"true" , "class_id"=>$class['class_id'])); if(is_array($listList)) foreach($listList as $list){ ?>
				<div class="hot"><a href="<?php echo $list["aurl"];?>"><img src="<?php echo $list["image"];?>" width="70" height="48" alt="<?php echo $list["aurl"];?>"></a><a href="<?php echo $list["aurl"];?>"><?php echo $list["title"];?></a>
					<div class="f-cb"></div>
				</div>
				<?php } ?>
				<div class="lst">
					<ul>
                        <?php $listList = service("DuxCms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>"5", "class_id"=>$class['class_id'])); if(is_array($listList)) foreach($listList as $list){ ?>
						<li><a href="<?php echo $list["aurl"];?>"><?php echo $list["title"];?></a><span><?php echo date('Y-m-d',$list['time']);?></span></li>
						<?php } ?>
					</ul>
				</div>
			</div>
            <?php } ?>
			<div class="f-cb"></div>
		</div>
	</div>
	<div class="g-sd">
		<div class="m-sdc">
			<div class="tt">模板说明</div>
			<div class="ct"><?php $echoList = service("DuxCms","Label","fragment",array( "app"=>"DuxCms", "label"=>"fragment", "mark"=>"info")); echo $echoList; ?></div>
		</div>
		<?php include \Think\Template\Driver\Dux :: template(C('VIEW_PATH'). C('TPL_NAME').'/sidebar'.C('TMPL_TEMPLATE_SUFFIX')); ?>
	</div>
	<div class="f-cb"></div>
</div>
<?php include \Think\Template\Driver\Dux :: template(C('VIEW_PATH'). C('TPL_NAME').'/foot'.C('TMPL_TEMPLATE_SUFFIX')); ?>
</body>
<script type="text/javascript">
	$(function(){
		$("#m-sld").slide({mainCell:".bd ul",autoPlay:true});
	});
</script>
</html>