-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 13, 2021 at 01:15 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rezemploi`
--

-- --------------------------------------------------------

--
-- Table structure for table `actualites`
--

CREATE TABLE `actualites` (
  `Titre` varchar(30) NOT NULL,
  `Commentaire` varchar(60) NOT NULL,
  `DatePublication` datetime NOT NULL,
  `PubliqueOuPrivee` tinyint(1) NOT NULL,
  `DateSaisie` datetime NOT NULL,
  `IP` varchar(30) NOT NULL,
  `ValideeParModerateur` tinyint(1) NOT NULL,
  `IDActualites` int(11) NOT NULL,
  `IDUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `UtilisateurDontcestUnContact` tinyint(1) NOT NULL,
  `IDUtilisateur` int(11) NOT NULL,
  `IDContact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `entreprises`
--

CREATE TABLE `entreprises` (
  `IDEntreprise` int(11) NOT NULL,
  `RaisonSociale` varchar(20) NOT NULL,
  `SIREN` int(11) NOT NULL,
  `SIRET` int(11) NOT NULL,
  `IDUtilisateurResponsableSaisie` int(11) NOT NULL,
  `Adresse` varchar(20) NOT NULL,
  `Commentaire` varchar(20) NOT NULL,
  `SiteWeb` varchar(20) NOT NULL,
  `EmailDeContact` varchar(20) NOT NULL,
  `Logo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `IDUtilisateur` int(11) NOT NULL,
  `RaisonSocialeEntreprise` varchar(30) NOT NULL,
  `DateDebut` datetime NOT NULL,
  `DateFin` datetime NOT NULL,
  `TitreDeLexperience` varchar(30) NOT NULL,
  `CommentairePublic` varchar(30) NOT NULL,
  `IDTypeExperience` int(11) NOT NULL,
  `DateSaisie` datetime NOT NULL,
  `IPSaisie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logconnexions`
--

CREATE TABLE `logconnexions` (
  `IDUtilisateur` int(11) NOT NULL,
  `IP` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  `ConnexionOKouPas` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `UtilisateurEmetteur` varchar(20) NOT NULL,
  `UtilisateurDestinataire` varchar(20) NOT NULL,
  `Message` varchar(20) NOT NULL,
  `DateEnvoi` datetime NOT NULL,
  `DateDeLecture` datetime NOT NULL,
  `IPDEnvoi` varchar(20) NOT NULL,
  `DateServeurEnvoi` datetime NOT NULL,
  `IPDeLecture` int(11) NOT NULL,
  `DateServeurLecture` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offresdemploi`
--

CREATE TABLE `offresdemploi` (
  `IDEntreprise` int(11) NOT NULL,
  `Titre` varchar(20) NOT NULL,
  `Commentaire` varchar(20) NOT NULL,
  `DatePublication` datetime NOT NULL,
  `IDTypeContrat` int(11) NOT NULL,
  `Salaire` int(11) NOT NULL,
  `IDUtilisateurAyantSaisi` int(11) NOT NULL,
  `IPSaisie` varchar(20) NOT NULL,
  `DateDeSaisie` datetime NOT NULL,
  `ValideeParModerateur` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pagesdusite`
--

CREATE TABLE `pagesdusite` (
  `IDUtilisateur` int(11) NOT NULL,
  `IDPage` int(11) NOT NULL,
  `Titre` varchar(124) NOT NULL,
  `Contenu` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `publicites`
--

CREATE TABLE `publicites` (
  `IDUtilisateur` int(11) NOT NULL,
  `Titre` varchar(20) NOT NULL,
  `Texte` varchar(20) NOT NULL,
  `Photo` blob NOT NULL,
  `IPSaisie` varchar(20) NOT NULL,
  `DateSaisie` datetime NOT NULL,
  `ValideeParModerateur` tinyint(1) NOT NULL,
  `MoyenDePaiementUtilise` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `typedecontrat`
--

CREATE TABLE `typedecontrat` (
  `ID` int(11) NOT NULL,
  `libelle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `typedutilisateurs`
--

CREATE TABLE `typedutilisateurs` (
  `ID` int(11) NOT NULL,
  `libelle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `typesdexperiences`
--

CREATE TABLE `typesdexperiences` (
  `IDTypeExperience` int(11) NOT NULL,
  `libelle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `DateDeNaissance` datetime NOT NULL,
  `User` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `2FA` varchar(30) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `IDTypeUtilisateur` int(11) NOT NULL,
  `Photo` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`IDActualites`),
  ADD UNIQUE KEY `IDUtilisateur` (`IDUtilisateur`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`IDUtilisateur`,`IDContact`);

--
-- Indexes for table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`IDEntreprise`,`SIRET`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`IDUtilisateur`,`IPSaisie`);

--
-- Indexes for table `logconnexions`
--
ALTER TABLE `logconnexions`
  ADD PRIMARY KEY (`IDUtilisateur`,`date`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`UtilisateurEmetteur`,`UtilisateurDestinataire`);

--
-- Indexes for table `offresdemploi`
--
ALTER TABLE `offresdemploi`
  ADD PRIMARY KEY (`IDEntreprise`,`IPSaisie`);

--
-- Indexes for table `pagesdusite`
--
ALTER TABLE `pagesdusite`
  ADD PRIMARY KEY (`IDUtilisateur`,`IDPage`),
  ADD KEY `Titre` (`Titre`),
  ADD KEY `Contenu` (`Contenu`);

--
-- Indexes for table `publicites`
--
ALTER TABLE `publicites`
  ADD PRIMARY KEY (`IDUtilisateur`);

--
-- Indexes for table `typedecontrat`
--
ALTER TABLE `typedecontrat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `typedutilisateurs`
--
ALTER TABLE `typedutilisateurs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `typesdexperiences`
--
ALTER TABLE `typesdexperiences`
  ADD PRIMARY KEY (`IDTypeExperience`,`libelle`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `2FA` (`2FA`),
  ADD UNIQUE KEY `Telephone` (`Telephone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `IDActualites` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `IDUtilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logconnexions`
--
ALTER TABLE `logconnexions`
  MODIFY `IDUtilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offresdemploi`
--
ALTER TABLE `offresdemploi`
  MODIFY `IDEntreprise` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagesdusite`
--
ALTER TABLE `pagesdusite`
  MODIFY `IDUtilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publicites`
--
ALTER TABLE `publicites`
  MODIFY `IDUtilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `typedecontrat`
--
ALTER TABLE `typedecontrat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `typedutilisateurs`
--
ALTER TABLE `typedutilisateurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `typesdexperiences`
--
ALTER TABLE `typesdexperiences`
  MODIFY `IDTypeExperience` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
