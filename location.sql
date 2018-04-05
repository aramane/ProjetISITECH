-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 05 Avril 2018 à 11:52
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `booking` (
  `id_car` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `departureAgency` varchar(255) DEFAULT NULL,
  `departureDate` date DEFAULT NULL,
  `endingDate` date DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `registration` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `id_option` int(11) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `car`
--

INSERT INTO `car` (`id`, `registration`, `name`, `color`, `model`, `brand`, `url`, `price`, `id_option`, `id_category`) VALUES
(38, 'TEST', 'Allo', 'Bleu', '206', 'Peugeot', NULL, NULL, NULL, NULL),
(39, 'AB273XW', 'Titine', 'Bleu', '206', 'Peugeot', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `caroption`
--

CREATE TABLE `caroption` (
  `id` int(11) NOT NULL,
  `airbag` int(1) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `conditioner` int(1) DEFAULT NULL,
  `passenger` int(200) DEFAULT NULL,
  `permis` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contract`
--

CREATE TABLE `contract` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `booking_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inspection`
--

CREATE TABLE `inspection` (
  `id` int(11) NOT NULL,
  `constat` int(1) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `inspector` varchar(255) DEFAULT NULL,
  `mileage` int(255) DEFAULT NULL,
  `fuel` varchar(255) DEFAULT NULL,
  `id_car` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reparation`
--

CREATE TABLE `reparation` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `description` text,
  `duration` varchar(255) DEFAULT NULL,
  `garage` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `id_car` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `type` varchar(2) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `premium` int(1) DEFAULT NULL,
  `id_authentification` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `address`, `password`, `email`, `name`, `firstName`, `type`, `phone`, `premium`, `id_authentification`) VALUES
(1, 'test', '', 'test', 'test', 'test', 'A', '0663547292', NULL, NULL),
(2, 'test', '', 'testt', 'test', 'test', 'A', '0663547292', NULL, NULL),
(3, 'test', '', 'testtt', 'test', 'test', 'A', '0663547292', NULL, NULL),
(4, NULL, 'Bidule', 'TEST', NULL, NULL, 'C', NULL, NULL, NULL),
(5, NULL, 'Bonjour', 'jerome.charlat@orange.fr', NULL, NULL, 'C', NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`code`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_car` (`id_car`);

--
-- Index pour la table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_option` (`id_option`,`id_category`),
  ADD KEY `id_category` (`id_category`);

--
-- Index pour la table `caroption`
--
ALTER TABLE `caroption`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_registration` (`booking_code`);

--
-- Index pour la table `inspection`
--
ALTER TABLE `inspection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_car` (`id_car`);

--
-- Index pour la table `reparation`
--
ALTER TABLE `reparation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_car` (`id_car`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_authentification` (`id_authentification`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `caroption`
--
ALTER TABLE `caroption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reparation`
--
ALTER TABLE `reparation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
