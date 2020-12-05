-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2019 at 02:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventdb`/*ensaevent*/
--

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

CREATE TABLE `evenement` (
  `id_event` int(11) NOT NULL,
  `event_title` text NOT NULL,
  `event_type` text NOT NULL,
  `event_category` text NOT NULL,
  `event_location` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `event_description` text NOT NULL,
  `event_img` text NOT NULL,
  `id_organ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evenement`
--

INSERT INTO `evenement` (`id_event`, `event_title`, `event_type`, `event_category`, `event_location`, `start_date`, `end_date`, `start_time`, `end_time`, `event_description`, `event_img`, `id_organ`) VALUES
(1, 'title', 'type', 'category', 'agadir awa', '2019-12-12', '2019-12-25', '29:32:00', '22:20:00', 'efdeuzyc elufycezyu ezyfucbzecyu yufcbezfycu efyubezfbyu', 'coverevent1.png', 1),
(2, 'Drop Shopping', 'Atelier', 'conference', 'CASA BLANCA', '2019-12-19', '2019-12-27', '12:20:00', '20:30:00', 'ezluifdezfd ediueded uzedhjeziu uiehdied uiezdeiuzdj uiezhdjiez ', 'coverevent2.jpg', 1),
(3, 'CCNA', 'Examen', 'Autre', 'KHOURIBGA', '2020-01-03', '2020-01-09', '13:15:00', '16:00:00', 'gggggg jkiz yyyyyyy gzdczzzzzz llllzd', 'coverevent3.jpg', 1),
(4, 'Epic Yoga', 'Festival', 'Sport', 'Marrakech', '2020-01-15', '2020-01-17', '10:00:00', '17:00:00', 'anie ger ddibidd dgede eged matrfsbs', 'coverevent5.jpg', 1),
(6, '212 FOUNDERS', 'ConfÃ©rence', 'Commerces et professions', 'TIZNIT', '2020-01-18', '2019-12-29', '09:00:00', '12:00:00', 'uydgzeuzid jezldzieufd iluezahdÃ§p_zioedf luzeahdf_Ã§zefn  Ã¨ozefÃ§_uizef yuoeztyfzeÃ§_ib bgzo-efgzefiub ', 'coverevent4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `favoris`
--

CREATE TABLE `favoris` (
  `id_particip` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favoris`
--

INSERT INTO `favoris` (`id_particip`, `id_event`) VALUES
(1, 6),
(1, 1),
(1, 1),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `organisateur`
--

CREATE TABLE `organisateur` (
  `id_organ` int(11) NOT NULL,
  `organ_nam` text NOT NULL,
  `organ_tel` text NOT NULL,
  `organ_addrs` text NOT NULL,
  `organ_website` text NOT NULL,
  `organ_profimg` text NOT NULL,
  `id_particip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisateur`
--

INSERT INTO `organisateur` (`id_organ`, `organ_nam`, `organ_tel`, `organ_addrs`, `organ_website`, `organ_profimg`, `id_particip`) VALUES
(1, 'YO Entertaiments', '0512425361', 'hay nahda - kyoto - Tanzania', 'www.walo.com', 'Sunset.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `id_particip` int(11) NOT NULL,
  `user_nam` text NOT NULL,
  `user_pass` text NOT NULL,
  `user_mail` text NOT NULL,
  `user_tel` text NOT NULL,
  `user_addrs` text NOT NULL,
  `user_profImg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id_particip`, `user_nam`, `user_pass`, `user_mail`, `user_tel`, `user_addrs`, `user_profImg`) VALUES
(1, 'yassine ouaarab', '123456', 'yo@gmail.com', '061234567', 'zenkat kotobia - New Delhi - South Korea', 'Orca.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `id_particip` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `nbrand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id_particip`, `id_ticket`, `quantity`, `nbrand`) VALUES
(1, 1, 2, 3621517),
(1, 2, 3, 4283366);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `ticket_quantity` int(11) NOT NULL,
  `start_sale_date` date NOT NULL,
  `end_sale_date` date NOT NULL,
  `start_sale_time` time NOT NULL,
  `end_sale_time` time NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `ticket_quantity`, `start_sale_date`, `end_sale_date`, `start_sale_time`, `end_sale_time`, `id_event`) VALUES
(1, 150, '2020-01-09', '2020-01-17', '19:00:00', '22:00:00', 3),
(2, 350, '2020-01-24', '2020-01-24', '18:00:00', '18:30:00', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `fk_idorgan` (`id_organ`);

--
-- Indexes for table `favoris`
--
ALTER TABLE `favoris`
  ADD KEY `fkidpartcp` (`id_particip`),
  ADD KEY `fkidvnt` (`id_event`);

--
-- Indexes for table `organisateur`
--
ALTER TABLE `organisateur`
  ADD PRIMARY KEY (`id_organ`),
  ADD KEY `fkidparticip` (`id_particip`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id_particip`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD KEY `fk_idticket` (`id_ticket`),
  ADD KEY `fk_idparticip` (`id_particip`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `fk_idevent` (`id_event`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `fk_idorgan` FOREIGN KEY (`id_organ`) REFERENCES `organisateur` (`id_organ`);

--
-- Constraints for table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `fkidpartcp` FOREIGN KEY (`id_particip`) REFERENCES `participant` (`id_particip`),
  ADD CONSTRAINT `fkidvnt` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id_event`);

--
-- Constraints for table `organisateur`
--
ALTER TABLE `organisateur`
  ADD CONSTRAINT `fkidparticip` FOREIGN KEY (`id_particip`) REFERENCES `participant` (`id_particip`);

--
-- Constraints for table `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `fk_idparticip` FOREIGN KEY (`id_particip`) REFERENCES `participant` (`id_particip`),
  ADD CONSTRAINT `fk_idticket` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id_ticket`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_idevent` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id_event`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
