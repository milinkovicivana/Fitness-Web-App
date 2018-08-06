-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 02:09 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atleticogym`
--

-- --------------------------------------------------------

--
-- Table structure for table `informacije`
--

CREATE TABLE `informacije` (
  `id` int(11) NOT NULL,
  `adresa` varchar(150) NOT NULL,
  `radnoVreme` varchar(35) NOT NULL,
  `telefon` varchar(30) NOT NULL,
  `telefon2` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informacije`
--

INSERT INTO `informacije` (`id`, `adresa`, `radnoVreme`, `telefon`, `telefon2`, `email`) VALUES
(1, 'Narodne omladine 1, Beograd', 'Ponedeljak - subota: 10 - 22h', '011/33-21-871', '060/40-41-914', 'atletikoborca45@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `konkurs`
--

CREATE TABLE `konkurs` (
  `id` int(11) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `cv` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konkurs`
--

INSERT INTO `konkurs` (`id`, `ime`, `prezime`, `email`, `telefon`, `cv`) VALUES
(3, 'Milos', 'Bestic', 'milos@gmail.com', '0113325616', '186271294-solutions-6th-edition-computer-and-networking2-151203143855-lva1-app6891.pdf'),
(6, 'Ivanaaa', 'Dol', 'nenad@gmail.com', '0113838372', 'CV-Marko-LaloviÄ‡-s39-16.docx'),
(7, 'Ivona', 'Bestic', 'nenad@gmail.com', '0113838372', 'LV16-Dejan-Drljaca.docx');

-- --------------------------------------------------------

--
-- Table structure for table `polaznici`
--

CREATE TABLE `polaznici` (
  `id` int(11) NOT NULL,
  `ime` varchar(15) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sifra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polaznici`
--

INSERT INTO `polaznici` (`id`, `ime`, `prezime`, `email`, `sifra`) VALUES
(4, 'Ivana', 'Milinkovic', 'ivana@raf.rs', '4eb274593fde2b15697a325349d89aa4'),
(8, 'Marko', 'Lalovic', 'lalamarko@gmail.com', '8fef65c2256ce268b30080d686ff13cb'),
(9, 'Milica', 'Bestic', 'milica@gmail.com', '932e512d0da2821efe2b81539f0b82c5'),
(12, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(13, 'Ivona', 'Ivonovic', 'ivona@gmail.com', '4237cc0f378150a18b8469ffbcb4ce75'),
(14, 'Jovana', 'Mitrovic', 'jovana@gmail.com', '067a9d48f2884037e1320ac03b18e86f');

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE `vesti` (
  `id` int(11) NOT NULL,
  `naslov` varchar(100) NOT NULL,
  `tekst` varchar(1000) NOT NULL,
  `slika` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naslov`, `tekst`, `slika`) VALUES
(2, 'Kultura aktivnog zivota', 'Fitness studio \"Atletico\" Vam pruza savrsene uslove za prijatno, komforno i efikasno vezbanje..Prijatan ambijent teretane i fitness sale opremljen je najsavremenijim spravama za oblikovanje i jacanje misica, kao i kardio masinama (trake, steperi..). U ponudi naseg fitness kluba su razliciti vidovi programa, specificnih i prilagodljivih Vasim potrebama, koji sluze za mrsavljenje, rehabilitaciju i kondicionu pripremu. Postoje grupni i rekreativni programi. Shodno senzibilitetu izaberite program koji Vam odgovara, a nasi strucni fitness instruktori ce Vam pomoci kako u pravom odabiru tako i u ostvarenju zeljenih rezultata.Ovaj prostor Vam sa svojom opremom, najboljim instruktorima koji rade u njemu pruza savrsene uslove za prijatno i efikasno vezbanje. Zadovoljstvo nam je da Vam ponudimo najsavremenije uslove za trening i rekreaciju.', '19437449_1431560340261938_7603065050487132418_n.jpg'),
(4, 'Velika akcija! 50% popusta na individualne treninge', 'Individualni trening predstavlja posebno planiranu i programiranu fizicku aktivnost jednog vezbaca, koju u skladu sa ciljevima i trenutnim sposobnostima vezbaca kreira trener, imajuci u vidu vreme i realne mogucnosti za ostvarenje tog cilja. Individualni trener je kvalifikovan iz oblasti fizicke aktivnosti coveka, koji kreira i sprovodi individualno prilagodjen plan i program vezbanja, svakom pojedincu sa kojim saradjuje, uz savete o ishrani, novom nacinu zivota i naravno, uz predhodnu kontrolu lekara, kardiologa, radi utvrdjivanja sposobnosti samog vezbaca, da bi se izbegle nezeljene situacije.', 'slik2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `zaposleni`
--

CREATE TABLE `zaposleni` (
  `id` int(11) NOT NULL,
  `ime` varchar(15) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `posao` varchar(100) NOT NULL,
  `slika` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zaposleni`
--

INSERT INTO `zaposleni` (`id`, `ime`, `prezime`, `posao`, `slika`) VALUES
(1, 'Marijana', 'Avakumovic', 'Fitnes instruktor', 'GettyImages-545840549-58e7e5ca5f9b58ef7e53fc0f1.jpg'),
(2, 'Nenad', 'Aleksic', 'Fitnes instruktor', 'B7YOqD2CMAACWjn.jpg'),
(3, 'Ivana', 'Milinkovic', 'Fitnes instruktor', 'download (11).jpg'),
(8, 'Dragana', 'Ikonov', 'Joga instruktor', 'plavusa1.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informacije`
--
ALTER TABLE `informacije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konkurs`
--
ALTER TABLE `konkurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polaznici`
--
ALTER TABLE `polaznici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vesti`
--
ALTER TABLE `vesti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zaposleni`
--
ALTER TABLE `zaposleni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informacije`
--
ALTER TABLE `informacije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konkurs`
--
ALTER TABLE `konkurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `polaznici`
--
ALTER TABLE `polaznici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `zaposleni`
--
ALTER TABLE `zaposleni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
