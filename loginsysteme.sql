-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 31 Mai 2020 à 13:38
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `loginsysteme`
--

-- --------------------------------------------------------

--
-- Structure de la table `statcorona`
--

CREATE TABLE IF NOT EXISTS `statcorona` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `malade` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

--
-- Contenu de la table `statcorona`
--

INSERT INTO `statcorona` (`Id`, `malade`) VALUES
(75, 2),
(74, 2),
(73, 2),
(72, 0),
(71, 0),
(70, 0),
(69, 2),
(68, 1),
(67, 1),
(66, 1),
(65, 0),
(64, 0),
(63, 2),
(62, 1),
(61, 1),
(60, 0),
(59, 2),
(58, 2),
(57, 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Datedenaissance` varchar(255) NOT NULL,
  `NumeroCIN` int(11) NOT NULL,
  `numtel` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `rdv` varchar(255) NOT NULL,
  `PACorona` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`Id`, `Nom`, `Prenom`, `Datedenaissance`, `NumeroCIN`, `numtel`, `Email`, `Login`, `pass`, `type`, `rdv`, `PACorona`) VALUES
(2, 'wided', 'fadhlewi', '17/06/94', 147258, 53010763, 'wided@gmail.com', 'wided', '12345', 0, '20/02/2020', 0),
(1, 'Ghassen', 'Hamdi', '17/06/1990', 12345678, 25000000, 'ghassen@gmail.com', 'ghassen', '123', 1, '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
