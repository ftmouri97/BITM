-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2019 at 12:43 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `cost` float DEFAULT NULL,
  `mrp` float DEFAULT NULL,
  `special_price` float DEFAULT NULL,
  `is_new` tinyint(4) DEFAULT NULL,
  `is_draft` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `total_sales` int(11) DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `category`, `title`, `picture`, `short_description`, `description`, `cost`, `mrp`, `special_price`, `is_new`, `is_draft`, `is_active`, `total_sales`, `is_deleted`, `created_at`, `modified_at`) VALUES
(1, 'Bashundhara ', ' Pantry & Cleaning ', 'Paper Napkin, Pack of 100 Pieces', 'https://sindabad.com/media/catalog/product/cache/40e106e6ad49917e99c6e4f192eebcd3/n/a/napkin3.jpg', '\r\n\r\n    Brand : Bashundhara\r\n    Weight: 179 gm, 223 gm \r\n    Emboss: General Embossed\r\n    Pack of 100\r\n\r\n', '\r\n\r\n    Brand : Bashundhara\r\n    Product type : Napkin\r\n    Quantity:100 pcs x 1 ply\r\n    Basic Raw Material: 100% Virgin pulp\r\n    Color: White\r\n    Fragrance Status: Non-perfumed\r\n    GSM: 20.5\r\n    Weight: 179 gm , 223 gm \r\n    Emboss: General Embossed\r\n\r\n', 45, 47, 46, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Xiaomi', 'Mobile & Accessories ', 'Redmi S2 Smartphone, 4GB RAM, 64GB ROM', 'https://sindabad.com/media/catalog/product/cache/40e106e6ad49917e99c6e4f192eebcd3/x/i/xiaomi-redmi-s2-gray-front.jpg', '\r\n    Brand : Xiaomi\r\n    Model : Redmi S2\r\n    64 GB ROM, 4 GB RAM\r\n    16 MP Front Camera\r\n    Non-removable Li-Po 3080mAh Battery\r\n    1 Year Brand Warranty\r\n', '\r\n\r\n    Brand : Xiaomi\r\n    Model : Redmi S2\r\n    64 GB ROM, 4 GB RAM\r\n    12 MP  and 5 MP  Dual Rear Camera\r\n    16 MP Front Camera\r\n    Octa-core 2.0 GHz Cortex-A53\r\n    Qualcomm MSM8953 Snapdragon 625\r\n    Xiaomi Redmi S2 Smartphone - 5.9 inch - 3GB RAM - 32GB ROM - 16MP Camera\r\n    OS Version: Android 8.1 Oreo\r\n    Non-removable Li-Po 3080mAh Battery\r\n    Wi-Fi, Bluetooth, Infrared, USB\r\n    1 Year Brand Warranty\r\n\r\n', 17999, 20999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
