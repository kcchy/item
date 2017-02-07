-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2012 at 03:45 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `items`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE IF NOT EXISTS `borrow` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `identifier` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `num` int(4) NOT NULL,
  `user` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `btime` datetime NOT NULL,
  `note` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `borrow`
--



-- --------------------------------------------------------

--
-- Table structure for table `borrow_log`
--

CREATE TABLE IF NOT EXISTS `borrow_log` (
  `blid` int(4) NOT NULL AUTO_INCREMENT,
  `bid` int(4) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `identifier` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `num` int(4) NOT NULL,
  `user` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `borrow_time` datetime NOT NULL,
  `return_time` datetime NOT NULL,
  `return_user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`blid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=88 ;

--
-- Dumping data for table `borrow_log`
--


-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `iid` int(6) NOT NULL AUTO_INCREMENT,
  `img` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `num` int(6) NOT NULL,
  `totalnum` int(4) NOT NULL,
  PRIMARY KEY (`iid`),
  UNIQUE KEY `img` (`img`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=47 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`iid`, `img`, `name`, `description`, `num`, `totalnum`) VALUES
(1, 'note.png', '笔记本', '联想Thinkpad、Lenovo|苹果Mac', 7, 7),
(2, 'patchboard.png', '插线板', '3、5、6孔插线板', 60, 60),
(3, 'phone.png', '电话机', '高科电话机', 200, 20),
(4, 'projector.png', '投影仪', '三洋投影仪', 7, 7),
(5, 'switch.png', '交换机', 'Tp-link8、D-link24口交换机', 6, 6),
(6, 'disk.png', '移动硬盘', 'WD500G硬盘', 1, 1),
(7, 'oppod.png', '录音笔', '欧普达录音笔，可以连接电话进行录音', 2, 2),
(8, 'ermai.png', '耳麦', '罗技立体声耳机麦克风', 6, 6),
(9, 'camera.png', '摄像头', '蓝色妖姬-S1USB摄像头', 1, 1),
(34, 'USBalt.png', 'U盘', '金士顿2G-U盘', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `iid` int(4) NOT NULL,
  `type` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `iid`, `type`) VALUES
(1, 1, '联想'),
(2, 1, '苹果'),
(3, 2, '3孔'),
(4, 2, '5孔'),
(5, 2, '6孔'),
(6, 3, '高科'),
(7, 4, '三洋'),
(8, 5, 'TP-Link8口'),
(9, 5, 'D-Link24口'),
(10, 6, '西部数据'),
(11, 7, '欧普达OPPOD'),
(12, 8, '罗技Logitech'),
(14, 10, '2G'),
(15, 10, '4G'),
(18, 9, '蓝色妖姬-S1'),
(19, 34, '2G'),
(20, 5, 'AOLYNK8口');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=157 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
('', 'admin', '', 'admin'),

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
