-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 11:55 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artificial_jewellery_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `detail` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `detail`) VALUES
(1, 'neekles', 'new neekles'),
(2, 'ring', 'ring_product'),
(3, 'bangles', 'bangles_product_name'),
(4, 'earing', 'earing_product_name'),
(5, 'all_products', 'all_products_name');

-- --------------------------------------------------------

--
-- Table structure for table `cont`
--

CREATE TABLE `cont` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(225) NOT NULL,
  `commend` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cont`
--

INSERT INTO `cont` (`id`, `name`, `phone`, `email`, `commend`) VALUES
(1, 'yash', '7414864128', 'yash@gmail.com', 'n'),
(2, 'ritik', '324342342', 'y@gmail.com', 'nice'),
(5, 'yash', '74148663', 'y@gmail.com', 'n'),
(9, 'Shubham', '9897079577', 'ss866299@gmail.com', 'improve your website');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `country` varchar(30) DEFAULT NULL,
  `phone` varchar(225) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `email`, `name`, `address`, `country`, `phone`, `state`, `city`) VALUES
(26, 'y@gmail.com', 'yash', 'yefdfdfsdb', '3', '7414864128', 'rah', 'ajmer'),
(28, 'e@gmail.com', 'rajeec', 'ager', '2', '123456789', 'axfh', 'asda'),
(29, 'i@gmail.com', 'opas', 'ppppfffghf', '3', '2000553597', 'asfsfsasdgb', 'ajmera'),
(30, 'ajmera1203@gmail.com', 'yash', '123asdfsda', '3', '7414864126', 'svvvvvv', 'ajnnn');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `qu` int(11) NOT NULL,
  `orders_address` varchar(40) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `cus_id`, `name`, `price`, `amount`, `qu`, `orders_address`, `img`) VALUES
(1, 29, 'opas', 265, 795, 3, 'ppppfffghf', 'image/64.jpg'),
(2, 30, 'yash', 265, 795, 3, '123asdfsda', 'image/64.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `Detail_Id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_Id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `price` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `detail` varchar(60) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `size` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_Id`, `name`, `price`, `sort`, `detail`, `Category_id`, `size`, `img`) VALUES
(1, 'Feminine Colorful Set', 387, 5, 'Gold Plated and Artificial Stones', 5, 'Free Size', 'image/42.jpg'),
(2, 'Feminine Elegant Alloy Stone Set', 354, 5, 'It has 1 Piece of Necklace, 1 Pair of Earring With 1 1 Pair ', 5, 'Free Size', 'image/81.jpg'),
(3, 'Twinkling Elegant Beads Bangles', 220, 5, 'Gold Plated and Artificial Stones', 5, 'Free Size', 'image/60.jpg'),
(4, 'Pearl & Stone Set ', 353, 5, 'It has 1 Piece of Necklace, 1 Pair of Earring ', 5, 'Free Size', 'image/32.jpg'),
(5, 'Diva Stylish Set', 200, 5, 'Gold Plated and Artificial Stones and Necklace, Earrings', 5, 'Free Size', 'image/70.jpg'),
(6, 'Fancy Alloy Women\'s Choker Necklace', 345, 5, 'Gold Plated and Artificial Stones', 5, 'Free Size', 'image/84.jpg'),
(7, 'Feminine Colorful Set', 387, 5, 'Gold Plated and Artificial Stones', 5, 'Free Size', 'image/44.jpg'),
(8, 'Fashionable Metal Earing', 146, 5, 'Brass Plated and Artificial Beads and Drop Earring', 5, 'Free Size', 'image/55.jpg'),
(9, 'Trendy Designed Set', 265, 5, 'Beads & Artificial Stones', 5, 'Free Size', 'image/64.jpg'),
(10, 'vintage Set', 232, 5, 'It has 1 Piece of Necklace, 1 Piece of Bracelet,1 Piece of F', 5, 'Free Size', 'image/79.jpg'),
(11, 'A.D.Earing', 213, 5, 'American Diamond and Drop Earring', 5, 'Free Size', 'image/117.jpg'),
(12, 'Trendy Women\'s Mangalsutras', 156, 5, 'Artificial Stones & Beads & Single Strand Mangalsutras', 5, 'Free Size', 'image/92.jpg'),
(13, 'Alloy Clavicle Chain Set', 269, 5, 'Arzonai Hot Sale Lrregular Metal Piece Chain Multitlayer Nec', 1, 'Free Size', 'GiF\\Neekles\\1.jpg'),
(14, 'Crystal Necklace ', 349, 5, 'Gold Plated Combo Of 2 Shinimg Crystal Necklace Set For Girl', 1, 'Free Size', 'GiF\\Neekles\\2.jpg'),
(15, 'Beautiful Chowker Set', 230, 5, 'Brass & Gold Plated & Artificial Beads ', 1, 'Free Size', 'GiF\\Neekles\\29.jpg'),
(16, 'Traditional Ethnic Temple Jewellery  Set', 469, 5, 'Traditional Ethnic Temple Jewellery Combo of Goddess Laxmi &', 1, 'Free Size', 'GiF\\Neekles\\26.jpg'),
(17, 'Traditional Oxizided Antique Necklace', 470, 5, 'Kds Traditional Oxizided Antique Necklace Set for Girls ', 1, 'Free Size', 'GiF\\Neekles\\10.jpg'),
(18, 'Beautuful Krishna Design Necklace', 420, 5, 'Gold Plated & Crystals & Base Metal', 1, 'Free Size', 'GiF\\Neekles\\13.jpg'),
(19, 'Elite Bejeweled Women Necklace ', 300, 5, 'Elite Bejeweled Women Necklace ', 1, 'Free Size', 'GiF\\Neekles\\14.jpg'),
(20, 'Arozonai Hip Hop Double Chain Set', 269, 5, 'Arozonai Hip Hop Double Chain Necklace & Punk Rock Circle Ch', 1, 'Free Size', 'GiF\\Neekles\\17.jpg'),
(21, 'Kds Style Multi Colour Oxizided beaded Set Comboo', 370, 5, 'Kds Style Multi Colour Oxizided beaded Comboo Necklace Set', 1, 'Free Size', 'GiF\\Neekles\\18.jpg'),
(22, 'Elite Bejeweled Women Necklace ', 300, 5, 'Elite Bejeweled Women Necklace ', 1, 'Free Size', 'GiF\\Neekles\\19.jpg'),
(23, 'Kds Style Multi Colour Oxizided beaded Set Comboo', 379, 5, 'Kds Style Multi Colour Oxizided beaded Comboo Necklace Set', 1, 'Free Size', 'GiF\\Neekles\\20.jpg'),
(24, 'Beautuful Chowker Set', 225, 5, 'Bese & Gold Plated & Artificial Stones', 1, 'Free Size', 'GiF\\Neekles\\27.jpg'),
(25, 'Alloy Silver Plated Rings', 132, 5, 'Material Brass & Stone Work & It Has 1 Piece Of Finger Rings', 2, '8,9,10,11,12,13,14,16,17', 'GiF\\ring\\33.jpg'),
(26, 'Stylish Rings', 140, 5, 'Material & Stone Work', 2, 'Free Size', 'GiF\\ring\\52.jpg'),
(27, 'Women\'s Alloy Gold Plated Rings', 207, 5, 'Material & Stone Work', 2, 'Adjustable(Free size)', 'GiF\\ring\\42.jpg'),
(28, 'Alloy Silver Plated Rings', 383, 5, 'Material & Stone Work', 2, '12,16.5,17', 'GiF\\ring\\48.jpg'),
(29, 'Trendy Metal Earing', 179, 5, 'Material & Stone Work/Beads ', 4, 'Free Size', 'GiF\\ring\\74.jpg'),
(30, 'Silver Plated Solitaire Adjustable Rings', 390, 5, 'Silver Plated Solitaire Adjustable Couple Ring for Men & Wom', 2, '9,10,11,12,13,16', 'GiF\\ring\\111.jpg'),
(31, 'twinkling american diamond women', 276, 5, 'American Diamond Work', 3, 'Free Size', 'GiF\\Bangles\\63.jpg'),
(32, 'beautiful american diamond bangles', 273, 5, 'American Diamond Work', 3, 'Free Size', 'GiF\\Bangles\\64.jpg'),
(33, 'Beautiful  women \'s copper hathful bangles', 137, 5, 'Arzonai Hot Sale Lrregular Metal Piece Chain Multitlayer Nec', 3, 'Free Size', 'GiF\\Bangles\\66.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `Id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `passwords` varchar(15) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `phone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`Id`, `name`, `passwords`, `e_mail`, `phone`) VALUES
(78, 'riti', 'yash', 'yq@gmail.com', '741456325');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cont`
--
ALTER TABLE `cont`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `cus_id` (`cus_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`Detail_Id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_Id`),
  ADD KEY `Category_id` (`Category_id`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `passwords` (`passwords`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cont`
--
ALTER TABLE `cont`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `Detail_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`Id`);

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`Id`),
  ADD CONSTRAINT `orders_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_Id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
