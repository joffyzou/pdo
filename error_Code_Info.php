<?php

include_once 'config.php';

/**
 * 错误号：errorCode:  mixed PDO::errorCode( void)
 * 获取跟数据库句柄上一次操作相关的 SQLSTATE
 *
 * 错误信息：errorInfo:  public array PDO::errorInfo( void)
 * 获取跟数据库句柄上一次操作的错误信息
 * 返回的是一个数组
 * 0 => SQLSTATE 与 $pdo -> errorCode() 返回一样
 * 1 => CODE 错误码
 * 2 => INFO 错误信息
 */

try {
    $pdo = new PDO(DSN, USER, PWD);
    $sql = 'INSERT INTO users (username2, password, email) VALUES ("Lucy", "'.md5('123123').'", "lucy@qq.com")';
    // 当SQL语句错误时，返回布尔值，表示语句执行失败
    $bool = $pdo->exec($sql);
    // var_dump($bool);exit;

    if ($bool === false) {
        echo $pdo->errorCode() . '<hr />';
        echo '<pre>';
        print_r($pdo->errorInfo());
    }
} catch (PDOException $e) {
    echo '连接失败' . $e->getMessage();
}