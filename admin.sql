-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 05 Mai 2019 à 03:57
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `pseudo` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  PRIMARY KEY (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`pseudo`, `email`, `mdp`) VALUES
('Admin', 'admin@ece.fr', 'mdpadmin');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `num_client` mediumint(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `code_postal` mediumint(5) unsigned NOT NULL,
  `pays` varchar(50) NOT NULL,
  `telephone` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`num_client`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`num_client`, `nom`, `prenom`, `email`, `mdp`, `adresse`, `ville`, `code_postal`, `pays`, `telephone`) VALUES
(000001, 'Dupont', 'Jean', 'jeandup@gmail.com', 'jeandup', '64 avenue Aristide Briand', 'Ville imaginaire', 65500, 'France', 0611223344);

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE IF NOT EXISTS `livre` (
  `id` mediumint(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `prix` float(7,2) unsigned NOT NULL,
  `quantite_vendue` smallint(5) unsigned NOT NULL,
  `vendeur` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=400004 ;

--
-- Contenu de la table `livre`
--

INSERT INTO `livre` (`id`, `nom`, `description`, `prix`, `quantite_vendue`, `vendeur`) VALUES
(400000, 'Luca', 'Partout, il y a la terreur.\r\nCelle d''une jeune femme dans une chambre d''hôtel sordide, ventre loué à prix d''or pour couple en mal d''enfant, et qui s''évapore comme elle était arrivée. \r\nPartout, il y a la terreur.\r\nCelle d''un corps mutilé qui gît au fond d''une fosse creusée dans la forêt. \r\nPartout, il y a la terreur.\r\nCelle d''un homme qui connaît le jour et l''heure de sa mort. \r\nEt puis il y a une lettre, comme un manifeste, et qui annonce le pire. \r\nS''engage alors, pour l''équipe du commandant Sharko, une sinistre course contre la montre. \r\nC''était écrit : l''enfer ne fait que commencer. ', 22.90, 10, 'Karlito'),
(400001, 'Devenir', '"Il y a encore tant de choses que j''ignore au sujet de l''Amérique, de la vie, et de ce que l''avenir nous réserve. Mais je sais qui je suis. Mon père, Fraser, m''a appris à travailler dur, à rire souvent et à tenir parole. Ma mère, Marian, à penser par moi-même et à faire entendre ma voix. Tous les deux ensemble, dans notre petit appartement du quartier du South Side de Chicago, ils m''ont aidée à saisir ce qui faisait la valeur de notre histoire, de mon histoire, et plus largement de l''histoire de notre pays. Même quand elle est loin d''être belle et parfaite. Même quand la réalité se rappelle à vous plus que vous ne l''auriez souhaité. Votre histoire vous appartient, et elle vous appartiendra toujours. À vous de vous en emparer."\r\nMichelle Obama', 24.50, 20, 'Paulito'),
(400002, 'L''archipel français', 'En quelques décennies, tout a changé. La France, à l''heure des gilets jaunes, n''a plus rien à voir avec cette nation soudée par l''attachement de tous aux valeurs d''une république une et indivisible. Et lorsque l''analyste s''essaie à rendre compte de la dynamique de cette métamorphose, c''est un archipel d''îless''ignorant les unes les autres qui se dessine sous les yeux fascinés du lecteur.\r\n', 22.00, 15, 'Heninito');

-- --------------------------------------------------------

--
-- Structure de la table `musique`
--

CREATE TABLE IF NOT EXISTS `musique` (
  `id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `prix` float(7,2) unsigned NOT NULL,
  `quantite_vendue` smallint(5) unsigned NOT NULL,
  `vendeur` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100004 ;

--
-- Contenu de la table `musique`
--

INSERT INTO `musique` (`id`, `nom`, `description`, `prix`, `quantite_vendue`, `vendeur`) VALUES
(100000, 'Brol', 'Album de l''artiste Angèle, composé de 12 titres comme le prestigieux "Balance ton quoi".', 12.99, 50, 'Karlito'),
(100001, 'Deux freres', 'Album tant attendu du groupe de rap français PNL, composé de 17 titres inédits dont "AU DD" ou encore "Kuta Ubud".', 12.99, 70, 'Paulito'),
(100003, 'Queen Greatest Hits', 'Album CD regroupant les plus grands hits du prestigieux groupe Queen, incluant des titres de légende comme "I Want To Break Free" ou "We Will Rock You".', 16.99, 30, 'Heninito');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE IF NOT EXISTS `paiement` (
  `num_carte` bigint(16) unsigned zerofill NOT NULL,
  `num_client` mediumint(6) unsigned zerofill NOT NULL,
  `type` enum('Visa','MasterCard','American Express','PayPal') NOT NULL,
  `nom` varchar(50) NOT NULL,
  `cvv` smallint(4) unsigned NOT NULL,
  `date_exp` date NOT NULL,
  PRIMARY KEY (`num_carte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id` mediumint(6) unsigned zerofill NOT NULL,
  `num_client` mediumint(6) unsigned zerofill NOT NULL,
  `categorie` enum('livre','musique','sport et loisir','vetement') NOT NULL,
  `quantite` smallint(5) unsigned NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`id`,`num_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`id`, `num_client`, `categorie`, `quantite`, `prix`) VALUES
(300000, 000001, 'sport et loisir', 5, 139.99);

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `nom_fichier` varchar(30) NOT NULL,
  `id` mediumint(6) unsigned zerofill NOT NULL,
  PRIMARY KEY (`nom_fichier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`nom_fichier`, `id`) VALUES
('bracelet1.jpg', 300001),
('bracelet2.jpg', 300001),
('bracelet3.jpg', 300001),
('Brol.jpg', 100000),
('Chemise1.jpg', 200001),
('Chemise2.jpg', 200001),
('Deuxfreres.png', 100001),
('Devenir.jpg', 400001),
('Jean1.jpg', 200002),
('Jean2.jpg', 200002),
('Jean3.jpg', 200002),
('Larchipel.jpg', 400002),
('Luca.jpg', 400000),
('panier1.jpg', 300000),
('panier2.jpg', 300000),
('Queen.jpg', 100003),
('Robe1.jpg', 200000),
('Robe2.jpg', 200000),
('trampo1.jpg', 300002),
('trampo2.jpg', 300002);

-- --------------------------------------------------------

--
-- Structure de la table `sport_loisir`
--

CREATE TABLE IF NOT EXISTS `sport_loisir` (
  `id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `prix` float(7,2) unsigned NOT NULL,
  `quantite_vendue` smallint(5) unsigned NOT NULL,
  `vendeur` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=300003 ;

--
-- Contenu de la table `sport_loisir`
--

INSERT INTO `sport_loisir` (`id`, `nom`, `description`, `prix`, `quantite_vendue`, `vendeur`) VALUES
(300000, 'Panier basketball', 'Panier de basketball jaune, réglable entre 1,65m et 2,20m.', 139.99, 30, 'Karlito'),
(300001, 'Bracelet', 'Bracelet capteur d''activité Bodyshape AS 81, rose.', 44.90, 20, 'Paulito'),
(300002, 'Trampoline', 'Mini trampoline cardio fitness PFITRMP17.', 48.99, 15, 'Heninito');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE IF NOT EXISTS `vendeur` (
  `pseudo` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vendeur`
--

INSERT INTO `vendeur` (`pseudo`, `nom`, `email`, `photo`, `image`) VALUES
('Heninito', 'Henin', 'heninito@ece.fr', 'pp_henintsoa.jpg', 'img_henintsoa.jpg'),
('Karlito', 'Karl', 'karlito@ece.fr', 'pp_karl.jpg', 'img_karl.jpg'),
('Paulito', 'Paulo', 'paulito@ece.fr', 'pp_paulo.jpg', 'img_paulo.jpg'),
('singe', 'makake', 'singe@ece.fr', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `vetement`
--

CREATE TABLE IF NOT EXISTS `vetement` (
  `id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `prix` float(7,2) unsigned NOT NULL,
  `quantite_vendue` smallint(5) unsigned NOT NULL,
  `vendeur` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `sexe` enum('Homme','Femme') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=200004 ;

--
-- Contenu de la table `vetement`
--

INSERT INTO `vetement` (`id`, `nom`, `description`, `prix`, `quantite_vendue`, `vendeur`, `type`, `sexe`) VALUES
(200000, 'Robe manches courtes', 'Robe en marinière bleue et blanche, manches courtes, de la marque Tommy Hilfiger.', 72.92, 40, 'Karlito', 'Robe', 'Femme'),
(200001, 'Chemise Casual', 'Chemise à fleurs bleues et jaunes, manches courtes et 100% coton.', 52.65, 50, 'Paulito', 'Chemise', 'Homme'),
(200002, 'Jean bleu', 'Jean bleu Levi''s 00501, 100% coton.', 53.19, 60, 'Heninito', 'Jean', 'Homme');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
