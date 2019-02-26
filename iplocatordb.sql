-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: iplocatordb
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `accesslog`
--

DROP TABLE IF EXISTS `accesslog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accesslog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accesslog`
--

LOCK TABLES `accesslog` WRITE;
/*!40000 ALTER TABLE `accesslog` DISABLE KEYS */;
INSERT INTO `accesslog` VALUES (1,'222.221.244.138 - - [27/Mar/2010:14:20:04 -0400] \"GET /CXg?FBXWY HTTP/1.1\" 301 - \"http://user.qzone.qq.com/420785012\" \"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; icafe8; .NET CLR 2.0.50727)\"'),(2,'116.236.227.50 - - [27/Mar/2010:14:20:26 -0400] \"GET /Cc5?K71r0Q0N8 HTTP/1.1\" 200 - \"http://b.qzone.qq.com/cgi-bin/blognew/blog_output_data?uin=954919883&blogid=1268137245&styledm=ctc.qzonestyle.gtimg.cn&imgdm=ctc.qzs.qq.com&bdm=b.qzone.qq.com&mode=2&numperpage=15&blogseed=0.07604838346767906&property=GoRE&timestamp=1269713707\" \"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)\"'),(3,'123.125.66.27 - - [27/Mar/2010:14:21:20 -0400] \"GET /CZE?1P8M7J60P HTTP/1.1\" 301 - \"-\" \"Baiduspider+(+http://www.baidu.com/search/spider.htm)\"'),(4,'123.125.66.21 - - [27/Mar/2010:14:21:24 -0400] \"GET /CYU?xN0O0N HTTP/1.1\" 301 - \"-\" \"Baiduspider+(+http://www.baidu.com/search/spider.htm)\"'),(5,'58.248.98.185 - - [27/Mar/2010:14:22:36 -0400] \"GET /CXz?qqren009922ff HTTP/1.1\" 301 - \"http://xiaoyou.qq.com/index.php?mod=blog&act=showreadzone&u=c265e4bd629300c5081583337f87919ecce5b15ffd929132&blogid=1263713056&type=class&index=43&class_id=104600652\" \"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)\"'),(6,'92.83.167.207 - - [27/Mar/2010:14:23:18 -0400] \"GET /wp-content/uploads/2006/06/nacho_libre.jpg HTTP/1.1\" 404 321 \"http://www.topicgratuit.com/321777792-filme-bune-de-vazut-si-revazut\" \"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.2) Gecko/20100316 Firefox/3.6.2\"'),(7,'114.216.191.154 - - [27/Mar/2010:14:23:46 -0400] \"POST /CX4?T088TpRT HTTP/1.1\" 404 - \"http://b.qzone.qq.com/cgi-bin/blognew/blog_output_data?uin=529182847&blogid=1268134870&styledm=ctc.qzonestyle.gtimg.cn&imgdm=ctc.qzs.qq.com&bdm=b.qzone.qq.com&mode=0&numperpage=15&blogseed=0.6960546040189739&property=GoRE&timestamp=1269713930\" \"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)\"'),(8,'124.192.180.26 - - [27/Mar/2010:14:24:36 -0400] \"GET /CYU?L7J61r0O8 HTTP/1.1\" 200 - \"http://b.cnc.qzone.qq.com/cgi-bin/blognew/blog_output_data?uin=281591118&blogid=1267503975&styledm=qzonestyle.gtimg.cn&imgdm=qzs.qq.com&bdm=b.cnc.qzone.qq.com&mode=2&numperpage=15&blogseed=0.36444995742228037&property=GoRE&timestamp=1269713888\" \"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)\"'),(9,'123.125.66.54 - - [27/Mar/2010:14:24:58 -0400] \"GET /CYT?468071W4 HTTP/1.1\" 301 - \"-\" \"Baiduspider+(+http://www.baidu.com/search/spider.htm)\"'),(10,'124.115.0.169 - - [27/Mar/2010:14:25:51 -0400] \"GET /Cap?FL570GN6 HTTP/1.1\" 301 - \"-\" \"Sosospider+(+http://help.soso.com/webspider.htm)\"');
/*!40000 ALTER TABLE `accesslog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'222.221.244.138:Zimbabwe'),(2,'116.236.227.50:New York'),(3,'123.125.66.*:North Carolina'),(4,'58.248.98.185:Uk, unknown'),(5,'92.83.167.207:France'),(6,'124.*.*.*:Baden-Württemberg');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-25 23:34:48
