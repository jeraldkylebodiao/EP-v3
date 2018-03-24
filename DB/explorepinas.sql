-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 12:06 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `accountverifier`
--

CREATE TABLE `accountverifier` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `middle_initial` varchar(255) NOT NULL,
  `full_address` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountverifier`
--

INSERT INTO `accountverifier` (`id`, `username`, `first_name`, `last_name`, `middle_initial`, `full_address`, `contact_number`, `email_address`, `birthdate`, `status`) VALUES
(3, 'newbiedetected', 'John Paul ', 'Montilla', 'P.', 'BLK. 1O LOT 6 LOVAGE ST. PHASE D TREELANE III, BAYAN LUMA V, IMUS CITY, CAVITE', '09496394230', 'yoqweqw143@gmail.com', '1998-12-13', 'verified'),
(7, 'jheremie10', 'Jheremie', 'Macam', 'G.', 'dyan lang boss', 'eweweew', 'wew@wew', '2018-01-01', 'declined'),
(9, 'jheremie10', 'Jheremie', 'Macam', 'G.', 'Pag-asa, Imus City, Cavite', '09123456789', 'jheremie10@gmail.com', '1998-11-10', 'declined'),
(12, 'jheremie10', 'Jheremie', 'Macam', 'G.', 'Pag-asa, Imus City, Cavite', '09123456789', 'jheremie10@gmail.com', '1998-11-10', 'declined'),
(13, 'jheremie10', 'Jheremie', 'Montilla', 'G.', 'Pag-asa, Imus City, Cavite', '09123456789', 'jheremie10@gmail.com', '1998-11-10', 'declined'),
(14, 'Joven', 'Joven', 'Montanez', 'E.', 'Binan, Laguna', '0912345678', 'joven@gmail.com', '1997-01-01', 'declined'),
(22, 'nicail', 'Nicail', 'Pepito', 'A.', 'Pasay City, Manila', '09123456789', 'nicail@gmail.com', '1998-01-01', 'declined'),
(23, 'Joven', 'Joven', 'Montanez', 'E.', 'Binan, Laguna', '09123456789', 'joven@gmail.com', '1997-01-01', 'declined'),
(24, 'jheremie10', 'Jheremie', 'Macam', 'G.', 'Pag-asa, Imus City, Cavite', '09123456789', 'jheremie10@gmail.com', '1998-01-01', 'declined'),
(26, 'nicail', 'Nicail', 'Pepito', 'A.', 'Pasay City, Manila', '09123456789', 'nicail@gmail.com', '1998-01-01', 'declined'),
(28, 'nicail', 'Nicail', 'Pepito', 'A.', 'Pasay City, Manila', '09090', 'nicail@gmail.com', '2018-01-01', 'declined'),
(29, 'jheremie10', 'Jheremie', 'Macam', 'G.', 'Pag-asa, Imus City, Cavite', '0912321123', 'jheremie10@gmail.com', '2018-01-01', 'declined'),
(30, 'shingshangfu', 'Juan Paolo', 'Montilla', 'P.', 'BLK. 1O LOT 6 LOVAGE ST. PHASE D TREELANE III, BAYAN LUMA V, IMUS CITY, CAVITE', '09496394230', 'yoqweqw143@gmail.com', '1998-12-12', 'verified'),
(33, 'jheremie10', 'Jheremie', 'Macam', 'G.', '082 Pag-asa 2 Imus city,cavite', '123456789', 'jheremie10@gmail.com', '1998-11-10', 'verified'),
(34, 'martgutz', 'Raymart', 'Gutierrez', 'W.', '2230 Rd.8 Fabie Estate, Sta. Ana Manila', '09152777755', 'raymartg23@yahoo.com', '1998-08-07', 'verified'),
(35, 'nicail', 'wewewew', 'wewewe', 'wewew', 'wewewe', '9090909', 'wew@wewewew', '2019-02-02', 'declined'),
(36, 'Joven', 'Joven', 'Montanez', 'E.', 'Binan, Laguna', '09123456789', 'joven@gmail.com', '1996-03-02', 'declined'),
(37, 'kyle12', 'Jerald Kyle', 'Bodiao', 'o.', '12124 rizal st. manila', '09123456782', 'jerald@kyle.com', '1998-12-03', 'verified'),
(38, 'vincent', 'Vincent', 'Tibubos', 'P.', 'Pampanga', '09123456789', 'yow@yow', '2006-02-02', 'declined'),
(39, 'vincent', 'Vincent', 'Tibubos', 'P.', 'Floridablanca, Pampanga', '09212121211', 'greenchay@gmail.com', '1998-01-01', 'verified'),
(40, 'nicail', 'nicail', 'pepito', 'o.', '1523612 visadnjsdnasd st. brgy 5263', '09123456790', 'nicail@gmail.com', '1998-11-30', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(5, 'Binan'),
(6, 'Sta. Rosa'),
(7, 'San Pedro'),
(8, 'San Pablo'),
(9, 'Imus'),
(10, 'Dasmarinas'),
(11, 'Bacoor'),
(12, 'New City');

-- --------------------------------------------------------

--
-- Table structure for table `leadmem`
--

CREATE TABLE `leadmem` (
  `id` int(11) NOT NULL,
  `tripIdNumber` int(11) NOT NULL,
  `members` varchar(255) NOT NULL,
  `restriction` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leadmem`
--

INSERT INTO `leadmem` (`id`, `tripIdNumber`, `members`, `restriction`, `type`) VALUES
(99, 26163, 'newbiedetected', 'leader', 'tour'),
(100, 10013, 'shingshangfu', 'leader', 'tour'),
(101, 9990, 'newbiedetected', 'leader', 'tour'),
(102, 9990, 'Joven', 'member', 'tour'),
(103, 10013, 'newbiedetected', 'member', 'tour'),
(104, 22439, 'newbiedetected', 'leader', 'tour'),
(105, 22439, 'jheremie10', 'member', 'tour'),
(106, 9990, 'jheremie10', 'member', 'tour'),
(107, 14527, 'martgutz', 'leader', 'tour'),
(108, 14527, 'newbiedetected', 'member', 'tour'),
(109, 14527, 'shingshangfu', 'member', 'tour'),
(110, 22439, 'shingshangfu', 'member', 'tour'),
(111, 9990, 'vincent', 'member', 'tour'),
(112, 17375, 'jheremie10', 'leader', 'tour'),
(113, 10013, 'vincent', 'member', 'tour'),
(114, 26163, 'Joven', 'member', 'tour'),
(115, 22439, 'Joven', 'member', 'tour'),
(116, 14527, 'kyle12', 'member', 'tour'),
(117, 15265, 'newbiedetected', 'leader', 'tour'),
(118, 19737, 'newbiedetected', 'leader', 'tour'),
(119, 19737, 'vincent', 'member', 'tour'),
(120, 7132, 'vincent', 'leader', 'tour'),
(121, 7132, 'newbiedetected', 'member', 'tour'),
(122, 15265, 'vincent', 'member', 'tour'),
(123, 19737, 'kyle12', 'member', 'tour'),
(124, 19737, 'nicail', 'member', 'tour'),
(125, 19737, 'martgutz', 'member', 'tour'),
(126, 1279101804, 'nicail', 'leader', 'tour');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `region` varchar(20) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `exact_place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `region`, `province`, `city`, `exact_place`) VALUES
(7, '4-A', 'Cavite', 'Bacoor', 'Sm Bacoor'),
(10, '4-A', 'Cavite', 'Dasmarinas', 'Sm Dasmarinas'),
(11, '4-A', 'Cavite', 'Imus', 'Robinson\'s Imus'),
(12, '4-A', 'Cavite', 'Imus', 'Lotus Mall'),
(13, '1', 'Cavite', 'Binan', 'new land mark'),
(14, 'NCR', 'Cavite', 'Binan', 'Lapu Lapu Statue');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `province` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `province`) VALUES
(1, 'Cavite'),
(3, 'Batangas'),
(4, 'Laguna'),
(5, 'Rizal'),
(6, 'Ilocos Norte'),
(7, 'Ilocos Sur'),
(8, 'Manila'),
(9, 'Cagayan De Oro'),
(10, 'La Union'),
(11, 'Batanes'),
(12, 'Isabela'),
(13, 'Cagayan'),
(14, 'Nueva Vizcaya'),
(15, 'Quirino'),
(16, 'Aurora'),
(17, 'Bataan'),
(18, 'Bulacan'),
(19, 'Pampanga'),
(20, 'Nueva Ecija'),
(21, 'Marinduque'),
(22, 'Palawan'),
(23, 'Romblon'),
(24, 'New Province');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `region`) VALUES
(15, '1'),
(16, '2'),
(17, '3'),
(18, '4-A'),
(19, '4-B'),
(20, '5'),
(21, '6'),
(22, '7'),
(23, '8'),
(24, '9'),
(25, '10'),
(26, '11'),
(27, '12'),
(28, '13'),
(29, 'ARMM'),
(30, 'NCR'),
(31, 'CAR');

-- --------------------------------------------------------

--
-- Table structure for table `requestjoin`
--

CREATE TABLE `requestjoin` (
  `id` int(11) NOT NULL,
  `tripIdNumber` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestjoin`
--

INSERT INTO `requestjoin` (`id`, `tripIdNumber`, `username`) VALUES
(1, 17375, 'Joven'),
(3, 10013, 'Joven'),
(5, 14527, 'Joven'),
(15, 15265, 'kyle12'),
(16, 15265, 'martgutz');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `id` int(11) NOT NULL,
  `tourist_name` varchar(255) NOT NULL,
  `desc_name` varchar(1000) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ts_image` varchar(255) NOT NULL,
  `tsId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `tourist_name`, `desc_name`, `address`, `ts_image`, `tsId`) VALUES
(25, 'Baler', 'Baler is a town on the Philippine island of Luzon. In its center, Museo de Baler chronicles colonial history. On the coast, Cemento Beach is known for powerful surf, and Sabang Beach is lined with resorts. Nearby, Ermita Hill offers panoramic views. Inland, Baler Hanging Bridge crosses the mouth of the Tibag-Sabang River. To the east, the distinctive, angular Baler Lighthouse overlooks Dicasalarin Cove.', 'Baler, Philippines', 'Baler.jpg', 1),
(26, 'Banaue Rice Terraces', 'The Banaue Rice Terraces are terraces that were carved into the mountains of Ifugao in the Philippines by ancestors of the indigenous people. They are frequently called the \"Eighth Wonder of the World\". It is commonly thought that the terraces were built with minimal equipment, largely by hand.', 'Banaue, Philippines', 'Banaue.jpg', 2),
(27, 'Chocolate Hills', 'The Chocolate Hills are a geological formation in the Bohol province of the Philippines. There are at least 1,260 hills but there may be as many as 1,776 hills spread over an area of more than 50 square kilometres (20 sq mi).', 'Bohol, Philippines', 'bohol.jpg', 3),
(28, 'Cebu', 'Cebu is a province of the Philippines located in the Central Visayas (Region VII) region, and consisting of a main island and 167 surrounding islands and islets. Its capital is Cebu City, the oldest city and first capital of the Philippines, which is politically independent from the provincial government. ', 'Cebu, Philippines', 'Cebu.jpg', 4),
(29, 'Coron Island', 'Coron, officially the Municipality of Coron (Filipino: Bayan ng Coron) is a 1st class municipality in the province of Palawan, Philippines. According to the 2015 census, it has a population of 51,803 people.', 'Coron, Philippines', 'Coron_Island.JPG', 5),
(30, 'Dumaguete', 'Dumaguete is officially the City of Dumaguete or simply as Dumaguete City, is a 3rd class city in the province of Negros Oriental, Philippines. According to the 2015 census, it has a population of 131,377 people. It is the capital and most populous city of the province of Negros Oriental.', 'Dumaguete, Philippines', 'Dumaguete.jpg', 6),
(31, 'El Nido Palawan', 'El Nido, officially the Municipality of El Nido, is a 1st class municipality in the province of Palawan, Philippines. According to the 2015 census, it has a population of 41,606 people. It is about 420 kilometres (260 mi) south-west of Manila, and about 238 kilometres (148 mi) north-east of Puerto Princesa, Palawan\'s capital.', 'El Nido, Philippines', 'Elnido_Palawan.JPG', 7),
(32, 'Iloilo City', 'Iloilo City is on Panay Island in the Philippines. It\'s known for its Spanish colonial churches and old houses. On Jaro Plaza, Jaro Cathedral has a shrine to the local patron saint, Our Lady of the Candles. Nelly’s Garden is an iconic 1920s mansion. Museo Iloilo explores local history. The Iloilo Esplanade is a pathway along the Iloilo River. To the west, the 18th-century Miagao Church has an ornate sandstone facade.', 'Iloilo, Philippines', 'Iloilo_city.jpg', 8),
(33, 'Intramuros, Manila', 'Intramuros is the 0.67 square kilometers (0.26 sq mi) historic walled area within the modern city of Manila, the capital of the Philippines. It is administered by the Intramuros Administration, which was created through the Presidential Decree No. 1616 signed on April 10, 1979.', 'Intramuros, Philippines', 'Intramuros.jpg', 9),
(34, 'Mactan, Philippines', 'Mactan or Maktan is a densely populated island located a few kilometres (~1 mile) from Cebu Island in the Philippines. The island is part of Cebu Province and it is divided into Lapu-Lapu City and the municipality of Cordova. ', 'Mactan, Philippines', 'mactan.jpg', 10),
(35, 'Moalboal', 'Moalboal is good', 'Moalboal, Philippines', 'Moalboal.JPG', 11),
(36, 'Palawan', 'Palawan is good ', 'Palawan, Philippines', 'palawan.jpg', 12),
(37, 'Panglao Island', 'Panglao Island is good', 'Panglao, Philippines', 'Panglao_Island.JPG', 13),
(38, 'Puerto Galera', 'Puerto Galera is good', 'Puerto Galera, Philippines', 'Puerto_Galera.jpg', 14),
(39, 'Puerto Princesa', 'Puerto Princesa is good', 'Puerto Princesa, Philippines', 'Puerto_Princesa.jpg', 15),
(40, 'Samal', 'Samal is good', 'Samal, Philippines', 'Samal.jpg', 16),
(41, 'Siargao', 'Siargao is good', 'Siargao, Philippines', 'Siargao.jpg', 17),
(42, 'Subic', 'Subic is good', 'Subic, Philippines', 'Subic.jpg', 18),
(43, 'Tagaytay', 'Tagaytay is good', 'Tagaytay, Philippines', 'tagaytay.jpg', 19),
(44, 'Tagbilaran', 'Tagbilaran is good', 'Tagbilaran, Philippines', 'Tagbilaran.jpg', 20),
(45, 'Vigan', 'Vigan is good', 'Vigan, Philippines', 'Vigan.jpg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `tourcomment`
--

CREATE TABLE `tourcomment` (
  `id` int(11) NOT NULL,
  `tripIdNumber` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourcomment`
--

INSERT INTO `tourcomment` (`id`, `tripIdNumber`, `username`, `comment`) VALUES
(33, 19737, 'newbiedetected', 'sup vincent'),
(34, 19737, 'vincent', 'sup newbiedetected'),
(35, 15265, 'newbiedetected', 'may babaguhin ako okay lang?'),
(36, 19737, 'kyle12', 'hello there'),
(37, 19737, 'nicail', 'touch screen yeah');

-- --------------------------------------------------------

--
-- Table structure for table `touristspot_activities`
--

CREATE TABLE `touristspot_activities` (
  `id` int(11) NOT NULL,
  `tsId` int(11) NOT NULL,
  `activity` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `touristspot_activities`
--

INSERT INTO `touristspot_activities` (`id`, `tsId`, `activity`) VALUES
(4, 21500, 'Rules of Survival'),
(5, 21500, 'League of Legends'),
(15, 1, 'Surfing'),
(16, 1, 'Jet Ski'),
(17, 2, 'Farming'),
(18, 2, 'Climbing'),
(19, 4, 'Scuba Diving'),
(20, 4, 'Jet Ski'),
(21, 3, 'Wildlife Tour'),
(22, 3, 'Tree Planting'),
(23, 5, 'Island Expo'),
(24, 5, 'Scuba Diving'),
(25, 6, 'Boodle Fight'),
(26, 6, 'Night Market'),
(27, 7, 'Scuba Diving'),
(28, 7, 'Island Expo'),
(29, 8, 'Local Food Expo'),
(30, 8, 'City Tour'),
(31, 9, 'Historical Site'),
(32, 9, 'City Tour'),
(33, 9, '\"Kalesa\" '),
(34, 10, 'Surfing'),
(35, 10, 'Swimming'),
(37, 1, 'scuba diving'),
(38, 1, 'under water walking');

-- --------------------------------------------------------

--
-- Table structure for table `tour_activity`
--

CREATE TABLE `tour_activity` (
  `id` int(11) NOT NULL,
  `tripIdNumber` int(11) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `startActDate` date NOT NULL,
  `startActTime` time NOT NULL,
  `endActTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_activity`
--

INSERT INTO `tour_activity` (`id`, `tripIdNumber`, `activity`, `startActDate`, `startActTime`, `endActTime`) VALUES
(28, 19737, 'Jet Ski', '2021-03-04', '13:00:00', '17:00:00'),
(29, 7132, 'Scuba Diving', '2022-03-02', '02:01:00', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `verification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `user_role_id`, `verification`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'admin'),
(21, 'John Paul Montilla', 'newbiedetected', '25d55ad283aa400af464c76d713c07ad', 2, 'verified'),
(23, 'Shing Shang Fu', 'shingshangfu', '25d55ad283aa400af464c76d713c07ad', 2, 'verified'),
(26, 'Jheremie Macam', 'jheremie10', '25d55ad283aa400af464c76d713c07ad', 2, 'verified'),
(27, 'Joven Montanez', 'Joven', '25d55ad283aa400af464c76d713c07ad', 2, 'declined'),
(28, 'Nicail Pepito', 'nicail', '25d55ad283aa400af464c76d713c07ad', 2, 'verified'),
(29, 'Vincent Tibubos', 'vincent', '25d55ad283aa400af464c76d713c07ad', 2, 'verified'),
(30, 'Raymart Gutierrez', 'martgutz', '25d55ad283aa400af464c76d713c07ad', 2, 'verified'),
(31, 'jerald kyle bodiao', 'kyle12', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'verified'),
(32, 'Crissie ', 'yoqweqw', '316f0e429e6ab0de00b6aded4b959d61', 2, 'not verified');

-- --------------------------------------------------------

--
-- Table structure for table `usertrips`
--

CREATE TABLE `usertrips` (
  `id` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `tourname` varchar(255) NOT NULL,
  `tourdate` date NOT NULL,
  `tourduration` int(11) NOT NULL,
  `leader` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `restriction` text NOT NULL,
  `tripIdNumber` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `tourparticipant` varchar(255) NOT NULL,
  `tourfee` int(11) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `tourStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertrips`
--

INSERT INTO `usertrips` (`id`, `destination`, `origin`, `tourname`, `tourdate`, `tourduration`, `leader`, `user`, `restriction`, `tripIdNumber`, `type`, `tourparticipant`, `tourfee`, `payment`, `tourStatus`) VALUES
(66, 'Baler', 'Sm Bacoor', 'wewewewewew', '2021-03-03', 3, 'newbiedetected', 'newbiedetected', 'leader', 19737, 'tour', '3', 5, 'Online Bank Transfer', 'approved'),
(67, 'Baler', 'Sm Bacoor', 'wewewwewe', '2027-02-03', 9, 'newbiedetected', 'newbiedetected', 'leader', 15265, 'tour', '9', 9, 'Online Bank Transfer', 'approved'),
(69, 'Coron Island', 'Robinson\'s Imus', 'Vincent Tour', '2022-02-02', 4, 'vincent', 'vincent', 'leader', 7132, 'tour', '3', 3, 'Credit Card', 'approved'),
(70, 'Intramuros, Manila', 'Robinson\'s Imus', 'tour to Manila', '2018-05-04', 1, 'nicail', 'nicail', 'leader', 1279101804, 'tour', '50', 650, 'Bank Transfer', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE `user_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `editors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`id`, `title`, `body`, `post_name`, `post_image`, `editors`) VALUES
(69, 'NEW POST BY ME', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'newbiedetected', 'w2.jpg', 1),
(70, 'Title', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanie', 'newbiedetected', 'Philippines-Wallpaper-20-610x381.jpg', 2),
(71, 'Jheremie', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'jheremie10', 'Philippines-Wallpaper-22-610x381.jpg', 1),
(72, 'Jheremie10', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', 'jheremie10', 'Philippines-Wallpaper-23-610x343.jpg', 2),
(73, 'Joven Post', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"', 'Joven', 'Philippines-Wallpaper-13-610x343.jpg', 1),
(74, 'Joven Post 2', '\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"', 'Joven', 'Philippines-Wallpaper-15-610x458.jpg', 2),
(75, 'Nicail Post', '\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', 'nicail', 'Philippines-Wallpaper-16-610x458.jpg', 2),
(76, 'Nicail Post 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'nicail', 'Philippines-Wallpaper-17-610x381.jpg', 1),
(77, 'Vincent Post', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'vincent', 'Philippines-Wallpaper-18-610x381.jpg', 1),
(78, 'Vincent Post 2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanie', 'vincent', 'Philippines-Wallpaper-19-610x343.jpg', 2),
(79, 'Raymart Post', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'martgutz', 'Philippines-Wallpaper-20-610x381.jpg', 1),
(80, 'Raymart Post 2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanie', 'martgutz', '4.jpg', 2),
(83, 'gabi na sa tup', 'wdhajnjdsnjqas', 'newbiedetected', 'me.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountverifier`
--
ALTER TABLE `accountverifier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leadmem`
--
ALTER TABLE `leadmem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestjoin`
--
ALTER TABLE `requestjoin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourcomment`
--
ALTER TABLE `tourcomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `touristspot_activities`
--
ALTER TABLE `touristspot_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_activity`
--
ALTER TABLE `tour_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertrips`
--
ALTER TABLE `usertrips`
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
-- AUTO_INCREMENT for table `accountverifier`
--
ALTER TABLE `accountverifier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `leadmem`
--
ALTER TABLE `leadmem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `requestjoin`
--
ALTER TABLE `requestjoin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tourcomment`
--
ALTER TABLE `tourcomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `touristspot_activities`
--
ALTER TABLE `touristspot_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tour_activity`
--
ALTER TABLE `tour_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `usertrips`
--
ALTER TABLE `usertrips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user_posts`
--
ALTER TABLE `user_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
