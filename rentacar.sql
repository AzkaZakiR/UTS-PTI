-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2023 at 09:26 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentacar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plat_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_per_day` int(11) NOT NULL,
  `price_per_week` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gasoline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transmission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `created_at`, `updated_at`, `brand`, `model`, `year`, `status`, `plat_number`, `price_per_day`, `price_per_week`, `type`, `seats`, `engine`, `gasoline`, `transmission`, `image`) VALUES
(17, '2023-12-07 08:56:44', '2023-12-07 08:56:44', 'Toyota', 'Camry', '2022', 'Available', 'ABC123', 600000, 3000000, 'sedan', '4', '2500 CC', 'bensin', 'Automatic', 'camry.jpg'),
(18, '2023-12-07 08:56:44', '2023-12-07 08:56:44', 'Honda', 'Accord', '2021', 'Maintenance', 'XYZ789', 550000, 2800000, 'sedan', '4', '2200 CC', 'bensin', 'Manual', 'honda_accord.jpg'),
(19, '2023-12-07 08:56:44', '2023-12-07 08:56:44', 'Mitsubishi', 'Pajero', '2023', 'Available', 'PQR456', 1000000, 6100000, 'SUV', '7', '2500 CC', 'bensin', 'Automatic', 'mitsubishi_pajero.png'),
(20, '2023-12-07 08:56:44', '2023-12-07 08:56:44', 'Toyota', 'Fortuner', '2023', 'Available', 'PQR456', 900000, 5700000, 'SUV', '7', '2600 CC', 'bensin', 'Automatic', 'toyota_fortuner.png'),
(21, '2023-12-07 08:56:44', '2023-12-07 08:56:44', 'Toyota', 'Corolla', '2021', 'Available', 'XYZ456', 500000, 2500000, 'sedan', '5', '1800 CC', 'bensin', 'Automatic', 'toyota_corolla.jpg'),
(22, '2023-12-07 08:56:44', '2023-12-07 08:56:44', 'Honda', 'Civic', '2023', 'Available', 'DEF789', 550000, 2750000, 'sedan', '5', '2000 CC', 'bensin', 'CVT', 'honda_civic.jpg'),
(23, '2023-12-07 08:56:44', '2023-12-07 08:56:44', 'Mitsubishi', 'Outlander', '2022', 'Available', 'GHI012', 650000, 3250000, 'SUV', '7', '2200 CC', 'bensin', 'Automatic', 'mitsubishi_outlander.png'),
(24, '2023-12-07 08:56:44', '2023-12-07 08:56:44', 'Ford', 'F-150', '2022', 'Available', 'JKL345', 700000, 3500000, 'Truck', '2', '3000 CC', 'diesel', 'Automatic', 'ford_f150.jpg'),
(25, '2023-12-07 08:56:44', '2023-12-07 08:56:44', 'Toyota', 'RAV4', '2022', 'Available', 'LMN678', 550000, 2750000, 'SUV', '5', '2000 CC', 'bensin', 'Automatic', 'toyota_RAV4.jpg'),
(26, '2023-12-07 08:56:44', '2023-12-07 08:56:44', 'Honda', 'Pilot', '2022', 'Available', 'OPQ901', 600000, 3000000, 'SUV', '8', '3500 CC', 'bensin', 'Automatic', 'honda_pilot.png'),
(27, '2023-12-07 08:56:44', '2023-12-07 08:56:44', 'Honda', 'Brio', '2021', 'Available', 'RST234', 480000, 2400000, 'Hatchback', '4', '1200 CC', 'bensin', 'CVT', 'honda_brio.jpg'),
(28, '2023-12-07 08:56:44', '2023-12-07 08:56:44', 'Tesla', 'Model S', '2023', 'Available', 'UVW345', 800000, 4000000, 'Electric', '5', 'Electric', 'Electric', 'Automatic', 'tesla_modelS.jpg'),
(29, '2023-12-09 01:48:48', '2023-12-09 01:48:48', 'percobaan', 'percobaan', '222', 'Maintenance', 'percobaan', 1000000, 5500000, 'sedan', '5', 'percobaan', NULL, NULL, 'toyota_camry.jpg'),
(33, '2023-12-09 02:19:59', '2023-12-09 02:19:59', 'Supra', 'Supra', '221421', 'Rented', 'Supra', 22222, 33333333, 'Supra', '3', 'Supra', 'Supra', 'Supra', 'https://images.bisnis.com/posts/2019/03/31/906567/supra-baru.jpg');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(27, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(28, '2019_08_19_000000_create_failed_jobs_table', 1),
(29, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(30, '2023_11_06_014743_create_users_table', 1),
(31, '2023_11_22_220427_create_cars_table', 1),
(32, '2023_11_27_055911_create_transactions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `rent_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rental_start` date NOT NULL,
  `rental_end` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `car_id`, `id_customer`, `rent_code`, `total_price`, `rental_start`, `rental_end`, `status`, `created_at`, `updated_at`) VALUES
(1, 26, 1, 'rnt-981255', '12000', '2023-12-18', '2023-12-21', 'success', '2023-12-08 12:30:46', '2023-12-08 12:30:46'),
(5, 22, 2, 'rnt-894666', NULL, '2023-05-12', '2024-01-12', 'success', '2023-12-08 14:16:03', '2023-12-08 14:16:03'),
(6, 22, 2, 'rnt-861623', NULL, '2023-04-12', '2023-12-12', 'success', '2023-12-08 14:18:34', '2023-12-08 14:18:34'),
(7, 20, 2, 'rnt-685227', NULL, '2023-05-12', '2024-01-12', 'success', '2023-12-08 14:19:19', '2023-12-08 14:19:19'),
(8, 20, 2, 'rnt-948427', NULL, '2024-06-12', '2024-07-12', 'success', '2023-12-08 14:20:24', '2023-12-08 14:20:24'),
(9, 24, 2, 'rnt-445324', NULL, '2023-11-12', '2024-07-12', 'success', '2023-12-08 14:21:38', '2023-12-08 14:21:38'),
(10, 24, 2, 'rnt-206210', '3,500,000', '2023-04-12', '2023-11-12', 'success', '2023-12-08 14:31:21', '2023-12-08 14:31:21'),
(11, 24, 2, 'rnt-567271', '1,400,000', '2023-04-12', '2023-06-12', 'success', '2023-12-08 14:31:51', '2023-12-08 14:31:51'),
(12, 19, 1, 'rnt-128895', '3,000,000', '2023-06-12', '2023-09-12', 'success', '2023-12-09 02:00:23', '2023-12-09 02:00:23'),
(13, 19, 1, 'rnt-221305', '30', '2023-06-12', '2024-01-12', 'success', '2023-12-09 02:01:08', '2023-12-09 02:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `roles`, `active`, `email_verified_at`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jono', 'Jono@g.com', 'admin', 1, NULL, NULL, '$2y$10$i7o9ZkaxvRpgxq/yuTNjp.DZ3aDRb5WT1ddQZ8vVxtlChKoCW0PLC', NULL, '2023-12-04 07:41:00', '2023-12-04 07:41:00'),
(2, 'John Doe', 'john@gmail.com', 'customer', 1, NULL, NULL, '$2y$10$20pVxG2aN1CoACSq7xMx7ujVH26drUIUVDCwvpsa/f9g2VgyxbFuG', NULL, '2023-12-04 07:41:00', '2023-12-04 07:41:00'),
(3, 'admin', 'admin@gmail.com', 'admin', 1, NULL, NULL, '$2y$10$CWZD7RYdO0K8T5aFuZ/Vpu40azdGPR/u554YFSijKT7j/YA2p1eY.', NULL, '2023-12-07 08:35:58', '2023-12-07 08:35:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
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
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_car_id_foreign` (`car_id`),
  ADD KEY `transactions_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
