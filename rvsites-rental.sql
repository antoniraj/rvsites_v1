-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 03:46 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rvsites-rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `campsite_owners`
--

CREATE TABLE `campsite_owners` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campsite_owners`
--

INSERT INTO `campsite_owners` (`id`, `user_id`, `firstname`, `lastname`, `address`, `created_on`, `modified_on`) VALUES
(1, 3, 'Antoni', 'Raj', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `defaults`
--

CREATE TABLE `defaults` (
  `id` int(11) NOT NULL,
  `default_property` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `property_value` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `default_payment_options`
--

CREATE TABLE `default_payment_options` (
  `id` int(11) NOT NULL,
  `payment_option` int(11) NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `total_amount` decimal(5,0) NOT NULL,
  `base_amount` decimal(5,0) NOT NULL,
  `additional_amount` decimal(5,0) DEFAULT NULL,
  `paypal_amount` decimal(5,0) DEFAULT NULL,
  `creditcard_amount` decimal(5,0) DEFAULT NULL,
  `foreign_creditcard_amount` decimal(5,0) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `property_title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `long_description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearby_attraction` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `meta_descrption` text COLLATE utf8_unicode_ci,
  `tag` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enable_seasonal_rate` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_blackout_dates`
--

CREATE TABLE `property_blackout_dates` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `blackout_date` datetime DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_parameters`
--

CREATE TABLE `property_parameters` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `max_size_feet` int(5) DEFAULT NULL,
  `dingy_parking` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hookup_cabletv` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `hookup_wired_internet` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `hookup_wireless_internet` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `hookup_20amp_power` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `hookup_30amp_power` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `hookup_50amp_power` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `hookup_water` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `hookup_sewage` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `hookup_dumping_station` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_hookup` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `on_busline` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `on_hiking_trail` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `on_bike_path` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `on_water` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `near_stores` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fishing_allowed` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `paved_parking` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravel_parking` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `dirt_parking` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `handicap_consideration` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `pets_allowed` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `tent_camp_allowed` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `laundry` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `rest_room` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `rv_storage_only` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `pet_deposit_required` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `damage_deposit_required` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  `minimum_stay_nights` mediumint(3) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_prices`
--

CREATE TABLE `property_prices` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_price_day` decimal(5,0) NOT NULL,
  `property_price_week` decimal(5,0) NOT NULL,
  `property_price_month` decimal(5,0) NOT NULL,
  `property_seasonal_price` decimal(5,0) NOT NULL,
  `seasonal_price_start` datetime DEFAULT NULL,
  `seasonal_price_end` datetime DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `fee_totalamount` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `paypal_proc_fee` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cc_proc_fee` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `in_proc_fee` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'International processing surcharge on foreign credit cards',
  `currency_formate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cs_notification` text COLLATE utf8_unicode_ci NOT NULL,
  `book_notification` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `logo`, `meta_keyword`, `meta_desc`, `fee_totalamount`, `paypal_proc_fee`, `cc_proc_fee`, `in_proc_fee`, `currency_formate`, `payment_method`, `cs_notification`, `book_notification`) VALUES
(1, 'RV Sites', '', 'RV Sites', 'RV Sites', '4', '4', '4', '4', '$', '1', 'info@rv-sites.com', 'info@rv-sites.com');

-- --------------------------------------------------------

--
-- Table structure for table `site_owners`
--

CREATE TABLE `site_owners` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `ctrated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `travellers`
--

CREATE TABLE `travellers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` int(3) NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `mobile`, `password`, `user_type`, `status`, `created_on`, `modified_on`) VALUES
(1, 'admin@rvsites.com', '9626662364', 'e6e061838856bf47e1de730719fb2609', 1, 'Active', '2016-11-17 00:28:54', NULL),
(3, 'antonirajs@outlook.com', '9626662364', '14340e601a3f6749a134ccbcb66b4450', 2, 'Active', '2016-11-22 02:41:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campsite_owners`
--
ALTER TABLE `campsite_owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `defaults`
--
ALTER TABLE `defaults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `default_payment_options`
--
ALTER TABLE `default_payment_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_blackout_dates`
--
ALTER TABLE `property_blackout_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_parameters`
--
ALTER TABLE `property_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_prices`
--
ALTER TABLE `property_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_owners`
--
ALTER TABLE `site_owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travellers`
--
ALTER TABLE `travellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campsite_owners`
--
ALTER TABLE `campsite_owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `defaults`
--
ALTER TABLE `defaults`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `default_payment_options`
--
ALTER TABLE `default_payment_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `property_blackout_dates`
--
ALTER TABLE `property_blackout_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `property_parameters`
--
ALTER TABLE `property_parameters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `property_prices`
--
ALTER TABLE `property_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_owners`
--
ALTER TABLE `site_owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `travellers`
--
ALTER TABLE `travellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
