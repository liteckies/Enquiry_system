-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2015 at 11:09 PM
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
  `email` varchar(49) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(28, 'brian', 'brianmaithya@gmail.com', 'brian'),
(32, 'Rechael', 'rechael@gmail.com', 'recahel');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `department`, `category`) VALUES
(27, 'Maths and Computer science', 'Computer science', 'Diploma'),
(28, 'Marine Engineering', 'Engineering and Technology', 'Degree'),
(30, 'Statics and Computer science', 'Maths and Computer science', 'Degree');

-- --------------------------------------------------------

--
-- Table structure for table `courses_info`
--

CREATE TABLE IF NOT EXISTS `courses_info` (
  `course_id` int(40) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `duration` varchar(40) NOT NULL,
  `qualifications` varchar(100) NOT NULL,
  `fees` varchar(50) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `courses_info`
--

INSERT INTO `courses_info` (`course_id`, `course_name`, `duration`, `qualifications`, `fees`) VALUES
(1, 'BSc Information Technology', '4 years', 'Overal c+ with atleast C+ in phisics and Chem', ' 70,000'),
(4, 'Bachelor of Engineering in Mechanical ', '5 Yrs', 'C+ with atleast c+ in maths, chem and physics', '80,000'),
(6, 'BSc Electrical Engineering', '5 Yrs', 'C+ with atleast c- in Maths and c+ in Physics', '70,000');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`msg_id`, `sender`, `phone`, `subject`, `body`, `date_send`, `status`) VALUES
(7, 'brianmaithya@gmail.com', 702354675, 'Enquiry', 'How to choose a career choice...', '2015-12-21', 'read'),
(8, 'katula@gmail.com', 702345676, 'Enquiry', 'Need some advice on career choice', '2015-12-21', 'read'),
(9, 'Kamau@gmail.com', 783465746, 'Enquiry', 'How long does engineering courses take?', '2015-12-21', 'read'),
(12, 'kimondo@gmail.com', 84879892, 'Enquiry', 'How to know whether ive qualified?', '2015-12-24', 'read'),
(13, 'Eugine@yahoo.com', 7828364, 'Enquiry', 'How do i know whether ive qualified?', '2015-12-24', 'read'),
(14, 'kitoo@gmail.com', 723465765, 'Enquiry', 'Im not seeing the qualifications of the course i want to do?', '2015-12-26', 'unread'),
(15, 'janet@gmail.com', 704720293, 'Enquiry', 'How can i come to Tum? Me forbid.', '2015-12-26', 'read');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

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
(47, 'Matuvi', 'matuvi@gmail.com', 'matuvi'),
(48, 'kamwana', 'kamwana@gmail.com', 'kamwana');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
