<?php if (!defined('THINK_PATH')) exit(); include \Think\Template\Driver\Dux :: template(C('VIEW_PATH'). C('TPL_NAME').'/head'.C('TMPL_TEMPLATE_SUFFIX')); ?>
<div id="main">
                    <div id="sidebar">


                <h3>產品介紹 Catalog</h3>
                <h4><strong>PIPE KING</strong>METAL PRODUCT CO., LTD.</h4>

                <dl>
                   <?php $listList = service("DuxCms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>1 , "limit"=>8)); if(is_array($listList)) foreach($listList as $list){ ?>
   
     <dt><a href="<?php echo $list["curl"];?>"><?php echo $list["name"];?></a></dt>
<?php } ?>

                    
                </dl>



            </div>
                        <div id="content" ng-controller="ctrl">
                
<h3>聯絡我們</h3>

<iframe frameborder="0" height="330" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.862901255483!2d121.29813270811991!3d25.004774125232476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681fa85f0485ad%3A0xdbafe67d735c07eb!2zMzMw5qGD5ZyS57ij5qGD5ZyS5biC5oWI5YWJ6KGXMTAx5be3NeiZnw!5e0!3m2!1szh-TW!2stw!4v1413526354316" style="border: 0px currentColor; border-image: none;" width="680"></iframe>

<h4>派肯金屬製品有限公司</h4>

<ul class="text-list2 tw">
    <li><em>地址: </em><br>
    台灣省桃園縣桃園市慈光街101巷5號</li>
    <li><em>郵遞區號:</em> 33045</li>
    <li><em>電話：</em>+886-3-302-3722</li>
    <li><em>傳真：</em>+886-3-302-3712</li>
    <li><em>E-mail：</em> <a href="mailto:albert@zhiben.url.tw">albert@zhiben.url.tw</a><br>
    <a class="ind" href="mailto:pk3023722@gmail.com">pk.eric@msa.hinet.net</a></li>
    <li><em>網站：</em> <a href="www.pipe-king.com.tw">www.pipe-king.com.tw</a></li>
    <li><em>窗口：</em>Mr. Albert Liu / Mr. Eric Lin</li>
</ul>
;


            </div>
</div><!-- main //-->
</div><!--container //-->


<?php include \Think\Template\Driver\Dux :: template(C('VIEW_PATH'). C('TPL_NAME').'/foot'.C('TMPL_TEMPLATE_SUFFIX')); ?>