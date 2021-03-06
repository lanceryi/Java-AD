<?php if (!defined('THINK_PATH')) exit();?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="/Public/js/Admin/jquery.js"></script>
<link href="/Public/css/Admin/main/main.css" rel="stylesheet" type="text/css"/>
<link href="/Public/css/Admin/main/chrome.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="/Public/js/Admin/main/artDialog.min.js"></script><!--弹窗插件-->
<script type="text/javascript" src="/Public/js/Admin/main/deleteArticle.js"></script>
<script type="text/javascript" src="/Public/js/Admin/main/eva.js"></script>
<script type="text/javascript" src="/Public/js/Admin/calendar.js"></script>
<title></title>
<style>
*{ word-wrap:break-word; outline:none; margin:0; padding:0; }
body, td, input, textarea, select, button{ color:#555; font:12px "微软雅黑;", "Lucida Grande", Verdana, Lucida, Helvetica, Arial, sans-serif; }
input, select, button{ vertical-align:middle;}
textarea,select{ padding:2px; border:1px solid; border-color:#809eba #809eba #809eba #809eba; background:#F9F9F9; color:#333; }
input,textarea{padding:2px 3px 0 3px;height:18px;line-height:18px;font-size:12px; vertical-align:middle;border:1px solid; border-color: #999999 #e1e1e1 #e1e1e1 #999999;background:#fff;}
input:hover,input:focus,textarea:hover,textarea:focus{border:1px solid #809eba;}
input.checkbox,input.radio {border:none;padding:0;height:auto;}
input.checkbox:hover,input.checkbox:focus,input.radio:hover,input.radio:focus{border:none;}

.highlight{ border:1px solid #ffbe7a;zoom:1; background: #fffced; padding:8px 10px; line-height:20px; clear:both;margin-top:10px;}
.vote_bar{width:90%; height:13px; border:1px solid #999}
.vote_bar div{background: url(../../image/admin/x_bg.png) repeat-x left -194px; float: left; position:relative; height:16px;_height:13px}
.vote_bar div span{ display:block; position:absolute; left:0; top:0; width:180px; text-align:center; height:16px; font-size:10px; line-height:12px; vertical-align:middle}
input.date{background: #fff url(/Public/images/Admin/date.png) no-repeat right 1px; padding-right:18px;font-size:12px;}

.ruler{background:url(../../image/admin/ruler.gif) repeat-x scroll 0 7px transparent}

.btns { display:inline; _vertical-align:top;}
.btns span, .btns .button { background-color:transparent; background-image:url(/Public/images/Admin/btns.png); background-repeat:no-repeat; display:inline-block; vertical-align:middle;*display:inline;}
.btns span { padding:0 0 0 5px; overflow:hidden; background-position:left -42px;vertical-align:middle;}
.btns .button { height:21px; line-height:21px; padding:0 10px 0 5px;_padding:0 10px 0 5px; margin-top:0px; max-width:200px; border:none 0; background-position:right 0; vertical-align:top; }
.btns span:hover { background-position:left -63px; }
.btns span:hover .button { background-position:right -21px; }
.btns .titlebutton {background: none repeat scroll 0 0 #DDDDDD; border-color: -moz-use-text-color #666666 #666666 -moz-use-text-color; border-style: none solid solid none; border-width: 0 1px 1px 0; height: 24px; margin-right: 5px; padding: 3px 6px;}

/*button*/
.btn,.btn:hover {background:url(/Public/images/Admin/btn.png) center 0 no-repeat; border:none;height:27px; width:68px;line-height:22px;font-size:14px;font-weight:700; color:#FFF; text-align:center; display:inline;}
 






</style>
</head>
<body>
	
	<div class="panel">
		<div class="panel-head">
			<span>导出留言</span>
		</div>
	</div>
	
	<div class="highlight">
		<form name="searchform" action="/Admin/Guestbook/exportGuest" method="get" >

		<input type="text" class="date input-text input-hover" size="21" id="fromtime" name="fromtime" value="<?php echo (date("Y-m-d",$time-259200).' 00:00:00'); ?>" readonly>&nbsp;
		<script language="javascript" type="text/javascript">
		date = new Date();document.getElementById ("fromtime").value="<?php echo (date("Y-m-d",$time-259200).' 00:00:00'); ?>";
		Calendar.setup({
			inputField     :    "fromtime",
			ifFormat       :    "%Y-%m-%d %H:%M:%S",
			showsTime      :    true,
			timeFormat     :    "24"
		});
		</script> 至 
		<input type="text" class="date input-text  input-hover" size="21" id="totime" name="totime" value="<?php echo (date("Y-m-d",$time).' 00:00:00'); ?>" readonly>&nbsp;
		<script language="javascript" type="text/javascript">
		date = new Date();document.getElementById ("totime").value="<?php echo (date("Y-m-d",$time).' 23:59:59'); ?>";
		Calendar.setup({
			inputField     :    "totime",
			ifFormat       :    "%Y-%m-%d %H:%M:%S",
			showsTime      :    true,
			timeFormat     :    "24"
		});
		</script>
		<div class="btns">
			<span><input type="submit" value="导 出" class="button" name="dosubmit"></span>
		</div>
</form>
</div>

	
	
	
	
</body>
</html>