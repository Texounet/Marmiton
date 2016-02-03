-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 27, 2016 at 09:50 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Marmiton`
--

-- --------------------------------------------------------

--
-- Table structure for table `Commentaire`
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
-- Table structure for table `Ingredients`
--

CREATE TABLE `Ingredients` (
  `id` int(11) NOT NULL,
  `ingredients` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Recette`
--

CREATE TABLE `Recette` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `suivi` text NOT NULL,
  `ingredients` text NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Tag`
--

CREATE TABLE `Tag` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `id_recette` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `Ingredients`
--
ALTER TABLE `Ingredients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ingredients` (`ingredients`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `Recette`
--
ALTER TABLE `Recette`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tag`
--
ALTER TABLE `Tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Commentaire`
--
ALTER TABLE `Commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Ingredients`
--
ALTER TABLE `Ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Recette`
--
ALTER TABLE `Recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Tag`
--
ALTER TABLE `Tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;