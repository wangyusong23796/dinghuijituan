<?php if (!defined('THINK_PATH')) exit(); if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i; if(($current) == $cate['id']): ?><a href="<?php echo U('Article/lists?category='.$cate['name']);?>">
		<li class="content_left1">
				<?php echo ($cate["title"]); ?>
		</li>
		</a>
	<?php else: ?>



			<?php if(($cate['model'] == 4)): ?><a href="<?php echo U('Article/index?category='.$cate['name']);?>">
				<li class="content_left1">
					<?php echo ($cate["title"]); ?>
				</li>
				</a>
			<?php else: ?>
				<a href="<?php echo U('Article/lists?category='.$cate['name']);?>">
				<li class="content_left1">
					<?php echo ($cate["title"]); ?>
				</li>
				</a><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>