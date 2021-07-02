-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 04:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `policedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `convicts`
--

CREATE TABLE `convicts` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `CRIME_TYPE` varchar(500) NOT NULL,
  `DOA` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `convicts`
--

INSERT INTO `convicts` (`ID`, `NAME`, `CRIME_TYPE`, `DOA`) VALUES
(3, 'Paul Donavon', 'Serial Murder', '2021-06-19 18:16:32'),
(5, 'Bill D\'Souza', 'Rape', '2021-06-27 17:35:13'),
(18, 'Tame Edwards', 'Kidnapping', '2021-07-02 20:00:33'),
(19, 'Charles D.', 'Bomb Blast', '2021-07-02 20:08:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `convicts`
--
ALTER TABLE `convicts`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `convicts`
--
ALTER TABLE `convicts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
