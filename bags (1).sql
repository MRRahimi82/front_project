-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2022 at 04:55 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bags`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namee` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `title` varchar(40) COLLATE utf8mb4_persian_ci NOT NULL,
  `textt` text COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `namee`, `phone`, `email`, `title`, `textt`) VALUES
(1, 'محمد مهدی رحیمی', '09139339701', 'm.rahimi8253@gmail.com', 'sdas', 'asdsadsad');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `code_product` int(11) NOT NULL AUTO_INCREMENT,
  `name_product` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `Number` int(255) NOT NULL,
  `money_product` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `image_product` varchar(80) COLLATE utf8mb4_persian_ci NOT NULL,
  `about_product` text COLLATE utf8mb4_persian_ci NOT NULL,
  `type_product` varchar(9) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`code_product`)
) ENGINE=MyISAM AUTO_INCREMENT=453 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`code_product`, `name_product`, `Number`, `money_product`, `image_product`, `about_product`, `type_product`) VALUES
(324, 'کفش زنانه مدل سی یو', 50, '210/000', 'assets\\image\\one.jpg', 'sdafadsf', 'shoe'),
(452, 'کفش زنانه مدل سی یو', 50, '210/000', 'assets\\image\\two.jpg', '', 'bags'),
(12, 'کفش زنانه', 25, '120000', 'assets\\image\\three.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `subject` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `Priority` varchar(15) COLLATE utf8mb4_persian_ci NOT NULL,
  `text` text COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`number`, `username`, `email`, `subject`, `Priority`, `text`) VALUES
(4, '00211022302006', 'm.rahimi8253@gmail.com', '2', '342', 'ads');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_persian_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `role` varchar(15) COLLATE utf8mb4_persian_ci NOT NULL DEFAULT 'normal',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `email`, `gender`, `role`) VALUES
(29, 'مسعود رحیمی', 'mm.rahimi82', '12345', 'm.rahimi8253@gmail.com', 'male', 'normal'),
(33, 'محمد مهدی رحیمی', 'mm.rahimi', '123654', 'mm.rahimi8253@gmail.com', 'male', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
