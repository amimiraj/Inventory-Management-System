-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 05:13 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_country`, `userId`, `created_at`, `updated_at`) VALUES
(1, 'updated', 'Bangladesh', 10, '2022-04-13 02:21:40', '2022-04-13 04:34:18'),
(3, 'Bata', 'Bangladesh', 11, '2022-04-13 02:41:10', '2022-04-13 02:41:10'),
(4, 'Bata', 'Bangladesh', 10, '2022-04-13 02:42:06', '2022-04-13 02:42:06'),
(5, 'Yellow', 'America', 10, '2022-04-13 02:51:01', '2022-04-13 02:51:01'),
(7, 'dhaka supplier edited', 'Bangladesh', 6, '2022-04-13 04:36:25', '2022-04-13 04:36:36'),
(8, '2ndd', '2nd', 10, '2022-04-21 06:03:04', '2022-04-21 06:03:04'),
(9, 'Zara', 'Bangladesh', 6, '2022-04-24 07:21:23', '2022-04-24 07:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `userId`, `created_at`, `updated_at`) VALUES
(1, 'Footwear', 6, '2022-04-13 04:49:24', '2022-04-13 04:49:24'),
(3, 'Cosmetics', 6, '2022-04-13 05:24:11', '2022-04-13 05:24:11'),
(4, 'Electronic', 6, '2022-04-13 05:32:05', '2022-04-13 05:32:05'),
(5, 'Cloths', 6, '2022-04-13 05:35:25', '2022-04-13 05:35:25'),
(6, 'mirpur', 10, '2022-04-21 06:03:36', '2022-04-21 06:03:36'),
(7, 'Cloths', 6, '2022-04-24 07:21:31', '2022-04-24 07:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_12_15_104111_create_supplier_table', 2),
(9, '2021_12_15_120016_create_brand_table', 3),
(13, '2021_12_15_115919_create_category_table', 4),
(14, '2021_12_15_115956_create_product_table', 5),
(15, '2021_12_16_103430_create_purchase_table', 6),
(21, '2021_12_22_203449_create_sale_table', 7),
(22, '2021_12_23_093914_create_order_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `total_purchase_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `userId`, `customer_id`, `product_name`, `product_code`, `product_quantity`, `sale_price`, `subtotal`, `total_purchase_price`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'Shirt', '1', 1, 1, 1, 1, '2022-04-24 04:15:09', '2022-04-24 04:15:09'),
(2, 6, 2, 'Jeans', '2', 1, 30, 30, 20, '2022-04-24 04:24:32', '2022-04-24 04:24:32'),
(3, 6, 3, 'Shirt', '1', 1, 1, 1, 1, '2022-04-24 04:49:44', '2022-04-24 04:49:44'),
(4, 6, 4, 'Shirt', '1', 1, 1, 1, 1, '2022-04-24 04:50:40', '2022-04-24 04:50:40'),
(5, 10, 5, 'mirpur', '5', 1, 100, 100, 100, '2022-04-24 05:25:23', '2022-04-24 05:25:23'),
(6, 10, 6, 'mirpur 2', '6', 1, 100, 100, 10, '2022-04-24 05:25:40', '2022-04-24 05:25:40'),
(7, 6, 7, 'dhaka', '7', 1, 2000, 2000, 100, '2022-04-24 07:22:55', '2022-04-24 07:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_category`, `product_code`, `userId`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', 'good Shirt', 'Footwear', 'Shirt', 6, '2022-04-13 06:21:29', '2022-04-13 06:21:29'),
(3, 'Jeans', 'good Jeans', 'Cloths', 'Jeans6', 6, '2022-04-13 07:32:36', '2022-04-13 07:32:36'),
(4, 'mirpur', 'mirpur', 'mirpur', 'mirpur10', 10, '2022-04-21 06:03:55', '2022-04-21 06:03:55'),
(5, 'mirpur 2', 'sfsfsf', 'mirpur', 'mirpur 210', 10, '2022-04-24 05:24:14', '2022-04-24 05:24:14'),
(6, 'dhaka', 'good Shirt', 'Cloths', 'dhaka6', 6, '2022-04-24 07:21:52', '2022-04-24 07:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `product_name`, `brand_name`, `supplier_name`, `product_quantity`, `purchase_price`, `sale_price`, `userId`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', 'dhaka supplier edited', 'dhaka', 95, 1, 1, 6, '2022-04-13 11:38:51', '2022-04-24 04:50:40'),
(2, 'Jeans', 'dhaka supplier edited', 'dhaka', 99, 20, 30, 6, '2022-04-13 16:25:05', '2022-04-24 04:24:32'),
(3, 'Jeans', 'dhaka supplier edited', 'dhaka supplier', 2, 22, 22, 6, '2022-04-17 03:20:49', '2022-04-23 22:42:15'),
(4, 'Jeans', 'dhaka supplier edited', 'dhaka', 200, 11, 11, 6, '2022-04-17 03:21:06', '2022-04-23 17:40:17'),
(5, 'mirpur', '2ndd', 'miraj', 92, 100, 100, 10, '2022-04-21 06:04:20', '2022-04-24 05:25:23'),
(6, 'mirpur 2', 'updated', 'Shipn', 49, 10, 100, 10, '2022-04-24 05:25:06', '2022-04-24 05:25:40'),
(7, 'dhaka', 'dhaka supplier edited', 'dhaka', 99, 100, 2000, 6, '2022-04-24 07:22:25', '2022-04-24 07:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sale_id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_Phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iteams` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_purchase_price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`sale_id`, `userId`, `customer_id`, `customer_Phone`, `iteams`, `payment_type`, `total_purchase_price`, `total`, `date`, `created_at`, `updated_at`) VALUES
(1, 6, 1, '01236584', '1', 'cash', 1, 1, '2022-04-24', '2022-04-24 10:20:03', '2022-04-24 10:20:03'),
(2, 6, 2, '01236584', '1', 'cash', 20, 30, '2022-04-24', '2022-04-24 10:24:38', '2022-04-24 10:24:38'),
(3, 6, 3, '01236584', '1', 'cash', 1, 2, '2022-04-24', '2022-04-24 10:49:51', '2022-04-24 10:49:51'),
(4, 6, 4, '01236584', '1', 'cash', 1, 1, '2022-04-24', '2022-04-24 10:51:17', '2022-04-24 10:51:17'),
(5, 10, 5, '10', '1', 'cash', 100, 100, '2022-04-24', '2022-04-24 11:25:30', '2022-04-24 11:25:30'),
(6, 10, 6, '123', '1', 'cash', 10, 100, '2022-04-23', '2022-04-24 11:25:48', '2022-04-24 11:25:48'),
(7, 6, 7, '01236584', '1', 'cash', 100, 2000, '2022-04-24', '2022-04-24 13:23:04', '2022-04-24 13:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_Phone_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_Phone_num`, `userId`, `created_at`, `updated_at`) VALUES
(7, 'Shipn', '01719991988', 10, '2022-04-12 21:08:54', '2022-04-12 21:08:54'),
(8, 'Sazid', '01719991988', 10, '2022-04-12 21:09:15', '2022-04-12 21:09:25'),
(9, 'miraj', '01719991988', 10, '2022-04-13 01:06:27', '2022-04-13 01:06:27'),
(15, 'dhaka', '01719991988', 6, '2022-04-13 04:35:30', '2022-04-13 04:35:30'),
(16, 'dhaka supplier', '01719991988', 6, '2022-04-13 04:35:56', '2022-04-13 04:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$J8J.dxntksUgpvPg2CFYxu4OdIsfnMuinCHQ6aSXVoKXZgYWTnl4O', 0, NULL, '2022-04-12 17:59:28', '2022-04-12 17:59:28'),
(6, 'Dhaka', 'dhaka@gmail.com', NULL, '$2y$10$FNOLNJ1iprZnQjYuvWLlZeF91iGRXlT2N30h7rW46gpngSsMt5xyq', 0, NULL, '2022-04-12 05:24:37', '2022-04-12 05:24:37'),
(10, 'mirpur', 'mirpur@gmail.com', NULL, '$2y$10$R2XYDx2B4yJcH9XPWaIHbejg2RUwhzzpCgHGGN9Xi8B7EKhMh/4vu', 0, 'VJGVOBOq1KQAE3nvglUa1HAluiHQ2wswHK5WM3iu9WwrKhuMANJnD9kxzgkx', '2022-04-12 18:08:34', '2022-04-12 18:08:34'),
(11, 'miraj', 'a@gmail.com', NULL, '$2y$10$OENysbtwN0DeV2NHmcrRv.MET52QnVdqmmpKJRXIJKbVWOMFMj5BW', 0, NULL, '2022-04-24 20:46:01', '2022-04-24 20:46:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

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
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
