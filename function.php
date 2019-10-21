<?php

/**
 * PDO 对象方法
 */

// 连接数据库
$pdo = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', 'root');

// 执行一条SQL语句，并返回其受影响的行数，数据库增、删、改操作
$pdo->exec('');

// 执行一条SQL语句，返回一个PDOStatement对象，数据库的查询操作
$pdo->query('');

// 准备要执行的SQL语句，返回PDOStatement对象，给 PDOStatement 对象的 execute() 方法执行
$pdo->prepare('');

// 返回一个添加引号的字符串，用于SQL语句中
$pdo->quote('');

// 返回最后插入行的ID
$pdo->lastInsertId('');

// 设置数据库连接属性
$pdo->setAttribute('');

// 得到数据库连接的属性
$pdo->getAttribute('');

// 获取跟数据库句柄上一次操作相关的SQLSTATE
$pdo->errorCode();

// 获取跟数据库句柄上一次操作的错误信息
$pdo->errorInfo();

// 启动一个事务
$pdo->beginTransaction();

// 提交一个事务
$pdo->commit();

// 回滚一个事务
$pdo->rollBack();

// 检测是否再一个内
$pdo->inTransaction();


/**
 * PDOStatement 对象方法
 */

// 执行一条预处理语句
$stmt = $pdo->prepare('SELECT * FROM pdo'); // 准备要执行的SQL语句，返回PDOStatement对象
$res = $stmt->execute(); // 执行一条预处理语句，得到结果集

// 返回上一个SQL语句影响的行数
$stmt->rowCount();

// 从结果集中获取一行
$stmt->fetch();

// 返回一个包含结果集中所有行的数组
$stmt->fetchAll();

// 位语句设置默认的获取模式
$stmt->setFetchMode();

// 从结果集中的下一行返回单独的一列
$stmt->fetchColumn();
