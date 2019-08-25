-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2014 at 06:43 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE IF NOT EXISTS `apply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_username` varchar(255) NOT NULL,
  `job_id` int(11) NOT NULL,
  `apply_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Accounting / Finance'),
(2, 'Bank/ Non-Bank Fin. Institution'),
(3, 'Education / Training'),
(4, 'Engineer / Architects'),
(5, 'Garments / Textile'),
(6, 'Design/Creative'),
(7, 'Hospitality/ Travel/ Tourism'),
(8, 'IT & Telecommunication'),
(9, 'Marketing/ Sales'),
(10, 'Customer Support/ Call Centre'),
(11, 'Media/ Advertisement/ Event Mgt.'),
(12, 'Medical/ Pharma'),
(13, 'Agro (Plant/ Animal/ Fisheries)'),
(14, 'Law / Legal'),
(15, 'Hotel / Restaurant'),
(16, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_name` varchar(255) NOT NULL,
  `com_address` varchar(255) NOT NULL,
  `com_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `dist_id` int(11) NOT NULL AUTO_INCREMENT,
  `dist_name` varchar(255) NOT NULL,
  PRIMARY KEY (`dist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`dist_id`, `dist_name`) VALUES
(1, 'Dhaka'),
(2, 'Munshigonj'),
(3, 'Barguna'),
(4, 'Barisal'),
(5, 'Bhola'),
(6, 'Jhalokati'),
(7, 'Patuakhali'),
(8, 'Pirojpur'),
(9, 'B.Baria'),
(10, 'Bandarban'),
(11, 'Chandpur'),
(12, 'Chittagong'),
(13, 'Comilla'),
(14, 'Cox''s Bazar'),
(15, 'Feni'),
(16, 'Khagrachhari'),
(17, 'Lakshmipur'),
(18, 'Noakhali'),
(19, 'Rangamati'),
(20, 'Dhaka'),
(21, 'Faridpur'),
(22, 'Gazipur'),
(23, 'Gopalganj'),
(24, 'Jamalpur'),
(25, 'Kishoreganj'),
(26, 'Madaripur'),
(27, 'Manikganj'),
(28, 'Mymensingh'),
(29, 'Narayanganj'),
(30, 'Narsingdi'),
(31, 'Netrakona'),
(32, 'Rajbari'),
(33, 'Shariatpur'),
(34, 'Sherpur'),
(35, 'Tangail'),
(36, 'Bagerhat'),
(37, 'Chuadanga'),
(38, 'Jessore'),
(39, 'Jhenaidah'),
(40, 'Khulna'),
(41, 'Kushtia'),
(42, 'Magura'),
(43, 'Narail'),
(44, 'Satkhira'),
(45, 'Bogura'),
(46, 'Joypurhat'),
(47, 'Naogaon'),
(48, 'Natore'),
(49, 'Chapainawabganj'),
(50, 'Pabna'),
(51, 'Rajshahi'),
(52, 'Sirajganj'),
(53, 'Dinajpur'),
(54, 'Gaibandha'),
(55, 'Kurigram'),
(56, 'Lalmonirhat'),
(57, 'Nilphamari'),
(58, 'Panchagarh'),
(59, 'Rangpur'),
(60, 'Thakurgaon'),
(61, 'Habiganj'),
(62, 'Moulvibazar'),
(63, 'Sunamganj'),
(64, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(255) NOT NULL,
  `no_of_vacancies` varchar(255) NOT NULL,
  `job_category` int(11) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `ed_req` text NOT NULL,
  `exp_req` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `published` datetime NOT NULL,
  `deadline` datetime NOT NULL,
  `company` varchar(255) NOT NULL,
  `apply_instruction` text NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE IF NOT EXISTS `resume` (
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fa_name` varchar(255) NOT NULL,
  `moname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mary_status` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `edu_qua` text NOT NULL,
  `exp` text NOT NULL,
  `others` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
