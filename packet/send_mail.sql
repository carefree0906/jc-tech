-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2016 年 08 月 16 日 14:26
-- 伺服器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `test`
--

-- --------------------------------------------------------

--
-- 表的結構 `send_mail`
--

CREATE TABLE IF NOT EXISTS `send_mail` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '收件代碼',
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '寄件人名稱',
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '寄件人信箱',
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '寄件主旨',
  `message` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '寄件內容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
