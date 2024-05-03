-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 07:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_post`
--

CREATE TABLE `add_post` (
  `post_id` int(255) NOT NULL,
  `post_title` varchar(150) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_img` varchar(50) NOT NULL,
  `post_cat` int(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_comment_count` int(255) NOT NULL,
  `post_summary` varchar(255) NOT NULL,
  `post_tag` varchar(255) NOT NULL,
  `post_status` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_post`
--

INSERT INTO `add_post` (`post_id`, `post_title`, `post_content`, `post_img`, `post_cat`, `post_author`, `post_date`, `post_comment_count`, `post_summary`, `post_tag`, `post_status`) VALUES
(15, 'Today HSC Result', ' Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien  Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien  Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien  Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien  Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien  Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien ', '05.jpg', 14, 'Admin', '2022-02-19', 0, ' Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien  Sed facilisis enim suscipit purus molestie, i', 'programming, Travalling', '1'),
(16, 'Lock down news', 'adipiscing elit. Cras iaculis, diam eget ultricies condimentum, nulla odio finibus urna, ut sollicitudin dolor leo non magna. In convallis enim pellentesque, tempus nunc eget, consectetur diam. Quisque sit amet metus eget justo accumsan tristique. Aenean eu ligula sit amet arcu scelerisque eleifend. Donec cursus urna eu lorem pellentesque, sit amet facilisis purus pretium. Cras non varius lectus. Aliquam vulputate a urna id viverra. Proin non blandit eros. Proin id tortor mattis, eleifend augue in, consectetur risus. Pellentesque a dolor vel nisi tempor egestas quis sit amet quam. Morbi sagittis metus et justo sodales, nec varius nisi molestie. Phasellus sed elit elementum, tempor lacus quis, finibus ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut id tristique metus. Aliquam hendrerit leo vel risus gravida ornare.', '07.jpg', 18, 'Admin', '2022-02-20', 0, '. Aenean eu ligula sit amet arcu scelerisque eleifend. Donec cursus urna eu lorem pellentesque, sit amet facilisis purus pretium. Cras non varius lectus. Aliquam vulputate a urna id viverra. Proin non blandit eros. Proin id tortor mattis, eleifend augue i', 'programming, Travalling', '1'),
(17, 'Today semester will be published', 'Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien', '03.jpg', 16, 'Admin', '2022-02-23', 0, 'iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenati', 'programming', '1'),
(18, 'Sed facilisis enim suscipit', 'Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien', '001.jpg', 14, 'Admin', '2022-02-23', 0, 'e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla ', 'education, codding', '1'),
(19, ' Nulla sollicitudin sapien Sed', 'e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien<br><br>e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien<br><br>', '06.jpg', 16, 'Admin', '2022-02-23', 0, 'e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla ', 'education, codding', '1'),
(20, ' Praesent tempor ante tincidunt', 'e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien<br><br>e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien<br><br>e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien<br><br>', '04.jpg', 16, 'Admin', '2022-02-23', 0, 'e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla ', 'education', '1'),
(21, 'Fusce id lectus sed massa venenatis pretium', 'e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien<br><br>e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien<br><br>e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien<br><br>', '02.jpg', 16, 'Admin', '2022-02-23', 0, 'e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla ', 'programming, Travalling', '1'),
(22, 'Nulla sollicitudin sapien Sed facilisis enim suscipit ', 'e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien<br><br>e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien<br><br>e id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien Sed facilisis enim suscipit purus molestie, id elementum nunc scelerisque. Praesent tempor ante tincidunt, mattis nisi non, iaculis dui. Fusce id lectus sed massa venenatis pretium. Nulla sollicitudin sapien<br><br>', '08.jpg', 17, 'Admin', '2022-02-23', 0, 'Nulla sollicitudin sapien Sed facilisis enim suscipit Nulla sollicitudin sapien Sed facilisis enim suscipit Nulla sollicitudin sapien Sed facilisis enim suscipit Nulla sollicitudin sapien Sed facilisis enim suscipit Nulla sollicitudin sapien Sed facilisis', 'Summer vacation.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `ID` int(255) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'MD RAHATUL RABBI', 'rahatul.ice.09.pust@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'LEARN WITH FAIR', 'learnwithfair@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `cat_table`
--

CREATE TABLE `cat_table` (
  `ID` int(255) NOT NULL,
  `Cat_Title` text NOT NULL,
  `Cat_Des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_table`
--

INSERT INTO `cat_table` (`ID`, `Cat_Title`, `Cat_Des`) VALUES
(9, 'Programing', 'Here we are going to post about Programing'),
(14, 'Nature', 'Here we are going to post about nature.'),
(16, 'Movie', 'Here we are going to post about Movie.'),
(17, 'Fish', 'Here we are going to post about Fish.'),
(18, 'Product', 'asfgasdgadgdfag');

-- --------------------------------------------------------

--
-- Table structure for table `comment_info`
--

CREATE TABLE `comment_info` (
  `comment_id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `comment_name` text NOT NULL,
  `comment_email` varchar(50) NOT NULL,
  `comment_subject` varchar(200) NOT NULL,
  `comment_message` varchar(255) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_status` tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_info`
--

INSERT INTO `comment_info` (`comment_id`, `post_id`, `comment_name`, `comment_email`, `comment_subject`, `comment_message`, `comment_date`, `comment_status`) VALUES
(4, 15, 'Md Mehedi Hasan', 'mehedihasa@gmail.com', 'First Comment', 'Suspendisse ultrices justo vitae consequat malesuada. Ut ultricies, nisi a gravida hendrerit, tellus arcu imperdiet justo, ut vehicula eros nisl id nibh. Suspendisse commodo sagittis volutpat. Mauris eleifend nisi nonSuspendisse ultrices justo vitae conse', '2022-02-19', 1),
(5, 16, 'Md Mehedi Hasan', 'mehedihasa@gmail.com', 'Third Comment', 'adipiscing elit. Cras iaculis, diam eget ultricies condimentum, nulla odio finibus urna, ut sollicitudin dolor leo non magna. In convallis enim pellentesque, tempus nunc eget, consectetur diam. Quisque sit amet metus eget justo accumsan tristique. Aenean ', '2022-02-20', 1),
(6, 22, 'Md Mehedi Hasan', 'mehedihasa@gmail.com', 'Pellentesque condimentum tempus sapien', 'viverra risus sit amet, egestas dolor. Donec tellus massa, auctor accumsan consequat et, pulvinar nec ante. Proin vel mollis ex. Quisque nunc erat, gravida vitae odio non, finibus vehicula justo. Suspendisse ultrices, nisi vitae mattis sodales, libero mau', '2022-02-26', 1),
(7, 22, 'Md Shahanur Rahman', 'suhan@gmail.com', 'Suspendisse pharetra tristique lacus ut volutpat', 'Vivamus placerat eu velit eget aliquet. Curabitur dapibus id diam quis congue. Sed viverra, augue sed ullamcorper convallis, libero dolor vehicula arcu, ut auctor nisi mi ut mauris. Curabitur lacinia, sem sit amet auctor vehicula, ex magna egestas ante, a', '2022-02-26', 1),
(8, 22, 'Abdul Matin', 'matin@gmail.com', 'Nulla facilisi. Cras a libero imperdiet', 's, libero dolor vehicula arcu, ut auctor nisi mi ut mauris. Curabitur lacinia, sem sit amet auctor vehicula, ex magna egestas ante, ac cursus mauris felis quis risus. Phasellus interdum nisl et velit lacinia, vel tempor tortor mattis. Praesent massa ante,', '2022-02-26', 1),
(9, 22, 'Md Nayeem Hossain', 'nayeem@gmail.com', 'Nacinia ligula auctor. Praesent id orci dolor', 'Vestibulum orci est, volutpat vitae dignissim eget, mattis in ligula. Nunc at orci velit. Nulla facilisi. Cras a libero imperdiet, vestibulum dolor a, condimentum velit. Donec lobortis dictum nunc, non aliquet erat facilisis a. Duis ultricies euismod veli', '2022-02-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `header_menu`
--

CREATE TABLE `header_menu` (
  `menu_id` int(255) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_menu`
--

INSERT INTO `header_menu` (`menu_id`, `menu_title`, `menu_link`) VALUES
(1, 'Home', 'index.php'),
(3, 'Contact Us', 'contact_us.php'),
(4, 'About Me', 'about_me.php'),
(5, 'Blog', 'blog_page.php'),
(6, 'Tutorial', 'https://www.youtube.com/channel/UCEU_TRk_iRoHajCocyXSK1Q');

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--

CREATE TABLE `logininfo` (
  `ID` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logininfo`
--

INSERT INTO `logininfo` (`ID`, `Email`, `Password`, `Status`) VALUES
(1, 'rahatul.ice.09.pust@gmail.com', '202cb962ac59075b964b07152d234b70', 'login'),
(2, 'learnwithfair@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'logout');

-- --------------------------------------------------------

--
-- Table structure for table `message_info`
--

CREATE TABLE `message_info` (
  `message_id` int(255) NOT NULL,
  `message_name` text NOT NULL,
  `message_email` varchar(50) NOT NULL,
  `message_subject` varchar(100) NOT NULL,
  `message_content` varchar(255) NOT NULL,
  `message_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_info`
--

INSERT INTO `message_info` (`message_id`, `message_name`, `message_email`, `message_subject`, `message_content`, `message_date`) VALUES
(1, 'MD RAHATUL RABBI', 'rahatul.ice.09.pust@gmail.com', 'to solve the problem in our project', 'andit eros. Proin id tortor mattis, eleifend augue in, consectetur risus. Pellentesque a dolor vel nisi tempor egestas quis sit amet quam. Morbi sagittis metus et justo sodales, nec varius nisi molestie. Phasellus sed elit elementum, tempor lacus quis, fi', '2022-02-20'),
(2, 'MD MEHEDI HASAN', 'mehedi@gmail.com', 'to send your website information.', 'andit eros. Proin id tortor mattis, eleifend augue in, consectetur risus. Pellentesque a dolor vel nisi tempor egestas quis sit amet quam. Morbi sagittis metus et justo sodales, nec varius nisi molestie. Phasellus sed elit elementum, tempor lacus quis, fi', '2022-02-20');

-- --------------------------------------------------------

--
-- Stand-in structure for view `post_with_cat`
-- (See below for the actual view)
--
CREATE TABLE `post_with_cat` (
`post_id` int(255)
,`post_title` varchar(150)
,`post_content` longtext
,`post_img` varchar(50)
,`post_cat` int(255)
,`post_author` varchar(255)
,`post_date` date
,`post_comment_count` int(255)
,`post_summary` varchar(255)
,`post_tag` varchar(255)
,`post_status` tinytext
,`ID` int(255)
,`Cat_Title` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `post_with_cat_sample`
-- (See below for the actual view)
--
CREATE TABLE `post_with_cat_sample` (
`post_id` int(255)
,`post_title` varchar(150)
,`post_content` longtext
,`post_img` varchar(50)
,`post_cat` int(255)
,`post_author` varchar(255)
,`post_date` date
,`post_comment_count` int(255)
,`post_summary` varchar(255)
,`post_tag` varchar(255)
,`post_status` tinytext
,`ID` int(255)
,`Cat_Title` text
);

-- --------------------------------------------------------

--
-- Table structure for table `reply_comment`
--

CREATE TABLE `reply_comment` (
  `reply_id` int(255) NOT NULL,
  `comment_reply_id` int(255) NOT NULL,
  `post_reply_id` int(255) NOT NULL,
  `post_reply_title` varchar(200) NOT NULL,
  `comment_reply_date` date NOT NULL,
  `comment_reply_mgs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply_comment`
--

INSERT INTO `reply_comment` (`reply_id`, `comment_reply_id`, `post_reply_id`, `post_reply_title`, `comment_reply_date`, `comment_reply_mgs`) VALUES
(4, 4, 15, 'Today HSC Result', '2022-02-19', 'gravida hendrerit, tellus arcu imperdiet justo, ut vehicula eros nisl id nibh. Suspendisse commodo sagittis volutpat. Mauris eleifend nisi nongravida hendrerit, tellus arcu imperdiet justo, ut vehicula eros nisl id nibh. Suspendisse commodo sagittis volut'),
(5, 5, 16, 'Lock down news', '2022-02-20', '. Aliquam vulputate a urna id viverra. Proin non blandit eros. Proin id tortor mattis, eleifend augue in, consectetur risus. Pellentesque a dolor vel nisi tempor egestas quis sit amet quam. Morbi sagittis metus et justo sodales, nec varius nisi molestie. '),
(6, 6, 22, 'Nulla sollicitudin sapien Sed facilisis enim suscipit ', '2022-02-26', 'onvallis, libero dolor vehicula arcu, ut auctor nisi mi ut mauris. Curabitur lacinia, sem sit amet auctor vehicula, ex magna egestas ante, ac cursus mauris felis quis risus. Phasellus interdum nisl et velit lacinia, vel tempor tortor mattis. Praesent mass'),
(7, 7, 22, 'Nulla sollicitudin sapien Sed facilisis enim suscipit ', '2022-02-26', ' Quisque aliquet metus ac odio dapibus molestie. Vestibulum blandit dui eget lobortis tempor. Praesent quis rutrum diam. Maecenas non sem eget sapien facilisis venenatis.'),
(8, 7, 22, 'Nulla sollicitudin sapien Sed facilisis enim suscipit ', '2022-02-26', 'luctus egestas tincidunt. Ut sit amet arcu et sem pellentesque lobortis et nec turpis. Vivamus placerat eu velit eget aliquet. Curabitur dapibus id diam quis congue. Sed viverra, augue sed ullamcorper convallis, libero dolor vehicula arcu, ut auctor nisi '),
(9, 9, 22, 'Nulla sollicitudin sapien Sed facilisis enim suscipit ', '2022-02-26', 'dolor vehicula arcu, ut auctor nisi mi ut mauris. Curabitur lacinia, sem sit amet auctor vehicula, ex magna egestas ante, ac cursus mauris felis quis risus. Phasellus interdum nisl et velit lacinia, vel tempor tortor mattis. Praesent massa ante, bibendum ');

-- --------------------------------------------------------

--
-- Structure for view `post_with_cat`
--
DROP TABLE IF EXISTS `post_with_cat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `post_with_cat`  AS SELECT `add_post`.`post_id` AS `post_id`, `add_post`.`post_title` AS `post_title`, `add_post`.`post_content` AS `post_content`, `add_post`.`post_img` AS `post_img`, `add_post`.`post_cat` AS `post_cat`, `add_post`.`post_author` AS `post_author`, `add_post`.`post_date` AS `post_date`, `add_post`.`post_comment_count` AS `post_comment_count`, `add_post`.`post_summary` AS `post_summary`, `add_post`.`post_tag` AS `post_tag`, `add_post`.`post_status` AS `post_status`, `cat_table`.`ID` AS `ID`, `cat_table`.`Cat_Title` AS `Cat_Title` FROM (`add_post` join `cat_table` on(`add_post`.`post_cat` = `cat_table`.`ID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `post_with_cat_sample`
--
DROP TABLE IF EXISTS `post_with_cat_sample`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `post_with_cat_sample`  AS SELECT `add_post`.`post_id` AS `post_id`, `add_post`.`post_title` AS `post_title`, `add_post`.`post_content` AS `post_content`, `add_post`.`post_img` AS `post_img`, `add_post`.`post_cat` AS `post_cat`, `add_post`.`post_author` AS `post_author`, `add_post`.`post_date` AS `post_date`, `add_post`.`post_comment_count` AS `post_comment_count`, `add_post`.`post_summary` AS `post_summary`, `add_post`.`post_tag` AS `post_tag`, `add_post`.`post_status` AS `post_status`, `cat_table`.`ID` AS `ID`, `cat_table`.`Cat_Title` AS `Cat_Title` FROM (`add_post` join `cat_table` on(`add_post`.`post_cat` = `cat_table`.`ID`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_post`
--
ALTER TABLE `add_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cat_table`
--
ALTER TABLE `cat_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comment_info`
--
ALTER TABLE `comment_info`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `header_menu`
--
ALTER TABLE `header_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message_info`
--
ALTER TABLE `message_info`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `reply_comment`
--
ALTER TABLE `reply_comment`
  ADD PRIMARY KEY (`reply_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_post`
--
ALTER TABLE `add_post`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cat_table`
--
ALTER TABLE `cat_table`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comment_info`
--
ALTER TABLE `comment_info`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `header_menu`
--
ALTER TABLE `header_menu`
  MODIFY `menu_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logininfo`
--
ALTER TABLE `logininfo`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message_info`
--
ALTER TABLE `message_info`
  MODIFY `message_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reply_comment`
--
ALTER TABLE `reply_comment`
  MODIFY `reply_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
