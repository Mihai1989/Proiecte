-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 01:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gogle`
--

-- --------------------------------------------------------

--
-- Table structure for table `date_gogle`
--

CREATE TABLE `date_gogle` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `last_update` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date_gogle`
--

INSERT INTO `date_gogle` (`id`, `title`, `description`, `url`, `last_update`) VALUES
(1, 'Porsche', 'Primul model Porsche, Porsche 64, a fost proiectat in 1939 folosind multe componente de la Volkswagen Beetle.', 'https://en.wikipedia.org/wiki/Porsche', ''),
(2, 'Jaguar', 'Automobilele Jaguar de astazi sunt concepute in centrele de inginerie de la fabriva Whitlei din din Coventry', 'https://www.jaguar.com/index.html', ''),
(3, 'Lexus', 'Mereu revolutionar, mereu in frunte, Lexus lanseaza in 1998 modelul RX, primul SUV ce oferea rafinamentul unui sedan de lux. Redefinind inca o data barierele conceptuale, in 2004 am introdus primul vehicul hibrid de lux  revolutionarul RX 400h SUV.', 'https://en.wikipedia.org/wiki/Lexus', ''),
(4, 'Hyundai', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humourModelul Hyundai a obtinut calificativul maxim de cinci stele de la organizatia europeana independenta care evalueaza nivelul de siguranta oferit de autovehicule', 'http://www.hyundai-motor.ro/', ''),
(5, 'Toyota', 'Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Chiar daca are doua motoare, nu este deloc complicat sa conduci un vehicul hibrid. Descopera cum au fost proiectate vehiculele hibride, pentru a fi la fel de usor de condus ca orice vehicul conventional.', 'https://www.toyota.ro/hybrid-innovation/how-hybrid-works.json', ''),
(7, 'Audi', 'Audi este o marca Germana', 'https://www.audi.ro/', ''),
(8, 'a', 'a', 'a', ''),
(9, 'a', 'd', 's', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `date_gogle`
--
ALTER TABLE `date_gogle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `date_gogle`
--
ALTER TABLE `date_gogle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
