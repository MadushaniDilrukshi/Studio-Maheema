-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 10:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maheema_studio`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `Wedding_Date` varchar(45) DEFAULT NULL,
  `WeddingLocation` varchar(45) DEFAULT NULL,
  `HomecomingDate` varchar(45) DEFAULT NULL,
  `HomecomingLocation` varchar(45) DEFAULT NULL,
  `AlbumSize` varchar(45) DEFAULT NULL,
  `Pages` varchar(45) DEFAULT NULL,
  `ThankYouCardSize` varchar(45) DEFAULT NULL,
  `ThankYouCardType` varchar(45) DEFAULT NULL,
  `ThankYouCardAmount` varchar(45) DEFAULT NULL,
  `FramedPhotos` varchar(45) DEFAULT NULL,
  `EnlargedPhotosWithoutFrame` varchar(45) DEFAULT NULL,
  `FullName` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `ContactNo` varchar(45) DEFAULT NULL,
  `Message` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `Wedding_Date`, `WeddingLocation`, `HomecomingDate`, `HomecomingLocation`, `AlbumSize`, `Pages`, `ThankYouCardSize`, `ThankYouCardType`, `ThankYouCardAmount`, `FramedPhotos`, `EnlargedPhotosWithoutFrame`, `FullName`, `Email`, `ContactNo`, `Message`) VALUES
(1, '', 'kandy', '', 'kndy', '12 x 30', '60 pages', '4 x 10', '60 pages', '150', '2', '2', 'mdd ', 'ishara19960126@gmail.com', '0125635', '');

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

CREATE TABLE `oder` (
  `id` int(11) NOT NULL,
  `DelliverAddress` varchar(45) DEFAULT NULL,
  `DelliverContactNumber` varchar(45) DEFAULT NULL,
  `DelliverDate` varchar(45) DEFAULT NULL,
  `DelliverDistrict` varchar(45) DEFAULT NULL,
  `OderType` varchar(45) DEFAULT NULL,
  `OderContactNumber` varchar(45) DEFAULT NULL,
  `OderEmail` varchar(45) DEFAULT NULL,
  `GoogleDriveLink` varchar(45) DEFAULT NULL,
  `NoOfFrame` varchar(45) DEFAULT NULL,
  `NoOfRequird` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oder`
--

INSERT INTO `oder` (`id`, `DelliverAddress`, `DelliverContactNumber`, `DelliverDate`, `DelliverDistrict`, `OderType`, `OderContactNumber`, `OderEmail`, `GoogleDriveLink`, `NoOfFrame`, `NoOfRequird`) VALUES
(1, 'madu', '0704440407', '21/07/2021', 'nuwaraeliya', 'birthdaywishes', '015124887', 'ishara19960126@gmail.com', 'madushani', '1', '1'),
(2, 'ishara', '0148225', '21/07/2021', 'nuwaraeliya', 'selected', '258', 'njjjm', 'hbuug', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `tell` varchar(45) DEFAULT NULL,
  `uname` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `tell`, `uname`, `pass`) VALUES
(1, 'madushani', 'dilrukshi', 'dilmadu430@gmail.com', '0704440407', 'madushani', 'madu'),
(2, 'madushani', 'dilrukshi', 'dilmadu430@gmail.com', '0704440407', 'madu', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oder`
--
ALTER TABLE `oder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
