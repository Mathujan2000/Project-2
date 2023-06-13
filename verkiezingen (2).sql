-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 13 jun 2023 om 10:46
-- Serverversie: 8.0.31
-- PHP-versie: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `verkiezingen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leden`
--

DROP TABLE IF EXISTS `leden`;
CREATE TABLE IF NOT EXISTS `leden` (
  `lid_id` int NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) NOT NULL,
  `geboortedatum` varchar(255) NOT NULL,
  `partij_id` int NOT NULL,
  PRIMARY KEY (`lid_id`)
) ENGINE=MyISAM AUTO_INCREMENT=256 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `standpunt`
--

DROP TABLE IF EXISTS `standpunt`;
CREATE TABLE IF NOT EXISTS `standpunt` (
  `id` int NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) NOT NULL,
  `standpunt` text NOT NULL,
  `partij_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
