-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 06:26 PM
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
-- Dumping data for table `listing_photos`
--

INSERT INTO `listing_photos` (`id`, `listing_id`, `photo`, `photo_thum_1`, `photo_thum_2`, `file_extension`, `file_size`, `file_h`, `file_w`, `position`, `is_default`, `created_at`, `updated_at`) VALUES
(22, 9, 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-XGLFaHqw29.webp', 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-FsuWlHh9Ns.webp', NULL, NULL, NULL, NULL, NULL, 3, 0, '2023-11-19 08:32:01', '2023-11-19 08:35:59'),
(23, 9, 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-VEjVS6wQEF.webp', 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-uevqDIhmVt.webp', NULL, NULL, NULL, NULL, NULL, 4, 0, '2023-11-19 08:32:01', '2023-11-19 08:32:44'),
(24, 9, 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-jIurDkMC3l.webp', 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-1InMd9anUY.webp', NULL, NULL, NULL, NULL, NULL, 8, 0, '2023-11-19 08:32:01', '2023-11-19 08:32:44'),
(25, 9, 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-GX9WquGEqM.webp', 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-Rkh2I9M5ea.webp', NULL, NULL, NULL, NULL, NULL, 5, 0, '2023-11-19 08:32:01', '2023-11-19 08:32:44'),
(26, 9, 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-X0I8lQk4VT.webp', 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-oSBTHdJtVl.webp', NULL, NULL, NULL, NULL, NULL, 6, 0, '2023-11-19 08:32:22', '2023-11-19 08:32:44'),
(27, 9, 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-wUgSwbLd90.webp', 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-RuGSf47yf1.webp', NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-11-19 08:32:22', '2023-11-19 08:36:07'),
(28, 9, 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-T727lJPgbq.webp', 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-gjOHUy8FGd.webp', NULL, NULL, NULL, NULL, NULL, 7, 0, '2023-11-19 08:32:22', '2023-11-19 08:32:44'),
(29, 9, 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-JtrDeXFePj.webp', 'images/project/9/9-residential-in-new-administrative-capital-antrada-compound-iL4xlIpzlU.webp', NULL, NULL, NULL, NULL, NULL, 2, 0, '2023-11-19 08:32:22', '2023-11-19 08:36:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
