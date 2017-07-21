<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="pragma" content="no-cache" >
	<meta charset="UTF-8">
	<title>zsy'blog</title>
	<link rel="stylesheet" href="/blog/Public/css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/blog/Public/css/party/uploadify.css">
<!-- 	<link rel="stylesheet" type="text/css" href="/blog/Public/css/home/link.css"> -->
	<style type="text/css">
		/*导航栏样式写在这里*/
.nav{
	background-color: #E1534A; 
	box-shadow: 0 2px 16px 	#989898, 0 0 1px	#989898, 0 0 1px #989898;
	margin: 0 0;
	border: 0px;
}
.nav li {
	display: inline-block;
}
.nav li a{
	color: white;
	border: 0px;
}
#li1{
	margin-left:13.4%;
	font-size: 20px;
	margin-top: 4px;
	margin-bottom: 4px;
	letter-spacing: 2px;
}
.li2{
	font-size:15px;
	margin-top: 7px;
	letter-spacing: 3px;
	margin-right: 0; 
}
.nav li a:hover{
	background-color: #E1534A;
	color: white;
}
.li2 a:hover{
	font-size: 18px;
	letter-spacing: 4px;
}
/*三角块样式*/
#sanjiao{
	width:0;
    height:0;
    background-color:none;
    border-left:10px solid transparent;
    border-right:10px solid transparent;
    border-bottom:none;
    border-top:12px solid #E1534A;
    margin: 4.1% 31%;
    position: fixed;
    z-index: 2;
}
body{
	background-color:rgb(239,239,244);
	padding-top:7%; 
}
.zsy_intr,.zsy_intr_2{
	background-color: white;
	border-radius:10px;
}
.zsy_img{
	border: white solid 8px;
}
.zsy_img_div{
	padding-left: 50px; 
}
.zsy_intr_2{
	height: 400px;
}
</style>
</head>
<body>

<!-- 导航栏 -->
<ul class="nav nav-tabs navbar-fixed-top">
	<li id="li1"><a href="/blog/index.php?c=cat&id=2" >ZSY牛宝宝</a></li>
    <li class="li2"><a href="/blog/index.php?c=cat&id=2">留言</a></li>
    <li class="li2"><a href="/blog/index.php?c=cat&id=1">关于我</a></li>
    <li class="li2"><a href="/blog/index.php?c=cat&id=2">笔记</a></li>
    <li class="li2"><a href="/blog/index.php?c=cat&id=3">链接</a></li>
    <li id="li3">
    </li>
    <div id="sanjiao" ></div>
</ul>

<!-- 这里写自我介绍的div -->
<div class="container">
	<div class="row">
		<div class="col-md-4 zsy_intr">
			<p>我叫邹淑英，是南昌大学一名大二学生</p>
			<p>注：非单身。</p>
			<p>除了吃喝玩乐，比较喜欢心理学，哲学，旅游，看电影。</p>
			<p>这个阶段最喜欢易烊千玺。成熟正太。</p>
			<p>我是个看上去就比较安静，但是被带动起来就比较逗比的宝宝。</p>
			<p>和我一起玩耍吧ヾ(≧∪≦*)ノ〃</p>
		</div>
		<div class="col-md-3 zsy_img_div">
			<img src="/blog/upload/about/1.jpg" width="200px" height="250px" class="zsy_img">
		</div>
		<div class="col-md-4 zsy_intr_2">
			<p>经历：</p>
			<p>还在努力中！加油！！！</p>
		</div>
	</div>
</div>
<script src="/blog/Public/js/jquery-3.2.0.min.js"></script>
<script type="text/javascript"></script>
<script src="/blog/Public/js/party/jquery.uploadify.js"></script>	
<script src="/blog/Public/js/dialog/layer.js"></script>
<script src="/blog/Public/js/dialog.js"></script>
<script srcv="/blog/Public/js/admin/common.js"></script>
<!-- jquery要在自己写的js文件之前引入 -->
</body>
</html>