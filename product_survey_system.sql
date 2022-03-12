-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 12, 2022 at 05:50 PM
-- Server version: 10.3.15-MariaDB
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
-- Database: `product_survey_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `AdminName` varchar(100) NOT NULL,
  `AdminPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AdminName`, `AdminPassword`) VALUES
(3, 'jigar', '12345'),
(5, 'meet', 'patel000');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CityID` int(11) NOT NULL,
  `CityName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CityID`, `CityName`) VALUES
(1, 'rajkottttt'),
(2, 'jamnagarr'),
(3, 'ahmedabad'),
(4, 'junagadh'),
(5, 'mumbai'),
(6, 'delhi'),
(7, 'kanpur'),
(8, 'aagra'),
(9, 'surat'),
(10, 'navsari');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `ProductImage` varchar(300) NOT NULL,
  `ProductDescription` text NOT NULL,
  `ProductPrice` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductImage`, `ProductDescription`, `ProductPrice`) VALUES
(48, 'maggie', './uploads/maggi-noodles_1.png', 'hjjhjh', 10.00),
(60, 'patanjali maggie', './uploads/patanjali.jpeg', 'mlmzl,m,,lm x', 180.00),
(61, 'watch', './uploads/Relojes-2018-Watch-Men-LIGE-Fashion-Sport-Quartz-Clock-Mens.jpg', 'abcdefg', 0.00),
(62, 'thumbs up', './uploads/thums-up.jpg', 'mnkjdkzjzmlkfkndlkf', 40.00),
(63, 'parle G', './uploads/parle-glucose-biscuit.jpg', 'mksmdksmkdkms kd', 5.00),
(64, 'one plus 7', './uploads/512xYZ5OjGL.jpg', 'mnskdmlksmdlksdmnflkdn', 30000.00),
(65, 'Iphone 8+', './uploads/iphone8-plus-gold.png', 'zdmdfmdlmfl,lzdmf,m', 50000.00),
(66, 'redbull', './uploads/redbull.jpg', 'it is an energy drink.', 100.00),
(67, 'laptop', './uploads/laptop.jpg', 'this is a best laptop for office work.', 40000.00),
(68, 'lamborghini', './uploads/lamborghini.jpg', 'this car is very nice', 50000000.00),
(69, 'HeadPhone', './uploads/headphpne.jpg', 'this is very nice headphone.', 5000.00),
(72, 'amozonkindle', './uploads/amazonkindal.jpg', 'it is a product of amazon it is usefull for students', 10000.00),
(74, 'dairymilk silk', './uploads/41AOI1d2XgL.jpg', 'dfddsfnsdfsdf', 120.00),
(78, 'FOGG', './uploads/fogg.jpg', 'india me to fogg hi chalta hai', 180.00),
(80, 'NewProduct', './uploads/Level0.png', 'desc', 10.00),
(81, 'PrestigeCooker', './uploads/cooker.jpeg', 'cooker', 500.00);

-- --------------------------------------------------------

--
-- Table structure for table `productwisereview`
--

CREATE TABLE `productwisereview` (
  `ProductWiseReviewID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `RatingValue` double(3,1) NOT NULL,
  `RatingText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productwisereview`
--

INSERT INTO `productwisereview` (`ProductWiseReviewID`, `ProductID`, `UserID`, `RatingValue`, `RatingText`) VALUES
(14, 60, 7, 3.0, 'it is very good item.'),
(15, 60, 3, 3.0, 'cZX'),
(24, 61, 3, 3.0, 'abababa'),
(26, 62, 3, 5.0, 'mnsskmsksdksd'),
(28, 64, 7, 5.0, 'this phone is best phone under 35000.'),
(29, 69, 3, 3.0, 'aaaaaaaa'),
(30, 65, 3, 5.0, 'good'),
(34, 64, 3, 4.0, '12345'),
(36, 72, 3, 4.0, 'smdksmdfksf'),
(37, 63, 3, 5.0, 'jwiejwiejwiejwiejweij'),
(38, 63, 7, 2.0, 'dmcjdmcdcmdjc'),
(39, 65, 7, 1.0, 'kakmsassasaskm'),
(40, 62, 9, 3.0, 'aadsdasd'),
(41, 62, 8, 2.0, 'ksdnskdnksdsn'),
(42, 68, 3, 2.0, 'abcdefg'),
(43, 68, 7, 1.0, 'xyz'),
(44, 61, 8, 3.0, 'not that much of good'),
(46, 66, 11, 2.0, '1234'),
(47, 66, 8, 3.0, 'dmskdmskdmskd'),
(48, 48, 3, 3.0, 'asdfghjkl'),
(49, 74, 3, 5.0, 'kuchh mitha ho jaye'),
(50, 78, 3, 2.0, 'no 1 body spray of india'),
(51, 67, 3, 1.0, 'HP Laptop'),
(52, 81, 3, 4.0, 'nsdsnjsdnj');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `MobileNumber` varchar(100) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `CityID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`, `FirstName`, `MiddleName`, `LastName`, `MobileNumber`, `EmailAddress`, `Address`, `CityID`) VALUES
(3, 'jigar', '12345', 'jigar', 'd', 'dhamsaniya', '7567387889', 'jigardhamsaniya@gmail.com', 'falla', 7),
(7, 'meet', '12345', 'meet', 'm', 'bhalodiya', '97146', 'meetbhalodiya902@gmail.com', 'dhrol', 10),
(8, 'arjun@arjun.com', '12345', 'ankasd', 'njdnx', '', '478343467', '', '', 9),
(9, 'abcd', 'abcd', 'a', 'b', 'c', '92930920', 'meetbhalodiya902@gmail.com', '', 5),
(10, '123', '123', 's', 'ss', 'sss', 'ss', 's@gamil', 's', 4),
(11, 'abcd', '!$%R^RFYTGF', 'jigar', 'sfmsdmsndsmd', 'dsmdsmd', '217818246', 'aksjaksjn.@Yshsjah.scn', 'jkwjekwjekw', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CityID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `productwisereview`
--
ALTER TABLE `productwisereview`
  ADD PRIMARY KEY (`ProductWiseReviewID`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `CityID` (`CityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `CityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `productwisereview`
--
ALTER TABLE `productwisereview`
  MODIFY `ProductWiseReviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productwisereview`
--
ALTER TABLE `productwisereview`
  ADD CONSTRAINT `productwisereview_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`),
  ADD CONSTRAINT `productwisereview_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`CityID`) REFERENCES `city` (`CityID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
