<?php
return array(
    'URL_MODEL'          => '2', //URL模式
    'SESSION_AUTO_START' => false, //是否开启session
    'URL_CASE_INSENSITIVE' =>true, //忽略大小写
    'URL_HTML_SUFFIX'       => NULL, //伪静态后缀
    'URL_404_REDIRECT'      =>  '__ROOT__/404.html', //404页面
    'OUTPUT_ENCODE' => true, //页面压缩
    'DB_TYPE'   => 'mysqli', // 数据库类型
    'DB_HOST'   => MYSQL_HOST, // 服务器地址
    'DB_NAME'   => 'seer2tool', // 数据库名
    'DB_USER'   => MYSQL_USER, // 用户名
    'DB_PWD'    => MYSQL_PASSWORD, // 密码
    'DB_PORT'   => MYSQL_PORT, // 端口
    'DB_PREFIX' => 'seer2tool_', // 数据库表前缀
	'DB_CHARSET'  => 'utf8', //数据库编码
	'TMPL_PARSE_STRING'  =>array(
     '__PUBLIC__' => '/Public',
	 '__CSS__' => '/Public/css',
     '__JS__' => '/Public/js',
	 '__IMAGE__' => '/Public/images',
     '__UPLOAD__' => '/Uploads',
     ), //模版常量
     'TMPL_L_DELIM'=>'<{', //模版左定界符
     'TMPL_R_DELIM'=>'}>', //模版右定界符
     'LOG_RECORD' => true,
     'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR',
     'LOG_TYPE' =>1,
     'LOG_DEST' =>'eastphoton@gmail.com',
     'LOG_EXTRA' =>'From: error@mrdf.pw',
);
?>
