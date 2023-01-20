-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 17 jan. 2023 à 13:13
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alerte`
--

INSERT INTO `alerte` (`alerte_id`, `alerte_type`, `alerte_horaire`, `alerte_date`, `alerte_statut`, `alerte_zone`, `Montre_code`, `Personnel_id`, `Fest_id`) VALUES
(2, 'malaise', '22:10:10', '2022-06-10', 'ModifiÃ©e', 'A', 1, 2, 15),
(3, 'alcool', '23:45:09', '2022-07-10', 'En cours', 'C', 2, 2, 1),
(4, 'gaz', '00:45:09', '2022-08-10', 'ModifiÃ©e', 'B', 3, 2, 15);

-- --------------------------------------------------------

--
-- Structure de la table `capteurcardiaque`
--

DROP TABLE IF EXISTS `capteurcardiaque`;
CREATE TABLE IF NOT EXISTS `capteurcardiaque` (
  `card_id` int(11) NOT NULL AUTO_INCREMENT,
  `card_frequ` float DEFAULT NULL,
  `Montre_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`card_id`),
  KEY `montre_code5` (`Montre_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `capteurgaz`
--

DROP TABLE IF EXISTS `capteurgaz`;
CREATE TABLE IF NOT EXISTS `capteurgaz` (
  `gaz_id` int(11) NOT NULL AUTO_INCREMENT,
  `gaz_detec` float DEFAULT NULL,
  `Montre_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`gaz_id`),
  KEY `montre_code4` (`Montre_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `capteursonore`
--

DROP TABLE IF EXISTS `capteursonore`;
CREATE TABLE IF NOT EXISTS `capteursonore` (
  `son_id` int(11) NOT NULL AUTO_INCREMENT,
  `son_db` float DEFAULT NULL,
  `Montre_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`son_id`),
  KEY `montre_code3` (`Montre_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `capteurtemperature`
--

DROP TABLE IF EXISTS `capteurtemperature`;
CREATE TABLE IF NOT EXISTS `capteurtemperature` (
  `temp_id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_degre` float DEFAULT NULL,
  `Montre_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`temp_id`),
  KEY `montre_code2` (`Montre_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compteur`
--

DROP TABLE IF EXISTS `compteur`;
CREATE TABLE IF NOT EXISTS `compteur` (
  `compteur_id` int(11) NOT NULL AUTO_INCREMENT,
  `compteur_alcool` float DEFAULT NULL,
  `Montre_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`compteur_id`),
  KEY `montre_code1` (`Montre_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`Fest_id`),
  UNIQUE KEY `Fest_nom` (`Fest_nom`),
  UNIQUE KEY `Fest_email` (`Fest_email`),
  UNIQUE KEY `Fest_numtelephone` (`Fest_numtelephone`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `festival`
--

INSERT INTO `festival` (`Fest_id`, `Fest_nom`, `Fest_datedebut`, `Fest_datefin`, `Fest_prix`, `Fest_programmation`, `Fest_adresse`, `Fest_codepostal`, `Fest_pays`, `Fest_access`, `Fest_lien`, `Fest_password`, `Fest_email`, `Fest_numtelephone`) VALUES
(1, 'Solidays', '2023-06-10', '2023-06-13', 50, 'Gazo, Niska, ...', 'Hippodrome de Longchamp', 92290, 'France', 'Voiture, TRAM ...', 'www.solidays.fr', 'aaa', NULL, NULL),
(2, 'Rock en seine', '2023-08-05', '2023-08-07', 30, 'Programmation 2', 'Parc de Saint-cloud', 92120, 'France', 'accès 2', 'www.rockenseine.fr', 'aaa', NULL, NULL),
(15, 'Les Ardentes', '2023-06-14', '2023-06-16', 30, 'Programmation Les Ardentes', 'Adresse Les Ardentes', 91170, 'Belgique', 'Parking utilisateurs; bus', 'www.lesardentes.com', '$2y$12$0dOjNr.wclqnqkwdG1xAauUVtMrUDrCBueYaVE5CSSpwFdHBDBkTa', 'lesardentes@gmail.com', 946322742),
(16, 'dfghujgcvhjk', '2022-11-29', '2022-12-01', 30, 'allalalalalal', '63 Grande Rue', 92380, 'France', 'auhjihk', 'www.teyeyeyey/com', '$2y$12$epcQ0y6iT3TVm9E5WZZyyuFd412cKUc2mmoVD1P2fKvaAM0EtAGly', 'fghghj.ghjk@gmail.com', 781895678);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `festsign`
--

INSERT INTO `festsign` (`festsign_id`, `festsign_adresse`, `festsign_email`, `festsign_nom`, `festsign_prenom`, `festsign_numtel`, `festsign_remarque`) VALUES
(1, '63 Grande Rue', 'bab.maupas@gmail.com', 'Maupas', 'Bastien', 781898378, 'htgfd');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `montre`
--

INSERT INTO `montre` (`Montre_code`, `Montre_datefabrication`, `Fest_id`) VALUES
(1, '2021-12-12', 1),
(2, '2021-10-10', 1),
(3, '2021-10-10', 15);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
(8, 'ooo', 'ooo', 'ooo', 15);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Reservation_id`, `id`, `Fest_id`) VALUES
(1, 8, 15),
(2, 10, 15),
(5, 12, 15),
(6, 13, 15);

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `numtelephone`, `adresse`, `pays`, `datedenaissance`, `codepostal`, `ville`, `password`, `datedecreation`, `handicap`, `role_id`) VALUES
(8, 'Maupas', 'Bastien', 'bastien.maupas25@gmail.com', 781898377, '63 Grande Rue', 'France', '2002-10-25', 92380, 'Garches', '$2y$12$bl4OspQ9eG.gFZM0vYHpJeckt/LpY5MVUP2BDbwJ.h.yeBmuF6vSG', '2022-12-11 21:17:27', 1, NULL),
(10, 'Maupas', 'Bastien', 'bab.maupas@gmail.com', 535353535, 'Changement adresse', 'France', '2022-11-29', 92380, 'Changement Ville', '$2y$12$Nq4oO/reYDYPqRTw2/MPq.ID5YDRkk0JTN0V8Lj/I/eVuBlnEZbiy', '2022-12-13 14:46:52', 0, NULL),
(12, 'Maupas', 'Bastien', 'bab.as@gmail.com', 781898366, '63 Grande Rue', 'France', '2022-11-30', 92380, 'Garches', '$2y$12$6i/7wScTRDrVW0MPFP7ntu8RB/TCz3D9CmGX4MkZFhcBji39Uq22e', '2022-12-15 18:25:12', 0, NULL),
(13, 'Maupas', 'Bastien', 'bab.ms@gmail.com', 781898333, '63 Grande Rue', 'France', '2022-12-08', 92380, 'Garches', '$2y$12$ZdNnPOOC3640BZTAAcGdQ.Uk5zTavnUPlSt3F3QVdy5FT4y3kPO8i', '2022-12-15 18:26:03', 0, NULL),
(16, 'Maupas', 'Bastien', 'bab.maas@gmail.com', 781893333, '63 Grande Rue', 'France', '2022-12-01', 92380, 'Garches', '$2y$12$idBgpqY92fgyEYqUHrXBou8uT7KdKv3WNwu.PkRMXDT1lBzNxkwW6', '2022-12-16 09:01:01', 0, NULL),
(17, 'Maupas', 'Bastien', 'bab.maupppps@gmail.com', 733398378, '63 Grande Rue', 'France', '2022-11-30', 92380, 'Garches', '$2y$12$vOSlQb.l8XSn3bN7C23EOeXoui2g3FsJBizh5g6ol5ZW9XAifNanK', '2022-12-17 11:32:22', 0, NULL),
(18, 'Maupas', 'Bastien', 'badfghjkl@gmail.com', 564783932, '63 Grande Rue', 'France', '2004-08-12', 92380, 'Garches', '$2y$12$xmsRTnZbzZZg3EEooufZfejRnyWO1DLZh943kGoXJr5aMc4JDEBje', '2023-01-06 08:23:37', 0, NULL),
(19, 'Maupas', 'Bastien', 'baaaaaaaaaa.s@gmail.com', 984501526, '63 Grande Rue', 'France', '2004-12-01', 92380, 'Garches', '$2y$12$40Ir7GBGBYZ1RxC87I4Z2ub8Agr3gdqL2r7f3qEKxwedme14FxzhK', '2023-01-09 09:14:54', 0, 1),
(20, 'Maupas', 'Bastien', 'sdfghbnj@gmail.com', 781898378, '63 Grande Rue', 'France', '2005-04-06', 92380, 'Garches', '$2y$12$AeeWImIZtD1j6jn.nM0nm.hrCJmFiHJ26eRrvzzA8ZaLVFE5YPF5q', '2023-01-13 15:42:55', 0, 1),
(21, 'Maupas', 'Bastien', 'aaaaaaaaazert@gmail.com', 618273567, '63 Grande Rue', 'France', '1998-10-10', 92380, 'Garches', '$2y$12$VVp/0ecihxCjZKShSWTqMuhZaKzIJ.4sl/qThpDG5blUCBl7LB2Bu', '2023-01-13 15:44:58', 1, 1),
(26, 'Admin', 'Admin', 'infinitemeasures@gmail.com', 954326272, '10 Rue de Vanves', 'France', '1999-10-10', 92130, 'Issy-Les-Moulineaux', '$2y$12$4zmzJD3.QhXl6pVvF/lQR.NmH68HVftuuWpHkV.0Qsy3wi585/wc2', '2023-01-13 18:09:08', 0, 2);

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
('63 Grande Rue', 92380, '2022-12-11 21:17:27', '2002-10-25', 'bastien.maupas25@gmail.com', 1, 8, 'Maupas', 781898377, 'France', 'Bastien', 'Garches'),
('Changement adresse', 92380, '2022-12-13 14:46:52', '2022-11-29', 'bab.maupas@gmail.com', 0, 10, 'Maupas', 535353535, 'France', 'Bastien', 'Changement Ville'),
('63 Grande Rue', 92380, '2022-12-15 18:25:12', '2022-11-30', 'bab.as@gmail.com', 0, 12, 'Maupas', 781898366, 'France', 'Bastien', 'Garches'),
('63 Grande Rue', 92380, '2022-12-15 18:26:03', '2022-12-08', 'bab.ms@gmail.com', 0, 13, 'Maupas', 781898333, 'France', 'Bastien', 'Garches'),
('63 Grande Rue', 92380, '2022-12-15 21:13:22', '2022-12-06', 'babs@gmail.com', 0, 14, 'Maupas', 781898300, 'France', 'Bastien', 'Garches'),
('63 Grande Rue', 92380, '2022-12-16 00:13:43', '2022-11-29', 'bab.pas@gmail.com', 0, 15, 'Maupas', 781894444, 'France', 'Bastien', 'Garches');

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
-- Contraintes pour la table `capteurtemperature`
--
ALTER TABLE `capteurtemperature`
  ADD CONSTRAINT `montre_code2` FOREIGN KEY (`Montre_code`) REFERENCES `montre` (`Montre_code`);

--
-- Contraintes pour la table `compteur`
--
ALTER TABLE `compteur`
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
