-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2021 at 11:14 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtacms`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutfeedback`
--

DROP TABLE IF EXISTS `aboutfeedback`;
CREATE TABLE IF NOT EXISTS `aboutfeedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `givenby` varchar(50) NOT NULL,
  `Content` varchar(500) NOT NULL,
  `image` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aboutfeedback`
--

INSERT INTO `aboutfeedback` (`id`, `name`, `givenby`, `Content`, `image`) VALUES
(1, 'isha gupta', 'Faculty', 'I feel so lucky to be a student of MTA-INDIA because every faculty member is so apreciating and there was such a evironment where we explore, not only the courses we enroll in, but also about many more advance technologies.', 'testimonial-2.jpg'),
(2, 'Vishal aggarwal', 'Student', 'I feel so lucky to be a student of MTA-INDIA because every faculty member is so apreciating and there was such a evironment where we explore, not only the courses we enroll in, but also about many more advance technologies.', 'testimonial-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `aboutslider`
--

DROP TABLE IF EXISTS `aboutslider`;
CREATE TABLE IF NOT EXISTS `aboutslider` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `image` varchar(80) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aboutslider`
--

INSERT INTO `aboutslider` (`id`, `name`, `image`, `description`) VALUES
(2, 'PYTHON  PROGRAMMING', 'python.jpg', 'python is best language'),
(3, 'C & C++', 'cc++.png', 'vishesh singhal'),
(9, 'Cloud Computing', 'cloud.jpg', 'Way to manage data.'),
(10, 'Big Data', 'bigdata.png', 'Big Data is best one.'),
(11, 'Enhance Coding', 'enhancecoding.jpg', 'Improve your coding skills.');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `bannername` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `Title` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `bannername`, `image`, `Title`, `description`) VALUES
(25, 'MTA 2', 'cause-1.jpg', 'Join for the competative world', 'Faculty with experience of more than 10 years in the field of Software Development & IT Infrastructure which provides you satisfactory results'),
(46, 'MTA2', 'mtahome2.png', 'Join here for the competative world.', 'Faculty with experience of more than 10 years in the field of Software Development & IT Infrastructure which provides you satisfactory results	'),
(47, 'MTA 5', 'mtahome2.png', 'Join for the competative world.', 'Faculty with experience of more than 10 years in the field of Software Development & IT Infrastructure which provides you satisfactory results	');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

DROP TABLE IF EXISTS `contactform`;
CREATE TABLE IF NOT EXISTS `contactform` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `message`) VALUES
(2, 'Manoj kumar Jindal', 'vikasjjindal11gkdbschool@gmail.com', 'hello world'),
(20, 'banku', 'vikasjindalmsc@gmail.com', 'hello'),
(21, 'banku', 'vikasjindalmsc@gmail.com', 'hello'),
(22, 'banku', 'vikasjindalmsc@gmail.com', 'hello'),
(6, 'isha sharma', '1234@gmail.com', 'hello i am isha gupta');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `contactno` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `location` varchar(70) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactno`, `email`, `location`, `id`) VALUES
('9910319566', 'info@mtaindia.org', 'www.mtaindia.org', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coursefeatureslider`
--

DROP TABLE IF EXISTS `coursefeatureslider`;
CREATE TABLE IF NOT EXISTS `coursefeatureslider` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `coursefeatureslider`
--

INSERT INTO `coursefeatureslider` (`id`, `name`, `image`, `description`) VALUES
(1, 'CLOUD COMPUTING', 'cloud.jpg', 'Cloud computing is the on-demand availability of computer system resources, especially data storage and computing power, without direct active management by the user.'),
(2, 'PYTHON PROGRAMMING', 'python.jpg', 'Python Programming is the on-demand availability of computer system resources, especially data storage and computing power, without direct active management by the user.'),
(3, 'BIG DATA', 'bigdata.png', 'Big Data is the on-demand availability of computer system resources, especially data storage and computing power, without direct active management by the user.');

-- --------------------------------------------------------

--
-- Table structure for table `coursewelcome`
--

DROP TABLE IF EXISTS `coursewelcome`;
CREATE TABLE IF NOT EXISTS `coursewelcome` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `image` varchar(70) NOT NULL,
  `content` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `coursewelcome`
--

INSERT INTO `coursewelcome` (`id`, `title`, `image`, `content`) VALUES
(1, 'Courses In MTA-INDIA', 'welcomecourse.jpg', 'Our work is to make you master in the advance technology so that you work parallel with the advance world.And surprise the world with your level of creativity and excellence. our work is to make you the professional coder which world wants.');

-- --------------------------------------------------------

--
-- Table structure for table `featurecourse`
--

DROP TABLE IF EXISTS `featurecourse`;
CREATE TABLE IF NOT EXISTS `featurecourse` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `image` varchar(80) NOT NULL,
  `content` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `featurecourse`
--

INSERT INTO `featurecourse` (`id`, `name`, `image`, `content`) VALUES
(2, '', '', ''),
(3, 'mouse', '', ''),
(4, '', 'advancejava.png', ''),
(5, 'mouse', '8.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `footercourses`
--

DROP TABLE IF EXISTS `footercourses`;
CREATE TABLE IF NOT EXISTS `footercourses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `footercourses`
--

INSERT INTO `footercourses` (`id`, `name`, `link`) VALUES
(1, '#', 'java advance'),
(3, 'register.php', 'Big Data'),
(4, 'register.php', 'Cloud Computing'),
(5, 'register.php', 'Ethical Hacking');

-- --------------------------------------------------------

--
-- Table structure for table `footerimgcont`
--

DROP TABLE IF EXISTS `footerimgcont`;
CREATE TABLE IF NOT EXISTS `footerimgcont` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `footerimgcont`
--

INSERT INTO `footerimgcont` (`id`, `image`, `content`) VALUES
(1, 'logopaint.png', 'we provide best education to all our student in a best posssible way.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

DROP TABLE IF EXISTS `header`;
CREATE TABLE IF NOT EXISTS `header` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(70) NOT NULL,
  `contact` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `name`, `image`, `contact`) VALUES
(1, 'Awnish Sir', 'logopaint.png', '99104236');

-- --------------------------------------------------------

--
-- Table structure for table `homecourses`
--

DROP TABLE IF EXISTS `homecourses`;
CREATE TABLE IF NOT EXISTS `homecourses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `image` varchar(80) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `homecourses`
--

INSERT INTO `homecourses` (`id`, `name`, `image`, `description`) VALUES
(1, 'Ethical Hacking', 'hardware.jpg', 'hello world!!!'),
(2, 'Big Data', 'bigdata.png', 'Big data is popular nowadays.'),
(3, 'Digital Marketing', 'digital.jpg', 'get yourself introduced with this.');

-- --------------------------------------------------------

--
-- Table structure for table `homeslider`
--

DROP TABLE IF EXISTS `homeslider`;
CREATE TABLE IF NOT EXISTS `homeslider` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `homeslider`
--

INSERT INTO `homeslider` (`id`, `name`, `image`, `description`) VALUES
(13, 'C and C++', 'cc++.png', 'Start learning from the base.'),
(9, 'BIG DATA', 'bigdata.png', 'a best way to gather data information.'),
(3, 'PYTHONPROGRAMMING', 'python.jpg', 'A high level programming language.'),
(6, 'PHPANDSQL', 'phpsql.jpg', 'php is a best language'),
(7, 'C and C++', 'cc++.png', 'c and c++ helps in reading a data'),
(14, 'Pycharm', 'javaadvance.png', 'Java is not a scriptingb language');

-- --------------------------------------------------------

--
-- Table structure for table `homespecial`
--

DROP TABLE IF EXISTS `homespecial`;
CREATE TABLE IF NOT EXISTS `homespecial` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `image` varchar(70) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `homespecial`
--

INSERT INTO `homespecial` (`id`, `name`, `image`, `description`) VALUES
(1, 'Live Projects', 'hands-gray.png', 'Theory doesn’t help anyone in professional life, Professional Courses are better learnt by experimenting.'),
(2, 'Global Certificates', 'donation-gray.png', 'Certifications like Microsft, Google, HP, Cisco, EC-Council make a huge difference in placements.'),
(3, 'Advanced Contents', 'charity-gray.png', 'Contents are based upon the latest trends in IT industry and as per the recommendations of IT Guys.');

-- --------------------------------------------------------

--
-- Table structure for table `homewelcome`
--

DROP TABLE IF EXISTS `homewelcome`;
CREATE TABLE IF NOT EXISTS `homewelcome` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `content` varchar(500) NOT NULL,
  `image` varchar(190) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `homewelcome`
--

INSERT INTO `homewelcome` (`id`, `title`, `content`, `image`) VALUES
(1, 'Welcome in MTA-INDIA', 'Our work is to make you master in the advance technology so that you work parallel with the advance world.And surprise the world with your level of creativity and excellence. our work is to make you the professional coder which world wants.', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imagename` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `imagetitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `imagename`, `imagetitle`, `image`) VALUES
(4, 'BIG DATA', 'BIG DATA', 'bigdata.png'),
(6, 'JAVA ORACLE', 'java oracle', 'advancejava.png'),
(7, 'C and C++', '', 'cc++.png'),
(8, 'python', '', 'python.jpg'),
(9, 'Core Java', 'core java', 'bigdata.png'),
(11, 'Advanced Contents', 'advance java', 'javaadvance.png');

-- --------------------------------------------------------

--
-- Table structure for table `registerprogram`
--

DROP TABLE IF EXISTS `registerprogram`;
CREATE TABLE IF NOT EXISTS `registerprogram` (
  `id` int NOT NULL AUTO_INCREMENT,
  `registerprogram` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registerprogram`
--

INSERT INTO `registerprogram` (`id`, `registerprogram`) VALUES
(1, 'Winter'),
(2, 'summer program'),
(3, 'Java Program'),
(4, 'PYTHON PROGRAMMING'),
(5, 'Python programming by sandeep sir'),
(6, 'Mern stack');

-- --------------------------------------------------------

--
-- Table structure for table `selecttechnology`
--

DROP TABLE IF EXISTS `selecttechnology`;
CREATE TABLE IF NOT EXISTS `selecttechnology` (
  `id` int NOT NULL AUTO_INCREMENT,
  `technology` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `selecttechnology`
--

INSERT INTO `selecttechnology` (`id`, `technology`) VALUES
(2, 'Java oravs'),
(3, 'PYTHON PROGRAMMING'),
(4, 'Big Data');

-- --------------------------------------------------------

--
-- Table structure for table `specialcourse`
--

DROP TABLE IF EXISTS `specialcourse`;
CREATE TABLE IF NOT EXISTS `specialcourse` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `image` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `specialcourse`
--

INSERT INTO `specialcourse` (`id`, `name`, `image`, `description`) VALUES
(2, 'JAVA ORACLE', 'advancejava.png', 'We\'ve saved all the old versions of Java Puzzle Ball so you can explore how features were gradually implemented and get insight into the software development process.'),
(9, 'Java Advance', 'advancejava.png', 'We have saved all the old versions of Java Puzzle Ball so you can explore how features were gradually implemented and get insight into the software development process');

-- --------------------------------------------------------

--
-- Table structure for table `studentregister`
--

DROP TABLE IF EXISTS `studentregister`;
CREATE TABLE IF NOT EXISTS `studentregister` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `program` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `technology` varchar(100) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `university` varchar(150) NOT NULL,
  `college` varchar(150) NOT NULL,
  `course` varchar(150) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` int NOT NULL,
  `passingyear` varchar(4) NOT NULL,
  `findus` varchar(250) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `studentregister`
--

INSERT INTO `studentregister` (`id`, `fullname`, `username`, `gender`, `email`, `contact`, `dob`, `program`, `location`, `technology`, `batch`, `state`, `city`, `university`, `college`, `course`, `branch`, `semester`, `passingyear`, `findus`, `password`) VALUES
(18, 'Vikas Jindal', 'dagsc@sdhydb', 'Male', 'vikasjindalmsc@gmail.com', '9910319566', '2021-05-28', 'summer program', 'Ghaziabad', 'PYTHON PROGRAMMING', 'May', 'Rajasthan', 'ghaziabad', 'aktu', 'kiet ', 'B.Tech', 'modinagar', 4, '2022', 'Internet Advertisement', '1231213'),
(26, 'vishesh singhal', 'Bicchu', 'Male', 'visheshsinghal613@gmail.com', '9811624870', '2006-09-14', 'PYTHON PROGRAMMING', 'Ghaziabad', 'PYTHON PROGRAMMING', 'July', 'UTTAR PRADESH', 'ghaziabad', 'aktu', 'kiet ', 'M.Tech', 'modinagar', 10, '2020', 'Friends', 'Ms9811624870');

-- --------------------------------------------------------

--
-- Table structure for table `usefulfooterlinks`
--

DROP TABLE IF EXISTS `usefulfooterlinks`;
CREATE TABLE IF NOT EXISTS `usefulfooterlinks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `link` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usefulfooterlinks`
--

INSERT INTO `usefulfooterlinks` (`id`, `name`, `link`) VALUES
(1, 'JOIN', '#'),
(4, 'About', 'register.php'),
(5, 'java', '#'),
(6, 'Python', 'register.php'),
(7, ' communication', 'register.php');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adminname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `adminname`, `username`, `password`) VALUES
(1, 'MTA-INDIA', 'admin', '123321');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
