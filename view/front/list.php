<?php
header("Content-type:text/html;charset=utf-8");
include("../../config/dirconf.php");  //使用目录配置
include_once(WORKDIR.M.'dbconn.php');   //连接数据库
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>日记列表</title>
		<meta charset="utf-8" />
		<style>
			ul{list-style-type:none;}
			a{text-decoration:none;color:#000;border-bottom:1px dashed blue;display:block;width:95%;}
		</style>
	</head>
	<body>
		<ul>
		<?php
		$sql='select * from notepad where status=1;';
		$result=mysql_query($sql);
		if($result){
			while($row=mysql_fetch_row($result)){
				//标题  发布时间  发布人
				//var_dump($row);
				$content=substr($row[2],0,50).'...';
		    echo'<li><a  href="./detailed.php?id='.$row[0].'"> 
				<h3>'.$row[1].'</h3>|
				<span>内容：'.$content.'</span>|
				<span>发布人：'.$row[3].'</span>｜
				<span>发布时间：'.$row[5].' </span>
			</a></li>';
			}
		}
		
		mysql_free_result($result);
		mysql_close($link);
		  ?>
		</ul>
		<script>

		</script>
	</body>
</html>