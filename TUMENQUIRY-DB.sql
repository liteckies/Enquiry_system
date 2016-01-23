-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2015 at 01:02 PM
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
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'simon', 'simon'),
(2, 'brian', 'brian');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `department` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `department`, `category`, `description`) VALUES
(4, 'Human resource management', 'Bussiness administration', 'Diploma', 'Trains people on how to manage organization resorces '),
(5, 'Media and mass communication', 'Media', 'Degree', 'Deals with disbursement of information '),
(8, 'Food and Quality assurance ', 'Hospitality and tourism', 'Diploma', 'It takes 2 years to finish the course '),
(17, 'Maths and Computer science ', 'Computer science and information technology', 'Degree', 'It intails partly maths and partly information technology.'),
(18, 'Counseling and community development ', 'Liberal ', 'Diploma', 'Deals with community welfare and contuct.'),
(19, 'Hotel management', 'Hotel management and tourism', 'Diploma', 'Teaches students on how to handle students. '),
(20, 'lddkdklk', 'lkdkdk', 'kdkdkdk', 'kdkdk'),
(22, 'Marine Engineering', 'Mechanical engineering', 'Diploma', 'Deals with fisheries'),
(23, 'Robotic Engineering', 'Engineering and technology', 'Degree', 'Deals with making robots ');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE IF NOT EXISTS `enquiries` (
  `msg_id` int(20) NOT NULL AUTO_INCREMENT,
  `sender` varchar(40) NOT NULL,
  `phone` int(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(250) NOT NULL,
  `date_send` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`msg_id`, `sender`, `phone`, `subject`, `body`, `date_send`, `status`) VALUES
(2, 'brianmaithya@gmail.com', 702476165, 'Enquiry for course', 'How long does it take to take a diploma in procurement course', '0000-00-00', 'unread'),
(9, 'brianmaithya@gmail.com', 702476265, 'Enquiry', 'How much is taking a cou', '0000-00-00', 'unread'),
(10, 'kilenga@gmail.com', 702364564, 'Enquiry', 'Do you offer marine engineering?', '0000-00-00', 'unread'),
(16, 'peshmutisya@gmail.com', 703465756, 'Enquiry', 'How long should it take kuingia box yangu?', '0000-00-00', 'unread'),
(17, 'janet@gmail.com', 2147483647, 'Courses', 'How do i know the right course for me.', '0000-00-00', 'unread'),
(18, 'kinatwa@gmail.com', 969966, 'Enquiry', 'How do i choose my career path', '2015-11-17', 'unread'),
(19, 'kutwa@gmail.com', 712345765, 'Enquiry', 'How do i choose my career path?', '2015-11-17', 'unread'),
(20, 'kilenga@gmail.com', 702354657, 'Confirmation', 'I career path always chose by one is performing?', '2015-11-17', 'unread'),
(23, 'kavata@gmail.com', 783546534, 'Enquiry', 'Is it that important to do a masters in IT?', '2015-11-17', 'unread'),
(24, 'kilusi@gmail.com', 784657643, 'Enquiry', 'How do i choose which field of my course to specialize in?', '2015-11-18', 'unread'),
(25, 'kariuki@gmail.com', 9494949, 'Enquiry', 'Im enquiring', '2015-11-21', 'unread'),
(26, 'joan@gmail', 2147483647, 'enquiry', 'How can i choose my career path?', '2015-11-24', 'unread'),
(27, 'denis@gmail.com', 9985588, 'Enquiry', '\r\nwhy your students strike every now and then?', '2015-11-25', 'unread'),
(28, 'ken@gmail.com', 5656474, 'Enquiry', 'Why do you strike everytime?', '2015-11-25', 'unread'),
(29, 'naomi', 67877744, 'Naomi', 'Why does Tum strike everytime?', '2015-11-29', 'unread');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

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
(54, 'Kalembe', 'kalembe@gmail.com', 'kalembe'),
(55, 'kavata', 'kavata@gmail.com', 'kavate'),
(56, 'kimondo', 'kimondo@gmail.com', 'kimondo'),
(57, 'Hadulo', 'hadullo@gmail.com', 'hadullo'),
(58, 'Joan', 'joan@gmail.com', 'joan'),
(59, 'Naomi', 'naomi@gmail.com', 'namomi'),
(60, 'case', 'piereten@gmail.com', 'vb');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
