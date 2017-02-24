-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: 59.110.23.231    Database: blog
-- ------------------------------------------------------
-- Server version	5.6.29

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
-- Table structure for table `action_comment`
--

DROP TABLE IF EXISTS `action_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `action_comment` (
  `id` int(11) DEFAULT NULL,
  `classify` tinyint(3) DEFAULT NULL COMMENT '1-original   2-beauty  3-positive',
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action_comment`
--

LOCK TABLES `action_comment` WRITE;
/*!40000 ALTER TABLE `action_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `action_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `action_left`
--

DROP TABLE IF EXISTS `action_left`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `action_left` (
  `id` int(11) DEFAULT NULL,
  `classify` tinyint(3) DEFAULT NULL COMMENT '1-original   2-beauty  3-positive',
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action_left`
--

LOCK TABLES `action_left` WRITE;
/*!40000 ALTER TABLE `action_left` DISABLE KEYS */;
/*!40000 ALTER TABLE `action_left` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `art_about`
--

DROP TABLE IF EXISTS `art_about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `art_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_flag` tinyint(3) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `art_about`
--

LOCK TABLES `art_about` WRITE;
/*!40000 ALTER TABLE `art_about` DISABLE KEYS */;
INSERT INTO `art_about` VALUES (1,'<p>哈哈哈哈333dfsdf</p>','自我介绍',0);
/*!40000 ALTER TABLE `art_about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `art_beauty`
--

DROP TABLE IF EXISTS `art_beauty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `art_beauty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `add_time` datetime DEFAULT NULL,
  `edit_time` datetime DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `del_flag` tinyint(3) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `art_beauty`
--

LOCK TABLES `art_beauty` WRITE;
/*!40000 ALTER TABLE `art_beauty` DISABLE KEYS */;
INSERT INTO `art_beauty` VALUES (1,'45746754','<p>456让他要特意会的</p>','2017-02-24 18:35:16','2017-02-24 18:35:16',NULL,0);
/*!40000 ALTER TABLE `art_beauty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `art_original`
--

DROP TABLE IF EXISTS `art_original`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `art_original` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `add_time` datetime DEFAULT NULL,
  `edit_time` datetime DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `del_flag` tinyint(3) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `art_original`
--

LOCK TABLES `art_original` WRITE;
/*!40000 ALTER TABLE `art_original` DISABLE KEYS */;
INSERT INTO `art_original` VALUES (1,'的算法的发','<p>方式的反反复复</p>','2017-02-24 18:56:22','2017-02-24 18:56:22',NULL,0),(2,'地方vcggg','<p>的撒额外人群玩儿</p>','2017-02-24 18:34:37','2017-02-24 18:34:37',NULL,0);
/*!40000 ALTER TABLE `art_original` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `art_positive`
--

DROP TABLE IF EXISTS `art_positive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `art_positive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `add_time` datetime DEFAULT NULL,
  `edit_time` datetime DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `del_flag` tinyint(255) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `art_positive`
--

LOCK TABLES `art_positive` WRITE;
/*!40000 ALTER TABLE `art_positive` DISABLE KEYS */;
INSERT INTO `art_positive` VALUES (1,'的算法的发','<p>方式的反反复复22的</p>',NULL,'2017-02-24 18:58:29',NULL,0);
/*!40000 ALTER TABLE `art_positive` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `art_tags`
--

DROP TABLE IF EXISTS `art_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `art_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `edit_time` datetime DEFAULT NULL,
  `del_flag` tinyint(3) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `art_tags`
--

LOCK TABLES `art_tags` WRITE;
/*!40000 ALTER TABLE `art_tags` DISABLE KEYS */;
INSERT INTO `art_tags` VALUES (1,'366',NULL,'2017-02-24 18:04:32',1),(2,'dd36','2017-02-24 17:59:03','2017-02-24 17:59:03',0);
/*!40000 ALTER TABLE `art_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `basic_user`
--

DROP TABLE IF EXISTS `basic_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `basic_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT '',
  `realname` varchar(20) NOT NULL DEFAULT '',
  `mobile` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1-正常 0-禁用',
  `add_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edit_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `login_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `del_flag` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0-正常 1-删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basic_user`
--

LOCK TABLES `basic_user` WRITE;
/*!40000 ALTER TABLE `basic_user` DISABLE KEYS */;
INSERT INTO `basic_user` VALUES (1,'admin','9db06bcff9248837f86d1a6bcf41c9e7','梁世茂','15724703695',1,'2016-12-07 14:48:05','2017-02-24 11:14:59','2017-02-24 19:10:20','127.0.0.1',0),(2,'admin13355','','admin1','15355699965',1,'2016-12-07 15:09:09','2017-01-14 14:39:47','0000-00-00 00:00:00','',0),(3,'admin33','9db06bcff9248837f86d1a6bcf41c9e7','admin','15724703694',1,'2016-12-07 17:26:40','2017-01-14 14:39:19','2017-01-14 14:35:56','127.0.0.1',0),(4,'ceshi5666','9db06bcff9248837f86d1a6bcf41c9e7','smile444','15666355589',1,'2017-01-14 14:40:23','2017-01-14 14:48:24','2017-01-14 14:54:10','127.0.0.1',0),(5,'ceshi6','9db06bcff9248837f86d1a6bcf41c9e7','haha','15888966652',1,'2017-01-14 14:46:29','2017-01-14 14:46:29','0000-00-00 00:00:00','',0);
/*!40000 ALTER TABLE `basic_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-24 21:04:10
