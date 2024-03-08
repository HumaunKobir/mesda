-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 05:05 PM
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
-- Database: `mesda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `type`, `mobile`, `email`, `password`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mesda', 'admin', '01971018613', 'mesda@gmail.com', '$2y$10$pvd9G4Ro5MQgxnSU7NT3yepfEsqLY37KSHkOV7au6.zLW9Ckro2cS', '', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

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

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_05_104958_create_admins_table', 2),
(6, '2024_03_05_120707_create_users_table', 3),
(7, '2024_03_05_150407_create_users_table', 4),
(8, '2024_03_07_095903_create_users_table', 5),
(9, '2024_03_07_130713_create_users_table', 6),
(10, '2024_03_07_133331_create_users_table', 7),
(11, '2024_03_07_134448_create_users_table', 8),
(12, '2024_03_07_141314_create_users_table', 9),
(13, '2024_03_08_020215_create_posts_table', 10),
(14, '2024_03_08_025541_create_posts_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_summary` varchar(255) NOT NULL,
  `post_tag` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_image`, `post_author`, `post_summary`, `post_tag`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Iftar party', '1709870758-.PNG', 'Admin', 'Party', 'facebook.com', '1', NULL, '2024-03-07 22:05:58'),
(2, 'Eid Event', '1709868831-.PNG', 'Admin', 'Eid Holyday', 'facebook.com', '1', '2024-03-07 21:33:51', '2024-03-07 21:33:51'),
(3, 'School Function', '1709869053-.PNG', 'Admin', 'School Functions', 'facebook.com', '1', '2024-03-07 21:37:33', '2024-03-07 21:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `distric` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bload_group` varchar(255) NOT NULL,
  `academic_one` varchar(255) NOT NULL,
  `institution_one` varchar(255) NOT NULL,
  `passing_year_one` varchar(255) NOT NULL,
  `academic_two` varchar(255) DEFAULT NULL,
  `institution_two` varchar(255) DEFAULT NULL,
  `passing_year_two` varchar(255) DEFAULT NULL,
  `academic_three` varchar(255) DEFAULT NULL,
  `institution_three` varchar(255) DEFAULT NULL,
  `passing_year_three` varchar(255) DEFAULT NULL,
  `academic_four` varchar(255) DEFAULT NULL,
  `institution_four` varchar(255) DEFAULT NULL,
  `passing_year_four` varchar(255) DEFAULT NULL,
  `prof_dsignation` varchar(255) DEFAULT NULL,
  `organization_name` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `distric`, `city`, `phone`, `date_of_birth`, `gender`, `bload_group`, `academic_one`, `institution_one`, `passing_year_one`, `academic_two`, `institution_two`, `passing_year_two`, `academic_three`, `institution_three`, `passing_year_three`, `academic_four`, `institution_four`, `passing_year_four`, `prof_dsignation`, `organization_name`, `user_image`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'mesda', 'mesda@gmail.com', 'Gajipur', 'Dhaka', '01971018613', '1999-06-15', 'Male', 'O+', 'ssc', 'Keramjany High School', '2016', 'HSC', 'Pigna College', '2018', 'Graduate', 'IUBAT', '2023', 'Post-graduate', 'Dhaka', '2025', 'Content Modarator', 'Genex Infosys Limited', '1709822009-mesda.PNG', '2024-03-08 05:28:39', '$2y$12$ikgKIwcz5vTf/z7mk.av8OHNP6m5KC4cWxIN73piGgvtG.tdxcC9u', 1, NULL, '2024-03-07 08:33:29', '2024-03-07 23:28:39'),
(5, 'MESDA', 'mesda123@gmail.com', 'Gajipur', 'Dhaka', '01971018613', '5544-12-31', 'Male', 'O+', 'SSC', 'Keramjany High School', '2016', 'HSC', 'Pigna College', '2018', 'Graduate', 'IUBAT', '2023', 'Post-graduate', 'Dhaka', '2025', 'Content Modarator', 'Genex Infosys Limited', '1709876857-MESDA.PNG', '2024-03-08 05:56:43', '$2y$12$voNJEp/hl1dU82vKx/ImY.1rbXp3LanMngjdiFzoeeVXn6/9ohXIS', 1, NULL, '2024-03-07 23:47:37', '2024-03-07 23:56:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
