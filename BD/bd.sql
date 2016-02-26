-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Ven 26 Février 2016 à 09:33
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Marmiton`
--

-- --------------------------------------------------------

--
-- Structure de la table `Commentaire`
--

CREATE TABLE `Commentaire` (
  `id` int(11) NOT NULL,
  `id_recette` int(11) NOT NULL,
  `com` text NOT NULL,
  `note` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Etape`
--

CREATE TABLE `Etape` (
  `id` int(8) NOT NULL,
  `id_recette` int(8) NOT NULL,
  `nom` varchar(1000) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `ingredients` mediumtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Etape`
--

INSERT INTO `Etape` (`id`, `id_recette`, `nom`, `description`, `ingredients`) VALUES
(1, 1, 'etape 1', 'desc 1', 'a:1:{i:0;a:4:{s:3:"ing";s:6:"viande";s:4:"type";s:1:"2";s:5:"quant";s:3:"300";s:4:"dose";s:6:"Gramme";}}'),
(2, 1, 'etape 2', 'desc 2', 'a:1:{i:0;a:4:{s:3:"ing";s:6:"viande";s:4:"type";s:1:"2";s:5:"quant";s:3:"300";s:4:"dose";s:6:"Gramme";}}'),
(3, 2, 'etape 1', 'desc', 'a:1:{i:0;a:4:{s:3:"ing";s:6:"viande";s:4:"type";s:1:"2";s:5:"quant";s:2:"11";s:4:"dose";s:10:"Kilogramme";}}'),
(4, 2, 'etape 2', 'qweqwe', 'a:1:{i:0;a:4:{s:3:"ing";s:6:"viande";s:4:"type";s:1:"2";s:5:"quant";s:4:"1333";s:4:"dose";s:11:"DÃ©cagramme";}}');

-- --------------------------------------------------------

--
-- Structure de la table `Ingredients`
--

CREATE TABLE `Ingredients` (
  `id` int(11) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `quantiter` int(200) NOT NULL,
  `id_rec` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Ingredients`
--

INSERT INTO `Ingredients` (`id`, `ingredients`, `type`, `quantiter`, `id_rec`) VALUES
(1, 'viande', 2, 600, 1),
(2, 'eau', 1, 0, 1),
(4, 'legume', 2, 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ingredient_value`
--

CREATE TABLE `ingredient_value` (
  `id` int(8) NOT NULL,
  `id_type` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `id_value` int(4) NOT NULL,
  `value` varchar(50) NOT NULL,
  `multiplicateur` decimal(10,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ingredient_value`
--

INSERT INTO `ingredient_value` (`id`, `id_type`, `type`, `id_value`, `value`, `multiplicateur`) VALUES
(1, 1, 'Liquide', 1, 'Litre', '1000'),
(2, 1, 'Liquide', 2, 'Décilitres', '100'),
(3, 1, 'Liquide', 3, 'Centilitres', '10'),
(4, 1, 'Liquide', 4, 'Millilitres', '1'),
(5, 2, 'Solide', 1, 'Kilogramme', '1000'),
(6, 2, 'Solide', 2, 'Hectogramme', '100'),
(7, 2, 'Solide', 3, 'Décagramme', '10'),
(8, 2, 'Solide', 4, 'Gramme', '1'),
(9, 3, 'Cuilliere', 3, 'Cuilliere', '2');

-- --------------------------------------------------------

--
-- Structure de la table `Recette`
--

CREATE TABLE `Recette` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `temps` int(8) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Recette`
--

INSERT INTO `Recette` (`id`, `nom`, `temps`, `mail`, `pseudo`, `date`) VALUES
(1, 'recette1', 25, 'mail', 'pseudo', '2016-02-26'),
(2, 'recette 2', 10, 'mail2', 'pseudo', '2016-02-26');

-- --------------------------------------------------------

--
-- Structure de la table `Tag`
--

CREATE TABLE `Tag` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `id_recette` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Tag`
--

INSERT INTO `Tag` (`id`, `tag`, `id_recette`) VALUES
(1, 'tag 1', 1),
(2, 'tag 2', 1),
(3, 'taco', 2),
(4, 'mexicain', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `Etape`
--
ALTER TABLE `Etape`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Ingredients`
--
ALTER TABLE `Ingredients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ingredients` (`ingredients`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `ingredient_value`
--
ALTER TABLE `ingredient_value`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Recette`
--
ALTER TABLE `Recette`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Tag`
--
ALTER TABLE `Tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Etape`
--
ALTER TABLE `Etape`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Ingredients`
--
ALTER TABLE `Ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `ingredient_value`
--
ALTER TABLE `ingredient_value`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `Recette`
--
ALTER TABLE `Recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Tag`
--
ALTER TABLE `Tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;