-- MySQL dump 10.13  Distrib 8.0.25, for macos11 (x86_64)
--
-- Host: localhost    Database: siteweb
-- ------------------------------------------------------
-- Server version	5.7.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `vidéo` varchar(255) DEFAULT NULL,
  `vendu` int(11) DEFAULT NULL,
  `numeroident` int(11) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `panier_id` int(11) DEFAULT NULL,
  `vendeur_id` int(11) NOT NULL,
  `catégorie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vendeur_id` (`vendeur_id`),
  KEY `catégorie_id` (`catégorie_id`),
  CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`vendeur_id`) REFERENCES `vendeur` (`id`),
  CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`catégorie_id`) REFERENCES `catégorie` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Iphone neuf','lienphoto','fonctionne très bien','lienvidéo',0,89299,300,1,1,1),(2,'Livre Maths Seconde','lienphoto','en bon état','lienvideo',0,2893894,23,2,2,2),(3,'Vase ancien','lienphoto','beau vase vintage','lienvideo',0,998,89,2,3,3),(4,'Ecouteurs','lienphoto','batterie cassé','lienvidéo',0,89291,10,2,4,1),(5,'Stylo plume','lienphoto','fourni avec facture','lienvidéo',0,11112,30,3,5,2),(6,'Lampe de bureau','lienphoto','excellent etat','lienvideo',0,8922,45,4,3,3),(7,'Lunettes de soleil','lienphoto','protègent des UV','lienvidéo',0,8902,70,5,3,1),(8,'Cahier Oxford','lienphoto','neuf','lienvidéo',0,111222,5,5,4,2),(9,'essai','essai','desc','video',NULL,33,1,NULL,3,1);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-28 18:06:11
