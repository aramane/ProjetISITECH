-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 05 avr. 2018 à 12:25
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `location`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id_car` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `departureAgency` varchar(255) DEFAULT NULL,
  `departureDate` date DEFAULT NULL,
  `endingDate` date DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`code`),
  KEY `id_user` (`id_user`),
  KEY `id_car` (`id_car`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registration` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `id_option` int(11) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_option` (`id_option`,`id_category`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `car`
--

INSERT INTO `car` (`id`, `registration`, `name`, `color`, `model`, `brand`, `url`, `price`, `id_option`, `id_category`) VALUES
(1, NULL, NULL, 'Navy', 'Series 3', 'BMW', NULL, NULL, NULL, 1),
(2, NULL, NULL, 'grey', 'Series 5', 'BMW', NULL, NULL, NULL, 1),
(5, NULL, NULL, 'Black', 'Series 7', 'BMW', NULL, NULL, NULL, 1),
(6, NULL, NULL, 'blue', 'M3', 'BMW', NULL, NULL, NULL, 1),
(7, NULL, NULL, 'Navy', 'M5', 'BMW', NULL, NULL, NULL, 1),
(11, NULL, NULL, 'Red', 'C1', 'Citroen', NULL, NULL, NULL, 2),
(12, NULL, NULL, 'White', 'C2', 'Citroen', NULL, NULL, NULL, 2),
(13, NULL, NULL, 'Silver', 'C3', 'Citroen', NULL, NULL, NULL, 2),
(14, NULL, NULL, 'Purple', 'C4', 'Citroen', NULL, NULL, NULL, 2),
(15, NULL, NULL, 'Brown', 'C5', 'Citroen', NULL, NULL, NULL, 2),
(16, NULL, NULL, 'White', 'Partner', 'Peugeot', NULL, NULL, NULL, 3),
(17, NULL, NULL, 'Black', 'Expert', 'Peugeot', NULL, NULL, NULL, 3),
(18, NULL, NULL, 'Grey', 'Boxer', 'Peugeot', NULL, NULL, NULL, 3),
(19, NULL, NULL, 'Silver', 'Bipper', 'Peugeot', NULL, NULL, NULL, 3),
(20, NULL, NULL, 'White', 'Expert Vu', 'Peugeot', NULL, NULL, NULL, 3),
(21, NULL, NULL, 'White', 'Q1', 'Audi', NULL, NULL, NULL, 4),
(22, NULL, NULL, 'Red', 'Q2', 'Audi', NULL, NULL, NULL, 4),
(23, NULL, NULL, 'Black', 'Q3', 'Audi', NULL, NULL, NULL, 4),
(24, NULL, NULL, 'Blue', 'Q4', 'Audi', NULL, NULL, NULL, 4),
(25, NULL, NULL, 'Silver', 'Q5', 'Audi', NULL, NULL, NULL, 4),
(26, NULL, NULL, 'Black', 'Class G1', 'Mercedes', NULL, NULL, NULL, 5),
(27, NULL, NULL, 'Grey', 'Class G2', 'Mercedes', NULL, NULL, NULL, 5),
(28, NULL, NULL, 'Green', 'Class G3', 'Mercedes', NULL, NULL, NULL, 5),
(29, NULL, NULL, 'Navy', 'Class G4', 'Mercedes', NULL, NULL, NULL, 5),
(30, NULL, NULL, 'Tan', 'Class G5', 'Mercedes', NULL, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Structure de la table `caroption`
--

DROP TABLE IF EXISTS `caroption`;
CREATE TABLE IF NOT EXISTS `caroption` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `airbag` int(1) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `conditioner` int(1) DEFAULT NULL,
  `passenger` int(200) DEFAULT NULL,
  `permis` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'berline', NULL),
(2, 'citadine', NULL),
(3, 'utilitaire', NULL),
(4, 'suv', NULL),
(5, '4x4', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contract`
--

DROP TABLE IF EXISTS `contract`;
CREATE TABLE IF NOT EXISTS `contract` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `booking_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `car_registration` (`booking_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inspection`
--

DROP TABLE IF EXISTS `inspection`;
CREATE TABLE IF NOT EXISTS `inspection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `constat` int(1) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `inspector` varchar(255) DEFAULT NULL,
  `mileage` int(255) DEFAULT NULL,
  `fuel` varchar(255) DEFAULT NULL,
  `id_car` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_car` (`id_car`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reparation`
--

DROP TABLE IF EXISTS `reparation`;
CREATE TABLE IF NOT EXISTS `reparation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `description` text,
  `duration` varchar(255) DEFAULT NULL,
  `garage` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `id_car` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_car` (`id_car`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `type` varchar(2) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `premium` int(1) DEFAULT NULL,
  `id_authentification` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_authentification` (`id_authentification`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `address`, `password`, `email`, `name`, `firstName`, `type`, `phone`, `premium`, `id_authentification`) VALUES
(1, 'test', '', 'test', 'test', 'test', 'A', '0663547292', NULL, NULL),
(2, 'test', '', 'testt', 'test', 'test', 'A', '0663547292', NULL, NULL),
(3, 'test', '', 'testtt', 'test', 'test', 'A', '0663547292', NULL, NULL),
(4, NULL, 'Bidule', 'TEST', NULL, NULL, 'C', NULL, NULL, NULL),
(5, NULL, 'Bonjour', 'jerome.charlat@orange.fr', NULL, NULL, 'C', NULL, NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`id_car`) REFERENCES `car` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`id_option`) REFERENCES `caroption` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `car_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `contract_ibfk_1` FOREIGN KEY (`booking_code`) REFERENCES `booking` (`code`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `inspection`
--
ALTER TABLE `inspection`
  ADD CONSTRAINT `inspection_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `car` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `reparation`
--
ALTER TABLE `reparation`
  ADD CONSTRAINT `reparation_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `car` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
