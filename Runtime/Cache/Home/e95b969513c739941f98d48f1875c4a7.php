<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<title><?php echo C('WEB_SITE_TITLE');?></title>
<link href="/ding/Public/Home/css/index.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="/ding/Public/Home/js/jquery-1.7.2.js"></script>
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>


</head>
<body>
	<!-- 头部 -->
	<!-- 导航条
================================================== -->

<div class="top">
    <div class="topbox">        
        <div class="topbox1">
            <!--top中的内容-->
            <a href="/ding/index.php"><div class="topbox_1"></div></a>
            <ul class="topbox_2">




                <?php if(is_login()): ?><li class="topbox_2a topbox_2a1" ><a href="<?php echo U('Main/index');?>"><?php echo session('nikename');?></a></li>
                    <li class="topbox_2b">|</li>
                    <li class="topbox_2a topbox_2a1"><a href="<?php echo U('User/logout');?>">退出</a></li>
                <?php else: ?>
                    <li class="topbox_2a topbox_2a1"><a href="<?php echo U("User/register");?>">快速注册</a></li>
                    <li class="topbox_2b">|</li>
                    <li class="topbox_2a topbox_2a1"><a href="<?php echo U("User/login");?>">立即登录</a></li><?php endif; ?>
                <li class="topbox_2b">|</li>
                <li class="topbox_2a"><a href="#">设为首页</a></li>
                <li class="topbox_2b">|</li>
                <li class="topbox_2a"><a href="#">加入收藏</a></li>
            </ul>
            <!--导航-->
            <ul class="Halo">
                <a href="/ding/index.php"><li class="Halo_1" style="width:152px; margin-left:0px;">首页</li></a>


                <li class="Halo_2">我要理财
                    <ul class="Halo_2a">
                        <?php echo W('Category/lists', array('financing', true));?>
                    </ul>
                </li>
                
                <li class="Halo_2">我要借款
                    <ul class="Halo_2a">
                        <?php echo W('Category/lists', array('loan', true));?>
                    </ul>
                </li>

                <li class="Halo_2">产品介绍
                    <ul class="Halo_2a">
                        <?php echo W('Category/lists', array('product', true));?>
                    </ul>
                </li>

                <li class="Halo_2">最新动态
                    <ul class="Halo_2a">
                        <?php echo W('Category/lists', array('news', true));?>
                    </ul>
                </li>

                <li class="Halo_2">社会责任
                    <ul class="Halo_2a">
                        <?php echo W('Category/lists', array('world', true));?>
                    </ul>
                </li>

                <li class="Halo_2">关于我们
                    <ul class="Halo_2a">
                         <?php echo W('Category/lists', array('about', true));?>

<!--                         <a href="#"><li>关于我们</li></a>
                        <a href="#"><li>发展历程</li></a>
                        <a href="#"><li>企业文化</li></a>
                        <a href="#"><li>联系我们</li></a>
                        <a href="#"><li>合作机构</li></a>
                        <a href="#"><li>招聘信息</li></a> -->
                    </ul>
                </li>


            </ul>
            <!--导航-->
        </div> 
    </div>
</div>

	<!-- /头部 -->
	<!-- bannerstart -->
	
    <ul class="banner">
    <li class="banner1"></li>
    <li class="banner2"></li>
    <li class="banner3"></li>
    <li class="banner4"></li>
    <li class="banner5"></li>   
</ul>
<!--banner_button-->
<div class="banner_but">
    <ul class="banner_button">
        <li class="banner_button1on"></li>
        <li class="banner_button1"></li>
        <li class="banner_button1"></li>
        <li class="banner_button1"></li>
        <li class="banner_button1"></li>
    </ul>    
</div>


	
	<!-- bannerend -->

	<!-- 身体 -->
	
<!--关于我们-->


<div class="About">
	<div class="About_box">
    	<div class="About_1"></div>
        <div class="About_2">
        	<a href="#"><p class="About_2a" title="沈阳鼎辉集团">沈阳鼎辉集团</p></a>
            <p class="About_2b">鼎辉集团是集财富管理、信用风险评估与管理、信用数据整合服务、
小微借款咨询服务与交易促成等业务于一体的综合性现代服务业企
业。公司经国家发改委批准，在工商局注册，注册资本1亿元人民
币。鼎辉具备强大背景资源与雄厚的资金实力，秉承“持诚信自强
不息，秉共享厚德载物”的理念，创立鼎辉财富。鼎辉财富汇聚国
内外知名院校金融专业精英人士，组成资深专家研发团队，涉及银
行、证券、私募、基金、保险等诸多行业。在投资理财、产品设计
风险控制等领域拥有专业理论知识和丰富实战经验。<a href="#">&nbsp;[查看更多]</a></p>
        </div>
        <a href="#"><div class="About_3" title="沈阳鼎辉集团"></div></a>
    </div>
</div>


<!--最新资讯-->
<div class="News">
	<div class="News_box">
    	<div class="News_1"></div>
        <div class="News_2">
                <!-- top5 hook -->
                <?php echo hook('top5');?>
        </div>
        <div class="News_3">
            <?php $i = 0?>
            <?php foreach($news_pic as $value):?>
        	<a href="<?php echo U('/Article/detail/?id='.$value['id']);?>"><ul class="News_3ul">
            	<img src="<?php echo ($value["pic_url"]); ?>" />
            	<li class="News_3ul1"><?php echo ($value["title"]); ?></li>
            </ul></a>
            <?php if ($i > 2) { break; }else $i++ ?>

            <?php endforeach;?>

        </div>
    </div>
</div>

	<!-- 身体 -->



	<!-- 底部 -->
	
    <!-- 底部
    ================================================== -->
<!--bottom-->
<div class="bottom">
	<div class="bottom_box">
    	<div class="bottom_1"></div>
        <div class="bottom_2">全国免费咨询电话：&nbsp;&nbsp;4009-9797-55&nbsp;（财富管理）&nbsp;&nbsp;&nbsp;&nbsp;4009-9632-55&nbsp;（借贷热线）</div>
        <div class="bottom_3">Copyright 2014 by Shenyang Yu Yang CDH Investment Management Limited.All Right Reserved.&nbsp;&nbsp;&nbsp;&nbsp;辽ICP备00000000号</div>
    </div>
</div>
<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/ding", //当前网站地址
		"APP"    : "/ding/index.php", //当前项目地址
		"PUBLIC" : "/ding/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>
 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>

	<!-- /底部 -->
</body>
</html>