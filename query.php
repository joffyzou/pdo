<?php

include_once 'config.php';

/**
 * public PDOStatement PDO::query( string $statement)
 * public PDOStatement PDO::query( string $statement, int $PDO::FETCH_COLUMN, int $colno)
 * public PDOStatement PDO::query( string $statement, int $PDO::FETCH_CLASS, string $classname, array $ctorargs)
 * public PDOStatement PDO::query( string $statement, int $PDO::FETCH_INTO, object $object)
 * 执行一条SQL语句，返回的一个 PDOStatement 对象
 *
 * 建议使用 $pdo -> query($sql) 执行 SQL 查询 —— 返回 PDOStatement 对象
 * 建议使用 $pdo -> exec($sql) 执行 SQL 插入、更新、删除操作 —— 返回受影响记录的条数
 */



try {
    $pdo = new PDO(DSN, USER, PWD);
    $sql = 'SELECT * FROM users';
    $stmt = $pdo->query($sql);
//    var_dump($stmt);exit;

    // $stmt(PDOStatement对象) 其实是一个二维数组，可以用foreach遍历
    foreach ($stmt as $item) {
        echo '编号：' . $item['id'] . '<br />';
        echo '用户名：' . $item['username'] . '<br />';
        echo '邮箱：' . $item['email'];
        echo '<hr />';
    }
} catch (PDOException $e) {
    echo '连接失败' . $e->getMessage();
}