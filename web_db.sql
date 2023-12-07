-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: web_db
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `bbs`
--

DROP TABLE IF EXISTS `bbs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bbs` (
  `bbsID` int NOT NULL,
  `bbsTitle` varchar(45) DEFAULT NULL,
  `userID` varchar(45) DEFAULT NULL,
  `bbsDate` datetime DEFAULT NULL,
  `bbsContent` varchar(2048) DEFAULT NULL,
  `bbsAvailable` int DEFAULT NULL,
  `bbsGame` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`bbsID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbs`
--

LOCK TABLES `bbs` WRITE;
/*!40000 ALTER TABLE `bbs` DISABLE KEYS */;
INSERT INTO `bbs` VALUES (1,'site rool','admin','2023-09-15 11:42:24','aaaaa',1,'all games'),(2,'site rool2','admin','2023-09-15 11:52:07','aaaa',1,'all games'),(3,'test','admin','2023-09-15 12:10:15','aa',1,'Lost Arc'),(4,'test2','admin','2023-09-15 12:27:04','ㅁ',1,'Lost Arc'),(5,'test3','admin','2023-09-15 12:45:48','ㅁㅁㅁ',1,'BATTLE GROUNDS'),(6,'test4','admin','2023-09-19 10:31:00','ㅁㅁㅁ',1,'Lost Arc'),(7,'hjk games사용자 분들 안녕하세요','admin','2023-09-19 10:33:23','ㅎㅇㅎㅇㅎㅇㅎ',1,'BATTLE GROUND'),(8,'hi!!!','host2','2023-09-19 11:28:26','hihihihih',1,'League of Legends'),(9,'hi!!!','host3','2023-09-19 11:28:49','adaadada',1,'FIFA ONLINE4'),(10,'hi!!!','host4','2023-09-22 10:49:46','hihihihihihhihihihihihihi!!!!!',1,'FIFA ONLINE4'),(11,'good game!!!','host4','2023-09-22 10:51:39','very exciting!!!!!',1,'League of Legends'),(12,'hi!!!','host1','2023-09-22 11:00:01','hi!!!!',1,'Lost Arc'),(13,'bye!!!!!','host1','2023-09-22 11:00:16','adadadd',1,'Lost Arc'),(14,'lostarc 게임 정보','admin2','2023-09-25 11:15:19','~~~~~~~게임 정보~~~~~',1,'Lost Arc'),(15,'fifa -> fc온라인 게임명 변경','admin2','2023-09-25 11:33:49','fifa4가 fc온라인으로 이름이 변경되어 추후 사이트에 모든 fifa online4 게임명을 fc온라인으로 업데이트 하도록 하겠습니다.\r\n공지사항: https://fconline.nexon.com/news/notice/view?n4ArticleSN=4341',1,'FIFA ONLINE4');
/*!40000 ALTER TABLE `bbs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `board`
--

DROP TABLE IF EXISTS `board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `board` (
  `idx` int NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `content` varchar(45) DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `hit` int DEFAULT NULL,
  `writer` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `board`
--

LOCK TABLES `board` WRITE;
/*!40000 ALTER TABLE `board` DISABLE KEYS */;
INSERT INTO `board` VALUES (1,'공지사항입니다.','공지사항~~~~~~~~~~~~~~~~~~~~~','2023-08-24 00:00:00',0,'관리자'),(2,'안내','매너 있는 게시판 사용자가 되어주세요!!!','2023-08-29 11:04:46',0,'관리자'),(3,'삼성전자 주가 전망','요즘 삼성전자 주가 전망이 좋지 않습니다.','2023-08-30 13:30:45',0,'host1'),(4,'에코프로비엠 ','요즘 에코프로비엠 전망이 좋습니다.','2023-08-30 13:32:20',2,'host2'),(5,'','','2023-10-10 09:51:30',0,'');
/*!40000 ALTER TABLE `board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `member` (
  `idx` int NOT NULL AUTO_INCREMENT,
  `id` varchar(45) DEFAULT NULL,
  `pw` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `hp` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'admin','1234','관리자1','01012341234','jk99@naver.com'),(2,'admin2','qwer','관리자2','01012341234','aaa@naver.com'),(3,'admin3','qwer','관리자3','01011111222','adadaad@daum.net'),(4,'host1','qwer','host1','01012341234','aaaa@naver.com'),(5,'host2','qwer','host2','01012561256','aaaa2@naver.com'),(6,'host3','qwer','host3','01098769876','aaaa2@naver.com'),(7,'host4','qwer','host4','01011011010','hhhhh@naver.com'),(8,'host5','qwer','host5','01063464612','aaaa4@naver.com'),(10,'a','a','a','123123','asdasda');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `userID` varchar(45) NOT NULL,
  `userPassword` varchar(45) DEFAULT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `userHp` varchar(45) DEFAULT NULL,
  `userEmail` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('admin','1234','관리자','01001050202','admin@naver.com'),('admin2','1234','관리자','01020203232','joonki@nave.rcom'),('host1','qwer','hjk','01000001234','host01@naver.com'),('host2','qwer','chh','00000000000','adadadadadadadad'),('host3','qwer','pjh','01000000000','1234@daum.net'),('host4','qwer','sms','01089898989','asv@gamil.com');
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

-- Dump completed on 2023-12-07  9:57:05
