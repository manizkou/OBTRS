-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2019 at 10:13 AM
-- Server version: 5.6.43
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samratcl_busreserve_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_bus`
--

CREATE TABLE `add_bus` (
  `bus_id` int(11) NOT NULL,
  `bus_name` varchar(50) NOT NULL,
  `reg_name` varchar(50) NOT NULL,
  `btype` varchar(50) NOT NULL,
  `maxseat` varchar(10) NOT NULL,
  `start_time` varchar(15) NOT NULL,
  `end_time` varchar(15) NOT NULL,
  `amenities` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `route_id` int(100) NOT NULL,
  `btype_price` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_bus`
--

INSERT INTO `add_bus` (`bus_id`, `bus_name`, `reg_name`, `btype`, `maxseat`, `start_time`, `end_time`, `amenities`, `description`, `route_id`, `btype_price`, `email`) VALUES
(24, 'Namaste Kapilvastu', 'Lu 2 Kha 656', 'Non-sleeper,Normal,AC', '44', '14:30', '22:00', 'plug,film,lightbulb-o,wifi', 'Siliguri', 24, '0', 'ramshah@gmail.com'),
(25, 'Evann Bus', 'Lu 2 Kha 1221', 'CAB,AC', '37', '15:12', '23:00', 'wifi,plug,film,fire-extinguisher,lightbulb-o', 'Malekhu', 21, '2', 'ramshah@gmail.com'),
(26, 'Dreamliner Travels', 'Lu 2 Kha 1000', 'Normal,CAB,AC', '33', '06:00', '12:00', 'wifi,film,lightbulb-o', 'Palpa', 22, '0', 'ramshah@gmail.com'),
(27, ' National Travels', 'Lu 2 Kha 6561', 'AC,Sleeper,CAB', '37', '06:30', '12:30', 'wifi,film,lightbulb-o,fire-extinguisher', 'Ridi', 22, '50', 'ramshah@gmail.com'),
(28, 'Dylan Travels', 'Lu 2 Kha 1132', 'Normal,AC,Non-sleeper', '45', '08:00', '19:00', 'wifi,film,light-bulb-o,fire-extinguisher', 'Kakarbhitta', 24, '1', 'ramshah@gmail.com'),
(29, 'Air Travels', 'Lu 3 KHA 1234', 'CAB,Sleeper,AC', '29', '09:00', '16:00', 'wifi,plug,film,lightbulb-o,fire-extinguisher', 'Tansen', 22, '10', 'ramshah@gmail.com'),
(30, 'Himalayan Travels', 'LU 2 KHA 2323', 'CAB,AC,Sleeper', '33', '08:00', '18:00', 'wifi,plug,film,lightbulb-o,fire-extinguisher', 'Narayanghat', 25, '2', 'gautamshakya@gmail.com'),
(31, 'Butwal Xpress', 'Lu 2 KHA 9000', 'CAB,AC,Normal', '37', '08:30', '17:30', 'wifi,plug,film,lightbulb-o,plug', 'Narayanghat', 21, '30', 'sangamshakya@gmail.com'),
(32, 'Nepal Yatatat', 'Lu 2 KA 9890', 'Non-sleeper', '33', '10:00', '18:00', 'wifi,plug,film', 'Baglung', 23, '0', 'gautamshakya@gmail.com'),
(33, 'Orange Bus', 'LU 1 Kha 1299', 'CAB,Sleeper,AC,Non-sleeper', '36', '09:00', '17:00', 'wifi,plug,film,fire-extinguisher,plug', 'Palpa', 22, '0', 'ramshah@gmail.com'),
(34, 'Sam Bus', 'Lu 2 Kha 2121 ', 'Normal,Asian,AC,Normal', '37', '12:00', '20:00', 'wifi,plug,lightbulb-o', 'Narayanghat', 21, '1', 'ramshah@gmail.com'),
(35, 'Allnepal Travels', 'Lu 2 Kha 2122', 'Normal,CAB,Sleeper', '33', '06:00', '14:00', 'wifi,plug,film,lightbulb-o,pillow,fire-extinguisher', 'Palpa', 25, '0', 'ramshah@gmail.com'),
(36, 'Evacy Bus', 'Lu 1 Ka 1100', 'AC,Normal,CAB', '39', '06:30', '14:30', 'wifi,plug,film,lightbulb-o', 'Malekhu', 25, '2', 'gautamshakya@gmail.com'),
(37, 'Travel Nepal', 'Lu 2 Ka 2687', 'AC,Normal,Sleeper', '43', '07:30', '16:00', 'wifi,plug,film,lightbulb-o,fire-extinguisher', 'Palpa', 25, '3', 'gautamshakya@gmail.com'),
(38, 'Royal Travel', 'Lu 2 Kha 207', 'AC,Non-sleeper,CAB,Sleeper', '35', '08:30', '17:30', 'wifi,plug,film,lightbulb-o', 'Narayanghat', 25, '2', 'gautamshakya@gmail.com'),
(39, 'Mount Travel', 'Lu 2 Kha 11', 'AC,Non-sleeper,CAB', '35', '07:00', '15:00', 'wifi,film,lightbulb-o', 'Malekhu', 25, '2', 'sangamshakya@gmail.com'),
(40, 'Hebron Transports', 'Lu 1 Ka 1001', 'Non-sleeper,CAB,Non-AC', '35', '07:30', '16:00', 'wifi,plug,film,lightbulb-o,fire-extinguisher', 'Waling', 25, '3', 'sangamshakya@gmail.com'),
(41, 'Namaste Pokhara', 'Lu 1 Kha 1201', 'AC,CAB,Sleeper', '31', '08:00', '16:00', 'wifi,plug,film,fire-extinguisher', 'Malekhu', 25, '2', 'sangamshakya@gmail.com'),
(42, 'Nepal Treansport', 'Lu 1 Kha 2873', 'Normal,Non-sleeper,Sleeper', '35', '09:00', '16:00', 'wifi,plug,film,fire-extinguisher', 'Malekhu', 25, '30', 'ramshah@gmail.com'),
(43, 'Bikash Travels', 'Lu 1 Kha 2879', 'AC,Normal,CAB', '37', '12:22', '21:00', 'wifi,plug,lightbulb-o', 'Pokhara', 23, '2', 'gautamshakya@gmail.com'),
(44, 'Janak Yatayat', 'Lu 1Ka 2263', 'AC,Normal,Sleeper', '37', '07:10', '20:11', 'wifi,plug,lightbulb-o,fire-extinguisher', 'Narayaghat', 26, '0', 'gautamshakya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `add_schedule`
--

CREATE TABLE `add_schedule` (
  `schedule_id` int(11) NOT NULL,
  `bus_id` int(100) NOT NULL,
  `route_id` int(100) NOT NULL,
  `onward` varchar(20) NOT NULL,
  `returndate` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_schedule`
--

INSERT INTO `add_schedule` (`schedule_id`, `bus_id`, `route_id`, `onward`, `returndate`, `status`) VALUES
(22, 24, 21, '05/22/2017', '05/24/2017', 'pending'),
(23, 26, 22, '05/25/2017', '05/30/2017', 'pending'),
(24, 25, 21, '05/31/2017', '06/01/2017', 'pending'),
(25, 27, 22, '05/25/2017', '05/30/2017', 'pending'),
(26, 28, 23, '05/29/2017', '05/29/2017', 'pending'),
(27, 28, 23, '05/24/2017', '05/25/2017', 'pending'),
(28, 26, 22, '05/24/2017', '05/30/2017', 'pending'),
(29, 29, 22, '05/25/2017', '05/30/2017', 'pending'),
(30, 30, 21, '05/31/2017', '06/01/2017', 'pending'),
(31, 24, 21, '05/31/2017', '06/01/2017', 'pending'),
(32, 31, 21, '06/03/2017', '06/04/2017', 'active'),
(33, 28, 23, '06/08/2017', '06/09/2017', 'active'),
(34, 32, 23, '06/08/2017', '06/09/2017', 'active'),
(35, 28, 23, '06/15/2017', '06/16/2017', 'active'),
(36, 24, 21, '06/18/2017', '06/19/2017', 'active'),
(37, 31, 21, '06/18/2017', '06/19/2017', 'active'),
(38, 25, 21, '06/18/2017', '06/19/2017', 'active'),
(39, 33, 22, '06/14/2017', '06/15/2017', 'active'),
(40, 29, 22, '06/20/2017', '06/21/2017', 'active'),
(41, 28, 23, '06/16/2017', '06/17/2017', 'active'),
(42, 27, 22, '06/14/2017', '06/15/2017', 'active'),
(43, 24, 21, '06/30/2017', '07/01/2017', 'active'),
(44, 33, 22, '07/28/2017', '07/31/2017', 'active'),
(45, 29, 22, '07/28/2017', '07/31/2017', 'active'),
(46, 34, 21, '07/29/2017', '07/30/2017', 'active'),
(47, 31, 21, '08/25/2017', '08/26/2017', 'active'),
(48, 32, 23, '08/25/2017', '08/26/2017', 'active'),
(50, 33, 22, '08/25/2017', '08/26/2017', 'active'),
(51, 34, 21, '08/25/2017', '08/26/2017', 'active'),
(52, 25, 21, '08/25/2017', '08/26/2017', 'active'),
(54, 35, 25, '08/25/2017', '08/26/2017', 'active'),
(55, 30, 25, '08/25/2017', '08/26/2017', 'active'),
(56, 24, 24, '08/25/2017', '08/28/2017', 'active'),
(57, 26, 22, '08/09/2017', '08/10/2017', 'active'),
(58, 36, 25, '08/25/2017', '08/26/2017', 'active'),
(59, 37, 25, '08/25/2017', '08/26/2017', 'active'),
(60, 38, 25, '08/25/2017', '08/26/2017', 'active'),
(61, 39, 25, '08/29/2017', '08/30/2017', 'active'),
(62, 40, 25, '08/29/2017', '08/30/2017', 'active'),
(63, 41, 25, '08/29/2017', '08/30/2017', 'active'),
(64, 42, 25, '08/25/2017', '08/30/2017', 'active'),
(65, 35, 25, '08/31/2017', '09/01/2017', 'active'),
(66, 42, 25, '08/31/2017', '09/01/2017', 'active'),
(67, 34, 21, '08/31/2017', '09/01/2017', 'active'),
(68, 38, 25, '08/31/2017', '09/01/2017', 'active'),
(69, 36, 25, '08/31/2017', '09/01/2017', 'active'),
(70, 33, 22, '08/31/2017', '09/01/2017', 'active'),
(71, 28, 24, '08/31/2017', '09/02/2017', 'active'),
(72, 27, 22, '08/31/2017', '09/01/2017', 'active'),
(73, 32, 23, '08/31/2017', '09/01/2017', 'active'),
(74, 26, 22, '08/31/2017', '09/01/2017', 'active'),
(75, 25, 21, '09/01/2017', '09/07/2017', 'active'),
(76, 37, 25, '09/01/2017', '09/07/2017', 'active'),
(77, 39, 25, '09/06/2017', '09/07/2017', 'active'),
(78, 31, 21, '08/31/2017', '09/01/2017', 'active'),
(79, 29, 22, '09/06/2017', '09/07/2017', 'active'),
(80, 27, 22, '09/06/2017', '09/07/2017', 'active'),
(81, 24, 24, '08/31/2017', '09/01/2017', 'active'),
(82, 41, 25, '09/07/2017', '', 'active'),
(83, 34, 21, '09/14/2017', '09/18/2017', 'active'),
(84, 31, 21, '09/14/2017', '09/18/2017', 'active'),
(85, 42, 25, '09/20/2017', '09/24/2017', 'active'),
(86, 41, 25, '09/20/2017', '09/24/2017', 'active'),
(87, 43, 23, '09/20/2017', '09/22/2017', 'active'),
(88, 44, 26, '10/03/2017', '10/04/2017', 'active'),
(89, 44, 26, '04/21/2018', '04/23/2018', 'active'),
(90, 40, 25, '04/28/2018', '04/30/2018', 'active'),
(91, 26, 22, '04/26/2018', '04/28/2018', 'active'),
(92, 27, 22, '04/27/2018', '', 'active'),
(93, 26, 22, '04/27/2018', '', 'active'),
(94, 44, 26, '05/08/2018', '05/09/2018', 'active'),
(95, 43, 23, '05/09/2018', '05/16/2018', 'active'),
(96, 41, 25, '05/25/2018', '05/26/2018', 'active'),
(97, 44, 26, '05/31/2018', '06/01/2018', 'active'),
(98, 42, 25, '09/08/2018', '', 'active'),
(99, 25, 21, '11/17/2018', '11/18/2018', 'active'),
(100, 31, 21, '11/17/2018', '11/18/2018', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `boarding_details`
--

CREATE TABLE `boarding_details` (
  `board_id` int(11) NOT NULL,
  `route_id` int(100) NOT NULL,
  `board` varchar(20) NOT NULL,
  `drop_point` varchar(50) NOT NULL,
  `stime` varchar(20) NOT NULL,
  `etime` varchar(20) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boarding_details`
--

INSERT INTO `boarding_details` (`board_id`, `route_id`, `board`, `drop_point`, `stime`, `etime`, `price`) VALUES
(18, 21, 'Bradaghat', 'Muglin', '90', '90', '2'),
(20, 22, 'Butwal', 'Ridi', '0', '120', '3'),
(21, 23, 'Beni', 'Mustang', '120', '00', '8'),
(22, 21, 'Butwal', 'Kathmandu', '60', '00', '1'),
(23, 21, 'Bhairahawa', 'Kathmandu', '0', '0', '2'),
(24, 23, 'Pokhara', 'Mustang', '00', '00', '1'),
(25, 22, 'Butwal', 'Tamghas', '0', '0', '1'),
(26, 24, 'Kathmandu', 'Kakarbhitta', '5', '0', '10'),
(27, 21, 'Sunawal', 'Thankot', '75', '60', '1'),
(28, 23, 'Pokhara', 'Jomsom', '0', '0', '8'),
(29, 25, 'Butwal', 'Pokhara', '60', '00', '4'),
(30, 25, 'Bhairahawa', 'Pokhara', '0', '0', '5'),
(31, 26, 'Butwal', 'Janakpur', '10', '0', '550');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `booking_id` int(11) NOT NULL,
  `ticket_id` varchar(100) NOT NULL,
  `bus_id` int(50) NOT NULL,
  `from_place` varchar(30) NOT NULL,
  `to_place` varchar(30) NOT NULL,
  `booking_date` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `stime` varchar(50) NOT NULL,
  `etime` varchar(50) NOT NULL,
  `depart_date` varchar(50) NOT NULL,
  `pickup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`booking_id`, `ticket_id`, `bus_id`, `from_place`, `to_place`, `booking_date`, `amount`, `stime`, `etime`, `depart_date`, `pickup`) VALUES
(50, 'TR70AFD2EF', 31, 'Bhairahawa', 'Kathmandu', '2017/07/30', 64, '08:30', '17:30', '08/25/2017', ''),
(54, 'RTCA55190E', 33, 'Tamghas', 'Butwal', '2017/07/30', 1, '09:00', '17:00', '08/26/2017', ''),
(55, 'TRC81E98F8', 31, 'Bhairahawa', 'Kathmandu', '2017/08/01', 32, '08:30', '17:30', '08/25/2017', ''),
(56, 'TRDD4DC4E5', 34, 'Bhairahawa', 'Kathmandu', '2017/08/02', 6, '12:00 pm', '08:00 pm', '08/25/2017', ''),
(57, 'RT311FB973', 25, 'Kathmandu', 'Bhairahawa', '2017/08/02', 4, '03:12 pm', '11:00 pm', '08/26/2017', ''),
(58, 'TR9BE4D8C1', 25, 'Bhairahawa', 'Kathmandu', '2017/08/03', 4, '03:12 pm', '11:00 pm', '08/25/2017', ''),
(59, 'RT5E87CEC7', 25, 'Kathmandu', 'Bhairahawa', '2017/08/03', 4, '03:12 pm', '11:00 pm', '08/26/2017', ''),
(61, 'RTD5253A9F', 30, 'Pokhara', 'Bhairahawa', '2017/08/03', 7, '08:00 am', '06:00 pm', '08/26/2017', ''),
(63, 'TRC62B3377', 30, 'Bhairahawa', 'Pokhara', '2017/08/03', 7, '08:00 am', '06:00 pm', '08/25/2017', ''),
(65, 'RT0DA3FE46', 35, 'Pokhara', 'Bhairahawa', '2017/08/04', 5, '06:00 am', '02:00 pm', '08/26/2017', ''),
(66, 'TR01ED20DD', 24, 'Kathmandu', 'Kakarbhitta', '2017/08/05', 10, '02:35 pm', '10:00 pm', '08/25/2017', ''),
(68, 'RT23B2D7A9', 34, 'Kathmandu', 'Butwal', '2017/08/05', 2, '01:00 pm', '08:00 pm', '08/26/2017', ''),
(69, 'TR83801A63', 34, 'Bhairahawa', 'Kathmandu', '2017/08/06', 12, '12:00 pm', '08:00 pm', '08/25/2017', ''),
(70, 'RTF6640348', 25, 'Kathmandu', 'Bhairahawa', '2017/08/06', 8, '03:12 pm', '11:00 pm', '08/26/2017', ''),
(71, 'TR75238A92', 25, 'Bhairahawa', 'Kathmandu', '2017/08/06', 4, '03:12 pm', '11:00 pm', '08/25/2017', ''),
(72, 'RT27DBE162', 0, 'Kathmandu', 'Bhairahawa', '2017/08/06', 0, '', '', '08/27/2017', ''),
(73, 'TR90B93226', 31, 'Bhairahawa', 'Kathmandu', '2017/08/06', 32, '08:30 am', '05:30 pm', '08/25/2017', ''),
(74, 'RT17730851', 25, 'Kathmandu', 'Bhairahawa', '2017/08/06', 4, '03:12 pm', '11:00 pm', '08/26/2017', ''),
(75, 'TR8FE4218F', 34, 'Bhairahawa', 'Kathmandu', '2017/08/06', 3, '12:00 pm', '08:00 pm', '08/25/2017', ''),
(76, 'TR8BD9A7C6', 34, 'Bhairahawa', 'Kathmandu', '2017/08/06', 3, '12:00 pm', '08:00 pm', '08/25/2017', ''),
(77, 'TRE53A78D4', 35, 'Bhairahawa', 'Pokhara', '2017/08/07', 5, '06:00 am', '02:00 pm', '08/25/2017', ''),
(78, 'TR260B970D', 34, 'Bhairahawa', 'Kathmandu', '2017/08/07', 3, '12:00 pm', '08:00 pm', '08/25/2017', ''),
(79, 'RTDB4893A3', 34, 'Kathmandu', 'Bhairahawa', '2017/08/07', 3, '12:00 pm', '08:00 pm', '08/26/2017', ''),
(80, 'TRC527EEC8', 34, 'Bhairahawa', 'Kathmandu', '2017/08/07', 3, '12:00 pm', '08:00 pm', '08/25/2017', ''),
(81, 'TRDF3B65F4', 34, 'Bhairahawa', 'Kathmandu', '2017/08/07', 3, '12:00 pm', '08:00 pm', '08/25/2017', ''),
(82, 'TRD4311525', 34, 'Bhairahawa', 'Kathmandu', '2017/08/07', 3, '12:00 pm', '08:00 pm', '08/25/2017', ''),
(83, 'TRC637B27C', 34, 'Bhairahawa', 'Kathmandu', '2017/08/07', 3, '12:00 pm', '08:00 pm', '08/25/2017', ''),
(84, 'RT2C145FD2', 25, 'Kathmandu', 'Bhairahawa', '2017/08/07', 4, '03:12 pm', '11:00 pm', '08/26/2017', ''),
(85, 'TR06DC0BBB', 35, 'Bhairahawa', 'Pokhara', '2017/08/07', 5, '06:00 am', '02:00 pm', '08/25/2017', ''),
(86, 'RT350FCD78', 30, 'Pokhara', 'Bhairahawa', '2017/08/07', 7, '08:00 am', '06:00 pm', '08/26/2017', ''),
(87, 'TR843FFD2D', 35, 'Bhairahawa', 'Pokhara', '2017/08/08', 10, '06:00 am', '02:00 pm', '08/25/2017', ''),
(88, 'RTA9F512BE', 39, 'Pokhara', 'Bhairahawa', '2017/08/08', 14, '07:00 am', '03:00 pm', '08/30/2017', ''),
(89, 'TRA4221E0B', 35, 'Butwal', 'Pokhara', '2017/08/08', 8, '07:00 am', '02:00 pm', '08/25/2017', ''),
(90, 'RTD6F4BC84', 39, 'Pokhara', 'Butwal', '2017/08/08', 6, '08:00 am', '03:00 pm', '08/30/2017', ''),
(91, 'TR40E609AE', 35, 'Bhairahawa', 'Pokhara', '2017/08/09', 5, '06:00 am', '02:00 pm', '08/25/2017', ''),
(92, 'RT7E68197B', 39, 'Pokhara', 'Bhairahawa', '2017/08/09', 7, '07:00 am', '03:00 pm', '08/30/2017', ''),
(93, 'TRA6892227', 25, 'Bhairahawa', 'Kathmandu', '2017/08/09', 8, '03:12 pm', '11:00 pm', '08/25/2017', ''),
(94, 'RT5A987817', 0, 'Kathmandu', 'Bhairahawa', '2017/08/09', 0, '', '', '08/30/2017', ''),
(96, 'RT0B929BE3', 39, 'Pokhara', 'Bhairahawa', '2017/08/09', 7, '07:00 am', '03:00 pm', '08/30/2017', ''),
(97, 'TR2FD11277', 42, 'Bhairahawa', 'Pokhara', '2017/08/10', 70, '09:00 am', '04:00 pm', '08/25/2017', ''),
(98, 'RT4DEDC00E', 41, 'Pokhara', 'Bhairahawa', '2017/08/10', 7, '08:00 am', '04:00 pm', '08/30/2017', ''),
(99, 'TRBEB427D5', 35, 'Bhairahawa', 'Pokhara', '2017/08/10', 10, '06:00 am', '02:00 pm', '08/25/2017', ''),
(100, 'RT21B6D50E', 39, 'Pokhara', 'Bhairahawa', '2017/08/10', 7, '07:00 am', '03:00 pm', '08/30/2017', ''),
(101, 'TR62E567C7', 34, 'Bhairahawa', 'Kathmandu', '2017/08/10', 3, '12:00 pm', '08:00 pm', '08/25/2017', ''),
(102, 'TRDBEFE505', 35, 'Bhairahawa', 'Pokhara', '2017/08/10', 5, '06:00 am', '02:00 pm', '08/25/2017', ''),
(103, 'TR8BF60394', 35, 'Bhairahawa', 'Pokhara', '2017/08/10', 10, '06:00 am', '02:00 pm', '08/25/2017', ''),
(104, 'RT7A715C85', 39, 'Pokhara', 'Bhairahawa', '2017/08/10', 7, '07:00 am', '03:00 pm', '08/30/2017', ''),
(105, 'TRD7B06FCC', 35, 'Bhairahawa', 'Pokhara', '2017/08/11', 10, '06:00 am', '02:00 pm', '08/25/2017', ''),
(106, 'RTAFE75D70', 39, 'Pokhara', 'Bhairahawa', '2017/08/11', 14, '07:00 am', '03:00 pm', '08/30/2017', ''),
(107, 'TR60821467', 35, 'Bhairahawa', 'Pokhara', '2017/08/11', 5, '06:00 am', '02:00 pm', '08/25/2017', ''),
(108, 'TR692FC369', 35, 'Bhairahawa', 'Pokhara', '2017/08/11', 5, '06:00 am', '02:00 pm', '08/25/2017', ''),
(109, 'RTDCFB83F6', 39, 'Pokhara', 'Bhairahawa', '2017/08/11', 7, '07:00 am', '03:00 pm', '08/30/2017', ''),
(110, 'TR5E9DD1A6', 35, 'Bhairahawa', 'Pokhara', '2017/08/11', 5, '06:00 am', '02:00 pm', '08/25/2017', 'Manigram'),
(111, 'RT01835A9A', 39, 'Pokhara', 'Bhairahawa', '2017/08/11', 7, '07:00 am', '03:00 pm', '08/30/2017', 'Lekhnath'),
(112, 'TR4743314D', 31, 'Bhairahawa', 'Kathmandu', '2017/08/11', 64, '08:30 am', '05:30 pm', '08/25/2017', 'Nayamill'),
(113, 'RT9279E7F6', 31, 'Kathmandu', 'Bhairahawa', '2017/08/11', 64, '08:30 am', '05:30 pm', '08/26/2017', 'Soyambhu Nath'),
(115, 'TR3557D3A6', 37, 'Bhairahawa', 'Pokhara', '2017/08/12', 16, '07:30 am', '04:00 pm', '08/25/2017', 'Yogikuti'),
(116, 'RT6B42E464', 41, 'Pokhara', 'Bhairahawa', '2017/08/12', 7, '08:00 am', '04:00 pm', '08/30/2017', 'Prithivi Chowk'),
(117, 'TR8F1915B2', 37, 'Bhairahawa', 'Pokhara', '2017/08/12', 8, '07:30 am', '04:00 pm', '08/25/2017', 'Manigram'),
(118, 'RT9EB4BB9D', 39, 'Pokhara', 'Bhairahawa', '2017/08/12', 7, '07:00 am', '03:00 pm', '08/30/2017', 'Lekhnath'),
(119, 'TREFFEBDD2', 37, 'Bhairahawa', 'Pokhara', '2017/08/12', 32, '07:30 am', '04:00 pm', '08/25/2017', 'Yogikuti'),
(120, 'RTA52217AD', 39, 'Pokhara', 'Bhairahawa', '2017/08/12', 7, '07:00 am', '03:00 pm', '08/30/2017', 'Prithivi Chowk'),
(121, 'TR208B8CC7', 37, 'Bhairahawa', 'Pokhara', '2017/08/12', 24, '07:30 am', '04:00 pm', '08/25/2017', 'Yogikuti'),
(122, 'RTF139FB4A', 40, 'Pokhara', 'Bhairahawa', '2017/08/12', 16, '07:30 am', '04:00 pm', '08/30/2017', 'Prithivi Chowk'),
(124, 'RTCB3444CA', 39, 'Pokhara', 'Bhairahawa', '2017/08/12', 7, '07:00 am', '03:00 pm', '08/30/2017', 'Prithivi Chowk'),
(125, 'TREF65EAA9', 35, 'Bhairahawa', 'Pokhara', '2017/08/13', 10, '06:00 am', '02:00 pm', '08/25/2017', 'Yogikuti'),
(126, 'RT7696A432', 39, 'Pokhara', 'Bhairahawa', '2017/08/13', 14, '07:00 am', '03:00 pm', '08/30/2017', 'Prithivi Chowk'),
(127, 'TR2B16DC0D', 38, 'Bhairahawa', 'Pokhara', '2017/08/13', 14, '08:30 am', '05:30 pm', '08/25/2017', 'Yogikuti'),
(128, 'RTE82FB038', 41, 'Pokhara', 'Bhairahawa', '2017/08/13', 7, '08:00 am', '04:00 pm', '08/30/2017', 'Lekhnath'),
(129, 'TR9434A60D', 38, 'Bhairahawa', 'Pokhara', '2017/08/13', 21, '08:30 am', '05:30 pm', '08/25/2017', 'Yogikuti'),
(130, 'RT4BB0F1BB', 39, 'Pokhara', 'Bhairahawa', '2017/08/13', 7, '07:00 am', '03:00 pm', '08/30/2017', 'Prithivi Chowk'),
(131, 'TR0943B8AD', 36, 'Bhairahawa', 'Pokhara', '2017/08/13', 14, '06:30 am', '02:30 pm', '08/25/2017', 'Yogikuti'),
(132, 'RTE0DF6288', 40, 'Pokhara', 'Bhairahawa', '2017/08/13', 8, '07:30 am', '04:00 pm', '08/30/2017', 'Lekhnath'),
(133, 'TR6EE23D81', 35, 'Bhairahawa', 'Pokhara', '2017/08/13', 10, '06:00 am', '02:00 pm', '08/25/2017', 'Yogikuti'),
(134, 'RTED5CE458', 39, 'Pokhara', 'Bhairahawa', '2017/08/13', 7, '07:00 am', '03:00 pm', '08/30/2017', 'Prithivi Chowk'),
(135, 'TRA7E618A5', 35, 'Bhairahawa', 'Pokhara', '2017/08/13', 10, '06:00 am', '02:00 pm', '08/25/2017', 'Manigram'),
(136, 'RT90E02E16', 39, 'Pokhara', 'Bhairahawa', '2017/08/13', 7, '07:00 am', '03:00 pm', '08/30/2017', 'Prithivi Chowk'),
(137, 'TRD87BE211', 35, 'Bhairahawa', 'Pokhara', '2017/08/14', 10, '06:00 am', '02:00 pm', '08/25/2017', 'Butwal Buspark'),
(138, 'RT4278D29B', 42, 'Pokhara', 'Bhairahawa', '2017/08/14', 35, '09:00 am', '04:00 pm', '08/30/2017', 'Prithivi Chowk'),
(139, 'TR1CECD715', 30, 'Bhairahawa', 'Pokhara', '2017/08/16', 14, '08:00 am', '06:00 pm', '08/25/2017', 'Yogikuti'),
(140, 'RTBF1FAB6A', 42, 'Pokhara', 'Bhairahawa', '2017/08/16', 35, '09:00 am', '04:00 pm', '08/30/2017', 'Lekhnath'),
(141, 'TRFB9D7189', 30, 'Bhairahawa', 'Pokhara', '2017/08/17', 14, '08:00 am', '06:00 pm', '08/25/2017', 'Yogikuti'),
(142, 'RT6F5049F8', 40, 'Pokhara', 'Bhairahawa', '2017/08/17', 8, '07:30 am', '04:00 pm', '08/30/2017', 'Lekhnath'),
(143, 'TR9A1EFBC6', 36, 'Bhairahawa', 'Pokhara', '2017/08/19', 14, '06:30 am', '02:30 pm', '08/25/2017', 'Manigram'),
(144, 'RTAD9B8A30', 41, 'Pokhara', 'Bhairahawa', '2017/08/19', 14, '08:00 am', '04:00 pm', '08/30/2017', 'Lekhnath'),
(145, 'TR20BA84D5', 34, 'Bhairahawa', 'Kathmandu', '2017/08/19', 6, '12:00 pm', '08:00 pm', '08/25/2017', 'Chauraha'),
(146, 'TRFE0A34A5', 35, 'Bhairahawa', 'Pokhara', '2017/08/20', 10, '06:00 am', '02:00 pm', '08/25/2017', 'Butwal Buspark'),
(147, 'RT1F6A61A2', 40, 'Pokhara', 'Bhairahawa', '2017/08/20', 8, '07:30 am', '04:00 pm', '08/30/2017', 'Prithivi Chowk'),
(148, 'TR9439407C', 30, 'Bhairahawa', 'Pokhara', '2017/08/21', 14, '08:00 am', '06:00 pm', '08/25/2017', 'Manigram'),
(149, 'TR3767DB52', 38, 'Bhairahawa', 'Pokhara', '2017/08/21', 7, '08:30 am', '05:30 pm', '08/25/2017', 'Yogikuti'),
(150, 'TR97860F9E', 38, 'Bhairahawa', 'Pokhara', '2017/08/21', 14, '08:30 am', '05:30 pm', '08/25/2017', 'Manigram'),
(151, 'RT60B7EEEB', 41, 'Pokhara', 'Bhairahawa', '2017/08/21', 7, '08:00 am', '04:00 pm', '08/30/2017', 'Lekhnath'),
(152, 'TR152CCB64', 36, 'Bhairahawa', 'Pokhara', '2017/08/22', 7, '06:30 am', '02:30 pm', '08/25/2017', 'Butwal Buspark'),
(153, 'TR5BC80792', 30, 'Bhairahawa', 'Pokhara', '2017/08/23', 14, '08:00 am', '06:00 pm', '08/25/2017', 'Yogikuti'),
(154, 'TR3BC1E43D', 30, 'Bhairahawa', 'Pokhara', '2017/08/23', 14, '08:00 am', '06:00 pm', '08/25/2017', 'Manigram'),
(155, 'RT34DF570E', 40, 'Pokhara', 'Bhairahawa', '2017/08/23', 8, '07:30 am', '04:00 pm', '08/30/2017', 'Lekhnath'),
(156, 'TR44A46770', 35, 'Bhairahawa', 'Pokhara', '2017/08/24', 10, '06:00 am', '02:00 pm', '08/25/2017', 'Yogikuti'),
(157, 'RT01D2ABF1', 39, 'Pokhara', 'Bhairahawa', '2017/08/24', 14, '07:00 am', '03:00 pm', '08/30/2017', 'Lekhnath'),
(159, 'RTC9E17820', 40, 'Pokhara', 'Bhairahawa', '2017/08/25', 8, '07:30 am', '04:00 pm', '08/30/2017', 'Lekhnath'),
(160, 'TR035027BB', 33, 'Butwal', 'Tamghas', '2017/08/25', 1, '09:00 am', '05:00 pm', '08/31/2017', 'Golpark'),
(161, 'RT6A00832A', 29, 'Tamghas', 'Butwal', '2017/08/25', 11, '09:00 am', '04:00 pm', '09/07/2017', 'Tamghas Bazar'),
(162, 'TRF2C7E301', 33, 'Butwal', 'Tamghas', '2017/08/25', 2, '09:00 am', '05:00 pm', '08/31/2017', 'Hospital Line'),
(163, 'RT99F9246A', 29, 'Tamghas', 'Butwal', '2017/08/25', 11, '09:00 am', '04:00 pm', '09/07/2017', 'Tamghas Bazar'),
(164, 'TREF0378DD', 28, 'Kathmandu', 'Kakarbhitta', '2017/08/25', 11, '08:05 am', '07:00 pm', '08/31/2017', 'Kalanki'),
(165, 'RTCED813D4', 0, 'Kakarbhitta', 'Kathmandu', '2017/08/25', 0, '', '', '09/07/2017', ''),
(166, 'TR1F62B94F', 35, 'Bhairahawa', 'Pokhara', '2017/08/25', 10, '06:00 am', '02:00 pm', '08/31/2017', 'Yogikuti'),
(167, 'RT40126010', 39, 'Pokhara', 'Bhairahawa', '2017/08/25', 21, '07:00 am', '03:00 pm', '09/07/2017', 'Lekhnath'),
(168, 'TR8DD638BD', 33, 'Butwal', 'Tamghas', '2017/08/26', 1, '09:00 am', '05:00 pm', '08/31/2017', 'Golpark'),
(169, '', 0, '', '', '2017/08/26', 0, '', '', '', ''),
(170, 'TR4CE9DA6C', 33, 'Butwal', 'Tamghas', '2017/08/26', 2, '09:00 am', '05:00 pm', '08/31/2017', 'Hospital Line'),
(171, '', 0, '', '', '2017/08/26', 0, '', '', '', ''),
(172, 'TR18316A50', 26, 'Butwal', 'Tamghas', '2017/08/26', 1, '06:00 am', '12:00 pm', '08/31/2017', 'Hospital Line'),
(173, 'TRF8A12A5C', 26, 'Butwal', 'Tamghas', '2017/08/26', 2, '06:00 am', '12:00 pm', '08/31/2017', 'Hospital Line'),
(174, 'TRC3BB8F14', 41, 'Bhairahawa', 'Pokhara', '2017/09/17', 7, '08:00 am', '04:00 pm', '09/20/2017', 'Yogikuti'),
(175, 'TR2D194597', 26, 'Butwal', 'Tamghas', '2018/04/26', 2, '06:00 am', '12:00 pm', '04/27/2018', 'Hospital Line');

-- --------------------------------------------------------

--
-- Table structure for table `bus_type`
--

CREATE TABLE `bus_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_type`
--

INSERT INTO `bus_type` (`type_id`, `type_name`) VALUES
(1, 'Non-AC'),
(2, 'Sleeper'),
(3, 'CAB'),
(9, 'Non-sleeper'),
(12, 'Normal'),
(13, 'AC'),
(24, 'Asia');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_details`
--

CREATE TABLE `cancel_details` (
  `id` int(11) NOT NULL,
  `ticket_id` varchar(50) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `page` varchar(10) NOT NULL,
  `pgender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `depart_date` varchar(100) NOT NULL,
  `cancel_date` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `refund` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancel_details`
--

INSERT INTO `cancel_details` (`id`, `ticket_id`, `bus_id`, `pname`, `page`, `pgender`, `email`, `phone`, `depart_date`, `cancel_date`, `amount`, `refund`, `status`) VALUES
(34, 'TRD64C547E', 30, 'MAnan', '12', 'male', 'marina@gmail.com', '9878787877', '08/25/2017', '2017/08/04', 7, '6.3', 'paid'),
(35, 'TRD64C547E', 30, 'Marina', '21', 'female', 'marina@gmail.com', '9878787877', '08/25/2017', '2017/08/04', 7, '6.3', 'paid'),
(37, 'TR8CD81DFE', 34, 'Gautam', '22', 'male', 'gautam@gmail.com', '9817625382', '08/25/2017', '2017/08/06', 2, '1.8', 'paid'),
(38, 'TR71AA43E3', 35, 'samrat shakya', '22', 'male', 'samratshakya5@gmail.com', '9877876644', '08/25/2017', '2017/08/06', 5, '4.5', 'pending'),
(39, 'TR71AA43E3', 35, 'ashish', '22', 'male', 'samratshakya5@gmail.com', '9877876644', '08/25/2017', '2017/08/06', 5, '4.5', 'pending'),
(40, 'TR91848B75', 33, 'shreeya', '6', 'female', 'samratshakya5@gmail.com', '9817433627', '08/25/2017', '2017/08/06', 1, '0.9', 'pending'),
(41, 'TR83801A63', 34, 'bimal', '32', 'male', 'samratshakya12@gmail.com', '9876565432', '08/25/2017', '2017/08/06', 3, '2.7', 'pending'),
(42, 'TR83801A63', 34, 'Manoj', '22', 'male', 'samratshakya12@gmail.com', '9876565432', '08/25/2017', '2017/08/06', 3, '2.7', 'pending'),
(43, 'TR169BBA32', 26, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', '08/09/2017', '2017/08/07', 1, '0.5', 'pending'),
(44, 'TR169BBA32', 26, 'Donub', '22', 'male', 'samratshakya5@gmail.com', '9817433627', '08/09/2017', '2017/08/07', 1, '0.5', 'pending'),
(45, 'TR843FFD2D', 35, 'samrat shakya', '22', 'male', 'samratshakya5@gmail.com', '9817433627', '08/25/2017', '2017/08/08', 5, '4.5', 'pending'),
(46, 'TRA4221E0B', 35, 'samrat', '22', 'male', 'asmitkhadka1129@gmail.com', '9821121211', '08/25/2017', '2017/08/08', 4, '3.6', 'paid'),
(47, 'TRBF82A6A5', 35, 'samrat shakya', '33', 'male', 'samratshakya5@gmail.com', '9817433627', '08/25/2017', '2017/08/09', 5, '4.5', 'pending'),
(48, 'TR2FD11277', 42, 'Samrar', '33', 'male', 'Diren@gmail.com', '9802872222', '08/25/2017', '2017/08/10', 35, '31.5', 'pending'),
(49, 'TR8BF60394', 35, 'sajakja', '22', 'male', 'sajak5a@gmail.com', '9872662622', '08/25/2017', '2017/08/10', 5, '4.5', 'pending'),
(50, 'TR4E027B70', 34, 'sss', '23', 'male', 'samratshakya5@gmail.com', '9807675656', '08/25/2017', '2017/08/11', 3, '2.7', 'paid'),
(51, 'TR4D1122BB', 35, 'sajak', '23', 'male', 'samrsasas5@gmail.com', '9886765765', '08/25/2017', '2017/08/12', 5, '4.5', 'pending'),
(52, 'TRA322431B', 35, 'sajak', '22', 'male', 'samrat.shakya5@gmail.com', '9897897978', '08/25/2017', '2017/08/12', 5, '4.5', 'pending'),
(53, 'TREF65EAA9', 35, 'Dipak Giri', '22', 'male', 'nitish@gmail.com', '9809876773', '08/25/2017', '2017/08/13', 5, '4.5', 'pending'),
(54, 'TRFB9D7189', 30, 'kiref', '44', 'male', 'samratshakya05897@gmail.com', '9807660666', '08/25/2017', '2017/08/17', 7, '6.3', 'pending'),
(55, 'TRBF82A6A5', 35, 'kaka', '22', 'male', 'samratshakya5@gmail.com', '9817433627', '08/25/2017', '2017/08/23', 5, '2.5', 'pending'),
(56, 'TR7BFE9270', 36, 'John Cena', '36', 'male', 'final5@gmail.com', '9812343212', '08/25/2017', '2017/08/25', 7, '0', 'pending'),
(57, 'TRF8A12A5C', 26, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', '08/31/2017', '2017/08/26', 1, '0.75', 'pending'),
(58, 'TR310F0FC6', 35, 'Asmit Khadka', '22', 'male', 'asmitkhadka1129@gmail.com', '9821569889', '08/31/2017', '2017/08/29', 4, '2', 'pending'),
(59, 'TR2D194597', 26, 'binod rana', '22', 'male', 'tara.gurung@nepallink.net', '9840878782', '04/27/2018', '2018/04/26', 1, '0', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `drop_details`
--

CREATE TABLE `drop_details` (
  `id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `dpoint` varchar(100) NOT NULL,
  `dtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drop_details`
--

INSERT INTO `drop_details` (`id`, `route_id`, `dpoint`, `dtime`) VALUES
(1, 25, 'Lekhnath', '30'),
(2, 25, 'Prithivi Chowk', '15'),
(3, 21, 'Gongabu Buspark', '10'),
(4, 21, 'Soyambhu Nath', '20'),
(5, 21, 'Thankot', '60'),
(6, 22, 'Tamghas Bazar', '10'),
(7, 24, 'Kakarbhitta Buspark', '5');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `bus_id` int(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `bus_id`, `image`) VALUES
(39, 25, 'bus2.jpg'),
(42, 24, 'bus4.jpg'),
(43, 26, '18903678-Bus-travel-in-the-mountains-Stock-Vector-bus.jpg'),
(44, 27, 'bus5.jpg'),
(45, 29, 'Daimler-bcg.jpg'),
(46, 28, 'bus2.jpg'),
(47, 30, 'bus4.jpg'),
(49, 32, 'Daimler-bcg.jpg'),
(50, 33, 'bus5.jpg'),
(52, 35, '18903678-Bus-travel-in-the-mountains-Stock-Vector-bus.jpg'),
(53, 41, 'Daimler-bcg.jpg'),
(54, 40, '18903678-Bus-travel-in-the-mountains-Stock-Vector-bus.jpg'),
(55, 39, 'bus5.jpg'),
(56, 38, 'bus3.jpg'),
(57, 37, 'bus1.png'),
(58, 36, 'bus2.jpg'),
(59, 42, 'bus5.jpg'),
(60, 31, '18903678-Bus-travel-in-the-mountains-Stock-Vector-bus.jpg'),
(61, 34, 'Daimler-bcg.jpg'),
(62, 44, 'image-0-02-06-c8348279051ac7251394fb22aa8a292d6bdf0217ad6dfada0e4cebb63013b955-V.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `login_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`login_id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'samrat', 'samrat');

-- --------------------------------------------------------

--
-- Table structure for table `owner_info`
--

CREATE TABLE `owner_info` (
  `owner_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_info`
--

INSERT INTO `owner_info` (`owner_id`, `name`, `address`, `email`, `password`) VALUES
(3, 'Sangam Shakya', 'Butwal', 'sangamshakya@gmail.com', '123'),
(4, 'Gautam Shakya', 'Butwal', 'gautamshakya@gmail.com', '1234'),
(5, 'Ram Shah', 'Palpa', 'ramshah@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `passenger_details`
--

CREATE TABLE `passenger_details` (
  `passenger_id` int(11) NOT NULL,
  `ticket_id` varchar(100) NOT NULL,
  `bus_id` int(50) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `page` varchar(10) NOT NULL,
  `pgender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `seat` varchar(10) NOT NULL,
  `depart_date` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `pickup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger_details`
--

INSERT INTO `passenger_details` (`passenger_id`, `ticket_id`, `bus_id`, `pname`, `page`, `pgender`, `email`, `phone`, `seat`, `depart_date`, `amount`, `pickup`) VALUES
(89, 'TR70AFD2EF', 31, 'Bhuvan Bam', '26', 'male', 'bhuvan@gmail.com', '9898767666', 'B6', '08/25/2017', 32, ''),
(95, 'RTCA55190E', 33, 'Samrat', '22', 'male', 'samratshakya5@gmail.com', '9817433627', 'A23', '08/26/2017', 1, ''),
(98, 'TRC81E98F8', 31, 'Samrat', '22', 'female', 'samratshakya5@gmail.com', '9877665544', 'B16', '08/25/2017', 32, ''),
(99, 'TRDD4DC4E5', 34, 'Saman', '33', 'male', 'saman@gmail.com', '9876567887', 'B1', '08/25/2017', 3, ''),
(101, 'RT311FB973', 25, 'Rabina', '33', 'female', 'saman@gmail.com', '9876567887', 'A1', '08/26/2017', 4, ''),
(102, 'TR9BE4D8C1', 25, 'Saman', '22', 'male', 'saman@gmail.com', '9876567887', 'A5', '08/25/2017', 4, ''),
(103, 'RT5E87CEC7', 25, 'Saman', '33', 'male', 'saman@gmail.com', '9876567887', 'A2', '08/26/2017', 4, ''),
(106, 'RTD5253A9F', 30, 'MAnan', '22', 'male', 'manan@gmail.com', '9817625382', 'A2', '08/26/2017', 7, ''),
(109, 'TRC62B3377', 30, 'Sakar', '43', 'male', 'sakar@gmail.com', '9897867677', 'A2', '08/25/2017', 7, ''),
(112, 'RT0DA3FE46', 35, 'Saman', '22', 'male', 'samratshakya5@gmail.com', '9877876644', 'A5', '08/26/2017', 5, ''),
(113, 'TR01ED20DD', 24, 'Ajay Rana', '25', 'male', 'ajayrana@gmail.com', '9812376542', 'A10', '08/25/2017', 10, ''),
(116, 'RT23B2D7A9', 34, 'Gautam', '21', 'male', 'gautam@gmail.com', '9817625382', 'A14', '08/26/2017', 2, ''),
(117, 'TR83801A63', 34, 'Samrat', '23', 'male', 'samratshakya12@gmail.com', '9876565432', 'A2', '08/25/2017', 3, ''),
(118, 'TR83801A63', 34, 'Ajay', '33', 'male', 'samratshakya12@gmail.com', '9876565432', 'A1', '08/25/2017', 3, ''),
(121, 'RTF6640348', 25, 'Samrat', '22', 'male', 'samratshakya12@gmail.com', '9876565432', 'B1', '08/26/2017', 4, ''),
(122, 'RTF6640348', 25, 'Amita', '22', 'female', 'samratshakya12@gmail.com', '9876565432', 'B2', '08/26/2017', 4, ''),
(123, 'TR75238A92', 25, 'Dinesh', '22', 'male', 'shakya5@gmail.com', '9812345321', 'A8', '08/25/2017', 4, ''),
(124, 'TR90B93226', 31, 'Samrat', '22', 'male', 'samratshakya5@gmail.com', '9812345321', 'A14', '08/25/2017', 32, ''),
(125, 'RT17730851', 25, 'Samrat', '33', 'male', 'samratshakya5@gmail.com', '9812345321', 'A3', '08/26/2017', 4, ''),
(126, 'TR8FE4218F', 34, 'Samrat', '22', 'male', 'samratshakya5@gmail.com', '9812345321', 'B2', '08/25/2017', 3, ''),
(127, 'TR8BD9A7C6', 34, 'Samrat', '22', 'male', 'samratshakya5@gmail.com', '9876756564', 'B11', '08/25/2017', 3, ''),
(128, 'TRE53A78D4', 35, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'B3', '08/25/2017', 5, ''),
(129, 'TR260B970D', 34, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A10', '08/25/2017', 3, ''),
(130, 'RTDB4893A3', 34, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A4', '08/26/2017', 3, ''),
(131, 'TRC527EEC8', 34, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A6', '08/25/2017', 3, ''),
(132, 'TRDF3B65F4', 34, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'B6', '08/25/2017', 3, ''),
(133, 'TRD4311525', 34, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'B3', '08/25/2017', 3, ''),
(134, 'TRC637B27C', 34, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A4', '08/25/2017', 3, ''),
(135, 'RT2C145FD2', 25, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'B3', '08/26/2017', 4, ''),
(136, 'TR06DC0BBB', 35, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A4', '08/25/2017', 5, ''),
(137, 'RT350FCD78', 30, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A7', '08/26/2017', 7, ''),
(139, 'TR843FFD2D', 35, 'Ajay', '22', 'male', 'samratshakya5@gmail.com', '9817433627', 'B2', '08/25/2017', 5, ''),
(140, 'RTA9F512BE', 39, 'samrat shakya', '22', 'male', 'samratshakya5@gmail.com', '9817433627', 'A2', '08/30/2017', 7, ''),
(141, 'RTA9F512BE', 39, 'Amita', '22', 'female', 'samratshakya5@gmail.com', '9817433627', 'A4', '08/30/2017', 7, ''),
(142, 'TRA4221E0B', 35, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'A17', '08/25/2017', 4, ''),
(144, 'RTD6F4BC84', 39, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'A17', '08/30/2017', 6, ''),
(145, 'TR40E609AE', 35, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A10', '08/25/2017', 5, ''),
(146, 'RT7E68197B', 39, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A12', '08/30/2017', 7, ''),
(147, 'TRA6892227', 25, 'samrat shakya', '22', 'male', 'samratshakya5@gmail.com', '9817433627', 'A6', '08/25/2017', 4, ''),
(148, 'TRA6892227', 25, 'sam', '22', 'male', 'samratshakya5@gmail.com', '9817433627', 'A10', '08/25/2017', 4, ''),
(151, 'RT0B929BE3', 39, 'samrat shakya', '44', 'male', 'samratshakya5@gmail.com', '9817433627', 'A14', '08/30/2017', 7, ''),
(152, 'TR2FD11277', 42, 'Direndra', '22', 'male', 'Diren@gmail.com', '9802872222', 'A5', '08/25/2017', 35, ''),
(154, 'RT4DEDC00E', 41, 'Direndra', '22', 'male', 'Diren@gmail.com', '9802872222', 'A7', '08/30/2017', 7, ''),
(155, 'TRBEB427D5', 35, 'yhjdgsh', '28', 'male', 'samratshakya5008@gmail.com', '9873636636', 'A14', '08/25/2017', 5, ''),
(156, 'TRBEB427D5', 35, 'BIkash', '33', 'male', 'samratshakya5008@gmail.com', '9873636636', 'A13', '08/25/2017', 5, ''),
(157, 'RT21B6D50E', 39, 'yhjdgsh', '28', 'male', 'samratshakya5008@gmail.com', '9873636636', 'A16', '08/30/2017', 7, ''),
(158, 'TR62E567C7', 34, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A5', '08/25/2017', 3, ''),
(159, 'TRDBEFE505', 35, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A12', '08/25/2017', 5, ''),
(161, 'TR8BF60394', 35, 'sonub', '33', 'male', 'sajak5a@gmail.com', '9872662622', 'A11', '08/25/2017', 5, ''),
(162, 'RT7A715C85', 39, 'sajakja', '22', 'male', 'sajak5a@gmail.com', '9872662622', 'A13', '08/30/2017', 7, ''),
(163, 'TRD7B06FCC', 35, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'A8', '08/25/2017', 5, ''),
(164, 'TRD7B06FCC', 35, 'Sam', '24', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'A7', '08/25/2017', 5, ''),
(165, 'RTAFE75D70', 39, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'A10', '08/30/2017', 7, ''),
(166, 'RTAFE75D70', 39, 'Bihar', '33', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'A9', '08/30/2017', 7, ''),
(167, 'TR60821467', 35, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'B5', '08/25/2017', 5, ''),
(168, 'TR692FC369', 35, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'B11', '08/25/2017', 5, ''),
(169, 'RTDCFB83F6', 39, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'B12', '08/30/2017', 7, ''),
(170, 'TR5E9DD1A6', 35, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'B6', '08/25/2017', 5, ''),
(171, 'RT01835A9A', 39, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'B7', '08/30/2017', 7, ''),
(172, 'TR4743314D', 31, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'B11', '08/25/2017', 32, 'Nayamill'),
(173, 'TR4743314D', 31, 'Hari Sharma', '22', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'B14', '08/25/2017', 32, 'Nayamill'),
(174, 'RT9279E7F6', 31, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'B12', '08/26/2017', 32, 'Soyambhu Nath'),
(175, 'RT9279E7F6', 31, 'Sita Sharma', '22', 'female', 'asmitkhadka1129@gmail.com', '9821121211', 'B9', '08/26/2017', 32, 'Soyambhu Nath'),
(177, 'TR3557D3A6', 37, 'sajak', '33', 'male', 'samratshakya5@gmail.com', '9876868676', 'A13', '08/25/2017', 8, 'Yogikuti'),
(178, 'TR3557D3A6', 37, 'Samrat', '33', 'male', 'samratshakya5@gmail.com', '9876868676', 'A14', '08/25/2017', 8, 'Yogikuti'),
(179, 'RT6B42E464', 41, 'samrat', '22', 'male', 'samratshakya5@gmail.com', '9876868676', 'A9', '08/30/2017', 7, 'Prithivi Chowk'),
(180, 'TR8F1915B2', 37, 'samajg', '22', 'male', 'samratshakya5@gmail.com', '2276372764', 'A20', '08/25/2017', 8, 'Manigram'),
(181, 'RT9EB4BB9D', 39, 'Hari Lal', '22', 'male', 'samratshakya5@gmail.com', '2276372764', 'A19', '08/30/2017', 7, 'Lekhnath'),
(182, 'TREFFEBDD2', 37, 'Sahraddha', '22', 'female', 'shraddha@gmail.com', '9808766666', 'A7', '08/25/2017', 8, 'Yogikuti'),
(183, 'TREFFEBDD2', 37, 'GAutam', '48', 'male', 'shraddha@gmail.com', '9808766666', 'A8', '08/25/2017', 8, 'Yogikuti'),
(184, 'TREFFEBDD2', 37, 'Sushila', '43', 'female', 'shraddha@gmail.com', '9808766666', 'A5', '08/25/2017', 8, 'Yogikuti'),
(185, 'TREFFEBDD2', 37, 'Sushant', '27', 'male', 'shraddha@gmail.com', '9808766666', 'A6', '08/25/2017', 8, 'Yogikuti'),
(186, 'RTA52217AD', 39, 'sajak', '22', 'male', 'shraddha@gmail.com', '9808766666', 'A11', '08/30/2017', 7, 'Prithivi Chowk'),
(187, 'TR208B8CC7', 37, 'sajak', '22', 'male', 'samratshakyaaa5@gmail.com', '9828288282', 'A10', '08/25/2017', 8, 'Yogikuti'),
(188, 'TR208B8CC7', 37, 'Shreeya Shakya', '18', 'female', 'samratshakyaaa5@gmail.com', '9828288282', 'A15', '08/25/2017', 8, 'Yogikuti'),
(189, 'TR208B8CC7', 37, 'Dipak Gaha', '33', 'male', 'samratshakyaaa5@gmail.com', '9828288282', 'A16', '08/25/2017', 8, 'Yogikuti'),
(190, 'RTF139FB4A', 40, 'sajak', '22', 'male', 'samratshakyaaa5@gmail.com', '9828288282', 'A8', '08/30/2017', 8, 'Prithivi Chowk'),
(191, 'RTF139FB4A', 40, 'Dipak', '22', 'male', 'samratshakyaaa5@gmail.com', '9828288282', 'A7', '08/30/2017', 8, 'Prithivi Chowk'),
(193, 'RTCB3444CA', 39, 'Sahraddha', '66', 'female', 'samrat.shakya5@gmail.com', '9897897978', 'A18', '08/30/2017', 7, 'Prithivi Chowk'),
(194, 'TREF65EAA9', 35, 'Nitish Raj', '34', 'female', 'nitish@gmail.com', '9809876773', 'A1', '08/25/2017', 5, 'Yogikuti'),
(196, 'RT7696A432', 39, 'Nitish Raj', '34', 'female', 'nitish@gmail.com', '9809876773', 'A8', '08/30/2017', 7, 'Prithivi Chowk'),
(197, 'RT7696A432', 39, 'Dipak Giri', '23', 'male', 'nitish@gmail.com', '9809876773', 'A6', '08/30/2017', 7, 'Prithivi Chowk'),
(198, 'TR2B16DC0D', 38, 'sajak', '30', 'male', 'sajakt@gmail.com', '9807668666', 'A9', '08/25/2017', 7, 'Yogikuti'),
(199, 'TR2B16DC0D', 38, 'Samrat', '34', 'male', 'sajakt@gmail.com', '9807668666', 'A10', '08/25/2017', 7, 'Yogikuti'),
(200, 'RTE82FB038', 41, 'sajak', '30', 'male', 'sajakt@gmail.com', '9807668666', 'A8', '08/30/2017', 7, 'Lekhnath'),
(201, 'TR9434A60D', 38, 'sajak', '30', 'male', 'sajakt@gmail.com', '9807668666', 'A11', '08/25/2017', 7, 'Yogikuti'),
(202, 'TR9434A60D', 38, 'Samrat', '33', 'male', 'sajakt@gmail.com', '9807668666', 'A13', '08/25/2017', 7, 'Yogikuti'),
(203, 'TR9434A60D', 38, 'viveek', '33', 'male', 'sajakt@gmail.com', '9807668666', 'A15', '08/25/2017', 7, 'Yogikuti'),
(204, 'RT4BB0F1BB', 39, 'sajak', '30', 'male', 'sajakt@gmail.com', '9807668666', 'B15', '08/30/2017', 7, 'Prithivi Chowk'),
(205, 'TR0943B8AD', 36, 'sajak', '30', 'male', 'sajakt@gmail.com', '9807668666', 'A10', '08/25/2017', 7, 'Yogikuti'),
(206, 'TR0943B8AD', 36, 'bhairav', '33', 'male', 'sajakt@gmail.com', '9807668666', 'A11', '08/25/2017', 7, 'Yogikuti'),
(207, 'RTE0DF6288', 40, 'sajak', '30', 'male', 'sajakt@gmail.com', '9807668666', 'A5', '08/30/2017', 8, 'Lekhnath'),
(208, 'TR6EE23D81', 35, 'Ankit', '33', 'male', 'ankit@gmail.com', '9808730077', 'B10', '08/25/2017', 5, 'Yogikuti'),
(209, 'TR6EE23D81', 35, 'Samrta', '33', 'male', 'ankit@gmail.com', '9808730077', 'B7', '08/25/2017', 5, 'Yogikuti'),
(210, 'RTED5CE458', 39, 'Ankit', '33', 'male', 'ankit@gmail.com', '9808730077', 'A15', '08/30/2017', 7, 'Prithivi Chowk'),
(211, 'TRA7E618A5', 35, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A15', '08/25/2017', 5, 'Manigram'),
(212, 'TRA7E618A5', 35, 'Binod rana', '26', 'male', 'samratshakya5@gmail.com', '9817433627', 'A16', '08/25/2017', 5, 'Manigram'),
(213, 'RT90E02E16', 39, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'B13', '08/30/2017', 7, 'Prithivi Chowk'),
(214, 'TRD87BE211', 35, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'B9', '08/25/2017', 5, 'Butwal Buspark'),
(215, 'TRD87BE211', 35, 'Dipak Giri', '33', 'male', 'samratshakya5@gmail.com', '9817433627', 'B12', '08/25/2017', 5, 'Butwal Buspark'),
(216, 'RT4278D29B', 42, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A10', '08/30/2017', 35, 'Prithivi Chowk'),
(217, 'TR1CECD715', 30, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A6', '08/25/2017', 7, 'Yogikuti'),
(218, 'TR1CECD715', 30, 'kiran rana', '44', 'female', 'samratshakya5@gmail.com', '9817433627', 'A7', '08/25/2017', 7, 'Yogikuti'),
(219, 'RTBF1FAB6A', 42, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A1', '08/30/2017', 35, 'Lekhnath'),
(221, 'TRFB9D7189', 30, 'john cena', '44', 'male', 'samratshakya05897@gmail.com', '9807660666', 'A5', '08/25/2017', 7, 'Yogikuti'),
(222, 'RT6F5049F8', 40, 'kiref', '44', 'male', 'samratshakya05897@gmail.com', '9807660666', 'A13', '08/30/2017', 8, 'Lekhnath'),
(223, 'TR9A1EFBC6', 36, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A5', '08/25/2017', 7, 'Manigram'),
(224, 'TR9A1EFBC6', 36, 'Manish', '22', 'male', 'samratshakya5@gmail.com', '9817433627', 'A3', '08/25/2017', 7, 'Manigram'),
(225, 'RTAD9B8A30', 41, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A1', '08/30/2017', 7, 'Lekhnath'),
(226, 'RTAD9B8A30', 41, 'Binod Rana', '22', 'male', 'samratshakya5@gmail.com', '9817433627', 'A2', '08/30/2017', 7, 'Lekhnath'),
(227, 'TR20BA84D5', 34, 'samrat shakya', '21', 'male', 'samratshakya5@gmail.com', '9817433627', 'A19', '08/25/2017', 3, 'Chauraha'),
(228, 'TR20BA84D5', 34, 'Good Boy', '33', 'male', 'samratshakya5@gmail.com', '9817433627', 'A18', '08/25/2017', 3, 'Chauraha'),
(229, 'TRFE0A34A5', 35, 'Hemraj', '33', 'male', 'hemraj5@gmail.com', '9809877667', 'B14', '08/25/2017', 5, 'Butwal Buspark'),
(230, 'TRFE0A34A5', 35, 'sasasasss', '33', 'male', 'hemraj5@gmail.com', '9809877667', 'B16', '08/25/2017', 5, 'Butwal Buspark'),
(231, 'RT1F6A61A2', 40, 'Hemraj', '33', 'male', 'hemraj5@gmail.com', '9809877667', 'A11', '08/30/2017', 8, 'Prithivi Chowk'),
(232, 'TR9439407C', 30, 'Hemraj', '33', 'male', 'hemraj5@gmail.com', '9809877667', 'B8', '08/25/2017', 7, 'Manigram'),
(233, 'TR9439407C', 30, 'Fukkrey', '44', 'male', 'hemraj5@gmail.com', '9809877667', 'B3', '08/25/2017', 7, 'Manigram'),
(234, 'TR3767DB52', 38, 'Manoj ', '22', 'male', 'sajak5a@gmail.com', '9876544333', 'B5', '08/25/2017', 7, 'Yogikuti'),
(235, 'TR97860F9E', 38, 'Dipak Kumar', '33', 'male', 'dipak@gmail.com', '9890987666', 'B3', '08/25/2017', 7, 'Manigram'),
(236, 'TR97860F9E', 38, 'Huma Rana', '33', 'female', 'dipak@gmail.com', '9890987666', 'B6', '08/25/2017', 7, 'Manigram'),
(237, 'RT60B7EEEB', 41, 'Dipak Kumar', '33', 'male', 'dipak@gmail.com', '9890987666', 'A10', '08/30/2017', 7, 'Lekhnath'),
(238, 'TR152CCB64', 36, 'Sanjila Shakya', '30', 'female', 'sanjila@gmail.com', '9802772728', 'A18', '08/25/2017', 7, 'Butwal Buspark'),
(239, 'TR5BC80792', 30, 'Dipak Kumar', '32', 'male', 'samratshakya5@gmail.com', '9809876522', 'A14', '08/25/2017', 7, 'Yogikuti'),
(240, 'TR5BC80792', 30, 'Tilak GC', '34', 'male', 'samratshakya5@gmail.com', '9809876522', 'A16', '08/25/2017', 7, 'Yogikuti'),
(241, 'TR3BC1E43D', 30, 'JohnCena', '22', 'male', 'final5@gmail.com', '6456456454', 'B9', '08/25/2017', 7, 'Manigram'),
(242, 'TR3BC1E43D', 30, 'Hari LAL', '33', 'male', 'final5@gmail.com', '6456456454', 'B12', '08/25/2017', 7, 'Manigram'),
(243, 'RT34DF570E', 40, 'JohnCena', '22', 'male', 'final5@gmail.com', '6456456454', 'A14', '08/30/2017', 8, 'Lekhnath'),
(244, 'TR44A46770', 35, 'JohnCena', '25', 'male', 'final5@gmail.com', '6456456454', 'B8', '08/25/2017', 5, 'Yogikuti'),
(245, 'TR44A46770', 35, 'cccccccc', '22', 'male', 'final5@gmail.com', '6456456454', 'B1', '08/25/2017', 5, 'Yogikuti'),
(246, 'RT01D2ABF1', 39, 'JohnCena', '22', 'male', 'final5@gmail.com', '6456456454', 'B8', '08/30/2017', 7, 'Lekhnath'),
(247, 'RT01D2ABF1', 39, 'Samera', '22', 'female', 'final5@gmail.com', '6456456454', 'B5', '08/30/2017', 7, 'Lekhnath'),
(249, 'RTC9E17820', 40, 'John Cena', '36', 'male', 'final5@gmail.com', '9812343212', 'B12', '08/30/2017', 8, 'Lekhnath'),
(250, 'TR035027BB', 33, 'John Cena', '36', 'male', 'final5@gmail.com', '9812343212', 'A18', '08/31/2017', 1, 'Golpark'),
(251, 'RT6A00832A', 29, 'John Cena', '36', 'male', 'final5@gmail.com', '9812343212', 'B9', '09/07/2017', 11, 'Tamghas Bazar'),
(252, 'TRF2C7E301', 33, 'John Cena', '36', 'male', 'final5@gmail.com', '9812343212', 'A19', '08/31/2017', 1, 'Hospital Line'),
(253, 'TRF2C7E301', 33, 'Hero Raj', '33', 'male', 'final5@gmail.com', '9812343212', 'A17', '08/31/2017', 1, 'Hospital Line'),
(254, 'RT99F9246A', 29, 'John Cena', '36', 'male', 'final5@gmail.com', '9812343212', 'B8', '09/07/2017', 11, 'Tamghas Bazar'),
(255, 'TREF0378DD', 28, 'John Cena', '36', 'male', 'final5@gmail.com', '9812343212', 'B17', '08/31/2017', 11, 'Kalanki'),
(256, 'TR1F62B94F', 35, 'John Cena', '36', 'male', 'final5@gmail.com', '9812343212', 'B5', '08/31/2017', 5, 'Yogikuti'),
(257, 'TR1F62B94F', 35, 'Gita Rana', '33', 'female', 'final5@gmail.com', '9812343212', 'B3', '08/31/2017', 5, 'Yogikuti'),
(258, 'RT40126010', 39, 'John Cena', '36', 'male', 'final5@gmail.com', '9812343212', 'A13', '09/07/2017', 7, 'Lekhnath'),
(259, 'RT40126010', 39, 'Sita Rana', '33', 'female', 'final5@gmail.com', '9812343212', 'A14', '09/07/2017', 7, 'Lekhnath'),
(260, 'RT40126010', 39, 'samrat', '22', 'male', 'final5@gmail.com', '9812343212', 'A12', '09/07/2017', 7, 'Lekhnath'),
(261, 'TR8DD638BD', 33, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'B11', '08/31/2017', 1, 'Golpark'),
(262, 'TR4CE9DA6C', 33, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'A12', '08/31/2017', 1, 'Hospital Line'),
(263, 'TR4CE9DA6C', 33, 'Gita Rana', '33', 'female', 'asmitkhadka1129@gmail.com', '9821121211', 'A11', '08/31/2017', 1, 'Hospital Line'),
(264, 'TR18316A50', 26, 'Asmit Khadka', '21', 'male', 'asmitkhadka1129@gmail.com', '9821121211', 'A12', '08/31/2017', 1, 'Hospital Line'),
(266, 'TRF8A12A5C', 26, 'Sanjay', '25', 'male', 'samratshakya5@gmail.com', '9817433627', 'A7', '08/31/2017', 1, 'Hospital Line'),
(267, 'TRC3BB8F14', 41, 'ashish', '22', 'male', 'samratshakya5@gmail.com', '9817655252', 'A17', '09/20/2017', 7, 'Yogikuti'),
(268, 'TR2D194597', 26, 'Dipesh', '32', 'male', 'tara.gurung@nepallink.net', '9840878782', 'A11', '04/27/2018', 1, 'Hospital Line');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_details`
--

CREATE TABLE `pickup_details` (
  `id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `pickup_point` varchar(100) NOT NULL,
  `pickup_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickup_details`
--

INSERT INTO `pickup_details` (`id`, `route_id`, `pickup_point`, `pickup_time`) VALUES
(2, 25, 'Manigram', '30'),
(4, 25, 'Yogikuti', '45'),
(5, 21, 'Nayamill', '15'),
(6, 21, 'Chauraha', '60'),
(7, 25, 'Butwal Buspark', '60'),
(8, 22, 'Hospital Line', '20'),
(9, 22, 'Golpark', '30'),
(11, 22, 'Dobhan', '40'),
(12, 24, 'Gongabu Buspark', '10'),
(13, 24, 'Kalanki', '20'),
(14, 26, 'sorahkhutte', '7');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rate_id` int(11) NOT NULL,
  `membermail` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `busid` int(11) NOT NULL,
  `punc` int(11) NOT NULL,
  `busq` int(11) NOT NULL,
  `ratesb` int(11) NOT NULL,
  `description` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `average` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rate_id`, `membermail`, `busid`, `punc`, `busq`, `ratesb`, `description`, `average`) VALUES
(10, 'samratshakya5@gmail.com', 42, 4, 2, 4, 'good!', 3),
(11, 'samratshakya5@gmail.com', 35, 5, 2, 3, 'excellent', 3.33333),
(15, 'samratshakya5@gmail.com', 39, 4, 2, 3, ' positives staff', 3),
(17, 'samratshakya5@gmail.com', 30, 4, 5, 5, 'Excellent', 4.66667),
(18, 'samratshakya5@gmail.com', 37, 5, 3, 5, 'Good!', 4.33333),
(19, 'samratshakya5@gmail.com', 34, 2, 4, 5, 'Good!', 3.66667),
(20, 'samratshakya5@gmail.com', 25, 5, 3, 4, 'Good!', 4),
(21, 'samratshakya5@gmail.com', 31, 5, 2, 4, 'Good!', 3.66667),
(22, 'samratshakya5@gmail.com', 36, 3, 5, 5, 'Better service but Bus delay!', 4.33333),
(23, 'asmitkhadka1129@gmail.com', 35, 4, 3, 2, 'Good but staff is rude!', 3),
(24, 'asmitkhadka1129@gmail.com', 31, 5, 3, 2, 'Cool service!', 3.33333),
(25, 'samratshakya5@gmail.com', 33, 4, 5, 5, 'Excellent from past!', 4.66667),
(26, 'samratshakya05897@gmail.com', 40, 5, 3, 3, 'Good!', 3.66667),
(27, 'final5@gmail.com', 40, 3, 4, 4, 'That was a very nice experience to me. Here after I always book this service only. Only thing while booking destination shows lots of places, but finally it stopped at Madiwala itself.', 3.66667),
(28, 'final5@gmail.com', 30, 5, 2, 3, 'This experience is really amazing and would like to continue this relation of strong professional network and improve upon further on their services by adding some points and offers for regular commuters. Keep up this good work.', 3.33333),
(32, 'final5@gmail.com', 35, 4, 4, 3, 'Good Service :) But please keep your bus clean :(  ☹️', 3.66667),
(33, 'final5@gmail.com', 39, 4, 3, 1, 'Good But staff is rude ????', 2.66667),
(34, 'final5@gmail.com', 33, 3, 4, 3, 'Bus interior is very good and the seats are comfortable. Very well organized for pick up, making announcements. Bus was very punctual at starting point and final destination.', 3.33333),
(35, 'final5@gmail.com', 29, 5, 3, 4, 'The service was on time and was very punctual. The cleanliness and the bus was on boarding staff were efficient. Would be my first priority of travels for the overall service.', 4),
(36, 'final5@gmail.com', 28, 3, 4, 3, 'I traveled first time on Parveen travels. I really like the service. Specially the announcement and snacks makes it more professional.', 3.33333),
(37, 'samratshakya5@gmail.com', 41, 4, 3, 2, 'fine!!', 3),
(38, 'samratshakya5@gmail.com', 41, 4, 3, 2, 'fine!!', 3);

-- --------------------------------------------------------

--
-- Table structure for table `route_details`
--

CREATE TABLE `route_details` (
  `route_id` int(11) NOT NULL,
  `fplace` varchar(30) NOT NULL,
  `tplace` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route_details`
--

INSERT INTO `route_details` (`route_id`, `fplace`, `tplace`) VALUES
(21, 'Bhairahawa', 'Kathmandu'),
(22, 'Butwal', 'Tamghas'),
(23, 'Pokhara ', 'Jomsom'),
(24, 'Kathmandu', 'Kakarbhitta'),
(25, 'Bhairahawa', 'Pokhara'),
(26, 'Butwal', 'Janakpur');

-- --------------------------------------------------------

--
-- Table structure for table `seat_layout`
--

CREATE TABLE `seat_layout` (
  `seat_id` int(11) NOT NULL,
  `bus_id` int(100) NOT NULL,
  `total_seat` int(20) NOT NULL,
  `frow` int(10) NOT NULL,
  `lrow` int(10) NOT NULL,
  `layout` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_layout`
--

INSERT INTO `seat_layout` (`seat_id`, `bus_id`, `total_seat`, `frow`, `lrow`, `layout`) VALUES
(5, 27, 37, 4, 5, 4),
(6, 26, 33, 2, 5, 4),
(7, 29, 29, 2, 5, 4),
(10, 24, 44, 3, 5, 5),
(11, 25, 37, 4, 5, 5),
(12, 31, 37, 3, 5, 5),
(13, 28, 45, 2, 5, 5),
(14, 32, 33, 3, 3, 5),
(15, 33, 36, 3, 5, 4),
(16, 34, 37, 2, 5, 5),
(17, 35, 33, 2, 5, 5),
(18, 30, 33, 2, 5, 5),
(19, 41, 31, 2, 5, 5),
(20, 40, 35, 2, 5, 5),
(21, 39, 35, 2, 5, 5),
(22, 38, 35, 2, 5, 4),
(23, 37, 43, 2, 5, 5),
(24, 36, 39, 2, 5, 5),
(25, 42, 35, 2, 5, 5),
(26, 44, 37, 3, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(5) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `age`, `address`, `phone`, `gender`, `email`, `password`, `confirm_password`) VALUES
(1, 'samrat shakya', '21', 'Butwal', '9817433627', 'male', 'samratshakya5@gmail.com', 'shreeya36', 'shreeya36'),
(2, 'Asmit Khadka', '21', 'Palpa', '9821121211', 'male', 'asmitkhadka1129@gmail.com', '123456', '123456'),
(3, 'Manish Rana', '22', 'Butwal', '9817222211', '0', 'manizkou@gmail.com', '123456', '123456'),
(4, 'Ajay Rana', '25', 'Kathmandu', '9812376542', 'male', 'ajayrana@gmail.com', '123456', '123456'),
(5, 'samrat shakya', '22', 'sasasaa', '9877876644', 'male', 'sangamshakya100@gmail.com', 'sssssss', 'sssssss'),
(6, '0', '22', 'butwal ', '9817656555', 'male', 'aka@gmail.com', '989898', '989898'),
(7, 'sakaka', '22', 'butwal ', '9817447999', 'female', 'saa5@gmail.com', 'sasasa', 'sasasa'),
(16, 'sakaka', '33', 'butwal ', '9898989889', 'male', 'mshakya5@gmail.com', 'ssssss', 'ssssss'),
(17, 'samrat', '44', 'butwal', '9817447999', 'male', 'shakya5@gmail.com', 'ssssss', 'ssssss'),
(18, 'samrat', '22', 'Kathmandu', '9898989898', 'male', 'samrat@gmail.com', '111111', '111111'),
(19, 'sakaka', '22', 'Butwal', '9817447990', 'male', 'sam5@gmail.com', '111233', '111233'),
(20, 'sasasas', '33', 'Butwal', '9807777777', 'male', 'samra@gmail.com', 'ssssss', 'ssssss'),
(21, 'samrat', '33', 'Butwal', '9817447989', 'male', 'samra25@gmail.com', '222222', '222222'),
(22, 'samrat', '55', 'ggdgdg', '9817447998', 'male', 'samratshakya55@gmail.com', 'ssssss', 'ssssss'),
(23, 'sas222', '22', 'Butwal', '9898989890', 'male', 'samasasrat@gmail.com', '989898', '989898'),
(24, 'frfrfrf', '99', 'huuhu', '9817446555', 'male', 'atshakya5@gmail.com', 'sasasa', 'sasasa'),
(25, 'dedd', '55', 'gtgtgt', '9088786767', 'male', 'saatshakya5@gmail.com', 'ssssss', 'ssssss'),
(26, 'sakaka', '33', 'dsdsd', '3223424234', 'male', 'asmiadka1129@gmail.com', 'ssssss', 'ssssss'),
(27, 'sakakasas', '32', 'gdgds', '9867865756', 'male', 'samratsha5@gmail.com', 'ssssss', 'ssssss'),
(28, 'sasasasas', '32', 'sasasa', '3423423423', 'male', 'sashkya5@gmail.com', 'ssssss', 'ssssss'),
(29, 'sasas', '33', 'fdsfsdf', '9889897867', 'male', 'samsasarat@gmail.com', 'ssssssa', 'ssssssa'),
(30, 'samrat', '32', 'dsvsdv', '9876765654', 'male', 'samsaasdasarat@gmail.com', 'ssssss', 'ssssss'),
(31, 'dasda', '23', 'sasasa', '2323232323', 'male', 'samratkya5@gmail.com', 'ssssss', 'ssssss'),
(32, 'sasasas', '21', 'asasa', '3433534534', 'male', 'samratkyssa5@gmail.com', 'ssssss', 'ssssss'),
(33, 'kane', '46', 'usae', '9876543445', 'male', 'samratshakyasasa5@gmail.com', 'ssssss', 'ssssss'),
(34, 'sasas', '11', 'sasasa', '2312312312', 'male', 'samratshssakya5@gmail.com', 'ssssss', 'ssssss'),
(35, 'sakakasas', '22', 'adaadasd', '4234242223', 'male', 'samratshakya2225@gmail.com', 'ssssss', 'ssssss'),
(36, 'John Cena', '36', 'sdsadas', '9812343212', 'male', 'final5@gmail.com', 'qqqqqq', 'qqqqqq'),
(37, 'rokaka', '44', 'Kymhgg', '9865443333', 'male', 'samratshakya509@gmail.com', 'aaaaaa', 'aaaaaa'),
(38, 'sasas', '25', 'sdasdd', '9768657564', 'male', 'samratshakya587@gmail.com', 'ssssss', 'ssssss'),
(39, 'thankgod', '22', 'asasasa', '9807767565', 'male', 'samratshakya35@gmail.com', 'ssssss', 'ssssss'),
(40, 'Thisisit', '33', 'vsdss', '9856454534', 'female', 'samratshakya05@gmail.com', 'ssssss', 'ssssss'),
(41, 'Direndra', '22', 'Butwal', '9802872222', 'male', 'Diren@gmail.com', '123456', '123456'),
(42, 'yhjdgsh', '28', 'Butwal', '9873636636', 'male', 'samratshakya5008@gmail.com', 'ssssss', 'ssssss'),
(43, 'sajakja', '22', 'Butwal', '9872662622', 'male', 'sajak5a@gmail.com', '999999', '999999'),
(44, 'ashok', '22', 'Butwal', '9807662666', 'male', 'samr@gmail.com', 'ssssss', 'ssssss'),
(45, 'asmit', '42', 'Butwal', '9807665656', 'male', 'asmit@gmail.com', 'ssssss', 'ssssss'),
(46, 'asadasd', '43', 'sasmsada', '3242342342', 'male', 'sad@gmail.com', 'ssssss', 'ssssss'),
(47, 'sasssa', '22', 'Butwal', '3234353453', 'male', 'samratschakya5@gmail.com', 'ssssss', 'ssssss'),
(48, 'sasasaasa', '26', 'Butwal', '2355345453', 'female', 'samratshavkya5@gmail.com', 'ssssss', 'ssssss'),
(49, 'shreeya', '22', 'Butwal', '9867676756', 'female', 'shreeya@gmail.com', 'ssssss', 'ssssss'),
(50, 'sasa', '22', 'sasmsada', '5345456456', 'male', 'samrasstshakya5@gmail.com', 'ssssss', 'ssssss'),
(51, 'samrat', '27', 'Butwal', '3333333333', 'male', 'samratshcrya5@gmail.com', 'ssssss', 'ssssss'),
(52, 'dondon', '34', 'Butwal', '2323232323', 'male', 'samratshasakya5@gmail.com', 'ssssss', 'ssssss'),
(53, 'testr', '22', 'Butwal', '9856444432', 'male', 'ssamratshakya5@gmail.com', 'ssssss', 'ssssss'),
(54, 'samrat', '33', 'Butwal', '9876654544', 'male', 'qsamratshakya5@gmail.com', 'ssssss', 'ssssss'),
(55, 'Ashish', '33', 'Butwal', '9812653877', 'male', 'ashish@gmail.com', 'ssssss', 'ssssss'),
(56, 'Sanjay', '22', 'Golpark', '9807652772', 'male', 'sanjay@gmail.com', 'ssssss', 'ssssss'),
(57, 'akash', '33', 'Butwal', '9812212121', 'male', 'akash5@gmail.com', 'ssssss', 'ssssss'),
(58, 'sajak', '25', 'Butwal', '9823342342', 'male', 'sasa5@gmail.com', 'ssssss', 'ssssss'),
(59, 'sajak', '23', 'Butwal', '9886765765', 'male', 'samrsasas5@gmail.com', 'ssssss', 'ssssss'),
(60, 'sajak', '24', 'Butwal', '9807656555', 'male', 'samratshakyaa5@gmail.com', 'ssssss', 'ssssss'),
(61, 'sajak', '29', 'Butwal', '9807656666', 'male', 'samratstha@gmail.com', 'ssssss', 'ssssss'),
(62, 'sajak', '22', 'Butwal', '9828288282', 'male', 'samratshakyaaa5@gmail.com', 'ssssss', 'ssssss'),
(63, 'samar', '28', 'Sukkhanagar', '9876554323', 'male', 'sajakshk@gmail.com', 'sssssss', 'sssssss'),
(64, 'shreeya', '20', 'butwal', '9808877770', 'male', 'sajak5@gmail.com', 'ssssss', 'ssssss'),
(65, 'sajak', '70', 'Butwal', '9800087676', 'male', 'amratshakya5@gmail.com', 'ssssss', 'ssssss'),
(66, 'Sarah', '23', 'Butwal', '9087677770', 'male', 's.samrat@gmail.com', 'sssssss', 'sssssss'),
(67, 'Sarah shakya', '32', 'sukkhanagar', '9808787663', 'male', 'a.samrat@gmail.com', 'ssssss', 'ssssss'),
(68, 'Prakriti Dahal', '34', 'Butwal', '9807877888', 'female', 'prakriti@gmail.com', 'ssssss', 'ssssss'),
(69, 'Nitish Raj', '34', 'Butwal', '9809876773', 'female', 'nitish@gmail.com', 'ssssss', 'ssssss'),
(70, 'Govind', '33', 'Butwal', '9807663666', 'male', 'govind@gmail.com', 'ssssss', 'ssssss'),
(71, 'Dipak Rana', '23', 'Butwal', '9807660666', 'male', 'dipak@gmail.com', 'ssssss', 'ssssss'),
(72, 'sajak', '30', 'Butwal', '9807668666', 'male', 'sajakt@gmail.com', 'ssssss', 'ssssss'),
(73, 'Ankit', '33', 'Butwal', '9808730077', 'male', 'ankit@gmail.com', 'ssssss', 'ssssss'),
(74, 'manish', '22', 'belbas', '9828288282', 'male', 'sd@gmail.coma', 'asasas', 'asasas'),
(75, 'Durbha', '50', 'Butwal', '9802772728', 'male', 'samratshakya598@gmail.com', 'ssssss', 'ssssss'),
(76, 'samrat', '33', 'Butwal', '9807660666', 'male', 'samrat.shakyaaa5@gmail.com', 'sssssss', 'sssssss'),
(77, 'Dipak Rijal', '23', 'Butwal', '9808477888', 'male', 'dipak.rijal@gmail.com', 'ssssss', 'ssssss'),
(78, 'sajak', '20', 'Butwal', '4353053445', 'male', 'samratshakya5098@gmail.com', 'sssssss', 'sssssss'),
(79, 'sasas', '23', 'Butwal', '9083888383', 'male', 'samratshakya500@gmail.com', 'ssssss', 'ssssss'),
(80, 'kiref', '44', 'Butwal', '9807660666', 'male', 'samratshakya05897@gmail.com', 'ssssss', 'ssssss'),
(81, 'mahesh', '22', 'Butwal', '9847384015', 'male', 'maheshbelbase32@gmail.com', 'mahesh12', 'mahesh12'),
(82, 'Gita', '39', 'Butwal', '7665756755', 'female', 'gita@gmail.com', 'ssssss', 'ssssss'),
(83, 'sajak', '33', 'Butwal', '5645645646', 'male', 'asamratshakya5@gmail.com', 'ssssss', 'ssssss'),
(84, 'fakir', '23', 'Butwal', '9808877777', 'male', 'fakir@gmail.com', 'ssssss', 'ssssss'),
(85, 'saas', '34', 'Butwal', '2343242342', 'male', 'samratshakya50033@gmail.com', 'ssssss', 'ssssss'),
(86, 'Hemraj', '33', 'Butwal', '9809877667', 'male', 'hemraj5@gmail.com', 'ssssss', 'ssssss'),
(87, 'Sanjila Shakya', '30', 'Butwal', '9802772728', 'female', 'sanjila@gmail.com', 'ssssss', 'ssssss'),
(88, 'gautam', '23', 'Butwal', '9809865655', 'male', 'gtmaryal11@gmail.com', 'ssssss', 'ssssss'),
(89, 'Birendra Gurung', '22', 'Butwal', '9819412342', 'male', 'birendragurung007@gmail.com', 'password', 'password'),
(90, 'Biraj rana', '66', 'Butwal', '9876767654', 'male', 'samratshakya511@gmail.com', 'ssssss', 'ssssss');

-- --------------------------------------------------------

--
-- Table structure for table `temp_data`
--

CREATE TABLE `temp_data` (
  `temp_id` int(11) NOT NULL,
  `busid` varchar(10) NOT NULL,
  `tempseat` varchar(100) NOT NULL,
  `c_date` varchar(20) NOT NULL,
  `c_time` int(11) NOT NULL,
  `passmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_data`
--

INSERT INTO `temp_data` (`temp_id`, `busid`, `tempseat`, `c_date`, `c_time`, `passmail`) VALUES
(392, '30', 'B16', '2017/08/23', 1503498595, 'final5@gmail.com'),
(393, '36', 'A14', '2017/08/24', 1503588744, 'final5@gmail.com'),
(394, '36', 'A13', '2017/08/24', 1503588744, 'final5@gmail.com'),
(395, '36', 'A14', '2017/08/24', 1503588985, 'final5@gmail.com'),
(396, '36', 'A13', '2017/08/24', 1503588985, 'final5@gmail.com'),
(397, '25', 'B14', '2017/08/24', 1503590589, 'final5@gmail.com'),
(398, '25', 'B11', '2017/08/24', 1503590589, 'final5@gmail.com'),
(399, '36', 'B20', '2017/08/24', 1503590656, 'final5@gmail.com'),
(400, '36', 'B18', '2017/08/24', 1503590656, 'final5@gmail.com'),
(401, '40', 'B15', '2017/08/24', 1503590709, 'final5@gmail.com'),
(402, '40', 'A19', '2017/08/24', 1503590709, 'final5@gmail.com'),
(403, '36', 'B15', '2017/08/24', 1503591114, 'samrat@gmail.com'),
(404, '36', 'B15', '2017/08/24', 1503591218, 'samrat@gmail.com'),
(405, '30', 'B14', '2017/08/24', 1503591264, 'final5@gmail.com'),
(406, '30', 'B11', '2017/08/24', 1503591264, 'final5@gmail.com'),
(407, '40', 'B14', '2017/08/24', 1503591285, 'final5@gmail.com'),
(408, '40', 'B12', '2017/08/24', 1503591286, 'final5@gmail.com'),
(409, '36', 'B15', '2017/08/24', 1503591301, 'samrat@gmail.com'),
(411, '30', 'B1', '2017/08/24', 1503591825, 'final5@gmail.com'),
(412, '30', 'A11', '2017/08/24', 1503591971, 'final5@gmail.com'),
(413, '30', 'A9', '2017/08/24', 1503591971, 'final5@gmail.com'),
(414, '40', 'A4', '2017/08/24', 1503592056, 'final5@gmail.com'),
(415, '30', 'B16', '2017/08/24', 1503592087, 'samrat@gmail.com'),
(416, '40', 'A19', '2017/08/24', 1503592217, 'samrat@gmail.com'),
(417, '38', 'A4', '2017/08/24', 1503592530, 'final5@gmail.com'),
(418, '38', 'A6', '2017/08/24', 1503592530, 'final5@gmail.com'),
(419, '40', 'B13', '2017/08/24', 1503592555, 'final5@gmail.com'),
(420, '38', 'B8', '2017/08/24', 1503592590, 'samrat@gmail.com'),
(421, '30', 'B14', '2017/08/24', 1503593094, 'final5@gmail.com'),
(422, '30', 'B11', '2017/08/24', 1503593094, 'final5@gmail.com'),
(423, '40', 'B18', '2017/08/24', 1503593104, 'final5@gmail.com'),
(424, '40', 'B12', '2017/08/24', 1503593124, 'final5@gmail.com'),
(425, '40', 'B18', '2017/08/24', 1503593124, 'final5@gmail.com'),
(426, '30', 'A10', '2017/08/24', 1503593243, 'final5@gmail.com'),
(427, '35', 'B8', '2017/08/24', 1503593508, 'final5@gmail.com'),
(428, '35', 'B1', '2017/08/24', 1503593508, 'final5@gmail.com'),
(429, '39', 'B8', '2017/08/24', 1503593519, 'final5@gmail.com'),
(430, '39', 'B5', '2017/08/24', 1503593519, 'final5@gmail.com'),
(431, '35', 'B13', '2017/08/24', 1503593647, 'final5@gmail.com'),
(432, '39', 'B18', '2017/08/24', 1503593660, 'final5@gmail.com'),
(433, '36', 'A2', '2017/08/24', 1503597302, 'final5@gmail.com'),
(434, '36', 'B8', '2017/08/25', 1503626635, 'samratshakya5@gmail.com'),
(435, '36', 'B10', '2017/08/25', 1503626635, 'samratshakya5@gmail.com'),
(436, '36', 'B5', '2017/08/25', 1503626657, 'final5@gmail.com'),
(437, '40', 'B8', '2017/08/25', 1503626762, 'samratshakya5@gmail.com'),
(438, '36', 'B6', '2017/08/25', 1503626788, 'final5@gmail.com'),
(439, '40', 'B12', '2017/08/25', 1503626915, 'final5@gmail.com'),
(440, '33', 'A18', '2017/08/25', 1503629901, 'final5@gmail.com'),
(441, '33', 'A18', '2017/08/25', 1503630009, 'final5@gmail.com'),
(442, '29', 'B9', '2017/08/25', 1503630025, 'final5@gmail.com'),
(443, '33', 'A19', '2017/08/25', 1503630216, 'final5@gmail.com'),
(444, '33', 'A17', '2017/08/25', 1503630216, 'final5@gmail.com'),
(445, '29', 'B8', '2017/08/25', 1503630240, 'final5@gmail.com'),
(446, '35', 'A17', '2017/08/25', 1503630574, 'final5@gmail.com'),
(447, '27', 'B6', '2017/08/25', 1503630876, 'final5@gmail.com'),
(448, '27', 'B5', '2017/08/25', 1503630876, 'final5@gmail.com'),
(449, '28', 'B17', '2017/08/25', 1503631042, 'final5@gmail.com'),
(450, '28', 'B19', '2017/08/25', 1503631321, 'final5@gmail.com'),
(451, '35', 'B5', '2017/08/25', 1503636147, 'final5@gmail.com'),
(452, '35', 'B3', '2017/08/25', 1503636147, 'final5@gmail.com'),
(453, '39', 'A13', '2017/08/25', 1503636170, 'final5@gmail.com'),
(454, '39', 'A14', '2017/08/25', 1503636170, 'final5@gmail.com'),
(455, '39', 'A12', '2017/08/25', 1503636170, 'final5@gmail.com'),
(456, '35', 'A10', '2017/08/25', 1503648730, 'final5@gmail.com'),
(457, '35', 'A12', '2017/08/25', 1503648730, 'final5@gmail.com'),
(458, '37', 'A23', '2017/08/25', 1503648746, 'final5@gmail.com'),
(459, '37', 'B19', '2017/08/25', 1503648746, 'final5@gmail.com'),
(460, '35', 'A6', '2017/08/25', 1503649309, 'final5@gmail.com'),
(461, '39', 'B14', '2017/08/25', 1503649372, 'final5@gmail.com'),
(462, '33', 'A14', '2017/08/26', 1503743788, 'samratshakya5@gmail.com'),
(463, '33', 'A16', '2017/08/26', 1503743788, 'samratshakya5@gmail.com'),
(464, '33', 'A12', '2017/08/26', 1503744087, 'asmitkhadka1129@gmail.com'),
(465, '33', 'B5', '2017/08/26', 1503744087, 'asmitkhadka1129@gmail.com'),
(466, '33', 'A12', '2017/08/26', 1503744102, 'asmitkhadka1129@gmail.com'),
(467, '33', 'B5', '2017/08/26', 1503744102, 'asmitkhadka1129@gmail.com'),
(468, '33', 'B11', '2017/08/26', 1503744152, 'asmitkhadka1129@gmail.com'),
(469, '33', 'A14', '2017/08/26', 1503748637, 'asmitkhadka1129@gmail.com'),
(470, '33', 'A12', '2017/08/26', 1503748813, 'asmitkhadka1129@gmail.com'),
(471, '33', 'B4', '2017/08/26', 1503748957, 'asmitkhadka1129@gmail.com'),
(472, '33', 'B6', '2017/08/26', 1503749047, 'asmitkhadka1129@gmail.com'),
(473, '33', 'B6', '2017/08/26', 1503749053, 'asmitkhadka1129@gmail.com'),
(474, '33', 'B6', '2017/08/26', 1503749059, 'asmitkhadka1129@gmail.com'),
(475, '33', 'B6', '2017/08/26', 1503749066, 'asmitkhadka1129@gmail.com'),
(476, '33', 'A12', '2017/08/26', 1503749518, 'asmitkhadka1129@gmail.com'),
(477, '29', 'A16', '2017/08/26', 1503749525, 'asmitkhadka1129@gmail.com'),
(478, '33', 'A12', '2017/08/26', 1503750419, 'asmitkhadka1129@gmail.com'),
(479, '33', 'A11', '2017/08/26', 1503750419, 'asmitkhadka1129@gmail.com'),
(480, '33', 'A12', '2017/08/26', 1503750428, 'asmitkhadka1129@gmail.com'),
(481, '33', 'A11', '2017/08/26', 1503750428, 'asmitkhadka1129@gmail.com'),
(482, '26', 'A12', '2017/08/26', 1503751237, 'asmitkhadka1129@gmail.com'),
(483, '26', 'A12', '2017/08/26', 1503751272, 'asmitkhadka1129@gmail.com'),
(484, '26', 'A8', '2017/08/26', 1503751436, 'samratshakya5@gmail.com'),
(485, '26', 'A7', '2017/08/26', 1503751436, 'samratshakya5@gmail.com'),
(486, '35', 'A15', '2017/08/29', 1503983274, 'asmitkhadka1129@gmail.com'),
(487, '39', 'B11', '2017/09/03', 1504413833, 'birendragurung007@gmail.com'),
(488, '39', 'A16', '2017/09/03', 1504413833, 'birendragurung007@gmail.com'),
(489, '29', 'A11', '2017/09/04', 1504496398, 'sjs@gmail.com'),
(490, '29', 'B11', '2017/09/04', 1504496421, 'sjs@gmail.com'),
(491, '39', 'B11', '2017/09/04', 1504501229, 'birendragurung007@gmail.com'),
(492, '39', 'B13', '2017/09/04', 1504501229, 'birendragurung007@gmail.com'),
(493, '39', 'B15', '2017/09/04', 1504501229, 'birendragurung007@gmail.com'),
(494, '39', 'B6', '2017/09/05', 1504587386, 'shadyprakash8@gmail.com'),
(495, '39', 'B6', '2017/09/05', 1504587464, 'shadyprakash8@gmail.com'),
(496, '39', 'B14', '2017/09/05', 1504606116, 'admin@admin.com'),
(497, '39', 'B16', '2017/09/05', 1504606116, 'admin@admin.com'),
(498, '29', 'A18', '2017/09/05', 1504630703, 'samratslakya@gmsil.com'),
(499, '29', 'A14', '2017/09/05', 1504630703, 'samratslakya@gmsil.com'),
(500, '34', 'A14', '2017/09/09', 1504931067, 'samratshakya5@gmail.com'),
(501, '34', 'A14', '2017/09/09', 1504931158, 'samratshakya5@gmail.com'),
(502, '34', 'A14', '2017/09/09', 1504931170, 'samratshakya5@gmail.com'),
(503, '41', 'A12', '2017/09/12', 1505214640, 'samratshakya5@gmail.com'),
(504, '41', 'A15', '2017/09/12', 1505214651, 'samratshakya5@gmail.com'),
(505, '41', 'A17', '2017/09/16', 1505571470, 'samratshakya5@gmail.com'),
(506, '41', 'A10', '2017/09/16', 1505571633, 'samrat.shakya@nepallink.net'),
(507, '41', 'A17', '2017/09/17', 1505608990, 'samratshakya5@gmail.com'),
(508, '41', 'A12', '2017/09/17', 1505613673, 'samratshakya5@gmail.com'),
(509, '42', 'B12', '2017/09/18', 1505744362, 'samratshakya5@gmail.com'),
(510, '40', 'A19', '2018/04/21', 1524323753, 'samratshakya1129@gmail.com'),
(511, '40', 'B15', '2018/04/21', 1524323753, 'samratshakya1129@gmail.com'),
(512, '40', 'B11', '2018/04/21', 1524324082, 'manizkou@gmail.com'),
(513, '26', 'A11', '2018/04/26', 1524723690, 'tara.gurung@nepallink.net'),
(514, '26', 'A12', '2018/04/26', 1524723691, 'tara.gurung@nepallink.net'),
(515, '44', 'A8', '2018/05/07', 1525688112, 'taraprasad336@gmail.com'),
(516, '44', 'A6', '2018/05/07', 1525688112, 'taraprasad336@gmail.com'),
(517, '44', 'A5', '2018/05/07', 1525688112, 'taraprasad336@gmail.com'),
(518, '41', 'A6', '2018/05/23', 1527073659, 'samratshakya5@gmail.com'),
(519, '41', 'A14', '2018/05/24', 1527157580, 'samratshakya5@gmail.com'),
(520, '44', 'A13', '2018/05/30', 1527667225, 'samratshakya5@gmail.com'),
(521, '44', 'A12', '2018/05/30', 1527672845, 'samratshakya5@gmail.com'),
(522, '25', 'A16', '2018/11/16', 1542334071, 'samratshakya5@gmail.com'),
(523, '25', 'A15', '2018/11/16', 1542334071, 'samratshakya5@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_bus`
--
ALTER TABLE `add_bus`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `add_schedule`
--
ALTER TABLE `add_schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `boarding_details`
--
ALTER TABLE `boarding_details`
  ADD PRIMARY KEY (`board_id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `bus_type`
--
ALTER TABLE `bus_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `cancel_details`
--
ALTER TABLE `cancel_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drop_details`
--
ALTER TABLE `drop_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `owner_info`
--
ALTER TABLE `owner_info`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `passenger_details`
--
ALTER TABLE `passenger_details`
  ADD PRIMARY KEY (`passenger_id`);

--
-- Indexes for table `pickup_details`
--
ALTER TABLE `pickup_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `route_details`
--
ALTER TABLE `route_details`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `seat_layout`
--
ALTER TABLE `seat_layout`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_data`
--
ALTER TABLE `temp_data`
  ADD PRIMARY KEY (`temp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_bus`
--
ALTER TABLE `add_bus`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `add_schedule`
--
ALTER TABLE `add_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `boarding_details`
--
ALTER TABLE `boarding_details`
  MODIFY `board_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `bus_type`
--
ALTER TABLE `bus_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cancel_details`
--
ALTER TABLE `cancel_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `drop_details`
--
ALTER TABLE `drop_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `owner_info`
--
ALTER TABLE `owner_info`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `passenger_details`
--
ALTER TABLE `passenger_details`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `pickup_details`
--
ALTER TABLE `pickup_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `route_details`
--
ALTER TABLE `route_details`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `seat_layout`
--
ALTER TABLE `seat_layout`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `temp_data`
--
ALTER TABLE `temp_data`
  MODIFY `temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=524;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
