<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {

    public function index(){
     	$data = array();
     	$page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
    	$pageSize = 3;
        $note = D("Note")->getNote($data,$page,3);
        $count = D("Note")->getNoteCount($data);
        $res = new \Think\Page($count,$pageSize);
        $pageres = $res->show();
        $this->assign('pageres',$pageres);
        $this->assign('note',$note);
    	$this->display();
    }
    public function add(){
    	//echo "我是admin模块admin控制器的play方法";
    	 $this->display();//那个控制器调用哪个文件里的模板
    }
}