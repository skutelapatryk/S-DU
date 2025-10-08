-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 08, 2025 at 10:10 AM
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
-- Struktura tabeli dla tabeli `geography_flags`
--

CREATE TABLE `geography_flags` (
  `id` int(10) UNSIGNED NOT NULL,
  `flags` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `geography_flags`
--

INSERT INTO `geography_flags` (`id`, `flags`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `answer_correct`) VALUES
(1, 'W jakim kraju zostało zrobione to zdjęcie?', 'Rosja', 'Ukraina ', 'Polska', 'Niemcy ', 'A'),
(2, 'W jakim kraju zostało zrobione to zdjęcie?', 'Rosja', 'Ukraina ', 'Polska', 'Niemcy ', 'A'),
(3, 'W jakim kraju zostało zrobione to zdjęcie?', 'Polska ', 'Niemcy', 'Rosja', 'Austria', 'B'),
(4, 'W jakim kraju zostało zrobione to zdjęcie?', 'Meksyk', 'Kanada ', 'Stany Zjednoczone', 'Polska', 'B'),
(5, 'W jakim kraju zostało zrobione to zdjęcie?', 'Bhutan', 'Nepal', 'Indie', 'Polska', 'C');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `math_arithmetic`
--

CREATE TABLE `math_arithmetic` (
  `id` int(10) UNSIGNED NOT NULL,
  `arithmetic` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `math_cartesian_plane`
--

CREATE TABLE `math_cartesian_plane` (
  `id` int(10) UNSIGNED NOT NULL,
  `cartesian_plane` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `math_trigonometry`
--

CREATE TABLE `math_trigonometry` (
  `id` int(10) UNSIGNED NOT NULL,
  `trigonometry` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `math_trigonometry`
--

INSERT INTO `math_trigonometry` (`id`, `trigonometry`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `answer_correct`) VALUES
(1, 'Ile wynosi wynik: sin²α + cos²α', '1', '0', '-1', '2', 'A'),
(2, 'cos120° to inaczej: ', 'cos60°', '-sin60°', 'tg45°', 'sin60°', 'D'),
(3, 'tgα można wyliczyć ze wzoru: ', '1 - cosα', '1 - sinα', 'sinα : cosα', 'cosα : sinα', 'C'),
(4, 'Na podanym rysunku, sinα równa się: ', 'a / b', 'b / c', 'c / a', 'a / c', 'D'),
(5, 'ctgα to inaczej: ', 'sinα : cosα', '1 : tgα', '1 : sinα', '1 : cosα', 'B');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `geography_flags`
--
ALTER TABLE `geography_flags`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `math_arithmetic`
--
ALTER TABLE `math_arithmetic`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `math_cartesian_plane`
--
ALTER TABLE `math_cartesian_plane`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `math_trigonometry`
--
ALTER TABLE `math_trigonometry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `geography_flags`
--
ALTER TABLE `geography_flags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `math_arithmetic`
--
ALTER TABLE `math_arithmetic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `math_cartesian_plane`
--
ALTER TABLE `math_cartesian_plane`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `math_trigonometry`
--
ALTER TABLE `math_trigonometry`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
