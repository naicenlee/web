<!DOCTYPE HTML>
<!--this is os css boke-->
<html>
	<head>
		<meta charset="utf-8" />
		<!--<meta http-equive="Content-Language" content="zh" />-->
		<!--<meta http-equive="Content-Type" content="text/html;charset=utf-8" />-->
     	<title><?php echo $R['title'];?></title>
		<meta name="viewport" content="width=device-width" />
		<meta name="keywords" <?php echo 'content="'.$R['keywords'].'"';?> />
		<meta name="description" <?php echo 'content="'.$R['descc'].'"';?> />
		<link href="<?php echo WORKCVDIR2; ?>/public/front/css/index.css" rel="stylesheet"  type="text/css" />
		<style> 
		#bg{background: <?php  echo $R['style'];?>}
		.ico{float:left;width:80px;height:80px;background:url(<?php echo WORKCVDIR2; ?>/public/front/image/png/test.png) no-repeat;margin:15px;}
		</style>
	</head>
	<body id="bg">
		<!--window-->
		<div id="wd">
			<!--top-->
			<h1 id="t_title"><a id="t_top" href="#"><?php echo $R['title'];?></a></h1>
			<span id="t_load"><a href="<?php echo WORKCVDIR2;?>/controller/behind/index.php">[管理员登入]</a></span>
			<div id="t_cont">
				<?php 
				foreach($fun as $key=>$value){
					//var_dump($value); value:0,id 1,name 2,url 3,ico 
					$id=$value[0];
					$name=$value[1];
					$url=$value[2];
					echo<<<dd
					<!--遍历主页图标并附加js单击事件-->
					<a id="swd{$id}" onclick="swd{$id}();" target="_blank">
						<div  class="ico" >
							<center>
								<span class="i_font" >{$name}</span>
							</center>
						</div>
					</a>
					
					<script>
					function swd{$id}(){
					var swd=document.getElementById("hid");//获取隐藏div节点
					//写入弹窗
					swd.innerHTML='<div  id="s{$id}" style="border:1px solid blue;position:fixed;left:25%;top:15%;background:pink;"><a onclick="del{$id}();">X</a><iframe style="border:0px;" id="i{$id}" src="{$url}"></iframe></div>';
					var swd{$id}=document.getElementById("s{$id}");//获取弹窗节点
					swd{$id}.style.width=document.documentElement.clientWidth/2+"px";
					swd{$id}.style.height=(document.documentElement.clientHeight+30)/1.5+"px";
					
					
					var i{$id}=document.getElementById("i{$id}");//获取iframe的节点
					i{$id}.style.width=document.documentElement.clientWidth/2+"px";
					i{$id}.style.height=document.documentElement.clientHeight/1.5+"px";													
					 }
					 function del{$id}(){
						 var swd=document.getElementById("hid");  //获取隐藏div节点
						 var x=document.getElementById("s{$id}"); //获取要删除的节点
						 swd.removeChild(x);					  //删除节点
					 }
					</script>
dd;
											   
				}
				?>
			
			</div>	
			<div id="hid" height="0" width="0" border="0"></div><!--用来放弹窗swd-->
			<script>
			var cont=document.getElementById('t_cont');
			cont.style.width=document.documentElement.clientWidth-50+"px";
			cont.style.height=document.documentElement.clientHeight-120+"px";
			</script>
			<span id="t_copy">copyright laveyem 2017｜version 1.0</span>
		</div>
			<script>
			//设置wd（窗口div）的尺寸根据文档可见尺寸而改变
			var wd=document.getElementById('wd');
             //alert(document.body.clientWidth );//获取body可见区域的宽度  body宽度是由文档大小自动伸开，所以用文档可见宽度
            wd.style.width=document.documentElement.clientWidth-30+"px";
            wd.style.height=document.documentElement.clientHeight-30+"px";			
		</script>
	</body>
</html>