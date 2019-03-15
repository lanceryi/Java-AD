<?php 

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

?>