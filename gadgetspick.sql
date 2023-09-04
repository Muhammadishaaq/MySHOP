-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 10:07 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadgetspick`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogintb`
--

CREATE TABLE `adminlogintb` (
  `id` int(11) NOT NULL,
  `emailid` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogintb`
--

INSERT INTO `adminlogintb` (`id`, `emailid`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `image1` varchar(1000) NOT NULL DEFAULT ' ',
  `image2` varchar(1000) NOT NULL DEFAULT '',
  `image3` varchar(1000) NOT NULL DEFAULT '',
  `image4` varchar(1000) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`image1`, `image2`, `image3`, `image4`) VALUES
('1_1.png', '1_2.png', '1_3.png', '1_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `id` int(11) NOT NULL,
  `dealsOfDay` varchar(1000) NOT NULL DEFAULT '[]'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`id`, `dealsOfDay`) VALUES
(1, '[\"24\",\"31\",\"45\",\"47\",\"54\",\"48\",\"56\",\"61\"]');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `id` int(11) NOT NULL,
  `emailId` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `linkUserId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`id`, `emailId`, `password`, `linkUserId`) VALUES
(11, 'kalim@gmail.com', 'kalim', 18),
(14, 'ibrar@gmail.com', 'ibrar', 21);

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `dispatchdate` date NOT NULL,
  `deliverydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`id`, `orderId`, `status`, `dispatchdate`, `deliverydate`) VALUES
(7, 10, 'dispatched', '2021-08-05', '0000-00-00'),
(8, 17, 'delivered', '2021-09-04', '2021-09-04'),
(9, 13, 'delivered', '2021-09-04', '2021-09-04'),
(10, 14, 'delivered', '2021-09-04', '2021-09-04'),
(11, 15, 'delivered', '2021-09-04', '2021-09-04'),
(12, 16, 'delivered', '2021-09-04', '2021-09-04'),
(13, 18, 'delivered', '2021-09-04', '2021-09-04'),
(14, 19, 'delivered', '2021-09-04', '2021-09-04'),
(15, 20, 'delivered', '2021-09-04', '2021-09-04'),
(16, 21, 'delivered', '2021-09-04', '2021-09-04'),
(17, 22, 'delivered', '2021-09-04', '2021-09-04'),
(18, 23, 'delivered', '2021-09-04', '2021-09-04'),
(19, 24, 'delivered', '2021-09-04', '2021-09-04'),
(20, 25, 'delivered', '2021-09-04', '2021-09-04'),
(21, 26, 'dispatched', '2021-09-04', '0000-00-00'),
(22, 27, 'dispatched', '2021-09-04', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `posted`
--

CREATE TABLE `posted` (
  `post` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posted`
--

INSERT INTO `posted` (`post`) VALUES
('{\"surl\":\"http://localhost/project/payu/success.php\",\"furl\":\"http://localhost/project/payu/failure.php\",\"amount\":1600,\"firstname\":\"kalim\",\"lastname\":\"khan\",\"email\":\"kalim@gmail.com\",\"phone\":\"3456789012\",\"productinfo\":\"New Design Shirts\",\"address1\":\"21500, 6/4\",\"address2\":\"university of malakand\",\"city\":\"Malakand\",\"state\":\"KP\",\"country\":\"Pakistan\",\"zipcode\":\"23080\"}');

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE `productdetails` (
  `id` int(255) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `newPrice` float NOT NULL,
  `oldPrice` float NOT NULL,
  `stock` int(255) NOT NULL,
  `details` varchar(30000) NOT NULL,
  `warranty` varchar(10000) NOT NULL,
  `image1` varchar(1000) NOT NULL DEFAULT '',
  `image2` varchar(1000) NOT NULL DEFAULT '',
  `image3` varchar(1000) NOT NULL DEFAULT '',
  `features` varchar(2000) NOT NULL,
  `uploadDate` date NOT NULL,
  `rating` float NOT NULL DEFAULT 0,
  `reviewsNo` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`id`, `title`, `category`, `description`, `newPrice`, `oldPrice`, `stock`, `details`, `warranty`, `image1`, `image2`, `image3`, `features`, `uploadDate`, `rating`, `reviewsNo`) VALUES
(64, 'CLOTHES', 'clothes', 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality', 1000, 800, 1, 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality', 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality', '64_1.png', '', '', 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality', '0000-00-00', 0, 0),
(66, 'Perfume', 'perfume', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', 5000, 4000, 23, 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', '66_1.jpg', '', '', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', '0000-00-00', 0, 0),
(67, 'Perfume', 'perfume', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', 3000, 2500, -6, 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', '67_1.jpg', '', '', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', '0000-00-00', 0, 0),
(68, 'Perfume', 'perfume', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', 1500, 1000, 5, 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', '68_1.jpg', '', '', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', '0000-00-00', 0, 0),
(69, 'Peerfume', 'perfume', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', 2000, 1500, 1, 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', '69_1.jpg', '', '', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.', '0000-00-00', 0, 0),
(70, 'HandBags', 'handbags', 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality and high-priced clothes by top designers including Prada, Dolce & Gabbana, and Balmain, to name just a few.', 1233, 1000, 5, 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality and high-priced clothes by top designers including Prada, Dolce & Gabbana, and Balmain, to name just a few.', 'No ', '70_1.png', '', '', 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality and high-priced clothes by top designers including Prada, Dolce & Gabbana, and Balmain, to name just a few.', '0000-00-00', 0, 0),
(71, 'clothes', 'clothes', 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality and high-priced clothes by top designers including Prada, Dolce & Gabbana, and Balmain, to name just a few.', 1000, 500, 12, 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality and high-priced clothes by top designers including Prada, Dolce & Gabbana, and Balmain, to name just a few.', 'No', '71_1.jpg', '', '', 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality and high-priced clothes by top designers including Prada, Dolce & Gabbana, and Balmain, to name just a few.', '0000-00-00', 0, 0),
(72, 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells hig', 'clothes', 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality and high-priced clothes by top designers including Prada, Dolce & Gabbana, and Balmain, to name just a few.', 1200, 600, -2, 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality and high-priced clothes by top designers including Prada, Dolce & Gabbana, and Balmain, to name just a few.', 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality and high-priced clothes by top designers including Prada, Dolce & Gabbana, and Balmain, to name just a few.', '72_1.jpg', '', '', 'Shopbop is another top online clothing store that sells high-end designer clothes you pretty much only find on 5th Ave. or Rodeo Dr. Sites. It sells high-quality and high-priced clothes by top designers including Prada, Dolce & Gabbana, and Balmain, to name just a few.', '0000-00-00', 0, 0),
(73, 'D footwear, accessories, beauty products and more. Order today from ASOSiscoclothing,', 'shoes', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS', 4000, 3000, 10, 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS', '', '73_1.jpg', '', '', 'Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS', '0000-00-00', 0, 0),
(74, 'New Design Shirts', 'clothes', 'this is new arrived.', 1600, 2100, 5, 'this is details of the product.', 'Warranty is not available.', '74_1.jpg', '', '', 'modern; clothes; new', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `productsale`
--

CREATE TABLE `productsale` (
  `id` int(11) NOT NULL,
  `productId` int(255) NOT NULL,
  `sold` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productsale`
--

INSERT INTO `productsale` (`id`, `productId`, `sold`) VALUES
(39, 69, 1),
(40, 70, 0),
(41, 71, 0),
(42, 72, 6),
(43, 73, 0),
(44, 74, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qatb`
--

CREATE TABLE `qatb` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `productId` int(255) NOT NULL,
  `answer` varchar(1000) NOT NULL DEFAULT 'Not yet Answered...',
  `answerStatus` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `userid` int(255) NOT NULL,
  `rating` int(10) NOT NULL,
  `reviewDetails` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `productid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statekeys`
--

CREATE TABLE `statekeys` (
  `abbr` varchar(255) NOT NULL,
  `statename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statekeys`
--

INSERT INTO `statekeys` (`abbr`, `statename`) VALUES
('KP', 'Khyber Pakhtunkhwa'),
('PB', 'Punjab'),
('SD', 'Sindh'),
('BC', 'Balochistan');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `txnId` varchar(10000) NOT NULL,
  `uid` int(255) NOT NULL,
  `products` varchar(10000) NOT NULL,
  `amount` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `txnId`, `uid`, `products`, `amount`, `status`, `date`) VALUES
(25, '480420210948', 18, '{\"72\":\"1\"}', 1200, 1, '2021-09-04'),
(28, '380420210938', 18, '{\"72\":\"1\"}', 1200, 0, '2021-09-04'),
(29, '250420210925', 18, '{\"72\":\"1\"}', 1200, 0, '2021-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `userdetailstb`
--

CREATE TABLE `userdetailstb` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `contactNo1` varchar(15) NOT NULL,
  `contactNo2` varchar(15) NOT NULL,
  `shipaddr1` varchar(200) NOT NULL,
  `shipaddr2` varchar(200) NOT NULL,
  `shiplandmark` varchar(200) NOT NULL,
  `country` varchar(10) NOT NULL DEFAULT 'India',
  `state` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postalcode` varchar(100) NOT NULL,
  `cart` varchar(10000) NOT NULL DEFAULT '',
  `favourite` varchar(10000) NOT NULL,
  `compare` varchar(1000) NOT NULL DEFAULT '[]'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetailstb`
--

INSERT INTO `userdetailstb` (`id`, `firstName`, `lastName`, `emailAddress`, `contactNo1`, `contactNo2`, `shipaddr1`, `shipaddr2`, `shiplandmark`, `country`, `state`, `city`, `postalcode`, `cart`, `favourite`, `compare`) VALUES
(18, 'kalim', 'khan', 'kalim@gmail.com', '3456789012', '3124567890', '21500, 6/4', 'university of malakand', 'apposite to third gate', 'Pakistan', 'KP', 'Malakand', '23080', '[]', '[\"72\",\"71\"]', '[]'),
(21, 'ibrar', 'shah', 'ibrar@gmail.com', '3451234567', '', '', '', '', 'India', '', '', '', '[]', '[]', '[]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogintb`
--
ALTER TABLE `adminlogintb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logintb`
--
ALTER TABLE `logintb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkUserId` (`linkUserId`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderId` (`orderId`);

--
-- Indexes for table `productdetails`
--
ALTER TABLE `productdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productsale`
--
ALTER TABLE `productsale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `qatb`
--
ALTER TABLE `qatb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `productid` (`productid`),
  ADD KEY `productid_2` (`productid`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `uid_2` (`uid`);

--
-- Indexes for table `userdetailstb`
--
ALTER TABLE `userdetailstb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogintb`
--
ALTER TABLE `adminlogintb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logintb`
--
ALTER TABLE `logintb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `productdetails`
--
ALTER TABLE `productdetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `productsale`
--
ALTER TABLE `productsale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `qatb`
--
ALTER TABLE `qatb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `userdetailstb`
--
ALTER TABLE `userdetailstb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logintb`
--
ALTER TABLE `logintb`
  ADD CONSTRAINT `logintb_ibfk_1` FOREIGN KEY (`linkUserId`) REFERENCES `userdetailstb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD CONSTRAINT `orderstatus_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `transactions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `productsale`
--
ALTER TABLE `productsale`
  ADD CONSTRAINT `productsale_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `productdetails` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `userdetailstb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `productdetails` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `userdetailstb` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
