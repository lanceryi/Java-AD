<?php
namespace Admin\Controller;
use Think\Controller;

class OptionController extends IndexController {

	public function param(){
		$this->checkLogin();
		$result = M('info')->where("id = '1'")->select();
		$this->assign('result',$result);
		$this->display('param');
	}
	
	public function updateCopy(){
		$this->checkLogin();
		$data['phone'] = I('post.phone');
		$data['code'] = I('post.code');
		$data['datetime'] = time();
		$result = M('info')->where("id = '1'")->save($data);
		if($result){
			$this->success('修改成功!');
		}else{
			$this->error('修改失败!');
		}
	}

}