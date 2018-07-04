<?php
/**
 * Created by PhpStorm.
 * User: nancheng
 * Date: 2018/6/26
 * Time: 下午11:31
 */

/**
 * [cdb 数据库链接]
 * @param  [type] $host   [主机名]
 * @param  [type] $user   [用户名]
 * @param  [type] $pwd    [密码]
 * @param  [type] $dbname [数据库名]
 * @param  [type] $char   [字符集]
 * @return [链接失败返回false]
 */
function cdb($host, $user, $pwd, $dbname, $char)
{
    $link = mysqli_connect($host, $user, $pwd);
    mysqli_set_charset($link, $char);
    mysqli_select_db($link, $dbname);
    if (!$link) {
        return false;
    }
    return $link;
}

// cdb ($host,$user,$pwd,$dbname,$char);

/**
 * [execute 增删改函数]
 * @param  [object] $link [mysql的链接标识]
 * @param  [string] $sql  [要查询的$sql语句]
 * @return 添加语句时返回自增ID
 *         删改语句时返回true
 *         操作失败返回false
 */
function execute($link, $sql)
{
    // 执行sql语句
    $result = mysqli_query($link, $sql);
    // 处理结果集
    if ($result) {
        // 添加操作时获取自增id
        if (mysqli_insert_id($link) > 0) {
            // 添加时返回自增ID
            return mysqli_insert_id()($link);
        }
        // 删改时返回true
        return true;
    } else {
        // 操作失败返回false
        return false;
    }
}

function query($link, $sql)
{
    // 执行sql语句
    $result = mysqli_query($link, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        // 声明空数组
        $list = array();
        $list = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        // 以一个关联数组的形式，返回查询到的数据
        return $list;
    } else {
        // 未查询到返回false
        return false;
    }
}

// 跳转处理
/**
 * [redirect 前台跳转处理]
 * @param  string $msg [跳转时的提示信息]
 * @param  string $url [跳转页面的地址]
 * @param  integer $t [跳转时间]
 * @return 返回显示的页面
 */
function redirect($msg = '', $url = '', $t = 3)
{
    // 如果跳转的URL为空
    if ($url == '') {
        // 则返回来之前的页面
        $url = $_SERVER['HTTP_REFERER'];
    }
    // var_dump(PATH);exit;
    require PATH . './Common/redirect.php';
}

/**
 * [admin_redirect 后台跳转信息处理]
 * @param  string $msg [跳转时的提示信息]
 * @param  string $url [跳转页面的地址]
 * @param  integer $t [跳转时间]
 * @return [返回显示的页面]
 */
function admin_redirect($msg = '', $url = '', $t = 3)
{
    // 如果跳转的URL为空
    if ($url == '') {
        // 则返回来之前的页面
        $url = $_SERVER['HTTP_REFERER'];
    }
    // var_dump(PATH);exit;
    require ADMIN_PATH . 'redirect.php';
}

/**
 * @param $arr
 */
function dd($arr)
{
    echo '<pre>';
        var_dump($arr);
    echo '</pre>';
    exit();
}