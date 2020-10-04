-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 03:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageurl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `author`, `imageurl`, `created_at`, `updated_at`) VALUES
(1, 'Dasar Web Programming', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nemo, esse necessitatibus ullam ducimus sequi quidem, perferendis, perspiciatis aliquam culpa ratione natus reiciendis pariatur. Ducimus, ullam quo rerum delectus animi ab officiis ipsam doloremque dolorum sequi nisi, non magnam fugiat provident nemo aliquid harum doloribus facilis ex hic laudantium amet.', 'Muhammad Nur Amin', 'https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/105047260/original/47565781566a245b138e5b77ad9aee6785f3d23f/be-your-web-developer-in-php-wordpress-html-or-javascript.png', '2020-10-03 14:50:26', '2020-10-03 14:50:26'),
(2, 'Pemrograman Web Lanjut', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nemo, esse necessitatibus ullam ducimus sequi quidem, perferendis, perspiciatis aliquam culpa ratione natus reiciendis pariatur. Ducimus, ullam quo rerum delectus animi ab officiis ipsam doloremque dolorum sequi nisi, non magnam fugiat provident nemo aliquid harum doloribus facilis ex hic laudantium amet.', 'Budi Setiawan', 'https://blog.templatetoaster.com/wp-content/uploads/2018/09/Best-PHP-Frameworks-Facebook.png', '2020-10-03 14:50:44', '2020-10-03 04:43:56'),
(3, 'Apa Itu Git & Github', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nemo, esse necessitatibus ullam ducimus sequi quidem, perferendis, perspiciatis aliquam culpa ratione natus reiciendis pariatur. Ducimus, ullam quo rerum delectus animi ab officiis ipsam doloremque dolorum sequi nisi, non magnam fugiat provident nemo aliquid harum doloribus facilis ex hic laudantium amet.', 'Susi Susanti', 'https://miro.medium.com/max/1200/1*Z0QJCX3vTZz1g421batDIA.jpeg', '2020-10-03 14:58:55', '2020-10-03 14:58:55'),
(4, 'OOP Dasar PHP', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nemo, esse necessitatibus ullam ducimus sequi quidem, perferendis, perspiciatis aliquam culpa ratione natus reiciendis pariatur. Ducimus, ullam quo rerum delectus animi ab officiis ipsam doloremque dolorum sequi nisi, non magnam fugiat provident nemo aliquid harum doloribus facilis ex hic laudantium amet.', 'Muhammad Nur Amin', 'https://geraniumweb.com/wp-content/uploads/2020/02/PHP-Programming.jpg', '2020-10-03 14:58:55', '2020-10-03 14:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_24_164503_create_articles_table', 1);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
