<?php
header("Content-type:text/html;charset=utf-8");
include("../../config/dirconf.php");//使用目录配置
// include_once(M.'dbconn.php');//链接数据库
// //查询admin表语句
// $sql="select * from admin";
// $result=mysql_query($sql);//执行查询
// $row=mysql_fetch_row($result);//解析资源集
//载入管理员登陆表单
include(WORKDIR.V_B.'admin/adminload.php');


