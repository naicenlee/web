<?php 
header("Content-type:text/html;charset=utf-8");
include("../../../controller/behind/loadtest.php");
date_default_timezone_set('PRC');				//设置默认时区
$times=time();									//获取时间戳
$data=date('Y年m月d日');						//格式化当前时间
echo'
		<span><center>写日记</center></span>
		<hr>
		<center>
		<form action="../../../controller/behind/newword.php" method="post">
			<p>标题：<input type="text" name="title"/></p>
			<span>内容</span>
			<p><textarea name="content" rows="10" clos="50"></textarea></p>			
			<p>发布状态：<input type="radio" name="status" value="1"/>发布
					   <input type="radio" name="status" value="0"/>存为草稿</p>
		    <p>发贴人:<input type="text" name="uname" /></p>
            <p><input type="hidden" name="times" value="'.$data.'"/></p>		
 		    <p><input type="submit" value="提交"/></p>
		</form>
		</center>
		';
