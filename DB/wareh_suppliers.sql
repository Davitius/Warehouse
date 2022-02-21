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
-- Table structure for table `wareh_suppliers`
--

CREATE TABLE `wareh_suppliers` (
  `id` int(11) UNSIGNED NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `location` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `position` varchar(100) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `personalnumber` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wareh_suppliers`
--

INSERT INTO `wareh_suppliers` (`id`, `supplier`, `organization`, `address`, `location`, `email`, `phone`, `position`, `priority`, `personalnumber`) VALUES
(4, 'დავით მუხიგულაშვილი', 'Davitius', 'ბაგინეთის ქ. #3', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.5815186789014!2d44.748203950479606!3d41.72954828257543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4044731d234c32eb%3A0x1e8f3c2ec98f62fc!2zMjEg4YOc4YOj4YOq4YOj4YOR4YOY4YOr4YOY4YOhIOGDpeGDo-GDqeGDkCwg4YOX4YOR4YOY4YOa4YOY4YOh4YOY!5e0!3m2!1ska!2sge!4v1633874346037!5m2!1ska!2sge\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Davitius@yahoo.com', '+995577666666', 'დილერი', 'მაღალი', '01017777777'),
(5, 'ნუგო მუხიგულაშვილი', 'ნუგბურგერი', 'საირმის ქ. 12', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.8919071690475!2d44.76524105047941!3d41.72285128299318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404473275490a1a9%3A0x32a8c7546ffc37c1!2zMTIg4YOh4YOQ4YOY4YOg4YOb4YOY4YOhIOGDpeGDo-GDqeGDkCwg4YOX4YOR4YOY4YOa4YOY4YOh4YOY!5e0!3m2!1ska!2sge!4v1633875292362!5m2!1ska!2sge\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'nugusha@gmail.com', '+995577777777', 'დილერი', 'საშუალო', '01019888888'),
(6, 'გურანდა ჩოკორაია', 'შ.პ.ს. გურიტა', 'ნუცუბიძის ქ. 21', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.5815186789014!2d44.748203950479606!3d41.72954828257543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4044731d234c32eb%3A0x1e8f3c2ec98f62fc!2zMjEg4YOc4YOj4YOq4YOj4YOR4YOY4YOr4YOY4YOhIOGDpeGDo-GDqeGDkCwg4YOX4YOR4YOY4YOa4YOY4YOh4YOY!5e0!3m2!1ska!2sge!4v1633874346037!5m2!1ska!2sge\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'gura@gmail.com', '577555444', 'დილერი', 'საშუალო', '0101999999'),
(7, 'ბარჯა კუზუ', 'ბლიყვირ მარკეტი', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.5815186789014!2d44.748203950479606!3d41.72954828257543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4044731d234c32eb%3A0x1e8f3c2ec98f62fc!2zMjEg4YOc4YOj4YOq4YOj4YOR4YOY4YOr4YOY4YOhIOGDpeGDo-GDqeGDkCwg4YOX4YOR4YOY4YOa4YOY4YOh4YOY!5e0!3m2!1ska!2sge!4v1633874346037!5m2!1ska!2sge\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'barja@gmail.com', '675677567', 'დასტავშიკი', 'დბალი', '01019444444'),
(8, 'testsupplier1', 'adcasdfcdss', NULL, 'asdasdad', 'testsupplier1@yahoo.com', '23234', 'sdfcsdfsdf', 'დბალი', '34234234324'),
(9, 'testsupplier2', 'xbgngfvngh', NULL, 'drgdfdhbgf', 'testsupplier2@yahoo.com', '435345345', 'xfvxfvxfvxv', 'მარალი', '3545345345'),
(10, 'testsupplier3', 'dfgthfthfrh', NULL, 'drgdgdg', 'testsupplier3@yahoo.com', '54353543', 'zkjdhkjs', 'საშუალო', '35345345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wareh_suppliers`
--
ALTER TABLE `wareh_suppliers`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wareh_suppliers`
--
ALTER TABLE `wareh_suppliers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
