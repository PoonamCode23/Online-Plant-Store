-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 08:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('poonam55', 'poonam@123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category_title`) VALUES
(1, 'Plants'),
(3, 'Seeds'),
(4, 'Vase'),
(5, 'Plant Care'),
(6, 'Gifts'),
(7, 'herbs');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_ID` int(100) NOT NULL,
  `Full_Name` varchar(100) DEFAULT NULL,
  `Phone_No` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_ID`, `Full_Name`, `Phone_No`, `Address`) VALUES
(1, 'Poonam Kulung', '2147483647', 'Kritipur'),
(2, 'James Fia', '986753326', 'Michigan'),
(3, 'Diana Si', '8934809324', 'Kathmandu'),
(4, 'Poonam Kulung', '98767162535', 'Kritipur'),
(5, 'Poonam Kulung', '9876433556', 'Kritipur'),
(6, 'hemanta', '9841593676', 'Kathmandu');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_ID` int(11) NOT NULL,
  `Product_Name` varchar(100) NOT NULL,
  `Product_Subcategory` varchar(50) NOT NULL,
  `image_url` text NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_ID`, `Product_Name`, `Product_Subcategory`, `image_url`, `Price`) VALUES
(1, 'Marigold Seeds', 'Summer Flowers', '', 'Rs. 500'),
(2, 'Hemp Seed', 'Herb Seed', '', 'Rs. 500');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `username`, `email`, `password`, `repassword`) VALUES
(1, 'Risa', 'risa@gmail.com', 'risa123', 'risa123'),
(2, 'Hemanta', 'helibebo@gmail.com', 'helibebo123', 'helibebo123'),
(3, 'Poonam', 'poonam@gmail.com', 'poonam@123', 'poonam@123'),
(4, 'Michal', 'michal@gmail.com', 'michal@123', 'michal@123');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Help_Id` int(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Country` text NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Help_Id`, `Name`, `Email`, `Phone`, `Country`, `Date`, `Time`, `Message`) VALUES
(1, 'Poonam Kulung', 'fabulouspoonam35@gmail.com', '2147483647', 'Nepal', '2022-12-21', '14:00:00.000000', 'My plants are turning yellowish.'),
(2, 'Rama Mishra', 'rama@gmail.com', '2147483647', 'India', '2022-12-25', '15:00:00.000000', 'My plants are not growing despite using fertilizers.'),
(3, 'Milaan Mi', 'mi@gmail.com', '9866328781', 'China', '2022-12-27', '23:06:00.000000', 'How do I make my own compost?'),
(4, 'Poonam Kulung', 'poonam@gmail.com', '98633773749', 'Nepal', '2022-12-27', '17:50:00.000000', 'How do I start organic farming?\r\n'),
(5, 'Rama Shrestha', 'rama@gmail.com', '9876543211', 'Nepal', '2022-12-27', '17:10:00.000000', 'I need to have my own organic garden.'),
(6, 'John Doe', 'doe@gmail.com', '6237627316', 'India', '2022-12-23', '02:15:00.000000', 'My flowering plants are not blooming.\r\n'),
(7, 'Poonam Kulung', 'poonam123@gmail.com', '9861345277', 'Nepal', '2022-12-20', '14:15:00.000000', 'My flowering plants are not blooming well.'),
(8, 'Poonam Kulung', 'poonam123@gmail.com', '98765423455', 'Nepal', '2022-12-18', '17:25:00.000000', 'I wanna grow my own organic garden.'),
(9, 'poonamkulung', 'uttamneupane75@gmail.com', '9841593676', 'Nepal', '2022-12-27', '12:09:00.000000', 'HI how are you I was wondering if you knew how much plants grow fruits\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `SN` int(11) NOT NULL,
  `Sname` varchar(30) NOT NULL,
  `Cname` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`SN`, `Sname`, `Cname`) VALUES
(2, 'Air Purifying Plants', 'Plants'),
(3, 'Indoor Plants', 'Plants'),
(4, 'Flowering Plants', 'Plants'),
(5, 'Cacti and succulents', 'Plants'),
(6, 'Leafy Vegetables', 'Seeds'),
(7, 'Winter Flowers', 'Seeds'),
(8, 'Summer Flowers', 'Seeds'),
(9, 'Herb Seed', 'Seeds'),
(10, 'Plastic Pots', 'Vase'),
(11, 'Ceramic Pots', 'Vase'),
(12, 'Plant Growth', 'Plant'),
(13, 'Garden Tools', 'Plant'),
(14, 'Climbing Plants', 'Plants'),
(15, 'Clay Pot', 'Vase');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_ID` int(100) NOT NULL,
  `Plant_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_ID`, `Plant_Name`, `Price`, `Quantity`) VALUES
(1, 'Rose Plant', 450, 3),
(2, 'Rose Plant', 450, 3),
(3, 'Portulanca Plant', 500, 2),
(4, 'Bush Allamanda', 300, 2),
(5, 'Euphorbia Plant', 450, 5),
(6, 'Peacock Plant', 550, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Help_Id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`Order_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Help_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `Order_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
