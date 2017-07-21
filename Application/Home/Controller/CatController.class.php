<?php
namespace Home\Controller;
use Think\Controller;
class CatController extends Controller {

    public function index(){
    	$id=intval($_GET['id']);
    	dump($id);
    	if(2 === $id){
    		$this->redirect('/blog/index.php?c=index');
    	}
    	if(3 === $id){
    		$this->redirect('/blog/index.php?c=cat&a=link');
    	}
    	if(1 === $id){
    		$this->redirect('/blog/index.php?c=cat&a=about');
    	}
    }

    public function link(){
    	$this->display();
    }
    public function about(){
    	$this->display();
    }
}