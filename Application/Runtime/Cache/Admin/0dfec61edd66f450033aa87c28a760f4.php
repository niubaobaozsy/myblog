<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="/blog/Public/css/login.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/blog/Public/css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head> 
<body>
<div class="container">
    <div class="row" id="login">
		<form methon="post" id="form" class="form-horizontal">
				<h2><span id="title">请登录</span></h2>
			<div id="form-group"> 
				<label>用户名:</label>
				<input type="text" name="username" class="form-control "><br>
			</div>
			<div id="form-group form-inline">
				<label>密码:</label>
				<input type="password" name="password" class="form-control" ><br>
			</div>
				<input type="button" id="login_bt" value="登录" class="btn btn-primary btn-group-justified">
		</form>
	</div>
</div>
 <script src="/blog/Public/js/jquery-3.2.0.min.js"></script>	
 <script src="/blog/Public/js/dialog/layer.js"></script>
 <script src="/blog/Public/js/dialog.js"></script>
 <script type="text/javascript" src="/blog/Public/js/admin/login.js"></script><!-- //前端登录页面 -->
 <script>
 	$("#login_bt").click(function(){
 		login.check();
 	});
 </script>
</body>
	
</html>