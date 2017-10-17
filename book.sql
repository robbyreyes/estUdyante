-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2017 at 03:59 AM
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
  `book_author` varchar(1000) NOT NULL,
  `user_id` int(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_ID`, `book_desc`, `book_name`, `book_author`, `user_id`, `image`) VALUES
(126, 'When Robert Langdon wakes up in an Italian hospital with amnesia, he teams up with Dr. Sienna Brooks, and together they must race across Europe against the clock to foil a deadly global plot.', 'Inferno', 'Dan Brown', 0, './assets/images/2908259e4f1846c7d6.jpg'),
(127, 'Peter Pan (also known as the Boy Who Wouldn\'t Grow Up or Peter and Wendy) is the story of a mischievous little boy who can fly, and his adventures on the island of Neverland with Wendy Darling and her brothers, the fairy Tinker Bell, the Lost Boys, the Indian princess Tiger Lily, and the pirate Captain Hook.', 'Peter Pan', 'J. M. Barrie', 0, './assets/images/2988559e4f54e6b5fe.jpg'),
(129, 'A murder in Paris\' Louvre Museum and cryptic clues in some of Leonardo da Vinci\'s most famous paintings lead to the discovery of a religious mystery. For 2,000 years a secret society closely guards information that -- should it come to light -- could rock the very foundations of Christianity.', 'Da Vinci Code', 'Dan Brown', 0, './assets/images/3141059e4f8b7e7228.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
