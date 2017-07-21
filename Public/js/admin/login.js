// 前端登录页面
var login={
	check: function() {
		//获得登录页面中的用户名和密码并校验
		var username = $("input:first").val();
		var password = $("input:eq(1)").val();

		if(!username){
			return dialog.error("用户名不能为空");
			//return跳出这个函数，回到调用点
		}
		if(!password){
			//console.log();
			return dialog.error("密码不能为空");
		}

		//实现异步请求  控制器  LoginController.class.php
		var url="/blog/admin.php?c=login&a=check";
		var data={username:username,password:password};
		$.post(url,data,function(result){//result是一个对象
			if (result.status==0) {
				return dialog.error(result.message);//result.message是一个变量$message
			}
			if (result.status==1) {
				return dialog.success(result.message,'/blog/admin.php?c=admin&a=index');

			}
		},"json")
	}
};