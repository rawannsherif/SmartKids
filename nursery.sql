-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 10:27 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nursery`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id` int(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `DOB` text NOT NULL COMMENT 'akabr mn 5 snnen',
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `name`, `address`, `DOB`, `image`) VALUES
(93, 'btata', 'qweqwe', '01/01/2015', ''),
(93, 'sasa', 'yasmie 8 tagmo3, villa 250 first floor', '08/10/2014', 'deeb.jpeg'),
(93, 'sss', 'tagmo3 al 5ames', '08/10/2014', 'baby-yoda');

-- --------------------------------------------------------

--
-- Table structure for table `dmessage`
--

CREATE TABLE `dmessage` (
  `sid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dmessage`
--

INSERT INTO `dmessage` (`sid`, `rid`, `message`) VALUES
(97, 1, 'hello'),
(98, 1, 'jbakjcbkjabc'),
(1, 97, 'hi'),
(1, 98, 'jabakjbfjkbfkbfkjbjkbjkbkjbkjbkjbkjbjkjbkjbkb'),
(93, 1, 'good morning!\r\n'),
(97, 1, 'eh y3am\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `message`, `Time`) VALUES
(0, 93, 'hi\n', '2020-01-04 19:19:53'),
(0, 97, 'hello\n', '2020-01-04 19:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question`, `answer`) VALUES
('What experience/qualifications do your staff have?', 'The manager holds a full and relevant level 3 qualification and at least half all other staff hold a full and relevant level 2.\r\n\r\nAll new staff have a 12 hour pediatric first aid certificate too. In addition they undertake regular CPD which may include workshops, online training, reading childcare magazines.'),
('How do you ensure safe recruitment of staff?', 'Our nursery has effective systems in place to check the suitability of those who have regular contact with children. This includes a disclosing and barring service check, suitability of qualifications and opportunities to disclose any convictions, cautions or court orders that may affect their suitability.'),
('What are the ratios of staff to children?', 'Our ratio is 1:13 where a person with Qualified Teacher status, Early Years Professional status or Early Years Teacher status is working directly with children or 1:8 where they are not.'),
('How do you ensure the safety of the children in your care?', 'We carry out risk assessments both of the home and outdoor space and whenever they take children out. They are also required to record any accidents or incidents and any medication that is given.'),
('What activities do you provide?', 'We are providing a range of activities both within the setting and out in the community. These should meet the needs of children of all ages. Make sure you share your children’s particular interests and find out how they could be catered for.'),
('How do you manage children\'s behavior?', 'We have a behavior policy. They will be using positive methods such as distraction and must not threaten or give corporal punishment');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `Phonenumber` varchar(11) NOT NULL,
  `intreviewdate` datetime DEFAULT NULL,
  `Address` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL DEFAULT 'Parent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `mail`, `Phonenumber`, `intreviewdate`, `Address`, `Type`) VALUES
(1, 'Seifo el gamd', '123', 'Seifhr@yahoo.com', '01288776011', '0000-00-00 00:00:00', 'tamgo3 al 5ames yasmine 7\r\nvilla 250 first floor', 'Admin'),
(10, 'mahmoud', '123', 'mahmoudtareak@gmail.com', '01115127717', NULL, 'madinet nasr ', 'Manger'),
(93, 'seif eldin hanyyy', '1234', 'seif.eldin999@gmail.com', '5806764160', '2019-12-20 14:01:00', 'yes', 'Parent'),
(97, 'sasa', '123', 'omar123@gmail.com', '01115127717', NULL, 'tamgo3 al 5ames yasmine 7, villa 250 first floor', 'Parent'),
(98, 'amira', '123', 'amira@hotmail.com', '01115127717', NULL, 'tamgo3 al 5ames yasmine 7, villa 250 first floor', 'Parent'),
(99, 'seifouza', '123', 'Seifh123r@yahoo.com', '01288776011', NULL, 'tagamo3', 'Parent'),
(100, 'seif hany', '123', 'samiha@hotmail.com', '01115127717', NULL, 'tagmo3 al 5ames', 'Parent'),
(101, 'hooda hooda', '123', 'hooda123@hotmail.com', '01115127717', NULL, 'tagmo3 al 5ames', 'Parent'),
(102, 'deeb', '123', 'deeb@hotmail.com', '01115127717', NULL, 'tagmo3 al 5ames', 'Parent'),
(103, 'deeb', '123', 'deeb123@hotmail.com', '01096522036', NULL, 'tagmo3 al 5ames', 'Parent'),
(104, 'dee', '123', 'deeb1234@hotmail.com', '01115127717', NULL, 'tagmo3 al 5ames', 'Parent'),
(105, 'deebz', '12', 'seifhanyyy123@hotmail.com', '01115127717', NULL, 'tagmo3 al 5ames', 'Parent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`,`name`);

--
-- Indexes for table `dmessage`
--
ALTER TABLE `dmessage`
  ADD KEY `Sender` (`sid`),
  ADD KEY `receiver` (`rid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child`
--
ALTER TABLE `child`
  ADD CONSTRAINT `Id` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dmessage`
--
ALTER TABLE `dmessage`
  ADD CONSTRAINT `rid` FOREIGN KEY (`rid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sid` FOREIGN KEY (`sid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
