-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 05:31 PM
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
CREATE DATABASE IF NOT EXISTS `xforum` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `xforum`;

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

DROP TABLE IF EXISTS `agents`;
CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Assigned_Property_id` int(11) NOT NULL,
  `Attributes` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Photo` varchar(255) NOT NULL DEFAULT 'jurica-koletic-7YVZYZeITc8-unsplash.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `Assigned_Property_id`, `Attributes`, `Name`, `Email`, `Phone`, `Description`, `created_at`, `updated_at`, `Photo`) VALUES
(1, 8, 'Officia autem error vero vel est.', 'Doris Ryan', 'conn.gwen@gmail.com', '(320) 762-1828', 'Quos est tenetur magnam sint numquam exercitationem consequuntur qui.', '2023-09-15 10:52:34', '2023-09-15 10:52:34', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg'),
(2, 5, 'Fuga impedit labore necessitatibus aut sed non.', 'Savanna Wiza', 'bpredovic@yahoo.com', '934-685-4699', 'Doloremque in possimus libero vel.', '2023-09-15 10:52:34', '2023-09-15 10:52:34', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg'),
(3, 7, 'Ratione fuga libero illo quis.', 'Mallory Collins', 'alysha.carter@emard.info', '843-434-6195', 'Dolor dolores autem accusamus doloremque ut est odio.', '2023-09-15 10:52:34', '2023-09-15 10:52:34', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg'),
(4, 2, 'Veniam optio impedit est qui architecto delectus.', 'Dr. Cassandra Kris', 'jessica.lakin@nolan.com', '(682) 956-1120', 'Aliquam incidunt vitae voluptatem.', '2023-09-15 10:52:34', '2023-09-15 10:52:34', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg'),
(5, 3, 'Sed perferendis ipsum numquam deleniti corporis praesentium quam.', 'Ms. Priscilla Larkin DVM', 'lawson58@gmail.com', '650-698-5017', 'Error velit dolorum cum dolorum.', '2023-09-15 10:52:34', '2023-09-15 10:52:34', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg'),
(6, 3, 'Qui voluptatem autem sed ea mollitia.', 'Dr. Justus Tremblay', 'rogahn.misty@gmail.com', '+1-517-855-1524', 'Officiis ullam numquam hic temporibus id non.', '2023-09-15 10:52:34', '2023-09-15 10:52:34', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg'),
(7, 8, 'Explicabo harum iure quam.', 'Mr. Domenick Pouros', 'balistreri.hans@hotmail.com', '+1 (937) 831-8715', 'Praesentium ex et porro.', '2023-09-15 10:52:34', '2023-09-15 10:52:34', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg'),
(8, 2, 'Aliquid eius eos eum et necessitatibus.', 'Marielle Halvorson', 'smedhurst@yahoo.com', '+1-938-475-4477', 'Unde quidem excepturi eos consequatur et sunt.', '2023-09-15 10:52:34', '2023-09-15 10:52:34', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg'),
(9, 9, 'Similique neque vitae corporis similique adipisci perspiciatis.', 'Destini Cartwright II', 'reggie45@boyer.net', '(561) 862-0446', 'Ipsum voluptas pariatur et perferendis pariatur mollitia.', '2023-09-15 10:52:34', '2023-09-15 10:52:34', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg'),
(10, 8, 'Sit rerum omnis culpa et sed.', 'Terrill Becker II', 'edyth07@schmitt.com', '1-283-746-4183', 'Qui molestias rerum cum.', '2023-09-15 10:52:34', '2023-09-15 10:52:34', 'jurica-koletic-7YVZYZeITc8-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `bloger` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `bloger`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Mr.', 'Perspiciatis quidem perferendis molestiae aperiam illo eum voluptatem.', 'C:\\Users\\zemene\\AppData\\Local\\Temp\\ca86d60f74efb628c20dabc5473ffe5e.png', 'Doloribus id sunt quibusdam et placeat ut ut laudantium.', '2023-09-15 10:52:33', '2023-09-15 10:52:33'),
(2, 'Prof.', 'Ea aut aliquid enim recusandae voluptas molestiae.', 'C:\\Users\\zemene\\AppData\\Local\\Temp\\1963aba8e464e06d9fe12d8c8ada1391.png', 'Tempore nihil nemo ut facere aut est.', '2023-09-15 10:52:33', '2023-09-15 10:52:33'),
(3, 'Dr.', 'Voluptatum aut non quo sit qui officiis consequatur.', 'C:\\Users\\zemene\\AppData\\Local\\Temp\\0d025425ef9434fe0ab1366bf0d0c872.png', 'Facere eum fugit voluptas consequuntur odit repudiandae.', '2023-09-15 10:52:33', '2023-09-15 10:52:33'),
(4, 'Prof.', 'Rerum et distinctio id laboriosam perferendis.', 'C:\\Users\\zemene\\AppData\\Local\\Temp\\bed53b13f5928d5eccb31603ec3e08e9.png', 'Nulla sed blanditiis sed id ducimus occaecati.', '2023-09-15 10:52:33', '2023-09-15 10:52:33'),
(5, 'Dr.', 'Sint ea non corporis dignissimos ipsum et dolorem ad.', 'C:\\Users\\zemene\\AppData\\Local\\Temp\\2914dcfe19eee7a1a6252180e1762c76.png', 'Saepe ea exercitationem laboriosam officia optio.', '2023-09-15 10:52:34', '2023-09-15 10:52:34'),
(6, 'Ms.', 'Doloremque delectus dolore voluptas quia maxime sequi.', 'C:\\Users\\zemene\\AppData\\Local\\Temp\\f2e9c253110f1fae0430235e93c5362e.png', 'Consectetur consectetur nulla quia perspiciatis quidem et modi.', '2023-09-15 10:52:34', '2023-09-15 10:52:34'),
(7, 'Prof.', 'Rerum voluptatem atque voluptates voluptatem vero sapiente.', 'C:\\Users\\zemene\\AppData\\Local\\Temp\\0d7220173ab43a712139809f8a6897c0.png', 'Quis repudiandae in voluptates sequi labore.', '2023-09-15 10:52:34', '2023-09-15 10:52:34'),
(8, 'Ms.', 'Sequi repellat quia doloribus quasi et ut nemo est.', 'C:\\Users\\zemene\\AppData\\Local\\Temp\\1519e295d6eb1a8c6f8bb2ce3155f467.png', 'Odit saepe labore eveniet ut doloribus dolores.', '2023-09-15 10:52:34', '2023-09-15 10:52:34'),
(9, 'Miss', 'Nam sit pariatur ipsum minima quos.', 'C:\\Users\\zemene\\AppData\\Local\\Temp\\29d674dfccad82ab8a507c2b2b2144b8.png', 'Totam deleniti iste quibusdam voluptatum nihil tempora atque.', '2023-09-15 10:52:34', '2023-09-15 10:52:34'),
(10, 'Mr.', 'Consequatur et autem ea aut nisi magni.', 'C:\\Users\\zemene\\AppData\\Local\\Temp\\e06f6f2479e1372b561bacf6e944f82a.png', 'Ducimus dolorem inventore assumenda non qui et et.', '2023-09-15 10:52:34', '2023-09-15 10:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dashes`
--

DROP TABLE IF EXISTS `dashes`;
CREATE TABLE `dashes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2023_08_31_094650_create_property_table', 1),
(251, '2023_09_14_102803_create_property_gallery_table', 2),
(325, '2023_09_14_102803_create_propertygallery_table', 3),
(656, '2014_10_12_000000_create_users_table', 4),
(657, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(658, '2014_10_12_100000_create_password_resets_table', 4),
(659, '2019_08_19_000000_create_failed_jobs_table', 4),
(660, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(661, '2023_08_27_142154_create_categories_table', 4),
(662, '2023_08_30_201224_create_dashes_table', 4),
(663, '2023_08_31_095727_create_agents_table', 4),
(664, '2023_09_13_123754_create_blogs_table', 4),
(665, '2023_09_13_140108_create_properties_table', 4),
(666, '2023_09_14_102803_create_propertygalleries_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Bedroom` varchar(255) NOT NULL,
  `Parking` varchar(255) NOT NULL,
  `Bathroom` varchar(255) NOT NULL,
  `Kitchen` varchar(255) NOT NULL,
  `Living_room` varchar(255) NOT NULL,
  `Family_room` varchar(255) NOT NULL,
  `Total_room` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Additional_features` varchar(255) NOT NULL,
  `Images` varchar(255) NOT NULL DEFAULT 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
  `Videos` varchar(255) DEFAULT NULL,
  `Location_city` varchar(255) NOT NULL,
  `Location_woreda_kebele` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `Title`, `Area`, `Status`, `Price`, `Bedroom`, `Parking`, `Bathroom`, `Kitchen`, `Living_room`, `Family_room`, `Total_room`, `Description`, `Additional_features`, `Images`, `Videos`, `Location_city`, `Location_woreda_kebele`, `created_at`, `updated_at`) VALUES
(1, 'sint', '116', 'eaque', '9656719', '6', '4', '0', '2', '0', '5', '4', 'Nobis non blanditiis eius sit.', 'quidem', 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', NULL, 'enim', 'velit', '2023-09-15 10:52:08', '2023-09-15 10:52:08'),
(2, 'et', '309', 'ipsa', '9681976', '4', '7', '6', '7', '3', '8', '8', 'Illo suscipit est ipsum quo qui rerum.', 'repudiandae', 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', NULL, 'cum', 'maxime', '2023-09-15 10:52:08', '2023-09-15 10:52:08'),
(3, 'ut', '758', 'iste', '8991662', '4', '6', '4', '5', '0', '6', '0', 'Quas aut doloribus qui laboriosam tenetur numquam.', 'accusantium', 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', NULL, 'in', 'culpa', '2023-09-15 10:52:09', '2023-09-15 10:52:09'),
(4, 'quos', '385', 'soluta', '3805522', '7', '8', '1', '6', '1', '1', '9', 'Ipsam perferendis repellendus ipsam recusandae in optio tempore.', 'vitae', 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', NULL, 'debitis', 'dolorum', '2023-09-15 10:52:09', '2023-09-15 10:52:09'),
(5, 'et', '359', 'laudantium', '4441231', '6', '4', '6', '1', '4', '0', '7', 'Qui et rerum ut veritatis consequatur fuga eligendi.', 'et', 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', NULL, 'omnis', 'deserunt', '2023-09-15 10:52:09', '2023-09-15 10:52:09'),
(6, 'magni', '661', 'ea', '3065130', '6', '8', '1', '4', '8', '7', '2', 'Totam non molestiae deserunt tempora eos nesciunt.', 'excepturi', 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', NULL, 'vitae', 'aliquid', '2023-09-15 10:52:09', '2023-09-15 10:52:09'),
(7, 'dicta', '801', 'repudiandae', '7000015', '5', '8', '1', '0', '9', '3', '2', 'Sed aut perferendis ex velit quasi nam.', 'illo', 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', NULL, 'voluptatem', 'consequatur', '2023-09-15 10:52:09', '2023-09-15 10:52:09'),
(8, 'nulla', '505', 'quidem', '7512339', '9', '2', '5', '9', '8', '2', '8', 'Id ducimus assumenda impedit dolorem.', 'earum', 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', NULL, 'quisquam', 'est', '2023-09-15 10:52:09', '2023-09-15 10:52:09'),
(9, 'et', '869', 'et', '2796548', '4', '2', '6', '3', '0', '3', '3', 'Veritatis et odit eos natus fuga quia.', 'neque', 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', NULL, 'error', 'consequatur', '2023-09-15 10:52:09', '2023-09-15 10:52:09'),
(10, 'et', '999', 'assumenda', '7485300', '2', '3', '9', '8', '5', '6', '0', 'Expedita inventore minima dolore laborum sapiente.', 'dolores', 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', NULL, 'quasi', 'dolorem', '2023-09-15 10:52:09', '2023-09-15 10:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE `property` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Bedroom` varchar(255) NOT NULL,
  `Parking` varchar(255) NOT NULL,
  `Bathroom` varchar(255) NOT NULL,
  `Kitchen` varchar(255) NOT NULL,
  `Living_room` varchar(255) NOT NULL,
  `Family_room` varchar(255) NOT NULL,
  `Total_room` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Additional_features` varchar(255) NOT NULL,
  `Images` varchar(255) NOT NULL,
  `Videos` varchar(255) NOT NULL,
  `Location_city` varchar(255) NOT NULL,
  `Location_woreda_kebele` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Barry Boehm', 'reynold.treutel@example.net', '2023-09-15 10:52:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0Zldz9Wbdz', '2023-09-15 10:52:08', '2023-09-15 10:52:08'),
(2, 'Avery Heller', 'goldner.abbie@example.org', '2023-09-15 10:52:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4JV83XZy2w', '2023-09-15 10:52:08', '2023-09-15 10:52:08'),
(3, 'Edyth Hauck III', 'zhirthe@example.org', '2023-09-15 10:52:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NwWruo6VIs', '2023-09-15 10:52:08', '2023-09-15 10:52:08'),
(4, 'Dr. Dina Dibbert IV', 'monroe.swift@example.net', '2023-09-15 10:52:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NAXd4FFV5k', '2023-09-15 10:52:08', '2023-09-15 10:52:08'),
(5, 'Nikita Powlowski', 'kiehn.madelyn@example.com', '2023-09-15 10:52:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PxQmW5HTPf', '2023-09-15 10:52:08', '2023-09-15 10:52:08'),
(6, 'Kaley Stamm', 'halvorson.lolita@example.org', '2023-09-15 10:52:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xddwQLPpf6', '2023-09-15 10:52:08', '2023-09-15 10:52:08'),
(7, 'Stone Dare', 'skeeling@example.org', '2023-09-15 10:52:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hrIZtxJw7p', '2023-09-15 10:52:08', '2023-09-15 10:52:08'),
(8, 'Prof. Trent Ziemann', 'carmella46@example.net', '2023-09-15 10:52:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'h5rFw00cG6', '2023-09-15 10:52:08', '2023-09-15 10:52:08'),
(9, 'Karina Gaylord', 'wwitting@example.net', '2023-09-15 10:52:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UsMRp7Bfzz', '2023-09-15 10:52:08', '2023-09-15 10:52:08'),
(10, 'Myrtis Cruickshank', 'nkunze@example.net', '2023-09-15 10:52:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7XigTezz33', '2023-09-15 10:52:08', '2023-09-15 10:52:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashes`
--
ALTER TABLE `dashes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertygalleries`
--
ALTER TABLE `propertygalleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dashes`
--
ALTER TABLE `dashes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=667;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propertygalleries`
--
ALTER TABLE `propertygalleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
