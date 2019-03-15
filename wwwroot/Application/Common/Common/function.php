<?php
function check_code($code, $id = ""){
	$verify = new \Think\Verify();
	return $verify->check($code, $id);
}

if(!function_exists('array_column')){
	function array_column($input, $columnKey, $indexKey=null){
		$columnKeyIsNumber      = (is_numeric($columnKey)) ? true : false;
		$indexKeyIsNull         = (is_null($indexKey)) ? true : false;
		$indexKeyIsNumber       = (is_numeric($indexKey)) ? true : false;
		$result                 = array();
		foreach((array)$input as $key=>$row){
			if($columnKeyIsNumber){
				$tmp            = array_slice($row, $columnKey, 1);
				$tmp            = (is_array($tmp) && !empty($tmp)) ? current($tmp) : null;
			}else{
				$tmp            = isset($row[$columnKey]) ? $row[$columnKey] : null;
			}
			if(!$indexKeyIsNull){
				if($indexKeyIsNumber){
					$key        = array_slice($row, $indexKey, 1);
					$key        = (is_array($key) && !empty($key)) ? current($key) : null;
					$key        = is_null($key) ? 0 : $key;
				}else{
					$key        = isset($row[$indexKey]) ? $row[$indexKey] : 0;
				}
			}
			$result[$key]       = $tmp;
		}
		return $result;
	}
}

function getdomain($url) {
	$host = strtolower ( $url );
	if (strpos ( $host, '/' ) !== false) {
		$parse = @parse_url ( $host );
		$host = $parse ['host'];
	}
	$topleveldomaindb = array ('com', 'edu', 'gov', 'int', 'mil', 'net', 'org', 'biz', 'info', 'pro', 'name', 'museum', 'coop', 'aero', 'xxx', 'idv', 'mobi', 'cc', 'me' );
	$str = '';
	foreach ( $topleveldomaindb as $v ) {
		$str .= ($str ? '|' : '') . $v;
	}

	$matchstr = "[^\.]+\.(?:(" . $str . ")|\w{2}|((" . $str . ")\.\w{2}))$";
	if (preg_match ( "/" . $matchstr . "/ies", $host, $matchs )) {
		$domain = $matchs ['0'];
	} else {
		$domain = $host;
	}
	return $domain;
}

function clean($str) {

	$str = str_replace("_", "\_", $str);	//把'_'过滤掉
	$str = str_replace("%", "\%", $str);	//把'%'过滤掉
	$str = str_replace("*", "\*", $str);	//把'*'过滤掉
	$str = htmlspecialchars($str);	//html标记转换
	$str = str_replace("and","",$str);
	$str = str_replace("execute","",$str);
	$str = str_replace("update","",$str);
	$str = str_replace("count","",$str);
	$str = str_replace("chr","",$str);
	$str = str_replace("mid","",$str);
	$str = str_replace("master","",$str);
	$str = str_replace("truncate","",$str);
	$str = str_replace("char","",$str);
	$str = str_replace("declare","",$str);
	$str = str_replace("select","",$str);
	$str = str_replace("create","",$str);
	$str = str_replace("delete","",$str);
	$str = str_replace("insert","",$str);
	$str = str_replace("'","",$str);
	$str = str_replace(" ","",$str);
	$str = str_replace("or","",$str);
	$str = str_replace("=","",$str);
	$str = str_replace("%20","",$str);
	//$str = str_replace("on","",$str);
	$str = str_replace("c:/windows/win.ini","",$str);
	$str = str_replace("file:///etc/passwd","",$str);
	$str = str_replace("data://text/plain;ba","",$str);
	$str = str_replace("http://cirt.lnet/rfi","",$str);
	$str = str_replace("../../../../../../..","",$str);
	$str = str_replace("alert()","",$str);
	$str = str_replace(";","",$str);
	$str = str_replace("file:///rc.d/rc","",$str);
	return $str;
}

function is_email($str){
	//检验email
	return preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/", $str);
}

function is_postcode($str){
	//检验邮编
	return preg_match("/^[1-9]\d{5}$/", $str);
}

function is_mobile($str){
	//检验是否是手机
	return preg_match("/^(13|15|18|14|17)\d{9}$/", $str);
}

//验证内容
function is_content($str){
	return preg_match('/^[\p{Han}\p{N}\p{P}]{2,100}$/u',$str);  //验证2~100个汉字
}

function is_name($str){
	return preg_match("/^[\x{4e00}-\x{9fa5}]{2,4}+$/u",$str);  //验证2~4个汉字
}

function is_address($str){
	return preg_match("/^[\x{4e00}-\x{9fa5}\d\w-]{2,50}$/iu",$str);  //验证地址2~50个汉字
}

function gbcrypt($str, $op = 'DECODE'){
	return authcode($str, $op, substr(md5('7808.cn'), 0, 18));
}
function authcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {
	global $cfg;
	$ckey_length = 4;	// 随机密钥长度 取值 0-32;
	// 加入随机密钥，可以令密文无任何规律，即便是原文和密钥完全相同，加密结果也会每次不同，增大破解难度。
	// 取值越大，密文变动规律越大，密文变化 = 16 的 $ckey_length 次方
	// 当此值为 0 时，则不产生随机密钥
	$key = md5($key ? $key : $cfg['sitekey']);
	$keya = md5(substr($key, 0, 16));
	$keyb = md5(substr($key, 16, 16));
	$keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';

	$cryptkey = $keya.md5($keya.$keyc);
	$key_length = strlen($cryptkey);

	$string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
	$string_length = strlen($string);

	$result = '';
	$box = range(0, 255);

	$rndkey = array();
	for($i = 0; $i <= 255; $i++) {
		$rndkey[$i] = ord($cryptkey[$i % $key_length]);
	}

	for($j = $i = 0; $i < 256; $i++) {
		$j = ($j + $box[$i] + $rndkey[$i]) % 256;
		$tmp = $box[$i];
		$box[$i] = $box[$j];
		$box[$j] = $tmp;
	}

	for($a = $j = $i = 0; $i < $string_length; $i++) {
		$a = ($a + 1) % 256;
		$j = ($j + $box[$a]) % 256;
		$tmp = $box[$a];
		$box[$a] = $box[$j];
		$box[$j] = $tmp;
		$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
	}

	if($operation == 'DECODE') {
		if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) {
			return substr($result, 26);
		} else {
			return '';
		}
	} else {
		return $keyc.str_replace('=', '', base64_encode($result));
	}
}

function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true){
    if(function_exists("mb_substr")){
        $slice= mb_substr($str, $start, $length, $charset);
    }elseif(function_exists('iconv_substr')) {
        $slice= iconv_substr($str,$start,$length,$charset);
    }else{
        $re['utf-8'] = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef][x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";
        $re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";
        $re['gbk'] = "/[x01-x7f]|[x81-xfe][x40-xfe]/";
        $re['big5'] = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("",array_slice($match[0], $start, $length));
    }    
        $fix='';
        if(strlen($slice) < strlen($str)){
            $fix='...';
        }
        return $suffix ? $slice.$fix : $slice;
 }
 
 if ( !function_exists('week')){
	function week(){
		$day = array('星期日','星期一','星期二','星期三','星期四','星期五','星期六');
		$week_day = date('w');
		switch($week_day){
			case 0: return $day[0]; break;
			case 1: return $day[1]; break;
			case 2: return $day[2]; break;
			case 3: return $day[3]; break;
			case 4: return $day[4]; break;
			case 5; return $day[5]; break;
			case 6; return $day[6]; break;
		}
	}
}

function isMobile() {
     $mobile = array();
     static $mobilebrowser_list ='Mobile|iPhone|Android|WAP|NetFront|JAVA|OperasMini|UCWEB|WindowssCE|Symbian|Series|webOS|SonyEricsson|Sony|BlackBerry|Cellphone|dopod|Nokia|samsung|PalmSource|Xphone|Xda|Smartphone|PIEPlus|MEIZU|MIDP|CLDC';
     //note 获取手机浏览器
     if(preg_match("/$mobilebrowser_list/i", $_SERVER['HTTP_USER_AGENT'], $mobile)) {
         return true;
     }else{
         if(preg_match('/(mozilla|chrome|safari|opera|m3gate|winwap|openwave)/i', $_SERVER['HTTP_USER_AGENT'])) {
             return false;
         }else{
             if($_GET['mobile'] === 'yes') {
                 return true;
             }else{
                 return false;
             }
         }
     }
 }
