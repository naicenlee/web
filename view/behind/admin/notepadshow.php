<?php 
header("Content-type:text/html;charset=utf-8");
include("../../../controller/behind/loadtest.php");
include("../../../config/dirconf.php");  //使用目录配置
include_once(WORKDIR.M.'dbconn.php');   //连接数据库
$sql="select * from notepad;";
$result=mysql_query($sql);
if($result){
	echo'<table width="1000" style="border:1px dashet #000">';
	echo'<caption><td>日记ID</td><td>日记标题</td><td>content</td><td>发布人</td><td>发布状态</td><td>发布人</td><td>操作</td></caption>';
	while($row=mysql_fetch_row($result))
	{
		//格式 0,id  1,title  2,content   3,uname  4,status  5,times  6 lid
		//var_dump($row);
		if($row[4]=='0'){
			$status='草稿';
		}else{
			$status='已发布';
		}
		$string=$row[2];
		$content=substr($string,0,50).'...';
		echo'<tr>
				<td>'.$row[0].'</td>
				<td>'.$row[1].'</td>
				<td>'.$content.'</td>
				<td>'.$row[3].'</td>
				<td>'.$status.'</td>
				<td>'.$row[5].'</td>
				<td>
					<a href="./reword.php?id='.$row[0].'">修改</a>|
					<a href="'.WORKCVDIR2.C_B.'del.php?action=del&table=notepad&id='.$row[0].'">删除</a>
				</td>
				</tr>';
	}
	echo'</table>';
	mysql_free_result($result);
	mysql_close($link);
}
