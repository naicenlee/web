<?php
header("Content-type:text/html;charset=utf-8");
//1设置字符及
//2加载配置文件
//3读取数据库网站状态数据
//4载入页面
//5关闭数据库
//var_dump($_SERVER['DOCUMENT_ROOT']);
include("./config/dirconf.php");  //使用目录配置
//echo v_f.'index.php';
//require(V_F.'index.php'); 
include_once(WORKDIR.M.'dbconn.php');   //连接数据库
$sql='select * from webos_conf;';

$result=mysql_query($sql);     //发送sql语句 查询 id 的总个数返回一个资源 
/*while($row=mysql_fetch_row($result)){
	foreach($row as $key=>$value){
		 echo $value.'<br>';
	}
}
*/
$row=mysql_fetch_row($result);//解析资源集
//var_dump($row);

//定义键
$R['id']=$row[0];
$R['keywords']=$row[1];
$R['descc']=$row[2];
$R['logo']=$row[3];
$R['status']=$row[4];
$R['style']=$row[5];
$R['backimg']=$row[6];
$R['title']=$row[7];
//var_dump($R);
//检查是否在维护状态
//释放资源。
mysql_free_result($result);

//查询功能表，用于显示功能图标
$sql='select * from fun;';
$result=mysql_query($sql);
//$row2=mysql_fetch_row($result);
$i=0;
if(mysql_affected_rows($link)){
	while($row2=mysql_fetch_row($result)){//解析资源集为二维数组
		$fun[$i]=$row2;
		$i++;
	}
}
//var_dump($fun);

if($R['status']){include(WORKDIR.V_F.'index.php');}else{echo"博客维护了，过几天才能见到亲！";}

//关闭数据库
mysql_close($link);



