-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2017 at 09:56 AM
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
(2, 'book1', 'as', 'asd', './assets/images/nobook.png'),
(29, 'book2', 'asd', 'asd', './assets/images/nobook.png'),
(30, 'book3', 'asd', 'asd', './assets/images/2717059eaaff51290b.png'),
(31, 'book4', 'asd', 'aSD', './assets/images/no_image.png'),
(32, 'book5', 'asd', 'asd', './assets/images/2358059eab3adbe6cf.jpg'),
(33, 'book6', 'asd', 'asd', './assets/images/2870959eab3bbbe758.jpg'),
(34, 'book7', 'asd', 'asd', './assets/images/1381859eab3cdc02cb.jpg'),
(35, 'book8', 'asd', 'asd', './assets/images/969459eab3df80c70.jpg');

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
(177, 15, 127);

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
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notif_id` int(11) NOT NULL,
  `notif_subject` varchar(250) NOT NULL,
  `notif_text` text NOT NULL,
  `notif_status` int(1) NOT NULL,
  `user_id` int(100) NOT NULL,
  `notif_user` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(113, 18, 'Felix Barredo', '1', '2017-10-21 02:50:28'),
(114, 18, 'Felix Barredo', '2', '2017-10-21 02:50:49'),
(115, 18, 'Felix Barredo', '3', '2017-10-21 02:50:51'),
(116, 18, 'Felix Barredo', '4', '2017-10-21 02:50:53'),
(117, 18, 'Felix Barredo', '5', '2017-10-21 02:50:55'),
(118, 18, 'Felix Barredo', '6', '2017-10-21 02:50:56'),
(119, 18, 'Felix Barredo', '7', '2017-10-21 02:50:57'),
(120, 18, 'Felix Barredo', '8', '2017-10-21 02:50:59'),
(121, 18, 'Felix Barredo', '9', '2017-10-21 02:51:00'),
(127, 15, 'Robby Reyes', 'amazing', '2017-10-21 13:48:53'),
(128, 18, 'Felix Barredo', 'amazeballs', '2017-10-21 15:44:41');


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
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notif_id`);

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
  MODIFY `book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `like_table`
--
ALTER TABLE `like_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `mate`
--
ALTER TABLE `mate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `note_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
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
