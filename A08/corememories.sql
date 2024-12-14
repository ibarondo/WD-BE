-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 03:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'family/fam1.png', 'My sister\'s SHS Graduation.', NULL),
(2, 1, 'family/fam2.png', 'My Grandma\'s 60th Birthday', NULL),
(3, 1, 'family/fam3.png', 'Year 2013???', NULL),
(4, 2, 'friends/friend1.png', 'My first circle of friends in college', NULL),
(5, 2, 'friends/friend2.png', 'My PUP friends!', NULL),
(6, 2, 'friends/friend3.png', 'My friends in Bicol.', NULL),
(7, 3, 'edu/edu1.png', 'SHS Graduation', NULL),
(8, 3, 'edu/edu2.png', 'That one activity in SAD', NULL),
(9, 3, 'edu/edu3.png', 'NSTP days hahaha', NULL),
(10, 4, 'love/love1.png', 'wala lang, miss ko na siya. two years na kaming di nagkikita hays:(', NULL),
(11, 4, 'love/love2.png', 'our first pic together hahaha', NULL),
(12, 4, 'love/love3.png', 'unending videocalls with my favorite pet peeve hahaha', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(1500) DEFAULT NULL,
  `longDescription` varchar(2500) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'The Hearth of Togetherness', 'It’s where we grow, love, and find strength in being together.', 'Here, trust, understanding, and love flourish. It’s a place where individuality is embraced, and differences are resolved with respect and care. The Hearth of Togetherness is a reminder that family is our anchor, a source of unwavering support and joy. It’s where we grow, share, and create memories that last a lifetime, a glowing beacon of warmth and belonging in life’s ever-changing journey.', '#9370DB', 'island/family.png', NULL),
(2, 'Constellation of Companions', 'It’s a space of trust, support, and shared dreams—a reminder that friends are the guiding lights in life’s journey.', 'This island reminds us that true friendship is a guiding force—a constellation of connections that grows brighter with time. Here, bonds are unbreakable, shining through life’s storms and lighting the way toward new horizons.', '#87CEEB', 'island/friends.png', NULL),
(3, 'Tower of Discovery and Goals', 'It\'s a place where goals are set, challenges are met, and every achievement brings you closer to the next step.', 'This island is a hub of exploration, creativity, and determination. It encourages us to reach for our dreams, break barriers, and discover the boundless potential that lies within. The Tower of Discovery and Goals reminds us that the journey of learning is endless, and every step forward takes us closer to the heights we aspire to achieve.', '#2E8B57', 'island/edu.png', NULL),
(4, 'Heart\'s Sanctuary ', 'This is a place of quiet understanding, shared smiles, and unconditional love. ', 'Heart\'s Sanctuary is an island where love in all its forms is celebrated. It’s a serene retreat where hearts can connect, recharge, and grow. Every path on this island leads to moments of peace, joy, and understanding, whether in a romantic relationship or a deep friendship.', '#FF6F61', 'island/love.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
