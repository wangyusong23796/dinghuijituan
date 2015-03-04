<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<title><?php echo C('WEB_SITE_TITLE');?>-<?php echo ($category["title"]); ?></title>
<link href="/ding/Public/Home/css/lists.css" rel="stylesheet" type="text/css" />
<link href="/ding/Public/Home/css/about.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="/ding/Public/Home/js/jquery-1.7.2.js"></script>
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

<script language="javascript">  
$(function(){
        
    /*top*/
    $(".topbox_2 .topbox_2a").mouseenter(function(){
        $(this).addClass("topbox_2aon").siblings().removeClass("topbox_2aon");
    }).mouseleave(function(){
        $(this).removeClass("topbox_2aon");
    }); 
    
    /*导航鼠标经过事件*/
    $(".Halo_2,.Halo_1").mouseenter(function(){
        $(this).children().first().slideDown();
    }).mouseleave(function(){
        $(this).children().first().slideUp();   
    });
    
    /*左导航的点击变色*/
    $(".content_left").children().click(function(){
        $(this).attr("class","content_left2").siblings().attr("class","content_left1");
    });
    
    /**/
    $(".news2").mouseenter(function(){
        $(this).children().first().addClass("news2dton");
    }).mouseleave(function(){
        $(this).children().first().removeClass("news2dton");
    });
        /**/
    $(".media").mouseenter(function(){
        $(this).children().addClass("media3on");
    }).mouseleave(function(){
        $(this).children().removeClass("media3on");
    });
});

</script>


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
	
	<div class="banner"></div>

	
	<!-- bannerend -->

	<!-- nav -->
	<!--页面关系-->


<div class="relationship">
	<ul class="relationship_box">
    	<li class="relationship_1"><a href="/ding/index.php">首页</a></li>
        <li class="relationship_2">-</li>
        <li class="relationship_1"><a href="<?php echo U('Article/index',array('category'=>$fid['name']));?>"><?php echo ($fid["title"]); ?></a></li>
        <li class="relationship_2">-</li>
        <li class="relationship_1"><?php echo ($category["title"]); ?></li>
    </ul>
</div>



	<div class="content">
        <!--左侧-->
    <ul class="content_left">
    	<?php echo W('Category/nav', array($category['pid'], true));?>
    </ul>
    

	<!-- nav -->

	<!-- 身体 -->
	

<!--内容-->

	<!--右侧-->
    <div class="content_right">
    	<!--以后替换的-->
      <div class="news">
        	<p class="news1"><?php echo ($category["title"]); ?></p>	
  
            <div class="honour">
            <?php foreach($list as $value):?>
             <ul class="honour1">
                    <li class="honour1_1"><img src="<?php echo ($value["pic_url"]); ?>" title="“<?php echo ($value["title"]); ?>" width='260' width='170'/></li>
                    <li class="honour1_2"><?php echo ($value["title"]); ?></li>
                    <li class="honour1_3"><?php echo ($value["description"]); ?></li>
            </ul>
            <?php endforeach;?>
        </div>
            <ul class="news3">
                <?php echo $page;?>
            </ul>

    
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