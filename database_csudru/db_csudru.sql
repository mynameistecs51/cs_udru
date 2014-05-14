-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_csudru`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_user` char(20) NOT NULL,
  `teacher_pwd` char(20) NOT NULL,
  `teacher_preName` char(20) NOT NULL,
  `teacher_name` char(50) NOT NULL,
  `teacher_number` int(1) NOT NULL,
  `teacher_link` char(255) NOT NULL,
  `teacher_pict` char(100) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- dump ตาราง `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_user`, `teacher_pwd`, `teacher_preName`, `teacher_name`, `teacher_number`, `teacher_link`, `teacher_pict`) VALUES
(49, 'dd', 'dd', 'dd', 'dd', 1, 'http://localhost/cs_udru/index.php/ctl_main/add_teacher', '2014-05-041538');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `teacher_news`
--

CREATE TABLE IF NOT EXISTS `teacher_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_head` char(100) NOT NULL,
  `news_container` text NOT NULL,
  `news_datePost` datetime NOT NULL,
  `news_peoplePost` varchar(50) NOT NULL,
  `news_peoplePost_id` int(11) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- dump ตาราง `teacher_news`
--

INSERT INTO `teacher_news` (`news_id`, `news_head`, `news_container`, `news_datePost`, `news_peoplePost`, `news_peoplePost_id`) VALUES
(33, 'dd', 'dd', '2014-05-14 08:18:47', 'dd', 49),
(34, 'sssssssssssssssss', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '2014-05-15 00:00:36', 'dd', 49);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
