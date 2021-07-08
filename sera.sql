-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-02-05 10:18:58
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `sera`
--
CREATE DATABASE IF NOT EXISTS `sera` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `sera`;

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL COMMENT '流水號',
  `username` text COLLATE utf8_unicode_ci NOT NULL COMMENT '帳號',
  `pwd` text COLLATE utf8_unicode_ci NOT NULL COMMENT '密碼',
  `phone` text COLLATE utf8_unicode_ci NOT NULL COMMENT '電話',
  `address` text COLLATE utf8_unicode_ci NOT NULL COMMENT '地址',
  `other` text COLLATE utf8_unicode_ci NOT NULL COMMENT '其他'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `username`, `pwd`, `phone`, `address`, `other`) VALUES
(2, 'bbb', '123', '095555', 'bbb', 'bbb'),
(4, '456', '456', '456', '456', '456'),
(5, '456789', '789', '789', '789', '789'),
(6, '888', '88', '88', '88', '88'),
(7, '555', '555', '555', '555', '555'),
(8, 'a123', '123', '123', '123', '123'),
(9, '777', '77', '777', '777', '777'),
(10, '999', '999', '999', '999', '999'),
(11, '333', '333', '333', '333', '333'),
(12, '666', '666', '666', '666', '666');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
