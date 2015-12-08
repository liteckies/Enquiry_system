-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2015 at 09:51 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

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
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `department`, `category`, `description`) VALUES
(1, 'Information technology', 'Computer science and information technology', 'Degree', 'A marketable course completed in 4 years.'),
(4, 'Human resource management', 'Bussiness administration', 'Diploma', 'Trains people on how to manage organization resorces '),
(5, 'Media and mass communication', 'Media', 'Degree', 'Deals with disbursement of information '),
(8, 'Food and Quality assurance ', 'Hospitality and tourism', 'Diploma', 'It takes 2 years to finish the course '),
(17, 'Maths and Computer science ', 'Computer science and information technology', 'Degree', 'It intails partly maths and partly information technology.'),
(18, 'Counseling and community development ', 'Liberal ', 'Diploma', 'Deals with community welfare and contuct.');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE IF NOT EXISTS `enquiries` (
  `msg_id` int(20) NOT NULL AUTO_INCREMENT,
  `sender` varchar(40) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`msg_id`, `sender`, `subject`, `body`, `status`) VALUES
(1, 'brianmaithya@gmail.com', 'Enquiry for Courses', 'I wanted to know how much it is to take a degree course in mechanical engineering.', 'Unread');

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
