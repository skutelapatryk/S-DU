-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 22, 2025 at 10:20 AM
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
-- Database: `pytania`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `math_cartesian_plane`
--

CREATE TABLE `math_cartesian_plane` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `math_cartesian_plane`
--

INSERT INTO `math_cartesian_plane` (`id`, `question`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `answer_correct`) VALUES
(1, 'Rozwiąż pierwiastki: x(2-x)', 'x=0, x=2', 'x=0, x=-2', 'x=2, x=2', 'x=2, x=-2', 'x=0, x=2'),
(2, 'Rozwiąż pierwiastki: x(x-4)', 'x=0, x=2', 'x=0, x=4', 'x=4', 'x=4, x=-4', 'x=0, x=4'),
(3, 'W kartezjańskim układzie współrzędnych (x, y) proste k oraz l są określone równaniami\r\nk: y=(3m−2)x−2\r\nl: y=(2m+4)x+2\r\n\r\nProste k oraz l są równoległe, gdy liczba m jest równa', '(-6)', '2', '(-2)', '6', '6');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `math_cartesian_plane`
--
ALTER TABLE `math_cartesian_plane`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `math_cartesian_plane`
--
ALTER TABLE `math_cartesian_plane`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
