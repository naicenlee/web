<?php
header("Content-type:text/html;charset=utf-8");
include("loadtest.php");
$POST=$_POST;
//var_dump($POST);
include("../../config/dirconf.php");  //使用目录配置
include_once(WORKDIR.M.'dbconn.php');   //连接数据库
$sql='update webos_conf set title="'.$POST['title'].'",keywords="'.$POST['keywords'].'",descc="'.$POST['descc'].'",style="'.$POST['style'].'",status="'.$POST['status'].'" where id="'.$POST['id'].'";';
//echo $sql;
$result=mysql_query($sql);     //发送sql语句 执行更新
if($result){
echo'<script>
		alert("保存成功！");
		history.back();//返回前面的url
  	</script>';
}
