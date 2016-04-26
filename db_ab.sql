-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2016 at 06:36 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ab`
--

-- --------------------------------------------------------

--
-- Table structure for table `abeev_account`
--

CREATE TABLE `abeev_account` (
  `account_id` varchar(30) NOT NULL,
  `profile_id` varchar(30) DEFAULT NULL,
  `account_name` varchar(30) DEFAULT NULL,
  `account_username` varchar(100) DEFAULT NULL,
  `account_password` varchar(225) DEFAULT NULL,
  `account_email` varchar(50) DEFAULT NULL,
  `account_last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abeev_account`
--

INSERT INTO `abeev_account` (`account_id`, `profile_id`, `account_name`, `account_username`, `account_password`, `account_email`, `account_last_login`) VALUES
('accad001', 'proad001', 'Evan', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'evan@abeiza.com', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `abeev_contact`
--

CREATE TABLE `abeev_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_phone_1` varchar(30) DEFAULT NULL,
  `contact_phone_2` varchar(30) DEFAULT NULL,
  `contact_email_1` varchar(40) DEFAULT NULL,
  `contact_email_2` varchar(40) DEFAULT NULL,
  `contact_address` text,
  `contact_sosmed_1` varchar(150) DEFAULT NULL,
  `contact_sosmed_2` varchar(150) DEFAULT NULL,
  `contact_sosmed_3` varchar(150) DEFAULT NULL,
  `contact_sosmed_4` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abeev_identity`
--

CREATE TABLE `abeev_identity` (
  `identity_id` int(11) NOT NULL,
  `identity_name_website` varchar(50) DEFAULT NULL,
  `identity_position` varchar(100) DEFAULT NULL,
  `identity_pict` varchar(150) DEFAULT NULL,
  `identity_signature` varchar(150) NOT NULL,
  `identity_description` text NOT NULL,
  `identity_resume_upload` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abeev_profile`
--

CREATE TABLE `abeev_profile` (
  `profile_id` varchar(30) NOT NULL,
  `profile_first_name` varchar(20) DEFAULT NULL,
  `profile_last_name` varchar(20) DEFAULT NULL,
  `profile_nick_name` varchar(20) DEFAULT NULL,
  `profile_pict` varchar(100) DEFAULT NULL,
  `profile_phone` varchar(20) DEFAULT NULL,
  `profile_address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abeev_profile`
--

INSERT INTO `abeev_profile` (`profile_id`, `profile_first_name`, `profile_last_name`, `profile_nick_name`, `profile_pict`, `profile_phone`, `profile_address`) VALUES
('proad001', 'Evan', 'Abeiza', 'Evan', NULL, '085778252133', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abeev_account`
--
ALTER TABLE `abeev_account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `abeev_account_ibfk_1` (`profile_id`);

--
-- Indexes for table `abeev_contact`
--
ALTER TABLE `abeev_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `abeev_identity`
--
ALTER TABLE `abeev_identity`
  ADD PRIMARY KEY (`identity_id`);

--
-- Indexes for table `abeev_profile`
--
ALTER TABLE `abeev_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abeev_contact`
--
ALTER TABLE `abeev_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `abeev_identity`
--
ALTER TABLE `abeev_identity`
  MODIFY `identity_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `abeev_account`
--
ALTER TABLE `abeev_account`
  ADD CONSTRAINT `abeev_account_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `abeev_profile` (`profile_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
