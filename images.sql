-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 01, 2023 at 11:36 AM
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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `created_at`, `updated_at`, `name`, `size`, `type`, `alt`) VALUES
(1, 'services/image/9dXczMf2Hm1690131328.jfif', '2023-07-23 13:55:28', '2023-07-23 13:55:28', '9dXczMf2Hm1690131328.jfif', '5094', 'image/jpeg', NULL),
(2, 'services/image/YtdrNlflHl1690131328.png', '2023-07-23 13:55:28', '2023-07-23 13:55:28', 'YtdrNlflHl1690131328.png', '2690', 'image/png', NULL),
(17, 'services/image/Mr5YaJKXZh1690142820.png', '2023-07-23 17:07:00', '2023-07-23 17:07:00', 'Mr5YaJKXZh1690142820.png', '3069', 'image/png', NULL),
(4, 'services/image/LxP7HlPTj11690131920.jfif', '2023-07-23 14:05:21', '2023-07-23 14:05:21', 'LxP7HlPTj11690131920.jfif', '200546', 'image/jpeg', NULL),
(5, 'services/image/u31RCRMQ651690131921.jpg', '2023-07-23 14:05:21', '2023-07-23 14:05:21', 'u31RCRMQ651690131921.jpg', '390599', 'image/jpeg', NULL),
(6, 'services/image/HYD7cjSVmi1690131921.jpg', '2023-07-23 14:05:21', '2023-07-23 14:05:21', 'HYD7cjSVmi1690131921.jpg', '245579', 'image/jpeg', NULL),
(7, 'services/image/iDQkBQF1wA1690131921.png', '2023-07-23 14:05:21', '2023-07-23 14:05:21', 'iDQkBQF1wA1690131921.png', '168331', 'image/png', NULL),
(8, 'services/image/jD6WXeCYG81690131921.png', '2023-07-23 14:05:21', '2023-07-23 14:05:21', 'jD6WXeCYG81690131921.png', '459177', 'image/png', NULL),
(9, 'services/image/kl1XL9jPN81690131921.png', '2023-07-23 14:05:21', '2023-07-23 14:05:21', 'kl1XL9jPN81690131921.png', '101603', 'image/png', NULL),
(10, 'services/image/OZDaRjBy7V1690131921.jpg', '2023-07-23 14:05:21', '2023-07-23 14:05:21', 'OZDaRjBy7V1690131921.jpg', '6550', 'image/jpeg', NULL),
(11, 'services/image/vgCjJlAfYq1690131921.jpg', '2023-07-23 14:05:21', '2023-07-23 14:05:21', 'vgCjJlAfYq1690131921.jpg', '5487', 'image/jpeg', NULL),
(12, 'services/image/59ULuke8pW1690131921.jpg', '2023-07-23 14:05:21', '2023-07-23 14:05:21', '59ULuke8pW1690131921.jpg', '4610', 'image/jpeg', NULL),
(13, 'services/image/iCaziP4Ew21690131921.jpg', '2023-07-23 14:05:21', '2023-07-23 14:05:21', 'iCaziP4Ew21690131921.jpg', '5324', 'image/jpeg', NULL),
(14, 'services/image/OHh2naVEaV1690131921.jpg', '2023-07-23 14:05:21', '2023-07-23 14:05:21', 'OHh2naVEaV1690131921.jpg', '4503', 'image/jpeg', NULL),
(15, 'services/image/RWGTtXH5ft1690131921.jpg', '2023-07-23 14:05:21', '2023-07-23 14:05:21', 'RWGTtXH5ft1690131921.jpg', '3530', 'image/jpeg', NULL),
(18, 'services/image/zzBPkspB0E1690376014.png', '2023-07-26 09:53:34', '2023-07-26 09:53:34', 'zzBPkspB0E1690376014.png', '157650', 'image/png', NULL),
(19, 'services/image/5CXBxBCRS21690408367.png', '2023-07-26 18:52:47', '2023-07-26 18:52:47', '5CXBxBCRS21690408367.png', '63547', 'image/png', NULL),
(20, 'services/image/dYBhoSoPJl1690447576.pdf', '2023-07-27 05:46:17', '2023-07-27 05:46:17', 'dYBhoSoPJl1690447576.pdf', '175858', 'application/pdf', NULL),
(21, 'services/image/ymqCM7XV7M1690667039.PNG', '2023-07-29 18:43:59', '2023-07-29 18:43:59', 'ymqCM7XV7M1690667039.PNG', '45994', 'image/png', NULL),
(22, 'services/image/AE3SBkZBUb1690667774.mp4', '2023-07-29 18:56:14', '2023-07-29 18:56:14', 'AE3SBkZBUb1690667774.mp4', '1570024', 'video/mp4', NULL),
(23, 'services/image/yBPleD0PdI1690667874.mp4', '2023-07-29 18:57:54', '2023-07-29 18:57:54', 'yBPleD0PdI1690667874.mp4', '1570024', 'video/mp4', NULL),
(24, 'services/image/uU4utynmjV1690668042.mp4', '2023-07-29 19:00:43', '2023-07-29 19:00:43', 'uU4utynmjV1690668042.mp4', '1570024', 'video/mp4', NULL),
(25, 'services/image/HCF90eIYQc1690668122.mp4', '2023-07-29 19:02:02', '2023-07-29 19:02:02', 'HCF90eIYQc1690668122.mp4', '1570024', 'video/mp4', NULL),
(26, 'services/image/t06wvs8KKx1690668167.mp4', '2023-07-29 19:02:47', '2023-07-29 19:02:47', 't06wvs8KKx1690668167.mp4', '1570024', 'video/mp4', NULL),
(27, 'services/image/EJGnuacdBU1690668189.mp4', '2023-07-29 19:03:09', '2023-07-29 19:03:09', 'EJGnuacdBU1690668189.mp4', '1570024', 'video/mp4', NULL),
(28, 'services/image/ywTWQtBcwN1690668215.pdf', '2023-07-29 19:03:36', '2023-07-29 19:03:36', 'ywTWQtBcwN1690668215.pdf', '761473', 'application/pdf', NULL),
(29, 'services/image/W824zDfkL01690668367.mp4', '2023-07-29 19:06:07', '2023-07-29 19:06:07', 'W824zDfkL01690668367.mp4', '1570024', 'video/mp4', NULL),
(30, 'services/image/HVSlV8DZVN1690668374.PNG', '2023-07-29 19:06:14', '2023-07-29 19:06:14', 'HVSlV8DZVN1690668374.PNG', '45994', 'image/png', NULL),
(31, 'services/image/yI0TOBHxEm1690726727.png', '2023-07-30 11:18:47', '2023-07-30 11:18:47', 'yI0TOBHxEm1690726727.png', '293861', 'image/png', NULL),
(32, 'services/image/LnzBkZmXZx1690727734.png', '2023-07-30 11:35:34', '2023-07-30 11:35:34', 'LnzBkZmXZx1690727734.png', '8844', 'image/png', NULL),
(33, 'services/image/KKmogRAdaO1690727734.png', '2023-07-30 11:35:34', '2023-07-30 11:35:34', 'KKmogRAdaO1690727734.png', '3959', 'image/png', NULL),
(34, 'services/image/SSmMw1T2Rm1690727734.png', '2023-07-30 11:35:34', '2023-07-30 11:35:34', 'SSmMw1T2Rm1690727734.png', '4366', 'image/png', NULL),
(35, 'services/image/soJhlkOhrG1690727734.png', '2023-07-30 11:35:34', '2023-07-30 11:35:34', 'soJhlkOhrG1690727734.png', '2305', 'image/png', NULL),
(36, 'services/image/wwbXdHnlDG1690727734.png', '2023-07-30 11:35:34', '2023-07-30 11:35:34', 'wwbXdHnlDG1690727734.png', '6056', 'image/png', NULL),
(37, 'services/image/wwIc2AfxVj1690728795.png', '2023-07-30 11:53:15', '2023-07-30 11:53:15', 'wwIc2AfxVj1690728795.png', '4366', 'image/png', NULL),
(38, 'services/image/cDEvl6WFTg1690729720.jpg', '2023-07-30 12:08:40', '2023-07-30 12:08:40', 'cDEvl6WFTg1690729720.jpg', '31488', 'image/jpeg', NULL),
(39, 'services/image/iyCUPZkpy11690729742.jpg', '2023-07-30 12:09:02', '2023-07-30 12:09:02', 'iyCUPZkpy11690729742.jpg', '70159', 'image/jpeg', NULL),
(40, 'services/image/GpDLLUTAAr1690730938.jpg', '2023-07-30 12:28:58', '2023-07-30 12:28:58', 'GpDLLUTAAr1690730938.jpg', '42194', 'image/jpeg', NULL),
(41, 'services/image/338aMHOaXW1690732278.jpg', '2023-07-30 12:51:18', '2023-07-30 12:51:18', '338aMHOaXW1690732278.jpg', '80149', 'image/jpeg', NULL),
(42, 'services/image/oTqvnw3ONV1690732849.jpg', '2023-07-30 13:00:49', '2023-07-30 13:00:49', 'oTqvnw3ONV1690732849.jpg', '42001', 'image/jpeg', NULL),
(43, 'services/image/YbDrsKjcxk1690733454.png', '2023-07-30 13:10:54', '2023-07-30 13:10:54', 'YbDrsKjcxk1690733454.png', '82210', 'image/png', NULL),
(44, 'services/image/IAL4AnAV7T1690756179.jpg', '2023-07-30 19:29:39', '2023-07-30 19:29:39', 'IAL4AnAV7T1690756179.jpg', '50597', 'image/jpeg', NULL),
(45, 'services/image/9EP05qOlXn1690797790.csv', '2023-07-31 07:03:10', '2023-07-31 07:03:10', '9EP05qOlXn1690797790.csv', '761', 'text/csv', NULL),
(46, 'services/image/bebo.png_1690799134.png', '2023-07-31 07:25:34', '2023-07-31 07:25:34', 'bebo.png_1690799134.png', '206231', 'image/png', NULL),
(47, 'services/image/00Capture_1690799262.PNG', '2023-07-31 07:27:42', '2023-07-31 07:27:42', '00Capture_1690799262.PNG', '14893', 'image/png', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
