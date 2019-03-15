$(function(){
	var name      = $('.J_msgForm input[name="name"]');
	var mobile    = $('.J_msgForm input[name="mobile"]');
	var address    = $('.J_msgForm input[name="address"]');

	$('.J_msgForm').submit(function(){
		var p1 = /^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/;
		var p2 = /^[\u4E00-\u9FA5]+$/;
		var p3 = /^(13|15|18|14|17|19)\d{9}$/;
		if(!name.val()){
			alert('请输入姓名');
			name.focus();
			return false;
		}
		
				
		if(name.val().length > 5) {
			alert('姓名最多只能有4个字');
			name.select();
			return false;
		} 

		if(!p2.test(name.val())) {
			alert('姓名格式错误');
			name.select();
			return false;
		}
		
		if(!p3.test($.trim(mobile.val()))) {
			alert('电话号码格式错误');
			mobile.focus();
			return false;
		}

	})
	

})