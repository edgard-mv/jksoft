-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: jksoftbd_laravel
-- ------------------------------------------------------
-- Server version	8.0.19

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
INSERT INTO `contados` VALUES (1,120.00,NULL,NULL,NULL),(2,700.00,NULL,NULL,NULL),(3,14.00,NULL,NULL,NULL),(4,70.00,NULL,NULL,NULL),(5,20.00,NULL,NULL,NULL),(6,1230.00,NULL,NULL,NULL),(10,1120.00,NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (71,'2014_10_12_000000_create_users_table',1),(72,'2019_08_19_000000_create_failed_jobs_table',1),(73,'2020_04_20_201232_create_productos_table',1),(74,'2020_04_20_201536_create_proveedores_table',1),(75,'2020_04_20_201654_create_proveedor_producto_table',1),(76,'2020_04_20_201705_create_trabajadores_table',1),(77,'2020_04_20_201753_create_pedidos_table',1),(78,'2020_04_20_201847_create_producto_pedido_table',1),(79,'2020_04_20_202009_create_ventas_table',1),(80,'2020_04_20_202010_create_producto_venta_table',1),(81,'2020_04_20_202130_create_contados_table',1),(82,'2020_04_20_202203_create_creditos_table',1),(83,'2020_04_20_202331_create_abonos_table',1),(84,'2020_04_20_202355_create_salarios_table',1);
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
  `cantidad_total` int NOT NULL,
  `monto_total` double(8,2) NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `pedidos` VALUES (1,1,120,12300.00,'Realizado',NULL,NULL,NULL),(2,1,600,1400.00,'Realizado',NULL,NULL,NULL),(3,1,100,1300.00,'Realizado',NULL,NULL,NULL),(4,2,40,1100.00,'Pendiente',NULL,NULL,NULL),(5,2,10,600.00,'Realizado',NULL,NULL,NULL),(6,3,300,1500.00,'Pendiente',NULL,NULL,NULL),(7,1,120,660.00,'Realizado',NULL,NULL,NULL),(8,3,78,1200.00,'Pendiente',NULL,NULL,NULL),(9,1,25,355.00,'Realizado',NULL,NULL,NULL),(10,2,60,2000.00,'Pendiente',NULL,NULL,NULL),(11,2,134,1250.00,'Realizado',NULL,NULL,NULL),(12,3,12,400.00,'Realizado',NULL,NULL,NULL),(13,3,13,500.00,'Pendiente',NULL,NULL,NULL),(14,3,90,1267.00,'Realizado',NULL,NULL,NULL),(15,3,79,900.00,'Pendiente',NULL,NULL,NULL),(16,2,34,763.00,'Realizado',NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto_venta`
--

LOCK TABLES `producto_venta` WRITE;
/*!40000 ALTER TABLE `producto_venta` DISABLE KEYS */;
INSERT INTO `producto_venta` VALUES (1,1,82,6,85.00,391.00,NULL,NULL,NULL),(2,1,28,81,62.00,417.00,NULL,NULL,NULL),(3,1,41,60,70.00,469.00,NULL,NULL,NULL),(4,2,11,42,67.00,388.00,NULL,NULL,NULL),(5,2,96,54,61.00,342.00,NULL,NULL,NULL),(6,2,52,39,85.00,403.00,NULL,NULL,NULL),(7,3,89,48,90.00,415.00,NULL,NULL,NULL),(8,3,14,95,72.00,247.00,NULL,NULL,NULL),(9,3,49,40,60.00,317.00,NULL,NULL,NULL);
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
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `productos` VALUES (1,'Jabon plus clean','Hogar y Limpieza','caja',12,19.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(2,'Protex','Hogar y Limpieza','caja',8,22.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(3,'Palmolive','Hogar y Limpieza','caja',24,19.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(4,'DK12','Hogar y Limpieza','caja',12,22.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(5,'Doña blanca(jabon pequeño)','Hogar y Limpieza','caja',26,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(6,'Rinzo(grande)','Hogar y Limpieza','caja',10,21.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(7,'Rinzo(pequeño)','Hogar y Limpieza','caja',36,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(8,'Cloro nica','Hogar y Limpieza','bolsa',120,5.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(9,'Cloro Magia Blanca','Hogar y Limpieza','bolsa',180,7.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(10,'Suavitel','Hogar y Limpieza','bolsa',60,8.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(11,'Suavisimo','Hogar y Limpieza','bolsa',120,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(12,'Suavitel (Rojo)','Hogar y Limpieza','bolsa',24,8.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(13,'Suavitel (Verde)','Hogar y Limpieza','bolsa',12,8.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(14,'Azistin','Hogar y Limpieza','bolsa',36,8.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(15,'Terzo','Hogar y Limpieza','bolsa',24,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(16,'Pollo TIPTOP','Carnes y Embutidos','bolsa',26,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(17,'Pollo TIPTOP(Pechuga)','Carnes y Embutidos','bolsa',25,35.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(18,'Carne San Martin','Carnes y Embutidos','bolsa',30,76.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(19,'Menudo TIPTOP','Carnes y Embutidos','bolsa',1,15.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(20,'Terzo','Hogar y Limpieza','bolsa',24,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(21,'Azistin(Botella Morado)','Hogar y Limpieza','botella',7,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(22,'Azistin (Botella Verde)','Hogar y Limpieza','botella',5,25.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(23,'Cloro Botella','Hogar y Limpieza','botella',5,27.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(24,'cloro botella(Morado)','Hogar y Limpieza','botella',4,27.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(25,'Cloro botella(Verde)','Hogar y Limpieza','botella',5,27.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(26,'Pinesol','Hogar y Limpieza','botella',10,12.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(27,'Vanish','Hogar y Limpieza','bolsa',26,22.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(28,'Vanish(Polvo)','Hogar y Limpieza','caja',12,30.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(29,'Vanish(Botella)','Hogar y Limpieza','botella',5,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(30,'Jabon Marfil(Trasparente)','Hogar y Limpieza','caja',24,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(31,'Cerveza lata toña','Zumos y Bebidas','botella',100,22.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(32,'Cerveza Litro Toña','Zumos y Bebidas','botella',120,45.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(33,'Jabon Marfil(Verde)','Hogar y Limpieza','caja',12,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(34,'Jabon Marfil(Rosado)','Hogar y Limpieza','caja',10,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(35,'Jabon Marfil(Blanco)','Hogar y Limpieza','caja',9,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(36,'Jabon Marfil(con bicarbonato)','Hogar y Limpieza','caja',10,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(37,'Jabon bex(Blanco)','Hogar y Limpieza','caja',15,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(38,'Jabon bex (Transparente)','Hogar y Limpieza','caja',6,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(39,'Jabon bex(Ultra)','Hogar y Limpieza','caja',33,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(40,'Jabon bex(Azul)','Hogar y Limpieza','caja',7,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(41,'Jabon bex(Rosado)','Hogar y Limpieza','caja',10,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(42,'Jabon Maravilla(pequeño)','Hogar y Limpieza','caja',50,12.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(43,'Jabon Maravilla(Grande)','Hogar y Limpieza','caja',30,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(44,'Jabon Maravilla(Verde)','Hogar y Limpieza','caja',25,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(45,'Jabon Maravilla(Azul)','Hogar y Limpieza','caja',16,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(46,'Jabon Extra','Hogar y Limpieza','caja',35,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(47,'Jabon Extra(verde)','Hogar y Limpieza','caja',12,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(48,'Jabon Extra(Blanco)','Hogar y Limpieza','caja',30,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(49,'Jabon Extra(Rosado)','Hogar y Limpieza','caja',30,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(50,'Ultra clin','Hogar y Limpieza','bolsa',72,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(51,'Ultra clin (Grande)','Hogar y Limpieza','bolsa',14,40.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(52,'Espumil','Hogar y Limpieza','bolsa',60,25.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(53,'Espumil(Rosado)','Hogar y Limpieza','bolsa',50,25.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(54,'Xedex ','Hogar y Limpieza','bolsa',34,10.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(55,'Xedex(Grande)','Hogar y Limpieza','bolsa',14,36.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(56,'Escobas','Hogar y Limpieza','paquete (n)',12,64.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(57,'Lampaso','Hogar y Limpieza','paquete (n)',6,80.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(58,'Mecha de lampaso','Hogar y Limpieza','bolsa',18,48.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(59,'Mecha de lampaso XL','Hogar y Limpieza','bolsa',8,70.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(60,'Colgate Triple Accion','Hogar y Limpieza','caja',26,30.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(61,'Colgate Doble Accion','Hogar y Limpieza','caja',42,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(62,'Colgate(Pequeña)','Hogar y Limpieza','caja',24,16.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(63,'Oral B','Hogar y Limpieza','caja',25,25.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(64,'Cepillo de Dientes Clasico','Hogar y Limpieza','caja',72,15.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(65,'Cepillo de Dientes Premiun','Hogar y Limpieza','caja',24,17.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(66,'Cepillo de Dientes para niños','Hogar y Limpieza','caja',14,13.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(67,'Leche Medio litro','Huevos y Lacteos','bolsa',30,16.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(68,'Leche litro','Huevos y Lacteos','bolsa',20,32.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(69,'Leche Taza','Huevos y Lacteos','bolsa',15,11.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(70,'Chocolita','Huevos y Lacteos','bolsa',15,16.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(71,'Leche Fresa','Huevos y Lacteos','bolsa',8,16.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(72,'Coca Cola 12onza','Zumos y Bebidas','botella',48,8.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(73,'Coca Cola Medio litro','Zumos y Bebidas','botella',72,14.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(74,'Coca Cola Litro','Zumos y Bebidas','botella',48,24.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(75,'Coca Cola litro y medio','Zumos y Bebidas','botella',26,34.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(76,'Coca Cola Dos litros (Retornable)','Zumos y Bebidas','botella',36,35.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(77,'Coca Cola Tres litros','Zumos y Bebidas','botella',15,56.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(78,'Big Cola(Pequeña)','Zumos y Bebidas','botella',60,8.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(79,'Big Cola(Medio litro)','Zumos y Bebidas','botella',26,10.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(80,'Big Cola(Litro)','Zumos y Bebidas','botella',20,15.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(81,'Big Cola dos litros','Zumos y Bebidas','botella',12,28.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(82,'Big Cola 3 litros','Zumos y Bebidas','botella',10,45.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(83,'Pepsi medio litro','Zumos y Bebidas','botella',40,12.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(84,'Pepsi litro','Zumos y Bebidas','botella',14,20.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(85,'Pepsi dos litros','Zumos y Bebidas','botella',21,28.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(86,'Pepsi tres litros','Zumos y Bebidas','botella',10,60.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(87,'Pepsi tres litros sabor','Zumos y Bebidas','botella',15,55.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(88,'Jugo del valle','Zumos y Bebidas','botella',15,20.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(89,'jugo del valle 3 litros','Zumos y Bebidas','botella',5,50.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(90,'HIC','Zumos y Bebidas','caja',26,15.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(91,'HIC TE','Zumos y Bebidas','caja',10,17.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(92,'Jugo campestre','Zumos y Bebidas','botella',8,12.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(93,'Cola Shaler','Zumos y Bebidas','botella',15,22.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(94,'Cola Shaler tapon rojo','Zumos y Bebidas','botella',33,18.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(95,'Jugo de lata','Zumos y Bebidas','lata',33,14.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(96,'Acetominofeno','Cosmeticos','blister (n)',120,1.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(97,'Acetominofeno MK','Cosmeticos','blister (n)',60,2.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(98,'Tacsin','Cosmeticos','blister (n)',48,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(99,'Tacsin dia','Cosmeticos','blister (n)',44,9.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(100,'Tacsin noche','Cosmeticos','blister (n)',40,9.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(101,'Virogrip','Cosmeticos','blister (n)',24,3.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(102,'Pepsi medio litro','Cosmeticos','botella',24,2.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(103,'Dolofin','Cosmeticos','blister (n)',43,2.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(104,'Andrew','Cosmeticos','blister (n)',100,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(105,'Alka selser','Cosmeticos','blister (n)',87,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(106,'Sukrol','Cosmeticos','blister (n)',80,3.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(107,'Omeprazol','Cosmeticos','blister (n)',50,2.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(108,'Raditidina','Cosmeticos','blister (n)',100,3.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(109,'Diclofenac','Cosmeticos','blister (n)',100,2.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(110,'Bioprin','Cosmeticos','blister (n)',56,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(111,'Delor','Cosmeticos','blister (n)',50,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(112,'Cure band','Cosmeticos','blister (n)',200,1.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(113,'Panandol ultra','Cosmeticos','blister (n)',100,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(114,'Tap-on','Cosmeticos','blister (n)',48,3.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(115,'Neuro fortan','Cosmeticos','blister (n)',57,4.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(116,'Paracetamol','Cosmeticos','blister (n)',30,3.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(117,'Dolofin','Cosmeticos','blister (n)',100,3.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(118,'Dolovitagia','Cosmeticos','blister (n)',50,5.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(119,'Loratadina','Cosmeticos','blister (n)',30,4.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(120,'Sukrol Mujer','Cosmeticos','blister (n)',30,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(121,'Colipap','Cosmeticos','blister (n)',30,3.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(122,'Higado sanil','Cosmeticos','blister (n)',24,4.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(123,'Panadol sinusitis','Cosmeticos','blister (n)',30,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(124,'Dorival','Cosmeticos','blister (n)',50,8.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(125,'Aspirina Forte','Cosmeticos','blister (n)',50,4.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(126,'enterpmeback','Cosmeticos','blister (n)',60,3.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(127,'supertiamina','Cosmeticos','blister (n)',50,3.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(128,'Uboprofeno','Cosmeticos','blister (n)',100,2.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(129,'Alumin','Cosmeticos','blister (n)',112,5.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(130,'Amoxicilina','Cosmeticos','blister (n)',100,2.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(131,'Panadol Extra','Cosmeticos','blister (n)',100,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(132,'Alive','Cosmeticos','blister (n)',36,5.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(133,'Panadol niño','Cosmeticos','blister (n)',100,4.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(134,'Losartan','Cosmeticos','blister (n)',50,4.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(135,'Furosemida','Cosmeticos','blister (n)',100,2.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(136,'Zepol (pequeño)','Cosmeticos','vaso',30,20.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(137,'Zepol Vaso','Cosmeticos','vaso',40,50.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(138,'Pan barra','Panadería y Dulces','bolsa',144,1.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(139,'Pan pico','Panadería y Dulces','bolsa',80,1.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(140,'Pico Tostado','Panadería y Dulces','bolsa',50,1.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(141,'Margarita','Panadería y Dulces','bolsa',60,1.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(142,'Polvoron negro','Panadería y Dulces','bolsa',60,1.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(143,'Polvoron Blanco','Panadería y Dulces','bolsa',40,2.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(144,' Pan Lengua','Panadería y Dulces','bolsa',60,1.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(145,'Pan Bimbo talla M','Panadería y Dulces','bolsa',10,38.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(146,'Pan Bimbo talla XG','Panadería y Dulces','bolsa',7,66.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(147,'Pinguino','Panadería y Dulces','bolsa',15,20.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(148,'Pinguno Chocolate','Panadería y Dulces','bolsa',8,22.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(149,'Mr Brown','Panadería y Dulces','bolsa',20,21.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(150,'Pan Tostado','Panadería y Dulces','bolsa',10,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(151,'Principe','Panadería y Dulces','bolsa',7,19.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(152,'Sponch','Panadería y Dulces','bolsa',10,19.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(153,'Bimbolete','Panadería y Dulces','bolsa',14,15.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(154,'Panquesito','Panadería y Dulces','bolsa',12,19.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(155,'Panqueque','Panadería y Dulces','bolsa',4,40.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(156,'Paleta payaso','Panadería y Dulces','bolsa',30,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(157,'Panditas','Panadería y Dulces','bolsa',6,25.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(158,'Polvoritas','Panadería y Dulces','bolsa',6,18.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(159,'Chiqui','Panadería y Dulces','paquete (n)',48,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(160,'Oreo','Panadería y Dulces','paquete (n)',48,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(161,'Oreo Blanca','Panadería y Dulces','paquete (n)',28,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(162,'Chiqui Rosada','Panadería y Dulces','paquete (n)',28,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(163,'Can Can','Panadería y Dulces','paquete (n)',32,4.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(164,'Can Can Rosa','Panadería y Dulces','paquete (n)',28,4.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(165,'Can Can Chocolate','Panadería y Dulces','paquete (n)',22,4.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(166,'Club Social','Panadería y Dulces','paquete (n)',32,5.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(167,'Chocomax','Panadería y Dulces','paquete (n)',28,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(168,'Ritz','Panadería y Dulces','paquete (n)',60,5.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(169,'Ritz con queso','Panadería y Dulces','paquete (n)',30,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(170,'Mantequilla','Panadería y Dulces','paquete (n)',24,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(171,'Soda','Panadería y Dulces','paquete (n)',24,5.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(172,'Chips Ahoy','Panadería y Dulces','paquete (n)',24,14.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(173,'Mantequilla de barra ESKIMO ','Huevos y Lacteos','paquete (n)',20,40.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(174,'Cuaderno pequeño','Infantil','paquete (n)',20,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(175,'Cuaderno universitario','Infantil','paquete (n)',15,14.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(176,'Cuaderno universitario mediano','Infantil','paquete (n)',15,17.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(177,'Cuaderno universitario grande','Infantil','paquete (n)',15,32.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(178,'Block','Infantil','paquete (n)',15,20.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(179,'Libreta','Infantil','paquete (n)',10,24.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(180,'Cuaderno universitario 5 Materia','Infantil','paquete (n)',10,120.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(181,'Lapiz Bic','Infantil','paquete (n)',96,5.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(182,'Lapiz zebra','Infantil','paquete (n)',36,10.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(183,'Sticker','Infantil','paquete (n)',40,18.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(184,'Marcadores','Infantil','paquete (n)',40,18.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(185,'Resaltador','Infantil','paquete (n)',24,14.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(186,'Borrador','Infantil','paquete (n)',24,4.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(187,'Tajador metalico','Infantil','paquete (n)',30,5.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(188,'Tajador Plastico','Infantil','paquete (n)',20,4.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(189,'Corrector liquido','Infantil','paquete (n)',24,12.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(190,'Corrector seco','Infantil','paquete (n)',7,34.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(191,'Acuarela','Infantil','paquete (n)',4,12.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(192,'Pega grande','Infantil','paquete (n)',8,55.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(193,'Regla','Infantil','paquete (n)',30,10.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(194,'Pega pequeña','Infantil','paquete (n)',10,20.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(195,'Arroz empacado faizan ','Granos basicos','paquete (n)',72,16.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(196,'Arroz empacado doña maria ','Granos basicos','paquete (n)',16,15.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(197,'Arroz saco faizan ','Granos basicos','paquete (n)',1,15.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(198,'Arroz saco tio pelon ','Granos basicos','paquete (n)',1,13.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(199,'Arroz saco sin marca','Granos basicos','paquete (n)',1,12.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(200,'Frijol de saco ','Granos basicos','paquete (n)',1,15.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(201,'Frijoles blanditos ','Granos basicos','paquete (n)',14,18.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(202,'Frijoles blandito molido ','Granos basicos','paquete (n)',15,22.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(203,'Azucar saco ','Granos basicos','paquete (n)',1,12.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(204,'Azucar empacada ','Granos basicos','paquete (n)',74,15.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(205,'Aceite chorreado(cuarta) ','Granos basicos','paquete (n)',2,12.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(206,'Aceite chorreado(Medio) ','Granos basicos','paquete (n)',2,20.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(207,'Aceite chorreado(litro) ','Granos basicos','paquete (n)',2,40.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(208,'Aceite Mazola galon ','Granos basicos','caja',6,270.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(209,'Aceite Mazola medio galon','Aceite, Pasta y Legumbres','paquete (n)',5,135.00,NULL,'2020-11-09 06:00:00','2020-11-09 10:55:25'),(210,'Papel Higienico Nevax ','Granos basicos','bolsa',120,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(211,'Papel Higienico Scot ','Granos basicos','bolsa',60,22.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(212,'Papel Higienico Scot Rindemax ','Granos basicos','bolsa',25,25.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(213,'Papel Higienico Encanto ','Granos basicos','bolsa',123,26.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(214,'Papel Higienico Rosal ','Granos basicos','bolsa',120,12.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(215,'Papel Higienico encanto (4 unidades) ','Granos basicos','paquete (n)',10,80.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(216,'Papel rosal (4 unidades) ','Granos basicos','paquete (n)',10,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(217,'Sopa Magui pequeña ','Granos basicos','paquete (n)',34,6.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(218,'Sopa Magui grande ','Granos basicos','paquete (n)',66,12.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(219,'Salsa de tomate Natura ','Granos basicos','paquete (n)',48,14.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(220,'Salsa de tomate Natura (Grande) ','Granos basicos','paquete (n)',10,36.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(221,'Guizante  ','Granos basicos','paquete (n)',7,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(222,'Elote La costeña ','Granos basicos','paquete (n)',9,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(223,'Espagueti Roma ','Aceite, Pasta y Legumbres','paquete (n)',30,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(224,'Conchitas Roma ','Aceite, Pasta y Legumbres','paquete (n)',17,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(225,'Espagueti Milano ','Aceite, Pasta y Legumbres','paquete (n)',12,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(226,'Sardina pica pica ','Mariscos','lata',16,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(227,'Sardina sin picar ','Mariscos','lata',19,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(228,'Sardina Calvo ','Mariscos','lata',13,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(229,'Atun gaiota Aceite ','Mariscos','lata',14,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(230,'Atun gaiota Agua ','Mariscos','lata',14,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(231,'Atun gaiota Veguetales ','Mariscos','lata',14,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(232,'Salsa China ','Granos basicos','botella',10,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(233,'Salsa soya ','Granos basicos','botella',8,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(234,'Maseca','Granos basicos','bolsa',48,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(235,'Maseca Preparada','Granos basicos','bolsa',50,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(236,'Cafe presto churro ','Granos basicos','bolsa',1500,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(237,'cafe presto vaso pequeño ','Granos basicos','bolsa',8,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(238,'Cafe presto vaso grande ','Granos basicos','vaso',5,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(239,'Cafe presto 50Ml ','Granos basicos','vaso',15,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(240,'Cremora vaso ','Granos basicos','vaso',15,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(241,'Cremora Ceda  ','Granos basicos','paquete (n)',100,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(242,'Maruchan bolsa ','Conservas y Comida Preparada','bolsa',100,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(243,'Maruchan Ramen ','Conservas y Comida Preparada','bolsa',50,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(244,'Maruchan Vaso ','Conservas y Comida Preparada','bolsa',120,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(245,'Bujia Philips ','Hogar y Limpieza','paquete (n)',30,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(246,'Margarina Numar ','Granos basicos','caja',100,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(247,'Margarina Numar media ','Granos basicos','paquete (n)',200,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(248,'Margarina Numar light ','Granos basicos','paquete (n)',48,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(249,'Pimienta negra ','Granos basicos','paquete (n)',33,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(250,'Pimienta de chapa','Granos basicos','paquete (n)',20,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(251,'Achote','Conservas y Comida Preparada','paquete (n)',40,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(252,'Salsa inglesa ','Granos basicos','paquete (n)',40,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(253,'Salsa inglesa vaso mediano (Lisano) ','Granos basicos','vaso',10,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(254,'Salsa inglesa vaso grande (Lisano)','Granos basicos','vaso',8,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(255,'Leche condensada ','Conservas y Comida Preparada','vaso',25,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(256,'Leche condensada Grande ','Conservas y Comida Preparada','vaso',10,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(257,'Jalea ','Conservas y Comida Preparada','vaso',48,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(258,'Jalea mediana ','Conservas y Comida Preparada','vaso',9,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(259,'Jalea Grande','Conservas y Comida Preparada','vaso',10,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(260,'Marvoro ','Cosmeticos','paquete (n)',24,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(261,'Pall Mall Verde ','Cosmeticos','paquete (n)',48,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(262,'Pall Mall Verde XL ','Cosmeticos','paquete (n)',48,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(263,'Pall Mall Azul ','Cosmeticos','paquete (n)',48,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(264,'Pall Mall Azul XL ','Cosmeticos','paquete (n)',28,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(265,'Casino Suave ','Cosmeticos','paquete (n)',24,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(266,'Casino Rojo ','Cosmeticos','paquete (n)',14,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(267,'Belmont suave ','Cosmeticos','paquete (n)',26,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(268,'Belmont Rojo ','Cosmeticos','paquete (n)',12,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(269,'Rolis ','Cosmeticos','paquete (n)',48,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(270,'Mordern ','Cosmeticos','paquete (n)',48,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(271,'Marvoro (Paquete) ','Cosmeticos','paquete (n)',24,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(272,'Pall Mall Verde (Paquete)','Cosmeticos','paquete (n)',48,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(273,'Pall Mall Verde XL (Paquete)','Cosmeticos','paquete (n)',48,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(274,'Pall Mall Azul (Paquete)','Cosmeticos','paquete (n)',48,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(275,'Pall Mall Azul XL (Paquete)','Cosmeticos','paquete (n)',28,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(276,'Casino Suave (Paquete)','Cosmeticos','paquete (n)',24,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(277,'Casino Rojo (Paquete)','Cosmeticos','paquete (n)',14,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(278,'Belmont suave (Paquete)','Cosmeticos','paquete (n)',26,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(279,'Belmont Rojo (Paquete)','Cosmeticos','paquete (n)',12,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(280,'Rolis (Paquete)','Cosmeticos','paquete (n)',48,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00'),(281,'Mordern (Paquete)','Cosmeticos','paquete (n)',48,44.00,NULL,'2020-11-09 06:00:00','2020-11-09 06:00:00');
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` VALUES (1,'Juan Ernezto Gracia Jarquin','Coca Cola',NULL,NULL,NULL),(2,'Jose Carlos Leiva Flores','Merconica',NULL,NULL,NULL),(3,'Jeffry Alexander Navarro','LALA',NULL,NULL,NULL),(4,'Faustino Jesus Roman','DINANT',NULL,NULL,NULL),(5,'Khistier Sandigo','Unilever',NULL,NULL,NULL),(6,'Magaly Acosta','Interamericana de mercadeo',NULL,NULL,NULL),(7,'Luis Diaz','Pollo Tip TOP',NULL,NULL,NULL),(8,'Angy Fabela','Bimbo',NULL,NULL,NULL),(9,'Josuè gudino Escobedo','Cafè Soluble S.A',NULL,NULL,NULL),(10,'Victor Moreno','Carnes San Martin',NULL,NULL,NULL),(11,'Esmeralda Navarro','Industrial Delmor',NULL,NULL,NULL),(12,'Oswaldo Reyes','ENABAS',NULL,NULL,NULL),(13,'Gabriel Valles','AGROSA',NULL,NULL,NULL),(14,'Israel Rosas','Distribuidora Mi Redentor',NULL,NULL,NULL),(15,'Wiliam Rivas','Compañia Cervecera de Nicaragua',NULL,NULL,NULL),(16,'Oscar Muños Agero','Bocadeli',NULL,NULL,NULL),(17,'Renata Austin Luna','Diana',NULL,NULL,NULL),(18,'Regina Mayorga Olivera','Distribuidora S.A',NULL,NULL,NULL),(19,'Milton Gracia Arias','Pepsi',NULL,NULL,NULL),(20,'Yamil Antonio Hernandez Cordoba','Big Cola',NULL,NULL,NULL);
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
  `extra` int DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `salarios_trabajador_id_foreign` (`trabajador_id`),
  CONSTRAINT `salarios_trabajador_id_foreign` FOREIGN KEY (`trabajador_id`) REFERENCES `trabajadores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salarios`
--

LOCK TABLES `salarios` WRITE;
/*!40000 ALTER TABLE `salarios` DISABLE KEYS */;
INSERT INTO `salarios` VALUES (1,1,120,14,3600.00,NULL,NULL,NULL,NULL),(2,2,120,14,3600.00,NULL,NULL,NULL,NULL),(3,3,120,14,3600.00,NULL,NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajadores`
--

LOCK TABLES `trabajadores` WRITE;
/*!40000 ALTER TABLE `trabajadores` DISABLE KEYS */;
INSERT INTO `trabajadores` VALUES (1,'Ramiro Jose Espinoza Espinoza',24,84319220,NULL,NULL,NULL),(2,'Carlos Alfredo Gonzales Navarro',22,83337182,NULL,NULL,NULL),(3,'Mario Alejandro Urbina Malespin',25,76341730,NULL,NULL,NULL);
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
  `role` int unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@flor.com','2020-11-09 06:00:00','$2y$10$dm8dEmqDmrruGlJUgL4ZL.wDrwabtnicFyJd3VoYFpzb8EkrlbQFq',1,NULL,NULL,NULL),(2,'Inventario','inventario@flor.com','2020-11-09 06:00:00','$2y$10$K6lcCzM0//ycV1hrad71g.1L.Y/8VAgTCo1J9IiYw3h3tYWRkm2hu',2,NULL,NULL,NULL),(3,'Ventas','ventas@flor.com','2020-11-09 06:00:00','$2y$10$PDNyt4NZj2/8fB9vUOR5MenO8uGKofLqKq4qMCYVE43qqXNSnJ7nG',3,NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` VALUES (1,'2020-01-21','Saldado',NULL,NULL,NULL),(2,'2020-02-01','Saldado',NULL,NULL,NULL),(3,'2020-05-14','Saldado',NULL,NULL,NULL),(4,'2020-02-21','Saldado',NULL,NULL,NULL),(5,'2020-01-21','Saldado',NULL,NULL,NULL),(6,'2020-05-05','Pendiente',NULL,NULL,NULL),(7,'2020-03-10','Pendiente',NULL,NULL,NULL),(8,'2020-04-08','Pendiente',NULL,NULL,NULL),(9,'2020-03-19','Saldado',NULL,NULL,NULL),(10,'2020-05-21','Saldado',NULL,NULL,NULL),(11,'2020-05-15','Pendiente',NULL,NULL,NULL),(12,'2020-05-13','Pendiente',NULL,NULL,NULL),(13,'2020-05-16','Pendiente',NULL,NULL,NULL);
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'jksoftbd_laravel'
--
/*!50003 DROP PROCEDURE IF EXISTS `spChart_Proveedores` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spChart_Proveedores`()
BEGIN
           (SELECT proveedores.empresa, SUM(proveedor_producto.cantidad) as total
            FROM proveedores  join proveedor_producto 
            ON proveedores.id=proveedor_producto.proveedor_id
            GROUP BY proveedores.empresa
            ORDER BY total asc
            LIMIT 1)
        UNION
           (Select proveedores.empresa, SUM(proveedor_producto.cantidad) as total
            FROM proveedores  join proveedor_producto 
            ON proveedores.id=proveedor_producto.proveedor_id
            GROUP BY proveedores.empresa
            ORDER BY total desc
            LIMIT 1);
        END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spOperarios_GetAll` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spOperarios_GetAll`()
BEGIN
            SELECT
                *
            FROM
                trabajadores
            JOIN
                salarios
            ON
                trabajadores.id = salarios.trabajador_id
            WHERE trabajadores.deleted_at IS NULL
            AND salarios.deleted_at IS NULL;
        END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spProductos_GetAll` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spProductos_GetAll`()
BEGIN
                SELECT
                    *
                FROM
                    productos
                WHERE deleted_at IS NULL;
            END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spProveedores_GetAll` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spProveedores_GetAll`()
BEGIN
                SELECT
                    *
                FROM
                    proveedores
                WHERE deleted_at IS NULL;
            END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spProveedorProducto_GetAll` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spProveedorProducto_GetAll`()
BEGIN
                SELECT
                    *
                FROM
                    proveedor_producto
                WHERE deleted_at IS NULL;
            END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_DeleteOperario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_DeleteOperario`(
in $id BIGINT)
BEGIN
	DELETE 
    FROM trabajadores
    WHERE id=$id;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_ProvisionDate` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ProvisionDate`(
   IN fechainicio date,
   IN fechafinal date
   )
BEGIN
  
  SELECT
               MAX(fecha) as fechas
            FROM
               proveedor_producto
      
            WHERE
                fecha BETWEEN $fechainicio AND $fechafinal;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_Ventas_Contado` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Ventas_Contado`(
            in fechainicio date,
            in fechafin date
        )
BEGIN
        SELECT
        COUNT(venta_id) as ventasobtenidas,
        SUM(monto) as total, 
        ROUND(AVG(monto),2) as promedio,
        MAX(monto) as maximo,
        MIN(monto) as minimo
        FROM contados
        Join ventas
        ON contados.venta_id=ventas.id
        WHERE fecha BETWEEN fechainicio AND fechafin;
        END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_Ventas_Credito` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Ventas_Credito`(
            in fechainicio date,
            in fechafin date
        )
BEGIN
            SELECT 
            COUNT(venta_id)  ventasobtenidas,
            SUM(monto) AS total, 
            MAX(monto) AS maximo,
            MIN(monto) AS minimo,
            ROUND(AVG(monto),2) AS promedio
            FROM creditos 
            JOIN ventas 
            ON creditos.venta_id=ventas.id
            WHERE fecha BETWEEN fechainicio AND fechafin;
        END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-09  8:24:14
