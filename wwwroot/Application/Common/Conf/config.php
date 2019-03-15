<?php
return array(
		'DB_TYPE'      			=> 'mysql',
		// 'DB_HOST'    			=> '211.149.139.196',
		// 'DB_NAME'   			=> 'hua',
		// 'DB_USER'    			=> 'master',
		// 'DB_PWD'      			=> 'master@0013',
		'DB_HOST'    			=> '127.0.0.1',
		'DB_NAME'   			=> 'hua',
		'DB_USER'    			=> 'root',
		'DB_PWD'      			=> 'root',
		'DB_PORT'     			=> 3306,
		'DB_PREFIX'   			=> '',
		'DEFAULT_TIMEZONE'		=>'Asia/chongqing',
		'SHOW_PAGE_TRACE' 		=> false,
		'TMPL_PARSE_STRING'  	=> array(
			'__PUBLIC__'  => 	'/Public',
			'__JS__' 	  => 	'/Public/js',
			'__UPLOAD__'  => 	'/Uploads',
			'__CSS__' 	  => 	'/Public/css',
			'__IMAGE__'   => 	'/Public/images'
		),
		'DEFAULT_FILTER'		=>	'strip_tags,addslashes,htmlspecialchars',
		'LAYOUT_ON' 			=> 	false,
		'SHOW_PAGE_TRACE' 		=> 	false,
		'URL_HTML_SUFFIX'		=>	'.html',
		'URL_MODEL'				=> 	2,
		'TMPL_ACTION_ERROR' 	=> 	THINK_PATH . 'Tpl/dispatch_jump.tpl',
		'TMPL_ACTION_SUCCESS' 	=> 	THINK_PATH . 'Tpl/dispatch_jump.tpl',
		'URL_ROUTER_ON' 		=> 	true,
		'URL_ROUTE_RULES' => array(
			'add'	=> 'Home/Index/add',
			'add1'	=> 'Home/Index/add1',
			'about' => 'Home/Index/about',
			'contact' => 'Home/Index/contact',
			'jianjie' => 'Home/Index/jianjie',
			'keshi' => 'Home/Index/keshi',
			'laiyuan' => 'Home/Index/laiyuan',
			'guest' => 'Home/Index/guest',
			'fh' => 'Home/Index/fh',
			'wly'	=> 'Admin/Index/index'
		)
);