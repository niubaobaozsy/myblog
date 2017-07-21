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
    margin: 4.1% 41.7%;
    position: fixed;
    z-index: 2;
}
#link{
	font-size: 20px;
	font-weight: bold;

}
body{
	background-color:rgb(239,239,244);
}
.container{
	margin-top:8%; 
}
#link_div{
	background-color: #E1534A;
	width: 90px;
	height: 4px;
	margin-left: 10px; 
	margin-top:8px; 
}
.img_div{
	position: relative;
	margin: 15% 5% 0 15%;
}
.img_div .dis{
	position: absolute;
	background: #D8D8D8;
	top: 0;
	left: 0;
	width: 125px;
	height: 165px;
	line-height: 165px;
	text-align: center;
	opacity: 0.8;
}
#img{
	border: white solid 5px;
}
.dis span{
	color: white;
	font-size: 20px;
	font-weight: bold;
}
.hht_div{
	margin: 2% 0 0 6%;
	font-size: 18px;
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

<!-- 这里写分链接的块 -->

<div class="container">
	<div class="row">
		<div class="col-md-12"><span id="link">有情链接</span></div>
	</div>
	<div class="row">
		<div id="link_div"></div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<a target="_blank" href="http://112.74.172.6/index.php" class="img_a"><div class="img_div">
				<img src="/blog/upload/link/hht.jpg" width="125px" height="165px" id="img">
				<div class="dis" style="display: none"><span>黄汉韬</span></div>
			</div></a>
		</div>
	</div>
	<div class="hht_div"><span>PHP大神</span></div>
</div>




<script src="/blog/Public/js/jquery-3.2.0.min.js"></script>
<script type="text/javascript">
	$(".img_a").hover(
		function(){
		$(this).find($(".dis")).css("display",'block');
		},
		function(){
		$(this).find($(".dis")).css("display",'none');
		}
	);
</script>
<script src="/blog/Public/js/party/jquery.uploadify.js"></script>	
<script src="/blog/Public/js/dialog/layer.js"></script>
<script src="/blog/Public/js/dialog.js"></script>
<script srcv="/blog/Public/js/admin/common.js"></script>
<!-- jquery要在自己写的js文件之前引入 -->
</body>
</html>