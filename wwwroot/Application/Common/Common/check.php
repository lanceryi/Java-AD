<?php 

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
	return preg_match("/^(13|15|18|14|17|19)\d{9}$/", $str);
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
?>