-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2015 at 04:39 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`user_id` int(20) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'TheSak'),
(2, 'SarahMorris'),
(3, 'TommyHilfiger'),
(4, 'ToryBurch'),
(5, 'Furla'),
(6, 'LongChamp'),
(7, 'CalvinKlein'),
(8, 'KateSpade'),
(9, 'MichealKors'),
(10, 'Lacoste');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(15, '::1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cat_id` int(100) NOT NULL,
  `cat_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_image`) VALUES
(1, 'Electronics', '1.png'),
(2, 'Apparel_Accesories', '2.png'),
(3, 'Home_Garden', '3.png'),
(4, 'Bags_Shoes', '4.png'),
(5, 'Jewerly_Watches', '5.png'),
(6, 'Automotive', '6.png'),
(7, 'Beauty_Health', '7.png'),
(8, 'Toys_Kids_Baby', '8.png'),
(9, 'Sports_Outdoor', '9.png');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
`customer_id` int(10) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`) VALUES
(1, '::1', 'Reni Calonge', 'rdccalonge@gmail.com', 'trinity', 'Philippines', 'Quezon City', '09271504479', '10 Ruby St Northview 1 Batasan Hills', '10841363_10203399538969889_65292327_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
`faq_id` int(10) NOT NULL,
  `faq_question` text NOT NULL,
  `faq_answer` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_question`, `faq_answer`) VALUES
(2, 'What are the payment methods?2', 'BDO BANK DEPOSIT (NO CHARGE)LBC MONEY TRANSFERWESTERN UNIONCEBUANA LHULLIERML KWARTA PADALAPALAWANPAYPAL');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text CHARACTER SET utf8 NOT NULL,
  `product_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_keywords` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(13, 4, 1, 'The Sak Looseline - Tomato', 2990, '<p><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">Add some haute hipster style to your everyday accessorizing with this casual-cool crossbody from the sak.&nbsp;</span><span class="text_exposed_show" style="display: inline; color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;"><br />Featuring groovy stripes and a shoulder-right shape, it''s the best retro recall of the season.&nbsp;<br /><br />Polypropylene.&nbsp;<br />Strap drop 14"<br />Tip zip closure.&nbsp;<br />Logo charm.&nbsp;<br />Interior features zip pocket and 2 slip pockets.&nbsp;<br /><br />12 1/2" w x 9 1/2" h x 2" d.</span></p>', '10292541_1521367461470110_33876428587508223_n.jpg', 'the, sak, looseline, tomato'),
(14, 10, 4, 'Tory Burch Women''s Window Pane  White Print Logo Flip Flops Sandals', 3300, '<p><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">PRICE: 3,300</span><br style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;" /><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">Tory Burch Women''s Window Pane&nbsp;</span><br style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;" /><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">White Print Logo Flip Flops Sandals</span><br style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;" /><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">COLOR: Poppy Red</span><br style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;" /><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">BNWB</span><span class="text_exposed_show" style="display: inline; color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;"><br />AVAILABLE SIZES:<br />6/7/8<br /><br />The Tory Burch Thin Flip Sandals feature a Synthetic upper with a Open Toe. The Man-Made outsole lends lasting traction and wear.<br /><br />Tory Burch shoes are brimming with luxury, style, and American class at an affordable price point. Sensing a lack of a sophisticated American aesthetic in the marketplace, designer Tory Burch seeks to fill that void with her collection of shoes, accessories and apparel. Informed by her upbringing on a Philadelphia farm and her love for art and architecture, Tory Burch''s collection offers classic ballerina flats, refined heels, beautiful platforms, delicate slingbacks, bold gladiator sandals, extravagant slides and playful thongs. The Tory Burch brand embodies American sophistication and luxury with a worldly panache.</span></p>', '10675767_1534259090180947_2183553838528301852_n.jpg', 'tory, burch, flip, flops, sandals'),
(15, 2, 10, 'Lacoste Women''s Lightweight Metal Aviator ', 3490, '<p><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">PRICE: 3,490</span><br style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;" /><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">Lacoste Women''s Lightweight Metal Aviator Sunglasses L118S&nbsp;</span><br style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;" /><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">BNWT &amp; CASE</span><br style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;" /><br style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;" /><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">Details: Light weight metal frame and arms. CR-39&trade; plastic gradient lenses with UV protection. Lacoste logos on the lens &amp; temples. Adjustable nose guards for customizable fit. Protective hardshell case included. Imported.</span><span class="text_exposed_show" style="display: inline; color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;"><br /><br />Model #: L118S<br />Color #: 615&nbsp;<br />Frame Color: Satin Red<br />Lens Color: Grey<br />Size: 57-16-130</span></p>', '1459334_1534258640180992_6466560251776925568_n.jpg', 'lacoste, women, lightweight, metal, aviator'),
(16, 2, 4, 'Tory Burch Penelope Logo Leather Bracelet ', 4800, '<p><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">PRICE: 4,800</span><br style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;" /><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">Tory Burch Penelope Logo Leather Bracelet&nbsp;</span><br style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;" /><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">BNWPB &amp; DUST BAG</span><br style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;" /><br style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;" /><span style="color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;">Leather bracelets by Tory Burch feature signature designer details. Each sold separately.</span><span class="text_exposed_show" style="display: inline; color: #141823; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; font-size: 12.7272720336914px; line-height: 18px;"><br />Glossy patent leather bracelet by Tory Burch.<br />16-karat yellow gold plated signature double-T logo at center of metal bar.<br />8 1/2''''L x 1/2''''W.<br />Buckle clasp.<br />Imported.</span></p>', '10632590_1534259080180948_8529748125659174119_n.jpg', 'tory, burch, penelope, logo, leather, bracelet'),
(18, 6, 0, 'Koala', 12354, '<p>koala</p>', 'Koala.jpg', 'asdasd'),
(19, 8, 9, 'Penguin', 30123, '<p>Penguin ^_^</p>', 'Penguins.jpg', 'peng'),
(21, 0, 0, '', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`brand_id`);

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
-- Indexes for table `faq`
--
ALTER TABLE `faq`
 ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
MODIFY `faq_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
