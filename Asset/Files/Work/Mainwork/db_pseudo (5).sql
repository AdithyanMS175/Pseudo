-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2024 at 03:59 PM
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
-- Database: `db_pseudo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`) VALUES
(1, 'sdfsf@gmail.com', 'aasdada', 'Adi'),
(5, 'damo@gmail.com', 'damodamo', 'damodaran');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(9, 'Web devoloper'),
(11, 'Mobile Application Devoloper');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `chat_id` int(11) NOT NULL,
  `chat_content` varchar(500) NOT NULL,
  `chat_datetime` varchar(50) NOT NULL,
  `chat_fromclient` int(11) NOT NULL DEFAULT 0,
  `chat_fromfreelan` int(11) NOT NULL DEFAULT 0,
  `chat_toclient` int(11) NOT NULL DEFAULT 0,
  `chat_tofreelan` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`chat_id`, `chat_content`, `chat_datetime`, `chat_fromclient`, `chat_fromfreelan`, `chat_toclient`, `chat_tofreelan`) VALUES
(1, 'hi', 'July 27 2024, 07:20 PM', 3, 0, 0, 24),
(2, 'hi', 'July 27 2024, 07:26 PM', 0, 24, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  `client_photo` varchar(50) NOT NULL,
  `client_proof` varchar(50) NOT NULL,
  `client_password` varchar(50) NOT NULL,
  `client_dob` varchar(50) NOT NULL,
  `client_contact` varchar(50) NOT NULL,
  `client_status` int(11) NOT NULL,
  `client_gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`client_id`, `client_name`, `client_email`, `place_id`, `client_address`, `client_photo`, `client_proof`, `client_password`, `client_dob`, `client_contact`, `client_status`, `client_gender`) VALUES
(3, 'Adarsh ps', 'adarshps@gmail.com', 21, 'paramadathil           ', 'Screenshot 2024-04-15 170954.png', 'Screenshot 2024-04-28 095228.png', '8086649683', '2024-05-12', '2225', 1, ''),
(4, 'ashik', 'ashik@gmail.com', 16, 'sadq', 'Screenshot 2024-05-06 193406.png', 'Screenshot 2024-04-28 095228.png', '321', '2024-05-01', '1234567890', 1, ''),
(19, 'Arya', 'arya@gmail.com', 16, 'xmgajgakhakjdhka', 'Screenshot 2024-04-15 170954.png', 'Screenshot 2024-04-15 170954.png', 'Ad3ith', '2004-02-25', '9524653412', 0, ''),
(20, 'Akhil', 'akhil@gmail.com', 14, 'sxgfffvkcjvhxcyvucx', 'Screenshot 2024-05-11 192622.png', 'Screenshot 2024-05-06 193406.png', 'Akhil11', '2003-12-22', '5246321977', 0, ''),
(21, 'Arsha', 'arsha154@gmail.com', 13, 'adaddadadasdasdada', 'pseudo-1.png', 'pseudo-2.png', 'Ad3ith', '2005-02-25', '9854632111', 0, 'Female'),
(22, 'Ajin', 'ajin@gmil.com', 15, 'hhsfdhdufnddkjdu', 'b1gen7al.png', 'Screenshot 2024-04-15 170954 (3).png', 'Ajin123', '2024-07-10', '8543965709', 1, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_details` varchar(1000) NOT NULL,
  `complaint_date` varchar(20) NOT NULL,
  `complaint_reply` varchar(1000) NOT NULL,
  `freelan_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `complaint_status` int(11) NOT NULL,
  `complaint_rdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_details`, `complaint_date`, `complaint_reply`, `freelan_id`, `client_id`, `request_id`, `complaint_status`, `complaint_rdate`) VALUES
(15, 'asddfg', '2024-05-18', 'jkhkjhjk', 9, 0, 48, 0, ''),
(16, 'sddjffbkjsdfbjh', '2024-05-18', 'ccxvx', 9, 0, 48, 0, ''),
(17, 'too bad', '2024-05-18', '', 0, 3, 48, 0, ''),
(18, 'hgfssa', '2024-05-18', '', 0, 3, 48, 0, ''),
(19, 'hgfssa', '2024-05-18', '', 0, 3, 48, 0, ''),
(20, 'hgfssa', '2024-05-18', '', 0, 3, 48, 0, ''),
(21, 'dfdfdfdfdfd', '2024-05-18', '', 0, 3, 48, 0, ''),
(22, 'edf', '2024-05-18', '', 0, 3, 48, 0, ''),
(23, 'edf', '2024-05-18', '', 0, 3, 48, 0, ''),
(24, 'asd', '2024-05-23', '', 9, 0, 0, 0, ''),
(30, 'asdda', '2024-06-22', '', 11, 0, 57, 0, ''),
(31, 'huhuhuhu', '2024-06-29', '', 9, 0, 58, 0, ''),
(32, 'hi', '2024-06-29', '', 0, 3, 55, 0, ''),
(33, 'Error', '2024-07-14', 'fixed', 11, 0, 63, 2, ''),
(34, 'bad', '2024-07-16', 'bad', 11, 0, 63, 2, '2024-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(27, 'Ernakulam'),
(28, 'Malappuram'),
(29, 'Idukki'),
(30, 'Thrissur'),
(31, 'Alappuzha'),
(32, 'Kannur'),
(33, 'Kasargod'),
(34, 'Kollam'),
(35, 'Kozhikode'),
(36, 'Palakkad'),
(37, 'Pathanamthitta'),
(38, 'Thiruvananthapuram'),
(39, 'Wayanad'),
(40, 'Kottayam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_freelan`
--

CREATE TABLE `tbl_freelan` (
  `freelan_id` int(11) NOT NULL,
  `freelan_name` varchar(50) NOT NULL,
  `freelan_email` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `freelan_address` varchar(200) NOT NULL,
  `freelan_photo` varchar(50) NOT NULL,
  `freelan_proof` varchar(50) NOT NULL,
  `freelan_password` varchar(50) NOT NULL,
  `freelan_dob` varchar(20) NOT NULL,
  `freelan_contact` varchar(20) NOT NULL,
  `freelan_status` int(11) NOT NULL,
  `freelan_gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_freelan`
--

INSERT INTO `tbl_freelan` (`freelan_id`, `freelan_name`, `freelan_email`, `place_id`, `freelan_address`, `freelan_photo`, `freelan_proof`, `freelan_password`, `freelan_dob`, `freelan_contact`, `freelan_status`, `freelan_gender`) VALUES
(9, 'Adithyan Suresh', 'adithyanms175@gmail.com', 16, '      	Maniyattussery          ', 'Screenshot 2024-04-15 123855.png', 'Screenshot 2024-04-28 095228.png', '7012489987', '2024-05-21', '7012489987', 1, 'Male'),
(11, 'athul', 'athul@gmail.com', 18, 'hgxgh', 'Screenshot 2024-05-11 192622.png', 'Screenshot 2024-04-15 170954.png', '456', '2024-05-09', '3216549870', 1, 'Male'),
(21, 'Arsha', 'arsha@gmail.com', 13, 'fllifuisdfdfd', 'Screenshot 2024-04-28 095228.png', 'Screenshot 2024-05-06 193406.png', 'Arsha2', '2004-05-30', '98546321', 0, ''),
(22, 'Arsha', 'arsha14@gmail.com', 13, 'xmgajgakhakjdhka', 'pseudo-1.png', 'pseudo-2.png', 'Ad3ith', '2004-02-25', '9854632111', 0, 'Female'),
(23, 'Fariz', 'fariz@gmail.com', 14, 'kklsucuddcdcuducdj', 'Screenshot 2024-04-15 170954 (3).png', 'pseudo-1.png', 'Fariz23', '2024-07-09', '9456812307', 1, 'Male'),
(24, 'Princy', 'princy@gmail.com', 14, 'hjdfgfdgufdg', 'Screenshot 2024-07-12 203211.png', 'Screenshot 2024-05-24 093051.png', 'Princy22', '2024-07-02', '5421698435', 1, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallary`
--

CREATE TABLE `tbl_gallary` (
  `gallary_id` int(11) NOT NULL,
  `gallary_photo` varchar(100) NOT NULL,
  `work_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallary`
--

INSERT INTO `tbl_gallary` (`gallary_id`, `gallary_photo`, `work_id`) VALUES
(3, 'Screenshot 2024-04-15 123855.png', 0),
(4, 'Screenshot 2024-04-15 170954.png', 0),
(5, 'Screenshot 2024-04-15 170954.png', 0),
(6, 'Screenshot 2024-04-15 170954.png', 48),
(7, 'Screenshot 2024-04-15 170954.png', 48),
(8, 'Screenshot 2024-04-15 123855.png', 0),
(9, 'Screenshot 2024-04-15 123855.png', 48),
(10, 'Screenshot 2024-05-06 193406.png', 53),
(11, '', 53),
(12, 'Screenshot 2024-05-25 155018.png', 53),
(13, 'Screenshot 2024-05-25 155018.png', 64);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `payment_pname` varchar(50) NOT NULL,
  `payment_pemail` varchar(50) NOT NULL,
  `payment_pdob` varchar(50) NOT NULL,
  `payment_ctype` varchar(50) NOT NULL,
  `payment_cvc` varchar(50) NOT NULL,
  `payment_exp` varchar(50) NOT NULL,
  `payment_cno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_pname`, `payment_pemail`, `payment_pdob`, `payment_ctype`, `payment_cvc`, `payment_exp`, `payment_cno`) VALUES
(1, 'adithyan ms', 'adithyanms175@gmail.com', '22-02-2004', 'on', '123', '12 / 22', ''),
(2, 'Adarsh ps', 'adarshps@gmail.com', '15-11-2002', 'Credit Card', '787', '12 / 33', '4561 3465 4564 5652');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `place_pincode` int(11) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `place_pincode`, `district_id`) VALUES
(13, 'kolenchery', 682311, 27),
(14, 'Perumbavoor', 683542, 27),
(15, 'Kochi', 682042, 27),
(16, 'Ponnani', 689757, 28),
(17, 'Nilamboor', 687458, 28),
(18, 'Thodupuzha', 654785, 29),
(19, 'Kanjar', 654789, 29),
(20, 'Guruvayoor', 654123, 30),
(21, 'Kunnamkulam', 658745, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `request_id` int(11) NOT NULL,
  `freelan_id` int(11) NOT NULL,
  `work_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `request_date` varchar(35) NOT NULL,
  `payment_date` varchar(20) NOT NULL,
  `agreement_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_request`
--

INSERT INTO `tbl_request` (`request_id`, `freelan_id`, `work_id`, `status`, `request_date`, `payment_date`, `agreement_date`) VALUES
(53, 11, 12, 4, '2024-05-25', '', ''),
(54, 11, 14, 3, '2024-05-25', '', ''),
(55, 9, 13, 4, '2024-05-26', '', ''),
(56, 11, 13, 4, '2024-06-01', '', ''),
(57, 11, 18, 4, '2024-06-14', '', ''),
(58, 9, 12, 1, '2024-06-29', '7', ''),
(59, 11, 17, 3, '2024-07-02', '9', ''),
(60, 11, 15, 1, '2024-07-12', '5', '2024-07-20'),
(61, 11, 22, 1, '2024-07-12', '1', '2024-07-20'),
(62, 11, 16, 0, '2024-07-12', '2020', ''),
(63, 11, 23, 4, '2024-07-14', '2024-07-19', ''),
(64, 24, 22, 4, '2024-07-17', '2024-07-19', ''),
(65, 11, 26, 4, '2024-07-19', '2024-07-19', ''),
(66, 11, 27, 4, '2024-07-19', '2024-07-19', ''),
(67, 11, 25, 1, '2024-07-20', '', ''),
(68, 11, 28, 1, '2024-07-26', '', '2024-07-26'),
(69, 24, 23, 0, '2024-07-27', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_rating` int(11) NOT NULL,
  `user_review` varchar(500) NOT NULL,
  `freelan_id` int(11) NOT NULL,
  `review_datetime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `client_id`, `user_rating`, `user_review`, `freelan_id`, `review_datetime`) VALUES
(1, 3, 5, 'Hai', 11, '2024-05-25 15:09:05'),
(2, 3, 4, 'Hel', 11, '2024-05-25 15:18:41'),
(3, 3, 5, 'wow', 11, '2024-05-25 15:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcat`
--

CREATE TABLE `tbl_subcat` (
  `subcat_id` int(11) NOT NULL,
  `subcat_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcat`
--

INSERT INTO `tbl_subcat` (`subcat_id`, `subcat_name`, `category_id`) VALUES
(3, 'Flutter', 11),
(4, 'PHP-HTML-JAVASCRIPT', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work`
--

CREATE TABLE `tbl_work` (
  `work_id` int(11) NOT NULL,
  `work_name` varchar(100) NOT NULL,
  `work_price` varchar(50) NOT NULL,
  `work_details` varchar(1000) NOT NULL,
  `work_doc` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `work_final` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_work`
--

INSERT INTO `tbl_work` (`work_id`, `work_name`, `work_price`, `work_details`, `work_doc`, `client_id`, `subcat_id`, `work_final`) VALUES
(12, 'robot', '60000', 'robot ai', 'Screenshot 2024-04-15 170954.png', 3, 0, 'BCA,BSc Comp Science,Comp Appln,IT.pdf'),
(13, 'robot', '60000', 'robot ai', 'Screenshot 2024-04-15 170954.png', 3, 0, 'Screenshot 2024-04-15 170954.png'),
(14, 'zomato', '1000', 'food delivery app', 'Screenshot 2024-05-24 093051.png', 4, 3, ''),
(15, 'pubg', '25000', 'gaming app', 'Screenshot 2024-05-25 155018.png', 4, 3, ''),
(16, 'neew', '300000', 'hfsdjkhfs', 'Screenshot 2024-05-11 192622.png', 4, 4, ''),
(17, 'neew', '300000', 'This article is about the multinational technology company. For other companies, see Amazon (disambiguation) § Businesses and organizations.\nAmazon.com, Inc.\n\nLogo used since January 2000\n\nAmazon\'s headquarters, the Doppler\nTrade name	Amazon\nFormerly	Cadabra, Inc. (1994–1995)\nCompany type	Public\nTraded as	\nNasdaq: AMZN\nNasdaq-100 component\nDJIA component\nS&P 100 component\nS&P 500 component\nISIN	US0231351067\nIndustry	\nConglomerate\nFounded	July 5, 1994; 29 years ago, in Bellevue, Washington, U.S.\nFounder	Jeff Bezos\nHeadquarters	Seattle, Washington and Arlington, Virginia, U.S.\nArea served	Worldwide\nKey people	\nJeff Bezos (executive chairman)\nAndy Jassy (president and CEO)\nProducts	\nEchoFire TabletFire TVFire OSKindle\nServices	\nAmazon.com\nAmazon Alexa\nAmazon Appstore\nAmazon Clinic\nAmazon Inspire\nAmazon Luna\nAmazon Music\nAmazon Pay\nAmazon Prime\nAmazon Prime Video\nMGM+\nOne Medical\nTwitch\nRing\nAmazon Web Services\nAmazon Robotics\nRevenue	Increase US', 'Screenshot 2024-05-06 193406.png', 4, 4, ''),
(18, 'robot', '60000', 'robot ai', 'Screenshot 2024-04-15 170954.png', 3, 0, ''),
(19, 'robot', '60000', 'robot ai', 'Screenshot 2024-04-15 170954.png', 3, 0, ''),
(20, 'robot', '60000', 'robot ai', 'Screenshot 2024-04-15 170954.png', 3, 0, ''),
(21, 'robot', '60000', 'robot ai', 'Screenshot 2024-04-15 170954.png', 3, 0, ''),
(22, 'neew', '1000', 'jhgjhgjhgjhg', 'Screenshot 2024-04-28 095228.png', 3, 4, ''),
(23, 'windows simulator', '15000', 'simulator for windows', 'pseudo-1.png', 3, 3, ''),
(24, 'Food delivery app', '15666', '', '', 3, 0, ''),
(25, 'Hospital Management Website', '12000', 'A website for hospital management', 'Resume.pdf', 3, 4, ''),
(26, 'School Management website', '1000', 'website for school management', 'Resume.pdf', 3, 4, ''),
(27, 'store management', '123456', 'managing store', 'Resume.pdf', 3, 3, ''),
(28, 'shop management', '15000', 'ksjdcbaskfhavlkhajdsfhlksah', 'Screenshot 2024-05-28 211449.png', 3, 4, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_freelan`
--
ALTER TABLE `tbl_freelan`
  ADD PRIMARY KEY (`freelan_id`);

--
-- Indexes for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  ADD PRIMARY KEY (`gallary_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_subcat`
--
ALTER TABLE `tbl_subcat`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `tbl_work`
--
ALTER TABLE `tbl_work`
  ADD PRIMARY KEY (`work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_freelan`
--
ALTER TABLE `tbl_freelan`
  MODIFY `freelan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  MODIFY `gallary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_subcat`
--
ALTER TABLE `tbl_subcat`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_work`
--
ALTER TABLE `tbl_work`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
