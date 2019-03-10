<?php
header("Content-type:text/html;charset=utf-8");
include("../../../controller/behind/loadtest.php");
include("../../../config/dirconf.php");  //使用目录配置
// id
// 功能名称
// 接入地址
// 图标
?>
<!DOCTYPE HTML>
<span>添加功能链接</span>
<hr>
<form action="<?php echo WORKCVDIR2;?>/controller/behind/fun.php" method="post">
	<p><input type="hidden" name="id"/> </p>
	<p>功能名称：<input type="text" name="name"/></p>
	<p>功能链接：<input type="text" name="url"/></p>
	<p>上传图标：<input type="file" name="ico"/>X</p>
	<p><input type="submit" value="添加"></p>
</form> 