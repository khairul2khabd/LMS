-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 06:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khairul`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Khairul Islam', 'khairul@gmail.com', '2021-02-24 11:29:25', '$2y$10$Mpo1lKdn1wFtAnoSY.Sk9OWfbQWqmxhD6MlF6xzRpHQxOony4Q.ua', '01766940078', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_topics`
--

CREATE TABLE `course_topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_heading_one` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description_one` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_heading_two` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description_two` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_heading_three` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description_three` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_heading_four` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description_four` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_heading_five` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description_five` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_heading_six` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_description_six` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_topics`
--

INSERT INTO `course_topics` (`id`, `topic_heading_one`, `topic_description_one`, `topic_heading_two`, `topic_description_two`, `topic_heading_three`, `topic_description_three`, `topic_heading_four`, `topic_description_four`, `topic_heading_five`, `topic_description_five`, `topic_heading_six`, `topic_description_six`, `status`, `created_at`, `updated_at`) VALUES
(1, 'How is your idea valuable??', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'How is your idea valuable??', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'How will you reach more customers??', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'How profitable is your idea??', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Is investment capital right for you??', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'How will you pitch your idea??', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '1', '2021-02-25 12:26:37', '2021-02-26 15:49:19');

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
-- Table structure for table `home_texts`
--

CREATE TABLE `home_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_course` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_texts`
--

INSERT INTO `home_texts` (`id`, `course_title`, `about_course`, `about_description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Management, Legal & Policy, IP Patent', 'About Course', 'This specialization covers the basics of Innovation and Entrepreneurship courses in the EIT Digital Master Program. The program aims to educate students and deliver entrepreneurs with the right business skills and sense. UC Berkeley Haas School of Business and KTH Royal Institute of Technology are the academic partners in this Innovation and Entrepreneurship specialization.', '1', '2021-02-25 06:19:20', '2021-02-26 23:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `learnings`
--

CREATE TABLE `learnings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_8` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learnings`
--

INSERT INTO `learnings` (`id`, `heading_title`, `title_1`, `title_2`, `title_3`, `title_4`, `title_5`, `title_6`, `title_7`, `title_8`, `status`, `created_at`, `updated_at`) VALUES
(4, 'What Will I Learn?', 'This Course Plus the Full Specialization', 'Shareable Certificates', 'Self-Paced Learning Option', 'Course Videos & Readings', 'Practice Quizzes', 'Graded Assignments with Peer Feedback', 'Graded Quizzes with Feedback', 'Graded Programming Assignments', '1', '2021-02-25 09:42:58', '2021-02-26 23:05:57');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_24_105115_create_admins_table', 2),
(6, '2021_02_24_222315_create_home_texts_table', 3),
(8, '2021_02_25_130235_create_learnings_table', 4),
(10, '2021_02_25_155500_create_course_topics_table', 5);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@gmail.com', NULL, '$2y$10$Z440tJslgrMeKQhtkiRoAuwlXrjrWyA.mtr5XFnyCRxNmiJktWv5y', NULL, '2021-02-24 04:46:54', '2021-02-24 04:46:54'),
(2, 'masum', 'masum@gmail.com', NULL, '$2y$10$bBSPTk44eMJYSyEpFzZlwewhCDAlXZ.uQkePXPmEhRNUiu4vAjA6O', NULL, '2021-02-24 09:32:17', '2021-02-24 09:32:17'),
(3, 'Md.Mazharul Islam', 'maz@gmail.com', NULL, '$2y$10$iOc0VkDRDDqu2KHc0AdrCecvW0ra3ZSDkJAgXHzQ4uOK3rPea3O0S', NULL, '2021-02-24 11:32:12', '2021-02-24 11:32:12'),
(4, 'Md.Mazharul Islam', 'emon@gmail.com', NULL, '$2y$10$gc6ND0HPgxjaQfJLVqECWu0orIlMtkaPVPi8gUqSYqfdAAngp2f4u', NULL, '2021-02-24 11:32:29', '2021-02-24 11:32:29'),
(5, 'form', 'eng.emonahmed123@gmail.com', NULL, '$2y$10$Owq0luDmYVv6MTOO4iidZee2CiIUgIOC158/jNFicdBQvhL6XKrOa', NULL, '2021-02-24 14:54:43', '2021-02-24 14:54:43');

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
-- Indexes for table `course_topics`
--
ALTER TABLE `course_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_texts`
--
ALTER TABLE `home_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learnings`
--
ALTER TABLE `learnings`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_topics`
--
ALTER TABLE `course_topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_texts`
--
ALTER TABLE `home_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `learnings`
--
ALTER TABLE `learnings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
