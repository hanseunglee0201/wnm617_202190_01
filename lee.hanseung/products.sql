-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2021 at 03:27 PM
-- Server version: 5.6.51-cll-lve
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
  `description` text NOT NULL,
  `size` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_thumb`, `image_other`, `description`, `size`) VALUES
(2, 'Salad Plate', 'img/dinnerware_plate_2.png', 36, '2021-04-20 17:06:10', '2021-04-20 17:06:10', 'Dinnerware', 'img/dinnerware_plate_2.png', 'img/dinnerware_plate_2.png', 'dinnerware_plate_1.png', 'This is one of four plates available in our classic Rim line. Organic, clean, and functional — the exposed clay rim gives your table some rustic beauty, while providing easy handling and stacking. Expect lovely variation in our Moonstone and Redwood glazes.\r\n\r\n', '9.5\" dia.'),
(3, 'Camellia Etched Dinner Plate', 'img/dinnerware_plate_3.png', 161, '2021-04-20 17:15:34', '2021-04-20 17:15:34', 'Dinnerware', 'img/dinnerware_plate_3.png', 'img/dinnerware_plate_3.png', 'img/dinnerware_plate_3.png', 'This hand-etched pattern is made in collaboration with Alabama Chanin, known for their responsibly produced hand-sewn garments. Named Camellia after the Alabama state flower, it showcases the intersection of stitch and clay. This pattern in our classic Opaque White brings new layers and depth to our classic Dinner Plate.', '10.75\" dia.'),
(4, 'Deep Serving Bowl in Bright Blue', 'img/dinnerware_bowl_2.png', 138, '2021-04-20 19:41:25', '2021-04-20 19:41:25', 'Dinnerware', 'img/dinnerware_bowl_2.png', 'img/dinnerware_bowl_2_m.png', 'img/dinnerware_bowl_2.png', 'The Deep Serving bowl is a classic in our dinnerware line. For Summer Seasonal we\'ve glazed the bowl with a special dual-glaze technique. Layered and dramatic Moonstone Horizon on the exterior and cheerful Bright Blue on the interior. The layered glaze interaction creates dramatic visual texture and is contrasted with a solid glaze.', '4\" H, 6\" dia.'),
(5, 'Rectangular Oak Cutting Board with Leather Tab', 'img/kitchen_cuttingboard_1', 144, '2021-04-20 19:47:17', '2021-04-20 19:47:17', 'Kitchen', 'img/kitchen_cuttingboard_1.png', 'img/kitchen_cuttingboard_1_m.png', 'img/kitchen_cuttingboard_1.png', 'This stunning cutting board has a durable and smooth surface that’s a workhorse for everyday cooking. The board has a leather tab and grommet on the back to easily hang it when not in use. Featuring beautiful brass branding, woodworker and designer Dave Ball expertly handcrafts each piece and leaves no details overlooked. Wood grain may vary slightly with each piece.\r\n\r\n', '0.75\" H x 12\" W x 15\" L'),
(6, 'Round Walnut Cutting Board with Leather Tab', 'img/kitchen_cuttingboard_2.png', 164, '2021-04-20 19:50:53', '2021-04-20 19:50:53', 'Kitchen', 'img/kitchen_cuttingboard_2.png', 'img/kitchen_cuttingboard_2_m.png', 'img/kitchen_cuttingboard_2.png', 'Durable, smooth surfaces, and a rounded off edge with indentations on one side for easy handling. These walnut boards are finished with food-grade mineral oil and organic beeswax. Wood grain may vary slightly with each piece.', '0.75\" H, 15\" dia.'),
(7, 'Flatware in Onyx', 'img/kitchen_flatware_1.png', 98, '2021-04-20 19:56:20', '2021-04-20 19:56:20', 'Kitchen', 'img/kitchen_flatware_1.png', 'img/kitchen_flatware_1_m.png', 'img/kitchen_flatware_1.png', 'Simple, satisfying to hold, and usable every day, for any occasion — just like our dinnerware. The first flatware pattern, start to finish, made in the US in almost a decade. Design-led in San Francisco, and hand-tooled and crafted in New York by Sherrill Manufacturing. Features a matte black finish in Onyx.', '6.5\" – 8.3\" L'),
(8, 'Tall Vase in Aqua and Barley', 'img/decor_vase_1.png', 325, '2021-04-20 20:05:29', '2021-04-20 20:05:29', 'Decor', 'img/decor_vase_1.png', 'img/decor_vase_1_m.png', 'img/decor_vase_1.png', 'Matte on the outside and glossy on the inside, a soft gradient of Aqua and Barley plays with color and perspective both up close and afar.', '10.75\" H, 5.25\" dia., 3.25\" dia. opening'),
(9, 'Multi Stem Vase in Dark Moon Horizon', 'img/decor_vase_2.png', 170, '2021-04-20 20:09:44', '2021-05-19 00:35:18', 'Decor', 'img/decor_vase_2.png', 'img/decor_vase_2_m.png', 'img/decor_vase_2.png', 'A stunning still life piece with or without flowers. For our Summer Seasonal collection we\'ve glazed the vase with a new technique inspired by the horizon where sea meets sky. Each piece has two different glazes faded over a background glaze creating a gradient with more depth. The vases share a “horizon line,” but with radically different results due to the interaction of the glazes. These special pieces are available for a limited time only.', '9\" H, 3.5\" dia.'),
(10, 'Small Pitcher in Light Grey Whale Gradient', 'img/decor_pitcher.png', 262, '2021-04-20 20:14:32', '2021-04-20 20:14:32', 'Decor', 'img/decor_pitcher.png', 'img/decor_pitcher.png', 'img/decor_pitcher.png', 'Delightfully simple and straightforward the Small Pitcher features a cylindrical body, functional triangular spout and wiped edge. The layered glaze of Light Grey Whale gently fading into Opaque White creates a unique, speckled texture. Originally created as a one of a kind design as part of the Design Series 2, the Small Pitcher is slip cast in small batches in our San Francisco Studio.', '7.75\" H x 3.5\" W, 3.5\" dia. opening'),
(11, 'Sprout Vase in Wildflower Gradient', 'img/decor_vase_3.png', 206, '2021-04-20 20:19:11', '2021-04-20 20:19:11', 'Decor', 'img/decor_vase_3.png', 'img/decor_vase_3_m.png', 'img/decor_vase_3.png', 'Like a bamboo shoot emerging from the soil at the end of winter, the form of these hand-thrown vases represents tenacity in tough times. Featuring a skillfully glazed gradient with gentle touches of color tip these organic forms contrasting a neutral base in Opaque White.', '7.5” H x 3” W, 2\" dia.'),
(12, 'Tent Lamp', 'img/decor_lamp_4.png', 950, '2021-04-20 20:21:39', '2021-04-20 20:21:39', 'Decor', 'img/decor_lamp_4.png', 'img/decor_lamp_4_m.png', 'img/decor_vase_4.png', 'This lamp takes the familiar bowl shape an inverts it over a custom metal frame. The bowl shapes the light in dramatic ways. The Design Series is an opportunity for Clay Studio Director Tung Chiang to create a collection of objects exploring a singular idea or theme every year. ', '10.5\" H, 9\" dia.'),
(13, 'Flatware in Amber', 'img/kitchen_flatware_2.png', 98, '2021-04-20 20:25:36', '2021-05-26 10:30:56', 'Kitchen', 'img/kitchen_flatware_2.png', 'img/kitchen_flatware_2_m.png', 'img/kitchen_flatware_2.png', 'This simple and satisfying flatware can be used for any occasion. Designed in San Francisco, it features an amber golden matte finish.', '6.5\" – 8.3\" L'),
(20, 'Large Mug', '', 41, '2021-05-27 15:22:57', '2021-05-27 15:23:01', 'dinnerware', '', 'img/dinnerware_mug.png', 'img/dinnerware_mug_m.png', 'The Large Mug has quickly become one of our best sellers and a firm favorite with tea and coffee drinkers. Guaranteed to brighten even the darkest of Monday mornings, and at home in any of our dinnerware sets.', '');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
