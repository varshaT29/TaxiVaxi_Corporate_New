-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 25, 2018 at 11:07 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxivaxi_corporate_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `taxibooking_companyname` varchar(191) NOT NULL,
  `tourtype` varchar(191) NOT NULL,
  `pickup_location` varchar(191) NOT NULL,
  `drop_location` varchar(191) NOT NULL,
  `bookingdatetime` text NOT NULL,
  `pickupdatetime` text NOT NULL,
  `assessmentcode` varchar(191) NOT NULL,
  `billing_entity` varchar(191) NOT NULL,
  `reason_for_booking` varchar(191) NOT NULL,
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `send_sms` tinyint(2) NOT NULL DEFAULT '0',
  `send_email` tinyint(2) NOT NULL DEFAULT '0',
  `spocname` varchar(191) NOT NULL,
  `no_of_seats` int(5) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `tourtype` (`tourtype`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`taxibooking_companyname`, `tourtype`, `pickup_location`, `drop_location`, `bookingdatetime`, `pickupdatetime`, `assessmentcode`, `billing_entity`, `reason_for_booking`, `id`, `send_sms`, `send_email`, `spocname`, `no_of_seats`, `updated_at`, `created_at`) VALUES
('TCS', 'Radio', 'pimpri', 'chinchwad', '2018-10-20 00:00:00', '2018-10-20 00:00:00', 'AC01', 'sungard', 'pickup and drop', 1, 0, 0, 'SPOC1', 0, '2018-10-15 08:14:04', '2018-10-15 08:14:04'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'AC01', 'sungard', 'pickup and drop', 2, 0, 0, 'SPOC1', 3, '2018-10-17 05:32:24', '2018-10-17 05:32:24'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'AC01', 'sungard', 'pickup and drop', 3, 0, 0, 'SPOC1', 3, '2018-10-17 05:37:59', '2018-10-17 05:37:59'),
('Test1112', 'Radio', 'pimpri', 'chinchwad', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'AC01', 'sungard', 'pickup and drop', 4, 0, 0, 'SPOC2', 2, '2018-10-19 11:41:36', '2018-10-19 11:41:36'),
('Sungard12', 'Radio', 'pimpri', 'chinchwad', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'AC01', 'sungard', 'pickup and drop', 5, 0, 0, 'SPOC3', 2, '2018-10-20 05:17:22', '2018-10-20 05:17:22'),
('Sungard12', 'Radio', 'pimpri', 'chinchwad', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'AC01', 'sungard', 'pickup and drop', 6, 0, 0, 'SPOC3', 2, '2018-10-20 05:18:40', '2018-10-20 05:18:40'),
('Sungard12', 'Radio', 'pimpri', 'chinchwad', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'AC01', 'sungard', 'pickup and drop', 7, 0, 0, 'SPOC3', 2, '2018-10-20 05:19:12', '2018-10-20 05:19:12'),
('TV1', 'Radio', 'pimpri', 'chinchwad', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'AC01', 'sungard', 'pickup and drop', 8, 0, 0, 'SPOC3', 2, '2018-10-20 05:21:54', '2018-10-20 05:21:54'),
('TV2', 'Outstation', 'pimpri', 'chinchwad', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'AC01', 'sungard', 'pickup and drop', 9, 1, 1, 'SPOC3', 1, '2018-10-20 05:33:50', '2018-10-20 05:33:50'),
('Sungard12', 'Local', 'pimpri', 'chinchwad', '20-10-2018 15:07', '20-10-2018 17:07', 'AC01', 'sungard', 'pickup and drop', 10, 1, 1, 'SPOC2', 1, '2018-10-20 05:38:00', '2018-10-20 05:38:00'),
('TCS123', 'Outstation', 'pimpri', 'chinchwad', '20-10-2018 11:18', '20-10-2018 11:18', 'AC01', 'sungard', 'pickup and drop', 11, 1, 1, 'SPOC2', 1, '2018-10-20 05:48:46', '2018-10-20 05:48:46'),
('TCS123', 'Outstation', 'pimpri', 'chinchwad', '20-10-2018 11:18', '20-10-2018 11:18', 'AC01', 'sungard', 'pickup and drop', 12, 1, 1, 'SPOC2', 1, '2018-10-20 05:56:05', '2018-10-20 05:56:05'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:26', '20-10-2018 11:26', 'AC01', 'sungard', 'pickup and drop', 13, 1, 1, 'SPOC1', 2, '2018-10-20 05:56:50', '2018-10-20 05:56:50'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:27', '20-10-2018 11:27', 'AC01', 'sungard', 'pickup and drop', 14, 1, 1, 'SPOC1', 2, '2018-10-20 05:58:12', '2018-10-20 05:58:12'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:27', '20-10-2018 11:27', 'AC01', 'sungard', 'pickup and drop', 15, 1, 1, 'SPOC1', 2, '2018-10-20 05:59:58', '2018-10-20 05:59:58'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:30', '20-10-2018 11:30', 'AC01', 'sungard', 'pickup and drop', 16, 1, 1, 'SPOC1', 2, '2018-10-20 06:01:02', '2018-10-20 06:01:02'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:30', '20-10-2018 11:30', 'AC01', 'sungard', 'pickup and drop', 17, 1, 1, 'SPOC1', 2, '2018-10-20 06:03:58', '2018-10-20 06:03:58'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:30', '20-10-2018 11:30', 'AC01', 'sungard', 'pickup and drop', 18, 1, 1, 'SPOC1', 2, '2018-10-20 06:06:48', '2018-10-20 06:06:48'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:30', '20-10-2018 11:30', 'AC01', 'sungard', 'pickup and drop', 19, 1, 1, 'SPOC1', 2, '2018-10-20 06:07:03', '2018-10-20 06:07:03'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:30', '20-10-2018 11:30', 'AC01', 'sungard', 'pickup and drop', 20, 1, 1, 'SPOC1', 2, '2018-10-20 06:49:28', '2018-10-20 06:49:28'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:30', '20-10-2018 11:30', 'AC01', 'sungard', 'pickup and drop', 21, 1, 1, 'SPOC1', 2, '2018-10-20 06:54:29', '2018-10-20 06:54:29'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:30', '20-10-2018 11:30', 'AC01', 'sungard', 'pickup and drop', 22, 1, 1, 'SPOC1', 2, '2018-10-20 06:54:39', '2018-10-20 06:54:39'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:30', '20-10-2018 11:30', 'AC01', 'sungard', 'pickup and drop', 23, 1, 1, 'SPOC1', 2, '2018-10-20 07:09:04', '2018-10-20 07:09:04'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:30', '20-10-2018 11:30', 'AC01', 'sungard', 'pickup and drop', 24, 1, 1, 'SPOC1', 2, '2018-10-20 07:13:30', '2018-10-20 07:13:30'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:30', '20-10-2018 11:30', 'AC01', 'sungard', 'pickup and drop', 25, 1, 1, 'SPOC1', 2, '2018-10-20 07:17:11', '2018-10-20 07:17:11'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '20-10-2018 11:30', '20-10-2018 11:30', 'AC01', 'sungard', 'pickup and drop', 26, 1, 1, 'SPOC1', 2, '2018-10-20 07:26:05', '2018-10-20 07:26:05'),
('TV2', 'Local', 'pimpri', 'chinchwad', '22-10-2018 12:13', '22-10-2018 12:13', 'AC01', 'sungard', 'pickup and drop', 27, 0, 0, 'SPOC1', 2, '2018-10-22 06:44:00', '2018-10-22 06:44:00'),
('Sungard12', 'Local', 'pimpri', 'chinchwad', '22-10-2018 12:21', '22-10-2018 12:21', 'AC01', 'sungard', 'pickup and drop', 28, 1, 1, 'SPOC2', 2, '2018-10-22 06:52:08', '2018-10-22 06:52:08'),
('Sungard12', 'Outstation', 'pimpri', 'chinchwad', '22-10-2018 12:31', '22-10-2018 12:31', 'AC01', 'sungard', 'pickup and drop', 29, 1, 1, 'SPOC2', 2, '2018-10-22 07:02:19', '2018-10-22 07:02:19'),
('Sungard12', 'Outstation', 'pimpri', 'chinchwad', '22-10-2018 12:31', '22-10-2018 12:31', 'AC01', 'sungard', 'pickup and drop', 30, 1, 1, 'SPOC2', 2, '2018-10-22 07:02:24', '2018-10-22 07:02:24'),
('Sungard12', 'Outstation', 'pimpri', 'chinchwad', '22-10-2018 12:31', '22-10-2018 12:31', 'AC01', 'sungard', 'pickup and drop', 31, 1, 1, 'SPOC2', 2, '2018-10-22 07:02:39', '2018-10-22 07:02:39'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '22-10-2018 12:33', '22-10-2018 12:33', 'AC01', 'sungard', 'pickup and drop', 32, 1, 1, 'SPOC1', 2, '2018-10-22 07:03:36', '2018-10-22 07:03:36'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '22-10-2018 12:33', '22-10-2018 12:33', 'AC01', 'sungard', 'pickup and drop', 33, 1, 1, 'SPOC1', 2, '2018-10-22 07:03:40', '2018-10-22 07:03:40'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '22-10-2018 12:33', '22-10-2018 12:33', 'AC01', 'sungard', 'pickup and drop', 34, 1, 1, 'SPOC1', 2, '2018-10-22 07:03:57', '2018-10-22 07:03:57'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '22-10-2018 12:33', '22-10-2018 12:33', 'AC01', 'sungard', 'pickup and drop', 35, 1, 1, 'SPOC1', 1, '2018-10-22 07:09:06', '2018-10-22 07:09:06'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '22-10-2018 12:33', '22-10-2018 12:33', 'AC01', 'sungard', 'pickup and drop', 36, 1, 1, 'SPOC1', 1, '2018-10-22 07:10:59', '2018-10-22 07:10:59'),
('Sungard12', 'Local', 'pimpri', 'chinchwad', '22-10-2018 17:42', '22-10-2018 17:43', 'AC01', 'sungard', 'pickup and drop', 37, 0, 0, 'SPOC1', 2, '2018-10-22 12:13:45', '2018-10-22 12:13:45'),
('Sungard12', 'Local', 'pimpri', 'chinchwad', '22-10-2018 17:42', '22-10-2018 17:43', 'AC01', 'sungard', 'pickup and drop', 38, 0, 0, 'SPOC1', 2, '2018-10-22 12:16:32', '2018-10-22 12:16:32'),
('Sungard12', 'Local', 'pimpri', 'chinchwad', '22-10-2018 17:42', '22-10-2018 17:43', 'AC01', 'sungard', 'pickup and drop', 39, 0, 0, 'SPOC1', 2, '2018-10-22 12:17:05', '2018-10-22 12:17:05'),
('Sungard12', 'Local', 'pimpri', 'chinchwad', '22-10-2018 17:42', '22-10-2018 17:43', 'AC01', 'sungard', 'pickup and drop', 40, 0, 0, 'SPOC1', 2, '2018-10-22 12:17:59', '2018-10-22 12:17:59'),
('Sungard12', 'Local', 'pimpri', 'chinchwad', '22-10-2018 17:42', '22-10-2018 17:43', 'AC01', 'sungard', 'pickup and drop', 41, 0, 0, 'SPOC1', 2, '2018-10-22 12:18:52', '2018-10-22 12:18:52'),
('Sungard12', 'Local', 'pimpri', 'chinchwad', '22-10-2018 17:42', '22-10-2018 17:43', 'AC01', 'sungard', 'pickup and drop', 42, 0, 0, 'SPOC1', 2, '2018-10-22 12:29:13', '2018-10-22 12:29:13'),
('Sungard12', 'Local', 'pimpri', 'chinchwad', '23-10-2018 10:52', '23-10-2018 10:52', 'AC01', 'sungard', 'pickup and drop', 43, 1, 1, 'SPOC1', 2, '2018-10-23 05:23:15', '2018-10-23 05:23:15'),
('Sungard12', 'Local', 'pimpri', 'chinchwad', '23-10-2018 10:52', '23-10-2018 10:52', 'AC01', 'sungard', 'pickup and drop', 44, 1, 1, 'SPOC1', 2, '2018-10-23 05:23:46', '2018-10-23 05:23:46'),
('Sungard12', 'Local', 'pimpri', 'chinchwad', '23-10-2018 10:52', '23-10-2018 10:52', 'AC01', 'sungard', 'pickup and drop', 45, 1, 1, 'SPOC1', 2, '2018-10-23 05:25:23', '2018-10-23 05:25:23'),
('Sungard12', 'Local', 'pimpri', 'chinchwad', '23-10-2018 10:52', '23-10-2018 10:52', 'AC01', 'sungard', 'pickup and drop', 46, 1, 1, 'SPOC1', 2, '2018-10-23 05:27:11', '2018-10-23 05:27:11'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '23-10-2018 11:01', '23-10-2018 11:01', 'AC01', 'sungard', 'pickup and drop', 47, 1, 1, 'SPOC1', 2, '2018-10-23 05:41:52', '2018-10-23 05:41:52'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '23-10-2018 11:01', '23-10-2018 11:01', 'AC01', 'sungard', 'pickup and drop', 48, 1, 1, 'SPOC1', 2, '2018-10-23 05:42:40', '2018-10-23 05:42:40'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '23-10-2018 11:01', '23-10-2018 11:01', 'AC01', 'sungard', 'pickup and drop', 49, 1, 1, 'SPOC1', 2, '2018-10-23 05:43:59', '2018-10-23 05:43:59'),
('TCS', 'Radio', 'pimpri', 'chinchwad', '23-10-2018 11:01', '23-10-2018 11:01', 'AC01', 'sungard', 'pickup and drop', 50, 1, 1, 'SPOC1', 2, '2018-10-23 06:28:47', '2018-10-23 06:28:47'),
('TV2', 'Radio', 'pimpri', 'chinchwad', '23-10-2018 12:00', '23-10-2018 12:00', 'AC01', 'sungard', 'pickup and drop', 51, 1, 1, 'SPOC1', 2, '2018-10-23 07:10:27', '2018-10-23 07:10:27'),
('TV2', 'Radio', 'pimpri', 'chinchwad', '23-10-2018 12:00', '23-10-2018 12:00', 'AC01', 'sungard', 'pickup and drop', 52, 1, 1, 'SPOC1', 2, '2018-10-23 07:10:45', '2018-10-23 07:10:45'),
('test', 'Outstation', 'testpic', 'testdrop', '25-10-2018 16:22', '25-10-2018 17:22', '1', '1', 'dsa', 53, 0, 0, 'SPOC3', 1, '2018-10-25 05:23:14', '2018-10-25 05:23:14'),
('test', 'Outstation', 'testpic', 'testdrop', '25-10-2018 16:22', '25-10-2018 17:22', '1', '1', 'dsa', 54, 0, 0, 'SPOC3', 1, '2018-10-25 05:27:51', '2018-10-25 05:27:51'),
('test', 'Outstation', 'testpic', 'testdrop', '25-10-2018 16:22', '25-10-2018 17:22', '1', '1', 'dsa', 55, 0, 0, 'SPOC3', 1, '2018-10-25 05:28:13', '2018-10-25 05:28:13'),
('test', 'Outstation', 'testpic', 'testdrop', '25-10-2018 16:22', '25-10-2018 17:22', '1', '1', 'dsa', 56, 0, 0, 'SPOC3', 1, '2018-10-25 05:29:40', '2018-10-25 05:29:40'),
('test', 'Outstation', 'testpic', 'testdrop', '25-10-2018 16:22', '25-10-2018 17:22', '1', '1', 'dsa', 57, 0, 0, 'SPOC3', 1, '2018-10-25 05:29:53', '2018-10-25 05:29:53'),
('test', 'Outstation', 'testpic', 'testdrop', '25-10-2018 16:22', '25-10-2018 17:22', '1', '1', 'dsa', 58, 0, 0, 'SPOC3', 1, '2018-10-25 05:30:22', '2018-10-25 05:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

DROP TABLE IF EXISTS `employee_details`;
CREATE TABLE IF NOT EXISTS `employee_details` (
  `employeename` text,
  `employeeid` varchar(100) DEFAULT NULL,
  `employeecontact` varchar(20) DEFAULT NULL,
  `employeeemail` varchar(191) DEFAULT NULL,
  `taxibookingid` int(100) NOT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employeename`, `employeeid`, `employeecontact`, `employeeemail`, `taxibookingid`, `id`, `updated_at`, `created_at`) VALUES
('balwant', '1', '9876543210', 'test@g.com', 58, 33, '2018-10-25 11:00:22', '2018-10-25 11:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taxivaxiclients`
--

DROP TABLE IF EXISTS `taxivaxiclients`;
CREATE TABLE IF NOT EXISTS `taxivaxiclients` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `companyname` text COLLATE utf8_bin NOT NULL,
  `companycode` text COLLATE utf8_bin NOT NULL,
  `contactperson` text COLLATE utf8_bin NOT NULL,
  `contactnumber` bigint(20) NOT NULL,
  `contactemail` text COLLATE utf8_bin NOT NULL,
  `companypassword` text COLLATE utf8_bin NOT NULL,
  `companybillingname` text COLLATE utf8_bin NOT NULL,
  `companybillingaddress` longtext COLLATE utf8_bin NOT NULL,
  `companygst` text COLLATE utf8_bin NOT NULL,
  `spoc_approval` tinyint(2) NOT NULL DEFAULT '0',
  `admin_approval` tinyint(2) NOT NULL DEFAULT '0',
  `hasapproverlevel` tinyint(2) NOT NULL DEFAULT '0',
  `hasbothapprover` tinyint(2) NOT NULL DEFAULT '0',
  `hasnoapprover` tinyint(2) NOT NULL DEFAULT '0',
  `radio_booking` tinyint(2) NOT NULL DEFAULT '0',
  `local_booking` tinyint(2) NOT NULL DEFAULT '0',
  `Outstation_booking` tinyint(2) NOT NULL DEFAULT '0',
  `bus_booking` tinyint(2) NOT NULL DEFAULT '0',
  `train_booking` tinyint(2) NOT NULL DEFAULT '0',
  `flight_booking` tinyint(2) NOT NULL DEFAULT '0',
  `hotel_booking` tinyint(2) NOT NULL DEFAULT '0',
  `radio_booking_mgmt_fee` int(6) NOT NULL DEFAULT '200',
  `local_booking_mgmt_fee` int(6) NOT NULL DEFAULT '200',
  `outstation_booking_mgmt_fee` int(6) NOT NULL DEFAULT '200',
  `bus_booking_mgmt_fee` int(6) NOT NULL DEFAULT '200',
  `train_booking_mgmt_fee` int(6) NOT NULL DEFAULT '200',
  `flight_booking_mgmt_fee` int(6) NOT NULL DEFAULT '200',
  `hotel_booking_mgmt_fee` int(6) NOT NULL DEFAULT '200',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `taxivaxiclients`
--

INSERT INTO `taxivaxiclients` (`id`, `companyname`, `companycode`, `contactperson`, `contactnumber`, `contactemail`, `companypassword`, `companybillingname`, `companybillingaddress`, `companygst`, `spoc_approval`, `admin_approval`, `hasapproverlevel`, `hasbothapprover`, `hasnoapprover`, `radio_booking`, `local_booking`, `Outstation_booking`, `bus_booking`, `train_booking`, `flight_booking`, `hotel_booking`, `radio_booking_mgmt_fee`, `local_booking_mgmt_fee`, `outstation_booking_mgmt_fee`, `bus_booking_mgmt_fee`, `train_booking_mgmt_fee`, `flight_booking_mgmt_fee`, `hotel_booking_mgmt_fee`, `created_at`, `updated_at`) VALUES
(1, 'TCS', 'TCSTV01', 'person1', 12345, 'person1@tcs.com', '$2y$10$gikjrMj9.uzstp1H6HyhKOF2TeklEPYwT/sIc8HT7FL2Ed.RTsGs6', 'TCS Company', 'TCS Company,\r\nHinjewadi,\r\nPUNE', 'BS123', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-09-17 11:01:07', '2018-09-17 11:01:07'),
(2, 'TCS123', 'TCSTV01', 'person1', 12345, 'person1@tcs.com', '$2y$10$pgfqJGgjbu.cdEs97mSOWOjB2sAeEDYrVNQYfM.NvyChVgjR2aAwq', 'TCS Company', 'TCS Company,\r\nHinjewadi,\r\nPUNE', 'BS123', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-09-17 11:01:55', '2018-09-18 10:50:41'),
(3, 'Sungard12', 'SunTV0212', 'Person212', 1234512, 'Person212@sungard.com', '$2y$10$I002C6fT8VGC7ICnOToKcu5aBf2mnhuxdOubXDtq0WXtEFG6oaZje', 'Sungard AS12', 'Sungard AS12,\r\nViman Nagar,\r\nPUNE', 'SAS12312', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-09-17 11:05:17', '2018-09-18 10:47:35'),
(4, 'TV1', 'TV001', 'vinod', 4567890, 'vinod@test.com', '$2y$10$D3ttvHYZsYtC4PALouZ4deixmK3WeSMlUSXcFfWRXdWIXCtklkm06', 'TVAV', 'PUNE', 'GST011', 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-09-27 01:58:32', '2018-09-27 02:37:59'),
(5, 'TV2', 'TV002', 'vinod1234', 87656, 'vinod123@test.com', '$2y$10$EyF76TqUAwV9JHz5rS7QKeCPunHiR3NQo7Bfx1xZDhy2yVaJ8403u', 'TVAV1', 'pune', 'GST011', 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, '2018-10-01 01:37:11', '2018-10-01 01:39:01'),
(6, 'Test123', 'TV003', 'vinod1234', 5627890, 'vinod1234@test.com', '$2y$10$zSYAH9.sgaIDU9zpXV4VmuWJcsqIlN5MLNUtfnkfhgHjn2pXisyPG', 'TVAV4', 'PUNe', 'GST0112', 1, 0, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, '2018-10-04 03:06:23', '2018-10-11 07:02:22'),
(7, 'Test1112', 'TV01112', 'vinod1112', 432, 'vinod1112@test.com', '$2y$10$ssK5a3r04NN03pg7CBt17u643LojVkMFTOtR8aSGP6ByUydBLMSaq', 'TestName24444', 'PUNE', 'GST01112', 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, '2018-10-11 06:37:08', '2018-10-11 06:56:07'),
(8, 'test', 'cd01', 'vinod', 76543, 'vinodtest@taxivaxi.com', 'test123', 'testbill', 'pune', 'gst12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 200, 400, 200, 200, 200, 200, 200, '2018-10-11 18:30:00', '2018-10-12 07:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `taxivaxi_admins`
--

DROP TABLE IF EXISTS `taxivaxi_admins`;
CREATE TABLE IF NOT EXISTS `taxivaxi_admins` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `superadmin` tinyint(1) NOT NULL,
  `has_taxi_booking_access` tinyint(1) NOT NULL DEFAULT '0',
  `has_bus_booking_access` tinyint(1) NOT NULL DEFAULT '0',
  `has_train_booking_access` tinyint(1) NOT NULL DEFAULT '0',
  `has_flight_booking_access` tinyint(1) NOT NULL DEFAULT '0',
  `has_meal_booking_access` tinyint(1) NOT NULL DEFAULT '0',
  `has_billing_access` tinyint(1) NOT NULL DEFAULT '0',
  `emp_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_timing_start` time NOT NULL,
  `shift_timing_end` time NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `api_token` (`api_token`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxivaxi_admins`
--

INSERT INTO `taxivaxi_admins` (`id`, `name`, `email`, `password`, `mobile`, `company`, `superadmin`, `has_taxi_booking_access`, `has_bus_booking_access`, `has_train_booking_access`, `has_flight_booking_access`, `has_meal_booking_access`, `has_billing_access`, `emp_id`, `old_password`, `profile_image`, `shift_timing_start`, `shift_timing_end`, `remember_token`, `created_at`, `updated_at`, `api_token`) VALUES
(3, 'w1', 'chauhanbalwant007@gmail.com', '$2y$10$Tj2rTPtUm.0sxqdrfpk4Ju9EOIHheRmogs6fSS1ZtvOsx0mBwfYAm', '123', 'taxi', 1, 1, 1, 1, 1, 1, 1, 'emp212', NULL, NULL, '16:21:00', '19:21:00', 'B7UG2uvpNKTxXK3os19AbGuCDptk2nQFg50QiZnglliTyrnxB78mOaBgB4tM', '2018-09-06 10:54:24', '2018-10-24 12:21:20', ''),
(4, 'varsharani', 'varsharani@taxivaxi.com', '$2y$10$FIwK/Mt6BT8ySFpyF/Ve/.DrnS4Dml5QpvreXhdqeJkbR7.sxlKBy', '567', 'taxivaxi', 1, 0, 0, 0, 0, 0, 0, '', NULL, NULL, '16:26:00', '19:26:00', 'vo4yC1C1e0GZ3a74AEdj7TIM6IgN9Bwr5YOLFT6IOJjFN6gJj7dgAb0bbEXi', '2018-09-06 10:56:48', '2018-09-06 10:56:48', '$2y$10$VqzarTFAFaie8fCAKN5TkOpDh7hnhRnSZCltMOKEdeWGRyVZwS88m'),
(5, 'varsha', 'varsharani@test.com', '$2y$10$FLHegH9ymuUsYOxPS7ZDY.KVGYAVO/2eebALzSr7cEUfD3Wcc3v5i', '234', 'taxivaxi', 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, '06:50:00', '10:50:00', 'DFKcPI5aBgokQG66Ou2veEogGLzTvRM5IyyxPq6NXQvYBbFTb4Dwzta23TIp', '2018-09-07 01:20:44', '2018-09-07 01:20:44', ''),
(7, 'Tandale29', 'komal.katke29@gmail.com', '$2y$10$xZECGnsqOtlrjqkLOmPwJuiwUUf88uOj0p.5WwPW.sROz/2o/tAlO', '9527850736', 'TaxiVaxi', 1, 0, 0, 0, 0, 0, 0, '', NULL, NULL, '08:32:00', '20:32:00', NULL, '2018-09-07 03:03:50', '2018-09-15 07:13:41', ''),
(8, 'Vinod12345', 'vinod@taxivaxi.com', '$2y$10$iZ4P6Ggo1W6UpCJusNNvauw3fXCCbosLcRh51k807J/I7oZ/0BB62', '9999000088', 'TaxiVaxi', 1, 0, 0, 0, 0, 0, 0, '', NULL, NULL, '08:59:00', '20:59:00', NULL, '2018-09-07 03:29:14', '2018-09-18 10:52:20', ''),
(9, 'admin', 'admin241@test.com', '$2y$10$vIT3OFlbNp4DHCDKuKhnvOLzGuoxw3k4VFDk7zSvM2SHkGeN3CmRq', '234', 'TaxiVaxi', 1, 0, 0, 0, 0, 0, 0, '', NULL, NULL, '04:24:00', '06:24:00', NULL, '2018-09-07 22:54:34', '2018-09-15 04:37:05', ''),
(10, 'test1', 'test1@test.com', '$2y$10$kX.LsT.YFKftG.rNwTgVXOvG79t.yqSub2.5SBCS0xTknM6/a/r8q', '546738', 'TaxiVaxi', 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, '05:39:00', '05:39:00', NULL, '2018-09-08 01:05:18', '2018-09-15 04:03:06', ''),
(11, 'test29015678', 'test2@test.com', '$2y$10$jfEiYcBzzV0DyVwsSWSU7uGxpgjzA.dhm6XexeP.Je7msgaDRHdsm', '5467381', 'TaxiVaxi', 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, '07:36:00', '02:36:00', NULL, '2018-09-08 01:06:30', '2018-09-15 00:53:09', ''),
(12, 'test3999', 'test3@test.com', '$2y$10$IgIb6J54keXkZ71KyuU4NuQPWLqNnnMB4MFr6mIU4uH9y4AGcb2jS', '564738290', 'TaxiVaxi', 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, '05:19:00', '09:19:00', NULL, '2018-09-09 23:49:57', '2018-09-15 00:28:21', ''),
(13, 'final123', 'final123@test.com', '$2y$10$5nD1IeGl.pbVMnmFO/NoG.a7t3gB4bEpz3EMUSWKxKbPq6HUP2Zsa', '2345678123', 'TaxiVaxi123', 0, 0, 0, 0, 0, 0, 0, 'EMP1234', NULL, NULL, '05:02:00', '09:02:00', NULL, '2018-09-16 23:34:59', '2018-10-11 07:01:59', ''),
(14, 'New user', 'newuser@test.com', '$2y$10$8dC16nlfKcYQ.JRTfPeOv.XNYM2GkJedB6hjPXJmJb3ieamuVuTa2', '4567890', 'TaxiVaxi', 1, 0, 0, 0, 0, 0, 0, '', NULL, NULL, '10:13:00', '09:13:00', NULL, '2018-09-19 03:43:37', '2018-09-19 03:43:37', ''),
(15, 'New user2', 'newuser2@test.com', '$2y$10$TRClXwojJFi/yii.IUsLuulcNlJKu97fcJxLiyt.6dX5IDYneNCha', '4567890', 'TaxiVaxi', 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, '09:14:00', '09:14:00', NULL, '2018-09-19 03:45:56', '2018-09-19 03:45:56', ''),
(16, 'Modified entry', 'EMP10@taxivaxi.com', '$2y$10$i7efgMZLFG1r82VXI95CsOR6SLdrU5ugyit9XpVZhDeV6rY5yaZTW', '986436890', 'TaxiVaxi', 1, 0, 1, 0, 1, 1, 1, 'EMP10', NULL, NULL, '06:08:00', '12:59:00', NULL, '2018-09-26 01:28:26', '2018-09-26 04:06:36', ''),
(17, 'Test123', 'Test123@taxivaxi.com', '$2y$10$3eQXntdC8WGqFwVeKFq.MOuwhiJGmpygNohBWyNZAbU.rbWApBC7C', '8765432', 'TaxiVaxi123', 1, 0, 1, 0, 1, 0, 1, 'EMP101', NULL, NULL, '23:06:00', '03:06:00', NULL, '2018-10-01 01:29:14', '2018-10-01 01:35:25', ''),
(18, 'newtest', 'NewTest1234@taxivaxi.com', '$2y$10$3U.iPH326eP/7bERm4gi5evIhq4jx/Xqo6OfVhQR9H8.nfenDW8nG', '1234565', 'TaxiVaxi', 1, 0, 0, 0, 0, 1, 1, 'EMP021', NULL, NULL, '22:35:00', '01:04:00', NULL, '2018-10-08 00:27:51', '2018-10-08 00:28:21', ''),
(19, 'newentry', 'EMP102@taxivaxi.com', '$2y$10$6pLYoYxBqsFjjorlcHHNg.T/wMEhiPlDptuarKo7wJVJarRTWjNQS', '2222', 'TaxiVaxi', 1, 1, 1, 1, 1, 1, 1, 'EMP102', NULL, NULL, '09:00:00', '18:00:00', NULL, '2018-10-09 07:23:09', '2018-10-09 07:23:09', ''),
(20, 'newentry1', 'EMP103@taxivaxi.com', '$2y$10$WI7AuvAAdRu4h0IxiInCpuSgOBKyrlXyBoLgGe8k483bR1EnbwqYu', '3333', 'TaxiVaxi', 0, 0, 0, 0, 0, 0, 0, 'EMP103', NULL, NULL, '01:01:00', '02:04:00', NULL, '2018-10-09 10:00:45', '2018-10-09 10:00:45', ''),
(21, 'teds', 'test@test.com', '$2y$10$6aFJUWlNXomvLyiIpalTfuSTvMnEyjRgnwW8c94j8J8J18MXXk/mm', '9876543210', 'taxi', 1, 1, 1, 1, 1, 1, 1, 'te12', NULL, NULL, '00:32:00', '13:42:00', NULL, '2018-10-25 04:48:25', '2018-10-25 04:48:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
