-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2022 at 12:07 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naptaraplikacio`
--

-- --------------------------------------------------------

--
-- Table structure for table `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `ID` int(11) NOT NULL,
  `felhasznaloNev` varchar(125) NOT NULL,
  `kod` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `felhasznalok`
--

INSERT INTO `felhasznalok` (`ID`, `felhasznaloNev`, `kod`) VALUES
(3, 'Jani', '44332'),
(4, 'Pista ', '76472'),
(5, 'Aron-Obed', 'asdasd123'),
(6, 'Balla', '88iiit'),
(7, 'Jakab-Bela', 'hhgsf42'),
(8, 'Jozsef', '331nyhy65'),
(9, 'Zsolt', 'wsc45eted53'),
(10, 'Imre-Andras', '11GV34fF'),
(11, 'Richard', 'YGf84HVFH2'),
(12, 'Brad-David', '5543gf3d'),
(13, 'Johny', '5by5yw4y5w4fw'),
(14, 'asd', '123'),
(15, 'asd123', '1234'),
(16, 'iosrtghu', 'w45y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
