-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2021 at 08:45 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronic`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Real me'),
(2, 'Sumsung'),
(3, 'Voltas'),
(5, 'lg'),
(6, 'Philips'),
(10, 'sony'),
(11, 'Vivo'),
(12, 'Mi'),
(13, 'Whirlpool'),
(14, 'ALL'),
(15, 'oppo');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `imgUrl` text NOT NULL,
  `Product` text NOT NULL,
  `Description` text NOT NULL,
  `Price` double NOT NULL,
  `Category` text NOT NULL,
  `discount` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `imgUrl`, `Product`, `Description`, `Price`, `Category`, `discount`) VALUES
(87, 'laptop.png', 'Laptop', 'RedmiBook 15 e-Learning Edition i3 11th Gen + UHD Graphics 8GB RAM + 256GB SSD Charcoal Gray', 56699, 'Mi', '10'),
(88, 'laptop.png', 'laptop', 'Laptop Galaxy Tab S7 FE Wi-Fi (4GB)+ + 256GB SSD Charcoal Gray', 45599, 'Sumsung', '15'),
(89, 'laptop2.png', 'laptop', 'Laptop Galaxy Tab S7 FE Wi-Fi (4GB)+ + 256GB SSD Charcoal Gray', 78599, 'LG', '50'),
(90, 'laptop3.png', 'laptop', 'Laptop Galaxy Tab S7 FE Wi-Fi (4GB)+ + 256GB SSD Charcoal Gray', 95899, 'SONY', 'new'),
(92, 'laptop4.png', 'Laptop', ' Philips  (8GB/512GB SSD/Windows 10 64-bit/Dark Silver/1.35kg), 17Z90N ', 99999, 'Philips', '25'),
(93, 'laptop5.png', 'Laptop', ' 10th Gen Intel Core i7-1065G7 17-inch (43 cm) IPS WQXGA (2560X1600) Thin and Light Laptop (8GB/512GB SSD/Windows 10 64-bit/Dark Silver/1.35kg), 17Z90N ', 99999, 'Vivo', '10'),
(94, 'laptop6.png', 'Laptop', ' 10th Gen Oppo Neo 7 4G Black 17Z90N ', 65455, 'oppo', '35'),
(96, 'sumsung.png', 'Mobile', 'Galaxy M32 Segment best FHD+ sAMOLED 90Hz Display', 15999, 'Sumsung', '15'),
(97, 'sumsung2.png', 'Mobile', 'Galaxy M49 Segment best FHD+ sAMOLED 90Hz Display', 24999, 'Sumsung', '20'),
(98, 'sumsung3.png', 'Mobile', 'Galaxy M32 Segment best FHD+ sAMOLED 90Hz Display', 22339, 'Sumsung', '25'),
(99, 'sumsung4.png', 'mobile', 'Dimensity 720 processor Knox security5000mAh long-lasting battery with 15W in-box fast charger y', 25999, 'Sumsung', '15'),
(115, 'oppo.png', 'Mobile', 'OPPO A74 5G (Fluid Black,6GB RAM,128GB Storage) - 5G Android Smartphone | 5000 mAh Battery | 18W Fast Charge | 90Hz LCD Display ', 25999, 'oppo', '21'),
(116, 'oppo3.png', 'Mobile', 'OPPO A74 5G (Fluid Black,6GB RAM,128GB Storage) - 5G Android Smartphone | 5000 mAh Battery | 18W Fast Charge | 90Hz LCD Display ', 18999, 'oppo', '12'),
(117, 'oppo2.png', 'Mobile', 'OPPO A74 5G (Fluid Black,6GB RAM,128GB Storage) - 5G Android Smartphone | 5000 mAh Battery | 18W Fast Charge | 90Hz LCD Display ', 16999, 'oppo', '15'),
(118, 'realme.png', 'Mobile', 'realme GT 5G (Fluid green,6GB RAM,128GB Storage) - 5G Android Smartphone | 5000 mAh Battery | 18W Fast Charge | 90Hz LCD Display ', 15999, 'Real me', '25'),
(119, 'realme2.png', 'Mobile', 'realme narzo 5G (Fluid Black,6GB RAM,128GB Storage) - 5G Android Smartphone | 5000 mAh Battery | 18W Fast Charge | 90Hz LCD Display ', 22399, 'Real me', 'new'),
(120, 'cooler.jpeg', 'cooler', 'Symphony DiET 12T Personal Tower Air Cooler with i-Pure technology, 12 Litres', 15999, 'Whirlpool', 'new'),
(122, 'fridge.webp', 'cooler', 'Symphony DiET 12T Personal Tower Air Cooler with i-Pure technology, 12 Litres', 19999, 'voltas', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
