<?php
	// 字符集
	header("content-type:text/html;charset=utf-8");

	// 设置中国时区
	date_default_timezone_set('PRC');

	// 开启页面SEESION
	session_start();

	// 获取当前init.php文件所在目录的绝对路径
	$path=dirname(__FILE__);
	// var_dump($path);
	
	define('ADMIN_PATH',str_replace('\\','/',$path).'/');
	// var_dump(ADMIN_PATH);

	// URL拼接
	$url=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'];
	// echo $url;
	
	// 取出当前脚本的文档根目录
	$dir=$_SERVER['DOCUMENT_ROOT'];
	// echo $dir
	
	// 将PATH中的项目目录之前的部分替换成域名的形式
	$url=str_replace($dir,$url,ADMIN_PATH);
	// echo $url;
	define('ADMIN_URL',$url);
	// var_dump(ADMIN_URL);
	
	// 引入数据库配置文件
	require ADMIN_PATH.'../config.php';
	require ADMIN_PATH.'../Common/function.php';
?>