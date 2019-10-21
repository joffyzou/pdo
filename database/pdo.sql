CREATE DATABASE IF NOT EXISTS `pdo`;
USE `pdo`;

-- --------------------------------
-- Table structure for users
-- --------------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`(
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '用户ID',
    `username` VARCHAR(20) UNIQUE NOT NULL COMMENT '用户名',
    `password` CHAR(32) NOT NULL COMMENT '用户密码',
    `email` VARCHAR(30) NOT NULL COMMENT '用户邮箱'
)COMMENT '用户表';

-- INSERT INTO `users` VALUES (1, 'joffy', '12345678', 'joffy@qq.com');