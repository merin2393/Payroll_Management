-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2020 at 11:00 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `payroll_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `date_of_join` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `email`, `phone`, `job_title`, `date_of_join`, `address`, `photo`, `department`) VALUES
(1, 'Merin susan', 'merin@gmail.com', '8281487981', 'testinga', '2020-03-01', 'Mannil', 'DSC_0722.JPG', 'testing'),
(2, 'merlin mary', 'merlin@gmail.com', '7025355689', 'develpoer', '2020-03-01', 'Eacheramannil', 'DSC_0720.JPG', 'software developer'),
(3, 'melvin sara', 'melvin@gmail.com', '7536954108', 'developer', '2020-04-01', 'Mannil', 'DSC_0718.JPG', 'software developer'),
(4, 'mereena ann', 'mereena@gmail.com', '7894561230', 'testing', '2020-04-01', 'Mannil', 'DSC_0668.JPG', 'testing'),
(6, 'Reni jacob', 'reni@gamil.com', '9747676550', 'developer', '2020-04-08', 'asd', 'IMG-20191027-WA0101.jpg', 'software developer');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `salary_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `salary_date` varchar(50) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `salary_amount` varchar(50) NOT NULL,
  `dedution` varchar(50) NOT NULL,
  `net_pay` varchar(50) NOT NULL,
  PRIMARY KEY (`salary_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `emp_id`, `salary_date`, `payment_type`, `payment_mode`, `salary_amount`, `dedution`, `net_pay`) VALUES
(1, 1, '2020-03-24', 'Late', 'cash', '10000', '2000', '8000'),
(2, 1, '2020-04-05', 'Monthly', 'cash', '10000', '0', '10000'),
(3, 2, '2020-03-01', 'Advanced', 'cash', '10000', '5000', '5000'),
(4, 1, '2019-12-31', 'Monthly', 'cash', '10000', '0', '10000'),
(5, 2, '2020-04-01', 'Monthly', 'bank', '10000', '0', '10000'),
(6, 3, '2020-04-08', 'Monthly', 'bank', '1000', '0', '1000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
