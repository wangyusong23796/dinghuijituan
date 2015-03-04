<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>鼎辉集团--注册</title>
<link href="/ding/Public/Home/css/login.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="/ding/Public/Home/js/jquery-1.7.2.js"></script>
<script language="javascript" src="/ding/Public/Home/js/jqrury-index.js"></script>
</head>
<script language="javascript">	

$(function(){
	$(".register_box input").focus(function(){
		$(this).next().children().first().show().siblings().hide();
	}).blur(function(){
		$(this).next().children().first().hide();
		$(this).next().children().eq(2).show();
	});
	
	/*二维码的显示和隐藏*/
	$(".bottom1_b").children().eq(1).click(function(){
		$(".weiwei").show();
		$(".bottom1_b").children().eq(1).addClass("bottom1_b2a");
	});
	$(".weiwei_button").click(function(){
		$(".weiwei").hide();
		$(".bottom1_b").children().eq(1).removeClass("bottom1_b2a");
	});
	
	$(".bottom1_b").children().eq(0).click(function(){
		$(".xinxin").show();
		$(".bottom1_b").children().eq(0).addClass("bottom1_b1a");
	});
	$(".xinxin_button").click(function(){
		$(".xinxin").hide();
		$(".bottom1_b").children().eq(0).removeClass("bottom1_b1a");
	});



        $(".verifyimg").click(function(){
        var id = Math.floor(Math.random()*1000);
        $(".verifyimg").attr("src", "/ding/index.php/User/verify?id=11" + id);
    })

	
});

</script>

<body style="background-color:#555555;">
<!--top-->
<div class="one_first"></div>
<div class="top">
	<div class="topbox">
    	<div class="topbox_1"></div>
        <div class="topbox_2"></div>
        <p class="topbox_3">注册</p>
    </div>
</div>

<!--Registration-->
<div style="background-color:#f2f2f2; padding-bottom:80px;">
    <div class="Registration">
      <ul class="register1">
            <li class="register1_a">注册新会员</li>
            <li class="register1_b">已有帐号？&nbsp;<a href="<?php echo U('User/login');?>">直接登录</a></li>
        </ul>
        <form action="/ding/index.php/User/register.html" method="post">
        <div class="register_box">
          <P class="register_box1"><span>*</span>登录账户：</P>
          <input class="register_box2" name="username" type="text" />
          <ul  class="register_box3">
                <li class="register_box3a">4-20位字符，支持字母、数字、下划线。不支持特殊字符。如@#￥%等</li>
                <li class="register_box3b">您输入的密码不正确请重新输入</li>
                <li class="register_box3c"></li>
            </ul>
        </div>
        <div class="register_box">
            <P class="register_box1"><span>*</span>登录密码：</P>
            <input class="register_box2" name="password" type="password" />
            <ul  class="register_box3">
              <li class="register_box3a">4-20位字符，支持字母、数字、下划线。不支持特殊字符。如@#￥%等</li>
                <li class="register_box3b">您输入的密码不正确请重新输入</li>
                <li class="register_box3c"></li>
            </ul>
        </div>
        <div class="register_box">
            <P class="register_box1"><span>*</span>确认密码：</P>
            <input class="register_box2" name="repassword" type="password" />
            <ul  class="register_box3">
              <li class="register_box3a">4-20位字符，支持字母、数字、下划线。不支持特殊字符。如@#￥%等</li>
                <li class="register_box3b">您输入的密码不正确请重新输入</li>
                <li class="register_box3c"></li>
            </ul>
        </div>
        <div class="register_box">
            <P class="register_box1"><span>*</span>账户昵称：</P>
            <input class="register_box2" name="name" type="text" />
            <ul  class="register_box3">
              <li class="register_box3a">4-20位字符，支持字母、数字、下划线。不支持特殊字符。如@#￥%等</li>
                <li class="register_box3b">您输入的密码不正确请重新输入</li>
                <li class="register_box3c"></li>
            </ul>
        </div>
        <div class="register_box">
            <P class="register_box1"><span>*</span>手机号码：</P>
            <input class="register_box2" name="mobile" type="text" />
            <ul  class="register_box3">
              <li class="register_box3a">4-20位字符，支持字母、数字、下划线。不支持特殊字符。如@#￥%等</li>
                <li class="register_box3b">您输入的密码不正确请重新输入</li>
                <li class="register_box3c"></li>
            </ul>
        </div>
        <div class="register_box">
            <P class="register_box1"><span>*</span>邮箱帐号：</P>
            <input class="register_box2" name="email" type="text" />
            <ul  class="register_box3">
              <li class="register_box3a">4-20位字符，支持字母、数字、下划线。不支持特殊字符。如@#￥%等</li>
                <li class="register_box3b">您输入的密码不正确请重新输入</li>
                <li class="register_box3c"></li>
            </ul>
        </div>
        <input type="text" id="inputPassword" class="span3" placeholder="请输入验证码"  errormsg="请填写5位验证码" nullmsg="请填写验证码" datatype="*5-5" name="verify">
        <img alt="点击切换" src="<?php echo U('User/verify');?>" style="cursor:pointer;" class="verifyimg">
        
        <div class="register_div">
          <p><input type="checkbox" name="CheckboxGroup1" value="复选框" id="CheckboxGroup1_1" />&nbsp;我同意<a href="#">《鼎辉财富服务协议》</a></p>
        </div>
        
        <div class="register_button">
            <input class="register_button1" name="" type="submit" value="立即注册" />
           
        </div>
        </form>
    </div>
</div>
<!--bottom-->
<div class="bottom1">
	<dl class="bottom1_a">
        <dd><a href="#">借款咨询</a></dd>
        <dd><a href="#">我要理财</a></dd>
        <dd><a href="#">产品介绍</a></dd>
        <dd><a href="#">最新动态</a></dd>
        <dd><a href="#">媒体报道</a></dd>
        <dd><a href="#">行业新闻</a></dd>
        <dd><a href="#">社会责任</a></dd>
        <dd><a href="#">志愿者</a></dd>
        <dd><a href="#">公司简介</a></dd>
        <dd><a href="#">发展历程</a></dd>
        <dd><a href="#">企业文化</a></dd>
        <dd><a href="#">联系方式</a></dd>
    </dl>
    <ul class="bottom1_b">
    	<li class="bottom1_b1"></li>
        <li class="bottom1_b2"></li>
    </ul>
</div>
<div style="height:1px; background-color:#636363;"></div>
<div class="bottom3">
	<div class="bottom3_left"></div>
    <div class="bottom3_right">
    	<p class="bottom3_right1">全国免费咨询电话：&nbsp;4009-9797-55&nbsp;（财富管理）&nbsp;&nbsp;&nbsp;&nbsp;4009-9632-55&nbsp;（借贷热线）</p>
        <p class="bottom3_right2">Copyright 2014 by Shenyang Yu Yang CDH Investment Management Limited.All Right Reserved.&nbsp;&nbsp;&nbsp;辽ICP备00000000号</p>
    </div>
</div>

<!--二维码-->
<div class="weiwei">
	<input class="weiwei_button" name="" type="button" />
</div>

<div class="xinxin">
	<input class="xinxin_button" name="" type="button" />
</div>

</body>

</html>