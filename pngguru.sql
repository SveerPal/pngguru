-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2022 at 11:06 AM
-- Server version: 5.7.36-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pngguru`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Roshan', 'admin@gmail.com', NULL, '$2y$10$9xThMbfnvq8oAAPBAuTZWOE.ZuaTvcTLI9dSyw3oWKGuNIXpnGHPe', NULL, '2022-02-23 23:12:16', '2022-03-08 15:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `clienteles`
--

CREATE TABLE `clienteles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clienteles`
--

INSERT INTO `clienteles` (`id`, `name`, `link`, `image`, `alt`, `created_at`, `updated_at`) VALUES
(1, 'Grady, Veum and Smith', 'http://heidenreich.com/velit-aut-incidunt-praesentium-qui-quaerat-quia', NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(2, 'West, Bernier and Shields', 'http://kuphal.com/saepe-ea-facilis-qui-odio-perspiciatis-voluptatum', NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(3, 'Kris LLC', 'http://www.waelchi.com/', NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_png` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_webp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_jpg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_format` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_tag_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_count` bigint(20) DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `meta_keywords` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `description`, `slug`, `banner`, `image_png`, `image_webp`, `image_jpg`, `alt`, `image_size`, `file_format`, `image_category_id`, `image_tag_id`, `download_count`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(8, '50 percent off png image free download', NULL, '50-percent-off-png-image-free-download', NULL, '50 percent off png image free download_1645724965_1029029781.png', '50 percent off png image free download_1645724965_746734042.webp', NULL, 'Free png icon of 50 percent off', '3000x3000px', 'PNG', '1', '1', 16, NULL, 'Are you searching 50 percent off tag png ? visit pngguru and download it free.', NULL, NULL, NULL, '2022-02-25 00:49:25', '2022-03-02 15:54:43'),
(9, 'Did You Know', NULL, 'did-you-know', NULL, 'Did You Know_1645769036_1713135526.png', 'Did You Know_1645769036_854702761.webp', NULL, 'Free text png did you know', '3000x3000px', 'PNG', '1', '', 5, NULL, 'if you searching free png of did you know ? Visit pngguru and download.', NULL, NULL, NULL, '2022-02-25 13:03:56', '2022-03-02 15:53:22'),
(10, 'Wooden Temple Free Png Image', NULL, 'wooden-temple-free-png-image', NULL, 'Wooden Temple Free Png Image_1645769178_972646556.png', 'Wooden Temple Free Png Image_1645769178_68339551.webp', NULL, 'Wooden temple free transparent png', '1200x1200px', 'PNG', '1', '', 4, 'Wooden Temple Free Png Image', 'Wooden Temple Free Png Image Description', NULL, NULL, NULL, '2022-02-25 13:06:18', '2022-03-02 15:51:41'),
(11, 'Phone icon free png', NULL, 'phone-icon-free-png', NULL, 'Phone icon free png_1645769458_1012707102.png', 'Phone icon free png_1645769458_1486939257.webp', NULL, 'free download phone icon png', '3000x3000px', 'PNG', '1,19', '5,6', 1, 'Phone icon free png', 'Are you searching phone icon? Pngguru provides you royalty free phone icon.', NULL, NULL, NULL, '2022-02-25 13:10:58', '2022-03-02 15:49:56'),
(12, 'Real estate psd template free download', NULL, 'real-estate-psd-template-free-download', NULL, 'Real estate psd template free download_1645769991_1017954633.zip', 'Real estate psd template free download_1645769991_35622220.webp', NULL, NULL, '1200X1200', 'PSD', '3', '', 10, NULL, NULL, NULL, NULL, NULL, '2022-02-25 13:19:51', '2022-02-25 23:57:56'),
(13, 'Lower third free png and psd image', NULL, 'lower-third-free-png-image', '', 'Lower third free png and psd image_1645773897_883731453.zip', 'Lower third free png and psd image_1645773897_1706154879.webp', '', 'Free download psd and png file of lower third', NULL, NULL, '1', '', 4, NULL, NULL, NULL, NULL, NULL, '2022-02-25 14:24:57', '2022-02-25 14:24:57'),
(14, 'Mandala Background free download', NULL, 'mandala-background-free-download', '', 'Mandala Background free download_1645787591_639287907.jpg', 'Mandala Background free download_1645787591_1102862937.webp', '', NULL, NULL, NULL, '2', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 18:13:11', '2022-02-25 18:13:11'),
(15, 'Holi Festival of color png Image free download', NULL, 'holi-festival-of-color-png-image-free-download', NULL, 'Holi Festival of color png Image free download_1645805895_1379807777.png', 'Holi Festival of color png Image free download_1645805895_842435948.webp', NULL, 'Holi royalty free png transparent image free download', '3000x3000px', 'PNG', '1,4', '1,8,12', 3, 'Holi Festival of color png Image free download', 'Are you searching free royalty free png image of holi festival ? PngGuru provide the stock png image of holi.', 'Holi, color, png, png image, festival', NULL, NULL, '2022-02-25 23:18:15', '2022-03-02 15:45:00'),
(16, 'Indian flag colour background free download', NULL, 'indian-flag-colour-background-free-download', '', 'Indian flag colour background free download_1645807995_421449650.jpg', 'Indian flag colour background free download_1645807995_865702389.webp', '', 'Indian flag background download free', '1240X1920', 'JPG', '2', '2', 1, 'Indian flag background download free', 'Are you searching indian flag background ? We provide royalty free background images.', 'Flag Background, Indian flag background', NULL, NULL, '2022-02-25 23:53:15', '2022-02-25 23:53:15'),
(17, 'Rose Flower Png free download', NULL, 'rose-flower-png-free-download', NULL, 'Rose Flower Png free download_1645855462_485883969.png', 'Rose Flower Png free download_1645855462_435906628.webp', NULL, 'Free png download of rose flower', '517x715px', 'PNG', '1,7', '', 8, NULL, 'Are you searching png image of rose flower? PngGuru provide the high resolution png image of rose flower.', NULL, NULL, NULL, '2022-02-26 13:04:22', '2022-03-02 15:44:28'),
(18, 'Happy Holi png free download', NULL, 'happy-holi-png-free-download', NULL, 'Happy Holi png free download_1645856094_1751080448.png', 'Happy Holi png free download_1645856094_2074536919.webp', NULL, 'Holi indian festival png free download', '2000x2000px', 'PNG', '1,4', '7,12', 2, NULL, 'Are you searching holi png image ? PngGuru Provide royalty free stock png of happy holi.', NULL, NULL, NULL, '2022-02-26 13:14:54', '2022-03-02 15:43:02'),
(19, 'Happy Holi text png free download | PngGuru', NULL, 'happy-holi-text-png-free-download', NULL, 'Happy Holi text png free download | PngGuru_1645856538_1839904779.png', 'Happy Holi text png free download | PngGuru_1645856538_475539437.webp', NULL, 'Free download holi text png', '2000x2000px', 'PNG', '1,4', '1,7,8,12', 3, NULL, 'Are you searching happy holi colourful text. Visit pngguru and download it free.', NULL, NULL, NULL, '2022-02-26 13:22:18', '2022-03-02 15:42:43'),
(20, 'Bura na mano holi hai png text free download | PngGuru', NULL, 'bura-na-mano-holi-hai', NULL, 'Bura na mano holi hai png text free download | PngGuru_1645856918_1206152363.png', 'Bura na mano holi hai png text free download | PngGuru_1645856918_1698657292.webp', NULL, 'Holi png text image', '2000x2000px', 'PNG', '1,4', '1,7,8,12', 1, NULL, 'Are you searching bura na mano holi hai text png image ? Visit PngGuru and download it free.', NULL, NULL, NULL, '2022-02-26 13:28:38', '2022-03-02 15:42:28'),
(21, 'Bura na mano holi hai Royalty png text free download | PngGuru', NULL, 'bura-na-mano-holi-hai-royalty-png-text-free-download', NULL, 'Bura na mano holi hai Royalty png text free download | PngGuru_1645864329_877034594.png', 'Bura na mano holi hai Royalty png text free download | PngGuru_1645864329_792585198.webp', NULL, 'Holi png image free free download', '2000x2000px', 'PNG', '1,4', '1,7,8,12', 2, NULL, 'Are you Searching Holi royalty free stock png ? visit pngguru and download unlimited for free.', NULL, NULL, NULL, '2022-02-26 15:32:09', '2022-03-02 15:42:08'),
(22, 'Colourful happy Holi Png Image | Png Guru', NULL, 'colourful-happy-holi-png-image', NULL, 'Colourful happy Holi Png Image | Png Guru_1645865069_1466048667.png', 'Colourful happy Holi Png Image | Png Guru_1645865069_1396656320.webp', NULL, 'Free Download colourful holi', '2000x2000px', 'PNG', '1,4', '1,7,8,12', 3, NULL, 'If you searching for holi png images ?  Visit pngguru now.', NULL, NULL, NULL, '2022-02-26 15:44:29', '2022-03-02 15:41:46'),
(23, 'Line Art Png Free Download | PngGuru', NULL, 'line-art-png-free-download', NULL, 'Line Art Png Free Download | PngGuru_1645865804_1671951178.png', 'Line Art Png Free Download | PngGuru_1645865804_456154431.webp', NULL, 'Free line art png image', '2000x2000px', 'PNG', '1', '9', 4, NULL, 'Are you searching for line png art image ? Visit and download free png.', NULL, NULL, NULL, '2022-02-26 15:56:44', '2022-03-02 15:41:11'),
(24, 'Maha Shivratri hindi wishes Png Image free download', NULL, 'maha-shivratri-hindi-wishes-png', NULL, 'Maha Shivratri hindi wishes Png Image free download_1645866418_159420786.png', 'Maha Shivratri hindi wishes Png Image free download_1645866418_210646546.webp', NULL, 'maha shivratri image png text', '1200x1200px', 'PNG', '1,15', '1,8', 14, NULL, 'Are you searching png image of maha shivratri ? Pngguru provide royalty free maha shivratri image.', NULL, NULL, NULL, '2022-02-26 16:06:58', '2022-03-02 15:40:40'),
(25, 'Mahashivratri hindi red text png free download', NULL, 'mahashivratri-hindi-red-text-png-free-download', NULL, 'Mahashivratri hindi red text png free download_1645866890_646488765.png', 'Mahashivratri hindi red text png free download_1645866890_1035222980.webp', NULL, 'Mahashivratri hind text png', '1200x431px', 'PNG', '1,15', '1', 7, NULL, 'Are you searching mahashivratri png image ? Visit pngguru and download it free.', NULL, NULL, NULL, '2022-02-26 16:14:50', '2022-03-02 15:40:24'),
(26, 'Deer royalty free png image free download | Png Guru', NULL, 'deer-royalty-free-png-image', NULL, 'Deer royalty free png image free download | Png Guru_1645867804_1032749617.png', 'Deer royalty free png image free download | Png Guru_1645867804_861194247.webp', NULL, 'Deer Png image', '2048x1908px', 'PNG', '1,8', '', 6, NULL, 'Are you searching Deer animal png image ? Png guru provide animal image visit and download free.', NULL, NULL, NULL, '2022-02-26 16:30:04', '2022-03-02 15:39:39'),
(27, 'Tree Background free download', NULL, 'tree-background-free-download', NULL, 'Tree Background free download_1645876360_2057491260.jpg', 'Tree Background free download_1645876360_513166870.jpg', NULL, 'Tree background free download', '2048X1365', 'JPG', '2,18', '2', 1, NULL, 'Are you searching free background of tree? Visit and download it free.', NULL, NULL, NULL, '2022-02-26 18:52:40', '2022-03-02 15:39:21'),
(28, 'Landscape Background High Resolution free download', NULL, 'landscape-background-high-resolution-free-download', '', 'Landscape Background High Resolution free download_1646044375_139875479.jpg', 'Landscape Background High Resolution free download_1646044375_598628637.webp', '', 'Free landscape background image', '2048x1230px', 'JPG', '2,18', '2', 1, NULL, 'Are you searching landscape nature background ? Visit pngguru and download it free.', 'nature, background', NULL, NULL, '2022-02-28 17:32:55', '2022-02-28 17:32:55'),
(29, 'Deer free transparent  image png download', NULL, 'deer-free-transparent-image-png-download', '', 'Deer free transparent  image png download_1646139077_1934267140.png', 'Deer free transparent  image png download_1646139077_309212961.jpg', '', 'Deer free png image', '1392x2048px', 'PNG', '1,8', '16,17,18', 3, NULL, 'Are you searching deer animal png transparent images ? PngGuru provide the free png image of Deer.', NULL, NULL, NULL, '2022-03-01 19:51:17', '2022-03-01 19:51:17'),
(30, 'Lord Shiva Png image free download', NULL, 'lord-shiva-png-image-free-download', NULL, 'Lord Shiva Png image free download_1646141772_753071879.png', 'Lord Shiva Png image free download_1646141772_184780497.jpg', NULL, 'Hindu god lord shiva png image', '1920x1280px', 'PNG', '1', '1,21,22,23,24', 1, NULL, 'Are yo searching god images ? Visit pngguru and download it free no attribution requried.', NULL, NULL, NULL, '2022-03-01 20:36:12', '2022-03-02 15:38:38'),
(31, 'Deer transparent png image free download', NULL, 'deer-transparent-png-image-free-download', '', 'Deer transparent png image free download_1646143541_385374810.png', 'Deer transparent png image free download_1646143541_1359561013.jpg', '', 'Free download Deer animal transparent image', '1828x2048px', 'PNG', '1,8', '16,17,18', 3, NULL, 'Deer animal royalty free png image download visit our website pngguru now.', NULL, NULL, NULL, '2022-03-01 21:05:41', '2022-03-01 21:05:41'),
(32, 'Happy Holi png text free download', NULL, 'happy-holi-png-text-free-download', NULL, 'Happy Holi png text free download_1646144815_643350184.png', 'Happy Holi png text free download_1646144815_2033298115.webp', NULL, 'Download free png of happy holi', '2000x2000px', 'PNG', '1,4', '1,8,12', 1, 'Happy Holi png text free download', 'Are you searching free png of happy holi. visit pngguru and download free.', NULL, NULL, NULL, '2022-03-01 21:26:55', '2022-03-02 00:04:04'),
(33, 'Happy holi colourful text png free download', NULL, 'happy-holi-colourful-text-png-free-download', '', 'Happy holi colourful text png free download_1646215370_1018493036.png', 'Happy holi colourful text png free download_1646215370_1644447586.webp', '', 'free png of happy holi', '2000x934px', 'PNG', '1,4', '1,8,12', 1, NULL, 'Free png image of happy holi visit and download.', NULL, NULL, NULL, '2022-03-02 17:02:50', '2022-03-02 17:02:50'),
(34, 'Butterfly pose yoga png image free download', NULL, 'butterfly-pose-yoga-png-image-free-download', NULL, 'Butter pose yoga png image free download_1646221847_557763610.png', 'Butter pose yoga png image free download_1646221847_690082358.webp', NULL, 'Free download butterfly yoga pose png', '1607x1920px', 'PNG', '1,10', '25,26,27', 4, NULL, 'Download yoga royalty free png image.', NULL, NULL, NULL, '2022-03-02 18:50:47', '2022-03-03 13:44:57'),
(35, 'Good Morning png transparent image free download', NULL, 'good-morning-png-transparent-image-free-download', '', 'Good Morning png transparent image free download_1646222954_1965394724.png', 'Good Morning png transparent image free download_1646222954_1952455409.webp', '', 'Good morning png Hd image', '2000x2000px', 'PNG', '1,13', '28,29', 2, NULL, 'If you searching free png of good morning text ? visit png guru and download free.', NULL, NULL, NULL, '2022-03-02 19:09:14', '2022-03-02 19:09:14'),
(36, 'A letter clipart png free download', NULL, 'a-letter-clipart-png-free-download', '', 'A letter clipart png free download_1646229531_417383681.png', 'A letter clipart png free download_1646229531_411467835.webp', '', 'A alphabet clipart free png', '2048x2048px', 'PNG', '1,5', '5', 6, NULL, 'A alphabet or letter blue colour free png.', 'letter, alphabet, icon', NULL, NULL, '2022-03-02 20:58:51', '2022-03-02 20:58:51'),
(37, 'Potato png free download', NULL, 'potato-png-free-download', '', 'Potato png free download_1646230147_130887648.png', 'Potato png free download_1646230147_2100178537.webp', '', 'potato high resolution hd png free download', '2000x2000px', 'PNG', '1,11', '28', 4, NULL, 'Are you searching potato vegetable png ? Visit and download hd png image of potato for free.', NULL, NULL, NULL, '2022-03-02 21:09:07', '2022-03-02 21:09:07'),
(38, 'Good Night free png image download', NULL, 'good-night-free-png-image-download', '', 'Good Night free png image download_1646230556_476855335.png', 'Good Night free png image download_1646230556_1207286701.webp', '', NULL, '2000x2000px', 'PNG', '1,14', '28,29', 1, NULL, 'Are you searching good night image ?  visit pngguru and download good night png text image for free.', NULL, NULL, NULL, '2022-03-02 21:15:56', '2022-03-02 21:15:56'),
(39, 'Apple fruit free png download', NULL, 'apple-fruit-free-png-download', '', 'Apple fruit free png download_1646231056_321568869.png', 'Apple fruit free png download_1646231056_1834829677.webp', '', 'apple fruit png image', '2827x2827px', 'PNG', '1,6', '27,28', 3, NULL, 'Are you searching apple png image ? Visit pngguru and download hd png image of apple fruit.', NULL, NULL, NULL, '2022-03-02 21:24:16', '2022-03-02 21:24:16'),
(40, 'Eid Al Adha Free png text HD Download', NULL, 'eid-al-adha-free-png-text-hd-download', '', 'Eid Al Adha Free png text HD Download_1646231418_972157405.png', 'Eid Al Adha Free png text HD Download_1646231418_1459642573.webp', '', 'free Eid Al Adha png text HD Download', '2000x2000px', 'PNG', '1,9', '1,8,28,29', 2, NULL, 'Are you searching free eid al adha png text image ? Visit pngguru and download it free.', NULL, NULL, NULL, '2022-03-02 21:30:18', '2022-03-02 21:30:18'),
(41, 'Happy new year design free png text download', NULL, 'happy-new-year-design-free-png-text-download', '', 'Happy new year design free png text download_1646231635_41293461.png', 'Happy new year design free png text download_1646231635_833863206.webp', '', 'free download royalty free png image of happy new year', '2000x2000px', 'PNG', '1,12', '1,28,29', 2, NULL, 'Are you searching free png image text ? Pngguru provide the royalty free png image visit and download.', NULL, NULL, NULL, '2022-03-02 21:33:55', '2022-03-02 21:33:55'),
(42, 'Sky background free download', NULL, 'sky-background', '', 'Sky background free download_1646468309_900899616.jpg', 'Sky background free download_1646468309_1141086281.webp', '', 'Free Background of sky', '2048x1099px', 'JPG', '2', '13', NULL, NULL, 'Free download sky background.', NULL, NULL, NULL, '2022-03-05 15:18:29', '2022-03-05 15:18:29'),
(43, 'Beautiful Sky Background Free Download', NULL, 'beautiful-sky-background', '', 'Beautiful Sky Background Free Download_1646470190_63024167.jpg', 'Beautiful Sky Background Free Download_1646470190_250492338.webp', '', 'Blue Sky background', '2048x1144px', 'JPG', '2', '13', 1, NULL, 'Free download sky background visit pngguru.', NULL, NULL, NULL, '2022-03-05 15:49:50', '2022-03-05 15:49:50'),
(44, 'Red and yellow background free download', NULL, 'red-and-yellow-background', '', 'Red and yellow background free download_1646472601_1091501409.zip', 'Red and yellow background free download_1646472601_1061775217.webp', '', 'Red and yellow background', '1350x2000px', 'JPG, PSD', '2', '13', NULL, NULL, 'Are you searching background image download it free from pngguru.', NULL, NULL, NULL, '2022-03-05 16:30:01', '2022-03-05 16:30:01'),
(45, 'Holi colour splash png free download', NULL, 'holi-colour-splash', '', 'Holi colour splash png free download_1646474862_1488527521.png', 'Holi colour splash png free download_1646474862_223210518.webp', '', 'Colour splash png image', '3000x3000px', 'PNG', '1,4', '1,8,12', 1, NULL, 'Explore and download Holi colour splash png image free for personal and commercial use.', NULL, NULL, NULL, '2022-03-05 17:07:42', '2022-03-05 17:07:42'),
(46, 'Holi colour splash psd file free download', NULL, 'holi-colour-splash-psd-file', '', 'Holi colour splash psd file free download_1646475455_448187558.zip', 'Holi colour splash psd file free download_1646475455_246511005.webp', '', 'Holi colour splash psd', '3000x3000px', 'PNG, PSD', '1,4', '1,8,12', 6, NULL, 'Explore and download colour splash psd from png guru. Its for personal and commercial use both.', NULL, NULL, NULL, '2022-03-05 17:17:35', '2022-03-05 17:17:35'),
(47, 'International Women\'s Day Free png download', '<p>Are you searching International women&#39;s day free png. PngGuru provide the royalty free transparent png image visit and download.</p>', 'international-womens-day', NULL, 'International Women\'s Day Free png download_1646541569_681223902.zip', 'International Women\'s Day Free png download_1646541569_1405482263.webp', NULL, '8 march international women\'s day', '3000x3000px', 'PNG, PSD', '1', '28,29', 2, NULL, 'Are you searching International women\'s day free png. PngGuru provide the royalty free transparent png image visit and download.', NULL, NULL, NULL, '2022-03-06 11:39:29', '2022-03-06 11:40:09'),
(48, 'International Women\'s Day royalty free psd download', '<p>Are you searching for International Women&#39;s Day png images or psd? Visit png guru and download in the form of PNG and psd format.</p>', 'international-womens-day-royalty-free-psd', '', 'International Women\'s Day royalty free psd download_1646542206_1610887275.zip', 'International Women\'s Day royalty free psd download_1646542206_469140976.webp', '', 'Free download women\'s day png', '3000x3000px', 'PNG, PSD', '1', '28,29', 3, NULL, 'Are you searching for International Women\'s Day png images or psd? Visit png guru and download in the form of PNG and psd format.', NULL, NULL, NULL, '2022-03-06 11:50:06', '2022-03-06 11:50:06'),
(49, 'Zebra png clipart free download', '<p>are you searching&nbsp;</p>', 'zebra-png-clipart', '', 'Zebra png clipart free download_1646543056_26467384.png', 'Zebra png clipart free download_1646543056_1493587518.webp', '', 'Zebra animal png free download', '5739x5363px', 'PNG', '1,8', '18', 6, 'Zebra png clipart free download', 'Are you searching zebra animal png image ? Visit pngguru and download it free. no attribution required.', NULL, NULL, NULL, '2022-03-06 12:04:16', '2022-03-06 12:04:16'),
(50, 'Happy holi hindi png free download | Png Guru', '<p>Are you searching happy holi png image ? Visit png giru and download royalty free stock happy holi png free.</p>', 'happy-holi-hindi-png', '', 'Happy holi hindi png free download | Png Guru_1646589102_473162624.png', 'Happy holi hindi png free download | Png Guru_1646589102_1486944781.webp', '', 'Free png of holi festival', '3000x3000px', 'PNG', '1,4', '1,8,12', NULL, 'Happy holi hindi png free download', 'Are you searching happy holi png image ? Visit png giru and download royalty free stock happy holi png free.', NULL, NULL, NULL, '2022-03-07 00:51:42', '2022-03-07 00:51:42'),
(51, 'Happy holi colourful free stock png | PngGuru', '<p>Explore &nbsp;high resolution free happy holi PNG images. Visit and download unlimited images for free.</p>', 'happy-holi-colourful-free-stock-png', '', 'Happy holi colourful free stock png | PngGuru_1646589463_342671554.png', 'Happy holi colourful free stock png | PngGuru_1646589463_391316436.webp', '', 'Free download happy holi png image', '3000x3000px', 'PNG', '1,4', '1,8,12', NULL, 'Happy holi colourful free stock png', 'Explore  high resolution free happy holi PNG images. Visit and download unlimited images for free.', NULL, NULL, NULL, '2022-03-07 00:57:43', '2022-03-07 00:57:43'),
(52, 'Happy holi transparent png free download | PngGuru', '<p>Holi transparent PNG images - Download HD and best resolution transparent png and cliparts for free.</p>', 'happy-holi-transparent-png', NULL, 'Happy holi transparent png free download | PngGuru_1646589802_1577538263.png', 'Happy holi transparent png free download | PngGuru_1646589802_1327288672.webp', NULL, 'Happy holi white text png free download.', '3000x3000px', 'PNG', '1,4', '1,8,12', NULL, 'Happy holi transparent png free download', 'Holi transparent PNG images - Download HD and best resolution transparent png and cliparts for free.', NULL, NULL, NULL, '2022-03-07 01:03:22', '2022-03-07 01:03:33'),
(53, 'Canada flag png with transparent background free download', '<p>Are you searching canada flag with transparent background ? Explore and download unlimited transparent png for free.</p>', 'canada-flag-png-with-transparent-background', '', 'Canada flag png with transparent background free download_1646590187_1387615682.png', 'Canada flag png with transparent background free download_1646590187_210365424.webp', '', 'Free png of canada flag', '3000x3000px', 'PNG', '1', '28', NULL, NULL, 'Are you searching canada flag with transparent background ? Explore and download unlimited transparent png for free.', NULL, NULL, NULL, '2022-03-07 01:09:47', '2022-03-07 01:09:47'),
(54, 'China Flag heart shape png free download', '<p>Explore and download png transparent image of china flag and much more.</p>', 'china-flag-heart-shape', '', 'China Flag heart shape png free download_1646638570_815386114.png', 'China Flag heart shape png free download_1646638570_2050957255.webp', '', 'Ching flag png', '3000x3000px', 'PNG', '1', '28', NULL, NULL, 'Explore and download png transparent image of china flag and much more.', NULL, NULL, NULL, '2022-03-07 14:36:10', '2022-03-07 14:36:10'),
(55, 'Pakistan flag heart shape png download', NULL, 'pakistan-flag-heart-shape', '', 'Pakistan flag heart shape png download_1646640700_286835630.png', 'Pakistan flag heart shape png download_1646640700_269272526.webp', '', 'Free download transparent png image of pakastin flag', '3000x3000px', 'PNG', '1', '28,30', NULL, 'Pakistan flag heart shape png free download', 'Discover and download free transparent background png image of flag.', NULL, NULL, NULL, '2022-03-07 15:11:40', '2022-03-07 15:11:40'),
(56, 'Pink flower clipart transparent png free download', NULL, 'pink-flower-clipart-transparent-png-free', NULL, 'Pink flower clipart transparent png free download_1646641005_695906261.png', 'Pink flower clipart transparent png free download_1646641005_84472135.webp', NULL, 'Free clipart png image of flower', '3000x3000px', 'PNG', '1,7', '5,28', 4, 'Pink flower clipart transparent png free download', 'Are you searching Flower clipart png image ? Discover and download royalty free stock png from pngguru.', NULL, NULL, NULL, '2022-03-07 15:16:45', '2022-03-07 15:16:57'),
(57, 'Flower icon free png with transparent background', '<p>Are you searching png icon of flower ? Discover and download hd png icon of flower.&nbsp;</p>', 'flower-icon-free-png-with-transparent-background', '', 'Flower icon free png with transparent background_1646641551_2133955622.png', 'Flower icon free png with transparent background_1646641551_676055727.webp', '', 'Free download flower clipart icon png', '3000x3000px', 'PNG', ',7', '28', 1, 'Flower icon free png with transparent background', 'Are you searching png icon of flower ? Discover and download hd png icon of flower.', NULL, NULL, NULL, '2022-03-07 15:25:51', '2022-03-07 15:25:51'),
(58, 'Rose flower transparent png free download', '<p>Are you searching rose flower with transparent background ? Discover and download royalty free png image of rose.</p>', 'rose-flower-transparent-png-free-download', '', 'Rose flower transparent png free download_1646641869_2113420911.png', 'Rose flower transparent png free download_1646641869_867544344.webp', '', 'free download rose flower png', '3000x3000px', 'PNG', '1,7', '28', NULL, 'Rose flower transparent png free download', 'Are you searching rose flower with transparent background ? Discover and download royalty free png image of rose.', NULL, NULL, NULL, '2022-03-07 15:31:09', '2022-03-07 15:31:09'),
(59, 'Kiwi fruit HD png image with transparent background free download', '<p>Are you searching free png of kiwi ? PngGuru provide the HD png image of kiwi fruit with transparent background.</p>', 'kiwi-fruit-hd-png-image-with-transparent-background', '', 'Kiwi fruit HD png image with transparent background free download_1646643033_782778044.png', 'Kiwi fruit HD png image with transparent background free download_1646643033_409846416.webp', '', 'Kiwi fruit png', '2500x1667px', 'PNG', '1,6', '28', NULL, 'Kiwi fruit HD png image with transparent background free download', 'Are you searching free png of kiwi ? PngGuru provide the HD png image of kiwi fruit with transparent background.', NULL, NULL, NULL, '2022-03-07 15:50:33', '2022-03-07 15:50:33'),
(60, 'Pineapple free png image with transparent background', '<p>Discover and download free png image of pineapple fruit with High resolution.</p>', 'pineapple-free-png-image-with-transparent-background', '', 'Pineapple free png image with transparent background_1646643317_1953008668.png', 'Pineapple free png image with transparent background_1646643317_57074246.webp', '', 'free download pineapple fruit png', '3071x2067px', 'PNG', '1,6', '27,28', NULL, 'Pineapple free png image with transparent background', 'Discover and download free png image of pineapple fruit with High resolution.', NULL, NULL, NULL, '2022-03-07 15:55:17', '2022-03-07 15:55:17'),
(61, 'International Women\'s Day png graphics free download', '<p>Are you searching women&#39;s day png image ? Discover and download it free from pngguru.</p>', 'international-womens-day-png-graphics-free-download', '', 'International Women\'s Day png graphics free download_1646645355_516713822.png', 'International Women\'s Day png graphics free download_1646645355_1730350726.webp', '', 'Women\'s day png', '3000x3000px', 'PNG', '1', '28', NULL, 'International Women\'s Day png graphics free download', 'Are you searching women\'s day png image ? Discover and download it free from pngguru.', NULL, NULL, NULL, '2022-03-07 16:29:15', '2022-03-07 16:29:15'),
(62, 'Yoga mat free HD png image download', NULL, 'yoga-mat-free-hd-png-image-download', '', 'Yoga mat free HD png image download_1646647811_377600582.png', 'Yoga mat free HD png image download_1646647811_1799326703.webp', '', 'Free download yoga mat png', '4460x2973px', 'PNG', '1,10', '25,27', NULL, 'Yoga mat free HD png image download', 'Explore and download free png of yoga mat.', NULL, NULL, NULL, '2022-03-07 17:10:11', '2022-03-07 17:10:11'),
(63, 'Ustrasana yoga pose free clipart png download', NULL, 'ustrasana-yoga-pose-free-clipart-png-download', '', 'Ustrasana yoga pose free clipart png download_1646648645_98385633.png', 'Ustrasana yoga pose free clipart png download_1646648645_126647609.webp', '', 'Yoga pose clipart png', '2000x2000px', 'PNG', '1,10', '25,27', NULL, 'Ustrasana yoga pose free clipart png download', 'Are you searching yoga clipart png ? discover and download png image of yoga with transparent BG.', NULL, NULL, NULL, '2022-03-07 17:24:05', '2022-03-07 17:24:05'),
(64, 'Happy Women\' s Day Free png download', NULL, 'happy-women-s-day-free-png', '', 'Happy Women\' s Day Free png download_1646650021_533723803.png', 'Happy Women\' s Day Free png download_1646650021_36744657.webp', '', 'Happy women\'s day free transparent png', '3000x3000px', 'PNG', '1', '28', NULL, 'Happy Women\' s Day Free png download', 'Discover and download free transparent png of happy women\'s day.', NULL, NULL, NULL, '2022-03-07 17:47:01', '2022-03-07 17:47:01'),
(65, 'Flight Icon Silhouette free png with transparent background', NULL, 'flight-icon-silhouette-free-png', '', 'Flight Icon Silhouette free png with transparent background_1646650634_1935033588.png', 'Flight Icon Silhouette free png with transparent background_1646650634_1650993514.webp', '', 'aeroplane icon free png', '3000x3000px', 'PNG', '1,19', '5,6', NULL, 'Flight Icon Silhouette free png with transparent background', 'Discover and download free Silhouette png icon in high quality.', NULL, NULL, NULL, '2022-03-07 17:57:14', '2022-03-07 17:57:14'),
(66, 'Ambulance icon png free download', '<p>Discover and download free Silhouettes clipart icon png transparent background.</p>', 'ambulance-icon-png-free-download', '', 'Ambulance icon png free download_1646653599_645384422.png', 'Ambulance icon png free download_1646653599_525085928.webp', '', 'Free icon of ambulance png', '3000x3000px', 'PNG', '1,19', '5,6', NULL, 'Ambulance icon png free download', 'Discover and download free Silhouettes clipart icon png transparent background.', NULL, NULL, NULL, '2022-03-07 18:46:39', '2022-03-07 18:46:39'),
(67, 'Holi color splatter free psd and png format free download', '<p>Discover and downloads free psd color splatter visit pngguru now.</p>', 'holi-color-splatter-free-psd-and-png', '', 'Holi color splatter free psd and png format free download_1646654034_1280852737.zip', 'Holi color splatter free psd and png format free download_1646654034_1663378991.webp', '', 'free download holi color splash png', '3000x3000px', 'PNG, PSD', '1,4', '1,8', NULL, 'Holi color splatter free psd and png format free download', 'Discover and downloads free psd color splatter visit pngguru now.', NULL, NULL, NULL, '2022-03-07 18:53:54', '2022-03-07 18:53:54'),
(68, 'Beautiful text of happy holi free png download', '<p>Discover and unlimited download of Happy holi png free with transparent background.</p>', 'beautiful-text-of-happy-holi-free-png-download', '', 'Beautiful text of happy holi free png download_1646654371_1723165903.png', 'Beautiful text of happy holi free png download_1646654371_1019727209.webp', '', 'happy holi png free', '3000x3000px', 'PNG', '1,4', '1,8', NULL, 'Beautiful text of happy holi free png download', 'Discover and unlimited download of Happy holi png free with transparent background.', NULL, NULL, NULL, '2022-03-07 18:59:31', '2022-03-07 18:59:31'),
(69, 'Happy holi png yellow and red with transparent background', NULL, 'happy-holi-png-yellow-and-red-with-transparent-background', '', 'Happy holi png yellow and red with transparent background_1646654777_1937832747.png', 'Happy holi png yellow and red with transparent background_1646654777_641267670.webp', '', 'free png of happy holi', '3000x3000px', 'PNG', '1,4', '1,8', 6, 'Happy holi png yellow and red with transparent background', 'Explore and download free png of happy holi. No any attribution required.', NULL, NULL, NULL, '2022-03-07 19:06:17', '2022-03-07 19:06:17'),
(70, 'Happy Womens Day text Royalty free png download', '<p>Are you searching free png of womens day ? discover and download from pngguru.</p>', 'happy-womens-day-text-royalty-free-png-download', '', 'Happy Womens Day text Royalty free png download_1646655841_147642753.png', 'Happy Womens Day text Royalty free png download_1646655841_1708588702.webp', '', 'Women\'s day free png', '3000x3000px', 'PNG', '1', '28', NULL, 'Happy Womens Day text Royalty free png download', 'Are you searching free png of womens day ? discover and download from pngguru.', NULL, NULL, NULL, '2022-03-07 19:24:01', '2022-03-07 19:24:01'),
(71, 'Holi Background red and yellow free download', '<p>Discover and download free psd holi background from pngguru.</p>', 'holi-background-red-and-yellow-free-download', '', 'Holi Background red and yellow free download_1646675007_120411517.zip', 'Holi Background red and yellow free download_1646675007_1260967686.webp', '', 'Royalty free background of holi', '1000x1000px', 'JPG, PSD', '2', '13', NULL, 'Holi Background red and yellow free download', 'Discover and download free psd holi background from pngguru.', NULL, NULL, NULL, '2022-03-08 00:43:27', '2022-03-08 00:43:27'),
(72, 'Green and yellow gradient background free download', '<p>Are you searching gradient background ? PngGuru provide the royalty free hd background visit and download it.</p>', 'green-and-yellow-gradient-background-free-download', '', 'Green and yellow gradient background free download_1646675393_1095143514.jpg', 'Green and yellow gradient background free download_1646675393_152175138.webp', '', 'free gradient background', '1000x1000px', 'JPG', '2', '13', NULL, 'Green and yellow gradient background free download', 'Are you searching gradient background ? PngGuru provide the royalty free hd background visit and download it.', NULL, NULL, NULL, '2022-03-08 00:49:53', '2022-03-08 00:49:53'),
(73, 'Pink royalty free background free download', '<p>Discover and download free hd pink background with flower clipart.</p>', 'pink-royalty-free-background-free-download', '', 'Pink royalty free background free download_1646675871_1383941956.jpg', 'Pink royalty free background free download_1646675871_1513409339.webp', '', 'free pink background', '1000x1000px', 'JPG', '2', '13', NULL, 'Pink royalty free background free download', 'Discover and download free hd pink background with flower clipart.', NULL, NULL, NULL, '2022-03-08 00:57:51', '2022-03-08 00:57:51'),
(74, 'Super sale social media template psd free download', '<p>Are you searching social media psd template ? Visit png guru and download it free.</p>', 'super-sale-social-media-template-psd-free-download', '', 'Super sale social media template psd free download_1646677319_1293585035.zip', 'Super sale social media template psd free download_1646677319_1042664468.webp', '', 'free psd super sale template for your creatives', '1200x1200px', 'PSD', '3', '9', NULL, 'Super sale social media template psd free download', 'Are you searching social media psd template ? Visit png guru and download it free.', NULL, NULL, NULL, '2022-03-08 01:21:59', '2022-03-08 01:21:59'),
(75, 'Social media psd template free download', '<p>Are you searching social media free template ? Discover and download free psd from PngGuru.</p>', 'social-media-psd-template-free-download', '', 'Social media psd template free download_1646678307_288629787.zip', 'Social media psd template free download_1646678307_1393570770.webp', '', 'Free social media psd template', '1200x1200px', 'PSD', '3', '9', NULL, 'Social media psd template free download', 'Are you searching social media free template ? Discover and download free psd from PngGuru.', NULL, NULL, NULL, '2022-03-08 01:38:27', '2022-03-08 01:38:27'),
(76, 'Today\'s Special offer social media psd template free download', '<p>Discover and download free social media psd template for facebook, instagram, twitter.</p>', 'todays-special-offer-social-media-psd-template-free-download', '', 'Today\'s Special offer social media psd template free download_1646679231_959403484.zip', 'Today\'s Special offer social media psd template free download_1646679231_718276498.webp', '', 'free social media offer template psd', '1200x1200px', 'PSD', '3', '9', NULL, 'Today\'s Special offer social media psd template free download', 'Discover and download free social media psd template for facebook, instagram, twitter.', NULL, NULL, NULL, '2022-03-08 01:53:51', '2022-03-08 01:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `image_categories`
--

CREATE TABLE `image_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_png` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_webp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_jpg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `meta_keywords` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_search_below` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popular` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_categories`
--

INSERT INTO `image_categories` (`id`, `name`, `description`, `slug`, `banner`, `image_png`, `image_webp`, `image_jpg`, `alt`, `parent_id`, `menu`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `featured`, `banner_search_below`, `popular`, `created_at`, `updated_at`) VALUES
(1, 'Png Images', '<p>Explore and download 1000+ royalty free PNG images.</p>', 'png-images', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-03-05 21:11:51'),
(2, 'Background and Photos', '<p>Royalty Free Background images and Photos, Updated Daily</p>', 'background-photos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-25 21:05:22'),
(3, 'Templates', '<p>Royalty Free PSD Templates, Updated regularly</p>', 'templates', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-25 21:06:44'),
(4, 'Holi', NULL, 'holi', NULL, 'Holi_1645880819_293248834.png', 'Holi_1645882353_266041941.webp', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2022-02-23 23:12:16', '2022-02-26 20:32:33'),
(5, 'Letter', NULL, 'letter', NULL, NULL, 'Letter_1645962439_1876407761.webp', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2022-02-23 23:12:16', '2022-02-27 18:47:19'),
(6, 'Fruit', NULL, 'fruit', NULL, NULL, 'Fruit_1646042727_1286718193.webp', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-02-23 23:12:16', '2022-02-28 17:05:47'),
(7, 'Flower', NULL, 'flower', NULL, NULL, 'Flower_1646041641_882190153.webp', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2022-02-23 23:12:16', '2022-02-28 16:47:21'),
(8, 'Animal', NULL, 'animal', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(9, 'Eid', NULL, 'eid', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(10, 'Yoga', NULL, 'yoga', NULL, NULL, 'Yoga_1646042415_1116822340.webp', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2022-02-23 23:12:16', '2022-02-28 17:00:15'),
(11, 'Vegetable', NULL, 'vegetable', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(12, 'Happy New Year', NULL, 'happy-new-year', NULL, NULL, 'Happy New Year_1646042146_652674364.webp', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2022-02-23 23:12:16', '2022-02-28 16:55:46'),
(13, 'Good Morning', NULL, 'good-morning', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(14, 'Good Night', NULL, 'good-night', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(15, 'Festival', NULL, 'festival', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(18, 'Nature', NULL, 'nature', '', '', '', '', NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-28 17:29:25', '2022-02-28 17:29:25'),
(19, 'Icon', NULL, 'icon', '', '', '', '', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 15:47:12', '2022-03-02 15:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `image_tags`
--

CREATE TABLE `image_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_png` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_webp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_jpg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `meta_keywords` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_tags`
--

INSERT INTO `image_tags` (`id`, `name`, `description`, `slug`, `banner`, `image_png`, `image_webp`, `image_jpg`, `alt`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 'Festival', NULL, 'festival', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-28 17:35:48'),
(2, 'Wallpaper', NULL, 'wallpaper', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-28 17:35:40'),
(3, 'Banner', NULL, 'banner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-28 17:35:56'),
(5, 'Icon', NULL, 'icon', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 23:05:13', '2022-02-25 23:05:13'),
(6, 'Symbol', NULL, 'symbol', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 23:08:26', '2022-02-25 23:08:26'),
(7, 'Holi', NULL, 'holi', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 23:09:45', '2022-02-25 23:09:45'),
(8, 'Indian Festival', NULL, 'indian-festival', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 23:10:01', '2022-02-25 23:10:01'),
(9, 'Free PSD', NULL, 'free-psd', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-26 00:07:35', '2022-02-26 00:07:35'),
(10, 'Happy New Year', NULL, 'happy-new-year', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-26 00:08:19', '2022-02-26 00:08:19'),
(11, 'Happy Birth Day', NULL, 'happy-birth-day', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-26 00:08:44', '2022-02-26 00:08:44'),
(12, 'Color', NULL, 'color', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-26 00:09:11', '2022-02-26 00:09:11'),
(13, 'Colorful Background', NULL, 'colorful-background', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-26 00:09:50', '2022-02-26 00:09:50'),
(14, 'Brush Effect', NULL, 'brush-effect', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-26 00:10:38', '2022-02-26 00:10:38'),
(15, 'Cattle', NULL, 'cattle', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 19:43:44', '2022-03-01 19:43:44'),
(16, 'Mammal', NULL, 'mammal', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 19:44:19', '2022-03-01 19:44:19'),
(17, 'fauna', NULL, 'fauna', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 19:46:12', '2022-03-01 19:46:12'),
(18, 'Wildlife', NULL, 'wildlife', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 19:46:45', '2022-03-01 19:46:45'),
(19, 'Hinduism', NULL, 'hinduism', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 20:07:13', '2022-03-01 20:07:13'),
(20, 'Puja', NULL, 'puja', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 20:07:47', '2022-03-01 20:07:47'),
(21, 'Lord', NULL, 'lord', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 20:29:01', '2022-03-01 20:29:01'),
(22, 'Shivratri', NULL, 'shivratri', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 20:29:49', '2022-03-01 20:29:49'),
(23, 'Maha Shivratri', NULL, 'maha-shivratri', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 20:30:10', '2022-03-01 20:30:10'),
(24, 'Mahakal', NULL, 'mahakal', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 20:30:26', '2022-03-01 20:30:26'),
(25, 'Fitness', NULL, 'fitness', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 18:47:07', '2022-03-02 18:47:07'),
(26, 'Exercise', NULL, 'exercise', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 18:48:04', '2022-03-02 18:48:04'),
(27, 'Health', NULL, 'health', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 18:48:21', '2022-03-02 18:48:21'),
(28, 'Transparent Image', NULL, 'transparent-image', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 18:57:14', '2022-03-02 18:57:14'),
(29, 'Text', NULL, 'text', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 18:57:52', '2022-03-02 18:57:52'),
(30, 'Flag', NULL, 'flag', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 15:08:54', '2022-03-07 15:08:54');

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
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_06_17_181102_create_pages_table', 1),
(6, '2021_06_27_104012_create_admins_table', 1),
(7, '2021_06_28_175730_create_settings_table', 1),
(8, '2021_06_29_172617_create_sliders_table', 1),
(9, '2021_07_01_112206_create_testimonials_table', 1),
(10, '2021_07_01_154328_create_clienteles_table', 1),
(11, '2021_09_23_185815_create_image_categories_table', 1),
(12, '2021_09_23_185836_create_image_tags_table', 1),
(13, '2021_09_24_183011_create_images_table', 1),
(14, '2022_02_25_143403_add_size_format_to_images_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `description`, `slug`, `banner`, `alt`, `parent`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book.', 'about-us', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(2, 'Contact Us', '<p>If you have any questions or suggestions or if you find an error in our site ? Please send us a message, We will try to fix it and if any valid question or suggestion getting from your side we will reply. Although we do not guaranty a response, but we try to respond within 3 to 5 working &nbsp;Days. Please note send me any messege only in english language.</p>', 'contact-us', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-28 16:39:47'),
(3, 'Privacy Policy', '<p><strong>Privacy Policy for PngGuru</strong></p>\r\n\r\n<p>Welcome to pngguru.in, visitor privacy is our main priority. This document describes how we collect our visitor&#39;s data and how we use it. This Privacy Policy applies only to our online activities and is valid for visitors to our website in relation to the information they share and/or collect on PngGuru.</p>\r\n\r\n<p>If you need additional information about our Privacy Policy, feel free to contact us.</p>\r\n\r\n<p><strong>Sign up / Log in</strong></p>\r\n\r\n<p>Whenever you download an image from our website, you are required to signup/login and some information is taken from you like name email password etc. Your user profile information may appear on our web site except for your email and password. PngGuru.in does NOT share or sell personally identifiable data to third parties such as direct marketers. We respect your privacy.</p>\r\n\r\n<p><strong>Web Server Logs</strong></p>\r\n\r\n<p>PngGuru.in collect your Web Server Logs information, database, and other server-software usage and access information. This information may include your internet protocol (IP) address. We only use this information for debugging purposes and for traffic statistics.</p>\r\n\r\n<p><strong>Cookies</strong></p>\r\n\r\n<p>Like any other website, PngGuru uses &#39;cookies&#39;. These cookies are used to store information including visitors&#39; preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users&#39; experience by customizing our web page content based on visitors&#39; browser type and/or other information.</p>\r\n\r\n<p><strong>Third party advertiser</strong></p>\r\n\r\n<p>PngGuru.in serve thrid party ads. Google is one of a third-party advertiser on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL &ndash; https://policies.google.com/technologies/ads</p>\r\n\r\n<p><strong>Children&#39;s Information</strong></p>\r\n\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>', 'privacy-policy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-25 00:40:30'),
(4, 'Terms & Conditions', '<p><strong>Terms and Conditions</strong></p>\r\n\r\n<p>Welcome to PngGuru!</p>\r\n\r\n<p>These terms and conditions outline the rules and regulations for the use of PngGuru&#39;s Website, located at pngguru.in.</p>\r\n\r\n<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use PngGuru if you do not agree to take all of the terms and conditions stated on this page.</p>\r\n\r\n<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: &quot;Client&quot;, &quot;You&quot; and &quot;Your&quot; refers to you, the person log on this website and compliant to the Company&rsquo;s terms and conditions. &quot;The Company&quot;, &quot;Ourselves&quot;, &quot;We&quot;, &quot;Our&quot; and &quot;Us&quot;, refers to our Company. &quot;Party&quot;, &quot;Parties&quot;, or &quot;Us&quot;, refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client&rsquo;s needs in respect of provision of the Company&rsquo;s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>\r\n\r\n<p><strong>Cookies</strong></p>\r\n\r\n<p>We employ the use of cookies. By accessing PngGuru, you agreed to use cookies in agreement with the PngGuru&#39;s Privacy Policy.&nbsp;</p>\r\n\r\n<p>Most interactive websites use cookies to let us retrieve the user&rsquo;s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>\r\n\r\n<p><strong>License</strong></p>\r\n\r\n<p>Unless otherwise stated, PngGuru and/or its licensors own the intellectual property rights for all material on PngGuru. All intellectual property rights are reserved. You may access this from PngGuru for your own personal use subjected to restrictions set in these terms and conditions.</p>\r\n\r\n<p><strong>You must not:</strong></p>\r\n\r\n<p>&nbsp; &nbsp;&nbsp;<br />\r\n&bull; Republish material from PngGuru &nbsp; &nbsp;<br />\r\n&bull; Sell, rent or sub-license material from PngGuru &nbsp; &nbsp;<br />\r\n&bull; Reproduce, duplicate or copy material from PngGuru &nbsp; &nbsp;<br />\r\n&bull; Redistribute content from PngGuru</p>\r\n\r\n<p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the Terms And Conditions Template.</p>\r\n\r\n<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. PngGuru does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of PngGuru,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, PngGuru shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>\r\n\r\n<p>PngGuru reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>\r\n\r\n<p><strong>You warrant and represent that:</strong></p>\r\n\r\n<p>&nbsp; &nbsp;&nbsp;<br />\r\n&bull; You are entitled to post the Comments on our website and have all necessary licenses and consents to do so; &nbsp; &nbsp;<br />\r\n&bull; The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party; &nbsp; &nbsp;<br />\r\n&bull; The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy &nbsp; &nbsp;<br />\r\n&bull; The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</p>\r\n\r\n<p>You hereby grant PngGuru a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>\r\n\r\n<p>Hyperlinking to our Content</p>\r\n\r\n<p><strong>The following organizations may link to our Website without prior written approval:</strong></p>\r\n\r\n<p>&nbsp; &nbsp;&nbsp;<br />\r\n&bull; Government agencies; &nbsp; &nbsp;<br />\r\n&bull; Search engines; &nbsp; &nbsp;<br />\r\n&bull; News organizations; &nbsp; &nbsp;<br />\r\n&bull; Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and &nbsp; &nbsp;<br />\r\n&bull; System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</p>\r\n\r\n<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party&rsquo;s site.</p>\r\n\r\n<p><strong>We may consider and approve other link requests from the following types of organizations:</strong></p>\r\n\r\n<p>&nbsp; &nbsp;&nbsp;<br />\r\n&bull; commonly-known consumer and/or business information sources; &nbsp; &nbsp;<br />\r\n&bull; dot.com community sites; &nbsp; &nbsp;<br />\r\n&bull; associations or other groups representing charities; &nbsp; &nbsp;<br />\r\n&bull; online directory distributors; &nbsp; &nbsp;<br />\r\n&bull; internet portals; &nbsp; &nbsp;<br />\r\n&bull; accounting, law and consulting firms; and &nbsp; &nbsp;<br />\r\n&bull; educational institutions and trade associations.</p>\r\n\r\n<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of PngGuru; and (d) the link is in the context of general resource information.</p>\r\n\r\n<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party&rsquo;s site.</p>\r\n\r\n<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to PngGuru. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>\r\n\r\n<p><strong>Approved organizations may hyperlink to our Website as follows:</strong></p>\r\n\r\n<p>&nbsp; &nbsp;&nbsp;<br />\r\n&bull; By use of our corporate name; or &nbsp; &nbsp;<br />\r\n&bull; By use of the uniform resource locator being linked to; or &nbsp; &nbsp;<br />\r\n&bull; By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party&rsquo;s site.</p>\r\n\r\n<p>No use of PngGuru&#39;s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>\r\n\r\n<p>iFrames</p>\r\n\r\n<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>\r\n\r\n<p>Content Liability</p>\r\n\r\n<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>\r\n\r\n<p><strong>Your Privacy</strong></p>\r\n\r\n<p>Please read Privacy Policy</p>\r\n\r\n<p>Reservation of Rights</p>\r\n\r\n<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it&rsquo;s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>\r\n\r\n<p><strong>Removal of links from our website</strong></p>\r\n\r\n<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>\r\n\r\n<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>\r\n\r\n<p><strong>Disclaimer</strong></p>\r\n\r\n<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>\r\n\r\n<p>&nbsp; &nbsp;&nbsp;<br />\r\n&bull; limit or exclude our or your liability for death or personal injury; &nbsp; &nbsp;<br />\r\n&bull; limit or exclude our or your liability for fraud or fraudulent misrepresentation; &nbsp; &nbsp;<br />\r\n&bull; limit any of our or your liabilities in any way that is not permitted under applicable law; or &nbsp; &nbsp;<br />\r\n&bull; exclude any of our or your liabilities that may not be excluded under applicable law.</p>\r\n\r\n<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>\r\n\r\n<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>', 'terms-conditions', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-25 14:12:15'),
(5, 'DMCA', 'If we have added some content that belong to you or your organization by mistake, we are sorry for that. we apologize for that and assure you that this won\'t be repeated in future. if you are rightful owner of the content used in our website, please contact through the my Contact Us page. please mention All the detail like Your Name, Organazation name, Contact Details, copyright infringing link and copyright proof (Link Or legal Document).\n\nI assure you that if All Detail are right which is provided from your side. We will remove the infringing content from pngguru.in with in 3 to 5 working days.', 'dmca', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`) VALUES
(2, 'kumarroshan001@gmail.com', '$2y$10$dIN7Z6RJlqG7fVNpS4KiMOaUBCFIpP8tyf8axVeQfP/hzBXUFkevC', '2022-03-05 14:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'PngGuru : Free Png Images, Stock Background and Photos and Psd Templates.', '2022-02-23 23:12:16', '2022-03-05 21:12:27'),
(2, 'site_title', 'PngGuru : Free Png Images, Stock Background and Photos and Psd Templates.', '2022-02-23 23:12:16', '2022-03-07 14:01:02'),
(3, 'default_email_address', 'pngguru.in@gmail.com', '2022-02-23 23:12:16', '2022-02-28 19:31:00'),
(4, 'default_phone', '7636438783723', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(5, 'default_address', 'B-12 New Ashok Nagar', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(6, 'email', 'admin2@admin.com', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(7, 'phone', '22222222222', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(8, 'address', 'B-1222 New Ashok Nagar', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(9, 'map', NULL, '2022-02-23 23:12:16', '2022-02-28 19:31:00'),
(10, 'currency_code', 'INR', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(11, 'currency_symbol', '₹', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(12, 'site_logo', '', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(13, 'site_favicon', 'img/56JuOvPArMsHh9clrqevf4GAw.png', '2022-02-23 23:12:16', '2022-02-26 20:22:52'),
(14, 'footer_copyright_text', 'Copyright © 2021-2022 Png Guru. All rights reserved.', '2022-02-23 23:12:16', '2022-03-05 14:41:50'),
(15, 'footer_about_text', '<p>Welcome to PngGuru.in ! Png Guru provides you the Biggest Collection &amp; High Quality of PNG Images around the world. Check-out the different Categories of PNG Images and Free to Download Unlimited.</p>', '2022-02-23 23:12:16', '2022-02-27 18:29:33'),
(16, 'seo_meta_title', 'PngGuru', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(17, 'seo_meta_keywords', 'PngGuru,Image,PNG.', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(18, 'seo_meta_description', 'PngGuru Provides different categories of Png images, background images, Psd Template and much more. You can Download it Free no Attribution required.', '2022-02-23 23:12:16', '2022-02-27 18:29:33'),
(19, 'social_facebook', 'https://www.facebook.com/PngGuru.in', '2022-02-23 23:12:16', '2022-02-25 18:20:09'),
(20, 'social_twitter', 'https://twitter.com/PngGuru', '2022-02-23 23:12:16', '2022-02-25 18:20:09'),
(21, 'social_instagram', 'https://www.facebook.com/PngGuru.in', '2022-02-23 23:12:16', '2022-02-25 18:21:19'),
(22, 'social_linkedin', 'https://www.facebook.com/PngGuru.in', '2022-02-23 23:12:16', '2022-02-25 18:21:19'),
(23, 'social_pintrest', 'https://in.pinterest.com/pngguru/_created/', '2022-02-23 23:12:16', '2022-02-25 18:20:09'),
(24, 'social_youtube', 'https://mycodingsolution.com/', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(25, 'ads_script_first', '<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3706041156290071\"\r\n     crossorigin=\"anonymous\"></script>\r\n<!-- Data post png -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-3706041156290071\"\r\n     data-ad-slot=\"4808245335\"\r\n     data-ad-format=\"auto\"\r\n     data-full-width-responsive=\"true\"></ins>\r\n<script>\r\n     (adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>', '2022-02-23 23:12:16', '2022-03-05 14:56:33'),
(26, 'ads_script_second', '<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3706041156290071\"\r\n     crossorigin=\"anonymous\"></script>\r\n<!-- Data post png -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-3706041156290071\"\r\n     data-ad-slot=\"4808245335\"\r\n     data-ad-format=\"auto\"\r\n     data-full-width-responsive=\"true\"></ins>\r\n<script>\r\n     (adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>', '2022-02-23 23:12:16', '2022-03-05 19:05:00'),
(27, 'ads_script_third', '<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3706041156290071\"\r\n     crossorigin=\"anonymous\"></script>\r\n<!-- Data post png -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-3706041156290071\"\r\n     data-ad-slot=\"4808245335\"\r\n     data-ad-format=\"auto\"\r\n     data-full-width-responsive=\"true\"></ins>\r\n<script>\r\n     (adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>', '2022-02-23 23:12:16', '2022-03-05 19:07:31'),
(28, 'ads_script_fourth', '<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3706041156290071\"\r\n     crossorigin=\"anonymous\"></script>\r\n<!-- Data post png -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-3706041156290071\"\r\n     data-ad-slot=\"4808245335\"\r\n     data-ad-format=\"auto\"\r\n     data-full-width-responsive=\"true\"></ins>\r\n<script>\r\n     (adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>', '2022-02-23 23:12:16', '2022-02-25 12:38:42'),
(29, 'ads_script_fifth', '<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3706041156290071\"\r\n     crossorigin=\"anonymous\"></script>\r\n<!-- Data post png -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-3706041156290071\"\r\n     data-ad-slot=\"4808245335\"\r\n     data-ad-format=\"auto\"\r\n     data-full-width-responsive=\"true\"></ins>\r\n<script>\r\n     (adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>', '2022-02-23 23:12:16', '2022-02-25 12:38:42'),
(30, 'google_analytics', '<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3706041156290071\"\r\n     crossorigin=\"anonymous\"></script>\r\n\r\n<!-- Global site tag (gtag.js) - Google Analytics -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-R8QXDYN0HP\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'G-R8QXDYN0HP\');\r\n</script>', '2022-02-23 23:12:16', '2022-03-07 15:00:09'),
(31, 'facebook_pixels', NULL, '2022-02-23 23:12:16', '2022-02-25 00:45:30'),
(32, 'stripe_payment_method', '', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(33, 'stripe_key', '', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(34, 'stripe_secret_key', '', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(35, 'paypal_payment_method', '', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(36, 'paypal_client_id', '', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(37, 'paypal_secret_id', '', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(38, 'smtp_method', '1', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(39, 'smtp_host', 'host.mycodingsolution.com', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(40, 'smtp_user', 'smtp@mycodingsolution.com', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(41, 'smtp_password', 'admin@1234', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(42, 'smtp_port', '465', '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(43, 'smtp_type', 'SSL', '2022-02-23 23:12:16', '2022-02-23 23:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_first` longtext COLLATE utf8mb4_unicode_ci,
  `heading_second` longtext COLLATE utf8mb4_unicode_ci,
  `heading_third` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_lable` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `heading_first`, `heading_second`, `heading_third`, `image`, `alt`, `link`, `link_lable`, `created_at`, `updated_at`) VALUES
(1, 'Slider 1', 'free PNG stock images', 'Explore and download free stock PNG and Background images', NULL, 'Slider 1.jpg', NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-25 12:53:25'),
(2, 'Slider 2', 'Slider Second', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` longtext COLLATE utf8mb4_unicode_ci,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `comment`, `image`, `alt`, `created_at`, `updated_at`) VALUES
(1, 'Patricia Barrows', 'Extraction Worker, Koch Inc', 'Beatae et voluptates sit. Libero deserunt rerum nulla. Corporis id recusandae sequi qui quibusdam.', NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(2, 'Orlo Schaefer', 'Farm Labor Contractor, Parisian Inc', 'Soluta et qui a nobis. Rem non cupiditate voluptas natus numquam odit dolores ea. Natus at ut ut cumque provident voluptatibus. Iste saepe perspiciatis nihil dolore cum quis quia corrupti.', NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16'),
(3, 'Sarah Moen', 'Physician Assistant, Jerde, Franecki and Wyman', 'Rerum earum vel qui aspernatur. Autem alias minus quisquam repellendus ut ut quia. Necessitatibus est voluptatum qui quo reprehenderit. Libero voluptatem et dolores deleniti est.', NULL, NULL, '2022-02-23 23:12:16', '2022-02-23 23:12:16');

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
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_token` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `city`, `state`, `country`, `zipcode`, `profile`, `avatar`, `provider`, `provider_id`, `access_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yash', 'yashvir.ezrankings01@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJz-cJjbn7DIGdobNa596Ywu1OfgHHBjKElzvHnq=s96-c', 'google', '109910637767310618783', 'ya29.A0ARrdaM8i9G23qRNCTqx3wTB77Pn9lJfLPLV4KR0Tenla0ibrGO6ZRMhjhhx7yLov6W9eyUndteOsWcGGB1xfLp6uNgYjW881dwfZKXki85lqUSSyODgUkbvGiqsxJSo_xj5dZQqlLh4uinu6syrFFKDTtSDZPQ', 'o379tzLwivpAsHHNN1R17YRPUnkEznLrI7bxKjxxmpj0AmzTI0GVoyIjNGA6', '2022-02-24 22:12:04', '2022-02-28 18:51:41'),
(2, 'KREATIF MANDIRI 4.0', 'lasimantf20@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GhvheWrAIJ8joNlNBp16rMz-5IX9dPZ9HzA129Waw=s96-c', 'google', '107995853736818333061', 'ya29.A0ARrdaM-l1NsanDxyQ9Fj5JQmdLrpAoP0O8nq3swwYyN8Ae1dwH6IaA8ntiViYy3CHgJBMvHcsN6_EDVWQ7ZsStQ-EqMton6hhia6PbvAP4Gl-QiqMVmWhP71QaHP-9Zk0mmGf4ZFq6XwqksASZvnJ_97wca_', 'R4ptByjVHRf9Loblpq1pIpJvrzNAFIAc5BtmGYychAxSkrsqyFrmjV9HWHBU', '2022-02-25 18:55:31', '2022-02-25 18:55:31'),
(3, 'Jubair Tanvir', 'jubairtanvir001@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GjL6HRACPDRYfO1SCZMmQIXGG0O9sm3AJ8ehfJj=s96-c', 'google', '109115739426613516663', 'ya29.A0ARrdaM-ZhddLd_tzjEM0m2L8tKReEcf-hi_xQ4av4VCnFa8Nk0y6-3iuYAe1-QKfyy0ojB6EbWPm1f-09fzWykmPWOKwQ2b9Lu7K7WyEwQEjowtIomWaV1pjNvvvdxZQv3VhqUDV5anPXQSx1suPU85D9fmj', 'vdlDlepdtjTBz554YNhoZK5mSRWfuvJehErYRK8yi7sIlcBslUfFdsaMn65u', '2022-02-25 22:17:59', '2022-02-25 22:17:59'),
(4, 'Test', 'admin@mycodingsolution.com', NULL, '$2y$10$RWb.ctactfICGx9VEYzc6uLmAxxW3MGQMVKK0EkBBuHvHJIKvmhxG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://graph.facebook.com/v3.3/151923720563974/picture?type=normal', 'facebook', '151923720563974', 'EAAGLWBblHpQBAHhgkmUJu6ZAvampMnOVgb4Ki4eSx45CPeaZA2nSUtPhqbzGZA2R7QGfWFqNAKJbwUCn0OrS6ZBpeFLHxzaPQYFDxtBYbKXT5TKqMkbVnFRA6MZAkEAs1o8iTB6FnVno4V5eulGI1d1FGnY3ZCpn3bsA3M6GqEjBHMkshSy0ChCIWDOEe1qNZB9pZCWquI0IZCEMf3hUxxBUoB81XxTkD3ATZBZArgBIih1KwZDZD', 'Ued45DIsfgaW2OQquFeZ0TuRuNplczycCvvDLm0q2XRyiPhp5gnJHmvtqjCS', '2022-02-26 03:29:32', '2022-03-06 01:41:53'),
(5, 'GWAR BEM', 'gbem5682@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJxfORn-le5WhhlPbgyoktrDK7hVyYylUoMT8QMw=s96-c', 'google', '105862913060625417528', 'ya29.A0ARrdaM976z8Zv7wlk-3YHPawyZECrn2e1mQn8mwNOUGjXIexKhq0pVNmwbM2nsJZislQgVPhC7ryG5aIw-7mMB3686KOql4mZGet6Z_fhAVVrkyS5UR_5osemroZsIjAgvokxTAq5r9WQZ9FsbMiSAKoEt08', 'iyjoErV9HHCNpewfURX6A5wvPxP5NMJ0urcnAECfmmA3vY2BPr0GqgchaNkg', '2022-02-26 07:45:02', '2022-02-26 07:45:02'),
(6, 'sumber dekorasi', 'sumberdekorasi88@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJx3MR3t9DHHpqPP5yNa1MXfQ8_6_yO4EXu9c-1L=s96-c', 'google', '113977143005222714235', 'ya29.A0ARrdaM-c9e7BCSAXetk8GCRvTvdjBd5Fhi3NZ0PGo8WtnE7SWpZJIzYmDWDzSsSwfbwQOJJupNY181-yYUNIZWZQGRYVshLL6MwCGpED4GEiQpzBGyDpbnjtNTZI0EXDa72elTQy8HuxmuEVrbhoAdd7i55L', 'I3AN8Mt8RZgIiNdqtlSQqXb06A9GiK4DvCj24OimN3jTqDE1uV3waDwvNt4Y', '2022-02-27 08:59:52', '2022-02-27 08:59:52'),
(7, 'Prince gupta', 'rinkugupta9070ggc@gmail.com', NULL, '$2y$10$OEWIdd2.k2e/P0lo2E5ChuBMoBnu3p5cMWV58NQmjE5UMi5UbwEQC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-27 20:30:57', '2022-02-27 20:30:57'),
(8, 'Smruti Mohanty', 'smrutimohanty092@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJzpuptI-RzPvdTzt12XD_zf5E0s0jBBGrjg0rm3=s96-c', 'google', '114293622454939235607', 'ya29.A0ARrdaM85TaF8sHXFilu_sdD6pkgYk5bzjveYsriXFiP_oClo60KaWa0xWuVUUaD1SrZAxVVR9MIIiHpjsCVTDgdIgssg6hJ83lKxO-8gJmtTcXRC4LGlrtpn3HQBzI0bxbd_3YgiJTE2RsDSwczy5OMvRAmZ', 'f2ZtExgWtemLmwfw4mfjPptLR0LpZcTKH76BVtXL18vF1YH62CO05Rjn3scU', '2022-02-28 02:21:07', '2022-02-28 02:21:07'),
(9, 'Varun Bisht', '9varun10@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14Ghi_ufUmWTr10gIWqYllxFJdKnEuy3Mvxc_vq72nQ=s96-c', 'google', '116177132046316122138', 'ya29.A0ARrdaM_xbPC7wiJyglX_RHJQiMgNG_9nvG3qhqzKrF-yD7tpSlzyltzjdSfmkgHd8ry8pckZr4lHklLstIJ1vVXJpMEmGrMciPHCp0qbIyP0e7z7PO5OQSAt7gsd3ecOzr-OuLHegPtRfvcXvGL-MncYPY7G', 'T273a1xGtDF1BGL9a5r9Og3yI0EMCHRAjtdIfLIonQrU4HoaWGWtOGt5HZ48', '2022-02-28 12:06:31', '2022-02-28 12:06:31'),
(10, 'Roshan Kumar', 'kumarroshan001@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GiAGiIwpxmOLDNmWqmcBqiSKAme4fAzInSCj25JQA=s96-c', 'google', '106200436695812141617', 'ya29.A0ARrdaM-FPtkelfPKT1ci0UjOZ05VlrXz2y2K8WD6LKLnpHdjRODAtW_QWuWDtBTMYl6hrn0K9IIHsw_kzhmC6oIKj_xa-OA_-K6d5yOhP53rVAyxvatdT_BnEcHvwIplezZKpr0xu5HGHxKaCEXSZ1zy0vHi9A', 'jCIhwrZAANgT8ZJu001aTnQ6iqpJnEXQ4E42H4C2XD7qCXVdVBvctSEq6hId', '2022-02-28 14:17:25', '2022-03-08 21:21:39'),
(11, 'Adegbemijo David', 'davidadegbemijo@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJy3ALl_Fy2XbhlW4yJAW7b6NQ1remEiJRg9OJQg=s96-c', 'google', '111999720785946940403', 'ya29.A0ARrdaM_5eMZ_lINYhAxcuNfHHKDijBi5eaN9005PEoxDrHUPFs-1f7LB1Nwlj_9nbE66lnMnouOGNuH51ksWSju3v9DPNABjrBzog1smWfv1a2TGgA7cnS1Ki6jeLgR4peXK3F-GOBl0uH8fOqmb4oXYIb8I', 'z3JONEvz6KC6aRDTgsoeclAMgBYZyQOF6YQj0lu0Rzia0EPDgnrX89yftF1Y', '2022-02-28 14:39:01', '2022-02-28 14:39:01'),
(12, 'Medimarx Design', 'medimarxdesign@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJyv-lwZ35vZloDnd66JY1YR_I61Yy3oMdStqDpi=s96-c', 'google', '118085516163526524346', 'ya29.A0ARrdaM9wAhM-NP8GbdlTY9rclyXCagzl2df1MkGFjCaNyWm177Lrai3OymGTL1jgn_iy-DvpTI6voAT13YqeqlUgQ_EmbkPdO4sSVrr9rp2ohfzo65vBy1AmitiSRSmD7R29PE1w43SJbYixjV5FCst489I5', 'wJzrxVU0lNMiL80ba1DmS6JWTvMTpT6QtgnroG9l45xD7E55LPk8P8Zqg1iC', '2022-02-28 17:38:12', '2022-02-28 17:38:12'),
(13, 'Nitin Kumar', 'nknitin1929@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GgqU1bkCn4VdLIXLEa9Kl_FfdwUqkOlyNSabsFERg=s96-c', 'google', '104416900585639539862', 'ya29.A0ARrdaM93zs7AkH31wVMcFpJ1diZgTxP_h4lCdP8dXH7dU8pVwk7GYwLJ9KQmX0ouYhnllM5Q-ga4R1aG5RZPNWIqKp7zLSUTcSl6SVoMmORgwzPZGm52q_GMZLPZZpfFMEXJSb_pM3YxPPO-726VC2c7edXc', 'lBDsykTQW6XVbjkX6ibn9Oml3B32KeTJkuAMqwLuUhO4lkCD1zGaOu6qHPJg', '2022-02-28 17:59:16', '2022-02-28 17:59:16'),
(15, 'kishor fulara', 'kishor.fulara9@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GgTfeBtsOmGAVt_XQvOYcKPsoo9i7qFiXyIN3ey=s96-c', 'google', '105393472494742617733', 'ya29.A0ARrdaM-rOt0RfdAhVYUZZ6YRyMyGePVUpOr7mc3vWYl0p_W_5Obd0MIUn4LvC_C4MfSxHQRzc3S0eeJuBKADfV3YJSanO3J7n1JGoOCu0u14Cj5addYpc9-nrP7HkzvbuOoV9xF1Qrt5hg9bdt8GrEm3GnBM', 'ipB7GFjWnbpxgXvYvOTE3YEY7wvVgWvFSSOtpsMn07zO74dvfW35X2bEEhEh', '2022-02-28 20:00:23', '2022-02-28 20:00:23'),
(16, 'Blue Beast HD', 'mkasali45@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GigvJaGnrAV09ptoMKLwtvnchTcEaIl0gBelloBgA=s96-c', 'google', '106697073482969086209', 'ya29.A0ARrdaM9zp4cP-WkEc_lIYWG8ofkQOYL28rQ4BdK_QQeQ1rzqckU3nTUxWQSZVpEwqrECireN_0UKU7_Alej9OyLO-LlogGwsFK4Qg27TzN6Yktkjc6yY651c9h0W7HK9gfboyyCawX8ANPY3h-UnNPU8OD7J', 'nLsX8D5R5yewtyMRrMM1QUVVVQoiRteQmy12NA8iRzE6YNJ3iCL8l1aqUcHr', '2022-02-28 23:47:38', '2022-02-28 23:47:38'),
(17, 'Kanchan Pandey', 'kanchanblogger@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GjK-53uPGk8aZMRGNCjLdb3LEDdev9ipHIZ0VqF=s96-c', 'google', '100727790152742469147', 'ya29.A0ARrdaM8hHw4b2ZnLtZsygo3_6vFyfNxlxOCEWcBzxOZwwO8UtE27X85MPTR7K4K_9j9LaqUgKaY7QSbxB1ICt43KO_XuW1rYTol2fpGK5ASm4b7bumyzviapNBpPYpAQRBNbtxp23eZSwLZvRSHZdbSm4x5U', 'VSpHnDIm4cELEBwerxZR2fZyNVRuIXfCx2N6WdEvCM0MueKFpkIcpf2rumXp', '2022-03-01 00:16:45', '2022-03-01 00:16:45'),
(18, 'SUNNY HATHGEN LOVE RJ', 'sunnyhathgenloverj@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GiDTr_fUm8i25IQrjZu1VnQrBjsUGj1ihB6mmpjbg=s96-c', 'google', '104237667660782009283', 'ya29.A0ARrdaM9tBcz-4H62MtR1-EqXNrVTeQ-Z8f81cszTOXMpNm4I1RahN_dvr980vlqyvDV_gbZlh2qBzbg6KaL-rzCwU5RwE92oKB10GYfyNtfD65BW6N_A9u3V-rgCYzuWHZRhznIXvPcMTJL2QXb-x7LPRZj8', 'yLNDEBfDY96xnGkh04DCUWUPFuAGmRbQ2Z2p4tqvmCRUkqZdpH9hchfGP3LA', '2022-03-01 01:34:24', '2022-03-01 01:34:24'),
(19, 'Sweet Princess', 'sweet26p@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJxcmbLT1qOz5G-jVBomJLSNtkzNVAgA_xeo7sLb=s96-c', 'google', '115600073748061321293', 'ya29.A0ARrdaM_oRIIb3ismKsjeM5aJJax2tbugO5ufJhdz9Tdwr2DpJYJNbKaa5VcC0YmW5GBxG3Mary65h-vWOGV2mfwHyNCbxv4lAkbL-ZIs4M8Sj5U1w_f5Xq0tmza9MnOr98SB3ldS6l9A8bJzKKgjZNEoCFzz', 'FOktjfIVGmsS0XR2vBIlv2T1nptZXzObiqMxVTFWAPJkA8bx5N8lYewqOFar', '2022-03-01 10:46:20', '2022-03-01 10:46:20'),
(20, 'Abdul Razak Shaikh', 'abdulrazak3107@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJxThaTzQ84wWnzfX9tI7niduChLDvVscGbUa8z2=s96-c', 'google', '100116802888439671708', 'ya29.A0ARrdaM_5ZvQu_FtUnL_FGK8_E3B8YqbByS4_ZF1s6eNhF5ObecOZ_V9B6Ct3RMhoJKly9vDvFW9gnhdHtmP3poJcUtwXG07EAFiCCRbl3nTDqv5kXjWTTbNbPCPWILzNca3GTLd899EhDbqIO4uUx1ZDjgUv', 'DDhyoVzKANZ7oNef9PpSluEjd3N4tpLOPgeTQQXL8fvjdwJVtc6OMAdm2nnL', '2022-03-01 11:48:38', '2022-03-01 11:48:38'),
(21, 'Deepak mrdigito', 'deepak.mrdigito@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJz1c-kYn4mTcqAcVqxIJzpArtdCKOHoiaD5T_vA=s96-c', 'google', '115208082387008280439', 'ya29.A0ARrdaM9YQe3hWlGnPkIlYp7sXdYzp7yAOhgC1uwpSsIN1_-SZM42Cgwe8RQZkjO7HgGj-5eHSeQoRSkijE3OhC2y0e25YGxOanqXE4mlWyYrR4Zo2vb5gXUug99uRBkLPulS7nl4fI6NscitAM7_h6J5Yni2', 'Of9wVhmO0worR1LgpuptmX0uwy8kZS2WoxUs0JEFUv0SCtqhiI98ROygb51r', '2022-03-01 12:04:20', '2022-03-01 12:04:20'),
(22, 'Neeraj Jangra', 'neerajjangra312000@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJz66T_V0anN9RudR2y2cqk5hiiXE4mQF9QnDe18=s96-c', 'google', '109090342324587422127', 'ya29.A0ARrdaM9wOcve3bZxJHlQHqp5AZ_QatfZBxW4cYDLdbg3nlCTH5Lfgc162ZTsHaAjudSAZKv5uYdwn9c12vzoSF0o7Xgaz10K0wuxrVqkdOjUxIFco98YBzyP_QidlIOahkAXQhx1Vx3VM-KKnNldAKk313c5', 'pZRJHsXkRuqKvqXbJq6Y87m4lUX7QFgNh3nMJtnHkA1uSQgyPh9a2uOv6e38', '2022-03-01 14:41:45', '2022-03-01 14:41:45'),
(23, 'Khemraj Barwar', 'khemrajbarwar0@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJx49aqeACtYP6gFElOrLCkPdUGg7iSGZfj6-zPg=s96-c', 'google', '107808182623500630041', 'ya29.A0ARrdaM8tmpPPeytH-GB_BgIld1vPJQpIfmoKggiCL6WXjohHlsgGHTljUJX4Ui4qVgCpaBt5BJf4KKMvqiSiNekeKREOrNJnaDDNKeQSh21CUOFA_SC3ntLWJOg-jFd0rYkkWFGzt0AQxB-oq4qasUzC4PMM', 'XrucvPNqcQHVtHIopxrqLzvyeJfIDL65cUoyzwVY5oH8Rvj7OFn8mnLLe0Lu', '2022-03-01 15:10:47', '2022-03-01 15:10:47'),
(24, 'EDITOR ROSHAN', 'editorroshan91@gmail.com', NULL, '$2y$10$ee/7jsOPzplcxC1FdmNBNeNatuuEIbPOGWC2UpRDU2DqN2uXV4Es6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GimLS7-HL1bkOsiW_4qmyIyDjy8cqyFKV8Z3pFf6w=s96-c', 'google', '103847234072183838476', 'ya29.A0ARrdaM_ATjCSkfyXhEVhBwxHLMWSPtnPPBF_foaDPOdAIqgbdg-FlHIfRLjAHhNw3z2BmjE8IjamiC0SxqKLcfZxHR0UhLzoWH7pcOPpNd293JlATVgeMXPlRDgYndaIyc4Yz5PFk0jlLQgDGHOFibIlh2zI5A', 'SbURR52btH2WdxtW2am7sBmSvmglyh9w1d2BUCwNlcffdZskXkxCZOq06Ybi', '2022-03-01 17:07:37', '2022-03-08 21:20:04'),
(25, 'Raj thakur', 'radiodindori@gmail.com', NULL, '$2y$10$ARa0PVRawHWM4Y/NFo0s4.TJkJuljqB9Yc0kJIK2dcCxjcNgXg3/u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 11:23:23', '2022-03-02 11:23:23'),
(26, 'Nurullah Özçelik', 'nurullahozcelik@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14Gi8h13zVCKKbdd9FtVFbx29qBf_md9kLe1vJ7NxA-I=s96-c', 'google', '108195085285600346348', 'ya29.A0ARrdaM_e1VY3nD2lvEyDEm92zPEZuKp6NpN81-v2D0v0prr-1I2AzsuoTzCEzrU7dGR7o6JZ_8avoj8bUOW59A4nqZcDquc8C1-kSSTHIWgHR93Pz2KEKYL01XQ3Wc6u-zVAlMla4kZCRisPWkU4Vu-6UbLw', '2aJuoU9GLusQ8KBWOsDkYEBlvNYDVVtCZbXRGJoIngG9WFASJGYRFMMvy3CJ', '2022-03-02 16:19:28', '2022-03-02 16:19:28'),
(27, 'Renee Taylor-Poeltl', '348571563@gapps.yrdsb.ca', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJy6wrhWstUyFc0w6Mpn8bYq99E18YoDlLQ7--9K=s96-c', 'google', '106534383876551963703', 'ya29.A0ARrdaM9fgoyEbFjxmHc2lZ7HSMW2dOJCyp3tz3GJQlssUBBV7z7JefY5TtYUY64f2CQZAl8Dt71_MpyVHTBV2qOn_8Z_otrL5s1uHt8ijaHeqzyxJGfSZxuT6FcKPt0vGHJ0zEfE0qVJUMrZDcrdd4KFs6xY', 'FyUz84FKWoOio63RQ6p28gh06QEwBded7ZvovyJHdhjzPjYs9bAVSntUtb0J', '2022-03-02 20:37:14', '2022-03-02 20:37:14'),
(28, 'Daniela Surmann Wan', 'dsurwan@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GhoNCtagNCb5eEZ7jyUfyg8DwPTJz_ZyYjGPzoilA=s96-c', 'google', '105350256295415613785', 'ya29.A0ARrdaM_U3baTKdci8gy0kWrlW-NgvJLP2kEszzuxGMShHAnwkHPoQDJ0MJen6BkvkXmSc-dpurwBySy7pZLw0GnZEKka9AmOe760gfKBoYZyFJxTSK6KyoUnwx47X-XwEJUIA3VfZe2kq1xoKqEJLoma0TAR', 'SNSxg8E5ba1SdYiqnKSmuarBcnI6IALsvTwgQJ8rL1ZUnfxxrbUBk3AGfCi8', '2022-03-03 05:58:55', '2022-03-03 05:58:55'),
(29, 'Paulo Gomes', 'pacggomes@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14Ghm90fEfPW_J7YEfLrsxucS69kJEA6kNfznyRHhSg=s96-c', 'google', '117021480300559244617', 'ya29.A0ARrdaM8Pk4WAeCZ4zbJpmYZH0JWYcYmYhnTzPZKK-1FPKBomstp35nHKuRk4nCIdBnTB6R9Wu-iHwbmgCQv2_CSWq3Jk9ZBgx8ypq9S6nEU2ph34MHD04imTUqDk1_htyGI8PjwVz2LQPtvFjVfcUK0Cw_jE', 'WgQX6wZ8dd9esP7OCsxJVyqpaNSV4pWwz2dX4avKgotGFFyehQL4r58LstON', '2022-03-03 20:02:51', '2022-03-03 20:02:51'),
(30, 'Alia Babu', 'aliababu2011@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GijApqQ9TWytRGSzHeQVqN-oH4RWwteIlojXRZYdQ=s96-c', 'google', '100940233334918291922', 'ya29.A0ARrdaM9pLFE9cUu-6KCcPYP4zlOFziQnqXGv6lAn0i_HDSuAkps_ctvzXD8gzT524580k6VC-ToGcvY6PcoXo_KhCczIWjbrzBG7O0LWgTTbRmI-5kNGDiT5MN-qskMsL5JuaomSUlmlSdXTSPPKLFo34m9N', 'JtKK3tkxEP1w1XXq1mJRb2xWdn7FGnJcw2zbnbwABaPw5Dy58266wqjyprzN', '2022-03-03 22:07:22', '2022-03-03 22:07:22'),
(31, 'Ana Francisca Rocha Araújo', 'anafrancisca351943@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJzXmPtfVrl79KvgsOvtPRMWKJJiNzbVEJ0zwjV1=s96-c', 'google', '101148116837672496391', 'ya29.A0ARrdaM9lBezhGWXHLstE5SAgnWGtNH0plaY0bAbezOHfZ3g4Wf8WHsvvCicZbh4l-DlDyclI_wt_MBaUYnrenqEWpnDYXPyb7srPtpZXhp83yL15NRpKJVtMoB1eZ3OoVdN_SqLnw6fGlyhkgMOTsc03PVwU', '3YZIEoCji5Le3Hlch7Tk4c9Dq1giOlQimddEt14hiqpwVUv8RGtLVHdC6FCR', '2022-03-04 14:22:44', '2022-03-04 14:22:44'),
(32, 'Vincy krishnan Vincy krishnan', 'vibishakrishnan928@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJzvaxZ7o29WelYWPrdOns78jcguk6Zx5FCW_9yc=s96-c', 'google', '101730703726861119132', 'ya29.A0ARrdaM8AAsAzwGhhZDnqh36wuY_hNNonUcdXkvmbVo7s3wN40UigzTEsLRyRn6Xsj90Q02CXfMZ7PM6I-lGLjQUireiepkAXx69ZW0ees4zD9-sGGfsV6qzoxgdoKbnzGTf1AlL-qCpQWPJyBmykZ_4qH9qH', '0bd3jHQeUuwSKnD3vKNoLs8GXHBqLBX66uiDNppl7m22hP9PAQSgKt5z0ED5', '2022-03-04 16:00:07', '2022-03-04 16:00:07'),
(33, 'Tips Tricks', 'tipsbd888@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GjD2mOsW_hi7BY8zoA-VkomPZg86mCiBlM9V-aW=s96-c', 'google', '101571328305052348898', 'ya29.A0ARrdaM-mZFE9D9Mpj5ryzqozpyQj3cVJXrUcb2sRiYUOj2lTDcYLIBZbaDwZ7zYjJWdR6MGrts7FqiXRtV25nJXg_VYlv3Mcz9B0F1gBF7XTzs-GG1udBV047x0TK9I_9y0_MyS_G3ZDqPvp9vE5cXGw_lfe', 'ss7Sp4wZ5lZAqnH3LfDMgLHikTRtboTeYowkfBbiMIJoOcRgkMJaXQoTwOSE', '2022-03-05 13:57:19', '2022-03-05 13:57:19'),
(34, 'Successhub', 'fehintola0000@gmail.com', NULL, '$2y$10$ng6xCe7CU1V6u3EgGKRcUe3hgb9w6uu94snA0WVyezSmf5JVnaFhK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 18:49:40', '2022-03-05 18:49:40'),
(35, 'Mishra Sharad', 'neomultimedian@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://graph.facebook.com/v3.3/10227902597900347/picture?type=normal', 'facebook', '10227902597900347', 'EAAGLWBblHpQBACU1iwfcOAZCkuGCFllCG5GLCBLUJqLc45FSMjns7xZBUpFAje3oB2a2fbuS7Mg1CdyxpSA8WGIUtgZCZCGONDOc5QgNBZCGb5km0UPCCOEqxU9XBaW1c0bXZBTPGdJDDF0LNuNavHyrGI16esks8ZCXKZCblUScTJizhD9CjfZADZBGZBMmksN2UvkcvFwGVyWTCgI2F4i3gRUofmsnKzMT3f9mCUAHKLZAFXJ1tfXCjYTP', 'NcGfWQzrrMeCs4scbYT15m89ZG9ySRsfoTbJblcmq1tCcdGLdZMNCRmiVZLS', '2022-03-05 19:36:35', '2022-03-05 19:36:35'),
(36, 'Samyak Sankalp', '16samyaksankalp@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://graph.facebook.com/v3.3/4843998152304715/picture?type=normal', 'facebook', '4843998152304715', 'EAAGLWBblHpQBAOnKRlVoUUz7ZBkrkqSBIEhzEjpD4pY8nsPtzMKlcUlZCwdZBZAdfbQQQyDTVVmy8rAuqCTCjzXllJF3wFgTzhXLvjHAqKDgQiEuUm3Y5LfoZBnjAjZBk0qOye3S4zzX8xmiy0WAgMrNZA29E6xkdxzsKdOZCQPRtaVWqxd0lEepy9XnOtrd7o6BkKZA0n3jtb8ZBEPjuCmHC1EbePKKQe0GD7fEpaArZBo3wZDZD', 'J6KzuQ5lAo3sxBKUiaobI7sPYJhW209yUCRVyt6tgNXDcFkSDSU1VKxQQnQC', '2022-03-06 00:10:46', '2022-03-06 00:13:38'),
(37, 'sijo joseph', 'sijojoseph80@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJyPrmxDzQ6WztGB2RpPKcGSC55UqclXfBSAr6s=s96-c', 'google', '105298043516934787816', 'ya29.A0ARrdaM-ryOUSRfepYr9W7W03cNFDUp-zWg9GeDuoBnFOyyKX9uufPuvsXQlvlMZlGZI_8OKTsyFieXLgfe4Mn6Z0mdphmYS-uqt--svAF_fJ8or46e-jU3fnu65SunhMkDN4BjRvYjj7t1cgDfYGi7p_gFYP', 'mB4uDy1RJt9Nwv7vgNuyr0DusISZ6183UhqW1wH7BM5FUueg0yCSJwdVl1Qf', '2022-03-06 15:04:52', '2022-03-06 15:04:52'),
(38, 'ritu kashyap', 'ritu08071994@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJxCsx_y2vo0z6UViQ0z7eqd9OLt94x5Se-mUTuZ=s96-c', 'google', '104169127219149722291', 'ya29.A0ARrdaM8k2UyPRl6Dco-emJoMkOo-BBBRxlRYjDQtnFUl2tjVZMOE1KbW9ydGoJfF46mAgkmTjPx5DgVYvptJlOVdijm2rmSG61wZA9JSoJwXK3CRgnO1n2LmhKZo7nkxoNzDC2Im7rbMmbDt2F46A-V8B6tJ', 'bW7M7LggYXu2F5thI3cVOMWLMUom6M2jdBUnsNqed0QMmuF8M6f6XvB5frcY', '2022-03-06 18:40:34', '2022-03-06 22:12:14'),
(39, 'roshan', 'journeywithritu@gmail.com', NULL, '$2y$10$THOW9sY9IORkaYVknLnrUOlz0fk9i4mFHk3tVonq3Y6SkzKxysqNG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-06 18:52:43', '2022-03-06 18:52:43'),
(40, 'Ritu Kashyap', 'careerguru16@gmail.com', NULL, '$2y$10$oNxHeqlai5gEUir9eoMaY.MpyihPrkOO4DoTCxWoDxMRanHPGyeKS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-06 18:55:49', '2022-03-06 18:55:49'),
(44, 'Phil Woodward', 'philwoodward79@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://graph.facebook.com/v3.3/10165823102645214/picture?type=normal', 'facebook', '10165823102645214', 'EAAGLWBblHpQBACkAPZC95dJX0lDjmUrQ8iZCvpxXcSSABgForl8QYQugDox1NWCkkZCleN627d353sZBrwZCZBnt4W83vZAzXhctrnZAfHu9eK0Q0V9yBQLuqj32FsNOGGOpXyFIxxH3YBhbIiFXPGWntfwRHx9XrsWUrUQbxKEaPLHxfMrZApfWXHZA41t8zR260TfoDevZANMEQCIFwvzaFfHkJN7IwROshCjDwLXR0ZBU2AZDZD', 'y52JzELlAMgsPRWntDARG8CReroEu9oYBdRSvzlgowAdpHpRPMcYa2MdOrhl', '2022-03-07 02:25:39', '2022-03-07 02:25:39'),
(45, 'Chiến Nguyễn Sỹ', 'sychien1998@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GigcfSqjbgYJ5hP8Q-oKm67ekv87d6_NHC-LgMmWQ=s96-c', 'google', '114291798335374675792', 'ya29.A0ARrdaM-kdpLGMAF1wWM-0qGUetZSpfGV1ThLnJyHPZsmBqGyGYshRr3KQFNGjFif3CJjaO5NexdEH6dDaXEXoZTEJt2QhFIOZb3AcWV8TEiNkRNChEuz-gw5-MK-aj6RuYdY1cMXXQzAMrRusF7ObPtxuWMf', 'SGQG5MiacByXcU9CTWLA00LPERHcMQX0EKrZ71GotpbEKIbsUcIpdh40QGvh', '2022-03-07 11:04:35', '2022-03-07 11:04:35'),
(46, 'Nimesh Panchal', 'nimesh.creativekshetra@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GhmMGGAviMSC10r-sdSKhyZjh1Pdn60vprr6rtK=s96-c', 'google', '106508885906858543793', 'ya29.A0ARrdaM_uDH9KKyJ9jXzrlFoyO9cXyIyYSGJb6O5EvyMT3ipyF4T4Rf4e7aVn9115qAj45AdfWIb2jBEQyM85RO69BJsKCCItA-Nm2dK-01_DFJZQBjvwfL0ro3TBbDwzNkA2cbVvgPT6QbcYVl4ANotwbLJa', 'uB8WHfv6HzRqXVen3oNMBtUwUxy9nhaNUpTTDN4RTGTxXQDKd8CYJwq4BCSz', '2022-03-07 14:46:26', '2022-03-07 14:46:26'),
(47, 'Aayushi Mehta', 'mehta.aayushi1999@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GgfDBaLDzrcxEe1pYgi9vAnAkdY7qJHG-hCzXrp0gI=s96-c', 'google', '101724614526529578186', 'ya29.A0ARrdaM8C3jaC12MTzWSxURWITB11e_opKh0i_ygkaDC3SKRDswKHBMQxlodrnZXQvM9EjwaKAT-k_eBoD1Tk3tcjYud0X1dbEgCUZVMU32APE7rSFAUEwb-EVEMNge0J8oOowL35i_ZE2sNzkUD9B-gZZpxY', '6EFMNISretNtYUxqfZYjX13YX2u6eIX7Ml61ATJCa6vLD10JBPfwtDUsxoY9', '2022-03-07 16:26:44', '2022-03-07 16:26:44'),
(48, 'Amir hamza Siddiki', 'crowpoet26474@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GhdB9LhlItfeNUq-dxEjdc4O-h8mH17pUIAH8dp=s96-c', 'google', '109273375836042597146', 'ya29.A0ARrdaM-XYV38oh_VFG1zGVmqbY-eI_qqeA8sZu3GKIu0xMrpdydza1W5OsmBh5vND62xzUan9uYQmvDLVvPzxCangerFmCRLHywT2kxg26zAresGL5829HulWSpPoOVuJ5SnSrRurD95G7pwl07t3ujVjPqu', 'WK0Bb2rc9a1HuAXuFkh4AKkHsmXvBTmxxrAtYTtxoOIhtSliOQ864f6mW6FB', '2022-03-07 17:31:22', '2022-03-07 17:31:22'),
(49, 'Marcelo Ghenis', 'pink.ghenis@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GgBvfdgkSd0gCuvQuXz2d7vatepskCANfSBsZR-=s96-c', 'google', '113707942947831216565', 'ya29.A0ARrdaM_XZGvv8V61Ms9pTODRTm7BjXz80RK7GWNsYxt4WyxusPaNiV7nFbAxreONMXYngWA5J34G7MwAHEe616_oQWwTHkagQsCGxo_ans_afGDqpPQdoD79YrTGawWdYrfBKp3MFBu2eQNqE4KMvyNr3lGY', 'R1AcuW0qp5X2W2mC0N1tcKcbGJQKeqrsVeAAhWO624XiwIArp99riUyC1Vz6', '2022-03-07 18:09:26', '2022-03-07 18:09:26'),
(69, 'yashvir', 'pngguru.in@gmail.com', '2022-03-08 12:54:54', '$2y$10$zpNhD9AAWNDGoN7EUeZTtOtTF4tfY5fw1KX0MDg4Y/cpLmzv6dtDi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-08 12:53:13', '2022-03-08 12:54:54'),
(70, 'Immaculate Edu', 'icwcud@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://graph.facebook.com/v3.3/540915344261027/picture?type=normal', 'facebook', '540915344261027', 'EAAGLWBblHpQBAHuDPmsKlqZCgPU2EQ2vSwKz1DO3xym6cg5nm1NznnuFHZClyt8gEkPSMPse5k9fqFSVdPjKiZBxxyLMNbt7VjDeTjxZCZAp9PJhn9TujJ8kiZBZBPEfKAKMrfA7LdpIXd6yKik2B4wBTaxjbM09ZAiRVOvbZBXHnZCMvDkiS4zsSB65Se1hUkZAqosA8074qDS1gEKASJiWKQenYxaKJJ5XYYjGgMDrM5G1wZDZD', 'Fv2rC04Npr03qa49zSsCxsCYlNuCqPCRc8el6haWC5uRFtigtWM3tYtQsydw', '2022-03-08 14:17:56', '2022-03-08 14:17:56'),
(71, 'creative corner', 'creativecorner.sk@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14Gh6bpvCEfLwEn_pqdXQJMmDhijmU3pC8P_CoNtB=s96-c', 'google', '100667873441504437091', 'ya29.A0ARrdaM_tn_qgK5GYWAp9vGliXKRLDFRmcs12ektookODr5LxucgPW5H6CHjzzLUsXaU0382WwVYpA4tlddMlOU23wX63JLG0ZoxWNhj8EI9_-WYmiiiF4TFr0QBaIcNIrp-XXY2uqFigc88EBKAfljLcqAfl', 'c8jJZvJl8bzhWZHVn7nOoPxjJnxxUQ8PkfV7gRXsk7uR7PayOMnZxMApSRqf', '2022-03-08 15:51:03', '2022-03-08 15:51:03'),
(72, 'Chubaka Savage', 'mbahbrinsley@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GhfC8Ob7n-LGFpwu0T7x05NXmR7gCSbnZuAMAKcBg=s96-c', 'google', '115212160506853131238', 'ya29.A0ARrdaM9F_ViXeeOp5SWN7CZILK7BfRCpbVkg1T6u-b7jW361jg1_O6oj3qfgtPnvhIfzSe23aX_cCRXmVx_98RphhEpOs5-Tkd03xGvWHGCke_XjIazQALAhdTn3eLEGadXaVfu4szRp93Mc0SoDtnn3h8DK', 'SHQuE75frB5Fa50Q0NXB0s8MjRtqyfMq38VmmusQDMoJkZ2st6Kd1arGDL6u', '2022-03-08 18:29:26', '2022-03-08 18:29:26'),
(73, 'Ohm Printing', 'ohmdigital47@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://graph.facebook.com/v3.3/502879754833084/picture?type=normal', 'facebook', '502879754833084', 'EAAGLWBblHpQBALnxRheGCwZAZBkPJhrJ2MNZC2pc4FSnrhFBNV3F8gAt0Rma8D624nj47aIXsWupxWMhy7MaSn00sgYdgIx00xrhGWkplTy5CXk4nFWmgmSdUxo15DZC5ogQXTGil8w5NqloprGjVp8OiOVko4yTRtFtb2wZB6ZCOnekBsAsVOA6pibblq5FrzP7frtelKkfpVxGdl33XA3NG0gyiqXMQPZB7FMFT1GIQZDZD', 'G1NniccONazio7dnCC20XtsSneaD1ARKaTmsawedU83Te9PbDuY6NEDwFcgy', '2022-03-08 18:47:42', '2022-03-08 18:47:42'),
(74, 'Rajvir Singh', 'ekam9568@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJz3WZgbuq5-kI8IaldpNhIr3OMkZCyJlfxD8QB_=s96-c', 'google', '101651679787008623660', 'ya29.A0ARrdaM_hwFQ6exHbU0UJTMgwFgi8tnGbSi10YHE5EGB0SLlDgn_Wk4DA4s6xGr6gaA5ILRr2Zg99hTM5JMbFQ0Qi9ETEWeQ1eeHvEOa53er5wk8ks2ZKR3Nrzx7S8Fy0sldv-EVspdwNKkCmtPB0fQjxpsb3', 'MAYfWFca83wVLBTbGJxl9RQ0yZsE55Vbbw0NN2ec3Cmn57Id2p0rvGCRdgj2', '2022-03-08 20:06:17', '2022-03-08 20:06:17'),
(75, 'roshan', 'satyaswarooplko@gmail.com', NULL, '$2y$10$N8DblSPpewXmm9F0YkAyGO72yL5rcRwf1p45InpjJiaCeWKIyQSdu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-08 21:01:39', '2022-03-08 21:01:39');

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
-- Indexes for table `clienteles`
--
ALTER TABLE `clienteles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `images_slug_unique` (`slug`);

--
-- Indexes for table `image_categories`
--
ALTER TABLE `image_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_categories_slug_unique` (`slug`);

--
-- Indexes for table `image_tags`
--
ALTER TABLE `image_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_tags_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `clienteles`
--
ALTER TABLE `clienteles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `image_categories`
--
ALTER TABLE `image_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `image_tags`
--
ALTER TABLE `image_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
