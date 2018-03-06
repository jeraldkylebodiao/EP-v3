-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 04:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `explorepinas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `id` int(11) NOT NULL,
  `tourist_name` varchar(255) NOT NULL,
  `desc_name` varchar(255) NOT NULL,
  `reg_name` varchar(255) NOT NULL,
  `prov_name` varchar(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `ts_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `tourist_name`, `desc_name`, `reg_name`, `prov_name`, `city_name`, `ts_image`) VALUES
(3, 'EDITED', 'EDITED', 'EDITED', 'EDITED', 'EDITED', '4474130-elizabeth-olsen-wallpapers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_role_id`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'newbiedetected', 'newbiedetected@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(3, 'newaccount', 'newaccount@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(5, 'jovenaccount', 'jovenaccount@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(6, 'jheremie10', 'jheremie10@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(7, 'nicail', 'nicail@yahoo.com', '202cb962ac59075b964b07152d234b70', 2),
(8, 'jp', 'jp@yahoo.com', '202cb962ac59075b964b07152d234b70', 2),
(9, 'newest', 'newest@gmail.com', '202cb962ac59075b964b07152d234b70', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE `user_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `editors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`id`, `title`, `body`, `post_name`, `post_image`, `editors`) VALUES
(2, 'NEW POST', 'NEW BODY asdasdasdsadadas', 'newaccount', 'thumb-1920-468713.jpg', 1),
(13, 'TRIAL POST 3', 'asdasdasdsdasdassdgkdflhl', 'jheremie10', 'thumb-1920-614818.jpg', 1),
(17, '4', '4\r\n', 'newbiedetected', 'thumb-1920-802513.jpg', 1),
(19, 'wwew', 'qweqwe', 'newbiedetected', 'elizabeth_olsen-wide.jpg', 1),
(20, 'POST JOVEN', '12312312312', 'jovenaccount', 'thumb-1920-804491.jpg', 1),
(21, 'NEW POST', '123123123', 'jovenaccount', 'thumb-1920-804493.jpg', 1),
(23, 'qweqweqweqwe', 'qweqweqweqweqweqweqweqweqweqweqw', 'nicail', 'thumb-1920-698423.jpg', 1),
(24, 'Baler is good', 'Baler is good Baler is good Baler is good Baler is good Baler is good Baler is good Baler is good Baler is good Baler is good ', 'nicail', 'Baler.jpg', 1),
(25, 'Banaue is good', 'Banaue is good Banaue is good Banaue is good Banaue is good Banaue is good Banaue is good Banaue is good Banaue is good Banaue is good Banaue is good ', 'nicail', 'Banaue.jpg', 1),
(26, 'CEBU IS GOOD', 'CEBU IS GOOD CEBU IS GOOD CEBU IS GOOD CEBU IS GOOD CEBU IS GOOD CEBU IS GOOD CEBU IS GOOD CEBU IS GOOD CEBU IS GOOD CEBU IS GOOD ', 'newbiedetected', 'Cebu.jpg', 1),
(28, 'Dumaguete is good', 'Dumaguete is good Dumaguete is good Dumaguete is good Dumaguete is good Dumaguete is good Dumaguete is good Dumaguete is good Dumaguete is good Dumaguete is good ', 'newbiedetected', 'Dumaguete.jpg', 1),
(29, 'ELNIDO, PALAWAN IS GOOD', 'ELNIDO, PALAWAN IS GOOD ELNIDO, PALAWAN IS GOOD ELNIDO, PALAWAN IS GOOD ELNIDO, PALAWAN IS GOOD ELNIDO, PALAWAN IS GOOD ELNIDO, PALAWAN IS GOOD V', 'jovenaccount', 'Elnido, Palawan.JPG', 1),
(30, 'ILOILO CITY IS GOOD', 'ILOILO CITY IS GOOD ILOILO CITY IS GOOD ILOILO CITY IS GOOD ILOILO CITY IS GOOD ILOILO CITY IS GOOD ILOILO CITY IS GOOD ILOILO CITY IS GOOD ILOILO CITY IS GOOD V', 'jovenaccount', 'Iloilo city.jpg', 1),
(31, 'MOALBOAL IS GOOD ', 'MOALBOAL IS GOOD MOALBOAL IS GOOD MOALBOAL IS GOOD MOALBOAL IS GOOD MOALBOAL IS GOOD MOALBOAL IS GOOD MOALBOAL IS GOOD MOALBOAL IS GOOD MOALBOAL IS GOOD V', 'jovenaccount', 'Moalboal.JPG', 1),
(32, 'INTRAMUROS IS GOOD ', 'INTRAMUROS IS GOOD INTRAMUROS IS GOOD INTRAMUROS IS GOOD INTRAMUROS IS GOOD INTRAMUROS IS GOOD INTRAMUROS IS GOOD INTRAMUROS IS GOOD INTRAMUROS IS GOOD INTRAMUROS IS GOOD ', 'newaccount', 'Intramuros.jpg', 1),
(33, 'MACTAN IS GOOD ', 'MACTAN IS GOOD MACTAN IS GOOD MACTAN IS GOOD MACTAN IS GOOD MACTAN IS GOOD MACTAN IS GOOD MACTAN IS GOOD VV', 'newaccount', 'mactan.jpg', 1),
(34, 'PANGLAO ISLAND IS GOOD ', 'PANGLAO ISLAND IS GOOD PANGLAO ISLAND IS GOOD PANGLAO ISLAND IS GOOD PANGLAO ISLAND IS GOOD PANGLAO ISLAND IS GOOD PANGLAO ISLAND IS GOOD PANGLAO ISLAND IS GOOD PANGLAO ISLAND IS GOOD PANGLAO ISLAND IS GOOD PANGLAO ISLAND IS GOOD PANGLAO ISLAND IS GOOD ', 'newaccount', 'Panglao Island.JPG', 1),
(35, 'PALAWAN IS BETTER ', 'PALAWAN IS BETTER PALAWAN IS BETTER PALAWAN IS BETTER PALAWAN IS BETTER PALAWAN IS BETTER PALAWAN IS BETTER PALAWAN IS BETTER PALAWAN IS BETTER PALAWAN IS BETTER PALAWAN IS BETTER PALAWAN IS BETTER ', 'newaccount', 'palawan.jpg', 1),
(38, 'SIARGAO IS WAY BETTER ', 'SIARGAO IS WAY BETTER SIARGAO IS WAY BETTER SIARGAO IS WAY BETTER SIARGAO IS WAY BETTER SIARGAO IS WAY BETTER SIARGAO IS WAY BETTER SIARGAO IS WAY BETTER SIARGAO IS WAY BETTER SIARGAO IS WAY BETTER SIARGAO IS WAY BETTER SIARGAO IS WAY BETTER SIARGAO IS WA', 'jheremie10', 'Siargao.jpg', 1),
(39, 'TAGAYTAY IS GOOD ', 'TAGAYTAY IS GOOD TAGAYTAY IS GOOD TAGAYTAY IS GOOD TAGAYTAY IS GOOD TAGAYTAY IS GOOD TAGAYTAY IS GOOD TAGAYTAY IS GOOD TAGAYTAY IS GOOD TAGAYTAY IS GOOD TAGAYTAY IS GOOD TAGAYTAY IS GOOD ', 'jheremie10', 'tagaytay.jpg', 1),
(43, '123', '123', 'jp', 'error1.PNG', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_posts`
--
ALTER TABLE `user_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
