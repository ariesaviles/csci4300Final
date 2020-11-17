-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 11:55 PM
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

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cartID`, `cartCustomerID`, `cartProductID`, `cartProductQuantity`) VALUES
(1, 1, 2, 1);

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
  `productImageURL` varchar(255) NOT NULL,
  `productDescription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productCode`, `productName`, `listPrice`, `productImageURL`, `productDescription`) VALUES
(1, 1, 'seenda', 'Seenda Wireless Mouse', '9.98', 'https://images-na.ssl-images-amazon.com/images/I/61cWFgSqhFL._AC_SL1500_.jpg', 'Mute design with the advanced sensor ensures silent clicks & nice responsive. You can use the mouse efficiently and won’t be bothered by the annoying clicking sound. Features advanced 2.4G wireless technology that ensures reliable connection up to 33ft. '),
(2, 1, 'jelly', 'Jelly Comb Slim Wireless Mouse', '10.99', 'https://images-na.ssl-images-amazon.com/images/I/61lB0Ugp4aL._AC_SL1500_.jpg', 'Noiseless click, soft touch, offers extremely comfort which can helps you focus. Three responsive buttons and a scroll wheel for quick navigation and fast scrolling capability.'),
(3, 1, 'lg_M570', 'Logitech M570 Wireless Trackball Mouse', '29.99', 'https://images-na.ssl-images-amazon.com/images/I/61QrqZ8uurL._AC_SL1500_.jpg', 'Your trackball stays in one place, so you don’t have to move your arm to move your cursor. Its sculpted shape supports your hand to let you work all day in comfort. Because the trackball doesn’t move, it’s perfect for tight workspaces and busy desks.'),
(4, 1, 'rzr_da', 'Razer DeathAdder v2 Gaming Mouse', '69.99', 'https://images-na.ssl-images-amazon.com/images/I/81A11OxpgXL._AC_SL1500_.jpg', 'The #1 Best-Selling Gaming Peripherals Manufacturer in the US. Focus+ 20K DPI Optical Sensor. 3x Faster Than Traditional Mechanical Switches. Customizable Chroma RGB Lighting. 8 Programmable Buttons. Drag-Free Cord for Wireless-Like Performance.'),
(5, 1, 'ms_arc', 'Surface Arc Mouse', '79.99', 'https://images-na.ssl-images-amazon.com/images/I/41AfnXpTERL._AC_SL1200_.jpg', 'The Microsoft Arc Mouse features an audible, satisfying snap. Simply snap the Arc Mouse into its curved position to power up. Snap again to flatten and power down. The overall design is optimized for the most comfortable, natural interaction.'),
(6, 1, 'lg_mxVert', 'Logitech MX Vertical Wireless Mouse ', '88.85', 'https://images-na.ssl-images-amazon.com/images/I/61Icm0c2uFL._AC_SL1500_.jpg', 'Advanced ergonomic design Places your hand in a natural handshake position using a unique 57 degree angle, preventing forearm twisting and reducing muscular strain by 10 percent. Connect via included wireless USB, Bluetooth, or USB C cable'),
(7, 2, 'apl_mag', 'Apple Magic Keyboard (Wireless)', '78.95', 'https://images-na.ssl-images-amazon.com/images/I/51HliMDwncL._AC_SL1024_.jpg', 'Magic Keyboard with Numeric Keypad features an extended layout, with document navigation controls for quick scrolling and full size arrow keys for gaming. A scissor mechanism beneath each key allows for increased stability.'),
(8, 2, 'lg_K780', 'Logitech K780 Wireless Keyboard', '59.99', 'https://images-na.ssl-images-amazon.com/images/I/61xtWPVBxCL._AC_SL1500_.jpg', 'Full size, fully equipped keyboard with large, quiet keys and convenient number pad. Integrated phone and tablet stand: Holds your devices at the perfect angle to type and read. Wide compatibility: Works with Windows, Mac, Chrome OS, iOS and Android.'),
(9, 2, 'anne_pro2', 'ANNE PRO 2 Wired/Wireless Mechanical Keyboard', '109.00', 'https://images-na.ssl-images-amazon.com/images/I/61NrWLtBXFL._AC_SL1500_.jpg', 'Minimalistic design doing more with less. Requires less hand movement while still being able to access all the functionalities. Compact and Portable . It saves desk space and easy to carry around. Perfect for home, work and on the go.'),
(10, 2, 'ducky_2SF', 'Ducky One 2 SF Pure Keyboard (Cherry MX Blue)', '163.99', 'https://images-na.ssl-images-amazon.com/images/I/31f8p7tCX0L._AC_.jpg', 'The new interface allows you to now customize the RGB lighting via software while still being able to customize it manually without software on the physical keyboard Genuine Cherry MX Silent Red Switches'),
(11, 2, 'ducky_miya', 'Ducky Miya Pro Panda Keyboard (Cherry MX Brown)', '159.00', 'https://images-na.ssl-images-amazon.com/images/I/710O5CFjPZL._AC_SL1500_.jpg', 'Limited edition Miya Pro Panda White mechanical keyboard with genuine Cherry MX Red switches. PBT Keycaps with Dye Sub with white LED backlights. '),
(12, 2, 'MS_ergo', 'Microsoft Ergonomic Keyboard', '49.99', 'https://images-na.ssl-images-amazon.com/images/I/71V3DbiEJfL._AC_SL1500_.jpg', 'Next-level comfort. Work all day, with reduced risk of fatigue and injury. Excellent support. Keyboard features improved cushion and ergonomically tested palm rest covered in premium fabric provides all-day comfort and promotes a neutral wrist posture.'),
(13, 3, 'apl_XDR', 'Apple Pro 32\" Display XDR 6K Monitor', '4933.97', 'https://images-na.ssl-images-amazon.com/images/I/71pEQi2sX3L._AC_SL1500_.jpg', '32-inch LCD display with Retina 6K resolution (6016 by 3384 pixels). Pro Stand and VESA Mount Adapter sold separately. Extreme Dynamic Range (XDR) display. P3 wide color gamut, 10-bit color depth. Super wide viewing angle'),
(14, 3, 'vs_XG270', 'ViewSonic ELITE XG270 27\" 1080p 240Hz IPS Monitor', '429.99', 'https://images-na.ssl-images-amazon.com/images/I/61IsQvCebTL._AC_SL1500_.jpg', 'WQHD 1440p resolution, true 1ms (GtG) response time, and 165Hz (OC) refresh rate gives you the ultimate enthusiast experience. IPS Nano Color technology brings your screen  to life with 98% DCI-P3 color coverage and 10-bit color depth '),
(15, 3, 'benQ_EX278', 'BenQ EX2780Q 27\" 1440P 144Hz IPS Monitor', '449.99', 'https://images-na.ssl-images-amazon.com/images/I/81kU7dNyEML._AC_SL1500_.jpg', '2K QHD 2560x1440 resolution; IPS panel; USB-C, HDMI, DP connectivity; 16:9 aspect ratiole panel with 95% DCI-P3 Color Space. 2W speakers, a 5W subwoofer, and a DSP (Digital Signal Processor) let you select your best audio mode.'),
(16, 3, 'lg_49WL95C', 'LG 49WL95C-W 49\" Curved Ultrawide IPS HDR10 Monitor', '1469.99', 'https://images-na.ssl-images-amazon.com/images/I/71EP7F-yPKL._AC_SL1500_.jpg', '49 inches ultrawide 32: 9 dual QHD (5120 X 1440) Display with HDR. Ambient Light Sensor reacts to light, making the screen brighter in bright areas and darker in the dark for you to work in the optimal display environment.'),
(17, 3, 'vs_VX2485', 'ViewSonic VX2485-MHU 24\" 1080p Frameless IPS Monitor', '169.99', 'https://images-na.ssl-images-amazon.com/images/I/51fxnBNg30L._AC_SL1000_.jpg', 'An ideal all-around display for desktop, or laptop. Razor-sharp clarity and detail with Full HD (1920x1080p) resolution. A 3-sided frameless bezel IPS panel ensures stunning views no matter your vantage point'),
(19, 4, 'apl_airPod', 'Apple AirPods with Wireless Charging Case', '159.98', 'https://images-na.ssl-images-amazon.com/images/I/71K8hu-yewL._AC_SL1500_.jpg', 'Automatically on, automatically connected. Easy setup for all your Apple devices. Quick access to Siri by saying “Hey Siri”. Double-tap to play or skip forward. New Apple H1 headphone chip delivers faster wireless connection to your devices.'),
(20, 4, 'galaxy_bud', 'Galaxy Buds Wireless Earbuds', '79.99', 'https://images-na.ssl-images-amazon.com/images/I/71yzmKeKMmL._AC_SL1500_.jpg', 'Premium sound tuned by AKG, an optimized driver offers substantial bass, while a volume driver gives you a wider range of sound. Galaxy buds come in three adjustable ear tip and wingtip sizes right from the box. Splash resistant technology.'),
(21, 4, 'beats_wire', 'Powerbeats Pro Wireless Earbuds', '199.95', 'https://images-na.ssl-images-amazon.com/images/I/51FG0lL2KYL._AC_SL1000_.jpg', 'Totally wireless high-performance earphones. Up to 9 hours of listening time. Reinforced design for sweat & water resistance during tough workouts. Features the Apple H1 headphone chip and Class 1 Bluetooth for extended range and fewer dropouts.'),
(22, 4, 'beats_on_e', 'Beats Solo3 Wireless On-Ear Headphones ', '119.95', 'https://m.media-amazon.com/images/I/51vVxWgnooL._AC_SL1000_.jpg', 'High-performance wireless Bluetooth headphones. Up to 40 hours of battery life. Compatible with iOS and Android devices. With Fast Fuel, 5 minutes of charging gives you 3 hours of playback when battery is low.'),
(23, 4, 'beats_over', 'Beats Studio3 Wireless Over-Ear Headphones', '194.99', 'https://images-na.ssl-images-amazon.com/images/I/61pAm3Ak4AL._AC_SL1500_.jpg', 'Pure adaptive noise canceling (pure ANC) actively blocks external noise. Real-time Audio calibration preserves a Premium listening experience. Up to 22 hours of battery life. With fast Fuel, a 10-minute charge gives 3 hours of play when battery is low.'),
(24, 4, 'arctis5', 'SteelSeries Arctis 5 DTS v2.0 Surround Headphones', '99.99', 'https://images-na.ssl-images-amazon.com/images/I/81Y9BnR2%2BhL._AC_SL1500_.jpg', 'Award winning arctic speaker drivers produce ultra-low distortion, paired with DTS headphone’s v2.0 surround sound for rich, immersive audio. Widely recognized as the best mic, arctic clear cast bidirectional microphone delivers studio quality voice.');

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
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
