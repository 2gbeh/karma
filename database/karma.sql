-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: eaccount
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

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
-- Table structure for table `bank_cashes`
--

DROP TABLE IF EXISTS `bank_cashes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bank_cashes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bank_cashes_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank_cashes`
--

LOCK TABLES `bank_cashes` WRITE;
/*!40000 ALTER TABLE `bank_cashes` DISABLE KEYS */;
INSERT INTO `bank_cashes` VALUES (1,'Cash',NULL,'This is Cash of our company',NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(2,'DBBL','199457441','Dutch Bangla Bank Limited',NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(3,'HSBC','199454215',NULL,NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(4,'Prime Bank','199451454215',NULL,NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(5,'Agroni Bank','1994514264215',NULL,NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(6,'Jomuna Bank','19945454154215',NULL,NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL);
/*!40000 ALTER TABLE `bank_cashes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branches`
--

DROP TABLE IF EXISTS `branches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `branches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `branches_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branches`
--

LOCK TABLES `branches` WRITE;
/*!40000 ALTER TABLE `branches` DISABLE KEYS */;
INSERT INTO `branches` VALUES (1,'Head Office','Uttara House Buildings, Dhaka Bangladesh','',NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(2,'Rajshahi Branch','Padma Graden','',NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(3,'Sirajgonj Branch','S.S Road','',NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(4,'Bogra Branch','Jolershari Tala','',NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL);
/*!40000 ALTER TABLE `branches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `income_expense_groups`
--

DROP TABLE IF EXISTS `income_expense_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `income_expense_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `income_expense_groups_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `income_expense_groups`
--

LOCK TABLES `income_expense_groups` WRITE;
/*!40000 ALTER TABLE `income_expense_groups` DISABLE KEYS */;
INSERT INTO `income_expense_groups` VALUES (1,'Bricks','101','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(2,'Stones','102','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(3,'Fittings','103','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(4,'Switch & Socket','104','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(5,'Cable','105','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(6,'Advance','106','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(7,'Tube-Well','107','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(8,'Steel Structure','108','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(9,'Fencing','109','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(10,'Shade','110','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(11,'Photocopy','111','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(12,'Sales','112','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(13,'Donation','113','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(14,'Income','114','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(15,'Commission','115','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(16,'Fund','116','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(17,'Salary','117','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(18,'Security','118','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(19,'Loan','119','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(20,'Payable','120','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(21,'Gilbert','121','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(22,'Joshua','122','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(23,'Alberto','123','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(24,'Accumulated Depreciation','124','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(25,'Share Money','125','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(26,'Approval','126','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(27,'License & Registration','127','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(28,'Connection','128','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(29,'Testing','129','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(30,'Rent','130','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(31,'Fuel','131','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(32,'Medicine','132','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(33,'Photography','133','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(34,'Fair','134','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(35,'Plan fees','135','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(36,'Bank Charge','136','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(37,'Expenses','137','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(38,'Interest','138','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(39,'Air Condition','139','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(40,'Office Equipment','140','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(41,'Receive','141','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(42,'Dividend','142','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(43,'Acceptance','143','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL);
/*!40000 ALTER TABLE `income_expense_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `income_expense_heads`
--

DROP TABLE IF EXISTS `income_expense_heads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `income_expense_heads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income_expense_type_id` int(10) unsigned DEFAULT NULL,
  `income_expense_group_id` int(10) unsigned DEFAULT NULL,
  `type` tinyint(4) NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `income_expense_heads_name_unique` (`name`),
  KEY `income_expense_heads_income_expense_type_id_foreign` (`income_expense_type_id`),
  KEY `income_expense_heads_income_expense_group_id_foreign` (`income_expense_group_id`),
  CONSTRAINT `income_expense_heads_income_expense_group_id_foreign` FOREIGN KEY (`income_expense_group_id`) REFERENCES `income_expense_groups` (`id`),
  CONSTRAINT `income_expense_heads_income_expense_type_id_foreign` FOREIGN KEY (`income_expense_type_id`) REFERENCES `income_expense_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `income_expense_heads`
--

LOCK TABLES `income_expense_heads` WRITE;
/*!40000 ALTER TABLE `income_expense_heads` DISABLE KEYS */;
INSERT INTO `income_expense_heads` VALUES (1,'	1st Class Brick (Hand Made)','Pcs',2,1,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(2,'3/4\" Crushed Stone','Pcs',2,2,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(3,'G I Fittings',NULL,2,3,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(4,'Bathroom Fittings',NULL,2,3,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(5,'Switch & Socket','Pcs',2,4,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(6,'Cable',NULL,2,5,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(7,'Advance E-Accounts System',NULL,3,6,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(8,'Advance Salary(Al-Mahmud)',NULL,3,6,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(9,'Advance (Al-Mahmud)',NULL,3,6,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(10,'Stone Chips Making)',NULL,4,2,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(11,'Deep Tube-Well Work',NULL,4,7,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(12,'Steel Structure Work',NULL,4,8,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(13,'Labour Shade Making',NULL,4,10,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(14,'Fencing Brick Work',NULL,4,9,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(15,'Safety Shade',NULL,4,10,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(16,'Receive from Flat Sales ( Sherlock Anthony )',NULL,5,12,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(17,'Receive from Flat Sales (Ruby Anthony)',NULL,5,12,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(18,'Receive from Flat Sales ( Mario )',NULL,5,12,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(19,'Donation',NULL,6,13,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(20,'Interest Income',NULL,6,14,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(21,'Garbage Sales',NULL,6,12,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(22,'Sales Commission (Income)',NULL,6,12,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(23,'Employee Incentive Fund',NULL,7,16,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(24,'Salary Payable',NULL,7,17,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(25,'Security Deposit (Safety Money)',NULL,7,18,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(26,'Temporary Loan from HKT Estate ltd.',NULL,7,19,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(27,'TDS Payable On S S Steel (Pvt.) Ltd.',NULL,7,20,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(28,'Gilbert',NULL,8,21,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(29,'Joshua',NULL,8,22,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(30,'Alberto',NULL,8,23,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(31,'ABC Co. Ltd.',NULL,9,23,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(32,'Loan From Ricardo',NULL,10,19,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(33,'Accumulated Depreciation',NULL,11,24,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(34,'Share Money Deposit ( Alberto )',NULL,13,25,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(35,'Share Money Deposit ( Shane )',NULL,13,25,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(36,'Govt Approval (Land Use permission)',NULL,14,26,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(37,'License & Registration',NULL,14,27,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(38,'Power Acceptance',NULL,14,43,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(39,'Gas Line Connection',NULL,14,28,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(40,'WASA(Water) Connection',NULL,14,28,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(41,'Electric Line Connection',NULL,14,28,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(42,'Cylinder Test',NULL,15,29,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(43,'Roller Rent',NULL,15,30,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(44,'Fuel Cost',NULL,15,31,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(45,'Medicine',NULL,15,32,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(46,'Photography',NULL,16,33,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(47,'Commission',NULL,16,15,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(48,'Project Fair',NULL,16,34,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(49,'Plan fees',NULL,16,35,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(50,'Bank Charge',NULL,17,36,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(51,'Interest Expenses',NULL,17,37,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(52,'Air Condition',NULL,19,39,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(53,'Office Equipment',NULL,19,40,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(54,'Photocopy Machine',NULL,19,40,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(55,'Receive from Miki Management',NULL,20,41,0,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(56,'Preliminary Expense',NULL,21,37,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(57,'Dividend Paid',NULL,22,42,1,'E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL);
/*!40000 ALTER TABLE `income_expense_heads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `income_expense_types`
--

DROP TABLE IF EXISTS `income_expense_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `income_expense_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` bigint(20) NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `income_expense_types_name_unique` (`name`),
  UNIQUE KEY `income_expense_types_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `income_expense_types`
--

LOCK TABLES `income_expense_types` WRITE;
/*!40000 ALTER TABLE `income_expense_types` DISABLE KEYS */;
INSERT INTO `income_expense_types` VALUES (1,'Inventories',101,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(2,'Direct Material',102,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(3,'Advance, Deposit & Receivables',103,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(4,'Direct Labour',104,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(5,'Revenue',105,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(6,'Indirect Income',106,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(7,'Account Payable',107,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(8,'Paid Up Capital',108,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(9,'Long Term Loan',109,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(10,'Short Term Loan',110,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(11,'Other Payable',111,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(12,'Advance Against Sales',112,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(13,'Share Money Deposit',113,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(14,'Other Direct Expenses',114,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(15,'Other Expense',115,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(16,'Administrative Expense',116,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(17,'Financial Expense',117,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(18,'Provision & Tax Paid',118,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(19,'Property, Plant & Equipment',119,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(20,'Advance Receive from Investor',120,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(21,'Preliminary Expense',121,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(22,'Dividend',122,'E-Accounts system',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL);
/*!40000 ALTER TABLE `income_expense_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'true mins application default language',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `create_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `languages_name_unique` (`name`),
  UNIQUE KEY `languages_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'bangla','bn','Bangladesh',0,'2022-10-09 16:24:04','2022-10-09 16:24:04','superadmin@eaccount.xyz',NULL,NULL,NULL);
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2013_11_11_000000_create_role_manages_table',1),(2,'2014_10_12_000000_create_users_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_03_17_115307_create_profiles_table',1),(5,'2019_03_27_160236_create_settings_table',1),(6,'2019_11_21_044659_create_branches_table',1),(7,'2019_11_22_063449_create_income_expense_types_table',1),(8,'2019_11_22_102644_create_income_expense_heads_table',1),(9,'2019_11_23_182134_create_bank_cashes_table',1),(10,'2019_11_24_062835_create_transactions_table',1),(11,'2019_12_10_121535_transaction_income_expense_head_ids_view',1),(12,'2019_12_11_001831_transaction_bank_cash_view',1),(13,'2019_12_11_151917_transaction_branch_view',1),(14,'2019_12_14_000001_create_personal_access_tokens_table',1),(15,'2019_12_22_123713_create_income_expense_groups_table',1),(16,'2022_06_26_231215_change_relation_on_all_table',1),(17,'2022_09_17_112640_rename_code_on_income_expense_group_table',1),(18,'2022_09_24_234721_create_languages_table',1),(19,'2022_09_24_235541_add_language_id_on_users_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NID` bigint(20) unsigned DEFAULT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_user_id_foreign` (`user_id`),
  CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,1,'S.M','Abid',1,'Software Engineer','+8801738578683',199412478654477,'PS: Raygonj, District: Sirajgonj','Dhaka,Bangladesh','upload/avatar/avatar.png','B.Sc. in Computer Science & Engineering','','2022-10-09 16:23:08','2022-10-09 16:23:08'),(2,2,'Sumon','Dada',1,'Software Engineer','+8801738578683',199412478654477,'Nilkhet','Dhaka,Bangladesh','upload/avatar/avatar.png','B.Sc. in Computer Science & Engineering','','2022-10-09 16:23:08','2022-10-09 16:23:08'),(3,3,'Md','Abdullah',1,'Software Engineer','+8801738578683',199412478654477,'Uttara dhaka','Dhaka,Bangladesh','upload/avatar/avatar.png','B.Sc. in Computer Science & Engineering','','2022-10-09 16:23:08','2022-10-09 16:23:08'),(4,4,'Md','Abdullah',1,'Software Engineer','+8801738578683',199412478654477,'Uttara dhaka','Dhaka,Bangladesh','upload/avatar/avatar.png','B.Sc. in Computer Science & Engineering','','2022-10-09 16:23:08','2022-10-09 16:23:08');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_manages`
--

DROP TABLE IF EXISTS `role_manages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_manages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role_manages_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_manages`
--

LOCK TABLES `role_manages` WRITE;
/*!40000 ALTER TABLE `role_manages` DISABLE KEYS */;
INSERT INTO `role_manages` VALUES (1,'Super Admin','{\"User\":[\"User \",1,1,1,1,1,1,1,1,1],\"RoleManager\":[\"Role Manager\",1,1,1,1,1,1,1,1,1],\"Settings\":[\"Settings\",1,1,1,1,1,1,1,1,1],\"Branch\":[\"Branch\",1,1,1,1,1,1,1,1,1],\"LedgerType\":[\"Ledger Type\",1,1,1,1,1,1,1,1,1],\"LedgerGroup\":[\"Ledger Group\",1,1,1,1,1,1,1,1,1],\"LedgerName\":[\"Ledger Name\",1,1,1,1,1,1,1,1,1],\"BankCash\":[\"Bank Cash\",1,1,1,1,1,1,1,1,1],\"InitialIncomeExpenseHeadBalance\":[\"Initial Income Expense Head Balance\",1,1,1,1,1,1,1,1,1],\"InitialBankCashBalance\":[\"Initial Bank Cash Balance\",1,1,1,1,1,1,1,1,1],\"DrVoucher\":[\"Dr Voucher\",1,1,1,1,1,1,1,1,1],\"CrVoucher\":[\"Cr Voucher\",1,1,1,1,1,1,1,1,1],\"JnlVoucher\":[\"Jnl Voucher\",1,1,1,1,1,1,1,1,1],\"ContraVoucher\":[\"Contra Voucher\",1,1,1,1,1,1,1,1,1],\"Ledger\":[\"Ledger\",1,1,1,1,1,1,1,1,1],\"TrialBalance\":[\"Trial Balance\",1,1,1,1,1,1,1,1,1],\"CostOfRevenue\":[\"Cost Of Revenue\",1,1,1,1,1,1,1,1,1],\"ProfitOrLossAccount\":[\"Profit Or Loss Account\",1,1,1,1,1,1,1,1,1],\"RetainedEarning\":[\"Retained Earning\",1,1,1,1,1,1,1,1,1],\"FixedAssetsSchedule\":[\"Fixed Assets Schedule\",1,1,1,1,1,1,1,1,1],\"StatementOfFinancialPosition\":[\"Statement Of Financial Position\",1,1,1,1,1,1,1,1,1],\"CashFlow\":[\"Cash Flow\",1,1,1,1,1,1,1,1,1],\"ReceiveAndPayment\":[\"Receive And Payment\",1,1,1,1,1,1,1,1,1],\"Notes\":[\"Notes\",1,1,1,1,1,1,1,1,1],\"GeneralBranch\":[\"General Branch Report\",1,1,1,1,1,1,1,1,1],\"GeneralLedger\":[\"General Ledger Report\",1,1,1,1,1,1,1,1,1],\"GeneralBankCash\":[\"General Bank Cash Report\",1,1,1,1,1,1,1,1,1],\"GeneralVoucher\":[\"General Voucher Report\",1,1,1,1,1,1,1,1,1]}','superadmin@gmail.com',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(2,'Admin','{\"User\":[\"User \",1,1,0,0,0,0,0,0,0],\"RoleManager\":[\"Role Manager\",1,1,0,0,0,0,0,0,0],\"Settings\":[\"Settings\",1,1,1,1,1,1,1,1,1],\"Branch\":[\"Branch\",1,1,1,1,1,1,1,1,1],\"LedgerType\":[\"Ledger Type\",0,0,0,0,0,0,0,0,0],\"LedgerGroup\":[\"Ledger Group\",1,1,1,1,1,1,1,1,1],\"LedgerName\":[\"Ledger Name\",1,1,1,1,1,1,1,1,1],\"BankCash\":[\"Bank Cash\",1,1,1,1,1,1,1,1,1],\"InitialIncomeExpenseHeadBalance\":[\"Initial Income Expense Head Balance\",0,0,0,0,0,0,0,0,0],\"InitialBankCashBalance\":[\"Initial Bank Cash Balance\",0,0,0,0,0,0,0,0,0],\"DrVoucher\":[\"Dr Voucher\",1,1,1,1,1,1,1,1,1],\"CrVoucher\":[\"Cr Voucher\",1,1,1,1,1,1,1,1,1],\"JnlVoucher\":[\"Jnl Voucher\",1,1,1,1,1,1,1,1,1],\"ContraVoucher\":[\"Contra Voucher\",1,1,1,1,1,1,1,1,1],\"Ledger\":[\"Ledger\",1,1,1,1,1,1,1,1,1],\"TrialBalance\":[\"Trial Balance\",1,1,1,1,1,1,1,1,1],\"CostOfRevenue\":[\"Cost Of Revenue\",1,1,1,1,1,1,1,1,1],\"ProfitOrLossAccount\":[\"Profit Or Loss Account\",1,1,1,1,1,1,1,1,1],\"RetainedEarning\":[\"Retained Earning\",1,1,1,1,1,1,1,1,1],\"FixedAssetsSchedule\":[\"Fixed Assets Schedule\",1,1,1,1,1,1,1,1,1],\"StatementOfFinancialPosition\":[\"Statement Of Financial Position\",1,1,1,1,1,1,1,1,1],\"CashFlow\":[\"Cash Flow\",1,1,1,1,1,1,1,1,1],\"ReceiveAndPayment\":[\"Receive And Payment\",1,1,1,1,1,1,1,1,1],\"Notes\":[\"Notes\",1,1,1,1,1,1,1,1,1],\"GeneralBranch\":[\"General Branch Report\",1,1,1,1,1,1,1,1,1],\"GeneralLedger\":[\"General Ledger Report\",1,1,1,1,1,1,1,1,1],\"GeneralBankCash\":[\"General Bank Cash Report\",1,1,1,1,1,1,1,1,1],\"GeneralVoucher\":[\"General Voucher Report\",1,1,1,1,1,1,1,1,1]}','superadmin@gmail.com',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(3,'Voucher manager','{\"User\":[\"User \",0,0,0,0,0,0,0,0,0],\"RoleManager\":[\"Role Manager\",0,0,0,0,0,0,0,0,0],\"Settings\":[\"Settings\",0,0,0,0,0,0,0,0,0],\"Branch\":[\"Branch\",0,0,0,0,0,0,0,0,0],\"LedgerType\":[\"Ledger Type\",0,0,0,0,0,0,0,0,0],\"LedgerGroup\":[\"Ledger Group\",0,0,0,0,0,0,0,0,0],\"LedgerName\":[\"Ledger Name\",0,0,0,0,0,0,0,0,0],\"BankCash\":[\"Bank Cash\",0,0,0,0,0,0,0,0,0],\"InitialIncomeExpenseHeadBalance\":[\"Initial Income Expense Head Balance\",0,0,0,0,0,0,0,0,0],\"InitialBankCashBalance\":[\"Initial Bank Cash Balance\",0,0,0,0,0,0,0,0,0],\"DrVoucher\":[\"Dr Voucher\",1,1,1,1,1,1,1,1,1],\"CrVoucher\":[\"Cr Voucher\",1,1,1,1,1,1,1,1,1],\"JnlVoucher\":[\"Jnl Voucher\",1,1,1,1,1,1,1,1,1],\"ContraVoucher\":[\"Contra Voucher\",1,1,1,1,1,1,1,1,1],\"Ledger\":[\"Ledger\",0,0,0,0,0,0,0,0,0],\"TrialBalance\":[\"Trial Balance\",0,0,0,0,0,0,0,0,0],\"CostOfRevenue\":[\"Cost Of Revenue\",0,0,0,0,0,0,0,0,0],\"ProfitOrLossAccount\":[\"Profit Or Loss Account\",0,0,0,0,0,0,0,0,0],\"RetainedEarning\":[\"Retained Earning\",0,0,0,0,0,0,0,0,0],\"FixedAssetsSchedule\":[\"Fixed Assets Schedule\",0,0,0,0,0,0,0,0,0],\"StatementOfFinancialPosition\":[\"Statement Of Financial Position\",0,0,0,0,0,0,0,0,0],\"CashFlow\":[\"Cash Flow\",0,0,0,0,0,0,0,0,0],\"ReceiveAndPayment\":[\"Receive And Payment\",0,0,0,0,0,0,0,0,0],\"Notes\":[\"Notes\",0,0,0,0,0,0,0,0,0],\"GeneralBranch\":[\"General Branch Report\",0,0,0,0,0,0,0,0,0],\"GeneralLedger\":[\"General Ledger Report\",0,0,0,0,0,0,0,0,0],\"GeneralBankCash\":[\"General Bank Cash Report\",0,0,0,0,0,0,0,0,0],\"GeneralVoucher\":[\"General Voucher Report\",0,0,0,0,0,0,0,0,0]}','superadmin@gmail.com',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(4,'Project Manager','{\"User\":[\"User \",0,0,0,0,0,0,0,0,0],\"RoleManager\":[\"Role Manager\",0,0,0,0,0,0,0,0,0],\"Settings\":[\"Settings\",0,0,0,0,0,0,0,0,0],\"Branch\":[\"Branch\",1,1,1,1,1,1,1,1,1],\"LedgerType\":[\"Ledger Type\",0,0,0,0,0,0,0,0,0],\"LedgerGroup\":[\"Ledger Group\",0,0,0,0,0,0,0,0,0],\"LedgerName\":[\"Ledger Name\",0,0,0,0,0,0,0,0,0],\"BankCash\":[\"Bank Cash\",0,0,0,0,0,0,0,0,0],\"InitialIncomeExpenseHeadBalance\":[\"Initial Income Expense Head Balance\",0,0,0,0,0,0,0,0,0],\"InitialBankCashBalance\":[\"Initial Bank Cash Balance\",0,0,0,0,0,0,0,0,0],\"DrVoucher\":[\"Dr Voucher\",0,0,0,0,0,0,0,0,0],\"CrVoucher\":[\"Cr Voucher\",0,0,0,0,0,0,0,0,0],\"JnlVoucher\":[\"Jnl Voucher\",0,0,0,0,0,0,0,0,0],\"ContraVoucher\":[\"Contra Voucher\",0,0,0,0,0,0,0,0,0],\"Ledger\":[\"Ledger\",0,0,0,0,0,0,0,0,0],\"TrialBalance\":[\"Trial Balance\",0,0,0,0,0,0,0,0,0],\"CostOfRevenue\":[\"Cost Of Revenue\",0,0,0,0,0,0,0,0,0],\"ProfitOrLossAccount\":[\"Profit Or Loss Account\",0,0,0,0,0,0,0,0,0],\"RetainedEarning\":[\"Retained Earning\",0,0,0,0,0,0,0,0,0],\"FixedAssetsSchedule\":[\"Fixed Assets Schedule\",0,0,0,0,0,0,0,0,0],\"StatementOfFinancialPosition\":[\"Statement Of Financial Position\",0,0,0,0,0,0,0,0,0],\"CashFlow\":[\"Cash Flow\",0,0,0,0,0,0,0,0,0],\"ReceiveAndPayment\":[\"Receive And Payment\",0,0,0,0,0,0,0,0,0],\"Notes\":[\"Notes\",0,0,0,0,0,0,0,0,0],\"GeneralBranch\":[\"General Branch Report\",0,0,0,0,0,0,0,0,0],\"GeneralLedger\":[\"General Ledger Report\",0,0,0,0,0,0,0,0,0],\"GeneralBankCash\":[\"General Bank Cash Report\",0,0,0,0,0,0,0,0,0],\"GeneralVoucher\":[\"General Voucher Report\",0,0,0,0,0,0,0,0,0]}','superadmin@gmail.com',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL);
/*!40000 ALTER TABLE `role_manages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `settings_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'General Settings','{\"company_name\":\"E-Accounts\",\"contract_person\":\"+8801738578683\",\"email\":\"mahmud2074office@gmail.com\",\"phone\":\"+8801521497833\",\"address_1\":\"Wakil Tower [Level 6] Ta 131 Culsan-Badda Link Road Gulsan 1 Dhaka 1212 Bangladesh\",\"address_2\":null,\"city\":\"Dhaka\",\"state\":\"Gulsan 1\",\"zip_code\":\"1212\",\"company_logo\":\"upload\\/company-logo\\/e.png\"}','2022-10-09 16:23:08','2022-10-09 16:23:08'),(2,'System Settings','{\"date_format\":\"M d, Y\",\"timezone\":\"Asia\\/Dhaka\",\"currency_code\":\"BDT\",\"currency_symbol\":\"\\u09f3\",\"is_code\":\"code\",\"is_rtl\":\"No\",\"currency_position\":\"Suffix\",\"fixed_asset_schedule_starting_date\":\"2000-01-01\"}','2022-10-09 16:23:08','2022-10-09 16:23:08');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `transaction_bank_cash_view`
--

DROP TABLE IF EXISTS `transaction_bank_cash_view`;
/*!50001 DROP VIEW IF EXISTS `transaction_bank_cash_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `transaction_bank_cash_view` (
  `bank_cash_id` tinyint NOT NULL,
  `name` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `transaction_branch_view`
--

DROP TABLE IF EXISTS `transaction_branch_view`;
/*!50001 DROP VIEW IF EXISTS `transaction_branch_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `transaction_branch_view` (
  `branch_id` tinyint NOT NULL,
  `name` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `transaction_income_expense_head_ids_view`
--

DROP TABLE IF EXISTS `transaction_income_expense_head_ids_view`;
/*!50001 DROP VIEW IF EXISTS `transaction_income_expense_head_ids_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `transaction_income_expense_head_ids_view` (
  `income_expense_head_id` tinyint NOT NULL,
  `income_expense_head_name` tinyint NOT NULL,
  `type` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `voucher_no` bigint(20) unsigned NOT NULL,
  `branch_id` int(10) unsigned DEFAULT NULL,
  `cheque_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income_expense_head_id` int(10) unsigned DEFAULT NULL,
  `bank_cash_id` int(10) unsigned DEFAULT NULL,
  `voucher_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucher_date` date NOT NULL,
  `dr` bigint(20) DEFAULT NULL,
  `cr` bigint(20) DEFAULT NULL,
  `particulars` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_branch_id_foreign` (`branch_id`),
  KEY `transactions_income_expense_head_id_foreign` (`income_expense_head_id`),
  KEY `transactions_bank_cash_id_foreign` (`bank_cash_id`),
  CONSTRAINT `transactions_bank_cash_id_foreign` FOREIGN KEY (`bank_cash_id`) REFERENCES `bank_cashes` (`id`),
  CONSTRAINT `transactions_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`),
  CONSTRAINT `transactions_income_expense_head_id_foreign` FOREIGN KEY (`income_expense_head_id`) REFERENCES `income_expense_heads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,1,1,NULL,1,1,'DV','2019-11-25',200,NULL,'Dr by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(2,2,2,'112541',2,2,'DV','2019-11-26',500,NULL,'Dr by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(3,3,1,'14521',3,3,'DV','2019-11-27',500,NULL,'Dr by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(4,3,1,'14521',4,3,'DV','2019-11-27',500,NULL,'Dr by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(5,1,1,NULL,8,1,'CV','2019-11-25',NULL,100000,'CR by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(6,2,2,'112541',15,2,'CV','2019-11-26',NULL,50000,'CR by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(7,3,2,'14521',15,3,'CV','2019-11-27',NULL,15000,'CR by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(8,3,2,NULL,16,3,'CV','2019-11-27',NULL,60000,'Cr by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(9,1,1,NULL,1,NULL,'JV','2019-11-25',200,NULL,'Journal Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(10,1,1,NULL,2,NULL,'JV','2019-11-25',300,NULL,'Journal Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(11,1,1,NULL,20,NULL,'JV','2019-11-25',NULL,100,'Journal Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(12,1,1,NULL,21,NULL,'JV','2019-11-25',NULL,400,'Journal Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(13,2,1,NULL,3,NULL,'JV','2019-11-25',1000,NULL,'Journal Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(14,2,1,NULL,17,NULL,'JV','2019-11-25',NULL,1000,'Journal Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(15,3,1,NULL,2,NULL,'JV','2019-11-25',1000,NULL,'Journal Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(16,3,1,NULL,3,NULL,'JV','2019-11-25',1000,NULL,'Journal Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(17,3,1,NULL,17,NULL,'JV','2019-11-25',NULL,2000,'Journal Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(18,4,1,NULL,7,NULL,'JV','2019-11-25',4000,NULL,'Journal Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(19,4,1,NULL,27,NULL,'JV','2019-11-25',NULL,3000,'Journal Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(20,4,1,NULL,31,NULL,'JV','2019-11-25',NULL,1000,'Journal Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(21,1,1,NULL,NULL,1,'Contra','2019-11-25',100,NULL,'Contra Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(22,1,1,'124-256-365',NULL,2,'Contra','2019-11-25',NULL,100,'Contra Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(23,2,2,'124-256-361',NULL,2,'Contra','2019-11-30',40000,NULL,'Contra Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(24,2,2,NULL,NULL,1,'Contra','2019-11-30',NULL,40000,'Contra Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(25,3,2,NULL,NULL,1,'Contra','2019-12-01',500,NULL,'Contra Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL),(26,3,2,'124-256-361',NULL,4,'Contra','2019-12-01',NULL,500,'Contra Voucher by System','E-Accounts System',NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08',NULL);
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_manage_id` int(10) unsigned DEFAULT 5,
  `language_id` bigint(20) unsigned DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_manage_id_foreign` (`role_manage_id`),
  KEY `users_language_id_foreign` (`language_id`),
  CONSTRAINT `users_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  CONSTRAINT `users_role_manage_id_foreign` FOREIGN KEY (`role_manage_id`) REFERENCES `role_manages` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Super Admin','superadmin@eaccount.xyz',1,NULL,NULL,'$2y$10$RuGaNqcnriWszabs7Bvyc.xAwufSFpLdTvget2E096jiWg7rbsxj6','System',NULL,NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08'),(2,'admin','admin@eaccount.xyz',2,NULL,NULL,'$2y$10$mzm8RWWf7wH2mtTZbVrFIuwBdgNqA.7osq6qtwzlraDtGAyaHNiFu','System',NULL,NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08'),(3,'admin','vouchermanage@eaccount.xyz',3,NULL,NULL,'$2y$10$RRThXYOKzP85uA8G2h2XjOi43OQ.1x8RIC6TdkhoS9cLO9ZXPRmKy','System',NULL,NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08'),(4,'admin','projectmanager@eaccount.xyz',4,NULL,NULL,'$2y$10$1MXoMMk1KNjginWAhy8IZ.rH3zdBXOa46jA345OdjXJIy8ZYNtqG2','System',NULL,NULL,NULL,NULL,'2022-10-09 16:23:08','2022-10-09 16:23:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'eaccount'
--

--
-- Final view structure for view `transaction_bank_cash_view`
--

/*!50001 DROP TABLE IF EXISTS `transaction_bank_cash_view`*/;
/*!50001 DROP VIEW IF EXISTS `transaction_bank_cash_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 SQL SECURITY DEFINER */
/*!50001 VIEW `transaction_bank_cash_view` AS select distinct `transactions`.`bank_cash_id` AS `bank_cash_id`,`bank_cashes`.`name` AS `name` from (`transactions` join `bank_cashes` on(`transactions`.`bank_cash_id` = `bank_cashes`.`id`)) where `transactions`.`bank_cash_id` is not null and `transactions`.`deleted_at` is null order by `transactions`.`bank_cash_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `transaction_branch_view`
--

/*!50001 DROP TABLE IF EXISTS `transaction_branch_view`*/;
/*!50001 DROP VIEW IF EXISTS `transaction_branch_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 SQL SECURITY DEFINER */
/*!50001 VIEW `transaction_branch_view` AS select distinct `transactions`.`branch_id` AS `branch_id`,`branches`.`name` AS `name` from (`transactions` join `branches` on(`transactions`.`branch_id` = `branches`.`id`)) where `transactions`.`branch_id` is not null and `transactions`.`deleted_at` is null order by `transactions`.`branch_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `transaction_income_expense_head_ids_view`
--

/*!50001 DROP TABLE IF EXISTS `transaction_income_expense_head_ids_view`*/;
/*!50001 DROP VIEW IF EXISTS `transaction_income_expense_head_ids_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 SQL SECURITY DEFINER */
/*!50001 VIEW `transaction_income_expense_head_ids_view` AS select distinct `transactions`.`income_expense_head_id` AS `income_expense_head_id`,`income_expense_heads`.`name` AS `income_expense_head_name`,`income_expense_heads`.`type` AS `type` from (`transactions` join `income_expense_heads` on(`transactions`.`income_expense_head_id` = `income_expense_heads`.`id`)) where `transactions`.`income_expense_head_id` is not null and `transactions`.`deleted_at` is null order by `transactions`.`income_expense_head_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-09 22:24:47
