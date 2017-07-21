<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="pragma" content="no-cache" >
	<meta charset="UTF-8">
	<title>后台管理界面</title>
	<link href="/blog/Public/css/articleAdd.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/blog/Public/css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/blog/Public/css/party/uploadify.css">
	<!-- 此处放要引入的公共文件，此文件为公用后台导航栏 -->
	<link rel="stylesheet" type="text/css" href="/blog/Public/css/party/uploadify.css">
	<link rel="stylesheet" type="text/css" href="/blog/Public/css/articleAdd.css">
	<link rel="stylesheet" type="text/css" href="/blog/Public/css/party/wangEditor.css">
</head>
	<body>
	
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
			<form class="form-horizontal" id="add_form">

				<div class="form-group">
					<label class="col-md-4 control-label">标题:</label>
    				<div class="col-md-4">
      				<input type="text" class=" form-control" name="title" value="<?php echo ($note["title"]); ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">作者:</label>
					<div class="col-md-4">
					<input type="text" name="author" class="form-control" value="<?php echo ($note["author"]); ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">标签:</label>
					<div class="col-md-4">
					<input type="text" name="tag" class="form-control" value="<?php echo ($note["tag"]); ?>">
					</div>
				</div>

				<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<label  id="suotu">缩图:</label>
					</div>
					<div class="col-md-6">
               		 	<input id="file_upload"  type="file" multiple="true" >
               		 	<img style="display: none" id="upload_org_code_img" src="" width="150" height="150">
                		<input id="file_upload_image" name="thumb" type="hidden" multiple="true" value="">
                	</div>
                </div>
              	</div>

				<div class="form-group">
					<label class="col-md-4 control-label">简介:</label>
					<div class="col-md-7">
  					 <input type="text" class="form-control" name="description" id="inputPassword3" value="<?php echo ($note["description"]); ?>" >	
  					</div>
  				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">内容:</label>
					<div class="col-md-7">
					<textarea id='' name="content" rows="20" style="width: 100%"><?php echo ($note["content"]); ?></textarea>
				</div>
<!-- <?php echo ($note["content"]); ?> -->
				<div class="row">
					<div class="col-md-8" >
					<input type="button" value="提交" class="btn btn-primary" id="blog-button-submit">
					</div>
				</div>
				<input type="hidden" name="note_id" value="<?php echo ($note["note_id"]); ?>">
			</form>
		</div>
	</div>
	<!-- 此处引入jquery文件 -->
<script src="/blog/Public/js/jquery-3.2.0.min.js"></script>
<script src="/blog/Public/js/wangEditor.min.js"></script>
<script type="text/javascript">
   var editor = new wangEditor('textarea');
   editor.create();
</script>
<script>
	var SCOPE={
		'save_url': '/blog/admin.php?c=content&a=add',
		'jump_url':'/blog/admin.php?c=admin',
		'ajax_upload_image_url':'/blog/admin.php?c=image&a=ajaxuploadimage',
		'ajax_upload_swf' : '/blog/Public/js/party/uploadify.swf',
	};
</script>
<script src="/blog/Public/js/party/jquery.uploadify.js"></script>	
<script src="/blog/Public/js/dialog/layer.js"></script>
<script src="/blog/Public/js/dialog.js"></script>
<script src="/blog/Public/js/admin/common.js"></script>
<script src="/blog/Public/js/admin/image.js"></script>
<!-- jquery要在自己写的js文件之前引入 -->
</body>
</html>