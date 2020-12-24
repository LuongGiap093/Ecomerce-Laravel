-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 22, 2020 lúc 01:25 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel_doan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `image`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(4, 'Adidas', '1607833659.jpeg', '<p>Good</p>', 0, '2020-12-12 21:27:39', '2020-12-12 21:27:39'),
(5, 'Nike', '1608430796.jpeg', '<p>Good</p>', 0, '2020-12-19 19:19:56', '2020-12-19 19:19:56'),
(6, 'Reebok', '1608430842.jpeg', '<p>Reebok rol</p>', 0, '2020-12-19 19:20:42', '2020-12-19 19:20:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_01_021229_add_level_status_to_users_table', 1),
(5, '2020_10_27_002722_create_products_table', 2),
(6, '2020_10_27_002759_create_category_table', 2),
(7, '2020_10_27_112720_create_category_table', 3),
(8, '2020_10_27_112722_create_products_table', 3),
(9, '2014_08_12_0003651_create_news_table', 4),
(10, '2020_12_09_081803_create_category_table', 5),
(11, '2020_12_09_081916_create_product_table', 5),
(12, '2020_12_09_082240_create_category_table', 6),
(13, '2020_12_09_082251_create_product_table', 6),
(14, '2020_12_09_093009_create_category_table', 7),
(15, '2020_12_09_093951_create_category_table', 8),
(16, '2020_12_09_094039_create_product_table', 8),
(17, '2020_12_10_093635_create_category_table', 9),
(18, '2020_12_10_093656_create_product_table', 9),
(19, '2020_12_10_093818_create_customer_table', 10),
(20, '2020_12_10_093852_create_order_table', 11),
(21, '2020_12_10_093936_create_order_details_table', 12),
(22, '2020_12_10_094001_create_new_table', 13),
(23, '2020_12_10_094053_create_slide_table', 14),
(24, '2020_12_10_083838_create_category_table', 15),
(25, '2020_12_13_042220_create_product_table', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new`
--

DROP TABLE IF EXISTS `new`;
CREATE TABLE IF NOT EXISTS `new` (
  `new_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `new_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`new_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_total` double(8,2) DEFAULT NULL,
  `order_payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `order_customer_id_foreign` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`order_details_id`),
  KEY `order_details_order_id_foreign` (`order_id`),
  KEY `order_details_product_id_foreign` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `product_category_id_foreign` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `image`, `product_price`, `product_discount`, `product_desc`, `product_size`, `product_status`, `created_at`, `updated_at`, `category_id`) VALUES
(2, 'Google ads', '1607838017.jpeg', '2000000', '1', '<p>sadaas</p>', '42', 0, '2020-12-12 22:40:17', '2020-12-12 22:40:17', 4),
(3, 'Forich', '1607855203.jpeg', '2000000', '1', '<p>Lucky</p>', '34', 0, '2020-12-13 03:26:43', '2020-12-13 03:26:43', 4),
(4, 'Addias Standmit', '1607994910.png', '1000000', '10', '<p>Good Fashion</p>', '42', 0, '2020-12-14 18:15:10', '2020-12-14 18:15:10', 4),
(5, 'LuongGip', '1608005213.jpeg', '50000000', '10', '<p>asdasdasdasd</p>', '42', 0, '2020-12-14 21:06:53', '2020-12-14 21:06:53', 4),
(6, 'Nike airfor one', '1608431088.jpeg', '1000000', '2', '<p>Good</p>', '42', 0, '2020-12-19 19:24:48', '2020-12-19 19:24:48', 5),
(7, 'Reebok Rakod', '1608431150.jpeg', '2000000', '10', '<p>God</p>', '42', 0, '2020-12-19 19:25:50', '2020-12-19 19:25:50', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `slide_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slide_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$v2Hj2xTV.Z2yuIxeSabJ2ueANkpFAXA4rFINO51Whez/QF8AcofNO', 0, 1, NULL, NULL, NULL);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
