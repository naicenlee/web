<?php
header("Content-type:text/html;charset=utf-8");
include("../../../controller/behind/loadtest.php");
include("../../../config/dirconf.php");  //使用目录配置
include_once(WORKDIR.M.'dbconn.php');   //连接数据库
$sql='select * from webos_conf;';
$result=mysql_query($sql);     //发送sql语句 查询 id 的/总个数返回一个资源
$row=mysql_fetch_row($result);//解析资源集
//定义键
$R['id']=$row[0];
$R['keywords']=$row[1];
$R['descc']=$row[2];
$R['logo']=$row[3];
$R['status']=$row[4];
$R['style']=$row[5];
$R['backimg']=$row[6];
$R['title']=$row[7];
?>
<!DOCTYPE HTML>
		<center><span>网站配置</span><hr></center>
	<form action="<?php echo WORKCVDIR2;?>/controller/behind/conf.php" method="post">
		<input type="hidden" name="id" value="<?php echo$R['id']; ?>"/><!-- 隐藏域用于传用户id值-->
		<p>网站标题：<input type="text" name="title" value="<?php echo$R['title']; ?>"/></p>
		<p>网站关键字：<input type="text" name="keywords" value="<?php echo$R['keywords']; ?>"/></p>
		<p>网站描述：<input type="text" name="descc" value="<?php echo$R['descc'];?>" /></p>
		<p>网站风格：
		<input type="radio" name="style" value="blue" <?php if($R['style']=='blue'){echo 'checked="checked"';}?>/>蓝色
		<input type="radio" name="style" value="red"<?php if($R['style']=='red'){echo 'checked="checked"';}?>/>红色
		<input type="radio" name="style" value="green"<?php if($R['style']=='green'){echo 'checked="checked"';}?>/>绿色</p>
		<p>网站状态：
		<input type="radio" name="status" value="1" <?php if($R['status']=='1'){echo 'checked="checked"';}?>/>开启
		<input type="radio" name="status" value="0" <?php if($R['status']=='0'){echo 'checked="checked"';}?>/>维护</p>
		<p><input type="submit" value="保存"/></p>
	</form>
<?php 

//关闭数据库，释放资源。
mysql_free_result($result);
mysql_close($link);
?>