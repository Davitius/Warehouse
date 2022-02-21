-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 21, 2022 at 09:11 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `wareh_orders`
--

CREATE TABLE `wareh_orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `dro` varchar(50) NOT NULL,
  `product` text NOT NULL,
  `allprice` float NOT NULL,
  `seller` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wareh_orders`
--

INSERT INTO `wareh_orders` (`id`, `dro`, `product`, `allprice`, `seller`) VALUES
(1, '29-10-21 13:06:54', 'ნესვი<br />ნესვი მრგვალი<br />ნესვი მრგვალი<br /><br /><br /><br /><br /><br /><br />', 7.2, ''),
(2, '29-10-21 13:07:58', 'ნესვი<br />ნესვი მრგვალი<br />ნესვი მრგვალი<br /><br /><br /><br /><br /><br /><br />', 7.2, ''),
(54, '29-10-21 16:01:46', 'ნესვი<br />ნესვი მრგვალი<br />მსხალი გულაბი<br />პანტა<br />ვაშლი<br />საზამთრო<br />ვაშლი<br /><br /><br />', 32.6, 'დავით მუხიგულაშვილი'),
(55, '01-12-21 18:49:40', 'ნესვი<br />ნესვი მრგვალი<br />მსხალი გულაბი<br />პანტა<br />ვაშლი<br />საზამთრო<br />ვაშლი<br />testproduct1<br />testproduct2<br />testproduct3', 26.2, 'სტუმარი'),
(56, '02-12-21 12:57:38', 'ნესვი<br /><br /><br /><br /><br /><br /><br /><br /><br />', 1.2, 'დავით მუხიგულაშვილი'),
(57, '02-12-21 13:48:56', 'ნესვი | 0.6ლ. | 2 |<br />ნესვი მრგვალი | 0.7ლ. | 4 |<br /><br /><br /><br /><br /><br /><br /><br />', 4, 'დავით მუხიგულაშვილი'),
(58, '02-12-21 13:51:58', 'ნესვი | 2კგ |0.6ლ. | <br />პანტა | 3კგ |0.5ლ. | <br /><br /><br /><br /><br /><br /><br /><br />', 2.7, 'დავით მუხიგულაშვილი'),
(59, '02-12-21 13:55:32', 'testproduct1 | 2კგ | 2ლ. | <br />testproduct2 | 3კგ | 1ლ. | <br /><br /><br /><br /><br /><br /><br /><br />', 7, 'დავით მუხიგულაშვილი'),
(60, '02-12-21 14:06:41', 'ნესვი | 2კგ | 0.6ლ. | <br />ნესვი მრგვალი | 3კგ | 0.7ლ. | <br />მსხალი გულაბი | 4კგ | 1.4ლ. | <br />პანტა | 5კგ | 0.5ლ. | <br />ვაშლი | 6კგ | 1.1ლ. | <br />საზამთრო | 7კგ | 0.7ლ. | <br />ვაშლი | 8კგ | 2.1ლ. | <br />testproduct1 | 9კგ | 2ლ. | <br />testproduct2 | 2კგ | 1ლ. | <br />testproduct3 | 3კგ | 3ლ. | ', 68.7, 'დავით მუხიგულაშვილი');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wareh_orders`
--
ALTER TABLE `wareh_orders`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wareh_orders`
--
ALTER TABLE `wareh_orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
