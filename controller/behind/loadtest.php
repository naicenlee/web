<?php
header("Content-type:text/html;charset=utf-8");
session_start();
//后台登陆验证 没有正确登陆返回首页
@$load=$_SESSION['load'];
//@var_dump($_SESSION['load']);
//var_dump($load);
if(!$load){
	die("这样纸真的好吗？");
}
