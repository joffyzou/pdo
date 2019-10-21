<?php

require_once 'config.php';
/**
 * 使用 try catch 语句判断PDO方式连接数据库是否成功
 * 失败则抛出 $e 错误对象
 */
    try {
        $pdo = new PDO(DSN, 'root1', PWD);
    } catch (PDOException $e) {
        echo $e . '<hr />';
        echo $e -> getMessage();
    }