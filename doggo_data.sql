-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 08:46 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
(2, 1, 'Leo', '2', 'Pune', 'cutie', 'dog44.jpg', 'Lab'),
(3, 2, 'Rex', '5', 'NASHIK', 'HANDSOME', 'dog2.jpg', 'Lab'),
(1, 3, 'snow', '3', 'mumbai', 'hmmmm', 'indie1.jpg', 'indie'),
(4, 4, 'casper', '6', 'sdddd', 'gyrryy', 'dog32.jpg', 'sdds');

-- --------------------------------------------------------

--
-- Table structure for table `daycare`
--

CREATE TABLE `daycare` (
  `daycare_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone_no` bigint(20) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daycare`
--

INSERT INTO `daycare` (`daycare_id`, `user_id`, `name`, `description`, `address`, `email`, `phone_no`, `image`) VALUES
(1, 1, 'Regal Pets Centre', 'The ultimate pet place', 'nashik', 'nidhiabhyankar1@gmail.com', 9999776765, 'daycare16.jpg'),
(2, 1, 'Pets Care Centre & Pet Resort', ' One-stop destination servicing customers both local and from other parts of Nashik.', 'Shop 18, Samrat Nucleus, Kathe Galli to Mumbai Naka Link Roa', 'nidhiabhyankar@gmail.com', 9878678564, 'daycare2.jpg'),
(3, 1, 'Pets Mania', 'We believe in keeping your pets happawy.', 'Shop No 2 Gajanan Sankul, Gangapur Road, Nashik - 422002, Ne', 'viditbapat@gmail.com', 9878675645, 'daycare3.jpg');

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
(2, 'Radha', 'Mujumdar', 'radhamujumdar@gmail.com', '$2y$10$KQU7mA2sNjYb/yRj4iNcxOfEpaUJvPd6rxCgkoHM8NmT2mDno6YBe', 7420827617),
(3, 'Aditi', 'Joshi', 'aditi6301@gmail.com', '$2y$10$9DNH7CmLmi15EeroVSfuC.KFgFwWxcI5N/nnv/zaSTGGxJJrnH/4O', 93838393939),
(4, 'Nidhi', 'Abhyankar', 'nidhiabhyankar@gmail.com', '$2y$10$pmgmLfsgvolWo/xVkskOvOnN3V6DOZuazQqTpnCkxxXIN6xw6l6.i', 44444444444);

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
-- Indexes for table `daycare`
--
ALTER TABLE `daycare`
  ADD PRIMARY KEY (`daycare_id`),
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
-- AUTO_INCREMENT for table `daycare`
--
ALTER TABLE `daycare`
  MODIFY `daycare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoptionpup`
--
ALTER TABLE `adoptionpup`
  ADD CONSTRAINT `adoptionpup_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `daycare`
--
ALTER TABLE `daycare`
  ADD CONSTRAINT `daycare_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
