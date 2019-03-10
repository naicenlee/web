<?php
//修改功能链接
header("Content-type:text/html;charset=utf-8");
include("../../../controller/behind/loadtest.php");
include("../../../config/dirconf.php");  //使用目录配置
include_once(WORKDIR.M.'dbconn.php');   //连接数据库

$GET=$_GET;
//var_dump($_GET);
$id=$_GET['id'];
$table=$_GET['table'];
$action=$_GET['action'];

$sql='select * from '.$table.' where id='.$id.';';
$result=mysql_query($sql);
if($result){
	$row=mysql_fetch_row($result);
}

//var_dump($row); 0,id name url ico
echo'
		<span>功能链接修改</span>
		<form action="'.WORKCVDIR2.C_B.'update.php?table=fun" method="post" >
		<p><input type="hidden" name="id" value="'.$id.'"/></p>
		<p>功能名称:<input type="text" name="name" value="'.$row[1].'"/></p>
		<p>链接地址：<input type="text" name="url" value="'.$row[2].'"/></p>
		<p>功能图标:<input type="file" name="ico"/></p>
		<p><input type="submit" value="提交修改"/></p>
		</form>
		';