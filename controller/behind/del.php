<?php 
header("Content-type:text/html;charset=utf8");
include("loadtest.php");
//删除操作  需要传送的数据  表名 ，要删除的id
$GET=$_GET;
$tname=$GET['table'];
$id=$GET['id'];
$action=$GET['action'];
//var_dump($GET);
switch($tname){
	case'fun':	
		if($action=='del'){
				include("../../config/dirconf.php");  //使用目录配置
				include_once(WORKDIR.M.'dbconn.php');   //连接数据库
			   $sql='delete from '.$tname.' where id='.$id.';';//准备sql语句
			   $result=mysql_query($sql);
			   if($result){
			   	echo'
			   			<script>
			   				alert("删除成功！");
			   				//history.back();//返回没有刷新，使用location跳转
			   				location.href="'.WORKCVDIR2.V_B.'admin/funshow.php";
			   			</script>
			   			';
			   }
				
			}
	break;
	case'notepad':
		if($action=='del'){
			include("../../config/dirconf.php");  //使用目录配置
			include_once(WORKDIR.M.'dbconn.php');   //连接数据库
			$sql='delete from '.$tname.' where id='.$id.';';//准备sql语句
			$result=mysql_query($sql);
			if($result){
				echo'
			   			<script>
			   				alert("删除成功！");
			   				//history.back();//返回没有刷新，使用location跳转
			   				location.href="'.WORKCVDIR2.V_B.'admin/notepadshow.php";
			   			</script>
			   			';
			}
		
		}
		break;
}