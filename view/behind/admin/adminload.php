<?php
header("Content-type:text/html;charset=utf-8");
@include("../../../config/dirconf.php");  //使用目录配置

?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>管理员登陆</title>
	</head>
	<body>
		<div>
		</span>管理员登陆</span>
		<form action="<?php echo WORKCVDIR2;?>/controller/behind/admin.php" method="post">
			<p>用户名：<input type="text"  name="user"/></p>
			<p>密&nbsp;&nbsp;码：<input type="password" name="pwd" /></p>
			<p>点击登陆：<input type="submit" value="登陆"/></p>
		</form>
		</div>
	</body>
</html>