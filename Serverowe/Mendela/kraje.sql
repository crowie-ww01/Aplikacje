-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Wrz 28, 2026 at 08:06 AM
-- Wersja serwera: 12.0.2-MariaDB-log
-- Wersja PHP: 8.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kraje`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kraje`
--

CREATE TABLE `kraje` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `kraje`
--

INSERT INTO `kraje` (`id`, `nazwa`, `src`) VALUES
(1, 'Albania', 'Albania.jpg'),
(2, 'Algieria', 'Algieria.jpg'),
(3, 'Australia', 'Australia.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stopy`
--

CREATE TABLE `stopy` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `stopy`
--

INSERT INTO `stopy` (`id`, `nazwa`) VALUES
(1, 'silver'),
(2, 'gold'),
(3, 'copper');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zbior`
--

CREATE TABLE `zbior` (
  `id` int(11) NOT NULL,
  `id_kraj` int(11) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `nr_kat` varchar(255) NOT NULL,
  `id_stop` int(11) NOT NULL,
  `rok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kraje`
--
ALTER TABLE `kraje`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `stopy`
--
ALTER TABLE `stopy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zbior`
--
ALTER TABLE `zbior`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kraj` (`id_kraj`),
  ADD KEY `stop` (`id_stop`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `zbior`
--
ALTER TABLE `zbior`
  ADD CONSTRAINT `zbior_ibfk_1` FOREIGN KEY (`id_kraj`) REFERENCES `kraje` (`id`),
  ADD CONSTRAINT `zbior_ibfk_2` FOREIGN KEY (`id_stop`) REFERENCES `stopy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
