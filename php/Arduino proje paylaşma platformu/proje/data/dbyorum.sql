-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 May 2016, 15:08:43
-- Sunucu sürümü: 10.1.13-MariaDB
-- PHP Sürümü: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dbyorum`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

CREATE TABLE `yorum` (
  `id` int(11) NOT NULL,
  `yapan` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_yorum` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `onay` int(11) NOT NULL DEFAULT '0',
  `sayfa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorum`
--

INSERT INTO `yorum` (`id`, `yapan`, `yorum_yorum`, `onay`, `sayfa_id`) VALUES
(1, 'ertan ', 'Süperrr', 1, 1),
(3, 'Okan', 'harika', 1, 2),
(4, 'tunay', 'ımmmmmfffffffffffff', 1, 4);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `yorum`
--
ALTER TABLE `yorum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
