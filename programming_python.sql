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
-- Struktura tabeli dla tabeli `programming_python`
--

CREATE TABLE `programming_python` (
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
-- Zrzut danych tabeli `programming_python`
--

INSERT INTO `programming_python` (`id`, `question`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `answer_correct`, `image`) VALUES
(2, 'Za pomocą jakiego polecenia można wyświetlić coś w konsoli?', 'std::cout', 'print_r()', 'console.log()', 'print()', 'D', NULL),
(3, 'Na bazie jakiego języka programowania powstał Python?', 'C++', 'C', 'C#', 'Java', 'B', NULL),
(4, 'Jak zaimportować bibliotekę w Pythonie?', 'import', '#include', 'add_library', 'use', 'A', NULL),
(5, 'Co wyświetli w konsoli podany kod?', '[0, 2, 3, 4, 6, 8]', '[3]', '[1, 3, 5, 7, 9]', '[]', 'A', 'programming_python_1'),
(6, 'Jak w Pythonie zadeklarować zmienną?', 'let i = 0', 'i = 0', 'int i = 0', 'var i = 0', 'B', NULL),
(7, 'Który z poniższych typów danych jest używany do przechowywania tekstu w Pythonie?', 'text', 'string', 'str', 'char', 'C', NULL),
(8, 'Jakie słowo kluczowe służy do zdefiniowania funkcji w Pythonie?', 'func', 'function', 'method', 'def', 'D', NULL),
(9, 'Które z poniższych słów kluczowych jest używane do obsługi wyjątków w Pythonie?', 'try i except', 'catch i throw', 'error i handle', 'catch i finally', 'A', NULL),
(10, 'Jaki będzie wynik poniższego kodu?', '[1, 2, 3, 4, 5]', '[1, 2, 3, 4]', 'błąd', '[5, 1, 2, 3, 4]', 'C', 'programming_python_2'),
(11, 'Co oznacza „decorator” w Pythonie?', 'Funkcja, która zmienia typ danych', 'Funkcja, która zmienia zachowanie innej funkcji', 'Metoda z klasy', 'Funkcja do zmiany wartości zmiennych globalnych', 'B', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `programming_python`
--
ALTER TABLE `programming_python`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `programming_python`
--
ALTER TABLE `programming_python`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
