-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 08:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_realestate`
--

--
-- Dumping data for table `config_def_photos`
--

INSERT INTO `config_def_photos` (`id`, `cat_id`, `photo`, `photo_thum_1`, `photo_thum_2`, `postion`, `created_at`, `updated_at`) VALUES
(1, 'dark-logo', 'images/def-photo/dark-logo-eh5ttAQPSH.webp', NULL, NULL, 1, '2023-08-16 09:18:40', '2023-10-15 06:47:00'),
(3, 'project', 'images/def-photo/project-2mW1dPGqA4.webp', 'images/def-photo/project-4CIZMONAWn.webp', NULL, 3, '2023-08-16 09:18:40', '2023-10-15 06:46:40'),
(4, 'blog', 'images/def-photo/blog-0i93d20McM.webp', 'images/def-photo/blog-ja40gxZ7NU.webp', NULL, 4, '2023-08-16 09:18:40', '2023-10-15 06:46:40'),
(5, 'district', 'images/def-photo/district-KV7ho9poco.webp', 'images/def-photo/district-vYTx3dGPKL.webp', NULL, 5, '2023-08-16 09:18:40', '2023-10-15 06:46:40'),
(6, 'units', 'images/def-photo/units-IjgBIWg5fb.webp', 'images/def-photo/units-SUapFskARy.webp', NULL, 6, '2023-08-16 09:18:40', '2023-10-15 06:46:40'),
(7, 'developer', 'images/def-photo/developer-5ZTk6EyQOs.webp', 'images/def-photo/developer-b7xM42SSYe.webp', NULL, 2, '2023-08-16 11:28:03', '2023-10-15 06:46:40'),
(8, 'light-logo', 'images/def-photo/light-logo-DNJrdvlgdZ.webp', NULL, NULL, 0, '2023-10-15 07:03:47', '2023-10-15 07:03:47'),
(9, 'video_photo', 'images/def-photo/video-photo-eRtOLIqyh5.webp', NULL, NULL, 0, '2023-10-17 06:11:28', '2023-10-17 06:11:28'),
(10, 'location', 'images/def-photo/location-Nwz77K5Ucz.webp', NULL, NULL, 0, '2023-10-17 15:36:15', '2023-10-17 15:36:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
