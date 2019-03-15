<?php
namespace Admin\Controller;
use Think\Controller;

class GuestbookController extends IndexController{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function initGuestbookList(){
		$this->checkLogin();
		$fromtime = strtotime($_GET['fromtime']);
		$totime = strtotime($_GET['totime']);
		if($_GET['field'] == 'gid'){
			if( is_numeric($_GET['q'])){
				$GuestbookList = M('guestbook')->where("id = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->select();
				$count = M('guestbook')->where("id = '{$_GET['q']}'")->count();
				$Page = new \Think\Page($count,13);
				$show = $Page->show();
			}else{
				echo "<script>alert('留言id必须是数字');history.back(-1);</script>";
			}			
		}else if($_GET['field'] == 'site'){
			$GuestbookList = M('guestbook')->where("site = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->select();
			$count = M('guestbook')->where("site = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->count();
			$Page = new \Think\Page($count,13);
			$show = $Page->show();
		}else if($_GET['field'] == 'name'){
			$GuestbookList = M('guestbook')->where("name = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->select();
			$count = M('guestbook')->where("name = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->count();
			$Page = new \Think\Page($count,13);
			$show = $Page->show();
		}else if($_GET['field'] == 'phone'){
			if( is_numeric($_GET['q'])){
				$GuestbookList = M('guestbook')->where("phone = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->select();
				$count = M('guestbook')->where("phone = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->count();
				$Page = new \Think\Page($count,13);
				$show = $Page->show();
			}else{
				echo "<script>alert('电话格式错误!');history.back(-1);</script>";
			}
		}else if($_GET['field'] == 'num'){
			$GuestbookList = M('guestbook')->where("create_time >= '{$fromtime}' and create_time <='{$totime}'")->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->select();
			$count = M('guestbook')->where("create_time >= '{$fromtime}' and create_time <='{$totime}'")->count();
			$Page = new \Think\Page($count,13);
			$show = $Page->show();
		}else{
			$count = M('guestbook')->count();
			$Page = new \Think\Page($count,13);
			$GuestbookList = M('guestbook')->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->select();
			$show = $Page->show();
		}		
		
		$time = time();
		$array = array(
			'GuestbookList' => $GuestbookList,
			'page' => $show,
			'count' => $count,
			'time' => $time
		);
		$this->assign($array);
		$this->display('initGuestbookList');
	}
	
	public function initGuestbookList1(){
		$this->checkLogin();
		$fromtime = strtotime($_GET['fromtime']);
		$totime = strtotime($_GET['totime']);
		if($_GET['field'] == 'gid'){
			if( is_numeric($_GET['q'])){
				$GuestbookList = M('guestbook')->where("id = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->select();
				$count = M('guestbook')->where("id = '{$_GET['q']}'")->count();
				$Page = new \Think\Page($count,13);
				$show = $Page->show();
			}else{
				echo "<script>alert('留言id必须是数字');history.back(-1);</script>";
			}			
		}else if($_GET['field'] == 'site'){
			$GuestbookList = M('guestbook')->where("site = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->select();
			$count = M('guestbook')->where("site = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->count();
			$Page = new \Think\Page($count,13);
			$show = $Page->show();
		}else if($_GET['field'] == 'name'){
			$GuestbookList = M('guestbook')->where("name = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->select();
			$count = M('guestbook')->where("name = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->count();
			$Page = new \Think\Page($count,13);
			$show = $Page->show();
		}else if($_GET['field'] == 'phone'){
			if( is_numeric($_GET['q'])){
				$GuestbookList = M('guestbook')->where("phone = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->select();
				$count = M('guestbook')->where("phone = '{$_GET['q']}' and create_time >= '{$fromtime}' and create_time <='{$totime}'")->count();
				$Page = new \Think\Page($count,13);
				$show = $Page->show();
			}else{
				echo "<script>alert('电话格式错误!');history.back(-1);</script>";
			}
		}else if($_GET['field'] == 'num'){
			$GuestbookList = M('guestbook')->where("create_time >= '{$fromtime}' and create_time <='{$totime}'")->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->select();
			$count = M('guestbook')->where("create_time >= '{$fromtime}' and create_time <='{$totime}'")->count();
			$Page = new \Think\Page($count,13);
			$show = $Page->show();
		}else{
			$count = M('guestbook')->count();
			$Page = new \Think\Page($count,13);
			$GuestbookList = M('guestbook')->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->select();
			$show = $Page->show();
		}		
		
		$time = time();
		$array = array(
			'GuestbookList' => $GuestbookList,
			'page' => $show,
			'count' => $count,
			'time' => $time
		);
		$this->assign($array);
		$this->display('initGuestbookList1');
	}
	
	public function delete(){
		$this->checkLogin();
 		if(is_array(I('post.id'))){
 			$id = implode(',',I('post.id'));
 		}else{
 			$id = substr(I('post.id'),0,-1);
 		}
 		$result = M('guestbook')->delete($id);
 		if($result){
 			echo true;
 		}else{
 			echo false;
 		}
	}
	
	public function initReadGuestbook(){
		$this->checkLogin();
		$id = I('path.2');
		$guestbook = M('guestbook')->where("id = {$id}")->select();
		$is_read = $guestbook[0]['is_read'];
		if($is_read == '0'){
			$data['is_read'] = '1';
			$rs = M('guestbook')->where("id = '{$id}'")->save($data);
		}
		$array = array(
			'guestbook' => $guestbook
		);
		$this->assign($array);
		$this->display('initReadGuestbook');
	}
	
	public function initexportList(){
		$this->checkLogin();
		$time = time();
		$array = array(
			'time' => $time
		);
		$this->assign($array);
		$this->display('initexportList');
	}
	
	public function initexportList1(){
		$this->checkLogin();
		$time = time();
		$array = array(
			'time' => $time
		);
		$this->assign($array);
		$this->display('initexportList1');
	}
	
	public function exportGuest(){
		$this->checkLogin();
		$fromtime = strtotime($_GET['fromtime']);
		$totime = strtotime($_GET['totime']);
		$data = M('guestbook')->where("create_time >= '{$fromtime}' and create_time <='{$totime}'")->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->getField("id,name,phone,diqu,create_time");
		foreach($data as &$val){
			$val['create_time'] = date('Y-m-d H:i:s',$val['create_time']);
		}
		import("Org.Util.PHPExcel");
		import("Org.Util.PHPExcel.Writer.Excel5");
		import("Org.Util.PHPExcel.IOFactory.php");

		$filename="Guestbook";
		$headArr=array("id","姓名","电话","标识","留言时间");
		$this->getExcel($filename,$headArr,$data);
	}
	
	public function exportGuest1(){
		$this->checkLogin();
		$fromtime = strtotime($_GET['fromtime']);
		$totime = strtotime($_GET['totime']);
		$data = M('guestbook')->where("create_time >= '{$fromtime}' and create_time <='{$totime}'")->limit($Page->firstRow.','.$Page->listRows)->order('create_time desc')->getField("id,name,'***********',address,mip,site,create_time");
		foreach($data as &$val){
			$val['create_time'] = date('Y-m-d H:i:s',$val['create_time']);
		}
		import("Org.Util.PHPExcel");
		import("Org.Util.PHPExcel.Writer.Excel5");
		import("Org.Util.PHPExcel.IOFactory.php");

		$filename="Guestbook";
		$headArr=array("id","姓名","电话","地址","ip","标识","留言时间");
		$this->getExcel($filename,$headArr,$data);
	}
	
	private	function getExcel($fileName,$headArr,$data){
		//对数据进行检验
		if(empty($data) || !is_array($data)){
		    die("没有符合条件的数据可导出!");
		}
		//检查文件名
		if(empty($fileName)){
		    exit;
		}

		$date = date("Y_m_d",time());
		$fileName .= "_{$date}.xls";

		//创建PHPExcel对象，注意，不能少了\
		$objPHPExcel = new \PHPExcel();
		$objProps = $objPHPExcel->getProperties();
			
		//设置表头
		$key = ord("A");
		foreach($headArr as $v){
		    $colum = chr($key);
		    $objPHPExcel->setActiveSheetIndex(0) ->setCellValue($colum.'1', $v);
		    $key += 1;
		}
		    
		$column = 2;
		$objActSheet = $objPHPExcel->getActiveSheet();
		$objActSheet->getDefaultStyle()->getFont()->setName('微软雅黑');
		$objActSheet->getDefaultStyle()->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		foreach($data as $key => $rows){ //行写入
		    $span = ord("A");
		    foreach($rows as $keyName=>$value){// 列写入
		        $j = chr($span);
		        $objActSheet->setCellValue($j.$column, $value);
		        $span++;
		    }
		    $column++;
	    }

		$fileName = iconv("utf-8", "gb2312", $fileName);
		ob_end_clean();
		//重命名表
		// $objPHPExcel->getActiveSheet()->setTitle('test');
		//设置活动单指数到第一个表,所以Excel打开这是第一个表
		$objPHPExcel->setActiveSheetIndex(0);
		header('Content-Type: application/vnd.ms-excel');
		header("Content-Disposition: attachment;filename=\"$fileName\"");
		header('Cache-Control: max-age=0');

		$objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output'); //文件通过浏览器下载
		exit;
	}
	
}