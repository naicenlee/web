-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 01 月 28 日 11:46
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `webos`
--
CREATE DATABASE IF NOT EXISTS `webos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `webos`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `userpwd` char(32) NOT NULL,
  `loadtime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `userpwd`, `loadtime`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2017/01/01');

-- --------------------------------------------------------

--
-- 表的结构 `fun`
--

CREATE TABLE IF NOT EXISTS `fun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `ico` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `fun`
--

INSERT INTO `fun` (`id`, `name`, `url`, `ico`) VALUES
(14, '日记', 'http://localhost/webos/view/front/list.php', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `notepad`
--

CREATE TABLE IF NOT EXISTS `notepad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `times` varchar(50) NOT NULL,
  `lid` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `notepad`
--

INSERT INTO `notepad` (`id`, `title`, `content`, `uname`, `status`, `times`, `lid`) VALUES
(1, '35543', '54351', 'fdf', '1', '2017年01月28日', ''),
(2, 'etet', 'rett', '78', '1', '2017年01月28日', ''),
(3, '0998', 'oiu', 'nnn', '1', '2017年01月28日', '');

-- --------------------------------------------------------

--
-- 表的结构 `webos_conf`
--

CREATE TABLE IF NOT EXISTS `webos_conf` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(255) NOT NULL,
  `descc` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `style` varchar(255) NOT NULL,
  `backimg` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `webos_conf`
--

INSERT INTO `webos_conf` (`id`, `keywords`, `descc`, `logo`, `status`, `style`, `backimg`, `title`) VALUES
(1, '李伟的个人博客', '让学习成为一种习惯', '--', '1', 'red', '--', '李伟的个人博客｜www.laveyem.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
