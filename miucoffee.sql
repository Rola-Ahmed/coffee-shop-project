-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 10:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miucoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcondiment`
--

CREATE TABLE `addcondiment` (
  `id` int(20) NOT NULL,
  `condimenttype` varchar(30) NOT NULL,
  `cost` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcondiment`
--

INSERT INTO `addcondiment` (`id`, `condimenttype`, `cost`) VALUES
(4, 'white chocolate', 20),
(5, 'Dark chocolate', 35),
(7, 'coffee creamer', 20),
(10, 'Chocolate', 19);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(20) NOT NULL,
  `iduser` int(11) NOT NULL,
  `drinktype` int(11) NOT NULL,
  `addcondimenttype` int(11) NOT NULL,
  `drinkcost` int(11) NOT NULL,
  `condimentcost` int(11) NOT NULL,
  `idmilk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart1`
--

CREATE TABLE `cart1` (
  `id` int(11) NOT NULL,
  `IDUser` int(11) NOT NULL,
  `IDDrink` int(11) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart1`
--

INSERT INTO `cart1` (`id`, `IDUser`, `IDDrink`, `Cost`) VALUES
(26, 0, 4, 84),
(27, 0, 3, 95);

-- --------------------------------------------------------

--
-- Table structure for table `choosencond`
--

CREATE TABLE `choosencond` (
  `id` int(11) NOT NULL,
  `condimenttype` int(50) NOT NULL,
  `cost` int(11) NOT NULL,
  `IDUser` int(11) NOT NULL,
  `IDDrink` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choosencond`
--

INSERT INTO `choosencond` (`id`, `condimenttype`, `cost`, `IDUser`, `IDDrink`) VALUES
(7, 0, 20, 0, 0),
(8, 0, 19, 0, 0),
(9, 0, 20, 0, 0),
(10, 0, 20, 0, 0),
(11, 0, 20, 0, 0),
(12, 0, 20, 0, 0),
(13, 0, 19, 0, 0),
(14, 0, 20, 0, 0),
(15, 0, 35, 0, 0),
(16, 0, 20, 0, 0),
(17, 0, 35, 0, 0),
(18, 0, 20, 0, 0),
(19, 0, 19, 0, 1),
(20, 0, 20, 0, 3),
(21, 0, 19, 0, 3),
(22, 5, 35, 0, 3),
(23, 7, 20, 0, 3),
(24, 4, 20, 0, 3),
(25, 5, 35, 0, 3),
(26, 5, 35, 0, 3),
(27, 7, 20, 0, 3),
(28, 5, 35, 0, 3),
(29, 7, 20, 0, 3),
(30, 7, 20, 0, 3),
(31, 10, 19, 0, 4),
(32, 7, 20, 0, 4),
(33, 5, 35, 0, 4),
(34, 5, 35, 0, 4),
(35, 7, 20, 0, 4),
(36, 7, 20, 0, 3),
(37, 5, 35, 0, 3),
(38, 7, 20, 0, 3),
(39, 7, 20, 0, 3),
(40, 10, 19, 0, 3),
(41, 5, 35, 0, 3),
(42, 7, 20, 0, 3),
(43, 5, 35, 0, 3),
(44, 7, 20, 0, 3),
(45, 5, 35, 0, 4),
(46, 7, 20, 0, 4),
(47, 5, 35, 0, 4),
(48, 7, 20, 0, 4),
(49, 7, 20, 0, 4),
(50, 10, 19, 0, 4),
(51, 5, 35, 0, 3),
(52, 7, 20, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `choosencondiment`
--

CREATE TABLE `choosencondiment` (
  `id` int(11) NOT NULL,
  `condimenttype` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choosencondiment`
--

INSERT INTO `choosencondiment` (`id`, `condimenttype`, `cost`) VALUES
(0, 0, 19),
(0, 0, 19),
(0, 0, 19);

-- --------------------------------------------------------

--
-- Table structure for table `choosen milk`
--

CREATE TABLE `choosen milk` (
  `id` int(11) NOT NULL,
  `milkoption` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `choosenmilk`
--

CREATE TABLE `choosenmilk` (
  `id` int(11) NOT NULL,
  `milkoption` varchar(50) NOT NULL,
  `cost` int(11) NOT NULL,
  `IDUser` int(11) NOT NULL,
  `IDDrink` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choosenmilk`
--

INSERT INTO `choosenmilk` (`id`, `milkoption`, `cost`, `IDUser`, `IDDrink`) VALUES
(15, 'Fully-skimmed ', 30, 0, 0),
(16, 'coconut milk', 29, 0, 0),
(17, 'Semi-Skimmed', 30, 0, 0),
(18, 'white chocolate', 20, 0, 0),
(19, 'Dark chocolate', 35, 0, 0),
(20, 'white chocolate', 20, 0, 0),
(21, 'Dark chocolate', 35, 0, 0),
(22, 'Soy Milk', 40, 0, 0),
(23, 'coconut milk', 29, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `drinkmenu`
--

CREATE TABLE `drinkmenu` (
  `id` int(20) NOT NULL,
  `drinkname` varchar(30) NOT NULL,
  `cost` int(20) NOT NULL,
  `image` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `drinktype` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drinkmenu`
--

INSERT INTO `drinkmenu` (`id`, `drinkname`, `cost`, `image`, `description`, `drinktype`) VALUES
(1, 'Cafe-Latte', 45, '', 'Shot of espresso.', 1),
(3, 'House blend', 40, 'house.png', 'It’s deceptively simple. A blend of fine Latin American beans roasted to a glistening, dark chestnut colour. Loaded with flavour, balancing tastes of nut and cocoa, just a touch of sweetness from the roast. This coffee is our beginning, the very first blend we ever created for you back in 1971. And this one blend set the course for the way our master blenders and roasters work even today. A true reflection of us and a delicious cup of coffee, period. It all starts from here.', 2),
(4, 'Dark roast', 45, 'darkroast.jpg', 'This is premium coffee—in an instant. Crafted by our coffee experts using the same 100% arabica beans we brew in our cafés, this dark-roasted coffee has a sweet and toasted flavor with delicious notes of dark chocolate. We carefully roast the beans to capture the exceptional aroma and premium taste of this bold and roasty coffee. Now this is what instant coffee should taste like.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `drinkmenu_condiment`
--

CREATE TABLE `drinkmenu_condiment` (
  `id` int(20) NOT NULL,
  `idcondiment` int(20) NOT NULL,
  `iddrink` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drinktype`
--

CREATE TABLE `drinktype` (
  `id` int(20) NOT NULL,
  `drinkname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drinktype`
--

INSERT INTO `drinktype` (`id`, `drinkname`) VALUES
(1, 'traditional coffee'),
(2, 'customized coffee');

-- --------------------------------------------------------

--
-- Table structure for table `milkoptions`
--

CREATE TABLE `milkoptions` (
  `id` int(11) NOT NULL,
  `milkoption` varchar(30) NOT NULL,
  `cost` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `milkoptions`
--

INSERT INTO `milkoptions` (`id`, `milkoption`, `cost`) VALUES
(2, 'Almond Milk', 30),
(4, 'Soy Milk', 40),
(6, 'coconut milk', 29),
(55, 'Semi-Skimmed', 30),
(59, 'Fully-skimmed ', 30);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(20) NOT NULL,
  `optionname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `optionname`) VALUES
(1, 'add admins'),
(2, 'delete admins'),
(3, 'add drinks'),
(4, 'add new condiments'),
(5, 'add new type of milk'),
(6, 'delete drinks'),
(7, 'delete condiments'),
(8, 'delete type of milk'),
(9, 'edit drinks'),
(10, 'edit condiments'),
(11, 'edit type of milk'),
(12, 'choose type of milk'),
(13, 'choose additional condiments'),
(14, 'add to cart'),
(15, 'remove from cart'),
(16, 'check out'),
(17, 'sign up'),
(18, 'sign in'),
(20, 'Customize drink'),
(21, 'view menu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `usertype`) VALUES
(13, 'salma', 'salma18@gmail.com', 'salma1234', 2),
(14, 'bassant', 'bassant20@gmail.com', 'bassant12', 2),
(15, 'shadwa', 'shadwa20@yahoo.com', 'shadwaarafa2020', 1),
(19, 'rania', 'rania@yahoo.com', 'raniasalah', 3),
(20, 'roba', 'robamuhammed@gmail.com', 'roba123456', 3);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `username`) VALUES
(1, 'manager'),
(2, 'admin'),
(3, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `user_options`
--

CREATE TABLE `user_options` (
  `id` int(20) NOT NULL,
  `idoption` int(20) NOT NULL,
  `iduser` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcondiment`
--
ALTER TABLE `addcondiment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `drinktype` (`drinktype`),
  ADD KEY `drinktype_2` (`drinktype`),
  ADD KEY `addcondimenttype` (`addcondimenttype`),
  ADD KEY `idmilk` (`idmilk`);

--
-- Indexes for table `cart1`
--
ALTER TABLE `cart1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDUser` (`IDUser`,`IDDrink`),
  ADD KEY `IDDrink` (`IDDrink`);

--
-- Indexes for table `choosencond`
--
ALTER TABLE `choosencond`
  ADD PRIMARY KEY (`id`),
  ADD KEY `condimenttype` (`condimenttype`,`IDUser`,`IDDrink`);

--
-- Indexes for table `choosenmilk`
--
ALTER TABLE `choosenmilk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drinkmenu`
--
ALTER TABLE `drinkmenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drinktype` (`drinktype`);

--
-- Indexes for table `drinkmenu_condiment`
--
ALTER TABLE `drinkmenu_condiment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcondiment` (`idcondiment`),
  ADD KEY `iddrink` (`iddrink`);

--
-- Indexes for table `drinktype`
--
ALTER TABLE `drinktype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milkoptions`
--
ALTER TABLE `milkoptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usertype` (`usertype`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_options`
--
ALTER TABLE `user_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idoption` (`idoption`),
  ADD KEY `iduser` (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcondiment`
--
ALTER TABLE `addcondiment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart1`
--
ALTER TABLE `cart1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `choosencond`
--
ALTER TABLE `choosencond`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `choosenmilk`
--
ALTER TABLE `choosenmilk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `drinkmenu`
--
ALTER TABLE `drinkmenu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drinkmenu_condiment`
--
ALTER TABLE `drinkmenu_condiment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drinktype`
--
ALTER TABLE `drinktype`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `milkoptions`
--
ALTER TABLE `milkoptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_options`
--
ALTER TABLE `user_options`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`drinktype`) REFERENCES `drinktype` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`addcondimenttype`) REFERENCES `addcondiment` (`id`),
  ADD CONSTRAINT `cart_ibfk_4` FOREIGN KEY (`idmilk`) REFERENCES `milkoptions` (`id`);

--
-- Constraints for table `cart1`
--
ALTER TABLE `cart1`
  ADD CONSTRAINT `cart1_ibfk_1` FOREIGN KEY (`IDDrink`) REFERENCES `drinkmenu` (`id`);

--
-- Constraints for table `drinkmenu`
--
ALTER TABLE `drinkmenu`
  ADD CONSTRAINT `drinkmenu_ibfk_1` FOREIGN KEY (`drinktype`) REFERENCES `drinktype` (`id`);

--
-- Constraints for table `drinkmenu_condiment`
--
ALTER TABLE `drinkmenu_condiment`
  ADD CONSTRAINT `drinkmenu_condiment_ibfk_1` FOREIGN KEY (`idcondiment`) REFERENCES `addcondiment` (`id`),
  ADD CONSTRAINT `drinkmenu_condiment_ibfk_2` FOREIGN KEY (`iddrink`) REFERENCES `drinktype` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`usertype`) REFERENCES `usertype` (`id`);

--
-- Constraints for table `user_options`
--
ALTER TABLE `user_options`
  ADD CONSTRAINT `user_options_ibfk_1` FOREIGN KEY (`idoption`) REFERENCES `options` (`id`),
  ADD CONSTRAINT `user_options_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
