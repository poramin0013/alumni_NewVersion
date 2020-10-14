-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 มี.ค. 2020 เมื่อ 03:31 AM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `alumni`
--

CREATE TABLE `alumni` (
  `student_id` int(9) NOT NULL,
  `group` varchar(10) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `faculty` varchar(255) DEFAULT NULL,
  `semester` enum('ภาคเรียนปกติ','ภาคเรียนพิเศษ') DEFAULT NULL,
  `education_level` enum('ปริญญาตรี','ปริญญาโท','ปริญญาเอก') DEFAULT NULL,
  `year_int` char(4) DEFAULT NULL,
  `year_out` char(4) DEFAULT NULL,
  `outstanding_work` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `alumni`
--

INSERT INTO `alumni` (`student_id`, `group`, `branch`, `faculty`, `semester`, `education_level`, `year_int`, `year_out`, `outstanding_work`) VALUES
(614259005, '61/47', 'วิศวกรรมซอฟแวร์', 'วิทยาศาสตร์และเทคโนโลยี', 'ภาคเรียนปกติ', 'ปริญญาตรี', '2561', '2563', '-'),
(614259038, '61/47', 'วิศวกรรมซอฟแวร์', 'วิทยาศาสตร์และเทคโนโลยี', 'ภาคเรียนปกติ', 'ปริญญาตรี', '2561', '2563', '-'),
(614259039, '61/47', 'วิศวกรรมซอฟแวร์', 'วิทยาศาสตร์และเทคโนโลยี', 'ภาคเรียนปกติ', 'ปริญญาตรี', '2561', '2563', '-');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `personal`
--

CREATE TABLE `personal` (
  `card_id` char(13) NOT NULL,
  `student_id` int(9) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` enum('ชาย','หญิง') DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `personal`
--

INSERT INTO `personal` (`card_id`, `student_id`, `name`, `gender`, `birthday`, `address`, `tel`, `email`, `facebook`, `img`) VALUES
('1234567890123', 614259005, 'นางสาว จุฑามาศ จานุชิต', 'หญิง', '0000-00-00', '25/8 Rose ST. Utah USA', '0000000000', '614259005@webmail.npru.ac.th', 'ต่าย หนองมะค่าโมง'),
('1579900782724', 614259038, 'นางสาว นฤชา ถนมพลาดิศัย', 'หญิง', '0000-00-00', '25/8 Rose ST. Utah USA', '0000000000', 'suphada22.ae@gmail.com', 'โฟร์ โฟร์'),
('1730501138678', 614259039, 'นาย ปรมินทร์ จุมพรม', 'ชาย', '0000-00-00', '25/8 Rose ST. Utah USA', '0000000000', '614259029@webmail.npru.ac.th', 'Poramin Jumphom');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `workinformation`
--

CREATE TABLE `workinformation` (
  `work_id` int(9) NOT NULL,
  `student_id` int(9) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `workinformation`
--

INSERT INTO `workinformation` (`work_id`, `student_id`, `company`, `position`, `address`, `tel`) VALUES
(11, 614259005, 'บ้านนี้มีรัก', 'เมียหลวงผู้บริหาร', '25/8 Rose ST. Utah USA', '021111111'),
(12, 614259038, 'บ้านนี้มีรัก', 'เมียน้อยผู้บริหาร', '25/8 Rose ST. Utah USA', '021111111'),
(13, 614259039, 'บ้านนี้มีรัก', 'ผู้บริหาร', '25/8 Rose ST. Utah USA', '021111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `FK` (`student_id`);

--
-- Indexes for table `workinformation`
--
ALTER TABLE `workinformation`
  ADD PRIMARY KEY (`work_id`),
  ADD KEY `FK` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workinformation`
--
ALTER TABLE `workinformation`
  MODIFY `work_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`);

--
-- Constraints for table `workinformation`
--
ALTER TABLE `workinformation`
  ADD CONSTRAINT `workinformation_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
