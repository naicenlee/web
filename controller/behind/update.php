<?php 
//reword表单提交过来的数据更新到数据库
header("Content-type:text/html;charset=utf-8");
include("loadtest.php");
$POST=$_POST;
//var_dump($POST);
$table=$_GET['table'];
include("../../config/dirconf.php");  //使用目录配置
include_once(WORKDIR.M.'dbconn.php');   //连接数据库

switch($table){
	case'notepad':
		
		$id=$POST['id'];
		$title=$POST['title']; 
		$content=$POST['content'];
		$status=$POST['status'];
		$uname=$POST['uname']; 
		$times=$POST['times'];
		//echo
		 $sql='update '.$table.' set title="'.$title.'",content="'.$content.'",uname="'.$uname.'",status="'.$status.'",times="'.$times.'"  where id='.$id.';';
		$result=mysql_query($sql);
		if($result){
			echo '
					<script>
					alert("修改成功！");
					location="'.WORKCVDIR2.V_B.'admin/notepadshow.php";
					</script>
					';
		}
		break;
	case'fun':
		$id=$_POST['id'];
		$name=$_POST['name'];
		$url=$_POST['url'];
		//var_dump($_POST);
		//echo
		 $sql='update '.$table.' set name="'.$name.'",url="'.$url.'" where id='.$id.';';
		
		$result=mysql_query($sql);
		if($result){
			echo '
					<script>
					alert("修改成功！");
					location="'.WORKCVDIR2.V_B.'admin/funshow.php";
					</script>
					';
		}
		break;
}
mysql_close($link);