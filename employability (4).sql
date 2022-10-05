-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2022 at 03:00 AM
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
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `answers` varchar(100) NOT NULL,
  `ans_id` int(11) NOT NULL,
  PRIMARY KEY (`aid`),
  KEY `ans_id` (`ans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answers`, `ans_id`) VALUES
(1, 'career', 1),
(2, 'ability', 1),
(3, 'job', 1),
(4, 'learning style\r\n', 1),
(5, 'visualizing your goals', 2),
(6, 'focusing on your failures', 2),
(7, 'thinking about your neighbour', 2),
(8, 'watching television', 2),
(9, 'self actualization', 3),
(10, 'way of life', 3),
(11, 'lifestyle', 3),
(12, 'personality', 3);

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`aid`, `uid`, `lid`, `name`, `location`, `status`) VALUES
(1, 15, 1, 'sprint-4 retrospectiveDoc.docx', 'documents/sprint-4 retrospectiveDoc.docx', 0),
(2, 16, 2, 'ASSIGNMENT (2).docx', 'documents/ASSIGNMENT (2).docx', 0),
(5, 22, 2, 'sprint4_review meeting.docx', 'documents/sprint4_review meeting.docx', 1),
(16, 23, 1, 'sprint5_review meeting.docx', 'documents/sprint5_review meeting.docx', NULL),
(17, 21, 9, 'ASSIGNMENT (3).docx', 'documents/ASSIGNMENT (3).docx', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking_cal`
--

DROP TABLE IF EXISTS `booking_cal`;
CREATE TABLE IF NOT EXISTS `booking_cal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `days` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_cal`
--

INSERT INTO `booking_cal` (`id`, `fname`, `start`, `end`, `days`, `uid`, `cid`) VALUES
(1, 'Helisha', '2022-09-09', '2022-09-23', 14, 22, 1),
(2, 'Jahanvi', '2022-09-09', '2022-09-23', 14, 15, 1),
(3, 'Bijay', '2022-09-16', '2022-09-30', 14, 22, 1),
(4, 'Ridhi', '2022-09-06', '2022-09-18', 12, 21, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

DROP TABLE IF EXISTS `chatbot`;
CREATE TABLE IF NOT EXISTS `chatbot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `queries` varchar(500) NOT NULL,
  `replies` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Hello!', 'Hey, Welcome to tutor chatbot'),
(2, 'I am enrolled in Influence course!', 'Great, we would get you in touch with your tutor - Melvin! \r\n\r\n'),
(3, 'okay!', 'Hello, Melvin here..'),
(4, 'Hello Melvin!', 'Hello dear student, how may I help you?'),
(5, 'I had some queries in lecture slides.', 'Ok, I understand'),
(6, 'So, when can I consult regarding it with you?', 'I would recommend you to book a consultation for in depth discussion of your \r\ndoubts. Thank you.'),
(7, 'Thank you.', 'My pleasure.');

-- --------------------------------------------------------

--
-- Table structure for table `consultationbooking`
--

DROP TABLE IF EXISTS `consultationbooking`;
CREATE TABLE IF NOT EXISTS `consultationbooking` (
  `Tutor` varchar(80) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Dates` datetime NOT NULL,
  `Times` varchar(45) NOT NULL,
  `subject` varchar(95) NOT NULL,
  `EndDate` varchar(45) NOT NULL,
  `EndTime` varchar(45) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultationbooking`
--

INSERT INTO `consultationbooking` (`Tutor`, `name`, `Dates`, `Times`, `subject`, `EndDate`, `EndTime`, `id`) VALUES
('Melvin', 'Helisha', '2022-09-05 00:00:00', '18:00', 'INFLUENCE', '2022-09-05', '18:30', 1),
('Melvin', 'Jahanvi', '2022-09-15 00:00:00', '14:00', 'INFLUENCE', '2022-09-15', '14:30', 2),
('Melvin', 'Ridhi', '2022-09-20 00:00:00', '18:31', 'INFLUENCE', '2022-09-20', '19:01', 3),
('Melvin', 'Helisha', '2022-10-04 00:00:00', '13:00', 'INFLUENCE', '2022-10-04', '13:30', 4);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `uname`, `mail`, `message`) VALUES
(2, 'Helisha', 'helisha@gmail.com', 'I appreciate the lecture contents :)'),
(1, 'Jahanvi', 'helisha.sgp@gmail.com', 'Great!'),
(7, 'Helisha', 'helisha@gmail.com', 'Amazing consulting and chatbot functionality!');

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
(1, 'INFLUENCE', '$20', 'influence.png', 'in, inf, influence, influence course', 1, 'In this unit, Melvin will talk you through the importance of your working identity and the of importance of influential growth in your career.'),
(2, 'CULTURAL INTELLIGENCE', '$15', 'cultural.png', 'c, cultural, cultural intelligence', 5, 'Welcome to the first unit of cultural intelligence. In this unit you are going to look at accepting differences just introducing ourselves.'),
(3, 'ADVANCED PROGRAMME', '$22', 'advance.png', 'a, ad, adv, advanced, advanced emp, advanced employability, advanced employability programme', 2, 'In this course, advanced program, facilitating the users to outshine in the corporate world, would be provided, by our tutor.'),
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
(6, 'Is there any way to preview a course?', 'The brief description of the course, provided by the tutor, is visible on the course page, under the synopsis.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `message`) VALUES
(1, 'Amazing work with the lecture assignment, as it clearly demonstrated your thorough understanding of the lecture content! Good work, keep it up!'),
(2, 'Dear student, your assignment is yet to be reviewed by your course tutor.');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

DROP TABLE IF EXISTS `lectures`;
CREATE TABLE IF NOT EXISTS `lectures` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `tid` int(11) NOT NULL,
  `synopsis` varchar(500) NOT NULL,
  PRIMARY KEY (`lid`),
  KEY `tid` (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`lid`, `lname`, `image`, `category`, `tid`, `synopsis`) VALUES
(1, 'IMAGINE YOURSELF', 'lec1.jpg', 'img, imagine yourself', 1, 'In this unit, Melvin will talk you through the importance of your working identity and the of importance of influential growth in your career.\r\n'),
(2, 'EXPLORE POSSIBLE SELVES', 'lec2.jpg', 'exp, explore, explore possible selves', 1, 'In this unit, Melvin will talk you through the importance of your working identity and the of importance of influential growth in your career.\r\n'),
(3, 'TEST THE POSSIBILITIES', 'lec3.jpg', 't, test, test the possibilities, possibilities', 1, 'In this unit, Melvin will talk you through the importance of your working identity and the of importance of influential growth in your career.\r\nIn this course, advanced program, facilitating the users to outshine in the corporate world, would be provided, by our tutor.'),
(4, 'CRAFT EXPERIMENTS', 'lec4.jpg', 'c, craft, craft exp, craft experiments', 1, 'In this unit, Melvin will talk you through the importance of your working identity and the of importance of influential growth in your career.\r\n'),
(5, 'SHIFT CONNECTIONS', 'lec5.jpg', 's, shift, shift connection, connect', 1, 'In this unit, Melvin will talk you through the importance of your working identity and the of importance of influential growth in your career.\r\n'),
(6, 'TELL YOUR STORY', 'lec6.jpg', 't, tell, tell your story, story', 1, 'In this unit, Melvin will talk you through the importance of your working identity and the of importance of influential growth in your career.\r\n'),
(7, 'FIND YOUR AUDIENCE', 'lec7.jpg', 'f, find, find your audience, audience', 1, 'In this unit, Melvin will talk you through the importance of your working identity and the of importance of influential growth in your career.\r\n'),
(8, 'BE YOURSELF', 'lec9.jpg', 'be, be yourself, yourself', 1, 'In this unit, Melvin will talk you through the importance of your working identity and the of importance of influential growth in your career.\r\n'),
(9, 'MAKE SENSE', 'lec8.jpg', 'm, make, sense, make sense', 1, 'Lecture 9');

-- --------------------------------------------------------

--
-- Table structure for table `lec_video`
--

DROP TABLE IF EXISTS `lec_video`;
CREATE TABLE IF NOT EXISTS `lec_video` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `lname` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lec_video`
--

INSERT INTO `lec_video` (`vid`, `lname`, `image`) VALUES
(1, 'IMAGINE YOURSELF', 'lec_vid1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `coption` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_number`, `is_correct`, `coption`) VALUES
(3, 1, 0, ' Rationalizing '),
(4, 1, 0, ' Negotiating'),
(5, 1, 1, ' Inspiring'),
(6, 1, 0, ' Bridging'),
(7, 2, 1, ' visualizing your goals'),
(8, 2, 0, ' focusing on your failures'),
(9, 2, 0, ' thinking about your neighbor'),
(10, 2, 0, ' watching television'),
(11, 3, 0, ' not completing a self assessment form'),
(12, 3, 1, ' keeping a performance journal'),
(13, 3, 0, ' having non-professional discussions with colleagues/supervisors'),
(14, 3, 0, ' all of the above\r\n'),
(15, 4, 0, ' career'),
(16, 4, 1, ' ability'),
(17, 4, 0, ' job'),
(18, 4, 0, ' learning style'),
(19, 5, 0, ' lifestyle'),
(20, 5, 0, ' self actualization'),
(21, 5, 1, ' personality'),
(22, 5, 0, ' way of life'),
(23, 6, 0, ' Talking about someone'),
(24, 6, 0, ' Talking about someone\'s stuff'),
(25, 7, 1, ' Yes'),
(26, 7, 0, ' No'),
(27, 8, 0, ' \'An eye for an eye, and a tooth for a tooth\''),
(28, 8, 0, ' \'If it feels good, do it\''),
(29, 8, 0, ' \'Do unto others, before they get to you\''),
(30, 9, 0, ' self concept'),
(31, 9, 1, ' self esteem'),
(32, 10, 0, ' Gucci'),
(33, 10, 1, ' lifestyle'),
(34, 6, 0, ' Expressing negativity towards someone'),
(35, 6, 1, ' Expressing negativity towards someone\'s stuff'),
(36, 7, 0, ' Sometimes'),
(37, 7, 0, ' You might not know how you affect someone'),
(38, 8, 1, ' \'Every goal is reached one step at a time\''),
(40, 9, 0, ' confidence'),
(41, 9, 0, ' selfie'),
(42, 10, 0, ' values'),
(43, 10, 0, ' memes');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) NOT NULL,
  `ans_id` int(11) NOT NULL,
  PRIMARY KEY (`qid`),
  KEY `ans_id` (`ans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `question`, `ans_id`) VALUES
(1, 'A skill that has been developed:', 1),
(2, 'Self-discipline is enhanced by _____.', 5),
(3, 'The combination of attitude, values, interests, and behaviors that identify a person:', 12);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL,
  PRIMARY KEY (`question_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question_text`) VALUES
(1, 'What style of influence involves supporting your team with encouragement?'),
(2, 'Self-discipline is enhanced by _____.'),
(3, 'Self assessment involves'),
(4, 'A skill that has been developed:'),
(5, 'Combination of attitude, values, and interests that identify a person:\r\n'),
(6, 'What is an insult?'),
(7, 'Can what you do or say change a person\'s mood?'),
(8, 'Which of the following is probably the best example of self-discipline?'),
(9, 'Recognition and regard for oneself and one\'s abilities:'),
(10, 'Typical way of life:');

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `fname`, `lname`, `email`, `pno`, `password`) VALUES
(15, 'Bijaya', 'Thapa', 'bijay@gmail.com', '0689754382', '$2y$10$rVifyBEc5CiQqoyocAbmaeTwSp8RlxnxnKf0sm.e5wFtyEp9bW/3C'),
(16, 'Jahanvi', 'Darji', 'jahanvi@gmail.com', '0678949867', '$2y$10$a4N1.JiLKxcBH3bHCVFtu.9RN3OdVxY8AFpstsSKqAhd9NKnqg8Xa'),
(21, 'Helisha', 'Patel', 'helisha@gmail.com', '0314475698', '$2y$10$V6DHlnBzw4TfxS2w3SDX3ulfkgNcW2gkkp8stqN5vKKvCiMzexD3a'),
(22, 'Heli', 'Patel', 'helisha.sgp@gmail.com', '0415678552', '$2y$10$.Hg48Z2IBA2GgXVGEi1Khe5y2g2R2h0qdw7XAfKtqtW8uaHKMYr6u'),
(23, 'Sandeep', 'Kaur', 'sandeep@gmail.com', '0678949867', '$2y$10$FrXEXEt3FaqZlCsbQNouZuKrfc4Li7S402j6DEn8zMlXQ7lBqVu0a');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`rid`, `name`, `score`) VALUES
(1, 'Helisha', 8),
(2, 'Jahanvi', 8),
(3, 'Sandeep', 8),
(8, 'Helisha', 7),
(4, 'Bijay', 9);

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
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

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
(50, 'Tabinda', 'Great courses!', '2022-06-08', '03:43:49am'),
(51, 'Helisha', 'Great!', '2022-07-28', '04:44:49am'),
(52, 'Helisha', 'Appreciate the involvement of the tutors.', '2022-08-15', '01:00:20am'),
(53, 'Jahanvi', 'Great platform to learn!', '2022-08-15', '02:11:48am'),
(54, 'Helisha', 'Great platform!', '2022-08-15', '03:58:30am'),
(55, 'Miraj', 'Amazing lectures and quiz feature!', '2022-08-26', '03:22:36am'),
(56, 'Miraj', 'Great!', '2022-09-08', '05:28:51am'),
(57, 'Helisha', 'Must say, amazing chatbot feature!', '2022-10-03', '09:46:39pm'),
(58, 'Helisha', 'Great Lectures!', '2022-10-04', '02:49:04am');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(50) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`tid`, `tname`) VALUES
(1, 'Melvin'),
(2, 'Dr Alan Lawler'),
(3, 'Marketa'),
(4, 'Sharmistha Chatterjee'),
(5, 'Desta Haile'),
(6, 'Ashok Selladurai'),
(8, 'jbn');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`vid`, `name`, `location`) VALUES
(1, 'ITECH3209_ Influence Product_ Promo Video.mp4', 'videos/ITECH3209_ Influence Product_ Promo Video.mp4'),
(2, 'ITECH3209_ Influence Product_ Promo Video.mp4', 'videos/ITECH3209_ Influence Product_ Promo Video.mp4');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`ans_id`) REFERENCES `question` (`qid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking_cal`
--
ALTER TABLE `booking_cal`
  ADD CONSTRAINT `booking_cal_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `register` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_cal_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `courses` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`ans_id`) REFERENCES `answers` (`aid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
