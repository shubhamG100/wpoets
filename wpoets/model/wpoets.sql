-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 09:26 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpoets`
--

-- --------------------------------------------------------

--
-- Table structure for table `wpoets`
--

CREATE TABLE `wpoets` (
  `id` int(10) NOT NULL,
  `button_id` int(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wpoets`
--

INSERT INTO `wpoets` (`id`, `button_id`, `description`, `image`) VALUES
(1, 1, 'Usability enhancement and Training for transaction portals for customers.', 'DL_Learning.jpg'),
(2, 1, 'Learner Mobile is a mobile training app for any size company that needs to push training and microlearning content to a distributed workforce at ', 'learning2.png'),
(3, 1, 'Courseplay is the scalable learning technology solution for enterprises to deliver delightful learning content, engage hard-working employees', 'learning3.png'),
(4, 2, 'the application of scientific knowledge for practical purposes, especially in industry.', 'tech1.jpg'),
(5, 2, 'he advancement of technology has helped to advance the ways in which we communicate with each other. One way technology has advanced communication is through the birth of electronic communication devices. Cell phones.', 'tech2.jpg'),
(6, 2, '  The impact of technology in communication to a business: Today, every business uses technology in its own way to reach the media and targeted consumers. ', 'tech3.jpg'),
(7, 3, 'he digital transformation management has been much talked about in companies these last ten years. Beyond the technical aspect, changes in habits and new skills to acquire, the digital transformat...\r\n', 'comm3.jpg'),
(8, 3, 'Communication is a very basic and fundamental process for human beings. However, when a brand wants to communicate with their customers, then the communication takes another form. Similarly, there is communication involved between teams as well.', 'comm2.jpg'),
(9, 3, 'The energy and communication services shares led the market lower on Wednesday, and the benchmark index fell 0.2 per cent overall.', 'DL_Communication.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wpoets`
--
ALTER TABLE `wpoets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wpoets`
--
ALTER TABLE `wpoets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
