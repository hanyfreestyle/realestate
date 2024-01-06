-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 11:52 AM
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
-- Dumping data for table `meta_tag_translations`
--

INSERT INTO `meta_tag_translations` (`id`, `meta_tag_id`, `locale`, `g_title`, `g_des`, `body_h1`, `breadcrumb`) VALUES
(1, 1, 'ar', 'الصفحة الرئيسة', 'وصف الصفحة الرئيسية', 'الصفحة الرئيسية H1', 'وسام الصفحة الرئيسية'),
(2, 1, 'en', 'Home Page', 'Home Description ', 'Home h1 tag', 'Home breadcrumb'),
(3, 2, 'ar', 'المطورين', 'المطورين', 'المطورين', 'المطورين'),
(4, 2, 'en', 'Developer', 'Developer', 'Developer', 'Developer'),
(5, 3, 'ar', 'المقالات', 'المقالات', 'المقالات', 'المقالات'),
(6, 3, 'en', 'Blog', 'Blog', 'Blog', 'Blog'),
(7, 4, 'ar', 'اتصل بنا', 'اتصل بنا', 'اتصل بنا', 'اتصل بنا'),
(8, 4, 'en', 'Contact Us', 'Contact Us', 'Contact Us', 'Contact Us'),
(9, 5, 'ar', 'كمبوندات مصر', 'كمبوندات مصر', 'كمبوندات مصر', 'كمبوندات مصر'),
(10, 5, 'en', 'Compounds', 'Compounds', 'Compounds', 'Compounds'),
(11, 6, 'ar', 'شقق للبيع', 'شقق للبيع', 'شقق للبيع', 'شقق للبيع'),
(12, 6, 'en', 'For Sale', 'For Sale', 'For Sale', 'For Sale');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
