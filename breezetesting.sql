-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2023 at 10:27 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `breezetesting`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_status`, `created_at`, `updated_at`) VALUES
(3, 'tech', '1', '2023-07-01 04:43:25', '2023-07-01 04:43:25'),
(4, 'war', '1', '2023-07-01 04:43:44', '2023-07-01 04:43:49'),
(5, 'actor', '1', '2023-07-01 04:43:56', '2023-07-01 04:43:56'),
(6, 'world-affairs', '1', '2023-07-01 04:44:02', '2023-07-01 04:44:02'),
(7, 'new', '1', '2023-07-01 04:44:19', '2023-07-01 04:44:19'),
(8, 'movies', '1', '2023-07-01 04:44:29', '2023-07-01 04:44:29'),
(9, 'category', '1', '2023-07-01 04:44:40', '2023-07-01 04:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location_with_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `location_with_name`, `created_at`, `updated_at`) VALUES
(1, '1688205981-blog-jaredd-craig-w_WsK0Jc7R0-unsplash.jpg', 'public/image/feature/1688205981-blog-jaredd-craig-w_WsK0Jc7R0-unsplash.jpg', '2023-07-01 04:36:21', '2023-07-01 04:36:21'),
(2, '1688206155-blog-marek-piwnicki-epdbc0xRjiI-unsplash.jpg', 'public/image/feature/1688206155-blog-marek-piwnicki-epdbc0xRjiI-unsplash.jpg', '2023-07-01 04:39:15', '2023-07-01 04:39:15'),
(3, '1688206158-blog-joakim-honkasalo-STejYf6tsrY-unsplash(1).jpg', 'public/image/feature/1688206158-blog-joakim-honkasalo-STejYf6tsrY-unsplash(1).jpg', '2023-07-01 04:39:18', '2023-07-01 04:39:18'),
(4, '1688206162-blog-masahiro-miyagi-18ef3TE0jdQ-unsplash.jpg', 'public/image/feature/1688206162-blog-masahiro-miyagi-18ef3TE0jdQ-unsplash.jpg', '2023-07-01 04:39:22', '2023-07-01 04:39:22'),
(5, '1688206168-blog-jason-hudson-wtUkQ2MrbiY-unsplash.jpg', 'public/image/feature/1688206168-blog-jason-hudson-wtUkQ2MrbiY-unsplash.jpg', '2023-07-01 04:39:28', '2023-07-01 04:39:28'),
(6, '1688206172-blog-jason-hudson-wtUkQ2MrbiY-unsplash.jpg', 'public/image/feature/1688206172-blog-jason-hudson-wtUkQ2MrbiY-unsplash.jpg', '2023-07-01 04:39:32', '2023-07-01 04:39:32'),
(7, '1688206177-blog-aakash-dhage-C8vVgGd00Y0-unsplash.jpg', 'public/image/feature/1688206177-blog-aakash-dhage-C8vVgGd00Y0-unsplash.jpg', '2023-07-01 04:39:37', '2023-07-01 04:39:37'),
(8, '1688206181-blog-jason-hudson-F157enMUEn4-unsplash.jpg', 'public/image/feature/1688206181-blog-jason-hudson-F157enMUEn4-unsplash.jpg', '2023-07-01 04:39:41', '2023-07-01 04:39:41'),
(9, '1688206184-blog-v2osk-pQ7GIGO6esE-unsplash.jpg', 'public/image/feature/1688206184-blog-v2osk-pQ7GIGO6esE-unsplash.jpg', '2023-07-01 04:39:44', '2023-07-01 04:39:44'),
(10, '1688206193-blog-big-dodzy-UvFyLu-3J-U-unsplash.jpg', 'public/image/feature/1688206193-blog-big-dodzy-UvFyLu-3J-U-unsplash.jpg', '2023-07-01 04:39:53', '2023-07-01 04:39:53'),
(11, '1688206197-blog-kuku-campers-olmLkQ3iMY0-unsplash.jpg', 'public/image/feature/1688206197-blog-kuku-campers-olmLkQ3iMY0-unsplash.jpg', '2023-07-01 04:39:57', '2023-07-01 04:39:57'),
(12, '1688206201-blog-jordan-andrews-guxR5-GrzMU-unsplash.jpg', 'public/image/feature/1688206201-blog-jordan-andrews-guxR5-GrzMU-unsplash.jpg', '2023-07-01 04:40:01', '2023-07-01 04:40:01'),
(13, '1688206206-blog-joakim-honkasalo-STejYf6tsrY-unsplash.jpg', 'public/image/feature/1688206206-blog-joakim-honkasalo-STejYf6tsrY-unsplash.jpg', '2023-07-01 04:40:06', '2023-07-01 04:40:06'),
(14, '1688206213-blog-pawan-thapa-bksiieS7m4g-unsplash.jpg', 'public/image/feature/1688206213-blog-pawan-thapa-bksiieS7m4g-unsplash.jpg', '2023-07-01 04:40:13', '2023-07-01 04:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `location`, `created_at`, `updated_at`) VALUES
(1, '1688205988-blog-kuku-campers-olmLkQ3iMY0-unsplash.jpg', 'public/image/gallery/1688205988-blog-kuku-campers-olmLkQ3iMY0-unsplash.jpg', '2023-07-01 04:36:28', '2023-07-01 04:36:28'),
(2, '1688206232-blog-jaredd-craig-w_WsK0Jc7R0-unsplash.jpg', 'public/image/gallery/1688206232-blog-jaredd-craig-w_WsK0Jc7R0-unsplash.jpg', '2023-07-01 04:40:32', '2023-07-01 04:40:32'),
(3, '1688206235-blog-marek-piwnicki-epdbc0xRjiI-unsplash.jpg', 'public/image/gallery/1688206235-blog-marek-piwnicki-epdbc0xRjiI-unsplash.jpg', '2023-07-01 04:40:35', '2023-07-01 04:40:35'),
(4, '1688206239-blog-joakim-honkasalo-STejYf6tsrY-unsplash(1).jpg', 'public/image/gallery/1688206239-blog-joakim-honkasalo-STejYf6tsrY-unsplash(1).jpg', '2023-07-01 04:40:39', '2023-07-01 04:40:39'),
(5, '1688206243-blog-masahiro-miyagi-18ef3TE0jdQ-unsplash.jpg', 'public/image/gallery/1688206243-blog-masahiro-miyagi-18ef3TE0jdQ-unsplash.jpg', '2023-07-01 04:40:43', '2023-07-01 04:40:43'),
(6, '1688206246-blog-jason-hudson-wtUkQ2MrbiY-unsplash.jpg', 'public/image/gallery/1688206246-blog-jason-hudson-wtUkQ2MrbiY-unsplash.jpg', '2023-07-01 04:40:46', '2023-07-01 04:40:46'),
(7, '1688206249-blog-aakash-dhage-C8vVgGd00Y0-unsplash.jpg', 'public/image/gallery/1688206249-blog-aakash-dhage-C8vVgGd00Y0-unsplash.jpg', '2023-07-01 04:40:49', '2023-07-01 04:40:49'),
(8, '1688206252-blog-jason-hudson-F157enMUEn4-unsplash.jpg', 'public/image/gallery/1688206252-blog-jason-hudson-F157enMUEn4-unsplash.jpg', '2023-07-01 04:40:52', '2023-07-01 04:40:52'),
(9, '1688206256-blog-big-dodzy-UvFyLu-3J-U-unsplash.jpg', 'public/image/gallery/1688206256-blog-big-dodzy-UvFyLu-3J-U-unsplash.jpg', '2023-07-01 04:40:56', '2023-07-01 04:40:56'),
(10, '1688206260-blog-kuku-campers-olmLkQ3iMY0-unsplash.jpg', 'public/image/gallery/1688206260-blog-kuku-campers-olmLkQ3iMY0-unsplash.jpg', '2023-07-01 04:41:00', '2023-07-01 04:41:00'),
(11, '1688206264-blog-jordan-andrews-guxR5-GrzMU-unsplash.jpg', 'public/image/gallery/1688206264-blog-jordan-andrews-guxR5-GrzMU-unsplash.jpg', '2023-07-01 04:41:04', '2023-07-01 04:41:04'),
(12, '1688206269-blog-joakim-honkasalo-STejYf6tsrY-unsplash.jpg', 'public/image/gallery/1688206269-blog-joakim-honkasalo-STejYf6tsrY-unsplash.jpg', '2023-07-01 04:41:09', '2023-07-01 04:41:09'),
(13, '1688206273-blog-pawan-thapa-bksiieS7m4g-unsplash.jpg', 'public/image/gallery/1688206273-blog-pawan-thapa-bksiieS7m4g-unsplash.jpg', '2023-07-01 04:41:13', '2023-07-01 04:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(45, '2019_08_19_000000_create_failed_jobs_table', 1),
(46, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(47, '2023_06_10_062901_create_tags_table', 1),
(48, '2023_06_10_075657_create_categories_table', 1),
(49, '2023_06_11_083102_create_sub_categories_table', 1),
(50, '2023_06_19_080048_create_galleries_table', 1),
(51, '2023_06_19_081254_create_features_table', 1),
(52, '2023_06_24_114546_create_posts_table', 1),
(53, '2023_07_01_094958_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maindata` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `featureImages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `maindata`, `featureImages`, `gallery_image`, `tags`, `category`, `status`, `date`, `created_at`, `updated_at`) VALUES
(3, 'Establish a Clear Vision: Define the team\'s purpose and goals to provide direction and alignment.', 'establish-a-clear-vision-define-the-teams-purpose-and-goals-to-provide-direction-and-alignment', '<h2><strong>Lorem Ipsum</strong>&nbsp;</h2><p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h3><strong>Lorem Ipsum</strong>&nbsp;</h3><p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1688205981-blog-jaredd-craig-w_WsK0Jc7R0-unsplash.jpg', '1688205988-blog-kuku-campers-olmLkQ3iMY0-unsplash.jpg', 'random, tech', 'category', 'Public', '07/08/2023', '2023-07-01 04:46:13', '2023-07-01 04:46:13'),
(4, 'Foster a Positive Team Culture: Create a supportive and positive team culture that values respect, appreciation, and recognition.', 'foster-a-positive-team-culture-create-a-supportive-and-positive-team-culture-that-values-respect-appreciation-and-recognition', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1688205981-blog-jaredd-craig-w_WsK0Jc7R0-unsplash.jpg', '1688205988-blog-kuku-campers-olmLkQ3iMY0-unsplash.jpg', 'random', 'actor', 'Public', '07/21/2023', '2023-07-01 04:46:47', '2023-07-01 04:46:47'),
(5, 'Celebrate Achievements: Recognize and celebrate both individual and team achievements to boost morale and motivation.', 'celebrate-achievements-recognize-and-celebrate-both-individual-and-team-achievements-to-boost-morale-and-motivation', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1688206168-blog-jason-hudson-wtUkQ2MrbiY-unsplash.jpg', '1688205988-blog-kuku-campers-olmLkQ3iMY0-unsplash.jpg', 'random, tech, news', 'world-affairs', 'Public', '07/14/2023', '2023-07-01 04:47:42', '2023-07-01 04:47:42'),
(6, 'Encourage Flexibility and Adaptability: Embrace change and encourage team members to be flexible and adaptable in the face of challenges.', 'encourage-flexibility-and-adaptability-embrace-change-and-encourage-team-members-to-be-flexible-and-adaptable-in-the-face-of-challenges', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1688206184-blog-v2osk-pQ7GIGO6esE-unsplash.jpg', '1688206256-blog-big-dodzy-UvFyLu-3J-U-unsplash.jpg', 'random, tech, news', 'new', 'Public', '07/22/2023', '2023-07-01 04:48:13', '2023-07-01 04:48:13'),
(7, 'Promote Collaboration Across Departments: Foster cross-functional collaboration to break down silos and promote a holistic approach to problem-solving.', 'promote-collaboration-across-departments-foster-cross-functional-collaboration-to-break-down-silos-and-promote-a-holistic-approach-to-problem-solving', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1688206184-blog-v2osk-pQ7GIGO6esE-unsplash.jpg', '1688206239-blog-joakim-honkasalo-STejYf6tsrY-unsplash(1).jpg', 'random, tech, news', 'tech', 'Public', '07/13/2023', '2023-07-01 04:49:08', '2023-07-01 04:49:08'),
(8, 'Lead by Example: Demonstrate collaborative behavior and model effective teamwork as a leader or team member', 'lead-by-example-demonstrate-collaborative-behavior-and-model-effective-teamwork-as-a-leader-or-team-member', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1688206155-blog-marek-piwnicki-epdbc0xRjiI-unsplash.jpg', '1688205988-blog-kuku-campers-olmLkQ3iMY0-unsplash.jpg', 'random, tech, news, war', 'war', 'Public', '07/13/2023', '2023-07-01 05:28:32', '2023-07-01 05:28:32'),
(9, 'Lead by Example: Demonstrate collaborative behavior and model effective teamwork as a leader or team member', 'lead-by-example-demonstrate-collaborative-behavior-and-model-effective-teamwork-as-a-leader-or-team-member', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer&nbsp;</p>', '1688206155-blog-marek-piwnicki-epdbc0xRjiI-unsplash.jpg', '1688206232-blog-jaredd-craig-w_WsK0Jc7R0-unsplash.jpg', 'random, tech, news', 'new', 'Public', '07/20/2023', '2023-07-01 05:29:53', '2023-07-01 05:29:53'),
(10, 'The Enigmatic Intersection of Chaos and Creativity: Unraveling the Unpredictable Pathways of Innovation', 'the-enigmatic-intersection-of-chaos-and-creativity-unraveling-the-unpredictable-pathways-of-innovation', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '1688206177-blog-aakash-dhage-C8vVgGd00Y0-unsplash.jpg', '1688206246-blog-jason-hudson-wtUkQ2MrbiY-unsplash.jpg', 'random, tech', 'world-affairs', 'Public', '07/20/2023', '2023-07-01 23:31:30', '2023-07-01 23:31:30'),
(11, 'Maecenas commodo ante quis tellus vulputate, et hendrerit magna ornare', 'maecenas-commodo-ante-quis-tellus-vulputate-et-hendrerit-magna-ornare', '<p>Nunc fermentum ornare ex id aliquam. Donec a turpis eu mauris vehicula rhoncus sed pulvinar odio. Vivamus posuere et risus ut facilisis. Vestibulum scelerisque cursus orci vitae blandit. Fusce gravida tincidunt velit eu cursus. Curabitur et sagittis leo, at bibendum est. Proin a auctor enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc vehicula arcu in posuere posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus fermentum justo ipsum, eu ultrices tellus rutrum lacinia.</p><p>Nunc fermentum ornare ex id aliquam. Donec a turpis eu mauris vehicula rhoncus sed pulvinar odio. Vivamus posuere et risus ut facilisis. Vestibulum scelerisque cursus orci vitae blandit. Fusce gravida tincidunt velit eu cursus. Curabitur et sagittis leo, at bibendum est. Proin a auctor enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc vehicula arcu in posuere posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus fermentum justo ipsum, eu ultrices tellus rutrum lacinia.</p>', '1688206206-blog-joakim-honkasalo-STejYf6tsrY-unsplash.jpg', '1688206239-blog-joakim-honkasalo-STejYf6tsrY-unsplash(1).jpg', 'random, tech', 'world-affairs', 'Public', '07/14/2023', '2023-07-01 23:32:19', '2023-07-01 23:32:19'),
(12, 'Harmony in Diversity: Harnessing the Strength of Global Cultural Exchange', 'harmony-in-diversity-harnessing-the-strength-of-global-cultural-exchange', '<p>Etiam porttitor nisi sem, ac auctor urna feugiat id. Aliquam sit amet convallis nulla. Phasellus hendrerit ligula nibh, at consectetur orci ultricies sed. Duis maximus libero semper, fringilla quam id, ornare elit. Aenean rutrum quam vitae ipsum hendrerit, vitae auctor sapien pellentesque. Morbi vel velit eget eros interdum vulputate sed sed risus. Integer tempor pulvinar placerat. Donec sagittis egestas mi ac bibendum. Fusce urna ante, sodales in diam a, lobortis tincidunt nunc.</p><p>Nunc ac massa euismod, porta erat quis, convallis urna. Aliquam interdum est diam, vel feugiat tortor dignissim ac. Aliquam non augue rutrum, tempor urna eget, lacinia lacus. Aenean commodo elementum erat, at sollicitudin lacus vestibulum a. Integer eget tempus sapien, vitae iaculis tortor. Duis rhoncus justo felis, vel scelerisque felis ultrices vel. Pellentesque aliquet rutrum erat, in lobortis nibh placerat vitae. Sed at lacus eget sem aliquet maximus vel ac ex.</p>', '1688206206-blog-joakim-honkasalo-STejYf6tsrY-unsplash.jpg', '1688206269-blog-joakim-honkasalo-STejYf6tsrY-unsplash.jpg', 'random, tech, news, war, sport, actor', 'world-affairs', 'Public', '07/06/2023', '2023-07-01 23:34:14', '2023-07-01 23:34:14'),
(13, 'Uncharted Horizons: Pioneering the Future of Space Exploration', 'uncharted-horizons-pioneering-the-future-of-space-exploration', '<p>Etiam porttitor nisi sem, ac auctor urna feugiat id. Aliquam sit amet convallis nulla. Phasellus hendrerit ligula nibh, at consectetur orci ultricies sed. Duis maximus libero semper, fringilla quam id, ornare elit. Aenean rutrum quam vitae ipsum hendrerit, vitae auctor sapien pellentesque. Morbi vel velit eget eros interdum vulputate sed sed risus. Integer tempor pulvinar placerat. Donec sagittis egestas mi ac bibendum. Fusce urna ante, sodales in diam a, lobortis tincidunt nunc.</p><p>Nunc ac massa euismod, porta erat quis, convallis urna. Aliquam interdum est diam, vel feugiat tortor dignissim ac. Aliquam non augue rutrum, tempor urna eget, lacinia lacus. Aenean commodo elementum erat, at sollicitudin lacus vestibulum a. Integer eget tempus sapien, vitae iaculis tortor. Duis rhoncus justo felis, vel scelerisque felis ultrices vel. Pellentesque aliquet rutrum erat, in lobortis nibh placerat vitae. Sed at lacus eget sem aliquet maximus vel ac ex.</p>', '1688205981-blog-jaredd-craig-w_WsK0Jc7R0-unsplash.jpg', '1688206235-blog-marek-piwnicki-epdbc0xRjiI-unsplash.jpg', 'random, tech, news', 'world-affairs', 'Public', '07/15/2023', '2023-07-01 23:34:25', '2023-07-01 23:34:25'),
(14, 'The Quantum Frontier: Navigating the Uncertainty of Subatomic Realms', 'the-quantum-frontier-navigating-the-uncertainty-of-subatomic-realms', '<p>Etiam porttitor nisi sem, ac auctor urna feugiat id. Aliquam sit amet convallis nulla. Phasellus hendrerit ligula nibh, at consectetur orci ultricies sed. Duis maximus libero semper, fringilla quam id, ornare elit. Aenean rutrum quam vitae ipsum hendrerit, vitae auctor sapien pellentesque. Morbi vel velit eget eros interdum vulputate sed sed risus. Integer tempor pulvinar placerat. Donec sagittis egestas mi ac bibendum. Fusce urna ante, sodales in diam a, lobortis tincidunt nunc.</p><p>Nunc ac massa euismod, porta erat quis, convallis urna. Aliquam interdum est diam, vel feugiat tortor dignissim ac. Aliquam non augue rutrum, tempor urna eget, lacinia lacus. Aenean commodo elementum erat, at sollicitudin lacus vestibulum a. Integer eget tempus sapien, vitae iaculis tortor. Duis rhoncus justo felis, vel scelerisque felis ultrices vel. Pellentesque aliquet rutrum erat, in lobortis nibh placerat vitae. Sed at lacus eget sem aliquet maximus vel ac ex.</p>', '1688206158-blog-joakim-honkasalo-STejYf6tsrY-unsplash(1).jpg', '1688206249-blog-aakash-dhage-C8vVgGd00Y0-unsplash.jpg', 'random, news', 'world-affairs', 'Public', '07/06/2023', '2023-07-01 23:34:42', '2023-07-01 23:34:42'),
(15, 'From Stardust to Consciousness: Unveiling the Origins of Life and Mind', 'from-stardust-to-consciousness-unveiling-the-origins-of-life-and-mind', '<p>Etiam porttitor nisi sem, ac auctor urna feugiat id. Aliquam sit amet convallis nulla. Phasellus hendrerit ligula nibh, at consectetur orci ultricies sed. Duis maximus libero semper, fringilla quam id, ornare elit. Aenean rutrum quam vitae ipsum hendrerit, vitae auctor sapien pellentesque. Morbi vel velit eget eros interdum vulputate sed sed risus. Integer tempor pulvinar placerat. Donec sagittis egestas mi ac bibendum. Fusce urna ante, sodales in diam a, lobortis tincidunt nunc.</p><p>Nunc ac massa euismod, porta erat quis, convallis urna. Aliquam interdum est diam, vel feugiat tortor dignissim ac. Aliquam non augue rutrum, tempor urna eget, lacinia lacus. Aenean commodo elementum erat, at sollicitudin lacus vestibulum a. Integer eget tempus sapien, vitae iaculis tortor. Duis rhoncus justo felis, vel scelerisque felis ultrices vel. Pellentesque aliquet rutrum erat, in lobortis nibh placerat vitae. Sed at lacus eget sem aliquet maximus vel ac ex.</p>', '1688206168-blog-jason-hudson-wtUkQ2MrbiY-unsplash.jpg', '1688206252-blog-jason-hudson-F157enMUEn4-unsplash.jpg', 'news', 'world-affairs', 'Public', '07/07/2023', '2023-07-01 23:34:53', '2023-07-01 23:34:53'),
(16, 'Decoding the Mind: Unraveling the Complexities of Human Consciousness', 'decoding-the-mind-unraveling-the-complexities-of-human-consciousness', '<p>Nunc fermentum ornare ex id aliquam. Donec a turpis eu mauris vehicula rhoncus sed pulvinar odio. Vivamus posuere et risus ut facilisis. Vestibulum scelerisque cursus orci vitae blandit. Fusce gravida tincidunt velit eu cursus. Curabitur et sagittis leo, at bibendum est. Proin a auctor enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc vehicula arcu in posuere posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus fermentum justo ipsum, eu ultrices tellus rutrum lacinia.</p><p>Maecenas commodo ante quis tellus vulputate, et hendrerit magna ornare. Maecenas pellentesque auctor nisl, id bibendum ipsum rhoncus ac. Fusce pulvinar, odio euismod aliquet dapibus, nisi metus tincidunt nisi, vitae bibendum diam ex in lorem. Duis nec ultrices velit. Integer tempus volutpat ante quis eleifend. Integer faucibus ultrices risus nec iaculis. Vestibulum enim velit, luctus id nulla at, pharetra luctus sem. Sed eu libero elit. Nulla ac augue et risus tristique tristique nec id arcu. Nulla eleifend elit in volutpat blandit. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>', '1688206201-blog-jordan-andrews-guxR5-GrzMU-unsplash.jpg', '1688206273-blog-pawan-thapa-bksiieS7m4g-unsplash.jpg', 'random, tech', 'tech', 'Public', '07/01/2023', '2023-07-02 00:12:36', '2023-07-02 00:12:36'),
(17, 'Synchronicity in Chaos: Unveiling the Hidden Patterns of the Universe', 'synchronicity-in-chaos-unveiling-the-hidden-patterns-of-the-universe', '<p>Etiam porttitor nisi sem, ac auctor urna feugiat id. Aliquam sit amet convallis nulla. Phasellus hendrerit ligula nibh, at consectetur orci ultricies sed. Duis maximus libero semper, fringilla quam id, ornare elit. Aenean rutrum quam vitae ipsum hendrerit, vitae auctor sapien pellentesque. Morbi vel velit eget eros interdum vulputate sed sed risus. Integer tempor pulvinar placerat. Donec sagittis egestas mi ac bibendum. Fusce urna ante, sodales in diam a, lobortis tincidunt nunc.</p><p>Nunc ac massa euismod, porta erat quis, convallis urna. Aliquam interdum est diam, vel feugiat tortor dignissim ac. Aliquam non augue rutrum, tempor urna eget, lacinia lacus. Aenean commodo elementum erat, at sollicitudin lacus vestibulum a. Integer eget tempus sapien, vitae iaculis tortor. Duis rhoncus justo felis, vel scelerisque felis ultrices vel. Pellentesque aliquet rutrum erat, in lobortis nibh placerat vitae. Sed at lacus eget sem aliquet maximus vel ac ex.</p>', '1688206162-blog-masahiro-miyagi-18ef3TE0jdQ-unsplash.jpg', '1688206239-blog-joakim-honkasalo-STejYf6tsrY-unsplash(1).jpg', 'random, tech', 'tech', 'Public', '07/03/2023', '2023-07-02 00:13:19', '2023-07-02 00:13:19'),
(18, 'The Alchemy of Curiosity: Transforming Knowledge into Wisdom', 'the-alchemy-of-curiosity-transforming-knowledge-into-wisdom', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed lacus consequat, tristique tortor a, cursus nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sollicitudin placerat mi sed finibus. Fusce viverra tortor et augue rhoncus tempus. Aliquam ornare imperdiet eros ut efficitur. Mauris suscipit odio in enim varius, eu luctus nisi accumsan. Aliquam erat volutpat. Sed mattis vestibulum velit, eu dignissim ante sollicitudin et. Nullam facilisis ut erat tempus tincidunt. Nam ultricies non est ut vulputate. Aliquam erat volutpat. Ut posuere felis nisl, vitae dignissim sapien iaculis a.</p><p>Nunc fermentum ornare ex id aliquam. Donec a turpis eu mauris vehicula rhoncus sed pulvinar odio. Vivamus posuere et risus ut facilisis. Vestibulum scelerisque cursus orci vitae blandit. Fusce gravida tincidunt velit eu cursus. Curabitur et sagittis leo, at bibendum est. Proin a auctor enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc vehicula arcu in posuere posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus fermentum justo ipsum, eu ultrices tellus rutrum lacinia.</p>', '1688206168-blog-jason-hudson-wtUkQ2MrbiY-unsplash.jpg', '1688206232-blog-jaredd-craig-w_WsK0Jc7R0-unsplash.jpg', 'tech, war', 'tech', 'Public', '07/05/2023', '2023-07-02 00:13:46', '2023-07-02 00:13:46'),
(19, 'Whispers of the Unknown: Exploring the Secrets of Uncharted Realms', 'whispers-of-the-unknown-exploring-the-secrets-of-uncharted-realms', '<p>Etiam porttitor nisi sem, ac auctor urna feugiat id. Aliquam sit amet convallis nulla. Phasellus hendrerit ligula nibh, at consectetur orci ultricies sed. Duis maximus libero semper, fringilla quam id, ornare elit. Aenean rutrum quam vitae ipsum hendrerit, vitae auctor sapien pellentesque. Morbi vel velit eget eros interdum vulputate sed sed risus. Integer tempor pulvinar placerat. Donec sagittis egestas mi ac bibendum. Fusce urna ante, sodales in diam a, lobortis tincidunt nunc.</p>', '1688206184-blog-v2osk-pQ7GIGO6esE-unsplash.jpg', '1688206243-blog-masahiro-miyagi-18ef3TE0jdQ-unsplash.jpg', 'tech, sport', 'tech', 'Public', '07/03/2023', '2023-07-02 00:14:24', '2023-07-02 00:14:24'),
(20, 'The Art of Serendipity: Embracing Chance Encounters and Unexpected Discoveries', 'the-art-of-serendipity-embracing-chance-encounters-and-unexpected-discoveries', '<p>Etiam porttitor nisi sem, ac auctor urna feugiat id. Aliquam sit amet convallis nulla. Phasellus hendrerit ligula nibh, at consectetur orci ultricies sed. Duis maximus libero semper, fringilla quam id, ornare elit. Aenean rutrum quam vitae ipsum hendrerit, vitae auctor sapien pellentesque. Morbi vel velit eget eros interdum vulputate sed sed risus. Integer tempor pulvinar placerat. Donec sagittis egestas mi ac bibendum. Fusce urna ante, sodales in diam a, lobortis tincidunt nunc.</p><p>Nunc ac massa euismod, porta erat quis, convallis urna. Aliquam interdum est diam, vel feugiat tortor dignissim ac. Aliquam non augue rutrum, tempor urna eget, lacinia lacus. Aenean commodo elementum erat, at sollicitudin lacus vestibulum a. Integer eget tempus sapien, vitae iaculis tortor. Duis rhoncus justo felis, vel scelerisque felis ultrices vel. Pellentesque aliquet rutrum erat, in lobortis nibh placerat vitae. Sed at lacus eget sem aliquet maximus vel ac ex.</p>', '1688206213-blog-pawan-thapa-bksiieS7m4g-unsplash.jpg', '1688206246-blog-jason-hudson-wtUkQ2MrbiY-unsplash.jpg', 'tech', 'tech', 'Public', '07/13/2023', '2023-07-02 00:14:48', '2023-07-02 00:14:48'),
(21, 'Innovation by Design: Exploring the Intersection of Creativity and Problem-Solving', 'innovation-by-design-exploring-the-intersection-of-creativity-and-problem-solving', '<p>Etiam porttitor nisi sem, ac auctor urna feugiat id. Aliquam sit amet convallis nulla. Phasellus hendrerit ligula nibh, at consectetur orci ultricies sed. Duis maximus libero semper, fringilla quam id, ornare elit. Aenean rutrum quam vitae ipsum hendrerit, vitae auctor sapien pellentesque. Morbi vel velit eget eros interdum vulputate sed sed risus. Integer tempor pulvinar placerat. Donec sagittis egestas mi ac bibendum. Fusce urna ante, sodales in diam a, lobortis tincidunt nunc.</p><p>Nunc ac massa euismod, porta erat quis, convallis urna. Aliquam interdum est diam, vel feugiat tortor dignissim ac. Aliquam non augue rutrum, tempor urna eget, lacinia lacus. Aenean commodo elementum erat, at sollicitudin lacus vestibulum a. Integer eget tempus sapien, vitae iaculis tortor. Duis rhoncus justo felis, vel scelerisque felis ultrices vel. Pellentesque aliquet rutrum erat, in lobortis nibh placerat vitae. Sed at lacus eget sem aliquet maximus vel ac ex.Etiam porttitor nisi sem, ac auctor urna feugiat id. Aliquam sit amet convallis nulla. Phasellus hendrerit ligula nibh, at consectetur orci ultricies sed. Duis maximus libero semper, fringilla quam id, ornare elit. Aenean rutrum quam vitae ipsum hendrerit, vitae auctor sapien pellentesque. Morbi vel velit eget eros interdum vulputate sed sed risus. Integer tempor pulvinar placerat. Donec sagittis egestas mi ac bibendum. Fusce urna ante, sodales in diam a, lobortis tincidunt nunc.</p><p>Nunc ac massa euismod, porta erat quis, convallis urna. Aliquam interdum est diam, vel feugiat tortor dignissim ac. Aliquam non augue rutrum, tempor urna eget, lacinia lacus. Aenean commodo elementum erat, at sollicitudin lacus vestibulum a. Integer eget tempus sapien, vitae iaculis tortor. Duis rhoncus justo felis, vel scelerisque felis ultrices vel. Pellentesque aliquet rutrum erat, in lobortis nibh placerat vitae. Sed at lacus eget sem aliquet maximus vel ac ex.</p>', '1688205981-blog-jaredd-craig-w_WsK0Jc7R0-unsplash.jpg', '1688206252-blog-jason-hudson-F157enMUEn4-unsplash.jpg', 'tech', 'tech', 'Public', '07/12/2023', '2023-07-02 00:15:09', '2023-07-02 00:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

DROP TABLE IF EXISTS `sub_categories`;
CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat_sub_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `sub_cat_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sub_categories_category_id_foreign` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_tag_name_unique` (`tag_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `created_at`, `updated_at`) VALUES
(1, 'random', '2023-07-01 04:36:16', '2023-07-01 04:36:16'),
(2, 'tech', '2023-07-01 04:38:38', '2023-07-01 04:38:38'),
(3, 'news', '2023-07-01 04:38:41', '2023-07-01 04:38:41'),
(4, 'war', '2023-07-01 04:38:47', '2023-07-01 04:38:47'),
(5, 'sport', '2023-07-01 04:38:50', '2023-07-01 04:38:50'),
(6, 'actor', '2023-07-01 04:38:59', '2023-07-01 04:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rahul', 'rahul@gmail.com', NULL, '$2y$10$.s2Okzuc8On1I6067N9zg.fclp2/D1CdO3krPT9nWckv8F2yqETe6', '4kMgo9wxRxw0OK9SoZi5ghM22e7c2cqEnMHtoURVFG34qoodv5ML4fYoVf6u', '2023-07-01 04:35:59', '2023-07-01 04:35:59');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
