//添加按钮操作
$("#button-add").click(function(){
	var url = SCOPE.add_url;
	window.location.href=url;
});
//提交按钮操作
$("#blog-button-submit").click(function(){
	//获取并优化提交表单中的数据
	var data=$("#add_form").serializeArray();
	postData = {};
    $(data).each(function(i){
       postData[this.name] = this.value;
    });

    //将获取到的数据异步post给服务器
       url = SCOPE.save_url;
     jump_url = SCOPE.jump_url;
     console.log(url,"\n",jump_url);
    $.post(url,postData,function(result){
    	console.log(3);
        if(result.status == 1) {
            //成功
            return dialog.success(result.message,jump_url);
        }else if(result.status == 0) {
            // 失败
            return dialog.error(result.message);
        }
    }
    ,"JSON");
});

//修改按钮操作
$(".note_edit").click(function(){
	var note_id = $(this).attr('attr_id');
	var url=SCOPE.edit_url+'&id='+note_id;
	//console.log(url);
	window.location.href=url;
});

//删除操作
$(".note_delete").click(function(){
    console.log(3);
	var note_id = $(this).attr('attr_id');
	var url = SCOPE.delete_url+'&id='+note_id;
	jump_url = SCOPE.jump_url;
    console.log(3);
	$.post(url,note_id,function(result){
 	console.log(3);
        if(result.status == 1) {
            //成功
            return dialog.success(result.message,jump_url);
        }else if(result.status == 0) {
            // 失败
            return dialog.error(result.message);
        }
    }
    ,"JSON");
});
