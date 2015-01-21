<?php
namespace Home\Controller;
use Common\Controller\BaseController;
/**
 * 前台公共类
 */
class SiteController extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->initialize();
    }

    /**
     * 控制器初始化
     */
    protected function initialize(){
        //设置手机版参数
        if(MOBILE){
            C('TPL_NAME' , C('MOBILE_TPL'));
        }
        //访问统计
        D('DuxCms/TotalVisitor')->addData();
        //蜘蛛爬行统计
        D('DuxCms/TotalSpider')->addData();
    }

    /**
     * 前台模板显示 调用内置的模板引擎
     * 加入语言的判断。繁体与英语
     * @access protected
     * @param string $name 模板名
     * @param bool $type 模板输出
     * @return void
     */
    protected function siteDisplay($name='',$type = true) {
        C('VIEW_PATH','./Themes/');

        //从会话中取出session
        $currentLanguageType = session('currentLanguageType');

        //设置默认的语言。为繁体
        if (empty($currentLanguageType)||$currentLanguageType=='cntw') {
            # code...
             $tpl = C('TPL_NAME').'/'.$name;
        }else{
              $tpl = C('TPL_NAME').'/'.$name.'_'.$currentLanguageType;
        }


      
        if($type){
            $this->display($tpl);
        }else{
            return $this->view->fetch($tpl);
        }
        
    }

    /**
     * 页面Meda信息组合
     * @return array 页面信息
     */
    protected function getMedia($title='',$keywords='',$description='')
    {
        if(empty($title)){
            $title=C('SITE_TITLE').' - '.C('SITE_SUBTITLE');
        }else{
            $title=$title.' - '.C('SITE_TITLE').' - '.C('SITE_SUBTITLE');
        }
        if(empty($keywords)){
            $keywords=C('SITE_KEYWORDS');
        }
        if(empty($description)){
            $description=C('SITE_DESCRIPTION');
        }
        return array(
            'title'=>$title,
            'keywords'=>$keywords,
            'description'=>$description,
        );
    }
}
