-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2017 at 11:17 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estudyante`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `book_ID` int(10) NOT NULL AUTO_INCREMENT,
  `book_desc` varchar(1000) NOT NULL,
  `book_name` varchar(1000) NOT NULL,
  `book_author` varchar(1000) NOT NULL,
  PRIMARY KEY (`book_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_ID`, `book_desc`, `book_name`, `book_author`) VALUES
(4, 'This is only an example. hope this is working', 'Kafka hahahahaha', 'murakami '),
(5, 'hehe try ', 'Kafka hahahahaha', 'Mama');

-- --------------------------------------------------------

--
-- Table structure for table `login_tokens`
--

DROP TABLE IF EXISTS `login_tokens`;
CREATE TABLE IF NOT EXISTS `login_tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mate`
--

DROP TABLE IF EXISTS `mate`;
CREATE TABLE IF NOT EXISTS `mate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mate_ID` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `note_ID` varchar(10) NOT NULL,
  `note_name` varchar(10) NOT NULL,
  `note_desc` varchar(10) NOT NULL,
  PRIMARY KEY (`note_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` varchar(150) NOT NULL,
  `postdate` varchar(19) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `postdate`, `user_id`, `user_name`) VALUES
(29, 'aaba', '2017-10-07 23:51:39', 19, 'Maybe Next Time'),
(30, 'aa', '2017-10-08 23:49:43', 15, 'Robby Reyes'),
(35, 'bb', '2017-10-09 00:06:05', 15, 'Robby Reyes'),
(36, 'aas', '2017-10-09 00:06:09', 15, 'Robby Reyes'),
(37, 'a', '2017-10-09 00:30:00', 15, 'Robby Reyes'),
(38, 'aaa', '2017-10-09 00:30:09', 15, 'Robby Reyes'),
(39, 'nn', '2017-10-09 00:30:57', 15, 'Robby Reyes'),
(40, 'gg', '2017-10-09 00:58:21', 15, 'Robby Reyes'),
(41, '122223', '2017-10-13 12:38:10', 15, 'Robby Reyes'),
(42, '122223', '2017-10-13 12:38:10', 15, 'Robby Reyes'),
(43, 'robby', '2017-10-13 13:33:19', 18, 'Eternal Envy'),
(45, 'Edu1', '2017-10-13 14:44:19', 18, 'Eternal Envy'),
(47, 'wwee', '2017-10-13 19:42:56', 18, 'Eternal Envy'),
(51, 'ha', '2017-10-14 13:46:56', 15, ''),
(52, 'he', '2017-10-14 13:58:55', 15, '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `profile_ID` varchar(10) NOT NULL,
  `school` varchar(64) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  PRIMARY KEY (`profile_ID`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

DROP TABLE IF EXISTS `user1`;
CREATE TABLE IF NOT EXISTS `user1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `password`, `firstname`, `lastname`, `email`) VALUES
(15, '$2y$10$8eBZ9Y8Qn7xB2btJBP.P7eHZHTOpGoWgIyaJuVPq.4kQ3TyPNN79.', 'Robby', 'Reyes', '111@yahoo.com'),
(18, '$2y$10$EbtOL4KUWdh5N1Ev3w.nXO805FIsTqkAcYsyZA3zURUCrjZJRkQw6', 'Eternal', 'Envy', 'ee@yahoo.com'),
(19, '$2y$10$DDPk5g8JEJ064ltSJtXCy./HZhh447RjQF35jN9iOJ2pNYgN.J1RW', 'Maybe Next', 'Time', '122@yahoo.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_tokens`
--
ALTER TABLE `login_tokens`
  ADD CONSTRAINT `login_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user1` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user1` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
