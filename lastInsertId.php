<?php

include_once 'config.php';

/**
 * string PDO::lastInsertId([ string $name = NULL] )
 * 返回最后插入行的ID或序列值
 * 其实就是数据表中字段 AUTO_INCREMENT(自增) 的值
 * mysql 命令查看 show create table user;
 * 修改自增字段的 AUTO_INCREMENT 值： alter table users auto_increment=10;
 */

try {
    $pdo = new PDO(DSN, USER, PWD);
    $sql = 'INSERT INTO users (username, password, email) VALUES ("Lih", "'.md5('123456').'", "lih@qq.com")';
    $num = $pdo->exec($sql);

    echo '插入的记录的条数为：' . $num . '<hr />';
    echo '最后插入的ID号为：' . $pdo->lastInsertId();
} catch (PDOException $e) {
    echo '连接失败' . $e->getMessage();
}