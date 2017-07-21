<?php
namespace Home\Controller;
use Think\Controller;
class DetailController extends Controller {

    public function index(){
    	$id = intval($_GET['id']);
    	if( !$id || $id<0) {
    		$this->redirect('/blog/index.php?c=index');
    	}
    	$note = D("Note")->find($id);
    	if(!$note) {
    		$this->redirect('/blog/index.php?c=index');
    	}
    	// 更新阅读数 
    	$count = intval($note['count']) +1;
    	D("Note")->updateCount($id,$count);
    	$content=D("NoteContent")->find($id);

    	$note['content']=htmlspecialchars_decode($content['content']);
    	$this->assign('note',$note);
    	$this->assign('count',$count);
    	$this->display();
	}
}
