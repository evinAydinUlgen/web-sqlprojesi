-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: sql107.epizy.com
-- Üretim Zamanı: 22 Haz 2022, 13:27:05
-- Sunucu sürümü: 10.3.27-MariaDB
-- PHP Sürümü: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `epiz_32010705_yetkililer`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `authorities`
--

CREATE TABLE `authorities` (
  `id` int(11) NOT NULL,
  `userName` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `userPassword` varchar(45) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `authorities`
--

INSERT INTO `authorities` (`id`, `userName`, `userPassword`) VALUES
(1, 'evinnn', '0123'),
(2, 'vural', '123456'),
(3, 'muhammed', '123'),
(4, 'Ayhan', '0123'),
(5, 'ayhan', '456'),
(6, 'ahmet', 'ahmet'),
(7, 'melek', '789'),
(8, 'selinn', 'selamm'),
(9, 'kullanıcı1', '11111');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `passenger`
--

CREATE TABLE `passenger` (
  `pass_FName` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `pass_LName` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `pass_id` int(20) NOT NULL,
  `ticketId` int(11) NOT NULL,
  `gender` enum('Kadin','Erkek') COLLATE utf8_turkish_ci NOT NULL,
  `pass_Phone` text COLLATE utf8_turkish_ci NOT NULL,
  `address` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `passenger`
--

INSERT INTO `passenger` (`pass_FName`, `pass_LName`, `pass_id`, `ticketId`, `gender`, `pass_Phone`, `address`) VALUES
('Ayhan', 'Ulgen', 2, 1785582010, 'Erkek', '05554444444', 'BURSA OSMANGAZI EMEK SEYITNIZAM CADDESI 1015.SOKAK NO:15'),
('Sebnem', 'Gulay', 3, 1452525004, 'Kadin', '05772227777', 'ISTANBUL KUCUKCEKMECE INONU MAHALLESI GUL SOKAK NO:45'),
('Sanem NUR', 'Kurtulus', 6, 2141483611, 'Kadin', '05456669988', 'ANTALYA KEPEZ KEMER MAHALLESI CIKMAZ SOKAK NO:87'),
('Emre', 'Gulsen', 7, 2052398780, 'Erkek', '05369667777', 'KASTAMONU TASKOPRU BUDAMIS MAHALLESI ESIN SOKAK NO:1'),
('Cemal', 'Yuzbasi', 8, 2140036541, 'Erkek', '05311116688', 'DIYARBAKIR LICE MERKEZ MAHALLESI OZNUR SOKAK NO:9'),
('Sinan', 'Karali', 9, 2147483647, 'Erkek', '05678787878', 'IZMIR CESME ATATURK MAHALLESI CICEK SOKAK NO:44'),
('Zeynep', 'Yilmaz', 10, 1654545660, 'Kadin', '05546669001', 'SIVAS MERKEZ YENISEHIR MAHALLESI 566.SOKAK NO:5'),
('Ebru', 'Akdemir', 11, 1044872111, 'Kadin', '05536533310', 'MALATYA ARGUVAN YAKINCA MAHALLESI INIS SOKAK NO:30'),
('Berkay', 'Polat', 12, 2147483647, 'Erkek', '05649884206', 'ANKARA MAMAK YENIBAGLAR MAHALLESI 2021.SOKAK NO:12'),
('Vural', 'Bayrakli', 14, 1012356471, 'Erkek', '05462550000', 'KARS KAZMAN MERKEZ MAHALLESI MENEKSE SOKAK NO:5'),
('Narin', 'Goksu', 15, 2147483647, 'Kadin', '05565489850', 'BALIKESIR MERKEZ GEZI MAHALLESI GULDEN SOKAK NO:8');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `authorities`
--
ALTER TABLE `authorities`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`pass_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `authorities`
--
ALTER TABLE `authorities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `passenger`
--
ALTER TABLE `passenger`
  MODIFY `pass_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
