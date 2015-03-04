<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 王玉松 <admin@wangyusong.com> <http://www.wangyusong.com>
// +----------------------------------------------------------------------

namespace Home\Controller;
use Think\Controller;
/**
*	控制面板
*
*/
class MainController extends Controller{
	//首页
	public function index()
	{
		
		$this->display();
	}
	
	
}