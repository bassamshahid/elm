-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2016 at 03:51 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elm`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `eid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique employee id',
  `full_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `joined_date` date NOT NULL,
  `etitle` varchar(100) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifed_time` datetime NOT NULL,
  PRIMARY KEY (`eid`),
  UNIQUE KEY `employee_username_uindex` (`username`),
  UNIQUE KEY `employee_email_uindex` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='to store the employee information' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `employee`
--


-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE IF NOT EXISTS `leaves` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL COMMENT 'employee id',
  `description` text NOT NULL COMMENT 'reason to apply for leave',
  `approval` int(11) NOT NULL DEFAULT '0' COMMENT '0: No/Pending\n1: Yes\n2: Reject',
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `total_leaves` int(11) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_time` datetime NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='to store leaves information' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `leaves`
--

