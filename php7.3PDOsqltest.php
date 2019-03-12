<?php
header("Content-type:text/html;charset=utf-8");
echo"php7 connect mysql  test!<br/>";
//php7以上的新版本取消了mysql_connetc()函数的支持，使用PDO或者其他方法代替
 $pdo=new PDO('mysql:host=localhost;dbname=test;port=3306','root','123456');
 $pdo->exec('set names utf8');
 $sql="insert into test(name,age)values('hehe','haha')";
 $res=$pdo->exec($sql);
 echo '插入测试数据,影响行数：'.$res;
 phpinfo();

