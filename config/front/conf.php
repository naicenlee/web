<?php
header("Content-type:text/html;charset=utf-8");
$GET=$_GET;
var_dump($GET['alt']);
echo'<form action="./handle.php" method="post"  enctype="multipart/form-data">';

switch($GET['alt']){
	case 'conf':
		echo'
			<span>博客配置</span>
			<hr/>
			<p>网站名称：<input type="text" nane="webname"/></p>
			<p>网站LOGO：<input type="file" name="logo"/></p>
			<p>网站关键字:<input type-"text" name="keywords" /></p>
			<p>网站描述:<input type="text" name="describe"></p>
			<p>网站风格:<check name="color"/>蓝色
						<check name="color"/>绿色
						<check name="color"/>红色
		    </p>
			<p>背景图:<input type="file" /></p>
		';
	break;
	
	
}
echo'<input type="submit" value="保存设置" />';
echo'</form>';