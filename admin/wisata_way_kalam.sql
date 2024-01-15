-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: wisata_way_kalam
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.22.04.1

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
-- Table structure for table `AboutUs`
--

DROP TABLE IF EXISTS `AboutUs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `AboutUs` (
  `aboutus_id` int NOT NULL,
  `penghargaan_id` int DEFAULT NULL,
  PRIMARY KEY (`aboutus_id`),
  KEY `penghargaan_id` (`penghargaan_id`),
  CONSTRAINT `AboutUs_ibfk_1` FOREIGN KEY (`penghargaan_id`) REFERENCES `Penghargaan` (`penghargaan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AboutUs`
--

LOCK TABLES `AboutUs` WRITE;
/*!40000 ALTER TABLE `AboutUs` DISABLE KEYS */;
/*!40000 ALTER TABLE `AboutUs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Contact`
--

DROP TABLE IF EXISTS `Contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Contact` (
  `contact_id` int NOT NULL,
  `map_id` int DEFAULT NULL,
  `contact_info` text NOT NULL,
  PRIMARY KEY (`contact_id`),
  KEY `map_id` (`map_id`),
  CONSTRAINT `Contact_ibfk_1` FOREIGN KEY (`map_id`) REFERENCES `MapInteraktif` (`map_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Contact`
--

LOCK TABLES `Contact` WRITE;
/*!40000 ALTER TABLE `Contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `Contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Fasilitas`
--

DROP TABLE IF EXISTS `Fasilitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Fasilitas` (
  `fasilitas_id` int NOT NULL,
  `map_id` int DEFAULT NULL,
  `fasilitas` text NOT NULL,
  PRIMARY KEY (`fasilitas_id`),
  KEY `map_id` (`map_id`),
  CONSTRAINT `Fasilitas_ibfk_1` FOREIGN KEY (`map_id`) REFERENCES `MapInteraktif` (`map_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Fasilitas`
--

LOCK TABLES `Fasilitas` WRITE;
/*!40000 ALTER TABLE `Fasilitas` DISABLE KEYS */;
/*!40000 ALTER TABLE `Fasilitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Footer`
--

DROP TABLE IF EXISTS `Footer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Footer` (
  `footer_id` int NOT NULL,
  `nomor_telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `ig_link` varchar(255) DEFAULT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `website_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`footer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Footer`
--

LOCK TABLES `Footer` WRITE;
/*!40000 ALTER TABLE `Footer` DISABLE KEYS */;
/*!40000 ALTER TABLE `Footer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GambarKatalog`
--

DROP TABLE IF EXISTS `GambarKatalog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `GambarKatalog` (
  `gambar_katalog_id` int NOT NULL,
  `map_id` int DEFAULT NULL,
  `gambar_url` varchar(255) NOT NULL,
  PRIMARY KEY (`gambar_katalog_id`),
  KEY `map_id` (`map_id`),
  CONSTRAINT `GambarKatalog_ibfk_1` FOREIGN KEY (`map_id`) REFERENCES `MapInteraktif` (`map_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GambarKatalog`
--

LOCK TABLES `GambarKatalog` WRITE;
/*!40000 ALTER TABLE `GambarKatalog` DISABLE KEYS */;
/*!40000 ALTER TABLE `GambarKatalog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MapInteraktif`
--

DROP TABLE IF EXISTS `MapInteraktif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MapInteraktif` (
  `map_id` int NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`map_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MapInteraktif`
--

LOCK TABLES `MapInteraktif` WRITE;
/*!40000 ALTER TABLE `MapInteraktif` DISABLE KEYS */;
/*!40000 ALTER TABLE `MapInteraktif` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Penghargaan`
--

DROP TABLE IF EXISTS `Penghargaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Penghargaan` (
  `penghargaan_id` int NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`penghargaan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Penghargaan`
--

LOCK TABLES `Penghargaan` WRITE;
/*!40000 ALTER TABLE `Penghargaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `Penghargaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Produk`
--

DROP TABLE IF EXISTS `Produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Produk` (
  `produk_id` int NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  PRIMARY KEY (`produk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Produk`
--

LOCK TABLES `Produk` WRITE;
/*!40000 ALTER TABLE `Produk` DISABLE KEYS */;
/*!40000 ALTER TABLE `Produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SlideBanner`
--

DROP TABLE IF EXISTS `SlideBanner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SlideBanner` (
  `slide_id` int NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SlideBanner`
--

LOCK TABLES `SlideBanner` WRITE;
/*!40000 ALTER TABLE `SlideBanner` DISABLE KEYS */;
/*!40000 ALTER TABLE `SlideBanner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Testimoni`
--

DROP TABLE IF EXISTS `Testimoni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Testimoni` (
  `testimoni_id` int NOT NULL,
  `foto_url` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`testimoni_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Testimoni`
--

LOCK TABLES `Testimoni` WRITE;
/*!40000 ALTER TABLE `Testimoni` DISABLE KEYS */;
/*!40000 ALTER TABLE `Testimoni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Video`
--

DROP TABLE IF EXISTS `Video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Video` (
  `video_id` int NOT NULL,
  `video_url` varchar(255) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Video`
--

LOCK TABLES `Video` WRITE;
/*!40000 ALTER TABLE `Video` DISABLE KEYS */;
/*!40000 ALTER TABLE `Video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Wisata`
--

DROP TABLE IF EXISTS `Wisata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Wisata` (
  `wisata_id` int NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `id_lokasi` int DEFAULT NULL,
  PRIMARY KEY (`wisata_id`),
  KEY `id_lokasi` (`id_lokasi`),
  CONSTRAINT `Wisata_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Wisata`
--

LOCK TABLES `Wisata` WRITE;
/*!40000 ALTER TABLE `Wisata` DISABLE KEYS */;
/*!40000 ALTER TABLE `Wisata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (3,'way-kalam','202cb962ac59075b964b07152d234b70','superadmin'),(5,'husni','4c909c3b5540e24b2ca2b6cfbbfa72d9','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asset`
--

DROP TABLE IF EXISTS `asset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asset` (
  `background` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `id_asset` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_asset`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asset`
--

LOCK TABLES `asset` WRITE;
/*!40000 ALTER TABLE `asset` DISABLE KEYS */;
INSERT INTO `asset` VALUES ('absen.jpeg','bst.jpeg',1),('plot_zoom_png.png','absen UAS.PNG',2);
/*!40000 ALTER TABLE `asset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lokasi`
--

DROP TABLE IF EXISTS `lokasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lokasi` (
  `id_lokasi` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lokasi`
--

LOCK TABLES `lokasi` WRITE;
/*!40000 ALTER TABLE `lokasi` DISABLE KEYS */;
INSERT INTO `lokasi` VALUES (1,'Mank Ardi','Mank Ardi adalah seorang ui/ux desainer yang mendunia','bst.jpeg');
/*!40000 ALTER TABLE `lokasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statistik`
--

DROP TABLE IF EXISTS `statistik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `statistik` (
  `ip` varchar(255) DEFAULT NULL,
  `visit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statistik`
--

LOCK TABLES `statistik` WRITE;
/*!40000 ALTER TABLE `statistik` DISABLE KEYS */;
/*!40000 ALTER TABLE `statistik` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-15 17:38:56
