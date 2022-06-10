-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2022 at 02:38 AM
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
-- Database: `employability`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking_cal`
--

DROP TABLE IF EXISTS `booking_cal`;
CREATE TABLE IF NOT EXISTS `booking_cal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `days` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `p_id` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_cal`
--

INSERT INTO `booking_cal` (`id`, `start`, `end`, `days`, `user_id`, `c_id`) VALUES
(1, '2022-05-10', '2022-05-27', 2, 3, 4),
(2, '2022-05-05', '2022-05-20', 2, 7, 4),
(3, '2022-05-19', '2022-05-23', 4, 2, 2),
(4, '2022-05-06', '2022-05-11', 5, 1, 2),
(5, '2022-05-18', '2022-06-02', 2, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  `c_price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `tid` int(11) NOT NULL,
  `synopsis` varchar(500) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `tid` (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `cname`, `c_price`, `image`, `category`, `tid`, `synopsis`) VALUES
(1, 'INFLUENCE', '$18', 'influence.png', 'in, inf, influence, influence course', 1, 'In this unit, Melvin will talk you through the importance of your working identity and the of importance of influential growth in your career.\r\n'),
(2, 'CULTURAL INTELLIGENCE', '$12', 'cultural.png', 'c, cultural, cultural intelligence', 5, 'Welcome to the first unit of cultural intelligence. In this unit you are going to look at accepting differences just introducing ourselves.'),
(3, 'ADVANCED EMPLOYABILITY PROGRAMME', '$22', 'advance.png', 'a, ad, adv, advanced, advanced emp, advanced employability, advanced employability programme', 2, 'In this course, advanced program, facilitating the users to outshine in the corporate world, would be provided, by our tutor.'),
(4, 'CAREER INTELLIGENCE', '$10', 'career.png', 'c, ca, career, career int, career intelligence', 4, 'We begin this journey by looking inward, finding our objectives, motivations and then relating to the future of work. This unit will help you understand your strengths and weaknesses.\r\n'),
(5, 'DIGITAL INTELLIGENCE', '$12', 'digital.png', 'd, digi, digital, digital Intelligence', 6, 'Welcome to Preparing for Digital Work. This unit will help you understand the necessary skills needed in your digital life and get you ready for the current modern workplace.'),
(6, 'GROWTH MINDSET', '$15', 'growth.png', 'g, gro, growth, growth mindset', 3, 'Growth Mindset is the way we view ourselves personally and how we can change our perceptions. This unit will help you to understand your ability, intelligence and potential for growth.');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `answer` varchar(500) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`fid`, `question`, `answer`) VALUES
(1, 'What do Employability.Life courses offer to its student?', 'Each Employability.life course is created, owned and managed by the tutor(s). The foundation of each Employability>life course are its lectures, which can include videos, slides, and text. In addition, instructors can add resources and various types of practice activities, as a way to enhance the learning experience of students. '),
(2, 'How do I take a Employability.Life course?', 'Employability.Life courses are entirely on-demand and they can be accessed from several different devices and platforms, including a desktop, laptop, and our mobile app. '),
(3, 'In how much time do I have to complete the booked course?', 'It should be completed between a time-period of 30 days.'),
(4, 'Is Employability an accredited institution? Do I receive anything after I complete a course?', 'Yes it is, student will receive a certificate at the end of the course completion.'),
(5, 'How can I pay for a course?', 'Employability.Life supports several different payment methods, depending on your account country and location. '),
(6, 'Is there any way to preview a course?', 'Brief description of the course, provided by the tutor, is visible on the course page, under the synopsis.');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `fname`, `lname`, `email`, `pno`, `password`) VALUES
(1, 'Helisha', 'Patel', 'hp@gmail.com', '0634567890', '7878'),
(2, 'Jahanvi', 'Darji', 'jahanvi@gmail.com', '0678912840', '875'),
(3, 'Shelly', 'Mahant', 'shelly@gmail.com', '0648901734', '980'),
(4, 'Miraj', 'Mahant', 'milu@gmail.com', '0687092651', '6143'),
(5, 'Khushi', 'Jain', 'khushi@gmail.com', '0645026781', '8623'),
(6, 'Jahanvi', 'Darji', 'jahanvi@gmail.com', '1234567891', '6767'),
(7, 'Kishan', 'Dhanak', 'kishan@gmail.com', '0689023418', '809'),
(8, 'Helisha', 'Patel', 'helisha@gmail.com', '0667867861', '6143');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `message` varchar(600) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`b_id`, `name`, `message`, `date`, `time`) VALUES
(1, 'Kishan', 'Good explaining done in the course!', '2022-05-16', '06:52:26am'),
(2, 'Jahanvi', 'Good Job!', '2022-06-04', '04:07:20am'),
(4, 'Miraj', 'I appreciate the course described by the tutor!', '2022-06-04', '06:34:17am'),
(43, 'Jahanvi ', 'Great work!', '2022-06-05', '06:02:08am'),
(44, 'Jahanvi', 'Great Job!', '2022-06-05', '06:20:10am'),
(45, 'Helisha', 'Great courses!', '2022-06-05', '10:17:21pm'),
(46, 'Helisha', 'Great Course!', '2022-06-05', '10:51:01pm'),
(3, 'Helisha', 'Great!', '2022-06-04', '04:08:13am'),
(47, 'Prerna', 'Good course content!', '2022-06-06', '11:19:15am'),
(48, 'Helisha', 'The courses are very well designed!', '2022-06-06', '11:36:31am'),
(49, 'Helisha', 'Great Explaination', '2022-06-08', '03:09:55am'),
(50, 'Tabinda', 'Great courses!', '2022-06-08', '03:43:49am');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(50) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`tid`, `tname`) VALUES
(1, 'Melvin'),
(2, 'Dr Alan Lawler'),
(3, 'Marketa'),
(4, 'Sharmistha Chatterjee'),
(5, 'Desta Haile'),
(6, 'Ashok Selladurai');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
