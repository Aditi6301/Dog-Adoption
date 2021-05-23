-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 12:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doggo_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoptionpup`
--

CREATE TABLE `adoptionpup` (
  `user_id` int(11) DEFAULT NULL,
  `pup_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `age` varchar(40) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `breed` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adoptionpup`
--

INSERT INTO `adoptionpup` (`user_id`, `pup_id`, `name`, `age`, `city`, `description`, `image`, `breed`) VALUES
(1, 1, 'Dexter', '9', 'Nashik', 'Dogs (Canis lupus familiaris) are domesticated mammals, not natural wild animals. They were original', 'dog51.jpg', 'lab'),
(1, 2, 'Rex', '1', 'Pune', 'Dogs (Canis lupus familiaris) are domesticated mammals, not natural wild animals. They were original', 'indie.jpg', 'indie'),
(1, 3, 'Rio', '1', 'Nashik', 'Dogs (Canis lupus familiaris) are domesticated mammals, not natural wild animals. They were original', 'dog3.jpg', 'indie'),
(1, 4, 'Rio', '1', 'Nashik', 'Dogs (Canis lupus familiaris) are domesticated mammals, not natural wild animals. They were original', 'dog31.jpg', 'indie');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`) VALUES
(1, 'Shreya', 'Kedia', 'shreyakedia149@gmail.com', '$2y$10$jO9zUB7yDZFVQUsqMUIuHeeBpfkByM8SdIENCmgahiFAEYqeSln6W', 11111111),
(2, 'Radha', 'Mujumdar', 'radhamujumdar@gmail.com', '$2y$10$KQU7mA2sNjYb/yRj4iNcxOfEpaUJvPd6rxCgkoHM8NmT2mDno6YBe', 7420827617);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoptionpup`
--
ALTER TABLE `adoptionpup`
  ADD PRIMARY KEY (`pup_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoptionpup`
--
ALTER TABLE `adoptionpup`
  MODIFY `pup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoptionpup`
--
ALTER TABLE `adoptionpup`
  ADD CONSTRAINT `adoptionpup_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
