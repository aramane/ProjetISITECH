-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 09 avr. 2018 à 15:05
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
(1, NULL, NULL, 'Navy', 'Series 3', 'BMW', 'https://www.bmw.fr/content/dam/bmw/common/all-models/3-series/sedan/2015/model-card/BMW-3-Series-Sedan_ModelCard.png/_jcr_content/renditions/cq5dam.resized.img.585.low.time1447941860979.png', 50, 1, 1),
(2, NULL, NULL, 'grey', 'Series 5', 'BMW', 'https://www.bmw.fr/content/dam/bmw/common/all-models/5-series/gran-turismo/2013/model-card/BMW-5-Series-Gran-Turismo_ModelCard.png/_jcr_content/renditions/cq5dam.resized.img.585.low.time1431011425106.png', 60, 2, 1),
(5, NULL, NULL, 'Black', 'Series 7', 'BMW', 'https://images.elite-auto.fr/visuel/BMW/bmw_16740isa6b_angularfront.png', 80, 3, 1),
(6, NULL, NULL, 'blue', 'M3', 'BMW', 'https://images.elite-auto.fr/visuel/BMW/bmw_15m3sd6a_angularfront.png', 100, 2, 1),
(7, NULL, NULL, 'Navy', 'M5', 'BMW', 'https://www.cstatic-images.com/car-pictures/xl/usc80bmc171a021001.png', 40, 1, 1),
(11, NULL, NULL, 'Red', 'C1', 'Citroen', 'https://images.elite-auto.fr/visuel/CITROEN/citroen_15c1airscapefeel3mc2bc_angularfront.png', 55, 3, 2),
(12, NULL, NULL, 'White', 'C2', 'Citroen', 'https://www.alamo.com/alamoData/vehicle/bookingCountries/MQ/CARS/MBMR.doi.320.high.imageSmallSideProfileNodePath.png/1453151769143.png', 30, 2, 2),
(13, NULL, NULL, 'Silver', 'C3', 'Citroen', 'http://media.citroen.fr/image/88/9/-0mm00nzr_003.231889.png', 25, 3, 2),
(14, NULL, NULL, 'Purple', 'C4', 'Citroen', 'http://media.citroen.fr/image/88/2/1cb7a5.190882.152.png', 65, 1, 2),
(15, NULL, NULL, 'Brown', 'C5', 'Citroen', 'https://code.peinturevoiture.fr//images/modeles/citroen-c5.png', 40, 2, 2),
(16, NULL, NULL, 'White', 'Partner', 'Peugeot', 'https://www.autosynergy.co.uk/assets/images/new-vehicles/peugeot-partner.png', 100, 2, 3),
(17, NULL, NULL, 'Black', 'Expert', 'Peugeot', 'https://images.elite-auto.fr/visuel/modeles/600x400/peugeot_expert_combi.png', 80, 1, 3),
(18, NULL, NULL, 'Grey', 'Boxer', 'Peugeot', 'https://images.elite-auto.fr/visuel/PEUGEOT/peugeot_15boxerl4h2cv3b_angularfront.png', 120, 3, 3),
(19, NULL, NULL, 'Silver', 'Bipper', 'Peugeot', 'https://images.elite-auto.fr/visuel/PEUGEOT/peugeot_17bipperprovc1frc_angularfront.png', 150, 2, 3),
(20, NULL, NULL, 'White', 'Expert Vu', 'Peugeot', 'http://www.lamberet.fr/upload_vehicule/01_-_PEUGEOT_Expert_fourgon_frigorifique_LAMBERET.png', 65, 1, 3),
(21, NULL, NULL, 'White', 'Q1', 'Audi', 'http://www.audimosman.com.au/content/dam/ngw/au/drop_down_model_images/s1_sportback_dropdown.png', 100, 1, 4),
(22, NULL, NULL, 'Red', 'Q2', 'Audi', 'https://res.cloudinary.com/carsguide/image/upload/f_auto,fl_lossy,q_auto,t_cg_hero_low/v1/editorial/vhs/Audi-Q2_0.png', 150, 1, 4),
(23, NULL, NULL, 'Black', 'Q3', 'Audi', 'https://images.elite-auto.fr/visuel/AUDI/audi_16q3premplusod1fe_angularfront.png', 130, 2, 4),
(24, NULL, NULL, 'Blue', 'Q4', 'Audi', 'https://images.elite-auto.fr/visuel/AUDI/audi_18a4premiumsd5fe_angularfront.png', 120, 3, 4),
(25, NULL, NULL, 'Silver', 'Q5', 'Audi', 'https://images.elite-auto.fr/visuel/AUDI/audi_17q5sport4wdod2b_angularfront.png', 200, 3, 4),
(26, NULL, NULL, 'Black', 'Class G1', 'Mercedes', 'http://www.bluemaize.net/im/automotive/g-class-mercedes-4.png', 250, 2, 5),
(27, NULL, NULL, 'Grey', 'Class G2', 'Mercedes', 'https://ejarcar.com/uploads/checkout_images/G55-4x4-sqared.png', 200, 2, 5),
(28, NULL, NULL, 'Green', 'Class G3', 'Mercedes', 'http://www.bluemaize.net/im/automotive/g-class-mercedes-4.png', 180, 3, 5),
(29, NULL, NULL, 'Navy', 'Class G4', 'Mercedes', 'http://st.motortrend.com/uploads/sites/10/2016/09/2016-mercedes-benz-g-class-g550-suv-angular-front.png', 300, 1, 5),
(30, NULL, NULL, 'Tan', 'Class G5', 'Mercedes', 'https://postmediadriving.files.wordpress.com/2017/03/chrome-image-390086.png?w=800&h=520&crop=1', 320, 3, 5);

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
  `boardcpu` int(11) DEFAULT NULL,
  `cam` int(11) DEFAULT NULL,
  `wheel` int(11) DEFAULT NULL,
  `radar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `caroption`
--

INSERT INTO `caroption` (`id`, `airbag`, `capacity`, `conditioner`, `passenger`, `permis`, `boardcpu`, `cam`, `wheel`, `radar`) VALUES
(1, 1, '', 1, 3, NULL, 1, 1, 1, 1),
(2, 0, NULL, 0, 5, NULL, 0, 1, 0, 1),
(3, 1, NULL, 1, 5, NULL, 1, 1, 1, 1);

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
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `type` varchar(2) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `premium` int(1) DEFAULT NULL,
  `id_authentification` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_authentification` (`id_authentification`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `address`, `password`, `email`, `name`, `firstName`, `type`, `phone`, `premium`, `id_authentification`) VALUES
(4, NULL, 'Bidule', 'TEST', NULL, NULL, 'C', NULL, NULL, NULL),
(5, NULL, 'Bonjour', 'jerome.charlat@orange.fr', NULL, NULL, 'C', NULL, NULL, NULL),
(6, 'sfdsfd', '', 'aramane@aramane.fr', 'aramane', 'aramane', 'A', '0625262588', 1, NULL),
(7, 'abdel', 'dfsdf', 'test@test.fr', 'abdel', 'abdelramane', 'C', '0621316289', 1, NULL),
(8, '62 boulevard des etats unis', 'Aramane1995', 'abdelramane@gmail.com', 'roumane', 'abdelramane', 'A', '0621316289', 1, NULL),
(9, 'admin', 'admin', 'admin@isiloc.fr', 'admin', 'admin', 'A', '0606060606', 1, NULL);

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
