-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 fév. 2021 à 11:52
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `h48`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` text CHARACTER SET utf8 NOT NULL,
  `image` text CHARACTER SET utf8 NOT NULL,
  `type` text CHARACTER SET utf8 DEFAULT NULL,
  `tags` text CHARACTER SET utf8 DEFAULT NULL,
  `tags2` text CHARACTER SET utf8 DEFAULT NULL,
  `tags3` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `image`, `type`, `tags`, `tags2`, `tags3`) VALUES
(36, 'test9', '_AJG8248.jpg', 'Photos Produits', NULL, NULL, NULL),
(37, 'test3', '_AJG7403.jpg', 'Photos Ambiance', NULL, NULL, NULL),
(38, 'test4', '_AJG8213.jpg', 'Photos Produits', NULL, NULL, NULL),
(39, 'test5', '_AJG8279.jpg', 'Photos Produits', NULL, NULL, NULL),
(41, 'test90', '_AJG7128.jpg', 'Photos Ambiance', NULL, NULL, NULL),
(43, 'test90', 'ardoisemenu.jpg', 'Photos Produits', NULL, NULL, NULL),
(45, 'test63', 'Fotolia_40646456_Subscription_XXL.jpg', 'Photos Ambiance', NULL, NULL, NULL),
(46, 'test86', 'Gregory Duchemin - Centre (1).jpg', 'Photos Ambiance', NULL, NULL, NULL),
(50, 'test8562', 'Xavier_Thuret-38.jpg', 'Photos Ambiance', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `filtres`
--

CREATE TABLE `filtres` (
  `id` int(11) NOT NULL,
  `Familles_de_Produits` text DEFAULT NULL,
  `Composant` text DEFAULT NULL,
  `Ambiance` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filtres`
--

INSERT INTO `filtres` (`id`, `Familles_de_Produits`, `Composant`, `Ambiance`) VALUES
(1, 'entrée', NULL, 'convivialité'),
(2, 'volaille', 'fromage', 'joie');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `surname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `image` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `surname`, `email`, `password`, `image`) VALUES
(0, 'maktooo1', 'killian1', 'lecornet1', 'maktooo@hotmail.com1', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'Logo.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filtres`
--
ALTER TABLE `filtres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `filtres`
--
ALTER TABLE `filtres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
