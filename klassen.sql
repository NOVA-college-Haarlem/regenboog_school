-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Gegenereerd op: 12 nov 2025 om 09:31
-- Serverversie: 12.0.2-MariaDB-ubu2404
-- PHP-versie: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regenboog_school`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klassen`
--

CREATE TABLE `klassen` (
  `id` int(11) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `lokaal` varchar(10) NOT NULL,
  `juf_meester` varchar(100) NOT NULL,
  `aantal_leerlingen` int(11) NOT NULL,
  `verdieping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `klassen`
--

INSERT INTO `klassen` (`id`, `naam`, `lokaal`, `juf_meester`, `aantal_leerlingen`, `verdieping`) VALUES
(1, 'Groep 1A', 'A101', 'Juf Emma van der Berg', 24, 1),
(2, 'Groep 2A', 'A102', 'Juf Sophie de Vries', 22, 1),
(3, 'Groep 3A', 'B201', 'Meester Lucas Janssen', 26, 2),
(4, 'Groep 4A', 'B202', 'Juf Anna Bakker', 25, 2),
(5, 'Groep 5A', 'C301', 'Meester Tim Visser', 28, 3),
(6, 'Groep 6A', 'C302', 'Juf Lisa Smit', 27, 3),
(7, 'Groep 7A', 'D401', 'Meester David de Jong', 24, 4),
(8, 'Groep 8A', 'D402', 'Juf Maria Mulder', 26, 4);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klassen`
--
ALTER TABLE `klassen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klassen`
--
ALTER TABLE `klassen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
