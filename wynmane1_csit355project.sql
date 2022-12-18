-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2022 at 05:54 PM
-- Server version: 5.7.40
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wynmane1_csit355project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Minit` char(1) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Fname`, `Minit`, `Lname`, `username`, `password`, `user_type`) VALUES
(2, 'Eddie', 'S', 'Wynman', 'Admin1', 'Admin123', 'admin'),
(3, 'Baian', 'G', 'Ghrayeb', 'Admin2', 'Admin321', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Pnum` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Pnum`) VALUES
('166');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Cust_id` bigint(20) NOT NULL,
  `Fname` varchar(15) NOT NULL,
  `Minit` char(1) DEFAULT NULL,
  `Lname` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(100) NOT NULL,
  `street_add` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` varchar(5) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Cust_id`, `Fname`, `Minit`, `Lname`, `username`, `email`, `password`, `street_add`, `city`, `state`, `zip`, `user_type`) VALUES
(17, 'Baian', 'A', 'Ghrayeb', 'BaianG', 'baian@email.com', '895f35162eb40a12ea7c07b59558e447', '511 Chestnut Street', 'Ridgefield', 'New Jersey', '07657', ''),
(18, 'Eddie', 'S', 'Wynman', 'EddieW', 'edward.wynman@gmail.com', 'cacc2515ee2ffa72392b40ebc8ad9cb8', '123 Street', 'Bogota', 'NJ', '07603', '');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `Dname` varchar(15) NOT NULL,
  `Dnums` int(11) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`Dname`, `Dnums`, `location`) VALUES
('Tops', 1, 'New York, NY'),
('Pants', 2, 'New York, NY'),
('Footwear', 3, 'Miami, FL'),
('Jewelry', 4, 'Huston, TX'),
('Accessories', 5, 'New York, NY');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Emp_id` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Minit` char(1) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Street_add` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` varchar(5) DEFAULT NULL,
  `SSN` varchar(9) NOT NULL,
  `Birthdate` varchar(50) DEFAULT NULL,
  `Dnumber` varchar(1) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Emp_id`, `Fname`, `Minit`, `Lname`, `email`, `username`, `password`, `Street_add`, `city`, `state`, `zip`, `SSN`, `Birthdate`, `Dnumber`, `user_type`) VALUES
(2, 'Sarah', 'J', 'Stewart', 'sstewart@employee2.com', 'Sstewart2', '16a6ca3a73f7f641ec17a7fdfe450ebe', '35 Summit Circle', 'Alpine', 'New Jersey', '89789', '121553434', '06/21/2001', '3', 'employee'),
(1, 'Dave', 'I', 'Roberts', 'droberts@employee.com', 'DRobberts1', 'd3d73db423372e0bea89ca659ea9d115', '78 Grand Avenue', 'Ridgefield Park', 'New Jersey', '07660', '12344555', '01/19/1989', '1', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_Num` int(11) NOT NULL,
  `Cust_id` varchar(100) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_Num`, `Cust_id`, `Fname`, `Lname`, `email`, `address`, `address2`, `country`, `state`, `zipcode`, `order_status`, `created_at`) VALUES
(31, '17', 'Edward', 'Wynman', 'edward.wynman@gmail.com', '210 Cypress Avenue', '', 'United States', 'NJ', '07603', 'confirmed', '12 - 14 - 2022 19:25'),
(26, '17', 'Edward', 'Wynman', 'edward.wynman@gmail.com', '210 Cypress Avenue', '', 'United States', 'NJ', '07603', 'confirmed', '10 - 10 - 2022 1:25'),
(30, '18', 'Edward', 'Wynman', 'edward.wynman@gmail.com', '210 Cypress Avenue', '', 'United States', 'NJ', '07603', 'confirmed', '12 - 2 - 2022 9:25'),
(27, '18', 'Edward', 'Wynman', 'edward.wynman@gmail.com', '210 Cypress Avenue', '', 'United States', 'NJ', '07603', 'confirmed', '12 - 12 - 2022 10:25'),
(28, '18', 'Edward', 'Wynman', 'edward.wynman@gmail.com', '210 Cypress Avenue', '', 'United States', 'NJ', '07603', 'confirmed', '12 - 1 - 2022 11:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Pnum` bigint(20) NOT NULL,
  `Pname` varchar(250) NOT NULL,
  `Dnum` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `store_name` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Pnum`, `Pname`, `Dnum`, `price`, `quantity`, `store_name`) VALUES
(166, 'Simple Necklace', 4, '6.99', 96, 'Jewel Boutique'),
(167, 'Bracelet', 4, '15.99', 97, 'Jewel Boutique'),
(168, 'Classic Ring', 4, '4.99', 99, 'Jewel Boutique'),
(169, 'Cartoon Socks', 5, '2.99', 99, 'Anytime Accessories'),
(170, 'Tote Bag', 5, '14.99', 99, 'Anytime Accessories'),
(171, 'Charm Keychain', 5, '4.99', 100, 'Anytime Accessories'),
(172, 'Lanyard Keychain', 5, '6.99', 100, 'Anytime Accessories'),
(173, ' Coffee Mug', 5, '8.99', 99, 'Anytime Accessories'),
(174, ' Hat', 5, '12.99', 99, 'Anytime Accessories'),
(159, 'Crocs', 3, '35.99', 99, 'Shoes Absolute'),
(160, 'Low Tops', 3, '49.99', 99, 'Shoes Absolute'),
(161, 'Slides', 3, '19.99', 100, 'Shoes Absolute'),
(162, 'Rainboots', 3, '39.99', 100, 'Shoes Absolute'),
(163, 'Charm Necklace Set', 4, '9.99', 99, 'Jewel Boutique'),
(164, 'Leather Band Watch', 4, '12.99', 98, 'Jewel Boutique'),
(165, 'Earrings', 4, '4.99', 99, 'Jewel Boutique'),
(158, 'Slip-on Shoes', 3, '14.99', 98, 'Shoes Absolute'),
(157, 'High Top Shoes', 3, '50.99', 99, 'Shoes Absolute'),
(156, 'Leggings', 2, '11.99', 99, 'Cartoon Exchange'),
(154, 'Pajamas', 2, '9.99', 99, 'Cartoon Exchange'),
(155, 'Joggers', 2, '12.99', 99, 'Cartoon Exchange'),
(153, 'Shorts', 2, '12.99', 99, 'Cartoon Exchange'),
(152, 'Tie Dye Sweatpants', 2, '39.99', 99, 'Cartoon Exchange'),
(151, 'Sweatpants', 2, '16.99', 99, 'Cartoon Exchange'),
(149, 'Long Sleeve Shirt', 1, '17.99', 99, 'All-Star Disney'),
(150, 'Classic T-shirt', 1, '12.99', 98, 'All-Star Disney'),
(148, 'Holiday Sweater', 1, '24.99', 99, 'All-Star Disney'),
(146, 'Cali T-shirt', 1, '14.99', 99, 'All-Star Disney'),
(147, 'Crewneck', 1, '30.99', 99, 'All-Star Disney'),
(145, 'Hoodie', 1, '34.99', 99, 'All-Star Disney'),
(175, 'Iphone case', 5, '19.99', 99, 'Anytime Accessories'),
(176, 'Dog Toy', 5, '10.99', 99, 'Anytime Accessories'),
(177, 'Dog Toy', 2, '10.99', 99, 'Eddie\'s Store'),
(178, 'Iphone case', 5, '19.99', 99, 'Anytime Accessories'),
(179, 'Laptop Bag', 5, '69.69', 100, 'Anytime Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `SellerID` varchar(20) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Minit` char(1) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Store_Name` varchar(100) NOT NULL,
  `Street_add` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` varchar(5) DEFAULT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`SellerID`, `Fname`, `Minit`, `Lname`, `email`, `username`, `password`, `Store_Name`, `Street_add`, `city`, `state`, `zip`, `user_type`) VALUES
('1', 'Edward', 'S', 'Wynman', 'edward.wynman@gmail.com', 'EWynman', 'de67ff3d9bc0f85c2fd5321b1cbb263f', 'Jewel Boutique', '210 Cypress Avenue', 'Bogota', 'NJ', '07603', 'seller'),
('2', 'Amy', 'I', 'Santos', 'ASantos@seller2.com', 'ASantos', 'd3c0adda500eb974580eaec86806c0e2', 'Shoes Absolute', '89 5th Avenue Apartment 218C', 'New York', 'New York', '10011', 'seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Pnum`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Cust_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`Dnums`),
  ADD UNIQUE KEY `Dname` (`Dname`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`SSN`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `SSN` (`SSN`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Emp_id` (`Emp_id`),
  ADD KEY `Dnumber` (`Dnumber`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_Num`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Pnum`),
  ADD KEY `Dnum` (`Dnum`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`Store_Name`,`SellerID`),
  ADD UNIQUE KEY `Store_Name` (`Store_Name`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Cust_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_Num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Pnum` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
