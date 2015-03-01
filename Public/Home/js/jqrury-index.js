
/*文字限制个数*/
function wordsLength(selector,maxNum){
	var classStr="."+selector;
	$(classStr).each(function(){ 
			var maxwidth=maxNum/*文字的个数*/;
			if($(this).text().length>maxwidth){
			$(this).text($(this).text().substring(0,maxwidth)); 
			$(this).html($(this).html()+'...'); 
			}
	});
}

/*图片居中*/
function  imgInCenter(selector,a,b){
	  var classStr=selector;
	  var maxWidth=a;  /*图片所在div的宽度*/
	  var maxHeight=b;  /*图片所在div的高度*/
	  $("."+classStr+" img").each(function(){
		  var curWidth=$(this).width();//图片原宽
		  var curHeight=$(this).height();//图片原高
		if(curWidth>curHeight){/*原图宽大于高*//*if开始*/
			if(curWidth>maxWidth){//当前宽度大于最大值
			  var newWidth=maxWidth;//新的宽
			  var newHeight=(curHeight/curWidth)*newWidth;//新的高
			  var paddingTop=(maxHeight-newHeight)/2+"px";
			  $(this).width(newWidth);
			  $(this).height(newHeight);
			  $(this).css("padding-top",paddingTop);		  
		   }else{//当前宽度不大于最大值
			  var paddingTop=(maxHeight-curHeight)/2+"px";
			  var paddinfLeft=(maxWidth-curWidth)/2+"px";
			  $(this).css("padding-top",paddingTop);	
			  $(this).css("paddingleft",paddinfLeft);	
		   }	  
		}else{/*原图宽不大于高*//*if结束、else开始*/
			if(curHeight>maxHeight){//当前高大于最大值
			  var newHeight=maxHeight;//新的高
			  var newWidth=(curWidth/curHeight)*newHeight;//新的宽
			  var paddinfLeft=(maxWidth-newWidth)/2+"px";
			 $(this).css("paddingleft",paddinfLeft);			 
		   }else{//当前高大不于最大值
			  var paddingTop=(maxHeight-curHeight)/2+"px";
			  var paddinfLeft=(maxWidth-curWidth)/2+"px";
			  $(this).css("padding-top",paddingTop);	
			  $(this).css("paddingleft",paddinfLeft);	 
		  }	
		  
		}/*else结束*/

	  });
}



/*限制字的个数多出的用...代替*/
$(document).ready(function(){ 

$(".News_3ul1").each(function()

{ var maxwidth=45;

if($(this).text().length>maxwidth){

$(this).text($(this).text().substring(0,maxwidth)); 

$(this).html($(this).html()+'...'); 

} 

});

});  
/*限制字的个数多出的用...代替*/

$(function(){
		
	/*top*/
	$(".topbox_2 .topbox_2a").mouseenter(function(){
		$(this).addClass("topbox_2aon").siblings().removeClass("topbox_2aon");
	}).mouseleave(function(){
		$(this).removeClass("topbox_2aon");
	});
	
	
	/*导航鼠标经过事件*/
	$(".Halo_2").mouseenter(function(){
		$(this).children().first().slideDown();
	}).mouseleave(function(){
		$(this).children().first().slideUp();	
	});
	/*banner变换效果*/
	var cur = 0;
	var num = $(".banner").children().length;			
	function change(){
		if(cur<num-1){
			cur++;
		}else{
			cur=0;
		}
		$(".banner").children().eq(cur).show().siblings().hide();
		$(".banner_button").children().eq(cur).attr("class","banner_button1on").siblings().attr("class","banner_button1");
	}
	var time = setInterval(change,6000)
	//点击事件
	$(".banner_button").children().mouseenter(function(){
		var ber = $(".banner_button").children().index(this);		
		$(".banner_button").children().eq(ber).attr("class","banner_button1on").siblings().attr("class","banner_button1");
		$(".banner").children().eq(ber).show().siblings().hide();
 		cur=ber;
	});
	
	//鼠标经过停止播放
	$(".banner,.banner_button").hover(function(){
		clearInterval(time);
	},function(){
		time = setInterval(change,6000)
	})
	
	/*News_2ul里的第一个变色*/
	$(".News_2ul").mouseenter(function(){
		$(this).children().first().addClass("News_2ul1on");
	}).mouseleave(function(){
		$(this).children().first().removeClass("News_2ul1on");
	});
	
	/*News_3ul里的最后一个节点的显示和隐藏*/
	$(".News_3ul").mouseenter(function(){
		$(this).children().last().fadeIn(300);
	}).mouseleave(function(){
		$(this).children().last().fadeOut(300);
	});;
	
	
	
});








































