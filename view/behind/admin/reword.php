<?php 
//对日记表数据的修改
header("Content-type:text/html;charset=utf-8");
include("../../../controller/behind/loadtest.php");
$reid=$_GET['id'];
date_default_timezone_set('PRC');				//设置默认时区
$times=time();									//获取时间戳
$data=date('Y年m月d日');						//格式化当前时间
include("../../../config/dirconf.php");  //使用目录配置
include_once(WORKDIR.M.'dbconn.php');   //连接数据库
$sql='select * from notepad where id='.$reid.';';
$result=mysql_query($sql);
if($result){
$row=mysql_fetch_row($result);
//var_dump($row);
		//0,id  1,title 2,content  3,uname  4,status  5,times  6，lid
}
?>
<!DOCTYPE HTML>
<html>
<head></head>
<body>
		<span><center>修改日记</center></span>
		<hr>
		<center>
		<form action="../../../controller/behind/update.php?table=notepad" method="post">
			<p><input type="hidden" name="id" value="<?php  echo $row[0];?>"/></p>
			<p>标题：<input type="text" name="title" value="<?php echo $row[1];?>"/></p>
			<span>内容</span>
			<p><textarea id="textarea" name="content" rows="10" clos="50" value="<?php echo $row[2] ?>"></textarea></p>			
			<p>发布状态：<input type="radio" name="status" value="1" <?php  if($row[4]=='1'){echo'checked="checked"';}?>/>发布
					   <input type="radio" name="status" value="0" <?php if($row[4]=='0'){echo'checked="checked"';}?>/>存为草稿</p>
		    <p>发贴人:<input type="text" name="uname"  value="<?php echo $row[3];?>"/></p>
            <p><input type="hidden" name="times" value="<?php echo $data; ?>"/></p>		
 		    <p><input type="submit" value="提交"/></p>
		</form>
		</center>
<?php 
//对content的处理
$content=$row[2];
//`反单引号 作为换行的标记
$content = str_replace(array("\r\n", "\r", "\n"), "", $content);//去掉字符中的空格和换行，否则js遇到回车报错
echo'<script>
     var c="'.$content.'"; 
	 var area=document.getElementById("textarea");
     area.value=c;
    //alert(c);	
</script>';?>
</body>
</html>