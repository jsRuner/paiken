<?php if (!defined('THINK_PATH')) exit();?><div class="g-hd">
	<div class="m-logo"></div>
	<div class="m-sch">
		<!---->
		<form action="<?php echo U('Article/Search/index');?>" method="get">
		<input name="m" type="hidden" value="Article">
        <input name="c" type="hidden" value="Search">
        <input name="a" type="hidden" value="index">
		<div class="select">
			<select name="model">
				<option value="0">标题</option>
				<option value="1">全文</option>
			</select>
		</div>
		<input name="keyword" type="text" maxlength="20">
		<button>搜索</button>
		</form>
	</div>
</div>
<div class="m-nav">
	<ul>
		<li><a <?php if (!$topCategoryInfo['class_id']){ ?> class="u-crt" <?php } ?>  href="/">网站首页</a></li>
        <?php $listList = service("DuxCms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "limit"=>5, "parent_id"=>0)); if(is_array($listList)) foreach($listList as $list){ ?>
           <li> <a href="<?php echo $list["curl"];?>" <?php if ($list['class_id']==$topCategoryInfo['class_id']){ ?> class="u-crt" <?php } ?>  ><?php echo $list["name"];?></a></li>
        <?php } ?>
		<li><a href='<?php echo U("DuxCms/Form/index",array("name"=>'guestbook'));?>'>留言板</a></li>
	</ul>
</div>