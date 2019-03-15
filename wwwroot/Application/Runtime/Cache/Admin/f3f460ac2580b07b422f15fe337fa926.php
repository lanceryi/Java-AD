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
			<span>留言列表</span>
		</div>
	</div>
	
	<div class="highlight">
		<form name="searchform" action="/Admin/Guestbook/initGuestbookList" method="get" >
		<select name="field">
		<option value="num">请选择</option>
		<option value="gid"> 按留言ID</option>
		<option value="site" > 按标识</option>
		<option value="name" > 按姓名 </option>
		<option value="phone" > 按电话 </option>
		</select>

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
		<input type="text" value="" name="q">
		<div class="btns">
			<span><input type="submit" value="搜 索" class="button" name="dosubmit"></span>
		</div>
</form>
</div>

	<div class="panel-content" style="width:100%;">
		<form id="data-form" method="post">
		<table class="list-table">
			<tr>
				<th style="text-align:center; width:2%;"></th>
				<th width="4%" style="text-align:center;">id</th>
				<th width="4%" style="text-align:center;">姓名</th>
				<th width="5%" style="text-align:center;">电话</th>		
				<!--<th width="15%" style="text-align:center;">地址</th>
				<th width="25%" style="text-align:center;">留言</th>-->
				<th width="10%" style="text-align:center;">标识</th>	
				<th width="10%" style="text-align:center;">留言时间</th>			
				<th width="5%" style="text-align:center; border-right:1px solid #CCCCCC;">操作</th>
			</tr>
			<?php if(is_array($GuestbookList)): $i = 0; $__LIST__ = $GuestbookList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$GuestbookLists): $mod = ($i % 2 );++$i;?><tr>
				<td style="text-align:center; width:4%;"><input type="checkbox" name="id[]" value=<?php echo ($GuestbookLists["id"]); ?> /></td>	
				<td style="text-align:center;"><?php echo ($GuestbookLists["id"]); ?></td>
				<td style="text-align:center;"><?php echo ($GuestbookLists["name"]); ?></td>
				<td style="text-align:center;"><?php echo ($GuestbookLists["phone"]); ?></td>			
				<!--<td style="text-align:center;"><?php echo ($GuestbookLists["address"]); ?></td>	
				<td style="text-align:center;"><?php echo ($GuestbookLists["content"]); ?></td>-->
				<td style="text-align:center;"><?php echo ($GuestbookLists["diqu"]); ?></td>
				<!--<td style="text-align:center;"><a href="https://www.baidu.com/s?wd=<?php echo ($GuestbookLists["mip"]); ?>" target="_blank"><?php echo ($GuestbookLists["mip"]); ?></a></td>-->
				<!--
				<?php if($GuestbookLists["is_read"] == 1): ?><td style="text-align:center;" class="hots"><a href="javasript:void(0);" style="color:green;">已读</a></td>
					<?php else: ?>
					<td style="text-align:center;" class="hots"><a href="javasript:void(0);" style="color:red;">未读</a></td><?php endif; ?>
				-->
				<td style="text-align:center;"><?php echo (date("Y-n-j H:i:s",$GuestbookLists["create_time"])); ?></td>
				<td style="text-align:center; border:1px solid #CCCCCC;">
					<a href="/Admin/Guestbook/initReadGuestbook/<?php echo ($GuestbookLists["id"]); ?>">查看</a>
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		</form>
	</div>
	
	<div class="page" style="width:100%;">
		<ul>
			<li>
				<input type="checkbox" class="selected-btu" /><span>&nbsp;&nbsp;全选/全不选&nbsp;&nbsp;</span>
				<a class="delete-btu" href="/Admin/Guestbook/delete" >删除</a>
					共<span class="totalNum"><?php echo ($count); ?></span>条留言
			</li>					
		</ul>
	</div>
	
	<div id="pageLists"><?php echo ($page); ?></div>
	
</body>
</html>