<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title></title>
<link href="/Public/css/Admin/main/main.css" rel="stylesheet" type="text/css"/>
<link href="/Public/css/Admin/main/chrome.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="/Public/js/Admin/jquery.js"></script>
<script type="text/javascript" src="/Public/js/Admin/main/jquery.validate.pack.js"></script>
<script type="text/javascript" src="/Public/js/Admin/main/jquery.metadata.js"></script>
<script type="text/javascript" src="/Public/js/Admin/main/xheditor-1.1.14/xheditor-1.1.14-zh-cn.min.js"></script>
<script type="text/javascript" src="/Public/js/Admin/main/artDialog.min.js"></script><!--弹窗插件-->
<script type="text/javascript" src="/Public/js/Admin/main/myblog.js"></script>
</head>

<body>
<div class="panel">
	<div class="panel-head">
		<span>留言内容</span><a href="/Admin/Guestbook/initGuestbookList" target="main"><span>返回上级</span></a>
	</div>
	<?php if(is_array($guestbook)): $i = 0; $__LIST__ = $guestbook;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$guestbooks): $mod = ($i % 2 );++$i;?><form action="" method="post" id="updateArticle" enctype="multipart/form-data">		
		<table id="updateArticleTable">
			<tr style="height:10px;"></tr>
			<tr>
				<td><label>姓名&nbsp;&nbsp;:</label></td>
				<td>
					&nbsp;&nbsp;<?php echo ($guestbooks["name"]); ?>
				</td>
			</tr>
			<tr style="height:10px;"></tr>
			<tr>
				<td><label>电话&nbsp;&nbsp;:</label></td>
				<td>
					&nbsp;&nbsp;<?php echo ($guestbooks["phone"]); ?>
				</td>
			</tr>
			<!--
			<tr style="height:10px;"></tr>
			<tr>
				<td><label>地址&nbsp;&nbsp;:</label></td>
				<td>
					&nbsp;&nbsp;<?php echo ($guestbooks["address"]); ?>
				</td>
			</tr>
			<tr style="height:10px;"></tr>
			<tr>
				<td><label>内容&nbsp;&nbsp;:</label></td>
				<td>
					&nbsp;&nbsp;<?php echo ($guestbooks["content"]); ?>
				</td>
			</tr>
			-->
			<!--
			<tr style="height:10px;"></tr>
			<tr>
				<td><label>用户IP&nbsp;&nbsp;:</label></td>
				<td>
					&nbsp;&nbsp;<a href="http://www.baidu.com/s?word=<?php echo ($guestbooks["mip"]); ?>" target="_blank"><?php echo ($guestbooks["mip"]); ?></a>
				</td>
			</tr>
			-->
			<tr style="height:10px;"></tr>
			<tr>
				<td><label>留言时间&nbsp;&nbsp;:</label></td>
				<td>
					&nbsp;&nbsp;<?php echo (date("Y-n-j H:i:s",$guestbooks["create_time"])); ?>
				</td>
			</tr>
		</table>
	</form><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>