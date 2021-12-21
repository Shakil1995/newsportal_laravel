-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 11:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `link`, `ads`, `type`, `created_at`, `updated_at`) VALUES
(1, 'https://www.daraz.com.bd/shop/shakils', 'public/admin/ads_photo/61b98c181c3ec.jpg', '2', NULL, NULL),
(2, 'https://www.daraz.com.bd/shop/shakils-fashion1604392213', 'public/admin/ads_photo/61b98c365ec18.jpg', '1', NULL, NULL),
(3, 'https://www.daraz.com.bd/shop/shakils', 'public/admin/ads_photo/61b99700e409c.jpg', '2', NULL, NULL),
(4, 'https://www.daraz.com.bd/shop/shakils', 'public/admin/ads_photo/61b9970eb2737.jpg', '1', NULL, NULL),
(5, 'https://www.facebook.com/profile.php?id=100004262354257', 'public/admin/ads_photo/61ba213525673.jpg', '1', NULL, NULL),
(6, 'https://www.facebook.com/profile.php?id=100004262354257', 'public/admin/ads_photo/61ba2142a7cc7.jpg', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soft_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_bn`, `category_en`, `soft_delete`, `created_at`, `updated_at`) VALUES
(1, 'জাতীয়', 'National', '0', NULL, NULL),
(2, 'সারাদেশ', 'sharadesh', '0', NULL, NULL),
(4, 'রাজনীতি', 'Rajniti', '0', NULL, NULL),
(5, 'খেলা', 'Sports', '0', NULL, NULL),
(6, 'বিনোদন', 'Entertainment', '0', NULL, NULL),
(7, 'সারাবিশ্ব', 'World', '0', NULL, NULL),
(8, 'ইসলামী জীবন', 'Islamic Life', '0', NULL, NULL),
(9, 'তথ্যপ্রযুক্তি', 'Technology', '0', NULL, NULL),
(10, 'অর্থনীতি', 'Economy', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_bn`, `district_en`, `soft_delete`, `created_at`, `updated_at`) VALUES
(1, 'ঢাকা', 'Dhaka', '0', NULL, NULL),
(2, 'কুমিল্লা', 'Comilla', '0', NULL, NULL);

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
-- Table structure for table `important_website`
--

CREATE TABLE `important_website` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `websiteName_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `websiteName_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `websiteName_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `important_website`
--

INSERT INTO `important_website` (`id`, `websiteName_bn`, `websiteName_en`, `websiteName_link`, `created_at`, `updated_at`) VALUES
(2, 'প্রথম আলো', 'Protom Alo', 'https://www.prothomalo.com/', NULL, NULL),
(3, 'learnhunter', 'learnhunter.xyz', 'https://learnhunter.xyz/', NULL, NULL),
(4, 'youtube', 'youtube', 'https://www.youtube.com/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `livetv`
--

CREATE TABLE `livetv` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `embed_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livetv`
--

INSERT INTO `livetv` (`id`, `embed_code`, `status`, `created_at`, `updated_at`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gSPeJUa_DX8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, NULL, NULL);

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
(4, '2021_11_21_152300_students', 2),
(53, '2014_10_12_000000_create_users_table', 3),
(54, '2014_10_12_100000_create_password_resets_table', 3),
(55, '2019_08_19_000000_create_failed_jobs_table', 3),
(56, '2021_11_23_181015_create_categories_table', 3),
(57, '2021_11_23_181044_create_subcategories_table', 3),
(58, '2021_11_26_162407_create_districts_table', 3),
(59, '2021_11_26_163604_create_subdistricts_table', 3),
(60, '2021_11_29_070117_create_posts_table', 3),
(61, '2021_12_01_152030_create_socials_table', 3),
(62, '2021_12_01_152142_create_seos_table', 3),
(63, '2021_12_01_175043_create_prayer_table', 3),
(64, '2021_12_01_182418_create_live_tv_table', 3),
(65, '2021_12_03_055033_create_notices_table', 3),
(66, '2021_12_03_061255_create_important_website_table', 3),
(67, '2021_12_03_100345_create_photos_table', 3),
(68, '2021_12_03_100411_create_videos_table', 3),
(69, '2021_12_10_200059_create_ads_table', 3),
(70, '2021_12_15_191606_create_setting_table', 4),
(71, '2021_12_15_191730_create_website_setting_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, NULL, NULL);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo`, `photo_title`, `photo_type`, `created_at`, `updated_at`) VALUES
(7, 'public/admin/photo_gallery/61ba0cbd92c80.png', 'পররাষ্ট্রমন্ত্রী মোমেনকে যুক্তরাষ্ট্রের পররাষ্ট্রমন্ত্রী ব্লিঙ্কেনের ফোন', '0', NULL, NULL),
(8, 'public/admin/photo_gallery/61ba0d06eb186.jpg', 'কান্নাচোখে অসহায় আগুয়েরো বিদায় জানিয়ে দিলেন ফুটবলকে', '1', NULL, NULL),
(9, 'public/admin/photo_gallery/61ba0d5527084.jpg', 'অবসরই নিয়ে ফেলছেন আগুয়েরো', '0', NULL, NULL),
(10, 'public/admin/photo_gallery/61ba0d93eae62.jpeg', 'স্কুলে ভর্তি সব সময় হবে লটারিতে', '1', NULL, NULL),
(11, 'public/admin/photo_gallery/61ba0daac2fdb.jpg', 'অমিক্রন নিয়ে উদ্বেগ, নেদারল্যান্ডসে স্কুল ছুটি', '1', NULL, NULL),
(12, 'public/admin/photo_gallery/61ba0dc935be6.jpg', 'দ.আফ্রিকা থেকে ফিরে নেদারল্যান্ডসে ১৩ জন ওমিক্রনে আক্রান্ত', '1', NULL, NULL),
(13, 'public/admin/photo_gallery/61ba0dfa0cb22.jpg', 'এই মেষে কি থাকা যাবে?', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `dist_id` int(11) DEFAULT NULL,
  `subdist_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_first` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_second` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_third` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` int(11) DEFAULT NULL,
  `first_section` int(11) DEFAULT NULL,
  `first_section_thumbnail` int(11) DEFAULT NULL,
  `big_thumbnail` int(11) DEFAULT NULL,
  `post_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `subcat_id`, `dist_id`, `subdist_id`, `user_id`, `title_bn`, `title_en`, `image_first`, `image_second`, `image_third`, `details_bn`, `details_en`, `tags_bn`, `tags_en`, `headline`, `first_section`, `first_section_thumbnail`, `big_thumbnail`, `post_date`, `post_month`, `soft_delete`, `created_at`, `updated_at`) VALUES
(4, 6, 8, 1, 2, 1, 'মেসির ব্যালন ডি’অর নিয়ে প্রশ্ন তোলা পোস্টে রোনালদোর মন্তব্যে ঝড়', 'Messi shows off Ballon d\'Or as PSG held by Nice', 'public/admin/postImages/61b991fcc90b2.jpg', NULL, NULL, 'sadsad', 'sdftgsaftsa', 'পাকিস্তান বাংলাদেশ', 'Pakistan  bagladesh', NULL, 1, NULL, 1, '15-12-21', 'December', '0', NULL, NULL),
(5, 6, 7, 1, 1, 1, 'বাংলাদেশ আওয়ামী লীগ', 'Bangladesh Awami League (', 'public/admin/postImages/61b9925ecaf58.jpg', NULL, NULL, '<b>gsfgsg</b>', 'sgfsdggs', 'পাকিস্তান বাংলাদেশ', 'Pakistan  bagladesh', NULL, 1, NULL, 1, '15-12-21', 'December', '0', NULL, NULL),
(6, 2, 5, 1, 1, 1, 'মেসির ব্যালন ডি’অর নিয়ে প্রশ্ন তোলা পোস্টে রোনালদোর মন্তব্যে ঝড়', 'Messi shows off Ballon d\'Or as PSG held by Nice', 'public/admin/postImages/61b9928584924.jpg', NULL, NULL, 'sdgfsfg', 'sgsgs', 'পাকিস্তান বাংলাদেশ', 'sadfsaf', 1, 1, 1, 1, '15-12-21', 'December', '0', NULL, NULL),
(7, 1, 14, 1, 2, 1, 'মেসি ব্যালন ডি’অর জিতুক, চাইছেন রামোস', 'Benfica to give Barca early test of convictions under Xavi', 'public/admin/postImages/61b994d6cee43.jpg', NULL, NULL, 'adfds', 'sgas', 'পাকিস্তান বাংলাদেশ', 'Pakistan  bagladesh', NULL, 1, NULL, 1, '15-12-21', 'December', '0', NULL, NULL),
(8, 4, 11, 1, 2, 1, 'বাংলাদেশ আওয়ামী লীগ', 'Benfica to give Barca early test of convictions under Xavi', 'public/admin/postImages/61b9951eb6826.jpg', NULL, NULL, 'adsfgsadgf', 'sdgsadg', 'পাকিস্তান বাংলাদেশ', 'Pakistan  bagladesh', 1, 1, 1, 1, '15-12-21', 'December', '0', NULL, NULL),
(9, 8, 18, 1, 2, 1, 'শান্তি প্রতিষ্ঠায় নবীদের সমঝোতা ও সন্ধিশান্তি প্রতিষ্ঠায়', 'Messi shows off Ballon d\'Or as PSG held by Nice', 'public/admin/postImages/61b9954f6c735.jpg', NULL, NULL, 'sadfsdaf', 'sfdasdf', 'পাকিস্তান বাংলাদেশ', 'Pakistan  bagladesh', NULL, 1, 1, 1, '15-12-21', 'December', '0', NULL, NULL),
(10, 5, 2, 1, 1, 1, 'ওবায়দুল কাদের আগের চেয়ে ভালো আছেন: অধ্যাপক শারফুদ্দিন', 'Benfica to give Barca early test of convictions under Xavi', 'public/admin/postImages/61b99588b9fc1.jpg', NULL, NULL, 'fsdsadf', 'sgsa', 'sfdsafsdaf', 'sadfsaf', NULL, 1, NULL, 1, '15-12-21', 'December', '0', NULL, NULL),
(11, 1, 14, 1, 2, 1, 'মেসি ব্যালন ডি’অর জিতুক, চাইছেন রামোস', 'Benfica to give Barca early test of convictions under Xavi', 'public/admin/postImages/61b997d9b6923.jpg', NULL, NULL, 'jhgg', 'bjhhj', 'পাকিস্তান বাংলাদেশ', 'Pakistan  bagladesh', 1, 1, NULL, NULL, '15-12-21', 'December', '0', NULL, NULL),
(12, 10, 19, 1, 2, 1, 'মেসি ব্যালন ডি’অর জিতুক, চাইছেন রামোস', 'Benfica to give Barca early test of convictions under Xavi', 'public/admin/postImages/61b9a5fbc2cdd.jpg', NULL, NULL, 'sg', 'sg', 'sfd', 's', 1, 1, 1, NULL, '15-12-21', 'December', '0', NULL, NULL),
(13, 1, 14, 1, 2, 1, 'মেসির ব্যালন ডি’অর নিয়ে প্রশ্ন তোলা পোস্টে রোনালদোর মন্তব্যে ঝড়', 'Messi shows off Ballon d\'Or as PSG held by Nice', 'public/admin/postImages/61b9f8f3e356d.jpg', NULL, NULL, 'sfdsdf', 'sdgsg', 'পাকিস্তান বাংলাদেশ', 'Pakistan  bagladesh', NULL, 1, 1, 1, '15-12-21', 'December', '0', NULL, NULL),
(14, 2, 5, 1, 2, 1, 'পররাষ্ট্রমন্ত্রী মোমেনকে যুক্তরাষ্ট্রের পররাষ্ট্রমন্ত্রী ব্লিঙ্কেনের ফোন', 'US Secretary of State Antony Blinken makes a phone call to Bangladesh foreign minister', 'public/admin/postImages/61b9f9db8db9d.png', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 1.8rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">র‌্যাপিড অ্যাকশন ব্যাটালিয়ন (র‌্যাব) এবং সংস্থার সাবেক ও বর্তমান সাত কর্মকর্তার বিরুদ্ধে যুক্তরাষ্ট্রের নিষেধাজ্ঞার সাত দিনের কম সময়ের মধ্যে মার্কিন পররাষ্ট্রমন্ত্রী অ্যান্টনি ব্লিঙ্কেন বাংলাদেশের পররাষ্ট্রমন্ত্রী এ কে আব্দুল মোমেনকে ফোন করেছেন।</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 1.8rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">আজ বুধবার সন্ধ্যায় মার্কিন পররাষ্ট্রমন্ত্রী ফোন করেন বলে পররাষ্ট্র মন্ত্রণালয়ের কর্মকর্তারা প্রথম আলোকে জানিয়েছেন। এ সময় দুই পররাষ্ট্রমন্ত্রী বাংলাদেশ ও যুক্তরাষ্ট্রের সম্পর্ক এগিয়ে নেওয়ার বিষয়ে আলোচনা করেন।</p>', '<p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">US Secretary of State Antony Blinken has spoken by phone with his Bangladesh foreign minister AK Abdul Momen.</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">Antony Blinken made the call on Wednesday evening.</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\"><em>More to follow…</em></p>', 'পাকিস্তান বাংলাদেশ', 'Pakistan  bagladesh', 1, 1, 1, 1, '15-12-21', 'December', '0', NULL, NULL),
(16, 7, 9, 1, 2, 1, 'চট্টগ্রামে মুরাদ হাসানের বিরুদ্ধে মামলার আবেদন খারিজ', 'UN calls on US, Iran to return to terms of nuclear deal', 'public/admin/postImages/61ba14f2b4b40.jpg', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 1.8rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">সাবেক তথ্য প্রতিমন্ত্রী মুরাদ হাসানসহ দুজনের বিরুদ্ধে ডিজিটাল নিরাপত্তা আইনে মামলা নেওয়ার আবেদন খারিজ করে দিয়েছেন চট্টগ্রামের একটি আদালত।</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 1.8rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">বিএনপির চেয়ারপারসন খালেদা জিয়ার নাতনি জাইমা রহমানকে নিয়ে কুরুচিপূর্ণ মন্তব্যের অভিযোগে গত রোববার মামলার আবেদন করেছিলেন চট্টগ্রামের বিএনপিপন্থী আইনজীবী এ এস এম বদরুল আনোয়ার। আজ বুধবার মামলার আদেশের জন্য দিন ধার্য রেখেছিলেন আদালত</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 1.8rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">আজ সন্ধ্যায় সাইবার ট্রাইব্যুনাল চট্টগ্রামের বিচারক এস কে তোফায়েল হাসান মামলার আবেদন খারিজ করে দেন। মুরাদ হাসান ছাড়াও তাঁর সাক্ষাৎকার নেওয়া মহিউদ্দিন হেলালের বিরুদ্ধে মামলার আবেদন করেছিলেন জাতীয়তাবাদী আইনজীবী ফোরাম, চট্টগ্রামের সভাপতি এ এস এম বদরুল আনোয়ার।</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 1.8rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">মামলার আবেদনে বলা হয়, জাইমা রহমান যুক্তরাজ্যে আইন পেশায় নিয়োজিত আছেন। তিনি কোনো রাজনৈতিক কর্মকাণ্ডের সঙ্গে জড়িত নন। ১ ডিসেম্বর মহিউদ্দিন হেলাল তৎকালীন প্রতিমন্ত্রী মুরাদ হাসানের সাক্ষাৎকার নেন। পরে সেটি ফেসবুকে প্রচার করা হয়। সাক্ষাৎকারে জাইমা রহমান সম্পর্কে অশ্লীল ও কুরুচিপূর্ণ বক্তব্য দেওয়া হয়, যা নারীর প্রতি বিদ্বেষপূর্ণ ও অবমাননাকর।</p>', '<div class=\"print-story-first-part blank-m__story-first-part__1nwWG\" style=\"border-top: 1px solid var(--border-color); padding-top: 28px; display: grid; grid-template-columns: auto 300px; color: rgb(0, 0, 0); font-family: Merriweather, Merriweather; font-size: 8px;\"><div><div class=\"print-meta-content blank-m__meta-content__26_XK\"><div id=\"b78d3b1b-45a8-44d2-823f-64a55eb2b076\" class=\"blank-m__first-story-card__2sv6z\"><div class=\"story-card-m__wrapper__ounrk story-card-m__en-wrapper__1GPcs story-card-m__eng-wrapper__3b6zk\" style=\"font-size: 1.4rem; margin: var(--space3) auto 0; --borderColor:var(--primaryColor); color: var(--black); max-width: 622px;\"><div class=\"    \r\n                  en-story-element\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; padding: 0px; max-width: 622px;\"><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: var(--font-2); font-size: 2rem; line-height: 1.67; white-space: break-spaces;\"> UN Tuesday urged Washington to lift sanctions on Tehran in line with the 2015 Iran nuclear deal, while calling on the Islamic republic to return to commitments to limit its nuclear program.</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: var(--font-2); font-size: 2rem; line-height: 1.67; white-space: break-spaces;\">\"I appeal to the United States to lift or waive its sanctions as outlined in the plan and extend the waivers regarding the trade in oil with the Islamic Republic of Iran,\" said Rosemary DiCarlo, the un under-secretary-general for political and peacebuilding affairs.</p></div></div></div></div></div></div><div class=\"blank-m__adslot-r1__2u0dj\" style=\"margin-bottom: var(--space2_5);\"><div class=\"blank-m__advertising__2XMi_\" style=\"text-align: center; font-family: var(--font-2); font-size: var(--base-smaller); color: var(--light-grey); margin-bottom: var(--space-2);\">Advertisement</div><div class=\"dfp-ad-unit\" style=\"text-align: center; position: sticky; top: 60px; margin-bottom: var(--space2);\"><div class=\"adunitContainer\"><div class=\"adBox\" id=\"story_0-r1\" data-google-query-id=\"CI3NwYiU5vQCFfCMZgIdnGUDfg\"><div id=\"google_ads_iframe_85406138/EnPalo_ROS_336x280_R1_1__container__\" style=\"border: 0pt none;\"><iframe id=\"google_ads_iframe_85406138/EnPalo_ROS_336x280_R1_1\" title=\"3rd party ad content\" name=\"google_ads_iframe_85406138/EnPalo_ROS_336x280_R1_1\" width=\"300\" height=\"250\" scrolling=\"no\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" role=\"region\" aria-label=\"Advertisement\" tabindex=\"0\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" data-google-container-id=\"i\" data-load-complete=\"true\" style=\"border-width: 0px; border-style: initial; vertical-align: bottom;\"></iframe></div></div></div></div></div></div><div class=\"storyContent-m__story-content-wrapper__3gLBe\" style=\"display: grid; grid-template-columns: auto 300px; color: rgb(0, 0, 0); font-family: Merriweather, Merriweather; font-size: 8px;\"><div class=\"story-content no-key-elements\"><div class=\"print-adslot storyContent-m__adslot__1CIfJ storyContent-m__adslot-300x250__1-Kzp\" style=\"text-align: center; margin: 0px auto; padding: var(--space1) 0 var(--space2_5); max-width: 300px; overflow: hidden;\"><div class=\"storyContent-m__advertising__rJT0S\" style=\"font-family: var(--font-2); font-size: var(--base-smaller); color: var(--light-grey); margin-bottom: var(--space-2);\">Advertisement</div><div class=\"dfp-ad-unit\" style=\"margin: auto; z-index: var(--default);\"><div class=\"adunitContainer\"></div></div></div><div id=\"c8fed477-39b5-4f11-9426-e592416245dc\"><div class=\"story-card-m__wrapper__ounrk story-card-m__en-wrapper__1GPcs story-card-m__eng-wrapper__3b6zk\" style=\"font-size: 1.4rem; margin: var(--space3) auto 0; --borderColor:var(--primaryColor); color: var(--black); max-width: 622px;\"><div class=\"    \r\n                  en-story-element\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; padding: 0px; max-width: 622px;\"><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: var(--font-2); font-size: 2rem; line-height: 1.67; white-space: break-spaces;\">\"Also important is the extension of US waivers regarding certain civilian nuclear-related activities,\" she told the UN Security Council, as negotiations resumed in Vienna on reviving the Joint Comprehensive Plan of Action, or JCPOA, as the nuclear deal is formally known.</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: var(--font-2); font-size: 2rem; line-height: 1.67; white-space: break-spaces;\">She added waiver extensions were also needed for exchanging enriched uranium out of Iran for natural uranium.</p></div></div></div></div></div></div>', 'sfdsafsdaf,adsfsa', 'sadfsaf,ass', NULL, 1, 1, 1, '15-12-21', 'December', '0', NULL, NULL),
(17, 9, 17, 1, 2, 1, 'গ্রহাণুকে ধাক্কা মেরে সরিয়ে দিতে মহাকাশযান পাঠালো নাসা', 'Deepfake anyone? AI synthetic media tech enters perilous phase', 'public/admin/postImages/61ba1d8ac951b.jpg', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">স্পেসএক্স এর ফ্যালকন ৯ রকেটে চড়ে ডার্ট (ডাবল অ্যাস্টেরয়েড রিডাইরেকশন টেস্ট) ক্যালিফোর্নিয়ার ভ্যানডেনবার্গ স্পেস ফোর্স বেজ থেকে বুধবার মহাকাশে পাড়ি দিয়েছে।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">বিবিসি জানায়, অভিযানটি চালানো হবে ডাইমোরফস নামের গ্রহাণুর ওপর। এর ব্যাস ১৬০ মিটার। এই গ্রহাণুটি ডিডিমোস নামের আরেকটি বড় গ্রহাণুকে (৭৮০ মিটার ব্যাস) কেন্দ্র করে ঘুরছে।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">কাছাকাছি ঘুরতে থাকা এ দুটি গ্রহাণুই ডার্টের লক্ষ্য। পৃথিবীর মাধ্যাকর্ষণ শক্তি ভেদ করে ডার্ট সূর্যের চারপাশে এর নিজ কক্ষপথে এগুতে থাকবে ডাইমোরফস এবং ডিডিমোসকে লক্ষ্য করে।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">এরপর ২০২২ সালে যুগ্ম কক্ষপথে থাকা ডাইমোরফসে ঘণ্টায় ১৫,০০০ মাইল বেগে আছড়ে পড়বে ডার্ট। এই সংঘর্ষের ফলে গ্রহাণুটির গতিসহ যাত্রাপথ কতটুকু পরিবর্তন করা গেল তা দেখা হবে।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">পৃথিবীকে বিপজ্জনক গ্রহাণু থেকে কীভাবে রক্ষা করা যায় তা জানার উদ্দেশে গ্রহাণুর গতিপথ পরিবর্তনের এমন চেষ্টা এটিই প্রথম।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">মহাকাশের কয়েকশ মিটারের এক টুকরো আবর্জনাও যদি পৃথিবীর সঙ্গে ধাক্কা খায় তাহলেও তা একটি মহাদেশজুড়ে ধ্বংসযজ্ঞ ডেকে আনতে পারে।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">তাই নাসা এবার ‘ডাবল অ্যাস্টেরয়েড রিডাইরেকশান টেস্ট’ (ডার্ট) নামের যে অভিযানে নেমেছে তা সফল হলে এর মাধ্যমে কোনওদিন হয়ত বিপজ্জনক কোনও গ্রহাণু ও পৃথিবীর সংঘর্ষ এড়ানো যাবে এবং মানবজাতি রক্ষা পাবে।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">পৃথিবী থেকে টেলিস্কোপের মাধ্যমে দশকের পর দশক ধরে ডিডিমোস এবং এর চাঁদ (মুনলেট) ডাইমোরফস নিয়ে গবেষণা চলছে।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">নাসা বলছে, ডাইমোরফস কিংবা ডিডিমোস কোনওটিই পৃথিবীর জন্য হুমকি নয়। কিন্তু এ দুটি গ্রহাণুর যে অবস্থান, তাতে এটিই পরীক্ষা চালিয়ে দেখার জন্য মোক্ষম জায়গা যে, একটি মহাকাশ যান দিয়ে কোনও একটি গ্রহাণুকে ধাক্কা দিলে তা গ্রহাণুটির গতিপথ বদলে দিতে পারে কিনা।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">এই ধাক্কা বা সংঘর্ষের ফলে ডার্ট ধ্বংস হয়ে যাবে। কিন্তু এই সংঘর্ষের এক সপ্তাহ আগেই ছোট্ট</p>', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">\"Do you want to see your best friend, colleague, or boss dancing?\" it added. \"Have you ever wondered how would you look if your face swapped with your friend\'s or a celebrity\'s?\"</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">The same app was advertised differently on dozens of adult sites: \"Make deepfake porn in a sec,\" the ads said. \"Deepfake anyone.\"</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">How increasingly sophisticated technology is applied is one of the complexities facing synthetic media software, where machine learning is used to digitally model faces from images and then swap them into films as seamlessly as possible.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">The technology, barely four years old, may be at a pivotal point, according to interviews with companies, researchers, policymakers and campaigners.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">It\'s now advanced enough that general viewers would struggle to distinguish many fake videos from reality, the experts said, and has proliferated to the extent that it\'s available to almost anyone who has a smartphone, with no specialism needed.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">\"Once the entry point is so low that it requires no effort at all, and an unsophisticated person can create a very sophisticated non-consensual deepfake pornographic video - that\'s the inflection point,\" said Adam Dodge, an attorney and the founder of online safety company EndTab.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">\"That\'s where we start to get into trouble.\"</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">With the tech genie out of the bottle, many online safety campaigners, researchers and software developers say the key is ensuring consent from those being simulated, though this is easier said than done. Some advocate taking a tougher approach when it comes to synthetic pornography, given the risk of abuse.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">Non-consensual deepfake pornography accounted for 96% of a sample study of more than 14,000 deepfake videos posted online, according to a 2019 report by Sensity, a company that detects and monitors synthetic media. It added that the number of deepfake videos online was roughly doubling every six months.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">\"The vast, vast majority of harm caused by deepfakes right now is a form of gendered digital violence,\"</p>', 'পাকিস্তান বাংলাদেশ', 'Pakistan  bagladesh', 1, 1, 1, 1, '15-12-21', 'December', '0', NULL, NULL),
(18, 9, 16, 1, 2, 1, 'কোভিড টিকার জন্য নোবেল? হয়ত শুধু সময়ের অপেক্ষা', 'How to use your phone’s privacy-protection tools', 'public/admin/postImages/61ba1f5057f22.jpg', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">বিজ্ঞানীদের কেউ কেউ মনে করছেন, কোভিড টিকার জন্য নোবেল জয় এখন কেবল সময়ের ব্যাপার। আগামী সোমবার চিকিৎসা শাস্ত্রে এবারের নোবেল পুরস্কারের ঘোষণায় যদি কোভিড টিকার উন্নয়নে গবেষকদের কাজের স্বীকৃতি নাও আসে, আগামীতে তা ঠিকই মিলবে।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">২০১৯ সালের শেষ দিকে নতুন করোনাভাইরাসের প্রথম সংক্রমণ শনাক্ত হওয়ার পর এ পর্যন্ত ৪৭ লাখ মানুষের মৃত্যু হয়েছে। এর বিস্তার ঠেকাতে এখনও কঠোর বিধি-নিষেধ মেনে চলছে অনেক দেশ।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">তবে কোভিড-১৯ টিকার কারণে প্রায় স্বাভাবিক জীবনে ফিরে এসেছে অনেক ধনী দেশ। আবার অনেক দেশ এখনও পর্যাপ্ত টিকার ব্যবস্থাই করতে পারেনি</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">চিকিৎসায় এবারের নোবেল পুরস্কারের জন্য যাদের নাম আলোচনায় আসছে, তাদের মধ্যে আছেন হাঙ্গেরীয় বংশোদ্ভূত কাতালিনা কারিকো এবং আমেরিকান ড্রিউ ওয়েইসম্যান। তাদের গবেষণার কল্যাণেই ‘মেসেঞ্জার রাইবোনিউক্লিক এসিড’ (এমআরএনএ) টিকা তৈরির পথ খুলে গেছে।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\"></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">মডার্না এবং ফাইজার-বায়োএনটেকের তৈরি এমআরএনএ টিকা করোনাভাইরাসের বিরুদ্ধে লড়াইয়ে বৈপ্লবিক গতি এনে দিয়েছে। এ টিকা দ্রুত তৈরি করা যায় এবং অত্যন্ত কার্যকর।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\">সুইডেনের ক্যারোলিনস্কা ইনস্টিটিউটের ল্যাবরেটরি মেডিসিনের অধ্যাপক আলী মিরাজামি বলেন, “আমি নিশ্চিত, আজ হোক কিংবা পরে, এই উদ্ভাবন পুরস্কার পাবেই। প্রশ্নটা হচ্ছে- সেটা কবে?”</p>', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">n iOS or Android, open the Settings app by tap (or by voice) and select Privacy. You’ll find several screens, menus and switches for restricting access to the phone’s hardware (like the microphone) and software (like your contacts list) on an app-by-app basis. Android 12 includes a privacy dashboard to show what apps have been up to, as well as shortcuts to managing the information that Google collects and stores in one’s Google Account.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">If you are curious, Apple and Google have posted statements about how they use your data. Keep in mind that blocking web trackers and location information can make your free apps work differently, and many news and cultural sites use tracking software. But if you want more control over your information, here are some specific categories to hit.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">Location</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">Your phone’s location services feature can pinpoint your whereabouts on a map, which is vital for things like providing driving directions. However, in recent versions of iOS and Android, you can share an approximate location instead of a precise one for slightly more privacy.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">On an iOS 15 device, open the Settings app and go to Privacy, then to Location Services and then System Services. Here, you can disable or enable location services and control which third-party apps (including Google’s software) can use your coordinates — or when they have permission to use that information. Scroll all the way down the list and select System Services to see how the iPhone uses your location, like collecting your “significant locations” such as your home address; you can turn this off or wipe the history if you find it invasive.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">On a phone running Android 12, open the Settings app and tap Location to open the controls and to see which apps have permission to use your location. Tap Location Services to get to more settings; you can also manage the Location History setting that records your wanderings. (Google’s business model includes serving up customised ads and services based on your personal information, so your user experience may be affected.)</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">Apps and Ads</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">Apple’s App Tracking Transparency feature warns you when an app wants to monitor your online activity, typically for the purpose of targeted advertising. In iOS 15 Settings, tap Privacy and then Tracking to get to the controls. (While Apple’s own advertising platform claims not to share personally identifiable data with others, you can turn off those ads in the Apple Advertising area of the Privacy settings.)</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">In Android 12, open the Settings and select Privacy to get to a slew of controls, including the Ads option for avoiding targeted ads by deleting one’s Advertising ID. And this month, Google announced that Android will automatically turn off permissions for apps you haven’t used in awhile.</p>', 'পাকিস্তান বাংলাদেশ', 'Pakistan  bagladesh', NULL, 1, NULL, NULL, '15-12-21', 'December', '0', NULL, NULL),
(19, 8, 18, 1, 2, 1, 'শান্তি প্রতিষ্ঠায় নবীদের সমঝোতা ও সন্ধি', 'Pfizer says COVID-19 pill near 90% effective in final analysis', 'public/admin/postImages/61ba206f05d70.jpg', NULL, NULL, '<p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">ইসলামের সার্বিক নীতিমালা ইহকালীন ও পরকালীন শান্তির জন্যই প্রণীত হয়েছে। জান্নাত সেই শান্তির চূড়ান্ত স্তর। সেটিই মুসলমানদের মূল লক্ষ্য। সেই লক্ষ্য অর্জনে সচেষ্ট মানুষের কর্মকাণ্ডে পৃথিবীর জীবনও স্বর্গে পরিণত হয়। নবী-রাসুলরা মানুষকে এই শান্তির পথ দেখিয়েছেন। তাঁরাই মানুষকে আল্লাহর সঙ্গে পরিচয় করিয়েছেন। মানুষকে করেছেন চিরশান্তির পথিক আর পৃথিবীকে পরিণত করেছেন শান্তির আবাসে। সব নবী পৃথিবীতে রাষ্ট্রীয় ক্ষমতা লাভ করেননি। যাঁরা রাষ্ট্রীয় ক্ষমতায় অধিষ্ঠিত হয়েছেন তাঁরা রাষ্ট্রীয় পর্যায়ে শান্তি-শৃঙ্খলা প্রতিষ্ঠা করেছেন। শান্তি রক্ষার প্রয়োজনে পরমতসহিষ্ণুতা, ধৈর্য, ক্ষমা, সমঝোতা ও ভালোবাসার পথ অবলম্বন করেছেন।</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">দাউদ (আ.)-এর পরমতসহিষ্ণুতা : দাউদ (আ.) ও সুলাইমান (আ.)-এর একটি ঘটনা পবিত্র কোরআনে বর্ণিত হয়েছে। আল্লাহ বলেন, ‘এবং স্মরণ করো দাউদ ও সুলাইমানের কথা, যখন তারা বিচার করছিল শস্যক্ষেত্র সম্পর্কে; তাতে রাত্রিকালে প্রবেশ করেছিল কোনো সম্প্রদায়ের মেষ; আমি প্রত্যক্ষ করছিলাম তাদের বিচার। এবং আমি সুলাইমানকে এ বিষয়ের মীমাংসা বুঝিয়ে দিয়েছিলাম এবং&nbsp; তাদের প্রত্যেককে আমি দিয়েছিলাম প্রজ্ঞা ও জ্ঞান। আমি পর্বত ও বিহঙ্গকুলকে অধীন করে দিয়েছিলাম—তারা দাউদের সঙ্গে আমার পবিত্রতা ও মহিমা ঘোষণা করত; আমিই ছিলাম এই সময়ের কর্তা।’ (সুরা : আম্বিয়া, আয়াত : ৭৮-৭৯)</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">আয়াতে বর্ণিত বিষয়টি হলো—দুজন লোক দাউদ (আ.)-এর কাছে উপস্থিত হয়। তাদের একজন মেষের মালিক এবং অন্যজন শস্যক্ষেত্রের মালিক। শস্যক্ষেত্রের মালিক মেষের মালিকের বিরুদ্ধে অভিযোগ করল, মেষযূথ রাতে তার শস্য নষ্ট করে দিয়েছে। (মেষযূথের মূল্য বিনষ্ট শস্যক্ষেত্রের সমান ছিল) দাউদ (আ.) রায় দিলেন যে মেষযূথের মালিক তার সব মেষ শস্যক্ষেত্রের মালিককে অর্পণ করবে। রায় নিয়ে বাদী ও বিবাদী দাউদ (আ.)-এর আদালত থেকে বের হলে দরজায় দাউদ (আ.)-এর পুত্র সুলাইমান (আ.)-এর সঙ্গে তাদের দেখা হয়। তিনি তাদের কাছ থেকে রায়ের আদ্যোপান্ত শোনেন। অতঃপর সুলাইমান (আ.) বলেন, ‘আমি রায় দিলে এর চেয়ে উত্তম হতো এবং উভয় পক্ষ উপকৃত হতো।’ তারপর তিনি পিতাকে বিষয়টি জানালেন, আপনি মেষযূথ শস্যক্ষেত্রের মালিককে দিয়ে দিন। সে এগুলোর দুধ ও পশম দ্বারা উপকৃত হোক। আর ক্ষেত মেষযূথের মালিককে দিয়ে দিন, সে তাতে চাষাবাদ করে ফসল উৎপাদন করুক। যখন শস্যক্ষেত্র মেষযূথের বিনষ্ট করার আগের অবস্থায় ফিরে যাবে তখন শস্যক্ষেত্র ক্ষেতের মালিককে আর মেষযূধ মেষযূথের মালিককে ফেরত দিন। দাউদ (আ.) খুশি হয়ে উভয় পক্ষকে ডেকে তা কার্যকর করেন। এভাবে শান্তি প্রতিষ্ঠা হলো। সবাই খুশি হলো।</p>', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">he US drugmaker last month said the oral medicine was around 89% effective in preventing hospitalisations or deaths when compared to placebo based on interim results in around 1,200 people. The data disclosed on Tuesday includes an additional 1,000 people.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">Nobody in the trial who received the Pfizer treatment died, compared with 12 deaths among placebo recipients.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">The Pfizer pills are taken with the older antiviral ritonavir every 12 hours for five days beginning shortly after onset of symptoms. If authorised, the treatment will be sold as Paxlovid.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">Pfizer also released early data from a second clinical trial showing that the treatment reduced hospitalisations by around 70% in around 600 standard-risk adults.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">\"It\'s a stunning outcome,\" Pfizer Chief Scientific Officer Mikael Dolsten said in an interview.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">\"We\'re talking about a staggering number of lives saved and hospitalisations prevented. And of course, if you deploy this quickly after infection, we are likely to reduce transmission dramatically,\" Dolsten said.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">Dolsten said he expects authorisation for use in high-risk individuals from the US Food and Drug Administration and other regulatory agencies soon. He does not believe an FDA advisory panel meeting will be needed.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">\"We\'re in very advanced regulatory dialogues with both Europe and the UK, and we have dialogues with most of the major regulatory agencies globally,\" Dolsten said.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">There are currently no oral antiviral treatments for COVID-9 authorised in the United States.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">Rival Merck &amp; Co has asked for emergency use authorisation of its antiviral pill molnupiravir. But that drug only reduced hospitalisations and deaths in its clinical trial of high-risk patients by around 30%.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">Some scientists have also raised safety concerns about the potential for birth defects from the Merck drug, as well as worries that it could cause the virus to mutate.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">Pfizer\'s drug works differently. It is part of a class of drugs called protease inhibitors currently used to treat HIV, hepatitis C and other viruses.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">Dolsten said recent laboratory testing showed that activity against the protease of the omicron variant is as \"good as basically any SARS-COV-2 variant of concern.\"</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">The company has said it can have 180,000 treatment courses ready to ship this year and plans to produce at least 80 million more in 2022.</p>', 'পাকিস্তান বাংলাদেশ', 'Pakistan  bagladesh', NULL, 1, NULL, 1, '15-12-21', 'December', '0', NULL, NULL);
INSERT INTO `posts` (`id`, `cat_id`, `subcat_id`, `dist_id`, `subdist_id`, `user_id`, `title_bn`, `title_en`, `image_first`, `image_second`, `image_third`, `details_bn`, `details_en`, `tags_bn`, `tags_en`, `headline`, `first_section`, `first_section_thumbnail`, `big_thumbnail`, `post_date`, `post_month`, `soft_delete`, `created_at`, `updated_at`) VALUES
(20, 8, 18, 1, 2, 1, 'নবীজি (সা.) কোন নামাজে কোন সুরা পড়তেন', 'Home > CORONAVIRUS PANDEMIC  US study suggests COVID-19 vaccines may be ineffective against', 'public/admin/postImages/61ba20cdf1d96.jpg', NULL, NULL, '<p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">নামাজে কোরআন তিলাওয়াত করা ফরজ, আর সুরা ফাতিহার সঙ্গে অন্য সুরা মিলিয়ে পড়া ওয়াজিব। এ ক্ষেত্রে পবিত্র কোরআনের যেকোনো স্থান থেকে তিলাওয়াত করলে নামাজের ফরজ আদায় হয়ে যাবে। তবে নবী কারিম (সা.) কিছু নামাজে কিছু সুরা বেশি পড়তেন। ফকিহ আলেমরা কিরাতের ক্ষেত্রে নবীজি (সা.)-এর অনুসৃত নিয়ম অনুসরণকে সুন্নত বলেন। নবী কারিম (সা.) সাধারণত নামাজে কিভাবে এবং কোন কোন সুরা পড়তেন তা এখানে তুলে ধরা হলো—</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">পাঁচ ওয়াক্তের ফরজ নামাজের কিরাত : পাঁচ ওয়াক্তের ফরজ নামাজে কোরআন তিলাওয়াতে নিম্নোক্ত পদ্ধতি অনুসরণ করা সুন্নত :</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">১.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; সফর অবস্থায় সুরা ফাতিহার পর যেকোনো সুরা মিলিয়ে নিলেই চলবে। এ ক্ষেত্রে কোনো বাধ্যবাধ্যকতা নেই।</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">২.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ফজর ও জোহরের নামাজে সুরা হুজুরাত থেকে সুরা বুরুজ পর্যন্ত সুরাগুলো থেকে পড়া।</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">৩.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; আসর ও এশার নামাজে সুরা তারিক থেকে সুরা বায়্যিনাহ পর্যন্ত সুরাগুলো থেকে পড়া।</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">৪.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; মাগরিবের নামাজে সুরা জিলজাল থেকে সুরা নাস পর্যন্ত সুরাগুলো থেকে পড়া।</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">সুন্নত ও অন্য নামাজের কিরাত : ফরজ নামাজ ছাড়া সুন্নতসহ অন্য নামাজে কোরআন তিলাওয়াতের ক্ষেত্রে নিম্নোক্ত পদ্ধতি অনুসরণ করা সুন্নত :</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">৫.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; নবী কারিম (সা.) ফজরের সুন্নত নামাজের প্রথম রাকাতে সুরা কাফিরুন এবং দ্বিতীয় রাকাতে সুরা ইখলাস পড়তেন।</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">৬.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; রাসুলুল্লাহ (সা.) বিতর নামাজের প্রথম রাকাতে সুরা দুহা, দ্বিতীয় রাকাতে সুরা কাফিরুন এবং তৃতীয় রাকাতে সুরা ইখলাস পড়তেন।</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">৭.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; নবী (সা.) জুমার দিন ফজরের নামাজে প্রায়ই সুরা আস-সাজদা ও সুরা দাহর পড়তেন।</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">৮.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; তিনি জুমার নামাজে প্রায়ই সুরা আ’লা ও সুরা গাশিয়াহ অথবা সুরা জুমআ ও সুরা মুনাফিকুন পড়তেন।</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">৯.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; রাসুলুল্লাহ (সা.) ফরজ নামাজের প্রথম রাকাতে দ্বিতীয় রাকাত অপেক্ষা দীর্ঘ কিরাত পড়তেন।</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">১০.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; নবীজি (সা.) ফজর নামাজে অন্য নামাজের চেয়ে দীর্ঘ কিরাত পড়তেন।</p><p style=\"margin: 20px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: solaimanlipi; font-size: 17px; text-align: justify; background-color: rgb(250, 249, 249);\">ফকিহ আলেমদের মতে, নিজের পক্ষ থেকে কোনো নামাজের জন্য কোনো সুরা নির্দিষ্ট করে নেওয়া শরিয়ত-পরিপন্থী। (দৈনন্দিন জীবনে ইসলাম, পৃষ্ঠা ২৪৮, মা-লা বুদ্দা মিনহু, পৃষ্ঠা ৪৯-৫০)</p>', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">The study from researchers at Massachusetts General Hospital (MGH), Harvard and MIT that has not yet been peer reviewed tested blood from people who received the Moderna, Johnson &amp; Johnson and Pfizer/BioNTech vaccines against a pseudovirus engineered to resemble the omicron variant.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">The researchers found \"low to absent\" antibody neutralisation of the variant from the regular regimens of all three vaccines - two shots of the Moderna or Pfizer/BioNTech vaccines or one of J&amp;J\'s single-dose vaccine.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">But the blood from recent recipients of an additional booster dose exhibited potent neutralisation of the variant, the study found.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">The scientists also suggested that omicron is more infectious than previous variants of concern, including about twice as transmissible as the currently dominant Delta variant, which may soon be overtaken by omicron.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">The results are in line with other studies recently published. Researchers at the University of Oxford said on Monday that they found the two-dose Pfizer and AstraZeneca COVID-19 vaccine regimens do not induce enough neutralising antibodies against the new variant.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">BioNTech and Pfizer said last week that a three-shot course of their COVID-19 vaccine was able to neutralize the new omicron variant in a laboratory test, but two doses resulted in significantly lower neutralising antibodies.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: arial, sans-serif; overflow: visible; color: rgb(21, 21, 21);\">Moderna and J&amp;J have yet to release any of their own data about how the vaccines perform against the new variant. J&amp;J declined to comment on the new study and Moderna did not respond to request for comment.</p>', 'পাকিস্তান বাংলাদেশ', 'sadfsaf', NULL, 1, NULL, NULL, '15-12-21', 'December', '0', NULL, NULL),
(21, 5, 3, 1, 2, 1, 'কোপাজয়ী আর্জেন্টিনা বনাম ইউরোজয়ী ইতালির ম্যাচ জুনে', 'Hosts NZ begin women\'s ODI WC against West Indies', 'public/admin/postImages/61ba65c190afb.jpg', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 1.8rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">গুঞ্জনটা অনেক দিন ধরেই বাতাসে ভাসছিল। ইউরোজয়ী দল আর কোপা আমেরিকা জয়ী দল দুটিকে মুখোমুখি করিয়ে দেওয়ার ভাবনা এবারই যে প্রথম, এমন তো নয়! শেষ পর্যন্ত ভাবনাটা আলোর মুখ দেখছে।</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 1.8rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">ইউরোপের ফুটবলের নিয়ন্ত্রক সংস্থা উয়েফা এবং দক্ষিণ আমেরিকান ফুটবলের নিয়ন্ত্রক সংস্থা কনমেবল আজ বুধবার এক ঘোষণায় জানিয়ে দিয়েছে, এবারের কোপা আমেরিকাজয়ী আর্জেন্টিনা ও ইউরোজয়ী ইতালি আগামী বছরের ১ জুন মুখোমুখি হবে। ম্যাচের ভেন্যু—লন্ডনের ওয়েম্বলি স্টেডিয়াম।  </p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 1.8rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">ম্যাচটার একটা নামও আছে—ফিনালিসমো। ইতালিয়ান এই শব্দের অর্থ? ফাইনাল!</p>', '<p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">he first semi-final will be held at the Basin Reserve in Wellington on 30 March, while Hagley Oval in Christchurch will host the second on 31 March and the final on 3 April.</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">Australia, England, South Africa and India qualified for the event through the ICC Women\'s Championship 2017-20, while New Zealand automatically qualified as hosts.</p>', 'পাকিস্তান বাংলাদেশ', 'Pakistan  bagladesh', 1, NULL, 1, NULL, '15-12-21', 'December', '0', NULL, NULL),
(22, 6, 8, 1, 2, 1, '‘এসএসসি পরীক্ষার আগে এমন অবস্থা হয়েছিল আমার’', 'Court sets new date for indictment hearing in drugs case against Pori Moni', 'public/admin/postImages/61ba661808cc7.jpg', NULL, NULL, '<span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">বুধবার বিকেলে ছবির পরিচালক রনি ভৌমিক মুক্তির খবর নিশ্চিত করেছেন। তিনি বলেন, ‘আমরা আগেই ভেবে রেখেছি যে চলতি বছরে ছবিটি মুক্তি দেব। ছবির সেন্সর সনদ পাওয়ার অপেক্ষায় ছিলাম। সেটি পেয়েছি। এরপর মুক্তির তারিখ নিয়ে একটু দ্বিধায় ছিলাম। সেটাও কেটে গেছে। ২৪ ডিসেম্বর মুক্তির বিষয়টি আজই চূড়ান্ত করলাম।’</span><br style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\"><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">প্রচার-প্রচারণা ছাড়াই কি হুট করে ছবিটির মুক্তি দেওয়া হচ্ছে? এমন প্রশ্নে পরিচালক বলেন, ‘এখনো প্রায় ৯ দিন হাতে আছে। আজ ছবির পোস্টার প্রকাশ করেছি। এখন থেকেই জোরেশোরে প্রচারণায় নামছি। এটা ঠিক যে প্রচারের জন্য দীর্ঘ সময় পেলাম না। তবে আমার বিশ্বাস, কনটেন্ট ভালো লাগলে ছবিটি দেখতে অবশ্যই হলমুখী হবেন দর্শক।’</span>', '<p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">Earlier, the court fixed 14 December for holding hearing on the matter, but judge Nazrul Islam of Dhaka 10th Special Judge Court passed the order as the prime accused Pori Moni failed to appear before the court because of her “poor health”.</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">Accepting a time plea filed by her counsel Nilanjana Rifat Surovi, the court deferred the hearing till 2 January.</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">The court of Dhaka Metropolitan Sessions judge on 15 November accepted the charge sheet filed in the case and transferred it to Dhaka 10th Special Judge Court for further proceedings.</p>', 'পাকিস্তান বাংলাদেশ', 'Pakistan  bagladesh', NULL, 1, NULL, NULL, '15-12-21', 'December', '0', NULL, NULL),
(23, 7, 9, 1, 2, 1, 'মিয়ানমারের বিরুদ্ধে আরও শাস্তি', NULL, 'public/admin/postImages/61ba666b1f735.jpg', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 1.8rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">রাখাইনে রোহিঙ্গা জনগোষ্ঠীর মানুষের ওপর মিয়ানমারের সেনাবাহিনীর পরিচালিত ‘গণহত্যার’ অভিযোগের পরিপ্রেক্ষিতে আরও কী ধরনের শাস্তিমূলক পদক্ষেপ নেওয়া যায়, সেই বিষয়ে সক্রিয়ভাবে চিন্তাভাবনা করছে যুক্তরাষ্ট্র। মালয়েশিয়া সফররত যুক্তরাষ্ট্রের পররাষ্ট্রমন্ত্রী অ্যান্টনি ব্লিঙ্কেন  বুধবার এই মন্তব্য করেন।</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 1.8rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">বন্ধুত্বপূর্ণ সম্পর্ক জোরদার করার লক্ষ্যে দক্ষিণ-পূর্ব এশিয়ার দেশগুলোয় সফর শুরু করেছেন ব্লিঙ্কেন। ইন্দোনেশিয়া সফরের পর তিনি এখন মালয়েশিয়ায় অবস্থান করছেন। সফরকালে মালয়েশিয়ার পররাষ্ট্রমন্ত্রী সাইফুদ্দিন আবদুল্লাহকে ব্লিঙ্কেন বলেন, মিয়ানমারের জান্তা সরকারের বিরুদ্ধে আরও শাস্তিমূলক পদক্ষেপ নেওয়ার চিন্তাভাবনা করছে ওয়াশিংটন। এ জন্য আগামী বছর সুবিধাজনক সময়ে মিয়ানমার পরিস্থিতি নিয়ে একটি সম্মেলনের আয়োজন করবেন মার্কিন প্রেসিডেন্ট জো বাইডেন। এই সম্মেলনে দক্ষিণ-পূর্ব এশিয়ার আঞ্চলিক জোট আসিয়ানের সদস্যদেশগুলোকে আমন্ত্রণ জানানো হবে।</p>', '<p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">External affairs minister S Jaishankar on Wednesday said that Quad consisting of the US, Japan, Australia, and India is “very much for real” and has moved “very effectively and well” in the past year.</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">During a discussion at the Global Technology Summit 2021, the EAM said, “Quad is very much for real. It has moved very effectively, well precisely because it’s a very contemporary arrangement. The subjects Quad is looking at are practical subjects that will make a difference.”</p><p style=\"margin-right: 0px; margin-bottom: var(--space2); margin-left: 0px; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: rgb(18, 18, 18);\">He also said that the new grouping between India, Israel, the UAE and US, would be focusing on technology, including green tech, digital and start-ups.</p>', 'পাকিস্তান বাংলাদেশ', 'sadfsaf', NULL, 1, NULL, NULL, '15-12-21', 'December', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prayer`
--

CREATE TABLE `prayer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fajr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dhuhr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maghrib` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prayer`
--

INSERT INTO `prayer` (`id`, `fajr`, `dhuhr`, `asr`, `maghrib`, `isha`, `created_at`, `updated_at`) VALUES
(1, '5.30 AM', '12.45PM', '3:35 PM', '5:11 PM', '6:31 PM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_verification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alexa_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_author`, `meta_title`, `meta_keyword`, `google_analytics`, `google_verification`, `alexa_analytics`, `created_at`, `updated_at`) VALUES
(1, 'DhakaTia News', 'DhakaTia News', 'DhakaTia News', 'DhakaTia News', 'DhakaTia News', 'DhakaTia News', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_address_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_address_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_phone_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_phone_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `youtube`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/profile.php?id=100004262354257', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcategory_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcategory_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_bn`, `subcategory_en`, `created_at`, `updated_at`) VALUES
(2, '5', 'ক্রিকেট', 'Criket', NULL, NULL),
(3, '5', 'ফুটবল', 'Football', NULL, NULL),
(4, '2', 'ঢাকা', 'Dhaka', NULL, NULL),
(5, '2', 'সিলেট', 'Sylhet', NULL, NULL),
(6, '2', 'কুমিল্লা', 'comilla', NULL, NULL),
(7, '6', 'টেলিভিশন', 'Television', NULL, NULL),
(8, '6', 'ঢালিউড', 'Dhallywood', NULL, NULL),
(9, '7', 'USA', 'use', NULL, NULL),
(10, '7', 'ইন্ডিয়া', 'india', NULL, NULL),
(11, '4', 'বিনপি', 'BNP', NULL, NULL),
(12, '4', 'লীগ', 'Lig', NULL, NULL),
(13, '1', 'রাজধানী', 'Division', NULL, NULL),
(14, '1', 'জেলা', 'Districts', NULL, NULL),
(15, '1', 'অপরাধ', 'Crime', NULL, NULL),
(16, '9', 'সাইন্স', 'Science', NULL, NULL),
(17, '9', 'নাসা', 'Nasa', NULL, NULL),
(18, '8', 'ইতিহাস', 'History', NULL, NULL),
(19, '10', 'জিডিপি', 'GDP', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subdistricts`
--

CREATE TABLE `subdistricts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdistrict_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdistrict_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subdistricts`
--

INSERT INTO `subdistricts` (`id`, `district_id`, `subdistrict_bn`, `subdistrict_en`, `created_at`, `updated_at`) VALUES
(1, '1', 'বাড্ডা', 'Badda', NULL, NULL),
(2, '1', 'কুমিল্লা', 'Comilla', NULL, NULL);

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
  `categorie` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `districts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `categorie`, `districts`, `post`, `setting`, `gallery`, `user_role`, `ads`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Na Shakil', 'shakil.cse2016@gmail.com', NULL, '$2y$10$clI2cHdNH7HRK05/6oK9vu1mDOZcggplmYSk6THw79Kez7S7AZqtm', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2021-12-14 14:33:23', '2021-12-14 14:33:23'),
(2, 'rabeya', 'rabeya@gmail.com', NULL, '$2y$10$4WIf5O0PZYvRDxjsXfVmk.nR9LhAjZXWMdVISSItQZQjkL8xY/4qy', '1', '1', '1', NULL, NULL, NULL, '1', '0', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video`, `video_title`, `video_type`, `created_at`, `updated_at`) VALUES
(3, 'xvV7OI1jdu4', 'Tesla Factory Tour with Elon Musk!', '1', NULL, NULL),
(4, 'euQDAkiwM_I', 'How To Learn To Code When You Have No Time And No Money - Codeland 2018', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `website_setting`
--

CREATE TABLE `website_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_address_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_address_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_phone_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_phone_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_setting`
--

INSERT INTO `website_setting` (`id`, `site_name_bn`, `site_name_en`, `site_logo`, `site_address_bn`, `site_address_en`, `site_phone_bn`, `site_phone_en`, `site_email`, `created_at`, `updated_at`) VALUES
(1, 'ডাকাতিয়া নিউজ', 'DhakaTia News', 'public/admin/site_setting/61ba55b908459.jpg', '<p>                    পূর্ব নুরেরচালা </p><p>মসজিদ রোড (হাজী ফার্মেসি-২)</p><p><b> ভাটারা ঢাকা-১২১২&nbsp;</b></p>', '<p>                  Purbo Nurer Chala</p><p>Moshjeed Road (Haji Farmecy-2)</p><p><b>Vatara,Dhaka-1212\r\n                </b></p>', '+৮৮০১৬২৩৮৩৩৮৯২', '+8801623833892', 'shakil.cse2016@gmail.com', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_website`
--
ALTER TABLE `important_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livetv`
--
ALTER TABLE `livetv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prayer`
--
ALTER TABLE `prayer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subdistricts`
--
ALTER TABLE `subdistricts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_setting`
--
ALTER TABLE `website_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `important_website`
--
ALTER TABLE `important_website`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `livetv`
--
ALTER TABLE `livetv`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `prayer`
--
ALTER TABLE `prayer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subdistricts`
--
ALTER TABLE `subdistricts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `website_setting`
--
ALTER TABLE `website_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
