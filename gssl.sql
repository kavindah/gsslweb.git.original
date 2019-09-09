-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 11:37 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gssl`
--

-- --------------------------------------------------------

--
-- Table structure for table `abstactvolumemores`
--

CREATE TABLE `abstactvolumemores` (
  `id` int(10) UNSIGNED NOT NULL,
  `abstract_volume_id` int(5) DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abstactvolumemores`
--

INSERT INTO `abstactvolumemores` (`id`, `abstract_volume_id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(8, 21, '2', '111111111111', '<p>1111111111111</p>', '2019-03-31 01:56:31', '2019-03-31 01:56:31'),
(9, 2, '2', 'testing', '<p>testing testing testing</p>', '2019-04-30 21:59:35', '2019-04-30 22:50:52'),
(10, 2, '2', 'sdsasadsadsa', '<p>sadsa</p>', '2019-04-30 22:08:42', '2019-04-30 22:08:42'),
(11, 2, '2', 'asxsa', '<p>sadsa ss ss</p>', '2019-04-30 22:09:17', '2019-04-30 23:05:18'),
(12, 1, '2', ' Director General of GSMB–New Appointment', '<p>test&nbsp;</p>', '2019-04-30 23:06:05', '2019-04-30 23:06:05'),
(13, 1, '2', 'testing', '<p>ssw</p>', '2019-04-30 23:06:23', '2019-04-30 23:06:23'),
(14, 1, '2', 'dwdwdw', '<p>dwdwdw</p>', '2019-04-30 23:06:38', '2019-04-30 23:06:38'),
(15, 1, '2', 'dwdwdwdwdwd', '<p>dwdwdwdwdw</p>', '2019-04-30 23:06:53', '2019-04-30 23:06:53'),
(17, 3, '2', 'frfrfr', '<p>rgrgr 123</p>', '2019-04-30 23:17:14', '2019-04-30 23:17:30'),
(19, 13, '2', 'kkkkkk', '<p><a href=\"/files/2/AccountBalanceAdjustmentEntry1%20(1).pdf\" target=\"_blank\" rel=\"noopener\">gggg</a></p>', '2019-08-20 22:39:41', '2019-08-20 22:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `abvolumes`
--

CREATE TABLE `abvolumes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abvolumes`
--

INSERT INTO `abvolumes` (`id`, `user_id`, `title`, `created_at`, `updated_at`) VALUES
(3, '2', 'testing', '2019-04-30 23:12:25', '2019-04-30 23:12:25'),
(4, '2', 'Abstract-2016', '2019-04-30 23:18:10', '2019-04-30 23:18:10'),
(5, '2', '123455', '2019-08-20 05:39:07', '2019-08-20 05:39:07'),
(6, '2', '123455', '2019-08-20 05:39:10', '2019-08-20 05:39:10'),
(7, '2', '123455', '2019-08-20 05:39:12', '2019-08-20 05:39:12'),
(8, '2', '123455', '2019-08-20 05:39:15', '2019-08-20 05:39:15'),
(9, '2', '123455', '2019-08-20 05:39:17', '2019-08-20 05:39:17'),
(10, '2', '123455', '2019-08-20 05:39:20', '2019-08-20 05:39:20'),
(11, '2', '123455', '2019-08-20 05:39:22', '2019-08-20 05:39:22'),
(12, '2', '123455', '2019-08-20 05:39:25', '2019-08-20 05:39:25'),
(13, '2', '123455', '2019-08-20 05:39:27', '2019-08-20 05:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `anandamedals`
--

CREATE TABLE `anandamedals` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anandamedals`
--

INSERT INTO `anandamedals` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(3, '2', 'Award of Ananda Coomaraswamy Medal 2013', '<p>Mr. Nimal S. Ranasinghe, former director of the Geological Survey Department of Sri Lanka and Dr. Bernard N. Prame, deputy director of the Geological&nbsp;Survey &amp; Mines Bureau received the Ananda Coomarswamy Medals for year 2013&nbsp;and the&nbsp; award ceremony and the memorial orations were held at the Disaster Management Center (DMC), Colombo.</p>\r\n<p>Ananda Cooaraswamy was intensely engaged in research on the Geology of Sri Lanka and from 1903 to 1906 he was appointed the first Director of the Mineralogical Survey of Ceylon.<img style=\"float: right; margin: 10px;\" src=\"/photos/2/ako1-300x206.jpg\" alt=\"\" width=\"273\" height=\"187\" /></p>\r\n<p><strong>THOUGHTS ON THE AC MEDAL BY THE RECIPIANTS</strong></p>\r\n<p><strong>Mr. Nimal Ratnasinghe</strong></p>\r\n<p><strong><img style=\"float: left; margin: 10px;\" src=\"/photos/2/akom-300x273.jpg\" alt=\"\" width=\"224\" height=\"204\" /></strong></p>\r\n<p>It is indeed a great honour for me to receive the prestigious Ananda Coomaraswamy Medal. This recognition gives tremendous joy. I have received many kindnesses but this honour accorded to me is without parallel. I feel it is the endorsement by our Geology community for my contribution to it, over a span of 54 years, from 1959 to 2013. In receiving this award as the nineteenth co-recipient, I am greatly humbled and honoured to be one among them. I share it with all my colleagues who took a small part of their own journey with me.<img style=\"float: right; margin: 10px;\" src=\"/photos/2/ac-300x238.png\" alt=\"\" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-10-17 13:35:48', '2018-10-17 14:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `anandamedalwinners`
--

CREATE TABLE `anandamedalwinners` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anandamedalwinners`
--

INSERT INTO `anandamedalwinners` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(2, '2', '<p>test 2</p>', '2019-05-10 22:32:28', '2019-05-10 22:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `annualsessions`
--

CREATE TABLE `annualsessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `annualtripmores`
--

CREATE TABLE `annualtripmores` (
  `id` int(10) UNSIGNED NOT NULL,
  `annual_trip_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annualtripmores`
--

INSERT INTO `annualtripmores` (`id`, `annual_trip_id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, '3', '2', 'testing', 'kl', '2019-05-06 10:37:30', '2019-05-06 10:37:30'),
(2, '3', '2', 'testing 2', 'mkh', '2019-05-06 10:37:45', '2019-05-06 10:37:45'),
(4, '4', '2', 'testing 2 1', 'hjkl j j k', '2019-05-06 10:43:33', '2019-05-06 10:47:18'),
(5, '5', '2', 'testing 2', 'aaa', '2019-05-06 10:48:11', '2019-05-06 10:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `annualtrips`
--

CREATE TABLE `annualtrips` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annualtrips`
--

INSERT INTO `annualtrips` (`id`, `user_id`, `title`, `created_at`, `updated_at`) VALUES
(4, '2', 'testing', '2019-05-06 10:42:55', '2019-05-06 10:42:55'),
(5, '2', 'testing 2 3', '2019-05-06 10:47:46', '2019-05-06 10:47:46'),
(6, '2', 'testing annual sessions', '2019-05-06 11:11:19', '2019-05-06 11:11:19'),
(7, '2', 'testing at', '2019-05-06 11:18:30', '2019-05-06 11:18:30'),
(8, '2', 'testing at', '2019-05-06 11:19:41', '2019-05-06 11:19:41'),
(9, '2', 'testing 2', '2019-05-06 11:21:32', '2019-05-06 11:21:32'),
(10, '2', '123455', '2019-08-20 05:57:49', '2019-08-20 05:57:49'),
(11, '2', '123455', '2019-08-20 05:57:52', '2019-08-20 05:57:52'),
(12, '2', '123455', '2019-08-20 05:57:54', '2019-08-20 05:57:54'),
(13, '2', '123455', '2019-08-20 05:57:57', '2019-08-20 05:57:57'),
(14, '2', '123455', '2019-08-20 05:57:59', '2019-08-20 05:57:59'),
(15, '2', '123455', '2019-08-20 05:58:01', '2019-08-20 05:58:01'),
(16, '2', '123455', '2019-08-20 05:58:04', '2019-08-20 05:58:04'),
(17, '2', '123455', '2019-08-20 05:58:06', '2019-08-20 05:58:06'),
(18, '2', '123455', '2019-08-20 05:58:09', '2019-08-20 05:58:09'),
(19, '2', '123455', '2019-08-20 05:58:11', '2019-08-20 05:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover_image` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`, `cover_image`) VALUES
(30, '2', 'Testing 1', '<p><img src=\"/photos/2/afc886e871046dd26d12fa53b948f8e7--outdoor-restaurant-design-restaurant-ideas.jpg\" alt=\"\" width=\"258\" height=\"220\" /></p>', '2019-09-09 01:02:51', '2019-09-09 01:09:56', '<p><img src=\"/photos/2/afc886e871046dd26d12fa53b948f8e7--outdoor-restaurant-design-restaurant-ideas.jpg\" alt=\"\" width=\"400px\" height=\"200px\" /></p>'),
(31, '2', 'Testing 3', '<p><img src=\"/photos/2/download.jpg\" alt=\"\" /></p>\r\n<p>testing 2</p>', '2019-09-09 03:32:20', '2019-09-09 03:42:24', '<p><img src=\"/photos/2/download.jpg\" alt=\"\" width=\"358\" height=\"223\" /></p>'),
(32, '2', 'Testing 4', '<p><img src=\"/photos/2/download.jpg\" alt=\"\" width=\"356\" height=\"222\" /></p>\r\n<pre>$article-&gt;body</pre>\r\n<pre>$article-&gt;body</pre>\r\n<pre>$article-&gt;body</pre>\r\n<pre>$article-&gt;body</pre>', '2019-09-09 03:43:07', '2019-09-09 03:43:58', '<p><img src=\"/photos/2/download.jpg\" alt=\"\" width=\"351\" height=\"219\" /></p>');

-- --------------------------------------------------------

--
-- Table structure for table `calenders`
--

CREATE TABLE `calenders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calenders`
--

INSERT INTO `calenders` (`id`, `title`, `start_date`, `end_date`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'research activities leading to new findings', '2018-11-11 16:25:43', '2018-11-16 18:30:00', '', '2018-11-10 18:30:00', '2018-11-10 18:30:00'),
(2, '<p>premier forum dedicated to geoscientists of Sri Lanka..</p>', '2019-03-20 18:30:00', '2019-03-31 15:20:46', '2', '2018-11-11 12:45:20', '2019-03-31 09:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `editorialboards`
--

CREATE TABLE `editorialboards` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fieldexcrusions`
--

CREATE TABLE `fieldexcrusions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fieldexcrusions`
--

INSERT INTO `fieldexcrusions` (`id`, `user_id`, `title`, `created_at`, `updated_at`) VALUES
(4, '2', 'testing 2 1', '2019-05-06 10:13:33', '2019-05-06 10:14:20'),
(5, '2', '123455', '2019-08-20 05:55:55', '2019-08-20 05:55:55'),
(6, '2', '123455', '2019-08-20 05:55:57', '2019-08-20 05:55:57'),
(7, '2', '123455', '2019-08-20 05:55:59', '2019-08-20 05:55:59'),
(8, '2', '123455', '2019-08-20 05:56:02', '2019-08-20 05:56:02'),
(9, '2', '123455', '2019-08-20 05:56:04', '2019-08-20 05:56:04'),
(10, '2', '123455', '2019-08-20 05:56:06', '2019-08-20 05:56:06'),
(11, '2', '123455', '2019-08-20 05:56:09', '2019-08-20 05:56:09'),
(12, '2', '123455', '2019-08-20 05:56:11', '2019-08-20 05:56:11'),
(13, '2', '123455', '2019-08-20 05:56:13', '2019-08-20 05:56:13'),
(14, '2', '123455', '2019-08-20 05:56:18', '2019-08-20 05:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `fieldexcursionmores`
--

CREATE TABLE `fieldexcursionmores` (
  `id` int(10) UNSIGNED NOT NULL,
  `field_excursion_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fieldexcursionmores`
--

INSERT INTO `fieldexcursionmores` (`id`, `field_excursion_id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, '3', '2', 'testing 2 1', 'hjgf hg', '2019-05-06 10:12:41', '2019-05-06 10:13:01'),
(3, '4', '2', 'testing', 'l', '2019-05-06 10:13:52', '2019-05-06 10:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `focuses`
--

CREATE TABLE `focuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `focuses`
--

INSERT INTO `focuses` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(4, '2', 'Testing 2', '<p>Testign123</p>\r\n<p><a href=\"/abstract_volume/13\"><img src=\"/photos/2/afc886e871046dd26d12fa53b948f8e7--outdoor-restaurant-design-restaurant-ideas.jpg\" alt=\"\" width=\"247\" height=\"211\" /></a></p>\r\n<p>I was trying to&nbsp;<em>open</em>&nbsp;http://localhost/<em>test</em>/public/ and I got&nbsp;<em>Error</em>&nbsp;in exception handler.</p>', '2019-08-21 04:07:49', '2019-09-09 00:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `gsslbooks`
--

CREATE TABLE `gsslbooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gsslbooks`
--

INSERT INTO `gsslbooks` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(3, '2', 'GSSL Publication on ‘Advancement in Geology of Sri Lanka’', '<p>&nbsp;</p>\r\n<p>Since the book on the Geology of Sri Lanka by late Prof. P.G. Cooray, published by National Museums of Sri Lanka, appeared in 1967, few other attempts have been made to review, collate and publish the advances made in the geology of Sri Lanka in a comprehensive format. Work on some aspects of Sri Lankan Precambrian basins done by German-Sri Lankan-Consortium (1987-1991) and Japan-Sri Lanka collaboration in 1986-1990) have given significant advances in geology of Sri Lanka. However, Cooray&rsquo;s book on the Geology of Sri Lanka remained the only reference book in understanding the general aspect s of regional geology of Si Lanka.</p>\r\n<p>A proper knowledge of the advancement and updated geology of Sri Lanka and the dissemination and documentation of this information in the form of a book as has been attempted here are necessary to attract both graduate and undergraduate students, public and private sector investors of the Sri Lankan economy, which in turn should lead to the establishment of small and medium-scale enterprises.</p>\r\n<p>This book on &lsquo;Advancement of Geology in Sri Lanka&rsquo; is generally a review and an assemblage of several separate works on different aspects related to the geology of Sri Lanka with some new data generated in the last few years. It is therefore clear that most parts and indeed most of the chapters derive from previous works by other authors and in such cases, these have been clearly stated and the respective previous works and the authors duly acknowledged. The following sections have been identified in the proposed book of advancement of geology.</p>\r\n<hr />\r\n<p><strong>Content</strong></p>\r\n<p><strong>Section 1&ndash; Understanding of Development of Geology of Sri Lanka</strong></p>\r\n<p>Chapter 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Historical progress of geology</p>\r\n<p>Chapter 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Geomorphological setting of Sri Lanka</p>\r\n<p>Chapter 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Theories established based on denudation and upliftment</p>\r\n<p>Chapter 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Precambrian historical records</p>\r\n<p><strong>&nbsp;</strong><strong>Section 2&ndash; Episodes of Crustal Developments of Sri Lanka</strong></p>\r\n<p>Chapter 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Major geological subdivisions of Sri Lanka</p>\r\n<p>Chapter 6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sri Lankan Precambrian crust and its position in Gondwana/Rodinia</p>\r\n<p>Chapter 7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Evolution of sedimentary basins</p>\r\n<p>Chapter 8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Brittle fractures, lineaments and aquifer formation</p>\r\n<p><strong>Section 3&ndash;&nbsp; Evolution of Metamorphic Basements of Sri Lanka</strong></p>\r\n<p>Chapter 9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rocks of metamorphic basement</p>\r\n<p>Chapter 10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thermal history</p>\r\n<p>Chapter 11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Structural and tectonic history</p>\r\n<p>Chapter 12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Geochronology</p>\r\n<p>Chapter 13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pressure-temperature-time (P-T-t) history</p>\r\n<p>Chapter 14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cooling history</p>\r\n<p><strong>Section 4&ndash;Post Metamorphic Magmatism in Sri Lanka</strong></p>\r\n<p>Chapter 15&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pegmatites</p>\r\n<p>Chapter 16&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dolerite dikes</p>\r\n<p>Chapter 17&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Carbonatites</p>\r\n<p>Chapter 18&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Serpentinite rocks</p>\r\n<p>Chapter 19&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Granites and granite looking rocks</p>\r\n<p><strong>&nbsp;Section 5&ndash;Sedimentary Basins of Sri Lanka</strong></p>\r\n<p>Chapter 20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jurassic sedimentary formations</p>\r\n<p>Chapter 21&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lanka basin</p>\r\n<p>Chapter 22&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cauvery basin</p>\r\n<p>Chapter 23&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mannar basin</p>\r\n<p>Chapter 24&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Continental margin and abyssal plane sediments</p>\r\n<p>Chapter 25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Miocene Limestones</p>\r\n<p>Chapter 26&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quaternary deposits</p>\r\n<p>(Peat, Red earth, Beach rocks, Laterite, Alluvial deposits, Inland coral reefs)</p>\r\n<p><strong>Section 6&ndash; Mineral Resources of Sri Lanka</strong></p>\r\n<p>Chapter 27&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phosphate deposits</p>\r\n<p>Chapter 28&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Iron-bearing formations</p>\r\n<p>Chapter 29&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Copper-magnetite occurrences</p>\r\n<p>Chapter 30&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Graphite occurrences</p>\r\n<p>Chapter 31&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vein quartz deposits</p>\r\n<p>Chapter 32&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Feldspar deposits</p>\r\n<p>Chapter 33&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mica deposits</p>\r\n<p>Chapter 34&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Metals and radioactive minerals</p>\r\n<p>Chapter 35&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Clay deposits</p>\r\n<p>Chapter 36&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gem deposits</p>\r\n<p>Chapter 37&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Heavy mineral sands</p>\r\n<p>Chapter 38&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Geothermal resources</p>\r\n<p><strong>Section 7 &ndash; Geological Mapping of Sri Lanka</strong></p>\r\n<p>Chapter 39&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Overview of structural and geological mapping</p>\r\n<p>Chapter 40&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Geological mapping in hard rock terrains</p>\r\n<p>Chapter 41&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quaternary geological mapping</p>\r\n<p>Chapter 42&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Geochemical mapping</p>\r\n<p><strong>Section 8 &ndash; Passive-Source Seismic Studies of Sri Lanka</strong></p>\r\n<p>Chapter 43&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seismicity in and around Sri Lanka</p>\r\n<p>Chapter 44&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trans-oceanic Tsunamis</p>\r\n<p>Chapter 45&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indo-Australian collision and new plate development</p>\r\n<p><strong>Section 9&ndash;</strong><strong>Landslides in Sri Lanka</strong></p>\r\n<p>Chapter 46&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Recognition of landslides and its inventory</p>\r\n<p>Chapter 47&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Landslide hazard mapping</p>\r\n<p>Chapter 48&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Modelling of landslides</p>\r\n<p><strong>&nbsp;</strong><strong>Section 10&ndash;Sri Lankan Geological Community</strong></p>\r\n<p>Chapter 49&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Legendry Sri Lankan geologists</p>\r\n<p>Chapter 50&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Geological Society of Sri Lanka (GSSL)</p>\r\n<p>Chapter 51&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Institute of Geology, Sri Lanka (IGSL)<strong>&nbsp;</strong></p>', '2018-10-19 12:25:42', '2018-10-19 12:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `highlights`
--

CREATE TABLE `highlights` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iesocompastpapers`
--

CREATE TABLE `iesocompastpapers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iesocompastpapers`
--

INSERT INTO `iesocompastpapers` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(3, '2', '<p>test 3</p>', '2019-05-11 08:12:00', '2019-05-11 08:12:00'),
(4, '2', '<p>test 4</p>', '2019-05-11 08:12:09', '2019-05-11 08:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `iesocoms`
--

CREATE TABLE `iesocoms` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iesocomsyllabus`
--

CREATE TABLE `iesocomsyllabus` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iesocomsyllabus`
--

INSERT INTO `iesocomsyllabus` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(1, '2', '<p>test 1</p>', '2019-05-11 08:35:03', '2019-05-11 08:35:03'),
(3, '2', '<p>test 3</p>', '2019-05-11 08:35:23', '2019-05-11 08:35:23'),
(4, '2', '<p>test 4</p>', '2019-05-11 08:35:33', '2019-05-11 08:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` int(10) UNSIGNED NOT NULL,
  `volume_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `volume_id`, `user_id`, `title`, `abstract`, `created_at`, `updated_at`) VALUES
(41, '1', '2', 'Centimetre- and Metr e-scale Nd and Sr Isotopic Homogenization in Kadugannawa Complex, Sri Lanka.  L. R. K. Perera and H. Kagami', '<p><strong>ABSTRACT</strong></p>\r\n\r\n<p>A charnockitic gneiss and a charnockitic to amphibolite-facies gneiss transition zone in the Kadugannawa Complex show isochron relationships indicating centimetre- and metrescale isotopic homogenization in both Sm-Nd and Rb-Sr systems. Nine 2-cm thick slabs and five 7-cm cube samples of the charnockitic gneiss give a Sm-Nd whole-rock isochron age of 766&plusmn;190 Ma which is indistinguishable from Rb-Sr isochron age of 666&plusmn;72 Ma of the cube samples. The Rb-Sr whole-rock isochron age of the slabs of this first generation charnockitic gneiss is 483&plusmn;38 Ma, and is younger than a previously reported 535&plusmn;5 Ma Rb-Sr isochron age for an arrested second generation charnockite from the Wanni Complex. Ten wholerock 7-cm cube samples from the charnockitic gneiss to amphibolite-facies gneiss transition zone in the nearby quarry give a Sm-Nd isochron age of 722&plusmn;180 Ma which is indistinguishable from the Sm-Nd age of the cube samples and slabs of the charnockitic gneiss. The Rb-Sr data of six cube samples of amphibolite-facies gneiss combined with its nine 2- cm slabs give an age of 485&plusmn;72 Ma which is indistinguishable from the Rb-Sr isochron age of 471&plusmn;23 Ma and Sm-Nd age of 473&plusmn;600 Ma of the nine slabs, suggesting severe resetting of both isotopic systems. An amphibolite-facies gneiss retrogressive after charnockite dated from another quarry employing 8-cm cube samples gives a Rb-Sr errochron of 1053&plusmn;110 Ma which is similar to a previously reported zircon Pb-loss event at ~1100 Ma. Our data suggest that, (i) the Sm-Nd system of the cube samples of the charnockiticand amphibolite-facies gneisses of the first two quarries has been reset to the same degree as in the charnockitic gneiss slabs, (ii) Rb-Sr system has been extremely mobile at centimetre-scale irrespective of metamorphic grade, (iii) the probable presence of a hydrous fluid increased the mobility of Sr at metre-scale and Nd at centimetre-scale in the amphibolite-facies gneiss. Neither the small cube samples nor the slabs used in the first two quarries retain an isotopic memory of the tectono-thermal events suffered by these rocks. Instead, they probably reflect cessation of isotopic exchange at low temperatures. Our data do not favour regional high-grade metamorphism at ~550 Ma, suggested on the basis of zircon work, but hints that this may be older than 1100 Ma. However, only Sm-Nd and RbSr isotopic systematics of large whole-rock samples are likely to retain this record.</p>\r\n\r\n<p><a href=\"/storage/volume/journal_images/files/14-129-141.pdf\" onclick=\"window.open(this.href, \'\', \'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no\'); return false;\">continue readings..</a></p>', '2018-10-04 06:56:59', '2018-10-04 06:56:59'),
(42, '1', '2', 'Is global seismicity cyclic? Atula Senaratne and T.B.K.Basnayake', '<p><strong>ABSTRACT</strong></p>\r\n\r\n<p>Petrological investigation by electron probe micro analyser (EPMA) was carried out on pelitic, intermediate and mafic granulites from the central Highland Complex (HC) and the Kadugannawa Complex (KC) of Sri Lanka. Among the HC pelitic rocks, spinel-bearing garnet biotite sillimanite gneiss shows the highest temperature conditions. Equilibrium pairs of biotite and garnet cores record peak metamorphic temperatures of 810-830 o C. Spinelabsent sillimanite gneiss records peak temperatures of 810 o C. Peak metamorphic pressure is estimated to be 8 kbar, and that for spinel-absent rocks is 9 kbar. Mafic granulites of the HC yield temperatures of 890-900 0 C and a pressure of ~11 k bar. Intermediate rocks show a temperature of 760 0 C and a pressure of 9 kbar. In KC pelitic rocks, equilibrium pairs of garnet and biotite core compositions recorded a temperature of 750 0 C whereas mafic rocks yielded a temperature of 690 0 C from garnet cores and matrix biotite. Suitable equilibrium mineral assemblages for barometry were absent the KC rocks. The P-T trajectory of the Highland Complex pelitic granulites shows a clockwise P-T path. Presence of kyanite as rare inclusions in pre-peak garnet indicates an initial pressure increase before the peak metamorphism. The rocks subsequently experienced continuous temperature increase under slightly decreasing or constant pressure followed by cooling and gradual decompression after peak metamorphism. The P-T paths of mafic and intermediate granulites are consistent with magmatic intrusion or magmatic underplating occurring at depth and subsequent cooling took place during the uplift. Accordingly, the clock-wise P-T path for metasedimentary granulites and cooling path for meta-igneous granulites document possible deep crustal processes by which continental crust grows, similar to the phenomena in most granulite terrains of the world.</p>\r\n\r\n<p><a href=\"/storage/volume/journal_images/files/14-103-122.pdf\" onclick=\"window.open(this.href, \'\', \'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no\'); return false;\">continue readings..</a></p>', '2018-10-04 07:11:19', '2018-10-04 07:11:19'),
(43, '1', '2', 'Petrology of Metamorphic Rocks from the Highland and Kadugannawa Complexes, Sri Lanka.  Sanjeewa P.K. Malaviarachchi and Akira Takasu', '<p><strong>ABSTRACT </strong></p>\r\n\r\n<p>Petrological investigation by electron probe micro analyser (EPMA) was carried out on pelitic, intermediate and mafic granulites from the central Highland Complex (HC) and the Kadugannawa Complex (KC) of Sri Lanka. Among the HC pelitic rocks, spinel-bearing garnet biotite sillimanite gneiss shows the highest temperature conditions. Equilibrium pairs of biotite and garnet cores record peak metamorphic temperatures of 810-830 o C. Spinelabsent sillimanite gneiss records peak temperatures of 810 o C. Peak metamorphic pressure is estimated to be 8 kbar, and that for spinel-absent rocks is 9 kbar. Mafic granulites of the HC yield temperatures of 890-900 0 C and a pressure of ~11 k bar. Intermediate rocks show a temperature of 760 0 C and a pressure of 9 kbar. In KC pelitic rocks, equilibrium pairs of garnet and biotite core compositions recorded a temperature of 750 0 C whereas mafic rocks yielded a temperature of 690 0 C from garnet cores and matrix biotite. Suitable equilibrium mineral assemblages for barometry were absent the KC rocks. The P-T trajectory of the Highland Complex pelitic granulites shows a clockwise P-T path. Presence of kyanite as rare inclusions in pre-peak garnet indicates an initial pressure increase before the peak metamorphism. The rocks subsequently experienced continuous temperature increase under slightly decreasing or constant pressure followed by cooling and gradual decompression after peak metamorphism. The P-T paths of mafic and intermediate granulites are consistent with magmatic intrusion or magmatic underplating occurring at depth and subsequent cooling took place during the uplift. Accordingly, the clock-wise P-T path for metasedimentary granulites and cooling path for meta-igneous granulites document possible deep crustal processes by which continental crust grows, similar to the phenomena in most granulite terrains of the world.</p>\r\n\r\n<p><a href=\"/storage/volume/journal_images/files/14-103-122 (1).pdf\" onclick=\"window.open(this.href, \'\', \'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no\'); return false;\">continue reading..</a></p>', '2018-10-04 07:18:01', '2018-10-04 07:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `journalsubmits`
--

CREATE TABLE `journalsubmits` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `maintext` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `figures` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tables` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journalsubmits`
--

INSERT INTO `journalsubmits` (`id`, `user_id`, `abstract`, `maintext`, `figures`, `tables`, `created_at`, `updated_at`) VALUES
(1, '1', '<p>kkkkkk</p>', '<p>kkk</p>', '<p>kk</p>', '<p>k</p>', '2018-12-24 12:10:28', '2018-12-24 12:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `ljdmedals`
--

CREATE TABLE `ljdmedals` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ljdmedals`
--

INSERT INTO `ljdmedals` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(4, '2', 'GSSL Alumni Scholarship', '<p>The GSSL Alumni Scholarship will be awarded soon to a undergratuate student who is following the 300 Series Course in Geology. The student will be selected by the University of Peradeniya based on his/her performances at the 100-200 Series Level and on the economic background. The Society extents its gratitude to members, whose generous contribution helped to establishment of the &ldquo;GSSL Alumni Scholarship&rdquo; Fund.</p>\r\n\r\n<p><strong><strong><a href=\"/storage/ljdmedal_file/Current Contributors to the Alumni Scholarship.pdf\" onclick=\"window.open(this.href, \'\', \'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no\'); return false;\">List of Contributes</a></strong></strong></p>', '2018-10-11 04:10:39', '2018-10-11 04:10:39'),
(5, '2', 'Tissa Munasinghe Scholarship', '<p><img alt=\"\" src=\"/storage/ljdmedal_file/tm.jpg\" style=\"float:left; margin:10px; width:200px\" />The &ldquo;Dr. Tissa Munasinghe Scholarship&rdquo; of the GSSL awards annually to an undergraduate student who is following the 400 Series Course in Geology. The student will be selected by the University of Peradeniya based on his/her performances at the 100-300 Series Level and on the economic background. This scholarship is sponsored by Dr. Tissa Munasinghe, a well known Sri Lankan Geologist, now holding an appointment as a Professor at the Los Angeles Harbor College, Wilmington, USA. The Society extents its gratitude to Dr. Tissa Munasinghe and his family to establishment of a Scholarship Fund.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Year&nbsp;&nbsp;&nbsp;&nbsp; Recipient</strong></p>\r\n\r\n<p>2007 &nbsp; &nbsp; &nbsp; &nbsp;Miss Kumudu Wickramarachchi</p>\r\n\r\n<p>2008 &nbsp; &nbsp; &nbsp; &nbsp;Mr. R.M.S.C.B. Ratnayake</p>\r\n\r\n<p>2009 &nbsp; &nbsp; &nbsp; &nbsp;Miss J..P.D.R.K. Jayalath</p>\r\n\r\n<p>2010 &nbsp; &nbsp; &nbsp; &nbsp;Miss K.G.N. Saroja</p>\r\n\r\n<p>2011 &nbsp; &nbsp; &nbsp; &nbsp;Mr. D.M.L.P. Dasanayake</p>\r\n\r\n<p>2012 &nbsp; &nbsp; &nbsp; &nbsp;Miss G.G.A.P&nbsp; Weerasingha</p>\r\n\r\n<p>2013 &nbsp; &nbsp; &nbsp; &nbsp;Mr. H.S.Lasantha</p>', '2018-10-11 04:12:45', '2018-10-11 04:20:37'),
(6, '2', 'P.W.Vitanage Memorial Scholarship', '<p><img alt=\"\" src=\"/storage/ljdmedal_file/pwvitanage.jpg\" style=\"float:left; height:200px; margin:10px; width:200px\" />To honour Professor P.W.Vitanage, the founder of the Department of Geology, University of Peradeniya, for his contribution to Geosciences of Sri Lanka, every year the Geological Society of Sri Lanka awards the Prof. P.W. Vitanage memorial scholarship to an undergraduate student who are following the Special Degree Course in Geology. The student will be selected by the University of Peradeniya based on his/her performances at the 200 Series Level. The Society extents&nbsp; its gratitude to members and well wishes whose generous contribution helped to establishment of the Prof. P.W. Vitanage Memorial Fund.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Recipient</p>\r\n\r\n<p>2001&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Miss Wasanthi Ratnayake and Lalindra Ranaweera</p>\r\n\r\n<p>2002&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mr. Venusha Pallawala</p>\r\n\r\n<p>2003&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Miss Geethika Wijewardhane</p>\r\n\r\n<p>2004&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Miss Amali Wijayadewa</p>\r\n\r\n<p>2005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Miss Nadeesha Koralagedara</p>\r\n\r\n<p>2006&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Miss Hasanthi Widanagamage</p>\r\n\r\n<p>2007&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Miss Nayani Ilangakoon</p>\r\n\r\n<p>2008 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Miss Uthpala Wijenayake</p>\r\n\r\n<p>2009&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mr.PL Dharmapriya</p>\r\n\r\n<p>2010&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mr. TD Raveendrasinghe</p>\r\n\r\n<p>2011&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mr. R.M.M.C.B. Rathnayake</p>\r\n\r\n<p>2012 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mr.M.H. Kodikara Arachchi</p>\r\n\r\n<p>2013 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mr. H.M.M.P.S. Herath</p>', '2018-10-11 04:18:14', '2018-10-11 04:20:13'),
(7, '2', 'P.G. Cooray Medal and Cash Award', '<p><img alt=\"\" src=\"/storage/ljdmedal_file/pgcooray.jpg\" style=\"float:left; margin:10px; width:200px\" />To honour Prof. P.G. Cooray for his outstanding contribution&nbsp;to understanding of earth sciences, the Executiv<img alt=\"\" src=\"/storage/ljdmedal_file/pgcooraymedal.jpg\" style=\"float:right; margin:10px; width:200px\" />e Committee of the Geological Society of Sri Lanka awards the &ldquo;P.G. Cooray Medal&rdquo; every year, with effect from 1995, to the most out<br />\r\nstanding young earth scientist.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In addition, PG Cooray medal recipient is presented&nbsp;an annual cash award of Rs 50,000 &lsquo;In memory of Gerald and Joan Cooray&rsquo;, by their daughter and grandson, Shantini Ann and Jamie.</p>\r\n\r\n<hr />\r\n<p>&nbsp;<strong>Call for&nbsp;Applications 2017</strong></p>\r\n\r\n<p>Applications are invited from Sri Lankan geoscientists under the age of 35 years at the time of application, for the award of the P.G. Cooray Medal &ndash; 2017. The medal will be awarded to the most outstanding contributor in the field of Earth Sciences of Sri Lanka during the period from 1st January, 2016 to 31st December, 2016. Prospective applicants are requested to submit copies of their theses, dissertations, publications, patents etc. to the Secretary/GSSL.</p>\r\n\r\n<p>The criteria for the award of the &ldquo;P.G. Cooray Medal&rdquo; are as follows:</p>\r\n\r\n<ol>\r\n	<li>The applicant should be a citizen of Sri Lanka under 35 years of age at the time of application.</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>Field : &ndash; Earth Sciences, (with the minimum of BSc or above)</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>The Award will be given to the most outstanding contributor to Earth Sciences in Sri Lanka for the given year, judged on the basis of a thesis/ dissertation / publication, e.g., Outstanding BSc Thesis, MSc Thesis, MPhil Thesis, PhD Thesis, publication in a recognised journal(s) or a patent. If there is no suitable person in a particular year, the award will not be made that year.</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>The outstanding thesis or publication could be based on work done in a foreign country or in Sri Lanka.</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>The Medal will be awarded each year at the Annual General meeting of the GSSL.</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>Applications for the award will be invited in September of each year and an announcement to this effect will be published in the newspapers.</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>The Medal will not be given to the same person twice.</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>If funds are available, a certain amount of money will accompany the award. This will be decided by the Executive Committee of the GSSL each year.</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>The selection of the successful applicant will be decided by a Sub-committee appointed by the Executive committee of the GSSL each year. The decision of the sub-committee will be final.</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>The art work of the medal will not be changed.</li>\r\n</ol>\r\n\r\n<p><a href=\"/storage/ljdmedal_file/Call-for-Nominations-pgcooray-template.docx\" target=\"_blank\">Download&nbsp;details</a></p>\r\n\r\n<hr />\r\n<p><strong>Recipients of the P.G. Cooray Medal</strong></p>\r\n\r\n<p>1995 G. W. A. Rohan Fernando</p>\r\n\r\n<p>1996 A. L. T. Hewawasam</p>\r\n\r\n<p>1997 A.G.S. R. Perera</p>\r\n\r\n<p>1998 Deepani P.R. Weerakoon</p>\r\n\r\n<p>1999 (<em>Not awarded)</em></p>\r\n\r\n<p>2000 H.M.T.G.A. Pitawala</p>\r\n\r\n<p>2001 P.N. Ranasinghe</p>\r\n\r\n<p>2002 N.W.B. Balasuriya</p>\r\n\r\n<p>2003 S.U.P. Jinadasa</p>\r\n\r\n<p>2004&nbsp;<em>(not awarded)</em></p>\r\n\r\n<p>2005 Meththika Vithanage</p>\r\n\r\n<p>2006&nbsp;<em>(Not awarded)</em></p>\r\n\r\n<p>2007 Lalindra V. Ranaweera</p>\r\n\r\n<p>2008&nbsp;<em>(Not awarded)</em></p>\r\n\r\n<p>2009 Mayomi Kulasena</p>\r\n\r\n<p>2010&nbsp;<em>(Not awarded)</em></p>\r\n\r\n<p>2011&nbsp;<em>(Not awarded)</em></p>\r\n\r\n<p>2012&nbsp;<em>(Not awarded)</em></p>\r\n\r\n<p>2013 Dr. P.G. Mantilaka</p>\r\n\r\n<p>2014 Dr.&nbsp;Nadeesha Madugalla</p>\r\n\r\n<p>2015 Dr. Amila Sandaruwan Ratnayake</p>\r\n\r\n<p>2016 Dr. P.L. Dharmapriya</p>', '2018-10-11 04:24:58', '2018-10-11 04:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `ljdmedalwinners`
--

CREATE TABLE `ljdmedalwinners` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ljdmedalwinners`
--

INSERT INTO `ljdmedalwinners` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(2, '2', '<p>test2</p>', '2019-05-10 22:42:08', '2019-05-10 22:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `member_reqs`
--

CREATE TABLE `member_reqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `surname_options` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `othername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `office_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_tp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `home_tp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `home_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `preferred_address` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `profile_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_membership` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `addmission_transfer_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addmission_transfer_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_before` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ceceipt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `econ` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `env` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `geophy` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `stru` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `eng` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ocen` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sedi` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `hydro` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `marine` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `geochem` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `gemo` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remote` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mine` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `quat` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `other` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_degree_held` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_degree_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_degree_uni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_degree_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec_degree_held` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec_degree_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec_degree_uni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec_degree_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_degree_held` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_degree_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_degree_uni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_degree_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major_subjects` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjects_level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposer_mem_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seconder_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seconder_mem_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `membershipno` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifications` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_reqs`
--

INSERT INTO `member_reqs` (`id`, `surname_options`, `surname`, `othername`, `birthday`, `nic`, `designation`, `institution`, `office_address`, `office_tp`, `office_email`, `home_address`, `home_tp`, `home_email`, `preferred_address`, `profile_photo`, `requested_membership`, `addmission_transfer_from`, `addmission_transfer_to`, `member_before`, `ceceipt`, `econ`, `env`, `geophy`, `stru`, `eng`, `ocen`, `sedi`, `hydro`, `marine`, `geochem`, `gemo`, `remote`, `mine`, `quat`, `other`, `first_degree_held`, `first_degree_year`, `first_degree_uni`, `first_degree_country`, `sec_degree_held`, `sec_degree_year`, `sec_degree_uni`, `sec_degree_country`, `other_degree_held`, `other_degree_year`, `other_degree_uni`, `other_degree_country`, `major_subjects`, `subjects_level`, `proposer_name`, `proposer_mem_no`, `seconder_name`, `seconder_mem_no`, `created_at`, `updated_at`, `status`, `membershipno`, `password`, `notifications`) VALUES
(23, '', 'Prof. Yoshida', '-', '2018-09-21', '-', 'Professor', '-', 'Department of Earth Science, Faculty of Science, Osaka University, Osaka 558, Japan', '-', 'yoshidagondwana@yahoo.com', '-', '-', 'yoshidagondwana@yahoo.com', 'Office', 'noimage.jpg', 'im', '', '', 'Yes', 'noimage.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-09-20 14:41:05', '2018-10-28 14:17:20', 'confirm', 'LM102', '', 1),
(27, '', 'Mr.saman silva', '-', '1993-03-23', '9089956231v', '-', '-', 'kalutara', '0715443701', 'kavi1993323@gmail.com', '-', '-', 'abc@gamail.com', 'Office', 'bank_1545883064.jpg', 'flm', '-', '-', 'Yes', 'bank_1545883064.jpg', '0', '0', '0', '0', '0', 'yes', '0', '0', '0', '0', '0', '0', 'yes', '0', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2018-12-26 22:27:44', '2018-12-26 22:34:29', 'confirm', 'AM120', '$2y$10$hlXngdgIcZp621pJI6hN4eIlwccpfjxVrEmsk1ahjavMYacJwxqaW', 0),
(31, 'Prof', 'ABC', '', '2019-03-08', '930830038v', '', '', 'kalutara', '0715443701', 'abcde@gmail.com', '', '', '', 'Office', 'download_1552031524.png', 'lm', '', '', 'Yes', 'download_1552031524.png', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-03-08 02:22:04', '2019-03-08 02:22:04', '0', NULL, '$2y$10$CxFRc93AnUer3I8egr11..CdDhdDm5OE.ohZh1YeoSB4fjkBn8jI6', 1),
(34, 'Mr', 'KavindaHH', '', '2019-08-16', '930830038', '', '', '-', '0715443701', 'kavinda@silverstripers.com', '', '', '', 'Office', '56380189_2221822497898216_8128427196265005056_n_1566363823.jpg', 'sm', '', '', 'Yes', '56380189_2221822497898216_8128427196265005056_n_1566363823.jpg', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-08-20 23:33:43', '2019-08-21 01:47:47', 'confirm', 'LM300', '$2y$10$sF.SIL62bjLxuA3HXRm4eeQPC9OhQAfmRurUYematLNTFu9bCX7Yq', 0);

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
(3, '2018_09_07_185420_create_member_reqs_table', 1),
(4, '2018_09_08_201741_create_admins_table', 2),
(5, '2018_09_08_202300_create_admins_table', 3),
(6, '2018_09_12_092823_add_article_table', 4),
(7, '2018_09_12_095306_create_articles_table', 5),
(8, '2018_09_13_134019_add_article_image_to_article', 6),
(9, '2018_09_21_172741_create_workshops_table', 7),
(10, '2018_09_22_181446_create_publictalks_table', 8),
(11, '2018_09_23_162634_create_technicalsessions_table', 9),
(12, '2018_09_23_194551_create_fieldexcrusions_table', 10),
(13, '2018_09_24_152552_create_annualtrips_table', 11),
(14, '2018_10_01_073630_create_journals_table', 12),
(15, '2018_10_01_115211_create_volumes_table', 13),
(16, '2018_10_10_135904_create_undergraduateresearchawards_table', 14),
(17, '2018_10_11_085827_create_ljdmedals_table', 15),
(18, '2018_10_17_181627_create_anandamedals_table', 16),
(19, '2018_10_18_114314_create_pgmedals_table', 17),
(20, '2018_10_18_122249_create_tissas_table', 18),
(21, '2018_10_18_125726_create_vitanages_table', 19),
(22, '2018_10_18_132923_create_news_table', 20),
(23, '2018_10_19_143532_create_abvolumes_table', 21),
(24, '2018_10_19_150456_create_newsletters_table', 22),
(25, '2018_10_19_155312_create_specialpublications_table', 23),
(26, '2018_10_19_173814_create_gsslbooks_table', 24),
(27, '2018_10_24_091907_create_slesocoms_table', 25),
(28, '2018_10_24_100047_create_iesocoms_table', 26),
(29, '2018_11_11_132305_create_events_table', 27),
(30, '2018_12_24_060636_create_focuses_table', 28),
(31, '2018_12_24_155949_create_journalsubmits_table', 29),
(32, '2018_12_24_161151_create_journalsubmits_table', 30),
(33, '2019_03_31_051054_abstractvolumemore', 31),
(34, '2019_05_02_150121_newslettersmore', 32),
(35, '2019_05_02_162657_technicalsessionmore', 33),
(36, '2019_05_06_141206_workshopmore', 34),
(37, '2019_05_06_151438_fieldexcursion', 35),
(38, '2019_05_06_151949_fieldexcursionmore', 36),
(39, '2019_05_06_155329_annualtripmore', 37),
(40, '2019_05_06_163253_annualsession', 38),
(41, '2019_05_07_144239_pastexcom', 39),
(42, '2019_05_07_152439_pastpresident', 40),
(43, '2019_05_07_155815_presentexcom', 41),
(44, '2019_05_09_155842_slesomembers', 42),
(45, '2019_05_09_163057_slesopastmembers', 43),
(46, '2019_05_11_024534_anandamedalwinners', 44),
(47, '2019_05_11_032543_ljdmedalwinners', 45),
(48, '2019_05_11_052326_pgwinners', 46),
(49, '2019_05_11_055741_pwvitanagewinners', 47),
(50, '2019_05_11_060118_pwvitanagewinners', 48),
(51, '2019_05_11_070003_tissamunasinghewinners', 49),
(52, '2019_05_11_082040_undergraduateresearchawardwinners', 50),
(53, '2019_05_11_104444_slesocompastpapers', 51),
(54, '2019_05_11_114042_slesocomsyllabuses', 52),
(55, '2019_05_11_120439_slesocomsyllabus', 53),
(56, '2019_05_11_132914_iesocompastpapers', 54),
(57, '2019_05_11_135354_iesocomsyllabus', 55),
(58, '2019_09_09_044203_create_highlights_table', 56),
(59, '2019_09_09_091737_create_editorialboards_table', 57);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(5, '2', 'Assistant General Manager at NWS&DB–New Appointment ', '<h3><br /><strong><img class=\"wp-image-187 alignleft\" style=\"float: left;\" src=\"http://www.gsslweb.org/wp-content/uploads/2014/12/mc2.jpg\" alt=\"mc2\" width=\"125\" height=\"156\" /></strong></h3>\r\n<p style=\"padding-left: 150px;\">Mr. Mahinda Premathilaka was appointed as an Assistant General Manager of&nbsp;the Ground Water Section of the Water Supplies and Drainage Board. &nbsp;This is&nbsp;the highest position that a geologist achieved in National Water Supplies and Drainage board.</p>\r\n<p style=\"padding-left: 150px;\"><img src=\"/photos/2/Congratulations4.png\" alt=\"\" width=\"214\" height=\"53\" /></p>\r\n<p style=\"padding-left: 150px;\">&nbsp;</p>\r\n<p style=\"padding-left: 150px;\">&nbsp;</p>\r\n<p style=\"padding-left: 150px;\">&nbsp;</p>', '2018-10-24 14:07:28', '2019-09-09 01:13:03'),
(9, '2', 'AC Medal Winner 2014', '<p>&nbsp;</p>\r\n<p style=\"text-align: justify;\"><img style=\"float: left; margin: 10px;\" src=\"/photos/2/3.jpg\" sizes=\"(max-width: 175px) 100vw, 175px\" srcset=\"http://www.gsslweb.org/wp-content/uploads/2014/12/3-150x150.jpg 150w, http://www.gsslweb.org/wp-content/uploads/2014/12/3-45x45.jpg 45w, http://www.gsslweb.org/wp-content/uploads/2014/12/3.jpg 175w\" alt=\"3\" width=\"186\" height=\"186\" />Mr. L.R.K. Perera, a life member and a former president of the GSSL and Senior Lecturer at Department of Geology of University&nbsp; &nbsp;of Peradeniya, was awarded the prestigious Ananda Coomarswamy Medal for the year 2014 for his outstanding contribution&nbsp; &nbsp;towards Sri Lankan Geology. The award ceremony and the memorial oration was held on &nbsp;22<sup>nd</sup> August 2015 at the PW&nbsp; &nbsp;Vithanage&nbsp; &nbsp;Lecture theater of the &nbsp;University of Peradeniya &nbsp;<strong>and the recipient delivered his oration&nbsp;&nbsp;on &lsquo;Isochron&nbsp; &nbsp;translation, mantle mapping and Sri Lankan model ages&rsquo;.</strong></p>\r\n<p style=\"padding-left: 40px; text-align: justify;\">&nbsp;Ananda Coomaraswamy was intensely engaged in research on the Geology of Sri Lanka from 1903 to 1906 and he was&nbsp; &nbsp;appointed as the first Director of the Mineral ogical Survey of Ceylon.</p>\r\n<p>&nbsp;</p>', '2018-10-24 14:43:09', '2019-09-09 02:22:24'),
(11, '2', '123455', '', '2019-08-20 05:16:36', '2019-08-20 05:16:36'),
(12, '2', '123455', '', '2019-08-20 05:16:44', '2019-08-20 05:16:44'),
(13, '2', '123455', '', '2019-08-20 05:16:49', '2019-08-20 05:16:49'),
(14, '2', '123455', '', '2019-08-20 05:16:53', '2019-08-20 05:16:53'),
(15, '2', '123455', '', '2019-08-20 05:17:19', '2019-08-20 05:17:19'),
(16, '2', '123455', '', '2019-08-20 05:17:23', '2019-08-20 05:17:23'),
(17, '2', '123455', '', '2019-08-20 05:17:28', '2019-08-20 05:17:28'),
(18, '2', '123455', '', '2019-08-20 05:17:32', '2019-08-20 05:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `user_id`, `title`, `created_at`, `updated_at`) VALUES
(3, '2', 'testing', '2019-05-02 09:59:10', '2019-05-02 09:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `newslettersmores`
--

CREATE TABLE `newslettersmores` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_letters_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newslettersmores`
--

INSERT INTO `newslettersmores` (`id`, `news_letters_id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, '3', '2', 'testing', '<p>test</p>', '2019-05-02 10:22:53', '2019-05-02 10:22:53'),
(3, '4', '2', 'Abstract-2016', '<p>lkijdo</p>', '2019-05-02 10:32:29', '2019-05-02 10:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dskharshana@gmail.com', '$2y$10$Y0yCzq4.iSvSYa/xlxPLeOW1NswptWeWzGipsL2jVIIhXyqeVeBGO', '2019-03-05 13:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `pastexcoms`
--

CREATE TABLE `pastexcoms` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pastexcoms`
--

INSERT INTO `pastexcoms` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(2, '2', 'testing', '2019-05-07 10:06:12', '2019-05-07 10:06:12'),
(3, '2', 'jkhjk uih', '2019-05-07 10:09:25', '2019-05-07 10:09:25'),
(4, '2', 'kj mhj kj', '2019-05-07 10:10:34', '2019-05-07 10:10:34'),
(5, '2', 'jk jk', '2019-05-07 10:12:51', '2019-05-07 10:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `pastpresidents`
--

CREATE TABLE `pastpresidents` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pastpresidents`
--

INSERT INTO `pastpresidents` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(2, '2', 'sasi', '2019-05-07 10:18:16', '2019-05-07 10:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `pgmedals`
--

CREATE TABLE `pgmedals` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pgmedals`
--

INSERT INTO `pgmedals` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, '2', 'fefef', '<p>feefe</p>', '2018-10-18 07:13:55', '2018-10-18 07:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `pgwinners`
--

CREATE TABLE `pgwinners` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pgwinners`
--

INSERT INTO `pgwinners` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(1, '2', '<p style=\"text-align: left;\">test1 2 3 4</p>', '2019-05-11 00:07:58', '2019-05-11 00:16:20'),
(3, '2', '<p>test 3</p>', '2019-05-11 00:08:21', '2019-05-11 00:08:21'),
(4, '2', '<p>test 4</p>', '2019-05-11 00:08:30', '2019-05-11 00:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `presentexcoms`
--

CREATE TABLE `presentexcoms` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presentexcoms`
--

INSERT INTO `presentexcoms` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(1, '2', 'cl 1', '2019-05-07 10:38:33', '2019-05-07 10:38:57'),
(3, '2', '1', '2019-05-07 10:41:19', '2019-05-07 10:41:19'),
(4, '2', '2', '2019-05-07 10:41:29', '2019-05-07 10:41:29'),
(5, '2', '3', '2019-05-07 10:41:37', '2019-05-07 10:41:37'),
(6, '2', '4', '2019-05-07 10:41:46', '2019-05-07 10:41:46'),
(7, '2', '5', '2019-05-07 10:41:53', '2019-05-07 10:41:53'),
(8, '2', '6', '2019-05-07 10:42:02', '2019-05-07 10:42:02'),
(9, '2', '7', '2019-05-07 10:42:10', '2019-05-07 10:42:10'),
(10, '2', '8', '2019-05-07 10:42:18', '2019-05-07 10:42:18'),
(11, '2', '9', '2019-05-07 10:42:25', '2019-05-07 10:42:25'),
(12, '2', '10', '2019-05-07 10:42:34', '2019-05-07 10:42:34'),
(13, '2', '11', '2019-05-07 10:42:43', '2019-05-07 10:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `publictalks`
--

CREATE TABLE `publictalks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publictalk_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publictalks`
--

INSERT INTO `publictalks` (`id`, `user_id`, `title`, `body`, `publictalk_image`, `created_at`, `updated_at`) VALUES
(5, '2', 'Public talk on “Governance, Role and Responsibilities of a Professional Institute” was held on 26th April 2013 at OUSL delivered by  Prof. Ananda Jayawardane  (Vice Chancellor of University of Moratuwa)', '', NULL, '2018-09-22 14:14:01', '2019-08-20 05:53:50'),
(8, '2', '123455', '', NULL, '2019-08-20 05:48:20', '2019-08-20 05:48:20'),
(9, '2', '123455', '', NULL, '2019-08-20 05:48:32', '2019-08-20 05:48:32'),
(10, '2', '123455', '', NULL, '2019-08-20 05:48:36', '2019-08-20 05:48:36'),
(11, '2', '123455', '', NULL, '2019-08-20 05:48:40', '2019-08-20 05:48:40'),
(12, '2', '123455', '', NULL, '2019-08-20 05:48:44', '2019-08-20 05:48:44'),
(13, '2', '123455', '', NULL, '2019-08-20 05:48:47', '2019-08-20 05:48:47'),
(14, '2', '123455', '', NULL, '2019-08-20 05:48:51', '2019-08-20 05:48:51'),
(15, '2', '123455', '', NULL, '2019-08-20 05:48:55', '2019-08-20 05:48:55'),
(16, '2', '123455', '', NULL, '2019-08-20 05:48:58', '2019-08-20 05:48:58'),
(17, '2', 'Testing 2', '', NULL, '2019-08-20 05:49:02', '2019-08-20 05:49:02'),
(18, '2', '123455', '', NULL, '2019-08-20 05:49:06', '2019-08-20 05:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `pwvitanagewinners`
--

CREATE TABLE `pwvitanagewinners` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pwvitanagewinners`
--

INSERT INTO `pwvitanagewinners` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(1, '2', '<p>Test 1 2 3</p>', '2019-05-11 01:09:29', '2019-05-11 01:13:22'),
(3, '2', '<p>test3</p>', '2019-05-11 01:10:48', '2019-05-11 01:10:48'),
(4, '2', '<p>test 4</p>', '2019-05-11 01:11:00', '2019-05-11 01:11:00'),
(5, '2', '<p>test 4</p>', '2019-05-11 01:11:02', '2019-05-11 01:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `slesocompastpapers`
--

CREATE TABLE `slesocompastpapers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slesocompastpapers`
--

INSERT INTO `slesocompastpapers` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(2, '2', '<p>test 2</p>', '2019-05-11 05:37:28', '2019-05-11 05:37:28'),
(3, '2', '<p>test 3</p>', '2019-05-11 05:37:39', '2019-05-11 05:37:39'),
(4, '2', '<p>test 4</p>', '2019-05-11 05:37:49', '2019-05-11 05:37:49'),
(5, '2', '<p><video controls=\"controls\" width=\"300\" height=\"150\">\r\n<source src=\"/files/2/silverstripe.pdf\" /></video></p>', '2019-08-20 22:29:21', '2019-08-20 22:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `slesocoms`
--

CREATE TABLE `slesocoms` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slesocomsyllabus`
--

CREATE TABLE `slesocomsyllabus` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slesocomsyllabus`
--

INSERT INTO `slesocomsyllabus` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(2, '2', '<p>test 2</p>', '2019-05-11 07:10:29', '2019-05-11 07:10:29'),
(3, '2', '<p>test 3</p>', '2019-05-11 07:10:41', '2019-05-11 07:10:41'),
(4, '2', '<p>test 4</p>', '2019-05-11 07:10:52', '2019-05-11 07:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `slesocomsyllabuses`
--

CREATE TABLE `slesocomsyllabuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slesomembers`
--

CREATE TABLE `slesomembers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slesomembers`
--

INSERT INTO `slesomembers` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(2, '2', 'xsjl ckjsd', '2019-05-09 10:43:19', '2019-05-09 10:43:19'),
(3, '2', 'new', '2019-05-09 10:43:46', '2019-05-09 10:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `slesopastmembers`
--

CREATE TABLE `slesopastmembers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slesopastmembers`
--

INSERT INTO `slesopastmembers` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(2, '2', 'test2', '2019-05-09 11:09:26', '2019-05-09 11:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `specialpublications`
--

CREATE TABLE `specialpublications` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialpublications`
--

INSERT INTO `specialpublications` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, '2', 'cdcds', '<p><em><strong>cdscds</strong></em></p>', '2018-10-19 10:42:06', '2018-10-19 10:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `technicalsessionmores`
--

CREATE TABLE `technicalsessionmores` (
  `id` int(10) UNSIGNED NOT NULL,
  `technical_session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technicalsessionmores`
--

INSERT INTO `technicalsessionmores` (`id`, `technical_session_id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, '5', '2', 'testing 2', '<p>scsc</p>', '2019-05-02 12:36:18', '2019-05-02 12:36:18'),
(3, '6', '2', 'testing 2', '<p>ldsjfi</p>', '2019-05-02 12:40:44', '2019-05-02 12:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `technicalsessions`
--

CREATE TABLE `technicalsessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technicalsessions`
--

INSERT INTO `technicalsessions` (`id`, `user_id`, `title`, `created_at`, `updated_at`) VALUES
(6, '2', '123455', '2019-08-20 05:54:14', '2019-08-20 05:54:14'),
(7, '2', '123455', '2019-08-20 05:54:17', '2019-08-20 05:54:17'),
(8, '2', '123455', '2019-08-20 05:54:20', '2019-08-20 05:54:20'),
(9, '2', '123455', '2019-08-20 05:54:22', '2019-08-20 05:54:22'),
(10, '2', '123455', '2019-08-20 05:54:25', '2019-08-20 05:54:25'),
(11, '2', '123455', '2019-08-20 05:54:27', '2019-08-20 05:54:27'),
(12, '2', '123455', '2019-08-20 05:54:29', '2019-08-20 05:54:29'),
(13, '2', '123455', '2019-08-20 05:54:32', '2019-08-20 05:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `tissamunasinghewinners`
--

CREATE TABLE `tissamunasinghewinners` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tissamunasinghewinners`
--

INSERT INTO `tissamunasinghewinners` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(1, '2', '<p>test 1 2</p>', '2019-05-11 02:30:32', '2019-05-11 02:31:39'),
(3, '2', '<p>test 3</p>', '2019-05-11 02:31:06', '2019-05-11 02:31:06'),
(4, '2', '<p>test 4</p>', '2019-05-11 02:31:16', '2019-05-11 02:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `tissas`
--

CREATE TABLE `tissas` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `undergraduateresearchawards`
--

CREATE TABLE `undergraduateresearchawards` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `undergraduateresearchawards`
--

INSERT INTO `undergraduateresearchawards` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(8, '2', 'GSSL Undergraduate Research Award', '<p>GSSL has established an annual cash award called &ldquo;GSSL Undergraduate Research Award&rdquo; to be awarded for the &ldquo;Best Undergraduate Research&rdquo; in Earth Science. We are glad to inform you that the research award will be awarded from this year. Please follow the following guidelines to apply for the scholarship.</p>\r\n\r\n<p><strong>Award</strong></p>\r\n\r\n<p>The award is presented to a graduate who has completed the first degree at a State university of Sri Lanka, in recognition of his/her outstanding research in the field of Earth Science.</p>\r\n\r\n<p><strong>Eligibility</strong></p>\r\n\r\n<p>Graduates who completed their degrees at a state university of Sri Lanka, within one year of the date of announcement (1st May 2018 for this year) of the award are eligible. Applicants should have done their final year research project in Earth Science related research area. At least one of the supervisors of the applicant should be a life or ordinary member of the GSSL at the time of application. There research work should have been presented to a university in the form of a thesis at the time of application.</p>\r\n\r\n<p><strong>Criteria</strong></p>\r\n\r\n<p>Undergraduate research from any sub discipline of Earth Sciences (e.g. geophysics, geology) may be considered for the award. Research problem, methodology, outcome and impact of the research for the Earth Science are strictly considered when a person is selected for the award. Only one cash prize is awarded per year. If a suitable candidate could not be selected for a particular year, the cash award will not be awarded. The material which received the award cannot be submitted for any other award presented by the GSSL and vice versa (eg. P.G. Cooray medal).</p>\r\n\r\n<p><strong>Selection Process</strong></p>\r\n\r\n<p>Applications from potential candidates should be sent by 15th January 2019. Applications will be evaluated during the first two weeks of February 2019.</p>\r\n\r\n<p>Applications should be made by the applicant in the prescribed form along with a CV and submit through the supervisor, with his/her recommendation. The recipient is selected by an evaluation committee comprising of three members appointed by the Executive Committee of the GSSL based on the guidelines and evaluation system. Applicants who are summoned for an evaluation shall produce his or her thesis at the evaluation. The supervisor/s of an applicant cannot be a member of the selection committee. The decision of the EC will be final.</p>\r\n\r\n<p><strong>Award</strong></p>\r\n\r\n<p>The recipient receives a cash prize and a certificate.</p>\r\n\r\n<p><strong>Presentation</strong></p>\r\n\r\n<p>The cash prize and the certificate are awarded to the recipient by the President of the GSSL at the Inauguration Ceremony of the Annual Technical Sessions/Annual General Meeting of the GSSL.</p>\r\n\r\n<p>Download Application</p>\r\n\r\n<p><a href=\"/storage/undergraduateresearchaward_file/Application-GSSL-Undergraduate-Research-Award.pdf\" onclick=\"window.open(this.href, \'\', \'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no\'); return false;\">Application &ndash; GSSL Undergraduate Research Award</a></p>', '2018-10-10 22:43:23', '2018-10-10 22:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `undergraduateresearchawardwinners`
--

CREATE TABLE `undergraduateresearchawardwinners` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `undergraduateresearchawardwinners`
--

INSERT INTO `undergraduateresearchawardwinners` (`id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(2, '2', '<p>test 2</p>', '2019-05-11 03:13:09', '2019-05-11 03:13:09'),
(3, '2', '<p>test 3</p>', '2019-05-11 03:13:19', '2019-05-11 03:13:19'),
(4, '2', '<p>test 4</p>', '2019-05-11 03:13:28', '2019-05-11 03:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_tp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_membership` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) DEFAULT '0',
  `membershipno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `office_tp`, `office_address`, `requested_membership`, `profile_photo`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`, `membershipno`, `nic`) VALUES
(2, 'admin', 'admin@gmail.com', '0', '', '', '', NULL, '$2y$10$P9M02ORhpZhihiokwm5RlO1iokXqpjK7t.EIIYH3upNn.v/vJ/EEW', 'ZNnDaU6V7geuwYMtCPpc3dwvixWk7izLnhuglL6H6kXArJkhnMruUVDTbosl', '2018-09-09 06:59:22', '2018-09-09 06:59:22', 1, '', '9308300038v'),
(25, 'Mr. Kavinda Harshana', 'kavi1993323@gmail.com', 'xax', 'ax', '', 'IMG-20180820-WA0001_1540759095.jpg', NULL, '$2y$10$w4VJ0KkqjwKktx2x1Hwc9e9b/ufMnQmj8lerhapzAAPJpdGFSSJri', NULL, '2019-03-05 12:31:28', '2019-03-05 12:31:28', 0, 'LM101', ''),
(37, 'KavindaHH', 'kavinda@silverstripers.com', '071544370111', '-', 'sm', 'download_1566373041.jpg', NULL, '$2y$10$sF.SIL62bjLxuA3HXRm4eeQPC9OhQAfmRurUYematLNTFu9bCX7Yq', 'ark7mahKY1k7WwwjnoyGSNT2D7FeN4RJF2DlTqJHl70HSpgcpxJyKdEr3LTy', '2019-08-21 01:47:47', '2019-08-21 02:07:21', 0, 'LM300', '');

-- --------------------------------------------------------

--
-- Table structure for table `vitanages`
--

CREATE TABLE `vitanages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volumes`
--

CREATE TABLE `volumes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `volume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volumes`
--

INSERT INTO `volumes` (`id`, `user_id`, `volume`, `created_at`, `updated_at`) VALUES
(1, 2, 'Volume 14   Vidyajothi Prof C.B.Dissanayake Volume', '2018-10-04 05:05:00', '2018-10-04 05:05:00'),
(3, 2, '1111111', '2019-08-20 21:44:36', '2019-08-20 21:44:36'),
(4, 2, '1111111', '2019-08-20 21:44:52', '2019-08-20 21:44:52'),
(5, 2, '1111111', '2019-08-20 21:44:57', '2019-08-20 21:44:57'),
(6, 2, '1111111', '2019-08-20 21:44:59', '2019-08-20 21:44:59'),
(7, 2, '1111111', '2019-08-20 21:45:03', '2019-08-20 21:45:03'),
(8, 2, '1111111', '2019-08-20 21:45:05', '2019-08-20 21:45:05'),
(9, 2, '1111111', '2019-08-20 21:45:07', '2019-08-20 21:45:07'),
(10, 2, '1111111', '2019-08-20 21:45:10', '2019-08-20 21:45:10'),
(11, 2, '1111111', '2019-08-20 21:45:12', '2019-08-20 21:45:12'),
(12, 2, '1111111', '2019-08-20 21:45:15', '2019-08-20 21:45:15'),
(13, 2, '1111111', '2019-08-20 21:45:21', '2019-08-20 21:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `workshopmores`
--

CREATE TABLE `workshopmores` (
  `id` int(10) UNSIGNED NOT NULL,
  `workshop_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshopmores`
--

INSERT INTO `workshopmores` (`id`, `workshop_id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, '6', '2', 'testing 2 1', '<p>eee ee e</p>', '2019-05-06 09:11:59', '2019-05-06 09:17:52'),
(3, '7', '2', 'testing', 'h', '2019-05-06 09:18:49', '2019-05-06 09:18:49'),
(4, '7', '2', 'testing 2', 'jk', '2019-05-06 09:19:04', '2019-05-06 09:19:04'),
(5, '19', '2', '123455', '', '2019-08-20 05:45:50', '2019-08-20 05:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `user_id`, `title`, `created_at`, `updated_at`) VALUES
(6, '2', 'testing 1', '2019-05-06 09:02:01', '2019-05-06 09:08:26'),
(7, '2', 'testing 2', '2019-05-06 09:18:32', '2019-05-06 09:18:32'),
(8, '2', '123455', '2019-08-20 05:42:37', '2019-08-20 05:42:37'),
(9, '2', '123455', '2019-08-20 05:42:43', '2019-08-20 05:42:43'),
(10, '2', '123455', '2019-08-20 05:42:48', '2019-08-20 05:42:48'),
(11, '2', '123455', '2019-08-20 05:42:51', '2019-08-20 05:42:51'),
(12, '2', '123455', '2019-08-20 05:42:54', '2019-08-20 05:42:54'),
(13, '2', '123455', '2019-08-20 05:42:56', '2019-08-20 05:42:56'),
(14, '2', '123455', '2019-08-20 05:42:57', '2019-08-20 05:42:57'),
(15, '2', '123455', '2019-08-20 05:42:59', '2019-08-20 05:42:59'),
(16, '2', '123455', '2019-08-20 05:43:01', '2019-08-20 05:43:01'),
(17, '2', '123455', '2019-08-20 05:43:16', '2019-08-20 05:43:16'),
(18, '2', '123455', '2019-08-20 05:43:29', '2019-08-20 05:43:29'),
(19, '2', '123455', '2019-08-20 05:43:50', '2019-08-20 05:43:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abstactvolumemores`
--
ALTER TABLE `abstactvolumemores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abvolumes`
--
ALTER TABLE `abvolumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anandamedals`
--
ALTER TABLE `anandamedals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anandamedalwinners`
--
ALTER TABLE `anandamedalwinners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annualsessions`
--
ALTER TABLE `annualsessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annualtripmores`
--
ALTER TABLE `annualtripmores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annualtrips`
--
ALTER TABLE `annualtrips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calenders`
--
ALTER TABLE `calenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editorialboards`
--
ALTER TABLE `editorialboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fieldexcrusions`
--
ALTER TABLE `fieldexcrusions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fieldexcursionmores`
--
ALTER TABLE `fieldexcursionmores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `focuses`
--
ALTER TABLE `focuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsslbooks`
--
ALTER TABLE `gsslbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `highlights`
--
ALTER TABLE `highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iesocompastpapers`
--
ALTER TABLE `iesocompastpapers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iesocoms`
--
ALTER TABLE `iesocoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iesocomsyllabus`
--
ALTER TABLE `iesocomsyllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journalsubmits`
--
ALTER TABLE `journalsubmits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ljdmedals`
--
ALTER TABLE `ljdmedals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ljdmedalwinners`
--
ALTER TABLE `ljdmedalwinners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_reqs`
--
ALTER TABLE `member_reqs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `membershipno` (`membershipno`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslettersmores`
--
ALTER TABLE `newslettersmores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pastexcoms`
--
ALTER TABLE `pastexcoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pastpresidents`
--
ALTER TABLE `pastpresidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgmedals`
--
ALTER TABLE `pgmedals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgwinners`
--
ALTER TABLE `pgwinners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presentexcoms`
--
ALTER TABLE `presentexcoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publictalks`
--
ALTER TABLE `publictalks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwvitanagewinners`
--
ALTER TABLE `pwvitanagewinners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slesocompastpapers`
--
ALTER TABLE `slesocompastpapers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slesocoms`
--
ALTER TABLE `slesocoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slesocomsyllabus`
--
ALTER TABLE `slesocomsyllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slesocomsyllabuses`
--
ALTER TABLE `slesocomsyllabuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slesomembers`
--
ALTER TABLE `slesomembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slesopastmembers`
--
ALTER TABLE `slesopastmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialpublications`
--
ALTER TABLE `specialpublications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technicalsessionmores`
--
ALTER TABLE `technicalsessionmores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technicalsessions`
--
ALTER TABLE `technicalsessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tissamunasinghewinners`
--
ALTER TABLE `tissamunasinghewinners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tissas`
--
ALTER TABLE `tissas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undergraduateresearchawards`
--
ALTER TABLE `undergraduateresearchawards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undergraduateresearchawardwinners`
--
ALTER TABLE `undergraduateresearchawardwinners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vitanages`
--
ALTER TABLE `vitanages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volumes`
--
ALTER TABLE `volumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshopmores`
--
ALTER TABLE `workshopmores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abstactvolumemores`
--
ALTER TABLE `abstactvolumemores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `abvolumes`
--
ALTER TABLE `abvolumes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `anandamedals`
--
ALTER TABLE `anandamedals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `anandamedalwinners`
--
ALTER TABLE `anandamedalwinners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `annualsessions`
--
ALTER TABLE `annualsessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `annualtripmores`
--
ALTER TABLE `annualtripmores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `annualtrips`
--
ALTER TABLE `annualtrips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `calenders`
--
ALTER TABLE `calenders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `editorialboards`
--
ALTER TABLE `editorialboards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fieldexcrusions`
--
ALTER TABLE `fieldexcrusions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fieldexcursionmores`
--
ALTER TABLE `fieldexcursionmores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `focuses`
--
ALTER TABLE `focuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gsslbooks`
--
ALTER TABLE `gsslbooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `highlights`
--
ALTER TABLE `highlights`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iesocompastpapers`
--
ALTER TABLE `iesocompastpapers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `iesocoms`
--
ALTER TABLE `iesocoms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iesocomsyllabus`
--
ALTER TABLE `iesocomsyllabus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `journalsubmits`
--
ALTER TABLE `journalsubmits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ljdmedals`
--
ALTER TABLE `ljdmedals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ljdmedalwinners`
--
ALTER TABLE `ljdmedalwinners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member_reqs`
--
ALTER TABLE `member_reqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newslettersmores`
--
ALTER TABLE `newslettersmores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pastexcoms`
--
ALTER TABLE `pastexcoms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pastpresidents`
--
ALTER TABLE `pastpresidents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pgmedals`
--
ALTER TABLE `pgmedals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pgwinners`
--
ALTER TABLE `pgwinners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `presentexcoms`
--
ALTER TABLE `presentexcoms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `publictalks`
--
ALTER TABLE `publictalks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pwvitanagewinners`
--
ALTER TABLE `pwvitanagewinners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slesocompastpapers`
--
ALTER TABLE `slesocompastpapers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slesocoms`
--
ALTER TABLE `slesocoms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slesocomsyllabus`
--
ALTER TABLE `slesocomsyllabus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slesocomsyllabuses`
--
ALTER TABLE `slesocomsyllabuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slesomembers`
--
ALTER TABLE `slesomembers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slesopastmembers`
--
ALTER TABLE `slesopastmembers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specialpublications`
--
ALTER TABLE `specialpublications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `technicalsessionmores`
--
ALTER TABLE `technicalsessionmores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `technicalsessions`
--
ALTER TABLE `technicalsessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tissamunasinghewinners`
--
ALTER TABLE `tissamunasinghewinners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tissas`
--
ALTER TABLE `tissas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `undergraduateresearchawards`
--
ALTER TABLE `undergraduateresearchawards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `undergraduateresearchawardwinners`
--
ALTER TABLE `undergraduateresearchawardwinners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `vitanages`
--
ALTER TABLE `vitanages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volumes`
--
ALTER TABLE `volumes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `workshopmores`
--
ALTER TABLE `workshopmores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
