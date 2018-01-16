-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: example
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `anon` tinyint(2) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `ip` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium luctus metus ac luctus. Nulla vel varius orci, mollis maximus massa. Quisque id gravida nibh, maximus imperdiet ex. Praesent quis posuere lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec id varius arcu, vitae sagittis erat. Sed fringilla dui sed felis faucibus, blandit porta ante dapibus. Vestibulum luctus magna a vulputate consectetur. Integer laoreet mauris id dolor gravida pharetra in vel lacus. Aenean eleifend felis at maximus consequat. Ut scelerisque id est quis ultrices. Nunc leo sapien, elementum eget imperdiet nec, tincidunt eget ante.',0,'John Doe','johndoe@gmail.com','18.144.12.12'),(2,'Proin eros erat, rhoncus a accumsan id, aliquam eu sapien. Suspendisse pellentesque, nibh vel egestas eleifend, neque lacus pellentesque felis, vel eleifend libero nisl a ligula. Donec pellentesque tortor sed odio tincidunt, vel rhoncus erat volutpat. Proin congue iaculis risus, non finibus tellus elementum ut. Vestibulum id metus tortor. Pellentesque condimentum dignissim sapien vel posuere. Praesent sapien erat, suscipit rutrum sodales ac, auctor in mauris. Cras in nisl nunc. Proin velit massa, interdum non euismod vitae, scelerisque eu neque. Fusce varius nec urna nec mattis. Nulla condimentum tempus nisl sit amet elementum. Morbi quis augue at arcu pulvinar mollis. In tristique metus non tortor euismod malesuada. Quisque quis consequat ex.',0,'Jane Doe','janedoe@gmail.com','11.11.11.11'),(3,'Quisque hendrerit metus quis tellus feugiat pharetra. Maecenas in lobortis ante, vitae commodo ante. Aliquam sed ultrices mauris. Nulla facilisi. Aenean condimentum posuere diam, et porta tellus euismod eu. Maecenas turpis tellus, feugiat at justo sed, dapibus faucibus dui. Nulla sagittis ac quam at accumsan. Cras commodo, urna vestibulum condimentum faucibus, sapien lectus vehicula dolor, non efficitur enim purus sed augue. Aenean maximus eget mi id tempus. Donec justo arcu, commodo faucibus justo iaculis, cursus consectetur risus. Vivamus auctor convallis ex quis gravida. Cras sit amet nunc accumsan, blandit lorem eu, consectetur mi.',1,'','',''),(4,'test',0,'','',''),(5,'teasdgvsda sdav',0,'','',''),(6,'test comment - index page',0,'','',''),(7,'test comment 02',0,'foo','bar@bar.com','::1'),(8,'comment 03',0,'fffff','test@test.com','::1'),(9,'teasdg',0,'asgsd','sadgsdg','::1'),(10,'testsgv',0,'sadvfvsa','sadb','::1'),(11,'tewag',0,'dsaf','vvv','::1'),(12,'testse',0,'sdv','svsv','::1'),(13,'vasdvsdvs',0,'sdvsadv','sdvsadvsad','::1'),(14,'dsfdsaf',0,'sadfsd','sdfsd','::1'),(15,'dsav',0,'dsv','sdvds','::1'),(16,'asfvsadvc',0,'asdv','sdva','::1'),(17,'test',0,'','',''),(18,'sdav',0,'','',''),(19,'vsadv',0,'','',''),(20,'dsafsdaf',0,'','',''),(21,'sdafsdag',0,'','',''),(22,'dasbv',0,'','',''),(23,'sdfs',0,'','',''),(24,'sadv',0,'','',''),(25,'sda',0,'','',''),(26,'Test comment',0,'','',''),(27,'sadvsadvv sad  sdv',0,'','',''),(28,'test',0,'','',''),(29,'sadvsdvsdavsdavsd',0,'','',''),(30,'asdlkvgnsdlknvs',0,'','',''),(31,'agwaegweagw',0,'','',''),(32,'sdagsd',0,'','','');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dxauth_login_attempts`
--

DROP TABLE IF EXISTS `dxauth_login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dxauth_login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dxauth_login_attempts`
--

LOCK TABLES `dxauth_login_attempts` WRITE;
/*!40000 ALTER TABLE `dxauth_login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `dxauth_login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dxauth_permissions`
--

DROP TABLE IF EXISTS `dxauth_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dxauth_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `data` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dxauth_permissions`
--

LOCK TABLES `dxauth_permissions` WRITE;
/*!40000 ALTER TABLE `dxauth_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `dxauth_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dxauth_roles`
--

DROP TABLE IF EXISTS `dxauth_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dxauth_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dxauth_roles`
--

LOCK TABLES `dxauth_roles` WRITE;
/*!40000 ALTER TABLE `dxauth_roles` DISABLE KEYS */;
INSERT INTO `dxauth_roles` VALUES (1,0,'User'),(2,0,'Admin');
/*!40000 ALTER TABLE `dxauth_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dxauth_user_autologin`
--

DROP TABLE IF EXISTS `dxauth_user_autologin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dxauth_user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` mediumint(8) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dxauth_user_autologin`
--

LOCK TABLES `dxauth_user_autologin` WRITE;
/*!40000 ALTER TABLE `dxauth_user_autologin` DISABLE KEYS */;
/*!40000 ALTER TABLE `dxauth_user_autologin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dxauth_user_profile`
--

DROP TABLE IF EXISTS `dxauth_user_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dxauth_user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dxauth_user_profile`
--

LOCK TABLES `dxauth_user_profile` WRITE;
/*!40000 ALTER TABLE `dxauth_user_profile` DISABLE KEYS */;
INSERT INTO `dxauth_user_profile` VALUES (1,1,NULL,NULL);
/*!40000 ALTER TABLE `dxauth_user_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dxauth_user_temp`
--

DROP TABLE IF EXISTS `dxauth_user_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dxauth_user_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(34) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activation_key` varchar(50) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dxauth_user_temp`
--

LOCK TABLES `dxauth_user_temp` WRITE;
/*!40000 ALTER TABLE `dxauth_user_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `dxauth_user_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `filetype` varchar(45) NOT NULL,
  `series` varchar(45) NOT NULL,
  `num` int(11) NOT NULL DEFAULT '0',
  `caption` varchar(45) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,'lady','.png','lady',1,'lady first','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec molestie magna. Morbi at ipsum et sem pretium aliquet. Ut rutrum maximus ipsum ut interdum. Phasellus euismod metus lacus, aliquet tincidunt elit tempor ut. Suspendisse sed nibh eu sem commodo porta. Donec magna nibh, varius ut nisl sed, venenatis dapibus tortor. Pellentesque vitae euismod ipsum. Sed ac pellentesque ipsum, ut consectetur arcu. Aenean vehicula odio nec est placerat tincidunt. Praesent id ex erat.'),(2,'lady1','.png','lady',2,'lady second','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec molestie magna. Morbi at ipsum et sem pretium aliquet. Ut rutrum maximus ipsum ut interdum. Phasellus euismod metus lacus, aliquet tincidunt elit tempor ut. Suspendisse sed nibh eu sem commodo porta. Donec magna nibh, varius ut nisl sed, venenatis dapibus tortor. Pellentesque vitae euismod ipsum. Sed ac pellentesque ipsum, ut consectetur arcu. Aenean vehicula odio nec est placerat tincidunt. Praesent id ex erat.'),(3,'lady2','.png','lady',3,'lady third','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec molestie magna. Morbi at ipsum et sem pretium aliquet. Ut rutrum maximus ipsum ut interdum. Phasellus euismod metus lacus, aliquet tincidunt elit tempor ut. Suspendisse sed nibh eu sem commodo porta. Donec magna nibh, varius ut nisl sed, venenatis dapibus tortor. Pellentesque vitae euismod ipsum. Sed ac pellentesque ipsum, ut consectetur arcu. Aenean vehicula odio nec est placerat tincidunt. Praesent id ex erat.'),(4,'roads','.png','roads',1,'roads first','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec molestie magna. Morbi at ipsum et sem pretium aliquet. Ut rutrum maximus ipsum ut interdum. Phasellus euismod metus lacus, aliquet tincidunt elit tempor ut. Suspendisse sed nibh eu sem commodo porta. Donec magna nibh, varius ut nisl sed, venenatis dapibus tortor. Pellentesque vitae euismod ipsum. Sed ac pellentesque ipsum, ut consectetur arcu. Aenean vehicula odio nec est placerat tincidunt. Praesent id ex erat.'),(5,'roads1','.png','roads',2,'roads second','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec molestie magna. Morbi at ipsum et sem pretium aliquet. Ut rutrum maximus ipsum ut interdum. Phasellus euismod metus lacus, aliquet tincidunt elit tempor ut. Suspendisse sed nibh eu sem commodo porta. Donec magna nibh, varius ut nisl sed, venenatis dapibus tortor. Pellentesque vitae euismod ipsum. Sed ac pellentesque ipsum, ut consectetur arcu. Aenean vehicula odio nec est placerat tincidunt. Praesent id ex erat.');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `summary` longtext NOT NULL,
  `thumb_filetype` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'video01','https://vimeo.com/foo','Super Duper Video','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras felis nibh, commodo ullamcorper diam ut, commodo auctor orci. Praesent est mauris, molestie a purus luctus, volutpat porttitor arcu. Vestibulum ut turpis nec neque consequat ullamcorper. Duis sed eleifend nisl. Etiam placerat nisi est. Donec eu nunc et ipsum pulvinar efficitur in sed purus. Nullam pellentesque volutpat lobortis.','.jpg'),(2,'video02','https://vimeo.com/bar','Cool Video','Nam nulla risus, commodo id est eget, tempor ornare magna. Donec euismod eu lorem a aliquam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc blandit faucibus nibh ac rutrum. Maecenas sit amet feugiat nulla, non rutrum purus. Aenean volutpat sed lectus ac ullamcorper. Mauris quis ligula pulvinar ipsum egestas finibus. Quisque fringilla neque sed dui ultricies consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin justo arcu, tempor ac magna eu, dictum gravida felis. Nullam a turpis sit amet odio pellentesque consequat scelerisque in lacus. Sed molestie orci ac massa suscipit lobortis.','.jpg'),(3,'lady1','http://vimeo.com/foo/bar','lady video','Vivamus quis eros dui. Fusce quis nibh lectus. Integer metus quam, commodo eget libero quis, convallis suscipit metus. Curabitur mollis, elit volutpat ultricies varius, diam metus iaculis erat, eu fringilla velit eros at magna. Cras ornare aliquam lorem, sed pellentesque odio posuere at. Nullam et vestibulum nisi. Ut sed metus sit amet tellus laoreet dapibus eu posuere justo. Integer et augue at ex viverra tempus. Suspendisse egestas eget elit a dictum. Sed neque massa, viverra non est quis, ultrices sagittis ligula. Nam sed ante tincidunt, porttitor odio id, mollis ex.','.png'),(4,'roads','http://youtube.com/foo','road video','Nulla libero odio, volutpat vel aliquet et, hendrerit id lorem. Cras accumsan blandit velit tempus sagittis. Donec vel nunc at orci viverra mollis. Cras ex risus, dapibus vitae faucibus eget, vestibulum vitae turpis. In ultricies mauris id nisi molestie cursus. Nullam ullamcorper urna eu elit pretium luctus. Pellentesque et erat laoreet tellus viverra semper et in leo. Integer volutpat viverra eleifend.','.png');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-16 16:43:04