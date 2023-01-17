-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 12:52 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeraldb_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum_messages`
--

CREATE TABLE `forum_messages` (
  `forum_message_id` int(11) NOT NULL,
  `forum_message_content` varchar(300) NOT NULL,
  `forum_message_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `User_id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_messages`
--

INSERT INTO `forum_messages` (`forum_message_id`, `forum_message_content`, `forum_message_datetime`, `User_id`, `forum_id`) VALUES
(1, 'ma montre marche pas', '2022-12-28 17:28:00', 4, 1),
(2, 'HIII I\'m searching my golf freinds', '2023-01-03 17:28:00', 1, 2),
(3, 'Je n\'ai pas de reseaux. j\'aimerais bien quelqu\'un m\'aider', '2023-01-05 17:28:00', 5, 1),
(4, 'ma montre marche pas', '2023-01-07 17:28:00', 5, 1),
(5, 'J\'ai trovué un bon resto. qui veut y aller avec moi', '2023-01-11 19:52:00', 1, 2),
(6, 'J\'ai trovué un bon resto. qui veut y aller avec moi', '2023-01-12 05:28:00', 6, 2),
(7, 'HIII I\'m searching my golf freinds', '2023-01-14 17:28:00', 4, 2),
(8, 'Je n\'ai pas de reseaux. j\'aimerais bien quelqu\'un m\'aider', '2023-01-15 17:28:00', 1, 1),
(9, 'ma montre marche trop bien merci beaucoup. j\'aime trop cette montre', '2023-01-17 23:13:00', 5, 1),
(10, 'ma montre marche trop bien merci beaucoup. j\'aime trop cette montre', '2023-01-18 00:25:00', 1, 1),
(11, 'hiii ma montre marche pas du tout', '2023-01-18 17:28:00', 1, 1),
(12, 'hiii ma montre marche pas du tout', '2023-01-19 17:28:00', 4, 1),
(13, 'find some food friend', '2023-01-25 17:28:00', 6, 2),
(14, 'find some food friend', '2023-02-05 17:28:00', 5, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum_messages`
--
ALTER TABLE `forum_messages`
  ADD PRIMARY KEY (`forum_message_id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `forum_id` (`forum_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum_messages`
--
ALTER TABLE `forum_messages`
  MODIFY `forum_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum_messages`
--
ALTER TABLE `forum_messages`
  ADD CONSTRAINT `forum_messages_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`),
  ADD CONSTRAINT `forum_messages_ibfk_2` FOREIGN KEY (`forum_id`) REFERENCES `forum` (`forum_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
