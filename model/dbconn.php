<?php
header("Content-type:text/html;charset=utf-8");
include_once(WORKDIR.C_N.'dbconf.php');
	
	$link=mysql_connect(DB_HOST,DB_USER,DB_PWD);
	if(mysql_errno()){//判断是否是有错误号
		echo mysql_error();//输出错误号
		exit(); //直接退出
		
	}
	mysql_select_db(DB_NAME,$link) or die("选择数据库错误".mysql_error());
	//echo DB_NAME;
	mysql_set_charset(DB_CHARSET);

