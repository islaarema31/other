-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 03:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `other`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_report`
--

CREATE TABLE `main_report` (
  `id_report` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_point` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_report`
--

INSERT INTO `main_report` (`id_report`, `id_user`, `id_point`, `time`) VALUES
(3, 3, 1, '2020-03-23 09:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `id_point` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `point`
--

INSERT INTO `point` (`id_point`, `name`, `amount`) VALUES
(1, 'Mencuri', 50);

-- --------------------------------------------------------

--
-- Table structure for table `student_report`
--

CREATE TABLE `student_report` (
  `id_report` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_point` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `picture` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_report`
--

INSERT INTO `student_report` (`id_report`, `id_user`, `id_point`, `time`, `picture`) VALUES
(1, 3, 1, '2020-03-23 10:01:35', 0x79656865642e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(25) NOT NULL DEFAULT 'user',
  `class` varchar(225) NOT NULL,
  `identity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `name`, `password`, `level`, `class`, `identity`) VALUES
(1, 'admin@admin.admin', 'admin', '0192023a7bbd73250516f069df18b500', 'admin', '', 0),
(2, 'teacher@teacher.teacher', 'teacher', 'a426dcf72ba25d046591f81a5495eab7', 'teacher', '', 0),
(3, 'student@student.student', 'student', 'ad6a280417a0f533d8b670c61667e1a0', 'student', '', 0),
(4, 'user@user.user', 'user', '6ad14ba9986e3615423dfca256d04e3f', 'user', '', 0),
(5, 'islaunopsg1@gmail.ocm', 'Muhammad Islahuddin', '25d55ad283aa400af464c76d713c07ad', 'user', '1', 12121212);

-- --------------------------------------------------------

--
-- Table structure for table `user_trash`
--

CREATE TABLE `user_trash` (
  `id_user` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(25) NOT NULL DEFAULT 'user',
  `class` varchar(225) NOT NULL,
  `identity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_trash`
--

INSERT INTO `user_trash` (`id_user`, `email`, `name`, `password`, `level`, `class`, `identity`) VALUES
(1, 'admin@admin.admin', 'admin', '0192023a7bbd73250516f069df18b500', 'admin', '', 0),
(2, 'teacher@teacher.teacher', 'teacher', 'a426dcf72ba25d046591f81a5495eab7', 'teacher', '', 0),
(3, 'student@student.student', 'student', 'ad6a280417a0f533d8b670c61667e1a0', 'student', '', 0),
(4, 'user@user.user', 'user', '6ad14ba9986e3615423dfca256d04e3f', 'user', '', 0),
(5, 'islaunopsg1@gmail.ocm', 'Muhammad Islahuddin', '25d55ad283aa400af464c76d713c07ad', 'user', '1', 12121212);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_report`
--
ALTER TABLE `main_report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_point` (`id_point`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id_point`);

--
-- Indexes for table `student_report`
--
ALTER TABLE `student_report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_point` (`id_point`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_trash`
--
ALTER TABLE `user_trash`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_report`
--
ALTER TABLE `main_report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
  MODIFY `id_point` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_report`
--
ALTER TABLE `student_report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_trash`
--
ALTER TABLE `user_trash`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `main_report`
--
ALTER TABLE `main_report`
  ADD CONSTRAINT `main_report_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `main_report_ibfk_2` FOREIGN KEY (`id_point`) REFERENCES `point` (`id_point`);

--
-- Constraints for table `student_report`
--
ALTER TABLE `student_report`
  ADD CONSTRAINT `student_report_ibfk_1` FOREIGN KEY (`id_point`) REFERENCES `point` (`id_point`),
  ADD CONSTRAINT `student_report_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
