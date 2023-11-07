-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220528.cc1733a80d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 02:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-comm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_contact`, `admin_job`, `admin_about`) VALUES
(1, 'CBYAT', 'cbyat123@gmail.com', 'cbyat@pass', '8171637833', 'Manages the website.', 'I am admin.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'MEN', 'This category includes all the products related to men like clothing, footwears, wallets and other accessories.'),
(2, 'WOMEN', 'This category has all the products related to women like clothes, footwears, handbags and other accessories.'),
(3, 'KIDS', 'This category includes clothes, footwears and other accessories belongings to kids.'),
(4, 'Electronics', 'All the electronic items are present in this category.\r\n'),
(5, 'OTHERS', 'Home Decoratives , Crockries , Bedsheets and other home accessories are present in this category. ');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_contact` varchar(10) NOT NULL,
  `customer_city` text NOT NULL DEFAULT 'Bulandshahr',
  `customer_address` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_contact`, `customer_city`, `customer_address`, `customer_ip`) VALUES
(3, 'Meenu', 'meenu123@gmail.com', '123456', '9719705005', 'Bulandshahr', 'Ananta Enclave', '::1'),
(4, 'Avni Kansal', 'avni6572k@gmail.com', 'Avni@1', '8976483223', 'Bulandshahr', '172, Avas Vikas I, D.M. Road', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `product_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(17, 3, 19, 799, 6719939, 1, 'Medium', '2022-08-11 15:16:45', 'Complete'),
(19, 3, 35, 599, 3435546, 1, 'Large', '2022-08-11 15:17:02', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(100) NOT NULL,
  `invoice_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(100) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_id`, `amount`, `payment_mode`, `ref_no`, `payment_date`) VALUES
(2, 421152480, 200, '', 112322, '2022-07-16'),
(3, 79834671, 799, '', 12133, '2022-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`) VALUES
(13, 4, 3, '2022-08-09 17:03:29', 'Slip-On-Clogs', 'Kids_crocs1.jpg', 'kids_crocs2.jpg', 'kids_crocs3.jpg', 499, '   These  crocks are very comfortable and attractive for kids.The seller of this product is Bombay Shoes.', 'crocs'),
(14, 4, 3, '2022-08-09 17:03:44', 'Velcro Sneakers', 'Kids_shoes1.jpg', 'Kids_shoes2.jpg', 'Kids_shoes3.jpg', 399, ' These sneakers are for both girls and boys. The seller of this product is Bombay Shoes.', 'shoes'),
(15, 3, 3, '2022-08-10 07:07:48', 'Trolley Bag', 'Kids_trolley1.jpg', 'Kids_trolley2.jpg', 'Kids_trolley3.jpg', 1999, '  This trolley can be used by kids for travelling purposes. They can bring this anywhere very comfortably. The seller of this product is Sharma Bags.', 'trolley'),
(16, 4, 1, '2022-08-09 17:04:14', 'Sports Shoes', 'Men_shoes1.jpg', 'Men_shoes2.jpg', 'Men_shoes3.jpg', 525, ' These are sports shoes for men can be used for running, walking, dancing etc. The seller of this product is Agarwal Shoe Centre.', 'sports shoes'),
(17, 4, 1, '2022-08-11 07:10:39', 'Slippers For Men', 'Men_slippers1.jpg', 'Men_slippers2.jpg', 'Men_slippers3.jpg', 499, '  These are casual slippers. The seller of this product is Agarwal Shoe Centre.', 'slippers'),
(18, 4, 2, '2022-08-09 17:04:41', 'Slippers for Girls', 'Women_slippers1.jpg', 'Women_slippers2.jpg', 'Women_slippers3.jpg', 199, ' These are comfortable slippers for daily purposes. The seller of this product is Bombay Shoe Centre.', 'slippers'),
(19, 4, 2, '2022-08-10 08:20:28', 'Women Black Heels ', 'Heels2.jpg', 'Heels1.jpg', 'Heels3.jpg', 799, 'These are attractive heels for party purposes. The seller of this product is Cheen Boot House.', 'heels'),
(20, 3, 2, '2022-08-10 07:03:53', 'Women Sling Bag', 'Purse1.jpg', 'Purse2.jpg', 'Purse3.jpg', 599, 'This is an attractive floral print design sling bag. The seller of this product is Sharma Bags.', 'handbag'),
(21, 3, 2, '2022-08-10 06:59:27', 'Girls Backpack', 'Backpack1.jpg', 'Backpack2.jpg', 'Backpack3.jpg', 499, 'This is cute style waterproof backpack  for girls. The seller of this product is Sharma Bags.', 'backpacks'),
(23, 4, 1, '2022-08-10 06:53:45', 'Lace Up for Men', 'BlackShoes1.jpg', 'BlackShoes2.jpg', 'BlackShoes3.jpg', 800, '   These are the party wear shoes for men. These are very attractive and shining. The seller of this product is Agarwal Shoe Centre.', 'shoes'),
(24, 1, 2, '2022-08-10 06:55:33', 'Kurta and Palazzo Set', 'Kurta_Plazo2.jpg', 'Kurta_Plazo1.jpg', 'Kurta_Plazo3.jpg', 1500, '      This is a kurta and palazzo set with floral print. It curates festive look when wear with earrings and juttis. The seller of this product is Saheli Garments.', 'kurta'),
(26, 1, 2, '2022-08-11 07:08:23', 'Casual Top For Women', 'Top1.jpg', 'Top2.jpg', 'Top3.jpg', 699, '   This is a regular sleeves top with round neck. Style it with jeans and feather earrings. The seller of this top is Jain Garments.', 'Top'),
(29, 1, 2, '2022-08-10 07:36:03', 'Women Night Suit Set ', 'NightSuitForWomen1.jpg', 'NightSuitForWomen2.jpg', 'NightSuitForWomen3.jpg', 450, ' This is multicolor floral print very comfortable  night suit. The seller of this product is Sharma Night Suits.', 'Night Suit'),
(30, 1, 1, '2022-08-10 07:44:51', 'Men Kurta and Churidar', 'Men_Kurta1.jpg', 'Men_Kurta2.jpg', 'Men_Kurta3.jpg', 799, ' This can be worn in poojas, festivals gives ethnic look and is very comfortable. The seller of this product is Raja Maharaja.', 'Kurta'),
(31, 1, 1, '2022-08-10 07:51:01', 'Men Casual Shirt', 'Shirt1.jpg', 'Shirt2.jpg', 'Shirt3.jpg', 599, ' This is pure cotton shirt with floral print gives casual look. The seller of this product is Peter England.', 'Shirt'),
(32, 1, 1, '2022-08-10 07:56:27', 'Men Light Green T-Shirt', 'T-Shirt1.jpg', 'T-Shirt2.jpg', 'T-Shirt3.jpg', 550, ' This is pure cotton T-shirt with Polo Neck for men. The seller of this product is Cop. ', 'T-shirt'),
(33, 1, 1, '2022-08-10 08:01:44', 'Slim Fit Men Trouser', 'Trouser1.jpg', 'Trouser2.jpg', 'Trouser3.jpg', 899, ' This is a casual wear trouser for men. The seller of this product is Cop.', 'Trouser'),
(34, 3, 1, '2022-08-11 07:07:19', 'Casual Leather Belt ', 'Belt1.jpg', 'Belt2.jpg', 'Belt3.jpg', 350, ' This belt can be worn in party, casually and formally. The seller of this product is HD Mart.', 'Belt'),
(35, 1, 2, '2022-08-10 09:03:16', 'Women Dark Blue Dress', 'Dress1.jpg', 'Dress2.jpg', 'Dress3.jpg', 599, ' It is a foil printed skater dress. This is very rich and  comfortable for skin can be wore with a pair of Boot and Sneakers. The seller of this product is Sindhi Garments.', 'Dress'),
(36, 1, 2, '2022-08-11 13:54:51', 'Floral Print Saree', 'Saree1.jpg', 'Saree2.jpg', 'Saree3.jpg', 899, ' This beautiful  Saree features a classy Digital Print Work all over, which makes it a smart pick for all occasions. The seller of this product is Mohini Sarees. ', 'Saree'),
(37, 1, 3, '2022-08-11 06:43:07', 'Boys Pure Cotton T-Shirt', 'T-ShirtK1.jpg', 'T-ShirtK2.jpg', 'T-ShirtK3.jpg', 299, 'This is pure cotton t-shirt with polo neck for boys. The seller of this product is Kids Wear. ', 'T-shirt'),
(38, 1, 3, '2022-08-11 07:06:25', 'Kurta and Pyjama Set', 'Kids_kurta1.jpg', 'Kids_kurta2.jpg', 'Kids_kurta3.jpg', 799, '  This is pure cotton Kurta and Pyjama Set,  ideal for festive occasion. It gives Ethnic look to the little. The seller of this product is Kids Wear.', 'Kurta'),
(39, 2, 5, '2022-08-11 08:04:54', 'Grocery Containers', 'Container1.jpg', 'Container2.jpg', 'Container3.jpg', 499, 'These are transparent, air-tight multiple size containers for keeping grocery items. The seller of this product is HD Mart.', 'Container'),
(41, 5, 4, '2022-08-24 04:01:36', 'Boat Earphones', 'Earphones1.jpg', 'Earphones2.jpg', 'Earphones3.jpg', 499, '  These are black-coloured, lightweight, foldable, wired earphones with 3.5mm Jack has 1 year Warranty Card.The seller of this product is Himanshu Mobile Gallery.', 'Earphones'),
(42, 1, 2, '2022-08-11 13:54:14', 'Lehenga Choli ', 'Lehenga_Choli1.jpg', 'Lehenga_Choli2.jpg', 'Lehenga_Choli3.jpg', 1999, '  This is lightweight and comfortable can be worn in Casual, Traditional, Festival, Wedding or Ceremonies. The seller of this product is Menka Saree Showroom.', 'lehenga choli'),
(44, 2, 5, '2022-08-24 03:53:35', 'Radha Krishna Murti', 'Murti1.jpg', 'Murti2.jpg', 'Murti3.jpg', 499, 'This is very beautiful Radha Krishna Murti for decorative purpose. The seller of this product is Jain Gift Palace. ', 'Murti'),
(45, 5, 4, '2022-08-24 09:22:18', 'Redmi 9 Activ', 'redmi9 1.jpg', 'redmi9 2.jpg', 'redmi9 3.jpg', 11000, ' Redmi 9 Activ (Coral Green, 4GB RAM, 64 GB storage). The seller of this product is Himanshu Mobile Gallery', 'Phone'),
(46, 2, 5, '2022-08-24 09:35:02', 'Wall Clock', 'clock2.jpg', 'clock1.jpg', 'clock 3.jpg', 700, 'Arthub Analog 40.64 cm X 33 cm wall clock (Multicolor, with Glass, Standard).The seller of this product is Khanna Watch Company.', 'Clock'),
(47, 2, 5, '2022-08-24 09:41:23', 'Woonden Shelf', 'wooden self 1.jpg', 'wooden self 2.jpg', 'wooden self 3.jpg', 649, ' Future Generation V Group Wooden wall shelf ( Number o f shelf-4, Color-Brown). The seller of this product is Wood Crafts.', 'Wooden Self'),
(48, 2, 5, '2022-08-24 11:00:39', 'Double Bedsheet', 'Bedsheet 1.jpg', 'bedsheet 2.jpg', 'bedsheet 3.jpg', 599, '  Chhavi India 210 TC Microfiber Double Printed flat bedsheet (Pack of 1, sky natural).The seller of this product is Ghar shringar.', 'Bedsheet'),
(49, 3, 1, '2022-08-24 11:09:19', 'Wallet', 'wallet1.jpg', 'wallet 2.jpg', 'wallet 3.jpg', 230, ' Men  Casual Tan, Black Artifical Leather Wallet-Mini (10 card Slots). The seller of this product is Hari Kishan.', 'Wallet');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Clothing', 'This category includes clothes for men, women and kids.'),
(2, 'Home Accessories', 'This category includes various home decoratives, crockeries, bedsheets, etc useful for home.'),
(3, 'Bags and Wallets', 'This category includes all types of bags for men, women and kids. Wallets for men, purses, handbags  for women and school bags for kids are also present.'),
(4, 'Footwears', 'This category includes footwears for all men, women and kids.           '),
(5, 'Laptops/Phones/Earphones', 'All the electronic items like phones, laptops, earphones, headphones etc can be found in this category.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_name`, `slider_image`) VALUES
(1, 'slider number 1', 'slider1.jpg'),
(2, 'slider number 2', 'slider2.jpg'),
(6, 'slider number 4', 'slider4.jpg'),
(7, 'slider number 3', 'slider3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `p_cat_id` (`p_cat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `customer_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`p_cat_id`) REFERENCES `product_categories` (`p_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



