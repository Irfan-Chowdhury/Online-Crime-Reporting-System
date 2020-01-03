-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 04:26 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ocrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voterId` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `username`, `email`, `voterId`, `image`, `district`, `thana`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Md. Irfan Chowdhury', 'irfan_chy', 'irfanchowdhury80@gmail.com', '123456789', 'image_5d57e423641f33.33202864B9Vj8dMcLe.jpg', 'Chittagong', 'Panchlaish', 1829498634, 'e10adc3949ba59abbe56e057f20f883e', '2019-08-17 03:14:31', '2019-08-17 05:25:23'),
(4, 'Warid Bin Azad', 'warid_bin_azad', 'warid@gmail.com', '12345678910', 'image_5d57c6c53405b0.74697988LqLoBgWIPM.jpg', 'Chittagong', 'Panchlaish', 1234567810, 'e10adc3949ba59abbe56e057f20f883e', '2019-08-17 03:20:05', '2019-08-17 03:20:05'),
(5, 'Jamalus Satter', 'jamalus_sattar', 'jamal@gmail.com', '123456', 'image_5d5f11e7109997.15790995SkFaN8Nf43.jpg', 'Chittagong', 'Panchlaish', 1234567810, 'e10adc3949ba59abbe56e057f20f883e', '2019-08-22 16:06:31', '2019-08-22 16:06:31'),
(6, 'Abrar Ibn', 'abrar', 'abrar@gmail.com', '123456798634', 'image_5dae51f7792bd0.09096833GffZ8MrTcH.jpg', 'Chittagong', 'Panchlaish', 123456789, 'e10adc3949ba59abbe56e057f20f883e', '2019-10-21 18:48:56', '2019-10-21 18:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cityName` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `cityName`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', NULL, NULL),
(2, 'Chittagong', NULL, NULL),
(3, 'Rajshahi', NULL, NULL),
(4, 'Khulna', NULL, NULL),
(5, 'Barishal', NULL, NULL),
(6, 'Sylhet', NULL, NULL),
(7, 'Rangpur', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `crimeCategory_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `late_long` longtext COLLATE utf8mb4_unicode_ci,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `show` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `user_id`, `crimeCategory_id`, `title`, `description`, `city_id`, `late_long`, `address`, `status`, `show`, `created_at`, `updated_at`) VALUES
(6, 6, 4, 'test2', 'test2', 5, 'Test2', 'test2', 'PENDING', 'public', '2019-09-02 16:58:56', '2019-09-02 16:58:56'),
(7, 6, 4, 'Girls Eve Teasing', 'Some Eave Teaser Tease Some Girl', 3, '22°29\'47.5\"N 91°43\'15.6\"E', 'KB, Tower, Chawkbazar', 'PROCESSING', 'public', '2019-09-03 13:43:48', '2019-09-03 13:44:37'),
(8, 6, 5, 'A Man Murder', 'A man murder today', 2, '22°29\'47.5\"N 91°43\'15.6\"E', 'Ctg, Khulshi', 'SOLVED', 'public', '2019-09-03 13:47:05', '2019-09-03 13:48:14'),
(9, 6, 9, 'Syndicate helps Rohingyas get NID, passports', 'Some Rohingya refugees are making Bangladeshi passports with the help of local and Rohingya brokers, who manage all the required documents in exchange of large amount of money, police and passport officials said.\r\n\r\nThis syndicate collects the National ID card, citizenship certificate, birth registration and police verification from relevant government offices using their link as well as by bribing officials.\r\n\r\nPolice and passport officials say the Rohingya people are using fake names and addresses while applying for passports.\r\n\r\nIn the latest such discovery, Chittagong police arrested three Rohingya men with three Bangladeshi passports against their names from the city’s Kattoli area on Thursday night.\r\n\r\nThe trio, all of whom took shelter in refugee camps in Cox’s Bazar with their families in 2017, were on their way to Dhaka. Two of them got their passports in December 2017, just months after their arrival, and the other in January\r\nThey were identified as Yusuf, 25, his younger brother Musa, 20, and Aziz, 25.\r\n\r\nThey made their passports from Noakhali and were going to the Turkish embassy in the capital for visa processing, said Mustafizur Rahman, officer-in-charge of Akbar Shah Police Station.\r\n\r\nAlso on Thursday night, Bayezid police detained four Rohingya women from the port city’s Barma Colony area, some 10km from Kattoli. One of the women carried a Bangladesh NID card.\r\n\r\nMustafizur said the three men used to live in Thaingkhali refugee camp in Ukhia, and used an address of Noakhali to get their passports.\r\n\r\n“They got the passports with the help of a syndicate that includes local and Rohingya brokers. They spent Tk 60,000, Tk 90,000 and Tk 1.09 lakh for their passports,” he added.\r\n\r\nHOW DO THEY GET IT?\r\nTo get a passport, the Rohingya people first contact Rohingya and Bangladeshi brokers in Cox’s Bazar. They then collect documents from union parishads or city corporations to prove their citizenship with the help of the brokers, and submit those to the passport office along with their applications.\r\n\r\nLast month, the Chattogram Divisional Passport Office detained two Rohingyas -- a man and a woman -- when they went there to make passports.\r\n\r\nAt the time, the man identified as Faisal produced documents showing he was from Jungle Salimpur union of Sitakunda. The woman on the other hand identified herself as Sumaiya Akhter from Dhaloi union under Hathazari upazila.\r\n\r\nThe two even produced the NID cards of their parents, said Abu Sayeed, deputy director of Chattogram Divisional Passport Office.\r\n\r\n“The Rohingyas are submitting all the necessary documents to get passports. It is really difficult to identify the Rohingya from among a huge number of applicants,” he told The Daily Star.\r\n\r\nHe said they could not initially verify the authenticity of the documents, but after suspicion arose, they matched their fingerprints on the Rohingya database and found that they were Rohingyas.\r\n\r\n“We have limited access to the server of the NID of the Election Commission, but we have access to the recently-developed database of the Rohingya people,” he said.\r\n\r\nDuring interrogation, the Rohingya people told the passport officials that the brokers managed all the documents for them, he added.\r\n\r\nSayeed blamed local elected public representatives for issuing the documents such as NID card, birth certificate and citizenship certificate.\r\n\r\nIn case of the three men held on Thursday, they first contacted a Rohingya broker in Ukhia who introduced them to a Bangladeshi broker in Chakaria of Cox’s Bazar, said Mustafizur, the OC of Akbar Shah Police Station.\r\n\r\nThe man in Chakaria sent them to another broker in Feni who took them to Noakhali after striking a deal.\r\n\r\n“The three Rohingya men told us that the passports were made following the due process and they got those within a month after applying for them,” the OC added.\r\n\r\n“None of these irregularities could be detected during the verification process, including the police verification, because the syndicate has a strong and powerful network,” he said.', 1, '21°12\'45.7\"N 92°09\'48.5\"E\r\n', 'Shah Amant International Airport', 'PENDING', 'public', '2019-09-07 08:51:13', '2019-09-07 08:51:13'),
(10, 6, 8, 'Atia Mahal Case: Charges pressed against 3 militants', 'Police Bureau of Investigation (PBI) today pressed charges against three militant suspects in a case filed over the sensational five-day anti-militant drive at Atia Mahal in Sylhet in 2017.The drive, “Operation Twilight”, conducted at the house in Shibbari area from March 24 to March 28, 2017. Four militant suspects, seven other people including a high official of Rapid Action Battalion (Rab) were killed during the drive.Dewan Abul Hossain, inspector of PBI in Sylhet and the investigation officer of the case, submitted the charge sheet to the Sylhet Chief Metropolitan Magistrate Court.The accused are Jahurul Haque, 25, his wife Arjina Begum, 19, and Mohammad Hasan, 26.The trio was arrested in connection with several other militancy cases and later shown arrest to this case on January 17 this year, the investigation officer said adding that they were remanded after showing arrest.He said, “Eight militants were listed in the charge sheet. Among them, four died during anti-militant drive at Atia Mahal and another one died during anti-militant drive at Nasirpur area in Moulvibazar. Therefore, these five are asked to acquit from the case.”The investigating officer said, “Lokman Hossain alias Mosaraf Hossain alias Sohel, 38, who died along with his family members in a suicide blast during another anti-militant drive in Nasirpur area of Moulvibazar on March 29, 2017, was the leader of the militant group of Jama’atul Mujahideen Bangladesh (JMB)”.“Among the four other dead militants at Atia Mahal, only two have been identified. They are Monjiara Begum Alias Morjina Begum of Bandarban and Tamim Ahmed Foraji of Mymensingh,” he said.In the evening of March 25, 2017, while the drive was ongoing, two grenades were blasted around 400 metres away from Atia Mahal, which claimed seven lives including Rab intelligence chief Lt Col Abul Kalam Azad and two police officers.Police filed two separate cases, one regarding the militant hideout and another for the twin grenade blast, with Moglabazar Police Station accusing unnamed people after the operation.Following an order of Police Headquarters on May 9 that year, PBI took over the cases from Moglabazar Police Station and started investigation from May 13.PBI, on July 22 this year, submitted a final investigation report on twin-grenades blast where they said that two attackers and the key planner died during anti-militant drives in Barahat and Nasirpur area in Moulvibazar.', 6, '24°55\'01.0\"N 91°49\'54.9\"E', 'Atia Mahal , Shylet', 'PENDING', 'public', '2019-09-07 09:27:38', '2019-10-11 03:07:59'),
(11, 6, 5, 'A man has killed both himself and his wife', 'A man in Washington state has killed both himself and his wife after raising fears about struggling to pay medical expenses for her ongoing health conditions.The couple were identified by the Whatcom County Medical Examiner as Brian S Jones, 77, and Patricia Whitney-Jones, 76.Mr Jones, who lived near the city of Ferndale, called emergency services on Wednesday morning and said he was going to shoot himself, according to the Whatcom County Sheriff’s Office. He said he had prepared a note for the sheriff which contained information and instructions. In spite of the operator’s efforts to keep him on the line, Mr Jones is then said to have told the operator, “we will be in the front bedroom”, before disconnecting the call.Police arrived around 15 minutes later and set up a perimeter around the house and attempted to intervene for about an hour with a crisis negotiator and loud hailer.', 5, '22°42\'13.6\"N 90°22\'20.5\"E', 'Barishal', 'PENDING', 'public', '2019-09-07 09:32:57', '2019-10-11 03:00:16'),
(12, 6, 4, 'Siblings sent to jail for harassment', 'The two had been issued several warnings for their harassment and were caught red-handed by locals on the dayTwo siblings, who were caught red-handed while harassing female students at Moon Memorial Secondary School in the Palashgarh area of Jamalpur, were sent to jail and a juvenile centre, respectively, on Saturday.The School’s headmaster Md Sarwar Hossain said Md Sohel Rana,18, and Md Jewel Rana,17, used to harass female students.The two had been issued several warnings for their harassment and were caught red-handed by locals on the day, the headmaster added.Later, they were handed over to a mobile court led by UNO Farida Yasmin.The court sentenced Sohel to six months in jail, while Jewel was sent to Gazipur Juvenile Centre.', 7, '24%C2%B055\'26.9%22N+89%C2%B056\'56.3%22E/@24.9241364,89.9474184,17z/data=!3m1!4b1!4m14!1m7!3m6!1s0x39fd7b91ef3b5569:0xf1ebd8b4cb5eb6fe!2sJamalpur+District!3b1!8m2!3d25.0830926!4d89.7853218!3m5!1s0x0:0x0!7e2!8m2!3d24.924133!4d89.9489657', 'Rangpur', 'PENDING', 'public', '2019-09-07 09:35:52', '2019-10-11 02:46:23'),
(13, 6, 9, 'DNCC Councillor  Corruption', 'Members of Rapid Action Battalion (Rab) arrested a ward councillor of Dhaka North City Corporation (DNCC) from Srimangal upazila of Moulvibazar early today as part of their drive against corruption.\r\n\r\nThe arrestee Habibur Rahman Mizan is the ward councillor of DNCC ward no.32, deputy director of Rab headquarter ASP Mizanur Rahman Bhuiyan confirmed The Daily Star.', 1, '23°44\'02.7\"N+90°23\'33.6\"E', 'Dhaka', 'PENDING', 'public', '2019-10-11 03:25:08', '2019-10-11 03:25:08'),
(14, 6, 5, 'A BUET student was murdered', 'Abrar Fahad, a second-year student of electrical and electronic engineering department, was beaten to death by Buet unit Chhatra League early Monday. He was attacked because of one of his recent Facebook posts, which seemed critical of some recent deals with India.', 1, '23°43\'34.9\"N+90°23\'32.4\"E', 'Dhaka', 'PENDING', 'public', '2019-10-11 03:30:08', '2019-10-11 03:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `crime_categories`
--

CREATE TABLE `crime_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `crimeCategoryName` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crime_categories`
--

INSERT INTO `crime_categories` (`id`, `crimeCategoryName`, `created_at`, `updated_at`) VALUES
(1, 'Most Wanted', '2019-08-24 10:59:08', '2019-08-24 10:59:08'),
(2, 'Robbery', '2019-08-24 11:03:09', '2019-08-24 11:04:53'),
(4, 'Eve Teasing', '2019-08-24 11:07:35', '2019-08-24 11:07:35'),
(5, 'Murder', '2019-08-24 11:07:52', '2019-08-24 11:07:52'),
(6, 'Theft', '2019-08-24 11:08:10', '2019-08-24 11:08:10'),
(7, 'Missing', '2019-08-24 11:08:20', '2019-08-24 11:08:20'),
(8, 'Terrorist', NULL, NULL),
(9, 'Corruption', NULL, NULL),
(10, 'Accident', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `criminal_records`
--

CREATE TABLE `criminal_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `crimeCategory_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criminal_records`
--

INSERT INTO `criminal_records` (`id`, `admin_id`, `crimeCategory_id`, `name`, `description`, `address`, `image`, `status`, `show`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 'Irfan Chowdhury', 'He is a Most Wnated Criminal in BD. He does Many Types of Crime. A most wanted list, maintained by a law enforcement agency.', 'Hathazary, Chittagong', 'image_5d61b254176c18.75561098aUfAJZggsU.jpg', 'not_found', 'public', '2019-08-24 12:27:31', '2019-08-24 15:55:32'),
(2, 3, 1, 'Kamal', 'He is a Most Wnated Criminal in BD. He does Many Types of Crime. A most wanted list, maintained by a law enforcement agency.', 'Chittagong', 'image_5d61826231daf5.32448483I3TM1DGlDj.jpg', 'not_found', 'public', '2019-08-24 12:30:58', '2019-08-24 12:30:58'),
(3, 3, 1, 'Mushfiqur Rahman', 'He is a Most Wnated Criminal in BD. He does Many Types of Crime. A most wanted list, maintained by a law enforcement agency.', 'Chittagong', 'image_5d6d3133ae5bc6.31720718zYQKG0om7m.jpg', 'found', 'public', '2019-09-02 09:11:48', '2019-09-02 09:11:48'),
(4, 3, 1, 'KZN\'s', 'He is a Most Wnated Criminal in BD. He does Many Types of Crime. A most wanted list, maintained by a law enforcement agency.', 'Dhaka', 'image_5d6d321b71a132.66784258n4d5th5Yah.jpg', 'not_found', 'public', '2019-09-02 09:15:39', '2019-09-02 09:15:39'),
(5, 3, 1, 'PICS', 'He is a Most Wnated Criminal in BD. He does Many Types of Crime. A most wanted list, maintained by a law enforcement agency.', 'Feni', 'image_5d6d329a492a26.15646098g28aHQuS6N.jpg', 'not_found', 'public', '2019-09-02 09:17:46', '2019-09-02 09:17:46'),
(6, 3, 1, 'Kan Kata Ramjan', 'He is a Most Wnated Criminal in BD. He does Many Types of Crime. A most wanted list, maintained by a law enforcement agency.', 'Noakhali', 'image_5d6d32e69fec98.88725474heM8RYAwCY.jpg', 'not_found', 'public', '2019-09-02 09:19:02', '2019-09-02 09:19:02'),
(7, 3, 1, 'Sheemar Morien', 'He is a Most Wnated Criminal in BD. He does Many Types of Crime. A most wanted list, maintained by a law enforcement agency.', 'Barishal', 'image_5d6d3559093f48.67039740jzBaevNEmf.jpg', 'not_found', 'public', '2019-09-02 09:29:29', '2019-09-02 09:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `emergencies`
--

CREATE TABLE `emergencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `emergency_type_id` bigint(20) UNSIGNED NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `late_long` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Emergency',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emergencies`
--

INSERT INTO `emergencies` (`id`, `user_id`, `emergency_type_id`, `details`, `late_long`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'Need Fire Service\r\nMuradpur, 1 No Gate', '22°22\'09.0\"N 91°49\'58.6\"E', 'Emergency', '2019-10-21 16:12:00', '2019-10-21 16:12:00'),
(2, 6, 3, 'A accident Occur infront  IIUC,\r\nAddress: IIUC', '22°29\'47.8\"N 91°43\'15.5\"E', 'Done', '2019-10-21 16:18:50', '2019-10-21 17:32:26'),
(3, 11, 2, 'Need Ambulance for a Injured person\r\nAddress:  Chittagong College, Chawkbazar', '22°21\'12.2\"N 91°50\'12.4\"E', 'Emergency', '2019-10-21 17:15:16', '2019-10-21 17:15:16'),
(4, 12, 4, 'Snake attack in my house  \r\naddress: Raoujan', '22°32\'13.3\"N 91°55\'35.5\"E', 'Done', '2019-10-21 17:38:07', '2019-10-21 17:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_types`
--

CREATE TABLE `emergency_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `typeName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emergency_types`
--

INSERT INTO `emergency_types` (`id`, `typeName`, `created_at`, `updated_at`) VALUES
(1, 'Fire ', NULL, NULL),
(2, 'Ambulance', NULL, NULL),
(3, 'Accident', NULL, NULL),
(4, 'Other', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `complain_id` bigint(20) UNSIGNED NOT NULL,
  `feedback` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `complain_id`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 6, 14, 'We are Morun', '2019-10-21 12:06:19', '2019-10-21 12:06:19'),
(3, 11, 13, 'These corrupted people should be punished', '2019-10-21 14:19:32', '2019-10-21 14:19:32'),
(4, 11, 12, 'Hate these people', '2019-10-21 14:21:26', '2019-10-21 14:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `image_complains`
--

CREATE TABLE `image_complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `complain_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_complains`
--

INSERT INTO `image_complains` (`id`, `complain_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 6, '7GBA3YdU9s.jpg', '2019-09-02 16:58:57', '2019-09-02 16:58:57'),
(5, 6, 'YeuGBCqMmz.jpg', '2019-09-02 16:58:57', '2019-09-02 16:58:57'),
(6, 6, '91xhNlNBnl.jpg', '2019-09-02 16:58:57', '2019-09-02 16:58:57'),
(11, 7, 'bIXQUMDi3B.jpg', '2019-09-03 13:43:49', '2019-09-03 13:43:49'),
(12, 8, 'Px8UYHdmRb.jpg', '2019-09-03 13:47:05', '2019-09-03 13:47:05'),
(13, 9, 'ePE2lAbFzt.jpg', '2019-09-07 08:51:14', '2019-09-07 08:51:14'),
(14, 10, 'BNgFDCyO5q.jpg', '2019-09-07 09:27:38', '2019-09-07 09:27:38'),
(15, 11, 'Nwcib3NnCB.jpg', '2019-09-07 09:32:57', '2019-09-07 09:32:57'),
(16, 12, 'HRRoWFxjLD.png', '2019-09-07 09:35:52', '2019-09-07 09:35:52'),
(17, 8, 'xQ0zRZVlgn.jpg', '2019-09-07 09:39:49', '2019-09-07 09:39:49'),
(18, 13, 'BItrtkiHlp.jpg', '2019-10-11 03:25:09', '2019-10-11 03:25:09'),
(19, 14, 'uuqbNYL9DS.jpg', '2019-10-11 03:30:09', '2019-10-11 03:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'UNSEEN',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `admin_id`, `subject`, `message`, `roll`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, NULL, 'Testing', 'Modal components\r\nBelow is a static modal example (meaning its position and display have been overridden). Included are the modal header, modal body (required for padding), and modal footer (optional). We ask that you include modal headers with dismiss actions whenever possible, or provide another explicit dismiss action.', 'user', 'SEEN', '2019-10-12 13:43:26', '2019-10-12 15:35:08'),
(2, 11, NULL, 'Approch', 'Reboot builds upon Normalize, providing many HTML elements with somewhat opinionated styles using only element selectors. Additional styling is done only with classes. For example, we reboot some <table> styles for a simpler baseline and later provide .table, .table-bordered, and more.\r\n\r\nHere are our guidelines and reasons for choosing what to override in Reboot:\r\n\r\nUpdate some browser default values to use rems instead of ems for scalable component spacing.\r\nAvoid margin-top. Vertical margins can collapse, yielding unexpected results. More importantly though, a single direction of margin is a simpler mental model.\r\nFor easier scaling across device sizes, block elements should use rems for margins.\r\nKeep declarations of font-related properties to a minimum, using inherit whenever possible.', 'user', 'UNSEEN', NULL, '2019-10-12 15:48:27'),
(3, 12, NULL, 'Introduction\r\n', 'Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.', 'user', 'SEEN', NULL, '2019-10-12 15:55:50'),
(4, 6, NULL, 'Bootstrap_sourc_code', 'The Bootstrap source code download includes the precompiled CSS and JavaScript assets, along with source Sass, JavaScript, and documentation. More specifically, it includes the following and more:\r\nThe scss/ and js/ are the source code for our CSS and JavaScript. The dist/ folder includes everything listed in the precompiled download section above. The site/docs/ folder includes the source code for our documentation, and examples/ of Bootstrap usage. Beyond that, any other included file provides support for packages, license information, and development.', 'user', 'SEEN', NULL, '2019-10-12 15:55:41'),
(5, 3, NULL, 'Responsive_breakpoints\r\n', 'Since Bootstrap is developed to be mobile first, we use a handful of media queries to create sensible breakpoints for our layouts and interfaces. These breakpoints are mostly based on minimum viewport widths and allow us to scale up elements as the viewport changes.\r\n\r\nBootstrap primarily uses the following media query ranges—or breakpoints—in our source Sass files for our layout, grid system, and components.', '', 'UNSEEN', NULL, NULL),
(6, 2, NULL, 'Display', 'Quickly and responsively toggle the display value of components and more with our display utilities. Includes support for some of the more common values, as well as some extras for controlling display when printing.', 'user', 'UNSEEN', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_17_050829_create_admins_table', 2),
(5, '2019_08_18_044302_create_news_tips_table', 3),
(6, '2019_08_24_040059_create_complain_categories_table', 4),
(7, '2019_08_24_141605_create_criminal_records_table', 5),
(8, '2019_08_24_163007_create_crime_categories_table', 6),
(11, '2019_08_25_145149_create_missing_persons_table', 7),
(12, '2019_08_30_180702_create_missing_categories_table', 8),
(13, '2019_08_31_041827_create_missing_others_table', 9),
(14, '2014_10_12_000000_create_users_table', 10),
(15, '2019_09_02_162316_create_cities_table', 11),
(17, '2019_09_02_174308_create_complains_table', 12),
(18, '2019_09_02_175332_create_image_complains_table', 13),
(19, '2019_09_05_195442_create_notifications_table', 14),
(20, '2019_10_12_180720_create_messages_table', 15),
(21, '2019_10_21_164630_create_feedback_table', 16),
(22, '2019_10_21_212116_create_emergency_types_table', 17),
(23, '2019_10_21_212700_create_emergencies_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `missing_categories`
--

CREATE TABLE `missing_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `missingCategoryName` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missing_categories`
--

INSERT INTO `missing_categories` (`id`, `missingCategoryName`, `created_at`, `updated_at`) VALUES
(1, 'Vehiles', '2019-08-30 12:36:58', '2019-08-30 12:36:58'),
(2, 'Book', '2019-08-30 12:37:25', '2019-08-30 12:37:25'),
(3, 'Animal', '2019-08-30 12:37:47', '2019-08-30 12:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `missing_others`
--

CREATE TABLE `missing_others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `missing_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `missing_title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missing_others`
--

INSERT INTO `missing_others` (`id`, `admin_id`, `user_id`, `missing_category_id`, `missing_title`, `owner_name`, `description`, `address`, `phone`, `status`, `show`, `image`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, 2, 'Lost A Comics Book', 'Irfan Chowdhury', 'This Books Name is: XYZ', 'Chittagong', 123456789, 'not_found', 'public', 'image_5d6a0f86e39789.67245705TBxUsa6BFz.jpg', '2019-08-31 00:11:19', '2019-08-31 00:11:19'),
(2, 3, NULL, 3, 'Bear', 'Warid Bin Azad', 'Black', 'Chittagong', 123456789, 'not_found', 'public', 'image_5d6a135b633188.16365806BVWRSBRzfn.jpg', '2019-08-31 00:27:39', '2019-08-31 00:27:39'),
(3, 3, NULL, 2, 'Lost A Comics Book', 'Irfan Chowdhury', 'This Is Good Book', 'Ctg', 1234567890, 'not_found', 'public', 'image_5d6ea3ad80fc56.44827839gAMZ47J6x3.jpg', '2019-09-03 11:32:29', '2019-09-03 11:32:29'),
(6, NULL, 6, 1, 'Lost A Comics Book', 'Irfan Chowdhury', 'This Is Interesting Book', 'Muradpur Chittagong', 1234567890, 'not_found', 'public', 'image_5d6ea984dde382.23360564NRsX8juNyY.jpg', '2019-09-03 11:57:24', '2019-09-03 11:57:24'),
(7, 3, NULL, 2, 'Certificatate Found', 'Irfan Chowdhury', 'Certificate Found', 'Chittagong', 12346789, 'found', 'public', 'image_5d7415bbd5fa48.39520561DqNYr6MxD5.jpg', '2019-09-07 14:40:27', '2019-09-07 14:40:27'),
(8, NULL, 6, 1, 'Cycle Found', 'Warid Bin Azad', 'It was yellow color', 'Chittagong', 1234567890, 'found', 'public', 'image_5d74164696f944.38794447JcVSFAHwC5.jpg', '2019-09-07 14:42:46', '2019-09-07 14:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `missing_persons`
--

CREATE TABLE `missing_persons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `physical_details` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `phone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missing_persons`
--

INSERT INTO `missing_persons` (`id`, `admin_id`, `user_id`, `name`, `gender`, `age`, `physical_details`, `description`, `address`, `phone`, `status`, `show`, `image`, `created_at`, `updated_at`) VALUES
(4, 3, NULL, 'Mushfiqur Rahman', 'male', 26, '5.4\"', 'He Is An American', 'Chittagong', '123456789', 'not_found', 'public', 'image_5d6948d72dd050.12169503LfQWBzZQtH.jpg', '2019-08-30 10:03:35', '2019-08-30 10:03:35'),
(5, 3, NULL, 'Kawsar Uddin', 'male', 27, '5.6\"', 'He is Good Person & Student Of IIUC', 'Bohoddarhat', '123456789', 'not_found', 'private', 'image_5d73f6130845a1.29503957KZUqCxfqyU.png', '2019-08-30 10:04:17', '2019-09-07 12:26:01'),
(8, NULL, 6, 'Irfan Chowdhury Fahim', 'male', 26, '5.6\"', 'He Is A Good Boy', 'Muradpur, Chitttagong', '0152122515', 'not_found', 'public', 'image_5d6e92b8ef8445.31251596ObscEHicCk.jpg', '2019-09-03 09:00:15', '2019-09-03 10:20:09'),
(9, 3, NULL, 'Arman Ul Alam', 'male', 25, '5.6\"', 'He Is A Good Person & Study In IIUC.', 'Aturar Dipu, Chittagong', '1234567810', 'not_found', 'public', 'image_5d73fba76110c9.338656146Ny6THTkcu.jpg', '2019-09-07 12:49:11', '2019-09-07 12:49:11'),
(10, NULL, 6, 'Shahed Chy Shuzon', 'male', 26, '5.6\"', 'He Is A Good Person & Study In IIUC.', 'Raoujan, Chittagong', '1234567810', 'not_found', 'public', 'image_5d73fcad2e0890.96268592JNCwGBHUGo.jpg', '2019-09-07 12:53:33', '2019-09-07 12:53:33'),
(11, NULL, 6, 'Warid Bin Azad', 'male', 30, '5.6\"', 'He is Good Boy', 'Chittagong', '1234567810', 'not_found', 'public', 'image_5d73fd78659b10.72353223pNNhLQ1MmE.jpg', '2019-09-07 12:56:56', '2019-09-07 12:56:56'),
(12, NULL, 6, 'Raihan Sharif', 'male', 26, '5.6\"', 'He was found today at Khulna', 'KUET', '21', 'found', 'public', 'image_5d7407740a9579.77451522cCfVAA47sH.jpg', '2019-09-07 13:39:32', '2019-09-07 13:39:32'),
(13, 3, NULL, 'Anisul Islam', 'male', 26, '5.6\",', 'He is Good Person', 'FatikChori, Chittagong', '123456789', 'found', 'public', 'image_5d74091f5d3617.41772081ygG4zh1G7h.jpg', '2019-09-07 13:46:39', '2019-09-07 13:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `news_tips`
--

CREATE TABLE `news_tips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_tips`
--

INSERT INTO `news_tips` (`id`, `admin_id`, `title`, `slug`, `description`, `type`, `image_video`, `created_at`, `updated_at`) VALUES
(1, 4, 'Testing Purpose', 'testing-purpose', 'Testing Purpose completed', 'news', 'file_5d59382ce7fb63.01477949bj4VQMN3P0.jpg', '2019-08-18 03:35:08', '2019-08-24 04:24:46'),
(8, 3, 'Do not let the pen drive ?', 'do-not-let-the-pen-drive', 'Connect internet with Desktop by your Android Phone', 'tips', 'file_5d591bcc21db24.19811162W2dxZwDRpV.jpg', '2019-08-18 03:35:08', '2019-08-18 03:35:08'),
(10, 3, 'test', 'test', 'Presenting full video song \"Yeh Tune Kya Kiya\" from the movie Once Upon A Time In Mumbaai Dobara starring Akshay Kumar, Sonakshi Sinha, Imran Khan and others', 'tips', NULL, '2019-08-24 04:18:10', '2019-08-24 04:18:10'),
(11, 3, 'Jessore gang rape: Case handed over to PBI', 'jessore-gang-rape-case-handed-over-to-pbi', 'The case filed over the gang rape of a woman in Sharsha upazila of Jessore has been handed over to the Police Bureau of Investigation (PBI).\r\n\r\nThe documents were handed over to PBI on Friday afternoon, Jessore Additional Superintendent of police, Salahuddin Shikder, said.\r\n\r\nPBI has already started their investigation, Salahuddin said.\r\n\r\nKMH Jahangir, additional superintendent of Jessore PBI, said: \"The case documents of the gang rape that took place in Sharsha, were handed over to us on Friday afternoon.\"\r\n\r\nSub-Inspector (SI) of Jessore PBI Monaem Hossain Khan is the investigation officer, Jahangir said.\r\n\r\nWhen contacted, SI Monaem told this correspondent: \"After receiving the case documents, I inspected the site where the incident took place, and talked with the victim. All evidence related to the case are also being collected.\"\r\n\r\nMeanwhile, when a team of Nari o Shishu Odhikar Forum (Women and Children\'s Rights Forum) visited the victim at her residence on Friday morning, she told them she was too afraid to mention sub-inspector Khairul\'s name in the case statement as an accused.', 'news', 'file_5d73e4fc317a00.706160346rjlqVoIRR.jpg', '2019-08-24 04:21:45', '2019-09-07 11:13:28'),
(17, 3, 'Noakhali man arrested for gang-raping and murdering boy', 'noakhali-man-arrested-for-gang-raping-and-murdering-boy', 'Police arrested a man who was involved in the gang rape and murder of a seven-year old boy.\r\n\r\nWasim Akram, 20, one of the four accused in a murder case filed on August 26, was arrested on Sunday. He confessed to his crimes on Tuesday.\r\n\r\n\"Police kept the identity of the rest of the accused, who are on the run, a secret, for the sake of proper investigation,\" said Mohammad Alamgir Hossain, superintendent of police of Begumganj model police station.\r\n\r\nHe added: \"The accused, Wasim, has confessed of abducting the first grader, Emran to an abandoned room, brutally gang-raping and strangling him to death with three other associates. Later, they wrapped the dead body with plastic and left it there in a fish basket.\"\r\n\r\nEarlier, Emran\'s decomposed dead body was recovered on August 25, who was abducted on August 22. When he was not found, his father filed a general diary (GD) on August 23 and later a murder case on August 26.', 'news', 'image_5d73e46ea23f06.4657145453owRSXMwY.jpg', '2019-09-07 11:10:06', '2019-09-07 11:10:06'),
(18, 3, 'Local admin, cops were ill-prepared', 'local-admin-cops-were-ill-prepared', 'For two days, hate speech was spreading via Facebook messenger and the local administration and police failed to grasp the gravity of the situation and act accordingly, locals of Bhola’s Borhanuddin upazila said.\r\n\r\nThey said police had plenty of time act and had they taken proper steps, Sunday’s clash could have been averted and four people would not have died.\r\n\r\nLocals said during the two days, the administration and police failed to show that they were trying to find a solution and did not even circulate the news that the rally organised by zealots on Sunday to demand punishment of a Hindu man had been called off.  \r\n\r\nAccording to the zealots who attacked police, Biplob Chandra Baddya spread the hate speech.  \r\n\r\nBiplob maintains his Facebook account had been hacked and used for spreading the hate speech. He was sent to jail in a case filed under the Digital Security Act yesterday.', 'news', 'image_5dae4a14de60d0.38795160QZUJeinxIi.jpg', '2019-10-21 18:15:17', '2019-10-21 18:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voterId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified` tinyint(4) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email_verification_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `voterId`, `gender`, `age`, `address`, `phone`, `image`, `email_verified`, `email_verified_at`, `email_verification_token`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Warid Bin Azad', 'warid@gmail.com', '12345698745', '', 0, 'Chittagong', '0152122515', 'image_5d6acd00e6b5a1.65151111Q6bmWWEFuc.jpg', 1, NULL, '', '$2y$10$RNOQeMlShfdpcVX35sfUfOAqB.dIvGi66VMY7RG582dM3cvb6xZDO', NULL, NULL, '2019-08-31 13:39:45', '2019-08-31 13:39:45'),
(3, 'Shahril Ahmed', 'sharil@gmail.com', 'sharil_123456', '', 0, 'Chittagong', '123456', 'image_5d6ace2097f695.84852307cUMG9Vks7F.jpg', 1, NULL, '', '$2y$10$QTik.Jmb3BQPrVaiwihu7O9JUo9OF/5ZU8eZuKHIQkyDkyv5HsJPy', NULL, NULL, '2019-08-31 13:44:32', '2019-08-31 13:44:32'),
(4, 'Mushfiqur Rahman', 'mushfiq@gmail.com', 'mushfiq_12346', '', 0, 'ctg', '1234567890', 'image_5d6acf5f044f40.14470684hlNrLcJHVz.jpg', 1, NULL, '', '$2y$10$a2n0qsM3dGXhyXuOmJERjO.WR2NihiLrcdIymL3Mq55htrSWaxTxS', NULL, NULL, '2019-08-31 13:49:51', '2019-08-31 13:49:51'),
(6, 'Irfan Chowdhury', 'irfanchowdhury80@gmail.com', 'irfan_123456', 'male', 26, 'Muradpur, Chittagong', '01829498634', 'image_5d7c108e13eab2.74340491BHYjj0aaMJ.jpg', 1, NULL, '', '$2y$10$r9Kj5YrQuwQqBBhPnQTzruC1lZSsVGlwAL2EGmfYdqF/8t6vgWHzm', NULL, NULL, '2019-08-31 14:36:04', '2019-09-13 15:58:09'),
(11, 'Arman Ul Alam', 'arman@gmail.com', 'arman_123456789', 'male', 25, 'Aturar, Dipu', '1234567810', 'image_5d71579b782d34.60567882bPja9OsWVS.jpg', 1, '2019-09-05 12:46:15', '', '$2y$10$rC.5AsSk8B/2A8nfiHAkS.MhACaCOUTY5AZoWcTR9NAYw0Rp/gVKC', NULL, NULL, '2019-09-05 12:44:43', '2019-09-05 12:46:15'),
(12, 'Shahed Shuzon', 'shuzon@gmail.com', 'shuzon_123456', 'male', 21, 'Raoujan, Chittagong', '123456789', 'image_5d7158f42ab6e6.21216828SyJ9XuETL4.jpg', 1, '2019-09-05 13:00:46', '', '$2y$10$MJMb27YujyNtPhYrgwp0uefJzcHF6Do6AM090COXxZcm5RTCGP2LG', NULL, NULL, '2019-09-05 12:50:28', '2019-09-05 13:00:46'),
(13, 'Tamjid Uddin', 'tamjid@gmail.com', 'tamjid_123456', 'male', 123456, 'Bohoddar Hat', '123456789', 'image_5d7c231d270835.95351128RDruyXIZmh.jpg', 0, NULL, 'eMgsmzL6UiDI3XzagNcLHmL6q4ljJgMJ', '$2y$10$Pn9rcHigMPbXihrm3mGI6eU8ZlImP1d0z5CNDzlydwMVyWIcfVOcK', NULL, NULL, '2019-09-13 17:15:41', '2019-09-13 17:15:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_voterid_unique` (`voterId`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complains_user_id_foreign` (`user_id`),
  ADD KEY `complains_crimecategory_id_foreign` (`crimeCategory_id`),
  ADD KEY `complains_city_id_foreign` (`city_id`);

--
-- Indexes for table `crime_categories`
--
ALTER TABLE `crime_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criminal_records`
--
ALTER TABLE `criminal_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergencies`
--
ALTER TABLE `emergencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emergencies_user_id_foreign` (`user_id`),
  ADD KEY `emergencies_emergency_type_id_foreign` (`emergency_type_id`);

--
-- Indexes for table `emergency_types`
--
ALTER TABLE `emergency_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_user_id_foreign` (`user_id`),
  ADD KEY `feedback_complain_id_foreign` (`complain_id`);

--
-- Indexes for table `image_complains`
--
ALTER TABLE `image_complains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_complains_complain_id_foreign` (`complain_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`),
  ADD KEY `messages_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missing_categories`
--
ALTER TABLE `missing_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missing_others`
--
ALTER TABLE `missing_others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missing_persons`
--
ALTER TABLE `missing_persons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `missing_persons_admin_id_foreign` (`admin_id`),
  ADD KEY `missing_persons_user_id_foreign` (`user_id`);

--
-- Indexes for table `news_tips`
--
ALTER TABLE `news_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_voterid_unique` (`voterId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `crime_categories`
--
ALTER TABLE `crime_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `criminal_records`
--
ALTER TABLE `criminal_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `emergencies`
--
ALTER TABLE `emergencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emergency_types`
--
ALTER TABLE `emergency_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image_complains`
--
ALTER TABLE `image_complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `missing_categories`
--
ALTER TABLE `missing_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `missing_others`
--
ALTER TABLE `missing_others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `missing_persons`
--
ALTER TABLE `missing_persons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news_tips`
--
ALTER TABLE `news_tips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complains`
--
ALTER TABLE `complains`
  ADD CONSTRAINT `complains_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `complains_crimecategory_id_foreign` FOREIGN KEY (`crimeCategory_id`) REFERENCES `crime_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `complains_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `emergencies`
--
ALTER TABLE `emergencies`
  ADD CONSTRAINT `emergencies_emergency_type_id_foreign` FOREIGN KEY (`emergency_type_id`) REFERENCES `emergency_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `emergencies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_complain_id_foreign` FOREIGN KEY (`complain_id`) REFERENCES `complains` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feedback_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_complains`
--
ALTER TABLE `image_complains`
  ADD CONSTRAINT `image_complains_complain_id_foreign` FOREIGN KEY (`complain_id`) REFERENCES `complains` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `missing_persons`
--
ALTER TABLE `missing_persons`
  ADD CONSTRAINT `missing_persons_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `missing_persons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
