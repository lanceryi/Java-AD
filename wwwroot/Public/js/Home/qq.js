
(function(){
	var qqlist = ["gcd32024","gcd32023"];
	var qq = qqlist[Math.floor(Math.random()*qqlist.length)];
	var tq = 'qq';
	var list = document.getElementsByTagName('a');
	for(var i=0;i<list.length;i++){
		if(list[i].getAttribute('flag') == tq){
			list[i].setAttribute('href',list[i].getAttribute('href').replace('1392399400',qq))
		}
	}
	var list = document.getElementsByTagName('span');
	for(var i=0;i<list.length;i++){
		if(list[i].getAttribute('flag') == tq){
			list[i].innerHTML = qq;
		}
	}
})();
