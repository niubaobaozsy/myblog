<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="pragma" content="no-cache" >
	<meta charset="UTF-8">
	<title>后台管理界面</title>
	<link href="/blog/Public/css/articleAdd.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/blog/Public/css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/blog/Public/css/party/uploadify.css">
</head>
<body>
	<!-- 此处放要引入的公共文件，此文件为公用后台导航栏 -->


<div class="container">
	<ul class="nav nav-tabs ">
    	<li class="active"><a href="##" >笔记</a></li>
    	<li><a href="##">生活</a></li>
    	<li><a href="##">留言</a></li>
    	<li><a href="##">友情链接</a></li>
    	<li><a href="##">退出登录</a></li>
	</ul>
</div>	

<div class="container">
<div class="row" style="margin-bottom: 15px">
<div class="col-md-4">
<input type="button" value="添加" class="btn btn-primary" id="button-add">
</div>
<div class="col-md-8">

  <form action="/blog/admin.php?c=content&a=index" method="post">
    <div class="row">
    <div class="col-md-4">
      <input type="text" class="form-control" name="title" placeholder="文章标题" >
    </div>
    <div class="col-md-2">
      <button id="sub_data" type="submit" class="btn btn-primary">搜索</button>
    </div>
    </div>
  </form>

</div>
</div>
<table class="table table-bordered table-striped">
   <thead>
     <tr>
       <th>id</th>
       <th>标题</th>
       <th>时间</th>
       <th>标签</th>
       <th>简介</th>
       <th>修改</th>
       <th>删除</th>
     </tr>
   </thead>

      
   <tbody>
   <?php if(is_array($note)): $i = 0; $__LIST__ = $note;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$note): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($note["note_id"]); ?></td>
      <td><?php echo ($note["title"]); ?></td>
      <td><?php echo ($note["date"]); ?></td>
      <td><?php echo ($note["tag"]); ?></td>
      <td><?php echo ($note["description"]); ?></td>
      <td><a href="#" attr_id="<?php echo ($note["note_id"]); ?>" class="note_edit">修改</a></td>
      <td><a href="#" attr_id="<?php echo ($note["note_id"]); ?>" class="note_delete">删除</a></td> 
      </tr><?php endforeach; endif; else: echo "" ;endif; ?> 
   </tbody>
 </table>
 <nav>
  <ul>
  <?php echo ($pageres); ?>
  </ul>
</nav>
</div>

<script>
	var SCOPE={
		'add_url' : '/blog/admin.php?c=admin&a=add',
		'edit_url' : '/blog/admin.php?c=content&a=edit',
		'delete_url' : '/blog/admin.php?c=content&a=delete',
		'jump_url':'/blog/admin.php?c=admin',
	};

</script><!-- 
//此处不用写</body>
 --><script src="/blog/Public/js/jquery-3.2.0.min.js"></script>
<script src="/blog/Public/js/party/jquery.uploadify.js"></script>	
<script src="/blog/Public/js/dialog/layer.js"></script>
<script src="/blog/Public/js/dialog.js"></script>
<script src="/blog/Public/js/admin/common.js"></script>
<script src="/blog/Public/js/admin/image.js"></script>
<!-- jquery要在自己写的js文件之前引入 -->
</body>
</html>