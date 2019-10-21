<?php

require_once 'config.php';

/**
 * public PDOStatement PDO::prepare( string $statement[, array $driver_options = array()] )
 * 准备要执行的SQL语句，返回 PDOStatement 对象
 * 用于预处理语句
 */

try {
    $pdo = new PDO(DSN, USER, PWD);
    $sql = 'SELECT * FROM users';
    // 准备一条预处理语句
    $stmt = $pdo->prepare($sql);
    // 执行已经准备好的预处理语句，得到结果集
    $res = $stmt->execute();
    // 从结果集中得到一条数据
    $row = $stmt ->fetch();

    print_r($row);

} catch (PDOException $e) {
    echo '连接失败' . $e->getMessage();
}
