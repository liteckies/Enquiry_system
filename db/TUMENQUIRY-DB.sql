-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2015 at 11:58 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `TUMENQUIRY-DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(23) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'brian', 'brian'),
(2, 'simon', 'simon');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `department`, `category`, `description`) VALUES
(1, 'Information technology', 'Computer science and information technology', 'Degree', 'A marketable course completed in 4 years.'),
(4, 'Human resource management', 'Bussiness administration', 'Diploma', 'Trains people on how to manage organization resorces '),
(5, 'Media and mass communication', 'Media', 'Degree', 'Deals with disbursement of information '),
(8, 'Food and Quality assurance ', 'Hospitality and tourism', 'Diploma', 'It takes 2 years to finish the course '),
(17, 'Maths and Computer science ', 'Computer science and information technology', 'Degree', 'It intails partly maths and partly information technology.'),
(18, 'Counseling and community development ', 'Liberal ', 'Diploma', 'Deals with community welfare and contuct.'),
(19, 'kdkdkdk', 'kdkdkdk', 'kdkdkdk', 'kdkdkdkd');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE IF NOT EXISTS `enquiries` (
  `msg_id` int(20) NOT NULL AUTO_INCREMENT,
  `sender` varchar(40) NOT NULL,
  `phone` int(40) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(250) NOT NULL,
  `date_send` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`msg_id`, `sender`, `phone`, `subject`, `body`, `date_send`, `status`) VALUES
(2, 'kdkdkd', 0, 'kdkkd', 'kdkdkdk', '2015-12-09', 'unread'),
(3, 'brianmaithya@gmail.com', 718529677, 'Enquiry', 'How can i choose my career path Im confused?', '2015-12-09', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`) VALUES
(39, 'Brian', 'brianmaithya@gmail.com', 'brian'),
(40, 'Kamau', 'kamau@gmail.com', 'kamau'),
(41, 'Stanley', 'Musyindu@gmail.com', 'stanuu'),
(42, 'Simon', 'mugetha@gmail.com', 'simon'),
(43, 'becky', 'becky@gmail.com', 'becky'),
(44, 'Katula', 'katula@gmail.com', 'katula'),
(45, 'David ', 'david@gmail.com', 'kavid'),
(46, 'Dennis', 'Deno@gmail.com', 'deno'),
(47, 'Matuvi', 'matuvi@gmail.com', 'matuvi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
