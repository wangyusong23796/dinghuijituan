<?php

namespace Addons\loadjs;
use Common\Controller\Addon;

/**
 * 加载阴面地步的JS代码插件
 * @author 王玉松
 */

    class loadjsAddon extends Addon{

        public $info = array(
            'name'=>'loadjs',
            'title'=>'加载阴面地步的JS代码',
            'description'=>'这个插件式为了加载页面地步的js代码的',
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

        //实现的pageFooter钩子方法
        public function pageFooter($param){

                $this->display('widget');
                return true;
        }

    }