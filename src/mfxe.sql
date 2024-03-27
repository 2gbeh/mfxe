-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2021 at 11:25 PM
-- Server version: 5.7.33
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmfxcomn_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `password` varchar(25) NOT NULL DEFAULT '1234',
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `phone`, `password`, `STATUS`, `DATE`, `ID`) VALUES
('2gbeh', 'dehphantom@yahoo.com', '08169960927', '4444', 5, '2020-11-13 21:09:54', 1),
('admin', 'admin@mmfx.com.ng', '08164670916', '1234', 4, '2020-11-13 21:09:54', 2),
('fd', 'fd@mmfx.com.ng', NULL, '1234', 1, '2021-02-05 14:30:42', 9),
('cc', 'cc@mmfx.com.ng', NULL, '1234', 2, '2021-02-05 14:30:42', 8),
('md', 'md@mmfx.com.ng', NULL, '1234', 3, '2021-02-05 14:30:42', 10),
('ceo', 'ceo@mmfx.com.ng', NULL, '1234', 4, '2021-02-12 14:30:42', 11);

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `user_id` int(11) NOT NULL,
  `p` int(11) NOT NULL,
  `r` int(3) NOT NULL,
  `t` int(3) NOT NULL,
  `bal` int(11) NOT NULL,
  `reg_date` date DEFAULT NULL,
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`user_id`, `p`, `r`, `t`, `bal`, `reg_date`, `STATUS`, `DATE`, `ID`) VALUES
(9, 1000000, 5, 6, 1300000, '2021-01-10', 0, '2021-02-14 13:05:24', 4),
(15, 500000, 5, 6, 525000, '2020-09-22', 0, '2020-09-22 15:24:08', 5),
(11, 1000000, 5, 6, 1300000, '2020-11-11', 0, '2021-02-24 15:27:56', 6),
(4, 500000, 5, 6, 650000, '2020-09-01', 0, '2021-02-28 20:14:17', 7),
(5, 500000, 5, 6, 650000, '2020-10-05', 0, '2021-02-28 20:17:18', 8),
(6, 1035000, 5, 6, 1345500, '2020-10-06', 0, '2021-02-28 20:18:16', 9),
(7, 1000000, 5, 6, 1300000, '2020-10-20', 0, '2021-02-28 20:19:48', 10),
(8, 600000, 5, 6, 780000, '2020-10-23', 0, '2021-02-28 20:20:35', 11),
(10, 500000, 5, 6, 650000, '2020-11-05', 0, '2021-02-28 20:23:02', 12),
(12, 550000, 5, 6, 715000, '2020-11-17', 0, '2021-02-28 20:26:48', 13),
(13, 500000, 5, 6, 650000, '2020-11-30', 0, '2021-02-28 20:27:31', 14),
(14, 1000000, 5, 6, 1300000, '2020-12-01', 0, '2021-02-28 20:28:09', 15),
(16, 600000, 5, 6, 780000, '2020-12-12', 0, '2021-02-28 20:29:15', 16),
(19, 1000000, 5, 6, 1300000, '2020-10-05', 0, '2021-03-10 08:26:01', 17),
(20, 3000000, 5, 6, 3900000, '2020-10-05', 0, '2021-03-10 08:26:39', 18),
(21, 900000, 5, 6, 1170000, '2020-10-05', 0, '2021-03-10 08:27:20', 19),
(22, 500000, 5, 6, 650000, '2020-10-05', 0, '2021-03-10 08:28:13', 20),
(23, 1395000, 5, 6, 1813500, '2020-10-06', 0, '2021-03-10 08:30:11', 21),
(24, 2500000, 5, 6, 3250000, '2020-10-06', 0, '2021-03-10 08:30:54', 22),
(25, 500000, 5, 6, 650000, '2020-10-08', 0, '2021-03-10 08:31:33', 23),
(26, 5000000, 5, 6, 6500000, '2021-02-05', 0, '2021-03-10 08:33:23', 24),
(27, 500000, 5, 6, 650000, '2021-02-10', 0, '2021-03-10 08:34:37', 25),
(28, 1000000, 5, 6, 1300000, '2021-02-15', 0, '2021-03-10 08:35:08', 26),
(29, 500000, 5, 6, 650000, '2021-02-20', 0, '2021-03-10 08:35:49', 27),
(30, 500000, 5, 6, 650000, '2021-02-25', 0, '2021-03-10 08:36:34', 28),
(31, 1000000, 5, 6, 1300000, '2021-02-27', 0, '2021-03-10 08:37:21', 29),
(32, 500000, 5, 6, 650000, '2021-02-28', 0, '2021-03-10 08:37:59', 30),
(33, 2500000, 5, 6, 3250000, '2021-03-01', 0, '2021-03-10 08:38:39', 31),
(34, 500000, 5, 6, 650000, '2021-03-04', 0, '2021-03-10 08:39:21', 32),
(35, 3000000, 5, 6, 3900000, '2021-02-03', 0, '2021-03-10 08:40:18', 33),
(36, 2050000, 5, 6, 2665000, '2021-02-04', 0, '2021-03-10 08:41:02', 34),
(37, 1000000, 5, 6, 1300000, '2021-03-06', 0, '2021-03-10 08:41:37', 35),
(38, 5000000, 5, 6, 6500000, '2021-03-06', 0, '2021-03-10 08:42:11', 36),
(39, 1000000, 5, 6, 1300000, '2021-03-07', 0, '2021-03-10 08:42:53', 37),
(40, 1000000, 5, 6, 1300000, '2021-03-08', 0, '2021-03-10 08:45:11', 38),
(41, 1000000, 5, 6, 1300000, '2021-03-10', 0, '2021-03-10 08:45:48', 39),
(42, 6700000, 5, 6, 8710000, '2021-03-10', 0, '2021-03-10 08:46:26', 40),
(43, 500000, 5, 6, 650000, '2021-01-05', 0, '2021-03-10 08:47:08', 41),
(44, 1500000, 5, 6, 1950000, '2021-01-06', 0, '2021-03-10 08:48:39', 42),
(45, 900000, 5, 6, 1170000, '2021-01-08', 0, '2021-03-10 08:49:14', 43);

-- --------------------------------------------------------

--
-- Table structure for table `debit`
--

CREATE TABLE `debit` (
  `user_id` int(11) NOT NULL,
  `mo` int(2) NOT NULL,
  `yr` int(4) NOT NULL,
  `amt` int(11) NOT NULL,
  `bal` int(11) NOT NULL,
  `reg_date` date DEFAULT NULL,
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debit`
--

INSERT INTO `debit` (`user_id`, `mo`, `yr`, `amt`, `bal`, `reg_date`, `STATUS`, `DATE`, `ID`) VALUES
(15, 2, 2021, 25000, 550000, '2021-02-24', 0, '2021-02-24 15:29:45', 4),
(15, 11, 2020, 25000, 625000, '2020-11-24', 0, '2021-02-24 15:29:45', 10),
(15, 12, 2020, 25000, 600000, '2020-12-24', 0, '2021-02-24 15:29:45', 9),
(15, 1, 2021, 25000, 525000, '2021-01-24', 0, '2021-02-24 15:29:45', 8),
(15, 10, 2020, 25000, 575000, '2020-10-24', 0, '2021-02-24 15:29:45', 11);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `user_id` int(11) NOT NULL,
  `message` varchar(750) NOT NULL,
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `passport` varchar(25) DEFAULT 'default.png',
  `surname` varchar(15) NOT NULL,
  `names` varchar(30) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(11) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `address` varchar(80) NOT NULL,
  `state` int(2) NOT NULL,
  `country` char(3) DEFAULT 'NGA',
  `religion` int(1) DEFAULT NULL,
  `occupation` varchar(25) DEFAULT NULL,
  `bank` int(3) NOT NULL,
  `acct_name` varchar(50) NOT NULL,
  `acct_no` varchar(10) NOT NULL,
  `bank_alt` int(3) DEFAULT NULL,
  `acct_name_alt` varchar(50) DEFAULT NULL,
  `acct_no_alt` varchar(10) DEFAULT NULL,
  `valid_id` int(3) DEFAULT NULL,
  `valid_id_no` varchar(25) DEFAULT NULL,
  `valid_id_file` varchar(25) DEFAULT NULL,
  `referral` varchar(50) DEFAULT NULL,
  `reg_date` date NOT NULL,
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`passport`, `surname`, `names`, `gender`, `email`, `mobile`, `phone`, `address`, `state`, `country`, `religion`, `occupation`, `bank`, `acct_name`, `acct_no`, `bank_alt`, `acct_name_alt`, `acct_no_alt`, `valid_id`, `valid_id_no`, `valid_id_file`, `referral`, `reg_date`, `STATUS`, `DATE`, `ID`) VALUES
('default.png', 'Ajagun', 'Yvonne Carol', 'F', '', '09020434767', '', 'K Farm Estate Iju', 25, 'NGA', 0, '', 8, 'Ajagun Yvonne Carol', '0175676643', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-11-11', 0, '2021-01-06 15:25:17', 11),
('default.png', 'Sylvester', 'Ogheneakpobo', 'M', '', '08034839010', '', 'Avenue Baptist Church, 6 Akpa Street. Off Okumagba Avenue, Warri', 11, 'NGA', 1, '', 8, 'Sylvester Ogheneakpobo', '0215587164', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-09-01', 0, '2021-01-06 14:08:28', 4),
('default.png', 'Okpu', 'Ngozi', 'F', '', '08106444919', '', 'Magbaja Street off aka Avenue Effurun, Warri', 11, 'NGA', 1, '', 4, 'Okpu Ngozi', '2571120124', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-10-05', 0, '2021-01-06 14:47:49', 5),
('default.png', 'Udeaku', 'Adekunle', 'M', '', '14375807755', '', 'Sobo Arobiodu st, Ikeja GRA', 25, 'NGA', 1, '', 1, 'Udeaku Adekunle', '0089259662', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-10-06', 0, '2021-01-06 14:52:36', 6),
('default.png', 'Lawei', 'Edith', 'F', '', '08073273972', '', 'Ken Close, St Mary off Airport Road, Warri', 11, 'NGA', 1, '', 1, 'Lawei Edith', '0098999867', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-10-20', 0, '2021-01-06 15:11:14', 7),
('default.png', 'Igbo', 'Chiamaka Lynda', 'F', '', '07036896061', '', 'Efab Estate Life Camp', 2, 'NGA', 0, '', 7, 'Igbo Chiamaka Lynda', '3067493015', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-10-23', 0, '2021-01-06 15:14:32', 8),
('default.png', 'Alabi', 'Abdulwasiu Abiola', 'M', '', '08032869461', '', 'Uruto Street, Ozoro', 11, 'NGA', 0, '', 7, 'Alabi Abdulwasiu Abiola', '3055223071', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-11-02', 0, '2021-01-06 15:18:13', 9),
('default.png', 'Okoaze', 'Vivian Nkeiruka', 'F', '', '07036403644', '', 'Umueze Quarters, Ibusa', 11, 'NGA', 0, '', 20, 'Okoaze Vivian Nkeiruka', '0046460083', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-11-05', 0, '2021-01-06 15:22:13', 10),
('default.png', 'Onunka', 'Udobi Joy', 'F', '', '07034793762', '', 'Ikogba Crescent, Alahun Osunba, Maza Maza', 25, 'NGA', 0, '', 22, 'Onuka Udobi Joy', '0244966306', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-11-17', 0, '2021-01-06 15:30:28', 12),
('default.png', 'Stephen', 'Awele Illobah', 'M', '', '07068987372', '', 'Umubiaije, Obodogwu Quarters, Okpanam', 11, 'NGA', 0, '', 23, 'Stephen Awele Illobah', '2189557085', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-11-30', 0, '2021-01-06 15:35:13', 13),
('default.png', 'Anyakunle', 'Paul Babajide', 'M', '', '08098750662', '', 'Drive 5, Second Gate Prince and Princess Estate', 2, 'NGA', 0, '', 7, 'Anyakunle Paul Babajide', '3044704271', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-12-01', 0, '2021-01-06 15:39:45', 14),
('default.png', 'Okpala', 'Azuka Precious', 'M', '', '08164670916', '', 'No. 6 Adams Lane Ubeji, Warri', 11, 'NGA', 1, '', 1, 'Okpala Azuka Precious', '0719371642', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-12-04', 0, '2021-01-06 15:47:44', 15),
('default.png', 'Amoniyan', 'Adedamola Francis', 'M', '', '09034489838', '', '51, Oduwole Street, Egbeda', 25, 'NGA', 0, '', 19, 'Amoniyan Ademola Francis', '2113453357', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-12-12', 0, '2021-01-06 15:52:36', 16),
('default.png', 'Egbedi', 'Edesiri Jacinta', 'F', '', '08035468942', '', 'No. 3 Farm Road, Eliowhani', 33, 'NGA', 0, '', 19, 'Egbedi Edesiri Jacinta', '2150601681', NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-12-14', 0, '2021-01-06 15:55:55', 17),
('IMG_20210207_160751.png', 'doe', 'jane johnson', 'F', 'jjdoe@domain.com', '08169960928', '', '39B Uwasota Road, Ugbowo, Benin City', 13, 'NGA', 1, 'Teacher', 8, 'DOE JANE JOHNSON', '0131988215', NULL, '', '', 4, '1234567890-2', 'IMG_20210207_160751.png', 'None', '2020-02-13', 0, '2020-02-13 09:27:00', 2),
('default.png', 'Stanley', 'Onwuma', 'M', '', '08063361218', '', 'Zappa secondary school Umuagu Asaba', 11, 'NGA', 0, '', 8, 'Stanley Onwuma', '0178463970', 0, '', '', 0, '', NULL, '', '2020-10-05', 0, '2021-03-04 14:31:27', 19),
('default.png', 'Zitu', 'Christiana', 'F', '', '08039207709', '', 'Oruma street New Layout', 11, 'NGA', 0, '', 1, 'Zitu Christiana', '1219411937', 0, '', '', 0, '', NULL, '', '2020-10-05', 0, '2021-03-04 14:35:05', 20),
('default.png', 'Zainab', 'Mustapha', 'F', '', '08165715237', '', 'Area 1 section 1 iwopin close Garki', 2, '', 0, '', 14, 'Zainab Mustapha', '3080007243', 0, '', '', 0, '', NULL, '', '2020-10-05', 0, '2021-03-04 14:39:21', 21),
('default.png', 'Akaogu', 'Benjamin', 'M', '', '08062977053', '', 'onitsha', 5, '', 0, '', 6, 'Akaogu Benjamin', '6011402247', 0, '', '', 0, '', NULL, '', '2020-10-05', 0, '2021-03-04 14:42:39', 22),
('default.png', 'Omunizua', 'Otitodilichuckwu', 'M', '', '08034700444', '', 'House H42, Close 40, Victoria Garden City', 25, '', 0, '', 8, 'Omunizua Emmanuel Otitodilichukwu', '0001291846', 0, '', '', 0, '', NULL, '', '2020-10-06', 0, '2021-03-04 14:52:19', 23),
('default.png', 'Datimfon', 'Ekong Nkang', 'M', '', '08038334988', '', 'Plot Sigba Ewet Housing Estate, Uyo', 4, '', 0, '', 1, 'Datimfon Ekong Nkang', '0080889235', 0, '', '', 0, '', NULL, '', '2020-10-06', 0, '2021-03-04 14:59:25', 24),
('default.png', 'Abdullahi', 'Auwal Baba', 'M', '', '07064241845', '', 'nil', 20, '', 0, '', 23, 'Abdullahi Auwal Baba', '2263363274', 0, '', '', 0, '', NULL, '', '2020-10-08', 0, '2021-03-04 15:06:31', 25),
('default.png', 'Gabriel', 'Odok', 'M', '', '07032426807', '', 'Basin Authority Satelite town, 8miles', 25, '', 0, '', 8, 'Gabriel Odok', '0233577648', 0, '', '', 0, '', NULL, '', '2020-10-09', 0, '2021-03-04 15:12:49', 26),
('default.png', 'Okpu', 'Daniel Ifechukwuloni', 'M', '', '08107455184', '', '19 magbaja street, Refinery road, Aka Avenue, Effurun', 11, 'NGA', 0, '', 4, 'Okpu Daniel Ifechukwuloni', '4920003995', 0, '', '', 0, '', NULL, '', '2020-10-09', 0, '2021-03-09 11:29:01', 27),
('default.png', 'Tejiri', 'Ejiyere', 'M', '', '08032495250', '', '1 Isreal Eli close, mini orlu road off Ada George, Port Harcourt', 33, 'NGA', 0, '', 8, 'Tejiri Ejiyere', '0033050747', 0, '', '', 0, '', NULL, '', '2020-10-13', 0, '2021-03-09 11:36:40', 28),
('default.png', 'Edegware', 'Ifeoma Shirley', 'F', '', '08032504990', '', '54 Nnaji Street, Uwani', 15, 'NGA', 0, '', 7, 'Edegware Ifeoma Shirley', '3115575366', 0, '', '', 0, '', NULL, '', '2020-10-14', 0, '2021-03-09 11:43:13', 29),
('default.png', 'Tigbioritse', 'Sarah Bemigho', 'F', '', '09066098662', '', 'Ekurede Itsekiri Warii', 11, 'NGA', 0, '', 23, 'Tigbioritse Sarah Bemigho', '2176257813', 0, '', '', 0, '', NULL, '', '2020-10-16', 0, '2021-03-09 11:47:13', 30),
('default.png', 'Braboke', 'Akpos Pamela', 'F', '', '08075197149', '', 'New Era Road, Warri', 11, 'NGA', 0, '', 5, 'Braboke Akpos Pamela', '2476199018', 0, '', '', 0, '', NULL, '', '2020-10-17', 0, '2021-03-09 12:02:02', 31),
('default.png', 'Chukwuemeka', 'Obioma Oti', 'M', '', '08064425303', '', '4 Thompson close, off Ekpo Abasi, Calabar South', 10, 'NGA', 0, '', 23, 'Chukwuemeka Obioma Oti', '2175618635', 0, '', '', 0, '', NULL, '', '2020-10-21', 0, '2021-03-09 13:01:19', 32),
('default.png', 'Edidiong', 'Udofia', 'M', '', '08028706836', '', 'Uyo', 4, 'NGA', 0, '', 23, 'Edidiong Udofia', '1001155135', 0, '', '', 0, '', NULL, '', '2020-10-21', 0, '2021-03-09 13:05:43', 33),
('default.png', 'Oyewole', 'Fayoyin Grace', 'F', '', '08038986915', '', '8 Osunkaye street Bodija, Ibadan', 31, 'NGA', 0, '', 8, 'Oyewole Fayoyin Grace', '0029680480', 0, '', '', 0, '', NULL, '', '2020-10-23', 0, '2021-03-09 13:10:05', 34),
('default.png', 'Amechi', 'Ugwu', 'M', '', '07080702251', '', 'Lagos state', 25, 'NGA', 0, '', 8, 'Amechi Ugwu', '0007786669', 0, '', '', 0, '', NULL, '', '2020-10-26', 0, '2021-03-09 13:15:40', 35),
('default.png', 'Isreal', 'Godwin', 'M', '', '08165025774', '', 'Jakpa Road, Standard High School off Omonigho Close', 11, 'NGA', 0, '', 23, 'Isreal Godwin', '2281155897', 0, '', '', 0, '', NULL, '', '2020-10-27', 0, '2021-03-09 13:20:47', 36),
('default.png', 'James', 'Mobolaji Adebayo', 'M', '', '07085158952', '', 'Lekki Gardens, Paradise Estate 3, Chevron Drive, Lekki', 25, 'NGA', 0, '', 1, 'James Mobolaji Adebayo', '0782895254', 0, '', '', 0, '', NULL, '', '2020-08-31', 0, '2021-03-09 14:53:58', 37),
('default.png', 'Achor', 'James Enemaku', 'M', '', '08052800124', '', '1 Laayeni Abinu close, off Balogun Road, Iju', 25, 'NGA', 0, '', 8, 'Achor James Enemaku', '0017378489', 0, '', '', 0, '', NULL, '', '2020-09-01', 0, '2021-03-09 14:58:16', 38),
('default.png', 'Chibuzor', 'Emmanuel Nwoke', 'M', '', '07065101228', '', '27 Ebiere Street, Isolo', 25, 'NGA', 0, '', 1, 'Chibuzor Emmanuel Nwoke', '1407483382', 0, '', '', 0, '', NULL, '', '2020-09-01', 0, '2021-03-09 15:03:27', 39),
('default.png', 'Nanna', 'Onoriode Felix', 'M', '', '08147419946', '', '4 Nzelegu Nathaniel close, Osubi', 11, 'NGA', 0, '', 7, 'Nanna Oniorode Felix', '3126701307', 0, '', '', 0, '', NULL, '', '2020-09-01', 0, '2021-03-09 15:09:22', 40),
('default.png', 'Ita', 'Ikpeme Iyaya', 'M', '', '08038909867', '', '18 Vitus Okpala Street, Ajao Estate', 25, 'NGA', 0, '', 8, 'Ita Ikpeme Iyaya', '0008814343', 0, '', '', 0, '', NULL, '', '2020-09-01', 0, '2021-03-09 15:13:10', 41),
('default.png', 'Emelike', 'Prince Henry', 'M', '', '08068275813', '', '5 Item Street Umuahia', 1, 'NGA', 0, '', 8, 'Emelike Prince Henry', '0044322767', 0, '', '', 0, '', NULL, '', '2020-09-02', 0, '2021-03-09 15:25:34', 42),
('default.png', 'Mordi', 'Emmanuel C.', 'M', '', '08137844233', '', 'Minfa 1 Lokogoma', 2, 'NGA', 0, '', 7, 'Mordi Emmanuel C.', '3052183660', 0, '', '', 0, '', NULL, '', '2020-09-02', 0, '2021-03-09 15:30:54', 43),
('default.png', 'Lucky', 'James Obong', 'M', '', '08105906806', '', 'House 43, Emerald Flower Estate, Lokogoma Ill', 2, 'NGA', 0, '', 3, 'Lucky James Obong', '0023718651', 0, '', '', 0, '', NULL, '', '2020-09-02', 0, '2021-03-09 15:36:17', 44),
('default.png', 'Echem', 'John Chinonso', 'M', '', '08169683659', '', 'General Hospital Ogwashiuku', 11, 'NGA', 0, '', 19, 'Echem John Chinonso', '2050065147', 0, '', '', 0, '', NULL, '', '2020-09-02', 0, '2021-03-09 15:56:45', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `debit`
--
ALTER TABLE `debit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `message` (`message`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `debit`
--
ALTER TABLE `debit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
