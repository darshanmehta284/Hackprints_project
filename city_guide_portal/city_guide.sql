-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 11:14 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `city guide`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `contact`, `password`) VALUES
(5, 'rashmi', 'rashmi@gmail.com', 9979840203, '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(4, 'temple'),
(5, 'beach'),
(7, 'historical place'),
(10, 'restaurant'),
(13, 'garden'),
(14, 'hotel');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `state_id`) VALUES
(27, 'ahmedabad', 6),
(28, 'rajkot', 6),
(29, 'surat', 6),
(30, 'mumbai', 9),
(31, 'goa', 9);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `comment_date` date NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment`, `comment_date`, `place_id`, `user_id`) VALUES
(5, 'test', '2022-02-02', 32, 5);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `ratting` int(11) NOT NULL,
  `message` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `ratting`, `message`, `user_id`) VALUES
(2, 5, 'testing', 5),
(3, 4, 'testing', 7),
(4, 5, 'test', 5);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `place_id`, `image`) VALUES
(2, 32, 'sidi saiyyed mosque.jpg'),
(3, 32, 'sidi saiyyed.jpg'),
(4, 32, 'S3.jpg'),
(5, 32, 'S4.jpg'),
(6, 32, 'S5.jpg'),
(7, 32, 'S6.jpg'),
(8, 32, 'S9.jpg'),
(9, 32, 'S7.jpg'),
(10, 34, 'A2.jpg'),
(11, 34, 'A3.jpg'),
(12, 34, 'A4.jpg'),
(13, 34, 'A5.jpg'),
(14, 34, 'A6.jpg'),
(15, 34, 'A7.jpg'),
(16, 34, 'A8.jpg'),
(17, 34, 'akshardham.jpg'),
(18, 35, 'iskon.jpg'),
(19, 35, 'I2.jpg'),
(20, 35, 'I3.jpg'),
(21, 35, 'I4.jpg'),
(22, 35, 'I5.jpg'),
(23, 35, 'I6.jpg'),
(24, 36, 'c1.jpg'),
(25, 36, 'c2.jpg'),
(26, 36, 'c3.jpg'),
(27, 36, 'c4.jpg'),
(28, 36, 'c5.jpg'),
(29, 36, 'colva beach 2.jpg'),
(30, 36, 'colva beach.jpg'),
(31, 37, 'm1.jpg'),
(32, 37, 'm2.jpg'),
(33, 37, 'm3.jpg'),
(34, 37, 'm4.jpg'),
(35, 37, 'm5.jpg'),
(36, 38, 'Q1.jpg'),
(37, 38, 'Q2.jpg'),
(38, 38, 'Q3.jpg'),
(39, 38, 'Q4.jpg'),
(40, 38, 'Q5.jpg'),
(41, 38, 'Q7.jpg'),
(42, 39, 'W1.jpg'),
(43, 39, 'W2.jpg'),
(44, 39, 'W3.jpg'),
(45, 39, 'W4.jpg'),
(46, 39, 'W5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `fname`, `lname`, `phone`, `email`, `subject`, `message`) VALUES
(3, 'dhruv', 'patel', 9979840201, 'dhruv@gmail.com', 'abc', 'hduw dubfc fcu'),
(6, 'jinal', 'shah', 4545452100, 'jinal@gmail.com', 'xyz', 'tdwd dvgwd'),
(7, 'Dharmendra', 'aa', 234, 'dharmendra@gmail.com', 'testing', 'this is for testing purpose');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `ulike` int(11) NOT NULL,
  `udislike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `user_id`, `place_id`, `ulike`, `udislike`) VALUES
(4, 5, 32, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `place` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `place`, `description`, `category`, `city`, `state`, `image`) VALUES
(32, 'sidi bashir mosque', 'The Sidi Saiyyed Mosque, popularly known as Sidi Saiyyid ni Jali locally, built in 1572-73 AD, is one of the most famous mosques of Ahmedabad, a city in the state of Gujarat, India.\r\nThe mosque still functions as a place of prayer. Brief History: Popularly known as Sidi Sayed ni Jali the mosque was built in the period 1572–73 AD by Sidi Sayed. It was the same year that the Mughals conquered Gujarat. Sayed was an Abyssinian saint of African descent who served in Ahmed Shah\'s army.', 7, 27, 6, 'S8.jpg'),
(34, 'akshardham', 'Swaminarayan Akshardham in Gandhinagar, Gujarat, India is a large Hindu temple complex inspired by Yogiji Maharaj the fourth spiritual successor of Swaminarayan, and created by Pramukh Swami Maharaj, the fifth spiritual successor of Swaminarayan according to the BAPS denomination of Swaminarayan Hinduism.', 4, 27, 6, 'akshardham.jpg'),
(35, 'iskon', 'The ISKCON temple in Delhi is known for its Bhagavad Gita Animatronics, Mahabharata Light and Sound Show, and a Ramayana Art Gallery. The ISKCON temple in Delhi also houses the Astounding Bhagavad Gita, which is arguably the largest religious book ever printed.', 4, 27, 6, 'iskon.jpg'),
(36, 'colva beach', 'Colva is a beautiful beach in the village of Salcete in South Goa. A very popular tourist destination, it is known for its beaches, food, pubs and bars. It is also known for its Portugal significance with a number of buildings which speak of history, elegance and architecture.\r\n', 5, 31, 9, 'colva beach.jpg'),
(37, 'modhera sun temple', 'The Modhera Sun Temple was made by King Bhima I of the Chalukya dynasty in the early 11th century. It is a temple made to honour the Sun God in Modhera village of Mehsana district on the bank of River Pushpavati. ... Modhera finds a mention in the ancient scriptures like Skanda Purana and Brahma Purana.', 4, 27, 6, 'm1.jpg'),
(38, 'sabarmati ashram', 'Sabarmati Ashram is located in the Sabarmati suburb of Ahmedabad, Gujarat, adjoining the Ashram Road, on the banks of the River Sabarmati, 4 miles from the town hall. This was one of the many residences of Mahatma Gandhi who lived at Sabarmati and Sevagram when he was not travelling across India or in prison.', 7, 27, 6, 'Q1.jpg'),
(39, 'adalaj stepwell', 'Adalaj Stepwell or Rudabai Stepwell is a stepwell located in the village of Adalaj, close to Gandhinagar city in Gandhinagar district in the Indian state of Gujarat, and considered a fine example of Indian architecture work. It was built in 1498 in the memory of Rana Veer Singh, by his wife Queen Rudadevi.', 7, 27, 6, 'W1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(6, 'Gujarat'),
(7, 'MP'),
(9, 'MH'),
(10, 'UP');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `contact`, `address`, `password`) VALUES
(4, 'krina', 'patel', 'krina@gmail.com', 9979840203, 'ahmedabad', '123'),
(5, 'dhruv', 'patel', 'dhruv@gmail.com', 9979840201, 'surat                                             ', '1234'),
(6, 'neha', 'shah', 'n@gmail.com', 9232323316, 'ahmedabad', '1234'),
(7, 'Dharmendra', 'abc', 'dharmendra@gmail.com', 2225515155, 'asdf', '456');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `place_id`, `video`) VALUES
(7, 34, 'video1.mp4'),
(9, 34, 'video2.mp4'),
(10, 34, 'video1.mp4'),
(12, 32, 'video1.mp4'),
(13, 32, 'video2.mp4'),
(14, 32, 'video2.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `place_id` (`place_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_id` (`place_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `place_id` (`place_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category`),
  ADD KEY `city_id` (`city`),
  ADD KEY `state_id` (`state`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_id` (`place_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`place_id`) REFERENCES `place` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `place_ibfk_2` FOREIGN KEY (`city`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `place_ibfk_3` FOREIGN KEY (`state`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `search`
--
ALTER TABLE `search`
  ADD CONSTRAINT `search_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `search_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `search_ibfk_3` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
