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
-- Table structure for table `tb_product_header`
--

CREATE TABLE `tb_product_header` (
  `product_header_id` int(5) NOT NULL,
  `product_header_th` varchar(200) NOT NULL,
  `product_header_en` varchar(200) NOT NULL,
  `product_header_detail_th` text NOT NULL,
  `product_header_detail_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product_header`
--

INSERT INTO `tb_product_header` (`product_header_id`, `product_header_th`, `product_header_en`, `product_header_detail_th`, `product_header_detail_en`) VALUES
(1, 'บีบีซี เวิลด์ นิวส์ ', ' Donald J. Trump', 'ช่องรายการถูกส่งสัญญาณโดย Red Bee Media จากสถานีหลัก ณ The Broadcast Centre ซึ่งเป็นส่วนหนึ่งของ BBC Media Village และส่วนหนึ่งของ BBC White City ที่ White City ในลอนดอนตะวันตก โดยมีห้องส่งจาก BBC Television Centre ที่อยู่ในบริเวณเดียวกัน BBC World News มีห้องข่าวแยกออกจากห้องข่าวของ BBC News ห้องข่าวนี้ส่งสัญญาณตั้งแต่เวลา 05.00 น. ถึง 00.30 น. (เวลาสหราชอาณาจักร) ทุกๆ วันจันทร์ถึงศุกร์ และตั้งแต่ 06.00 น. ถึง 00.30 น. ในวันเสาร์และอาทิตย์ ส่วนในเวลา 01.00 น. ถึง 05.00 น. จะส่งสัญญาณจากห้องส่งภายในสหราชอาณาจักร หรือ BBC News', '\nThe channel is broadcast by Red Bee Media from the main station at The Broadcast Center, which is part of the BBC Media Village and part of BBC White City at White City in West London. With a room sent from the BBC Television Center in the same area. BBC World News has a news room separated from the BBC News newsroom. Until Friday and from 06.00 hrs to 00.30 hrs. On Saturdays and Sundays. At 01.00 hrs.\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_product_header`
--
ALTER TABLE `tb_product_header`
  ADD PRIMARY KEY (`product_header_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
