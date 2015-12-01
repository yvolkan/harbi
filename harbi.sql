-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Ara 2015, 00:01:58
-- Sunucu sürümü: 5.5.27
-- PHP Sürümü: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `harbi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `istek`
--

CREATE TABLE IF NOT EXISTS `istek` (
  `istekID` int(11) NOT NULL AUTO_INCREMENT,
  `kimdenUyeID` int(11) NOT NULL,
  `kimeUyeID` int(11) NOT NULL,
  `istekTarih` datetime NOT NULL,
  `istekDurum` char(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`istekID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `uyeID` int(11) NOT NULL AUTO_INCREMENT,
  `uyeAdi` varchar(75) NOT NULL,
  `uyeSoyadi` varchar(75) NOT NULL,
  `uyeRumuz` varchar(75) NOT NULL,
  `uyeEposta` varchar(100) NOT NULL,
  `uyeSifre` varchar(50) NOT NULL,
  `uyeTarih` datetime NOT NULL,
  PRIMARY KEY (`uyeID`),
  KEY `uyeID` (`uyeID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uyeID`, `uyeAdi`, `uyeSoyadi`, `uyeRumuz`, `uyeEposta`, `uyeSifre`, `uyeTarih`) VALUES
(1, 'Volkan', 'YILMAZ', 'voLkan', 'volkyilmaz@hotmail.com', '123456', '2015-11-24 00:00:00'),
(2, 'Zeynep', 'YILMAZ', 'Zeyno', 'zeynep.ecen87@hotmail.com', '123456', '2015-12-01 23:23:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
