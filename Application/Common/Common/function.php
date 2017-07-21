<?php
//项目公用的方法
function show($status,$message,$data){
	$result= array(
		'status'=>$status,
		'message'=>$message,
		'data'=>$data
		);
	exit(json_encode($result));
}

?>