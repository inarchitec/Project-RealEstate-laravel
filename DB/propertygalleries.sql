-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 05:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `propertygalleries`
--

DROP TABLE IF EXISTS `propertygalleries`;
CREATE TABLE `propertygalleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Property_id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Room_Name` varchar(255) NOT NULL,
  `Room_Image` varchar(255) NOT NULL DEFAULT 'jurica-koletic-7YVZYZeITc8-unsplash.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propertygalleries`
--

INSERT INTO `propertygalleries` (`id`, `Property_id`, `Title`, `Room_Name`, `Room_Image`, `created_at`, `updated_at`) VALUES
(1, 1, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL),
(2, 2, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL),
(3, 3, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL),
(4, 4, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL),
(5, 5, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL),
(6, 6, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL),
(7, 7, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL),
(8, 1, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL),
(9, 2, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL),
(10, 3, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL),
(11, 4, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL),
(12, 5, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL),
(13, 6, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL),
(14, 7, '', '', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `propertygalleries`
--
ALTER TABLE `propertygalleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `propertygalleries`
--
ALTER TABLE `propertygalleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
