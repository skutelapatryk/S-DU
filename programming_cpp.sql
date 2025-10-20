-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Paź 2025, 14:03
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `questions`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `programming_cpp`
--

CREATE TABLE `programming_cpp` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `programming_cpp`
--

INSERT INTO `programming_cpp` (`id`, `question`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `answer_correct`, `image`) VALUES
(1, 'Jak zadeklarować zmienną typu całkowitego w C++?', 'int x = 0;', 'float x = 0;', 'double x = 0;', 'long i = 0;', 'A', NULL),
(2, 'Co oznacza słowo kluczowe void w C++?', 'Określa zmienną, która może przyjmować dowolny typ', 'Określa typ funkcji, która nic nie zwraca', 'Określa, że funkcja ma zwracać wartość null', 'Określa, że funkcja jest typu całkowitego', 'B', NULL),
(3, 'Jakie polecenie służy do wyświetlenia czegoś w  konsoli?', 'print()', 'std::cin >>', 'std::cout >>', 'std::cout <<', 'D', NULL),
(4, 'Ile bitów zajmuje zmienna typu float w języku C++?', '8', '16', '4', '32', 'C', NULL),
(5, 'Który z poniższych sposobów jest poprawnym definiowaniem wskaźnika w C++?', 'int ptr = &x;', 'int *ptr = &x;', 'int ptr = 10;', 'pointer int *ptr = x;', 'B', NULL),
(6, 'Co to jest \'constructor\' w C++?', 'Funkcja, która jest wywoływana podczas zwalniania ', 'Funkcja, która tworzy obiekt danej klasy', 'Funkcja, która usuwa obiekt klasy', 'Funkcja, która wywołuje się przy tworzeniu instanc', 'D', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `programming_cpp`
--
ALTER TABLE `programming_cpp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `programming_cpp`
--
ALTER TABLE `programming_cpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
