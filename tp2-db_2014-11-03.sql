-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3305
-- Généré le :  Lun 03 Novembre 2014 à 16:03
-- Version du serveur :  5.5.39
-- Version de PHP :  5.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tp2`
--

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

CREATE TABLE `agents` (
`id` int(200) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `datenaissance` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `detailmasque` tinyint(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `agents`
--

INSERT INTO `agents` (`id`, `prenom`, `nom`, `datenaissance`, `email`, `detailmasque`) VALUES
(1, 'WalterJeezzzzz', 'White', '2014-11-03', 'wwhite@meth.lab', 0);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
`id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `adress` varchar(40) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `policies_id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `adress`, `detail`, `policies_id`) VALUES
(1, 'Son', 'Damm', '123 sonStreet', 'Assurance de rue', 1);

-- --------------------------------------------------------

--
-- Structure de la table `clients_policies`
--

CREATE TABLE `clients_policies` (
  `clients_id` int(11) NOT NULL,
  `policies_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `policies`
--

CREATE TABLE `policies` (
`id` int(11) NOT NULL,
  `clients_id` varchar(40) NOT NULL,
  `details` varchar(200) NOT NULL,
  `dateofpurchase` date NOT NULL,
  `detailmasque` tinyint(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `policies`
--

INSERT INTO `policies` (`id`, `clients_id`, `details`, `dateofpurchase`, `detailmasque`) VALUES
(1, '1', 'Assurance trottoir', '2014-11-19', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `hash_change_password` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `role`, `hash_change_password`, `created`, `modified`) VALUES
(1, 'root', 'c1fd22ea37469dc6aed81972a79bc137f017a146', 'root@root.root', NULL, 'admin', NULL, '2014-11-03 14:10:00', '2014-11-03 14:10:00'),
(2, 'root', 'c1fd22ea37469dc6aed81972a79bc137f017a146', 'root@root.root', NULL, 'admin', NULL, '2014-11-03 14:10:00', '2014-11-03 14:10:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `agents`
--
ALTER TABLE `agents`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `policies`
--
ALTER TABLE `policies`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `agents`
--
ALTER TABLE `agents`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `policies`
--
ALTER TABLE `policies`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
