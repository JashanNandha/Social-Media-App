-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2021 at 04:22 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_photo`
--

CREATE TABLE IF NOT EXISTS `add_photo` (
  `photo_id` int(9) NOT NULL AUTO_INCREMENT,
  `add_photo` varchar(255) NOT NULL,
  `photo_userid` int(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `add_photo`
--

INSERT INTO `add_photo` (`photo_id`, `add_photo`, `photo_userid`, `time`) VALUES
(1, 'surinderdhaliwal54@gmail.com/5.bmp', 11, '2015-12-11 06:11:12'),
(2, 'surinderdhaliwal54@gmail.com/487095.JPG', 11, '2015-12-11 06:12:46'),
(3, 'surinderdhaliwal54@gmail.com/120.jpg', 11, '2015-12-11 06:12:57'),
(6, 'surinderdhaliwal54@gmail.com/26.JPG', 11, '2015-12-11 07:10:47'),
(7, 'jasbrar@gmail.com/16_title of jatinder aulakh book short.jpg', 3, '2015-12-11 08:14:04'),
(8, 'jasbrar@gmail.com/13_pachlogo1.jpg', 3, '2015-12-15 06:38:17'),
(9, 'jasbrar@gmail.com/16_title of jatinder aulakh book short.jpg', 3, '2015-12-15 06:38:33'),
(10, 'guri@gmail.com/background.jpg.jpg', 14, '2015-12-18 15:54:48'),
(11, 'guri@gmail.com/content_delivery_05.jpg', 14, '2015-12-18 15:55:01'),
(12, 'guri@gmail.com/Facebook-logo-300x300.png.jpg', 14, '2015-12-18 15:55:36'),
(13, 'guri@gmail.com/images1.jpg', 14, '2015-12-18 15:56:20'),
(14, 'guri@gmail.com/watch.jpg', 14, '2015-12-18 15:57:04'),
(15, 'guri@gmail.com/b.jpg', 14, '2015-12-18 15:57:22'),
(16, 'surinderdhaliwal54@gmail.com/acer.png', 11, '2015-12-20 09:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `password`, `time`) VALUES
(1, 'thanks', 'god', 0);

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE IF NOT EXISTS `audios` (
  `audio_id` int(9) NOT NULL AUTO_INCREMENT,
  `audio` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `audio_userid` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`audio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `audios`
--

INSERT INTO `audios` (`audio_id`, `audio`, `title`, `audio_userid`, `time`) VALUES
(9, 'surinderdhaliwal54@gmail.com/03 Dollar Vs Roti - Ranjit Bawa (DJJOhAL.Com).mp3', 'my', '11', '2015-12-12 09:55:02'),
(10, 'surinderdhaliwal54@gmail.com/3_Saal _-_www.DjPunjab.Com.mp3', 'ij', '11', '2015-12-12 09:56:00'),
(11, 'surinderdhaliwal54@gmail.com/Suit Saat Preet Harpal Vishakha Thakur (wWw.DesiMirZa.CoM).Hd.mp4', 'gh', '11', '2015-12-12 09:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `create_album`
--

CREATE TABLE IF NOT EXISTS `create_album` (
  `album_id` int(9) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `album_userid` varchar(255) NOT NULL,
  `add_photo` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `create_album`
--

INSERT INTO `create_album` (`album_id`, `type`, `img`, `album_userid`, `add_photo`, `time`) VALUES
(49, 'flower', 'surinderdhaliwal54@gmail.com/flower/images (3).jpg', '11', '', '2015-12-08 07:54:49'),
(56, 'dd', 'surinderdhaliwal54@gmail.com/dd/gh.jpg', '11', '', '2015-12-10 07:57:41'),
(76, 'dd', 'surinderdhaliwal54@gmail.com/dd/8.bmp', '11', '', '2015-12-11 07:15:29'),
(77, 'dd', 'surinderdhaliwal54@gmail.com/dd/45I.jpg', '11', '', '2015-12-11 07:15:40'),
(78, 'dd', 'surinderdhaliwal54@gmail.com/dd/5.bmp', '11', '', '2015-12-11 08:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `f_id` int(9) NOT NULL AUTO_INCREMENT,
  `r_rec` int(9) NOT NULL,
  `r_sender` int(9) NOT NULL,
  `f_status` int(9) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`f_id`, `r_rec`, `r_sender`, `f_status`) VALUES
(33, 11, 14, 1),
(34, 14, 11, 1),
(35, 14, 11, 1),
(36, 11, 14, 1),
(37, 11, 11, 1),
(38, 11, 11, 1),
(39, 11, 14, 1),
(40, 11, 14, 1),
(41, 14, 14, 1),
(42, 14, 11, 0),
(43, 14, 14, 0),
(44, 11, 14, 1),
(45, 11, 14, 1),
(46, 11, 14, 1),
(47, 11, 14, 1),
(48, 11, 14, 1),
(49, 11, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `sms_id` int(20) NOT NULL AUTO_INCREMENT,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `sms_image` varchar(255) NOT NULL,
  `status` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sms_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`sms_id`, `sender`, `reciever`, `message`, `sms_image`, `status`, `time`) VALUES
(1, '3', '11', 'hey', '', '0', '2015-12-16 14:03:34'),
(2, '11', '3', 'hey', '', '0', '2015-12-16 14:13:09'),
(3, '11', '3', 'hey', '', '0', '2015-12-16 14:13:15'),
(4, '3', '11', 'hey', '', '0', '2015-12-16 14:13:36'),
(5, '11', '11', 'hey', '', '0', '2015-12-16 14:14:07'),
(6, '11', '11', 'hey', '', '0', '2015-12-16 14:20:24'),
(7, '11', '3', 'hey\r\n             aa  mcmldsc', '', '0', '2015-12-20 09:40:53'),
(8, '11', '3', 'c hbchvjbknknkdsnfvdknvkd ndkvndlkvnldvnldfvnlfnvlfnvlfnvklfnvkfvnlfnlfnf,lnmblfnbfknnfnfl,nb,ldfnbklfnbklfnbfnblfk', '', '0', '2015-12-23 07:47:29'),
(9, '11', '3', 'c hbchvjbknknkdsnfvdknvkd ndkvndlkvnldvnldfvnlfnvlfnvlfnvklfnvkfvnlfnlfnf,lnmblfnbfknnfnfl,nb,ldfnbklfnbklfnbfnblfk', '', '0', '2015-12-23 07:48:15'),
(10, '11', '14', 'hey', '', '0', '2015-12-25 15:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(20) NOT NULL AUTO_INCREMENT,
  `post_data` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `post_like` int(9) NOT NULL,
  `post_comment` int(9) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_data`, `user_id`, `image`, `post_like`, `post_comment`, `time`) VALUES
(96, '', '14', 'acer.png', 3, 3, '2015-12-24 14:23:13'),
(97, '', '14', 'addidasw.png', 1, 0, '2015-12-19 16:35:30'),
(100, '', '14', 'addidas.jpg', 1, 3, '2015-12-24 08:49:07'),
(101, 'hey kuy', '14', 'acer.png', 0, 1, '2015-12-24 08:18:11'),
(102, 'hvh', '11', 'accurist.jpg', 11, 4, '2015-12-24 08:40:26'),
(103, 'kive aa', '11', 'compaq.jpg', 1, 1, '2015-12-24 08:15:31'),
(104, '', '11', '', 1, 0, '2015-12-24 08:11:39'),
(105, '', '11', '', 0, 0, '2015-12-20 09:14:41'),
(106, 'hey kiva', '11', 'mobile.jpg', 1, 0, '2015-12-23 06:48:37'),
(107, 'lfnbkfnbknbkfnmb  nfblfn lfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfn', '11', '', 0, 0, '2015-12-23 07:48:31'),
(109, 'Nlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnndslnvdlbmlfbmlfmblfmblfmblmdflbmlfmblfmbfklmblf Nlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnmb Nfblfnlfnbkf', '11', 'acer.png', 0, 0, '2015-12-23 08:12:52'),
(110, 'lfnbkfnbknbkfnmb  nfblfn lfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfnmb  nfblfnlfnbkfnbknbkfn', '11', '', 0, 0, '2015-12-25 07:17:19'),
(112, 'fs dfdsfsdfds\r\ng afdsfsdf', '11', 'Chrysanthemum.jpg', 0, 0, '2015-12-25 07:20:40'),
(115, 'Nlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnndslnvdlbmlfbmlfmblfmblfmblmdflbmlfmblfmbfklmblf Nlfnbkfnbknbkfnmb Nfblfnlfnbkfnbknbkfnmb Nfblfnlfnbkf', '11', 'acer.png', 0, 0, '2015-12-25 07:25:10'),
(116, 'hey kuy', '11', 'acer.png', 1, 0, '2020-12-22 06:27:10'),
(117, '', '11', '', 2, 0, '2020-12-22 03:01:17'),
(118, '', '11', 'addidasw.png', 1, 1, '2020-12-22 06:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE IF NOT EXISTS `sign` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) NOT NULL,
  `surname` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `education` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` varchar(220) NOT NULL,
  `male` varchar(220) NOT NULL,
  `dp` varchar(255) NOT NULL,
  `wall_pic` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `user_status` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`id`, `name`, `surname`, `email`, `education`, `password`, `birthday`, `male`, `dp`, `wall_pic`, `phone`, `address`, `city`, `user_status`) VALUES
(3, 'rpreet', 'dhaliwal', 'jasbrar@gmail.com', '', 'dhaliwal', '3/Mar/2012', 'male', 'jasbrar@gmail.com/8.bmp', 'jasbrar@gmail.com/28jpg.jpg', 8872174338, 'Moga town', 'moga', 0),
(11, 'surinder ', 'dhaliwal', 'surinderdhaliwal54@gmail.com', '', '12345', '2/Feb/2014', 'female', 'surinderdhaliwal54@gmail.com/ais193v[1].jpg', 'surinderdhaliwal54@gmail.com/5.bmp', 3456784, 'Moga', 'dharamkotmoga', 0),
(14, 'guri', 'brar', 'guri@gmail.com', 'Went to Govt High School, Bilaspur', '12345', '15/Jul/2000', 'male', 'surinderdhaliwal54@gmail.com/flower/images (3).jpg', 'guri@gmail.com/white-pug.jpg', 0, '', '', 0),
(15, 'suresh', 'kumar', 'sureshmehrolia2000@gmail.com', '', '12345', '20/Aug/2000', 'male', '', '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stricker`
--

CREATE TABLE IF NOT EXISTS `stricker` (
  `str_id` int(20) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`str_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `stricker`
--

INSERT INTO `stricker` (`str_id`, `category`, `image`, `time`) VALUES
(48, 'bird', '35.jpg', '2015-11-27 07:15:09'),
(49, 'bird', '5.bmp', '2015-11-27 07:15:26'),
(51, 'flowers', '28jpg.jpjjv.jpg', '2015-11-27 07:19:52'),
(53, 'bird', '5.bmp', '2015-11-27 08:06:25'),
(55, 'flowers', '31371163e8b767541bf86aabf1d9ba46.jpg', '2015-12-18 14:51:27'),
(56, 'Select', '', '2015-12-18 14:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `image` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `image`) VALUES
(1, '2.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '3.jpg'),
(5, '3.jpg'),
(6, '3.jpg'),
(7, '3.jpg'),
(8, '3.jpg'),
(9, '3.jpg'),
(10, '3.jpg'),
(11, '3.jpg'),
(12, '3.jpg'),
(13, '3.jpg'),
(14, '3.jpg'),
(15, '-PAXP-deijE.gif'),
(16, '-PAXP-deijE.gif'),
(17, '-PAXP-deijE.gif'),
(18, 'article-2578238-1C2FD11E00000578-362_634x422.jpg'),
(19, 'article-2578238-1C2FD11E00000578-362_634x422.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
