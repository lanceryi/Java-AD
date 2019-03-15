function getfahuo(){
var not3str="";
if(not3chanpin.length !=0){not3str=not3str+not3chanpin[Math.floor((Math.random()*not3chanpin.length))]+" ";}
if(chanpin1.length !=0){not3str=not3str+chanpin1[Math.floor((Math.random()*chanpin1.length))]+" ";}
if(chanpin2.length !=0){not3str=not3str+chanpin2[Math.floor((Math.random()*chanpin2.length))]+" ";}
if(chanpin3.length !=0){not3str=not3str+chanpin3[Math.floor((Math.random()*chanpin3.length))]+" ";}
return not3str;
}
