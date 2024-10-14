-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2024 at 08:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amaresadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `ArchiveID` int(8) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `UserID` int(8) NOT NULL,
  `ManagementID` int(8) NOT NULL,
  `PropertyID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`ArchiveID`, `Name`, `Description`, `Date`, `UserID`, `ManagementID`, `PropertyID`) VALUES
(24, 'Admin 1', 'Staff', '2024-08-29 08:54:39', 0, 0, 0),
(29, 'Jamandron', 'Pending', '2024-08-31 06:57:21', 0, 0, 0),
(34, 'ads', 'Pending', '2024-09-14 10:38:15', 0, 0, 0),
(35, 'Jamandron', 'Pending', '2024-09-22 04:18:21', 0, 0, 0),
(36, 'Abacial', 'Pending', '2024-09-30 06:55:02', 0, 0, 0),
(37, 'Samuel', 'Pending', '2024-09-30 07:00:03', 0, 0, 0),
(38, 'ONLINE STORE', 'Pending', '2024-09-30 07:04:23', 0, 0, 0),
(39, 'ONLINE STORE', 'Pending', '2024-09-30 07:48:28', 0, 0, 0),
(40, 'ONLINE STORE', 'User', '2024-09-30 08:31:59', 0, 0, 0),
(42, 'Samuel', 'Pending', '2024-10-03 02:27:16', 0, 0, 0),
(44, 'ONLINE STORE', 'Pending', '2024-10-03 03:33:09', 0, 0, 0),
(45, 'Jamandron', 'Pending', '2024-10-03 08:08:42', 0, 0, 0),
(46, 'Jamadron', 'Pending', '2024-10-04 07:27:44', 0, 0, 0),
(47, 'Ilegan', 'Pending', '2024-10-04 07:27:49', 0, 0, 0),
(48, 'ONLINE STORE', 'Pending', '2024-10-04 07:27:54', 0, 0, 0),
(49, 'ONLINE STORE', 'Pending', '2024-10-04 07:28:04', 0, 0, 0),
(50, 'ONLINE STORE', 'Pending', '2024-10-04 07:28:09', 0, 0, 0),
(53, 'ONLINE STORE', 'Unpaid', '2024-10-04 07:29:42', 0, 0, 0),
(54, 'ONLINE STORE', 'User', '2024-10-04 07:30:01', 0, 0, 0),
(55, 'adsad', 'Paid', '2024-10-04 07:50:18', 0, 0, 0),
(56, 'ONLINE STORE', 'Pending', '2024-10-04 07:54:29', 0, 0, 0),
(58, 'Doe', 'Unpaid', '2024-10-04 07:58:06', 0, 0, 0),
(59, 'Shaoshao', 'Pending', '2024-10-04 08:00:15', 0, 0, 0),
(60, 'ONLINE STORE', 'Unpaid', '2024-10-04 08:00:34', 0, 0, 0),
(61, 'ONLINE STORE', 'Pending', '2024-10-04 08:00:56', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `ManagementID` int(8) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`ManagementID`, `Lastname`, `Firstname`, `Email`, `Phone`, `Address`, `Password`, `Role`, `Date`) VALUES
(62, 'Shaori', 'Admin Shao', 'amaresa@gmail.com', '151515', 'BLK 3 LOT 6 SEC 7 PHASE 1 Pabahay 2000', '$2y$10$Z0qzmYshj91gf3G3j.BSq.wEYrMNrnW0MJwNmXV.llt9dDVntnMdy', 'Admin', '2024-08-31 10:38:50'),
(63, 'ONLINE STORE', 'SMART', 'ma.cleopisalbon@gmail.com', '09557495359', 'SMART TOWER', '$2y$10$BKlgzbNdm8p0g9Ko7eFqq.BbGJslLqn3DKf9dwmsSphSIdycBe/yy', 'Staff', '2024-09-10 07:08:50'),
(64, 'ONLINE STORE', 'SMART', 'ma.cleopisalbon@gmail.com', '09557495359', 'SMART TOWER', '$2y$10$Tlm.EaSntEwG0HLmKkdkc.6lJAnl5jdoPf5l8mDy6CXKkw0/mXTHu', 'Admin', '2024-09-10 08:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `MessageID` int(8) NOT NULL,
  `Sender` varchar(255) NOT NULL,
  `Receiver` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `PendingID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MessageID`, `Sender`, `Receiver`, `Message`, `Date`, `PendingID`) VALUES
(1, 'DavidAdmin', 'SamReciever', 'MessageSent', '2024-08-23 07:33:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `PendingID` int(8) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Selected_Property` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Payment` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `UserID` int(8) NOT NULL,
  `MessageID` int(8) NOT NULL,
  `PropertyID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`PendingID`, `Lastname`, `Firstname`, `Email`, `Phone`, `Message`, `Address`, `Selected_Property`, `Status`, `Payment`, `Date`, `UserID`, `MessageID`, `PropertyID`) VALUES
(36, 'Abacial', 'Ryan', 'ma.cleopisalbon@gmail.com', '2145154154', '12313', 'Melody', 'Kalya House', 'Pending', 'Paid', '2024-10-04 07:55:02', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `PropertyID` int(8) NOT NULL,
  `Property` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Bedrooms` int(8) NOT NULL,
  `Bathrooms` int(8) NOT NULL,
  `Area_sqft` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(255) NOT NULL,
  `IExterior` longblob DEFAULT NULL,
  `IBedroom` longblob DEFAULT NULL,
  `IBathroom` longblob DEFAULT NULL,
  `IAttic` longblob DEFAULT NULL,
  `IDining` longblob DEFAULT NULL,
  `Role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`PropertyID`, `Property`, `Description`, `Price`, `Bedrooms`, `Bathrooms`, `Area_sqft`, `Date`, `Status`, `IExterior`, `IBedroom`, `IBathroom`, `IAttic`, `IDining`, `Role`) VALUES
(1, 'Alexandria', 'Two Storey-Attached with Atic', '20000000', 5, 3, '130sqm', '2024-08-23 08:37:42', 'Available', NULL, NULL, NULL, NULL, NULL, 'Property');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SaleID` int(8) NOT NULL,
  `Property` varchar(255) NOT NULL,
  `Owner` varchar(255) NOT NULL,
  `Date_Purchased` timestamp NOT NULL DEFAULT current_timestamp(),
  `PendingID` int(8) NOT NULL,
  `PropertyID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`SaleID`, `Property`, `Owner`, `Date_Purchased`, `PendingID`, `PropertyID`) VALUES
(1, 'Arya Prime', 'David', '2024-08-23 08:50:08', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(8) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Date_Joined` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Firstname`, `Lastname`, `Email`, `Phone`, `Address`, `Password`, `Role`, `Date_Joined`) VALUES
(24, 'John Samuel', 'Jamandron', 'test@gmail.com', '1243124', 'Bulacan', 'test123', 'User', '2024-09-10 08:51:52'),
(25, 'Samue', 'Penaranda', 'pen@gmail.com', '141412', 'Bulacan State University', '123', 'User', '2024-09-10 10:14:32'),
(26, 'SMART', 'ONLINE STORE', 'ma.cleopisalbon@gmail.com', '09557495359', 'SMART TOWER', 'asd', 'User', '2024-09-30 06:41:30'),
(27, 'SMART', 'ONLINE STORE', 'ma.cleopisalbon@gmail.com', '09557495359', 'SMART TOWER', 'asda', 'User', '2024-09-30 06:41:36'),
(28, 'SMART', 'ONLINE STORE', 'ma.cleopisalbon@gmail.com', '09557495359', 'SMART TOWER', '2313', 'User', '2024-09-30 06:41:44'),
(29, 'SMART', 'ONLINE STORE', 'ma.cleopisalbon@gmail.com', '09557495359', 'SMART TOWER', '123', 'User', '2024-09-30 08:31:16'),
(30, 'SMART', 'ONLINE STORE', 'ma.cleopisalbon@gmail.com', '09557495359', 'SMART TOWER', 'class=\"active\"', 'User', '2024-09-30 08:31:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`ArchiveID`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`ManagementID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`MessageID`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`PendingID`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`PropertyID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SaleID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `ArchiveID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `ManagementID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MessageID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `PendingID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `PropertyID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SaleID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
