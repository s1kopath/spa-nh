-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 06:00 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_level` tinyint(4) NOT NULL COMMENT 'master = 0, super=1, manager=2',
  `status` tinyint(4) NOT NULL COMMENT '1 = Active, 2 = Inactive',
  `created_by` int(191) DEFAULT NULL,
  `updated_by` int(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone_number`, `password`, `access_level`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Frank Stone', 'f@m.c', '01762979871', '25d55ad283aa400af464c76d713c07ad', 2, 1, 1, 3, '2020-12-03 03:41:48', '2021-01-05 14:18:57'),
(3, 'Bruce Wayne', 'admin@gmail.com', '01716879647', '81dc9bdb52d04dc20036dbd8313ed055', 0, 1, 2, NULL, '2020-12-08 01:01:40', '2020-12-08 01:01:40'),
(4, 'Dr. Zahid', 'doctorzahid@gmail.com', '01621842111', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1, 3, 2, '2020-12-08 04:47:43', '2022-04-11 06:41:24'),
(5, 'Samiul', 'samiul@spabd.org', '01751891037', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, 3, NULL, '2021-02-15 20:20:52', '2021-02-15 20:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(10) UNSIGNED NOT NULL,
  `doner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doner_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doner_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doner_organization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doner_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donation_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_bkash_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_bkash_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `doner_name`, `doner_email`, `doner_phone`, `doner_organization`, `doner_message`, `donation_amount`, `receiver_bkash_no`, `sender_bkash_no`, `payment_method`, `created_at`, `updated_at`) VALUES
(2, 'John Doe', 'john@mail.com', '01222222222', 'abc', 'this is a test.', '99500', '01404229729', '01333333333', 'Bkash', '2021-01-25 13:54:16', '2021-01-25 13:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 = Active, 2 = Inactive',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_title`, `event_content`, `event_location`, `event_image`, `start_date`, `end_date`, `start_time`, `end_time`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Winter clothing distribution', 'SPA এর পক্ষ থেকে ঢাকার ফুটপাতে পড়ে থাকা অবহেলিত শীতার্ত মানুষদের পাশে শীতবস্ত্র ও কম্বল  দিয়ে পাশে দাঁড়িয়েছে SPA ফ্যামিলি, কম্বল ও শীতবস্ত্র বিতরণ করছেন SPA এর সেক্রেটারি ডা. দেওয়ান মোহাম্মদ জাহিদ, সহকারী সেক্রেটারি রফিকুল ইসলাম সিরাজী, সদস্য মোহাম্মদ উল্লাহ রানা ও ডা. মনিরুল ইসলাম।</div><div>SPA অসহায়, বঞ্চিত মানুষদের পাশে আছে ভবিষ্যতেও থাকবে, আপনারাও মানবতার সেবায় এগিয়ে আসতে পারেন।', 'Dhaka', 'e0678dffaf8328ad2a88277176e96be6.jpeg', '2020-12-22', '2020-12-22', '18:01:00', '22:00:00', 1, 3, 3, '2020-12-28 19:21:02', '2020-12-28 20:19:22'),
(3, 'Winter blanket distribution on Panchagar', 'SPA এর পক্ষ থেকে পঞ্চগড়ের অসহায় শীতার্তদের কম্বল ও শীতবস্ত্র বিতরণ করা হয়েছে, এসপিএ ফ্যামিলি সব সময় অসহায়দের পাশে থাকার চেষ্টা করে যাচ্ছে, আমরা বিশ্বাস করি মানুষ মানুষের জন্য, সারাদেশেই অসহায়দের সাহায্য সহযোগিতা করতে আমরা বদ্ধপরিকর।', 'Panchagar', 'c03954187359e431ea05163fa3b1bf05.jpeg', '2020-12-29', '2020-12-29', '10:01:00', '18:00:00', 1, 3, 3, '2020-12-28 20:18:40', '2021-01-12 13:55:36'),
(4, 'Members committee meeting', 'General meeting for members of SPA.', 'SPA, Head office', '71525358af0dece77dead9503f74707f.jpeg', '2021-01-04', '2021-01-04', '18:01:00', '20:00:00', 1, 3, NULL, '2021-01-19 13:01:58', '2021-01-19 13:01:58'),
(5, 'Free medical camp 2019', 'A free medical camp held by SPA for the poor locals of Kamrangirchar.', 'Kamrangirchar, Dhaka.', '4bde8857e88681636e5a13b61f993522.jpeg', '2019-12-16', '2019-12-16', '10:01:00', '17:00:00', 1, 3, NULL, '2021-01-19 13:05:17', '2021-01-19 13:05:17');

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
-- Table structure for table `img_galleries`
--

CREATE TABLE `img_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 = Active, 2 = Inactive',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `img_galleries`
--

INSERT INTO `img_galleries` (`id`, `gallery_title`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Free Medical Camp 2019', 1, 3, NULL, '2021-01-19 13:15:32', '2021-01-19 13:15:32'),
(2, 'Winter Blanket Distribution On Panchagar', 1, 3, NULL, '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(3, 'Winter Clothing Distribution', 1, 3, NULL, '2021-01-12 06:09:35', '2021-01-12 06:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_category` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `member_biography` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_ordering` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 = Active, 2 = Inactive',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_name`, `member_email`, `member_phone`, `member_designation`, `member_category`, `member_biography`, `member_image`, `member_ordering`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Arifur Rahman', NULL, NULL, 'Chairman', '[\"Executive\"]', '<p>Dr. Arifur Rahman is a physician cum entrepreneur who has\r\nbeen living in Saudi Arabia for last 38 years. \r\nHe has been serving as a private physician to the members of the Saudi\r\nRoyal family.&nbsp; He is also the General\r\nManager of TASS Group International, a Riyadh based umbrella organization for\r\ninternational trade.&nbsp;</p>\r\n\r\n<p><a target=\"_blank\" rel=\"nofollow\"></a>Dr. Arif is a co-founder of Shamorita\r\nHospital, one of the best private hospitals in Dhaka. He was a founding sponsor\r\ndirector of Premier Bank, Bangladesh (<a target=\"_blank\" rel=\"nofollow\" href=\"http://www.premierbankltd.com\">www.premierbankltd.com)</a>.&nbsp; He is a founding director of AlwaysOn Network\r\nBangladesh ltd, an American joint venture of non-resident Bangladeshi\r\nentrepreneurs and technologists, providing highspeed wireless Broadband\r\nservices. He is the Chairman of Denim Polymer Industries Ltd.&nbsp;</p>\r\n\r\nIn the 70’s, while a student of Dhaka Medical College,\r\nDr. Arif became extremely popular all over Bangladesh as a TV artist for\r\nperforming jokes in weekly TV programs.&nbsp;\r\nDr. Arif was also well known as a journalist. Many of his writings had\r\nbeen published as cover stories in popular Bengali weekly “Weekly Bhichitra”\r\nand the daily Dainik Bangla. He was the author of legendary cover story on\r\n“Khalilullah who fed on human liver.” Dr. Arif was a Director of a prominent\r\nBangla newspaper The Daily Bhorerkagoj (<a target=\"_blank\" rel=\"nofollow\">www.Bhorerkagoj.com)</a>. He is chairman of\r\nThe Shoes an state of art Shoe producing company. He is Chairman of Denim\r\nPlastic Factory.&nbsp;', '294a0ae822fb71cb882bdd566748464e.jpeg', 1, 1, 3, 3, '2021-01-18 23:10:49', '2021-01-30 16:40:59'),
(2, 'Ayesha Labiba Khalil', NULL, NULL, 'Member', '[\"Executive\"]', NULL, 'd843b7941d821f0aa82655dc876aa024.jpeg', 7, 1, 3, 3, '2021-01-18 23:12:52', '2021-01-30 16:39:31'),
(3, 'Rofiqul Islam', NULL, NULL, 'Joint Secretary', '[\"Executive\"]', NULL, '4aa2f840c87e7cb94e13e95f863aaf01.jpeg', 5, 1, 3, 3, '2021-01-18 23:14:13', '2021-02-24 20:33:20'),
(4, 'Dewan Md. Abu Zahid', NULL, NULL, 'Secretary', '[\"Executive\"]', NULL, '687914cdb746e2840e1af15995c420a7.jpeg', 3, 1, 3, 3, '2021-01-18 23:15:10', '2021-02-13 21:10:54'),
(5, 'Dr. Md. Jahangir Alam', NULL, NULL, 'Member', '[\"Executive\"]', NULL, '1f00042bd814b1ab344285bce44803d9.jpeg', 6, 1, 3, 5, '2021-01-18 23:15:59', '2021-08-24 19:04:16'),
(6, 'Dr.  Masudul Hassan MD', NULL, NULL, 'Vice Chairman', '[\"Executive\"]', NULL, '2ec33082681b68240c8358d0b4b35066.jpeg', 2, 1, 3, 5, '2021-01-18 23:17:01', '2021-08-23 19:15:51'),
(7, 'Masud Alam', NULL, NULL, 'Treasurer', '[\"Executive\"]', NULL, '0a0793ef94d97b17fb52fe519161f954.jpeg', 4, 1, 3, 5, '2021-01-18 23:18:30', '2021-08-24 19:03:38'),
(8, 'Prof. Dr. Ziauddin Ahmed', NULL, NULL, 'President', '[\"Advisory\"]', 'He is Professor of Medicine and Nephrology, Lewis Katz School of Medicine, Temple University, Philadelphia and Professor Emeritus, Drexel University College of Medicine, Philadelphia.<div>He has earned board certifications in 5 medical specialties including Internal Medicine, Nephrology, Critical care medicine, Geriatrics and clinical Hypertension. He has trained hundreds of medical students, medical residents, Nephrology fellows, MPH and PhD students since 1986.</div><div>He was founding member and President of Bangladesh Medical Association of North America. He is also founder editor of BMANA newsletter and Webpage.&nbsp;</div><div>He was president of Bangladesh Association of Delaware valley in 1989-91, He is the founding president of 43rd street Bengali Mosque, convener of 3rd National Bengali Poetry conference of USA in 1997. He is one of the organizers of Bangladesh 1971 Genocide conference at Kean University , NJ, He is the chairman of Physician panel of Bangladesh Environmental Network (BEN), vice chairman of distressed children and infant international USA. He has created many documentaries including of history and heritage of Bangladesh. He is the convener of Muktodhara Book fair 2020 which the third largest Bengali book fair after Dhaka and Kolikata. &nbsp;</div><div>He served as convener of many national and international symposiums in Bangladesh. He started Peritoneal dialysis program, established first Infection control program and emergency medicine training program, Initiated Medical education seminar and training jointly with USA based FAIMER/ECFMG. He was USA coordinator of First Non Resident Bangladeshi convention in 2007. He is the president and founder of Kidney Foundation Sylhet a non profit Kidney center which is providing dialysis free to 30% patients and with minimum cost to others. Recently Kidney foundation Sylhet has started two Corona isolation and treatment centers and also supporting other districts and regions to organize corona isolation centers. He had received many awards in Bangladesh and USA including award for excellent teaching ,Drexel university President’s silver medal award for community service in 2008, Global health award ,Chairman of Bangladesh Red cross award for improving health care in Bangladesh, life time achievement award of Bangladesh Medical Association of North America , He has received prestigious Ellis island Medal of honor USA in 2018 for significant contribution to improve the life of people and society in USA and native country in Bangladesh.</div>', '4821d7731fcf11414d06e05a1866f4f7.jpeg', 1, 1, 3, 3, '2021-02-15 13:34:37', '2021-02-20 13:37:14'),
(9, 'Prof. Humayun kabir chowdhury', NULL, NULL, 'Member', '[\"Advisory\"]', '<div>Prof. Humayun Kabir Chowdhury (MBBS, FCPS) is a \"Professor of Surgery\", &nbsp;</div><div>• BIRDEM &amp; Ibrahim Medical College, Dhaka, Bangladesh.</div><div>• Academic coordinator, Ibrahim Medical College.</div><div>• Course director, Online Certificate course in Medical education (CMed).</div><div>• President, Bangladesh Society of Emergency Medicine.</div><div>• Vice President of the International College of Surgeon Bangladesh Chapter</div><div><br></div><div>Education:</div><div>• Graduated from “Dhaka Medical College” in1976. </div><div>• Fellowship in surgery, in 1981.Trained at different centers at home and in UK, USA, and Singapore in general surgery, laparoscopic surgery and vascular surgery.</div><div><br></div><div>Conferences attended &amp; scientific paper presented:</div><div>Attended 35 International meetings abroad and presented 195 scientific papers at home and abroad. Participated at international meetings abroad, was invited as a faculty. Performed surgeries, as a faculty at home and abroad. Organized several international workshop on laparoscopic surgery. </div><div><br></div><div>Interest:</div><div>Laparoscopic surgery (performed more than 20,000 laparoscopic surgery), training, medical education. Established the first Minimally Invasive Surgery Center (MISC) and skill lab in the country at BIRDEM in 1998. Produced three academic video cd on laparoscopic surgery. </div><div><br></div><div>Publications: &nbsp;</div><div>Eighteen articles in medical journals. Book chapters in diabetes mellitus &amp; articles on laparoscopic surgery in the daily newspapers. Member of the editorial board of three medical journals from home and abroad.</div><div><br></div><div>Society positions:</div><div>• Past president of the Society of Laparoscopic Surgeons of Bangladesh. </div><div>• Governor ELSA (Endoscopic and Laparoscopic Surgeons of Asia).</div><div>• Life member of several surgical and medical societies.</div>', 'd761ed3b41e686be8fea39770cfedefd.jpeg', 2, 1, 3, 3, '2021-02-15 13:35:26', '2021-02-20 13:36:26'),
(10, 'Prof. Dr. Khalilur Rahman', NULL, NULL, 'Member', '[\"Advisory\"]', NULL, '946bd10aaa778ca6549d24f11a953420.jpeg', 3, 1, 3, 3, '2021-02-15 13:36:00', '2021-02-15 19:02:55'),
(11, 'Prof. Shafiqur Rahman', NULL, NULL, 'Member', '[\"Advisory\"]', '<div>Dr. Shafiqur Rahman is a professor of banking and finance, school of business administration in Portland State University. He led a group of MBA students from Portland State University to Saudi Arabia, Qatar, Kuwait in the MBA study abroad program. He taught “Financial Institutions and Markets in the GCC (Gulf Cooperation Council) Countries” course in December 2011 in Dammam and Riyadh, Saudi Arabia and in December 2012 in Kuwait City, Kuwait. He taught “Comparative International Finance” course in December 2013 in Kuwait City, Kuwait. To provide the students with a rich learning experience, He developed network with dignitaries in Kuwait government. He reached out to managing director of Kuwait Investment Authority (KIA) – one of the top ten sovereign wealth funds in the world and Kuwait Finance House (KFH) – the leading Islamic Financial Institutions in the world and arranged one-day visit to each of KIA and KFH.</div><div><br></div><div>International Islamic University of Malaysia (IIUM) selected him as one of the international reviewers for Islamic finance curriculum and invited him to attend the EPP-7 Islamic Finance Education Global Round Table Discourse, Kuala Lumpur, Malaysia, August 21-23, 2014. The task of the panel of international reviewers was to critique the draft curriculum prepared by the EPP-7 Task Force and render recommendations for developing a global standard Islamic finance curriculum.</div><div><br></div><div>EDUCATION:</div><div>• Ph. D. Finance, University of Illinois at Urbana-Champaign, 1986.</div><div>• M.B.A. Finance and Accounting, University of Minnesota, 1979.</div><div>• M. Com Accounting, University of Dhaka, 1975, First Class 2nd Position</div><div>• B. Com. Hons. Commerce, University of Dhaka, 1974, First Class 5th Position</div><div>• H. S. C. Commerce, Comilla Victoria College, 1969, First Division, 5th Position</div><div>• S. S. C. Humanities, Comilla Zilla School, 1967, First Division</div><div><br></div>', 'a62066134af74f592e10e7c6181f8d73.jpeg', 4, 1, 3, 3, '2021-02-15 13:37:27', '2021-02-20 14:29:35'),
(12, 'Nahreen Husna Ahmed', NULL, NULL, 'Member', '[\"Advisory\"]', '<div>Nahreen Husna Ahmed is an assistant professor of clinical medicine in Department of Pulmonary and Critical Care Medicine, University of Pennsylvania, Philadelphia, PA 19104. Practice Pulmonary and Critical Care medicine both domestically and internationally with a focus on capacity building and implementation of tech solutions such as Point of Care Ultrasound (POCUS). Regional practice objectives include continued implementation of POCUS training for Faculty at the University of Pennsylvania as well as continuing The Philadelphia City-Wide Ultrasound Training Program. Global Health practice objectives include building critical care curriculum and providing clinical service and sustainable medical education in low-resource settings.</div><div>Education:</div><div>• Pulmonary/Critical Care Fellowship,  New York University, New York, NY 10016</div><div>• Internal Medicine Chief Resident, University of Illinois at Chicago, Chicago, IL 60612</div><div>• UIC Residency Training Program, University of Illinois at Chicago, Chicago, IL 60612</div><div>• Masters-Public Health, University of Illinois at Chicago, School of Public Health, Chicago, IL 60612</div><div>• M.D.-Doctor of Medicine, Drexel University College of Medicine, Philadelphia, PA 19129</div><div>• B.S.-Bachelor of Science, Widener University, Chester, PA 19013</div>', 'b2186722cc5141c67f80a54527128e70.jpeg', 5, 1, 3, 3, '2021-02-15 13:37:59', '2021-02-20 16:51:42');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_12_02_103254_create_admins_table', 1),
(4, '2020_12_06_104314_create_sliders_table', 2),
(5, '2020_12_08_072402_create_pages_table', 3),
(6, '2020_12_10_072044_create_site_infos_table', 4),
(7, '2020_12_10_104243_create_projects_table', 5),
(8, '2020_12_15_095704_create_events_table', 6),
(9, '2020_12_17_103018_create_news_table', 7),
(10, '2020_12_17_110120_create_notices_table', 8),
(11, '2021_01_06_093925_create_img_galleries_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 = Active, 2 = Inactive',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_content`, `news_url`, `news_image`, `published_date`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Sample News Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate.', '﻿https://www.facebook.com/spa.ngo.bd', '127de90c712db6fa60af5c779e414b6c.png', '2020-12-17', 2, 3, 3, '2020-12-17 04:53:14', '2021-01-16 18:21:42'),
(2, 'কালুখালীতে সোসাইটি ফর পিপলস্ এডভান্সমেন্ট কর্তিক শীতবস্ত্র বিতরণ', '<div>ফজলুল হক, নিউসান টুয়েন্টিফোর ডটকমঃ </div><div>গতকাল মঙ্গলবার রাজবাড়ী জেলাধীন কালুখালীতে সোসাইটি ফর পিপলস্ এডভান্সমেন্ট (এসপিএ) এর পক্ষ থেকে শীত বস্ত্র বিতরণ করা হয়েছে। সকাল ১১ টায় উপজেলার রতনদিয়া ইউপির রুপসা গ্রামে মোহাম্মদ নূরুল ইসলাম দেওয়ান এর বাড়ি প্রাঙ্গণে রুপসা গায়েবি হাফেজিয়া মাদ্রাসার শিক্ষার্থীসহ উপস্থিত ২ শতাধিক দুস্থ অসহায় মানুষের মাঝে শীতবস্ত্র কম্বল বিতরণ করা হয় ।</div><div>সংস্থার চেয়ারম্যান ডাক্তার আরিফুর রহমান এর অনুপ্রেরণায় এই শীত বস্ত্র বিতরণ অনুষ্ঠানে রতনদিয়া ইউপির ২ নং ওয়ার্ডের আওয়ামীলীগের সভাপতি আবুল হোসেন দেওয়ান এর সভাপতিত্বে অতিথি হিসেবে উপস্থিত ছিলেন সংস্থার সাধারণ সম্পাদক দেওয়ান মোহাম্মদ আবু জাহিদ। সহ সাধারণ সম্পাদক মুফতি রফিকুল ইসলাম সিরাজী, সদস্য মুহাম্মাদুল্লাহ রানা, এছাড়াও রতনদিয়া ইউনিয়ন আওয়ামীলীগ এর সাংগঠনিক সম্পাদক মোঃ সিরাজুল ইসলাম জিন্নাহ, মুক্তিযোদ্ধা আব্দুল মালেক, ২ নং ওয়ার্ড আওয়ামী লীগের সাধারণ মোঃ আব্দুল কাদের, আব্দুল মান্নান দেওয়ান, যুবলীগ নেতা রিপন প্রামানিক, হাফিজুর রহমান লালটু, সেলিম, মাসুদ মন্ডল, রতনদিয়া ইউনিয়ন ছাত্রলীগের সাধারণ সম্পাদক রবিউল হাসান রবি, বিল্লাল ফকির, ও হাফিজ সহ এলাকার বিভিন্ন গণ্যমান্য ব্যক্তিবর্গ উপস্থিত ছিলেন। শীতবস্ত্র বিতরণকালে সংস্থার সাধারণ সম্পাদক দেওয়ান মোহাম্মাদ আবু জাহিদ সংক্ষিপ্ত আলোচনায় তিনি বলেন, এ সংস্থা আত্মমানবতার সেবায় দীর্ঘদিন ধরে অসহায় দরিদ্র দুস্থ মানুষের জন্য স্বাস্থ্য শিক্ষা প্রশিক্ষণ এছাড়াও শীতার্ত মানুষের জন্য শীত বস্ত্র বিতরণ করে আসছেন। এছাড়াও তিনি বলেন খুব শীঘ্রই রুপসা গ্রামে করিমুন্নেসা দাতব্য চিকিৎসালয় স্থাপন করা হবে। যার মাধ্যমে এলাকার দরিদ্র অসহায় মানুষ বিনামূল্যে চিকিৎসাসেবা নিতে পারবেন। তিনি উল্লেখ করে বলেন এই সংস্থার সভাপতি ডাক্তার আরিফুর রহমান বলেন, দুনিয়ার কোন সম্পদ ই মানুষের সাথে যাবে না। শুধু সাড়ে তিন হাত জায়গা ছাড়া সবই পড়ে রবে। তাই প্রত্যেক কে ভালো কাজের মাধ্যমে নিজেদের জন্য কিছু করতে হবে।</div>', 'https://www.newsun24.com/news/3982', '2760a391aa0bd647ab45c8f8c838d42b.png', '2021-01-12', 1, 3, 3, '2021-01-16 18:21:26', '2021-02-22 19:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `notice_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notice_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 = Active, 2 = Inactive',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_title`, `notice_content`, `notice_file`, `published_date`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Notice to all members.', 'This notice is for all the respected members. Please contact us and provide your picture, biography and resume.', 'dc1c2e3bc1e531017b20616fd1c3af13.pdf', '2021-01-18', 1, 3, 3, '2020-12-17 05:31:38', '2021-01-18 20:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `our_concerns`
--

CREATE TABLE `our_concerns` (
  `id` int(10) UNSIGNED NOT NULL,
  `concern_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `concern_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concern_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 = Active, 2 = Inactive',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_concerns`
--

INSERT INTO `our_concerns` (`id`, `concern_title`, `concern_url`, `concern_image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Promise IT Solution', 'https://promiseitsolution.com/', 'a755c5f5e7cbdfe1209f7a5bc3c8f939.jpeg', 1, 3, 3, '2021-01-19 03:13:52', '2021-01-28 08:16:31'),
(5, 'Click The Photo', 'http://clickthephoto.com/', 'ff232f4deabce6c9ba26850eb0a43e7a.png', 1, 3, NULL, '2021-01-28 08:18:57', '2021-01-28 08:18:57'),
(6, 'Global Edu', 'http://www.global.edu.bd/', 'da74ec38b72c025a80c7f2208c0a5b9c.png', 1, 3, NULL, '2021-01-28 08:21:27', '2021-01-28 08:21:27'),
(7, 'E-learning', '#', 'fb103475cbc30c1d9f9272ab30f520e0.png', 1, 3, NULL, '2021-01-28 08:48:12', '2021-01-28 08:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pages_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pages_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 = Active, 2 = Inactive',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pages_title`, `pages_content`, `pages_image`, `pages_slug`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'About SPA', 'Society for People’s Advancement (SPA) is a\r\nnon-political, non-religious and nonprofit making non govt. voluntary\r\ndevelopment organization which established on 1st July, 1998 with\r\nthe initiative of some young, enthusiastic, energetic social elites. From the\r\nauthentic views, the organization stressed on improvement of health status, increase\r\nconfidence of the target group stimulating their capacities, solid platform,\r\nknowledge and leadership, skill development, income generation through various\r\nemployment schemes and activities to promote the socio-economic status of the\r\ndisadvantaged women and children, particularly empower who are living on the\r\nstreet without help from anyone in different prospects. SPA intends to\r\nestablish sustainable livelihoods for the disadvantaged women and children so\r\nthat they can fight with poverty and injustice', '4fc85376b50948db1f173df837a58653.jpeg', 'about_spa', 1, 3, 3, '2020-12-08 02:06:47', '2020-12-17 13:54:53'),
(3, 'Mission', '<p>Society for people’s Advancement (SPA) believes that\r\nman is the center of all development endeavors and is the maker of his/her own\r\nfortune. Accordingly, the development philosophy of the organization is based\r\non the fact that the <b>Paramount Need of\r\nPeople is Not Relief but Release</b>. It feels to develop their dormant\r\npotentialities for the personal, social, economical, educational and active\r\ncivic growth and development. It always keep a space in its consideration for\r\nmaking linkages with other like-minded organizations and also stresses to\r\naugment human dignity, social justice, fraternity and democratization in the\r\nprocess of development initiatives.</p><p>SPA\r\nfollows non-directive, bottom-up and participatory development approach for the\r\neffective implementation of its programs. It emphasizes on people’s\r\nparticipation in need assessment, planning, implementation and decision-making\r\nprocess for making the program socially accepted, people’s oriented and\r\nsustainable. The organization acts as a facilitator to ensure people’s active\r\nand equal participation in development process.</p><p><b>Firstly</b>, it works with the poor people by forming the\r\nhomogeneous group and therefore organizes the distressed and powerless people\r\nthrough rapport building, animation, motivation, and awareness.</p><p><b>Secondly</b>, it empowers the powerless through education,\r\ntraining and sharing of experiences.</p><p><b>Thirdly,</b> it\r\nfacilitates in initiation of economic activities through micro-credit support\r\nfor &nbsp; &nbsp;  regular income and promoting\r\neconomic rights and control over resources through active involvement and\r\nparticipation of the poor especially women with a view to alleviate poverty,\r\nhunger, illiteracy, ill-health &amp; civic inertia.</p>', '7fe62b0a8714dc505ce1e6d87f52bfec.jpeg', 'mission', 1, 3, 3, '2020-12-08 05:09:53', '2020-12-17 13:51:24'),
(4, 'Vision', 'The Vision of <b>Society for people’s Advancement (SPA)</b> is <b><i>“To establish a\r\nsociety free from exploitation, oppression and depravation where every individual will be able to live in a peace and harmony with genuine human\r\nrelation”.</i></b>', '7985b35651bce88e2bdcf394a05f5390.png', 'vision', 1, 3, 3, '2020-12-08 05:10:30', '2020-12-17 13:51:53'),
(5, 'Education', '<p>Education is the backbone of\r\na nation. But in the rural side the condition of women education is below standard. To improve the\r\ncondition <b>SPA</b><b> </b>works\r\nwith illiterate children of the working\r\narea. Education sector is one of the most important and ongoing programs of <b>SPA</b>, because nothing is alternative of education and education is\r\nthe backbone of a nation. The education rate of rural areas is\r\nmuch more than the city areas. It\r\nworks in the remotest areas and most of the guardians are poor and marginal farmers. Due\r\nto poverty parents could not provide\r\nnecessary clothes, proper diet and school fees to their children so children can’t go to\r\nschools regularly. For the upliftment of Govt. primary education, eradication of illiteracy and\r\nincrease the literacy rate within the working area, the organization designed its education sector aiming:&nbsp;</p>\r\n\r\n<p>- To eradicate illiteracy among the target families and\r\nprovide them literal knowledge.</p>\r\n\r\n<p>- To make the target illiterate families’ literate by whom\r\nthey can at least read and write and keep family income and expenditure\r\naccounts.<br>- To facilitate the Govt. Adult\r\neducation program.</p>', '51e0c87b1a8ccf6de448e9df850c9c50.jpeg', 'education', 1, 3, 3, '2020-12-08 05:43:26', '2020-12-17 14:07:59'),
(6, 'Health', '<b>Society for People’s Advancement (SPA)</b>&nbsp;has been implementing the program titled education for the promotion of Health and Nutritional Support of Poverty Alleviation since 2000 with the financial and technical support of Community Health International. The main components of the program are expert group meetings with community people arrangement of workshop awareness campaign, and social mobilization through building the network at village level. The main objective of the program is that if the poor become aware of the need of health care they can reduce the level of malnutrition at family level. Malnutrition is not fully depended on poverty &nbsp; but also on food habits and lack of proper health education.', '6780781e6ca0d648438d7b8732a80937.jpeg', 'health', 1, 3, 3, '2020-12-08 05:43:54', '2020-12-17 14:13:50'),
(7, 'Training', '<p>Today in the society the\r\npoor women-folk are\r\nvery neglected\r\nto the male-folk. Socially the poor women have home-based life where they work only\r\nin their house but not\r\noutside. But <b>SPA</b> observed that they have enough scope to\r\nearn if they are involved in various income\r\ngenerating activities inside and outside the house. Employment creation in the rural areas is much\r\ndifficult. Lakh of\r\nunemployed youths are trying their best for employment but there is no employment\r\nopportunity. So it is very difficult to arrange\r\nemployment in the rural areas for the illiterate and disadvantaged\r\nwomen folk. For these women the organization has undertaken micro-credit program by which they can undertake\r\nsmall income generating activities for their self-employment and family income development. For the women\r\ngroup members it has undertaken\r\nmicro-credit program by which they can undertake handicrafts activities for\r\ntheir self-employment and\r\nfamily income development. After providing the credit support the following outcomes\r\nare found among the group members:&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - Women\r\nmembers are involved in home-based handicraft production activities &amp;\r\ntheir monthly income increased approximately Tk.1050/- increased out of production activities.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -Women can\r\ntake leadership and control over resources along with promotion of economic right established.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - Women\r\naccess to decision-making process with their leadership in the family as well as in the community\r\nestablished.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -Reduced\r\npoverty through women employment creation.&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The\r\nmoney earned by them along with their husband’s income will help them in\r\nmaintaining their big families.\r\nWith this idea the NGO have undertaken handicrafts activities invested to the poor unemployed women. The ongoing\r\nactivities of SPA are as follows:</p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nNakshi Katha,</p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nSpectacles Caps</p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nKey Rings </p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nCushion Cover </p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nBed Sheet</p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nPillow Cover</p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nSharee, Three Piece etc</p>', 'a88ff4501da3a3ffd9658d325cd39f27.jpeg', 'training', 1, 3, 3, '2020-12-08 05:44:26', '2021-02-08 20:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `img_gallery_id` int(10) UNSIGNED NOT NULL,
  `gallery_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `img_gallery_id`, `gallery_image`, `created_at`, `updated_at`) VALUES
(1, 3, 'c4751860032ab9e0b0b8bc08079dfc631.jpeg', '2021-01-12 06:09:35', '2021-01-12 06:09:35'),
(2, 3, 'c4751860032ab9e0b0b8bc08079dfc632.jpeg', '2021-01-12 06:09:35', '2021-01-12 06:09:35'),
(3, 3, 'c4751860032ab9e0b0b8bc08079dfc633.jpeg', '2021-01-12 06:09:35', '2021-01-12 06:09:35'),
(4, 3, 'c4751860032ab9e0b0b8bc08079dfc634.jpeg', '2021-01-12 06:09:35', '2021-01-12 06:09:35'),
(5, 3, 'c4751860032ab9e0b0b8bc08079dfc635.jpeg', '2021-01-12 06:09:35', '2021-01-12 06:09:35'),
(6, 3, 'c4751860032ab9e0b0b8bc08079dfc636.jpeg', '2021-01-12 06:09:35', '2021-01-12 06:09:35'),
(7, 3, 'c4751860032ab9e0b0b8bc08079dfc637.jpeg', '2021-01-12 06:09:35', '2021-01-12 06:09:35'),
(9, 3, 'c4751860032ab9e0b0b8bc08079dfc639.jpeg', '2021-01-12 06:09:35', '2021-01-12 06:09:35'),
(10, 2, 'ce52141c83ee82f2c3fd364e51e7dcf81.jpeg', '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(11, 2, 'ce52141c83ee82f2c3fd364e51e7dcf82.jpeg', '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(12, 2, 'ce52141c83ee82f2c3fd364e51e7dcf83.jpeg', '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(13, 2, 'ce52141c83ee82f2c3fd364e51e7dcf84.jpeg', '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(14, 2, 'ce52141c83ee82f2c3fd364e51e7dcf85.jpeg', '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(15, 2, 'ce52141c83ee82f2c3fd364e51e7dcf86.jpeg', '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(16, 2, 'ce52141c83ee82f2c3fd364e51e7dcf87.jpeg', '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(17, 2, 'ce52141c83ee82f2c3fd364e51e7dcf88.jpeg', '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(18, 2, 'ce52141c83ee82f2c3fd364e51e7dcf89.jpeg', '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(19, 2, 'ce52141c83ee82f2c3fd364e51e7dcf810.jpeg', '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(20, 2, 'ce52141c83ee82f2c3fd364e51e7dcf811.jpeg', '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(21, 2, 'ce52141c83ee82f2c3fd364e51e7dcf812.jpeg', '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(22, 2, 'ce52141c83ee82f2c3fd364e51e7dcf813.jpeg', '2021-01-12 06:17:30', '2021-01-12 06:17:30'),
(23, 1, '72b9b3bbfc3f875f63e9440b106cb1411.jpeg', '2021-01-19 13:15:33', '2021-01-19 13:15:33'),
(24, 1, '39af0ae27b097c1a7248508ca318314e2.jpeg', '2021-01-19 13:15:33', '2021-01-19 13:15:33'),
(25, 1, '39af0ae27b097c1a7248508ca318314e3.jpeg', '2021-01-19 13:15:33', '2021-01-19 13:15:33'),
(26, 1, '39af0ae27b097c1a7248508ca318314e4.jpeg', '2021-01-19 13:15:33', '2021-01-19 13:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 = Active, 2 = Inactive',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_title`, `project_content`, `project_image`, `project_category`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Health Care (Preventive and curative)', '<p>The organization has a\r\nhealth program under which it has been providing health support to its beneficiaries\r\nand the local community. Well skilled MBBS doctors,\r\nParamedics, Medical Assistant have been providing health services to its beneficiaries of the\r\nworking areas. <b>SPA&nbsp;</b>has started integrated health\r\nprogram within the target families based on the following objectives:&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  To\r\nprovide General\r\nhealth treatment especially maternal\r\n&amp;Child Heath.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; To ensure safe delivery in well\r\nenvironment.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; To provide Pathological test in low\r\nand easy accessible rate.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; To make the people of operation area\r\naware about health.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; To\r\neducate about water and sanitation.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  To\r\neducate about STD (sexual transmitted diseases) HIV/AIDs and provide Family\r\nPlanning knowledge and supply of contraceptives to the family Planning users. </p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; To\r\nprovide primary treatment to the poor patients.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; To\r\neducate on Nutrition Education.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; To\r\nadvice the pregnant mothers on EPI and to provide the TT to the fertile couple.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Medical Checkup\r\nfor ailments.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Free\r\nprescription for the have not &amp; </p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Free\r\nOral Saline distribution etc.&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Field organizer providing motivation\r\nand awareness building to the community in regular group meeting, besides organization provides treatment including\r\nprescription on weekly basis by 03 MBBS\r\ndoctors and 04 Paramedics. During this time they also advise the community people on health promotional\r\naffairs.</p>', '59ac4cc22a15fec8df511fd730cd6fa9.jpeg', 'Completed', 1, 3, 3, '2020-12-14 05:00:10', '2021-02-08 12:43:02'),
(2, 'Agricultural Development', '<p>The life style and status of\r\npoor, landless and marginal &nbsp; families&nbsp;  within the working area of <b>SPA</b> heavily dependent on the agricultural\r\nlivelihood. Because, they all belong to the farmers family. Their food, education, health and\r\nliving status are subjected to the earning from\r\nthe agriculture. So improvement of life status of target families is  mostly related to the development of the\r\nagriculture. Because the whole cultivation\r\nprocess is ancient and production rate is very low. The areas of &nbsp;  agriculture like fisheries, poultry and live\r\nstock farming are also in a poor condition.\r\nAs a result the nutrition status and economic condition of this agriculture dependent population is\r\ngetting worse day by day. For the upliftment of agricultural livelihood, it has categorized the\r\nagriculture sector into 04 productive activities.  Such as:</p>\r\n\r\n<p>- Fisheries, </p>\r\n\r\n<p>- Agro forestry, </p>\r\n\r\n<p>- Horticulture and </p>\r\n\r\n<p>- Livestock development.&nbsp;</p>\r\n\r\n<p>&nbsp;The\r\nproject also emphasized on quality of services and staff development to enhance\r\nthe managerial\r\nand service delivery capacity has been considered carefully which will lead the program\r\ntowards sustainable development. Out of project inputs, a process will be\r\ngenerated for mobilizing local resources in\r\nfavor of the organized group members. Inputs of training, functional\r\nliteracy and credit support will be used as capital investment for leading the\r\ngroups towards sustainability. The credit support will act as\r\nrevolving fund for expansion of similar activities in the area. Out of\r\ntraining, group member’s potentiality will be strengthened to mobilize local resources in favor of it. Thus, the\r\nprogram will lead towards sustainability by the end of the project period. The\r\nfollowing activities completed during this year.</p>', 'd8bf05e56dd026da341d1913aaf478cd.jpeg', 'Completed', 1, 3, 3, '2020-12-14 05:03:14', '2021-02-08 12:44:37'),
(3, 'Training Program', '<p>Training plays\r\nan important role in Socio-economic development area. Because the workers and the beneficiaries\r\nshould be trained enough to implement different\r\ndevelopment activities. So training program is most essential for an organization. The targeted people\r\nare made conscious through\r\nthe staff. Every human has some hidden qualities\r\nand knowledge but due to some circumstances he could\r\nnot reveal these knowledge and qualities. So through training, this hidden knowledge can be revealed. A\r\nworker can do that\r\nwork in organized ways and promptly. We think, training is a learning process in\r\ndevelopment and this learning is essentials for everyone. Considering these, it arranges different training of the\r\nbeneficiaries and staff members. <b>SPA</b> mobilized its target\r\nbeneficiaries to form equity among them by giving some skill development\r\ntrainings. After the\r\ncompletion of the course, participants were seen very willing about sharing the learning\r\namong them.<b>&nbsp;</b></p>\r\n\r\n<p><b>Training\r\nSessions provides by SPA:</b><b>&nbsp;</b></p>\r\n\r\n<p>i) Social Awareness Rising &amp; Women Development Training.</p>\r\n\r\n<p>ii) Leadership Development Training.</p>\r\n\r\n<p>iii) Group Accounts &amp; Record Keeping Training.</p>\r\n\r\n<p>iv) Mother &amp; Child Health Care Training:</p>\r\n\r\n<p>v) Family Management &amp; Cooking Balanced Food Training</p>\r\n\r\n<p>vi) Environment A Wariness Raising Training:</p>\r\n\r\n<p>vii) Preventive Health Care Training:</p>\r\n\r\n<p>viii) Credit Utilization:</p>\r\n\r\n<p>ix) Handicrafts Training:</p>\r\n\r\n<p>x) BCC<b>&nbsp;</b></p>\r\n\r\n<p><b>Training\r\nFacilities of SPA: &nbsp; &nbsp; </b>It is one of most\r\nsignificant initiatives of <b>SPA</b> training facilities\r\nis available is its all Unit Offices in which producers Group members, Group &nbsp;  Leaders, Group Leaders, Group members and <b>SPA&nbsp;</b>development workers are trained up regularly.\r\nProducer group members are getting continuous on the job training from the training centers <b>SPA</b> Two\r\nSessions could be arranged at a time including 60 participants with  proper accommodation. Relevant training\r\nmaterials are also available here. Training aid available: </p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nWell established training center (with residential facilities);</p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nGuidelines/ Curriculum on various issues;</p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nWhite Board and Clip Board;<b></b></p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nPicture/hand outs, leaf lets;<b></b></p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nTV, VCP, OHP, Multimedia, Movie &amp; Still Camera<b></b></p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nPen (Writing &amp; Marker) Note Book. Bags &amp; File Folders <b></b></p>', 'f74d703fd33a239f9facb5acc070a1c4.jpeg', 'Running', 1, 3, 3, '2020-12-14 05:20:30', '2020-12-17 14:19:37'),
(4, 'Human Rights Preservation', '<p><b>SPA</b> believes that human rights deal with human\r\nnecessity for “expression”, “creativity” and conviviality for deciding own\r\ndensity. It looks critically into the socio-economic, political\r\nand cultural system, which directly or&nbsp; indirectly\r\ninfluence the life of the suffering humility.&nbsp;<b>SPA’s </b>Human Rights\r\nPreservation concept strongly considers that poverty\r\nand disadvantages stem from the unequal socio-economic\r\nand political power. It is rather an unequal\r\nparticipation in making decisions\r\nwhere determines the direction\r\nof the society.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n\r\nSPA\r\nhas been carrying out programs to make the women sections self-reliant,\r\nincrease their status and\r\nstrengthen them in income earning. For women empowerment, SPA &nbsp; organize workshop, symposium, conference, and\r\ngiving legal aid for the victimized women. It &nbsp; has\r\nbeen providing skill training to the women for socioeconomic development,\r\nmaking them self-dependent.&nbsp; &nbsp; &nbsp;', '84484b7c039962a1d855b0770a09e868.jpeg', 'Completed', 1, 3, 3, '2020-12-14 05:23:27', '2021-02-02 13:42:53'),
(5, 'Health and Nutritional Educational Program', '<b>Society for People’s Advancement (SPA)</b> has been implementing the program titled education for the promotion of\r\nHealth and Nutritional Support of Poverty\r\nAlleviation since 2000 with the financial and technical support of Community Health International. The main components of the program are expert\r\ngroup meetings with &nbsp; community people\r\narrangement of workshop awareness campaign,\r\nand social mobilization through building the network\r\nat village level. The main objective of the program is that if the poor become aware of the need of health care\r\nthey can reduce the level of\r\nmalnutrition at family level. Malnutrition is not fully depended on poverty but also on food habits and lack of proper health\r\neducation.', '2ce5c0269f25c1dddd38b45805413cb9.jpeg', 'Completed', 1, 3, NULL, '2021-02-02 13:22:27', '2021-02-02 13:22:27'),
(6, 'Education Support', '<p>Education is the backbone of\r\na nation. But in the rural side the condition of women education is below standard. To improve the\r\ncondition <b>SPA </b>works with illiterate children of the working\r\narea. Education sector is one of the most important and ongoing programs of <b>SPA</b>,\r\nbecause nothing is alternative of education\r\nand education is the backbone of a nation. The education rate of rural areas is\r\nmuch more than the city areas. It\r\nworks in the remotest areas and most of the guardians are poor and marginal farmers. Due\r\nto poverty parents could not provide\r\nnecessary clothes, proper diet and school fees to their children so children can’t go to\r\nschools regularly. For the upliftment of Govt. primary education, eradication of illiteracy and\r\nincrease the literacy rate within the working area, the organization designed its education sector aiming.&nbsp;</p>\r\n\r\n<p>-&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  To eradicate illiteracy among the target families and\r\nprovide them literal knowledge.</p>\r\n\r\n<p>-&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  To make the target illiterate families’ literate by whom\r\nthey can at least read and write and keep family income and expenditure\r\naccounts.</p>\r\n\r\n<p>-&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  To facilitate the Govt. Adult\r\neducation program.<b></b></p>', '58091528e8f246eb06436c511388105a.jpeg', 'Completed', 1, 3, 3, '2021-02-02 13:29:04', '2021-02-08 12:47:53'),
(7, 'Creation of Self-employment opportunity', '<p><b>Handicrafts/producers\r\ndevelopment:&nbsp;</b>Today\r\nin the society the poor women-folk are very neglected to the male-folk. Socially\r\nthe poor women have home-based life where they work only in their house but not outside. But <b>SPA</b>\r\nobserved that they have enough scope to\r\nearn if they are involved in various income\r\ngenerating activities inside and outside the house. Employment\r\ncreation in the rural areas is much difficult. Lakh of unemployed youths are trying their best for\r\nemployment but there is no\r\nemployment opportunity. So it is very difficult to arrange employment in the rural areas for the illiterate\r\nand disadvantaged\r\nwomen folk. For these women the organization has undertaken micro-credit program by which they can\r\nundertake small income generating activities for their self-employment and family income development. For the women\r\ngroup members it has undertaken\r\nmicro-credit program by which they can undertake handicrafts activities for\r\ntheir self-employment\r\nand family income development. After providing the credit support the following outcomes\r\nare found among the group members:</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Women\r\nmembers are involved in home-based handicraft production activities &amp;\r\ntheir monthly income increased approximately Tk.1050/- increased out of &nbsp; &nbsp; production activities.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Women can\r\ntake leadership and control over resources along with promotion of economic right established.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Women\r\naccess to decision-making process with their leadership in the family as well as in the community\r\nestablished.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Reduced\r\npoverty through women employment creation.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;The\r\nmoney earned by them along with their husband’s income will help them in\r\nmaintaining their big families.\r\nWith this idea the NGO have undertaken handicrafts activities invested to the poor unemployed women. The ongoing\r\nactivities of SPA are as follows:</p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nNakshi Katha</p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nSpectacles Caps</p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nKey Rings </p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nCushion Cover </p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nBed Sheet</p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nPillow Cover</p>\r\n\r\n<p>·&nbsp; &nbsp; &nbsp; &nbsp; \r\nSharee, Three Piece etc</p>', '7daf0c28f376332713f8e98a186ae47d.jpeg', 'Completed', 1, 3, 3, '2021-02-02 13:35:59', '2021-02-08 12:49:19'),
(8, 'Agricultural Development', '<p>The life style and status of\r\npoor, landless and marginal &nbsp; families&nbsp;  within the working area of <b>SPA</b> heavily\r\ndependent on the agricultural\r\nlivelihood. Because, they all belong to the farmers family. Their food, education, health and\r\nliving status are subjected to the earning from\r\nthe agriculture. So improvement of life status of target families is  mostly related to the development of the\r\nagriculture. Because the whole cultivation\r\nprocess is ancient and production rate is very low. The areas of agriculture like fisheries, poultry and live\r\nstock farming are also in a poor condition.\r\nAs a result the nutrition status and economic condition of this agriculture dependent population is\r\ngetting worse day by day. For the upliftment of agricultural livelihood, it has categorized the\r\nagriculture sector into 04 productive activities.  Such as:</p>\r\n\r\n<p>- Fisheries, </p>\r\n\r\n<p>- Agro forestry, </p>\r\n\r\n<p>- Horticulture and </p>\r\n\r\n<p>- Livestock development.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The\r\nproject also emphasized on quality of services and staff development to enhance\r\nthe managerial\r\nand service delivery capacity has been considered carefully which will lead the program\r\ntowards sustainable development. Out of project inputs, a process will be\r\ngenerated for mobilizing local resources in\r\nfavor of the organized group members. Inputs of training, functional\r\nliteracy and credit support will be used as capital investment for leading the\r\ngroups towards sustainability. The credit support will act as\r\nrevolving fund for expansion of similar activities in the area. Out of\r\ntraining, group member’s potentiality will be strengthened to mobilize local resources in favor of it. Thus, the\r\nprogram will lead towards sustainability by the end of the project period. The\r\nfollowing activities completed during this year.<b>&nbsp;</b></p>\r\n\r\n<b>&nbsp;Fisheries:&nbsp;</b>In this project the organization maintains a good\r\ncooperation with local GoB office\r\nand beneficiaries to implement the “Pond Fisheries Development” program for\r\nraising the income of the people\r\nby pond fisheries.', '25a6ceeb1e0327bbfdb3d8824dd46029.jpeg', 'Completed', 1, 3, NULL, '2021-02-02 13:40:34', '2021-02-02 13:40:34'),
(9, 'Training Program', '<p>Training plays\r\nan important role in Socio-economic development area. Because the workers and the beneficiaries\r\nshould be trained enough to implement different\r\ndevelopment activities. So training program is most essential for an organization. The targeted people\r\nare made conscious through\r\nthe staff. Every human has some hidden qualities\r\nand knowledge but due to some circumstances he could\r\nnot reveal these knowledge and qualities. So through training, this hidden knowledge can be revealed. A\r\nworker can do that\r\nwork in organized ways and promptly. We think, training is a learning process in\r\ndevelopment and this learning is essentials for everyone. Considering these, it arranges different training of the\r\nbeneficiaries and staff members. <b>SPA</b> mobilized its target\r\nbeneficiaries to form equity among them by giving some skill development\r\ntrainings. After the\r\ncompletion of the course, participants were seen very willing about sharing the learning\r\namong them.<b>&nbsp;</b></p>\r\n\r\n<p><b>Training\r\nSessions provides by SPA:</b></p>\r\n\r\n<p>i) Social Awareness Rising &amp; Women Development Training.<br></p>\r\n\r\n<p>ii) Leadership Development Training.</p>\r\n\r\n<p>iii) Group Accounts &amp; Record Keeping Training.</p>\r\n\r\n<p>iv) Mother &amp; Child Health Care Training.</p>\r\n\r\n<p>v) Family Management &amp; Cooking Balanced Food Training.</p>\r\n\r\n<p>vi) Environment A Wariness Raising Training.</p>\r\n\r\n<p>vii) Preventive Health Care Training.</p>\r\n\r\n<p>viii) Credit Utilization.</p>\r\n\r\n<p>ix) Handicrafts Training:</p>\r\n\r\n<p>x) BCC</p>\r\n\r\n<p><b>&nbsp;Training\r\nFacilities of SPA: </b>It is one of most\r\nsignificant initiatives of <b>SPA</b> training facilities\r\nis available is its all Unit Offices in which producers Group members, Group &nbsp;  Leaders, Group Leaders, Group members and <b>SPA</b>\r\ndevelopment workers are trained up regularly.\r\nProducer group members are getting continuous on the job training from the training centers <b>SPA</b> Two\r\nSessions could be arranged at a time including 60 participants with  proper accommodation. Relevant training\r\nmaterials are also available here. Training aid available: </p>\r\n\r\n<p>·  Well established training center (with residential facilities).</p>\r\n\r\n<p>·  Guidelines/ Curriculum on various issues.</p>\r\n\r\n<p>·  White Board and Clip Board.<b></b></p>\r\n\r\n<p>·  Picture/hand outs, leaf lets.<b></b></p>\r\n\r\n<p>·  TV, VCP, OHP, Multimedia, Movie &amp; Still Camera.<b></b></p>\r\n\r\n·&nbsp; Pen (Writing &amp; Marker) Note Book. Bags &amp;\r\nFile Folders', '6a71cebe68cf3dbc3508744e00c6047d.jpeg', 'Completed', 1, 3, NULL, '2021-02-02 13:56:10', '2021-02-02 13:56:10'),
(10, 'Social development & Environment Preservation', 'The organization has been raising awareness\r\ncampaigns against various anti-social activities including smoking and drug use. Making people aware about\r\nregarding child marriage, &nbsp; multiple\r\nmarriage, dowry, marriage registration and women repression. It will arrange\r\nfor rehabilitation affected by\r\ndisasters like flood, storms, famine etc. Arranging for burial of the unidentified dead bodies.', '51fe32e34f65e1649f34ea2b6bf6fc28.jpeg', 'Completed', 1, 3, NULL, '2021-02-02 14:00:41', '2021-02-02 14:00:41'),
(11, 'Disabled Development', '<p>As\r\nper country survey about 10% of the general community of our country is disabled. Mostly the\r\nchildren and women disable-folk are helpless, avoided and neglected by their family\r\nmembers and society. <b>SPA</b> observed that this is very dangerous and unfair from the human rights\r\npoint of view. So the organization always gives priority for the development of the disables.</p>', '629875dc13f935a39abd6c1a2fc5ce19.jpeg', 'Completed', 1, 3, NULL, '2021-02-02 14:02:12', '2021-02-02 14:02:12'),
(12, 'Public culture & Theatre Program', '<p><b>SPA </b>working in the remotest and\r\nunder developed areas of Bangladesh.\r\nMajority of the community people are unaware on health, hygiene and basic human rights. As a result they are\r\nvictimizing by the local powered structured.\r\nSo <b>SPA </b>developed Cultural Team to make awareness buildup in the society. Folklore,\r\nPathonatok and Jari Gan are organizing regular basis by the team.</p>', '6cc7894b8d0d6b92453f1458514b0bed.jpeg', 'Completed', 1, 3, NULL, '2021-02-08 13:11:25', '2021-02-08 13:11:25'),
(13, 'Disaster Management', '<p>In each year there are several incidences of violence disaster\r\nsuch as flood, cyclone and\r\ndraught are happening in our working area. Due to lack of precaution knowledge thousands of lives, millions of\r\ncrops and assets destroyed. So <b>SPA</b> included Disaster Management Sector with its development\r\nactivities. The goal of this sector is to aware\r\nthe mass population regarding the precautions what to be taken before or after\r\ndisaster. The main activities of <b>SPA</b>\r\ndisaster mitigation are to development volunteers and to train the community people to increase their\r\ndisaster management capacity.</p>', 'acbae3adbe2e7048cd139510fee6eaff.jpeg', 'Completed', 1, 3, NULL, '2021-02-08 13:16:34', '2021-02-08 13:16:34'),
(14, 'Sapling Distribution/Tree Plantation', 'For\r\nmaintaining ecological balance and source of supplementary\r\nincome, group members are provided saplings of timber; fuel and fruit trees for undertaking home based a forestation.\r\nBefore sapling distribution, short orientation training\r\nabout plantation, caring and nursing are provided to the group members.\r\nProgram staffs are\r\nresponsible for supervision, follow-up and monitoring.&nbsp;', '5ef7c6161e0fa25ad83f6800de29a194.jpeg', 'Completed', 1, 3, NULL, '2021-02-08 13:19:00', '2021-02-08 13:19:00'),
(15, 'Various Day Observations', '<p>For the mass awareness\r\nrising on the development issues and to\r\nexplore the democratic and human rights we will observe various National &amp; International days with our group&nbsp; members. We have chalked out our\r\nplan to celebrate the following\r\ndays such as:&nbsp;</p>\r\n\r\n<p>i. World Health Day.</p>\r\n\r\n<p>ii. Environmental\r\nDay.</p>\r\n\r\n<p>iii. Women Day.</p>\r\n\r\niv. Literacy Day.', '3c1a08928e5333232ea665f4c28abb93.jpeg', 'Running', 1, 3, 3, '2021-02-08 13:30:50', '2021-02-08 13:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `site_infos`
--

CREATE TABLE `site_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_lon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_infos`
--

INSERT INTO `site_infos` (`id`, `site_title`, `site_logo`, `tagline`, `address`, `location_lat`, `location_lon`, `email`, `phone`, `facebook`, `instagram`, `twitter`, `youtube`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Society for People\'s Advancement (SPA)', '0de90b8d63245f6dc5b850b177ff7ad2.png', 'An Organization for Socio-Economic Development Specially for Women & Children.', 'Plot - 499, Chand Mosjid Road, Ashrafabad, Kamrangirchar, Dhaka - 1211', '23.7502464', '90.3675904', 'info@spabd.org, spabd.org@gmail.com', '+880 1705 00 00 04 & +880 1705 00 00 07', 'https://www.facebook.com/spa.ngo.bd', 'https://www.instagram.com/spa_bd/', 'https://twitter.com/spa67204820', '#', '#', '2020-12-10 07:42:45', '2021-08-23 15:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 = Active, 2 = Inactive',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_image`, `title`, `sub_title`, `btn_title`, `btn_url`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'feca0ae7fe83c1cd381577cb5ff073a2.jpeg', NULL, NULL, NULL, NULL, 2, 3, 3, '2020-12-14 04:12:03', '2021-01-29 17:21:11'),
(3, '1fc2bd7476df4cc7ae61408fd5ee9ac6.jpeg', NULL, NULL, NULL, NULL, 1, 3, 3, '2021-01-29 17:20:40', '2021-01-29 18:35:22'),
(5, '81e3c55c7c9d7b12a1d2a049b94fa066.jpeg', 'SAVE THE CHILDREN', NULL, NULL, NULL, 2, 3, 3, '2021-01-14 06:12:53', '2021-01-29 19:27:44'),
(6, '0c5f1ca8349ef57e36ec0e8c3554459a.jpeg', 'ONE DAY OF ACTION ISN\'T ENOUGH', 'SUPPORT OUR WORK', NULL, NULL, 2, 3, 3, '2021-01-14 06:13:57', '2021-01-29 20:57:31'),
(7, '708a06617ce9f1197383445c4966d994.jpeg', NULL, 'IF YOU\'RE SERIOUS ABOUT CHANGE, YOU HAVE TO GO THROUGH UNCOMFORTABLE SITUATIONS. STOP TRYING TO DODGE THE PROCESS. IT\'S THE ONLY WAY TO GROW.', NULL, NULL, 1, 3, 3, '2021-01-14 06:17:02', '2021-01-27 16:54:48'),
(8, '3d67d47b69b6e87a936102d68e1ed22a.jpeg', NULL, 'WITHOUT HARD WORK AND SELF DISCIPLINE THERE IS NOTHING TO SAY ABOUT SUCCESS.', NULL, NULL, 1, 3, 3, '2021-01-14 06:18:06', '2021-01-27 18:45:29'),
(9, 'dcebc83beed0d2fd73529f53826f0b75.jpeg', NULL, NULL, NULL, NULL, 1, 3, 3, '2021-01-16 00:42:39', '2021-01-27 20:26:49'),
(11, 'c922972b7849ea237e99209d165dc4c4.jpeg', NULL, NULL, NULL, NULL, 1, 3, NULL, '2021-01-29 19:28:13', '2021-01-29 19:28:13'),
(12, '478d32da926a7cba60278cdce9baaa99.jpeg', NULL, NULL, NULL, NULL, 1, 3, 3, '2021-01-29 20:57:59', '2021-01-29 21:04:58'),
(13, 'e13a74f96ea86252bae7133cb2868a54.jpg', 'Excepteur anim neces', 'Autem in labore est', 'Sed id ratione quide', 'Molestias mollit Nam', 1, 2, NULL, '2022-04-11 06:04:28', '2022-04-11 06:04:28');

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

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(10) UNSIGNED NOT NULL,
  `v_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_ocupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_reasoning` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `v_name`, `v_email`, `v_phone`, `v_ocupation`, `v_reasoning`, `v_image`, `created_at`, `updated_at`) VALUES
(2, 'Jane Doe', 'jane@mail.com', '01212121213', 'hazard1', 'dshfgvsdfvbsdiru', 'c03fdbf282b4f89bee39fb244286ecde.png', '2021-01-22 02:10:48', '2021-01-22 02:10:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_number_unique` (`phone_number`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_galleries`
--
ALTER TABLE `img_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_concerns`
--
ALTER TABLE `our_concerns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_infos`
--
ALTER TABLE `site_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sliders_slider_image_unique` (`slider_image`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `img_galleries`
--
ALTER TABLE `img_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_concerns`
--
ALTER TABLE `our_concerns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `site_infos`
--
ALTER TABLE `site_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
