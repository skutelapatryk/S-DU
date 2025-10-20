-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 20, 2025 at 09:38 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

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
  `answer_correct` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `geography_capitals`
--

INSERT INTO `geography_capitals` (`id`, `question`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `answer_correct`, `image`) VALUES
(1, 'Jaka jest stolica Polski?', 'Gniezno', 'Kraków', 'Bytom', 'Warszawa', 'D', NULL),
(2, 'Jaka jest stolica Niemiec?', 'Warszawa', 'Berlin', 'Londyn', 'Dublin', 'B', NULL),
(3, 'Jaka jest stolica Francji?', 'Paryż', 'Lyon', 'Rzym', 'Barcelona', 'A', NULL),
(4, 'Jaka jest stolica Hiszpani?', 'Barcelona', 'Sewilla', 'Madryt', 'Grenada', 'C', NULL),
(5, 'Jaka jest stolica Australi?', 'Sydney', 'Canberra', 'Ottawa', 'Sosnowiec', 'B', NULL),
(6, 'Jaka jest stolica Rosji?', 'Kijów', 'Moskwa', 'Petersburg', 'Meksyk', 'B', NULL),
(7, 'Jaka jest stolica Ukrainy?', 'Lwów', 'Mariupol', 'Charków', 'Kijów', 'D', NULL),
(8, 'Jaka jest stolica Szwecji?', 'Malmo', 'Goteborg', 'Sztokholm', 'Bruksela', 'C', NULL),
(9, 'Jaka jest stolica Norwegii?', 'Molde', 'Trondheim', 'Oslo', 'Drammen', 'C', NULL),
(10, 'Jaka jest stolica Czech?', 'Praga', 'Pilzno', 'Łódź', 'Ostrawa', 'A', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `geography_flags`
--

CREATE TABLE `geography_flags` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `geography_flags`
--

INSERT INTO `geography_flags` (`id`, `question`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `answer_correct`, `image`) VALUES
(1, 'Jakiego kraju to jest flaga?', 'Rosja', 'Ukraina ', 'Polska', 'Niemcy ', 'A', 'geography_flags_1.png'),
(2, 'Jakiego kraju to jest flaga?', 'Nigeria', 'Ukraina ', 'Uganda', 'Niger', 'B', 'geography_flags_2.png'),
(3, 'Jakiego kraju to jest flaga?', 'Polska ', 'Niemcy', 'Rosja', 'Austria', 'B', 'geography_flags_3.png'),
(4, 'Jakiego kraju to jest flaga?', 'Meksyk', 'Kanada ', 'Stany Zjednoczone', 'Polska', 'B', 'geography_flags_4.png'),
(5, 'Jakiego kraju to jest flaga?', 'Bhutan', 'Nepal', 'Indie', 'Polska', 'C', 'geography_flags_5.png'),
(6, 'Jakiego kraju to jest flaga?', 'Boliwia', 'Gwatemala', 'Urugwaj', 'Paragwaj', 'C', 'geography_flags_6.png'),
(7, 'Jakiego kraju to jest flaga?', 'Wielka Brytania', 'Australia', 'Nowa Zelandia', 'Brytyjskie Wyspy Dziewicze', 'C', 'geography_flags_7.png'),
(8, 'Jakiego kraju to jest flaga?', 'Korea Południowa', 'Chiny', 'Tajwan', 'Korea Północna', 'D', 'geography_flags_8.png'),
(9, 'Jakiego kraju to jest flaga?', 'Tuvalu', 'Vanuatu', 'Samoa', 'Nowa Kaledonia', 'B', 'geography_flags_9.png'),
(10, 'Jakiego kraju to jest flaga?', 'Mikronezja', 'Indonezja', 'Nikaragua', 'Honduras', 'A', 'geography_flags_10.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `geography_localizations`
--

CREATE TABLE `geography_localizations` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `geography_localizations`
--

INSERT INTO `geography_localizations` (`id`, `question`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `answer_correct`, `image`) VALUES
(1, 'W jakim kraju zostało zrobione to zdjęcie?', 'Rosja', 'Ukraina ', 'Polska', 'Niemcy ', 'A', 'geography_localizations_1.png'),
(2, 'W jakim kraju zostało zrobione to zdjęcie?', 'Rosja', 'Ukraina ', 'Polska', 'Niemcy ', 'A', 'geography_localizations_2.png'),
(3, 'W jakim kraju zostało zrobione to zdjęcie?', 'Polska ', 'Niemcy', 'Rosja', 'Austria', 'B', 'geography_localizations_3.png'),
(4, 'W jakim kraju zostało zrobione to zdjęcie?', 'Meksyk', 'Kanada ', 'Stany Zjednoczone', 'Polska', 'B', 'geography_localizations_4.png'),
(5, 'W jakim kraju zostało zrobione to zdjęcie?', 'Bhutan', 'Nepal', 'Indie', 'Polska', 'C', 'geography_localizations_5.png'),
(6, 'W jakim kraju zostało zrobione to zdjęcie?', 'Serbia', 'Mołdawia', 'Rumunia', 'Bułgaria', 'C', 'geography_localizations_6.png'),
(7, 'W jakim kraju zostało zrobione to zdjęcie?', 'Izrael', 'Arabia Saudyjska', 'Zjednoczone Emiraty Arabskie', 'Kuwejt', 'B', 'geography_localizations_7.png'),
(8, 'W jakim kraju zostało zrobione to zdjęcie?', 'Polska', 'Słowacja', 'Czechy', 'Węgry', 'D', 'geography_localizations_8.png'),
(9, 'W jakim kraju zostało zrobione to zdjęcie?', 'Stany Zjednoczone', 'Australia', 'Nowa Zelandia', 'Meksyk', 'A', 'geography_localizations_9.png'),
(10, 'W jakim kraju zostało zrobione to zdjęcie?', 'Indie', 'Sri Lanka', 'Kambodża', 'Tajlandia', 'C', 'geography_localizations_10.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `math_arithmetic`
--

CREATE TABLE `math_arithmetic` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `answer_correct` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `math_trigonometry`
--

CREATE TABLE `math_trigonometry` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `math_trigonometry`
--

INSERT INTO `math_trigonometry` (`id`, `question`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `answer_correct`, `image`) VALUES
(1, 'Ile wynosi wynik: sin²α + cos²α', '1', '0', '-1', '2', 'A', NULL),
(2, 'cos120° to inaczej: ', '-cos60°', '-sin60°', 'tg45°', 'sin60°', 'A', NULL),
(3, 'tgα można wyliczyć ze wzoru: ', '1 - cosα', '1 - sinα', 'sinα : cosα', 'cosα : sinα', 'C', NULL),
(4, 'Na podanym rysunku, sinα równa się: ', 'a / b', 'b / c', 'c / a', 'a / c', 'D', 'math_trigonometry_1.png'),
(5, 'ctgα to inaczej: ', 'sinα : cosα', '1 : tgα', '1 : sinα', '1 : cosα', 'B', NULL);

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
-- Dumping data for table `programming_cpp`
--

INSERT INTO `programming_cpp` (`id`, `question`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `answer_correct`, `image`) VALUES
(1, 'Jak zadeklarować zmienną typu całkowitego w C++?', 'int x = 0;', 'float x = 0;', 'double x = 0;', 'long i = 0;', 'A', NULL),
(2, 'Co oznacza słowo kluczowe void w C++?', 'Określa zmienną, która może przyjmować dowolny typ', 'Określa typ funkcji, która nic nie zwraca', 'Określa, że funkcja ma zwracać wartość null', 'Określa, że funkcja jest typu całkowitego', 'B', NULL),
(3, 'Jakie polecenie służy do wyświetlenia czegoś w  konsoli?', 'print()', 'std::cin >>', 'std::cout >>', 'std::cout <<', 'D', NULL),
(4, 'Ile bitów zajmuje zmienna typu float w języku C++?', '8', '16', '4', '32', 'C', NULL),
(5, 'Który z poniższych sposobów jest poprawnym definiowaniem wskaźnika w C++?', 'int ptr = &x;', 'int *ptr = &x;', 'int ptr = 10;', 'pointer int *ptr = x;', 'B', NULL),
(6, 'Co to jest \'constructor\' w C++?', 'Funkcja, która jest wywoływana podczas zwalniania ', 'Funkcja, która tworzy obiekt danej klasy', 'Funkcja, która usuwa obiekt klasy', 'Funkcja, która wywołuje się przy tworzeniu instanc', 'D', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `programming_javascript`
--

CREATE TABLE `programming_javascript` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `programming_python`
--

CREATE TABLE `programming_python` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_A` varchar(50) NOT NULL,
  `answer_B` varchar(50) NOT NULL,
  `answer_C` varchar(50) NOT NULL,
  `answer_D` varchar(50) NOT NULL,
  `answer_correct` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programming_python`
--

INSERT INTO `programming_python` (`id`, `question`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `answer_correct`, `image`) VALUES
(1, 'Za pomocą jakiego polecenia można wyświetlić coś w konsoli?', 'std::cout', 'print_r()', 'console.log()', 'print()', 'D', NULL),
(2, 'Na bazie jakiego języka programowania powstał Python?', 'C++', 'C', 'C#', 'Java', 'B', NULL),
(3, 'Jak zaimportować bibliotekę w Pythonie?', 'import', '#include', 'add_library', 'use', 'A', NULL),
(4, 'Co wyświetli w konsoli podany kod?', '[0, 2, 3, 4, 6, 8]', '[3]', '[1, 3, 5, 7, 9]', '[]', 'A', 'programming_python_1'),
(5, 'Jak w Pythonie zadeklarować zmienną?', 'let i = 0', 'i = 0', 'int i = 0', 'var i = 0', 'B', NULL),
(6, 'Który z poniższych typów danych jest używany do przechowywania tekstu w Pythonie?', 'text', 'string', 'str', 'char', 'C', NULL),
(7, 'Jakie słowo kluczowe służy do zdefiniowania funkcji w Pythonie?', 'func', 'function', 'method', 'def', 'D', NULL),
(8, 'Które z poniższych słów kluczowych jest używane do obsługi wyjątków w Pythonie?', 'try i except', 'catch i throw', 'error i handle', 'catch i finally', 'A', NULL),
(9, 'Jaki będzie wynik poniższego kodu?', '[1, 2, 3, 4, 5]', '[1, 2, 3, 4]', 'błąd', '[5, 1, 2, 3, 4]', 'C', 'programming_python_2'),
(10, 'Co oznacza „decorator” w Pythonie?', 'Funkcja, która zmienia typ danych', 'Funkcja, która zmienia zachowanie innej funkcji', 'Metoda z klasy', 'Funkcja do zmiany wartości zmiennych globalnych', 'B', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `geography_capitals`
--
ALTER TABLE `geography_capitals`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `geography_flags`
--
ALTER TABLE `geography_flags`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `geography_localizations`
--
ALTER TABLE `geography_localizations`
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
-- Indeksy dla tabeli `programming_cpp`
--
ALTER TABLE `programming_cpp`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `programming_javascript`
--
ALTER TABLE `programming_javascript`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `programming_python`
--
ALTER TABLE `programming_python`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `geography_capitals`
--
ALTER TABLE `geography_capitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `geography_flags`
--
ALTER TABLE `geography_flags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `geography_localizations`
--
ALTER TABLE `geography_localizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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

--
-- AUTO_INCREMENT for table `programming_cpp`
--
ALTER TABLE `programming_cpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `programming_javascript`
--
ALTER TABLE `programming_javascript`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programming_python`
--
ALTER TABLE `programming_python`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
