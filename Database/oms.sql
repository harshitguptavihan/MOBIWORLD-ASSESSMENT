-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 02:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oms`
--

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `lgid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`lgid`, `email`, `password`, `details`, `date`) VALUES
(1, 'wfaiz3256@gmail.com', '1234', 'Faild', '04-05-2020'),
(5, 'shdc.bca.1.harshit@gmail.com', '@2harshitG', 'Faild', '12-02-2021'),
(6, 'admin@gmail.com', 'admin', 'SUCCESS', '12-02-2021'),
(7, 'admin@gmail.com', 'admin', 'SUCCESS', '12-02-2021'),
(8, 'shdc.bca.1.harshit@gmail.com', '@2harshitG', 'Faild', '12-02-2021'),
(9, 'shdc.bca.1.harshit@gmail.com', 'admin', 'SUCCESS', '12-02-2021'),
(10, 'shdc.bca.1.harshit@gmail.com', 'admin', 'SUCCESS', '12-02-2021'),
(11, 'admin@gmail.com', 'admin', 'SUCCESS', '12-02-2021'),
(12, 'shdc.bca.1.harshit@gmail.com', 'admin', 'SUCCESS', '12-02-2021'),
(13, 'shdc.bca.1.harshit@gmail.com', 'admin', 'SUCCESS', '12-02-2021'),
(14, 'admin@gmail.com', 'admin', 'SUCCESS', '12-02-2021'),
(15, 'admin@gmail.com', 'admin', 'SUCCESS', '12-02-2021'),
(16, 'admin@gmail.com', 'admin', 'SUCCESS', '12-02-2021');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `aid` int(6) NOT NULL,
  `uid` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `street` varchar(50) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `paymethod` varchar(20) NOT NULL,
  `cardno` varchar(20) NOT NULL,
  `expdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`aid`, `uid`, `name`, `phone`, `pincode`, `street`, `landmark`, `city`, `state`, `paymethod`, `cardno`, `expdate`) VALUES
(5, 1, 'Faiz', '8299182619', '261001', '561-A', 'xyz', 'sitapur', 'UP', 'COD', '', ''),
(6, 3, 'Harshit Gupta', '8299182619', '261001', '565', 'ABC', 'Khairabad, Sitapur', 'UP', 'COD', '', ''),
(7, 1, 'Faiz', '6456345453', '261001', '561 A', 'Near Salma Palace', 'Sitapur', 'UP', 'COD', '', ''),
(8, 1, 'Faiz', '6456345453', '261001', '561 A', '', 'Sitapur', 'UP', 'COD', '', ''),
(9, 1, 'Faiz', '8299182619', '261001', '561-A', 'xyz', 'sitapur', 'UP', 'Credit/Debit card', '1234-1234-1234-1234', '2021-10'),
(10, 1, 'Faiz', '8299182619', '261001', '561-A', 'xyz', 'sitapur', 'UP', 'Credit/Debit card', '4321-4321-4321-4321', '2022-10'),
(39, 1, 'Faiz', '8299182619', '261001', '561-A', 'xyz', 'sitapur', 'U.P.', 'COD', '', ''),
(73, 2, 'harshit', '+919559097135', '261713', 'khairabad', '', 'sitapur', 'UP', 'COD', '', ''),
(74, 1, 'faiz', '+911231231234', '262701', 'kaziyara', 'sheeba hospital', 'STP', 'UP', 'COD', '', ''),
(75, 2, 'Faiz', '+918299182619', '261001', '561-A, Sheikh Sarain,Pakka Bagh', 'Near salma palace', 'sitapur', 'Uttar Pradesh', 'Credit/Debit card', '6521-7114-5200-3212', '2021-06'),
(76, 2, 'Hamza', '+918175929397', '262701', 'maharajnagar', 'behind masjid', 'lakhimpur', 'Uttar Pradesh', 'COD', '', ''),
(77, 2, 'harshit', '+919559123467', '261001', 'Khairabad', 'makhupur', 'sitapur', 'Uttar Pradesh', 'COD', '', ''),
(78, 2, 'saif', '+919140133686', '261001', 'ANSARI TOLA', 'shaanu chaccha ki haveli', 'sitpur', 'Uttar Pradesh', 'COD', '', ''),
(79, 5, 'Faiz', '+919628844343', '261001', 'Kaziyara', 'near Salma Palace', 'Sitapur', 'Uttar Pradesh', 'COD', '', ''),
(80, 5, 'faiz', '+911231231234', '123123', 'lmp', 'abc', 'stp', 'UP', 'COD', '', ''),
(81, 2, 'hamza', '+918175929397', '262701', 'Maharajnagar', 'behind masjid', 'LMP', 'UP', 'COD', '', ''),
(82, 5, 'Adil', '+918175923942', '262701', 'Mo.maharajnagar', 'behind msjid', 'lmp', 'UP', 'COD', '', ''),
(83, 4, 'harshit ', '+915369874569', '261131', 'mo makhupur', 'khairabad', 'sitapur', 'UP', 'Credit/Debit card', '1234-1234-1234-1234', '2021-02'),
(84, 4, 'vihan', '+919559097135', '261131', 'mo makhupur', 'khairabad', 'sitapur', 'UP', 'Credit/Debit card', '1234-1234-1234-1234', '2021-07'),
(85, 4, 'harshit', '+919559097135', '261131', 'mo makhupur', 'khairabad', 'sitapur', 'UP', 'Credit/Debit card', '1234-1234-1234-1234', '2021-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `sno` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`sno`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cancel`
--

CREATE TABLE `tbl_cancel` (
  `caid` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `pid` int(5) NOT NULL,
  `oid` int(5) NOT NULL,
  `canceldate` varchar(20) NOT NULL,
  `reason` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cancel`
--

INSERT INTO `tbl_cancel` (`caid`, `uid`, `pid`, `oid`, `canceldate`, `reason`) VALUES
(4, 1, 30, 43, '2019-04-10', 'order by mistake'),
(15, 1, 4, 73, '2019-04-18', 'Need to Change Shipping Address'),
(16, 1, 14, 72, '2019-04-18', 'chufuyawgyuaw'),
(17, 2, 19, 74, '2019-04-25', 'Order by Mistake');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cid` int(6) NOT NULL,
  `pid` int(6) NOT NULL,
  `uid` int(5) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `oid` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `pid` int(6) NOT NULL,
  `doo` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `dod` varchar(30) NOT NULL,
  `currentd` varchar(20) NOT NULL,
  `proid` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`oid`, `uid`, `pid`, `doo`, `address`, `status`, `dod`, `currentd`, `proid`, `qty`) VALUES
(25, 1, 15, '2019-03-31', '8', 'Dispatched', '2019-04-07', '2021-02-12', '657115817', 1),
(26, 1, 16, '2019-03-31', '9', 'Dispatched', '2019-04-10', '2021-02-12', '82350533', 1),
(27, 1, 13, '2019-04-01', '10', 'Dispatched', '2019-04-07', '2021-02-12', '785345977', 1),
(75, 2, 5, '2019-04-25', '73', 'Delivered', '2019-04-25', '2021-02-12', '511973527', 2),
(76, 1, 27, '2019-04-25', '74', 'Delivered', '2019-04-25', '2021-02-12', '943608267', 1),
(77, 2, 42, '2019-04-25', '75', 'Delivered', '2019-04-14', '2021-02-12', '394678711', 2),
(78, 2, 69, '2019-04-25', '76', 'Delivered', '2019-04-15', '2021-02-12', '113554952', 1),
(79, 2, 56, '2019-04-25', '77', 'Ordered', '', '2021-02-12', '528628254', 2),
(80, 2, 68, '2019-04-25', '78', 'Delivered', '2019-04-25', '2021-02-12', '917930049', 1),
(81, 2, 5, '2019-04-25', '78', 'Delivered', '2019-04-25', '2021-02-12', '917930049', 1),
(85, 2, 85, '2019-04-28', '81', 'Ordered', '', '2021-02-12', '77774718', 1),
(86, 5, 16, '2019-05-01', '82', 'Dispatched', '', '2021-02-12', '593591974', 2),
(87, 4, 4, '2021-02-12', '83', 'Dispatched', '2021-02-12', '2021-02-12', '546689793', 1),
(88, 4, 4, '2021-02-12', '84', 'Ordered', '', '', '853352845', 1),
(89, 4, 4, '2021-02-12', '85', 'Delivered', '2021-02-12', '', '298581441', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_phone`
--

CREATE TABLE `tbl_phone` (
  `pid` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `series` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `rom` varchar(10) NOT NULL,
  `ss` varchar(100) NOT NULL,
  `battery` varchar(100) NOT NULL,
  `camera` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `descr` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_phone`
--

INSERT INTO `tbl_phone` (`pid`, `name`, `brand`, `series`, `category`, `type`, `color`, `price`, `image`, `ram`, `rom`, `ss`, `battery`, `camera`, `processor`, `qty`, `descr`) VALUES
(4, 'Realme 9 Prime', 'Realme', 'Redmi', 'New Launches', 'Phone', 'Red', '13000', 'mi-redmi-note-7.jpeg', '4 GB', '64 GB', '16.0 cm FHD+ Display', '4000 mAh ', '12 MP + 2 MP | 13 MP Front Camera', 'Qualcomm Snapdragon 660', 45, 'Hold the Redmi Note 7 in your hand and get ready to revel in an efficient and luxurious smartphone experience. A powerful 2.2 GHz Qualcomm Snapdragon 660 AIE octa-core processor, a (12 MP + 2 MP) dual-rear camera, a massive 16-cm (6.3) FHD+ Dot Notch Display and features such as AI Scene Detection, Face Unlock, and IR Remote Control come together to provide you with a transcendental smartphone experience.'),
(5, 'Redmi Note 7 Pro', 'Xiaomi', 'Redmi', 'New Launches', 'Phone', 'Space Black ', '13999', 'mi-redmi-note-7-pro.jpeg', '4 GB', '64 GB', '16.0 cm FHD+ Display', '4000 mAh ', '48 MP + 5 MP | 13 MP Front Camera', 'Qualcomm Snapdragon 675', 38, 'It\'s time to go big with the Redmi Note 7 Pro\'s 16-cm (6.3) FHD+ Dot Notch display. Powered by a 2.0 GHz Qualcomm Snapdragon 675 processor and 4 GB of RAM, this smartphone lets you experience the next level of performance and control. With a (48 MP + 5 MP) dual-rear camera, a 13 MP front camera, and features such as Face Unlock and 4K Video Recording, the Redmi Note 7 Pro truly puts a new spin on your smartphone experience.'),
(6, 'Redmi Note 6 Pro', 'Xiaomi', 'Redmi', 'Camera Phone', 'Phone', 'Black', '11999', 'mi-redmi-note-6-pro.jpeg', '4 GB', '64 GB', '15.9 cm FHD+ Display', '4000 mAh ', '12 MP + 5 MP | 20 MP + 2 MP Front Camera', 'Qualcomm Snapdragon 636', 29, 'Say hello to Redmi Note 6 Pro - Xiaomi\'s first smartphone that boasts an AI-powered quad-camera. Now enjoy a smart camera experience with the AI Scene Detection feature. It helps your camera understand what it is looking at and enhances the picture automatically. Take beautiful, sharp images, thanks to the Dual Pixel Autofocus technology. Its 1.4 micrometer pixel size and wider f/1.9 aperture offer you an enhanced low-light photography experience. Powered by a Qualcomm Snapdragon 636 octa-core processor and a 4000 mAh high-capacity battery, this smartphone delivers a seamless performance and up to two days of battery life.'),
(7, 'Poco F1', 'Xiaomi', 'Poco', 'Best In Performance ', 'Phone', 'Graphite Black', '22999', 'xiaomi-pocophone-f1.jpeg', '6 GB', '128 GB', '15.7 cm FHD+ Display', '4000 mAh ', '12 MP + 5 MP | 20 MP  Front Camera', 'Qualcomm Snapdragon 845', 30, 'Meet the POCO F1 - the first flagship smartphone from POCO by Xiaomi. The POCO F1 sports Qualcomm flagship Snapdragon 845 processor, an octa-core CPU with a maximum clock speed of 2.8 GHz which is supported by 6 GB of LPDDR4X RAM. It is coupled with a LiquidCool Technology that allows the device to sustain peak performance for a longer period of time. On the back, it features a 12MP + 5MP Dual Pixel AI dual camera setup. The main camera sensor features 1.4 um pixels, Dual Pixel Autofocus, and Multi-frame noise reduction. On the front, it sports a 20 MP high-res front camera and IR Face unlock. POCO F1 also boasts of a massive 4000 mAh (typ) battery with Quick Charge 3.0 to keep you going all-day long.'),
(10, 'Zenfone Max Pro  M2', 'Asus', 'Zenfone', 'Big Battery Phone', 'Phone', 'Titanium', '11999', 'asus-zenfone-max-pro-m2.jpeg', '4 GB', '64 GB', '15.9 cm FHD+ Display', '5000 mAh', '12 MP + 5 MP | 13 MP  Front Camera', 'Qualcomm Snapdragon 660', 29, 'If you\'re looking for a smartphone that\'s robust and powerful, both, inside and outside, then your search ends here. Meet the ZenFone Max Pro M2 - the smartphone that comes loaded with innovative features, such as a Snapdragon 660 processor, a 5-magnet NXP speaker and Corning Gorilla Glass 6 protection, to make your mobile experience all the more seamless and secure.'),
(11, 'Realme 2 Pro', 'Realme', 'Realme', 'Top Selling Phone', 'Phone', 'Blue Ocean', '12990', 'realme-2-pro.jpeg', '4 GB', '64 GB', '16.0 cm FHD+ Display', '3500 mAh ', '16 MP + 2 MP | 16 MP  Front Camera', 'Qualcomm Snapdragon 660', 28, 'The Realme 2 Pro is a treat for all you entertainment and gaming addicts. With a large 16 cm (6.3) FHD screen and a high screen-to-body ratio, this phone has a futuristic design and ensures that nothing comes between you and the screen. Powered by the Qualcomm Snapdragon 660 AIE (Artificial Intelligence Engine) processor and 4 GB of RAM, this Realme smartphone ensures enhanced efficiency and intelligent performance.'),
(12, 'Realme 2 ', 'Realme', 'Realme', 'Top Selling Phone', 'Phone', 'Diamond Black', '9499', 'realme-2.jpeg', '3 GB', '32 GB', '15.57 cm HD+ Display', '4230 mAh ', '13 MP + 2 MP | 8 MP Front Camera', 'Qualcomm Snapdragon 450', 21, 'A quick face scan or one simple touch on the Fingerprint Sensor and the Realme lays out your phone’s content for you. Its 15.74 cm is an indulgent treat; streaming videos or gaming are immersive on this phone. A standout feature about the Realme is its back which has a glossy finish that reflects light. Use your phone as an assistant, use it to record videos or to take pictures of everyday things that inspire you; its 4230 mAh battery powers a long-lasting life.'),
(13, 'Samsung Galaxy S10 Plus', 'Samsung', 'Galaxy ', 'Flagship ', 'Phone', 'Prism Black', '73900', 'samsung-galaxy-s10-plus.jpeg', '8 GB', '128 GB', '16.26 cm Quad HD+ Display', '4100 mAh ', '16 MP + 12 MP + 12 MP | 10 MP + 8 MP Dual Front Camera', 'Exynos 9 9820', 28, 'Get ready to explore the next generation of powerful computing and mobile photography with the Samsung Galaxy S10 Plus. It comes with an Intelligent Camera that automatically optimizes its settings to give you picture-perfect photos. That\'s not all, the Samsung S10 Plus has the Infinity-O Display and a seamless design that make this smartphone a true masterpiece.'),
(14, 'Samsung Galaxy A9', 'Samsung', 'Galaxy ', 'Camera Phone', 'Phone', 'Bubblegum Pink', '30990', 'samsung-galaxy-a9.jpeg', '6 GB', '128 GB', '16.0 cm FHD+ Display', '3800 mAh ', '24 MP + 5 MP + 10 MP + 8 MP | 24 MP Front Camera', 'Qualcomm Snapdragon 660', 29, 'With the Samsung Galaxy A9, you’ll be thoroughly entertained all day long. It comes equipped with a Quad Camera system, a fingerprint sensor, and offers a large internal storage space (128 GB) and Face Unlock to ensure that you put an end to your habit of ‘compromise’. With these features, you’ll be delighted to capture stellar images without easily running out of space. And, if you’re bored of unlocking your phone the usual way, simply hold it up to your face and unlock it with a simple glance.'),
(15, 'Nokia 6.1 Plus', 'Nokia', '6', 'New Launches', 'Phone', 'Onyx Black', '15000', 'nokia-6-1-plus.jpeg', '4 GB', '64 GB', '14.73 cm FHD+Display', '3060 mAh ', '16 MP + 5 MP | 16 MP Front Camera', 'Qualcomm Snapdragon 636', 32, '#BringItOn with AI imaging and a 19:9 Full HD experience! Feel entertainment to the fullest with the Nokia 6.1 Plus\' immersive display, at home or on the road. Its 14.73-cm (5.8) Full HD display and 19:9 ratio bring you closer to the action. Make the most out of every click with its dual-sensor rear camera (16 MP + 5 MP) and 16 MP front camera for lifelike selfies. Games, movies or videos - get the speed to make the experience lag-free, thanks to the Qualcomm Snapdragon 636 processor that this box of innovations comes with. The icing on the cake, you ask? The Nokia 6.1 Plus features an extended battery life to make all your cinematic cravings last as well!'),
(16, 'Apple Iphone X', 'Apple', 'X ', 'Flagship', 'Phone', 'Space Gray', '73500', 'iphonex.jpeg', '3 GB', '64 GB', '14.73 cm QHD Display', '2150 mAh', '12 MP + 12 MP | 7 MP Front Camera', 'A11 Bionic Chip, Neural Engine, Embedded M11', 22, 'Meet the iPhone X - the device that\'s so smart that it responds to a tap, your voice, and even a glance. Elegantly designed with a large 14.73 cm (5.8) Super Retina screen and a durable front-and-back glass, this smartphone is designed to impress. What\'s more, you can charge this iPhone wirelessly.'),
(17, 'Apple Iphone 8 ', 'Apple', '8', 'Flagship', 'Phone', 'Red', '59990', 'iphone8.jpeg', '3 GB', '64 GB', '11.94 cm QHD Display', '1850 mAh', '12 MP Rear Camera | 7 MP Front Camera', 'A11 Bionic Chip, Neural Engine, Embedded M11', 29, 'An all-new glass design, an updated camera, and a powerful chip, there\'s so much to love about the iPhone 8. This iPhone brings you an augmented reality experience that\'s more immersive than before. What\'s more? You can charge your iPhone wirelessly!'),
(18, 'Apple Iphone 8 Plus', 'Apple', '8', 'Flagship', 'Phone', 'Space Gray', '64990', 'iphone8plus.jpeg', '3 GB', '64 GB', '12.94 cm QHD Display', '1950 mAh', '12 MP + 12 MP | 7 MP Front Camera', 'A11 Bionic Chip, Neural Engine, Embedded M11', 30, 'An all-new glass design, an updated camera, and a powerful chip, there\'s so much to love about the iPhone 8 Plus. This iPhone brings you an augmented reality experience that\'s more immersive than before. What\'s more? You can charge your iPhone wirelessly!'),
(19, 'Honor 7S', 'Huawei', '7', 'Budget Phone', 'Phone', 'Black', '5499', 'honor-7s.jpeg', '2 GB', '16 GB', '13.84 cm HD+ Display', '3020 mAh', '13 MP Rear Camera | 5 MP Front Camera', 'Mediatek MT6739 Cortex A53 Processor', 25, 'The Honor 7S Smartphone is here to elevate your experience with its impressive FullView Display and crystal clear volume. Adding to this is the presence of a 13 MP Rear Camera that lets you capture moments at their memorable best. Your selfies too will seem clearer, as it is equipped with an LED Selfie-light.'),
(20, 'Honor 9N', 'Huawei', '9', 'Top Selling Phone', 'Phone', 'Purple', '9999', 'honor-9n.jpeg', '4 GB', '64 GB', '14.83 cm FHD+ Display', '3000 mAh', '13 MP + 2 MP | 16 MP Front Camera', 'Kirin 659', 24, 'From movies to mobile games, now enjoy a seamless viewing experience on this smartphone, thanks to its Honor Notch FullView 14.84 cm FHD+ Display (19:9 aspect ratio). It offers more screen space for a stunning visual experience. The 12-layer premium glass design on the rear, and the double-sided 2.5D curved glass lend the Honor 9N a sleek and an elegant look. Capture bright and beautiful selfies, even in dimly lit conditions with this phone\'s 16 MP front camera. Take your photography-game up a notch with the 13+2 MP dual rear camera system. It comes with a professional-level bokeh mode for stunning photos. The Kirin 659 Octa-core 2.36 GHz processor of this phone ensures a lag-free, multitasking experience.'),
(21, 'Asus Zenfone Max M2', 'Asus', 'Zenfone', 'Big Battery Phone', 'Phone', 'Silver', '8499', 'asus-zenfone-max-m2.jpeg', '3 GB', '32 GB', '15.9 cm FHD+ Display', '4000 mAh', '13 MP + 2 MP | 8 MP Front Camera', 'Qualcomm Snapdragon 632', 29, 'Say hello to the ZenFone Max M2 - a smartphone that comes loaded with a host of innovative features that will leave you wanting for more. It takes advantage of a 4000 mAh battery, an octa-core Qualcomm Snapdragon 632 processor and 3 GB of RAM to offer you a performance that commands respect.'),
(22, 'Samsung Galaxy On Max', 'Samsung', 'On', 'Top Selling Phone', 'Phone', 'Gold', '9990', 'samsung-on-max.jpeg', '4 GB', '64 GB', '13.97 cm FHD+ Super Amoled Display', '3300 mAh', '13 MP Rear Camera | 8 MP Front Camera', 'Exynos 7870', 29, 'Meet the Samsung On Max with flagship camera f/1.7 - the smartphone that enhances your multimedia experience. With a 13 MP rear camera and 13 MP front camera, this smartphone takes your mobile photography to the next level. Its powerful octa-core processor, along with 4 GB RAM makes way for a lag-free multitasking experience.'),
(23, 'Samsung Galaxy A10', 'Samsung', 'A', 'New Launches', 'Phone', 'Black', '8490', 'samsung-galaxy-a10.jpeg', '2 GB', '32 GB', '15.75 cm FHD+ Super Amoled Display', '3400 mAh', '13 MP Rear Camera | 5 MP Front Camera', 'Exynos 7884', 24, 'Take your smartphone experience to the next level with the Samsung Galaxy A10. You can watch everything on its 15.80 cm (6.2) Infinity-V Display come to life. Powered by the Exynos 7884 Processor and 3400-mAh Battery, there is very little that this phone cannot handle.'),
(24, 'Samsung Galaxy A30', 'Samsung', 'A', 'New Launches', 'Phone', 'Blue', '16990', 'samsung-galaxy-a30.jpeg', '4 GB', '64 GB', '16.26 cm FHD+ Super Amoled Display', '4000 mAh', '16 MP + 5 MP | 16 MP Front Camera', 'Exynos 7904', 30, 'Explore the world with the Samsung Galaxy A30 smartphone. Its sAMOLED 16.21 cm (6.4) FHD+ Infinity-U Display redefines your visual experience. The Dual Camera System, comprising the 16 MP Low Light Camera and 5 MP Ultra-wide Camera, lets you take rich and beautiful pictures. Powered by the Exynos 7904 Processor and 4 GB of RAM, this phone will make multitasking seamless.'),
(25, 'Samsung Galaxy S8 ', 'Samsung', 'S', 'Flagship', 'Phone', 'Midnight Black', '29990', 'samsung-galaxy-s8-plus.jpeg', '4 GB', '64 GB', '14.73 cm QHD Super Amoled Display', '3000 mAh', '12 MP Rear Camera | 8 MP Front Camera', 'Exynos 8895', 29, 'Explore a world of endless possibilities with the Samsung Galaxy S8. Featuring the innovative Infinity Display, this smartphone offers a smooth, curved surface without sharp angles. With an array of security features, such as the Iris Scanner, Face Recognition and a fingerprint sensor, the Galaxy S8 keeps all your private data safe from unauthorized access. Its 10nm processor, along with 4 GB of RAM, delivers a power-packed performance. The 8 MP front camera and the 12 MP rear camera further add to the Galaxy S8’s appeal.'),
(26, 'Oppo K1', 'Oppo', 'K', 'Camera Phone', 'Phone', 'Piano Black', '16990', 'oppo-k1.jpeg', '4 GB', '64 GB', '16.28 cm FHD+ Amoled Display', '3600 mAh', '16 MP + 2 MP | 25 MP Front Camera', 'Qualcomm Snapdragon 660', 27, 'Take the smartphone experience to the next level with the Oppo K1. While the In-display Fingerprint Sensor lets you unlock the phone in a jiffy, the 3D Gradient Body exudes elegance. Watch everything on its 16.25 cm (6.4) Waterdrop Screen come to life. The Qualcomm Snapdragon 660AIE Mobile Platform, along with 4 GB of RAM, delivers a seamless performance.'),
(27, 'Vivo V15 Pro', 'Vivo', 'V', 'Camera Phone', 'Phone', 'Topaz Blue', '28990', 'vivo-v15-pro.jpeg', '6 GB', '128 GB', '16.23 cm FHD+ Display', '3700 mAh', '48 MP + 8 MP + 5 MP AI Rear Camera | 32 MP Front Camera', 'Qualcomm Snapdragon 675 AIE', 31, 'Take your smartphone and mobile-photography experience to the next level with the Vivo V15 Pro. Equipped with a triple rear camera (48 Million Quad Pixel Sensor (12 Million Effective Pixel) + 8 MP + 5 MP) and a 32 MP Pop-up Selfie camera, this smartphone lets you take stunning pictures and selfies, every time. Its 16.23 cm (6.39) FHD+ Super AMOLED Ultra FullView display ensures an immersive entertainment experience while its 3700 mAh battery, with Dual-engine Fast Charging feature, keeps you going all day. That\'s not all, it\'s powered by the Qualcomm Snapdragon 675AIE processor and 6 GB of RAM which let you multitask like a pro. Save pictures, music files and other multimedia files without worrying about running out of storage space as this Vivo smartphone comes with 128 GB of internal storage space which can be expanded by up to 256 GB.'),
(28, 'Mi Bluetooth Headset', 'Xiaomi', 'B1', 'Bluetooth Devices', 'Accessory', 'Black', '899', 'bluetooth.jpg', '', '', '', '', '', '', 30, 'Bluetooth Headphone Earphone Headset. Headset Profile, Hands-free Profile(DSP technology) Support Bluetooth stereo music playback Bluetooth can be simple pairing safely Can be casual talk while driving/working or walking Perfect headset to help you keep your hands free whether you are working in the office or driving in your car. Applicable models: compatible with all major brand Bluetooth mobile phone as a hands-free use'),
(30, 'Raptas S530 Bluetooth Headset with Mic', 'Raptas', 'S530', 'Bluetooth Devices', 'Accessory', 'Black, In the Ear', '225', 'raptas.jpeg', '', '', '', '', '', '', 34, 'Adopts the latest Bluetooth V4.1 technology One serves for two cell phones or devices at the same time Low energy consumption with ultra-long standby and talking time Support voice prompt and number report when phone call is coming With in-ear style, it is very convenient when driving and doing sports Lightweight and portable, easy to carry this S530 Mini Concealed Wireless Bluetooth V4.1 In-Ear Earphone with Microphone! Thanks to its high-tech wireless and Bluetooth functions, this earphone plays smart performance quite different from traditional one. It is in-ear style, delivering ultra comfortable wearing. Also, this concealed earphone has no negative impact on your entire personality. It ensures excellent sound quality, so you will not feel disappointed!'),
(31, 'Syska LB300 Bluetooth Headset with Mic', 'Syska', 'LB300', 'Bluetooth Devices', 'Accessory', 'Black, In the Ear', '899', 'syskabt.jpeg', '', '', '', '', '', '', 30, 'Multi-Point Connection: Pair 2 Phones Simultaneously. A2DP Mono Audio Streaming. Battery Meter Displayed on Iphone. Complete Call Control Functions.'),
(33, 'boAt Rockerz 400 Super Extra Bass Bluetooth Headset with Mic', 'boAt', 'Rockerz', 'Bluetooth Devices', 'Accessory', 'Grey, Green, On the Ear', '1499', 'boat-rockerz-on-ear-400-.jpeg', '', '', '', '', '', '', 30, 'Now just worrying about Wires hanging from here and there.  Connect with any Bluetooth device, connect and play. Dead Batteries can kill your vibe. BoAt Rockerz is designed to play Up to 8 hours. It has a High Definition Sound. Do not just be loud, be loud and clear. We guarantee you have not heard such powerful bass and vocal clarity from a wireless headphone. The boAt Super Bass Rockerz 400 Wireless Headphones will make your listening experience personal and for real. Plug it in and Plug into Nirvana!'),
(34, 'Honor Band 4', 'Huawei', '4', 'Fitness Devices', 'Accessory', 'Coral Pink Strap, Size : Regular', '2599', 'crs-b19-honor-original.jpeg', '', '', '', '', '', '', 30, 'Go for a swim wearing the Honor Band 4 and allow it to calculate the number of laps you just completed. The Honor Band 4 is water-resistant up to 50 meters and comes with premium features that will help you monitor your sleep and heart rate. '),
(35, 'Skullcandy Method Bluetooth Headset with Mic', 'Skullcandy', 'Method Bluetooth', 'Bluetooth Devices', 'Accessory', 'Navy Blue, In the Ear', '3699', 'skullcandy-s2cdw-j477-.jpeg', '', '', '', '', '', '', 30, 'Sound clarity is good high on bass just fix/configure sound parameters in your phone/device (phone music player) to your comfort and you will have a good experience. Definitely on the good side.'),
(36, 'JBL T205BT Bluetooth Headset with Mic', 'JBL', 'T205BT', 'Bluetooth Devices', 'Accessory', 'Blue, In the Ear', '2399', 'jbl-t205bt-original-.jpeg', '', '', '', '', '', '', 30, 'It is not practical to listen to music while commuting using large speakers or bulky headphones - is not it? These headphones from JBL come with a Long-lasting Battery and Comfort Fit Earbuds so you can listen to your favourite songs or podcasts for long hours without compromising on comfort.'),
(37, 'Syska LB300 Bluetooth Headset with Mic', 'Syska', 'LB300 ', 'Bluetooth Devices', 'Accessory', 'Rose Gold, In the Ear', '650', 'z-lb-300-pi-syska-original.jpeg', '', '', '', '', '', '', 30, '\r\nMulti-Point Connection: Pair 2 Phones Simultaneously. A2DP Mono Audio Streaming. Battery Meter Displayed on Iphone. Complete Call Control Functions.'),
(38, 'iBall Mini Earwear A9 Bluetooth Headset with Mic', 'iBall', 'A9', 'Bluetooth Devices', 'Accessory', 'Black, In the Ear', '989', 'iball-mini-earwear-a9-original-.jpeg', '', '', '', '', '', '', 30, ' Bluetooth Headphone Earphone Headset. Headset Profile, Hands-free Profile(DSP technology) Support Bluetooth stereo music playback Bluetooth can be simple pairing safely Can be casual talk while driving/working or walking Perfect headset to help you keep your hands free whether you are working in the office or driving in your car. Applicable models: compatible with all major brand Bluetooth mobile phone as a hands-free use '),
(39, 'Piixy FB260 Fitness Smart Band', 'Piixy', 'FB260', 'Fitness Devices', 'Accessory', 'Black Strap, Size : Free Size', '656', 'piixy fitness.jpeg', '', '', '', '', '', '', 30, 'Piixy presents its latest range of Smart Band for all the fitness and tech enthusiasts.These watches are fashionable too making you distinguished in the crowd. Fully compatible with various smartphones (Android and Apple IOS system) Multi-functional Fitness Tracker: Accurately track your steps distance calories burnt sleep quality and heart rate all day. With the green light detector and precision optical sensor the heart rate monitor measure the heart rate Blood pressure at the top of the hour automatically. '),
(40, 'Samsung Galaxy Buds True Wireless Bluetooth Headset with Mic', 'Samsung', 'Galaxy', 'Bluetooth Devices', 'Accessory', 'Black, In the Ear', '9990', 'samsung-sm-r.jpeg', '', '', '', '', '', '', 30, 'With these Samsung Galaxy earbuds you can walk run jog and dance without having them fall out of your ears - thanks to their snug fit. They also feature a slim design that allows you to carry them along with you no matter where you go. '),
(41, 'Apple AirPods Bluetooth Headset with Mic', 'Apple', 'AirPods 1', 'Bluetooth Devices', 'Accessory', 'White, In the Ear', '12699', 'apple-airpods-original.jpeg', '', '', '', '', '', '', 30, 'Wireless. Effortless. Magical. AirPods will forever change the way you use headphones. Whenever you pull your AirPods out of the charging case they instantly turn on and connect to your iPhone Apple Watch iPad or Mac. Audio automatically plays as soon as you put them in your ears and pauses when you take them out. To adjust the volume change the song make a call or even get directions just double-tap to activate Siri. Driven by the custom Apple W1 chip AirPods use optical sensors and a motion accelerometer to detect when they are in your ears.'),
(42, 'Apple Watch Series 4 GPS + Cellular 44 mm Space Grey Aluminium Case with Black Sport Band', 'Apple', 'Series 4', 'Fitness Devices', 'Accessory', 'Black Strap Regular', '52900', 'mtvu2hn-a-apple-original-.jpeg', '', '', '', '', '', '', 28, 'Stay connected to the world and get fit in style with the Apple Watch Series 4. Strap on the stylish Apple Watch and listen to music view photos and messages track your fitness levels and more. Featuring a stylish design this Apple watch is your ideal partner when it comes to work or workouts.'),
(44, 'Mi Band HRX - Edition', 'Xiaomi', 'HRX Edition', 'Fitness Devices', 'Accessory', 'Black Strap Size : Regular', '1299', 'band-lite-mi-original.jpeg', '', '', '', '', '', '', 30, 'The Mi Band - HRX Edition is a watch and a fitness tracker built into one smart band. Whether you want to view time or check fitness stats - do all that and more by simply lifting your wrist and tapping the current time button. It is as easy as that.'),
(45, 'Samsung Gear S2 Classic Platinum Smartwatch', 'Samsung', 'Gear S2', 'Fitness Devices', 'Accessory', 'Black Strap Regular', '16990', 'sm-samsung-original-.jpeg', '', '', '', '', '', '', 30, 'A watch with a platinum dial or a rose gold plated dial. You can choose the Samsung Gear 2 Classic smartwatch that you think suits your style better. Or you can have both. The sleek strap of the watch is designed to look very attractive on your wrist. The watch has bezel that you can rotate to choose the different features. You can now play songs reply to texts and track your health the easier way with your Samsung smartwatch.'),
(46, 'Apple Watch Series 3 GPS - 42 mm Space Grey Aluminium Case with Black Sport Band', 'Apple', 'Series 3', 'Fitness Devices', 'Accessory', 'Black Strap Regular', '29999', 'mtf32hn-a-apple-original.jpeg', '', '', '', '', '', '', 30, 'Monitor your health. Track your workouts. Get the motivation you need to achieve your fitness goals. And stay connected to the people and information you care about. With Apple Watch Series 3 you can do it all â€” from your wrist.'),
(47, 'Mi Band 3', 'Xiaomi', 'Mi Band', 'Fitness Devices', 'Accessory', 'Black Strap Size : Regular', '1999', 'xmsh05hm-mi-original-.jpeg', '', '', '', '', '', '', 30, 'With the Mi Band 3 wrist wear keep an eye on your daily fitness activities and also do not miss any important call text and/or app notification on your smartphone. This smart wearable device features an OLED Touchscreen a 5ATM (up to 50 M) Water-resistant Rating and a Daily Step Count and Heart Rate Monitor to ensure that you monitor your physical activities all the time.'),
(48, 'Samsung Gear S3 - Frontier Smartwatch', 'Samsung', 'Gear S3', 'Fitness Devices', 'Accessory', 'Black Strap Regular', '22990', 'r760n-samsung-original.jpeg', '', '', '', '', '', '', 30, 'Look sophisticated and work efficiently when you put on the Samsung Gear S3 smartwatch. Its elegant Super AMOLED Always On Display is surrounded with a bezel which you can turn to listen to music turn of off alarms and scroll through your inbox.  It also comes with a built-in GPS to let you enjoy your adventures without worrying about being lost.'),
(49, 'Apple Watch Series 2 - 42 mm Stainless Steel Case with White Sport Band ', 'Apple ', 'Series 2', 'Fitness Devices', 'Accessory', 'White Strap Medium', '45360', 'mnpr2hn-a-apple-original.jpeg', '', '', '', '', '', '', 30, 'With a stylish stainless steel case a sturdy rubber sports band and a blazing-fast S2 dual-core processor the Apple Watch is as attractive and durable as it is efficient. Its bright OLED Retina touchscreen display features Force Touch up to 1000 nits. This water-resistant smartwatch also features an inbuilt GPS and the Global Navigation Satellite System (GLONASS) making it ideal for adventurous journeys. The Sapphire crystal screen of this watch is quite tough and is resistant to potential scratches and damages.'),
(50, 'Mi MDY-08-EX 2A Fast Mobile Charger', 'Xiaomi', 'MDY-08', 'Chargers and USB Cables', 'Accessory', 'Black', '399', 'mi-mdy-08-ex-original.jpeg', '', '', '', '', '', '', 30, 'Designed For\r\nAsus (Zenfone/Zenfone 3_max) Honor( 7A/9/9 lite/ Holloy 3) Infinix(hot 4 Pro/Note 4/) iVooMi I2, Lava( A52) Mi(Redmi 5A/Redmi note 4/Redmi Note 5/Redmi Note 5 pro) Micromax (Spark 4g) Motorola Moto( E4 plus/G5s/G6 Play) OPPO(F3/F3 Plus/F7) Samsung galaxy(J3 pro/On Nxt/On5) Samsung Guru Music 2 VIVO(V9/V9 Plus) Yu(Yunique 2 /2 Plus)\r\n'),
(55, 'Mivi 3.1 A Dual Port Smart Wall Mobile Charger', 'Mivi', 'Wall Mobile Charger', 'Chargers and USB Cables', 'Accessory', 'Black ', '599', 'mivi-smart-original-.jpeg', '', '', '', '', '', '', 30, 'Smart Charge: Auto Detects the connected device and charges it at the fastest speed of the device up to 2.1A Two Smart Usb Ports: Either port can output 2.1A and the other port 1A. This will allow you to charge your tablet and phone simultaneously to a combined output of 3.1 A. Works with all phones and tablets including Apple iPhone iPad Samsung LeTv OnePlus Xiaomi HTC Motorola Coolpad Asus Zenfone and more Connector Independent. Works with Micro USB Lightning and Type C cables.'),
(56, 'HTC E250 Fast Mobile Charger', 'HTC', 'E250', 'Chargers and USB Cables', 'Accessory', 'Black', '249', 'htc-e250-fast-original.jpeg', '', '', '', '', '', '', 28, 'Protection from Overcharging Protects from Short Circuit Safe from Hazards Universally Compatible with All Phone Brands Slim and Light Design and is Highly Portable Indian Plug Compact and Travel Friendly Sleek and Stylesh Design.'),
(57, 'Apple ML8M2HN/A 5W Mobile Charger', 'Apple', 'ML8M2HN', 'Chargers and USB Cables', 'Accessory', 'White', '1399', 'apple-ml8m2hn-a-5w-original.jpeg', '', '', '', '', '', '', 30, 'Wall Charger \r\nSuitable For: Mobile\r\nNo Cable Included\r\nUniversal Voltage\r\nOutput Current : 1 A'),
(58, 'Sony CP-AD2A/BCABIN5 2.1A adapter with 1.5m USB-A to Micro USB Cable Fast Mobile Charger', 'Sony', 'CP-AD2A/BCABIN5', 'Chargers and USB Cables', 'Accessory', 'Black, Cable Included', '699', 'sony-cp-ad2a-bcabin5-2-1a-adapter.jpeg', '', '', '', '', '', '', 30, ' fast charger 3.0, asus charger, samsung original charger, mivi charger, nokia charger, dash charger, quick charge 3.0, adapter, MI Note 4 mobile charger, erd mobile charger, multi charger, redmi 3s prime charger, flipkart charger, adaptor, mi mobile charger, qualcomm quick charger 3.0, apple charger, vivo charger, motorola turbo charger, mi fast charger, moto e3 power charger, vivo mobile charger, sony charger, motorola charger, kado charger, moto g4 plus turbo charger, flipkart smartbuy, redmi note 4 mobile charger, fast charger for mobile, redmi charger, lenovo mobile charger, moto charger, lenovo charger, mi charging adapter, redmi note 4 charger, turbo charger, moto turbo charger, samsung mobile charger, fast charger, mobile charger, samsung charger, charger, mi charger'),
(59, 'Samsung EP-TA60IBEUGIN Mobile Charger ', 'Samsung', ' EP-TA60IBEUGIN', 'Chargers and USB Cables', 'Accessory', 'Black, Cable Included', '449', 'samsung-ep-ta60ibeugin.jpeg', '', '', '', '', '', '', 30, 'Charger for all Samsung Smartphones. Charger is Compact, Short Circuit And Overload Resistant, Low Energy Consumption, Increases the phone efficiency'),
(60, 'boAt WCD 3.1A Mobile Charger', 'boAt', 'WCD', 'Chargers and USB Cables', 'Accessory', 'Black', '449', 'boat-wcd-3-1a-original.jpeg', '', '', '', '', '', '', 30, ' The boAt Wall Charger 3.1A makes for super-fast charging with a DC5V-3.1A speed. It comes with a dual port connection, so keep your devices well juiced at any time. The charger is adapted for a wide input range from 90-380V with Smart IC to fit all your needs. Designed with corrosion resistant pins and a protection against high voltage, you can plug into charge without an ounce of worry. A long life means that this product will keep giving back, with up 10000 cycles of premium speed charge. Stay plugged into your game with the boAt Wall Charger 3.1A.'),
(61, 'Syska WC-2A Mobile Charger', 'Syska', 'WC', 'Chargers and USB Cables', 'Accessory', 'Black, Cable Included', '350', 'syska-wc-2a-original.jpeg', '', '', '', '', '', '', 30, 'Wall Charger, Micro USB Charging Cable, User Manual, Warranty Card,  Overload, Over Current, Short Circuit Protection, Fire Retardant Housing and PCB'),
(62, 'Philips DLC2508M  Round Lightning Cable  ', 'Philips', ' DLC2508M', 'Chargers and USB Cables', 'Accessory', 'White', '699', 'philips-dlc2508m-original.jpeg', '', '', '', '', '', '', 30, 'Compatible with iPhone,iPad & iPod Models :- iPhone XS,iPhone XS Max,iPhone XR,iPhone X,iPhone 8,iPhone 8 Plus,iPhone 7,iPhone 7 Plus,iPhone 6s,iPhone 6s Plus,iPhone 6,iPhone 6 Plus,iPhone SE,iPhone 5s,iPhone 5c,iPhone 5,iPad Pro 10.5-inch,iPad (6th Generation),iPad mini 4,iPad Pro 12.9-inch (2nd Generation),iPad Pro 12.9-inch (1st Generation),iPad Pro 9.7-inch,iPad (5th Generation),iPad mini 3,iPad mini 2,iPad mini,iPad Air 2,iPad Air,iPod touch (6th Generation),iPod touch 5th Generation,iPod nano 7th Generation'),
(63, 'Sony CP-AC100 USB Type C Cable', 'Sony', 'CP-AC100', 'Chargers and USB Cables', 'Accessory', 'White', '429', 'sony-cp-ac100-original.jpeg', '', '', '', '', '', '', 30, 'Length 1 m Round Cable Connector One: USB Type-A|Connector Two: USB Type-C Cable Speed: 480 Mbps Mobile, Tablet'),
(64, 'Mi SJX02ZM 2 in 1 USB Type C Cable', 'Xiaomi', 'SJX02ZM', 'Chargers and USB Cables', 'Accessory', 'White', '269', 'mi-sjv4092in-original-.jpeg', '', '', '', '', '', '', 30, 'Length 1 m Round Cable Connector One: USB Type A|Connector Two: USB Type C Cable Speed: 480 Mbps. For Camera, Tablet, Mobile, Computer'),
(65, 'Mivi 6ft Nylon Braided Micro Usb Charging Cable Micro USB Cable', 'Mivi', 'Braided Series', 'Chargers and USB Cables', 'Accessory', 'Black', '279', 'mivi-6ft-nylon-braided-micro-usb-charging-cable.jpeg', '', '', '', '', '', '', 30, 'Get set to charge your devices faster and transfer data quicker with the help of this USB cable from Mivi. It has a length of 1.8 m and is braided with high-quality nylon to prevent tangling.'),
(66, 'Mi SJV4116IN 1.2m Micro USB Cable', 'Xiaomi', 'SJV4116IN', 'Chargers and USB Cables', 'Accessory', 'Black', '229', 'mi-sjv4116in-origina.jpeg', '', '', '', '', '', '', 30, 'Length 1.2 m Round Cable Connector One: Micro USB|Connector Two: USB Type A Cable Speed: 480 Mbps Mobile'),
(67, 'Sony XB55AP Wired Headset with Mic', 'Sony', 'XB55AP ', 'Earphones', 'Accessory', 'Blue, In the Ear', '1829', 'sony-mdr-xb55ap-original.jpeg', '', '', '', '', '', '', 30, 'Shiny Metallic Finish Housing, Headphones Made for Electronic Dance Music, In-line Mic for Hands-free Phone Calling, Comfortable, Secure-fitting Silicone Earbuds for Long Listening Hours, Serrated Tangle Free Cord, Microphone Form Factor, Impedance: 1 kHz, Lightweight'),
(68, 'Sennheiser CX 180 Wired Headphone', 'Sennheiser', 'CX 180', 'Earphones', 'Accessory', 'Black, Grey, In the Ear', '749', 'sennheiser-cx-180-original.jpeg', '', '', '', '', '', '', 29, 'You know what is more annoying than getting stuck in a traffic jam? It is listening to all the honking. Do not let traffic ruin your day - get these Sennheiser CX 180 ear canal headphones and make commuting fun. With these earphones on, you can enjoy listening to music anywhere and everywhere peacefully, thanks to its crisp sound and unrivalled bass.'),
(69, 'Skullcandy Ink\'d Headset with mic', 'Skullcandy', 'Ink\'d', 'Earphones', 'Accessory', 'Gray Mint, In the Ear', '999', 'skullcandy-s2ikjy-528-original.jpeg', '', '', '', '', '', '', 29, 'The Skullcandy earphones are perfect for listening to music while you are commuting. Sleek and easy to pack, these earphones ensure that you have a quality listening experience every time you put them on.'),
(70, 'Sony EX14AP Wired Headset with Mic', 'Sony', 'EX14AP', 'Earphones', 'Accessory', 'Black, In the Ear', '649', 'sony-mdr-ex14ap-original.jpeg', '', '', '', '', '', '', 30, ' Enhance your aural experience with this pair of Sony in-the-ear headphones. Thanks to its 9 mm Neodymium Drivers and 8 Hz to 22 kHz Frequency Range, these headphones ensure powerful and balanced sound.  In-line Mic for Hands-free Calling Featuring an In-line Mic, this pair of Sony wired headphones allows you to easily switch from listening to music to answering your calls. It also works vice-versa as it allows you to end your call and then switch back to your music.'),
(71, 'Realme Buds Wired Headset with Mic', 'Realme ', 'Realme Buds ', 'Earphones', 'Accessory', 'Black, In the Ear', '499', 'realme-rma101-original-imafchcshkyprrfg.jpeg', '', '', '', '', '', '', 30, ' Put on these earphones from Realme and listen to your favourite tunes in their finest quality. These earphones have been ergonomically designed using Kevlar Fibre and Built-in Magnets for enhanced durability. That is not all, with a mic in place, you can enjoy clear conversations with your dear ones.'),
(72, 'Philips SHE1525BK 94 Wired Headset with Mic ', 'Philips', 'SHE1525BK', 'Earphones', 'Accessory', 'Black, In the Ear', '375', 'philips-in-she1525bk-94-.jpeg', '', '', '', '', '', '', 30, 'Comes With Microphone. Designed as Canalphone for extreme comfort. Compatible With Laptop, Audio Player, Tablet, Mobile.'),
(73, 'JBL C150SI Wired Headset with Mic', 'JBL', 'C150SI', 'Earphones', 'Accessory', 'Black, In the Ear', '799', 'jbl-c150siublk-original.jpeg', '', '', '', '', '', '', 30, 'The new JBL C150SI is a dynamic, ultra-lightweight in-ear headphone. Its powerful 9mm drivers deliver the feel-it-in-your-bones bass response and legendary sound quality you expect from JBL. They are feather-light for all-day comfort. An in-line microphone with universal remote control lets you talk and manage your calls on Android and iOS devices.'),
(74, 'boAt BassHeads 100 Wired Headset with Mic ', 'boAt', 'BassHeads', 'Earphones', 'Accessory', 'Black, In the Ear', '375', 'boat-bassheads-100-original.jpeg', '', '', '', '', '', '', 30, 'It has a High Definition Sound. Do not just be loud, be loud and clear. We guarantee you have not heard such powerful bass and vocal clarity from a earphone. The boAt Bassheads  earphones will make your listening experience personal and for real. Plug it in and Plug into Nirvana! '),
(75, 'Motorola Pulse Max Wired Headset with Mic ', 'Motorola', 'Pulse Max', 'Headphones', 'Accessory', 'White, Over the Ear', '999', 'motorola-pulse-max-original.jpeg', '', '', '', '', '', '', 30, 'With Microphone: Yes Design: Over the Head Compatible With: Laptop, Audio Player, Tablet, Mobile Headphone Jack: 3.5 mm Tangle resistant cables for uninterrupted listening experience High sensitivity enabled to hear all the highs and lows 1.2 meters of cord length, ensures a comfortable listening experience Powerful drivers ensures a wonderful listening experience In line microphone, for making and receiving calls hands-free'),
(76, 'boAt BassHeads 900 Super Extra Bass Wired Headset with Mic', 'boAt', 'BassHeads 900', 'Headphones', 'Accessory', 'Pearl White, On the Ear', '1299', 'boat-bassheads-900-white-original.jpeg', '', '', '', '', '', '', 30, 'With Microphone: Yes Design: Over the Head Compatible With: Laptop, Audio Player, Tablet, Mobile Headphone Jack: 3.5mm Feather light Foladable Cups'),
(77, 'Sony 310AP Wired Headset with Mic', 'Sony', '310AP', 'Headphones', 'Accessory', 'Black, Over the Ear', '999', 'sony-mdr-zx310apbce-original.jpeg', '', '', '', '', '', '', 30, 'Just plug in these over-the-head headphones and enjoy listening to music in high clarity wherever you are, and whenever you want. With these headphones in your bag, you can go places without feeling bored as these headphones deliver great music quality.'),
(78, 'JBL T250SI Wired Headphone', 'JBL', 'T250SI', 'Headphones', 'Accessory', 'Black, On the Ear', '899', 'jbl-t250si-original-.jpeg', '', '', '', '', '', '', 30, 'Equipped with high power bass drivers, and with padded headband and earcups, this pair of JBL headphones brings together performance and comfort. The next time you are headed out for a quick run around the neighbourhood, it will do you good to take it along with you.'),
(79, 'Sony ZX110A Wired Headphone ', 'Sony', 'ZX110A', 'Headphones', 'Accessory', 'White, Over the Ear', '649', 'sony-mdr-zx110-a-original.jpeg', '', '', '', '', '', '', 30, 'Experience great sound quality with these light weight and foldable headphones. Its unique inside-folding design makes it easy to pack and carry, and its long 1.2m cord lets you listen on the go without worries. Elegant colours and a sleek, minimalistic style make sure that your music doesn\'t just sound good, but looks great too with its 30mm drivers and wide frequency response, bring your music alive with every note loud and clear.'),
(80, 'Kotion Each GS410 Wired Headset with Mic', 'Kotion', 'GS410', 'Headphones', 'Accessory', 'Blue, Over the Ear', '799', 'kotion-each-gs410-original.jpeg', '', '', '', '', '', '', 30, 'With Microphone: Yes Design: Over the Head Compatible With: Gaming Console Headphone Jack: 3.5mm Perfect for playing games, listening to music, etc Single 3.5mm Jack for sound and mic, Adjustable length hinges Delivers clear sound and deep bass for real game Flexible microphone, Smart in-line Remote Control for sound and mic'),
(81, 'Sony 310AP Wired Headset with Mic', 'Sony', '310AP', 'Headphones', 'Accessory', 'Blue, Over the Ear', '999', 'sony-mdr-zx310ap-original.jpeg', '', '', '', '', '', '', 30, 'Enjoy enhanced and immersive listening experience by investing in these Sony headphones. The pair is designed for you to enjoy the powerful bass and clear sound. They are durable and can handle rough use as well.'),
(82, 'Sony 5000 mAh Power Bank (CP-V5B/BI)', 'Sony', 'CP-V5B/BI', 'Powerbanks', 'Accessory', 'Black, Lithium Polymer', '1499', 'power-bank-cp-v5b-b-sony-original.jpeg', '', '', '', '', '', '', 30, '1000x Rechargeable, 1.5 A Fast Charge, Charge Through, Pre-charged, Portable Charger, Safe Charge'),
(83, 'Intex 20000 mAh Power Bank (IT-PB 20K Poly)', 'Intex', 'IT-PB ', 'Powerbanks', 'Accessory', 'White, Lithium Polymer', '1399', 'power-bank-it-pb-20k-poly-intex-original.jpeg', '', '', '', '', '', '', 30, 'Do not worry about power cuts or travel restraints limiting your use of your devices, because this Intex power bank with its 20000 mAh battery is here to juice up your smartphones and tablets on the go. The power bank has good charge retention and charges quickly. It has two USB ports which let your charge two devices at a time. The power bank is slim and lightweight design make it easy to pack and carry around.'),
(84, 'Syska 10000 mAh Power Bank (Power Boost 100)', 'Syska', 'Power Boost 100', 'Powerbanks', 'Accessory', 'Pink, Lithium-ion', '799', 'power-bank-boost-100-syska-original.jpeg', '', '', '', '', '', '', 30, 'Weight: 285 g | Capacity: 10000 mAh Lithium-ion Battery | Micro Connector Power Source: USB Connector Charging Cable Included'),
(85, 'Ambrane 20000 mAh Power Bank (PP-20)', 'Ambrane', 'PP-20', 'Powerbanks', 'Accessory', 'Red, Lithium Polymer', '1299', 'power-bank-pp-20-ambrane-original.jpeg', '', '', '', '', '', '', 29, 'Temperature Resistance, Reset Mechanism, PTC Protective Circuit, Over Charge and Discharge Protection, Short Circuit Protection, Incorrect Insertion Protection, Output Over Current Protection, Input and Output Over Voltage Protection, Compact Size and Lightweight, Charging LED Indicators, Dual Output 2.1 A, Micro USB 2.1 A, Power Button, Premium Scratchless Rubberized Body'),
(86, 'LECO 20800 mAh Power Bank (20800mAh Real Power Bank)', 'LECO', ' Real Power Bank', 'Powerbanks', 'Accessory', 'White, Lithium-ion', '699', 'stylish-white-body-20800mah-leco-original.jpeg', '', '', '', '', '', '', 30, 'Capacity: 20800 mAh Lithium-ion Battery | Micro Connector Power Source: USB'),
(87, 'Loffar Back Cover for Samsung Galaxy A9', 'Loffar ', 'For Samsung Galaxy A9', 'Phone Covers', 'Accessory', 'Multicolor, Shock Proof', '258', 'loffar-loffar-p9-army-4-sam-a9-original.jpeg', '', '', '', '', '', '', 30, 'This premium back cover is an offering from LOFFAR which is tailor made for your Samsung Galaxy A9. This mobile case embraces you phone precisely with optimal cut-outs for buttons and ports. The phone cover is made from light but extremely durable poly-carbonate material to protect your precious phone from drops and scratches.'),
(88, 'Flocculent Flip Cover for Redmi Note 7', 'Flocculent ', 'For Redmi Note 7', 'Phone Covers', 'Accessory', 'Coffee, Dual Protection', '208', 'flocculent-hwe-y9-2019-coffee-original.jpeg', '', '', '', '', '', '', 30, 'Artificial Leather stand wallet case flip cover and save yourself from the heartbreak and agony of watching the scratches and damages on your device multiply periodically. This sleek executive flip cover case is designed to a perfect fit on your mobile and glossy leather surface further adds to its polished looks.'),
(89, 'EASYBIZZ Back Cover for Asus Zenfone Lite L1', 'EASYBIZZ', 'For Asus Zenfone Lite L1', 'Phone Covers', 'Accessory', 'Black', '151', 'mobilekeeda-zenfone-lite-l1-original.jpeg', '', '', '', '', '', '', 30, ' EASYBIZZ carbon Rugged Back Cover Series with Anti Shock Corners is thin as well as impact and shock resistant. Made up of high quality eco-friendly materials, inside web pattern, proper holes and cut-outs for sensors. Raised lips protect the screen and camera bump. Unique Look featuring Smooth Silk Brushed texture, glossy accents and carbon fibre texture. Easy to remove & install, anti-finger print, anti-scratch, washable case. Heat Dissipation Design, flexible and tear resistant. Tactile Buttons for natural feedback and easy press. Used advanced carbon fiber material, tough wear, excellent process quality.'),
(90, 'Febelo Back Cover for Mi Redmi Note 7, Mi Redmi Note 7 Pro', 'Febelo', 'For Mi Redmi Note 7, Mi Redmi Note 7 Pro', 'Phone Covers', 'Accessory', 'Matte Black, Grip Case', '258', 'febelo-note-7-matte-black-original.jpeg', '', '', '', '', '', '', 29, 'Suitable For: Mobile Material: Rubber Theme: No Theme Type: Back Cover'),
(91, 'Aspir Back Cover for Mi Redmi Y2', 'Aspir', 'For Mi Redmi Y2', 'Phone Covers', 'Accessory', 'Multicolor, Hard Case', '169', 'aspir-asku114d00822-original.jpeg', '', '', '', '', '', '', 30, ' Aspir Hard Case Designer Phone Cases are best in Class. Every Cover is Printed with excellent precision using our Cover Hub Printing technology. Our Print is Extremely Durable and the Case is designed to fit your Mobile Device to perfection. Each Case Cover Goes throug a rigid QC workflow and the End result is nothing less than Remarkable.'),
(92, 'MECase Back Cover for Honor 9 Lite ShockProof', 'MECase', 'For Honor 9 Lite', 'Phone Covers', 'Accessory', 'Black', '259', 'mecase-70070-original.jpeg', '', '', '', '', '', '', 30, 'Suitable For: Mobile Material: Rubber, Plastic Theme: No Theme Type: Back Cover'),
(93, 'VAKIBO Back Cover for POCO F1  (3D Feel Marvel Avenger Iron Man Logo Mask Flexible Rugged )', 'VAKIBO', 'For POCO F1', 'Phone Covers', 'Accessory', 'Matte Case, 3D Case', '260', 'vakibo-pocof1-avg-original-.jpeg', '', '', '', '', '', '', 30, ' Buy A Real 3D VAKIBO Avenger Mask Designer Case That Is Not Only Super Protective, But Also Enhances The Look Of Your All Powerful And Gorgeous Phone. Let People Have A Jaw Dropping View At You When You Draw Your Phone Out In Public. Keeps Your Phone Safe & Protected In Style, Made From Poly Urethane/ Rubberized Hard Plastic, Protect Your Phone From Scratches, Dust And Finger Prints, Compact, Light-Weight And Durable. '),
(94, 'Apple iPhone 6s', 'Apple', 'iPhone 6', 'Flagship', 'Phone', 'Rose Gold', '29799', 'iphone6s.jpeg', '2 GB', '32 GB', '11.94 cm Retina HD Display', '1700 mAh', '12 MP Rear Camera | 5 MP Front Camera', 'Apple A9 64-bit processor and M9 Motion Co-processor', 30, 'Retina HD Display with 3D Touch, LED Backlit Widescreen, 326 PPI, 500 cd/m2 Maximum Brightness, Full sRGB Standard, Dual Domain Pixels for Wide Viewing Angles, Fingerprint Resistant Oleophobic Coating, Display Zoom, Reachability.  720p HD Video Recording, Retina Flash, f/2.2 Aperture, Auto HDR for Photos and Videos, Backside Illumination Sensor, Exposure Control, Burst Mode, Timer Mode, Face Detection.'),
(95, 'Apple iPhone 6', 'Apple', 'iPhone 6', 'Flagship', 'Phone', 'Gold', '29990', 'iphone6.jpeg', '2 GB', '32 GB', '11.94 cm Retina HD Display', '1650 mAh', '8 MP Rear Camera | 1.2 MP Front Camera', 'A8 Chip with 64-bit Architecture and M8 Motion Co-processor', 30, 'Retina HD Display with 3D Touch, LED Backlit Widescreen, 326 PPI, 500 cd/m2 Maximum Brightness, Full sRGB Standard, Dual Domain Pixels for Wide Viewing Angles, Fingerprint Resistant Oleophobic Coating, Display Zoom, Reachability.  720p HD Video Recording, Retina Flash, f/2.2 Aperture, Auto HDR for Photos and Videos, Backside Illumination Sensor, Exposure Control, Burst Mode, Timer Mode, Face Detection.'),
(96, 'Apple iPhone 7', 'Apple', 'iPhone 7', 'Flagship', 'Phone', 'Silver', '38999', 'iphone7.jpeg', '3 GB', '32 GB', '11.94 cm Retina HD Display', '1680 mAh', '12 MP Rear Camera | 7 MP Front Camera', 'Apple A10 Fusion 64-bit processor and Embedded M10 Motion Co-processor', 30, 'Take your iPhone experience to the next level with iPhone 7. Featuring new camera systems, a better battery-life, an efficient processor and powerful stereo speakers, this smartphone will drastically enhance your iPhone experience. With a sharp and vibrant display, and a sleek water-resistant body, this phone is as powerful as it is attractive.'),
(97, 'Apple iPhone 7 Plus', 'Apple', 'iPhone 7', 'Flagship', 'Phone', 'Gold', '60999', 'iphone7plus.jpeg', '3 GB', '128 GB', '13.97 cm (5.5 inch) Retina HD Display', '1730 mAh', '12MP + 12MP Rear Camera | 7MP Front Camera', 'Apple A10 Fusion 64-bit processor and Embedded M10 Motion Co-processor', 30, ' With better cameras, long-lasting battery life, powerful processor and enhanced stereo speakers, the iPhone 7 Plus takes your iPhone experience till date to the next level. Thanks to its vibrant display, sleek design and a water- and splash-resistant enclosure, this smartphone looks every bit as impressive as it is.'),
(98, 'Apple iPhone XS', 'Apple', 'iPhone X', 'Flagship', 'Phone', 'Gold', '99990', 'iphonexs.jpeg', '4 GB', '64 GB', '14.73 cm (5.8 inch) Super Retina HD Display', '2150 mAh', '12MP + 12MP Rear Camera | 7MP Front Camera', 'A12 Bionic Chip Processor', 30, ' The iPhone Xs is in tune with beloved versions of previous Apple mobile phones in the sense that it is built in privacy and security from the very beginning. Every detail, from its sleek design to the innovative ways its components are recycled, goes into setting this addition to iPhones apart from the crowd. One of the most noticeable attractions of the iPhone Xs is its indulgent 14.73 cm (5.8) Super Retina Display. Sleek in appearance and constructed to be sturdy, this iPhone delivers in terms of aesthetics and durability. It is even resistant to liquid spills and dust. The A12 Bionic Chip which powers this Apple phone transforms the way you look at pictures, the way you game, or even the way you browse the internet on your phone with its fluid performance. Explore different ways to capture the world around you with the iPhone Xs 12 MP dual-rear camera system and its 7 MP selfie camera.'),
(99, 'Apple iPhone XS Max', 'Apple', 'iPhone X', 'Flagship', 'Phone', 'Silver', '124000', 'iphonexsmax.jpeg', '4 GB', '256 GB', '16.51 cm (6.5 inch) Super Retina HD Display', '2250 mAh', '12MP + 12MP Rear Camera | 7MP Front Camera', 'A12 Bionic Chip Processor', 30, 'Experience the feeling of power and sophistication in your palm. The iPhone Xs Max brings to you a perfect blend of performance and beauty. Featuring the powerful A12 Bionic chip, a 16.51-cm (6.5) OLED Super Retina HD Display, 256 GB of ROM, and other impressive features, you’ll never have a dull moment with the iPhone Xs Max.');
INSERT INTO `tbl_phone` (`pid`, `name`, `brand`, `series`, `category`, `type`, `color`, `price`, `image`, `ram`, `rom`, `ss`, `battery`, `camera`, `processor`, `qty`, `descr`) VALUES
(100, 'Apple iPhone XR', 'Apple', 'iPhone X', 'Flagship', 'Phone', 'Blue', '60699', 'iphonexr.jpeg', '3 GB', '64 GB', '15.49 cm (6.1 inch) Display', '1900 mAh', '12MP Rear Camera | 7MP Front Camera', 'A12 Bionic Chip Processor', 30, 'The iPhone XR has arrived to stun our senses with a host of features such as the Liquid Retina Display, a faster Face ID, and the powerful A12 Bionic Chip. Whether it\'s that picture-perfect portrait shot or a jaw-dropping HDR picture, the cameras of this iPhone too will continue to stun you with their brilliance. Thus, when you have the iPhone XR in your hands, you can only see beauty, in every way.'),
(101, 'Google Pixel 3', 'Google', 'Pixel 3', 'Flagship', 'Phone', 'Clearly White', '65999', 'google-pixel-3.jpeg', '4 GB', '128 GB', '13.97 cm (5.5 inch) FHD+ Display', '2915 mAh', '12.2MP Rear Camera | 8MP + 8MP Dual Front Camera', 'Qualcomm Snapdragon 845 64-bit Processor', 30, 'Staying too far from your loved ones? Video call them for hours on end. The weather is romantic? Listen to your favourite playlists all day long. Don\'t want to go out this weekend? Then binge watch your favourite series on the Internet or perhaps play your favourite mobile video game; do all that and much more. The Pixel 3 ensures that there\'s never a dull moment, all thanks to its powerful battery, impressive cameras and its expansive bezel-less display.'),
(104, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(105, '+915369874569', 'Realme', 's7', 'Budget Phone', '4GB', 'red', '435353', 'realme.jpeg', '4', '128', '14', '5400', '32', 'octa', 56, 'dhksgvjdsghdsj'),
(106, 'Realme 9 Prime', 'Realmi', 'S series', 'Budget Phone', '4GB', 'Red', '9876234567', 'realme.jpeg', '4', '128', '16*16', '5400', '64', 'octa', 67, 'something');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_return`
--

CREATE TABLE `tbl_return` (
  `rid` int(5) NOT NULL,
  `oid` int(5) NOT NULL,
  `pid` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `aid` int(5) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `acno` varchar(30) NOT NULL,
  `pimg` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `dor` varchar(20) NOT NULL,
  `crntdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_return`
--

INSERT INTO `tbl_return` (`rid`, `oid`, `pid`, `uid`, `aid`, `reason`, `acno`, `pimg`, `status`, `dor`, `crntdate`) VALUES
(14, 75, 5, 2, 73, 'Damaged Product', '123456754324', 'asus-zenfone-max-pro-m2.jpeg', 'Order Returned', '2019-04-25', '2021-02-12'),
(15, 46, 31, 1, 55, 'Damaged Product', '1235465765432', 'asus-zenfone-max-m2.jpeg', 'Order Returned', '2019-04-25', '2021-02-12'),
(16, 76, 27, 1, 74, 'found elsewhere easily', '1234567890', 'asus-zenfone-max-pro-m1.jpeg', 'Order Returned', '2019-04-25', '2021-02-12'),
(17, 77, 42, 2, 75, 'bhut mhngi h. abba ni manenge.', '1354656464563', 'Capture1.PNG', 'Return Requested', '', '2021-02-12'),
(18, 78, 69, 2, 76, 'Bought From Market', '1234567890', 'honor.jpg', 'Return Requested', '', '2021-02-12'),
(19, 80, 68, 2, 78, 'Damaged Product', '1235465765432', 'flash.png', 'Return Requested', '', '2021-02-12'),
(20, 81, 5, 2, 78, 'realme 3 pro aa gya isliye isse vps rkhlo apne paas ', '1234567890', 'dispatch.png', 'Order Returned', '2019-04-25', '2021-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `reid` int(5) NOT NULL,
  `pid` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `title` varchar(200) NOT NULL,
  `descrip` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`reid`, `pid`, `uid`, `title`, `descrip`) VALUES
(8, 5, 2, 'Best camera phone', 'it has very good camera and better performance is too good.'),
(10, 68, 2, 'Cheap', 'Cost is very cheap and also found better than it ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `name`, `email`, `password`, `phone`) VALUES
(1, 'Faiz', 'wfaiz3256@gmail.com', '1234', '9559097135'),
(2, 'Hamza Khan', 'hk370019@gmail.com', 'faiz@123', '+918175929397'),
(4, 'harshit', 'shdc.bca.1.harshit@gmail.com', 'admin', '+919955907631'),
(5, 'Adnan Khan', 'khan.adnan701@gmail.com', 'adnan@123', '+918175923942');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_website`
--

CREATE TABLE `tbl_website` (
  `mid` int(5) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `image5` varchar(100) NOT NULL,
  `accimg1` varchar(100) NOT NULL,
  `head1` varchar(100) NOT NULL,
  `price1` varchar(100) NOT NULL,
  `accimg2` varchar(100) NOT NULL,
  `head2` varchar(100) NOT NULL,
  `price2` varchar(100) NOT NULL,
  `accimg3` varchar(100) NOT NULL,
  `head3` varchar(100) NOT NULL,
  `price3` varchar(100) NOT NULL,
  `accimg4` varchar(100) NOT NULL,
  `head4` varchar(100) NOT NULL,
  `price4` varchar(100) NOT NULL,
  `accimg5` varchar(100) NOT NULL,
  `head5` varchar(100) NOT NULL,
  `price5` varchar(100) NOT NULL,
  `bigimg` varchar(100) NOT NULL,
  `vid1` varchar(200) NOT NULL,
  `vid2` varchar(200) NOT NULL,
  `vid3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_website`
--

INSERT INTO `tbl_website` (`mid`, `image1`, `image2`, `image3`, `image4`, `image5`, `accimg1`, `head1`, `price1`, `accimg2`, `head2`, `price2`, `accimg3`, `head3`, `price3`, `accimg4`, `head4`, `price4`, `accimg5`, `head5`, `price5`, `bigimg`, `vid1`, `vid2`, `vid3`) VALUES
(5, 'p1.jpg', 'p2.jpg', 'p3.jpg', 'p4.jpg', 'p5.jpg', 'usb1.jpg', 'Charger & USB Gadgets ', '199 Onwards', 'powerbank.jpg', 'Power Banks', '899 Onwards', 'bluetooth.jpg', 'Bluetooth Headset ', '899 Onwards', 'earphone.jpg', 'Earphones', '399 Onwards', 'fitnessband.jpg', 'Fitness Bands', '1399 Onwards', 'bluetoothspeaker.jpg', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD PRIMARY KEY (`lgid`);

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_cancel`
--
ALTER TABLE `tbl_cancel`
  ADD PRIMARY KEY (`caid`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `tbl_phone`
--
ALTER TABLE `tbl_phone`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_return`
--
ALTER TABLE `tbl_return`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`reid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_website`
--
ALTER TABLE `tbl_website`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logindetails`
--
ALTER TABLE `logindetails`
  MODIFY `lgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `aid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cancel`
--
ALTER TABLE `tbl_cancel`
  MODIFY `caid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `oid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `tbl_phone`
--
ALTER TABLE `tbl_phone`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tbl_return`
--
ALTER TABLE `tbl_return`
  MODIFY `rid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `reid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_website`
--
ALTER TABLE `tbl_website`
  MODIFY `mid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `tbl_user` (`uid`),
  ADD CONSTRAINT `tbl_cart_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `tbl_phone` (`pid`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `tbl_user` (`uid`),
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `tbl_phone` (`pid`);

--
-- Constraints for table `tbl_return`
--
ALTER TABLE `tbl_return`
  ADD CONSTRAINT `tbl_return_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `tbl_user` (`uid`),
  ADD CONSTRAINT `tbl_return_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `tbl_phone` (`pid`);

--
-- Constraints for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD CONSTRAINT `tbl_review_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `tbl_user` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
