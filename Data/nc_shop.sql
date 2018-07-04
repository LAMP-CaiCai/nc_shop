-- 数据库
CREATE  DATABASE `nc_shop`;
USE `nc_shop`
-- 创建后台用户表
DROP TABLE IF EXISTS  `admin_user`;
CREATE TABLE `admin_user`(
`id` INT(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(50) UNIQUE KEY NOT NULL,  -- 用户名
`pwd` CHAR(32) NOT NULL,   -- 密码
`type` tinyint(4) NOT NULL DEFAULT '1'
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 前台用户表

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member`(
  `member_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `member_name` VARCHAR(255) NOT NULL DEFAULT '',   -- 用户名
  `member_pwd` VARCHAR(255) NOT NULL,               -- 密码
  `member_email` VARCHAR(100) NOT NULL,             -- 邮箱
  `member_phone` VARCHAR(25) NOT NULL DEFAULT '0000000', -- 电话
  `member_sex` TINYINT NOT NULL DEFAULT 0,               -- 性别 0, 女 1 男
  `member_birthday` DATETIME NOT NULL DEFAULT '1990-01-01', -- 生日
  `member_status` TINYINT NOT NULL DEFAULT 0,                      -- 状态
  `add_time` DATETIME NOT NULL                              -- 注册时间
)ENGINE=InnoDB DEFAULT CHARSET=utf8;