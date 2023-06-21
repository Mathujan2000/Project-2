-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 21 jun 2023 om 09:39
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
  `naam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geboortedatum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`lid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=271 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `leden`
--

INSERT INTO `leden` (`lid_id`, `naam`, `geboortedatum`, `email`) VALUES
(256, 'Mathujan  Raveendranathan', '2023-06-22', 'mattoe098@gmail.com'),
(257, 'mathujan  raveendranathan', '2023-06-01', 'mattoe098@gmail.com'),
(258, '', '', ''),
(259, 'Joris Van de boom', '2023-05-31', 'joris@gmail.com'),
(260, 'Joris Van de boom', '2023-05-31', 'joris@gmail.com'),
(261, 'Mathujan  Raveendranathan', '2023-06-08', 'mattoe098@gmail.com'),
(262, '<script>alert(\'hoi\')</script>', '2023-06-07', 'mattoe098@gmail.com'),
(263, '<script>alert(\'hoi\')</script>', '2023-06-07', 'mattoe098@gmail.com'),
(264, 'Mathujan', '2023-06-10', 'mattoe098@gmail.com'),
(265, 'Mathujan', '2023-06-10', 'mattoe098@gmail.com'),
(266, 'Mathujan', '2023-06-10', 'mattoe098@gmail.com'),
(267, 'Mathujan', '2023-06-10', 'mattoe098@gmail.com'),
(268, 'mooo', '2023-06-05', 'mattoe098@gmail.com'),
(269, 'Mathujan', '2023-06-07', 'mattoe098@gmail.com'),
(270, 'mathujan', '2023-06-10', 'mattoe098@gmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `standpunt`
--

DROP TABLE IF EXISTS `standpunt`;
CREATE TABLE IF NOT EXISTS `standpunt` (
  `id` int NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `standpunt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thema_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `thema_id` (`thema_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `standpunt`
--

INSERT INTO `standpunt` (`id`, `naam`, `standpunt`, `thema_id`) VALUES
(1, 'Atjje Kuiken', 'Goed werk', 1),
(2, 'Henk Nijboer', 'Liefdevolle Zorg', 2),
(3, 'Kati Piri', 'Onderwijs', 3),
(4, 'Joris Thijssen', 'Volkshuisvesting', 4),
(5, 'Barbara Kathmann', 'Schone Toekomst', 5),
(6, 'Habtamu de Hoop', 'Veiligheid', 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `themas`
--

DROP TABLE IF EXISTS `themas`;
CREATE TABLE IF NOT EXISTS `themas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tekst` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `themas`
--

INSERT INTO `themas` (`id`, `titel`, `tekst`) VALUES
(1, 'Goedwerken', 'Een fijne baan, plezier hebben met je collega Een zeker inkomen, waarmee je durft te dromen over je toekomst: over de koop van je eigen huis, het beginnen van een gezin of het opstarten van een eigen bedrijf. Een fijne baan en een inkomen waar je op kunt.'),
(2, 'Liefdevolle Zorg', 'Lorem ipsum dolor sit amet, consectetur adipi'),
(3, 'Onderwijs', 'Lorem ipsum dolor sit amet, consectetur adipi'),
(4, 'Volkshuisvesting', 'Lorem ipsum dolor sit amet, consectetur adipi'),
(5, 'Schone Toekomst', 'Lorem ipsum dolor sit amet, consectetur adipi'),
(6, 'Veiligheid', 'Lorem ipsum dolor sit amet, consectetur adipi');

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `standpunt`
--
ALTER TABLE `standpunt`
  ADD CONSTRAINT `standpunt_ibfk_1` FOREIGN KEY (`thema_id`) REFERENCES `themas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
