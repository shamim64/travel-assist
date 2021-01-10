-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 10:18 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+06:00";


-- Database: `travelassist`

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Insert data for table `user`
--

INSERT INTO `user` ( 'id',`UserName`, `Password`) VALUES
(1, 'shamim', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  
  `Title` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  'Photo' image DEFAULT NULL,
  `Comment` mediumtext DEFAULT NULL
  
  
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Insert data for table `tour`
--

INSERT INTO `tour` ( 'Title',`Description`, `Comment`) VALUES
('Sreemongol','best for short tour. Can complete in 1 day','images/sreemongol.jpg','Nice place to visit'),
('Coxs Bazar','Longest sea beach in the world','images/coxsbazar.jpg','Nice place to visit');



--
-- Table structure for table `viewpackage`
--

CREATE TABLE `viewpackage` (
  `id` int(11) NOT NULL,
  `Tile` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Comment` mediumtext DEFAULT NULL

  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `tblusers`
--

CREATE TABLE `usersdetails` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Mobile` char(10) DEFAULT NULL,
  `Email` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Inserting data for table `usersdetails`
--

INSERT INTO `usersdetails` (`id`, `Name`, `MobileNumber`, `Email`, `Password`) VALUES
(1, 'Shamim', '9999999999', 'nsu.shamim@gmail.com', '12345'),
(9, 'Rakib', '4543534534', 'rakib@gmail.com', '82591'),
(10, 'Faruk', '8888888888', 'faruk@gmail.com', '52927'),
(11, 'Marry', '3333333333', 'marry@gmail.com', '56789');


--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;


-- Indexes for table `travelpages`
--
ALTER TABLE `travelpages`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


--
-- AUTO_INCREMENT for table `viewenquiry`
--
ALTER TABLE `viewenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `viewpackage`
--
ALTER TABLE `viewpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `travelpages`
--
ALTER TABLE `travelpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `travelpackages`
--
ALTER TABLE `travelpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;




COMMIT;
