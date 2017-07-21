<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
   		if (session('adminUser')) {
   			$this->redirect('/blog/admin.php?c=index');
   		}
          $this->display('login');

     }
    public function check(){
     	$username=$_POST['username'];
     	$password=$_POST['password'];
     	if (!trim($username)) {
     		return show(0,"用户名不能为空");
     	}
     	if (!trim($password)) {
     		return show(0,"密码不能为空");
     	}
        $ret = D('Admin')->getAdminByUsername($username);
     	if (!$ret) {
     		return show(0,'该用户不存在');
     	}
     	if ($ret['password']!=$password) {
     		return show(0,'密码错误');
     	}
     	session('adminUser',$ret); 
     	return show(1,'登录成功');

     }

     public function loginout(){
     	session('adminUser',null);
     	$this->redirect('/blog/admin.php?c=login');
     }
}