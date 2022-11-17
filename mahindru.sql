-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: db.cs.dal.ca
-- Generation Time: Nov 16, 2022 at 11:52 PM
-- Server version: 10.3.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahindru`
--

-- --------------------------------------------------------

--
-- Table structure for table `Clients022`
--

CREATE TABLE `Clients022` (
  `clientID022` int(11) NOT NULL,
  `clientName022` varchar(45) DEFAULT NULL,
  `clientCity022` varchar(45) DEFAULT NULL,
  `clientCompPassword022` varchar(45) DEFAULT NULL,
  `dollarsOnOrder022` decimal(6,2) DEFAULT NULL,
  `moneyOwed022` decimal(6,2) DEFAULT NULL,
  `clientStatus022` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Clients022`
--

INSERT INTO `Clients022` (`clientID022`, `clientName022`, `clientCity022`, `clientCompPassword022`, `dollarsOnOrder022`, `moneyOwed022`, `clientStatus022`) VALUES
(1, 'Pranav Mahindru', 'Halifax', 'blah123', '0.00', '1179.99', 'InActive'),
(2, 'Ritik Roshan', 'Delhi', 'blahb456', '600.00', '0.00', 'InActive'),
(3, 'Rajiv Kumar', 'Georgia', 'blah678', '3590.02', '0.00', 'InActive'),
(4, 'Indu Arora', 'Toronto', 'blah910', '2940.02', '0.00', 'Active'),
(5, 'Alex Tylor', 'Ottawa', 'blah112', '4300.00', '0.00', 'InActive'),
(6, 'dr.br rao', 'halifax', 'blash727', '2000.00', '0.00', 'InActive'),
(7, 'David ', 'Georgia', 'blah23221', '1070.01', '0.00', 'InActive'),
(8, 'Shubham', 'punjab', 'asdowni239', '0.00', '15.87', 'InActive'),
(9, 'zeeday', 'hali', 'aslnd23', '2000.00', '0.00', 'InActive'),
(10, 'try100', 'try100', 'try100', '4990.00', '0.00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `ClientsY022`
--

CREATE TABLE `ClientsY022` (
  `clientID022` int(11) NOT NULL,
  `clientName022` varchar(45) DEFAULT NULL,
  `clientCity022` varchar(45) DEFAULT NULL,
  `clientCompPassword022` varchar(45) DEFAULT NULL,
  `dollarsOnOrder022` decimal(6,2) DEFAULT NULL,
  `moneyOwed022` decimal(6,2) DEFAULT NULL,
  `clientStatus022` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ClientsY022`
--

INSERT INTO `ClientsY022` (`clientID022`, `clientName022`, `clientCity022`, `clientCompPassword022`, `dollarsOnOrder022`, `moneyOwed022`, `clientStatus022`) VALUES
(1, 'dr.br rao', 'Georgia', 'blash727', '0.00', '109.99', 'InActive'),
(2, 'Ritik Roshan', 'Delhi', 'blash7223', '1409.98', '0.00', 'InActive'),
(3, 'Peter', 'Georgia', 'blah678231', '3400.10', '0.00', 'InActive'),
(4, 'Rahul sharma', 'Toronto', 'blah6782', '510.03', '0.00', 'InActive'),
(5, 'kunal arora', 'Ottawa', 'blah61', '1190.01', '0.00', 'InActive'),
(6, 'Pranav Mahindru', 'halifax', 'lol1', '0.00', '199.97', 'InActive'),
(7, 'tryY', 'tryYhali', 'aoinsdpoa', '200.00', '0.00', 'InActive'),
(8, 'aopdh', 'iobf9w', 'fwh90ef', '1200.00', '0.00', 'InActive');

-- --------------------------------------------------------

--
-- Table structure for table `ClientsZ022`
--

CREATE TABLE `ClientsZ022` (
  `clientID022` int(11) NOT NULL,
  `clientName022` varchar(45) DEFAULT NULL,
  `clientCity022` varchar(45) DEFAULT NULL,
  `clientCompPassword022` varchar(45) DEFAULT NULL,
  `dollarsOnOrder022` decimal(6,2) DEFAULT NULL,
  `moneyOwed022` decimal(6,2) DEFAULT NULL,
  `clientStatus022` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ClientsZ022`
--

INSERT INTO `ClientsZ022` (`clientID022`, `clientName022`, `clientCity022`, `clientCompPassword022`, `dollarsOnOrder022`, `moneyOwed022`, `clientStatus022`) VALUES
(1, 'peter', 'halifax', 'aslnd23', '9000.00', '0.00', 'InActive'),
(2, 'David', 'Delhi', 'blahb456', '2000.00', '0.00', 'InActive'),
(3, 'modi', 'Georgia', 'blah678', '4270.01', '0.00', 'InActive'),
(4, 'shivam', 'Toronto', 'blah910', '3890.02', '0.00', 'InActive'),
(5, 'tryZ', 'ainsfpoan', 'aopndfsan9f2342``', '2860.00', '0.00', 'InActive'),
(6, 'try2', 'inafdsipo', 'oibwfeibw', '200.00', '0.00', 'InActive');

-- --------------------------------------------------------

--
-- Table structure for table `Lines022`
--

CREATE TABLE `Lines022` (
  `lineNo022` int(11) NOT NULL,
  `poNo022` int(11) NOT NULL,
  `partNo022` int(11) NOT NULL,
  `priceOrdered022` decimal(6,2) DEFAULT NULL,
  `QoH022` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Lines022`
--

INSERT INTO `Lines022` (`lineNo022`, `poNo022`, `partNo022`, `priceOrdered022`, `QoH022`) VALUES
(1, 1, 1, '100.00', 1),
(2, 1, 4, '200.00', 1),
(3, 1, 7, '50.00', 1),
(4, 2, 2, '150.00', 1),
(5, 2, 3, '129.99', 1),
(6, 2, 4, '200.00', 1),
(7, 2, 5, '200.00', 1),
(8, 3, 2, '150.00', 1),
(9, 3, 4, '200.00', 1),
(10, 3, 5, '200.00', 1),
(11, 3, 7, '50.00', 1),
(12, 4, 2, '150.00', 2),
(13, 4, 4, '200.00', 1),
(14, 4, 5, '200.00', 1),
(15, 4, 6, '200.00', 1),
(16, 5, 1, '100.00', 2),
(17, 5, 7, '50.00', 1),
(18, 6, 3, '129.99', 1),
(19, 6, 4, '200.00', 1),
(20, 6, 5, '200.00', 1),
(21, 7, 2, '150.00', 1),
(22, 7, 3, '129.99', 1);

--
-- Triggers `Lines022`
--
DELIMITER $$
CREATE TRIGGER `Lines022_AFTER_INSERT` AFTER INSERT ON `Lines022` FOR EACH ROW BEGIN
    UPDATE
        Clients022
    SET
        Clients022.moneyOwed022 = Clients022.moneyOwed022 +(
            NEW.priceOrdered022 * NEW.QoH022
        )
    WHERE
        Clients022.clientID022 =(
        SELECT
            clientID022
        FROM
            POs022
        WHERE
            POs022.poNo022 = NEW.poNo022
    ) ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `LinesY022`
--

CREATE TABLE `LinesY022` (
  `lineNo022` int(11) NOT NULL,
  `poNo022` int(11) NOT NULL,
  `partNo022` int(11) NOT NULL,
  `priceOrdered022` decimal(6,2) DEFAULT NULL,
  `QoH022` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `LinesY022`
--

INSERT INTO `LinesY022` (`lineNo022`, `poNo022`, `partNo022`, `priceOrdered022`, `QoH022`) VALUES
(1, 1, 2, '429.99', 1),
(2, 1, 4, '100.00', 1),
(3, 1, 5, '80.00', 1),
(4, 1, 6, '300.00', 1),
(5, 2, 1, '240.00', 2),
(6, 2, 3, '129.99', 1),
(7, 2, 4, '100.00', 1),
(8, 3, 2, '429.99', 1),
(9, 3, 3, '129.99', 1),
(10, 4, 1, '240.00', 1),
(11, 4, 2, '429.99', 3),
(12, 4, 3, '129.99', 1),
(13, 4, 5, '80.00', 1),
(14, 4, 6, '300.00', 4),
(15, 5, 2, '429.99', 1),
(16, 5, 3, '129.99', 1),
(17, 5, 4, '100.00', 1),
(18, 5, 5, '80.00', 1);

--
-- Triggers `LinesY022`
--
DELIMITER $$
CREATE TRIGGER `LinesY022_AFTER_INSERT` AFTER INSERT ON `LinesY022` FOR EACH ROW BEGIN
    UPDATE
        ClientsY022
    SET
        ClientsY022.moneyOwed022 = ClientsY022.moneyOwed022 +(
            NEW.priceOrdered022 * NEW.QoH022
        )
    WHERE
        ClientsY022.clientID022 =(
        SELECT
            clientID022
        FROM
            POsY022
        WHERE
            POsY022.poNo022 = NEW.poNo022
    ) ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `LinesZ022`
--

CREATE TABLE `LinesZ022` (
  `lineNo022` int(11) NOT NULL,
  `poNo022` int(11) NOT NULL,
  `partNo022` varchar(45) NOT NULL,
  `priceOrdered022` decimal(6,2) DEFAULT NULL,
  `QoH022` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `LinesZ022`
--

INSERT INTO `LinesZ022` (`lineNo022`, `poNo022`, `partNo022`, `priceOrdered022`, `QoH022`) VALUES
(1, 1, '3X', '129.99', 1),
(2, 1, '4Y', '100.00', 1),
(3, 1, '2Y', '429.99', 1),
(4, 1, '5Y', '80.00', 1),
(5, 2, '3X', '129.99', 1),
(6, 2, '4Y', '100.00', 1),
(7, 2, '2Y', '429.99', 1),
(8, 2, '5Y', '80.00', 1),
(9, 3, '1X', '100.00', 2),
(10, 3, '3X', '129.99', 1),
(11, 3, '5X', '200.00', 1),
(12, 4, '2X', '150.00', 2),
(13, 4, '4Y', '100.00', 2),
(14, 4, '1Y', '240.00', 2),
(15, 4, '5Y', '80.00', 2);

--
-- Triggers `LinesZ022`
--
DELIMITER $$
CREATE TRIGGER `LinesZ022_AFTER_INSERT` AFTER INSERT ON `LinesZ022` FOR EACH ROW BEGIN
    UPDATE
        ClientsZ022
    SET
        ClientsZ022.moneyOwed022 = ClientsZ022.moneyOwed022 +(
            NEW.priceOrdered022 * NEW.QoH022
        )
    WHERE
        ClientsZ022.clientID022 =(
        SELECT
            clientID022
        FROM
            POsZ022
        WHERE
            POsZ022.poNo022 = NEW.poNo022
    ) ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Parts022`
--

CREATE TABLE `Parts022` (
  `partNo022` int(11) NOT NULL,
  `partName022` varchar(45) DEFAULT NULL,
  `partDescription022` varchar(45) DEFAULT NULL,
  `partImgs022` varchar(45) DEFAULT NULL,
  `currentPrice022` decimal(6,2) DEFAULT NULL,
  `QoH022` int(11) DEFAULT NULL,
  `companyName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Parts022`
--

INSERT INTO `Parts022` (`partNo022`, `partName022`, `partDescription022`, `partImgs022`, `currentPrice022`, `QoH022`, `companyName`) VALUES
(1, 'Nike AirMax', 'Nike Shoes', 'NikeShoes.png', '100.00', 45, 'X'),
(2, 'Nike Sportswear', 'Nike T-shirt', 'NikeT-shirt.png', '150.00', 44, 'X'),
(3, 'Adidas Classics', 'Adidas T-shirt', 'AdidasT-shirt.png', '129.99', 44, 'X'),
(4, 'Adidas Edge', 'Adidas Shoes', 'AdidasShoes.png', '200.00', 46, 'X'),
(5, 'Nike Sports Shoes', 'Sports Shoes', 'NikeSportsShoes.png', '200.00', 44, 'X'),
(6, 'classic football', 'classic football for junior player', 'classicfootball.png', '200.00', 49, 'X'),
(7, 'Badminton Rackets', 'Badminton Rackets Yonex', 'BadmintonRackets.png', '50.00', 48, 'X');

-- --------------------------------------------------------

--
-- Table structure for table `PartsY022`
--

CREATE TABLE `PartsY022` (
  `partNo022` int(11) NOT NULL,
  `partName022` varchar(45) DEFAULT NULL,
  `partDescription022` varchar(45) DEFAULT NULL,
  `partImgs022` varchar(45) DEFAULT NULL,
  `currentPrice022` decimal(6,2) DEFAULT NULL,
  `QoH022` int(11) DEFAULT NULL,
  `companyName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PartsY022`
--

INSERT INTO `PartsY022` (`partNo022`, `partName022`, `partDescription022`, `partImgs022`, `currentPrice022`, `QoH022`, `companyName`) VALUES
(1, 'Vollyball', 'Vollyball ', 'vollyball.png', '240.00', 17, 'Y'),
(2, 'baseball Set', 'baseball Set for Kids', 'baseballset.png', '429.99', 15, 'Y'),
(3, 'Adidas Classics', 'Adidas T-shirt', 'AdidasT-shirt.png', '129.99', 18, 'Y'),
(4, 'Adidas Edge', 'Adidas Shoes', 'AdidasShoes.png', '100.00', 15, 'Y'),
(5, 'Adidas Hat', 'Kids Adidas Hat sale', 'Adidashat.png', '80.00', 15, 'Y'),
(6, 'classic football', 'classic football for junior player', 'classicfootball.png', '300.00', 16, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `POs022`
--

CREATE TABLE `POs022` (
  `poNo022` int(11) NOT NULL,
  `clientID022` int(11) NOT NULL,
  `dateOfPO022` datetime DEFAULT NULL,
  `status022` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `POs022`
--

INSERT INTO `POs022` (`poNo022`, `clientID022`, `dateOfPO022`, `status022`) VALUES
(1, 4, '2022-11-12 03:15:48', 'pending'),
(2, 3, '2022-11-12 19:08:19', 'pending'),
(3, 4, '2022-11-13 06:32:38', 'pending'),
(4, 9, '2022-11-14 20:04:48', 'pending'),
(5, 8, '2022-11-14 20:08:36', 'pending'),
(6, 2, '2022-11-14 20:09:47', 'pending'),
(7, 2, '2022-11-16 21:22:40', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `POsY022`
--

CREATE TABLE `POsY022` (
  `poNo022` int(11) NOT NULL,
  `clientID022` int(11) NOT NULL,
  `dateOfPO022` datetime DEFAULT NULL,
  `status022` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `POsY022`
--

INSERT INTO `POsY022` (`poNo022`, `clientID022`, `dateOfPO022`, `status022`) VALUES
(1, 3, '2022-11-12 03:17:49', 'pending'),
(2, 5, '2022-11-12 19:20:03', 'pending'),
(3, 4, '2022-11-13 06:35:11', 'pending'),
(4, 3, '2022-11-14 20:14:54', 'pending'),
(5, 3, '2022-11-16 23:18:02', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `POsZ022`
--

CREATE TABLE `POsZ022` (
  `poNo022` int(11) NOT NULL,
  `clientID022` int(11) NOT NULL,
  `dateOfPO022` datetime DEFAULT NULL,
  `status022` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `POsZ022`
--

INSERT INTO `POsZ022` (`poNo022`, `clientID022`, `dateOfPO022`, `status022`) VALUES
(1, 2, '2022-11-13 06:09:32', 'pending'),
(2, 2, '2022-11-13 06:10:41', 'pending'),
(3, 4, '2022-11-13 06:24:01', 'pending'),
(4, 5, '2022-11-14 20:25:17', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_select_parts022`
--

CREATE TABLE `user_select_parts022` (
  `ID022` int(11) NOT NULL,
  `clientID022` int(11) NOT NULL,
  `partNo022` int(11) NOT NULL,
  `user_count` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_select_parts022`
--

INSERT INTO `user_select_parts022` (`ID022`, `clientID022`, `partNo022`, `user_count`) VALUES
(27, 4, 1, 1),
(28, 4, 3, 1),
(29, 4, 4, 1),
(30, 4, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_select_partsY022`
--

CREATE TABLE `user_select_partsY022` (
  `ID022` int(11) NOT NULL,
  `clientID022` int(11) NOT NULL,
  `partNo022` int(11) NOT NULL,
  `user_count` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_select_partsZ022`
--

CREATE TABLE `user_select_partsZ022` (
  `ID022` int(11) NOT NULL,
  `clientID022` int(11) NOT NULL,
  `partNo022` varchar(45) NOT NULL,
  `user_count` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_select_partsZ022`
--

INSERT INTO `user_select_partsZ022` (`ID022`, `clientID022`, `partNo022`, `user_count`) VALUES
(27, 5, '3X', 1),
(28, 5, '4Y', 1),
(29, 5, '5X', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Clients022`
--
ALTER TABLE `Clients022`
  ADD PRIMARY KEY (`clientID022`);

--
-- Indexes for table `ClientsY022`
--
ALTER TABLE `ClientsY022`
  ADD PRIMARY KEY (`clientID022`);

--
-- Indexes for table `ClientsZ022`
--
ALTER TABLE `ClientsZ022`
  ADD PRIMARY KEY (`clientID022`);

--
-- Indexes for table `Lines022`
--
ALTER TABLE `Lines022`
  ADD PRIMARY KEY (`lineNo022`,`poNo022`,`partNo022`),
  ADD KEY `poNo022` (`poNo022`),
  ADD KEY `partNo022` (`partNo022`);

--
-- Indexes for table `LinesY022`
--
ALTER TABLE `LinesY022`
  ADD PRIMARY KEY (`lineNo022`,`poNo022`,`partNo022`) USING BTREE,
  ADD KEY `poNo022` (`poNo022`) USING BTREE,
  ADD KEY `partNo022` (`partNo022`) USING BTREE;

--
-- Indexes for table `LinesZ022`
--
ALTER TABLE `LinesZ022`
  ADD PRIMARY KEY (`lineNo022`,`poNo022`,`partNo022`),
  ADD KEY `poNo022` (`poNo022`),
  ADD KEY `partNo022` (`partNo022`);

--
-- Indexes for table `Parts022`
--
ALTER TABLE `Parts022`
  ADD PRIMARY KEY (`partNo022`),
  ADD UNIQUE KEY `partNo022_UNIQUE` (`partNo022`);

--
-- Indexes for table `PartsY022`
--
ALTER TABLE `PartsY022`
  ADD PRIMARY KEY (`partNo022`),
  ADD UNIQUE KEY `partNo022_UNIQUE` (`partNo022`);

--
-- Indexes for table `POs022`
--
ALTER TABLE `POs022`
  ADD PRIMARY KEY (`poNo022`),
  ADD UNIQUE KEY `poNo022_UNIQUE` (`poNo022`),
  ADD KEY `clientID022` (`clientID022`);

--
-- Indexes for table `POsY022`
--
ALTER TABLE `POsY022`
  ADD PRIMARY KEY (`poNo022`) USING BTREE,
  ADD UNIQUE KEY `poNo022_UNIQUE` (`poNo022`) USING BTREE,
  ADD KEY `clientID022` (`clientID022`) USING BTREE;

--
-- Indexes for table `POsZ022`
--
ALTER TABLE `POsZ022`
  ADD PRIMARY KEY (`poNo022`),
  ADD UNIQUE KEY `poNo022_UNIQUE` (`poNo022`),
  ADD KEY `clientID022` (`clientID022`);

--
-- Indexes for table `user_select_parts022`
--
ALTER TABLE `user_select_parts022`
  ADD PRIMARY KEY (`ID022`),
  ADD KEY `clientID022_add` (`clientID022`),
  ADD KEY `partNO022_add` (`partNo022`);

--
-- Indexes for table `user_select_partsY022`
--
ALTER TABLE `user_select_partsY022`
  ADD PRIMARY KEY (`ID022`),
  ADD KEY `clientID022_add` (`clientID022`),
  ADD KEY `partNO022_add` (`partNo022`);

--
-- Indexes for table `user_select_partsZ022`
--
ALTER TABLE `user_select_partsZ022`
  ADD PRIMARY KEY (`ID022`),
  ADD KEY `clientID022_add` (`clientID022`),
  ADD KEY `partNO022_add` (`partNo022`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Clients022`
--
ALTER TABLE `Clients022`
  MODIFY `clientID022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ClientsY022`
--
ALTER TABLE `ClientsY022`
  MODIFY `clientID022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ClientsZ022`
--
ALTER TABLE `ClientsZ022`
  MODIFY `clientID022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Lines022`
--
ALTER TABLE `Lines022`
  MODIFY `lineNo022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `LinesY022`
--
ALTER TABLE `LinesY022`
  MODIFY `lineNo022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `LinesZ022`
--
ALTER TABLE `LinesZ022`
  MODIFY `lineNo022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Parts022`
--
ALTER TABLE `Parts022`
  MODIFY `partNo022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `PartsY022`
--
ALTER TABLE `PartsY022`
  MODIFY `partNo022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `POs022`
--
ALTER TABLE `POs022`
  MODIFY `poNo022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `POsY022`
--
ALTER TABLE `POsY022`
  MODIFY `poNo022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `POsZ022`
--
ALTER TABLE `POsZ022`
  MODIFY `poNo022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_select_parts022`
--
ALTER TABLE `user_select_parts022`
  MODIFY `ID022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_select_partsY022`
--
ALTER TABLE `user_select_partsY022`
  MODIFY `ID022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_select_partsZ022`
--
ALTER TABLE `user_select_partsZ022`
  MODIFY `ID022` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Lines022`
--
ALTER TABLE `Lines022`
  ADD CONSTRAINT `partNo022` FOREIGN KEY (`partNo022`) REFERENCES `Parts022` (`partNo022`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `poNo022` FOREIGN KEY (`poNo022`) REFERENCES `POs022` (`poNo022`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `LinesY022`
--
ALTER TABLE `LinesY022`
  ADD CONSTRAINT `partNoY022` FOREIGN KEY (`partNo022`) REFERENCES `PartsY022` (`partNo022`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `poNoY022` FOREIGN KEY (`poNo022`) REFERENCES `POsY022` (`poNo022`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `LinesZ022`
--
ALTER TABLE `LinesZ022`
  ADD CONSTRAINT `poNoZ022` FOREIGN KEY (`poNo022`) REFERENCES `POsZ022` (`poNo022`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `POs022`
--
ALTER TABLE `POs022`
  ADD CONSTRAINT `clientID022` FOREIGN KEY (`clientID022`) REFERENCES `Clients022` (`clientID022`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `POsY022`
--
ALTER TABLE `POsY022`
  ADD CONSTRAINT `clientIDY022` FOREIGN KEY (`clientID022`) REFERENCES `ClientsY022` (`clientID022`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `POsZ022`
--
ALTER TABLE `POsZ022`
  ADD CONSTRAINT `clientIDZ022` FOREIGN KEY (`clientID022`) REFERENCES `ClientsZ022` (`clientID022`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_select_parts022`
--
ALTER TABLE `user_select_parts022`
  ADD CONSTRAINT `clientID022_add` FOREIGN KEY (`clientID022`) REFERENCES `Clients022` (`clientID022`),
  ADD CONSTRAINT `partNO022_add` FOREIGN KEY (`partNo022`) REFERENCES `Parts022` (`partNo022`);

--
-- Constraints for table `user_select_partsY022`
--
ALTER TABLE `user_select_partsY022`
  ADD CONSTRAINT `clientIDY022_add` FOREIGN KEY (`clientID022`) REFERENCES `ClientsY022` (`clientID022`),
  ADD CONSTRAINT `partNOY022_add` FOREIGN KEY (`partNo022`) REFERENCES `PartsY022` (`partNo022`);

--
-- Constraints for table `user_select_partsZ022`
--
ALTER TABLE `user_select_partsZ022`
  ADD CONSTRAINT `clientIDZ022_add` FOREIGN KEY (`clientID022`) REFERENCES `ClientsZ022` (`clientID022`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
