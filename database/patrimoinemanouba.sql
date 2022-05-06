-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 25 avr. 2022 à 04:06
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `patrimoinemanouba`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `iduser` int(10) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nom` varchar(14) NOT NULL,
  `prenom` varchar(14) NOT NULL,
  `photoadmin` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`iduser`, `user`, `password`, `nom`, `prenom`, `photoadmin`) VALUES
(1, 'admin', 'admin', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `patrimoine`
--

CREATE TABLE `patrimoine` (
  `idpat` int(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `catégorie` varchar(20) NOT NULL,
  `img` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patrimoine`
--

INSERT INTO `patrimoine` (`idpat`, `nom`, `catégorie`, `img`, `description`) VALUES
(1, 'musée', 'patrimoine existant ', 'img/wileya.png', 'palais'),
(2, 'torjmen', 'patrimoine existant ', 'img/torjmen.png', 'hytgrtftyhjnh'),
(5, 'musée', 'patrimoine existant ', 'img/wileyaa.png', 'fd'),
(6, 'fezzani', 'patrimoine existant ', 'img/wileya.png', 'bgf'),
(8, 'nefzi', 'patrimoine existant ', 'img/wileya.png', 'd'),
(9, 'ayary', 'patrimoine existant ', 'img/wileyaa.png', 'j'),
(10, 'selmi', 'patrimoine existant ', 'img/torjmen.png', 's'),
(11, 'selmi', 'patrimoine existant ', 'img/wileya.png', '');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `photo`
--

INSERT INTO `photo` (`id`, `nom`, `image`) VALUES
(1, 'fdf', 'aaaaaaaaaa.jpg'),
(2, 'fdf', 'aaaaaaaaaa.jpg'),
(3, 'fdf', 'aaaaaaaaaa.jpg'),
(4, 'sdqdqsd', 'aaaaaaaaaa.jpg'),
(5, 'gfgfgh', 'aaaaaaaaaa.jpg'),
(6, 'ghgfhgf', '119-1976_IMG 1.png'),
(7, 'ssok', '0P.png'),
(8, 'VV', '119-1981_IMG.JPG'),
(9, '', 'EYA.png'),
(10, 'pat1', '121-2130_IMG.JPG');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`iduser`);

--
-- Index pour la table `patrimoine`
--
ALTER TABLE `patrimoine`
  ADD PRIMARY KEY (`idpat`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `patrimoine`
--
ALTER TABLE `patrimoine`
  MODIFY `idpat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
