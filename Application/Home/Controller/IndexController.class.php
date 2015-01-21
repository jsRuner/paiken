<?php
namespace Home\Controller;
use Home\Controller\SiteController;
/**
 * 站点首页
 */

class IndexController extends SiteController {

 function _initialize(){
    parent::initialize();
     $media=$this->getMedia();
        $this->assign('media', $media);


}

	/**
     * 主页
     * todo:缺少首页，目前是产品页面作首页
     */
    public function index(){
    	//MEDIA信息
         $this->assign('bodyclass', "Products");
         $this->siteDisplay('index');
    }

    /**
     * 产品列表页面
     * 显示 不鏽鋼法蘭产品
     * @return [type] [description]
     */
    public function productList($class_id = 2)
    {
    	# code...
   
        // $this->siteDisplay(C('TPL_PRODUCTLIST')); 
         //设置当前Body的class
         $this->assign('bodyclass', "Products");

         //设置默认的产品列表. 这里要取得最顶级的栏目。class_id可能是子级别id
         //也就是必须取得当前级别栏目的顶级标签
         $this->assign('currentClassId',$class_id);
         //不鏽鋼法蘭
         
         //当前栏目的信息
         $cate = D('DuxCms/Category');
       $currentCateInfo = $cate ->getInfo($class_id);
       $this->assign("currentCateInfo",$currentCateInfo);


        $this->siteDisplay('productList');
    }

    /**
     * 产品列表页面->规格型号列表页面
     * 显示 不鏽鋼法蘭产品
     * @return [type] [description]
     */
    public function productTypeList($class_id = 15)
    {
        # code...
   
        // $this->siteDisplay(C('TPL_PRODUCTLIST')); 
         //设置当前Body的class
         $this->assign('bodyclass', "Products");

         //设置默认的产品列表. 这里要取得最顶级的栏目。class_id可能是子级别id
         //也就是必须取得当前级别栏目的顶级标签
        
         //不鏽鋼法蘭
         
         //当前栏目的信息
         $cate = D('DuxCms/Category');
       $currentCateInfo = $cate ->getInfo($class_id);
       $this->assign("currentCateInfo",$currentCateInfo);

       $parentCateInfo = $cate ->getInfo($currentCateInfo['parent_id']);
       $this->assign('parentCateInfo',$parentCateInfo);

        $this->assign('currentClassId',$currentCateInfo['parent_id']);


        $this->siteDisplay('productTypeList');
    }

     /**
     * 规格型号列表->规格型号内容页面
     * 显示 不鏽鋼法蘭产品
     * @return [type] [description]
     */
    public function productTypeContent($class_id = 20)
    {
        # code...
   
        // $this->siteDisplay(C('TPL_PRODUCTLIST')); 
         //设置当前Body的class
         $this->assign('bodyclass', "Products");

       
         
         //当前栏目的信息
         $cate = D('DuxCms/Category');
       $currentCateInfo = $cate ->getInfo($class_id);

       $this->assign("currentCateInfo",$currentCateInfo);

       //当前栏目下的文章
       //跨模块调用。
       //增加排序 。升序
       $where = array('C.class_id'=>$class_id);

       $limit = 8;
       $order = 'A.sequence asc';
        $list = D('Article/ContentArticle')->loadList($where,$limit,$order);

        

        // p($list);
        // die();
        $this->assign('articleList',$list);
        

       $parentCateInfo = $cate ->getInfo($currentCateInfo['parent_id']);
        $this->assign("parentCateInfo",$parentCateInfo);

       $parentParentCateInfo = $cate ->getInfo($parentCateInfo['parent_id']);

    
      
        $this->assign('currentClassId',$parentParentCateInfo['class_id']); //获得侧边栏的次级栏目名称
          $this->assign("parentParentCateInfo",$parentParentCateInfo);


        $this->siteDisplay('productTypeContent');
    }




// todo
    public function aboutUs()
    {
        # code...
          $this->assign('bodyclass', "AboutUs");
          $this->siteDisplay('aboutUs');
    }

    public function contactUs()
    {
        # code...
          $this->assign('bodyclass', "ContactUs");
          $this->siteDisplay('contactUs');
    }

    public function comments()
    {
        # code...
        //设置当前Body的class
         $this->assign('bodyclass', "Comments ng-scope");
          $this->siteDisplay('comments');
    }

    /**
     * 切换繁体与英文
     * @return [type] [description]
     */
    public function language2($languageType = 'cn')
    {
        # code...
        session('currentLanguageType',$languageType);

        redirect(U('Home/index/index'));
        
        
    }





}