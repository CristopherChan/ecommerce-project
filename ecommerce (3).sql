-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 10:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `quantity`) VALUES
(17, 0),
(18, 0),
(19, 0),
(26, 0),
(16, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `fname` varchar(220) NOT NULL,
  `lname` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `uname` varchar(220) NOT NULL,
  `pword` varchar(220) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `fname`, `lname`, `email`, `uname`, `pword`, `img`) VALUES
(14, 'Cristopher', 'Chan', 'cristopher.chan@tup.edu.ph', 'cristopherchan', '8cb2237d0679ca88db6464eac60da96345513964', '85319291.jpg'),
(15, 'cristopher pogi', 'chan', 'cristopherchan2121@gmail.com', 'chan', 'b220ee2eb110e04999d6aaa434a9d965cd98a2e3', '20952255.png'),
(16, 'Cristopher', 'Chan', 'cristopher.chadn@tup.edu.ph', 'dasdasdasdasdasdas', '63fcb13744464e2cb4cdbb2803266ecf9f699788', '38907022.jpg'),
(17, 'cristopher pogi', 'chan', 'cristopherchanASA2121@gmail.com', 'sasasasasa', '625734e904b166c6f434649401ae8433516e8b0e', '61063344.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `totalprice` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `product_image` varchar(255) NOT NULL,
  `produc_discrip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `discount`, `product_image`, `produc_discrip`) VALUES
(14, 'avery-klein-C_dRtsnBOQA-unsplash.jpg', 120, 150, 'uploads/avery-klein-C_dRtsnBOQA-unsplash.jpg', ''),
(15, 'Headset earphone.jpg', 350, 680, 'uploads/c-d-x-PDX_a_82obo-unsplash.jpg', ''),
(16, 'denny-muller-RED cenematic camera.jpg', 7000, 9500, 'uploads/denny-muller-EuKdScgrGDo-unsplash.jpg', ''),
(17, 'engin-akyurt-women clothes', 80, 110, 'uploads/engin-akyurt-5raPrOhbKQo-unsplash.jpg', ''),
(18, 'heather-ford-women outfit', 900, 1100, 'uploads/heather-ford-5gkYsrH_ebY-unsplash.jpg', ''),
(19, 'mathilde-langevin-cosemotic', 120, 135, 'uploads/mathilde-langevin-p3O5f4u95Lo-unsplash.jpg', ''),
(20, 'milada-vigerova-girls clothes', 65, 90, 'uploads/milada-vigerova-p8Drpg_duLw-unsplash.jpg', ''),
(21, 'Iphone pro max 13', 600, 900, 'uploads/paolo-giubilato-ZwKCWVFdrcs-unsplash.jpg', ''),
(22, 'vivo 2030 beautiful phone', 400, 650, 'uploads/rahul-chakraborty-xsGxhtAsfSA-unsplash.jpg', ''),
(23, 'Note books', 20, 35, 'uploads/stil-l1meQCttaqs-unsplash.jpg', ''),
(24, '2_Biggest Air Bus.jpg', 1000000, 1200000, 'uploads/2_Biggest Air Bus.jpg', ''),
(25, 'battlefield HD PC Game', 1200, 2000, 'uploads/battlefield_3_pc-HD.jpg', ''),
(26, 'Great Game Wallpapers', 200, 400, 'uploads/Great Game Wallpapers (10).jpg', ''),
(27, 'call of duty black op cod game ps3 playstation xbox pc', 550, 700, 'uploads/call of duty black op cod game ps3 playstation xbox pc wii desktop wallpaper  hd.jpg', ''),
(28, 'game.wallpapers.capa', 700, 799, 'uploads/game.wallpapers.capa.ru_010.jpg', ''),
(29, 'age_of_conan_hyborianadventures-HD.jpg', 120, 200, 'uploads/age_of_conan_hyborianadventures-HD.jpg', ''),
(30, 'mulana', 200, 21, 'uploads/3.jpg', ''),
(31, 'cristopher', 1000000, 21, 'upload/360115523_955248132198560_1025223766609194783_n.jpg', ''),
(32, 'dsadas', -4, 12121, 'upload/philhealth id.jpg', ''),
(33, '', 0, NULL, '', 'jhawuahedklahsja scbasbdjAHxeuaghwaeuigjasbndajkSBDASJGDAUGREUQWIGHEKHJASDASDHUIGQEOWJQOPWIUQW'),
(34, '', 0, NULL, '', 'SASAWAW'),
(35, 'MULANA', 21, 12, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `productID` int(11) NOT NULL,
  `productName` varchar(220) NOT NULL,
  `description` text NOT NULL,
  `productPrice` varchar(220) NOT NULL,
  `product_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`productID`, `productName`, `description`, `productPrice`, `product_img`) VALUES
(1, 'glass tumbler na baba', 'werwercwerewgrtevhtrgbrevy', '212', ''),
(2, 'bamboo glass na baba sa sale', 'dsfsdrcwterhgeg', '', ''),
(3, 'glass tumbler na baba', 'werwercwerewgrtevhtrgbrevy', '', ''),
(4, 'bamboo glass na baba sa sale', 'dsfsdrcwterhgeg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
