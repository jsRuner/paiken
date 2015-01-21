<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $media["title"];?> </title>
<meta name="keywords" content="<?php echo $media["keywords"];?>" />
<meta name="description" content="<?php echo $media["description"];?>" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <link href="/Public/home/boot/css/bootstrap.min.css" rel="stylesheet">

 <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<link href="/Themes/wwf/css/base.css" rel="stylesheet" type="text/css">
<link href="/Themes/wwf/css/style.css" rel="stylesheet" type="text/css">



</head>
<body>
	<div class="container wrap">
<?php include \Think\Template\Driver\Dux :: template(C('VIEW_PATH'). C('TPL_NAME').'/head'.C('TMPL_TEMPLATE_SUFFIX')); ?>

<!-- 灯箱 -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators wwfcarousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
 
    <div class="item active">
      <img src="/Themes/wwf/images/banner1.jpg" height="270" width="980" alt="图片1">
      <div class="carousel-caption">
        图片1
      </div>
    </div>
    
     <div class="item">
      <img src="/Themes/wwf/images/banner2.jpg" height="270" width="980" alt="图片2">
      <div class="carousel-caption">
        图片2
      </div>
    </div>

     <div class="item">
      <img src="/Themes/wwf/images/banner3.jpg" height="270" width="980" alt="图片3">
      <div class="carousel-caption">
        图片3
      </div>
    </div>
  </div>

</div>

<!-- 灯箱 -->

<!-- 页头碎片 -->
<ul id="breadCrumb">
        <li><a href="/">HOME</a></li>
        <li><a href="/Products">產品介紹</a></li>
        <li>不鏽鋼法蘭</li>
    </ul>


<div class="row content">
    
    <?php include \Think\Template\Driver\Dux :: template(C('VIEW_PATH'). C('TPL_NAME').'/left'.C('TMPL_TEMPLATE_SUFFIX')); ?>


    

    <?php include \Think\Template\Driver\Dux :: template(C('VIEW_PATH'). C('TPL_NAME').'/right'.C('TMPL_TEMPLATE_SUFFIX')); ?>
</div>







	

</div>

<?php include \Think\Template\Driver\Dux :: template(C('VIEW_PATH'). C('TPL_NAME').'/foot'.C('TMPL_TEMPLATE_SUFFIX')); ?>


	

   

    <script src="/Public/js/jquery.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public/home/boot/js/bootstrap.min.js"></script>

</body>
<script type="text/javascript">
	
</script>
</html>