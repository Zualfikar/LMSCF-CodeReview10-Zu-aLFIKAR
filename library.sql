-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Mrz 2020 um 00:08
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `library`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `authoer`
--

CREATE TABLE `authoer` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(40) NOT NULL,
  `sur_name` varchar(40) DEFAULT NULL,
  `media_name` enum('book','cd','dvd') DEFAULT 'book'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `code` varchar(40) NOT NULL,
  `description` varchar(600) DEFAULT NULL,
  `type` enum('book','cd','dvd') DEFAULT 'book',
  `status` enum('available','reserved') DEFAULT 'available',
  `publish_date` date DEFAULT NULL,
  `publisher` varchar(40) DEFAULT NULL,
  `author` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`media_id`, `title`, `image`, `code`, `description`, `type`, `status`, `publish_date`, `publisher`, `author`) VALUES
(1, 'Happy', 'imgs/m1.jfif', '001', 'Why More or Less Everything is Absolutely Fine', 'book', 'reserved', '2019-02-13', 'Mark', 'John'),
(2, 'You are you only limit', 'imgs/m2.jfif', '002', 'Nowadays, the belief that your only limit is you is an actual fact. Each day, ever more evidence comes to confirm this point as an inevitability. You should be aware that your mind is everything and controls every aspect of your life. It has even a significant influence over your body.', 'book', 'available', '2017-08-15', 'Josef', 'Hussien'),
(3, 'Dark Side of the Moon', 'imgs/m5.jfif', '003', 'Its deep and sounds amazing nothing like it. The songwriting as has meaning and the album as a whole feels like it was written with more of a purpose then just to make people dance but instead to make them think. Its crazy money gets played on the radio when its about corporate greed', 'cd', 'available', '2018-11-22', 'Floyd', 'Pink'),
(4, 'Pepper\'s Lonely Hearts', 'imgs/m6.jfif', '004', 'This album is the one that changed the face of music more than any other album. It virtually created the term \"art rock\" and brought rock to be respected. The innovation on this album led to practically every other album on this list. Whether it be the studio amazement on \"Dark Side Of The Moon\" or even the work with the orchestra on \"S&M\" The Beatles started it all here. If you wanna hear good work with an orchestra, then listen to \"A Day In The Life. \" You\'ll get some good playing there. Without Sgt Pepper, rock as we know it wouldn\'t even exist.', 'dvd', 'available', '2019-12-26', 'Band', 'club'),
(5, 'Abbey Road ', 'imgs/m7.jfif', '005', 'This is my second favorite album, My first being one that I like that everyone would hate. Also that one doesn\'t stand the test of time like this one does. This album is truly a masterwork that only gets better with repeated listens. It has flows perfectly, and is far more versatile and emotionally balanced than Sgt. Pepper. This album is too perfect showing how awesome the Beatles truly are.', 'dvd', 'available', '2013-06-17', 'Floyd', 'Beatles'),
(6, 'Vacation', 'imgs/m4.jfif', '006', 'In the near future after a global crisis causes crops to fail and species to disappear . . .  something even more deadly happens. Groups of humans around the world suddenly become predators, feeding off their own kind. These “Can Heads” grow to such a threat that fences, gated compounds, and SWAT–style police protection become absolutely necessary in order to live.', 'book', 'available', '2020-03-18', 'Amazon', 'matheo'),
(7, 'Mozart', 'imgs/m8.jfif', '007', 'Wolfgang Amadeus Mozart ist nach heutigen Begriffen ein Superstar der klassischen Musik. 1756 in Salzburg geboren, begann das Wunderkind bereits mit 4 Jahren Klavier zu spielen. Sein viel zu kurzes Leben widmete er der Musik und dem Reisen, er komponierte über 25.000 Seiten Musik und verbrachte zehn Jahre seines Lebens im Ausland. Noch heute zählen seine Opern und Kompositionen zu den größten musikalischen Errungenschaften aller Zeiten.', 'cd', 'available', '2019-07-16', 'thalia', 'mozart'),
(8, 'Electronic', 'imgs/m10.jfif', '008', 'Martin Garrix made a swift and sensational rise to the No.1 spot of our Top 100 DJs poll back in 2016 when he was just 20 years old. After first appearing at No.4 back in 2014 (propelled initially by the worldwide success of his breakthrough hit ‘Animals’), he retained the title in 2017 and 2018, but after that incredible run, he has finally been knocked off his perch.', 'dvd', 'available', '2020-03-25', 'Garrix', 'Martin'),
(9, 'Hello', 'imgs/m11.jfif', '009', '25 ist das dritte Studioalbum der britischen Sängerin Adele. Es wurde am 20. November 2015 weltweit veröffentlicht. Wie schon die ersten beiden Alben 19 und 21 ist es nach dem Alter der Sängerin benannt, in dem sie die Arbeit an dem Album begann. Die Produktion hat also zwei Jahre gedauert.', 'cd', 'available', '2019-11-12', 'Greg', 'Adele');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(40) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `size` enum('small','medium','larg') DEFAULT 'small'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `authoer`
--
ALTER TABLE `authoer`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `author_name` (`author_name`);

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `author` (`author`),
  ADD KEY `publisher` (`publisher`);

--
-- Indizes für die Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`),
  ADD KEY `publisher_name` (`publisher_name`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `authoer`
--
ALTER TABLE `authoer`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `authoer`
--
ALTER TABLE `authoer`
  ADD CONSTRAINT `author_name` FOREIGN KEY (`author_name`) REFERENCES `media` (`author`) ON UPDATE CASCADE;

--
-- Constraints der Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD CONSTRAINT `publisher_name` FOREIGN KEY (`publisher_name`) REFERENCES `media` (`publisher`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
