-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Wrz 24, 2025 at 10:12 AM
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
  `arithmetic` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `geography_flags`
--

INSERT INTO `geography_flags` (`arithmetic`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `answer_correct`) VALUES
('W jakim kraju zostało zrobione to zdjęcie?', 'Rosja', 'Ukraina ', 'Polska', 'Niemcy ', 'Rosja'),
('W jakim kraju zostało zrobione to zdjęcie?', 'Rosja', 'Ukraina ', 'Polska', 'Niemcy ', 'Rosja'),
('W jakim kraju zostało zrobione to zdjęcie?', 'Polska ', 'Niemcy', 'Rosja', 'Austria', 'Niemcy'),
('W jakim kraju zostało zrobione to zdjęcie?', 'Meksyk', 'Kanada ', 'Stany Zjednoczone', 'Polska', 'Kanada'),
('W jakim kraju zostało zrobione to zdjęcie?', 'Bhutan', 'Nepal', 'Indie', 'Polska', 'Indie');

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
(1, 'Ile wynosi wynik: sin²α + cos²α', '1', '0', '-1', '2', '1'),
(2, 'cos120° to inaczej: ', 'cos60°', '-sin60°', 'tg45°', 'sin60°', 'sin60°'),
(3, 'tgα można wyliczyć ze wzoru: ', '1 - cosα', '1 - sinα', 'sinα : cosα', 'cosα : sinα', 'sinα : cosα'),
(4, 'Na podanym rysunku, sinα równa się: ', 'a / b', 'b / c', 'c / a', 'a / c', 'a / c'),
(5, 'ctgα to inaczej: ', 'sinα : cosα', '1 : tgα', '1 : sinα', '1 : cosα', '1: tgα');

--
-- Indeksy dla zrzutów tabel
--

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
