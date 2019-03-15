function initEcAd() {
document.all.AdLayer1.style.posTop = -200;
document.all.AdLayer1.style.visibility = 'visible'
document.all.AdLayer2.style.posTop = -200;
document.all.AdLayer2.style.visibility = 'visible'
MoveLeftLayer('AdLayer1');
MoveRightLayer('AdLayer2');
}
function MoveLeftLayer(layerName) {
var x = 5;
var y = 100;// 左侧广告距离页首高度
var diff = (document.body.scrollTop + y - document.all.AdLayer1.style.posTop)*.40;
var y = document.body.scrollTop + y - diff;
eval("document.all." + layerName + ".style.posTop = parseInt(y)");
eval("document.all." + layerName + ".style.posLeft = x");
setTimeout("MoveLeftLayer('AdLayer1');", 20);
}
function MoveRightLayer(layerName) {
var x = 5;
var y = 100;// 右侧广告距离页首高度
var diff = (document.body.scrollTop + y - document.all.AdLayer2.style.posTop)*.40;
var y = document.body.scrollTop + y - diff;
eval("document.all." + layerName + ".style.posTop = y");
eval("document.all." + layerName + ".style.posRight = x");
setTimeout("MoveRightLayer('AdLayer2');", 20);
}

document.write("<div style='margin-top: 107px; position: absolute; left: 10px; top: 0px;' id='dl_left'><div class='fw_zx'><div class='fw_zc'>010-57747811 15210713281 15210731390</div></div></div><div style='margin-top: 107px; position: absolute; right: 10px; margin-right: 0px; top: 0px;' id='dl_right'><div class='fw_zx'><div class='fw_zc'>010-57747811 15210713281 15210731390</div></div><br></div>");
initEcAd()

// JavaScript Document