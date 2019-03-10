<?php 
header('Content-type:text/html;charset=utf-8');
include("loadtest.php");
//var_dump($_POST);
$title=$_POST['title'];
$content=$_POST['content'];
$status=$_POST['status'];
$uname=$_POST['uname'];
$times=$_POST['times'];
include("../../config/dirconf.php");  //使用目录配置
include_once(WORKDIR.M.'dbconn.php');   //连接数据库
$sql='insert into notepad(title,content,status,uname,times,lid)
value("'.$title.'","'.$content.'","'.$status.'","'.$uname.'","'.$times.'","");';
//echo $sql;
$result=mysql_query($sql);
if($result){
	mysql_close($link);
	echo'
			<script>
			alert("提交成功！");
			history.back();
			</script>
			';
			
}