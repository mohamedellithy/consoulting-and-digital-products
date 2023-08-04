-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 01, 2023 at 11:10 AM
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
-- Table structure for table `application_orders`
--

DROP TABLE IF EXISTS `application_orders`;
CREATE TABLE IF NOT EXISTS `application_orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscriber_notic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `application_orders_customer_id_foreign` (`customer_id`),
  KEY `application_orders_service_id_foreign` (`service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_orders`
--

INSERT INTO `application_orders` (`id`, `customer_id`, `service_id`, `name`, `phone`, `subscriber_notic`, `created_at`, `updated_at`) VALUES
(1, 22, 10, 'mohamed ellithy', '201026051966', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص', '2023-07-28 10:52:50', '2023-07-28 10:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

DROP TABLE IF EXISTS `downloads`;
CREATE TABLE IF NOT EXISTS `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `download_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `download_description` text COLLATE utf8mb4_unicode_ci,
  `download_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_attachments_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'download',
  `download_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pdf',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `downloads_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `product_id`, `download_name`, `download_description`, `download_link`, `download_attachments_id`, `download_status`, `download_type`, `created_at`, `updated_at`) VALUES
(1, 8, 'شرح كيفية التسويق الاون لاين ب', 'شرح كيفية التسويق الاون لاين شرح كيفية التسويق الاون لاين شرح كيفية التسويق الاون لاين', NULL, '20', 'download', 'pdf', '2023-07-27 05:48:35', '2023-07-27 06:04:01'),
(2, 9, 'منتج جديد اختبار ال summernot', '<h4><span style=\"font-weight: 700; font-family: Tajawal;\"><font color=\"#ff0000\">منتج جديد اختبار ال summernot</font></span></h4><h4><span style=\"font-weight: 700; font-family: Tajawal;\"><font color=\"#ff0000\"><br></font></span></h4><p><span style=\"font-family: Tajawal;\">منتج جديد اختبار ال summernot&nbsp;</span><span style=\"text-align: var(--bs-body-text-align); font-family: Tajawal;\">منتج جديد اختبار ال summernot&nbsp;</span><span style=\"text-align: var(--bs-body-text-align); font-family: Tajawal;\">منتج جديد اختبار ال summernot&nbsp;</span><span style=\"text-align: var(--bs-body-text-align); font-family: Tajawal;\">منتج جديد اختبار ال summernot</span><span style=\"text-align: var(--bs-body-text-align); font-family: Tajawal;\">منتج جديد اختبار ال summernot</span><span style=\"text-align: var(--bs-body-text-align); font-family: Tajawal;\">منتج جديد اختبار ال summernot</span><span style=\"text-align: var(--bs-body-text-align); font-family: Tajawal;\">منتج جديد اختبار ال summernot&nbsp;</span><span style=\"text-align: var(--bs-body-text-align); font-family: Tajawal;\">منتج جديد اختبار ال summernot&nbsp;</span><span style=\"text-align: var(--bs-body-text-align); font-family: Tajawal;\">منتج جديد اختبار ال summernot</span><span style=\"text-align: var(--bs-body-text-align); font-family: Tajawal;\">منتج جديد اختبار ال summernot</span><span style=\"text-align: var(--bs-body-text-align); font-family: Tajawal;\">منتج جديد اختبار ال summernot</span><span style=\"text-align: var(--bs-body-text-align); font-family: Tajawal;\">منتج جديد اختبار ال summernot</span><span style=\"text-align: var(--bs-body-text-align); font-family: Tajawal;\">منتج جديد اختبار ال summernot&nbsp;</span><span style=\"text-align: var(--bs-body-text-align); font-family: Tajawal;\">منتج جديد اختبار ال summernot</span></p><hr><p><br></p>', NULL, NULL, 'download', 'pdf', '2023-07-27 09:00:22', '2023-07-27 09:17:44'),
(3, 7, 'ملف PDF دعائي مصحوب بصوت عنائي موثق', '<p><span style=\"font-family: Tajawal;\">ملف PDF دعائي مصحوب بصوت عنائي موثق&nbsp;ملف PDF دعائي مصحوب بصوت عنائي موثق&nbsp;ملف PDF دعائي مصحوب بصوت عنائي موثق&nbsp;ملف PDF دعائي مصحوب بصوت عنائي موثق&nbsp;ملف PDF دعائي مصحوب بصوت عنائي موثق&nbsp;ملف PDF دعائي مصحوب بصوت عنائي موثق&nbsp;ملف PDF دعائي مصحوب بصوت عنائي موثق&nbsp;ملف PDF دعائي مصحوب بصوت عنائي موثق&nbsp;ملف PDF دعائي مصحوب بصوت عنائي موثق&nbsp;ملف PDF دعائي مصحوب بصوت عنائي موثق&nbsp;ملف PDF دعائي مصحوب بصوت عنائي موثق&nbsp;ملف PDF دعائي مصحوب بصوت عنائي موثق&nbsp;ملف PDF دعائي مصحوب بصوت عنائي موثق&nbsp;</span><br></p>', NULL, '20,22', 'without_download', 'pdf', '2023-07-29 12:15:12', '2023-07-30 05:25:10'),
(4, 10, 'منتج حديث و ممتع فيلم روائي عن الشرق الاوسط', '<p><span style=\"font-weight: 700;\"><span style=\"font-family: Tajawal;\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</span></span></p><p><span style=\"font-family: Tajawal;\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسطمنتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسطمنتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسط</span></p><p><span style=\"font-family: Tajawal;\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسطمنتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسطمنتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسط</span><span style=\"font-family: Tajawal;\"><br></span><span style=\"font-weight: 700;\"><span style=\"font-family: Tajawal;\"><br></span></span><br></p>', NULL, '28', 'without_download', 'pdf', '2023-07-31 11:58:26', '2023-07-31 12:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_13_141525_create_images_table', 1),
(6, '2023_07_13_142237_create_services_table', 1),
(9, '2023_07_17_115209_create_products_table', 2),
(12, '2023_07_20_143326_create_orders_table', 3),
(13, '2023_07_20_153922_create_order_items_table', 3),
(14, '2023_07_22_095546_create_payments_table', 4),
(15, '2023_07_22_122546_create_pages_table', 5),
(16, '2023_07_23_101429_create_settings_table', 6),
(17, '2023_07_27_082940_create_downloads_table', 7),
(20, '2023_07_28_084519_create_application_orders_table', 8),
(21, '2023_08_01_090713_create_reviews_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_total` double NOT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_customer_id_foreign` (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `customer_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(101, 'JKFtu25', 25, 100, 'pending', '2023-07-31 18:50:46', '2023-07-31 18:50:46'),
(102, 'FjwX125', 25, 100, 'pending', '2023-07-31 18:51:34', '2023-07-31 18:51:34'),
(103, 'cX7w825', 25, 100, 'pending', '2023-07-31 18:54:17', '2023-07-31 18:54:17'),
(104, 'wsIZO25', 25, 100, 'pending', '2023-07-31 18:54:40', '2023-07-31 18:54:40'),
(105, 'R9Voi25', 25, 100, 'pending', '2023-07-31 18:55:26', '2023-07-31 18:55:26'),
(106, '4DcJQ25', 25, 100, 'pending', '2023-07-31 18:56:20', '2023-07-31 18:56:20'),
(107, 'kVHiA25', 25, 100, 'pending', '2023-07-31 18:56:52', '2023-07-31 18:56:52'),
(108, '8UQD225', 25, 100, 'pending', '2023-07-31 18:57:41', '2023-07-31 18:57:41'),
(109, 'exPet25', 25, 100, 'pending', '2023-07-31 18:58:23', '2023-07-31 18:58:23'),
(110, 'aUU9V25', 25, 100, 'completed', '2023-07-31 18:58:45', '2023-07-31 18:59:25'),
(111, 'oH1lb25', 25, 178.14, 'pending', '2023-07-31 20:23:50', '2023-07-31 20:23:50'),
(100, 'v6ZiL25', 25, 100, 'pending', '2023-07-31 18:50:09', '2023-07-31 18:50:09'),
(99, 'WcdbG25', 25, 100, 'pending', '2023-07-31 18:49:57', '2023-07-31 18:49:57'),
(98, 'B4xOn25', 25, 100, 'pending', '2023-07-31 18:49:28', '2023-07-31 18:49:28'),
(97, 'nifYz25', 25, 100, 'pending', '2023-07-31 18:49:13', '2023-07-31 18:49:13'),
(96, 'cm7Bw25', 25, 100, 'pending', '2023-07-31 18:48:40', '2023-07-31 18:48:40'),
(95, 'Ry9q025', 25, 100, 'pending', '2023-07-31 18:47:17', '2023-07-31 18:47:17'),
(94, 'BqneS25', 25, 100, 'pending', '2023-07-31 18:46:58', '2023-07-31 18:46:58'),
(93, 'noC3L25', 25, 100, 'pending', '2023-07-31 18:45:06', '2023-07-31 18:45:06'),
(92, '9CH3J25', 25, 100, 'pending', '2023-07-31 18:44:19', '2023-07-31 18:44:19'),
(91, 'u5Aib22', 22, 879, 'completed', '2023-07-30 06:45:47', '2023-07-30 06:46:14'),
(90, 'zkuA01', 1, 879, 'pending', '2023-07-30 04:09:33', '2023-07-30 04:09:57'),
(89, 'VZSAD1', 1, 187.24, 'completed', '2023-07-30 04:08:09', '2023-07-30 04:08:40'),
(88, 'y4S3z22', 22, 879, 'completed', '2023-07-29 09:34:57', '2023-07-30 06:31:17'),
(87, 'fwa9t22', 22, 879, 'completed', '2023-07-29 09:33:57', '2023-07-29 09:34:24'),
(86, 'Phknz22', 22, 400, 'completed', '2023-07-29 09:24:46', '2023-07-29 09:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(105, 111, 8, 1, '2023-07-31 20:23:50', '2023-07-31 20:23:50'),
(104, 110, 10, 1, '2023-07-31 18:58:45', '2023-07-31 18:58:45'),
(103, 109, 10, 1, '2023-07-31 18:58:23', '2023-07-31 18:58:23'),
(102, 108, 10, 1, '2023-07-31 18:57:41', '2023-07-31 18:57:41'),
(101, 107, 10, 1, '2023-07-31 18:56:52', '2023-07-31 18:56:52'),
(100, 106, 10, 1, '2023-07-31 18:56:20', '2023-07-31 18:56:20'),
(99, 105, 10, 1, '2023-07-31 18:55:26', '2023-07-31 18:55:26'),
(98, 104, 10, 1, '2023-07-31 18:54:40', '2023-07-31 18:54:40'),
(97, 103, 10, 1, '2023-07-31 18:54:17', '2023-07-31 18:54:17'),
(96, 102, 10, 1, '2023-07-31 18:51:34', '2023-07-31 18:51:34'),
(95, 101, 10, 1, '2023-07-31 18:50:46', '2023-07-31 18:50:46'),
(94, 100, 10, 1, '2023-07-31 18:50:09', '2023-07-31 18:50:09'),
(93, 99, 10, 1, '2023-07-31 18:49:57', '2023-07-31 18:49:57'),
(92, 98, 10, 1, '2023-07-31 18:49:28', '2023-07-31 18:49:28'),
(91, 97, 10, 1, '2023-07-31 18:49:13', '2023-07-31 18:49:13'),
(90, 96, 10, 1, '2023-07-31 18:48:40', '2023-07-31 18:48:40'),
(89, 95, 10, 1, '2023-07-31 18:47:17', '2023-07-31 18:47:17'),
(88, 94, 10, 1, '2023-07-31 18:46:58', '2023-07-31 18:46:58'),
(87, 93, 10, 1, '2023-07-31 18:45:06', '2023-07-31 18:45:06'),
(86, 92, 10, 1, '2023-07-31 18:44:19', '2023-07-31 18:44:19'),
(85, 91, 7, 1, '2023-07-30 06:45:47', '2023-07-30 06:45:47'),
(84, 90, 7, 1, '2023-07-30 04:09:33', '2023-07-30 04:09:33'),
(83, 89, 9, 1, '2023-07-30 04:08:09', '2023-07-30 04:08:09'),
(82, 88, 7, 1, '2023-07-29 09:34:57', '2023-07-29 09:34:57'),
(81, 87, 7, 1, '2023-07-29 09:33:57', '2023-07-29 09:33:57'),
(80, 86, 3, 1, '2023-07-29 09:24:46', '2023-07-29 09:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_id` bigint(20) UNSIGNED DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'header',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`),
  KEY `pages_image_foreign` (`thumbnail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `thumbnail_id`, `content`, `position`, `status`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'الرئيسية', '/', NULL, 'a:9:{s:13:\"slider_banner\";a:5:{s:6:\"enable\";s:6:\"active\";s:7:\"heading\";s:64:\"الخطوة الرائدة للتجارة و الاستثمار\";s:11:\"sub_heading\";s:42:\"نحن خبراء في هذا المجال\";s:11:\"description\";s:216:\"تمتلك وكالة الخطوة الرائدة للتجارة و الاستثمار امكانيات فريدة و متميزة لتحقيق النتائج السريعة و تحقيق أعلى مكاسب حيدا\";s:12:\"thumbnail_id\";s:2:\"31\";}s:14:\"partner_banner\";a:3:{s:6:\"enable\";s:6:\"active\";s:11:\"sub_heading\";s:76:\"موثوق به من قبل أكثر من 10000 شركة حول العالم\";s:13:\"thumbnails_id\";s:17:\"32,33,34,35,36,37\";}s:12:\"about_banner\";a:6:{s:6:\"enable\";s:6:\"active\";s:7:\"heading\";s:93:\"الخطوة الرائدة للتجارة و الاستثمار فى الشرق الأوسط\";s:11:\"sub_heading\";s:19:\"تعرف علينا\";s:11:\"description\";s:1674:\"<p> <span style=\"font-family: Tajawal;\">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ... وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.\r\n\r\nلوريم ايبسوم هو نموذج افتراضي</span></p><p><span style=\"font-family: Tajawal;\"><br></span></p><p><span style=\"font-family: Tajawal;\"> يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ... وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.</span> </p>\";s:16:\"thumbnail_id_big\";s:2:\"38\";s:18:\"thumbnail_id_small\";s:2:\"39\";}s:15:\"services_banner\";a:4:{s:6:\"enable\";s:6:\"active\";s:7:\"heading\";s:78:\"تسليط الضوء على البعض الخدمات المهمة لدينا\";s:11:\"sub_heading\";s:29:\"خدماتنا المخصصة\";s:11:\"description\";s:122:\"تقدم وكالة الخطوة الرائدة للتجارة و الاستثمار خدمات فريدة و متنوعة\";}s:16:\"introduce_banner\";a:5:{s:6:\"enable\";s:6:\"active\";s:7:\"heading\";s:67:\"تغيير طريقة العمل لأفضل حلول الأعمال\";s:11:\"sub_heading\";s:24:\"ماذا نحن نقدم\";s:11:\"description\";s:973:\"<p><span style=\"color: rgb(104, 119, 153); font-family: Tajawal, sans-serif; font-size: 16px;\">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ... وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم</span></p><p><span style=\"color: rgb(104, 119, 153); font-family: Tajawal, sans-serif; font-size: 16px;\"> ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.</span><br></p>\";s:12:\"thumbnail_id\";s:2:\"40\";}s:15:\"products_banner\";a:3:{s:6:\"enable\";s:6:\"active\";s:7:\"heading\";s:103:\"توفر الخطوة الرائدة العديد من المنتجات الرقمية المتميزة\";s:11:\"sub_heading\";s:31:\"منتجاتنا الرقمية\";}s:14:\"contact_banner\";a:3:{s:6:\"enable\";s:6:\"active\";s:7:\"heading\";s:26:\"قم بتواصل معنا\";s:11:\"description\";s:207:\"تعتمد الوكالة على التواصل مع عملائها و متابعيها بشكل دائم من اجل حل مشاكلهم و الاطلاع على استفساراتهم و ملاحظاتهم\";}s:20:\"why_choice_us_banner\";a:5:{s:6:\"enable\";s:6:\"active\";s:7:\"heading\";s:116:\"لدى الخطوة الرائدة العديد من المزايا و الخدمات المهمة و المفيدة\";s:11:\"sub_heading\";s:44:\"لماذا نحن أفضل اختيار لك\";s:11:\"description\";s:517:\"<p><span style=\"color: rgb(104, 119, 153); font-family: Tajawal, sans-serif; font-size: 16px;\">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ... وعند موافقه العميل المبدئيه على التصميم</span><br></p>\";s:12:\"thumbnail_id\";s:2:\"42\";}s:18:\"our_reviews_banner\";a:4:{s:6:\"enable\";s:6:\"active\";s:7:\"heading\";s:98:\"تهتم دائما منصتنا على تحسين خدماتها لتنول رضا عملائها\";s:11:\"sub_heading\";s:41:\"تجارب عملائنا و ارائهم\";s:12:\"thumbnail_id\";s:2:\"43\";}}', 'both', 'active', 'الرئيسية', 'الرئيسية وصف', '2023-07-22 09:39:07', '2023-07-30 13:11:21'),
(2, 'المنتجات', 'shop', NULL, 'a:1:{s:4:\"shop\";a:2:{s:11:\"sub_heading\";s:31:\"منتجاتنا الرقمية\";s:7:\"heading\";s:103:\"توفر الخطوة الرائدة العديد من المنتجات الرقمية المتميزة\";}}', 'header', 'active', NULL, NULL, '2023-07-22 09:39:07', '2023-07-30 13:23:27'),
(3, 'الخدمات', 'services', NULL, 'a:1:{s:8:\"services\";a:2:{s:11:\"sub_heading\";s:14:\"خدماتنا\";s:7:\"heading\";s:66:\"تصفح خدماتنا و استفد من مميزات عديدة\";}}', 'both', 'active', NULL, NULL, '2023-07-22 09:39:07', '2023-07-30 13:46:03'),
(7, 'من نحن', 'من-نحن', 42, '<h4 style=\"margin-bottom: 0px; font-size: 16px; line-height: var(--tg-body-line-height); color: rgb(104, 119, 153); width: 567px;\"><font face=\"Tajawal\"><b>الخطوة الرائدة للتجارة و الاستثمار فى الشرق الاوسط</b></font></h4><h4 style=\"margin-bottom: 0px; font-size: 16px; line-height: var(--tg-body-line-height); color: rgb(104, 119, 153); width: 567px;\"><font face=\"Tajawal\"><b><br></b></font></h4><p style=\"margin-bottom: 0px; font-size: 16px; line-height: var(--tg-body-line-height); color: rgb(104, 119, 153); width: 567px; font-family: Tajawal, sans-serif;\"><span style=\"font-family: Tajawal;\">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ... وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي. لوريم ايبسوم هو نموذج افتراضي</span></p><p style=\"margin-bottom: 0px; font-size: 16px; line-height: var(--tg-body-line-height); color: rgb(104, 119, 153); width: 567px; font-family: Tajawal, sans-serif;\"><span style=\"font-family: Tajawal;\"><br></span></p><p style=\"margin-bottom: 0px; font-size: 16px; line-height: var(--tg-body-line-height); color: rgb(104, 119, 153); width: 567px; font-family: Tajawal, sans-serif;\"><span style=\"font-family: Tajawal;\">يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ... وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.</span></p>', 'both', 'active', 'الخطوة الرائدة للتجارة و الاستثمار', 'الخطوة الرائدة للتجارة و الاستثمار فى الشرق الأوسط', '2023-07-22 12:14:36', '2023-07-30 14:32:03'),
(8, 'تواصل معنا', 'contact-us', 40, '<h5><span style=\"font-family: Tajawal;\"><b style=\"\"><font color=\"#731842\" style=\"\">مكتبنا فى الامارات العربية المتحدة</font></b></span></h5><ul class=\"list-wrap\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Plus Jakarta Sans&quot;, sans-serif; font-size: 16px;\"><li style=\"list-style: none; font-size: 18px; margin-bottom: 10px; line-height: 1.33; font-family: var(--tg-heading-font-family);\"><span style=\"font-family: Tajawal;\">100 Wilshire Blvd, Suite 700 Santa Monica, CA 90401, USA +1 (310) 620-8565</span></li><li style=\"list-style: none; font-size: 18px; margin-bottom: 10px; line-height: 1.33; font-family: var(--tg-heading-font-family);\"><b style=\"\"><span style=\"font-family: Tajawal;\"><font color=\"#634aa5\">البريد الالكترونى</font></span></b></li><li style=\"list-style: none; font-size: 18px; margin-bottom: 0px; line-height: 1.33; font-family: var(--tg-heading-font-family);\">info@gmail.com</li></ul><p style=\"list-style: none; font-size: 18px; margin-bottom: 0px; line-height: 1.33; font-family: var(--tg-heading-font-family);\"><br></p><h5><span style=\"font-family: Tajawal;\"><b><font color=\"#731842\">مكتبنا فى الممكلة العربية السعودية</font></b></span></h5><ul class=\"list-wrap\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: &quot;Plus Jakarta Sans&quot;, sans-serif; font-size: 16px;\"><li style=\"list-style: none; font-size: 18px; margin-bottom: 10px; line-height: 1.33; font-family: var(--tg-heading-font-family);\"><span style=\"font-family: Tajawal;\">100 Wilshire Blvd, Suite 700 Santa Monica, CA 90401, USA +1 (310) 620-8565</span></li><li style=\"list-style: none; font-size: 18px; margin-bottom: 10px; line-height: 1.33; font-family: var(--tg-heading-font-family);\"><span style=\"font-weight: 700;\"><span style=\"font-family: Tajawal;\"><font color=\"#634aa5\">البريد الالكترونى</font></span></span></li><li style=\"list-style: none; font-size: 18px; margin-bottom: 0px; line-height: 1.33; font-family: var(--tg-heading-font-family);\">info@gmail.com</li></ul><p style=\"list-style: none; font-size: 18px; margin-bottom: 0px; line-height: 1.33; font-family: var(--tg-heading-font-family);\"><br></p><p style=\"list-style: none; font-size: 18px; margin-bottom: 0px; line-height: 1.33; font-family: var(--tg-heading-font-family);\"><br></p>', 'both', 'active', NULL, NULL, '2023-07-22 12:15:07', '2023-07-30 19:45:42'),
(10, 'سياسة الخصوصية', 'سياسة-الخصوصية', 44, '<h4 style=\"margin-bottom: 0px; font-weight: var(--tg-heading-font-weight); line-height: var(--tg-body-line-height); font-size: 16px; font-family: Tajawal, sans-serif; width: 567px;\"><font face=\"Tajawal\" style=\"\" color=\"#634aa5\"><span style=\"font-weight: bolder;\">الخطوة الرائدة للتجارة و الاستثمار فى الشرق الاوسط</span></font></h4><h4 style=\"margin-bottom: 0px; font-weight: var(--tg-heading-font-weight); line-height: var(--tg-body-line-height); font-size: 16px; font-family: Tajawal, sans-serif; color: rgb(104, 119, 153); width: 567px;\"><font face=\"Tajawal\"><span style=\"font-weight: bolder;\"><br></span></font></h4><p style=\"margin-bottom: 0px; font-size: 16px; line-height: var(--tg-body-line-height); font-family: Tajawal, sans-serif; width: 567px;\"><span style=\"font-family: Tajawal;\"><font color=\"#424242\">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ... وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي. لوريم ايبسوم هو نموذج افتراضي</font></span></p><p style=\"margin-bottom: 0px; font-size: 16px; line-height: var(--tg-body-line-height); color: rgb(104, 119, 153); font-family: Tajawal, sans-serif; width: 567px;\"><span style=\"font-family: Tajawal;\"><br></span></p><h4 style=\"margin-bottom: 0px; font-weight: var(--tg-heading-font-weight); line-height: var(--tg-body-line-height); font-size: 16px; font-family: Tajawal, sans-serif; width: 567px;\"><font face=\"Tajawal\" style=\"\" color=\"#311873\"><span style=\"font-weight: bolder;\">الخطوة الرائدة للتجارة و الاستثمار فى الشرق الاوسط</span></font></h4><h4 style=\"margin-bottom: 0px; font-weight: var(--tg-heading-font-weight); line-height: var(--tg-body-line-height); font-size: 16px; font-family: Tajawal, sans-serif; width: 567px;\"><font face=\"Tajawal\" style=\"\" color=\"#311873\"><span style=\"font-weight: bolder;\"><br></span></font></h4><p style=\"margin-bottom: 0px; font-size: 16px; line-height: var(--tg-body-line-height); font-family: Tajawal, sans-serif; width: 567px;\"><span style=\"font-family: Tajawal;\"><font color=\"#424242\">يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ... وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.</font></span></p><p style=\"margin-bottom: 0px; font-size: 16px; line-height: var(--tg-body-line-height); color: rgb(104, 119, 153); font-family: Tajawal, sans-serif; width: 567px;\"><span style=\"font-family: Tajawal;\"><br></span></p><h4 style=\"margin-bottom: 0px; font-weight: var(--tg-heading-font-weight); line-height: var(--tg-body-line-height); font-size: 16px; font-family: Tajawal, sans-serif; width: 567px;\"><font face=\"Tajawal\" style=\"\" color=\"#731842\"><span style=\"font-weight: bolder;\">الخطوة الرائدة للتجارة و الاستثمار فى الشرق الاوسط</span></font></h4><h4 style=\"margin-bottom: 0px; font-weight: var(--tg-heading-font-weight); line-height: var(--tg-body-line-height); font-size: 16px; font-family: Tajawal, sans-serif; width: 567px;\"><font face=\"Tajawal\" style=\"\" color=\"#731842\"><span style=\"font-weight: bolder;\"><br></span></font></h4><p style=\"margin-bottom: 0px; font-size: 16px; line-height: var(--tg-body-line-height); font-family: Tajawal, sans-serif; width: 567px;\"><font color=\"#424242\"><span style=\"font-family: Tajawal;\">يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ... وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.&nbsp;</span><span style=\"font-family: Tajawal; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">انترنت ... وعند موافقه العميل</span></font></p><p style=\"margin-bottom: 0px; font-size: 16px; line-height: var(--tg-body-line-height); color: rgb(104, 119, 153); font-family: Tajawal, sans-serif; width: 567px;\"><span style=\"font-family: Tajawal; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><br></span></p><p style=\"margin-bottom: 0px; font-size: 16px; line-height: var(--tg-body-line-height); font-family: Tajawal, sans-serif; width: 567px;\"><font color=\"#424242\"><span style=\"font-family: Tajawal; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.&nbsp;</span><span style=\"font-family: Tajawal; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">انترنت ... وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.</span></font></p>', 'both', 'active', 'سياسة الخصوصية', 'سياسة الخصوصية الخطوة الرائدة للتجارة و الاستثمار', '2023-07-30 19:26:24', '2023-07-30 19:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mohamedellithyfreelanc@gmail.com', '$2y$10$QA7s5xKodj4AxOV1CoNg7e1HqV7ggBkj3a5kZ7jbLL7cKX7dkEKfu', '2023-07-31 20:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not-paid',
  `getaway` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'thawani',
  `total_payment` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payments_order_id_foreign` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `transaction_id`, `status_payment`, `getaway`, `total_payment`, `created_at`, `updated_at`) VALUES
(21, 110, '20230731212407', 'paid', 'thawani', 100, '2023-07-31 18:58:46', '2023-07-31 18:59:25'),
(19, 91, '20230730211875', 'paid', 'thawani', 879, '2023-07-30 06:45:48', '2023-07-30 06:46:14'),
(20, 109, '20230731212406', 'unpaid', 'thawani', 100, '2023-07-31 18:58:25', '2023-07-31 18:58:25'),
(18, 88, '20230730211873', 'paid', 'thawani', 879, '2023-07-30 06:30:32', '2023-07-30 06:31:17'),
(16, 89, '20230730211829', 'paid', 'thawani', 188, '2023-07-30 04:08:11', '2023-07-30 04:08:40'),
(17, 90, '20230730211831', 'unpaid', 'thawani', 879, '2023-07-30 04:09:35', '2023-07-30 04:09:57'),
(13, 86, '20230729211788', 'paid', 'thawani', 400, '2023-07-29 09:24:47', '2023-07-29 09:25:13'),
(14, 87, '20230729211791', 'paid', 'thawani', 879, '2023-07-29 09:33:58', '2023-07-29 09:34:24'),
(15, 88, '20230729211792', 'unpaid', 'thawani', 879, '2023-07-29 09:34:58', '2023-07-29 09:36:01'),
(22, 111, '20230731212408', 'unpaid', 'thawani', 179, '2023-07-31 20:23:51', '2023-07-31 20:23:51'),
(23, 101, '20230731212409', 'unpaid', 'thawani', 100, '2023-07-31 20:26:45', '2023-07-31 20:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `discount` double DEFAULT NULL,
  `attachments_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_thumbnail_id_foreign` (`thumbnail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `short_description`, `description`, `thumbnail_id`, `status`, `slug`, `price`, `discount`, `attachments_id`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(2, 'منتج رقمى جديد و كبير', '', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.', 12, 'active', 'منتج-رقمى-جديد-و-كبير', 250, NULL, '23,24,25,26', NULL, NULL, '2023-07-17 17:49:49', '2023-07-23 14:06:27'),
(3, 'منتج رقمى قيديو دعائي', '', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.', 5, 'active', 'منتج-رقمى-قيديو-دعائي', 400, NULL, '22,24,26', NULL, NULL, '2023-07-17 17:53:08', '2023-07-23 14:06:10'),
(4, 'منتج شركة المتحدة للانتاج الفنى', '', 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور\r\nأنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد\r\nأكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس\r\nأيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار', 14, 'active', 'منتج-شركة-المتحدة-للانتاج-الفنى', 150, NULL, '30,31,32', NULL, NULL, '2023-07-23 12:13:31', '2023-07-23 17:33:25'),
(5, 'كتاب لمراجعة علوم القران و الحديث', '', 'كتاب لمراجعة علوم القران و الحديث  كتاب لمراجعة علوم القران و الحديث كتاب لمراجعة علوم القران و الحديث كتاب لمراجعة علوم القران و الحديث كتاب لمراجعة علوم القران و الحديثكتاب لمراجعة علوم القران و الحديثكتاب لمراجعة علوم القران و الحديث كتاب لمراجعة علوم القران و الحديث كتاب لمراجعة علوم القران و الحديث كتاب لمراجعة علوم القران و الحديث كتاب لمراجعة علوم القران و الحديث كتاب لمراجعة علوم القران و الحديث كتاب لمراجعة علوم القران و الحديث كتاب لمراجعة علوم القران و الحديث', 5, 'active', 'كتاب-لمراجعة-علوم-القران-و-الحديث', 180.25, NULL, '12,13,15', 'كتاب لمراجعة علوم القران و الحديث', 'كتاب لمراجعة علوم القران و الحديث كتاب لمراجعة علوم القران و الحديث', '2023-07-26 12:00:04', '2023-07-26 12:00:04'),
(6, 'منتج رقمي جديد متنوع و محترف', 'منتج رقمي جديد متنوع و محترف متنوع و محترف', 'منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترفر منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف ر منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف منتج رقمي جديد متنوع و محترف', 19, 'active', 'منتج-رقمي-جديد-متنوع-و-محترف', 180.14, NULL, '1,2,10,13,15', NULL, NULL, '2023-07-26 18:54:03', '2023-07-26 18:56:34'),
(7, 'فيديو دعائي مصحوب بصوت عنائي', 'فيديو دعائي مصحوب بصوت عنائي  فيديو دعائي مصحوب بصوت عنائي', 'فيديو دعائي مصحوب بصوت عنائي  فيديو دعائي مصحوب بصوت عنائي  فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي  فيديو دعائي مصحوب بصوت عنائي  فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي فيديو دعائي مصحوب بصوت عنائي', 2, 'active', 'فيديو-دعائي-مصحوب-بصوت-عنائي', 879, NULL, '1,2,10', NULL, NULL, '2023-07-26 18:58:20', '2023-07-29 12:11:06'),
(10, 'منتج حديث و ممتع فيلم روائي عن الشرق الاوسط', 'منتج حديث و ممتع فيلم روائي عن الشرق الاوسط منتج حديث و ممتع فيلم روائي عن الشرق الاوسط', '<p><b><span style=\"font-family: Tajawal;\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط</span></b></p><p><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;</font></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط<b>&nbsp;</b></font></span></p><p><span style=\"font-weight: 700;\"><span style=\"font-family: Tajawal;\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط</span></span><span style=\"text-align: var(--bs-body-text-align);\"><font face=\"Tajawal\"><b><br></b></font></span></p><p><span style=\"font-family: Tajawal;\">منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسطمنتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسطمنتج حديث و ممتع فيلم روائي عن الشرق الاوسط&nbsp;منتج حديث و ممتع فيلم روائي عن الشرق الاوسط</span><br></p>', 40, 'active', 'منتج-حديث-و-ممتع-فيلم-روائي-عن-الشرق-الاوسط', 100, NULL, '38,39,40', 'منتج حديث و ممتع فيلم روائي عن الشرق الاوسط منتج حديث و ممتع فيلم روائي عن الشرق الاوسط', 'منتج حديث و ممتع فيلم روائي عن الشرق الاوسط منتج حديث و ممتع فيلم روائي عن الشرق الاوسط', '2023-07-31 11:58:26', '2023-07-31 12:20:42'),
(8, 'منتج شرح كيفية التسويق الاون لاين', 'منتج شرح كيفية التسويق الاون لاين منتج شرح كيفية التسويق الاون لاين', 'منتج شرح كيفية التسويق الاون لاين منتج شرح كيفية التسويق الاون لاين منتج شرح كيفية التسويق الاون لاين منتج شرح كيفية التسويق الاون لاينمنتج شرح كيفية التسويق الاون لاينمنتج شرح كيفية التسويق الاون لاينمنتج شرح كيفية التسويق الاون لاينمنتج شرح كيفية التسويق الاون لاينمنتج شرح كيفية التسويق الاون لاينمنتج شرح كيفية التسويق الاون لاين منتج شرح كيفية التسويق الاون لاين', 1, 'active', 'منتج-شرح-كيفية-التسويق-الاون-لاين', 178.14, NULL, '2,10', NULL, NULL, '2023-07-27 05:48:35', '2023-07-27 06:00:08'),
(9, 'منتج جديد اختبار ال summernot', 'منتج جديد اختبار ال summernot منتج جديد اختبار ال summernot منتج جديد اختبار ال summernot', '<h4><span style=\"font-weight: 700;\"><font color=\"#397b21\"><br></font></span></h4><h4><span style=\"font-weight: 700; font-family: Tajawal;\"><font color=\"#397b21\">منتج جديد اختبار ال summernot</font></span></h4><h4><span style=\"font-weight: 700; font-family: Tajawal;\"><font color=\"#397b21\"><br></font></span></h4><p dir=\"rtl\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(66, 66, 66); font-family: tahoma, sans-serif; font-size: 14px;\"><span style=\"font-family: Tajawal;\">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...</span></p><p dir=\"rtl\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(66, 66, 66); font-family: tahoma, sans-serif; font-size: 14px;\"><span style=\"font-family: Tajawal;\">وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.</span></p><p dir=\"rtl\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(66, 66, 66); font-family: tahoma, sans-serif; font-size: 14px;\"><span style=\"font-family: Tajawal;\">وخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في&nbsp;الأدب اللاتيني&nbsp;الكلاسيكي منذ العام 45 قبل الميلاد.&nbsp;من&nbsp;كتاب&nbsp;\"حول أقاصي الخير والشر</span></p><p><span style=\"text-align: var(--bs-body-text-align);\"><br></span></p><p><br></p>', 9, 'active', 'منتج-جديد-اختبار-ال-summernot', 187.24, NULL, '7,8,9', NULL, NULL, '2023-07-27 09:00:22', '2023-07-27 09:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `degree` int(11) NOT NULL DEFAULT '1',
  `review` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `replay_on` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_customer_id_foreign` (`customer_id`),
  KEY `reviews_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `customer_id`, `product_id`, `degree`, `review`, `status`, `replay_on`, `created_at`, `updated_at`) VALUES
(1, 25, 10, 4, 'منتج حديث و ممتع فيلم روائي عن الشرق الاوسط منتج حديث و ممتع فيلم روائي عن الشرق الاوسط منتج حديث و ممتع فيلم روائي عن الشرق الاوسط 1', 'active', NULL, '2023-08-01 06:16:13', '2023-08-01 06:56:58'),
(2, 1, 9, 4, 'وخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد. من كتاب \"حول أقاصي الخير والشر', 'active', NULL, '2023-08-01 07:33:23', '2023-08-01 07:33:23'),
(3, 1, 10, 4, 'ممتع فيلم روائي عن الشرق الاوسط منتج حديث و ممتع فيلم روائي عن الشرق الاوسط منتج حديث و ممتع فيلم روائي عن الشرق الاوسط', 'active', NULL, '2023-08-01 07:39:45', '2023-08-01 07:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` bigint(20) UNSIGNED DEFAULT NULL,
  `whatsapStatus` tinyint(1) NOT NULL DEFAULT '0',
  `whatsapNumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loginStatus` tinyint(1) NOT NULL DEFAULT '0',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `services_image_foreign` (`image`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`, `whatsapStatus`, `whatsapNumber`, `loginStatus`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(10, 'خدمة جديدة و ممتعة للتجربة رقم مميزة', '<p><span style=\"font-family: Tajawal;\">خدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;خدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;خدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;خدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;خدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزة</span></p><p><b><span style=\"font-family: Tajawal;\">خدمة جديدة و ممتعة للتجربة رقم مميزة</span></b><br></p><p>خدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزةرخدمة جديدة و ممتعة للتجربة رقم مميزةرخدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزة<br></p>', 9, 1, '201026051966', 1, 'خدمة-جديدة-و-ممتعة-للتجربة-رقم-مميزة', NULL, NULL, '2023-07-31 11:49:34', '2023-07-31 11:49:34'),
(8, 'خدمة جديدة و ممتعة للتجربة رقم مميزة', '<p><b><span style=\"font-family: Tajawal;\"><font color=\"#ce0000\" style=\"\">خدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;</font></span></b></p><p><span style=\"font-family: Tajawal;\">خدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;خدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;خدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;خدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;خدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;خدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;خدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;خدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;خدمة جديدة و ممتعة للتجربة رقم مميزة&nbsp;خدمة جديدة و ممتعة للتجربة رقم مميزةخدمة جديدة و ممتعة للتجربة رقم مميزة</span></p>', 4, 1, '201026051966', 1, 'خدمة-جديدة-و-ممتعة-للتجربة-رقم-مميزة', 'خدمة جديدة و ممتعة للتجربة رقم مميزة', 'خدمة جديدة و ممتعة للتجربة رقم مميزة', '2023-07-27 10:18:32', '2023-07-27 12:05:44'),
(9, 'خدمة جديدة و ممتعة للتجربة رقم 21', '<p>خدمة جديدة و ممتعة للتجربة رقم 21&nbsp;خدمة جديدة و ممتعة للتجربة رقم 21&nbsp;خدمة جديدة و ممتعة للتجربة رقم 21&nbsp;خدمة جديدة و ممتعة للتجربة رقم 21خدمة جديدة و ممتعة للتجربة رقم 21&nbsp;خدمة جديدة و ممتعة للتجربة رقم 21&nbsp;خدمة جديدة و ممتعة للتجربة رقم 21&nbsp;خدمة جديدة و ممتعة للتجربة رقم 21&nbsp;خدمة جديدة و ممتعة للتجربة رقم 21<br></p>', 5, 1, '201026051966', 1, 'خدمة-جديدة-و-ممتعة-للتجربة-رقم-21', NULL, NULL, '2023-07-31 11:48:39', '2023-07-31 11:48:39');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(191) NOT NULL DEFAULT '0',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `phone`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$ZweOkG8FrvrvHOCWzcpES.CpHyfuNAE.6iY2ZkiGjiEjPd4x2QVAO', 0, NULL, 'active', NULL, '2023-07-13 20:49:16', '2023-07-13 20:49:16'),
(2, 'Koby Jones', 'proberts@example.net', '2023-07-21 10:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'GLmzt3ZOV8', '2023-07-21 10:33:57', '2023-07-21 13:05:14'),
(3, 'Beryl Cruickshank', 'hherman@example.org', '2023-07-21 10:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'epkQce3Izd', '2023-07-21 10:33:57', '2023-07-21 10:33:57'),
(4, 'Nigel Huel', 'emerson.boyer@example.org', '2023-07-21 10:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'lu3f9eGc9Q', '2023-07-21 10:33:57', '2023-07-21 10:33:57'),
(5, 'Wendell Gulgowski PhD', 'treva.barton@example.com', '2023-07-21 10:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'eWB9nGVOJP', '2023-07-21 10:33:57', '2023-07-21 10:33:57'),
(6, 'Adelia O\'Keefe', 'gherzog@example.net', '2023-07-21 10:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', '6BRZdFntue', '2023-07-21 10:33:57', '2023-07-21 10:33:57'),
(7, 'Isaiah Cormier', 'cordia33@example.net', '2023-07-21 10:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'Lxe7dWKg3i', '2023-07-21 10:33:57', '2023-07-21 10:33:57'),
(8, 'Araceli Gerhold', 'gleason.samara@example.org', '2023-07-21 10:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'g9GdsrZvIA', '2023-07-21 10:33:57', '2023-07-21 10:33:57'),
(9, 'Prof. Madyson Fadel', 'bernhard.toby@example.net', '2023-07-21 10:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'vDTNfIlZbr', '2023-07-21 10:33:57', '2023-07-21 10:33:57'),
(10, 'Callie Leuschke', 'morgan.okeefe@example.net', '2023-07-21 10:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', '6jGqJlq0Vl', '2023-07-21 10:33:57', '2023-07-21 10:33:57'),
(11, 'Rachael Bradtke', 'torp.daphnee@example.net', '2023-07-21 10:33:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', '9csqAxISsN', '2023-07-21 10:33:57', '2023-07-21 10:33:57'),
(12, 'Mr. Ezra Kuhic', 'feest.curt@example.com', '2023-07-21 10:35:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'L3g2V6mQuY', '2023-07-21 10:35:05', '2023-07-21 10:35:05'),
(13, 'Keara Labadie', 'enoch.jast@example.com', '2023-07-21 10:35:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'VfSx9aXvbF', '2023-07-21 10:35:05', '2023-07-21 10:35:05'),
(14, 'Mr. Emanuel Windler', 'paige84@example.com', '2023-07-21 10:35:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'cEpEbFs4F0', '2023-07-21 10:35:05', '2023-07-21 10:35:05'),
(15, 'Santa Metz', 'louie90@example.org', '2023-07-21 10:35:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'C2bAz3K1BP', '2023-07-21 10:35:05', '2023-07-21 10:35:05'),
(16, 'Lulu Grady I', 'meghan68@example.org', '2023-07-21 10:35:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'ccVEsZwEWU', '2023-07-21 10:35:05', '2023-07-21 10:35:05'),
(17, 'Rudolph King MD', 'elmer39@example.org', '2023-07-21 10:35:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'SikLNUOUKW', '2023-07-21 10:35:05', '2023-07-21 10:35:05'),
(18, 'Kitty Koss', 'reva06@example.org', '2023-07-21 10:35:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', '9bTaeMxIf6', '2023-07-21 10:35:05', '2023-07-21 10:35:05'),
(19, 'Geo Ortiz', 'xwehner@example.org', '2023-07-21 10:35:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'o8zvPy34Um', '2023-07-21 10:35:05', '2023-07-21 10:35:05'),
(20, 'Madge Konopelski', 'coralie.robel@example.org', '2023-07-21 10:35:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'gg3VShUBIE', '2023-07-21 10:35:05', '2023-07-21 10:35:05'),
(21, 'Dr. Angeline Kunze', 'vandervort.dovie@example.com', '2023-07-21 10:35:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, 'active', 'yTzv8iHzgs', '2023-07-21 10:35:05', '2023-07-21 10:35:05'),
(22, 'mohamed', 'mohamedellithyfreelancer@gmail.com', NULL, '$2y$10$5PLE5BKO9jsbNY9uQyqInOl6EnSRUo85KeZJ1e2N30U6uj/a9CoBG', 1, '201026051966', 'active', NULL, '2023-07-28 06:37:54', '2023-07-30 07:58:15'),
(25, 'qmohamed', 'mohamedellithyfreelanc@gmail.com', NULL, '$2y$10$SoyZJpzafOEe4pjH2/9szOi3NIqCJt65M26TwIiFA2UqCj./XFRZy', 1, '201026051966', 'active', NULL, '2023-07-30 08:15:45', '2023-07-30 08:16:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
