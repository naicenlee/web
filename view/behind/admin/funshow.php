<?php
header("Content-type:text/html;charset=utf-8");
include("../../../controller/behind/loadtest.php");
include("../../../config/dirconf.php");  //使用目录配置
include_once(WORKDIR.M.'dbconn.php');   //连接数据库
$sql='select * from fun';
$result=mysql_query($sql);//执行sql查询
if($result){
	echo'<table width="800"  style="border:1px dashed #000;"/>';//输出表格
	echo'<caption><td>功能链接ID</td><td>功能链接名称</td><td>功能链接地址</td><td>功能链接图片</td><td>操作</td></caption>';//输出表头
	while($row=mysql_fetch_row($result)){//解析资源集
		//var_dump($row); //0=id 1=name 2=link 3 img
		echo'<tr>
				 <td>'.$row[0].'</td>
				 <td>'.$row[1].'</td>
				 <td>'.$row[2].'</td>
				 <td>'.$row[3].'</td>
				 <td><a href="refun.php?action=set&table=fun&id='.$row[0].'">修改</a>|<a href="'.WORKCVDIR2.C_B.'del.php?action=del&table=fun&id='.$row[0].'">删除</a></td>
			 </tr>	';
	}
	echo'</table>';
}