<?php
namespace Common\Model;
use Think\Model;

/**
 * 文章内容model操作
 */
class NoteModel extends Model {
	private $_db = '';

    public function __construct() {
        $this->_db = M('note');
    }
    public function select($data = array(), $limit = 100) {

        $conditions = $data;
        $list = $this->_db->where($conditions)->order('note_id desc')->limit($limit)->select();
        return $list;
    }    
    public function getNote($data,$page,$pageSize=10){
        $conditions = $data;
        $data['status'] = array('neq',-1);
        if (isset($data['title']) && $data['title']) {
            $conditions['title']= array('like','%'.$data['title'].'%');
        }
        $offset = ($page-1)*$pageSize;
      $list = $this->_db
        ->where($conditions)
        ->order('note_id desc')
        ->limit($offset,$pageSize)
        ->select();
        return $list;
    }
    public function getNoteCount($data=array()){
        $conditions = $data;
        $data['status'] = array('neq',-1);
        if (isset($data['title']) && $data['title']) {
            $conditions['title']= array('like','%'.$data['title'].'%');
        }
        $offset = ($page-1)*$pageSize;
        return $this->_db->where($conditions)->count();
    }
    public function insert($data=array()){
    	// if(!is_array($data) || !$data){
    	// 	return 0;
    	// }
    $data['date']=date('Y-m-d H:i',time());
    	return $this->_db->add($data);
    }
    public function find($id){
    	$data = $this->_db->where('note_id='.$id)->find();
    	return $data;
    }
    public function updataById($id,$data){
    
    	//if(!$id || is_numeric($id)){ 
    		//throw_exception("ID不合法");
    	//}
    	if (!$data || !is_array($data)) {
    		throw_exception("更新数据不合法");
    	}
    	return $this->_db->where('note_id='.$id)->save($data);
    }
    public function deleteById($id){
    	return $this->_db->where('note_id='.$id)->delete();
    }

    // 更新阅读量
    public function updateCount($id,$count){
        if(!$id || !is_numeric($id)){
            throw_exception("ID不合法");
        }
        if(!$count || !is_numeric($count)){
            throw_exception("count不合法");
        }
        $data['count'] = $count;
        return $this->_db->where('note_id='.$id)->save($data);
    }


}