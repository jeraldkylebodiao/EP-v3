-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 02:19 PM
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
(11, 'Bacoor');

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
(13, '1', 'Cavite', 'Binan', 'new land mark');

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
(23, 'Romblon');

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
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `id` int(11) NOT NULL,
  `tourist_name` varchar(255) NOT NULL,
  `desc_name` varchar(1000) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ts_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `tourist_name`, `desc_name`, `address`, `ts_image`, `price`) VALUES
(25, 'Baler', 'Baler is Good', 'Baler, Philippines', 'Baler.jpg', 0),
(26, 'Banaue', 'Banaue is good', 'Banaue, Philippines', 'Banaue.jpg', 26000),
(27, 'Bohol', 'Bohol is good', 'Bohol, Philippines', 'bohol.jpg', 0),
(28, 'Cebu', 'Cebu is good', 'Cebu, Philippines', 'Cebu.jpg', 0),
(29, 'Coron Island', 'Coron Island is good', 'Coron, Philippines', 'Coron_Island.JPG', 0),
(30, 'Dumaguete', 'Dumaguete is good', 'Dumaguete, Philippines', 'Dumaguete.jpg', 0),
(31, 'Elnido Palawan', 'Elnido is good ', 'Elnido, Philippines', 'Elnido_Palawan.JPG', 0),
(32, 'Iloilo City', 'Iloilo is good', 'Iloilo, Philippines', 'Iloilo_city.jpg', 0),
(33, 'Intramuros', 'Intramuros is good', 'Intramuros, Philippines', 'Intramuros.jpg', 0),
(34, 'Mactan', 'Mactan is good', 'Mactan, Philippines', 'mactan.jpg', 0),
(35, 'Moalboal', 'Moalboal is good', 'Moalboal, Philippines', 'Moalboal.JPG', 0),
(36, 'Palawan', 'Palawan is good ', 'Palawan, Philippines', 'palawan.jpg', 0),
(37, 'Panglao Island', 'Panglao Island is good', 'Panglao, Philippines', 'Panglao_Island.JPG', 0),
(38, 'Puerto Galera', 'Puerto Galera is good', 'Puerto Galera, Philippines', 'Puerto_Galera.jpg', 0),
(39, 'Puerto Princesa', 'Puerto Princesa is good', 'Puerto Princesa, Philippines', 'Puerto_Princesa.jpg', 0),
(40, 'Samal', 'Samal is good', 'Samal, Philippines', 'Samal.jpg', 0),
(41, 'Siargao', 'Siargao is good', 'Siargao, Philippines', 'Siargao.jpg', 0),
(42, 'Subic', 'Subic is good', 'Subic, Philippines', 'Subic.jpg', 0),
(43, 'Tagaytay', 'Tagaytay is good', 'Tagaytay, Philippines', 'tagaytay.jpg', 0),
(44, 'Tagbilaran', 'Tagbilaran is good', 'Tagbilaran, Philippines', 'Tagbilaran.jpg', 0),
(45, 'Vigan', 'Vigan is good', 'Vigan, Philippines', 'Vigan.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `user_role_id`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(21, 'John Paul Montilla', 'newbiedetected', '25d55ad283aa400af464c76d713c07ad', 2),
(23, 'John Paul Montilla', 'shingshangfu', '25d55ad283aa400af464c76d713c07ad', 2),
(26, 'Jheremie Macam', 'jheremie10', '25d55ad283aa400af464c76d713c07ad', 2),
(27, 'Joven Montanez', 'Joven', '25d55ad283aa400af464c76d713c07ad', 2),
(28, 'Nicail Pepito', 'nicail', '25d55ad283aa400af464c76d713c07ad', 2),
(29, 'Vincent Tibubos', 'vincent', '25d55ad283aa400af464c76d713c07ad', 2),
(30, 'Raymart Gutierrez', 'martgutz', '25d55ad283aa400af464c76d713c07ad', 2);

-- --------------------------------------------------------

--
-- Table structure for table `usertrips`
--

CREATE TABLE `usertrips` (
  `id` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertrips`
--

INSERT INTO `usertrips` (`id`, `destination`, `origin`, `name`, `date`, `user`) VALUES
(24, 'Baler', 'Robinson\'s Imus', 'Trial Trip', '2019-02-02', 'newbiedetected'),
(25, 'Puerto Princesa', 'Robinson\'s Imus', 'Newbiedetected Trip', '2022-02-03', 'newbiedetected'),
(26, 'Puerto Princesa', 'Sm Dasmarinas', 'Trip mo to', '2019-01-01', 'Joven');

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
(80, 'Raymart Post 2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanie', 'martgutz', '4.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
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
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `usertrips`
--
ALTER TABLE `usertrips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user_posts`
--
ALTER TABLE `user_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
