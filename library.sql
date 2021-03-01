-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 05:06 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `sdeepesh2`
--

CREATE TABLE `sdeepesh2` (
  `id` int(50) NOT NULL,
  `bookno` int(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdeepesh2`
--

INSERT INTO `sdeepesh2` (`id`, `bookno`, `reg_date`) VALUES
(1, 1234, '2020-02-03 10:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `sdeepesh4`
--

CREATE TABLE `sdeepesh4` (
  `id` int(50) NOT NULL,
  `bookno` int(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smanthan1`
--

CREATE TABLE `smanthan1` (
  `id` int(50) NOT NULL,
  `bookno` int(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smanthan1`
--

INSERT INTO `smanthan1` (`id`, `bookno`, `reg_date`) VALUES
(1, 7865, '2020-02-01 10:25:58'),
(2, 12345, '2020-02-01 10:26:06'),
(3, 1234, '2020-02-01 10:42:01'),
(4, 9087, '2020-02-01 10:42:12'),
(5, 2345, '2020-02-01 10:42:17'),
(6, 3456, '2020-02-01 10:44:50'),
(7, 3456, '2020-02-01 10:45:03'),
(8, 3456, '2020-02-01 10:45:03'),
(9, 2345, '2020-02-03 05:56:16'),
(10, 1234, '2020-02-03 07:27:03'),
(11, 3452, '2020-02-03 07:33:03'),
(12, 6578, '2020-02-03 07:34:03'),
(13, 12345, '2020-02-03 08:07:21'),
(14, 4907, '2020-02-19 14:13:54'),
(15, 9087, '2020-02-19 14:15:40'),
(16, 1234, '2020-02-19 16:06:27'),
(17, 1234, '2020-02-21 06:17:10'),
(18, 1234, '2020-02-21 06:17:37'),
(19, 5489857, '2020-02-21 06:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `smanthan3`
--

CREATE TABLE `smanthan3` (
  `id` int(50) NOT NULL,
  `bookno` int(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smanthan3`
--

INSERT INTO `smanthan3` (`id`, `bookno`, `reg_date`) VALUES
(1, 1234, '2020-02-03 10:57:02'),
(2, 7865, '2020-02-03 11:01:03'),
(3, 1234, '2020-02-03 11:02:11'),
(4, 1234, '2020-02-03 11:07:12'),
(5, 7865, '2020-02-03 11:51:11'),
(6, 9087, '2020-02-03 11:51:32'),
(7, 2345, '2020-02-03 11:52:36'),
(8, 12345, '2020-02-03 11:57:18'),
(9, 12345, '2020-02-18 06:28:38'),
(10, 3456, '2020-02-21 06:24:29'),
(11, 12345, '2020-02-21 06:25:18'),
(12, 7644, '2020-02-24 02:27:02'),
(13, 243, '2020-03-06 08:41:21'),
(14, 5657, '2020-03-06 08:53:26'),
(15, 9087, '2020-03-06 09:01:25'),
(16, 3456, '2020-03-06 09:01:48'),
(17, 3451, '2020-03-19 13:21:45'),
(18, 2345, '2020-03-19 13:37:43'),
(19, 7852, '2020-04-27 07:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `Roll_no.` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `uid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `college`, `Roll_no.`, `email`, `password`, `birthday`, `gender`, `uid`) VALUES
(1, 'Manthan', 'Kulkarni', 'INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR', 'bt18cse098', 'deekurmi@gmail.com', '1234', '1999-08-02', 'male', 1),
(2, 'Deepesh', 'Kurmi', 'INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR', 'bt18cse086', 'deepakkurmi874@gmail.com', '1234', '1999-08-02', 'male', 4),
(3, 'Manthan', 'Kulkarni', 'INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR', 'bt18cse098', 'deekurmi2018@gmail.com', '1234', '1999-08-02', 'male', 5),
(4, 'Deepesh', 'Kurmi', 'INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR', 'bt18cse086', 'dee11@gmail.com', 'Dee@1234', '2222-03-04', 'male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tdee2`
--

CREATE TABLE `tdee2` (
  `id` int(50) UNSIGNED NOT NULL,
  `bookno` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tdee5`
--

CREATE TABLE `tdee5` (
  `id` int(50) UNSIGNED NOT NULL,
  `bookno` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `request_type` varchar(30) DEFAULT 'NULL',
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tdee5`
--

INSERT INTO `tdee5` (`id`, `bookno`, `name`, `roll`, `email`, `request_type`, `reg_date`) VALUES
(1, '1234', 'Manthan Kulkarni', '', 'deekurmi2018@gmail.com', 'Issue', '2020-02-03 11:02:11'),
(2, '1234', 'Manthan Kulkarni', '', 'deekurmi2018@gmail.com', 'Issue', '2020-02-03 11:07:13'),
(3, '7865', '', 'bt18cse098', '', 'Issue', '2020-02-03 11:51:11'),
(4, '9087', '', 'bt18cse098', '', 'Issue', '2020-02-03 11:51:32'),
(5, '2345', '', 'bt18cse098', '', 'Issue', '2020-02-03 11:52:36'),
(6, '12345', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', 'Issue', '2020-02-03 11:57:19'),
(7, '12345', '', 'bt18cse098', '', 'Issue', '2020-02-18 06:28:38'),
(8, '3456', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', 'Issue', '2020-02-21 06:24:30'),
(9, '12345', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', 'Issue', '2020-02-21 06:25:18'),
(10, '7644', '', 'bt18cse098', '', 'Issue', '2020-02-24 02:27:02'),
(11, '243', '', 'bt18cse098', '', 'Issue', '2020-03-06 08:41:21'),
(12, '5657', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', 'Issue', '2020-03-06 08:53:26'),
(13, '9087', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', 'Issue', '2020-03-06 09:01:26'),
(14, '3456', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', 'Issue', '2020-03-06 09:01:48'),
(15, '3451', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', 'Issue', '2020-03-19 13:21:45'),
(16, '2345', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', 'Issue', '2020-03-19 13:37:43'),
(17, '7852', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', 'Issue', '2020-04-27 07:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `tdeep3`
--

CREATE TABLE `tdeep3` (
  `id` int(50) UNSIGNED NOT NULL,
  `bookno` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tdeepesh1`
--

CREATE TABLE `tdeepesh1` (
  `id` int(50) UNSIGNED NOT NULL,
  `bookno` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tdeepesh1`
--

INSERT INTO `tdeepesh1` (`id`, `bookno`, `name`, `roll`, `email`, `reg_date`) VALUES
(1, '12345', 'Manthan Kulkarni', '', 'deekurmi@gmail.com', '2020-02-03 08:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `last_name`, `college`, `birthday`, `email`, `password`, `gender`) VALUES
(1, 'Deepesh', 'Kurmi', 'INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR', '1999-08-02', 'xyz@gmail.com', '1234', 'male'),
(2, 'dee', 'kurmi', 'INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR', '1999-03-02', 'deekurmi2018@gmail.com', '1234', 'male'),
(3, 'DeeP', 'kurmi', 'VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGP', '1999-08-02', 'deekurmi21@gmail.com', '1234', 'male'),
(4, 'Sushant', 'Naik', 'INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR', '1999-08-02', 's@gmail.com', '1234', 'male'),
(5, 'Dee', 'Kurmi', 'INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR', '1999-08-02', 'dee@gmail.com', '1234', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `tidee5`
--

CREATE TABLE `tidee5` (
  `id` int(50) UNSIGNED NOT NULL,
  `bookno` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tidee5`
--

INSERT INTO `tidee5` (`id`, `bookno`, `name`, `roll`, `email`, `reg_date`) VALUES
(1, '1234', 'Manthan Kulkarni', '', 'deekurmi2018@gmail.com', '2020-02-03 11:07:13'),
(2, '7865', '', 'bt18cse098', '', '2020-02-03 11:51:11'),
(3, '9087', '', 'bt18cse098', '', '2020-02-03 11:51:32'),
(4, '2345', '', 'bt18cse098', '', '2020-02-03 11:52:36'),
(5, '12345', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', '2020-02-03 11:57:19'),
(6, '12345', '', 'bt18cse098', '', '2020-02-18 06:28:38'),
(7, '3456', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', '2020-02-21 06:24:30'),
(8, '12345', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', '2020-02-21 06:25:19'),
(9, '7644', '', 'bt18cse098', '', '2020-02-24 02:27:02'),
(10, '243', '', 'bt18cse098', '', '2020-03-06 08:41:21'),
(11, '5657', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', '2020-03-06 08:53:26'),
(12, '9087', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', '2020-03-06 09:01:26'),
(13, '3456', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', '2020-03-06 09:01:48'),
(14, '3451', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', '2020-03-19 13:21:45'),
(15, '2345', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', '2020-03-19 13:37:43'),
(16, '7852', 'Manthan Kulkarni', 'bt18cse098', 'deekurmi2018@gmail.com', '2020-04-27 07:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `tisushant4`
--

CREATE TABLE `tisushant4` (
  `id` int(50) UNSIGNED NOT NULL,
  `bookno` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tsushant4`
--

CREATE TABLE `tsushant4` (
  `id` int(50) UNSIGNED NOT NULL,
  `bookno` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsushant4`
--

INSERT INTO `tsushant4` (`id`, `bookno`, `name`, `roll`, `email`, `reg_date`) VALUES
(1, '1234', '', '', '', '2020-02-03 10:27:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sdeepesh2`
--
ALTER TABLE `sdeepesh2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdeepesh4`
--
ALTER TABLE `sdeepesh4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smanthan1`
--
ALTER TABLE `smanthan1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smanthan3`
--
ALTER TABLE `smanthan3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tdee2`
--
ALTER TABLE `tdee2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tdee5`
--
ALTER TABLE `tdee5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tdeep3`
--
ALTER TABLE `tdeep3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tdeepesh1`
--
ALTER TABLE `tdeepesh1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tidee5`
--
ALTER TABLE `tidee5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tisushant4`
--
ALTER TABLE `tisushant4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tsushant4`
--
ALTER TABLE `tsushant4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sdeepesh2`
--
ALTER TABLE `sdeepesh2`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sdeepesh4`
--
ALTER TABLE `sdeepesh4`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `smanthan1`
--
ALTER TABLE `smanthan1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `smanthan3`
--
ALTER TABLE `smanthan3`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tdee2`
--
ALTER TABLE `tdee2`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tdee5`
--
ALTER TABLE `tdee5`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tdeep3`
--
ALTER TABLE `tdeep3`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tdeepesh1`
--
ALTER TABLE `tdeepesh1`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tidee5`
--
ALTER TABLE `tidee5`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tisushant4`
--
ALTER TABLE `tisushant4`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tsushant4`
--
ALTER TABLE `tsushant4`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
