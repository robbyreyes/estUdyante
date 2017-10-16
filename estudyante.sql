-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 08:50 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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
  `book_ID` int(10) NOT NULL,
  `book_desc` varchar(1000) NOT NULL,
  `book_name` varchar(1000) NOT NULL,
  `book_author` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_ID`, `book_desc`, `book_name`, `book_author`) VALUES
(4, 'This is only an example. hope this is working', 'Kafka hahahahaha', 'murakami '),
(7, 'Paano nga ba mag mahal? Palagi bang nasasaktan?', 'Hindi ba to napapalitan?', 'Di ko kilala e');

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
  `note_ID` int(10) NOT NULL,
  `note_name` varchar(100) NOT NULL,
  `note_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`note_ID`, `note_name`, `note_desc`) VALUES
(1, 'Github basic instructions ', 'This is a basic github instruction'),
(2, 'Physics Lecture', 'Basic physic lectures'),
(3, 'Basic functions of php', 'Everything about php basic functions');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` varchar(150) NOT NULL,
  `postdate` varchar(19) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mate`
--
ALTER TABLE `mate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `note_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
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
