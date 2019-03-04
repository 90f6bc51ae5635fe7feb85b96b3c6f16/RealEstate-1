-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2019 at 04:11 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revel_soft_real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_highlight`
--

CREATE TABLE `tb_product_highlight` (
  `product_highlight_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_highlight_name_th` varchar(100) NOT NULL,
  `product_highlight_name_en` varchar(100) NOT NULL,
  `product_highlight_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product_highlight`
--

INSERT INTO `tb_product_highlight` (`product_highlight_id`, `product_id`, `product_highlight_name_th`, `product_highlight_name_en`, `product_highlight_img`) VALUES
(26, 8, 'xxzz', 'xxxxzzzz', '01032019154617-reasdental.jpg'),
(27, 8, 'x', 'zc', '01032019154627-office.jpg'),
(28, 9, 'xx', 'vv', '01032019154640-office.jpg'),
(29, 9, 'aaa', 'ddd', '01032019154646-villa.jpg'),
(30, 10, 'cccc', 'ddddddd', '01032019154713-apartment.jpg'),
(31, 11, 'dddddd', 'vvvvvvvvv', '01032019154725-apartment.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_product_highlight`
--
ALTER TABLE `tb_product_highlight`
  ADD PRIMARY KEY (`product_highlight_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_product_highlight`
--
ALTER TABLE `tb_product_highlight`
  MODIFY `product_highlight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
