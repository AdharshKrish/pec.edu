-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 04:05 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pec.edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `f_id` int(11) NOT NULL,
  `alma` varchar(1000) NOT NULL,
  `interest` varchar(1000) NOT NULL,
  `research` varchar(1100) NOT NULL,
  `student` varchar(1100) NOT NULL,
  `projects` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `email` varchar(100) NOT NULL,
  `dep` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `attachment_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(400) NOT NULL,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `basic_faculty_info`
--

CREATE TABLE `basic_faculty_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `post_tier` varchar(100) NOT NULL,
  `contact_official_email` varchar(50) NOT NULL,
  `extension` int(11) DEFAULT NULL,
  `portfolio` varchar(50) NOT NULL,
  `qualification` varchar(4000) NOT NULL,
  `specialization` varchar(2000) NOT NULL,
  `department` varchar(50) NOT NULL,
  `phno` int(20) DEFAULT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_faculty_info`
--

INSERT INTO `basic_faculty_info` (`id`, `name`, `post_tier`, `contact_official_email`, `extension`, `portfolio`, `qualification`, `specialization`, `department`, `phno`, `dob`) VALUES
(1, 'S. Sundaramoorthy', 'Professor', 'ssm_pec@yahoo.co.in', NULL, '', '', '', 'CHE', NULL, '0000-00-00'),
(2, 'G. Srinivasan', 'Professor', 'srinivasang@pec.edu', NULL, '', '', '', 'CHE', NULL, '0000-00-00'),
(3, 'G. Chandrasekar', 'Professor', 'chandrasekar@pec.edu', NULL, '', '', '', 'CHE', NULL, '0000-00-00'),
(4, 'R. Sridar', 'Associate Professor', 'sivakamisridar9@pec.edu', NULL, '', '', '', 'CHE', NULL, '0000-00-00'),
(5, 'K. Priya', 'Assistant Professor', 'priya@pec.edu', NULL, '', '', '', 'CHE', NULL, '0000-00-00'),
(6, 'T. Pallavhee', 'Assistant Professor', 'pallavhee_82@yahoo.com', NULL, '', '', '', 'CHE', NULL, '0000-00-00'),
(7, 'S. Usha', 'Assistant Professor', 'usha.s@pec.edu', NULL, '', '', '', 'CHE', NULL, '0000-00-00'),
(8, 'Dr. P. Sankar', 'Professor', 'sankar@pec.edu', NULL, '', '', '', 'chem', NULL, '0000-00-00'),
(9, 'Dr. T. Kaliyappan', 'Professor', 'tkaliyappan@pec.edu', NULL, '', '', '', 'chem', NULL, '0000-00-00'),
(10, 'Dr. S. Rajagopan', 'Professor', 'rajagopan@pec.edu', NULL, '', '', '', 'chem', NULL, '0000-00-00'),
(11, 'Dr.S.Kothandaraman', 'Professor', 'sk@pec.edu', NULL, '', '', '', 'CE', NULL, '0000-00-00'),
(12, 'Dr.G.Gerald Moses', 'Professor', 'ggeraldmoses@pec.edu', NULL, '', '', '', 'CE', NULL, '0000-00-00'),
(13, 'Dr.R.Saravanane', 'Professor', 'rsaravanane@pec.edu', NULL, '', '', '', 'CE', NULL, '0000-00-00'),
(14, 'Dr.V.Murugaiyan', 'Professor', 'vmurugaiyan@pec.edu', NULL, '', '', '', 'CE', NULL, '0000-00-00'),
(15, 'Dr.G.Ramakrishna', 'Professor', 'grkv10@pec.edu', NULL, '', '', '', 'CE', NULL, '0000-00-00'),
(16, 'Dr.S.Govindaradjane', 'Professor', 'sg@pec.edu', NULL, '', '', '', 'CE', NULL, '0000-00-00'),
(17, 'Dr.G.Vijayakumar', 'Professor', 'gvk@pec.edu', NULL, '', '', '', 'CE', NULL, '0000-00-00'),
(18, 'Dr.P.Ramadoss', 'Professor', 'dosspr@pec.edu', NULL, '', '', '', 'CE', NULL, '0000-00-00'),
(19, 'Dr.S.Palanivel', 'Professor', 'spalanivel@pec.edu', NULL, '', '', '', 'CE', NULL, '0000-00-00'),
(20, 'Mr.V.Prabakaran', 'Associate Professor', 'vprabak@pec.edu', NULL, '', '', '', 'CE', NULL, '0000-00-00'),
(21, 'Dr.S.Eswari', 'Associate Professor', 'eswaripec@pec.edu', NULL, '', '', '', 'CE', NULL, '0000-00-00'),
(22, 'Dr.P.Revathi', 'Assistant Professor', 'revathi@pec.edu', NULL, '', '', '', 'CE', NULL, '0000-00-00'),
(23, 'Dr.A.Muthadhi', 'Assistant Professor', 'muthadhi@pec.edu', NULL, '', '', '', 'CE', NULL, '0000-00-00'),
(24, 'Dr. P. Thambidurai', 'Professor', 'ptdurai@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(25, 'Dr. K. Vivekanandan', 'Professor', 'k.vivekanandan@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(26, 'Dr. N. Sreenath', 'Professor', 'nsreenath@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(27, 'Dr. D. Loganathan', 'Professor', 'drloganathan@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(28, 'Dr. M. Sugumaran', 'Professor', 'sugu@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(29, 'Dr. R. Manoharan', 'Professor', 'rmanoharan@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(30, 'Dr. F. Sagayaraj Francis', 'Professor', 'fsfrancis@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(31, 'Dr. G. Zayaraz', 'Professor', 'gzayaraz@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(32, 'Dr. E. Ilavarasan', 'Professor', 'eilavarasan@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(33, 'Dr. Ka. Selvaradjou', 'Professor', 'selvaraj@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(34, 'Dr. R. Kalpana', 'Professor', 'rkalpana@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(35, 'Dr. A. Amuthan', 'Professor', 'amuthan@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(36, 'Dr. Lakshmana Pandian', 'Associate Professor', 'lpandian72@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(37, 'Dr. K. Saruladha', 'Associate Professor', 'charuladha@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(38, 'Dr. J. Jayabharathy', 'Associate Professor', 'bharathyraja@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(39, 'Dr. K. Sathiyamurthy', 'Associate Professor', 'sathiyamurthyk@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(40, 'Dr. E. Karunakaran', 'Associate Professor', 'ekaruna@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(41, 'Dr. N. Sivakumar', 'Associate Professor', 'sivakumar11@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(42, 'Dr. R. Sarala', 'Assistant Professor', 'sarala@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(43, 'Dr. J. Kumaran @ Kumar', 'Assistant Professor', 'kumaran@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(44, 'Dr. M. Thirumaran', 'Assistant Professor', 'thirumaran@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(45, 'Dr. V. Akila', 'Assistant Professor', 'akila@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(46, 'Dr. P. Salini', 'Assistant Professor', 'salini@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(47, 'Dr. M. Thenmozhi', 'Assistant Professor', 'thenmozhi@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(48, 'Dr. J. I. Sheeba', 'Assistant Professor', 'sheeba@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(49, 'Dr. R. Kavitha Kumar', 'Programmer', 'rkavithakumar@pec.edu', NULL, '', '', '', 'CSE', NULL, '0000-00-00'),
(50, 'Dr. E. Srinivasan', 'Professor', 'esrinivasan@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(51, 'Dr. G. Nagarajan', 'Professor', 'nagarajanpec@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(52, 'Dr. M. Tamilarasi', 'Professor', 'tamilrasim@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(53, 'Dr. G. Florence Sudha', 'Professor', 'gfsudha@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(54, 'Dr. V. Saminadan', 'Professor', 'saminadan@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(55, 'Dr. D. Saraswady', 'Professor', 'dsaraswady@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(56, 'Dr. S. Batmavady', 'Professor', 'sbatmavady@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(57, 'Dr. G. Sivaradje', 'Professor', 'shivaradje@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(58, 'Dr. L. Nithyanandan', 'Professor', 'nithi@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(59, 'Dr. K. Jayanthi', 'Professor', 'jayanthi@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(60, 'Dr. K. Kumar', 'Professor', 'kkECE@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(61, 'Dr. R. Gunasundari', 'Professor', 'gunasundari@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(62, 'Dr. V. Vijayalakshmi', 'Associate Professor', 'vvijizai@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(63, 'Dr. S. Tamilselvan', 'Associate Professor', 'tamilselvan@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(64, 'Dr. M. Thachayani', 'Assistant Professor', 'mthachayani@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(65, 'Dr. R. Sandanalakshmi', 'Assistant Professor', 'sandanalakshmi@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(66, 'Dr. A. V. Ananthalakshmi', 'Assistant Professor', 'anantha_av@pec.edu', NULL, '', '', '', 'ECE', NULL, '0000-00-00'),
(67, 'Dr. K. Manivannan', 'Professor', 'kmanivannan@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(68, 'Dr. S. Himavathi', 'Professor', 'himavathi@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(70, 'Dr. A. Muthuramalingam', 'Professor', 'amrlingam@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(71, 'Dr. R. Gnanadass', 'Professor', 'gnanadass@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(72, 'Dr. Alamelu Nachiappan', 'Professor', 'nalam63@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(73, 'Dr. G. Ravi', 'Professor', 'ravig@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(74, 'Dr. K. Rajambal', 'Professor', 'rajambalk@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(75, 'Dr. C. Christopher Asir Rajan', 'Professor', '70@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(76, 'Dr. K. Elanseralathan', 'Professor', 'pecelan@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(77, 'Dr. M. Sudhakaran', 'Professor', 'sudhakaran@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(78, 'Dr. S. Jeevananthan', 'Professor', 'EEE@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(79, 'Dr. M. Arounassalame', 'Associate Professor', 'arun@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(80, 'Dr. B. Mahesh Kumar', 'Associate Professor', 'bmk@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(81, 'Dr. B. Geetha Lakshmi', 'Associate Professor', 'bgeethalakshmi@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(82, 'Dr. K. Ramakrishnan', 'Associate Professor', 'ramakrishnan@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(83, 'Dr. R. Rajathy', 'Associate Professor', 'rajathy@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(84, 'Dr. N. P. Subramaniam', 'Assistant Professor', 'npsubbu@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(85, 'Dr. P. Ajay-D-Vimal Raj', 'Assistant Professor', 'ajayvimal@pec.edu', NULL, '', '', '', 'EEE', NULL, '0000-00-00'),
(86, 'Dr.R. Ananda Natarajan', 'Professor', 'ananda_natarajan@pec.edu', NULL, '', '', '', 'EIE', NULL, '0000-00-00'),
(87, 'Dr.P.RameshBabu', 'Professor', 'prameshbabu@pec.edu', NULL, '', '', '', 'EIE', NULL, '0000-00-00'),
(88, 'Dr. P. Thirushakthi Murugan', 'Professor', 'thirusakthimurugan@pec.edu', NULL, '', '', '', 'EIE', NULL, '0000-00-00'),
(89, 'Dr.S.Mourouga Prakash', 'Associate Professor', 'smpragash@pec.edu', NULL, '', '', '', 'EIE', NULL, '0000-00-00'),
(90, 'Mrs. M.Amirthavalli', 'Associate Professor', 'amirtha_instu@hotmail.com', NULL, '', '', '', 'EIE', NULL, '0000-00-00'),
(91, 'Dr.R.Sundaramurthy', 'Assistant Professor', 'sundar@pec.edu', NULL, '', '', '', 'EIE', NULL, '0000-00-00'),
(92, 'Dr.S.Rajendiran', 'Assistant Professor', 'eieraja@pec.edu', NULL, '', '', '', 'EIE', NULL, '0000-00-00'),
(93, 'Dr. B.Hemakumar', 'Assistant Professor', 'hemakumarb@pec.edu', NULL, '', '', '', 'EIE', NULL, '0000-00-00'),
(94, 'Dr. M. Florance Mary', 'Assistant Professor', 'florancemary@pec.edu', NULL, '', '', '', 'EIE', NULL, '0000-00-00'),
(95, 'Dr. D.Sindhanaiselvi', 'Assistant Professor', 'sindhanaiselvi@pec.edu', NULL, '', '', '', 'EIE', NULL, '0000-00-00'),
(96, 'Dr. Shanthi Simon', 'Professor', 'shanthisimon@pec.edu', NULL, '', '', '', 'HSS', NULL, '0000-00-00'),
(97, 'Mr. D. Virappassamy', 'Associate Professor', 'virappassamy@pec.edu', NULL, '', '', '', 'HSS', NULL, '0000-00-00'),
(98, 'Dr. K. Guejalatchoumy', 'Assistant Professor', 'gaja@pec.edu', NULL, '', '', '', 'HSS', NULL, '0000-00-00'),
(99, 'Ms. S. Geetha', 'Assistant Professor', 'geetha.s@pec.edu', NULL, '', '', '', 'HSS', NULL, '0000-00-00'),
(100, 'Dr. S. Kanmani', 'Professor', 'kanmani@pec.edu', NULL, '', '', '', 'IT', NULL, '0000-00-00'),
(101, 'Dr. M. Ezhilarasan', 'Professor', 'mrezhil@pec.edu', NULL, '', '', '', 'IT', NULL, '0000-00-00'),
(102, 'Dr. S. Saraswathi', 'Professor', 'swathi@pec.edu', NULL, '', '', '', 'IT', NULL, '0000-00-00'),
(103, 'Dr. Santhi Baskaran', 'Professor', 'santhibaskaran@pec.edu', NULL, '', '', '', 'IT', NULL, '0000-00-00'),
(104, 'Dr. V. Govindasamy', 'Associate Professor', 'vgopu@pec.edu', NULL, '', '', '', 'IT', NULL, '0000-00-00'),
(105, 'Dr. V. Geetha', 'Associate Professor', 'vgeetha@pec.edu', NULL, '', '', '', 'IT', NULL, '0000-00-00'),
(106, 'Dr. P. Boobalan', 'Associate Professor', 'boobalanp@pec.edu', NULL, '', '', '', 'IT', NULL, '0000-00-00'),
(107, 'Dr. G. Santhi', 'Assistant Professor', 'shanthikarthikeyan@pec.edu', NULL, '', '', '', 'IT', NULL, '0000-00-00'),
(108, 'Dr. M.S. Anbarasi', 'Assistant Professor', 'anbarasims@pec.edu', NULL, '', '', '', 'IT', NULL, '0000-00-00'),
(109, 'Dr. P. Maragathavalli', 'Assistant Professor', 'marapriya@pec.edu', NULL, '', '', '', 'IT', NULL, '0000-00-00'),
(110, 'Dr. G. Ayyappan', 'Professor', 'ayyappan@pec.edu', NULL, '', '', '', 'Maths', NULL, '0000-00-00'),
(111, 'Dr. J. Jayakumar', 'Professor', 'jjayakumar@pec.edu', NULL, '', '', '', 'Maths', NULL, '0000-00-00'),
(112, 'Dr. S. Mangayarcarassy', 'Professor', 'dmangay@pec.edu', NULL, '', '', '', 'Maths', NULL, '0000-00-00'),
(113, 'Dr. S. Vimala', 'Associate Professor', 'vimalaks@pec.edu', NULL, '', '', '', 'Maths', NULL, '0000-00-00'),
(114, 'Dr K. Mahadevan', 'Professor', 'mahadevan@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(115, 'Dr K.Subbarayudu', 'Professor', 'karumuri@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(116, 'Dr T.Senthilvelan', 'Professor', 'senthilvelan@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(117, 'Dr A.Selvaraju', 'Professor', 'asraj@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(118, 'Dr N.Alagumurthi', 'Professor', 'alagumurthi@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(119, 'Dr M. Pugazhvadivu', 'Professor', 'pv_pec@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(120, 'Dr. P Mathiazhagan', 'Professor', 'pmathi@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(121, 'Dr B. Prabu', 'Professor', 'prabu@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(122, 'Dr S. Mohamed Ali', 'Professor', 'smdali@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(123, 'Dr A.V.Raviprakash', 'Professor', 'avrp@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(124, 'Dr K Palaniradja Kichena', 'Professor', 'palaniradja72@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(125, 'Dr Auro Ashish Saha', 'Professor', 'asaha@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(126, 'Mr N Balasubramanian', 'Associate Professor', 'nbs@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(127, 'Dr A.Kalaisselvane', 'Associate Professor', 'kalaisselvane@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(128, 'Dr R Elansezhian', 'Associate Professor', 'elansezhianr@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(129, 'Dr A Sathiamourtty', 'Associate Professor', 'asm@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(130, 'Dr K Ashok', 'Associate Professor', 'ashok@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(131, 'Dr G S Gunasegarane', 'Associate Professor', 'gsguna@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(132, 'Dr L Kumararaja', 'Associate Professor', 'lakurajaa@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(133, 'Dr R Dhinakaran', 'Associate Professor', 'dhinaie@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(134, 'Dr N Rathinam', 'Assistant Professor', 'rathinam_80@pec.edu', NULL, '', '', '', 'ME', NULL, '0000-00-00'),
(135, 'Dr.B.Palanivel', 'Professor', 'bpvel@pec.edu', NULL, '', '', '', 'phy', NULL, '0000-00-00'),
(136, 'Dr. B.J.Kalaiselvi', 'Professor', 'bjk@pec.edu', NULL, '', '', '', 'phy', NULL, '0000-00-00'),
(137, 'Dr. R. Kannan', 'Professor', 'kannan@pec.edu', NULL, '', '', '', 'phy', NULL, '0000-00-00'),
(138, 'Dr. Harish Kumar', 'Professor', 'harishkumarholla@pec.edu', NULL, '', '', '', 'phy', NULL, '0000-00-00'),
(139, 'Mr.Muthukannu', 'Associate Professor', 'mmk@pec.edu', NULL, '', '', '', 'phy', NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `uploader` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(400) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `otp`, `username`, `email`, `department`) VALUES
(1, '', 'S. Sundaramoorthy', 'ssm_pec@yahoo.co.in', 'CHE'),
(2, '', 'G. Srinivasan', 'srinivasang@pec.edu', 'CHE'),
(3, '', 'G. Chandrasekar', 'chandrasekar@pec.edu', 'CHE'),
(4, '', 'R. Sridar', 'sivakamisridar9@pec.edu', 'CHE'),
(5, '', 'K. Priya', 'priya@pec.edu', 'CHE'),
(6, '', 'T. Pallavhee', 'pallavhee_82@yahoo.com', 'CHE'),
(7, '', 'S. Usha', 'usha.s@pec.edu', 'CHE'),
(8, '', 'Dr. P. Sankar', 'sankar@pec.edu', 'chem'),
(9, '', 'Dr. T. Kaliyappan', 'tkaliyappan@pec.edu', 'chem'),
(10, '', 'Dr. S. Rajagopan', 'rajagopan@pec.edu', 'chem'),
(11, '', 'Dr.S.Kothandaraman', 'sk@pec.edu', 'CE'),
(12, '', 'Dr.G.Gerald Moses', 'ggeraldmoses@pec.edu', 'CE'),
(13, '', 'Dr.R.Saravanane', 'rsaravanane@pec.edu', 'CE'),
(14, '', 'Dr.V.Murugaiyan', 'vmurugaiyan@pec.edu', 'CE'),
(15, '', 'Dr.G.Ramakrishna', 'grkv10@pec.edu', 'CE'),
(16, '', 'Dr.S.Govindaradjane', 'sg@pec.edu', 'CE'),
(17, '', 'Dr.G.Vijayakumar', 'gvk@pec.edu', 'CE'),
(18, '', 'Dr.P.Ramadoss', 'dosspr@pec.edu', 'CE'),
(19, '', 'Dr.S.Palanivel', 'spalanivel@pec.edu', 'CE'),
(20, '', 'Mr.V.Prabakaran', 'vprabak@pec.edu', 'CE'),
(21, '', 'Dr.S.Eswari', 'eswaripec@pec.edu', 'CE'),
(22, '', 'Dr.P.Revathi', 'revathi@pec.edu', 'CE'),
(23, '', 'Dr.A.Muthadhi', 'muthadhi@pec.edu', 'CE'),
(24, '', 'Dr. P. Thambidurai', 'ptdurai@pec.edu', 'CSE'),
(25, '', 'Dr. K. Vivekanandan', 'k.vivekanandan@pec.edu', 'CSE'),
(26, '', 'Dr. N. Sreenath', 'nsreenath@pec.edu', 'CSE'),
(27, '', 'Dr. D. Loganathan', 'drloganathan@pec.edu', 'CSE'),
(28, '', 'Dr. M. Sugumaran', 'sugu@pec.edu', 'CSE'),
(29, '', 'Dr. R. Manoharan', 'rmanoharan@pec.edu', 'CSE'),
(30, '', 'Dr. F. Sagayaraj Francis', 'fsfrancis@pec.edu', 'CSE'),
(31, '', 'Dr. G. Zayaraz', 'gzayaraz@pec.edu', 'CSE'),
(32, '', 'Dr. E. Ilavarasan', 'eilavarasan@pec.edu', 'CSE'),
(33, '', 'Dr. Ka. Selvaradjou', 'selvaraj@pec.edu', 'CSE'),
(34, '', 'Dr. R. Kalpana', 'rkalpana@pec.edu', 'CSE'),
(35, '', 'Dr. A. Amuthan', 'amuthan@pec.edu', 'CSE'),
(36, '', 'Dr. Lakshmana Pandian', 'lpandian72@pec.edu', 'CSE'),
(37, '', 'Dr. K. Saruladha', 'charuladha@pec.edu', 'CSE'),
(38, '', 'Dr. J. Jayabharathy', 'bharathyraja@pec.edu', 'CSE'),
(39, '', 'Dr. K. Sathiyamurthy', 'sathiyamurthyk@pec.edu', 'CSE'),
(40, '', 'Dr. E. Karunakaran', 'ekaruna@pec.edu', 'CSE'),
(41, '', 'Dr. N. Sivakumar', 'sivakumar11@pec.edu', 'CSE'),
(42, '', 'Dr. R. Sarala', 'sarala@pec.edu', 'CSE'),
(43, '', 'Dr. J. Kumaran @ Kumar', 'kumaran@pec.edu', 'CSE'),
(44, '', 'Dr. M. Thirumaran', 'thirumaran@pec.edu', 'CSE'),
(45, '', 'Dr. V. Akila', 'akila@pec.edu', 'CSE'),
(46, '', 'Dr. P. Salini', 'salini@pec.edu', 'CSE'),
(47, '', 'Dr. M. Thenmozhi', 'thenmozhi@pec.edu', 'CSE'),
(48, '', 'Dr. J. I. Sheeba', 'sheeba@pec.edu', 'CSE'),
(49, '', 'Dr. R. Kavitha Kumar', 'rkavithakumar@pec.edu', 'CSE'),
(50, '', 'Dr. E. Srinivasan', 'esrinivasan@pec.edu', 'ECE'),
(51, '', 'Dr. G. Nagarajan', 'nagarajanpec@pec.edu', 'ECE'),
(52, '', 'Dr. M. Tamilarasi', 'tamilrasim@pec.edu', 'ECE'),
(53, '', 'Dr. G. Florence Sudha', 'gfsudha@pec.edu', 'ECE'),
(54, '', 'Dr. V. Saminadan', 'saminadan@pec.edu', 'ECE'),
(55, '', 'Dr. D. Saraswady', 'dsaraswady@pec.edu', 'ECE'),
(56, '', 'Dr. S. Batmavady', 'sbatmavady@pec.edu', 'ECE'),
(57, '', 'Dr. G. Sivaradje', 'shivaradje@pec.edu', 'ECE'),
(58, '', 'Dr. L. Nithyanandan', 'nithi@pec.edu', 'ECE'),
(59, '', 'Dr. K. Jayanthi', 'jayanthi@pec.edu', 'ECE'),
(60, '', 'Dr. K. Kumar', 'kkECE@pec.edu', 'ECE'),
(61, '', 'Dr. R. Gunasundari', 'gunasundari@pec.edu', 'ECE'),
(62, '', 'Dr. V. Vijayalakshmi', 'vvijizai@pec.edu', 'ECE'),
(63, '', 'Dr. S. Tamilselvan', 'tamilselvan@pec.edu', 'ECE'),
(64, '', 'Dr. M. Thachayani', 'mthachayani@pec.edu', 'ECE'),
(65, '', 'Dr. R. Sandanalakshmi', 'sandanalakshmi@pec.edu', 'ECE'),
(66, '', 'Dr. A. V. Ananthalakshmi', 'anantha_av@pec.edu', 'ECE'),
(67, '', 'Dr. K. Manivannan', 'kmanivannan@pec.edu', 'EEE'),
(68, '', 'Dr. S. Himavathi', 'himavathi@pec.edu', 'EEE'),
(70, '', 'Dr. A. Muthuramalingam', 'amrlingam@pec.edu', 'EEE'),
(71, '', 'Dr. R. Gnanadass', 'gnanadass@pec.edu', 'EEE'),
(72, '', 'Dr. Alamelu Nachiappan', 'nalam63@pec.edu', 'EEE'),
(73, '', 'Dr. G. Ravi', 'ravig@pec.edu', 'EEE'),
(74, '', 'Dr. K. Rajambal', 'rajambalk@pec.edu', 'EEE'),
(75, '', 'Dr. C. Christopher Asir Rajan', '70@pec.edu', 'EEE'),
(76, '', 'Dr. K. Elanseralathan', 'pecelan@pec.edu', 'EEE'),
(77, '', 'Dr. M. Sudhakaran', 'sudhakaran@pec.edu', 'EEE'),
(78, '', 'Dr. S. Jeevananthan', 'EEE@pec.edu', 'EEE'),
(79, '', 'Dr. M. Arounassalame', 'arun@pec.edu', 'EEE'),
(80, '', 'Dr. B. Mahesh Kumar', 'bmk@pec.edu', 'EEE'),
(81, '', 'Dr. B. Geetha Lakshmi', 'bgeethalakshmi@pec.edu', 'EEE'),
(82, '', 'Dr. K. Ramakrishnan', 'ramakrishnan@pec.edu', 'EEE'),
(83, '', 'Dr. R. Rajathy', 'rajathy@pec.edu', 'EEE'),
(84, '', 'Dr. N. P. Subramaniam', 'npsubbu@pec.edu', 'EEE'),
(85, '', 'Dr. P. Ajay-D-Vimal Raj', 'ajayvimal@pec.edu', 'EEE'),
(86, '', 'Dr.R. Ananda Natarajan', 'ananda_natarajan@pec.edu', 'EIE'),
(87, '', 'Dr.P.RameshBabu', 'prameshbabu@pec.edu', 'EIE'),
(88, '', 'Dr. P. Thirushakthi Murugan', 'thirusakthimurugan@pec.edu', 'EIE'),
(89, '', 'Dr.S.Mourouga Prakash', 'smpragash@pec.edu', 'EIE'),
(90, '', 'Mrs. M.Amirthavalli', 'amirtha_instu@hotmail.com', 'EIE'),
(91, '', 'Dr.R.Sundaramurthy', 'sundar@pec.edu', 'EIE'),
(92, '', 'Dr.S.Rajendiran', 'eieraja@pec.edu', 'EIE'),
(93, '', 'Dr. B.Hemakumar', 'hemakumarb@pec.edu', 'EIE'),
(94, '', 'Dr. M. Florance Mary', 'florancemary@pec.edu', 'EIE'),
(95, '', 'Dr. D.Sindhanaiselvi', 'sindhanaiselvi@pec.edu', 'EIE'),
(96, '', 'Dr. Shanthi Simon', 'shanthisimon@pec.edu', 'HSS'),
(97, '', 'Mr. D. Virappassamy', 'virappassamy@pec.edu', 'HSS'),
(98, '', 'Dr. K. Guejalatchoumy', 'gaja@pec.edu', 'HSS'),
(99, '', 'Ms. S. Geetha', 'geetha.s@pec.edu', 'HSS'),
(100, '', 'Dr. S. Kanmani', 'kanmani@pec.edu', 'IT'),
(101, '', 'Dr. M. Ezhilarasan', 'mrezhil@pec.edu', 'IT'),
(102, '', 'Dr. S. Saraswathi', 'swathi@pec.edu', 'IT'),
(103, '', 'Dr. Santhi Baskaran', 'santhibaskaran@pec.edu', 'IT'),
(104, '', 'Dr. V. Govindasamy', 'vgopu@pec.edu', 'IT'),
(105, '', 'Dr. V. Geetha', 'vgeetha@pec.edu', 'IT'),
(106, '', 'Dr. P. Boobalan', 'boobalanp@pec.edu', 'IT'),
(107, '', 'Dr. G. Santhi', 'shanthikarthikeyan@pec.edu', 'IT'),
(108, '', 'Dr. M.S. Anbarasi', 'anbarasims@pec.edu', 'IT'),
(109, '', 'Dr. P. Maragathavalli', 'marapriya@pec.edu', 'IT'),
(110, '', 'Dr. G. Ayyappan', 'ayyappan@pec.edu', 'Maths'),
(111, '', 'Dr. J. Jayakumar', 'jjayakumar@pec.edu', 'Maths'),
(112, '', 'Dr. S. Mangayarcarassy', 'dmangay@pec.edu', 'Maths'),
(113, '', 'Dr. S. Vimala', 'vimalaks@pec.edu', 'Maths'),
(114, '', 'Dr K. Mahadevan', 'mahadevan@pec.edu', 'ME'),
(115, '', 'Dr K.Subbarayudu', 'karumuri@pec.edu', 'ME'),
(116, '', 'Dr T.Senthilvelan', 'senthilvelan@pec.edu', 'ME'),
(117, '', 'Dr A.Selvaraju', 'asraj@pec.edu', 'ME'),
(118, '', 'Dr N.Alagumurthi', 'alagumurthi@pec.edu', 'ME'),
(119, '', 'Dr M. Pugazhvadivu', 'pv_pec@pec.edu', 'ME'),
(120, '', 'Dr. P Mathiazhagan', 'pmathi@pec.edu', 'ME'),
(121, '', 'Dr B. Prabu', 'prabu@pec.edu', 'ME'),
(122, '', 'Dr S. Mohamed Ali', 'smdali@pec.edu', 'ME'),
(123, '', 'Dr A.V.Raviprakash', 'avrp@pec.edu', 'ME'),
(124, '', 'Dr K Palaniradja Kichena', 'palaniradja72@pec.edu', 'ME'),
(125, '', 'Dr Auro Ashish Saha', 'asaha@pec.edu', 'ME'),
(126, '', 'Mr N Balasubramanian', 'nbs@pec.edu', 'ME'),
(127, '', 'Dr A.Kalaisselvane', 'kalaisselvane@pec.edu', 'ME'),
(128, '', 'Dr R Elansezhian', 'elansezhianr@pec.edu', 'ME'),
(129, '', 'Dr A Sathiamourtty', 'asm@pec.edu', 'ME'),
(130, '', 'Dr K Ashok', 'ashok@pec.edu', 'ME'),
(131, '', 'Dr G S Gunasegarane', 'gsguna@pec.edu', 'ME'),
(132, '', 'Dr L Kumararaja', 'lakurajaa@pec.edu', 'ME'),
(133, '', 'Dr R Dhinakaran', 'dhinaie@pec.edu', 'ME'),
(134, '', 'Dr N Rathinam', 'rathinam_80@pec.edu', 'ME'),
(135, '', 'Dr.B.Palanivel', 'bpvel@pec.edu', 'phy'),
(136, '', 'Dr. B.J.Kalaiselvi', 'bjk@pec.edu', 'phy'),
(137, '', 'Dr. R. Kannan', 'kannan@pec.edu', 'phy'),
(138, '', 'Dr. Harish Kumar', 'harishkumarholla@pec.edu', 'phy'),
(139, '', 'Mr.Muthukannu', 'mmk@pec.edu', 'phy'),
(140, '62463347', 'Website Developer 1', 'rupamchirom@yahoo.com', 'Others'),
(141, '', 'Website Developer 2', 'purushottambanerjee@gmail.com', 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `news_update`
--

CREATE TABLE `news_update` (
  `id` int(11) NOT NULL,
  `breif` longtext NOT NULL,
  `expires_on` date NOT NULL,
  `Faculty_id` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `department` varchar(100) NOT NULL,
  `verified` int(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `f_id` int(11) NOT NULL,
  `books` varchar(2000) NOT NULL,
  `journals` varchar(2000) NOT NULL,
  `conference` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `idref` int(11) NOT NULL,
  `desg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `idref`, `desg`) VALUES
(1, 140, 'WEBMASTER'),
(2, 141, 'WEBMASTER'),
(3, 33, 'WEBMASTER'),
(4, 2, 'HOD'),
(5, 10, 'HOD'),
(6, 13, 'HOD'),
(7, 29, 'HOD'),
(8, 53, 'HOD'),
(9, 73, 'HOD'),
(10, 88, 'HOD'),
(11, 96, 'HOD'),
(12, 103, 'HOD'),
(13, 111, 'HOD'),
(14, 118, 'HOD'),
(15, 138, 'HOD');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `f_id` int(11) NOT NULL,
  `website` varchar(500) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL,
  `dep` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `picname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `tagname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uploading`
--

CREATE TABLE `uploading` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`f_id`),
  ADD UNIQUE KEY `f_id` (`f_id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`attachment_id`);

--
-- Indexes for table `basic_faculty_info`
--
ALTER TABLE `basic_faculty_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_update`
--
ALTER TABLE `news_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploading`
--
ALTER TABLE `uploading`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attachment`
--
ALTER TABLE `attachment`
  MODIFY `attachment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic_faculty_info`
--
ALTER TABLE `basic_faculty_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `news_update`
--
ALTER TABLE `news_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploading`
--
ALTER TABLE `uploading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
