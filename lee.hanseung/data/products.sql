-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2021 at 08:27 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hanseung_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(9,0) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(64) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_thumb`, `image_other`, `description`) VALUES
(1, 'Dinner Plate', 'img/dinnerware_plate_1.png', 40, '2021-04-20 16:54:31', '2021-04-20 16:54:31', 'dinnerware', 'img/dinnerware_plate_1.png', 'img/dinnerware_plate_1_m.png', 'img/dinnerware_plate_1.png,/img/dinnerware_bowl_1.png', 'Clean, rimless dinner plate'),
(2, 'Salad Plate', 'img/dinnerware_plate_2.png', 36, '2021-04-20 17:06:10', '2021-04-20 17:06:10', 'dinnerware', 'img/dinnerware_plate_2.png', 'img/dinnerware_plate_2_m.png', 'dinnerware_plate_1.png', 'A classic Rim line plate'),
(3, 'Camellia Etched Dinner Plate', 'img/dinnerware_plate_3.png', 161, '2021-04-20 17:15:34', '2021-04-20 17:15:34', 'dinnerware', 'img/dinnerware_plate_3.png', 'img/dinnerware_plate_3_m.png', 'img/dinnerware_plate_3.png', 'Hand-etched pattern design'),
(4, 'Deep Serving Bowl in Bright Blue', 'img/dinnerware_bowl_2.png', 138, '2021-04-20 19:41:25', '2021-04-20 19:41:25', 'dinnerware', 'img/dinnerware_bowl_2.png', 'img/dinnerware_bowl_2_m.png', 'img/dinnerware_bowl_2.png', 'Layered and dramatic Moonstone Horizon on the exterior and cheerful Bright Blue on the interior'),
(5, 'Rectangular Oak Cutting Board with Leather Tab', 'img/kitchen_cuttingboard_1', 144, '2021-04-20 19:47:17', '2021-04-20 19:47:17', 'kitchen', 'img/kitchen_cuttingboard_1.png', 'img/kitchen_cuttingboard_1_m.png', 'img/kitchen_cuttingboard_1.png', 'The board has a leather tab'),
(6, 'Round Walnut Cutting Board with Leather Tab', 'img/kitchen_cuttingboard_2.png', 164, '2021-04-20 19:50:53', '2021-04-20 19:50:53', 'kitchen', 'img/kitchen_cuttingboard_2.png', 'img/kitchen_cuttingboard_2_m.png', 'img/kitchen_cuttingboard_2.png', 'Durable, smooth surfaces, and a rounded off edge'),
(7, 'Flatware in Onyx', 'img/kitchen_flatware_1.png', 98, '2021-04-20 19:56:20', '2021-04-20 19:56:20', 'kitchen', 'img/kitchen_flatware_1.png', 'img/kitchen_flatware_1_m.png', 'img/kitchen_flatware_1.png', 'Matte black finish in Onyx'),
(8, 'Tall Vase in Aqua and Barley', 'img/decor_vase_1.png', 325, '2021-04-20 20:05:29', '2021-04-20 20:05:29', 'decor', 'img/decor_vase_1.png', 'img/decor_vase_1_m.png', 'img/decor_vase_1.png', 'A soft gradient of Aqua and Barley'),
(9, 'Multi Stem Vase in Dark Moon Horizon', 'img/decor_vase_2.png', 170, '2021-04-20 20:09:44', '2021-04-20 20:09:44', 'decor', 'img/decor_vase_2.png', 'img/decor_vase_2_m.png', 'img/decor_vase_2.png', 'Glazed the vase with a new technique inspired by the horizon where sea meets sky'),
(10, 'Small Pitcher in Light Grey Whale Gradient', 'img/decor_pitcher_1.png', 262, '2021-04-20 20:14:32', '2021-04-20 20:14:32', 'decor', 'img/decor_pitcher_1.png', 'img/decor_pitcher_1_m.png', 'img/decor_pitcher_1.png', 'The layered glaze of Light Grey Whale gently fading into Opaque'),
(11, 'Sprout Vase in Wildflower Gradient', 'img/decor_vase_3.png', 206, '2021-04-20 20:19:11', '2021-04-20 20:19:11', 'decor', 'img/decor_vase_3.png', 'img/decor_vase_3_m.png', 'img/decor_vase_3.png', 'A skillfully glazed gradient with gentle touches of color tip'),
(12, 'Sprout Vase in Yuzu Gradient', 'img/decor_vase_4.png', 216, '2021-04-20 20:21:39', '2021-04-20 20:21:39', 'decor', 'img/decor_vase_4.png', 'img/decor_vase_4_m.png', 'img/decor_vase_4.png', 'A skillfully glazed gradient with gentle touches of color tip'),
(13, 'Flatware in Amber', 'img/kitchen_flatware_2.png', 98, '2021-04-20 20:25:36', '2021-04-20 20:25:36', 'kitchen', 'img/kitchen_flatware_2.png', 'img/kitchen_flatware_2_m.png', 'img/kitchen_flatware_2.png', 'A golden matte finish in Amber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
