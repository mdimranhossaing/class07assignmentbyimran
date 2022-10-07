-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 09, 2021 at 09:01 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `incoming_msg_id` int(255) DEFAULT NULL,
  `outgoing_msg_id` varchar(255) DEFAULT NULL,
  `msg` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `fname`, `lname`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(588, 'Md Imran', 'Hossain', 923791242, '923791242', 'ooo'),
(589, 'Md Imran', 'Hossain', 540592207, '923791242', 'All'),
(590, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'ami ke'),
(591, 'Md Imran', 'Hossain', 540592207, '923791242', 'tui jei hok ami kintu imran'),
(592, 'Tarikul Mawla', 'Sujan', 923791242, '227286839', 'Ekkhon thik ase'),
(593, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'tumi aisu'),
(594, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'h'),
(595, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'f'),
(596, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'g'),
(597, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'f'),
(598, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'g'),
(599, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'h'),
(600, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'fsdafasd'),
(601, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'ff'),
(602, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'g'),
(603, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'g'),
(604, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'f'),
(605, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'fadsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss'),
(606, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'f'),
(607, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'f'),
(608, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'f'),
(609, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'f'),
(610, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'f'),
(611, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'g'),
(612, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'g'),
(613, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'f'),
(614, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'g'),
(615, 'Kabir Hossain', 'Akash', 227286839, '540592207', 'f'),
(616, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'Hi'),
(617, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(618, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(619, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(620, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'ff'),
(621, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'fff'),
(622, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(623, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(624, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(625, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'ffffff'),
(626, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(627, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(628, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(629, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(630, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(631, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'g'),
(632, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(633, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'g'),
(634, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'fffffff'),
(635, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(636, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'ggf'),
(637, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'gsdfgfsd'),
(638, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'gsdfg'),
(639, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'gsdfg'),
(640, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'g'),
(641, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'fdas'),
(642, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'fasd'),
(643, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(644, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(645, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'v'),
(646, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'd'),
(647, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'g'),
(648, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'g'),
(649, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'g'),
(650, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'g'),
(651, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'rrrr'),
(652, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'g'),
(653, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'g'),
(654, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(655, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'g'),
(656, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'g'),
(657, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'hgdhdgf'),
(658, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'hdgdfg'),
(659, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'ttttttttttttttttttttttttt'),
(660, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'hhhhhhhhhhh'),
(661, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'fffff'),
(662, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'f'),
(663, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'fadsfads'),
(664, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'fadsf'),
(665, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'fasdfsd'),
(666, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'fadf'),
(667, NULL, NULL, 227286839, '540592207', 'g'),
(668, NULL, NULL, 540592207, '923791242', 'hi'),
(669, NULL, NULL, 923791242, '540592207', 'Hi'),
(670, NULL, NULL, 923791242, '540592207', 'okay'),
(671, NULL, NULL, 923791242, '540592207', 'Thisk ase'),
(672, NULL, NULL, 923791242, '540592207', 'jfkasdjf'),
(673, NULL, NULL, 923791242, '540592207', 'fkasdjfla'),
(674, NULL, NULL, 923791242, '540592207', 'fkladsf;la'),
(675, NULL, NULL, 923791242, '540592207', 'fkasdjf'),
(676, NULL, NULL, 923791242, '540592207', 'kfajsdf'),
(677, NULL, NULL, 923791242, '540592207', 'kjfsadk'),
(678, NULL, NULL, 923791242, '540592207', 'jfdaskjf'),
(679, NULL, NULL, 923791242, '540592207', 'jfffffffffffffffffffffffff'),
(680, NULL, NULL, 540592207, '923791242', 'eeeeeeeeeeeeeeeeeeeeeeee'),
(681, NULL, NULL, 540592207, '923791242', 'eeeeeeeeeeeeeeeeeeeeeee'),
(682, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'gsdfg'),
(683, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'e'),
(684, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'Assss'),
(685, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'Thik ase'),
(686, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'ki bolen'),
(687, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'ekhon Thik ase'),
(688, 'Kabir Hossain', 'Akash', 540592207, '540592207', 'Asssa'),
(689, 'Kabir Hossain', 'Akash', 923791242, '540592207', 'eeeeeee'),
(690, NULL, NULL, 923791242, '540592207', 'e'),
(691, 'sagol', 'pagol', 540592207, '1017544909', 'ki koro'),
(692, 'sagol', 'pagol', 540592207, '1017544909', 'Hi'),
(693, 'sagol', 'pagol', 540592207, '1017544909', 'ki koren'),
(694, 'sagol', 'pagol', 540592207, '1017544909', 'ami asi'),
(695, 'sagol', 'pagol', 540592207, '1017544909', 'tumi ki koro'),
(696, 'sagol', 'pagol', 540592207, '1017544909', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `img` varchar(400) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(53, 540592207, 'Kabir Hossain', 'Akash', 'kobirhossainakash@gmail.com', '015346458906f43c3ad7b8d89ff53ce8', NULL, 'Offline now'),
(54, 923791242, 'Md Imran', 'Hossain', 'mdimranhossaingd@gmail.com', '8874a808e3c5c14699067558ed37d59d', NULL, 'Active now'),
(55, 227286839, 'Tarikul Mawla', 'Sujan', 'sujan@gmail.com', '279f62bc750e085b7e52c143f6c21989', NULL, 'Active now'),
(56, 1017544909, 'sagol', 'pagol', 'sagol@pagol.com', '81dc9bdb52d04dc20036dbd8313ed055', '1623264116IMG_20151118_091416.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

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
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=697;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
