-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: fdb1034.awardspace.net
-- Generation Time: May 23, 2025 at 05:57 PM
-- Server version: 8.0.32
-- PHP Version: 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4128127_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `UserID` int NOT NULL,
  `FirstName` varchar(50) COLLATE utf16_slovenian_ci NOT NULL,
  `LastName` varchar(50) COLLATE utf16_slovenian_ci NOT NULL,
  `City` varchar(50) COLLATE utf16_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_slovenian_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`UserID`, `FirstName`, `LastName`, `City`) VALUES
(1, 'Brandon', 'Pitt', 'Krško'),
(2, 'Janez', 'Novak', 'Krško'),
(3, 'Daxhwm', 'Osdetwfi', 'Rgmbuns'),
(4, 'Ieofdx', 'Xuhjakrm', 'Lrsdfeo'),
(5, 'Avcqns', 'Fseqhlub', 'Feimkys'),
(6, 'Fowzlj', 'Ewzxjdiu', 'Mqyfztk'),
(7, 'Okpgxr', 'Ykhepugq', 'Xhamnlj'),
(8, 'Jfkyzp', 'Inuohxyk', 'Cuszhqk'),
(9, 'Hlxnec', 'Knqfxcul', 'Kojvwiu'),
(10, 'Ezypav', 'Hywtlsvj', 'Btphwfd'),
(11, 'Ujgxce', 'Dklcnfwr', 'Erktjfo'),
(12, 'Ebclot', 'Dntasyrv', 'Fujzcdy'),
(13, 'Hkxqvw', 'Eulobtqx', 'Fmlvyjw'),
(14, 'Linoyq', 'Qukohgyv', 'Zlfdwvk'),
(15, 'Eygdoa', 'Wtjyxvcz', 'Ynqejbs'),
(16, 'Btoskj', 'Cdqimkxs', 'Bdnlfxi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
