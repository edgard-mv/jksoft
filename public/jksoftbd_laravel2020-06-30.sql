-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: jksoftbd_laravel
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `abonos`
--

DROP TABLE IF EXISTS `abonos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `abonos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `credito_id` bigint unsigned NOT NULL,
  `cantidad` int NOT NULL,
  `fecha` date NOT NULL,
  `comentarios` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `abonos_credito_id_foreign` (`credito_id`),
  CONSTRAINT `abonos_credito_id_foreign` FOREIGN KEY (`credito_id`) REFERENCES `creditos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abonos`
--

LOCK TABLES `abonos` WRITE;
/*!40000 ALTER TABLE `abonos` DISABLE KEYS */;
INSERT INTO `abonos` VALUES (1,1,100,'2020-05-21','Pago 100 cordobas , resta 40',NULL,NULL,NULL),(2,2,1000,'2020-06-06','Pago 1000 cordobas , resta 530',NULL,NULL,NULL),(3,3,40,'2020-04-28','Pago 40 cordobas , resta 40',NULL,NULL,NULL),(4,4,200,'2020-01-10','Pago 200 cordobas , resta 200',NULL,NULL,NULL),(5,5,100,'2020-03-12','Pago 100 cordobas , resta 20',NULL,NULL,NULL),(6,6,100,'2020-05-21','Pago 100 cordobas , resta 60',NULL,NULL,NULL);
/*!40000 ALTER TABLE `abonos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contados`
--

DROP TABLE IF EXISTS `contados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contados` (
  `venta_id` bigint unsigned NOT NULL,
  `monto` decimal(13,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `contados_venta_id_foreign` (`venta_id`),
  CONSTRAINT `contados_venta_id_foreign` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contados`
--

LOCK TABLES `contados` WRITE;
/*!40000 ALTER TABLE `contados` DISABLE KEYS */;
INSERT INTO `contados` VALUES (1,120.00,NULL,NULL,NULL),(2,700.00,NULL,NULL,NULL),(3,14.00,NULL,NULL,NULL),(4,70.00,NULL,NULL,NULL),(5,20.00,NULL,NULL,NULL),(6,1230.00,NULL,NULL,NULL),(10,1120.00,NULL,NULL,NULL),(14,54.00,NULL,'2020-06-30 08:50:11','2020-06-30 08:50:11');
/*!40000 ALTER TABLE `contados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `creditos`
--

DROP TABLE IF EXISTS `creditos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `creditos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `venta_id` bigint unsigned NOT NULL,
  `cliente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monto` decimal(13,2) NOT NULL,
  `fecha_de_pago` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `creditos_venta_id_foreign` (`venta_id`),
  CONSTRAINT `creditos_venta_id_foreign` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `creditos`
--

LOCK TABLES `creditos` WRITE;
/*!40000 ALTER TABLE `creditos` DISABLE KEYS */;
INSERT INTO `creditos` VALUES (1,7,'Maria Jose',140.00,'2020-05-12',NULL,NULL,NULL),(2,8,'Bersal Rodriguez',1530.00,'2020-05-12',NULL,NULL,NULL),(3,9,'Juan Antonio Bermudez',80.00,'2020-05-12',NULL,NULL,NULL),(4,11,'Bersal Rodriguez',400.00,'2020-05-12',NULL,NULL,NULL),(5,12,'Mario Calero',120.00,'2020-05-12',NULL,NULL,NULL),(6,13,'Mario Calero',160.00,'2020-05-12',NULL,NULL,NULL);
/*!40000 ALTER TABLE `creditos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2019_08_19_000000_create_failed_jobs_table',1),(3,'2020_04_20_201232_create_productos_table',1),(4,'2020_04_20_201536_create_proveedores_table',1),(5,'2020_04_20_201654_create_proveedor_producto_table',1),(6,'2020_04_20_201705_create_trabajadores_table',1),(7,'2020_04_20_201753_create_pedidos_table',1),(8,'2020_04_20_201847_create_producto_pedido_table',1),(9,'2020_04_20_202009_create_ventas_table',1),(10,'2020_04_20_202010_create_producto_venta_table',1),(11,'2020_04_20_202130_create_contados_table',1),(12,'2020_04_20_202203_create_creditos_table',1),(13,'2020_04_20_202331_create_abonos_table',1),(14,'2020_04_20_202355_create_salarios_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `trabajador_id` bigint unsigned NOT NULL,
  `cantidad total` int NOT NULL,
  `monto_total` double(8,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pedidos_trabajador_id_foreign` (`trabajador_id`),
  CONSTRAINT `pedidos_trabajador_id_foreign` FOREIGN KEY (`trabajador_id`) REFERENCES `trabajadores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,1,120,12300.00,NULL,NULL,NULL),(2,1,600,1400.00,NULL,NULL,NULL),(3,1,100,1300.00,NULL,NULL,NULL),(4,2,40,1100.00,NULL,NULL,NULL),(5,2,10,600.00,NULL,NULL,NULL),(6,3,300,1500.00,NULL,NULL,NULL),(7,1,120,660.00,NULL,NULL,NULL),(8,3,78,1200.00,NULL,NULL,NULL),(9,1,25,355.00,NULL,NULL,NULL),(10,2,60,2000.00,NULL,NULL,NULL),(11,2,134,1250.00,NULL,NULL,NULL),(12,3,12,400.00,NULL,NULL,NULL),(13,3,13,500.00,NULL,NULL,NULL),(14,3,90,1267.00,NULL,NULL,NULL),(15,3,79,900.00,NULL,NULL,NULL),(16,2,34,763.00,NULL,NULL,NULL);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto_pedido`
--

DROP TABLE IF EXISTS `producto_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto_pedido` (
  `pedido_id` bigint unsigned NOT NULL,
  `producto_id` bigint unsigned NOT NULL,
  `cantidad_producto` int NOT NULL,
  `fecha` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `producto_pedido_pedido_id_foreign` (`pedido_id`),
  KEY `producto_pedido_producto_id_foreign` (`producto_id`),
  CONSTRAINT `producto_pedido_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `producto_pedido_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto_pedido`
--

LOCK TABLES `producto_pedido` WRITE;
/*!40000 ALTER TABLE `producto_pedido` DISABLE KEYS */;
INSERT INTO `producto_pedido` VALUES (1,1,120,'2020-05-12',NULL,NULL,NULL),(2,2,600,'2020-05-12',NULL,NULL,NULL),(3,70,100,'2020-05-12',NULL,NULL,NULL),(4,55,40,'2020-05-12',NULL,NULL,NULL),(5,10,10,'2020-05-12',NULL,NULL,NULL),(6,28,300,'2020-05-12',NULL,NULL,NULL),(7,47,120,'2020-05-12',NULL,NULL,NULL),(8,67,78,'2020-05-12',NULL,NULL,NULL),(9,68,25,'2020-05-12',NULL,NULL,NULL),(10,72,60,'2020-05-12',NULL,NULL,NULL),(11,76,134,'2020-05-12',NULL,NULL,NULL),(12,100,12,'2020-05-12',NULL,NULL,NULL),(13,115,13,'2020-05-12',NULL,NULL,NULL),(14,75,90,'2020-05-12',NULL,NULL,NULL),(15,89,79,'2020-05-12',NULL,NULL,NULL),(16,22,34,'2020-05-12',NULL,NULL,NULL);
/*!40000 ALTER TABLE `producto_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto_venta`
--

DROP TABLE IF EXISTS `producto_venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto_venta` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `venta_id` bigint unsigned NOT NULL,
  `producto_id` bigint unsigned NOT NULL,
  `cantidad_producto` int unsigned NOT NULL,
  `precio_actual` decimal(13,2) NOT NULL,
  `monto` decimal(13,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `producto_venta_venta_id_foreign` (`venta_id`),
  KEY `producto_venta_producto_id_foreign` (`producto_id`),
  CONSTRAINT `producto_venta_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `producto_venta_venta_id_foreign` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto_venta`
--

LOCK TABLES `producto_venta` WRITE;
/*!40000 ALTER TABLE `producto_venta` DISABLE KEYS */;
INSERT INTO `producto_venta` VALUES (1,1,4,97,88.00,421.00,NULL,NULL,NULL),(2,1,29,87,68.00,245.00,NULL,NULL,NULL),(3,1,83,95,84.00,179.00,NULL,NULL,NULL),(4,2,10,90,89.00,166.00,NULL,NULL,NULL),(5,2,84,34,100.00,365.00,NULL,NULL,NULL),(6,2,66,86,73.00,175.00,NULL,NULL,NULL),(7,3,9,39,64.00,223.00,NULL,NULL,NULL),(8,3,76,22,83.00,192.00,NULL,NULL,NULL),(9,3,5,81,91.00,443.00,NULL,NULL,NULL),(10,14,2,2,22.00,44.00,NULL,NULL,NULL),(11,14,54,1,10.00,10.00,NULL,NULL,NULL);
/*!40000 ALTER TABLE `producto_venta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int unsigned NOT NULL,
  `precio` decimal(13,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=282 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Jabón plus clean',12,19.00,NULL,'2020-06-29 06:00:00','2020-06-30 11:06:34'),(2,'Protex',8,22.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(3,'Palmolive',24,19.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(4,'DK12',12,22.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(5,'Doña blanca(jabon pequeño)',26,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(6,'Rinzo(grande)',10,21.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(7,'Rinzo(pequeño)',36,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(8,'Cloro nica',120,5.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(9,'Cloro Magia Blanca',180,7.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(10,'Suavitel',60,8.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(11,'Suavisimo',120,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(12,'Suavitel (Rojo)',24,8.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(13,'Suavitel (Verde)',12,8.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(14,'Azistin',36,8.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(15,'Terzo',24,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(16,'Pollo TIPTOP',26,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(17,'Pollo TIPTOP(Pechuga)',25,35.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(18,'Carne San Martin',30,76.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(19,'Menudo TIPTOP',1,15.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(20,'Terzo',24,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(21,'Azistin(Botella Morado)',7,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(22,'Azistin (Botella Verde)',5,25.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(23,'Cloro Botella',5,27.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(24,'cloro botella(Morado)',4,27.00,'2020-06-30 06:00:32','2020-06-29 06:00:00','2020-06-30 06:00:32'),(25,'Cloro botella(Verde)',5,27.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(26,'Pinesol',10,12.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(27,'Vanish',26,22.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(28,'Vanish(Polvo)',12,30.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(29,'Vanish(Botella)',5,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(30,'Jabon Marfil(Trasparente)',24,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(31,'Cerveza lata toña',100,22.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(32,'Cerveza Litro Toña',120,45.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(33,'Jabon Marfil(Verde)',12,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(34,'Jabon Marfil(Rosado)',10,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(35,'Jabon Marfil(Blanco)',9,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(36,'Jabon Marfil(con bicarbonato)',10,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(37,'Jabon bex(Blanco)',15,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(38,'Jabon bex (Transparente)',6,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(39,'Jabon bex(Ultra)',33,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(40,'Jabon bex(Azul)',7,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(41,'Jabon bex(Rosado)',10,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(42,'Jabon Maravilla(pequeño)',50,12.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(43,'Jabon Maravilla(Grande)',30,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(44,'Jabon Maravilla(Verde)',25,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(45,'Jabon Maravilla(Azul)',16,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(46,'Jabon Extra',35,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(47,'Jabon Extra(verde)',12,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(48,'Jabon Extra(Blanco)',30,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(49,'Jabon Extra(Rosado)',30,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(50,'Ultra clin',72,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(51,'Ultra clin (Grande)',14,40.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(52,'Espumil',60,25.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(53,'Espumil(Rosado)',50,25.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(54,'Xedex ',34,10.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(55,'Xedex(Grande)',14,36.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(56,'Escobas',12,64.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(57,'Lampaso',6,80.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(58,'Mecha de lampaso',18,48.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(59,'Mecha de lampaso XL',8,70.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(60,'Colgate Triple Accion',26,30.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(61,'Colgate Doble Accion',42,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(62,'Colgate(Pequeña)',24,16.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(63,'Oral B',25,25.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(64,'Cepillo de Dientes Clasico',72,15.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(65,'Cepillo de Dientes Premiun',24,17.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(66,'Cepillo de Dientes para niños',14,13.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(67,'Leche Medio litro',30,16.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(68,'Leche litro',20,32.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(69,'Leche Taza',15,11.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(70,'Chocolita',15,16.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(71,'Leche Fresa',8,16.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(72,'Coca Cola 12onza',48,8.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(73,'Coca Cola Medio litro',72,14.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(74,'Coca Cola Litro',48,24.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(75,'Coca Cola litro y medio',26,34.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(76,'Coca Cola Dos litros (Retornable)',36,35.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(77,'Coca Cola Tres litros',15,56.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(78,'Big Cola(Pequeña)',60,8.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(79,'Big Cola(Medio litro)',26,10.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(80,'Big Cola(Litro)',20,15.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(81,'Big Cola dos litros',12,28.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(82,'Big Cola 3 litros',10,45.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(83,'Pepsi medio litro',40,12.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(84,'Pepsi litro',14,20.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(85,'Pepsi dos litros',21,28.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(86,'Pepsi tres litros',10,60.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(87,'Pepsi tres litros sabor',15,55.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(88,'Jugo del valle',15,20.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(89,'jugo del valle 3 litros',5,50.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(90,'HIC',26,15.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(91,'HIC TE',10,17.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(92,'Jugo campestre',8,12.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(93,'Cola Shaler',15,22.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(94,'Cola Shaler tapon rojo',33,18.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(95,'Jugo de lata',33,14.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(96,'Acetominofeno',120,1.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(97,'Acetominofeno MK',60,2.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(98,'Tacsin',48,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(99,'Tacsin dia',44,9.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(100,'Tacsin noche',40,9.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(101,'Virogrip',24,3.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(102,'Pepsi medio litro',24,2.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(103,'Dolofin',43,2.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(104,'Andrew',100,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(105,'Alka selser',87,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(106,'Sukrol',80,3.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(107,'Omeprazol',50,2.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(108,'Raditidina',100,3.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(109,'Diclofenac',100,2.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(110,'Bioprin',56,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(111,'Delor',50,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(112,'Cure band',200,1.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(113,'Panandol ultra',100,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(114,'Tap-on',48,3.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(115,'Neuro fortan',57,4.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(116,'Paracetamol',30,3.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(117,'Dolofin',100,3.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(118,'Dolovitagia',50,5.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(119,'Loratadina',30,4.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(120,'Sukrol Mujer',30,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(121,'Colipap',30,3.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(122,'Higado sanil',24,4.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(123,'Panadol sinusitis',30,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(124,'Dorival',50,8.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(125,'Aspirina Forte',50,4.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(126,'enterpmeback',60,3.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(127,'supertiamina',50,3.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(128,'Uboprofeno',100,2.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(129,'Alumin',112,5.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(130,'Amoxicilina',100,2.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(131,'Panadol Extra',100,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(132,'Alive',36,5.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(133,'Panadol niño',100,4.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(134,'Losartan',50,4.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(135,'Furosemida',100,2.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(136,'Zepol (pequeño)',30,20.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(137,'Zepol Vaso',40,50.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(138,'Pan barra',144,1.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(139,'Pan pico',80,1.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(140,'Pico Tostado',50,1.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(141,'Margarita',60,1.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(142,'Polvoron negro',60,1.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(143,'Polvoron Blanco',40,2.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(144,' Pan Lengua',60,1.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(145,'Pan Bimbo talla M',10,38.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(146,'Pan Bimbo talla XG',7,66.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(147,'Pinguino',15,20.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(148,'Pinguno Chocolate',8,22.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(149,'Mr Brown',20,21.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(150,'Pan Tostado',10,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(151,'Principe',7,19.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(152,'Sponch',10,19.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(153,'Bimbolete',14,15.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(154,'Panquesito',12,19.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(155,'Panqueque',4,40.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(156,'Paleta payaso',30,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(157,'Panditas',6,25.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(158,'Polvoritas',6,18.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(159,'Chiqui',48,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(160,'Oreo',48,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(161,'Oreo Blanca',28,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(162,'Chiqui Rosada',28,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(163,'Can Can',32,4.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(164,'Can Can Rosa',28,4.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(165,'Can Can Chocolate',22,4.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(166,'Club Social',32,5.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(167,'Chocomax',28,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(168,'Ritz',60,5.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(169,'Ritz con queso',30,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(170,'Mantequilla',24,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(171,'Soda',24,5.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(172,'Chips Ahoy',24,14.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(173,'Mantequilla de barra ESKIMO ',20,40.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(174,'Cuaderno pequeño',20,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(175,'Cuaderno universitario',15,14.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(176,'Cuaderno universitario mediano',15,17.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(177,'Cuaderno universitario grande',15,32.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(178,'Block',15,20.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(179,'Libreta',10,24.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(180,'Cuaderno universitario 5 Materia',10,120.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(181,'Lapiz Bic',96,5.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(182,'Lapiz zebra',36,10.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(183,'Sticker',40,18.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(184,'Marcadores',40,18.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(185,'Resaltador',24,14.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(186,'Borrador',24,4.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(187,'Tajador metalico',30,5.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(188,'Tajador Plastico',20,4.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(189,'Corrector liquido',24,12.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(190,'Corrector seco',7,34.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(191,'Acuarela',4,12.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(192,'Pega grande',8,55.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(193,'Regla',30,10.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(194,'Pega pequeña',10,20.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(195,'Arroz empacado faizan ',72,16.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(196,'Arroz empacado doña maria ',16,15.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(197,'Arroz saco faizan ',1,15.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(198,'Arroz saco tio pelon ',1,13.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(199,'Arroz saco sin marca',1,12.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(200,'Frijol de saco ',1,15.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(201,'Frijoles blanditos ',14,18.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(202,'Frijoles blandito molido ',15,22.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(203,'Azucar saco ',1,12.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(204,'Azucar empacada ',74,15.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(205,'Aceite chorreado(cuarta) ',2,12.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(206,'Aceite chorreado(Medio) ',2,20.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(207,'Aceite chorreado(litro) ',2,40.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(208,'Aceite Mazola galon ',6,270.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(209,'Aceite Mazola medio galon ',5,135.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(210,'Papel Higienico Nevax ',120,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(211,'Papel Higienico Scot ',60,22.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(212,'Papel Higienico Scot Rindemax ',25,25.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(213,'Papel Higienico Encanto ',123,26.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(214,'Papel Higienico Rosal ',120,12.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(215,'Papel Higienico encanto (4 unidades) ',10,80.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(216,'Papel rosal (4 unidades) ',10,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(217,'Sopa Magui pequeña ',34,6.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(218,'Sopa Magui grande ',66,12.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(219,'Salsa de tomate Natura ',48,14.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(220,'Salsa de tomate Natura (Grande) ',10,36.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(221,'Guizante  ',7,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(222,'Elote La costeña ',9,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(223,'Espagueti Roma ',30,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(224,'Conchitas Roma ',17,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(225,'Espagueti Milano ',12,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(226,'Sardina pica pica ',16,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(227,'Sardina sin picar ',19,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(228,'Sardina Calvo ',13,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(229,'Atun gaiota Aceite ',14,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(230,'Atun gaiota Agua ',14,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(231,'Atun gaiota Veguetales ',14,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(232,'Salsa China ',10,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(233,'Salsa soya ',8,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(234,'Maseca',48,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(235,'Maseca Preparada',50,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(236,'Cafe presto churro ',1500,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(237,'cafe presto vaso pequeño ',8,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(238,'Cafe presto vaso grande ',5,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(239,'Cafe presto 50Ml ',15,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(240,'Cremora vaso ',15,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(241,'Cremora Ceda  ',100,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(242,'Maruchan bolsa ',100,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(243,'Maruchan Ramen ',50,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(244,'Maruchan Vaso ',120,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(245,'Bujia Philips ',30,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(246,'Margarina Numar ',100,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(247,'Margarina Numar media ',200,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(248,'Margarina Numar light ',48,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(249,'Pimienta negra ',33,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(250,'Pimienta de chapa',20,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(251,'Achote',40,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(252,'Salsa inglesa ',40,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(253,'Salsa inglesa vaso mediano (Lisano) ',10,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(254,'Salsa inglesa vaso grande (Lisano)',8,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(255,'Leche condensada ',25,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(256,'Leche condensada Grande ',10,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(257,'Jalea ',48,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(258,'Jalea mediana ',9,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(259,'Jalea Grande',10,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(260,'Marvoro ',24,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(261,'Pall Mall Verde ',48,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(262,'Pall Mall Verde XL ',48,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(263,'Pall Mall Azul ',48,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(264,'Pall Mall Azul XL ',28,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(265,'Casino Suave ',24,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(266,'Casino Rojo ',14,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(267,'Belmont suave ',26,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(268,'Belmont Rojo ',12,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(269,'Rolis ',48,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(270,'Mordern ',48,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(271,'Marvoro (Paquete) ',24,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(272,'Pall Mall Verde (Paquete)',48,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(273,'Pall Mall Verde XL (Paquete)',48,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(274,'Pall Mall Azul (Paquete)',48,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(275,'Pall Mall Azul XL (Paquete)',28,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(276,'Casino Suave (Paquete)',24,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(277,'Casino Rojo (Paquete)',14,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(278,'Belmont suave (Paquete)',26,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(279,'Belmont Rojo (Paquete)',12,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(280,'Rolis (Paquete)',48,44.00,NULL,'2020-06-29 06:00:00','2020-06-29 06:00:00'),(281,'Mordern (Paquete)',48,42.00,NULL,'2020-06-29 06:00:00','2020-06-30 10:43:30');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedor_producto`
--

DROP TABLE IF EXISTS `proveedor_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedor_producto` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `proveedor_id` bigint unsigned NOT NULL,
  `producto_id` bigint unsigned NOT NULL,
  `cantidad` int NOT NULL,
  `fecha` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proveedor_producto_proveedor_id_foreign` (`proveedor_id`),
  KEY `proveedor_producto_producto_id_foreign` (`producto_id`),
  CONSTRAINT `proveedor_producto_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `proveedor_producto_proveedor_id_foreign` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor_producto`
--

LOCK TABLES `proveedor_producto` WRITE;
/*!40000 ALTER TABLE `proveedor_producto` DISABLE KEYS */;
INSERT INTO `proveedor_producto` VALUES (1,1,76,120,'2020-05-12',NULL,NULL,NULL),(2,1,73,600,'2020-05-12',NULL,NULL,NULL),(3,2,1,100,'2020-05-12',NULL,NULL,NULL),(4,3,67,40,'2020-05-12',NULL,NULL,NULL),(5,3,68,10,'2020-05-12',NULL,NULL,NULL),(6,7,16,50,'2020-05-12',NULL,NULL,NULL),(7,7,17,30,'2020-05-12',NULL,NULL,NULL),(8,8,145,25,'2020-05-12',NULL,NULL,NULL),(9,8,146,60,'2020-05-12',NULL,NULL,NULL),(10,10,237,134,'2020-05-12',NULL,NULL,NULL),(11,10,238,12,'2020-05-12',NULL,NULL,NULL),(12,11,18,25,'2020-05-12',NULL,NULL,NULL),(13,12,200,100,'2020-05-12',NULL,NULL,NULL),(14,12,203,100,'2020-05-12',NULL,NULL,NULL),(15,15,31,60,'2020-05-12',NULL,NULL,NULL);
/*!40000 ALTER TABLE `proveedor_producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` VALUES (1,'Juan Ernezto Gracia Jarquin','Coca Cola',NULL,NULL,NULL),(2,'Jose Carlos Leiva Flores','Merconica',NULL,NULL,NULL),(3,'Jeffry Alexander Navarro','LALA',NULL,NULL,NULL),(4,'Faustino Jesus Roman','DINANT',NULL,NULL,NULL),(5,'Khistier Sandigo','Unilever',NULL,NULL,NULL),(6,'Magaly Acosta','Interamericana de mercadeo',NULL,NULL,NULL),(7,'Luis Diaz','Pollo Tip TOP',NULL,NULL,NULL),(8,'Angy Fabela','Bimbo',NULL,NULL,NULL),(9,'Josuè gudino Escobedo','Cafè Soluble S.A',NULL,NULL,NULL),(10,'Victor Moreno','Carnes San Martin',NULL,NULL,NULL),(11,'Esmeralda Navarro','Industrial Delmor',NULL,NULL,NULL),(12,'Oswaldo Reyes','ENABAS',NULL,NULL,NULL),(13,'Gabriel Valles','AGROSA',NULL,NULL,NULL),(14,'Israel Rosas','Distribuidora Mi Redentor',NULL,NULL,NULL),(15,'Wiliam Rivas','Compañia Cervecera de Nicaragua',NULL,NULL,NULL),(16,'Oscar Muños Agero','Bocadeli',NULL,NULL,NULL),(17,'Renata Austin Luna','Diana',NULL,NULL,NULL),(18,'Regina Mayorga Olivera','Distribuidora S.A',NULL,NULL,NULL),(19,'Milton Gracia Arias','Pepsi',NULL,NULL,NULL),(20,'Yamil Antonio Hernandez Cordoba','Big Cola',NULL,NULL,NULL),(21,'empresa','Probar','2020-06-30 07:03:24','2020-06-30 07:03:18','2020-06-30 07:03:24');
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salarios`
--

DROP TABLE IF EXISTS `salarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `salarios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `trabajador_id` bigint unsigned NOT NULL,
  `horas` int NOT NULL,
  `dias` int NOT NULL,
  `pago_por_hora` double(8,2) NOT NULL,
  `extra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `salarios_trabajador_id_foreign` (`trabajador_id`),
  CONSTRAINT `salarios_trabajador_id_foreign` FOREIGN KEY (`trabajador_id`) REFERENCES `trabajadores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salarios`
--

LOCK TABLES `salarios` WRITE;
/*!40000 ALTER TABLE `salarios` DISABLE KEYS */;
INSERT INTO `salarios` VALUES (1,1,120,14,3600.00,NULL,NULL,NULL,NULL),(2,2,12,14,3600.00,NULL,NULL,NULL,'2020-06-30 05:56:06'),(3,3,120,14,3600.00,NULL,NULL,NULL,NULL),(4,5,4,0,12.00,NULL,NULL,'2020-06-30 07:02:39','2020-06-30 07:02:39');
/*!40000 ALTER TABLE `salarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajadores`
--

DROP TABLE IF EXISTS `trabajadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trabajadores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int NOT NULL,
  `telefono` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajadores`
--

LOCK TABLES `trabajadores` WRITE;
/*!40000 ALTER TABLE `trabajadores` DISABLE KEYS */;
INSERT INTO `trabajadores` VALUES (1,'Ramiro Jose Espinoza Espinoza',24,84319220,NULL,NULL,NULL),(2,'Carlos Alfredo Gonzales Navarro',22,83337182,NULL,NULL,NULL),(3,'Mario Alejandro Urbina Malespin',25,76341730,NULL,NULL,NULL),(5,'Probando',23,23456778,'2020-06-30 09:14:26','2020-06-30 07:02:39','2020-06-30 09:14:26');
/*!40000 ALTER TABLE `trabajadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ventas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` VALUES (1,'2020-01-21','Saldado',NULL,NULL,NULL),(2,'2020-02-01','Saldado',NULL,NULL,NULL),(3,'2020-05-14','Saldado',NULL,NULL,NULL),(4,'2020-02-21','Saldado',NULL,NULL,NULL),(5,'2020-01-21','Saldado',NULL,NULL,NULL),(6,'2020-05-05','Pendiente',NULL,NULL,NULL),(7,'2020-03-10','Pendiente',NULL,NULL,NULL),(8,'2020-04-08','Pendiente',NULL,NULL,NULL),(9,'2020-03-19','Saldado',NULL,NULL,NULL),(10,'2020-05-21','Saldado',NULL,NULL,NULL),(11,'2020-05-15','Pendiente',NULL,NULL,NULL),(12,'2020-05-13','Pendiente',NULL,NULL,NULL),(13,'2020-05-16','Pendiente',NULL,NULL,NULL),(14,'2020-06-30','Saldado',NULL,'2020-06-30 08:50:11','2020-06-30 08:50:11');
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-30 10:22:10
