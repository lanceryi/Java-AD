<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>参数设置</title>
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
		<span>参数设置</span>
	</div>	
	<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><form action="/Admin/Option/updateCopy" method="post" id="updateArticle" enctype="multipart/form-data">		
		<table id="updateArticleTable">
			<!--
			<tr style="height:10px;"></tr>
			<tr>
				<td><label for="articleName">id</label></td>
				<td>
					<input type="text" name="custid" value="<?php echo ($data["custid"]); ?>" class="inputStyle" />
				</td>
			</tr>
			-->
			<tr style="height:10px;"></tr>
			<tr>
				<td><label for="articleName">电话</label></td>
				<td>
					<input type="text" name="phone" value="<?php echo ($data["phone"]); ?>" class="inputStyle" />
				</td>
			</tr>
			<tr style="height:10px;"></tr>
			<tr>
				<td><label for="articleName">53代码</label></td>
				<td>
					<textarea name="code"><?php echo ($data["code"]); ?></textarea>
				</td>
			</tr>
			<tr style="height:10px;"></tr>
			<tr>
				<td></td>
				<td>
					<div style="width:100%; height:10px; float:left;"></div>
				</td>
			</tr>			
			<tr>
				<td></td>
				<td>
					<input type="submit" value="提交" name="Submit"/>
				</td>
			</tr>
			<tr>
				<td></td>
			</tr>
		</table>
	</form><?php endforeach; endif; else: echo "" ;endif; ?>
		<script type="text/javascript">
		$(function(){
			$('#updateArticle').validate({
				rules : {
					webname : {
						required : true
					},
					keyword : {
						required : true
					},
					copy : {
						required : true
					},
					content : {
						required : true
					}
				},
				messages : {
					webname : {
						required : "网站名称不能为空"
					},
					keyword : {
						required : "关键字不能为空"
					},
					copy : {
						required : "版权不能为空"
					},
					content : {
						required : "站点描述不能为空"
					}
				},
				errorPlacement : function(error,element){  //element是验证未通过的当前表单元素,error为错误后的提示信息 
					error.appendTo(element.parent('td'));
				},
				success : function(label){
					label.html("验证成功").addClass("success");
				}
			});
		})	
	</script>
</body>
</html>