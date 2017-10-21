-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2017 at 07:00 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

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
  `book_ID` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_desc` varchar(500) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT './assets/images/nobook.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_ID`, `book_name`, `book_desc`, `book_author`, `image`) VALUES
(29, 'asd', 'asd', 'asd', './assets/images/no_image.png');

-- --------------------------------------------------------

--
-- Table structure for table `like_table`
--

CREATE TABLE `like_table` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_table`
--

INSERT INTO `like_table` (`id`, `user_id`, `post_id`) VALUES
(68, 18, 85);

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

--
-- Dumping data for table `mate`
--

INSERT INTO `mate` (`id`, `mate_ID`, `user_id`) VALUES
(4, 15, 16),
(17, 16, 18);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `note_ID` int(11) NOT NULL,
  `note_name` varchar(10) NOT NULL,
  `note_desc` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`note_ID`, `note_name`, `note_desc`, `file`) VALUES
(1, 'asdasdas', 'asdasdasda', './assets/documents/2008959e72e8de7361.docx'),
(2, 'IT3B', 'Network Assignment', './assets/documents/1009659e7325c1df56.docx'),
(3, 'zxc', 'zxc', './assets/documents/1019859e732d263cdf.docx');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `postdate` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `user_name`, `body`, `postdate`) VALUES
(27, 16, 'Patrick Panganiban', 'post ni 16', '2017-10-07 16:12:03'),
(30, 15, 'Robby Reyes', 'post ni 15 1', '2017-10-07 16:49:59'),
(32, 15, 'Robby Reyes', 'post ni 15 2', '2017-10-07 17:51:38'),
(33, 15, 'Robby Reyes', 'post ni 15 3', '2017-10-10 12:02:30'),
(55, 15, 'Robby Reyes', 'hi', '2017-10-16 23:12:08'),
(57, 15, 'Robby Reyes', 'test', '2017-10-16 23:18:43'),
(84, 18, 'Felix Barredo', 'Ang hirap maging pogi lalo na pag kamukha mo si Johnny Sins. All around sa bahay <3', '2017-10-19 00:24:31'),
(85, 18, 'Felix Barredo', 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest', '2017-10-19 00:50:20'),
(91, 18, 'Felix Barredo', 'asdasdsa', '2017-10-20 01:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_ID` varchar(10) NOT NULL,
  `note_ID` varchar(10) NOT NULL,
  `book_ID` varchar(10) NOT NULL,
  `user_ID` varchar(10) NOT NULL,
  `friends_count` varchar(10) NOT NULL,
  `school` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `password`, `firstname`, `lastname`, `email`, `avatar`) VALUES
(15, '$2y$10$8eBZ9Y8Qn7xB2btJBP.P7eHZHTOpGoWgIyaJuVPq.4kQ3TyPNN79.', 'Robby', 'Reyes', '111@yahoo.com', './assets/images/no_image.png\r\n'),
(16, '$2y$10$pQfXNipGQtT3oUfgXxDZ6eAl0RLkq6c9vl3Fu2fyT8T9KfpWUzJCm', 'Patrick', 'Panganiban', '3@yahoo.com', './assets/images/pat.png\r\n'),
(18, '$2y$10$wTijn8DVhaSA6PluZCMYvugF/CHgRCcD/K80RqjXAAOQehiuZgJwC', 'Felix', 'Barredo', 'barredo.simon@gmail.com', './assets/images/koala.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_ID`);

--
-- Indexes for table `like_table`
--
ALTER TABLE `like_table`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`profile_ID`);

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
  MODIFY `book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `like_table`
--
ALTER TABLE `like_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `mate`
--
ALTER TABLE `mate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `note_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_tokens`
--
ALTER TABLE `login_tokens`
  ADD CONSTRAINT `login_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user1` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
