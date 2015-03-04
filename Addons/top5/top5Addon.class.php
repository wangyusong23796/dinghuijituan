<?php

namespace Addons\top5;
use Common\Controller\Addon;

/**
 * 首页top5插件
 * @author 王玉松
 */

    class top5Addon extends Addon{

        public $info = array(
            'name'=>'top5',
            'title'=>'首页top5',
            'description'=>'显示首页top5最热新闻',
            'status'=>1,
            'author'=>'王玉松',
            'version'=>'0.1'
        );

        public function install(){
            return true;
        }

        public function uninstall(){
            return true;
        }

        //实现的top5钩子方法
        public function top5($param){
        	

        	$this->assign('data',M('document')->select());
			$this->display('widget');
        }

    }