<?php if (!defined('THINK_PATH')) exit();?>
            <div style="margin-top:8px;">
            <?php if(is_array($data)): $i = 0; $__LIST__ = array_slice($data,1,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><a href="<?php echo U('/Article/detail/?id='.$value['id']);?>"><ul class="News_2ul">
                    <li class="News_2ul1">0<?php echo $i ?></li>
                    <li class="News_2ul2"><?php echo ($value['title']); ?></li>
                    <li class="News_2ul3"><?php echo ($value['description']); ?></li>
            </ul></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>