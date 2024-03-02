-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 01:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unexist_park`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_number` int(3) NOT NULL,
  `area_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_number`, `area_name`) VALUES
(1, 'Redzone');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `age` int(3) NOT NULL,
  `height` int(3) NOT NULL,
  `date_buy` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `first_name`, `last_name`, `phone`, `age`, `height`, `date_buy`) VALUES
(00209, 'Ailyn', 'Syalvester', '958-831-9952', 28, 159, '2022-11-19'),
(00210, 'Chaddy', 'Kensall', '890-793-9351', 46, 100, '2022-01-16'),
(00211, 'Orel', 'Dormon', '958-196-1812', 21, 242, '2022-07-16'),
(00212, 'Alana', 'Poppy', '749-235-2403', 10, 218, '2022-07-02'),
(00213, 'Alexandrina', 'Conrad', '118-489-0395', 34, 239, '2022-02-15'),
(00214, 'Jessie', 'Clapham', '513-164-3239', 42, 159, '2022-02-17'),
(00215, 'Natividad', 'Gammett', '653-524-0293', 31, 154, '2022-02-20'),
(00216, 'Elwyn', 'Heakey', '405-267-9416', 21, 104, '2022-03-01'),
(00217, 'Chilton', 'Sorey', '158-599-1417', 56, 174, '2022-01-13'),
(00218, 'Constantine', 'Wallis', '226-879-6937', 41, 190, '2022-09-27'),
(00219, 'Kassie', 'Tampen', '465-235-5921', 26, 183, '2022-10-02'),
(00220, 'Franklyn', 'Cotterell', '499-866-9644', 5, 191, '2022-11-27'),
(00221, 'Herve', 'Lace', '595-736-1622', 22, 127, '2022-08-31'),
(00222, 'Bruno', 'Swane', '931-126-6489', 59, 161, '2022-11-24'),
(00223, 'Orran', 'Tutin', '430-928-6566', 16, 141, '2022-07-12'),
(00224, 'Tome', 'Lawrance', '473-313-5658', 45, 201, '2022-11-01'),
(00225, 'Neddie', 'Magenny', '944-999-3090', 22, 197, '2022-07-20'),
(00226, 'Araldo', 'Caplen', '215-996-2634', 40, 152, '2022-04-17'),
(00227, 'Quinn', 'Devonald', '923-704-4040', 53, 183, '2022-11-25'),
(00228, 'Hi', 'Hitchens', '658-460-5251', 16, 120, '2022-09-04'),
(00229, 'Cherish', 'Ranner', '789-871-2886', 33, 194, '2022-02-22'),
(00230, 'Hilde', 'Kalisz', '241-784-3343', 16, 244, '2022-08-02'),
(00231, 'Clemmie', 'McGarvie', '130-211-8979', 49, 138, '2022-06-15'),
(00232, 'Charin', 'Tezure', '989-178-1674', 40, 136, '2022-03-05'),
(00233, 'Kellen', 'Surguine', '461-100-8174', 45, 217, '2022-01-13'),
(00234, 'Ab', 'Pendleberry', '101-897-5802', 38, 162, '2022-06-09'),
(00235, 'Templeton', 'Suggate', '863-591-7779', 47, 145, '2022-10-11'),
(00236, 'Domingo', 'Lipscomb', '862-397-5342', 28, 177, '2022-06-05'),
(00237, 'Winni', 'Roz', '859-189-2558', 18, 153, '2022-04-23'),
(00238, 'Prissie', 'Goodfield', '111-784-4767', 13, 222, '2022-03-20'),
(00239, 'Jacquelin', 'Sprulls', '493-293-2657', 17, 173, '2022-04-23'),
(00240, 'Cory', 'Rude', '179-446-9942', 30, 196, '2022-02-16'),
(00241, 'Binni', 'Lalevee', '332-818-8863', 12, 226, '2022-08-31'),
(00242, 'Elisha', 'Lages', '951-396-6013', 29, 150, '2022-12-13'),
(00243, 'Stillman', 'Blincoe', '668-875-7919', 22, 207, '2022-07-03'),
(00244, 'Lynde', 'Jenne', '772-750-0174', 7, 120, '2022-09-02'),
(00245, 'Gib', 'Proom', '811-788-0148', 29, 243, '2022-08-15'),
(00246, 'Evania', 'Damerell', '799-603-9354', 19, 170, '2022-10-13'),
(00247, 'Fitzgerald', 'Tester', '404-965-2507', 35, 237, '2022-03-29'),
(00248, 'Ayn', 'Backman', '193-699-0062', 38, 122, '2022-02-01'),
(00249, 'Anallese', 'Linbohm', '842-264-7306', 11, 197, '2022-02-19'),
(00250, 'Melvyn', 'Mayow', '541-944-2387', 9, 117, '2022-01-03'),
(00251, 'Bertram', 'Creigan', '618-764-2854', 19, 137, '2022-02-27'),
(00252, 'Flemming', 'Gandey', '755-177-5962', 55, 159, '2022-01-06'),
(00253, 'Biddie', 'Colbourne', '904-957-2451', 21, 139, '2022-05-16'),
(00254, 'Halsy', 'Kippax', '634-309-8374', 30, 200, '2022-04-23'),
(00255, 'Brittney', 'Hume', '119-760-5637', 29, 223, '2022-11-25'),
(00256, 'Meaghan', 'Haysham', '282-964-2521', 16, 116, '2022-10-20'),
(00257, 'Bentlee', 'Conkey', '585-232-9673', 23, 246, '2022-12-28'),
(00258, 'Masha', 'Sara', '853-469-1642', 18, 157, '2022-09-25'),
(00259, 'Morly', 'Scripps', '530-117-4158', 40, 102, '2022-06-14'),
(00260, 'Moll', 'Parrett', '883-688-3105', 25, 155, '2022-04-24'),
(00261, 'Edwina', 'Horsey', '718-395-4895', 9, 218, '2022-10-11'),
(00262, 'Benton', 'Thomkins', '559-539-5564', 46, 244, '2022-09-07'),
(00263, 'Joseito', 'Derwin', '884-210-6609', 38, 100, '2022-07-08'),
(00264, 'Sollie', 'Endon', '341-267-9434', 39, 110, '2022-01-28'),
(00265, 'Miguelita', 'Tuting', '137-877-2892', 39, 189, '2022-02-22'),
(00266, 'Paolo', 'Lauritsen', '159-539-0597', 44, 110, '2022-09-10'),
(00267, 'Marcel', 'Whitehorne', '955-682-9242', 38, 171, '2022-05-29'),
(00268, 'Herold', 'Skerritt', '518-613-3822', 17, 172, '2022-06-03'),
(00269, 'Saraann', 'Shird', '950-129-9932', 57, 237, '2022-04-04'),
(00270, 'Kamila', 'Danks', '629-243-1888', 37, 222, '2022-06-12'),
(00271, 'Jacinda', 'Purvis', '122-816-7545', 9, 130, '2022-05-29'),
(00272, 'Wolfy', 'Filkov', '845-599-8442', 36, 169, '2022-03-07'),
(00273, 'Bennie', 'Baterip', '606-541-4062', 19, 196, '2022-04-12'),
(00274, 'Loren', 'McKeighen', '785-572-5454', 29, 102, '2022-08-08'),
(00275, 'Ashley', 'Middleton', '416-537-9695', 19, 120, '2022-01-28'),
(00276, 'Cobb', 'Clerc', '313-136-4798', 5, 145, '2022-09-12'),
(00277, 'Solomon', 'Buxsey', '851-279-4412', 59, 112, '2022-01-18'),
(00278, 'Kai', 'Moran', '482-717-3557', 55, 123, '2022-07-20'),
(00279, 'Bar', 'Blincoe', '155-709-8376', 54, 177, '2022-12-12'),
(00280, 'Allsun', 'Whitaker', '809-951-1031', 16, 152, '2022-08-25'),
(00281, 'Derry', 'Slowcock', '614-316-6199', 13, 167, '2022-07-03'),
(00282, 'Mariann', 'Menzies', '188-697-8789', 34, 201, '2022-09-01'),
(00283, 'Terrell', 'Aslum', '911-571-8419', 11, 169, '2022-09-29'),
(00284, 'Jerrilyn', 'Baudinelli', '786-513-9257', 9, 101, '2022-04-08'),
(00285, 'Zita', 'Ingolotti', '792-569-4263', 51, 246, '2022-01-19'),
(00286, 'Amberly', 'Horning', '889-512-1949', 35, 228, '2022-07-11'),
(00287, 'Bridgette', 'Plose', '613-745-8128', 21, 199, '2022-05-07'),
(00288, 'Rufe', 'Bolderson', '129-968-8646', 22, 143, '2022-09-19'),
(00289, 'Mead', 'Beeson', '604-149-9131', 27, 185, '2022-06-18'),
(00290, 'Austina', 'Klimochkin', '262-418-5806', 32, 230, '2022-01-19'),
(00291, 'Dyana', 'Gilling', '134-371-6686', 10, 211, '2022-12-15'),
(00292, 'Gwenneth', 'Lothean', '901-714-7168', 17, 167, '2022-01-28'),
(00293, 'Debor', 'McCaskill', '704-723-6220', 15, 148, '2022-07-11'),
(00294, 'Jesus', 'O\'Shavlan', '467-205-7861', 21, 163, '2022-08-28'),
(00295, 'Shannon', 'Howland', '706-504-8447', 42, 152, '2022-07-06'),
(00296, 'Miquela', 'Capenor', '472-441-0120', 34, 145, '2022-02-20'),
(00297, 'Malorie', 'Cambling', '828-119-5390', 12, 146, '2022-10-30'),
(00298, 'Raven', 'Gentzsch', '542-132-6363', 33, 122, '2022-10-13'),
(00299, 'Vallie', 'Flaunders', '356-420-3776', 14, 156, '2022-12-04'),
(00300, 'Christie', 'Ettridge', '950-735-3388', 26, 110, '2022-11-18'),
(00301, 'Cindi', 'Wank', '724-396-1903', 45, 208, '2022-12-08'),
(00302, 'Jacquette', 'Coote', '265-219-3411', 31, 205, '2022-02-20'),
(00303, 'Giuditta', 'Sackett', '406-652-4912', 51, 167, '2022-05-10'),
(00304, 'Dietrich', 'Giovanni', '326-470-7274', 20, 220, '2022-01-17'),
(00305, 'Yankee', 'Vanichkov', '368-243-5908', 59, 157, '2022-12-21'),
(00306, 'Karlens', 'Pellamont', '354-449-0706', 48, 166, '2022-12-29'),
(00307, 'Pennie', 'Fackrell', '501-786-9980', 16, 179, '2022-03-06'),
(00308, 'Gaylor', 'Josskovitz', '138-344-3555', 27, 222, '2022-06-04'),
(00309, '', '', '', 0, 0, '0000-00-00'),
(00310, '', '', '', 0, 0, '0000-00-00'),
(00311, '', '', '', 0, 0, '0000-00-00'),
(00312, '', '', '', 0, 0, '0000-00-00'),
(00313, 'yugyug', 'gyugy', '111', 4545, 411, '0011-11-01'),
(00314, 'yugyug', 'gyugy', '111', 4545, 411, '0011-11-01'),
(00315, 'yugyug', 'gyugy', '111', 4545, 411, '0011-11-01'),
(00316, 'yugyug', 'gyugy', '111', 4545, 411, '0011-11-01'),
(00317, 'yugyug', 'gyugy', '111', 4545, 411, '0011-11-01'),
(00318, 'yugyug', 'gyugy', '111', 4545, 411, '0011-11-01'),
(00319, 'yugyug', 'gyugy', '111', 4545, 411, '0011-11-01'),
(00320, '45', '4545', '54', 455, 545454, '0000-00-00'),
(00321, '45', '4545', '54', 455, 545454, '4545-05-05'),
(00322, '45', '4545', '54', 455, 545454, '4545-05-05'),
(00323, '+95+', '616', '626', 65916, 63541365, '0252-05-06'),
(00324, '425425', '4545', '4545', 4545, 4545, '0005-04-05'),
(00325, '42545', '45', '4545', 4545, 545, '0045-05-04'),
(00326, '42545', '454545', '4545454', 4545, 54545, '0454-05-04'),
(00327, '42545', '454545', '4545454', 4545, 54545, '0000-00-00'),
(00328, '454645', '74545', '545', 454, 454545, '0454-05-04'),
(00329, '859', '616', '626', 65916, 63541365, '0252-05-06'),
(00330, '54524', '54545', '5454', 454, 545, '5454-04-05'),
(00331, '45645', '6354646', '456546', 456, 456456, '0056-04-06'),
(00332, '651654', '563453', '453453', 543453, 45345345, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  `chief` int(5) NOT NULL,
  `areazone` int(3) NOT NULL,
  `age` int(3) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `salary` int(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Password` varchar(23) NOT NULL,
  `Username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `first_name`, `last_name`, `position`, `chief`, `areazone`, `age`, `Email`, `phone`, `salary`, `address`, `Password`, `Username`) VALUES
(00026, 'Derril', 'Burgyn', '', 0, 0, 34, 'dburgyn0@51.la', '371-418-2410', 23762, '38975 Stone Corner Trail', 'ZL6IyqL3UerG', 'dburgyn0'),
(00027, 'Bronson', 'Chaize', '', 0, 0, 23, 'bchaize1@taobao.com', '982-731-1794', 44273, '438 Clove Trail', 'KrKfeKX2V9', 'bchaize1'),
(00028, 'Gisella', 'Queyeiro', '', 0, 0, 36, 'gqueyeiro2@skyrock.com', '532-193-7036', 27479, '80 Sheridan Hill', 'pJLlqKDm', 'gqueyeiro2'),
(00029, 'Margalo', 'Sutcliff', '', 0, 0, 44, 'msutcliff3@sbwire.com', '417-222-2007', 35622, '76152 Warbler Lane', 'M5ayToz81yGu', 'msutcliff3'),
(00030, 'Skippy', 'Dewer', '', 0, 0, 31, 'sdewer4@about.com', '407-480-4198', 27343, '70201 Badeau Parkway', 'N1EcIw', 'sdewer4'),
(00031, 'Luciano', 'Fenge', '', 0, 0, 45, 'lfenge5@yellowbook.com', '745-855-3017', 30751, '48883 Judy Trail', '49ecVgFkTE', 'lfenge5'),
(00032, 'Oralie', 'Le Fevre', '', 0, 0, 37, 'olefevre6@businessweek.com', '808-980-1115', 37427, '1045 Basil Crossing', 'I4iZuO1O', 'olefevre6'),
(00033, 'Waly', 'Daniele', '', 0, 0, 35, 'wdaniele7@bbc.co.uk', '817-879-7410', 43329, '49 Pleasure Crossing', 'CaiIaUc7AomR', 'wdaniele7'),
(00034, 'Jillian', 'MacDonnell', '', 0, 0, 23, 'jmacdonnell8@independent.co.uk', '694-133-5290', 28887, '65 Sachs Court', 'vfj74U', 'jmacdonnell8'),
(00035, 'Derrick', 'Hunnicot', '', 0, 0, 23, 'dhunnicot9@amazon.de', '848-269-4962', 17292, '35 Di Loreto Place', '1W6sJZieyi', 'dhunnicot9'),
(00036, 'Mord', 'Perez', '', 0, 0, 35, 'mpereza@spotify.com', '904-754-5137', 19719, '61575 Erie Street', '0yQF4lwcVhh', 'mpereza'),
(00037, 'Jeffrey', 'Cowton', '', 0, 0, 30, 'jcowtonb@sciencedaily.com', '944-607-4434', 34910, '024 Mallard Park', 'wTXT8wIe', 'jcowtonb'),
(00038, 'Rina', 'Beams', '', 0, 0, 41, 'rbeamsc@sohu.com', '484-741-4593', 31348, '08491 Moulton Lane', 'Wg2NmANyO', 'rbeamsc'),
(00039, 'Adey', 'Gehrels', '', 0, 0, 47, 'agehrelsd@diigo.com', '458-512-0340', 18643, '29 Marcy Junction', 'owLXO4qii', 'agehrelsd'),
(00040, 'Jaquelin', 'Farquharson', '', 0, 0, 29, 'jfarquharsone@utexas.edu', '856-409-7907', 22686, '590 Maple Wood Way', '1nXRiBHq2k', 'jfarquharsone'),
(00041, 'Kacey', 'Royden', '', 0, 0, 24, 'kroydenf@unesco.org', '323-734-5002', 29428, '8 Delaware Terrace', 'IpDjOoFK6lO', 'kroydenf'),
(00042, 'Teena', 'Joannet', '', 0, 0, 38, 'tjoannetg@shareasale.com', '724-191-2229', 48811, '2 Nova Parkway', 'nd2di0xNSx', 'tjoannetg'),
(00043, 'Noell', 'Curneen', '', 0, 0, 31, 'ncurneenh@loc.gov', '384-529-6641', 47600, '67 Mosinee Road', 'eVNfSH8', 'ncurneenh'),
(00044, 'Trent', 'Maypowder', '', 0, 0, 25, 'tmaypowderi@devhub.com', '118-713-6458', 18101, '9 Acker Avenue', 'sWyvMevFnZ23', 'tmaypowderi'),
(00045, 'Ingamar', 'Meechan', '', 0, 0, 23, 'imeechanj@php.net', '817-626-0501', 38570, '717 Toban Park', 'Il9PHaSi', 'imeechanj');

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `ride_id` int(5) NOT NULL,
  `ride_name` varchar(40) NOT NULL,
  `date_debut` date NOT NULL,
  `date_maintenance` date NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`ride_id`, `ride_name`, `date_debut`, `date_maintenance`, `level`) VALUES
(4, 'เกน์', '0002-05-01', '0055-01-05', 0),
(6, '', '0000-00-00', '0000-00-00', 0),
(7, '', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sellticket`
--

CREATE TABLE `sellticket` (
  `Sell_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `cust_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `ticket_type` int(1) NOT NULL,
  `date_buy` date NOT NULL,
  `price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellticket`
--

INSERT INTO `sellticket` (`Sell_id`, `cust_id`, `ticket_type`, `date_buy`, `price`) VALUES
(456456, 44564, 0, '0000-00-00', 0),
(456457, 00020, 0, '0000-00-00', 0),
(456458, 00020, 0, '0000-00-00', 0),
(456459, 00006, 0, '0000-00-00', 0),
(456460, 00001, 0, '0000-00-00', 0),
(456461, 00000, 4545, '0454-05-04', 4545),
(456462, 00000, 4545, '0454-05-04', 4545),
(456463, 00000, 4545, '0454-05-04', 4545),
(456464, 00000, 0, '0000-00-00', 0),
(456465, 00000, 0, '0000-00-00', 0),
(456466, 65465, 54654, '0006-05-04', 456456546),
(456467, 00000, 0, '0000-00-00', 0),
(456468, 00000, 0, '0000-00-00', 0),
(456469, 00000, 0, '0000-00-00', 0),
(456470, 00000, 0, '0000-00-00', 0),
(456471, 42542, 242, '4242-02-24', 4242424),
(456472, 00329, 0, '0000-00-00', 0),
(456473, 00000, 985, '0006-05-06', 654),
(456474, 00000, 0, '0000-00-00', 0),
(456475, 00000, 0, '0000-00-00', 0),
(456476, 00331, 0, '0000-00-00', 0),
(456477, 00332, 0, '0000-00-00', 0),
(456478, 04545, 4545, '0004-05-04', 454545),
(456479, 00004, 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(5) NOT NULL,
  `type_ticket` varchar(30) NOT NULL,
  `price` int(3) NOT NULL,
  `age_limit` int(3) NOT NULL,
  `height_limit` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `type_ticket`, `price`, `age_limit`, `height_limit`) VALUES
(6, '45454', 5454, 4545, 4545);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_number`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`ride_id`);

--
-- Indexes for table `sellticket`
--
ALTER TABLE `sellticket`
  ADD PRIMARY KEY (`Sell_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_number` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `ride_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sellticket`
--
ALTER TABLE `sellticket`
  MODIFY `Sell_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=456480;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
