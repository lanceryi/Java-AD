<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
	
	public function index(){
    	$this->display('login');
    }
	
	public function sayHello(){
		$this->checkLogin();
    	$ip 	= get_client_ip();  //获取ip
    	$ver 	= mysql_get_server_info();  //mysql版本
    	$uname 	= php_uname('s');  //服务器操作系统
    	$phpver = PHP_VERSION;  //php版本信息
    	$server = $_SERVER["SERVER_SOFTWARE"]; //服务器详细信息
    	load("@.week");  //加载common自定义扩展函数
    	$day = week();  //星期几
    	$array = array(
    		'ip' 	=> $ip,
    		'time' 	=> time(),
    		'day' 	=> $day,
    		'count' => $count,
    		'ver'	=> $ver,
    		'uname'	=> $uname,
    		'hostip'=> $hostip,
    		'phpver'=> $phpver,
    		'server'=> $server
    	);
    	$this->assign($array);
    	$this->display('hello');
    }
	
	public function login(){
    	$code= I('post.checkcode');
    	$name = I('post.name');
    	$pwd = md5(md5(I('post.pwd')));
    	if(empty($name) || empty($pwd)){
    		$this->error('用户名或密码不能为空!');
    	}else{
			if($name == 'jimei'){
				$User = D('User');
				$result = $User->login($name,$pwd);
				if($result){
					session('admin','管理员lts');
					$this->success('正在登陆,请稍后...','main1');
				}else{
					$this->error('用户名或密码错误');
				}
			}else{
				$User = D('User');
				$result = $User->login($name,$pwd);
				if($result){
					session('admin','管理员l003');
					$this->success('正在登陆,请稍后...','main');
				}else{
					$this->error('用户名或密码错误');
				}
			}
    	}
    }
	
	public function initUpdatePwd(){
		$this->checkLogin();
    	$this->display('updatePassword');
    }
	
	public function updatePassword(){
		$this->checkLogin();
    	$oldPwd = md5(md5(I('post.oldPwd')));
    	$newPwd = I('post.newPwd');
    	$rs = M('user')->where("name = 'admin' and password = '{$oldPwd}'")->select();
    	if(!$rs){
    		$this->error('密码错误');
    	}else{
    		$data['password'] = md5(md5($newPwd));
    		$data['datetime'] = time();
    		M('user')->where("name = 'admin'")->save($data);
    		$this->success('密码修改成功!',U('Index/initUpdatePwd'));
    	}
    }
	
	public function destroy(){
		$this->checkLogin();
    	session('admin',null);
    	$this->success('退出成功','/admin');
    }
	
	public function checkLogin(){
		$value = session('admin');
		if(!session('?admin') || $value != '管理员l003'){
			$this->success('请登陆后操作!!','/admin');
		}
	}
	
}