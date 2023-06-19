-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 19 juin 2023 à 11:57
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `siteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `alerte`
--

DROP TABLE IF EXISTS `alerte`;
CREATE TABLE IF NOT EXISTS `alerte` (
  `alerte_id` int(11) NOT NULL AUTO_INCREMENT,
  `alerte_type` varchar(40) DEFAULT NULL,
  `alerte_horaire` time DEFAULT NULL,
  `alerte_date` date DEFAULT NULL,
  `alerte_statut` varchar(50) DEFAULT NULL,
  `alerte_zone` varchar(10) DEFAULT NULL,
  `Montre_code` int(11) DEFAULT NULL,
  `Personnel_id` int(11) DEFAULT NULL,
  `Fest_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`alerte_id`),
  KEY `montre_code6` (`Montre_code`),
  KEY `Personnel_id` (`Personnel_id`),
  KEY `FK_Fest_id` (`Fest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alerte`
--

INSERT INTO `alerte` (`alerte_id`, `alerte_type`, `alerte_horaire`, `alerte_date`, `alerte_statut`, `alerte_zone`, `Montre_code`, `Personnel_id`, `Fest_id`) VALUES
(2, 'malaise', '22:10:10', '2022-06-10', 'Terminee', 'A', 1, 9, 15),
(3, 'alcool', '23:45:09', '2022-07-10', 'En cours', 'C', 2, 9, 1),
(4, 'gaz', '00:45:09', '2022-08-10', 'Terminee', 'B', 3, 9, 15),
(7, 'Cardiaque', '19:56:25', '2022-11-10', 'Terminee', 'D', 2, 9, 15),
(8, 'Cardiaque', '19:56:25', '2022-11-10', 'Terminee', 'D', 2, 9, 15),
(9, 'Cardiaque', '19:56:25', '2022-11-10', 'Terminee', 'D', 2, 9, 15),
(10, 'Malaise', '23:47:18', '2023-01-01', 'En cours', 'A', 2, 6, 15),
(11, 'Son', '00:38:45', '2022-10-10', 'En cours', 'C', 3, 6, 15);

-- --------------------------------------------------------

--
-- Structure de la table `capteurcardiaque`
--

DROP TABLE IF EXISTS `capteurcardiaque`;
CREATE TABLE IF NOT EXISTS `capteurcardiaque` (
  `card_id` int(11) NOT NULL AUTO_INCREMENT,
  `card_frequ` float DEFAULT NULL,
  `Montre_code` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`card_id`),
  KEY `montre_code5` (`Montre_code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `capteurcardiaque`
--

INSERT INTO `capteurcardiaque` (`card_id`, `card_frequ`, `Montre_code`, `date`, `time`) VALUES
(1, 130, 1, NULL, NULL),
(2, 1, 3, NULL, NULL),
(3, 98, 4, NULL, NULL),
(4, 130, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `capteurgaz`
--

DROP TABLE IF EXISTS `capteurgaz`;
CREATE TABLE IF NOT EXISTS `capteurgaz` (
  `gaz_id` int(11) NOT NULL AUTO_INCREMENT,
  `gaz_detec` float DEFAULT NULL,
  `Montre_code` int(11) DEFAULT NULL,
  `month` varchar(100) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `day` varchar(100) DEFAULT NULL,
  `hour` varchar(100) DEFAULT NULL,
  `minute` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`gaz_id`),
  KEY `montre_code4` (`Montre_code`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `capteurgaz`
--

INSERT INTO `capteurgaz` (`gaz_id`, `gaz_detec`, `Montre_code`, `month`, `year`, `day`, `hour`, `minute`, `date`, `time`) VALUES
(95, 111, 3, '05', '2023', '23', '15', '31', '2023-05-23 / 15:31', '15:31'),
(96, 2, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(97, 111, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(98, 2, 3, '05', '2023', '23', '15', '36', '2023-05-23 / 15:36', '15:36'),
(99, 2, 3, '05', '2023', '23', '15', '37', '2023-05-23 / 15:37', '15:37'),
(100, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(101, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(102, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(103, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(104, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(105, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(106, 1, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(107, 2, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(108, 3, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(109, 111, 3, '05', '2023', '23', '15', '31', '2023-05-23 / 15:31', '15:31'),
(110, 2, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(111, 111, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(112, 2, 3, '05', '2023', '23', '15', '36', '2023-05-23 / 15:36', '15:36'),
(113, 2, 3, '05', '2023', '23', '15', '37', '2023-05-23 / 15:37', '15:37'),
(114, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(115, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(116, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(117, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(118, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(119, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(120, 1, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(121, 2, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(122, 3, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(123, 111, 3, '05', '2023', '23', '15', '31', '2023-05-23 / 15:31', '15:31'),
(124, 2, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(125, 111, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(126, 2, 3, '05', '2023', '23', '15', '36', '2023-05-23 / 15:36', '15:36'),
(127, 2, 3, '05', '2023', '23', '15', '37', '2023-05-23 / 15:37', '15:37'),
(128, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(129, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(130, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(131, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(132, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(133, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(134, 1, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(135, 2, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(136, 3, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(137, 111, 3, '05', '2023', '23', '15', '31', '2023-05-23 / 15:31', '15:31'),
(138, 2, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(139, 111, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(140, 2, 3, '05', '2023', '23', '15', '36', '2023-05-23 / 15:36', '15:36'),
(141, 2, 3, '05', '2023', '23', '15', '37', '2023-05-23 / 15:37', '15:37'),
(142, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(143, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(144, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(145, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(146, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(147, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(148, 1, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(149, 2, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(150, 3, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(151, 111, 3, '05', '2023', '23', '15', '31', '2023-05-23 / 15:31', '15:31'),
(152, 2, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(153, 111, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(154, 2, 3, '05', '2023', '23', '15', '36', '2023-05-23 / 15:36', '15:36'),
(155, 2, 3, '05', '2023', '23', '15', '37', '2023-05-23 / 15:37', '15:37'),
(156, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(157, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(158, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(159, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(160, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(161, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(162, 1, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(163, 2, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(164, 3, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(165, 111, 3, '05', '2023', '23', '15', '31', '2023-05-23 / 15:31', '15:31'),
(166, 2, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(167, 111, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(168, 2, 3, '05', '2023', '23', '15', '36', '2023-05-23 / 15:36', '15:36'),
(169, 2, 3, '05', '2023', '23', '15', '37', '2023-05-23 / 15:37', '15:37'),
(170, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(171, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(172, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(173, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(174, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(175, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(176, 1, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(177, 2, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(178, 3, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(179, 111, 3, '05', '2023', '23', '15', '31', '2023-05-23 / 15:31', '15:31'),
(180, 2, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(181, 111, 3, '05', '2023', '23', '15', '34', '2023-05-23 / 15:34', '15:34'),
(182, 2, 3, '05', '2023', '23', '15', '36', '2023-05-23 / 15:36', '15:36'),
(183, 2, 3, '05', '2023', '23', '15', '37', '2023-05-23 / 15:37', '15:37'),
(184, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(185, 2, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(186, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(187, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(188, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(189, 0, 3, '05', '2023', '23', '15', '38', '2023-05-23 / 15:38', '15:38'),
(190, 1, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(191, 2, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39'),
(192, 3, 3, '05', '2023', '23', '15', '39', '2023-05-23 / 15:39', '15:39');

-- --------------------------------------------------------

--
-- Structure de la table `capteursonore`
--

DROP TABLE IF EXISTS `capteursonore`;
CREATE TABLE IF NOT EXISTS `capteursonore` (
  `son_id` int(11) NOT NULL AUTO_INCREMENT,
  `son_db` float DEFAULT NULL,
  `Montre_code` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`son_id`),
  KEY `montre_code3` (`Montre_code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `capteursonore`
--

INSERT INTO `capteursonore` (`son_id`, `son_db`, `Montre_code`, `date`, `time`) VALUES
(1, 100, 1, NULL, NULL),
(2, 1, 3, NULL, NULL),
(3, 98, 4, NULL, NULL),
(4, 110, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `capteurtemp`
--

DROP TABLE IF EXISTS `capteurtemp`;
CREATE TABLE IF NOT EXISTS `capteurtemp` (
  `compteur_id` int(11) NOT NULL AUTO_INCREMENT,
  `compteur_alcool` float DEFAULT NULL,
  `Montre_code` int(11) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`compteur_id`),
  KEY `montre_code1` (`Montre_code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `capteurtemp`
--

INSERT INTO `capteurtemp` (`compteur_id`, `compteur_alcool`, `Montre_code`, `date`, `time`) VALUES
(1, 3, 1, NULL, NULL),
(2, 1, 3, NULL, NULL),
(3, 3, 4, NULL, NULL),
(4, 2, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  `faq_question` text,
  `faq_reponse` varchar(8000) DEFAULT NULL,
  PRIMARY KEY (`faq_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faq`
--

-- --------------------------------------------------------

--
-- Structure de la table `festival`
--

DROP TABLE IF EXISTS `festival`;
CREATE TABLE IF NOT EXISTS `festival` (
  `Fest_id` int(11) NOT NULL AUTO_INCREMENT,
  `Fest_nom` varchar(200) NOT NULL,
  `Fest_datedebut` date NOT NULL,
  `Fest_datefin` date NOT NULL,
  `Fest_prix` float NOT NULL,
  `Fest_programmation` text NOT NULL,
  `Fest_adresse` varchar(300) NOT NULL,
  `Fest_codepostal` int(5) NOT NULL,
  `Fest_pays` varchar(30) NOT NULL,
  `Fest_access` text NOT NULL,
  `Fest_lien` text NOT NULL,
  `Fest_password` varchar(250) NOT NULL,
  `Fest_email` varchar(150) DEFAULT NULL,
  `Fest_numtelephone` int(10) DEFAULT NULL,
  `Fest_acceshandicap` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Fest_id`),
  UNIQUE KEY `Fest_nom` (`Fest_nom`),
  UNIQUE KEY `Fest_email` (`Fest_email`),
  UNIQUE KEY `Fest_numtelephone` (`Fest_numtelephone`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `festival`
--

INSERT INTO `festival` (`Fest_id`, `Fest_nom`, `Fest_datedebut`, `Fest_datefin`, `Fest_prix`, `Fest_programmation`, `Fest_adresse`, `Fest_codepostal`, `Fest_pays`, `Fest_access`, `Fest_lien`, `Fest_password`, `Fest_email`, `Fest_numtelephone`, `Fest_acceshandicap`) VALUES
(1, 'Solidays', '2023-06-10', '2023-06-13', 50, 'Gazo, Niska, ...', 'Hippodrome de Longchamp', 92290, 'France', 'Voiture, TRAM ...', 'www.solidays.fr', 'aaa', NULL, NULL, NULL),
(15, 'Les Ardentes', '2023-06-14', '2023-06-16', 30, 'Programmation Les Ardentes', 'Adresse Les Ardentes', 91170, 'Belgique', 'Parking utilisateurs; bus', 'www.lesardentes.com', '$2y$12$0dOjNr.wclqnqkwdG1xAauUVtMrUDrCBueYaVE5CSSpwFdHBDBkTa', 'lesardentes@gmail.com', 946322742, NULL),
(17, 'Festmodif', '2023-01-12', '2023-01-27', 80, 'Programmationtesttest', 'adressetesttesttest', 87162, 'Testtesttest', 'lesardentes@gmail.com', 'lientesttesttest.com', '$2y$12$tDLAZJJRmLbIlkCYH.uGfuwqm2Du/tZyKr2IAStzmMf0wTdFaBUwG', 'lalalalala@gmail.com', 875372826, NULL),
(21, 'Rock en Seine', '2023-01-17', '2023-01-19', 20, 'Progr rockenseine', '63 Grande Rue', 92380, 'France', 'Ligne 10', 'www.festival.com', '$2y$12$wvZNyAHBKzhRQtKMJdaEROJDbb3CEtTdFOvdZ.oIpEe7L9Mc7vH5W', 'rock.enseine@gmail.com', 781898999, 0),
(23, 'Festivaltest', '2023-01-04', '2023-01-06', 20, 'Progtest Festival', 'Adresse FesticalTest', 92000, 'Pays Festivaltest', 'Acces festival test', 'lien festival test', '$2y$12$R/U7DvVM.pS9gIpoBCCbB.ojrrk2kJE9WmhHDTTAm4hCT4ur9d0aW', 'email.festivaltes@gmail.com', 781726363, 0),
(24, 'Festival', '2023-01-10', '2023-01-12', 20, 'Programmation festival', '63 Grande Rue', 92380, 'France', 'Acces festival', 'www.festivaltest.com', '$2y$12$trClgG20KrCxgheBTRxe9uIfF33TTaEOiNyDWTPZLUg5UzoaBsqLK', 'festivaltest.test@gmail.com', 781898335, 1);

-- --------------------------------------------------------

--
-- Structure de la table `festsign`
--

DROP TABLE IF EXISTS `festsign`;
CREATE TABLE IF NOT EXISTS `festsign` (
  `festsign_id` int(11) NOT NULL AUTO_INCREMENT,
  `festsign_adresse` varchar(300) DEFAULT NULL,
  `festsign_email` varchar(200) DEFAULT NULL,
  `festsign_nom` varchar(100) DEFAULT NULL,
  `festsign_prenom` varchar(100) DEFAULT NULL,
  `festsign_numtel` int(10) DEFAULT NULL,
  `festsign_remarque` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`festsign_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `festsign`
--

INSERT INTO `festsign` (`festsign_id`, `festsign_adresse`, `festsign_email`, `festsign_nom`, `festsign_prenom`, `festsign_numtel`, `festsign_remarque`) VALUES
(1, '63 Grande Rue', 'bab.maupas@gmail.com', 'Maupas', 'Bastien', 781898378, 'htgfd'),
(2, 'Test', 'Test@gmail.com', 'Test', 'Test', 926527262, 'Test'),
(3, '63 Grande Rue', 'dfghjkrftgyhjk', 'Maupas', 'Bastien', 781898378, 'question'),
(4, 'Adresse festsign', 'anaÃ¯s.messalti@gmail.com', 'Messalti', 'AnaÃ¯s', 781898388, 'Ceci est une remarque');

-- --------------------------------------------------------

--
-- Structure de la table `montre`
--

DROP TABLE IF EXISTS `montre`;
CREATE TABLE IF NOT EXISTS `montre` (
  `Montre_code` int(11) NOT NULL AUTO_INCREMENT,
  `Montre_datefabrication` date DEFAULT NULL,
  `Fest_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Montre_code`),
  KEY `Fest_id1` (`Fest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `montre`
--

INSERT INTO `montre` (`Montre_code`, `Montre_datefabrication`, `Fest_id`) VALUES
(1, '2021-12-12', 1),
(2, '2021-10-10', 1),
(3, '2021-10-10', 15),
(4, '2021-02-10', 15),
(5, '2022-10-10', 15);

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

DROP TABLE IF EXISTS `personnel`;
CREATE TABLE IF NOT EXISTS `personnel` (
  `Personnel_id` int(11) NOT NULL AUTO_INCREMENT,
  `Personnel_fonction` varchar(40) DEFAULT NULL,
  `Personnel_nom` varchar(30) DEFAULT NULL,
  `Personnel_prenom` varchar(30) DEFAULT NULL,
  `Fest_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Personnel_id`),
  KEY `personnelfestid` (`Fest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`Personnel_id`, `Personnel_fonction`, `Personnel_nom`, `Personnel_prenom`, `Fest_id`) VALUES
(1, 'Ambulancier', 'Merbouche', 'Nicolas', NULL),
(2, 'SAMU', 'Laperotine', 'Arno', NULL),
(3, 'SAMU', 'Messalti', 'Anaïs', NULL),
(4, 'Ambulancier', 'Laperotine', 'Arno', 15),
(5, 'SAMU', 'El-Younsi', 'Ziad', 15),
(6, 'Ambulancier', 'Laperotine', 'Ziad', 15),
(7, 'lalalal', 'lalala', 'lalala', 15),
(8, 'ooo', 'ooo', 'ooo', 15),
(9, 'Lalalalala', 'Persad', 'Constance', 15),
(10, 'fvcdxs', 'ooo', 'gtrfds', 15),
(11, 'SAMU', 'Laperotine', 'Ziad', 15),
(12, 'Aide', 'Maupas', 'Bastien', 15),
(13, 'Testperso', 'Testperso', 'Testperso', 15);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `Reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `Fest_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Reservation_id`),
  KEY `Fest_id` (`Fest_id`),
  KEY `on_delete_cascade_userid` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Reservation_id`, `id`, `Fest_id`) VALUES
(1, 8, 15),
(2, 10, 15),
(5, 12, 15),
(6, 13, 15),
(10, 31, 15),
(12, 32, 15),
(13, NULL, 15),
(14, NULL, 15),
(15, NULL, 15);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL,
  `role_nom` varchar(20) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`role_id`, `role_nom`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `numtelephone` int(10) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `pays` varchar(40) NOT NULL,
  `datedenaissance` date NOT NULL,
  `codepostal` int(5) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `datedecreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `handicap` tinyint(1) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `numtelephone` (`numtelephone`),
  KEY `FK_role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `numtelephone`, `adresse`, `pays`, `datedenaissance`, `codepostal`, `ville`, `password`, `datedecreation`, `handicap`, `role_id`) VALUES
(8, 'Maupas', 'Bastien', 'bastien.maupas25@gmail.com', 781898377, '63 Grande Rue', 'France', '2002-10-25', 92380, 'Garches', '$2y$12$bl4OspQ9eG.gFZM0vYHpJeckt/LpY5MVUP2BDbwJ.h.yeBmuF6vSG', '2022-12-11 21:17:27', 1, NULL),
(10, 'Maupas', 'Bastien', 'sdxcfvgbhnjhgfdxcgvhbnj,k', 781898378, 'Adresse test', 'France', '2022-11-29', 92380, 'Ville test', '$2y$12$Nq4oO/reYDYPqRTw2/MPq.ID5YDRkk0JTN0V8Lj/I/eVuBlnEZbiy', '2022-12-13 14:46:52', 0, NULL),
(12, 'Maupas', 'Bastien', 'bab.as@gmail.com', 781898366, '63 Grande Rue', 'France', '2022-11-30', 92380, 'Garches', '$2y$12$6i/7wScTRDrVW0MPFP7ntu8RB/TCz3D9CmGX4MkZFhcBji39Uq22e', '2022-12-15 18:25:12', 0, NULL),
(13, 'Maupas', 'Bastien', 'bab.ms@gmail.com', 781898333, '63 Grande Rue', 'France', '2022-12-08', 92380, 'Garches', '$2y$12$ZdNnPOOC3640BZTAAcGdQ.Uk5zTavnUPlSt3F3QVdy5FT4y3kPO8i', '2022-12-15 18:26:03', 0, NULL),
(26, 'Admin', 'Admin', 'infinitemeasures@gmail.com', 954326272, '10 Rue de Vanves', 'France', '1999-10-10', 92130, 'Issy-Les-Moulineaux', '$2y$12$4zmzJD3.QhXl6pVvF/lQR.NmH68HVftuuWpHkV.0Qsy3wi585/wc2', '2023-01-13 18:09:08', 0, 2),
(27, 'Maupas', 'Bastien', 'bastien.testtetstetet@gmail.com', 781898376, '63 Grande Rue', 'France', '2006-12-06', 92380, 'Garches', '$2y$12$kMHTioLaRBelLp350GsOZu8aXwM/Re8EIl4ftISKma3naZLf6DvE2', '2023-01-26 09:01:53', 0, 1),
(31, 'Laperotine', 'Arno', 'arno.laperotine@gmail.com', 827373633, '63 Grande Rue', 'France', '2006-12-12', 92380, 'Garches', '$2y$12$KdWlnMQLiagse2n8xvjg0eGc4dxHkz64yphqPB8xrYHs9ADMb/x2W', '2023-01-26 12:13:55', 1, 1),
(32, 'Merbouche', 'Nicolas', 'nico.merbouche@gmail.com', 726354837, '63 Grande Rue', 'France', '2006-12-05', 92380, 'Garches', '$2y$12$csK/Z1zs91UynpguGeBod.meTmzfVIGvlDinIBWG15svXA3YW6uEm', '2023-01-26 12:16:57', 0, 1),
(33, 'Persad', 'Constance', 'constance.persad@gmail.com', 763548478, '63 Grande Rue', 'France', '2006-12-05', 92380, 'Garches', '$2y$12$8mgKGCq7jO8eatnUSTuipuAUeJxL081kpgn9IotTm0F3W.q0b9Vf6', '2023-01-26 12:18:41', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `userhistory`
--

DROP TABLE IF EXISTS `userhistory`;
CREATE TABLE IF NOT EXISTS `userhistory` (
  `userhistory_adresse` varchar(200) DEFAULT NULL,
  `userhistory_codepostal` int(5) DEFAULT NULL,
  `userhistory_datedecreation` timestamp NULL DEFAULT NULL,
  `userhistory_datedenaissance` date DEFAULT NULL,
  `userhistory_email` varchar(150) DEFAULT NULL,
  `userhistory_handicap` tinyint(1) DEFAULT NULL,
  `userhistory_id` int(10) NOT NULL,
  `userhistory_nom` varchar(30) DEFAULT NULL,
  `userhistory_numtelephone` int(10) DEFAULT NULL,
  `userhistory_pays` varchar(30) DEFAULT NULL,
  `userhistory_prenom` varchar(30) DEFAULT NULL,
  `userhistory_ville` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`userhistory_id`),
  UNIQUE KEY `userhistory_email` (`userhistory_email`),
  UNIQUE KEY `userhistory_numtelephone` (`userhistory_numtelephone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `userhistory`
--

INSERT INTO `userhistory` (`userhistory_adresse`, `userhistory_codepostal`, `userhistory_datedecreation`, `userhistory_datedenaissance`, `userhistory_email`, `userhistory_handicap`, `userhistory_id`, `userhistory_nom`, `userhistory_numtelephone`, `userhistory_pays`, `userhistory_prenom`, `userhistory_ville`) VALUES
('Changement adresse', 92380, '2022-12-13 14:46:52', '2022-11-29', 'bab.maupas@gmail.com', 0, 10, 'Maupas', 535353535, 'France', 'Bastien', 'Changement Ville'),
('63 Grande Rue', 92380, '2022-12-15 18:25:12', '2022-11-30', 'bab.as@gmail.com', 0, 12, 'Maupas', 781898366, 'France', 'Bastien', 'Garches'),
('63 Grande Rue', 92380, '2022-12-15 18:26:03', '2022-12-08', 'bab.ms@gmail.com', 0, 13, 'Maupas', 781898333, 'France', 'Bastien', 'Garches'),
('63 Grande Rue', 92380, '2022-12-16 00:13:43', '2022-11-29', 'bab.pas@gmail.com', 0, 15, 'Maupas', 781894444, 'France', 'Bastien', 'Garches'),
('63 Grande Rue', 92380, '2022-12-16 09:01:01', '2022-12-01', 'bab.maas@gmail.com', 0, 16, 'Maupas', 781893333, 'France', 'Bastien', 'Garches'),
('63 Grande Rue', 92380, '2022-12-17 11:32:22', '2022-11-30', 'bab.maupppps@gmail.com', 0, 17, 'Maupas', 733398378, 'France', 'Bastien', 'Garches'),
('Adresse usertest1', 92000, '2023-01-26 09:16:46', '2006-11-28', 'user.test1@gmail.com', 0, 29, 'Usertest1', 652738353, 'Pays Usertest1', 'Usertest1', 'Ville usertest1'),
('63 Grande Rue', 92380, '2023-01-26 11:28:28', '2006-12-06', 'ziad.elyounsi@gmail.com', 0, 30, 'Maupas', 761525363, 'France', 'Bastien', 'Garches');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `alerte`
--
ALTER TABLE `alerte`
  ADD CONSTRAINT `FK_Fest_id` FOREIGN KEY (`Fest_id`) REFERENCES `festival` (`Fest_id`),
  ADD CONSTRAINT `Personnel_id` FOREIGN KEY (`Personnel_id`) REFERENCES `personnel` (`Personnel_id`),
  ADD CONSTRAINT `montre_code6` FOREIGN KEY (`Montre_code`) REFERENCES `montre` (`Montre_code`);

--
-- Contraintes pour la table `capteurcardiaque`
--
ALTER TABLE `capteurcardiaque`
  ADD CONSTRAINT `montre_code5` FOREIGN KEY (`Montre_code`) REFERENCES `montre` (`Montre_code`);

--
-- Contraintes pour la table `capteurgaz`
--
ALTER TABLE `capteurgaz`
  ADD CONSTRAINT `montre_code4` FOREIGN KEY (`Montre_code`) REFERENCES `montre` (`Montre_code`);

--
-- Contraintes pour la table `capteursonore`
--
ALTER TABLE `capteursonore`
  ADD CONSTRAINT `montre_code3` FOREIGN KEY (`Montre_code`) REFERENCES `montre` (`Montre_code`);

--
-- Contraintes pour la table `capteurtemp`
--
ALTER TABLE `capteurtemp`
  ADD CONSTRAINT `montre_code1` FOREIGN KEY (`Montre_code`) REFERENCES `montre` (`Montre_code`);

--
-- Contraintes pour la table `montre`
--
ALTER TABLE `montre`
  ADD CONSTRAINT `Fest_id1` FOREIGN KEY (`Fest_id`) REFERENCES `festival` (`Fest_id`);

--
-- Contraintes pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `personnelfestid` FOREIGN KEY (`Fest_id`) REFERENCES `festival` (`Fest_id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `Fest_id` FOREIGN KEY (`Fest_id`) REFERENCES `festival` (`Fest_id`),
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `on_delete_cascade_userid` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
