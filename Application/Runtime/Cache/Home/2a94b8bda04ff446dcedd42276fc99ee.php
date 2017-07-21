<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="pragma" content="no-cache" >
	<meta charset="UTF-8">
	<title>zsy'blog</title>
	<link rel="stylesheet" href="/blog/Public/css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/blog/Public/css/party/uploadify.css">
	<link rel="stylesheet" type="text/css" href="/blog/Public/css/home/main.css">
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

/*此处是右边表格样式*/
.table{
	float: right;
	 width:20%;
	 background-color: #FFFFFF;
	 margin: 0.8% 15% 0 0;
	border-radius:7px;
}
.table tr{
	height: 50px;
}
td a:hover{
	text-decoration: none;
}
table tr td a{
	display: block;
}
/*此处是文章列表样式*/
.note_div{
	float: left;	
}
.note{
	background-color: #FFFFFF;
}
body{
	background-color:rgb(239,239,244);
	padding-top: 5%;
}
.note_test{
	/*border: red solid 1px;*/
	float: left;
	margin: 0.8% 0 1% 15%;
	padding: 2% 0 2% 1.3%;
	border-radius:10px;
}
/*div{
	border: red solid 1px;
}*/
#note_list_container{
	float: left;
}
.note_title{
	font-size:20px;
	padding: 0 0 0 3%;
	width: 500px;
	height: 50px
}
.note_description{
	font-size:12px;
	padding: 0 0 0 3%;
	width: 500px;
	height: 30px
}
.note_author{
	font-size:14px;
	font-weight: bold;
	padding: 0 5% 0 3%;
	width: 50px;
	height: 18px
}
.note_date{
	font-size:10px;
	padding: 0 5% 0 5%;
	width: 50px;
	height: 18px;
	color: 	#909090;
}
.note_count{
	font-size:12px;
	margin-right: 30px;
}
.note_tag{
	font-size:12px;
	font-weight: bold;
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
    margin: 4.15% 37%;
    position: fixed;
    z-index: 2;
}
.note_div a{
	text-decoration: none;
}

/*输入框样式*/
#li3{
	margin-top: 10px;
	margin-left: 19%;
}
#sub_data{
	background-color: #E1534A;
	border: 0px;
}
.note_input{
	height: 25px; 
}

/*分页样式*/
#note_ul{
	width: 700px;
	height: 10%；
	float: left;
	padding-left: 19%;
}
.page-wrapper div{
	display: inline-block;
	color:red;
	margin-left: 2%;
}
.note_prev{
	margin-left: 19%;
	color: red;
}
.num,.next,.first,.prev{
	margin-left: 0.6%;
	color: red;
}
.page-wrapper a:hover{
	text-decoration: none;
	color: red;
}
.current{
	margin-left: 0.6%;
}

/*这里写foot样式*/

#foot2{	
	background-color:white;
	width: 100%;
	height: 50px;
	font-size: 15px;
	text-align: center;
	padding-top: 14px;
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
    <form action="/blog/index.php?c=index&a=rearch" method="post" class="form-inline">
     	<input type="text" class="form-control input note_input" name="title" placeholder="文章标题" >
      	<button id="sub_data" type="submit" class="btn btn-primary">搜索</button>
  	</form>
    </li>
    <div id="sanjiao" ></div>
</ul>
<!-- 此处放表单标签栏 -->

<table class="table">
   <thead>
       <th><a href="#"></a>分类</th>
   </thead>
   <tbody>
   		<tr><td><a href="/blog/index.php?c=index&a=sort&class=PHP">PHP</a></td></tr>
   		<tr><td><a href="/blog/index.php?c=index&a=sort&class=mysql">mysql</a></td></tr>
   		<tr><td><a href="/blog/index.php?c=index&a=sort&class=linux">linux</a></td></tr>
   		<tr><td><a href="/blog/index.php?c=index&a=sort&class=算法">算法</a></td></tr>
   		<tr><td><a href="/blog/index.php?c=index&a=sort&class=thinkphp">thinkphp</a></td></tr>
   		<tr><td><a href="/blog/index.php?c=index&a=sort&class=杂文">杂文</a></td></tr>
   </tbody>
 </table>

<!-- 此处放搜索框 -->


<!-- 文章列表 -->
<!-- 此处放一个容器将这五个块包含，空出给右边的表格标签栏-->
<?php if(is_array($result['listNotes'])): $i = 0; $__LIST__ = $result['listNotes'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="note note_test">
	<div class="note_div note">
		<a target="_blank" href="/blog/index.php?c=detail&id=<?php echo ($vo["note_id"]); ?>"><img src="<?php echo ($vo["thumb"]); ?>" class="note_img" height="100" width="130"></a>
	</div>
	<div class="note_div note"><a target="_blank" href="/blog/index.php?c=detail&id=<?php echo ($vo["note_id"]); ?>">
		<div class="note_title">
			<?php echo ($vo["title"]); ?>
		</div></a>
		<div class="note_description"><?php echo ($vo["description"]); ?></div>
		<div class="note_span">
			<span class="note_author"><?php echo ($vo["author"]); ?></span>
			<span class="note_date"><?php echo ($vo["date"]); ?></span>
			<span class="note_count">浏览(<?php echo ($vo["count"]); ?>)</span>
			<span class="note_tag">tag:&nbsp;&nbsp;<?php echo ($vo["tag"]); ?></span>
		</div>
	</div>
	<div id="zanwei"></div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
<div id="page_div">
  <ul id="note_ul">
  <a href="#" display="none " class="note_prev"></a>
  <?php echo ($pageres); ?>
  </ul>
</div>


	<div id="foot2">@2017  zsy.club.com | Love Jackson Yi</div>
























<script src="/blog/Public/js/jquery-3.2.0.min.js"></script>
<script type="text/javascript">
	$(".note_test").hover(
		function(){
			$(this).css("box-shadow",' 0 2px 16px #C8C8C8, 0 0 1px #C8C8C8, 0 0 1px #C8C8C8');
			var $title = $(".note_title");
			$(this).find($title).css("color",'#E1534A');
		},
		function(){
			$(this).css("box-shadow",'');
			var $title = $(".note_title");
			$(this).find($title).css("color",'black');
		}
	);
	$("td").hover(
		function(){
			$(this).css("background-color",'rgb(239,239,244)');
		},
		function(){
			$(this).css("background-color",'white');
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