-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2020 m. Vas 20 d. 17:32
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weather`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `first`
--

CREATE TABLE `first` (
  `id` int(2) NOT NULL,
  `weather_id` varchar(3) NOT NULL,
  `sku` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `first`
--

INSERT INTO `first` (`id`, `weather_id`, `sku`, `name`, `price`) VALUES
(1, '200', 'HPH-1', 'Crimson Headphones', '€26,3'),
(2, '201', 'HPH-2', 'Aquamarine Headphone', '€1,36'),
(3, '202', 'HPH-3', 'Khaki Headphones', '€25,8'),
(4, '210', 'HPH-4', 'Violet Headphones', '€7,41'),
(5, '211', 'HPH-5', 'Mauv Headphones', '€27,5'),
(6, '212', 'HPH-6', 'Khaki Headphones', '€28,2'),
(7, '221', 'HPH-7', 'Red Headphones', '€5,07'),
(8, '230', 'HPH-8', 'Khaki Headphones', '€24,8'),
(9, '231', 'HPH-9', 'Fuscia Headphones', '€7,91'),
(10, '232', 'HPH-10', 'Teal Headphones', '€2,07'),
(11, '300', 'UM-1', 'Maroon Umbrella', '€16,6'),
(12, '301', 'UM-2', 'Aquamarine Umbrella', '€18,1'),
(13, '302', 'UM-3', 'Aquamarine Umbrella', '€22,0'),
(14, '310', 'UM-4', 'Purple Umbrella', '€17,0'),
(15, '311', 'UM-5', 'Goldenrod Umbrella', '€14,2'),
(16, '312', 'UM-6', 'Goldenrod Umbrella', '€24,7'),
(17, '313', 'UM-7', 'Aquamarine Umbrella', '€9,62'),
(18, '314', 'UM-8', 'Blue Umbrella', '€2,40'),
(19, '321', 'UM-9', 'Puce Umbrella', '€9,60'),
(20, '500', 'UM-10', 'Khaki Umbrella', '€4,49'),
(21, '501', 'UM-11', 'Violet Umbrella', '€1,04'),
(22, '502', 'UM-12', 'Fuscia Umbrella', '€23,4'),
(23, '503', 'UM-13', 'Pink Umbrella', '€9,67'),
(24, '504', 'UM-14', 'Green Umbrella', '€29,8'),
(25, '511', 'UM-15', 'Khaki Umbrella', '€12,7'),
(26, '520', 'UM-16', 'Orange Umbrella', '€6,98'),
(27, '521', 'UM-17', 'Orange Umbrella', '€20,1'),
(28, '522', 'UM-18', 'Blue Umbrella', '€18,5'),
(29, '531', 'UM-19', 'Puce Umbrella', '€13,2'),
(30, '600', 'SW-1', 'Mauv Sweater', '€9,91'),
(31, '601', 'SW-2', 'Teal Sweater', '€8,68'),
(32, '602', 'SW-3', 'Khaki Sweater', '€20,2'),
(33, '611', 'SW-4', 'Fuscia Sweater', '€17,1'),
(34, '612', 'SW-5', 'Pink Sweater', '€16,6'),
(35, '613', 'SW-6', 'Aquamarine Sweater', '€11,1'),
(36, '615', 'SW-7', 'Purple Sweater', '€3,82'),
(37, '616', 'SW-8', 'Aquamarine Sweater', '€2,03'),
(38, '620', 'SW-9', 'Fuscia Sweater', '€23,5'),
(39, '621', 'SW-10', 'Violet Sweater', '€11,8'),
(40, '622', 'SW-11', 'Maroon Sweater', '€3,03'),
(41, '701', 'MA-1', 'Fuscia Mask', '€1,01'),
(42, '711', 'MA-2', 'Violet Mask', '€20,4'),
(43, '721', 'MA-3', 'Puce Mask', '€9,71'),
(44, '731', 'MA-4', 'Crimson Mask', '€18,5'),
(45, '741', 'MA-5', 'Maroon Mask', '€12,6'),
(46, '751', 'MA-6', 'Purple Mask', '€13,7'),
(47, '761', 'MA-7', 'Purple Mask', '€29,6'),
(48, '762', 'MA-8', 'Turquoise Mask', '€8,83'),
(49, '771', 'MA-9', 'Mauv Mask', '€12,6'),
(50, '781', 'MA-10', 'Crimson Mask', '€7,48'),
(51, '800', 'GLA-1', 'Pink Glasses', '€19,6'),
(52, '801', 'GLA-2', 'Goldenrod Glasses', '€21,2'),
(53, '802', 'GLA-3', 'Red Glasses', '€25,9'),
(54, '803', 'GLA-4', 'Orange Glasses', '€19,1'),
(55, '804', 'GLA-5', 'Violet Glasses', '€11,7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
