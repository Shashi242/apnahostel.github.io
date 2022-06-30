-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 12:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apnahostel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `jdate` date NOT NULL,
  `sponser_id` varchar(20) NOT NULL DEFAULT 'NA',
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `wallet` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `jdate`, `sponser_id`, `name`, `address`, `pincode`, `district`, `state`, `email`, `mobile`, `password`, `wallet`, `status`) VALUES
(1, '2022-06-29', '7903958706', 'Amit Kumar Ram', '', '', '', '', '', '7903958706', 'amit', 300, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accomodation`
--

CREATE TABLE `tbl_accomodation` (
  `accid` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `near_by` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `locid` int(20) NOT NULL,
  `city` text NOT NULL,
  `facility` varchar(200) NOT NULL,
  `own_by` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `full_address` text NOT NULL,
  `pincode` int(10) NOT NULL,
  `security_deposit` varchar(10) NOT NULL,
  `preference` text NOT NULL,
  `terms_and_conditions` text NOT NULL,
  `monthly_rent` varchar(10) NOT NULL,
  `zoyozo_rent` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `availability` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_accomodation`
--

INSERT INTO `tbl_accomodation` (`accid`, `title`, `near_by`, `type`, `img_url`, `locid`, `city`, `facility`, `own_by`, `mobile`, `whatsapp`, `email`, `full_address`, `pincode`, `security_deposit`, `preference`, `terms_and_conditions`, `monthly_rent`, `zoyozo_rent`, `description`, `availability`, `status`) VALUES
(1, 'Sujata Boys Hostel', 'Plaza Chowk', 'BOYS HOSTEL', '59b514174bffe4ae402b3d63aad79fe0.jpg', 19, 'RANCHI', 'Lodgin,Shared bed with table & chair,24 * 7 water purifier(RO) and electricity, guard, wi-fi,cctv,water cooler,warden', 'Shubham Kumar', '987654321', '', '', '', 0, '4000', '', '', '2000', '2000', '', 'AVAILABLE', '1'),
(2, 'Krishna Boys Hostel', 'Lalpur ', 'BOYS HOSTEL', 'fd456406745d816a45cae554c788e754.jpg', 17, 'RANCHI', 'Lodging + Fooding(3 times),Shared bed with table & chair,24 * 7 water purifier(RO) and electricity, guard, wi-fi,cctv,washing machine,water cooler, gym,warden', 'Sachin Yadav', '9876543210', '', '', '', 0, '4000', '', '', '2000', '2000', '', 'AVAILABLE', '1'),
(3, 'Shir Balaji Boys Hostel', 'Kokar Chowk', 'BOYS HOSTEL', 'bb62aebf7999c1cb9648e7951a89124c.webp', 17, 'RANCHI', 'Lodging + Fooding(3 times),Shared bed with table & chair,24 * 7 water purifier(RO) and electricity, guard, wi-fi,cctv,water cooler,warden', 'Krishna Prasad', '9876543210', '', '', '', 0, '4000', '', '', '2000', '2000', '', 'AVAILABLE', '1'),
(4, 'Kumari GirlsHostel', 'Lalpur', 'GIRLS HOSTEL', '144cb8381aea8b7eb240d8c884e65495.jpg', 17, 'RANCHI', 'Lodging + Fooding(3 times),Shared bed with table & chair,24 * 7 water purifier(RO) and electricity, guard, wi-fi,cctv,water cooler,warden', 'Swadesh Murmu', '9876543210', '', '', '', 0, '4000', '', '', '2000', '2000', '', 'AVAILABLE', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`userid`, `password`, `role`) VALUES
('admin', '123456', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `name` varchar(50) NOT NULL,
  `promocode` varchar(50) NOT NULL,
  `discount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`name`, `promocode`, `discount`) VALUES
('BOKARO STEEL CITY', 'BOKZ500', '300'),
('DELHI ', 'DELZ500', '300'),
('DHNANBAD', 'DHZ500', '150'),
('DSFFD', '', ''),
('PATNA', 'PAZ500', '100'),
('RANCHI', 'RANCHI', '300');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `first_name`, `last_name`, `email`, `message`) VALUES
(1, 'adfd', 'dsfd', 'dfd', 'dasffd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `suggestion` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hostel_facility`
--

CREATE TABLE `tbl_hostel_facility` (
  `facility_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_hostel_facility`
--

INSERT INTO `tbl_hostel_facility` (`facility_name`) VALUES
(',jkjk'),
('bdabdjx'),
('Lodgin,Shared bed with table & chair,24 * 7 water purifier(RO) and electricity, guard, wi-fi,cctv,water cooler,warden'),
('Lodging'),
('Lodging + Fooding(3 times),Shared bed with table & chair,24 * 7 water purifier(RO) and electricity, guard, wi-fi,cctv,washing machine,water cooler, gym,warden'),
('Lodging + Fooding(3 times),Shared bed with table & chair,24 * 7 water purifier(RO) and electricity, guard, wi-fi,cctv,water cooler,warden'),
('Lodging + Fooding(4 times),Shared bed with table & chair,24 * 7 water purifier(RO) and electricity, guard, wi-fi,cctv,washing machine,water cooler, gym,warden'),
('Lodging + Fooding(4 times),Shared bed with table & chair,24 * 7 water purifier(RO) and electricity, guard, wi-fi,cctv,water cooler,warden'),
('Lodging+Fooding'),
('Lodging,Shared bed with table & chair,24 * 7 water purifier(RO) and electricity, guard,cctv,warden'),
('Lodging,Shared bed with table & chair,24 * 7 water purifier(RO) and electricity, guard,cctv,water cooler,warden');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL,
  `accid` int(10) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `locid` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`locid`, `name`, `city`) VALUES
(17, 'LALPUR', 'RANCHI'),
(18, 'SUJATA CHOWK', 'RANCHI'),
(19, 'PLAZA CHOWK', 'RANCHI'),
(20, 'BURDWAN COMPOUND', 'RANCHI'),
(21, 'CHURCH ROAD', 'RANCHI'),
(23, 'RATU ROAD', 'RANCHI'),
(24, 'FIRAYALAL', 'RANCHI'),
(25, 'PEACE ROAD', 'RANCHI'),
(26, 'CHUTIA ', 'RANCHI'),
(27, 'BARIATU ', 'RANCHI'),
(28, 'THARPAKNA ', 'RANCHI'),
(29, 'KADRU ', 'RANCHI'),
(30, 'HARMU ', 'RANCHI'),
(31, 'BASANT BIHAR', 'PATNA'),
(32, 'BUDDHA COLONY', 'PATNA'),
(33, 'GANDHI NAGAR', 'PATNA'),
(34, 'PATLIPUTRA COLONY', 'PATNA'),
(35, 'FRASER RD', 'PATNA'),
(36, 'BORING ROAD', 'PATNA'),
(37, 'KRISHNA PURI', 'PATNA'),
(38, 'BANKMAN COLONY', 'PATNA'),
(39, 'BAKARGANJ', 'PATNA'),
(40, 'EXHIBITION RD', 'PATNA'),
(41, 'SHAHGANJ LANE', 'PATNA'),
(42, 'PATEL NAGAR', 'PATNA'),
(43, 'IGIMS', 'PATNA'),
(44, 'KANKARBAGH', 'PATNA'),
(45, 'CITY CENTRE , SEC - 4', 'BOKARO STEEL CITY'),
(46, 'SECTOR - 2', 'BOKARO STEEL CITY'),
(47, 'KASTURBA NAGAR', 'DHANBAD'),
(48, 'HIRAPUR', 'DHANBAD'),
(49, 'HOUSING COLONY', 'DHANBAD'),
(50, ' SARAIDHELA', 'DHANBAD'),
(51, 'LUBI CIRCULAR ROAD', 'DHANBAD'),
(52, 'MURLI NAGAR', 'DHANBAD'),
(53, 'LOHAR KULI', 'DHANBAD'),
(54, 'LAXMI NAGAR ', 'DELHI '),
(56, 'NOIDA ', 'DELHI '),
(57, 'KAROL BAGH ', 'DELHI '),
(58, 'KALYAN VIHAR ', 'DELHI '),
(59, 'ROHINI ', 'DELHI '),
(60, 'GURGAON', 'DELHI '),
(61, 'SHAKARPUR', 'DELHI '),
(62, 'DWARKA ', 'DELHI '),
(66, 'VASANT KUNJ ', 'DELHI '),
(67, 'UTTAM NAGAR ', 'DELHI '),
(68, 'TAIMUR NAGAR ', 'DELHI '),
(69, 'TAIMOOR NAGAR ', 'DELHI '),
(70, 'PUNJABI BAGH ', 'DELHI ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mess`
--

CREATE TABLE `tbl_mess` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `contact_person` text NOT NULL,
  `description` text NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `alt_mobile` varchar(20) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `menu_url` varchar(200) NOT NULL,
  `advance_money` varchar(10) NOT NULL,
  `monthly_rate` varchar(10) NOT NULL,
  `zoyozo_rate` varchar(10) NOT NULL,
  `delivery_area` text NOT NULL,
  `city` text NOT NULL,
  `availability` varchar(100) NOT NULL DEFAULT 'AVAILABLE',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mess`
--

INSERT INTO `tbl_mess` (`id`, `title`, `contact_person`, `description`, `mobile`, `alt_mobile`, `whatsapp`, `menu_url`, `advance_money`, `monthly_rate`, `zoyozo_rate`, `delivery_area`, `city`, `availability`, `status`) VALUES
(1, 'Amarpali Mess', 'Sachin Yadav', 'Bokaro', '9876543210', '9876543210', '9876543210', 'fd456406745d816a45cae554c788e754.jpg', '1000', '2200', '2000', 'Bokaro', 'BOKARO STEEL CITY', 'AVAILABLE', 1),
(2, 'Singh Mess', 'Sachin Singh', 'Lalpur', '9876543210', '9876543210', '9876543210', 'b0eb1e2a7d1f77035af27b3fa468690e.jpg', '1000', '2400', '2000', 'Lalpur', 'RANCHI', 'AVAILABLE', 1),
(3, 'Goldee Mess', 'Sandeep Murmu', 'Kokar Chowk', '9876543210', '9876543210', '9876543210', '7169c931af0a7e59a56c6afb311e3102.jpg', '1000', '2200', '2000', 'Kokar Chowk', 'RANCHI', 'AVAILABLE', 1),
(4, 'Priya Mess', 'Yash Shirvastav', 'Kantatoli', '9876543210', '9876543210', '9876543210', '59b514174bffe4ae402b3d63aad79fe0.jpg', '1000', '2200', '2200', 'Kantatoli', 'RANCHI', 'AVAILABLE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `orderid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `promocode` varchar(50) NOT NULL,
  `comments` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`orderid`, `name`, `date`, `time`, `id`, `mobile`, `promocode`, `comments`, `status`, `message`) VALUES
(1, 'Amit Kumar Ram', '2022-06-29', '', '4', '7903958706', '', '', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_owner_req`
--

CREATE TABLE `tbl_owner_req` (
  `ownerid` int(10) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(30) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `accomodation_detail` text NOT NULL,
  `locality` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `proid` int(10) NOT NULL,
  `cat_name` varchar(20) NOT NULL,
  `img_url` text NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `aviability` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_cat`
--

CREATE TABLE `tbl_product_cat` (
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product_cat`
--

INSERT INTO `tbl_product_cat` (`cat_name`) VALUES
('BOYS HOSTEL '),
('GIRLS HOSTEL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_refer`
--

CREATE TABLE `tbl_refer` (
  `Suggestion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_renter_request`
--

CREATE TABLE `tbl_renter_request` (
  `req_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  `accid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `promocode` varchar(100) NOT NULL,
  `unique_req_flg` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_renter_request`
--

INSERT INTO `tbl_renter_request` (`req_id`, `date`, `time`, `accid`, `name`, `mobile`, `promocode`, `unique_req_flg`, `message`, `status`) VALUES
(1, '2022-06-29', '', 1, 'Amit Kumar Ram', '7903958706', 'no', '', 'no', 0),
(2, '2022-06-29', '', 1, 'Amit Kumar Ram', '7903958706', 'No', '', 'No', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sposor_income`
--

CREATE TABLE `tbl_sposor_income` (
  `sl` int(11) NOT NULL,
  `trans_dt` date NOT NULL,
  `trans_time` time NOT NULL,
  `cid` varchar(100) NOT NULL,
  `team_id` varchar(100) NOT NULL,
  `total_income` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sposor_income`
--

INSERT INTO `tbl_sposor_income` (`sl`, `trans_dt`, `trans_time`, `cid`, `team_id`, `total_income`) VALUES
(1, '2022-06-27', '16:06:22', 'GDFGF', 'fgf', 200),
(2, '2022-06-27', '16:06:22', 'fgf', 'fgf', 100),
(3, '2022-06-29', '12:32:21', '8777232', 'afaf', 200),
(4, '2022-06-29', '12:32:21', 'afaf', 'afaf', 100),
(5, '2022-06-29', '13:06:32', 'AMIT', 'Kumar', 200),
(6, '2022-06-29', '13:06:32', 'Kumar', 'Kumar', 100),
(7, '2022-06-29', '13:07:14', '7912', '7903958708', 200),
(8, '2022-06-29', '13:07:15', '7903958708', '7903958708', 100),
(9, '2022-06-29', '13:32:14', 'DFSDF', 'dsfds', 200),
(10, '2022-06-29', '13:32:15', 'dsfds', 'dsfds', 100),
(11, '2022-06-29', '16:16:02', '7903958706', '7903958706', 200),
(12, '2022-06-29', '16:16:02', '7903958706', '7903958706', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type`) VALUES
('BOYS HOSTEL'),
('GIRLS HOSTEL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `tbl_accomodation`
--
ALTER TABLE `tbl_accomodation`
  ADD PRIMARY KEY (`accid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hostel_facility`
--
ALTER TABLE `tbl_hostel_facility`
  ADD PRIMARY KEY (`facility_name`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`locid`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_mess`
--
ALTER TABLE `tbl_mess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `tbl_owner_req`
--
ALTER TABLE `tbl_owner_req`
  ADD PRIMARY KEY (`ownerid`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `tbl_product_cat`
--
ALTER TABLE `tbl_product_cat`
  ADD PRIMARY KEY (`cat_name`);

--
-- Indexes for table `tbl_renter_request`
--
ALTER TABLE `tbl_renter_request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `tbl_sposor_income`
--
ALTER TABLE `tbl_sposor_income`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_accomodation`
--
ALTER TABLE `tbl_accomodation`
  MODIFY `accid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `locid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_mess`
--
ALTER TABLE `tbl_mess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_owner_req`
--
ALTER TABLE `tbl_owner_req`
  MODIFY `ownerid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `proid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_renter_request`
--
ALTER TABLE `tbl_renter_request`
  MODIFY `req_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sposor_income`
--
ALTER TABLE `tbl_sposor_income`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
