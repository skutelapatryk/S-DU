-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 15, 2025 at 10:18 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questions`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `geography_capitals`
--

CREATE TABLE `geography_capitals` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `geography_capitals`
--

INSERT INTO `geography_capitals` (`id`, `question`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `answer_correct`) VALUES
(1, 'Jaka jest stolica Polski?', 'Gniezno', 'Kraków', 'Bytom', 'Warszawa', 'D'),
(2, 'Jaka jest stolica Niemiec?', 'Warszawa', 'Berlin', 'Londyn', 'Dublin', 'B'),
(3, 'Jaka jest stolica Francji?', 'Paryż', 'Lyon', 'Rzym', 'Barcelona', 'A'),
(4, 'Jaka jest stolica Hiszpani?', 'Barcelona', 'Sewilla', 'Madryt', 'Grenada', 'C'),
(5, 'Jaka jest stolica Australi?', 'Sydney', 'Canberra', 'Ottawa', 'Sosnowiec', 'B'),
(6, 'Jaka jest stolica Rosji?', 'Kijów', 'Moskwa', 'Petersburg', 'Meksyk', 'B'),
(7, 'Jaka jest stolica Ukrainy?', 'Lwów', 'Mariupol', 'Charków', 'Kijów', 'D'),
(8, 'Jaka jest stolica Szwecji?', 'Malmo', 'Goteborg', 'Sztokholm', 'Bruksela', 'C'),
(9, 'Jaka jest stolica Norwegii?', 'Molde', 'Trondheim', 'Oslo', 'Drammen', 'C'),
(10, 'Jaka jest stolica Czech?', 'Praga', 'Pilzno', 'Łódź', 'Ostrawa', 'A');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `geography_capitals`
--
ALTER TABLE `geography_capitals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `geography_capitals`
--
ALTER TABLE `geography_capitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
