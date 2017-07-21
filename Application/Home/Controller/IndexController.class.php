<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
    	$conds = array();
        $title = $_POST['title'];
        if($title){
            $conds['title'] = $title;
        }
        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = 5;

        $listNotes = D("Note")->getNote($conds,$page,$pageSize);

        $count = D("Note")->getNoteCount($conds);

        $res = new \Think\Page($count,$pageSize);
        $pageres = $res->show();

        $this->assign('pageres',$pageres);
    	$this->assign('result',array('listNotes'=>$listNotes,));
     	$this->display();
    }
    public function rearch(){
        $title = $_POST['title'];
        $conds['title'] = array('like','%'.$title.'%');
        $listNotes = D("Note")->select($conds,100);
    	$this->assign('result',array('listNotes'=>$listNotes,));
     	$this->display();
    }
    public function sort(){
    	$tag = $_GET['class'];
    	$conds['tag'] = array('like','%'.$tag.'%');
        $listNotes = D("Note")->select($conds,100);
    	$this->assign('result',array('listNotes'=>$listNotes,));
     	$this->display();
    }
}