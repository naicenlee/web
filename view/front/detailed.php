<?php 
//日记详细页面
header("Content-type:text/html;charset=utf-8");
include("../../config/dirconf.php");  //使用目录配置
include_once(WORKDIR.M.'dbconn.php');   //连接数据库
$id=$_GET['id'];
$sql='select * from notepad where id='.$id.';';
$result=mysql_query($sql);
if($result){
	$row=mysql_fetch_row($result);
//	var_dump($row);
}
$title=$row[1];
$content=$row[2];
$uname=$row[3];
$times=$row[5]
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8"/>
	<title><?php echo $title;?></title>
</head>
<body>
	<div  id="tb" style="margin:0 auto;margin-top:30px;height:auto;width:800px;border:1px dashed blue;">
		<center><h1><?php echo $title;?></h1></center>
		<hr style="border:1px dashed blue;"/>
		<span>发表时间：<?php echo $times;?></span>	
		<span style="float:right;">发表人：<?php  echo$uname;?></span>
		<hr style="border:1px dashed blue;"/>
		<?php 
		echo"<p>";
		echo'<pre>'.$content.'</pre>';
		//var_dump($content);
		//$content = str_replace("^","<br/>", $content);
		//echo $content;
		echo"</p>"
		?>
		
	</div>
	<script>
			//js设置详细表div自适应尺寸
			var tb=document.getElementById('tb');
			tb.style.width=document.documentElement.clientWidth-50+"px";
			//tb.style.height=document.documentElement.clientHeight-120+"px";
	</script>
</body>
</html>
