-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: portefeuille
-- ------------------------------------------------------
-- Server version 	5.7.23
-- Date: Sun, 09 Dec 2018 13:39:52 +0000

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `port_activite`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_activite` (
  `id` smallint(6) NOT NULL,
  `idDomaine` smallint(6) NOT NULL,
  `nomenclature` char(6) NOT NULL,
  `lngutile` smallint(6) NOT NULL,
  `libelle` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_activite`
--

LOCK TABLES `port_activite` WRITE;
/*!40000 ALTER TABLE `port_activite` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_activite` VALUES (1,1,'A1.1.1',54,'Analyse du cahier des charges d\'un service à produire'),(2,1,'A1.1.2',47,'Étude de l\'impact de l\'intégration d\'un service sur le système informatique'),(3,1,'A1.1.3',47,'Étude des exigences liées à la qualité attendue d\'un service'),(4,2,'A1.2.1',49,'Élaboration et présentation d\'un dossier de choix de solution technique'),(5,2,'A1.2.2',54,'Rédaction des spécifications techniques de la solution retenue (adaptation d\'une solution existante ou réalisation d\'une nouvelle solution)'),(6,2,'A1.2.3',57,'Évaluation des risques liés à l\'utilisation d\'un service'),(7,2,'A1.2.4',51,'Détermination des tests nécessaires à la validation d\'un service'),(8,2,'A1.2.5',37,'Définition des niveaux d\'habilitation associés à un service'),(9,3,'A1.3.1',49,'Test d\'intégration et d\'acceptation d\'un service'),(10,3,'A1.3.2',51,'Définition des éléments nécessaires à la continuité d\'un service'),(11,3,'A1.3.3',56,'Accompagnement de la mise en place d\'un nouveau service'),(12,3,'A1.3.4',25,'Déploiement d\'un service'),(13,4,'A1.4.1',25,'Participation à un projet'),(14,4,'A1.4.2',47,'Évaluation des indicateurs de suivi d\'un projet et justification des écarts'),(15,4,'A1.4.3',22,'Gestion des ressources'),(16,5,'A2.1.1',53,'Accompagnement des utilisateurs dans la prise en main d\'un service'),(17,5,'A2.1.2',50,'Évaluation et maintien de la qualité d\'un service'),(18,6,'A2.2.1',32,'Suivi et résolution d\'incidents'),(19,6,'A2.2.2',45,'Suivi et réponse à des demandes d\'assistance'),(20,6,'A2.2.3',37,'Réponse à une interruption de service'),(21,7,'A2.3.1',58,'Identification, qualification et évaluation d\'un problème'),(22,7,'A2.3.2',41,'Proposition d\'amélioration d\'un service'),(23,8,'A3.1.1',45,'Proposition d\'une solution d\'infrastructure'),(24,8,'A3.1.2',58,'Maquettage et prototypage d\'une solution d\'infrastructure'),(25,8,'A3.1.3',48,'Prise en compte du niveau de sécurité nécessaire à une infrastructure'),(26,9,'A3.2.1',57,'Installation et configuration d\'éléments d\'infrastructure'),(27,9,'A3.2.2',49,'Remplacement ou mise à jour d\'éléments défectueux ou obsolètes'),(28,9,'A3.2.3',41,'Mise à jour de la documentation technique d\'une solution d\'infrastructure'),(29,10,'A3.3.1',50,'Administration sur site ou à distance des éléments d\'un réseau, de serveurs, de services et d\'équipements terminaux'),(30,10,'A3.3.2',59,'Planification des sauvegardes et gestion des restaurations'),(31,10,'A3.3.3',42,'Gestion des identités et des habilitations'),(32,10,'A3.3.4',43,'Automatisation des tâches d\'administration'),(33,10,'A3.3.5',51,'Gestion des indicateurs et des fichiers d\'activité'),(34,11,'A4.1.1',39,'Proposition d\'une solution applicative'),(35,11,'A4.1.2',51,'Conception ou adaptation de l\'interface utilisateur d\'une solution applicative'),(36,11,'A4.1.3',47,'Conception ou adaptation d\'une base de données'),(37,11,'A4.1.4',59,'Définition des caractéristiques d\'une solution applicative'),(38,11,'A4.1.5',35,'Prototypage de composants logiciels'),(39,11,'A4.1.6',53,'Gestion d\'environnements de développement et de test'),(40,11,'A4.1.7',54,'Développement, utilisation ou adaptation de composants logiciels'),(41,11,'A4.1.8',49,'Réalisation des tests nécessaires à la validation d\'éléments adaptés ou développés'),(42,11,'A4.1.9',40,'Rédaction d\'une documentation technique'),(43,11,'A4.1.1',45,'Rédaction d\'une documentation d\'utilisation'),(44,12,'A4.2.1',44,'Analyse et correction d\'un dysfonctionnement, d\'un problème de qualité de service ou de sécurité'),(45,12,'A4.2.2',52,'Adaptation d\'une solution applicative aux évolutions de ses composants'),(46,12,'A4.2.3',57,'Réalisation des tests nécessaires à la mise en production d\'éléments mis à jour'),(47,12,'A4.2.4',42,'Mise à jour d\'une documentation technique'),(48,13,'A5.1.1',45,'Mise en place d\'une gestion de configuration'),(49,13,'A5.1.2',44,'Recueil d\'informations sur une configuration et ses éléments'),(50,13,'A5.1.3',45,'Suivi d\'une configuration et de ses éléments'),(51,13,'A5.1.4',43,'Étude de propositions de contrat de service (client, fournisseur)'),(52,13,'A5.1.5',40,'Évaluation d\'un élément de configuration ou d\'une configuration'),(53,13,'A5.1.6',44,'Évaluation d\'un investissement informatique'),(54,14,'A5.2.1',50,'Exploitation des référentiels, normes et standards adoptés par le prestataire informatique'),(55,14,'A5.2.2',20,'Veille technologique'),(56,14,'A5.2.3',37,'Repérage des compléments de formation ou d\'auto-formation utiles à l\'acquisition de nouvelles compétences'),(57,14,'A5.2.4',51,'Étude d‘une technologie, d\'un composant, d\'un outil ou d\'une méthode');
/*!40000 ALTER TABLE `port_activite` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_activitecitee`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_activitecitee` (
  `idActivite` smallint(6) NOT NULL,
  `refSituation` int(11) NOT NULL,
  `commentaire` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idActivite`,`refSituation`),
  KEY `iaccisitu` (`refSituation`),
  CONSTRAINT `port_activitecitee_ibfk_1` FOREIGN KEY (`refSituation`) REFERENCES `port_situation` (`ref`),
  CONSTRAINT `port_activitecitee_ibfk_2` FOREIGN KEY (`idActivite`) REFERENCES `port_activite` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_activitecitee`
--

LOCK TABLES `port_activitecitee` WRITE;
/*!40000 ALTER TABLE `port_activitecitee` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `port_activitecitee` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_cadre`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_cadre` (
  `code` smallint(6) NOT NULL,
  `libelle` char(20) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_cadre`
--

LOCK TABLES `port_cadre` WRITE;
/*!40000 ALTER TABLE `port_cadre` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_cadre` VALUES (1,'Équipe'),(2,'Seul');
/*!40000 ALTER TABLE `port_cadre` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_commentaire`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_commentaire` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `refSituation` int(11) DEFAULT NULL,
  `numProfesseur` int(11) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL,
  `datecommentaire` date DEFAULT NULL,
  PRIMARY KEY (`numero`),
  KEY `icommsitu` (`refSituation`),
  CONSTRAINT `port_commentaire_ibfk_1` FOREIGN KEY (`refSituation`) REFERENCES `port_situation` (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_commentaire`
--

LOCK TABLES `port_commentaire` WRITE;
/*!40000 ALTER TABLE `port_commentaire` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `port_commentaire` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_competence`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_competence` (
  `id` smallint(6) NOT NULL,
  `idActivite` smallint(6) NOT NULL,
  `nomenclature` char(9) NOT NULL,
  `libelle` varchar(210) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_competence`
--

LOCK TABLES `port_competence` WRITE;
/*!40000 ALTER TABLE `port_competence` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_competence` VALUES (1,1,'C1.1.1.1','Recenser et caractériser les contextes d\'utilisation, les processus et les acteurs sur lesquels le service à produire aura un impact'),(2,1,'C1.1.1.2','Identifier les fonctionnalités attendues du service à produire'),(3,1,'C1.1.1.3','Préparer sa participation à une réunion'),(4,1,'C1.1.1.4','Rédiger un compte-rendu d\'entretien, de réunion'),(5,2,'C1.1.2.1','Analyser les interactions entre services'),(6,2,'C1.1.2.2','Recenser les composants de l\'architecture technique sur lesquels le service à produire aura un impact'),(7,3,'C1.1.3.1','Recenser et caractériser les exigences liées à la qualité attendue du service à produire'),(8,3,'C1.1.3.2','Recenser et caractériser les exigences de sécurité pour le service à produire'),(9,4,'C1.2.1.1','Recenser et caractériser des solutions répondant au cahier des charges (adaptation d\'une solution existante ou réalisation d\'une nouvelle)'),(10,4,'C1.2.1.2','Estimer le coût d\'une solution'),(11,4,'C1.2.1.3','Rédiger un dossier de choix et un argumentaire technique'),(12,5,'C1.2.2.1','Recenser les composants nécessaires à la réalisation de la solution retenue'),(13,5,'C1.2.2.2','Décrire l\'implantation des différents composants de la solution et les échanges entre eux '),(14,5,'C1.2.2.3','Rédiger les spécifications fonctionnelles et techniques de la solution retenue dans le formalisme exigé par l\'organisation'),(15,6,'C1.2.3.1','Recenser les risques liés à une mauvaise utilisation ou à une utilisation malveillante du service'),(16,6,'C1.2.3.2','Recenser les risques liés à un dysfonctionnement du service'),(17,6,'C1.2.3.3','Prévoir les conséquences techniques de la non prise en compte d\'un risque'),(18,7,'C1.2.4.1','Recenser les tests d\'acceptation nécessaires à la validation du service et les résultats attendus'),(19,7,'C1.2.4.2','Préparer les jeux d\'essai et les procédures pour la réalisation des tests'),(20,8,'C1.2.5.1','Recenser les utilisateurs du service, leurs rôles et leur niveau de responsabilité'),(21,8,'C1.2.5.2','Recenser les ressources liées à l\'utilisation du service'),(22,8,'C1.2.5.3','Proposer les niveaux d\'habilitation associés au service'),(23,9,'C1.3.1.1','Mettre en place l\'environnement de test du service'),(24,9,'C1.3.1.2','Tester le service'),(25,9,'C1.3.1.3','Rédiger le rapport de test'),(26,10,'C1.3.2.1','Identifier les éléments à sauvegarder et à journaliser pour assurer la continuité du service et la traçabilité des transactions'),(27,10,'C1.3.2.2','Spécifier les procédures d\'alerte associées au service'),(28,10,'C1.3.2.3','Décrire les solutions de fonctionnement en mode dégradé et les procédures de reprise du service'),(29,11,'C1.3.3.1','Mettre en place l\'environnement de formation au nouveau service'),(30,11,'C1.3.3.2','Informer et former les utilisateurs'),(31,12,'C1.3.4.1','Mettre au point une procédure d\'installation de la solution'),(32,12,'C1.3.4.2','Automatiser l\'installation de la solution '),(33,12,'C1.3.4.3','Mettre en exploitation le service'),(34,13,'C1.4.1.1','Établir son planning personnel en fonction des exigences et du déroulement du projet'),(35,13,'C1.4.1.2','Rendre compte de son activité'),(36,14,'C1.4.2.1','Suivre l\'exécution du projet'),(37,14,'C1.4.2.2','Analyser les écarts entre temps prévu et temps consommé'),(38,14,'C1.4.2.3','Contribuer à l\'évaluation du projet'),(39,15,'C1.4.3.1','Recenser les ressources humaines, matérielles, logicielles et budgétaires nécessaires à l\'exécution du projet et de ses tâches personnelles'),(40,15,'C1.4.3.2','Adapter son planning personnel en fonction des ressources disponibles'),(41,16,'C2.1.1.1','Aider les utilisateurs dans l\'appropriation du nouveau service'),(42,16,'C2.1.1.2','Identifier des besoins de formation complémentaires'),(43,16,'C2.1.1.3','Rendre compte de la satisfaction des utilisateurs'),(44,17,'C2.1.2.1','Analyser les indicateurs de qualité du service'),(45,17,'C2.1.2.2','Appliquer les procédures d\'alerte destinées à rétablir la qualité du service'),(46,17,'C2.1.2.3','Vérifier périodiquement le fonctionnement du service en mode dégradé et la disponibilité des éléments permettant une reprise du service'),(47,17,'C2.1.2.4','Superviser les services et leur utilisation'),(48,17,'C2.1.2.5','Contrôler la confidentialité et l\'intégrité des données'),(49,17,'C2.1.2.6','Exploiter les indicateurs et les fichiers d\'audit'),(50,17,'C2.1.2.7','Produire les rapports d\'activité demandés par les différents acteurs'),(51,18,'C2.2.1.1','Résoudre l\'incident en s\'appuyant sur une base de connaissances et la documentation associée ou solliciter l\'entité compétente'),(52,18,'C2.2.1.2','Prendre le contrôle d\'un système à distance'),(53,18,'C2.2.1.3','Rédiger un rapport d\'incident et mémoriser l\'incident et sa résolution dans une base de connaissances'),(54,18,'C2.2.1.4','Faire évoluer une procédure de résolution d\'incident'),(55,19,'C2.2.2.1','Identifier le niveau d\'assistance souhaité et proposer une réponse adaptée en s\'appuyant sur une base de connaissances et sur la documentation associée ou solliciter l\'entité compétente'),(56,19,'C2.2.2.2','Informer l\'utilisateur de la situation de sa demande'),(57,19,'C2.2.2.3','Prendre le contrôle d\'un poste utilisateur à distance'),(58,19,'C2.2.2.4','Mémoriser la demande d\'assistance et sa réponse dans une base de connaissances'),(59,20,'C2.2.3.1','Appliquer la procédure de continuité du service en mode dégradé'),(60,20,'C2.2.3.2','Appliquer la procédure de reprise du service'),(61,21,'C2.3.1.1','Repérer une suite de dysfonctionnements récurrents d\'un service'),(62,21,'C2.3.1.2','Identifier les causes de ce dysfonctionnement'),(63,21,'C2.3.1.3','Qualifier le problème (contexte et environnement)'),(64,21,'C2.3.1.4','Définir le degré d\'urgence du problème'),(65,21,'C2.3.1.5','Évaluer les conséquences techniques du problème'),(66,22,'C2.3.2.1','Décrire les incidences d\'un changement proposé sur le service'),(67,22,'C2.3.2.2','Évaluer le délai et le coût de réalisation du changement proposé'),(68,22,'C2.3.2.3','Recenser les risques techniques, humains, financiers et juridiques associés au changement proposé'),(69,23,'C3.1.1.1','Lister les composants matériels et logiciels nécessaires à la prise en charge des processus, des flux d\'information et de leur rôle'),(70,23,'C3.1.1.2','Caractériser les éléments d\'interconnexion, les services, les serveurs et les équipements terminaux nécessaires'),(71,23,'C3.1.1.3','Caractériser les éléments permettant d\'assurer la qualité et la sécurité des services'),(72,23,'C3.1.1.4','Recenser les modifications et/ou les acquisitions nécessaires à la mise en place d\'une solution d\'infrastructure compatible avec le budget et le planning prévisionnels'),(73,23,'C3.1.1.5','Caractériser les solutions d\'interconnexion utilisées entre un réseau et d\'autres réseaux internes ou externes à l\'organisation'),(74,24,'C3.1.2.1','Concevoir une maquette de la solution'),(75,24,'C3.1.2.2','Construire un prototype de la solution'),(76,24,'C3.1.2.3','Préparer l\'intégration d\'un composant d\'infrastructure'),(77,25,'C3.1.3.1','Caractériser des solutions de sécurité et en évaluer le coût'),(78,25,'C3.1.3.2','Proposer une solution de sécurité compatible avec les contraintes techniques, financières, juridiques et organisationnelles'),(79,25,'C3.1.3.3','Décrire une solution de sécurité et les risques couverts'),(80,26,'C3.2.1.1','Installer et configurer un élément d\'interconnexion, un service, un serveur, un équipement terminal utilisateur'),(81,26,'C3.2.1.2','Installer et configurer un élément d\'infrastructure permettant d\'assurer la continuité de service, un système de régulation des éléments d\'infrastructure, un outil de métrologie, un dispositif d\'alerte'),(82,26,'C3.2.1.3','Installer et configurer des éléments de sécurité permettant d\'assurer la protection du système informatique'),(83,27,'C3.2.2.1','Élaborer une procédure de remplacement ou de migration respectant la continuité d\'un service'),(84,27,'C3.2.2.2','Mettre en œuvre une procédure de remplacement ou de migration'),(85,28,'C3.2.3.1','Repérer les éléments de la documentation à mettre à jour'),(86,28,'C3.2.3.2','Mettre à jour la documentation'),(87,29,'C3.3.1.1','Installer et configurer des éléments d\'administration sur site ou à distance'),(88,29,'C3.3.1.2','Administrer des éléments d\'infrastructure sur site ou à distance'),(89,30,'C3.3.2.1','Installer et configurer des outils de sauvegarde et de restauration'),(90,30,'C3.3.2.2','Définir des procédures de sauvegarde et de restauration'),(91,30,'C3.3.2.3','Appliquer des procédures de sauvegarde et de restauration'),(92,31,'C3.3.3.1','Identifier les besoins en gestion d\'identité permettant de protéger les éléments d\'une infrastructure'),(93,31,'C3.3.3.2','Gérer des utilisateurs et une structure organisationnelle'),(94,31,'C3.3.3.3','Affecter des droits aux utilisateurs sur les éléments d\'une solution d\'infrastructure'),(95,32,'C3.3.4.1','Repérer les tâches d\'administration à automatiser'),(96,32,'C3.3.4.2','Concevoir, réaliser et mettre en place une procédure d\'automatisation'),(97,33,'C3.3.5.1','Installer et configurer les outils nécessaires à la production d\'indicateurs d\'activité et à l\'exploitation de fichiers d\'activité'),(98,33,'C3.3.5.2','Assurer la confidentialité des informations collectées et traitées'),(99,34,'C4.1.1.1','Identifier les composants logiciels nécessaires à la conception de la solution'),(100,34,'C4.1.1.2','Estimer les éléments de coût et le délai de mise en œuvre de la solution'),(101,35,'C4.1.2.1','Définir les spécifications de l\'interface utilisateur de la solution applicative'),(102,35,'C4.1.2.2','Maquetter un élément de la solution applicative'),(103,35,'C4.1.2.3','Concevoir et valider la maquette en collaboration avec des utilisateurs'),(104,36,'C4.1.3.1','Modéliser le schéma de données nécessaire à la mise en place de la solution applicative'),(105,36,'C4.1.3.2','Implémenter le schéma de données dans un SGBD'),(106,36,'C4.1.3.3','Programmer des éléments de la solution applicative dans le langage d\'un SGBD'),(107,36,'C4.1.3.4','Manipuler les données liées à la solution applicative à travers un langage de requête'),(108,37,'C4.1.4.1','Recenser et caractériser les composants existants ou à développer utiles à la réalisation de la solution applicative dans le respect des budgets et planning prévisionnels'),(109,38,'C4.1.5.1','Choisir les éléments de la solution à prototyper'),(110,38,'C4.1.5.2','Développer un prototype'),(111,38,'C4.1.5.3','Valider un prototype'),(112,39,'C4.1.6.1','Mettre en place et exploiter un environnement de développement'),(113,39,'C4.1.6.2','Mettre en place et exploiter un environnement de test'),(114,40,'C4.1.7.1','Développer les éléments d\'une solution'),(115,40,'C4.1.7.2','Créer un composant logiciel'),(116,40,'C4.1.7.3','Analyser et modifier le code d\'un composant logiciel'),(117,40,'C4.1.7.4','Utiliser des composants d\'accès aux données'),(118,40,'C4.1.7.5','Mettre en place des éléments de sécurité liés à l\'utilisation d\'un composant logiciel'),(119,41,'C4.1.8.1','Élaborer et réaliser des tests unitaires'),(120,41,'C4.1.8.2','Mettre en évidence et corriger les écarts'),(121,42,'C4.1.9.1','Produire ou mettre à jour la documentation technique d\'une solution applicative et de ses composants logiciels'),(122,43,'C4.1.10.1','Rédiger la documentation d\'utilisation, une aide en ligne, une FAQ'),(123,43,'C4.1.10.2','Adapter la documentation d\'utilisation à chaque contexte d\'utilisation'),(124,44,'C4.2.1.1','Élaborer un jeu d\'essai permettant de reproduire le dysfonctionnement'),(125,44,'C4.2.1.2','Repérer les composants à l\'origine du dysfonctionnement'),(126,44,'C4.2.1.3','Concevoir les mises à jour à effectuer'),(127,44,'C4.2.1.4','Réaliser les mises à jour'),(128,45,'C4.2.2.1','Repérer les évolutions des composants utilisés et leurs conséquences'),(129,45,'C4.2.2.2','Concevoir les mises à jour à effectuer'),(130,45,'C4.2.2.3','Élaborer et réaliser les tests unitaires des composants mis à jour'),(131,46,'C4.2.3.1','Élaborer et réaliser des tests d\'intégration et de non régression de la solution mise à jour'),(132,46,'C4.2.3.2','Concevoir une procédure de migration et l\'appliquer dans le respect de la continuité de service'),(133,47,'C4.2.4.1','Repérer les éléments de la documentation à mettre à jour'),(134,47,'C4.2.4.2','Mettre à jour une documentation'),(135,48,'C5.1.1.1','Recenser les caractéristiques techniques nécessaires à la gestion des éléments de la configuration d\'une organisation'),(136,48,'C5.1.1.2','Paramétrer une solution de gestion des éléments d\'une configuration'),(137,49,'C5.1.2.1','Renseigner les événements relatifs au cycle de vie d\'un élément de la configuration'),(138,49,'C5.1.2.2','Actualiser les caractéristiques des éléments de la configuration'),(139,50,'C5.1.3.1','Contrôler et auditer les éléments de la configuration'),(140,50,'C5.1.3.2','Reconstituer un historique des modifications effectuées sur les éléments de la configuration'),(141,50,'C5.1.3.3','Identifier les éléments de la configuration à modifier ou à remplacer'),(142,50,'C5.1.3.4','Repérer les équipements obsolètes et en proposer le traitement dans le respect de la réglementation en vigueur'),(143,51,'C5.1.4.1','Assister la maîtrise d\'ouvrage dans l\'analyse technique de la proposition de contrat'),(144,51,'C5.1.4.2','Interpréter des indicateurs de suivi de la prestation associée à la proposition de contrat'),(145,51,'C5.1.4.3','Renseigner les éléments permettant d\'estimer la valeur du service'),(146,52,'C5.1.5.1','Vérifier un plan d\'amortissement'),(147,52,'C5.1.5.2','Apprécier la valeur actuelle d\'un élément de configuration'),(148,53,'C5.1.6.1','Renseigner les variables d\'une étude de rentabilité d\'un investissement'),(149,53,'C5.1.6.2','Caractériser et prévoir les investissements matériels et logiciels'),(150,54,'C5.2.1.1','Évaluer le degré de conformité des pratiques à un référentiel, à une norme ou à un standard adopté par le prestataire informatique'),(151,54,'C5.2.1.2','Identifier et partager les bonnes pratiques à intégrer'),(152,55,'C5.2.2.1','Définir une stratégie de recherche d\'informations'),(153,55,'C5.2.2.2','Tenir à jour une liste de sources d\'information'),(154,55,'C5.2.2.3','Évaluer la qualité d\'une source d\'information en fonction d\'un besoin'),(155,55,'C5.2.2.4','Synthétiser et diffuser les résultats d\'une veille'),(156,56,'C5.2.3.1','Identifier les besoins de formation pour mettre en œuvre une technologie, un composant, un outil ou une méthode'),(157,56,'C5.2.3.2','Repérer l\'offre et les dispositifs de formation'),(158,57,'C5.2.4.1','Se documenter à propos d‘une technologie, d\'un composant, d\'un outil ou d\'une méthode'),(159,57,'C5.2.4.2','Identifier le potentiel et les limites d\'une technologie, d\'un composant, d\'un outil ou d\'une méthode par rapport à un service à produire');
/*!40000 ALTER TABLE `port_competence` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_domaine`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_domaine` (
  `id` smallint(6) NOT NULL,
  `idProcessus` smallint(6) NOT NULL,
  `nomenclature` char(4) NOT NULL,
  `libelle` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_domaine`
--

LOCK TABLES `port_domaine` WRITE;
/*!40000 ALTER TABLE `port_domaine` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_domaine` VALUES (1,1,'D1.1','Analyse de la demande'),(2,1,'D1.2','Choix d\'une solution'),(3,1,'D1.3','Mise en production d\'un service'),(4,1,'D1.4','Travail en mode projet'),(5,2,'D2.1','Exploitation des services'),(6,2,'D2.2','Gestion des incidents et des demandes d\'assistance'),(7,2,'D2.3','Gestion des problèmes et des changements'),(8,3,'D3.1','Conception d\'une solution d\'infrastructure'),(9,3,'D3.2','Installation d\'une solution d\'infrastructure'),(10,3,'D3.3','Administration et supervision d\'une infrastructure'),(11,4,'D4.1','Conception et réalisation d\'une solution applicative'),(12,4,'D4.2','Maintenance d\'une solution applicative'),(13,5,'D5.1','Gestion des configurations'),(14,5,'D5.2','Gestion des compétences');
/*!40000 ALTER TABLE `port_domaine` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_epreuve`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_epreuve` (
  `id` smallint(6) NOT NULL,
  `nomenclature` char(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_epreuve`
--

LOCK TABLES `port_epreuve` WRITE;
/*!40000 ALTER TABLE `port_epreuve` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_epreuve` VALUES (1,'U4'),(2,'U5'),(3,'U6');
/*!40000 ALTER TABLE `port_epreuve` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_esttypo`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_esttypo` (
  `refSituation` int(11) NOT NULL,
  `codeTypologie` smallint(6) NOT NULL,
  PRIMARY KEY (`refSituation`,`codeTypologie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_esttypo`
--

LOCK TABLES `port_esttypo` WRITE;
/*!40000 ALTER TABLE `port_esttypo` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `port_esttypo` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_etudiant`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_etudiant` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `numGroupe` int(11) DEFAULT NULL,
  `nom` char(32) NOT NULL,
  `prenom` char(32) NOT NULL,
  `mel` char(64) NOT NULL,
  `mdp` char(255) DEFAULT NULL,
  `numexam` char(16) DEFAULT NULL,
  `valide` char(1) NOT NULL DEFAULT 'O',
  PRIMARY KEY (`num`),
  KEY `ietudgrou` (`numGroupe`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_etudiant`
--

LOCK TABLES `port_etudiant` WRITE;
/*!40000 ALTER TABLE `port_etudiant` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_etudiant` VALUES (2,15,'etudiant','toto','etudiant@localhost','$2y$10$Y1oy/iKuuPJuV3RG6e5Hy.OobM27MOHuuYlufVdJgXQGq7OgLFjNm',NULL,'O');
/*!40000 ALTER TABLE `port_etudiant` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_evalue`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_evalue` (
  `idParcours` smallint(6) NOT NULL,
  `idEpreuve` smallint(6) NOT NULL,
  `idActivite` smallint(6) NOT NULL,
  PRIMARY KEY (`idParcours`,`idEpreuve`,`idActivite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_evalue`
--

LOCK TABLES `port_evalue` WRITE;
/*!40000 ALTER TABLE `port_evalue` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_evalue` VALUES (0,1,5),(0,1,7),(0,1,9),(0,1,12),(0,1,18),(0,1,19),(0,1,20),(0,1,24),(0,1,26),(0,1,27),(0,1,28),(0,1,29),(0,1,32),(0,1,33),(0,1,35),(0,1,36),(0,1,38),(0,1,39),(0,1,40),(0,1,41),(0,1,42),(0,1,43),(0,1,44),(0,1,45),(0,1,46),(0,1,47),(0,2,1),(0,2,2),(0,2,3),(0,2,4),(0,2,6),(0,2,8),(0,2,10),(0,2,21),(0,2,22),(0,2,23),(0,2,25),(0,2,30),(0,2,31),(0,2,34),(0,2,37),(0,2,52),(0,2,53),(0,3,11),(0,3,13),(0,3,14),(0,3,15),(0,3,16),(0,3,17),(0,3,48),(0,3,49),(0,3,50),(0,3,51),(0,3,54),(0,3,55),(0,3,56),(0,3,57),(1,1,5),(1,1,7),(1,1,9),(1,1,12),(1,1,18),(1,1,19),(1,1,20),(1,1,24),(1,1,26),(1,1,27),(1,1,28),(1,1,29),(1,1,32),(1,1,33),(1,2,1),(1,2,2),(1,2,3),(1,2,4),(1,2,6),(1,2,8),(1,2,10),(1,2,21),(1,2,22),(1,2,23),(1,2,25),(1,2,30),(1,2,31),(1,2,52),(1,2,53),(1,3,11),(1,3,13),(1,3,14),(1,3,15),(1,3,16),(1,3,17),(1,3,48),(1,3,49),(1,3,50),(1,3,51),(1,3,54),(1,3,55),(1,3,56),(1,3,57),(2,1,5),(2,1,7),(2,1,9),(2,1,12),(2,1,18),(2,1,19),(2,1,20),(2,1,35),(2,1,36),(2,1,38),(2,1,39),(2,1,40),(2,1,41),(2,1,42),(2,1,43),(2,1,44),(2,1,45),(2,1,46),(2,1,47),(2,2,1),(2,2,2),(2,2,3),(2,2,4),(2,2,6),(2,2,8),(2,2,10),(2,2,21),(2,2,22),(2,2,34),(2,2,37),(2,2,52),(2,2,53),(2,3,11),(2,3,13),(2,3,14),(2,3,15),(2,3,16),(2,3,17),(2,3,48),(2,3,49),(2,3,50),(2,3,51),(2,3,54),(2,3,55),(2,3,56),(2,3,57);
/*!40000 ALTER TABLE `port_evalue` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_exerce`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_exerce` (
  `numProfesseur` int(11) NOT NULL,
  `numGroupe` int(11) NOT NULL,
  PRIMARY KEY (`numProfesseur`,`numGroupe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_exerce`
--

LOCK TABLES `port_exerce` WRITE;
/*!40000 ALTER TABLE `port_exerce` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_exerce` VALUES (1,1);
/*!40000 ALTER TABLE `port_exerce` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_exploite`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_exploite` (
  `idParcours` smallint(6) NOT NULL,
  `idProcessus` smallint(6) NOT NULL,
  PRIMARY KEY (`idParcours`,`idProcessus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_exploite`
--

LOCK TABLES `port_exploite` WRITE;
/*!40000 ALTER TABLE `port_exploite` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_exploite` VALUES (1,1),(1,2),(1,3),(1,5),(2,1),(2,2),(2,4),(2,5);
/*!40000 ALTER TABLE `port_exploite` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_groupe`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_groupe` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `nom` char(12) DEFAULT NULL,
  `annee` char(2) DEFAULT NULL,
  `idParcours` smallint(6) DEFAULT '0',
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_groupe`
--

LOCK TABLES `port_groupe` WRITE;
/*!40000 ALTER TABLE `port_groupe` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_groupe` VALUES (1,'admins','00',0);
/*!40000 ALTER TABLE `port_groupe` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_localisation`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_localisation` (
  `code` smallint(6) NOT NULL,
  `libelle` char(32) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_localisation`
--

LOCK TABLES `port_localisation` WRITE;
/*!40000 ALTER TABLE `port_localisation` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_localisation` VALUES (1,'Organisation'),(2,'Centre de formation');
/*!40000 ALTER TABLE `port_localisation` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_parcours`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_parcours` (
  `id` smallint(6) NOT NULL,
  `nomenclature` char(4) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_parcours`
--

LOCK TABLES `port_parcours` WRITE;
/*!40000 ALTER TABLE `port_parcours` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_parcours` VALUES (0,'****','Indifférencié'),(1,'SISR','Solutions d’infrastructure, systèmes et réseaux'),(2,'SLAM','solutions logicielles et applications métiers');
/*!40000 ALTER TABLE `port_parcours` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_peripherique`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_peripherique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idutilisateur` int(10) NOT NULL,
  `description` char(30) NOT NULL,
  `adressemac` varchar(17) NOT NULL,
  `etat` int(1) NOT NULL,
  `datecreation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_peripherique`
--

LOCK TABLES `port_peripherique` WRITE;
/*!40000 ALTER TABLE `port_peripherique` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `port_peripherique` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_processus`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_processus` (
  `id` smallint(6) NOT NULL,
  `nomenclature` char(2) NOT NULL,
  `libelle` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_processus`
--

LOCK TABLES `port_processus` WRITE;
/*!40000 ALTER TABLE `port_processus` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_processus` VALUES (1,'P1','Production de services'),(2,'P2','Fourniture de services'),(3,'P3','Conception et maintenance de solutions d’infrastructure'),(4,'P4','Conception et maintenance de solutions applicatives'),(5,'P5','Gestion du patrimoine informatique');
/*!40000 ALTER TABLE `port_processus` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_production`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_production` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `refSituation` int(11) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`numero`),
  KEY `iprodsitu` (`refSituation`),
  CONSTRAINT `port_production_ibfk_1` FOREIGN KEY (`refSituation`) REFERENCES `port_situation` (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_production`
--

LOCK TABLES `port_production` WRITE;
/*!40000 ALTER TABLE `port_production` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `port_production` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_professeur`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_professeur` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `nom` char(32) NOT NULL,
  `prenom` char(32) NOT NULL,
  `mel` char(64) NOT NULL,
  `mdp` char(255) DEFAULT NULL,
  `niveau` int(11) NOT NULL,
  `valide` char(1) DEFAULT 'O',
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_professeur`
--

LOCK TABLES `port_professeur` WRITE;
/*!40000 ALTER TABLE `port_professeur` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_professeur` VALUES (1,'admin','','admin@local.fr','$2y$10$ZnDhG8v7bNQbSgdfKYCJNe2m4SrDfchAI9k9L.mXxlzybrDDsE5ba',0,'O');
/*!40000 ALTER TABLE `port_professeur` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_situation`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_situation` (
  `ref` int(11) NOT NULL AUTO_INCREMENT,
  `numEtudiant` int(11) NOT NULL,
  `codeLocalisation` smallint(6) NOT NULL,
  `codeSource` smallint(6) NOT NULL,
  `codeType` smallint(6) NOT NULL,
  `codeCadre` smallint(6) NOT NULL,
  `libcourt` varchar(64) NOT NULL,
  `descriptif` varchar(255) NOT NULL,
  `contexte` varchar(255) DEFAULT NULL,
  `datedebut` date DEFAULT NULL,
  `datefin` date DEFAULT NULL,
  `environnement` varchar(255) DEFAULT NULL,
  `moyen` varchar(255) DEFAULT NULL,
  `avisperso` varchar(255) DEFAULT NULL,
  `valide` char(1) NOT NULL DEFAULT 'O',
  `datemodif` date DEFAULT NULL,
  PRIMARY KEY (`ref`),
  KEY `isituetud` (`numEtudiant`),
  KEY `isitulibc` (`libcourt`),
  CONSTRAINT `port_situation_ibfk_1` FOREIGN KEY (`numEtudiant`) REFERENCES `port_etudiant` (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_situation`
--

LOCK TABLES `port_situation` WRITE;
/*!40000 ALTER TABLE `port_situation` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `port_situation` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_source`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_source` (
  `code` smallint(6) NOT NULL,
  `libelle` char(20) NOT NULL,
  `codeTypesource` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_source`
--

LOCK TABLES `port_source` WRITE;
/*!40000 ALTER TABLE `port_source` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_source` VALUES (1,'Stage 1',2),(2,'Stage 2',3),(3,'TP',1),(4,'PPE',1);
/*!40000 ALTER TABLE `port_source` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_type`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_type` (
  `code` smallint(6) NOT NULL,
  `libelle` char(12) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_type`
--

LOCK TABLES `port_type` WRITE;
/*!40000 ALTER TABLE `port_type` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_type` VALUES (1,'Vécu'),(2,'Observé'),(3,'Simulé');
/*!40000 ALTER TABLE `port_type` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_typesource`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_typesource` (
  `code` smallint(6) NOT NULL,
  `libelle` varchar(70) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_typesource`
--

LOCK TABLES `port_typesource` WRITE;
/*!40000 ALTER TABLE `port_typesource` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_typesource` VALUES (1,'SITUATIONS VÉCUES EN FORMATION'),(2,'SITUATIONS VÉCUES EN STAGE DE PREMIÈRE ANNÉE DANS L’ORGANISATION'),(3,'SITUATIONS VÉCUES EN STAGE DE DEUXIÈME ANNÉE DANS L’ORGANISATION');
/*!40000 ALTER TABLE `port_typesource` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `port_typologie`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `port_typologie` (
  `code` smallint(6) NOT NULL,
  `lngutile` smallint(6) NOT NULL,
  `libelle` varchar(85) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port_typologie`
--

LOCK TABLES `port_typologie` WRITE;
/*!40000 ALTER TABLE `port_typologie` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `port_typologie` VALUES (1,56,'Production d’une solution logicielle et d’infrastructure'),(2,55,'Prise en charge d’incidents et de demandes d’assistance'),(3,49,'Élaboration de documents relatifs à la production et à la fourniture de services'),(4,53,'Mise en place d’un dispositif de veille technologique');
/*!40000 ALTER TABLE `port_typologie` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Sun, 09 Dec 2018 13:39:53 +0000
