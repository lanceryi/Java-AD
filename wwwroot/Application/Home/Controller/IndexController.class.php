<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

	public function __construct() {
		parent::__construct();
		$keyword = clean(trim($_GET['keyword']));
		$plan = clean(trim($_GET['plan']));
		$unit = clean(trim($_GET['unit']));
		cookie('plan',$plan);
		cookie('unit',$unit);
		cookie('keyword',$keyword);
	}

	public function get_client_ip($type = 0,$adv=false) {
		$type       =  $type ? 1 : 0;
		static $ip  =   NULL;
		if ($ip !== NULL) return $ip[$type];
		if($adv){
			if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$arr    =   explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
				$pos    =   array_search('unknown',$arr);
				if(false !== $pos) unset($arr[$pos]);
				$ip     =   trim($arr[0]);
			}elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
				$ip     =   $_SERVER['HTTP_CLIENT_IP'];
			}elseif (isset($_SERVER['REMOTE_ADDR'])) {
				$ip     =   $_SERVER['REMOTE_ADDR'];
			}
		}elseif (isset($_SERVER['REMOTE_ADDR'])) {
			$ip     =   $_SERVER['REMOTE_ADDR'];
		}
		// IP地址合法验证
		$long = sprintf("%u",ip2long($ip));
		$ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
		return $ip[$type];
	}
 
    public function index(){
			$phone = M('info')->where("id = '1'")->getField('phone');
			$code = M('info')->where("id = '1'")->getField('code');
			$array = array(
				'phone' => $phone,
				'code' => htmlspecialchars_decode(html_entity_decode($code))
			);
			$ip = $this->get_client_ip(0);
					// 1、检查IP是否已经在表中存在
					$where = "ip = '$ip'";
					$data = M('t_check')->where($where)->find();

					if($data && $data['disable']==1){
							return;
					}

					if(!$data) {
							// 初次访问插入
							$data = [
									"ip"=>$ip,
									"count"=>1,
									"timeout" => time()+1800
							];
							M('t_check')->add($data);
					}else if($data['count']<3){
							// 添加次数
							$data['count'] += 1;
							M('t_check')->save($data);
					}else{
							// 拉黑
							$data['count'] += 1;
							$data['disable'] = 1;
							M('t_check')->save($data);
			}
			
				$this->assign($array);
			$this->display('index');
    }
	
	public function fh(){
		$this->display('fh');
    }
	
	public function guest(){
        $this->display('guest');
    }
	
	public function add(){
    	load("@.clean");
    	load("@.check");
    	load("@.safe");
    	$name1 = clean(trim(I('post.name')));
		//留言者姓名
    	$name = $name1;
    	//手机
    	$mobile = clean(trim(I('post.mobile')));
    	//留言者地址
		$content = clean(trim(I('post.content')));
    	$address = clean(trim(I('post.address')));
    	//留言者ip
    	$mip = $_SERVER["REMOTE_ADDR"];
	
		//标示
		$from = clean(trim(cookie('keyword')));
		$plan = clean(trim(cookie('plan')));
		$unit = clean(trim(cookie('unit')));
		$froms = 'plan='.$plan.'&unit='.$unit.'&keyword='.$from;
		if(empty($plan)){
			$plan = 'none';
		}
		if(empty($unit)){
			$unit = 'none';
		}
		if(empty($from)){
			$from = 'none';
		}
		//编辑日期
    	$updatetime = time();
    	//留言日期
    	$dateline = time();
    	$checkName = is_name($name1);
    	$checkMobile = is_mobile($mobile);
    	if(!$checkName){
    		echo "
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			<script>alert('姓名为2~4个汉字');history.back(-1);</script>";
    	}
    	if(!$checkMobile){
    		echo "
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			<script>alert('请正确填写手机');history.back(-1);</script>";
    	}

    	load("@.jm");
    	$mob = gbcrypt($mobile, 'ENCODE');
    	//$ema = gbcrypt($email, 'ENCODE');
		if($_POST['token'] !== session('token')){
    		echo "<script>alert('请不要重复提交');history.back(-1);</script>";
    	}
    	else{
    		if($_POST){
    			if($checkName&&$checkMobile){
				  //   $con = mysql_connect('211.149.139.196','master','master@0013');
					// mysql_select_db('hua',$con);
				    $con = mysql_connect('127.0.0.1','root','root');
					mysql_select_db('hua',$con);
					mysql_query('set names utf8');
					$sql33 = "SELECT `create_time` FROM `guestbook` WHERE ( mip = '{$mip}' ) ORDER BY create_time desc LIMIT 1";
					$result = mysql_query($sql33,$con);
					$result1 = mysql_fetch_array($result);

    				if(time() - $result1['0'] < 3600){
    					echo "<script>alert('提交过于频繁，请稍后再试!');history.go(-1);</script>";
    				}
    				else{
							// $con = mysql_connect('211.149.139.196','master','master@0013');
							// mysql_select_db('hua',$con);
						$con = mysql_connect('127.0.0.1','root','root');
						mysql_select_db('hua',$con);
						mysql_query('set names utf8');
						$sql3 = "insert into guestbook(name,phone,address,content,is_read,diqu,create_time)  values('$name','$mobile','$address','$content','0','$froms','$dateline')";
						$rs3 = mysql_query($sql3,$con);
						if($rs3){
							session('token',null);	
							echo "<script>alert('提交成功!');history.go(-1);</script>";	
						}else{
							echo "<script>alert('提交失败!');history.go(-1);</script>";
						}
    				}
    			}
    		}
    	}
    }
	
	
    
}