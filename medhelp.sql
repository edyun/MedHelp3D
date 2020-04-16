-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 02:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medhelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `listari`
--

CREATE TABLE `listari` (
  `id` int(20) NOT NULL,
  `nume` varchar(65) NOT NULL,
  `poza` text NOT NULL,
  `link` text NOT NULL,
  `descriere` text NOT NULL,
  `categorie` int(10) NOT NULL,
  `linkdw` text NOT NULL,
  `autor` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listari`
--

INSERT INTO `listari` (`id`, `nume`, `poza`, `link`, `descriere`, `categorie`, `linkdw`, `autor`) VALUES
(1, 'Eprubeta', 'http://79.117.14.139/imagini/1.jpg', 'http://79.117.14.139/proiect.php?id=1', 'Model 3D al unuia din cele mai folosite instrumente de laborator, eprubeta. Vas de sticlă, de obicei în formă cilindrică, închis la un capăt și având pereții subțiri, transparenți și rezistenți, întrebuințat în laboratoare pentru analize chimice calitative.', 6, 'http://79.117.14.139/download/1/1.rar', 'N/A'),
(2, 'Masca', 'http://79.117.14.139/imagini/2.jpg', 'http://79.117.14.139/proiect.php?id=2', 'Model 3D de mască, foarte bun împotriva răspândirii particulelor fine(praf) și de salivă, în timpul vorbirii sau în cazul tusei.\r\nSunt prezente mai multe modele in arhiva disponibilă pe site.', 5, 'http://79.117.14.139/download/2/2.rar', 'N/A'),
(3, 'Masca', 'http://79.117.14.139/imagini/3.jpg', 'http://79.117.14.139/proiect.php?id=3', 'Model 3D de mască, foarte bun împotriva răspândirii particulelor fine(praf) și de salivă, în timpul vorbirii sau în cazul tusei.\r\nSunt prezente mai multe modele in arhiva disponibilă pe site.', 5, 'http://79.117.14.139/download/3/3.rar', 'N/A'),
(4, 'Vizor protectie', 'http://79.117.14.139/imagini/4.jpg', 'http://79.117.14.139/proiect.php?id=4', 'Model 3D al unei protecții de față. O mască de față este un instrument ce se poartă peste față pentru a preveni infecția bolilor cu transmitere aeriana sau a preveni răspândirea germenilor.\r\n', 2, 'http://79.117.14.139/download/4/4.rar', 'N/A'),
(5, 'Seringa', 'http://79.117.14.139/imagini/5.jpg', 'http://79.117.14.139/proiect.php?id=5', 'Model 3D al unei seringi. Instrument medical folosit pentru a introduce sau pentru a scoate din organism un lichid, pentru a lua probe de sânge etc., care constă dintr-un cilindru de sticlă sau de material plastic cu un piston etanș, la care se adaptează un ac tubular.\r\n', 6, 'http://79.117.14.139/download/5/5.rar', 'N/A'),
(6, 'Stand de Eprubete', 'http://79.117.14.139/imagini/6.jpg', 'http://79.117.14.139/proiect.php?id=6', 'Model 3D al unui stand de eprubete. Esențial pentru a menține ordine in laborator.', 6, 'http://79.117.14.139/download/6/6.rar', 'N/A'),
(7, 'Sticle laborator', 'http://79.117.14.139/imagini/7.jpg', 'http://79.117.14.139/proiect.php?id=7', 'Model 3D al unor sticle de laborator. Ustensile esentiale pentru desfășurarea experimentelor din rutina laboratoarelor.\r\n', 6, 'http://79.117.14.139/download/7/7.rar', 'N/A'),
(8, 'Sticle laborator', 'http://79.117.14.139/imagini/8.jpg', 'http://79.117.14.139/proiect.php?id=8', 'Model 3D al unor sticle de laborator. Ustensile esentiale pentru desfășurarea experimentelor din rutina laboratoarelor.\r\n', 6, 'http://79.117.14.139/download/8/8.rar', 'N/A'),
(9, 'Sticla medicinala', 'http://79.117.14.139/imagini/9.jpg', 'http://79.117.14.139/proiect.php?id=9', 'Model 3D al unei sticluțe medicinale. Are diverse utilizări, fie pentru a stoca un lichid precum un sirop de tuse, fie pentru a scota medicamente.', 6, 'http://79.117.14.139/download/9/9.rar', 'N/A'),
(10, 'Vizor de protectie', 'http://79.117.14.139/imagini/10.jpg', 'http://79.117.14.139/proiect.php?id=10', 'Model 3D al unei protecții de față. O mască de față este un instrument ce se poartă peste față pentru a preveni infecția bolilor cu transmitere aeriana sau a preveni răspândirea germenilor.', 2, 'http://79.117.14.139/10/10.rar', 'N/A'),
(11, 'Vizor de protectie', 'http://79.117.14.139/imagini/11.jpg', 'http://79.117.14.139/proiect.php?id=11', 'Model 3D al unei protecții de față. O mască de față este un instrument ce se poartă peste față pentru a preveni infecția bolilor cu transmitere aeriana sau a preveni răspândirea germenilor.', 2, 'http://79.117.14.139/download/11/11.rar', 'N/A'),
(12, 'Vizor de protectie', 'http://79.117.14.139/imagini/12.jpg', 'http://79.117.14.139/proiect.php?id=12', 'Model 3D al unei protecții de față. O mască de față este un instrument ce se poartă peste față pentru a preveni infecția bolilor cu transmitere aeriana sau a preveni răspândirea germenilor.', 2, 'http://79.117.14.139/download/12/12.rar', 'N/A'),
(13, 'Eprubeta', 'http://79.117.14.139/imagini/1.jpg', 'http://79.117.14.139/proiect.php?id=1', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/1/1.rar', 'N/A'),
(14, 'Masca', 'http://79.117.14.139/imagini/2.jpg', 'http://79.117.14.139/proiect.php?id=2', 'Model 3D de masca, foarte bun impotriva raspandirii particulelor fine(praf) si de saliva, in timpul vorbirii sau in cazul tusei. \r\nSunt disponibile mai multe modele in arhiva disponibila pe site.', 5, 'http://79.117.14.139/download/2/2.rar', 'N/A'),
(15, 'Masca', 'http://79.117.14.139/imagini/3.jpg', 'http://79.117.14.139/proiect.php?id=3', 'Lorem Ipsum', 5, 'http://79.117.14.139/download/3/3.rar', 'N/A'),
(16, 'Vizor protectie', 'http://79.117.14.139/imagini/4.jpg', 'http://79.117.14.139/proiect.php?id=4', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/4/4.rar', 'N/A'),
(17, 'Seringa', 'http://79.117.14.139/imagini/5.jpg', 'http://79.117.14.139/proiect.php?id=5', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/5/5.rar', 'N/A'),
(18, 'Stand de Eprubete', 'http://79.117.14.139/imagini/6.jpg', 'http://79.117.14.139/proiect.php?id=6', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/6/6.rar', 'N/A'),
(19, 'Sticle laborator', 'http://79.117.14.139/imagini/7.jpg', 'http://79.117.14.139/proiect.php?id=7', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/7/7.rar', 'N/A'),
(20, 'Sticle laborator', 'http://79.117.14.139/imagini/8.jpg', 'http://79.117.14.139/proiect.php?id=8', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/8/8.rar', 'N/A'),
(21, 'Sticla medicinala', 'http://79.117.14.139/imagini/9.jpg', 'http://79.117.14.139/proiect.php?id=9', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/9/9.rar', 'N/A'),
(22, 'Vizor de protectie', 'http://79.117.14.139/imagini/10.jpg', 'http://79.117.14.139/proiect.php?id=10', 'Lorem Ipsum', 2, 'http://79.117.14.139/10/10.rar', 'N/A'),
(23, 'Vizor de protectie', 'http://79.117.14.139/imagini/11.jpg', 'http://79.117.14.139/proiect.php?id=11', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/11/11.rar', 'N/A'),
(24, 'Vizor de protectie', 'http://79.117.14.139/imagini/12.jpg', 'http://79.117.14.139/proiect.php?id=12', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/12/12.rar', 'N/A'),
(25, 'Eprubeta', 'http://79.117.14.139/imagini/1.jpg', 'http://79.117.14.139/proiect.php?id=1', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/1/1.rar', 'N/A'),
(26, 'Masca', 'http://79.117.14.139/imagini/2.jpg', 'http://79.117.14.139/proiect.php?id=2', 'Model 3D de masca, foarte bun impotriva raspandirii particulelor fine(praf) si de saliva, in timpul vorbirii sau in cazul tusei. \r\nSunt disponibile mai multe modele in arhiva disponibila pe site.', 5, 'http://79.117.14.139/download/2/2.rar', 'N/A'),
(27, 'Masca', 'http://79.117.14.139/imagini/3.jpg', 'http://79.117.14.139/proiect.php?id=3', 'Lorem Ipsum', 5, 'http://79.117.14.139/download/3/3.rar', 'N/A'),
(28, 'Vizor protectie', 'http://79.117.14.139/imagini/4.jpg', 'http://79.117.14.139/proiect.php?id=4', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/4/4.rar', 'N/A'),
(29, 'Seringa', 'http://79.117.14.139/imagini/5.jpg', 'http://79.117.14.139/proiect.php?id=5', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/5/5.rar', 'N/A'),
(30, 'Stand de Eprubete', 'http://79.117.14.139/imagini/6.jpg', 'http://79.117.14.139/proiect.php?id=6', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/6/6.rar', 'N/A'),
(31, 'Sticle laborator', 'http://79.117.14.139/imagini/7.jpg', 'http://79.117.14.139/proiect.php?id=7', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/7/7.rar', 'N/A'),
(32, 'Sticle laborator', 'http://79.117.14.139/imagini/8.jpg', 'http://79.117.14.139/proiect.php?id=8', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/8/8.rar', 'N/A'),
(33, 'Sticla medicinala', 'http://79.117.14.139/imagini/9.jpg', 'http://79.117.14.139/proiect.php?id=9', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/9/9.rar', 'N/A'),
(34, 'Vizor de protectie', 'http://79.117.14.139/imagini/10.jpg', 'http://79.117.14.139/proiect.php?id=10', 'Lorem Ipsum', 2, 'http://79.117.14.139/10/10.rar', 'N/A'),
(35, 'Vizor de protectie', 'http://79.117.14.139/imagini/11.jpg', 'http://79.117.14.139/proiect.php?id=11', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/11/11.rar', 'N/A'),
(36, 'Vizor de protectie', 'http://79.117.14.139/imagini/12.jpg', 'http://79.117.14.139/proiect.php?id=12', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/12/12.rar', 'N/A'),
(37, 'Eprubeta', 'http://79.117.14.139/imagini/1.jpg', 'http://79.117.14.139/proiect.php?id=1', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/1/1.rar', 'N/A'),
(38, 'Masca', 'http://79.117.14.139/imagini/2.jpg', 'http://79.117.14.139/proiect.php?id=2', 'Model 3D de masca, foarte bun impotriva raspandirii particulelor fine(praf) si de saliva, in timpul vorbirii sau in cazul tusei. \r\nSunt disponibile mai multe modele in arhiva disponibila pe site.', 5, 'http://79.117.14.139/download/2/2.rar', 'N/A'),
(39, 'Masca', 'http://79.117.14.139/imagini/3.jpg', 'http://79.117.14.139/proiect.php?id=3', 'Lorem Ipsum', 5, 'http://79.117.14.139/download/3/3.rar', 'N/A'),
(40, 'Vizor protectie', 'http://79.117.14.139/imagini/4.jpg', 'http://79.117.14.139/proiect.php?id=4', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/4/4.rar', 'N/A'),
(41, 'Seringa', 'http://79.117.14.139/imagini/5.jpg', 'http://79.117.14.139/proiect.php?id=5', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/5/5.rar', 'N/A'),
(42, 'Stand de Eprubete', 'http://79.117.14.139/imagini/6.jpg', 'http://79.117.14.139/proiect.php?id=6', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/6/6.rar', 'N/A'),
(43, 'Sticle laborator', 'http://79.117.14.139/imagini/7.jpg', 'http://79.117.14.139/proiect.php?id=7', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/7/7.rar', 'N/A'),
(44, 'Sticle laborator', 'http://79.117.14.139/imagini/8.jpg', 'http://79.117.14.139/proiect.php?id=8', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/8/8.rar', 'N/A'),
(45, 'Sticla medicinala', 'http://79.117.14.139/imagini/9.jpg', 'http://79.117.14.139/proiect.php?id=9', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/9/9.rar', 'N/A'),
(46, 'Vizor de protectie', 'http://79.117.14.139/imagini/10.jpg', 'http://79.117.14.139/proiect.php?id=10', 'Lorem Ipsum', 2, 'http://79.117.14.139/10/10.rar', 'N/A'),
(47, 'Vizor de protectie', 'http://79.117.14.139/imagini/11.jpg', 'http://79.117.14.139/proiect.php?id=11', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/11/11.rar', 'N/A'),
(48, 'Vizor de protectie', 'http://79.117.14.139/imagini/12.jpg', 'http://79.117.14.139/proiect.php?id=12', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/12/12.rar', 'N/A'),
(49, 'Eprubeta', 'http://79.117.14.139/imagini/1.jpg', 'http://79.117.14.139/proiect.php?id=1', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/1/1.rar', 'N/A'),
(50, 'Masca', 'http://79.117.14.139/imagini/2.jpg', 'http://79.117.14.139/proiect.php?id=2', 'Model 3D de masca, foarte bun impotriva raspandirii particulelor fine(praf) si de saliva, in timpul vorbirii sau in cazul tusei. \r\nSunt disponibile mai multe modele in arhiva disponibila pe site.', 5, 'http://79.117.14.139/download/2/2.rar', 'N/A'),
(51, 'Masca', 'http://79.117.14.139/imagini/3.jpg', 'http://79.117.14.139/proiect.php?id=3', 'Lorem Ipsum', 5, 'http://79.117.14.139/download/3/3.rar', 'N/A'),
(52, 'Vizor protectie', 'http://79.117.14.139/imagini/4.jpg', 'http://79.117.14.139/proiect.php?id=4', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/4/4.rar', 'N/A'),
(53, 'Seringa', 'http://79.117.14.139/imagini/5.jpg', 'http://79.117.14.139/proiect.php?id=5', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/5/5.rar', 'N/A'),
(54, 'Stand de Eprubete', 'http://79.117.14.139/imagini/6.jpg', 'http://79.117.14.139/proiect.php?id=6', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/6/6.rar', 'N/A'),
(55, 'Sticle laborator', 'http://79.117.14.139/imagini/7.jpg', 'http://79.117.14.139/proiect.php?id=7', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/7/7.rar', 'N/A'),
(56, 'Sticle laborator', 'http://79.117.14.139/imagini/8.jpg', 'http://79.117.14.139/proiect.php?id=8', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/8/8.rar', 'N/A'),
(57, 'Sticla medicinala', 'http://79.117.14.139/imagini/9.jpg', 'http://79.117.14.139/proiect.php?id=9', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/9/9.rar', 'N/A'),
(58, 'Vizor de protectie', 'http://79.117.14.139/imagini/10.jpg', 'http://79.117.14.139/proiect.php?id=10', 'Lorem Ipsum', 2, 'http://79.117.14.139/10/10.rar', 'N/A'),
(59, 'Vizor de protectie', 'http://79.117.14.139/imagini/11.jpg', 'http://79.117.14.139/proiect.php?id=11', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/11/11.rar', 'N/A'),
(60, 'Vizor de protectie', 'http://79.117.14.139/imagini/12.jpg', 'http://79.117.14.139/proiect.php?id=12', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/12/12.rar', 'N/A'),
(61, 'Eprubeta', 'http://79.117.14.139/imagini/1.jpg', 'http://79.117.14.139/proiect.php?id=1', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/1/1.rar', 'N/A'),
(62, 'Masca', 'http://79.117.14.139/imagini/2.jpg', 'http://79.117.14.139/proiect.php?id=2', 'Model 3D de masca, foarte bun impotriva raspandirii particulelor fine(praf) si de saliva, in timpul vorbirii sau in cazul tusei. \r\nSunt disponibile mai multe modele in arhiva disponibila pe site.', 5, 'http://79.117.14.139/download/2/2.rar', 'N/A'),
(63, 'Masca', 'http://79.117.14.139/imagini/3.jpg', 'http://79.117.14.139/proiect.php?id=3', 'Lorem Ipsum', 5, 'http://79.117.14.139/download/3/3.rar', 'N/A'),
(64, 'Vizor protectie', 'http://79.117.14.139/imagini/4.jpg', 'http://79.117.14.139/proiect.php?id=4', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/4/4.rar', 'N/A'),
(65, 'Seringa', 'http://79.117.14.139/imagini/5.jpg', 'http://79.117.14.139/proiect.php?id=5', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/5/5.rar', 'N/A'),
(66, 'Stand de Eprubete', 'http://79.117.14.139/imagini/6.jpg', 'http://79.117.14.139/proiect.php?id=6', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/6/6.rar', 'N/A'),
(67, 'Sticle laborator', 'http://79.117.14.139/imagini/7.jpg', 'http://79.117.14.139/proiect.php?id=7', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/7/7.rar', 'N/A'),
(68, 'Sticle laborator', 'http://79.117.14.139/imagini/8.jpg', 'http://79.117.14.139/proiect.php?id=8', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/8/8.rar', 'N/A'),
(69, 'Sticla medicinala', 'http://79.117.14.139/imagini/9.jpg', 'http://79.117.14.139/proiect.php?id=9', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/9/9.rar', 'N/A'),
(70, 'Vizor de protectie', 'http://79.117.14.139/imagini/10.jpg', 'http://79.117.14.139/proiect.php?id=10', 'Lorem Ipsum', 2, 'http://79.117.14.139/10/10.rar', 'N/A'),
(71, 'Vizor de protectie', 'http://79.117.14.139/imagini/11.jpg', 'http://79.117.14.139/proiect.php?id=11', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/11/11.rar', 'N/A'),
(72, 'Vizor de protectie', 'http://79.117.14.139/imagini/12.jpg', 'http://79.117.14.139/proiect.php?id=12', 'Lorem Ipsum', 2, 'http://79.117.14.139/download/12/12.rar', 'N/A'),
(73, 'Eprubeta', 'http://79.117.14.139/imagini/1.jpg', 'http://79.117.14.139/proiect.php?id=1', 'Lorem Ipsum', 6, 'http://79.117.14.139/download/1/1.rar', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `mesaje`
--

CREATE TABLE `mesaje` (
  `id` int(10) NOT NULL,
  `nume` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(65) NOT NULL,
  `parola` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `parola`) VALUES
(1, 'edyun32@gmail.com', '6374e5aa479a7979d74ed08a65286a00491017d49087e4d1e2aead561aa5ee22fc73b998711b37808fa56623f18e21b1ca54f0d2ff52c16cf2aae5055cc2026f'),
(2, 'george_laslau@yahoo.com', '770e60c8974938e1f1b7c168faccb1442c695248a295c033663db76ae8bea242243b1aa2c3016bfd457e2a1bd1aeb2829e331bf8c586eb768ccd70ac9bc56398');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listari`
--
ALTER TABLE `listari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesaje`
--
ALTER TABLE `mesaje`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listari`
--
ALTER TABLE `listari`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `mesaje`
--
ALTER TABLE `mesaje`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
