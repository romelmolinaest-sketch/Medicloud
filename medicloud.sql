/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.8.8-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: medicloud
-- ------------------------------------------------------
-- Server version	11.8.8-MariaDB-1 from Debian

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `citas`
--

DROP TABLE IF EXISTS `citas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `citas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) DEFAULT NULL,
  `id_medico` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `motivo` varchar(255) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_paciente` (`id_paciente`),
  KEY `id_medico` (`id_medico`),
  CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`),
  CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`id_medico`) REFERENCES `medicos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citas`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `citas` WRITE;
/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
INSERT INTO `citas` VALUES
(1,1,1,'2026-08-01','08:00:00','Chequeo general','Programada'),
(2,2,2,'2026-08-01','09:00:00','Dolor de garganta','Programada'),
(3,3,3,'2026-08-02','10:30:00','Alergia','Programada'),
(4,4,4,'2026-08-02','11:00:00','Migraña','Programada'),
(5,5,5,'2026-08-03','08:30:00','Fractura','Programada'),
(6,6,6,'2026-08-03','09:15:00','Control ginecológico','Programada'),
(7,7,7,'2026-08-04','10:00:00','Revisión visual','Programada'),
(8,8,8,'2026-08-04','11:30:00','Dolor dental','Programada'),
(9,9,9,'2026-08-05','08:45:00','Control médico','Programada'),
(10,10,10,'2026-08-05','09:45:00','Ansiedad','Programada');
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `especialidades`
--

DROP TABLE IF EXISTS `especialidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `especialidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especialidades`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `especialidades` WRITE;
/*!40000 ALTER TABLE `especialidades` DISABLE KEYS */;
INSERT INTO `especialidades` VALUES
(1,'Cardiología','Diagnóstico y tratamiento de enfermedades del corazón'),
(2,'Pediatría','Atención médica para niños'),
(3,'Dermatología','Tratamiento de enfermedades de la piel'),
(4,'Neurología','Tratamiento del sistema nervioso'),
(5,'Traumatología','Lesiones de huesos y articulaciones'),
(6,'Ginecología','Salud de la mujer'),
(7,'Oftalmología','Enfermedades de los ojos'),
(8,'Odontología','Salud bucal'),
(9,'Medicina General','Atención médica primaria'),
(10,'Psiquiatría','Salud mental');
/*!40000 ALTER TABLE `especialidades` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `medicos`
--

DROP TABLE IF EXISTS `medicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `medicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `id_especialidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_especialidad` (`id_especialidad`),
  CONSTRAINT `medicos_ibfk_1` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicos`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `medicos` WRITE;
/*!40000 ALTER TABLE `medicos` DISABLE KEYS */;
INSERT INTO `medicos` VALUES
(1,'Carlos','Ramírez','0991111111','carlos.ramirez@medicloud.com',1),
(2,'María','Torres','0992222222','maria.torres@medicloud.com',2),
(3,'Ana','López','0993333333','ana.lopez@medicloud.com',3),
(4,'José','Vera','0994444444','jose.vera@medicloud.com',4),
(5,'Patricia','Mora','0995555555','patricia.mora@medicloud.com',5),
(6,'Luis','Castillo','0996666666','luis.castillo@medicloud.com',6),
(7,'Andrea','Pérez','0997777777','andrea.perez@medicloud.com',7),
(8,'Fernando','Rojas','0998888888','fernando.rojas@medicloud.com',8),
(9,'Daniela','Gómez','0999999999','daniela.gomez@medicloud.com',9),
(10,'Miguel','Santos','0981234567','miguel.santos@medicloud.com',10);
/*!40000 ALTER TABLE `medicos` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pacientes`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` VALUES
(1,'Juan','Mendoza','0102030401','0981111111','juan@gmail.com','1990-02-10','Cuenca'),
(2,'María','Pérez','0102030402','0982222222','maria@gmail.com','1995-06-15','Azogues'),
(3,'Carlos','Vera','0102030403','0983333333','carlos@gmail.com','1988-11-08','Cuenca'),
(4,'Ana','López','0102030404','0984444444','ana@gmail.com','1998-09-20','Gualaceo'),
(5,'Pedro','Torres','0102030405','0985555555','pedro@gmail.com','1985-01-12','Cuenca'),
(6,'Sofía','Rojas','0102030406','0986666666','sofia@gmail.com','1999-04-17','Paute'),
(7,'Miguel','Castro','0102030407','0987777777','miguel@gmail.com','1993-12-22','Cuenca'),
(8,'Gabriela','Mora','0102030408','0988888888','gabriela@gmail.com','1997-07-09','Biblián'),
(9,'Diego','León','0102030409','0989999999','diego@gmail.com','1991-03-14','Cuenca'),
(10,'Valentina','Salazar','0102030410','0971234567','valentina@gmail.com','2000-05-18','Cuenca');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES
(1,'Carlos Mendoza','carlos.mendoza@medicloud.com','Admin123','Administrador','2026-07-28 01:36:24'),
(2,'María Torres','maria.torres@medicloud.com','Medico123','Medico','2026-07-28 01:36:24'),
(3,'Juan Pérez','juan.perez@medicloud.com','Recep123','Recepcion','2026-07-28 01:36:24'),
(4,'Ana Rodríguez','ana.rodriguez@medicloud.com','Medico123','Medico','2026-07-28 01:36:24'),
(5,'Luis Herrera','luis.herrera@medicloud.com','Admin123','Administrador','2026-07-28 01:36:24'),
(6,'Sofía Castillo','sofia.castillo@medicloud.com','Recep123','Recepcion','2026-07-28 01:36:24'),
(7,'Pedro Sánchez','pedro.sanchez@medicloud.com','Medico123','Medico','2026-07-28 01:36:24'),
(8,'Gabriela Ortiz','gabriela.ortiz@medicloud.com','Recep123','Recepcion','2026-07-28 01:36:24'),
(9,'Diego Morales','diego.morales@medicloud.com','Admin123','Administrador','2026-07-28 01:36:24'),
(10,'Valentina Ríos','valentina.rios@medicloud.com','Medico123','Medico','2026-07-28 01:36:24');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2026-07-29 21:14:45
