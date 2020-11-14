-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 10:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saj`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cartID` int(11) NOT NULL,
  `cartCustomerID` int(11) NOT NULL,
  `cartProductID` int(11) NOT NULL,
  `cartProductQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Mice'),
(2, 'Keyboards'),
(3, 'Monitors'),
(4, 'Audio');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `customerUserName` varchar(255) NOT NULL,
  `customeremail` varchar(255) NOT NULL,
  `customerPassword` varchar(255) NOT NULL,
  `customerCreationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `customerUserName`, `customeremail`, `customerPassword`, `customerCreationDate`) VALUES
(1, 'Jorrin', 'jorrin@gmail.com', 'password', '2020-11-14'),
(2, 'Shantisa', 'shantisa@gmail.com', 'password2', '2020-11-14'),
(3, 'Aries', 'aries@gmail.com', '123456789', '2020-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `orderProductID` int(11) NOT NULL,
  `orderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productCode` varchar(10) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `listPrice` decimal(10,2) NOT NULL,
  `productImageURL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productCode`, `productName`, `listPrice`, `productImageURL`) VALUES
(1, 1, 'seenda', 'Seenda Wireless Mouse', '9.98', 'https://images-na.ssl-images-amazon.com/images/I/61cWFgSqhFL._AC_SL1500_.jpg'),
(2, 1, 'jelly', 'Jelly Comb Slim Wireless Mouse', '10.99', 'https://images-na.ssl-images-amazon.com/images/I/61lB0Ugp4aL._AC_SL1500_.jpg'),
(3, 1, 'lg_M570', 'Logitech M570 Wireless Trackball Mouse', '29.99', 'https://images-na.ssl-images-amazon.com/images/I/61QrqZ8uurL._AC_SL1500_.jpg'),
(4, 1, 'rzr_da', 'Razer DeathAdder v2 Gaming Mouse', '69.99', 'https://images-na.ssl-images-amazon.com/images/I/81A11OxpgXL._AC_SL1500_.jpg'),
(5, 1, 'ms_arc', 'Surface Arc Mouse', '79.99', 'https://images-na.ssl-images-amazon.com/images/I/41AfnXpTERL._AC_SL1200_.jpg'),
(6, 1, 'lg_mxVert', 'Logitech MX Vertical Wireless Mouse ', '88.85', 'https://images-na.ssl-images-amazon.com/images/I/61Icm0c2uFL._AC_SL1500_.jpg'),
(7, 2, 'apl_mag', 'Apple Magic Keyboard (Wireless)', '78.95', 'https://images-na.ssl-images-amazon.com/images/I/51HliMDwncL._AC_SL1024_.jpg'),
(8, 2, 'lg_K780', 'Logitech K780 Wireless Keyboard', '59.99', 'https://images-na.ssl-images-amazon.com/images/I/61xtWPVBxCL._AC_SL1500_.jpg'),
(9, 2, 'anne_pro2', 'ANNE PRO 2 Wired/Wireless Mechanical Keyboard', '109.00', 'https://images-na.ssl-images-amazon.com/images/I/61NrWLtBXFL._AC_SL1500_.jpg'),
(10, 2, 'ducky_2SF', 'Ducky One 2 SF Pure Keyboard (Cherry MX Blue)', '163.99', 'https://images-na.ssl-images-amazon.com/images/I/31f8p7tCX0L._AC_.jpg'),
(11, 2, 'ducky_miya', 'Ducky Miya Pro Panda Keyboard (Cherry MX Brown)', '159.00', 'https://images-na.ssl-images-amazon.com/images/I/710O5CFjPZL._AC_SL1500_.jpg'),
(12, 2, 'MS_ergo', 'Microsoft Ergonomic Keyboard', '49.99', 'https://images-na.ssl-images-amazon.com/images/I/71V3DbiEJfL._AC_SL1500_.jpg'),
(13, 3, 'apl_XDR', 'Apple Pro 32\" Display XDR 6K Monitor', '4933.97', 'https://images-na.ssl-images-amazon.com/images/I/71pEQi2sX3L._AC_SL1500_.jpg'),
(14, 3, 'vs_XG270', 'ViewSonic ELITE XG270 27\" 1080p 240Hz IPS Monitor', '429.99', 'https://images-na.ssl-images-amazon.com/images/I/61IsQvCebTL._AC_SL1500_.jpg'),
(15, 3, 'benQ_EX278', 'BenQ EX2780Q 27\" 1440P 144Hz IPS Monitor', '449.99', 'https://images-na.ssl-images-amazon.com/images/I/81kU7dNyEML._AC_SL1500_.jpg'),
(16, 3, 'lg_49WL95C', 'LG 49WL95C-W 49\" Curved Ultrawide IPS HDR10 Monitor', '1469.99', 'https://images-na.ssl-images-amazon.com/images/I/71EP7F-yPKL._AC_SL1500_.jpg'),
(17, 3, 'vs_VX2485', 'ViewSonic VX2485-MHU 24\" 1080p Frameless IPS Monitor', '169.99', 'https://images-na.ssl-images-amazon.com/images/I/51fxnBNg30L._AC_SL1000_.jpg'),
(19, 4, 'apl_airPod', 'Apple AirPods with Wireless Charging Case', '159.98', 'https://images-na.ssl-images-amazon.com/images/I/71K8hu-yewL._AC_SL1500_.jpg'),
(20, 4, 'galaxy_bud', 'Galaxy Buds Wireless Earbuds', '79.99', 'https://images-na.ssl-images-amazon.com/images/I/71yzmKeKMmL._AC_SL1500_.jpg'),
(21, 4, 'beats_wire', 'Powerbeats Pro Wireless Earbuds', '199.95', 'https://images-na.ssl-images-amazon.com/images/I/51FG0lL2KYL._AC_SL1000_.jpg'),
(22, 4, 'beats_on_e', 'Beats Solo3 Wireless On-Ear Headphones ', '119.95', 'https://m.media-amazon.com/images/I/51vVxWgnooL._AC_SL1000_.jpg'),
(23, 4, 'beats_over', 'Beats Studio3 Wireless Over-Ear Headphones', '194.99', 'https://images-na.ssl-images-amazon.com/images/I/61pAm3Ak4AL._AC_SL1500_.jpg'),
(24, 4, 'arctis5', 'SteelSeries Arctis 5 DTS v2.0 Surround Headphones', '99.99', 'https://images-na.ssl-images-amazon.com/images/I/81Y9BnR2%2BhL._AC_SL1500_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `cartCustomerID` (`cartCustomerID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `customerUserName` (`customerUserName`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD UNIQUE KEY `productCode` (`productCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`cartCustomerID`) REFERENCES `customers` (`customerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
