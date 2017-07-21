<?php
namespace Common\Model;
use Think\Model;

/**
 * 文章内容model操作
 */ 
class NoteContentModel extends Model {

	private $_db='';
	public function __construct(){
		$this->_db=M('note_content');
	}
	public function insert($data=array()){
		if(!is_array($data)  || !$data){
			return 0;
		}
		if(isset($data['content'])  &&  $data['content']){
			 $data['content'] = htmlspecialchars($data['content']);
		}
		return $this->_db->add($data);
	}
	public function find($id){
		return $this->_db->where('note_id='.$id)->find();
	}
	public function updataById($id,$data){
		//var_dump($id);
    	//var_dump($data);
		//if(!$id || is_numeric($id)){ 
    		//throw_exception("ID不合法");
    	//}
    	if (!$data || !is_array($data)) {
    		throw_exception("更新数据不合法");
    	}
    	//if(isset($data['content'])&& $data['content']){
    		//$data['content'] = htmlspecialchars($data['content']);
    	//}
    	return $this->_db->where('note_id='.$id)->save($data);
	}
	public function deleteById($id){
    	return $this->_db->where('note_id='.$id)->delete();
    }

}