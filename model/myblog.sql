-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 05 mai 2021 à 08:56
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `idComment` int NOT NULL AUTO_INCREMENT,
  `comment` mediumtext NOT NULL,
  `statut` tinyint NOT NULL,
  `commentDate` datetime NOT NULL,
  `Post_idPost` int NOT NULL,
  `Post_User_idUser` int NOT NULL,
  `User_idUser` int NOT NULL,
  PRIMARY KEY (`idComment`,`Post_idPost`,`Post_User_idUser`,`User_idUser`),
  KEY `fk_Comment_Post1_idx` (`Post_idPost`,`Post_User_idUser`),
  KEY `fk_Comment_User1_idx` (`User_idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`idComment`, `comment`, `statut`, `commentDate`, `Post_idPost`, `Post_User_idUser`, `User_idUser`) VALUES
(1, 'Le meilleur moyen de réaliser l’impossible est de croire que c’est possible.', 1, '2021-04-01 15:46:45', 1, 1, 1),
(2, 'ah bon? ', 1, '2021-04-01 15:46:45', 2, 1, 9),
(3, 'HEUSSS !', 1, '2021-04-10 11:12:47', 3, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `idPost` int NOT NULL AUTO_INCREMENT,
  `statut` tinyint NOT NULL,
  `title` varchar(255) NOT NULL,
  `chapo` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `dateCreation` datetime NOT NULL,
  `dateUpdate` datetime NOT NULL,
  `User_idUser` int NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idPost`,`User_idUser`),
  KEY `fk_Post_User_idx` (`User_idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`idPost`, `statut`, `title`, `chapo`, `description`, `dateCreation`, `dateUpdate`, `User_idUser`, `picture`) VALUES
(1, 2, 'Femmes dans la tech, montrez-vous !', 'Les femmes sont encore trop peu nombreuses dans les métiers de la science et des hautes technologies. La mise en avant de «role models» et de réseaux féminins pourraient changer la donne.', 'Les femmes représentent 28 % des effectifs en école d’ingénieur, selon la Conférence des directeurs des écoles françaises d’ingénieurs (CDEFI) alors qu’elles sont 47 % des élèves des classes de terminale S (ministère de l\'Education nationale). \r\nL’écart est gigantesque et, surtout, la proportion stagne. Pas d’amélioration une fois entrées dans le monde du travail. \r\nA poste et expérience équivalents, les femmes touchent 12,8 % de moins que les hommes, selon l\'Insee. En équivalent temps plein, elles perçoivent 17 % de moins par an, toujours selon l\'institut statistique.', '2021-04-01 14:13:37', '2021-04-02 14:13:37', 1, NULL),
(2, 2, 'Mon chat me rend zen !', 'C’est prouvé, le chat a un impact positif sur notre vie. Il agit sur nous comme un antistress et nous apporte des tonnes de tendresse.', 'Avec plus de 11 millions de chats domestiques recensés en France (contre 7,42 millions de chiens, 1 million de hamsters et de cochons d’Inde, 600 000 lapins nains…), le chat est aujourd’hui l’animal préféré des Français. Comme il est aussi celui des Britanniques, des Allemands, des Américains ou des Australiens. A se demander ce que cet animal a de plus que les autres ! Qu’il soit casanier, sociable, facile, beau, affectueux, ne suffit pas à expliquer un tel succès. Thérapeute à sa façon, minou répondrait aussi à un besoin de plus en plus pressant de renouer avec l’essentiel, dans des sociétés de plus en plus stressantes.\r\n\r\nIl me rassure', '2021-04-06 14:05:09', '2021-04-07 14:05:09', 1, ''),
(3, 2, 'Ma détente se nomme Warhammer 40k.', 'Pour se détendre après une journée de code, il n\'y a rien de mieux que de monter des figurines...', 'Warhammer 40,000 est un Jeu de figurine stratégique à peindre et à collectionner édité par Games Workshop.\r\nVoilà comment j\'évacue le stress après une semaine à coder ou a travailler !', '2021-04-23 16:29:22', '2021-04-24 16:29:22', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userStatut` int NOT NULL,
  `dateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `pseudo`, `email`, `password`, `userStatut`, `dateCreation`) VALUES
(1, 'Alyzera', 'dmsgaelle@gmail.com', '!!Alyzera1985', 2, '2021-03-30 16:15:26'),
(2, 'Grievous', 'grievous@gmail.com', '!Grievous2014', 1, '2021-04-06 14:45:19'),
(9, 'Comete', 'cometespace.contact@gmail.com', 'uu', 1, '2021-04-27 10:02:53');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_Comment_Post1` FOREIGN KEY (`Post_idPost`,`Post_User_idUser`) REFERENCES `post` (`idPost`, `User_idUser`),
  ADD CONSTRAINT `fk_Comment_User1` FOREIGN KEY (`User_idUser`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_Post_User` FOREIGN KEY (`User_idUser`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
