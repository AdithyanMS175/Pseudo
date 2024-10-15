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
-- Database: `db_autotrack`
--
CREATE DATABASE IF NOT EXISTS `db_autotrack` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_autotrack`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_password` varchar(60) NOT NULL,
  `admin_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`) VALUES
(2, 'admin@gmail', 'admin', 'vaishak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_braketype`
--

CREATE TABLE `tbl_braketype` (
  `braketype_id` int(11) NOT NULL,
  `braketype_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_braketype`
--

INSERT INTO `tbl_braketype` (`braketype_id`, `braketype_name`) VALUES
(5, 'Hydraulic Brake'),
(6, 'Drum Brake'),
(7, 'Disc Brake'),
(8, 'Anti brake Brakes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `category_id`) VALUES
(2, 'Maruti suzuki', 12),
(3, 'Toyota', 12),
(4, 'Honda', 12),
(6, 'Volkswagon', 12),
(7, 'Skoda', 12),
(8, 'Bmw', 12),
(15, 'Tata', 12),
(16, 'Hyundai', 12),
(17, 'Mahindra', 12),
(18, 'Mercedes-Benz', 12),
(19, 'Audi', 12),
(20, 'Land Rover', 12),
(21, 'Porsche', 12),
(22, 'Kia', 12),
(23, 'Lexus', 12),
(24, 'MG', 12),
(25, 'Volvo', 12),
(26, 'Citroen', 12),
(27, 'Jeep', 12),
(28, 'Renault', 12),
(29, 'Jaguar', 12),
(30, 'Nissan', 12),
(31, 'MINI', 12),
(32, 'Rolls-Royce', 12),
(33, 'BYD', 12),
(34, 'Isuzu', 12),
(35, 'Honda', 11),
(36, 'Royal Enfield', 11),
(37, 'Hero', 11),
(38, 'Bajaj', 11),
(39, 'Yamaha', 11),
(40, 'TVS', 11),
(41, 'Kawasaki', 11),
(42, 'BMW', 11),
(43, 'KTM', 11),
(44, 'Triumph', 11),
(45, 'Aprillia', 11),
(46, 'Ather', 11),
(47, 'Benelli', 11),
(48, 'Ducati', 11),
(49, 'Harley-Davidson', 11),
(50, 'Husqvarna', 11),
(51, 'Indian', 11),
(52, 'JAWA', 11),
(53, 'OLA', 11),
(54, 'Revolt', 11),
(55, 'Suzuki', 11),
(56, 'Ultraviolette', 11),
(57, 'Vespa', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cardetails`
--

CREATE TABLE `tbl_cardetails` (
  `cardetails_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `cardetails_varient` varchar(50) NOT NULL,
  `cardetails_modelyear` varchar(50) NOT NULL,
  `cardetails_photo` varchar(50) NOT NULL,
  `cardetails_prize` int(11) NOT NULL,
  `cardetails_engine` varchar(60) NOT NULL,
  `cardetails_displacement` int(11) NOT NULL,
  `cardetails_power` int(11) NOT NULL,
  `cardetails_torque` int(11) NOT NULL,
  `cardetails_noofcylinders` int(11) NOT NULL,
  `transmissiontype_id` int(11) NOT NULL,
  `cardetails_noofgears` varchar(50) NOT NULL,
  `drivetype_id` int(11) NOT NULL,
  `fueltype_id` int(11) NOT NULL,
  `cardetails_mileage` int(11) NOT NULL,
  `cardetails_fuelcapacity` int(11) NOT NULL,
  `emissionnorms_id` int(11) NOT NULL,
  `cardetails_topspeed` int(11) NOT NULL,
  `steeringtype_id` int(11) NOT NULL,
  `cardetails_turningradius` varchar(50) NOT NULL,
  `frontbraketype_id` int(11) NOT NULL,
  `rearbraketype_id` int(11) NOT NULL,
  `cardetails_dimensions` varchar(50) NOT NULL,
  `cardetails_bootspace` varchar(50) NOT NULL,
  `cardetails_seatingcapacity` int(11) NOT NULL,
  `cardetails_noofdoors` int(11) NOT NULL,
  `cardetails_keyless` int(11) NOT NULL,
  `cardetails_safety` varchar(50) NOT NULL,
  `cardetails_ABS` varchar(50) NOT NULL,
  `cardetails_noofairbags` varchar(50) NOT NULL,
  `cardetails_electronicstabilitycontrol` varchar(50) NOT NULL,
  `cardetails_360viewcamera` varchar(50) NOT NULL,
  `cardetails_otherdetails` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cardetails`
--

INSERT INTO `tbl_cardetails` (`cardetails_id`, `brand_id`, `model_id`, `cardetails_varient`, `cardetails_modelyear`, `cardetails_photo`, `cardetails_prize`, `cardetails_engine`, `cardetails_displacement`, `cardetails_power`, `cardetails_torque`, `cardetails_noofcylinders`, `transmissiontype_id`, `cardetails_noofgears`, `drivetype_id`, `fueltype_id`, `cardetails_mileage`, `cardetails_fuelcapacity`, `emissionnorms_id`, `cardetails_topspeed`, `steeringtype_id`, `cardetails_turningradius`, `frontbraketype_id`, `rearbraketype_id`, `cardetails_dimensions`, `cardetails_bootspace`, `cardetails_seatingcapacity`, `cardetails_noofdoors`, `cardetails_keyless`, `cardetails_safety`, `cardetails_ABS`, `cardetails_noofairbags`, `cardetails_electronicstabilitycontrol`, `cardetails_360viewcamera`, `cardetails_otherdetails`) VALUES
(2, 2, 12, 'Sigma', '2018', '', 1000000, '1.2 turbo', 1250, 125, 300, 4, 6, '5Speed', 5, 5, 25, 35, 7, 140, 4, '16:45', 8, 6, '', '150', 5, 5, 0, 'ADAS Level0', '1', '4', '0', '0', '');

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
(11, 'Motorcycles'),
(12, 'Cars');

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
(2, 'ernakulam'),
(3, 'kollam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drivetype`
--

CREATE TABLE `tbl_drivetype` (
  `drivetype_id` int(11) NOT NULL,
  `drivetype_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_drivetype`
--

INSERT INTO `tbl_drivetype` (`drivetype_id`, `drivetype_name`) VALUES
(5, 'Front-Wheel Drive'),
(6, 'Rear-Wheel Drive'),
(7, 'Four-Wheel Drive'),
(8, 'All-Wheel Drive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emissionnorms`
--

CREATE TABLE `tbl_emissionnorms` (
  `emissionnorms_id` int(11) NOT NULL,
  `emissionnorms_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_emissionnorms`
--

INSERT INTO `tbl_emissionnorms` (`emissionnorms_id`, `emissionnorms_name`) VALUES
(3, 'Bharat Stage I (BS-I)'),
(4, 'Bharat Stage II (BS-II)'),
(5, 'Bharat Stage III (BS-III)'),
(6, 'Bharat Stage IV (BS-IV)'),
(7, 'Bharat Stage V (BS-V)'),
(8, 'Bharat Stage VI (BS-VI)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fueltype`
--

CREATE TABLE `tbl_fueltype` (
  `fueltype_id` int(11) NOT NULL,
  `fueltype_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fueltype`
--

INSERT INTO `tbl_fueltype` (`fueltype_id`, `fueltype_name`) VALUES
(5, 'Petrol'),
(6, 'Diesel'),
(7, 'Hybrid'),
(8, 'Electric');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model`
--

CREATE TABLE `tbl_model` (
  `model_id` int(11) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_model`
--

INSERT INTO `tbl_model` (`model_id`, `model_name`, `brand_id`, `category_id`) VALUES
(12, 'Swift', 2, 12),
(13, 'Fronx', 2, 12),
(14, 'Grand Vitara', 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdeatils`
--

CREATE TABLE `tbl_orderdeatils` (
  `orderdeatils_id` int(50) NOT NULL,
  `orderdeatils_name` varchar(50) NOT NULL,
  `showroom_id` int(11) NOT NULL,
  `orderdeatils_contact` varchar(50) NOT NULL,
  `orderdeatils_address` varchar(50) NOT NULL,
  `orderdeatils_pincode` varchar(50) NOT NULL,
  `orderdeatils_price` varchar(50) NOT NULL,
  `orderdeatils_payment` varchar(50) NOT NULL,
  `orderdeatils_productname` varchar(50) NOT NULL,
  `orderdeatils_quantity` varchar(50) NOT NULL,
  `orderdeatils_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orderdeatils`
--

INSERT INTO `tbl_orderdeatils` (`orderdeatils_id`, `orderdeatils_name`, `showroom_id`, `orderdeatils_contact`, `orderdeatils_address`, `orderdeatils_pincode`, `orderdeatils_price`, `orderdeatils_payment`, `orderdeatils_productname`, `orderdeatils_quantity`, `orderdeatils_status`) VALUES
(14, 'vaishak rajesh', 6, '56671341', 'house', '682303', '1500', 'UPI', 'Cluch belt', '1', 2),
(15, 'vaishak rajesh', 6, '56671341', 'house', '682303', '1500', '-----select------', 'Cluch belt', '40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `place_pincode` varchar(50) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `place_pincode`, `district_id`) VALUES
(3, 'karimugal', '682303', 2),
(4, 'jgjrjjioomv', '682303', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `service_year` varchar(10) NOT NULL,
  `place_id` int(11) NOT NULL,
  `showroom_id` int(11) NOT NULL,
  `service_date` varchar(10) NOT NULL,
  `service_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`service_id`, `user_id`, `category_id`, `brand_id`, `model_id`, `service_year`, `place_id`, `showroom_id`, `service_date`, `service_status`) VALUES
(9, 9, 12, 2, 12, '2015', 3, 7, '2024-07-19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_showroom`
--

CREATE TABLE `tbl_showroom` (
  `showroom_id` int(11) NOT NULL,
  `showroom_showroomname` varchar(50) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `showroom_email` varchar(50) NOT NULL,
  `showroom_contact` varchar(20) NOT NULL,
  `place_id` int(11) NOT NULL,
  `showroom_address` varchar(80) NOT NULL,
  `showroom_dateofjoin` varchar(50) NOT NULL,
  `showroom_password` varchar(50) NOT NULL,
  `showroom_photo` varchar(50) NOT NULL,
  `showroom_proof` varchar(50) NOT NULL,
  `showroom_status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_showroom`
--

INSERT INTO `tbl_showroom` (`showroom_id`, `showroom_showroomname`, `brand_id`, `category_id`, `showroom_email`, `showroom_contact`, `place_id`, `showroom_address`, `showroom_dateofjoin`, `showroom_password`, `showroom_photo`, `showroom_proof`, `showroom_status`) VALUES
(6, 'honda', 4, 11, 'vkr@gmail.com', '1234567', 3, 'houses..', '2024-05-22', '12345', 'wallpaperflare.com_wallpaper.jpg', 'wallpaperflare.com_wallpaper.jpg', '1'),
(7, 'kairali maruti', 2, 12, 'vaishak@gmail', '1234567890', 3, 'houses..', '2024-05-10', '12345', '', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spareparts`
--

CREATE TABLE `tbl_spareparts` (
  `spareparts_id` int(11) NOT NULL,
  `showroom_id` int(11) NOT NULL,
  `spareparts_brand` varchar(50) NOT NULL,
  `spareparts_model` varchar(50) NOT NULL,
  `spareparts_year` varchar(10) NOT NULL,
  `spareparts_partsname` varchar(50) NOT NULL,
  `spareparts_colour` varchar(50) NOT NULL,
  `spareparts_stock` varchar(10) NOT NULL,
  `spareparts_price` varchar(50) NOT NULL,
  `spareparts_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_spareparts`
--

INSERT INTO `tbl_spareparts` (`spareparts_id`, `showroom_id`, `spareparts_brand`, `spareparts_model`, `spareparts_year`, `spareparts_partsname`, `spareparts_colour`, `spareparts_stock`, `spareparts_price`, `spareparts_photo`) VALUES
(13, 6, 'Honda', 'activa', '2014', 'Cluch belt', 'Grey', '42', '1500', 'wallpaperflare.com_wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_steeringtype`
--

CREATE TABLE `tbl_steeringtype` (
  `steeringtype_id` int(11) NOT NULL,
  `steeringtype_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_steeringtype`
--

INSERT INTO `tbl_steeringtype` (`steeringtype_id`, `steeringtype_name`) VALUES
(4, 'Power Steering'),
(5, 'Rack and Pinion Steering'),
(6, 'Recirculating Ball Steering'),
(8, 'Electronic Power Steering (EPS)'),
(9, 'Steer-by-Wire Steering'),
(10, 'Four-wheel Steering'),
(11, 'Manual Steering');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(1, '1', 0),
(6, 'windows', 6),
(8, 'windows', 7),
(10, 'windows', 8),
(11, 'Ram', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transmissiontype`
--

CREATE TABLE `tbl_transmissiontype` (
  `transmissiontype_id` int(11) NOT NULL,
  `transmissiontype_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transmissiontype`
--

INSERT INTO `tbl_transmissiontype` (`transmissiontype_id`, `transmissiontype_name`) VALUES
(4, 'Manual Transmission'),
(5, 'Intelligent Manual Transmission (IMT)'),
(6, 'Automated Manual Transmission (AMT)'),
(7, 'Automatic Transmission (AT)'),
(8, 'Continuously Variable Transmission (CVT)'),
(9, 'Semi-automatic Transmission'),
(10, 'Dual-clutch Transmission(DCT)'),
(11, 'Sequential Transmission'),
(12, 'Torque Converter Transmission'),
(13, 'Tiptronic Transmission');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trial`
--

CREATE TABLE `tbl_trial` (
  `trial_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `trial_year` varchar(20) NOT NULL,
  `place_id` int(11) NOT NULL,
  `showroom_id` int(11) NOT NULL,
  `trial_date` varchar(20) NOT NULL,
  `trial_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_trial`
--

INSERT INTO `tbl_trial` (`trial_id`, `user_id`, `category_id`, `brand_id`, `model_id`, `trial_year`, `place_id`, `showroom_id`, `trial_date`, `trial_status`) VALUES
(1, 9, 12, 2, 13, '', 3, 7, '2024-07-18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_photo` varchar(50) NOT NULL,
  `user_proof` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `user_dob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `place_id`, `user_address`, `user_photo`, `user_proof`, `user_password`, `user_contact`, `user_dob`) VALUES
(9, 'vaishak rajesh', 'user@gmail.com', 3, 'house', 'wallpaperflare.com_wallpaper.jpg', 'wallpaperflare.com_wallpaper.jpg', '12345', '56671341', '2024-05-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_braketype`
--
ALTER TABLE `tbl_braketype`
  ADD PRIMARY KEY (`braketype_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_cardetails`
--
ALTER TABLE `tbl_cardetails`
  ADD PRIMARY KEY (`cardetails_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_drivetype`
--
ALTER TABLE `tbl_drivetype`
  ADD PRIMARY KEY (`drivetype_id`);

--
-- Indexes for table `tbl_emissionnorms`
--
ALTER TABLE `tbl_emissionnorms`
  ADD PRIMARY KEY (`emissionnorms_id`);

--
-- Indexes for table `tbl_fueltype`
--
ALTER TABLE `tbl_fueltype`
  ADD PRIMARY KEY (`fueltype_id`);

--
-- Indexes for table `tbl_model`
--
ALTER TABLE `tbl_model`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `tbl_orderdeatils`
--
ALTER TABLE `tbl_orderdeatils`
  ADD PRIMARY KEY (`orderdeatils_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_showroom`
--
ALTER TABLE `tbl_showroom`
  ADD PRIMARY KEY (`showroom_id`);

--
-- Indexes for table `tbl_spareparts`
--
ALTER TABLE `tbl_spareparts`
  ADD PRIMARY KEY (`spareparts_id`);

--
-- Indexes for table `tbl_steeringtype`
--
ALTER TABLE `tbl_steeringtype`
  ADD PRIMARY KEY (`steeringtype_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_transmissiontype`
--
ALTER TABLE `tbl_transmissiontype`
  ADD PRIMARY KEY (`transmissiontype_id`);

--
-- Indexes for table `tbl_trial`
--
ALTER TABLE `tbl_trial`
  ADD PRIMARY KEY (`trial_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_braketype`
--
ALTER TABLE `tbl_braketype`
  MODIFY `braketype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_cardetails`
--
ALTER TABLE `tbl_cardetails`
  MODIFY `cardetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_drivetype`
--
ALTER TABLE `tbl_drivetype`
  MODIFY `drivetype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_emissionnorms`
--
ALTER TABLE `tbl_emissionnorms`
  MODIFY `emissionnorms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_fueltype`
--
ALTER TABLE `tbl_fueltype`
  MODIFY `fueltype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_model`
--
ALTER TABLE `tbl_model`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_orderdeatils`
--
ALTER TABLE `tbl_orderdeatils`
  MODIFY `orderdeatils_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_showroom`
--
ALTER TABLE `tbl_showroom`
  MODIFY `showroom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_spareparts`
--
ALTER TABLE `tbl_spareparts`
  MODIFY `spareparts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_steeringtype`
--
ALTER TABLE `tbl_steeringtype`
  MODIFY `steeringtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_transmissiontype`
--
ALTER TABLE `tbl_transmissiontype`
  MODIFY `transmissiontype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_trial`
--
ALTER TABLE `tbl_trial`
  MODIFY `trial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Database: `db_book`
--
CREATE DATABASE IF NOT EXISTS `db_book` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_book`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `bookno` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `dateofp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`bookno`, `title`, `author`, `price`, `dateofp`) VALUES
(1, 'wings of fire', 'abdul kalam', 1000, '2024-07-10'),
(2, 'goatlife', 'blessy', 150, '2024-07-01'),
(3, 'short', 'adi', 1500, '2024-07-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`bookno`);
--
-- Database: `db_exam`
--
CREATE DATABASE IF NOT EXISTS `db_exam` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_exam`;

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE `blood_bank` (
  `mob_no` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`mob_no`, `name`, `blood_group`) VALUES
('4546564646445', 'sdsds', 'A+'),
('7012489987', 'Adarsh ps', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_driving`
--

CREATE TABLE `tbl_driving` (
  `drive_id` int(11) NOT NULL,
  `drive_name` varchar(50) NOT NULL,
  `drive_address` varchar(50) NOT NULL,
  `drive_bgroup` varchar(50) NOT NULL,
  `drive_dob` varchar(50) NOT NULL,
  `drive_contact` varchar(50) NOT NULL,
  `drive_aadhar` varchar(50) NOT NULL,
  `drive_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_driving`
--

INSERT INTO `tbl_driving` (`drive_id`, `drive_name`, `drive_address`, `drive_bgroup`, `drive_dob`, `drive_contact`, `drive_aadhar`, `drive_email`) VALUES
(1, 'adithyan ms', 'HOuse', 'A+', '2004-12-02', '123456789', '111111111111', 'adithyanms175@gmail.com'),
(2, 'jerin', 'xlgjgjdjg', 'A+', '2007-02-02', '1234567891', '111111111111', 'adithyanms175@gmail.com'),
(3, 'jerin', 'xlgjgjdjg', 'A+', '2007-02-02', '123456789', '111111111111', 'adithyanms175@gmail.com'),
(4, '', '', '', '', '', '', ''),
(5, 'jobinn', 'jgahgdhgd', 'A+', '2010-02-02', '123456789', '1111111111', 'admin@gmail.com'),
(6, 'jobinn', 'jgahgdhgd', 'A+', '2010-02-02', '123456789', '1111111111', 'admin@gmail.com'),
(7, 'sdsds', 'sjhfdjdgf', 'A+', '2010-02-02', '123456789', '1111111111', 'admin@gmail.com'),
(8, 'adithyan ms', 'HOuse', 'A+', '2010-02-02', '123456789', '111111111111', 'adithyanms175@gmail.com'),
(9, 'adithyan ms', 'HOuse', 'A+', '2010-02-02', '123456789', '111111111111', 'adithyanms175@gmail.com'),
(10, 'adithyan ms', 'kjhhjkhkj', 'A+', '2005-02-02', '1234567891', '111111111111', 'adithyanms175@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD PRIMARY KEY (`mob_no`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_driving`
--
ALTER TABLE `tbl_driving`
  ADD PRIMARY KEY (`drive_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_driving`
--
ALTER TABLE `tbl_driving`
  MODIFY `drive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Database: `db_mobilematchup`
--
CREATE DATABASE IF NOT EXISTS `db_mobilematchup` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_mobilematchup`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`) VALUES
(1, 'arun@gmail.com', '', 'Arun Gangadharan'),
(2, 'arun@gmail.com', '123456', 'Arun Gangadharan'),
(3, 'arun@gmail.com', '123456', 'Arun Gangadharan'),
(4, 'arasha@gmail.com', '123', 'arsha');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_status` int(11) NOT NULL DEFAULT 0,
  `booking_date` varchar(50) NOT NULL,
  `booking_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `user_id`, `booking_status`, `booking_date`, `booking_amount`) VALUES
(2, 12, 1, '2024-07-06', 16),
(3, 12, 1, '2024-07-06', 16),
(4, 12, 1, '2024-07-06', 16),
(5, 12, 4, '2024-07-06', 16),
(6, 9, 2, '2024-07-06', 24000),
(7, 8, 2, '2024-07-17', 24000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `category_id`) VALUES
(3, 'Vivo', 4),
(4, 'Oppo', 5),
(5, 'Redmi ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cart_status` int(11) NOT NULL DEFAULT 0,
  `cart_quantity` int(11) NOT NULL,
  `cart_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `booking_id`, `product_id`, `cart_status`, `cart_quantity`, `cart_date`) VALUES
(6, 2, 27, 1, 1, '2024-07-06'),
(7, 3, 27, 1, 2, '2024-07-06'),
(8, 4, 27, 1, 2, '2024-07-06'),
(9, 5, 29, 1, 2, '2024-07-06'),
(10, 6, 27, 1, 2, '2024-07-06'),
(11, 7, 27, 1, 2, '2024-07-17');

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
(4, 'Category-1'),
(5, 'Category-2'),
(6, 'computer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `comment_comment` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mobile_id` int(11) NOT NULL,
  `comment_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `comment_comment`, `user_id`, `mobile_id`, `comment_date`) VALUES
(21, 'fghdfgdfgndfgn', 10, 9, '2024-05-25'),
(22, 'aaaaaa', 10, 9, '2024-05-25'),
(23, 'nice', 10, 9, '2024-05-27'),
(24, 'good', 10, 0, '2024-05-27'),
(25, 'beautiful', 10, 13, '2024-05-29'),
(26, 'good', 10, 17, '2024-05-29'),
(27, 'good', 9, 15, '2024-07-05'),
(28, 'good', 9, 17, '2024-07-06'),
(29, 'bad', 9, 22, '2024-07-06'),
(30, 'good', 8, 17, '2024-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `company_password` varchar(50) NOT NULL,
  `company_proof` varchar(80) NOT NULL,
  `company_contact` varchar(50) NOT NULL,
  `company_address` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `company_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`company_id`, `company_name`, `company_email`, `company_password`, `company_proof`, `company_contact`, `company_address`, `place_id`, `company_photo`) VALUES
(19, 'vivo', 'vivo@gmail.com', '123', 'Screenshot (46).png', '9785632147', 'ernakulam muvattupuzha p.o ', 1, 'Screenshot (53).png');

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
(8, 'Ernakulam'),
(9, 'Idukki'),
(10, 'Kottayam'),
(11, 'Palakkad'),
(12, 'kannur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobile`
--

CREATE TABLE `tbl_mobile` (
  `mobile_id` int(11) NOT NULL,
  `mobile_name` varchar(50) NOT NULL,
  `mobile_price` int(11) NOT NULL,
  `mobile_model` varchar(50) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mobile`
--

INSERT INTO `tbl_mobile` (`mobile_id`, `mobile_name`, `mobile_price`, `mobile_model`, `company_id`) VALUES
(17, 'Vivo X', 12000, '25672', 19),
(18, 'vivo Y', 15000, '23242', 19),
(19, 'oppp', 19500, 'rwwww', 19),
(22, 'Realme ', 13499, '12', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobiledetails`
--

CREATE TABLE `tbl_mobiledetails` (
  `mobiledetails_id` int(11) NOT NULL,
  `mobiledetails_name` varchar(50) NOT NULL,
  `mobiledetails_color` varchar(50) NOT NULL,
  `mobiledetails_storage` varchar(50) NOT NULL,
  `mobiledetails_ram` varchar(50) NOT NULL,
  `mobiledetails_rom` varchar(50) NOT NULL,
  `mobiledetails_processor` varchar(60) NOT NULL,
  `mobiledetails_rearcam` varchar(50) NOT NULL,
  `mobiledetails_frontcam` varchar(50) NOT NULL,
  `mobiledetails_display` varchar(50) NOT NULL,
  `mobiledetails_battery` varchar(50) NOT NULL,
  `mobiledetails_photo` varchar(50) NOT NULL,
  `mobiledetails_price` int(50) NOT NULL,
  `mobile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mobiledetails`
--

INSERT INTO `tbl_mobiledetails` (`mobiledetails_id`, `mobiledetails_name`, `mobiledetails_color`, `mobiledetails_storage`, `mobiledetails_ram`, `mobiledetails_rom`, `mobiledetails_processor`, `mobiledetails_rearcam`, `mobiledetails_frontcam`, `mobiledetails_display`, `mobiledetails_battery`, `mobiledetails_photo`, `mobiledetails_price`, `mobile_id`) VALUES
(31, 'Realme 12x', 'Twilight Purple', '128 GB', '6 GB', '128 GB', 'Dimensity 6100+', '50MP', '8MP', '6.72 inch HD+90Hz Display', '5000mah', 'Screenshot (54).png', 13, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `place_pincode` varchar(50) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `place_pincode`, `district_id`) VALUES
(1, 'Muvattupuzha', '686661', 8),
(2, 'Thodupuzha', '686231', 9),
(3, 'Chitoor', '969798', 11),
(4, 'Payyambalam', '686649', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_details` varchar(50) NOT NULL,
  `product_image` varchar(60) NOT NULL,
  `subcategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_price`, `product_details`, `product_image`, `subcategory_id`) VALUES
(1, 'tertret', 12, 'Good', 'Screenshot (1).png', 3),
(2, 'tertret', 12, 'Good', 'Screenshot (1).png', 3),
(3, 'tertret', 12, 'Good', 'Screenshot (1).png', 3),
(4, 'Thanseer', 12, 'Good', 'Screenshot (1).png', 2),
(5, 'Product-1', 12, 'Good', 'Screenshot (1).png', 4),
(6, 'Product-1', 12, 'Good', 'Screenshot (1).png', 4),
(7, 'oppp', 12000, 'good', 'Screenshot (48).png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `request_id` int(11) NOT NULL,
  `request_date` varchar(100) NOT NULL,
  `request_status` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `servicetype_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_request`
--

INSERT INTO `tbl_request` (`request_id`, `request_date`, `request_status`, `user_Id`, `servicetype_id`) VALUES
(1, '2024-05-28', 0, 0, 3),
(2, '2024-05-28', 0, 0, 3),
(3, '2024-05-28', 0, 0, 4),
(4, '2024-05-28', 0, 12, 4),
(10, '2024-05-30', 0, 10, 9),
(11, '2024-05-30', 0, 10, 9),
(12, '2024-05-30', 0, 10, 9),
(13, '2024-05-30', 0, 10, 9),
(14, '2024-07-05', 0, 0, 6),
(15, '2024-07-05', 0, 0, 9),
(16, '2024-07-05', 0, 0, 9),
(17, '2024-07-05', 1, 9, 13),
(18, '2024-07-05', 2, 9, 9),
(19, '2024-07-05', 1, 9, 9),
(20, '2024-07-05', 0, 9, 9),
(21, '2024-07-06', 2, 9, 9),
(22, '2024-07-06', 2, 12, 9),
(23, '2024-07-17', 1, 8, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `review_datetime` varchar(50) NOT NULL,
  `mobiidetails_id` int(11) NOT NULL,
  `user_review` varchar(100) NOT NULL,
  `user_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_servicecenter`
--

CREATE TABLE `tbl_servicecenter` (
  `servicecenter_id` int(11) NOT NULL,
  `servicecenter_name` varchar(50) NOT NULL,
  `servicecenter_email` varchar(50) NOT NULL,
  `servicecenter_proof` varchar(50) NOT NULL,
  `servicecenter_password` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `center_status` int(11) NOT NULL,
  `servicecenter_photo` varchar(50) NOT NULL,
  `servicecenter_contact` int(11) NOT NULL,
  `servicecenter_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_servicecenter`
--

INSERT INTO `tbl_servicecenter` (`servicecenter_id`, `servicecenter_name`, `servicecenter_email`, `servicecenter_proof`, `servicecenter_password`, `place_id`, `center_status`, `servicecenter_photo`, `servicecenter_contact`, `servicecenter_address`) VALUES
(19, 'samsung', 'samsung@gmail.com', 'Screenshot (2).png', 'sam', 2, 1, 'Screenshot (1).png', 2147483647, 'sssssss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_servicetype`
--

CREATE TABLE `tbl_servicetype` (
  `servicetype_id` int(11) NOT NULL,
  `servicetype_type` varchar(50) NOT NULL,
  `servicetype_details` varchar(50) NOT NULL,
  `servicetype_rate` varchar(50) NOT NULL,
  `servicecenter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_servicetype`
--

INSERT INTO `tbl_servicetype` (`servicetype_id`, `servicetype_type`, `servicetype_details`, `servicetype_rate`, `servicecenter_id`) VALUES
(3, 'Display', 'regtruht', '1200', 15),
(4, 'display', 'ahaa', '2500', 16),
(5, 'display', 'ahaa', '2500', 10),
(6, 'display ', '5.5 inch', '2500', 0),
(7, 'display', '5.5 inch', '2500', 0),
(8, 'display', '5.5 inch', '2500', 0),
(9, 'display', '5.5 inch', '2500', 19),
(10, 'touch issue', 'screen', '1300', 0),
(11, 'touch issue', 'screen', '1300', 0),
(12, 'touch issue', 'screen', '1300', 0),
(13, 'touch issue', 'screen', '1300', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `stock_date` varchar(50) NOT NULL,
  `mobile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`stock_id`, `stock_quantity`, `stock_date`, `mobile_id`) VALUES
(1, 5, '2024-07-06', 27),
(2, 4, '2024-07-06', 31),
(3, 4, '2024-07-17', 27);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(1, 'jhgjukhi', 0),
(2, 'jhgjukhi', 2),
(3, 'jhgjukhi', 2),
(4, 'SubCategory-1', 4),
(5, 'SubCategory-2', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usedphone`
--

CREATE TABLE `tbl_usedphone` (
  `usedphone_id` int(11) NOT NULL,
  `usedphone_name` varchar(50) NOT NULL,
  `usedphone_details` varchar(50) NOT NULL,
  `usedphone_price` int(11) NOT NULL,
  `usedphone_photo` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_usedphone`
--

INSERT INTO `tbl_usedphone` (`usedphone_id`, `usedphone_name`, `usedphone_details`, `usedphone_price`, `usedphone_photo`, `user_id`) VALUES
(9, 'oppo A', 'fdrgff', 8, 'Screenshot (46).png', 12),
(10, 'oppo A', 'fdrgff', 8, 'Screenshot (46).png', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_photo` varchar(60) NOT NULL,
  `user_proof` varchar(60) NOT NULL,
  `user_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_gender`, `user_contact`, `user_email`, `user_password`, `place_id`, `user_photo`, `user_proof`, `user_address`) VALUES
(8, 'akshay', 'Male', '9207066221', 'akshay@gmail.com', '123456', 1, 'Screenshot (1).png', 'Screenshot (2).png', 'muvattupuzha p.o '),
(9, 'adarash', 'Male', '920706621', 'adarash@gmail.com', 'adarsh', 1, 'Screenshot (1).png', 'Screenshot (2).png', 'mmmjkuulj'),
(15, 'arsha', 'Female', '92070662211', 'adarash@gmail.com', '1111', 1, 'Screenshot (52).png', 'Screenshot (52).png', 'perumbavoor ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_mobile`
--
ALTER TABLE `tbl_mobile`
  ADD PRIMARY KEY (`mobile_id`);

--
-- Indexes for table `tbl_mobiledetails`
--
ALTER TABLE `tbl_mobiledetails`
  ADD PRIMARY KEY (`mobiledetails_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

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
-- Indexes for table `tbl_servicecenter`
--
ALTER TABLE `tbl_servicecenter`
  ADD PRIMARY KEY (`servicecenter_id`);

--
-- Indexes for table `tbl_servicetype`
--
ALTER TABLE `tbl_servicetype`
  ADD PRIMARY KEY (`servicetype_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_usedphone`
--
ALTER TABLE `tbl_usedphone`
  ADD PRIMARY KEY (`usedphone_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_mobile`
--
ALTER TABLE `tbl_mobile`
  MODIFY `mobile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_mobiledetails`
--
ALTER TABLE `tbl_mobiledetails`
  MODIFY `mobiledetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_servicecenter`
--
ALTER TABLE `tbl_servicecenter`
  MODIFY `servicecenter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_servicetype`
--
ALTER TABLE `tbl_servicetype`
  MODIFY `servicetype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_usedphone`
--
ALTER TABLE `tbl_usedphone`
  MODIFY `usedphone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Database: `db_pseudo`
--
CREATE DATABASE IF NOT EXISTS `db_pseudo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_pseudo`;

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
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"db_pseudo\",\"table\":\"tbl_chat\"},{\"db\":\"db_pseudo\",\"table\":\"tbl_freelan\"},{\"db\":\"db_pseudo\",\"table\":\"tbl_category\"},{\"db\":\"db_pseudo\",\"table\":\"tbl_admin\"},{\"db\":\"db_pseudo\",\"table\":\"tbl_review\"},{\"db\":\"db_pseudo\",\"table\":\"tbl_work\"},{\"db\":\"db_pseudo\",\"table\":\"tbl_subcat\"},{\"db\":\"db_pseudo\",\"table\":\"tbl_request\"},{\"db\":\"db_book\",\"table\":\"tbl_book\"},{\"db\":\"db_exam\",\"table\":\"blood_bank\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'db_pseudo', 'tbl_complaint', '{\"sorted_col\":\"`tbl_complaint`.`complaint_id`  ASC\"}', '2024-07-16 05:33:11'),
('root', 'db_pseudo', 'tbl_work', '{\"sorted_col\":\"`tbl_work`.`subcat_id`  DESC\"}', '2024-07-26 06:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-07-27 13:58:32', '{\"Console\\/Mode\":\"show\",\"NavigationWidth\":224,\"ThemeDefault\":\"pmahomme\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
