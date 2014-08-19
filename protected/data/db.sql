CREATE DATABASE  IF NOT EXISTS `school` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `school`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: school
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `attendence`
--

DROP TABLE IF EXISTS `attendence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `remarks` text,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_attendence_student1_idx` (`student_id`),
  KEY `fk_attendence_course1_idx` (`course_id`),
  KEY `fk_attendence_teacher1_idx` (`teacher_id`),
  CONSTRAINT `fk_attendence_course1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_attendence_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_attendence_teacher1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendence`
--

LOCK TABLES `attendence` WRITE;
/*!40000 ALTER TABLE `attendence` DISABLE KEYS */;
/*!40000 ALTER TABLE `attendence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authassignment`
--

DROP TABLE IF EXISTS `authassignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authassignment`
--

LOCK TABLES `authassignment` WRITE;
/*!40000 ALTER TABLE `authassignment` DISABLE KEYS */;
INSERT INTO `authassignment` VALUES ('Admin','1',NULL,'N;');
/*!40000 ALTER TABLE `authassignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authitem`
--

DROP TABLE IF EXISTS `authitem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  `timestamp` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authitem`
--

LOCK TABLES `authitem` WRITE;
/*!40000 ALTER TABLE `authitem` DISABLE KEYS */;
INSERT INTO `authitem` VALUES ('Admin',2,NULL,NULL,'N;',NULL),('guardian',2,'guardian',NULL,'N;',NULL),('student',2,'student',NULL,'N;',NULL),('teacher',2,'teacher',NULL,'N;',NULL);
/*!40000 ALTER TABLE `authitem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authitemchild`
--

DROP TABLE IF EXISTS `authitemchild`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authitemchild`
--

LOCK TABLES `authitemchild` WRITE;
/*!40000 ALTER TABLE `authitemchild` DISABLE KEYS */;
/*!40000 ALTER TABLE `authitemchild` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_choice`
--

DROP TABLE IF EXISTS `bbii_choice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_choice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `choice` varchar(200) NOT NULL,
  `poll_id` int(10) unsigned NOT NULL,
  `sort` smallint(6) NOT NULL DEFAULT '0',
  `votes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_choice_poll` (`poll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_choice`
--

LOCK TABLES `bbii_choice` WRITE;
/*!40000 ALTER TABLE `bbii_choice` DISABLE KEYS */;
/*!40000 ALTER TABLE `bbii_choice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_forum`
--

DROP TABLE IF EXISTS `bbii_forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_forum` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `public` tinyint(4) NOT NULL DEFAULT '1',
  `locked` tinyint(4) NOT NULL DEFAULT '0',
  `moderated` tinyint(4) NOT NULL DEFAULT '0',
  `sort` smallint(6) NOT NULL DEFAULT '0',
  `num_posts` int(10) unsigned NOT NULL DEFAULT '0',
  `num_topics` int(10) unsigned NOT NULL DEFAULT '0',
  `last_post_id` int(10) unsigned DEFAULT NULL,
  `poll` tinyint(4) NOT NULL DEFAULT '0',
  `membergroup_id` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_forum`
--

LOCK TABLES `bbii_forum` WRITE;
/*!40000 ALTER TABLE `bbii_forum` DISABLE KEYS */;
/*!40000 ALTER TABLE `bbii_forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_ipaddress`
--

DROP TABLE IF EXISTS `bbii_ipaddress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_ipaddress` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(39) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `source` tinyint(4) DEFAULT '0',
  `count` int(11) DEFAULT '0',
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip_UNIQUE` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_ipaddress`
--

LOCK TABLES `bbii_ipaddress` WRITE;
/*!40000 ALTER TABLE `bbii_ipaddress` DISABLE KEYS */;
/*!40000 ALTER TABLE `bbii_ipaddress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_log_topic`
--

DROP TABLE IF EXISTS `bbii_log_topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_log_topic` (
  `member_id` int(10) unsigned NOT NULL,
  `topic_id` int(10) unsigned NOT NULL,
  `forum_id` int(10) unsigned NOT NULL,
  `last_post_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`member_id`,`topic_id`),
  KEY `idx_log_forum_id` (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_log_topic`
--

LOCK TABLES `bbii_log_topic` WRITE;
/*!40000 ALTER TABLE `bbii_log_topic` DISABLE KEYS */;
/*!40000 ALTER TABLE `bbii_log_topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_member`
--

DROP TABLE IF EXISTS `bbii_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_name` varchar(45) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `personal_text` varchar(255) DEFAULT NULL,
  `signature` text,
  `avatar` varchar(255) DEFAULT NULL,
  `show_online` tinyint(4) DEFAULT '1',
  `contact_email` tinyint(4) DEFAULT '0',
  `contact_pm` tinyint(4) DEFAULT '1',
  `timezone` varchar(80) DEFAULT NULL,
  `first_visit` timestamp NULL DEFAULT NULL,
  `last_visit` timestamp NULL DEFAULT NULL,
  `warning` tinyint(4) DEFAULT '0',
  `posts` int(10) unsigned DEFAULT '0',
  `group_id` tinyint(4) DEFAULT '0',
  `upvoted` smallint(6) DEFAULT '0',
  `blogger` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `flickr` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `metacafe` varchar(255) DEFAULT NULL,
  `myspace` varchar(255) DEFAULT NULL,
  `orkut` varchar(255) DEFAULT NULL,
  `tumblr` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `wordpress` varchar(255) DEFAULT NULL,
  `yahoo` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `moderator` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `member_name_UNIQUE` (`member_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_member`
--

LOCK TABLES `bbii_member` WRITE;
/*!40000 ALTER TABLE `bbii_member` DISABLE KEYS */;
INSERT INTO `bbii_member` VALUES (1,'admin',NULL,NULL,NULL,NULL,'',NULL,1,0,1,'Europe/London','2014-08-19 06:22:04','2014-08-19 06:22:04',0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(3,'mushahidh',NULL,NULL,NULL,NULL,'',NULL,1,0,1,'Europe/London','2014-08-13 06:17:23','2014-08-13 06:47:15',0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0);
/*!40000 ALTER TABLE `bbii_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_membergroup`
--

DROP TABLE IF EXISTS `bbii_membergroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_membergroup` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  `min_posts` smallint(6) NOT NULL DEFAULT '-1',
  `color` varchar(6) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_membergroup`
--

LOCK TABLES `bbii_membergroup` WRITE;
/*!40000 ALTER TABLE `bbii_membergroup` DISABLE KEYS */;
INSERT INTO `bbii_membergroup` VALUES (0,'Members',NULL,-1,'0000ff',NULL);
/*!40000 ALTER TABLE `bbii_membergroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_message`
--

DROP TABLE IF EXISTS `bbii_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sendfrom` int(10) unsigned NOT NULL,
  `sendto` int(10) unsigned NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `read_indicator` tinyint(4) NOT NULL DEFAULT '0',
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `inbox` tinyint(4) NOT NULL DEFAULT '1',
  `outbox` tinyint(4) NOT NULL DEFAULT '1',
  `ip` varchar(39) NOT NULL,
  `post_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sendfrom_INDEX` (`sendfrom`),
  KEY `sendto_INDEX` (`sendto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_message`
--

LOCK TABLES `bbii_message` WRITE;
/*!40000 ALTER TABLE `bbii_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `bbii_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_poll`
--

DROP TABLE IF EXISTS `bbii_poll`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_poll` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `expire_date` date DEFAULT NULL,
  `allow_revote` tinyint(4) NOT NULL DEFAULT '0',
  `allow_multiple` tinyint(4) NOT NULL DEFAULT '0',
  `votes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_poll_post` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_poll`
--

LOCK TABLES `bbii_poll` WRITE;
/*!40000 ALTER TABLE `bbii_poll` DISABLE KEYS */;
/*!40000 ALTER TABLE `bbii_poll` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_post`
--

DROP TABLE IF EXISTS `bbii_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `topic_id` int(10) unsigned DEFAULT NULL,
  `forum_id` int(10) unsigned DEFAULT NULL,
  `ip` varchar(39) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `approved` tinyint(4) DEFAULT NULL,
  `change_id` int(10) unsigned DEFAULT NULL,
  `change_time` timestamp NULL DEFAULT NULL,
  `change_reason` varchar(255) DEFAULT NULL,
  `upvoted` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id_INDEX` (`user_id`),
  KEY `topic_id_INDEX` (`topic_id`),
  KEY `create_time_INDEX` (`create_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_post`
--

LOCK TABLES `bbii_post` WRITE;
/*!40000 ALTER TABLE `bbii_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `bbii_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_session`
--

DROP TABLE IF EXISTS `bbii_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_session` (
  `id` varchar(128) NOT NULL,
  `last_visit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_session`
--

LOCK TABLES `bbii_session` WRITE;
/*!40000 ALTER TABLE `bbii_session` DISABLE KEYS */;
INSERT INTO `bbii_session` VALUES ('q824a2a26ufkis850gubdm7rg3','2014-08-19 09:22:04');
/*!40000 ALTER TABLE `bbii_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_setting`
--

DROP TABLE IF EXISTS `bbii_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_setting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_setting`
--

LOCK TABLES `bbii_setting` WRITE;
/*!40000 ALTER TABLE `bbii_setting` DISABLE KEYS */;
/*!40000 ALTER TABLE `bbii_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_spider`
--

DROP TABLE IF EXISTS `bbii_spider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_spider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `last_visit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_spider`
--

LOCK TABLES `bbii_spider` WRITE;
/*!40000 ALTER TABLE `bbii_spider` DISABLE KEYS */;
INSERT INTO `bbii_spider` VALUES (1,'AddThis','AddThis.com robot tech.support@clearspring.com',0,'2014-08-13 09:07:33'),(2,'AhrefsBot','Mozilla/5.0 (compatible; AhrefsBot/5.0; +http://ahrefs.com/robot/)',0,'2014-08-13 09:07:33'),(3,'archive.org_bot','Mozilla/5.0 (compatible; archive.org_bot; Wayback Machine Live Record; +http://archive.org/details/archive.org_bot)',0,'2014-08-13 09:07:33'),(4,'Baiduspider','Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',0,'2014-08-13 09:07:33'),(5,'Bingbot','Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)',0,'2014-08-13 09:07:33'),(6,'Blekkobot','Mozilla/5.0 (compatible; Blekkobot; ScoutJet; +http://blekko.com/about/blekkobot)',0,'2014-08-13 09:07:33'),(7,'BLEXBot','Mozilla/5.0 (compatible; BLEXBot/1.0; +http://webmeup-crawler.com/)',0,'2014-08-13 09:07:33'),(8,'CareerBot','Mozilla/5.0 (compatible; CareerBot/1.1; +http://www.career-x.de/bot.html)',0,'2014-08-13 09:07:33'),(9,'ChangeDetection','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1;  http://www.changedetection.com/bot.html )',0,'2014-08-13 09:07:33'),(10,'CocCoc','Mozilla/5.0 (compatible; coccoc/1.0; +http://help.coccoc.com/)',0,'2014-08-13 09:07:33'),(11,'Daumoa','Mozilla/5.0 (compatible; MSIE or Firefox mutant; not on Windows server; + http://tab.search.daum.net/aboutWebSearch.html) Daumoa/3.0',0,'2014-08-13 09:07:33'),(12,'DotBot','Mozilla/5.0 (compatible; DotBot/1.1; http://www.opensiteexplorer.org/dotbot, help@moz.com)',0,'2014-08-13 09:07:33'),(13,'EasouSpider','Mozilla/5.0 (compatible; EasouSpider; +http://www.easou.com/search/spider.html)',0,'2014-08-13 09:07:33'),(14,'Exabot','Mozilla/5.0 (compatible; Exabot/3.0; +http://www.exabot.com/go/robot)',0,'2014-08-13 09:07:33'),(15,'Exabot','Mozilla/5.0 (compatible; Exabot/3.0 (BiggerBetter); +http://www.exabot.com/go/robot)',0,'2014-08-13 09:07:33'),(16,'FlipboardProxy','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:28.0) Gecko/20100101 Firefox/28.0 (FlipboardProxy/1.1; +http://flipboard.com/browserproxy)',0,'2014-08-13 09:07:33'),(17,'Genieo','Mozilla/5.0 (compatible; Genieo/1.0 http://www.genieo.com/webfilter.html)',0,'2014-08-13 09:07:33'),(18,'Googlebot','Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',0,'2014-08-13 09:07:33'),(19,'Googlebot-Mobile','Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e Safari/8536.25 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',0,'2014-08-13 09:07:33'),(20,'GrapeshotCrawler','Mozilla/5.0 (compatible; GrapeshotCrawler/2.0; +http://www.grapeshot.co.uk/crawler.php)',0,'2014-08-13 09:07:33'),(21,'HubSpot Crawler','HubSpot Crawler 1.0 http://www.hubspot.com/',0,'2014-08-13 09:07:33'),(22,'ia_archiver','ia_archiver (+http://www.alexa.com/site/help/webmasters; crawler@alexa.com)',0,'2014-08-13 09:07:33'),(23,'Ichiro','ichiro/3.0 (http://search.goo.ne.jp/option/use/sub4/sub4-1/)',0,'2014-08-13 09:07:33'),(24,'LinkedInBot','LinkedInBot/1.0 (compatible; Mozilla/5.0; Jakarta Commons-HttpClient/3.1 +http://www.linkedin.com)',0,'2014-08-13 09:07:33'),(25,'Magpie','magpie-crawler/1.1 (U; Linux amd64; en-GB; +http://www.brandwatch.net)',0,'2014-08-13 09:07:34'),(26,'Mail.RU_Bot','Mozilla/5.0 (compatible; Linux x86_64; Mail.RU_Bot/Img/2.0; +http://go.mail.ru/help/robots)',0,'2014-08-13 09:07:34'),(27,'Meanpathbot','Mozilla/5.0 (compatible; meanpathbot/1.0; +http://www.meanpath.com/meanpathbot.html)',0,'2014-08-13 09:07:34'),(28,'MetaJobBot','Mozilla/5.0 (compatible; MetaJobBot; http://www.metajob.at/crawler)',0,'2014-08-13 09:07:34'),(29,'MJ12bot','Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',0,'2014-08-13 09:07:34'),(30,'MSNbot','msnbot/2.0b (+http://search.msn.com/msnbot.htm)',0,'2014-08-13 09:07:34'),(31,'Netseer','Mozilla/5.0 (compatible; Netseer crawler/2.0; +http://www.netseer.com/crawler.html; crawler@netseer.com)',0,'2014-08-13 09:07:34'),(32,'Omgilibot','omgilibot/0.4 +http://omgili.com',0,'2014-08-13 09:07:34'),(33,'Proximic','Mozilla/5.0 (compatible; proximic; +http://www.proximic.com/info/spider.php)',0,'2014-08-13 09:07:34'),(34,'R6_bot','R6_CommentReader(www.radian6.com/crawler)',0,'2014-08-13 09:07:34'),(35,'SearchmetricsBot','Mozilla/5.0 (compatible; SearchmetricsBot; http://www.searchmetrics.com/en/searchmetrics-bot/)',0,'2014-08-13 09:07:34'),(36,'SEOENGWorldBot','SEOENGWorldBot/1.0 (+http://www.seoengine.com/seoengbot.htm)',0,'2014-08-13 09:07:34'),(37,'SEOkicks-Robot','Mozilla/5.0 (compatible; SEOkicks-Robot; +http://www.seokicks.de/robot.html)',0,'2014-08-13 09:07:34'),(38,'SeznamBot','Mozilla/5.0 (compatible; SeznamBot/3.2; +http://fulltext.sblog.cz/)',0,'2014-08-13 09:07:34'),(39,'ShopWiki','ShopWiki/1.0 ( +http://www.shopwiki.com/wiki/Help:Bot)',0,'2014-08-13 09:07:34'),(40,'SISTRIX Crawler','Mozilla/5.0 (compatible; SISTRIX Crawler; http://crawler.sistrix.net/)',0,'2014-08-13 09:07:34'),(41,'Sogou web spider','Sogou web spider/4.0(+http://www.sogou.com/docs/help/webmasters.htm#07)',0,'2014-08-13 09:07:34'),(42,'SPbot','Mozilla/5.0 (compatible; spbot/4.1.0; +http://OpenLinkProfiler.org/bot )',0,'2014-08-13 09:07:34'),(43,'Spinn3r','Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.19; aggregator:Spinn3r (Spinn3r 3.1); http://spinn3r.com/robot) Gecko/2010040121 Firefox/3.0.19',0,'2014-08-13 09:07:34'),(44,'Vagabondo','Mozilla/4.0 (compatible;  Vagabondo/4.0; webcrawler at wise-guys dot nl; http://webagent.wise-guys.nl/; http://www.wise-guys.nl/)',0,'2014-08-13 09:07:34'),(45,'VoilaBot','Mozilla/5.0 (Windows NT 5.1; U; Win64; fr; rv:1.8.1) VoilaBot BETA 1.2 (support.voilabot@orange-ftgroup.com)',0,'2014-08-13 09:07:34'),(46,'WeSEE','WeSEE',0,'2014-08-13 09:07:34'),(47,'Woko robot','Woko robot 3.0',0,'2014-08-13 09:07:34'),(48,'Yahoo!Slurp','Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp)',0,'2014-08-13 09:07:34'),(49,'YandexBot','Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)',0,'2014-08-13 09:07:34'),(50,'Yeti','Yeti/1.1 (Naver Corp.; http://help.naver.com/robots/)',0,'2014-08-13 09:07:34');
/*!40000 ALTER TABLE `bbii_spider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_topic`
--

DROP TABLE IF EXISTS `bbii_topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_topic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `forum_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `first_post_id` int(10) unsigned NOT NULL,
  `last_post_id` int(10) unsigned NOT NULL,
  `num_replies` int(10) unsigned NOT NULL DEFAULT '0',
  `num_views` int(10) unsigned NOT NULL DEFAULT '0',
  `approved` tinyint(4) NOT NULL DEFAULT '0',
  `locked` tinyint(4) NOT NULL DEFAULT '0',
  `sticky` tinyint(4) NOT NULL DEFAULT '0',
  `global` tinyint(4) NOT NULL DEFAULT '0',
  `moved` int(10) unsigned NOT NULL DEFAULT '0',
  `upvoted` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `forum_id_INDEX` (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_topic`
--

LOCK TABLES `bbii_topic` WRITE;
/*!40000 ALTER TABLE `bbii_topic` DISABLE KEYS */;
/*!40000 ALTER TABLE `bbii_topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_upvoted`
--

DROP TABLE IF EXISTS `bbii_upvoted`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_upvoted` (
  `member_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  KEY `idx_upvoted_member` (`member_id`),
  KEY `idx_upvoted_post` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_upvoted`
--

LOCK TABLES `bbii_upvoted` WRITE;
/*!40000 ALTER TABLE `bbii_upvoted` DISABLE KEYS */;
/*!40000 ALTER TABLE `bbii_upvoted` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbii_vote`
--

DROP TABLE IF EXISTS `bbii_vote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbii_vote` (
  `poll_id` int(10) unsigned NOT NULL,
  `choice_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`poll_id`,`choice_id`,`user_id`),
  KEY `idx_vote_poll` (`poll_id`),
  KEY `idx_vote_user` (`user_id`),
  KEY `idx_vote_choice` (`choice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbii_vote`
--

LOCK TABLES `bbii_vote` WRITE;
/*!40000 ALTER TABLE `bbii_vote` DISABLE KEYS */;
/*!40000 ALTER TABLE `bbii_vote` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_date` datetime DEFAULT NULL,
  `filename` varchar(45) DEFAULT NULL,
  `teacher_teacher_id` int(11) NOT NULL,
  `student_student_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_content_teacher1_idx` (`teacher_teacher_id`),
  KEY `fk_content_student1_idx` (`student_student_id`),
  KEY `fk_content_task1_idx` (`task_id`),
  CONSTRAINT `fk_content_student1` FOREIGN KEY (`student_student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_content_task1` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_content_teacher1` FOREIGN KEY (`teacher_teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `description` text,
  `syllabus` text,
  `filepath` varchar(450) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `criteria`
--

DROP TABLE IF EXISTS `criteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `criteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity` varchar(45) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `criteria`
--

LOCK TABLES `criteria` WRITE;
/*!40000 ALTER TABLE `criteria` DISABLE KEYS */;
/*!40000 ALTER TABLE `criteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text,
  `answer` text,
  `type` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `level` varchar(45) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade`
--

LOCK TABLES `grade` WRITE;
/*!40000 ALTER TABLE `grade` DISABLE KEYS */;
/*!40000 ALTER TABLE `grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grade_section`
--

DROP TABLE IF EXISTS `grade_section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grade_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `grade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_class_section_section1_idx` (`section_id`),
  KEY `fk_class_section_grade1_idx` (`grade_id`),
  CONSTRAINT `fk_class_section_grade1` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_class_section_section1` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade_section`
--

LOCK TABLES `grade_section` WRITE;
/*!40000 ALTER TABLE `grade_section` DISABLE KEYS */;
/*!40000 ALTER TABLE `grade_section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guardian`
--

DROP TABLE IF EXISTS `guardian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guardian` (
  `guardian_id` int(11) NOT NULL,
  `firstname` varchar(250) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `address` varchar(450) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`guardian_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guardian`
--

LOCK TABLES `guardian` WRITE;
/*!40000 ALTER TABLE `guardian` DISABLE KEYS */;
/*!40000 ALTER TABLE `guardian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `obtained_marks` varchar(45) DEFAULT NULL,
  `task_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `teacher_teacher_id` int(11) NOT NULL,
  `student_student_id` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_marks_task1_idx` (`task_id`),
  KEY `fk_marks_course1_idx` (`course_id`),
  KEY `fk_marks_teacher1_idx` (`teacher_teacher_id`),
  KEY `fk_marks_student1_idx` (`student_student_id`),
  CONSTRAINT `fk_marks_course1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_marks_student1` FOREIGN KEY (`student_student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_marks_task1` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_marks_teacher1` FOREIGN KEY (`teacher_teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marks`
--

LOCK TABLES `marks` WRITE;
/*!40000 ALTER TABLE `marks` DISABLE KEYS */;
/*!40000 ALTER TABLE `marks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `subject` varchar(256) NOT NULL DEFAULT '',
  `body` text,
  `is_read` enum('0','1') NOT NULL DEFAULT '0',
  `deleted_by` enum('sender','receiver') DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sender` (`sender_id`),
  KEY `reciever` (`receiver_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,1,1,'Hello','Hello','1',NULL,'2014-08-11 11:55:12',NULL,NULL,NULL,NULL),(2,1,3,'Hi','hi','1',NULL,'2014-08-11 11:55:55',NULL,NULL,NULL,NULL),(3,1,3,'Hi','hi','1',NULL,'2014-08-11 11:55:55',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`),
  CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (4,'',''),(5,'','');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles_fields`
--

DROP TABLE IF EXISTS `profiles_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  `timestamp` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles_fields`
--

LOCK TABLES `profiles_fields` WRITE;
/*!40000 ALTER TABLE `profiles_fields` DISABLE KEYS */;
/*!40000 ALTER TABLE `profiles_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rights`
--

DROP TABLE IF EXISTS `rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`),
  CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rights`
--

LOCK TABLES `rights` WRITE;
/*!40000 ALTER TABLE `rights` DISABLE KEYS */;
/*!40000 ALTER TABLE `rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section`
--

LOCK TABLES `section` WRITE;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
/*!40000 ALTER TABLE `section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(250) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `guardian_id` int(11) NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `fk_student_guardian1_idx` (`guardian_id`),
  CONSTRAINT `fk_student_guardian1` FOREIGN KEY (`guardian_id`) REFERENCES `guardian` (`guardian_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_student_user1` FOREIGN KEY (`student_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_grade_section`
--

DROP TABLE IF EXISTS `student_grade_section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_grade_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `grade_section_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_student_class_section_student1_idx` (`student_student_id`),
  KEY `fk_student_class_section_course1_idx` (`course_id`),
  KEY `fk_student_class_section_grade_section1_idx` (`grade_section_id`),
  CONSTRAINT `fk_student_class_section_course1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_student_class_section_grade_section1` FOREIGN KEY (`grade_section_id`) REFERENCES `grade_section` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_student_class_section_student1` FOREIGN KEY (`student_student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_grade_section`
--

LOCK TABLES `student_grade_section` WRITE;
/*!40000 ALTER TABLE `student_grade_section` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_grade_section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `date_given` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `taskcol` varchar(45) DEFAULT NULL,
  `description` text,
  `total_marks` varchar(45) DEFAULT NULL,
  `teacher_teacher_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `grade_section_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_task_teacher1_idx` (`teacher_teacher_id`),
  KEY `fk_task_content1_idx` (`content_id`),
  KEY `fk_task_grade_section1_idx` (`grade_section_id`),
  CONSTRAINT `fk_task_content1` FOREIGN KEY (`content_id`) REFERENCES `content` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_task_grade_section1` FOREIGN KEY (`grade_section_id`) REFERENCES `grade_section` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_task_teacher1` FOREIGN KEY (`teacher_teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `firstname` varchar(250) DEFAULT NULL,
  `lastname` varchar(250) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `officehours_start` time DEFAULT NULL,
  `officehour_end` time DEFAULT NULL,
  `timestamp` varchar(45) DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`teacher_id`),
  CONSTRAINT `fk_teacher_user1` FOREIGN KEY (`teacher_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_grade_section`
--

DROP TABLE IF EXISTS `teacher_grade_section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_grade_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_teacher_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `createby` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `grade_section_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_teacher_class_section_teacher1_idx` (`teacher_teacher_id`),
  KEY `fk_teacher_class_section_course1_idx` (`course_id`),
  KEY `fk_teacher_grade_section_grade_section1_idx` (`grade_section_id`),
  CONSTRAINT `fk_teacher_class_section_course1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_teacher_class_section_teacher1` FOREIGN KEY (`teacher_teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_teacher_grade_section_grade_section1` FOREIGN KEY (`grade_section_id`) REFERENCES `grade_section` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_grade_section`
--

LOCK TABLES `teacher_grade_section` WRITE;
/*!40000 ALTER TABLE `teacher_grade_section` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher_grade_section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `password_strategy` varchar(50) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `requires_new_password` tinyint(1) DEFAULT NULL,
  `login_attempts` int(11) DEFAULT NULL,
  `login_time` int(11) DEFAULT NULL,
  `login_ip` varchar(45) DEFAULT NULL,
  `activation_key` varchar(128) DEFAULT NULL,
  `validation_key` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `reset_token` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','fe01ce2a7fbac8fafaed7c982a04e229','webmaster@example.com','','2014-06-01 04:18:23','2014-08-19 08:17:49',1,1,'ahash','1d905200f3b07f5f632cd315acfc68fd5a9bab7e',NULL,NULL,29,'::1',NULL,'ce197d8fb2234d2818104e460f68c0e3',NULL,NULL,'40e9aaad8997df9ca519dfd4286595a03cdc128e'),(2,'demo','fe01ce2a7fbac8fafaed7c982a04e229','demo@example.com','099f825543f7850cc038b90aaff39fac','2014-06-01 04:18:23','2014-08-19 05:32:40',0,1,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'mushahidh','70ca3372dcc56a677b18172a1fb3e1c7043ceb52','mushahidh@yahoo.com','','2014-07-21 06:13:08','0000-00-00 00:00:00',0,1,'ahash','1d905200f3b07f5f632cd315acfc68fd5a9bab7e',NULL,NULL,6,'::1',NULL,'2e7e6f32fc5b9ecf843b6f87a3a3d619','2014-07-21 16:13:08','2014-07-22 14:11:24','40e9aaad8997df9ca519dfd4286595a03cdc128e'),(4,'mushahidh224','c36ca09b3a210780263446a3c3ec6382','mushahidh224@yahoo.com','105bbdaa0db3fe38379fd2f285886d9c','2014-08-18 11:33:07','0000-00-00 00:00:00',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'mushahid','4c9bfb54e51012dc202f769c5d89ecfb','mushahidh224@kkk.com','3e17c2d864e94f60012d89014d88d8d3','2014-08-18 12:36:15','2014-08-19 05:42:56',1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-19 16:20:03
