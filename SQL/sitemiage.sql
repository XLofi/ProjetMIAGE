-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2023 at 01:19 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitemiage`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresseetudiant`
--

CREATE TABLE `adresseetudiant` (
  `id` int(11) NOT NULL,
  `Ville` varchar(255) DEFAULT NULL,
  `CodePostal` varchar(10) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Telephone` varchar(20) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `personne_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `parent` (
    `id` INT PRIMARY KEY,
    `personne_id` INT,
    `nom` VARCHAR(50),
    `prenom` VARCHAR(50),
    `adresse` VARCHAR(100),,
    `personne_id` int(11) DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `autresformations`
--

CREATE TABLE `autresformations` (
  `id` int(11) NOT NULL,
  `Formation` varchar(255) DEFAULT NULL,
  `personne_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `baccalaureat`
--

CREATE TABLE `baccalaureat` (
  `id` int(11) NOT NULL,
  `Serie` varchar(255) DEFAULT NULL,
  `Mention` varchar(255) DEFAULT NULL,
  `Annee` int(11) DEFAULT NULL,
  `Lieu` varchar(255) DEFAULT NULL,
  `personne_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidatsl3miageapprentissage`
--

CREATE TABLE `candidatsl3miageapprentissage` (
  `id` int(11) NOT NULL,
  `ContactEntreprise` varchar(255) DEFAULT NULL,
  `personne_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `Photo` blob,
  `LM` blob,
  `CV` blob,
  `RelevesNotesBac` blob,
  `Diplomes` blob,
  `JustificatifActiviteProfessionnelle` blob,
  `DossierValidationSujet` blob,
  `personne_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Prenom` varchar(255) DEFAULT NULL,
  `MotdePasse` varchar(255) DEFAULT NULL,
  `EtatCandidature` varchar(255) DEFAULT NULL,
  `NomJeuneFille` varchar(255) DEFAULT NULL,
  `DateNaissance` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `premiercycle`
--

CREATE TABLE `premiercycle` (
  `id` int(11) NOT NULL,
  `Annee1Intitule` varchar(255) DEFAULT NULL,
  `Annee1AnneeObtention` int(11) DEFAULT NULL,
  `Annee1Lieu` varchar(255) DEFAULT NULL,
  `Annee1Moyenne` decimal(4,2) DEFAULT NULL,
  `Annee2Intitule` varchar(255) DEFAULT NULL,
  `Annee2AnneeObtention` int(11) DEFAULT NULL,
  `Annee2Lieu` varchar(255) DEFAULT NULL,
  `Annee2Moyenne` decimal(4,2) DEFAULT NULL,
  `AutresDiplomesIntitule` varchar(255) DEFAULT NULL,
  `AutresDiplomesAnneeObtention` int(11) DEFAULT NULL,
  `AutresDiplomesLieu` varchar(255) DEFAULT NULL,
  `AutresDiplomesMoyenne` decimal(4,2) DEFAULT NULL,
  `personne_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stagesentreprise`
--

CREATE TABLE `stagesentreprise` (
  `id` int(11) NOT NULL,
  `Stage` varchar(255) DEFAULT NULL,
  `Theme` varchar(255) DEFAULT NULL,
  `personne_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `titulairebts`
--

CREATE TABLE `titulairebts` (
  `id` int(11) NOT NULL,
  `BTS` varchar(255) DEFAULT NULL,
  `DUT` varchar(255) DEFAULT NULL,
  `AvisResponsableEtudes` text,
  `RangClassement` varchar(50) DEFAULT NULL,
  `MoyenneEtudiant` decimal(4,2) DEFAULT NULL,
  `MoyennePromotion` decimal(4,2) DEFAULT NULL,
  `DateAvis` date DEFAULT NULL,
  `personne_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresseetudiant`
--
ALTER TABLE `adresseetudiant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personne_id` (`personne_id`);

--
-- Indexes for table `autresformations`
--
ALTER TABLE `autresformations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personne_id` (`personne_id`);

--
-- Indexes for table `baccalaureat`
--
ALTER TABLE `baccalaureat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personne_id` (`personne_id`);

--
-- Indexes for table `candidatsl3miageapprentissage`
--
ALTER TABLE `candidatsl3miageapprentissage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personne_id` (`personne_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personne_id` (`personne_id`);

--
-- Indexes for table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premiercycle`
--
ALTER TABLE `premiercycle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personne_id` (`personne_id`);

--
-- Indexes for table `stagesentreprise`
--
ALTER TABLE `stagesentreprise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personne_id` (`personne_id`);

--
-- Indexes for table `titulairebts`
--
ALTER TABLE `titulairebts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personne_id` (`personne_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresseetudiant`
--
ALTER TABLE `adresseetudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `autresformations`
--
ALTER TABLE `autresformations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `baccalaureat`
--
ALTER TABLE `baccalaureat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `candidatsl3miageapprentissage`
--
ALTER TABLE `candidatsl3miageapprentissage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `premiercycle`
--
ALTER TABLE `premiercycle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stagesentreprise`
--
ALTER TABLE `stagesentreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `titulairebts`
--
ALTER TABLE `titulairebts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `adresseetudiant`
--
ALTER TABLE `adresseetudiant`
  ADD CONSTRAINT `adresseetudiant_ibfk_1` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`);

--
-- Constraints for table `autresformations`
--
ALTER TABLE `autresformations`
  ADD CONSTRAINT `autresformations_ibfk_1` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`);

--
-- Constraints for table `baccalaureat`
--
ALTER TABLE `baccalaureat`
  ADD CONSTRAINT `baccalaureat_ibfk_1` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`);

--
-- Constraints for table `candidatsl3miageapprentissage`
--
ALTER TABLE `candidatsl3miageapprentissage`
  ADD CONSTRAINT `candidatsl3miageapprentissage_ibfk_1` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`);

--
-- Constraints for table `premiercycle`
--
ALTER TABLE `premiercycle`
  ADD CONSTRAINT `premiercycle_ibfk_1` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`);

--
-- Constraints for table `stagesentreprise`
--
ALTER TABLE `stagesentreprise`
  ADD CONSTRAINT `stagesentreprise_ibfk_1` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`);

--
-- Constraints for table `titulairebts`
--
ALTER TABLE `titulairebts`
  ADD CONSTRAINT `titulairebts_ibfk_1` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
