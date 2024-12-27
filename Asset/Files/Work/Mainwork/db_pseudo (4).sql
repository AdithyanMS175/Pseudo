-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2024 at 05:32 AM
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
(5, 'damo@gmail.com', 'damodamo', 'damodaran'),
(6, 'sukunan@gmail.com', 'Sukuna123', 'sukunan');

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
(11, 'Mobile Application Devoloper'),
(12, 'Graphic Design'),
(13, 'Logo Design'),
(14, 'Music composing');

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
(1, 'hi', 'August 05 2024, 01:39 PM', 30, 0, 0, 11),
(2, 'hi', 'August 05 2024, 01:39 PM', 0, 11, 30, 0),
(3, 'hello', 'August 08 2024, 01:56 PM', 30, 0, 0, 11),
(4, 'hi', 'October 07 2024, 06:54 PM', 30, 0, 0, 11),
(5, 'hi', 'October 07 2024, 06:54 PM', 0, 11, 30, 0),
(6, 'help', 'October 07 2024, 07:18 PM', 0, 11, 30, 0),
(7, 'good', 'December 19 2024, 09:41 PM', 0, 11, 30, 0),
(8, '', 'December 19 2024, 09:49 PM', 0, 11, 30, 0);

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
(19, 'Arya', 'arya@gmail.com', 16, 'xmgajgakhakjdhka', 'Screenshot 2024-04-15 170954.png', 'Screenshot 2024-04-15 170954.png', 'Ad3ith', '2004-02-25', '9524653412', 2, ''),
(20, 'Akhil', 'akhil@gmail.com', 14, 'sxgfffvkcjvhxcyvucx', 'Screenshot 2024-05-11 192622.png', 'Screenshot 2024-05-06 193406.png', 'Akhil11', '2003-12-22', '5246321977', 2, ''),
(21, 'Arsha', 'arsha154@gmail.com', 13, 'adaddadadasdasdada', 'pseudo-1.png', 'pseudo-2.png', 'Ad3ith', '2005-02-25', '9854632111', 2, 'Female'),
(22, 'Ajin', 'ajin@gmil.com', 15, 'hhsfdhdufnddkjdu', 'b1gen7al.png', 'Screenshot 2024-04-15 170954 (3).png', 'Ajin123', '2024-07-10', '8543965709', 1, 'Male'),
(23, 'adithyan ms', 'adithyanms1575@gmail.com', 13, 'njkjjjk', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'A123a123', '2024-08-31', '1234567891', 2, 'Male'),
(24, 'adithyan ms', 'adithyanms1575@gmail.com', 13, 'njkjjjk', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'A123a123', '2024-08-31', '1234567891', 2, 'Male'),
(25, 'adithyan ms', 'adithyanms1575@gmail.com', 13, 'njkjjjk', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'A123a123', '2024-08-31', '1234567891', 2, 'Male'),
(26, 'Evan', 'evan@gmail.com', 20, 'ddsdsf', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'E123e321', '2024-03-27', '3221512663', 2, 'Male'),
(27, 'suraj', 'suraj@gmail.com', 15, 'stdfg', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'S123s321', '2024-07-10', '3221561554', 2, 'Male'),
(28, 'Jithin Sunil', 'jithinsunil2003@gmail.com', 15, 'cheruvila pampakuda po pampakuda ernakulam', 'download.jpeg', 'wp4469580-3840x2160-wallpapers.jpg', 'Jithin321', '2003-07-12', '9562148370', 0, 'Male'),
(29, 'Abi', 'abi@gmail.com', 15, 'kottaramveettil,kochi', 'download.jpeg', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'Abi321', '2002-12-28', '8745631232', 0, 'Male'),
(30, 'Deva', 'deva@gmail.com', 18, 'malayil,thodupuzha', 'download.jpeg', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'Deva321', '1999-11-22', '7581521554', 1, 'Male'),
(31, 'Seeja', 'seeja@gmail.com', 13, 'Maniyattussery (H) ,Pancode P O ,Parepidka\r\nKadayiriipu,Kolenchery,Ekm.', 'Screenshot 2024-04-15 123855.png', 'Screenshot 2024-04-15 170954.png', 'S1eeja', '2004-02-02', '7012489987', 0, 'Male');

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
(1, 'ghghg', '2024-08-08', 'hjhjhj', 0, 30, 6, 2, '2024-08-08');

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
(9, 'Adithyan Suresh', 'adithyanms175@gmail.com', 16, '      	Maniyattussery          ', 'Screenshot 2024-04-15 123855.png', 'Screenshot 2024-04-28 095228.png', '8086649683', '2024-05-21', '7012489987', 1, 'Male'),
(11, 'Athul', 'athul@gmail.com', 18, 'hgxgh', 'Screenshot 2024-05-11 192622.png', 'Screenshot 2024-04-15 170954.png', '456', '2024-05-09', '9946413745', 1, 'Male'),
(21, 'Arsha', 'arsha@gmail.com', 13, 'fllifuisdfdfd', 'Screenshot 2024-04-28 095228.png', 'Screenshot 2024-05-06 193406.png', 'Arsha2', '2004-05-30', '98546321', 1, ''),
(22, 'Arsha', 'arsha14@gmail.com', 13, 'xmgajgakhakjdhka', 'pseudo-1.png', 'pseudo-2.png', 'Ad3ith', '2004-02-25', '9854632111', 2, 'Female'),
(23, 'Fariz', 'fariz@gmail.com', 14, 'kklsucuddcdcuducdj', 'Screenshot 2024-04-15 170954 (3).png', 'pseudo-1.png', 'Fariz23', '2024-07-09', '9456812307', 1, 'Male'),
(24, 'Princy', 'princy@gmail.com', 14, 'hjdfgfdgufdg', 'Screenshot 2024-07-12 203211.png', 'Screenshot 2024-05-24 093051.png', 'Princy22', '2024-07-02', '5421698435', 1, 'Female'),
(26, 'Jenin', 'jenin@gmail.com', 14, 'velyaveettil,perumbavoor', 'OIP (2).jpeg', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'Jenin321', '1995-05-22', '6254735890', 1, 'Male'),
(27, 'Naveendhu', 'naveendhu@gmail.com', 14, 'Plaparambill,perumbavoor p o', 'OIP (2).jpeg', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'Naveen321', '2002-04-16', '9248236422', 2, 'Male'),
(28, 'Manu', 'manu@gmail.com', 16, 'World villa,ponnani', 'OIP (2).jpeg', 'Screenshot_29-7-2024_19225_localhost.jpeg', 'Manu321', '1995-05-02', '8515788236', 1, 'Male'),
(29, 'Karun', 'karun@gmail.com', 16, 'Ajhjsdhjshdjh', 'Screenshot 2024-05-24 093051.png', 'Screenshot 2024-05-24 093051.png', 'K1arun', '2004-06-05', 'fdgdgdgdgd', 0, 'Male');

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
(1, 'Screenshot 2024-07-27 121035.png', 4),
(2, 'OIP (2).jpeg', 6);

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
(20, 'Guruvayoor', 654123, 30);

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
(1, 28, 3, 2, '2024-08-02', '', ''),
(2, 28, 2, 2, '2024-08-02', '', ''),
(3, 11, 4, 4, '2024-08-02', '2024-08-03', '2024-08-02'),
(4, 11, 6, 4, '2024-08-05', '2024-08-05', '2024-08-05'),
(5, 11, 5, 1, '2024-08-07', '', '2024-08-07'),
(6, 11, 9, 4, '2024-08-08', '2024-08-08', '2024-08-08'),
(7, 11, 8, 0, '2024-10-08', '', ''),
(8, 9, 8, 1, '2024-10-13', '', '2024-10-13'),
(9, 23, 10, 1, '2024-10-13', '', '2024-10-13');

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
(1, 30, 4, 'good', 11, '2024-08-05 13:42:56'),
(2, 30, 5, 'ghhgh', 11, '2024-08-08 13:59:44'),
(3, 30, 5, 'Very goo work', 11, '2024-12-19 21:14:52');

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
(4, 'PHP-HTML-JAVASCRIPT', 9),
(5, 'PYTHON-DJANGO', 9),
(6, 'MERN STACK', 9),
(7, 'MEAN STACK', 9),
(8, 'Photoshop', 13),
(9, 'Audacity', 14),
(10, 'Canvas', 13);

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
  `work_final` varchar(100) NOT NULL,
  `work_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_work`
--

INSERT INTO `tbl_work` (`work_id`, `work_name`, `work_price`, `work_details`, `work_doc`, `client_id`, `subcat_id`, `work_final`, `work_status`) VALUES
(2, 'fitseeker', '1500', 'supply trainers', '127_0_0_1.sql', 30, 4, '', 1),
(3, 'ai assisstant', '25000', 'personal assisstant', 'WhatsApp Image 2024-07-27 at 16.42.54_ff6af579.jpg', 30, 4, '', 1),
(4, 'flipkart', '4500', 'slkdfjlskjf', 'Ghost of Tsushima DC [FitGirl Repack].torrent', 30, 4, '127_0_0_1.sql', 1),
(5, 'Food delivery app', '1500', 'i want a food delivery app for buisness', 'b1gen7al.png', 30, 3, '', 1),
(6, 'Data Entry', '1000', 'i want website for data entry ', 'originalviewworks.php', 30, 4, 'BCA,BSc Comp Science,Comp Appln,IT.pdf', 1),
(7, 'Logo', '500', 'create a logo for my business', 'newmyworksfreelan.php', 30, 8, '', 0),
(8, 'Amazon', '1500', 'create a website for shopping', 'Screenshot 2024-05-06 193406.png', 30, 4, '', 1),
(9, 'facebook', '2500', 'create a platform for posting content', 'BCA,BSc Comp Science,Comp Appln,IT (3).pdf', 30, 3, 'db_pseudo.sql', 1),
(10, 'School management', '45000', 'school management website', 'BCA,BSc Comp Science,Comp Appln,IT (3).pdf', 30, 5, '', 1),
(11, 'zomato', '78787', 'food delivery app', 'db_pseudo.sql', 30, 3, '', 0);

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_freelan`
--
ALTER TABLE `tbl_freelan`
  MODIFY `freelan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  MODIFY `gallary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_subcat`
--
ALTER TABLE `tbl_subcat`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_work`
--
ALTER TABLE `tbl_work`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
