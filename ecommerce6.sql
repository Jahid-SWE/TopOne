-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 03:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce6`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Samsung', 'well', 1, '2021-01-04 07:32:33', '2021-01-04 07:32:33'),
(3, 'Arang', 'well', 1, '2021-01-04 07:46:07', '2021-01-04 07:46:07'),
(4, 'Yellow', 'well', 1, '2021-02-08 06:56:25', '2021-02-08 06:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Electronics', 'well', 1, '2021-01-04 07:22:45', '2021-01-04 07:22:55'),
(6, 'Man Fashion', '2312312', 1, '2021-01-04 08:09:28', '2021-01-11 06:51:33'),
(7, 'Kids Fashion', 'asdasdas', 1, '2021-01-04 08:09:35', '2021-01-04 08:09:35'),
(8, 'Sports', 'well', 1, '2021-01-11 06:52:02', '2021-01-11 06:52:02'),
(9, 'Woman Fashion', 'well', 1, '2021-02-08 06:55:50', '2021-02-08 06:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `mobile`, `address`, `created_at`, `updated_at`) VALUES
(4, 'Habibur Rahman', 'habib@gmail.com', '$2y$10$YQx.qaAynerMuB.2kSVTSuOKS0fgwn9niFsOZ17SevSX5fCC4bu5y', '01743906357', '71 Outer Circular Rd, Mouchaq, Dhaka 1219\r\n71 Outer Circular Rd, Mouchaq, Dhaka 1219', '2021-01-18 07:30:21', '2021-01-18 07:30:21'),
(5, 'Rumel Ahammed', 'rumel@gmail.com', '$2y$10$RQFA7xs3TR6AHT9J5p4OEORolj9n05P5OFnDa/7m2M1OzoW3Ft5dy', '01743906357', '71 Outer Circular Rd, Mouchaq, Dhaka 1219\r\n71 Outer Circular Rd, Mouchaq, Dhaka 1219', '2021-01-18 07:49:06', '2021-01-18 07:49:06'),
(6, 'Sabbir Hossain', 'sabbir@gmail.com', '$2y$10$KRpfwuSYgPVQ10c88mONQ.AluFbThs.1J1VzC7v/kG.2ehjmgJOEG', '01715456789', 'Mirpur', '2021-01-30 07:31:33', '2021-01-30 07:31:33'),
(7, 'Habibur Rahman', 'swqwed@gmail.com', '$2y$10$W9eZpJtAYiXkxDuSeEMCKe.mghV0rzkZ7/SNaYCBTxYxD3I8AYXRG', '01743906357', '71 Outer Circular Rd, Mouchaq, Dhaka 1219\r\n71 Outer Circular Rd, Mouchaq, Dhaka 1219', '2021-01-30 07:54:12', '2021-01-30 07:54:12'),
(8, 'Habibur Rahman', 'sab3423423bir@gmail.com', '$2y$10$lis473p97PwK6Gtmz3oCXet/94aYAUw72Nsf2.fYGhlfMsMeDS/TG', '01743906357', '71 Outer Circular Rd, Mouchaq, Dhaka 1219\r\n71 Outer Circular Rd, Mouchaq, Dhaka 1219', '2021-01-30 07:59:42', '2021-01-30 07:59:42'),
(9, 'Mortuja Hossen', 'mortuja@gmail.com', '$2y$10$6ygig1EprHSkD5HPHtvVc.EmbCJRTAxMx3EhvNVus8w4QUmabeliq', '01715456123', 'Dhaka', '2021-02-01 06:49:44', '2021-02-01 06:49:44'),
(10, 'Habibur Rahman', 'habiburr12312ahmanbipu@gmail.com', '$2y$10$6Cm34YnfABfyks7T5ozjcOGJL5asSmnuajIbHp.YRSAAftJcIM8Q2', '01743906357', '71 Outer Circular Rd, Mouchaq, Dhaka 1219\r\n71 Outer Circular Rd, Mouchaq, Dhaka 1219', '2021-02-06 07:03:40', '2021-02-06 07:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_12_28_134713_create_sessions_table', 1),
(7, '2021_01_02_140234_create_categories_table', 2),
(8, '2021_01_02_140932_create_brands_table', 2),
(9, '2021_01_04_141330_create_products_table', 3),
(10, '2021_01_04_141342_create_sub_images_table', 3),
(11, '2021_01_18_125456_create_customers_table', 4),
(12, '2021_01_18_130945_create_shippings_table', 5),
(13, '2021_01_18_131428_add_description_to_shippings_table', 6),
(14, '2021_01_23_135152_create_orders_table', 7),
(15, '2021_01_23_135204_create_order_details_table', 7),
(16, '2021_01_23_135214_create_payments_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_date`, `payment_type`, `payment_status`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 4, 4, 70380.00, '2021-01-30', 'Cash', 'Pending', 'Pending', '2021-01-30 07:28:31', '2021-01-30 07:28:31'),
(2, 6, 5, 24533.00, '2021-01-30', 'Cash', 'Pending', 'Pending', '2021-01-30 07:32:14', '2021-01-30 07:32:14'),
(3, 8, 9, 8932.00, '2021-01-30', 'Cash', 'Pending', 'Pending', '2021-01-30 08:04:28', '2021-01-30 08:04:28'),
(4, 9, 10, 71300.00, '2021-02-01', 'cash', 'Pending', 'Pending', '2021-02-01 06:51:34', '2021-02-01 06:51:34'),
(5, 10, 11, 63940.00, '2021-02-06', 'cash', 'Complete', 'Complete', '2021-02-06 07:03:51', '2021-02-06 08:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_image`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Sony X-peria XZ', 'product-images/1610202334.jpg', 55600.00, 1, '2021-01-30 07:28:31', '2021-01-30 07:28:31'),
(2, 1, 5, 'reporter', 'product-images/1610371402.jpg', 5600.00, 1, '2021-01-30 07:28:31', '2021-01-30 07:28:31'),
(3, 2, 2, 'Rejaul Korim', 'product-images/7.jpg', 1232.00, 1, '2021-01-30 07:32:14', '2021-01-30 07:32:14'),
(4, 2, 4, 'Smart Shirt', 'product-images/1610202738.jpg', 3200.00, 2, '2021-01-30 07:32:14', '2021-01-30 07:32:14'),
(5, 2, 3, 'Design Product', 'product-images/5.jpg', 4567.00, 3, '2021-01-30 07:32:14', '2021-01-30 07:32:14'),
(6, 3, 3, 'Design Product', 'product-images/5.jpg', 4567.00, 1, '2021-01-30 08:04:28', '2021-01-30 08:04:28'),
(7, 3, 4, 'Smart Shirt', 'product-images/1610202738.jpg', 3200.00, 1, '2021-01-30 08:04:28', '2021-01-30 08:04:28'),
(8, 4, 4, 'Smart Shirt', 'product-images/1610202738.jpg', 3200.00, 2, '2021-02-01 06:51:34', '2021-02-01 06:51:34'),
(9, 4, 1, 'Sony X-peria XZ', 'product-images/1610202334.jpg', 55600.00, 1, '2021-02-01 06:51:34', '2021-02-01 06:51:34'),
(10, 5, 1, 'Sony X-peria XZ', 'product-images/1610202334.jpg', 55600.00, 1, '2021-02-06 07:03:51', '2021-02-06 07:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_amount` int(11) NOT NULL,
  `payment_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_method`, `payment_amount`, `payment_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'cash', 0, '2021-01-30', '2021-01-30 07:28:31', '2021-01-30 07:28:31'),
(2, 2, 'cash', 0, '2021-01-30', '2021-01-30 07:32:14', '2021-01-30 07:32:14'),
(3, 3, 'cash', 0, '2021-01-30', '2021-01-30 08:04:29', '2021-01-30 08:04:29'),
(4, 4, 'cash', 0, '2021-02-01', '2021-02-01 06:51:34', '2021-02-01 06:51:34'),
(5, 5, 'cash', 63940, '2021-02-06', '2021-02-06 07:03:51', '2021-02-06 08:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `stock_amount` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `code`, `price`, `stock_amount`, `short_description`, `long_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 'Sony X-peria XZ', '1122', 55600.00, 47, 'qwdas', 'asdasd', 'product-images/1610202334.jpg', 1, '2021-01-04 08:31:53', '2021-02-06 07:03:51'),
(2, 6, 3, 'Rejaul Korim', 'MD', 1232.00, 122, 'asdasd', 'asdasdasd', 'product-images/7.jpg', 1, '2021-01-09 07:53:53', '2021-01-30 07:32:14'),
(3, 7, 3, 'Design Product', 'LG', 4567.00, 96, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has? What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has? What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\nWhat is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has? What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\nWhat is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has? What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\r\nWhat is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has? What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?', 'product-images/5.jpg', 1, '2021-01-09 07:54:48', '2021-01-30 08:04:28'),
(4, 6, 3, 'Smart Shirt', 'NT-122', 3200.00, 95, 'asdasdasd', 'asdasdasdas', 'product-images/1610202738.jpg', 1, '2021-01-09 08:32:18', '2021-02-01 06:51:34'),
(5, 8, 3, 'reporter', 'SM1456', 5600.00, 99, 'dsafsdfsdfsdf', 'sdfsdfsdfsdfsdf', 'product-images/1610371402.jpg', 1, '2021-01-11 07:23:22', '2021-01-30 07:28:31'),
(6, 9, 4, 'New Shari', 'NS001', 3500.00, 100, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'product-images/1612789135.jpg', 1, '2021-02-08 06:58:55', '2021-02-08 06:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('VHxPbohzscBAxkfYyNGRtHiiF69AY9rwaPT4uIe2', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.146 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRHNIRndxTUtEcWhJSHVBT0ZNb3RjeTZXdmJ3aGJtYjc5Y1Z0cjIxSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbW1lcmNlNi9wdWJsaWMvYWRkLXVzZXIiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkWVdqZE1WZXkwVDMwSkswck5zMmZqT1hLMUJ2S2tYN2V4bDBzZm05Vk1nekUuYW1xT2wvTW0iO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFlXamRNVmV5MFQzMEpLMHJOczJmak9YSzFCdktrWDdleGwwc2ZtOVZNZ3pFLmFtcU9sL01tIjt9', 1612794965);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`, `email`, `mobile`, `created_at`, `updated_at`, `address`) VALUES
(1, 'Habibur Rahman', 'habib@gmail.com', '01743906357', '2021-01-18 08:04:27', '2021-01-18 08:04:27', '71 Outer Circular Rd, Mouchaq, Dhaka 1219\r\n71 Outer Circular Rd, Mouchaq, Dhaka 1219'),
(2, 'Daowdul Islam', 'dawdoud@gmail.com', '01915456123', '2021-01-23 07:43:13', '2021-01-23 07:43:13', 'Mirpur-`10'),
(3, 'Habibur Rahman', 'habib@gmail.com', '01743906357', '2021-01-30 07:06:26', '2021-01-30 07:06:26', '71 Outer Circular Rd, Mouchaq, Dhaka 1219\r\n71 Outer Circular Rd, Mouchaq, Dhaka 1219'),
(4, 'Habibur Rahman', 'habib@gmail.com', '01743906357', '2021-01-30 07:28:27', '2021-01-30 07:28:27', '71 Outer Circular Rd, Mouchaq, Dhaka 1219\r\n71 Outer Circular Rd, Mouchaq, Dhaka 1219'),
(5, 'MArtuza Khan', 'martuza@gmail.com', '01916456123', '2021-01-30 07:32:08', '2021-01-30 07:32:08', 'Dhanmondhi'),
(6, 'Sabbir Hossain', 'sabbir@gmail.com', '01715456789', '2021-01-30 07:32:58', '2021-01-30 07:32:58', 'Mirpur'),
(7, 'Habibur Rahman', 'swqwed@gmail.com', '01743906357', '2021-01-30 07:54:15', '2021-01-30 07:54:15', '71 Outer Circular Rd, Mouchaq, Dhaka 1219\r\n71 Outer Circular Rd, Mouchaq, Dhaka 1219'),
(8, 'Habibur Rahman', 'sab3423423bir@gmail.com', '01743906357', '2021-01-30 07:59:43', '2021-01-30 07:59:43', '71 Outer Circular Rd, Mouchaq, Dhaka 1219\r\n71 Outer Circular Rd, Mouchaq, Dhaka 1219'),
(9, 'Habibur Rahman', 'sab3423423bir@gmail.com', '01743906357', '2021-01-30 08:04:22', '2021-01-30 08:04:22', '71 Outer Circular Rd, Mouchaq, Dhaka 1219\r\n71 Outer Circular Rd, Mouchaq, Dhaka 1219'),
(10, 'Daowdul Islam', 'daowed@gmail.com', '01915456123', '2021-02-01 06:50:33', '2021-02-01 06:50:33', 'Dhanmondhi'),
(11, 'Habibur Rahman', 'habiburr12312ahmanbipu@gmail.com', '01743906357', '2021-02-06 07:03:46', '2021-02-06 07:03:46', '71 Outer Circular Rd, Mouchaq, Dhaka 1219\r\n71 Outer Circular Rd, Mouchaq, Dhaka 1219');

-- --------------------------------------------------------

--
-- Table structure for table `sub_images`
--

CREATE TABLE `sub_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `sub_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_images`
--

INSERT INTO `sub_images` (`id`, `product_id`, `sub_image`, `created_at`, `updated_at`) VALUES
(4, 2, 'product-sub-images/10.jpg', '2021-01-09 07:53:53', '2021-01-09 07:53:53'),
(5, 2, 'product-sub-images/11.jpg', '2021-01-09 07:53:53', '2021-01-09 07:53:53'),
(6, 2, 'product-sub-images/12.jpg', '2021-01-09 07:53:53', '2021-01-09 07:53:53'),
(7, 3, 'product-sub-images/8.jpg', '2021-01-09 07:54:48', '2021-01-09 07:54:48'),
(8, 3, 'product-sub-images/9.jpg', '2021-01-09 07:54:48', '2021-01-09 07:54:48'),
(9, 3, 'product-sub-images/10.jpg', '2021-01-09 07:54:48', '2021-01-09 07:54:48'),
(10, 1, 'product-sub-images/2.jpg', '2021-01-09 08:17:21', '2021-01-09 08:17:21'),
(11, 1, 'product-sub-images/3.jpg', '2021-01-09 08:17:21', '2021-01-09 08:17:21'),
(12, 1, 'product-sub-images/4.jpg', '2021-01-09 08:17:22', '2021-01-09 08:17:22'),
(13, 4, 'product-sub-images/10.jpg', '2021-01-09 08:32:18', '2021-01-09 08:32:18'),
(14, 4, 'product-sub-images/11.jpg', '2021-01-09 08:32:18', '2021-01-09 08:32:18'),
(15, 4, 'product-sub-images/12.jpg', '2021-01-09 08:32:18', '2021-01-09 08:32:18'),
(16, 5, 'product-sub-images/4.jpg', '2021-01-11 07:23:22', '2021-01-11 07:23:22'),
(17, 5, 'product-sub-images/5.jpg', '2021-01-11 07:23:22', '2021-01-11 07:23:22'),
(18, 5, 'product-sub-images/6.jpg', '2021-01-11 07:23:22', '2021-01-11 07:23:22'),
(19, 5, 'product-sub-images/7.jpg', '2021-01-11 07:23:22', '2021-01-11 07:23:22'),
(20, 5, 'product-sub-images/8.jpg', '2021-01-11 07:23:22', '2021-01-11 07:23:22'),
(21, 6, 'product-sub-images/images (2).jpg', '2021-02-08 06:58:55', '2021-02-08 06:58:55'),
(22, 6, 'product-sub-images/38-384787_transparent-female-models-png-transparent-women-fashion-png.png', '2021-02-08 06:58:55', '2021-02-08 06:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_label` tinyint(4) NOT NULL DEFAULT 0,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `access_label`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@gmail.com', NULL, '$2y$10$YWjdMVey0T30JK0rNs2fjOXK1BvKkX7exl0sfm9VMgzE.amqOl/Mm', 1, NULL, NULL, NULL, NULL, NULL, '2020-12-28 08:20:51', '2020-12-28 08:20:51'),
(3, 'Korim Khan', 'korim@gmail.com', NULL, '$2y$10$YQcI/nbIiRa5wk6qbbiiw.MYc8Mjg.g.a4P6.I.LwHPJEDrVMTIgq', 3, NULL, NULL, NULL, NULL, NULL, '2021-02-08 08:20:34', '2021-02-08 08:20:34'),
(4, 'Sobuj Mia', 'sobuj@gmail.com', NULL, '$2y$10$DNDmo0MlsVaIpUCH6LolruJYQ.0eckYWZ/x8QF7MsWJmTYFG48c86', 2, NULL, NULL, NULL, NULL, NULL, '2021-02-08 08:24:18', '2021-02-08 08:24:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_images`
--
ALTER TABLE `sub_images`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_images`
--
ALTER TABLE `sub_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
