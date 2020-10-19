-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 12:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apitesting`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(120) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `created_date`, `status`) VALUES
(1, 'SAMSUNG', '2020-10-05 09:19:52', 1),
(2, 'DELL', '2020-10-05 09:20:00', 1),
(3, 'ASUS', '2020-10-05 09:20:07', 1),
(4, 'HP', '2020-10-05 09:20:13', 1),
(5, 'LENOVO', '2020-10-05 09:20:21', 1),
(6, 'APPLE MAC', '2020-10-05 09:20:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(120) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `created_date`, `status`) VALUES
(1, 'Mobiles and Tablets', '2020-10-05 10:20:05', 0),
(2, 'Books', '2020-10-05 10:20:49', 0),
(3, 'Baby Products', '2020-10-05 10:21:04', 0),
(4, 'Home Furnishings', '2020-10-05 10:21:17', 0),
(5, 'Men', '2020-10-05 10:23:36', 0),
(6, 'Women', '2020-10-05 10:23:51', 0),
(7, 'TVs & Appliances', '2020-10-05 10:24:08', 0),
(8, 'Electronics', '2020-10-05 10:24:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `state_id`, `name`, `status`) VALUES
(1, 3, 'hyderabd', '1'),
(2, 3, 'chenni', '1'),
(3, 4, 'banglore', '1'),
(4, 4, 'mumbai', '1'),
(5, 2, 'kochin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country`, `create_date`, `status`) VALUES
(1, 'India', '2020-10-07 06:36:50', 0),
(2, 'United States', '2020-10-07 06:36:58', 0),
(3, 'Afganistan', '2020-10-07 06:37:03', 0),
(4, 'Russia', '2020-10-07 06:37:07', 0),
(5, 'Uzbekistan', '2020-10-07 06:37:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `country`, `state`, `city`, `pincode`, `created`, `modified`, `status`) VALUES
(1, 'Rajkumar', 'Ramineni', 'rajkumar@gmail.com', '9848604561', 'hyderabad, hitech city', 'India', 'Telnagana', 'Hyderabad', '500081', '2020-10-06 12:15:23', '0000-00-00 00:00:00', '1'),
(2, 'Raj', 'Kumar', 'abc@gmail.com', '9848604561', 'hyd', '', 'Telangana', '', '500016', '2020-10-13 01:37:59', '0000-00-00 00:00:00', '1'),
(3, 'Raj', 'kumar', 'abc@gmail.com', '9542346230', 'hyd', '1', 'Telangana', 'hyderabd', '500016', '2020-10-13 06:01:33', '0000-00-00 00:00:00', '1'),
(4, 'Raj', 'kumar', 'abc@gmail.com', '09542346230', 'hyd', '1', '', 'hyderabd', '500016', '2020-10-13 06:02:56', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `image_data`
--

CREATE TABLE `image_data` (
  `image_id` int(5) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_data`
--

INSERT INTO `image_data` (`image_id`, `image_name`, `image`) VALUES
(1, 'rajkumar', 'no_image.png');

-- --------------------------------------------------------

--
-- Table structure for table `multipleupload`
--

CREATE TABLE `multipleupload` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(245) NOT NULL,
  `image_3` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cus_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cus_name`, `product_name`, `price`, `created`, `modified`, `status`) VALUES
(1, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(2, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(3, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(4, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(5, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(6, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(7, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(8, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(9, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(10, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(11, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(12, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(13, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(14, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(15, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(16, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(17, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(18, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(19, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(20, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(21, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(22, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(23, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(24, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(25, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(26, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(27, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(28, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(29, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(30, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(31, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(32, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(33, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(34, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(35, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(36, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(37, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(38, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(39, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(40, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(41, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(42, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(43, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(44, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(45, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(46, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(47, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(48, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(49, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(50, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(51, 'Rajkumar', 'new order', '120', '2006-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(52, 'Rajkumar', 'new order', '120', '2007-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(53, 'Rajkumar', 'new order', '120', '2007-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(54, 'Rajkumar', 'new order', '120', '2007-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(55, 'Rajkumar', 'new order', '120', '2007-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(56, 'Rajkumar', 'new order', '120', '2007-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(57, 'Rajkumar', 'new order', '120', '2007-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(58, 'Rajkumar', 'new order', '120', '2007-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(59, 'Rajkumar', 'new order', '120', '2008-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(60, 'Rajkumar', 'new order', '120', '2009-10-20 00:00:00', '0000-00-00 00:00:00', '1'),
(61, 'Rajkumar', 'new order', '120', '2013-10-20 00:00:00', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders_old`
--

CREATE TABLE `orders_old` (
  `id` int(11) NOT NULL,
  `cus_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `sub_total` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `orders_id`, `product_id`, `quantity`, `sub_total`) VALUES
(7, 1, 1, 1, 1280.00),
(8, 1, 2, 1, 1500.00),
(9, 1, 1, 1, 1280.00),
(10, 1, 2, 1, 1500.00),
(11, 1, 1, 1, 1280.00),
(12, 1, 2, 1, 1500.00),
(13, 1, 1, 1, 1280.00),
(14, 1, 2, 1, 1500.00),
(15, 1, 3, 1, 650.00),
(16, 1, 1, 1, 1280.00),
(17, 1, 1, 1, 1280.00),
(18, 1, 2, 1, 1500.00),
(19, 1, 3, 1, 650.00),
(20, 1, 1, 1, 1280.00),
(21, 1, 2, 1, 1500.00),
(22, 1, 3, 1, 650.00),
(23, 1, 1, 1, 1280.00),
(24, 1, 2, 1, 1500.00),
(25, 1, 3, 1, 650.00),
(26, 1, 1, 1, 1280.00),
(27, 1, 2, 1, 1500.00),
(28, 1, 2, 1, 1500.00),
(29, 1, 1, 1, 1280.00),
(30, 1, 2, 1, 1500.00);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `images` varchar(150) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` varchar(255) NOT NULL,
  `brand_id` int(25) NOT NULL,
  `cat_id` int(25) NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `images`, `qty`, `price`, `brand_id`, `cat_id`, `status`, `created_date`) VALUES
(1, 'T Shirt', '1.jpg', 1, '1280 ', 1, 1, 1, '2020-09-30 10:22:26'),
(2, 'Jerkin jacket', '2.jpg', 1, '1500', 2, 2, 1, '2020-09-30 10:24:17'),
(3, 'Jean short', '3.jpg', 1, '650', 3, 3, 1, '2020-09-30 10:25:07'),
(4, 'back bag', '4.jpg', 1, '1000', 4, 4, 1, '2020-09-30 10:25:43'),
(5, 'Laptop Sleeve', '5.jpg', 2, '2000', 5, 5, 1, '2020-09-30 10:27:07'),
(6, 'Sofa ', '6.jpg', 2, '30000', 6, 6, 1, '2020-09-30 10:27:32'),
(7, 'Apple Smart Watch ', '7.jpg', 2, '5000', 7, 7, 1, '2020-09-30 10:28:08'),
(8, 'Wireless Headphone', '9.jpg', 3, '3000', 8, 8, 1, '2020-09-30 10:28:43'),
(9, 'test', '91.jpg', 1, '12', 0, 0, 1, '2020-10-07 08:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state` varchar(150) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state`, `create_date`) VALUES
(1, 1, 'Andhra Pradesh', '2020-10-07 08:08:27'),
(2, 2, 'Telnagana', '2020-10-07 08:08:30'),
(3, 3, 'Maharashta', '2020-10-07 08:08:32'),
(4, 4, 'Tamilnadu', '2020-10-07 08:08:35'),
(5, 5, 'Kerla', '2020-10-07 08:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `verification_key` varchar(100) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `gender`, `country`, `city`, `password`, `verification_key`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Rajkumar', 'Ramineni', 'rajkumarramineni19@gmail.com', 'Male', 'India', 'hyderabad', 'e10adc3949ba59abbe56e057f20f883e', '0d604eef91ea0a6492d95595d05a3958', 1, '2020-09-30 09:13:45', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_data`
--
ALTER TABLE `image_data`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `multipleupload`
--
ALTER TABLE `multipleupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_old`
--
ALTER TABLE `orders_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image_data`
--
ALTER TABLE `image_data`
  MODIFY `image_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `multipleupload`
--
ALTER TABLE `multipleupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `orders_old`
--
ALTER TABLE `orders_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders_old`
--
ALTER TABLE `orders_old`
  ADD CONSTRAINT `orders_old_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
