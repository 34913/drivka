-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 03. zář 2020, 23:30
-- Verze serveru: 10.4.8-MariaDB
-- Verze PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `drivka`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `seznamzaku`
--

CREATE TABLE `seznamzaku` (
  `id` int(11) NOT NULL,
  `jmeno` varchar(255) NOT NULL,
  `trida` int(11) NOT NULL,
  `vyvolan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='tabulka seznamu žáků';

--
-- Vypisuji data pro tabulku `seznamzaku`
--

INSERT INTO `seznamzaku` (`id`, `jmeno`, `trida`, `vyvolan`) VALUES
(1, 'František Holý', 1, 0),
(2, 'Šimon Vojtek', 1, 0),
(3, 'Štěpán Chrast', 1, 0);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `seznamzaku`
--
ALTER TABLE `seznamzaku`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
