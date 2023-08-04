-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 01, 2023 at 11:32 AM
-- Server version: 5.7.36
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consulting`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'general',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `type`, `created_at`, `updated_at`) VALUES
(2, 'website_name', 'الخطوة الرائدة للتجارة و الاستثمار', 'general', '2023-07-23 07:43:17', '2023-07-23 07:43:17'),
(3, 'admin_email', 'admin@djazairelkheir.com', 'general', '2023-07-23 07:43:17', '2023-07-23 08:07:23'),
(4, 'website_currency', 'SAR', 'general', '2023-07-23 07:43:17', '2023-07-23 08:08:10'),
(5, 'social_facebook', '#facebook', 'general', '2023-07-23 07:43:17', '2023-07-23 08:11:49'),
(6, 'social_twitter', '#twitter', 'general', '2023-07-23 07:43:17', '2023-07-23 08:11:55'),
(7, 'social_insta', '#insta', 'general', '2023-07-23 07:43:17', '2023-07-23 08:11:59'),
(8, 'website_linkedin', '#linkedin', 'general', '2023-07-23 07:43:17', '2023-07-23 08:12:05'),
(9, 'social_youtube', '#youtube', 'general', '2023-07-23 07:43:17', '2023-07-23 08:12:56'),
(10, 'website_whastapp', '201026051966', 'general', '2023-07-23 08:07:59', '2023-07-23 08:07:59'),
(11, 'website_logo', '18', 'general', '2023-07-23 08:21:29', '2023-07-26 09:54:01'),
(12, 'meta_title', NULL, 'general', '2023-07-23 08:39:15', '2023-07-23 08:39:15'),
(13, 'meta_description', NULL, 'general', '2023-07-23 08:39:15', '2023-07-23 08:39:15'),
(14, 'thawani_enable', 'active', 'payments', '2023-07-23 09:46:51', '2023-07-26 08:32:30'),
(15, 'thawani_api_key', 'rRQ26GcsZzoEhbrP2HZvLYDbn9C9et', 'payments', '2023-07-23 09:46:51', '2023-07-29 05:20:38'),
(16, 'thawani_public_key', 'HGvTMLDssJghr9tlN9gr4DVYt0qyBy', 'payments', '2023-07-23 09:46:51', '2023-07-29 05:20:38'),
(17, 'thawani_logo', '17', 'payments', '2023-07-23 09:46:51', '2023-07-26 08:32:30'),
(18, 'payments', 'thawani', 'payments', '2023-07-23 09:50:11', '2023-07-26 08:32:30'),
(19, 'thawani_title', 'ثوانى للدفع الالكترونى', 'payments', '2023-07-23 10:12:51', '2023-07-26 08:32:30'),
(20, 'website_address', 'مدينة الرياض حي المدينة الصناعية الجديدة عمارة رقم 12', 'general', '2023-07-26 11:08:54', '2023-07-26 11:08:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
