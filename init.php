<?php
session_start();
/**
 * 这里是初始化文件
 */
// 设置字符集
// 


header("content-type:text/html;charset=utf-8");

// 设置时区
date_default_timezone_set('PRC');

// 开启SEESION
// 获取当前init.php文件所在目录的绝对路径
// echo $path=__FILE__;
$path=dirname(__FILE__);
// var_dump($path);

// 将绝对路径改装成一个路径常量
// PATH 用于填写路径值:require/路径文件/增删改文件时
/* str_replace(find,replace,string,count)
	find	必需。规定要查找的值。
	replace	必需。规定替换 find 中的值的值。
	string	必需。规定被搜索的字符串。
*/
define('PATH',str_replace('\\','/',$path).'/');
// var_dump(PATH);

// URL拼接
// 组成	协议://域名
// echo "<pre>";
// 	print_r($_SERVER);
$url=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'];
// echo $url;

// 取出当前脚本的文档根目录
$dir=$_SERVER['DOCUMENT_ROOT'];
// echo $dir;

// 将PATH中的项目目录之前的部分替换成域名的形式
$url=str_replace($dir,$url,PATH);
// echo $url;
define('URL',$url);
// var_dump(URL);
// $a=PATH.'Public/imgs/1.jpg';
// var_dump($a);

// 引入数据库配置文件
require PATH.'config.php'; 

// 引入自定义函数文件
require PATH.'Common/function.php';