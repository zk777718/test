<?php
/**
 * Created by PhpStorm.
 * User: 14839
 * Date: 2019/12/11
 * Time: 16:39
 */
$redis = new Redis();
$resource = $redis->connect('localhost');
/*$redis->set('username','libai');
$redis->set('age','12');
$redis->hmset('user:id:1',['name'=>'xiaohei','age'=>'23']);
$redis->lPush('user_list','zk1');
$redis->lPush('user_list','zk2');
$redis->lPush('user_list','zk3');*/
//$data = $redis->lrange('user_list',0,-1);
//$data = $redis->get('username');
//$data = $redis->hGetAll('user:id:1');
$data = $redis->get('123456');
echo '<pre>';
var_dump($data);