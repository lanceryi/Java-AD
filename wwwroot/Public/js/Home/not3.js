	

function not3jiage(){

	var productalt = document.not3orderform.product.alt;
	for(var i=0;i<document.not3orderform.product.length;i++){
		if(document.not3orderform.product[i].checked==true){
		    var productalt = document.not3orderform.product[i].alt;
			document.getElementById("not3chanpin").value=document.not3orderform.product[i].value;
			setnot3guanlian(i);
			break;
		}
	}
	var not3other = productalt.split("###");
	var product=not3other[0];
    if(document.not3orderform.mun.value=="" || document.not3orderform.mun.value==0){	
		var mun=1;
	}
	else{
		var mun=document.not3orderform.mun.value;
	}	
	var price=product*mun;
    document.getElementById("b1").checked='checked';
	document.not3orderform.price.value=price;
	document.not3orderform.zfbprice.value=price;
	document.not3orderform.zfbewm.value=not3other[1];
	document.not3orderform.wxewm.value=not3other[2];
	//document.getElementById("showprice").innerHTML=price;
	document.getElementById("zfbyh").innerHTML='';
}

try{	
   var productalt = document.getElementById("a0").alt;
   var not3other = productalt.split("###");
   document.not3orderform.zfbewm.value=not3other[1];
   document.not3orderform.wxewm.value=not3other[2];
}
catch(ex){
}

//***************************  支付宝价格  ***************************
function zfbprize(){
         var sprice=document.not3orderform.zfbprice.value;
         document.not3orderform.price.value=(sprice*not3peizhi[0]*0.1).toFixed(0)
}
/*///////////////////////////////////////// ORDERJSFGX /////////////////////////////////////////*/
function changeItem(i){

if (i==1) {
  if (not3peizhi[0] != 0){
     zfbprize();
     document.getElementById("zfbyh").innerHTML='<font color=red><b><s>&nbsp;原价：'+document.not3orderform.zfbprice.value+'元&nbsp;</s>&nbsp;'+not3peizhi[0]+'折优惠</b></font>';
  }
}else{
//oprize1();
document.getElementById("zfbyh").innerHTML='';
document.not3orderform.price.value=document.not3orderform.zfbprice.value;
}
}

function addnumber(){
    if(not3peizhi[1] == 0 || $('#mun').val()<not3peizhi[1] ){
	    $('#mun').val(parseInt($('#mun').val())+1);
	    not3jiage();
	}else{
	    alert("该商品限购 "+not3peizhi[1]+" 件");
	}
}

function minnumber(){
	if($('#mun').val()>1){
	$('#mun').val(parseInt($('#mun').val())-1);
	not3jiage();
	}
}
function inputnumber(){
	var number=parseInt($('#mun').val());
	if(isNaN(number)||number<1){
		$('#mun').val('1');
	    not3jiage();
	}else{
		$('#mun').val(number);
        not3jiage();
	}
}



function not3chanpin(){
	 $(".not3chanpin label").bind("click",function(){
			var o = $(this);
			if(!o.hasClass("now")){
				$(".not3chanpin label").removeClass("now");
				o.addClass("now");
			}
		});
	 $(".not3chanpin0 label").bind("click",function(){
			var o = $(this);
			if(!o.hasClass("now")){
				 $(".not3chanpin0 label").removeClass("now");
				o.addClass("now");
			}
			$(o.find("input")).attr("checked","checked");
			not3guanlianchanpin();
		});
	 $(".not3chanpin1 label").bind("click",function(){
			var o = $(this);
			if(!o.hasClass("now")){
				$(".not3chanpin1 label").removeClass("now");
				o.addClass("now");
			}
			$(o.find("input")).attr("checked","checked");
			not3guanlianchanpin();
		});
	 $(".not3chanpin2 label").bind("click",function(){
			var o = $(this);
			if(!o.hasClass("now")){
				$(".not3chanpin2 label").removeClass("now");
				o.addClass("now");
			}
			$(o.find("input")).attr("checked","checked");
			not3guanlianchanpin();
		});
	 $(".not3chanpin3 label").bind("click",function(){
			var o = $(this);
			if(!o.hasClass("now")){
				$(".not3chanpin3 label").removeClass("now");
				o.addClass("now");
			}
			$(o.find("input")).attr("checked","checked");
			not3guanlianchanpin();
		});
	 $(".not3chanpin4 label").bind("click",function(){
			var o = $(this);
			if(!o.hasClass("now")){
				$(".not3chanpin4 label").removeClass("now");
				o.addClass("now");
			}
			$(o.find("input")).attr("checked","checked");
			not3guanlianchanpin();
		});
	 $(".not3chanpin5 label").bind("click",function(){
			var o = $(this);
			if(!o.hasClass("now")){
				$(".not3chanpin5 label").removeClass("now");
				o.addClass("now");
			}
			$(o.find("input")).attr("checked","checked");
			not3guanlianchanpin();
		});
	 $(".not3chanpin6 label").bind("click",function(){
			var o = $(this);
			if(!o.hasClass("now")){
				$(".not3chanpin6 label").removeClass("now");
				o.addClass("now");
			}
			$(o.find("input")).attr("checked","checked");
			not3guanlianchanpin();
		});
	 $(".not3chanpin7 label").bind("click",function(){
			var o = $(this);
			if(!o.hasClass("now")){
				$(".not3chanpin7 label").removeClass("now");
				o.addClass("now");
			}
			$(o.find("input")).attr("checked","checked");
			not3guanlianchanpin();
		});
	 $(".not3chanpin8 label").bind("click",function(){
			var o = $(this);
			if(!o.hasClass("now")){
				$(".not3chanpin8 label").removeClass("now");
				o.addClass("now");
			}
			$(o.find("input")).attr("checked","checked");
			not3guanlianchanpin();
		});
	 $(".not3chanpin9 label").bind("click",function(){
			var o = $(this);
			if(!o.hasClass("now")){
				$(".not3chanpin9 label").removeClass("now");
				o.addClass("now");
			}
			$(o.find("input")).attr("checked","checked");
			not3guanlianchanpin();
		});
}
not3chanpin();

function checktel(){
		if (document.getElementById("notchecktel").value==""){
			alert('请输入要查询的手机号码！');
			document.getElementById("notchecktel").focus();
			return false;
		}
		var form = /^1[3,4,5,7,8]\d{9}$/;
		if (!form.test(document.getElementById("notchecktel").value)){
			alert('手机号码格式不正确，请重新填写！');
			document.getElementById("notchecktel").focus();
			return false;
		}
		document.getElementById("notcheckif").src=not3peizhi[2]+'app/checkorder/index.asp?rand='+parseInt(100000*Math.random()+1)+'&tel='+document.getElementById("notchecktel").value;
}



function not3change(obj,str){
$("#qh li").removeClass("on");
if(str=="not3order"){
document.getElementById("not3order").style.display = "";
document.getElementById("not3check").style.display = "none";
document.getElementById("not3tui").style.display = "none";
document.getElementById(obj).setAttribute("class", "on");
}else if(str=="not3check"){
document.getElementById("not3order").style.display = "none";
document.getElementById("not3check").style.display = "";
document.getElementById("not3tui").style.display = "none";
document.getElementById(obj).setAttribute("class", "m on");
}else if(str=="not3tui"){
document.getElementById("not3order").style.display = "none";
document.getElementById("not3check").style.display = "none";
document.getElementById("not3tui").style.display = "";
document.getElementById(obj).setAttribute("class", "on");
  }
}


$(function(){
	function scollDown(id,time){
          var liHeight=$("#"+id+" ul li").height();
          var time=time||2500;
          setInterval(function(){
          $("#"+id+" ul").prepend($("#"+id+" ul li:last").css("height","0px").animate({
          	height:liHeight+"px"
          },"slow"));
          },time);
	}
	scollDown("fahuo",3000);
});

