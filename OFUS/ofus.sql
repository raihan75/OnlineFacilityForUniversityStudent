-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2017 at 04:24 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofus`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Item_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Item_category` varchar(30) NOT NULL,
  `Item_name` varchar(30) NOT NULL,
  `Item_date` varchar(30) NOT NULL,
  `Item_picture` varchar(30) NOT NULL,
  `Item_price` varchar(30) NOT NULL,
  `Item_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_id`, `User_id`, `Item_category`, `Item_name`, `Item_date`, `Item_picture`, `Item_price`, `Item_description`) VALUES
(1, 1, 'Books', 'Statistics', '12-12-17', 'sdfg', '330', '9th edition'),
(2, 6, 'Books', 'C language', '19-12-17', 'wfeg', '100', '6th edition'),
(3, 7, 'Clothes', 't-shirt', '13-12-17', 'dgdsgsgs', '100', 'color: Black'),
(4, 4, 'Electronics', 'laptop', '18-12-17', 'fvjsbdvjks', '25000', 'model: Dell'),
(5, 2, 'Electronics', 'Mobile', '13-12-17', 'jscjzsfbcjsd', '5000', 'model: samphony'),
(6, 3, 'Home_Goods', 'bed', '16-12-17', 'jdvjsdvdskvj', '1000', 'size: small'),
(7, 8, 'Homes', '2 rooms home', '10-12-17', 'sefsegsdrgrsdge', '1000', 'mohammadpur,Dhaka'),
(8, 8, 'Jobs', 'websites design', '9-12-17', 'dfsd', '16000', 'skill for this '),
(9, 1, 'Vehicles', 'motor cycle', '1-12-17', 'jfjsdf', '22000', 'model:Hunda'),
(10, 3, 'Sports_Equipment', 'bat', '1-12-17', 'jidvhdv', '450', 'model:ss'),
(11, 8, 'Books', 'java language', '12-12-17', '', '225', '4th edition'),
(13, 6, 'Clothes', 't-shirt', '11-12-17', 'uujjbjb', '150', 'color-yollow'),
(14, 11, 'Vehicles', 'Bike cycle', '10-12-17', '', '4500', 'being human'),
(15, 7, 'Electronics', 'Camera', '11-12-17', '', '11000', 'model :nikon '),
(16, 4, 'Clothes', 'Panjabi', '13-12-17', '', '700', 'Color : Blue'),
(17, 14, 'Home_Goods', 'Table', '14-12-17', '', '900', 'Small size'),
(18, 3, 'Jobs', 'Web Development', '11-10-17', '', '20000', 'Bsc in Cse completed'),
(19, 10, 'Sports_Equipment', 'Dumble', '16-12-17', '', '400', '5kg'),
(20, 6, 'Sports_Equipment', 'Football', '18-11-17', '', '900', 'Deer 5'),
(21, 6, 'Sports_Equipment', 'Badminton Bat', '12-10-17', '', '450', 'Cobra'),
(22, 7, 'Books', 'Economics', '13-12-17', '', '290', '10th Edition'),
(23, 4, 'Services', 'Laptop servicing', '14-12-17', '', '500', 'truely servicing '),
(24, 3, 'Homes', '1 Rooms', '12-10-17', '', '5000', '2 seat'),
(26, 4, 'Home_Goods', 'Computer Table', '19-12-17', '', '1200', 'Size: Medium'),
(27, 15, 'Services', 'Mobile services', '11-12-17', '', '200', 'Flash'),
(28, 14, 'Electronics', 'Electric Gitar', '12-12-17', '', '15000', 'Color: Blue');

-- --------------------------------------------------------

--
-- Table structure for table `myaccount`
--

CREATE TABLE `myaccount` (
  `User_id` int(11) NOT NULL,
  `User_name` varchar(30) NOT NULL,
  `User_gmail` varchar(30) NOT NULL,
  `User_university` varchar(30) NOT NULL,
  `User_varsityID` varchar(30) NOT NULL,
  `User_phone` varchar(30) NOT NULL,
  `User_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myaccount`
--

INSERT INTO `myaccount` (`User_id`, `User_name`, `User_gmail`, `User_university`, `User_varsityID`, `User_phone`, `User_password`) VALUES
(1, 'sk', 'sk@gmail.com', 'uiu', '0123', '01234567899', '34'),
(2, 'skba', 'skba@gmail.com', 'uiu', '0234', '01234567888', 'ice'),
(3, 'sabit', 'ss@e.com', 'aiub', '9231', '01233367899', 'hi'),
(4, 'haider', 'ha@g.com', 'nsu', '6475', '01273456789', '9292'),
(5, 'admin', 'admin', 'admin', '2347', '01323456789', '123'),
(6, 'ashis', 'as@df.com', 'brac', '0162', '01313657489', '3434'),
(7, 'aurnab', 'aur@gmail.com', 'uiu', '2345', '01423451234', 'aur123'),
(8, 'hi', 'hi@live.com', 'du', '9182', '01122323246', '8989'),
(9, 'User', 'user', 'us', '9292', '01186868686', '78'),
(10, 'Raju', 'raju@uiu.com', 'uiu', '1928', '01228337474', '1239'),
(11, 'raja', 'raja@gmail.com', 'sust', '8765', '01476253674', '0011'),
(12, 'Tamim', 'rana@gmail.com', 'buet', '8005', '01176289674', '067'),
(13, 'de', 'dr', 'sd', '5643', '01234343434', '123'),
(14, 'dark', 'dark@gm.com', 'iu', '9876', '01234554433', '678'),
(15, 'sabit', 'sabit@gmail.com', 'uiu', '011133056', '1234567790', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Item_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `myaccount`
--
ALTER TABLE `myaccount`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `Item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `myaccount`
--
ALTER TABLE `myaccount`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `myaccount` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
