<?php
/**
 * Created by PhpStorm.
 * User: 14839
 * Date: 2019/12/11
 * Time: 17:12
 */
//判断登录次数   3次以上 过一个小时后在登录
$redis = new Redis();
$redis->connect('localhost');
//$redis->auth();
//初始化一个  用户的唯一昵称
$userName = $_POST['username'].'_username';
$passWord = '123456';
$number = $redis->get($userName);
if( $number > 3 ){
    echo '登录上限，请明天在登录';
    die;
}
if( $_POST['password'] == $passWord ){
    echo '登录成功';
} else{
    $totalNum = 3;
    $nowNum = $totalNum - $number;
    $redis->incr($userName);
    $redis->setTimeout($userName,3600);
    echo '密码错误，您还有'.$nowNum.'次机会';
}