<?php
header("Content-type:text/html;charset=utf-8");
session_start();
@$load=$_SESSION['load'];
if(!empty($load)){
	unset($_SESSION['load']);
  echo'<script>
	alert("退出成功！");
  </script>
 ';
	}else{
  echo'<script>
	alert("您不需要再退出了!");
//	location="localhost/";
  </script>
 ';		
	}
exit;
