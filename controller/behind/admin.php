<?php
header("Content-type:text/html;charset=utf-8");
//获取管理员登陆表单数据
$POST=$_POST;
//var_dump($POST);
$user=$POST['user'];
$pwd=md5($POST['pwd']);
//echo $user;
include("../../config/dirconf.php");//使用目录配置
include_once(WORKDIR.M.'dbconn.php');//链接数据库
// 查询admin表语句

//$sql="select * from admin";
//$result=mysql_query($sql);//执行查询
//$row=mysql_fetch_row($result);//解析资源集
//var_dump($row);

//创建手动测试密码
// $sql='insert into admin(id,username,userpwd,loadtime)value(1,"admin","'.md5(123456).'","2017/01/01");';
// $result=mysql_query($sql);
// $row=mysql_fetch_row($result);

//查询用户名是否存在
//echo
 $sql='select * from admin where username="'.$user.'";';
$result=mysql_query($sql);//执行查询
if(!$row=mysql_fetch_row($result)){//解析资源集
  //echo "该用户名不存在！";
  echo'<script>
  		    alert("该用户名不存在");
  			location.href="'.WORKCVDIR2.'/controller/behind/index.php";
  		</script>';
}elseif($pwd!=$row[2]){
	//echo "密码不正确";
	echo'<script>
			alert("密码错误！");
  			location.href="'.WORKCVDIR2.'/controller/behind/index.php";
  		</script>';
}else{
// 有效时间是24小时  如果是一周再乘以7
//setcookie($user,密码,time()+60*60*60*24);  cookie用于记住登陆用户账号和密码
//var_dump($_COOKIE);
//die();
//session用作登陆验证
//session 主要用于购物车
//1、禁掉COOKIE后SESSION就无法使用;
//其他地方使用session  使用函数  session_start();  退出用unset();
session_start();
$_SESSION['load']='1';
//unset($_SESSION);
//var_dump($_SESSION);
//die();
//验证管理员成功进入后台
echo'<script>
  		location.href="'.WORKCVDIR2.'/view/behind/index.php";
  	</script>';
}