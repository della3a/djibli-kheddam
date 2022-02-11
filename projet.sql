
/*;==========================================
  ; Title:  Djibli Kheddam project
  ; Author: Manel Kheffache, Anais Tinhinane Amara, Kenza Benbouabdellah & Bilal Si Said 
  ; Date:   1 Jul 2020
  ;==========================================*/

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 11 juil. 2020 à 15:49
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `artisan`
--

DROP TABLE IF EXISTS `artisan`;
CREATE TABLE IF NOT EXISTS `artisan` (
  `id_art` int(5) NOT NULL AUTO_INCREMENT,
  `nom_art` varchar(50) NOT NULL,
  `prenom_art` varchar(50) NOT NULL,
  `metier` varchar(50) NOT NULL,
  `annees_exp` int(2) NOT NULL,
  `email_art` varchar(60) NOT NULL,
  `tel_art` int(10) NOT NULL,
  `wilaya_art` varchar(50) NOT NULL,
  `adresse_art` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `tarifs` int(10) NOT NULL,
  `image_art` varchar(100) NOT NULL,
  `mdp_art` varchar(500) NOT NULL,
  PRIMARY KEY (`id_art`),
  UNIQUE KEY `email_art` (`email_art`),
  UNIQUE KEY `tel_art` (`tel_art`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `artisan`
--

INSERT INTO `artisan` (`id_art`, `nom_art`, `prenom_art`, `metier`, `annees_exp`, `email_art`, `tel_art`, `wilaya_art`, `adresse_art`, `description`, `tarifs`, `image_art`, `mdp_art`) VALUES
(1, 'BENBOUABDELLAH', 'Kenza', 'ferronier', 2, 'benkenza103@gmail.com', 699652297, 'tiziouzou', 'freha', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000, 'images/artisanmois.png', '$2y$12$huEszDmpzvs2PIquAm4Vl.UPAB5OY6lrI6KA0A.s1wwvR0uMNGiV.'),
(2, 'AMARA', 'Anais Tinhinane', 'chauffagiste', 1, 'anaisamara@gmail.com', 699652200, 'tiziouzou', 'Tizi-Ouzou nouvelle ville', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000, 'images/artisanmois.png', '$2y$12$nwNmy2YutIJVLIBYjjm0x.vpBlIYLZNYQ2BnCIirCtL7sidPPfaZ.'),
(3, 'SI SAID ', 'Billel', 'peintre', 5, 'sibillel@gmail.com', 699652202, 'alger', 'Alger centre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 7000, 'images/artisan.png', '$2y$12$cQOX3IpI7nBrN0GhbsQoS.c43T9tft4dqfNecJpwrjFqwTQ3EAQBm'),
(4, 'HAMDI', 'Salem', 'carreleur', 6, 'hamdisal@gmail.com', 699652296, 'tiziouzou', 'mekla', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000, 'images/artisan.png', '$2y$12$p/QTpaLVGf78K6bPilkPMO2ArAQm44JVwBJvbZwj95qcrtFg7XqWm'),
(5, 'KHEFFACHE', 'Anais', 'peintre', 3, 'anaisk@gmail.com', 699652247, 'tiziouzou', 'Tadmait', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3000, 'images/artisanmois.png', '$2y$12$dtOwbYnNNV99T.K.lG6gAePgHEy8tarFMVN7Y7gzRcuRxTNbovzrm'),
(6, 'SAIDI', 'Madjid', 'vitrier', 6, 'saidima@gmail.com', 554266879, 'oran', 'oran centre ville', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 48000, 'images/artisan.png', '$2y$12$.UgNxs7pJRBLyCA5tqAieOxYl8Jh3Ovlby/89P2VgvA3IHCKCIcWK'),
(7, 'SLIMANI', 'Meriem', 'electricien', 2, 'medj@gmail.com', 554721669, 'oran', 'oran ancienne gare', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000, 'images/artisanmois.png', '$2y$12$V5tVuOg1g1Q6sMG2E4FkR.18MaYm6wIxtGEm6eDgq/mzoNbpjRLkS'),
(8, 'BENBRAHIMI', 'Salim', 'macon', 11, 'bensalim@gmail.com', 669826514, 'boumerdes', 'boumerdes ville', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3500, 'images/artisan.png', '$2y$12$G45w7GSmbMUJsLoPuMkOH.Z9pHqLCQ87LxLZBZkN0GnYaJ1Yu6fEG'),
(9, 'MEDJANI', 'Kamel', 'serrurier', 20, 'meriems@gmail.com', 663241569, 'oran', 'oran nouvelle ville', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1500, 'images/artisan.png', '$2y$12$BOjkKB0hzSHyF.gK3JGrHOrIbZ4.0j7gLFu6qJiK.Gmki/L5DhrBu'),
(10, 'SADAOUI', 'Malika', 'vitrier', 5, 'sadmalika@gmail.com', 551456928, 'alger', 'benaknoun', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3000, 'images/artisanmois.png', '$2y$12$YF2V.rK5ZnmAMkHHxSx9yOXrTz6.usWRVFM/iNqUnTpUwZIriE17u'),
(11, 'AMARI', 'Sofiane', 'Plombier', 8, 'sofam@gmail.com', 774598636, 'alger', 'bab el oued', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2300, 'images/artisan.png', '$2y$12$T14JQeA.bRXTblXn.Bag7e7lDEpF72u6ImBDdH9NLDD18vTYSPsqG'),
(12, 'BOUALEM', 'Malik', 'jardinier', 6, 'boumalik@gmail.com', 665892653, 'boumerdes', 'isser', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4200, 'images/artisan.png', '$2y$12$9gEPltyWZgJLdB2FJAR7fOBrvnVVuKo/HUjUPQwh3QZA0OUcT6lju'),
(13, 'ZIDANI', 'Amel', 'peintre', 1, 'zidamel@gmail.com', 772156985, 'boumerdes', 'boumerdes ancienne ville', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000, 'images/artisanmois.png', '$2y$12$C4H/aApt0WjNegCwZuKgKebSKIcGhe5ufe/QstfgLzzcD9pI3NA0u'),
(14, 'HAMIZI', 'Farid', 'electricien', 9, 'faridh@gmail.com', 554269365, 'illizi', 'illizi centre ville', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000, 'images/artisan.png', '$2y$12$BUtJk.ua0Vkgp6FIDJSQ8ewuskw7u0bZ2SWp4x7AGT1A.QdhbKjFC');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id_avis` int(5) NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(255) NOT NULL,
  `note` int(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_art` int(5) NOT NULL,
  PRIMARY KEY (`id_avis`),
  KEY `id_art` (`id_art`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id_avis`, `commentaire`, `note`, `date`, `id_art`) VALUES
(1, 'Bon service !!', 5, '2020-07-11 09:36:32', 1),
(2, 'trÃ¨s bon service !! merci :D', 6, '2020-07-11 15:45:52', 7);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_cl` int(5) NOT NULL AUTO_INCREMENT,
  `nom_cl` varchar(50) NOT NULL,
  `prenom_cl` varchar(50) NOT NULL,
  `email_cl` varchar(60) NOT NULL,
  `tel_cl` int(10) NOT NULL,
  `mdp_cl` varchar(500) NOT NULL,
  PRIMARY KEY (`id_cl`),
  UNIQUE KEY `email_cl` (`email_cl`),
  UNIQUE KEY `tel_cl` (`tel_cl`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_cl`, `nom_cl`, `prenom_cl`, `email_cl`, `tel_cl`, `mdp_cl`) VALUES
(1, 'BENBOUABDELLAH', 'Kenza', 'benkenza103@gmail.com', 699652297, '$2y$12$EtfJwuHxPwivmj/WWZM8.OvmFndW/205sMCuX4d89us0TXq1N9BRG'),
(2, 'AMARA', 'Anais Tinhinane', 'amaranais@gmail.com', 699652200, '$2y$12$L815SPH9QWG1c/Fp/GDPoOie6ixQm6Ih.UqBLToEHjGBxOIbxreP2'),
(3, 'KHEFFACHE', 'Manel', 'manelky@gmail.com', 552343629, '$2y$12$B9jjzZu0asnteejzq2kaPObQ.ySI0xG0tFM6Ynu66tGToHgWdyzHS'),
(4, 'SI SAID', 'Billel', 'sisaidbillel@gmail.com', 669823114, '$2y$12$u72UdFceL/ulp0jAo/2RIOlgoCXXwv529geWjPnwThHQd7PWEMsf2'),
(5, 'SAIDI', 'Brahim', 'saidibrahim@gmail.com', 552311667, '$2y$12$iXQA/0rN42zdarBHSV4K1uobH53Zfnuuj7lJQurcCW2eWPpHoTzye'),
(6, 'DAHMANI', 'Youcef', 'dahyou@gmail.com', 557869415, '$2y$12$k2hXLV9zBmy4avGdJkBTTe/astqK7Wo5vMk6hlg9gsOMne8ggLkS.'),
(7, 'HAMIZI', 'Djamel', 'hamdjam@gmail.com', 558623419, '$2y$12$.XIPVpF6g8f8UPFl71vNx.uzCHqkMbmFmV7C9BTH9ikan2Jc2fJZa'),
(8, 'SI AHMED', 'Nacer', 'sinacer@gmail.com', 554765213, '$2y$12$0UDp3hN0vT5qnxtf3DPOzu/bE6a8bv3mWQ74QAmOqjLpZ4qWG.PKi'),
(9, 'MERZOUK', 'Hamid', 'merham@gmil.com', 772453691, '$2y$12$1mkBqID4ie8oFjeIkL0/iuKnZc59XgIgp2R6aQBBvaJqS.Y1K8oyW'),
(10, 'ZEROUAL', 'Massinissa', 'zermassi@gmail.com', 774589631, '$2y$12$RVCJEAgh0Jc0lVyGFIubKuLw//GXz.YgWN6ehl5KM2sUj0BXFpbgK'),
(11, 'FETHI', 'Samia', 'fetsam@gmail.com', 665213519, '$2y$12$WPkV/5DP.m.ZihP0tp15Fu4Ud3Zmt65FitCJ2Thqf83i6soimZ9BW'),
(12, 'MALKI', 'Fadila', 'malfad@gmail.com', 772169542, '$2y$12$yPSzYYGZFsLZwIrAa/I.HeVdfYKQ2I5JYjVs3LTAH9UKB3Ly56D02'),
(13, 'HAMDI', 'Jugurtha', 'hamjud@gmail.com', 559586214, '$2y$12$gV8Nut3QeT1RX8HdXu.nL.UxwxE0RZtBs/cnMYoWq1.ZXULxzMiTq'),
(14, 'MAHMOUDI', 'Kahina', 'mahkah@gmail.com', 664598214, '$2y$12$ERBzJWXsi6itrFXrGyWN3e.gNP3/alC9ZhXEhiwNSHku74XmAs0Ee'),
(15, 'SAHI', 'Belinda', 'sahbel@gmail.com', 774123568, '$2y$12$0xRdYZAu6vKHxjSOsEmCzu0PEqszP4U9QkmIzgsZGQjggL6b5jCKu');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `id_rdv` int(5) NOT NULL AUTO_INCREMENT,
  `date_rdv` date NOT NULL,
  `travail` text NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `id_art` int(5) NOT NULL,
  `id_cl` int(5) NOT NULL,
  PRIMARY KEY (`id_rdv`),
  UNIQUE KEY `date_rdv` (`date_rdv`),
  KEY `id_cl` (`id_cl`),
  KEY `rdv_ibfk_2` (`id_art`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`id_rdv`, `date_rdv`, `travail`, `lieu`, `adresse`, `id_art`, `id_cl`) VALUES
(1, '2020-07-16', 'problème de court circuit dans ma maison', 'illizi', 'centre ville', 14, 8),
(2, '2020-07-23', 'couper l\'herbe de mon jardin', 'boumerdes', 'gare', 12, 4),
(3, '2020-07-10', 'dalle de sol de ma salle de bain', 'tiziouzou', 'haute ville', 4, 2),
(4, '2020-07-14', 'dalle de sol de mon couloir', 'tiziouzou', 'maatka', 4, 11),
(6, '2020-07-29', 'problème de chaudière', 'tiziouzou', 'azazga', 2, 3),
(7, '2020-07-30', 'fuite d\'eau de mon robinet de cuisine', 'alger', 'bir khadem', 11, 6),
(8, '2020-07-28', 'peinture de mon salon', 'tiziouzou', 'bvrd krim belkacem', 5, 14);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `artisan` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`id_cl`) REFERENCES `client` (`id_cl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rdv_ibfk_2` FOREIGN KEY (`id_art`) REFERENCES `artisan` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
