-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Paź 05, 2026 at 08:15 AM
-- Wersja serwera: 8.4.11
-- Wersja PHP: 8.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mendela`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kraje`
--

CREATE TABLE `kraje` (
  `id` int NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `kraje`
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
  `id` int NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `stopy`
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
  `id` int NOT NULL,
  `id_kraj` int NOT NULL,
  `nominal` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `nr_kat` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `id_stop` int NOT NULL,
  `rok` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `zbior`
--

INSERT INTO `zbior` (`id`, `id_kraj`, `nominal`, `nr_kat`, `id_stop`, `rok`) VALUES
(6, 2, '1 Mark', 'DE-104', 2, 1914),
(7, 3, '1 Dollar', 'US-055', 3, 1921),
(8, 1, '10 Groszy', 'PL-012', 2, 1923),
(11, 1, '2 Złote', 'PL-045', 3, 1934),
(12, 2, '50 Pfennig', 'DE-018', 2, 1922),
(15, 2, '2 Mark', 'DE-150', 3, 1938),
(18, 2, '10 Pfennig', 'DE-005', 2, 1918),
(20, 1, '50 Groszy', 'PL-023', 3, 1938),
(23, 1, '1 Grosz', 'PL-002', 2, 1923),
(24, 2, '20 Pfennig', 'DE-040', 3, 1874),
(26, 2, '1 Mark', 'DE-104', 2, 1914),
(27, 3, '1 Dollar', 'US-055', 3, 1921),
(28, 1, '10 Groszy', 'PL-012', 2, 1923),
(31, 1, '2 Złote', 'PL-045', 3, 1934),
(35, 2, '2 Mark', 'DE-150', 3, 1938),
(40, 1, '50 Groszy', 'PL-023', 3, 1938),
(43, 1, '1 Grosz', 'PL-002', 2, 1923),
(44, 2, '20 Pfennig', 'DE-040', 3, 1874);

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
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `zbior`
--
ALTER TABLE `zbior`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `zbior`
--
ALTER TABLE `zbior`
  ADD CONSTRAINT `zbior_ibfk_1` FOREIGN KEY (`id_kraj`) REFERENCES `kraje` (`id`),
  ADD CONSTRAINT `zbior_ibfk_2` FOREIGN KEY (`id_stop`) REFERENCES `stopy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
