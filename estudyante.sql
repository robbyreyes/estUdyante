-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 01:06 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `book` (
  `book_ID` varchar(10) NOT NULL,
  `book_name` varchar(10) NOT NULL,
  `book_note` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_tokens`
--

CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mate`
--

CREATE TABLE `mate` (
  `id` int(11) NOT NULL,
  `mate_ID` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `note_ID` varchar(10) NOT NULL,
  `note_name` varchar(10) NOT NULL,
  `note_desc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` varchar(150) NOT NULL,
  `postdate` varchar(19) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `postdate`, `user_id`) VALUES
(29, 'aaba', '2017-10-07 23:51:39', 19),
(30, 'aa', '2017-10-08 23:49:43', 15),
(35, 'bb', '2017-10-09 00:06:05', 15),
(36, 'aas', '2017-10-09 00:06:09', 15),
(37, 'a', '2017-10-09 00:30:00', 15),
(38, 'aaa', '2017-10-09 00:30:09', 15),
(39, 'nn', '2017-10-09 00:30:57', 15),
(40, 'gg', '2017-10-09 00:58:21', 15),
(41, '122223', '2017-10-13 12:38:10', 15),
(42, '122223', '2017-10-13 12:38:10', 15),
(43, 'robby', '2017-10-13 13:33:19', 18),
(44, 'Edu ', '2017-10-13 14:43:55', 15),
(45, 'Edu1', '2017-10-13 14:44:19', 18),
(46, 'aab', '2017-10-13 19:16:53', 0),
(47, 'wwee', '2017-10-13 19:42:56', 18),
(48, '112233', '2017-10-13 19:43:28', 15),
(49, 'hi besh', '2017-10-13 20:45:18', 15);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_ID` varchar(10) NOT NULL,
  `school` varchar(64) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `password`, `firstname`, `lastname`, `email`) VALUES
(15, '$2y$10$8eBZ9Y8Qn7xB2btJBP.P7eHZHTOpGoWgIyaJuVPq.4kQ3TyPNN79.', 'Robby', 'Reyes', '111@yahoo.com'),
(16, '$2y$10$pQfXNipGQtT3oUfgXxDZ6eAl0RLkq6c9vl3Fu2fyT8T9KfpWUzJCm', 'Robby', 'Reyes', '3@yahoo.com'),
(17, '$2y$10$.CvqdfcErQekxIeUlMtd0OyK7VuW9jInUTVu0nr/sikuqRM4UhEFK', 'AA', 'BB', '223@yahoo.com'),
(18, '$2y$10$EbtOL4KUWdh5N1Ev3w.nXO805FIsTqkAcYsyZA3zURUCrjZJRkQw6', 'Eternal', 'Envy', 'ee@yahoo.com'),
(19, '$2y$10$DDPk5g8JEJ064ltSJtXCy./HZhh447RjQF35jN9iOJ2pNYgN.J1RW', 'Maybe Next', 'Time', '122@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_ID`);

--
-- Indexes for table `login_tokens`
--
ALTER TABLE `login_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `mate`
--
ALTER TABLE `mate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`note_ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_ID`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mate`
--
ALTER TABLE `mate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
