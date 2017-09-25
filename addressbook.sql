-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 04:23 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addressbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `name`, `company_name`, `job_title`, `email`, `phone_number`, `mobile_number`, `address`, `notes`, `created_at`, `updated_at`, `user_id`) VALUES
(9, 'Mrs', 'Mary Smith', 'Smith''s Baking Company', 'Owner', 'Mary@sbc.com', '012345678', 'N/A', 'Smith''s Baking Company,\r\nBakingville Road,\r\nBakers', '-', '2017-09-24 12:44:13', '2017-09-24 12:44:13', 1),
(10, 'Mr', 'Kevin Hunt', 'Hunting Lodge', 'Director', 'Kevin@huntinglodge.com', '012345678', '01233337899', 'Hunting Lodge,\r\nHunters Road', 'Prefers to be called on his Mobile.', '2017-09-24 12:47:00', '2017-09-24 12:47:00', 1),
(11, 'Master', 'Sean Coleman', 'Alcorn', 'Team Leader', 'sean.coleman@company.com', '01548833333', 'N/A', 'Alcorn Estates,\r\nGalpin Road\r\nDevon', '-', '2017-09-24 12:48:47', '2017-09-24 12:48:47', 1),
(12, 'Mr', 'Benjamin Thomas', 'Cutting Costs', 'Sales Manager', 'benjamin@cuttingcosts.com', '708-84-90', 'N/A', 'Cutting Costs,\r\nBrownston Street,\r\nFlorida', 'Beware of the time zone difference before phoning.', '2017-09-24 12:52:30', '2017-09-24 12:52:30', 1),
(13, 'Mrs', 'Helen Hammer', 'Polard Cafe', 'Owner', 'info@polardcafe.com', '07883234567', '07777345673', '23 Church Street,\r\nExeter,\r\nDevon\r\nEX1 234', 'Phone between the hours 08:00 - 16:00', '2017-09-24 12:55:01', '2017-09-24 12:55:01', 1),
(14, 'Miss', 'Denise Walker', 'Walker''s Call Centre', 'Support Technician', 'denise@walkerscc.com', '012345678', '022234566', 'Office 22,\r\nSilverwell Park,\r\nExample', 'Prefer to be called on the phone number.', '2017-09-24 12:57:49', '2017-09-24 12:57:49', 1);

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
(3, '2017_09_21_121809_create_contacts_table', 1),
(4, '2017_09_22_142937_add_user_id_to_contacts', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thomas Pepperell', 'thomas2.pepperell@gmail.com', '$2y$10$rnSo1vnn/4NsGvgDd3b6E.zxkUbZ1w.qx4kV4QWudUIp3wxP1zNsW', '8uTSa6B115ZyyVzyUyqihdMRuve6jdFXq37Oa0W5gmKrCFjr0DNFAzRg6NUs', '2017-09-22 10:29:19', '2017-09-22 10:29:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
