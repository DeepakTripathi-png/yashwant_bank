-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 08:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_project_sponsors`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `first_name` varchar(35) DEFAULT NULL,
  `last_name` varchar(35) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `username` text,
  `password` varchar(32) DEFAULT NULL,
  `confirm_password` varchar(35) DEFAULT NULL,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y',
  `inserted_by` bigint(20) unsigned NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) unsigned NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  KEY `role_id_fk` (`role_id`),
  KEY `role_id` (`role_id`),
  KEY `role_id_2` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `role_id`, `first_name`, `last_name`, `email`, `mobile`, `username`, `password`, `confirm_password`, `display`, `in_use`, `inserted_by`, `inserted_on`, `modified_by`, `modified_on`) VALUES
(1, 1, 'abcd', 'abcdhh', 'abcd@gmail.com', '1234567890', 'admin', '123456', '123456', 'Y', 'Y', 0, '0000-00-00 00:00:00', 1, '2020-03-13 09:35:40'),
(2, 3, 'komal', 'gawali', 'daf@gmail.com', '1234567890', 'admin', 'Itwizz@123456', 'Itwizz@123456', 'Y', 'Y', 0, '0000-00-00 00:00:00', 1, '2020-03-27 09:16:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
