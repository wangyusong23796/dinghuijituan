<?php

namespace Addons\kaifarenyuan;
use Common\Controller\Addon;

/**
 * 开发团队插件
 * @author 王玉松
 */

    class kaifarenyuanAddon extends Addon{

        public $info = array(
            'name'=>'kaifarenyuan',
            'title'=>'开发团队',
            'description'=>'显示开发人员',
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

        //实现的AdminIndex钩子方法
        public function AdminIndex($param){
			$this->display('widget');
        }

    }