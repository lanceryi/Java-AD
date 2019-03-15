<?php
/**
 * @author:sky-xiaobai;
 * return string;
 */
if ( !function_exists('week')){
	function week(){
		$day = array('星期日','星期一','星期二','星期三','星期四','星期五','星期六');
		$week_day = date('w');
		switch($week_day){
			case 0: return $day[0]; break;
			case 1: return $day[1]; break;
			case 2: return $day[2]; break;
			case 3: return $day[3]; break;
			case 4: return $day[4]; break;
			case 5; return $day[5]; break;
			case 6; return $day[6]; break;
		}
	}
}
