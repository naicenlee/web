<?php
header("Content-type:text/html;charset=utf-8");
include("loadtest.php");
$POST=$_POST;
//var_dump($POST);
$name=$POST['name'];
$url=$POST['url'];
include("../../config/dirconf.php");  //使用目录配置
include_once(WORKDIR.M.'dbconn.php');   //连接数据库
$sql='insert into fun(name,url)value("'.$name.'","'.$url.'");';
$result=mysql_query($sql);
if($result){
	//mysql_free_result($result);//释放资源集  查询产生结果集，插入产生结果集。这个语句在这里使用报错。
	mysql_close($link);//关闭数据库
	echo'
	  <script>
			alert("添加成功");
			history.back();
	  </script>
			';
}