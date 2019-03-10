<?php
header("Content-type:text/html;cahrset=utf-8");
include("../../controller/behind/loadtest.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>后台管理</title>
		<style>
			
		</style>
	</head>

	   <frameset rows="15%,85%">
			<frame src="admin/header.html" noresize="noresize" />
			<frameset cols="15%,85%" >
				<frame src="admin/menu.html" noresize="noresize"  />
				<frame src="admin/hello.html" noresize="noresize"  name="showframe" />
			</frameset>
		</frameset>
    
    
</html>
