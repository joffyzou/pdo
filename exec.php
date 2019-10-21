<?php

require_once 'config.php';

/**
 * int PDO::exec( string $statement)
 * 执行一条 SQL 语句，并返回受影响的行数，如果没有受影响的行数，返回值为 0
 * 数据库添加、删除、修改操作
 * 注意：exec() 方法对 SELECT 查询操作没有作用
 */

try {
    $pdo = new PDO(DSN, USER, PWD);

    // 添加一条数据
//    $sql = 'INSERT INTO users (username, password, email) VALUES ("joffy", "12345678", "joffy@qq.com")';
//    $num = $pdo->exec($sql);
//    var_dump($num);

    // 添加多条数据
//    $sql = <<<EOF
//        INSERT INTO users (username, password, email) VALUES ('Lily', '12345678', 'lily@qq.com'), ('Adi', '12345678', 'adi@qq.com');
//EOF;
//    $num = $pdo->exec($sql);
//    var_dump($num);

    // 修改数据
//    $sql = 'UPDATE users SET email="wuc@qq.com" WHERE id=3';
//    $num = $pdo->exec($sql);
//    var_dump($num);

    // 删除数据
    $sql = 'DELETE FROM users WHERE id=3';
    $num = $pdo->exec($sql);
    var_dump($num);
} catch (PDOException $e) {
    echo '连接失败' . $e->getMessage();
}

