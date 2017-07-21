<?php

namespace Common\Model;
use Think\Model;
//admin表，用户表的操作模型

class AdminModel extends Model {
	//初始化时，实例化admin表，$this调自己的成员——db
	private $_db = '';
	public function __construct(){
		$this->_db= M('admin');
	}


	//通过用户名才获得用户的相关信息

    public function getAdminByUsername($username='') {
    	
        $res = $this->_db->where('username="'.$username.'"')->find();
        return $res;
    }
























}

























?>