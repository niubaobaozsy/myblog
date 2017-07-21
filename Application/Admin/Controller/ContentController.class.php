<?php
/**
 * 后台Index相关
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;

/**
 * 文章内容管理
 */
class ContentController extends Controller {

    public function index(){
          $conds = array();
        //后台笔记管理搜索文章和分页处理
        $title = $_POST['title'];
        if($title){
            $conds['title'] = $title;
        }
        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = 2;

        $note = D("Note")->getNote($conds,$page,$pageSize);

        $count = D("Note")->getNoteCount($conds);

        $res = new \Think\Page($count,$pageSize);
        $pageres = $res->show();

        $this->assign('pageres',$pageres);
        $this->assign('note',$note);
        $this->display();
    }
    public function add(){
        if($_POST){
        		$thumb = $_POST["thumb"];
        		$_POST["thumb"] =  '/blog'.$thumb;
                if(!isset($_POST['title']) || !$_POST['title']) {
                     return show(0,'标题不存在');}
                if(!isset($_POST['author']) || !$_POST['author']) {
                    return show(0,'作者不存在');}
                if(!isset($_POST['tag']) || !$_POST['tag']) {
                    return show(0,'标签不存在');  }
                if(!isset($_POST['description']) || !$_POST['description']) {
                    return show(0,'简介不存在');}
                if(!isset($_POST['content']) || !$_POST['content']) {
                return show(0,'内容不存在');}
                if($_POST['note_id']){
                	//return 1;
                	//var_dump($this->save($_POST));
                	return $this->save($_POST);
                }
                $noteId = D("Note")->insert($_POST);
                if($noteId){
                        $notesContentdata['content']=$_POST['content'];
                        $notesContentdata['note_id'] =$noteId;
                        $notesContentdata['content_id'] = $noteId;
                        $ret = D("NoteContent")->insert($notesContentdata);
                    if($ret=0){
                        return show(0,'文本插入失败');
                    }else{
                        return show(1,'笔记插入成功');
                    }
                }
        }
    }
    public function edit(){
    	$note_id = $_GET['id'];
    	if(!$note_id){
    		//执行跳转
    		$this->redirect('/blog/admin.php?c=content');
    	}
    	//根据ID来获取文章内容
    	$note = D("Note")->find($note_id);
    	if(!$note){
			$this->redirect('/blog/admin.php?c=content');
    	}
    	$noteContent = D("NoteContent")->find($note_id);
    	if($noteContent){
    		$note['content'] = $noteContent['content'];
    	}
        $note['content'] = html_entity_decode($note['content']);
    	$this->assign('note',$note);
    	$this->display();
    }
    public function save($data){
    	$note_id = $data['note_id'];
    	unset($data['note_id']);
    	
    		$id = D("Note")->updataById($note_id,$data);
    		$noteContentdata['content']=$data['content'];
    		$conId=D("NoteContent")->updataById($note_id,$noteContentdata);
    		if($id === false || $conId === false){
    			return show(0,'更新失败');
    		}else{
    			return show(1,'更新成功');
    		}
    }
    public function delete(){
    	$id = $_GET['id'];
    	$deleteId = D("Note")->deleteById($id);
    	$deleteContentId = D("NoteContent")->deleteById($id);
    	if($deleteId === false){
    		return show(0,'删除失败');
    	}else{
    		return show(1,'删除成功');
    	}

    }
    
}