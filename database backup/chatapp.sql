-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 06:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `user_id`, `receiver_id`, `message`) VALUES
(101, 1, 2, 'Hi'),
(102, 13, 2, 'Hello'),
(103, 12, 1, 'How are you?'),
(104, 12, 1, 'I am fine and you?'),
(105, 12, 1, 'Who are you'),
(106, 1, 1, 'keu asen'),
(107, 12, 1, 'Ami asi'),
(108, 12, 1, 'Tumi ke'),
(109, 12, 1, 'Ami Imran'),
(110, 1, 1, 'Accha valo theko'),
(111, 12, 1, 'Ok'),
(112, 12, 1, 'Accha'),
(113, 12, 1, 'gggg'),
(114, 12, 1, 'ddddddd'),
(115, 12, 1, 'fddddddd'),
(116, 12, 1, 'ffffffff'),
(117, 12, 1, 'fadssssss'),
(118, 1, 1, 'a'),
(119, 1, 1, 'ffffffff'),
(120, 1, 1, 'tumi'),
(121, 12, 1, 'Na tum'),
(122, 12, 1, 'fjakdfjaads'),
(123, 1, 1, 'fadfad'),
(124, 12, 1, 'fffff'),
(125, 12, 2, 'ffffff');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `name`, `email`, `password`) VALUES
(1, 19230, 'Md Imran Hossain', 'mdimranhossaingd@gmail.com', '9056ee5944e27616c58c714b9fce37e7'),
(2, 81773, 'Md Shakil Khan', 'shakil@gmail.com', '9056ee5944e27616c58c714b9fce37e7'),
(3, 62581, 'Imran', 'mdimran@gmail.com', '9056ee5944e27616c58c714b9fce37e7'),
(4, 25344, 'Imran', 'mdimra2@gmail.com', '9056ee5944e27616c58c714b9fce37e7'),
(5, 54746, 'Imran', 'mdimran3@gmail.com', '9056ee5944e27616c58c714b9fce37e7'),
(6, 81147, 'Md Imran Hossain', 'mdimranhossaingd4@gmail.com', '9056ee5944e27616c58c714b9fce37e7'),
(7, 58900, 'Md Imran Hossain', 'mdimranhossaingd5@gmail.com', '9056ee5944e27616c58c714b9fce37e7'),
(8, 27400, 'Md Imran Hossain', 'mdimranhossaingd6@gmail.com', '9056ee5944e27616c58c714b9fce37e7'),
(9, 24304, 'jibon', 'jibon@gmail.com', '411a7dca8b08bc263036cd3558f3fa17'),
(10, 54169, 'dddddddd', 'mdimranhossaingd2@gmail.com', '9056ee5944e27616c58c714b9fce37e7'),
(11, 44919, 'Pijon', 'pijon@pijon.com', '9056ee5944e27616c58c714b9fce37e7'),
(12, 66229, 'konok', 'konok@gmail.com', '9056ee5944e27616c58c714b9fce37e7'),
(13, 75756, 'md imran seo', 'mdimranhossainseo@gmail.com', '9056ee5944e27616c58c714b9fce37e7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
