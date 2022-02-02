-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 05:56 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seu_roktokona`
--

-- --------------------------------------------------------

--
-- Table structure for table `seu_blood_request`
--

CREATE TABLE `seu_blood_request` (
  `blood_request_id` int(255) NOT NULL,
  `blood_request_user` bigint(255) NOT NULL,
  `blood_request_patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_request_blood_group` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_request_area` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_request_gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_request_phone` int(11) NOT NULL,
  `blood_request_d_date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_request_h_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_request_h_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_request_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seu_blood_request`
--

INSERT INTO `seu_blood_request` (`blood_request_id`, `blood_request_user`, `blood_request_patient_name`, `blood_request_blood_group`, `blood_request_area`, `blood_request_gender`, `blood_request_phone`, `blood_request_d_date`, `blood_request_h_name`, `blood_request_h_address`, `blood_request_at`) VALUES
(3, 2014200000046, 'Sultanul Kiasar', 'O+', 'Cantonment', 'Male', 1516159145, '2018-12-26', 'City Hospital', 'Flat#5B, House#24/2, Road#4/2, Block#D, Banasree', '2018-12-22 20:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `seu_faculty_data`
--

CREATE TABLE `seu_faculty_data` (
  `id` int(255) NOT NULL,
  `faculty_initial` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` enum('CSE','ICE','EEE','Textile Engineering','Architecture','Pharmacy','English','BBA','Law & Justice','Islamic Studies','Economics','Development Studies','Bangla') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seu_faculty_data`
--

INSERT INTO `seu_faculty_data` (`id`, `faculty_initial`, `department`) VALUES
(1, 'RAJ', 'CSE'),
(2, 'RAJ', 'CSE'),
(3, 'KMH', 'CSE'),
(4, 'KMH', 'CSE'),
(5, 'SC', 'English'),
(6, 'SC', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `seu_faculty_registration_hash`
--

CREATE TABLE `seu_faculty_registration_hash` (
  `registration_hash_id` bigint(255) NOT NULL,
  `registration_hash_faculty_initial` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_hash_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seu_registered_faculty`
--

CREATE TABLE `seu_registered_faculty` (
  `registered_id` bigint(255) NOT NULL,
  `registered_faculty_initial` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registered_faculty_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `registered_faculty_phone` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `registered_faculty_status` tinyint(4) NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seu_registered_student`
--

CREATE TABLE `seu_registered_student` (
  `registered_id` bigint(255) NOT NULL,
  `registered_student_id` bigint(255) NOT NULL,
  `registered_student_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registered_student_phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `registered_student_status` tinyint(4) NOT NULL DEFAULT '0',
  `registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seu_registered_student`
--

INSERT INTO `seu_registered_student` (`registered_id`, `registered_student_id`, `registered_student_password`, `registered_student_phone`, `registered_student_status`, `registered_at`) VALUES
(2, 2014200000046, 'ed2b1f468c5f915f3f1cf75d7068baae', '01401400345', 1, '2018-07-23 10:33:19'),
(3, 2014200000029, '58207378ce83f3bed8d95dc3718dd2eb', '01637753305', 1, '2018-12-11 10:52:01'),
(8, 2014200000052, '5008eda15e7ff7173a083b5526ca4807', '01680305290', 1, '2018-12-12 10:34:37'),
(9, 2012000400146, 'dc557a6edfb01865da3f0e840c2e4000', '01722630304', 1, '2018-12-23 15:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `seu_registration_hash`
--

CREATE TABLE `seu_registration_hash` (
  `registration_hash_id` bigint(255) NOT NULL,
  `registration_hash_student_id` bigint(255) NOT NULL,
  `registration_hash_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seu_registration_hash`
--

INSERT INTO `seu_registration_hash` (`registration_hash_id`, `registration_hash_student_id`, `registration_hash_code`) VALUES
(3, 2014200000027, 'fef6853d68e14072526820924c16e91b97a5a2c1');

-- --------------------------------------------------------

--
-- Table structure for table `seu_registration_verification`
--

CREATE TABLE `seu_registration_verification` (
  `registration_verification_id` bigint(255) NOT NULL,
  `registration_verification_student_id` bigint(255) NOT NULL,
  `registration_verification_stuednt_phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `registration_verification_code` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seu_registration_verification`
--

INSERT INTO `seu_registration_verification` (`registration_verification_id`, `registration_verification_student_id`, `registration_verification_stuednt_phone`, `registration_verification_code`) VALUES
(1, 2014200000052, '0168035290', 7805);

-- --------------------------------------------------------

--
-- Table structure for table `seu_student_data`
--

CREATE TABLE `seu_student_data` (
  `id` int(255) NOT NULL,
  `student_id` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seu_student_data`
--

INSERT INTO `seu_student_data` (`id`, `student_id`) VALUES
(8, 2012000400146),
(3, 2014200000027),
(2, 2014200000029),
(7, 2014200000041),
(1, 2014200000046),
(6, 2014200000052),
(4, 2014200000057),
(5, 2014200000063);

-- --------------------------------------------------------

--
-- Table structure for table `seu_student_profile`
--

CREATE TABLE `seu_student_profile` (
  `seu_profile_id` int(255) NOT NULL,
  `seu_profile_user` bigint(255) NOT NULL,
  `seu_profile_first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seu_profile_last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seu_profile_gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `seu_profile_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seu_profile_area` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seu_profile_department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seu_profile_blood_group` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seu_profile_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seu_profile_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `seu_profile_update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seu_student_profile`
--

INSERT INTO `seu_student_profile` (`seu_profile_id`, `seu_profile_user`, `seu_profile_first_name`, `seu_profile_last_name`, `seu_profile_gender`, `seu_profile_email`, `seu_profile_area`, `seu_profile_department`, `seu_profile_blood_group`, `seu_profile_text`, `seu_profile_at`, `seu_profile_update_at`) VALUES
(6, 2014200000046, 'Sultanul', 'Kiasar', 'Male', 'sultanulkaisar@gmail.com', 'Rampura', 'CSE', 'O+', 'Good!', '2018-12-23 16:11:35', '2018-12-23 16:11:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seu_blood_request`
--
ALTER TABLE `seu_blood_request`
  ADD PRIMARY KEY (`blood_request_id`);

--
-- Indexes for table `seu_faculty_data`
--
ALTER TABLE `seu_faculty_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seu_faculty_registration_hash`
--
ALTER TABLE `seu_faculty_registration_hash`
  ADD PRIMARY KEY (`registration_hash_id`);

--
-- Indexes for table `seu_registered_faculty`
--
ALTER TABLE `seu_registered_faculty`
  ADD PRIMARY KEY (`registered_id`);

--
-- Indexes for table `seu_registered_student`
--
ALTER TABLE `seu_registered_student`
  ADD PRIMARY KEY (`registered_id`);

--
-- Indexes for table `seu_registration_hash`
--
ALTER TABLE `seu_registration_hash`
  ADD PRIMARY KEY (`registration_hash_id`);

--
-- Indexes for table `seu_registration_verification`
--
ALTER TABLE `seu_registration_verification`
  ADD PRIMARY KEY (`registration_verification_id`);

--
-- Indexes for table `seu_student_data`
--
ALTER TABLE `seu_student_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `seu_student_profile`
--
ALTER TABLE `seu_student_profile`
  ADD PRIMARY KEY (`seu_profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seu_blood_request`
--
ALTER TABLE `seu_blood_request`
  MODIFY `blood_request_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seu_faculty_data`
--
ALTER TABLE `seu_faculty_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seu_faculty_registration_hash`
--
ALTER TABLE `seu_faculty_registration_hash`
  MODIFY `registration_hash_id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seu_registered_faculty`
--
ALTER TABLE `seu_registered_faculty`
  MODIFY `registered_id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seu_registered_student`
--
ALTER TABLE `seu_registered_student`
  MODIFY `registered_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seu_registration_hash`
--
ALTER TABLE `seu_registration_hash`
  MODIFY `registration_hash_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seu_registration_verification`
--
ALTER TABLE `seu_registration_verification`
  MODIFY `registration_verification_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seu_student_data`
--
ALTER TABLE `seu_student_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seu_student_profile`
--
ALTER TABLE `seu_student_profile`
  MODIFY `seu_profile_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
