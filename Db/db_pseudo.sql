-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2025 at 06:46 AM
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
(1, 'Hi bro', 'December 31 2024, 08:59 PM', 4, 0, 0, 1),
(2, 'I was checking your it  was awesome', 'December 31 2024, 08:59 PM', 4, 0, 0, 1),
(3, 'thanks ', 'December 31 2024, 09:01 PM', 0, 1, 4, 0),
(4, 'i will finish your work ', 'December 31 2024, 09:02 PM', 0, 1, 4, 0),
(5, 'As soon as possible', 'December 31 2024, 09:02 PM', 0, 1, 4, 0),
(6, 'i would like to ur on time response as fast as possible so be online', 'December 31 2024, 09:07 PM', 0, 1, 4, 0);

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
(1, 'Ajin Benny', 'ajinbenny145@gmail.com', 16, 'caveri,kilimangalam', '7M.jpeg', 'd5dpp70g_car_120x90_14_January_22.webp', 'Ajin@123', '1988-06-05', '9832212154', 1, 'Male'),
(2, 'Adarsh P S', 'adarshps7700@gmail.com', 28, 'kannur house,paramadathil', '10M.jpeg', 'OIP.jpeg', 'Adarsh@123', '2003-07-08', '8529637414', 1, 'Male'),
(3, 'Jerin Basil John', 'jerin145@gmail.com', 15, 'pattimattom house', '7M.jpeg', 'd5dpp70g_car_120x90_14_January_22.webp', 'Jerin@123', '2004-06-05', '9865327454', 1, 'Male'),
(4, 'Fariz Sidheque', 'fariz@gmail.com', 39, 'palakkad house , porampalli veedu', '3M.jpeg', 'OIP.jpeg', 'Fariz@123', '2001-06-08', '9865325487', 1, 'Male'),
(5, 'sidharth', 'sidhart@gmail.com', 20, 'keeradam house,managalserry', 'man3.jpeg', 'd5dpp70g_car_120x90_14_January_22.webp', 'Sidharth@123', '2001-01-05', '7894561236', 0, 'Male'),
(8, 'Biji Mol', 'biji@gmail.com', 27, 'muvattupuzha house kadvanthra', 'woman3.jpeg', 'OIP.jpeg', 'Biji@123', '1987-02-01', '9865326598', 0, 'Female'),
(9, 'Fak fak', 'fauk@gmail.com', 28, 'payyanur house kannur kozikode', '8.jpeg', 'download.jpeg', 'Fauk@123', '1988-08-07', '9898989898', 2, 'Female');

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
(4, 'hhhhhhhh\r\n', '2025-01-01', '', 1, 0, 0, 1, ''),
(5, 'hello', '2025-01-01', 'well it may be due to server error', 1, 0, 2, 2, '2025-01-01'),
(7, 'hasn\'t completed yet', '2025-01-01', '', 1, 0, 2, 1, ''),
(8, 'poster was bad', '2025-01-01', '', 1, 0, 2, 1, ''),
(9, 'user has different opinions', '2025-01-01', '', 0, 4, 2, 0, '');

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
(1, 'Adithyan M S', 'adithyanms175@gmail.com', 16, 'Maniyattussry house pancode po parepidika', '2M.jpeg', 'OIP.jpeg', 'Adith@123', '2004-09-09', '7012489987', 1, 'Male'),
(2, 'Vaishak Rajesh', 'vaishak2004@gmail.com', 28, 'payyannur house,kurvela', '3M.jpeg', 'OIP.jpeg', 'Vaishak@123', '2004-09-09', '7889455612', 1, 'Male'),
(3, 'Arsha Balakrishnan', 'arsha154@gmail.com', 47, 'kalpatte house manakkapuram road', '1.jpeg', 'OIP.jpeg', 'Arsha@123', '2004-09-09', '8578895636', 1, 'Male'),
(4, 'emeesha', 'emeesha174@gmail.com', 34, 'paravur house,malikapuram', '4.jpeg', 'OIP.jpeg', 'Emeesha@123', '1999-09-09', '9356897845', 1, 'Male'),
(5, 'Adarsh Manoj', 'adarshmanoj@gmail.com', 42, 'mangalathunada house,sabarimala', '5M.jpeg', 'OIP.jpeg', 'Adarsh@123', '2003-08-09', '9887655432', 1, 'Male'),
(6, 'vivek', 'vivek@gmail.com', 42, 'Adichipuzha dam near kottakkal', 'man1.jpeg', 'download.jpeg', 'Vivek@123', '2004-02-01', '8989565623', 0, 'Male'),
(12, 'Ananthkrishnan', 'anandhu@gmail.com', 25, 'mangalathunadapo,ernakulamdsd ', 'man3.jpeg', 'd5dpp70g_car_120x90_14_January_22.webp', 'Ananth@123', '2005-05-02', '8050565698', 0, 'Male'),
(13, 'FakeFake', 'fake@gmail.com', 40, 'fakefakefakefakefakefakefakefake', '2M.jpeg', 'OIP.jpeg', 'Fake@123', '2007-05-02', '7012456587', 2, 'Male');

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
(1, 'dot-life-coaching-website-template-1024x510.jpg', 2),
(2, 'dot-life-coaching-website-template-1024x510.jpg', 2),
(3, 'dot-life-coaching-website-template-1024x510.jpg', 2),
(4, 'Screenshot 2024-12-20 195203.png', 2),
(5, 'Screenshot 2024-12-20 195203.png', 2),
(6, 'salaar.jpeg', 2);

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
(25, 'Konnapilly', 688009, 31),
(26, 'Punnapra North', 688003, 31),
(27, 'Thalassery', 670001, 32),
(28, 'Payyannur', 670307, 32),
(29, 'Mattannur', 670702, 32),
(30, 'Kanhangad', 671315, 33),
(31, 'Bekal', 671318, 33),
(32, 'Manjeshwar', 671323, 33),
(33, 'Chavara', 691583, 34),
(34, 'Paravur', 691301, 34),
(35, 'Punalur', 691305, 34),
(36, 'Kallai', 673003, 35),
(37, 'Feroke', 673631, 35),
(38, 'West Hill', 673005, 35),
(39, 'Malampuzha', 678651, 36),
(40, 'Chittur', 678101, 36),
(41, 'Mannarkkad', 678582, 36),
(42, 'Adichipuzha', 689711, 37),
(43, 'Amichikkary', 689112, 37),
(44, 'Thampanoor', 695001, 38),
(45, 'Kazhakoottam', 695582, 38),
(46, 'Neyyattinkara', 695121, 38),
(47, 'Kalpetta', 673121, 39),
(48, 'Sulthan Bakery', 673592, 39),
(49, 'Vythiri', 673576, 39),
(50, 'Adivaram', 686582, 40),
(51, 'Alapra', 686544, 40),
(52, 'Alanad', 686651, 40);

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
(1, 1, 2, 1, '2024-12-28', '', '2025-01-01'),
(2, 1, 8, 3, '2024-12-28', '', '2024-12-28'),
(3, 2, 7, 0, '2025-01-01', '', ''),
(4, 2, 10, 0, '2025-01-01', '', ''),
(5, 2, 4, 0, '2025-01-01', '', ''),
(6, 2, 1, 1, '2025-01-01', '', '2025-01-01'),
(8, 3, 4, 0, '2025-01-01', '', ''),
(9, 3, 9, 0, '2025-01-01', '', ''),
(10, 3, 3, 1, '2025-01-01', '', '2025-01-01'),
(11, 3, 7, 0, '2025-01-01', '', ''),
(13, 5, 6, 0, '2025-01-01', '', ''),
(14, 5, 5, 0, '2025-01-01', '', '');

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
(1, 4, 5, 'Not bad its ook', 1, '2025-01-01 17:27:57');

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
(10, 'Canvas', 13),
(12, 'React Native', 9),
(13, 'JAVA', 0),
(14, 'Asp.net', 9),
(15, 'Adobe Express', 13),
(16, 'JAVA-SPRINGBOOT-MYSQL', 9),
(17, 'Blender', 12),
(18, 'React Native', 11);

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
(1, 'Textile Shop Web App', '45000', 'I need a website to manage my textile shop looking for efficient freelancer for my budget', 'toaz.info-textile-shop-management-system-pr_58e91b', 2, 3, '', 0),
(2, 'Online Coaching App Development', '17000', 'Develop an online coaching platform with video conferencing, course management, and payment gateway integration', 'Online_Coaching_App.docx', 2, 7, '', 1),
(3, 'Logo Design for Startup', '17998', 'Create a professional logo for a tech startup focused on AI and machine learning.', 'Logo_Design.docx', 2, 15, '', 0),
(4, 'SEO Optimization', '788888', 'Perform on-page and off-page SEO for an e-commerce website to improve search engine ranking.', 'SEO_Optimization.docx', 3, 16, '', 0),
(5, 'I A S Coaching', '45000', 'App for students hoping to become an IAS Officer', 'fin_irjmets1668687649.pdf', 3, 12, '', 0),
(6, 'Background music', '78888', 'need a background music for my upcoming shortfilm', 'Ashes_on_The_Fire_(進撃の巨人_The_Final_Season_Original', 3, 9, '', 0),
(7, 'Movie song', '150000', 'looking for freelancers who can create a movie song for my new movie salaar', 'Enemy_(Slowed_Down)(256k).mp3', 4, 9, '', 0),
(8, 'Movie Poster', '54444', 'i need movie poster for my upcoming movie', 'Screenshot 2024-12-20 195203.png', 4, 17, 'salaar.jpeg', 1),
(9, 'Food delivery app', '300000', 'Food delivery app for my restaurant to minimize my effort in billing section', 'Food Delivery Managment System.pdf', 2, 18, '', 0),
(10, 'Game online shop', '48000', 'Looking for fresh freelancer who can manage my online website that sells video games for xbox and playstation', 'Documentation.pdf', 4, 16, '', 0),
(11, 'music app for my playlist', '832000', 'i need a music app for my favorite playlist so i can manage it in a simple way rather than opening a filemanager and i need dolby atmos 5.0,7.0 version supported for my audios', 'README.md', 4, 18, '', 0);

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
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_freelan`
--
ALTER TABLE `tbl_freelan`
  MODIFY `freelan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  MODIFY `gallary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_subcat`
--
ALTER TABLE `tbl_subcat`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_work`
--
ALTER TABLE `tbl_work`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
