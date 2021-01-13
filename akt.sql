-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 05:10 AM
-- Server version: 10.1.36-MariaDB
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
-- Database: `akt`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `name` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `cnic` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `post` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `cell` varchar(15) NOT NULL,
  `country` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `education` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `cv` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`name`, `f_name`, `cnic`, `gender`, `post`, `email`, `cell`, `country`, `city`, `experience`, `education`, `address`, `cv`, `id`) VALUES
('Muhammad Waqas', 'Dost Muhammad', '38303-5785377-9', 'Male', 'Web Developer', 'aliwaly514@gmail.com', '03365652123', 'Pakistan', 'Taxila', 'N/A', 'BS(CS)', 'CB-77 Bani mohalla Taxila', 'cv/Advt-No-5-2018.pdf', 20),
('Adil', 'Aslam', '12568954855', 'Male', 'Test', 'waleed@yahoo.com', '03315525658', 'Pakistan', 'Islamabad', 'Nil', 'Matric', 'House #1, St 25, ModelTown Islamabad Pakistan', 'cv/New Microsoft Word Document (2).docx', 21);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `title` varchar(50) NOT NULL,
  `salary` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `l_date` date NOT NULL,
  `note` varchar(100) NOT NULL,
  `j_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`title`, `salary`, `country`, `l_date`, `note`, `j_id`) VALUES
('Computer Operator', '$1000-1500', 'UAE', '2018-10-17', 'N/A', 1),
('Web Developer', '50000-60000pkr', 'Pakistan', '2018-10-18', 'Must have one year experience in android application devepment.', 2),
('Database Developer', '50000-60000pkr', 'Pakistan', '2018-10-26', 'Must have oracle certification.', 4),
('Oracle Developer', '40000-50000pkr', 'Pakistan', '2018-10-26', 'Must have oracle certification.', 5),
('PHP Developer', '40000pkr', 'Pakistan', '2018-10-18', 'N/A', 6),
('Developer', '35000pkr', 'Pakistan', '2018-10-18', 'N/A', 7),
('Welder', '20000-30000pkr', 'Pakistan', '2018-10-31', '06 months experience.', 9),
('Crane Operator', '1000CHF', 'Paris (France)', '2018-11-03', 'Must have HTV License ', 10),
('English Teacher', '80000pkr', 'Pakistan', '2018-09-27', 'Must have one year experience in teaching.', 11),
('Labour', '25000pkr', 'Dubai', '2018-08-28', 'Must have one year experience in android application devepment. Must have oracle certification. 06 m', 13),
('Computer Operator -II', '60000pkr', 'Pakistan', '2018-10-09', 'N/A', 16),
('Crane OPerator', '5000pkr', 'Pakistan', '2018-10-25', 'N/A', 17),
('Test', '20000pkr', 'Pakistan', '2021-01-16', 'Anyone can apply.', 18),
('Test 2', '12555', 'Pakistan', '2020-12-29', 'hello', 19);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `r_name` varchar(30) NOT NULL,
  `r_email` varchar(30) NOT NULL,
  `r_contact` varchar(30) NOT NULL,
  `r_txt` varchar(500) NOT NULL,
  `r_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `r_name`, `r_email`, `r_contact`, `r_txt`, `r_time`) VALUES
(3, 'M Waseem', 'M Nasir', '03365245789', 'I want study visa for china. Can you help me??', '2018-10-08 12:53:52'),
(4, 'Ali khan', 'Nadeem ali', '03315874546', 'Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can.', '2018-10-08 12:54:39'),
(5, 'Adeel Ahmad', 'adeel@yahoo.com', '03325478412', 'Feel free to ask quires. Ask your questions away and let our dedicated customer service help you look through to get your questions answered!', '2018-10-08 12:56:41'),
(6, 'Ali Bajwa', 'adeel@yahoo.com', '03315874546', 'HAVE A QUESTION?\r\nFeel free to ask quires. Ask your questions away and let our dedicated customer service help you look through to get your questions answered!', '2018-10-08 12:58:04'),
(7, 'Muzammil', 'adeel@yahoo.com', '03365245789', 'Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can.Feel free to ask quires. Ask your questions away and let our dedicated customer service help you look through to get your questions answered!', '2018-10-08 14:33:14'),
(8, 'Ali Bajwa', 'adeel@yahoo.com', '03315874546', 'Feel free to ask quires. Ask your questions away and let our dedicated customer service help you look through to get your questions answered!', '2018-10-08 17:30:16'),
(9, 'Ali Bajwa', 'adeel@yahoo.com', '03315874546', 'Feel free to ask quires. Ask your questions away and let our dedicated customer service help you look through to get your questions answered!', '2018-10-08 17:30:16'),
(10, 'Test', 'Test@gmail.com', '654564', 'hello this is test message', '2021-01-13 09:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_pass`) VALUES
('admin@alkurdee.com', 'waleed12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
