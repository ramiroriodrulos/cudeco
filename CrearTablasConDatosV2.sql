 CREATE DATABASE  IF NOT EXISTS `cudeco` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `cudeco`;
-- MySQL dump 10.13  Distrib 8.0.34, for macos13 (arm64)
--
-- Host: localhost    Database: cudeco
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

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
-- Table structure for table `RespuestaSeccionA`
--

DROP TABLE IF EXISTS `RespuestaSeccionA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `RespuestaSeccionA` (
  `idRespuestaSeccionA` int(11) NOT NULL AUTO_INCREMENT,
  `idCuestionario` int(11) NOT NULL,
  `idOpcion` int(11) NOT NULL,
  `seleccionada` int(11) DEFAULT NULL,
  PRIMARY KEY (`idRespuestaSeccionA`),
  KEY `fk_seccion_cuestionario1_idx` (`idCuestionario`),
  KEY `fk_seccionA_opcion1_idx` (`idOpcion`),
  CONSTRAINT `fk_respuestaSeccionA_idCuestionario` FOREIGN KEY (`idCuestionario`) REFERENCES `cuestionario` (`idCuestionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_respuestaSeccionA_idOpcion` FOREIGN KEY (`idOpcion`) REFERENCES `opcion` (`idOpcion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RespuestaSeccionA`
--

LOCK TABLES `RespuestaSeccionA` WRITE;
/*!40000 ALTER TABLE `RespuestaSeccionA` DISABLE KEYS */;
/*!40000 ALTER TABLE `RespuestaSeccionA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RespuestaSeccionB`
--

DROP TABLE IF EXISTS `RespuestaSeccionB`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `RespuestaSeccionB` (
  `idRespuestaSeccionB` int(11) NOT NULL AUTO_INCREMENT,
  `idCuestionario` int(11) NOT NULL,
  `idPreguntaOpcion` int(11) NOT NULL,
  `seleccionada` int(11) DEFAULT NULL,
  PRIMARY KEY (`idRespuestaSeccionB`),
  KEY `fk_RespuestaSeccionB_idCuestionario_idx` (`idCuestionario`),
  KEY `fk_RespuestaSeccionB_idPreguntaOpciones_idx` (`idPreguntaOpcion`),
  CONSTRAINT `fk_respuestaSeccionB_idCuestionario` FOREIGN KEY (`idCuestionario`) REFERENCES `cuestionario` (`idCuestionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_respuestaSeccionB_idPreguntaOpciones` FOREIGN KEY (`idPreguntaOpcion`) REFERENCES `preguntaOpciones` (`idPreguntaOpciones`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RespuestaSeccionB`
--

LOCK TABLES `RespuestaSeccionB` WRITE;
/*!40000 ALTER TABLE `RespuestaSeccionB` DISABLE KEYS */;
/*!40000 ALTER TABLE `RespuestaSeccionB` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Detalle` varchar(200) NOT NULL,
  `pagina` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (NULL,'Sonidos de cosas y animales',1),(NULL,'Animales de verdad y de juguete',1),(NULL,'Vehículos de verdad y de juguete',1),(4,'Alimentos y bebidas',1),(5,'Partes del cuerpo',1),(6,'Juguetes',2),(7,'Utensilios de la casa',2),(8,'Muebles y cuartos',2),(9,'Objetos fuera de la casa',2),(10,'Lugares fuera de la casa',2),(11,'Personas',2),(12,'Rutinas, reglas sociales y juegos',2),(13,'Acciones y procesos (verbos)',2),(14,'Estados',2),(15,'Cualidades y atributos',2),(16,'Palabras sobre el tiempo',2),(17,'Pronombres y modificadores',2),(18,'Preguntas',2),(19,'Preposiciones y artículos',2),(20,'Cuantificadores y adverbios',2),(21,'Locativos',2),(22,'Conectivos',2);
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuestionario`
--

DROP TABLE IF EXISTS `cuestionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cuestionario` (
  `idCuestionario` int(11) NOT NULL AUTO_INCREMENT,
  `idResponsable` int(11) NOT NULL,
  `idProfesional` int(11) NOT NULL,
  `fechaCreado` date NOT NULL,
  `fechaCompletado` date DEFAULT NULL,
  `idHijo` int(11) NOT NULL,
  PRIMARY KEY (`idCuestionario`),
  KEY `fk_cuestionario_padre1_idx` (`idResponsable`),
  KEY `fk_cuestionario_profesional1_idx` (`idProfesional`),
  KEY `fk_cuestionario_hijo1_idx` (`idHijo`),
  CONSTRAINT `fk_cuestionario_idHijo` FOREIGN KEY (`idHijo`) REFERENCES `hijo` (`idhijo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cuestionario_idProfesional` FOREIGN KEY (`idProfesional`) REFERENCES `profesional` (`idProfesional`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cuestionario_idResponsable` FOREIGN KEY (`idResponsable`) REFERENCES `responsable` (`idResponsable`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuestionario`
--

LOCK TABLES `cuestionario` WRITE;
/*!40000 ALTER TABLE `cuestionario` DISABLE KEYS */;
INSERT INTO `cuestionario` VALUES (1,1,1,'2023-09-28',NULL,1);
/*!40000 ALTER TABLE `cuestionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hijo`
--

DROP TABLE IF EXISTS `hijo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hijo` (
  `idhijo` int(11) NOT NULL AUTO_INCREMENT,
  `fechaNacimiento` date NOT NULL,
  `edadMeses` varchar(3) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idhijo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hijo`
--

LOCK TABLES `hijo` WRITE;
/*!40000 ALTER TABLE `hijo` DISABLE KEYS */;
INSERT INTO `hijo` VALUES (1,'2020-09-14','36','Tomas'),(2,'2023-08-01','1','Pedro');
/*!40000 ALTER TABLE `hijo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opcion`
--

DROP TABLE IF EXISTS `opcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `opcion` (
  `idOpcion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`idOpcion`),
  KEY `fk_opcion_idCategoria_idx` (`idCategoria`),
  CONSTRAINT `fk_opcion_idCategoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opcion`
--

LOCK TABLES `opcion` WRITE;
/*!40000 ALTER TABLE `opcion` DISABLE KEYS */;
INSERT INTO `opcion` VALUES (NULL,'¡am!',1),(NULL,'cua-cuá',1),(NULL,'muu',1),(NULL,'qui-qui-ri-quí',1),(NULL,'¡ay!',1),(NULL,'guau-guau/ba-bau',1),(NULL,'pio-pío',1),(NULL,'rum-rum (coche)',1),(NULL,'bee/mee',1),(NULL,'miau',1),(NULL,'¡pum!',1),(NULL,'tu-tú',1), (NULL, 'abeja' ,2), (NULL, 'animal' ,2), (NULL, 'araña' ,2), (NULL, 'ardilla' ,2), (NULL, 'ballena' ,2), (NULL, 'bicho' ,2), (NULL, 'burro' ,2), (NULL, 'caballo' ,2), (NULL, 'cebra' ,2), (NULL, 'chancho' ,2), (NULL, 'ciervo/bambi' ,2), (NULL, 'cocodrilo' ,2), (NULL, 'conejo' ,2), (NULL, 'cucaracha' ,2), (NULL, 'elefante' ,2), (NULL, 'foca' ,2), (NULL, 'gallina' ,2), (NULL, 'gato' ,2), (NULL, 'gusano' ,2), (NULL, 'hipopótamo' ,2), (NULL, 'hormiga' ,2), (NULL, 'jirafa' ,2), (NULL, 'lechuza' ,2), (NULL, 'león' ,2), (NULL, 'lobo' ,2), (NULL, 'mariposa' ,2), (NULL, 'mono' ,2), (NULL, 'mosca' ,2), (NULL, 'mosquito' ,2), (NULL, 'oso' ,2), (NULL, 'oveja' ,2), (NULL, 'pájaro' ,2), (NULL, 'pato' ,2), (NULL, 'pavo' ,2), (NULL, 'perro' ,2), (NULL, 'pescado/pez' ,2), (NULL, 'pingüino' ,2), (NULL, 'pollito' ,2), (NULL, 'rana' ,2), (NULL, 'ratón/rata' ,2), (NULL, 'sapo' ,2), (NULL, 'tigre' ,2), (NULL, 'tortuga' ,2), (NULL, 'vaca' ,2), (NULL, 'víbora' ,2),(NULL, 'ambulancia' ,3), (NULL, 'auto' ,3), (NULL, 'auto de policía' ,3), (NULL, 'avión' ,3), (NULL, 'barco' ,3), (NULL, 'bicicleta/bici' ,3), (NULL, 'camión' ,3), (NULL, 'camión de bomberos' ,3), (NULL, 'cochecito de bebé' ,3), (NULL, 'helicóptero' ,3), (NULL, 'micro/colectivo' ,3), (NULL, 'moto' ,3), (NULL, 'tractor' ,3), (NULL, 'tren' ,3), (NULL, 'triciclo' ,3), (NULL, 'taxi' ,3),(NULL, 'aceituna' ,4), (NULL, 'agua' ,4), (NULL, 'alfajor' ,4), (NULL, 'arroz' ,4), (NULL, 'atún' ,4), (NULL, 'azúcar' ,4), (NULL, 'banana' ,4), (NULL, 'café' ,4), (NULL, 'calabaza' ,4), (NULL, 'caramelo' ,4), (NULL, 'carne' ,4), (NULL, 'cereales' ,4), (NULL, 'chicle' ,4), (NULL, 'choclo' ,4), (NULL, 'chocolatada' ,4), (NULL, 'chocolate' ,4), (NULL, 'chupetín' ,4), (NULL, 'coca' ,4), (NULL, 'comida/papa' ,4), (NULL, 'dulce' ,4), (NULL, 'durazno' ,4), (NULL, 'empanada' ,4), (NULL, 'fideos' ,4), (NULL, 'frutilla' ,4), (NULL, 'galletita' ,4), (NULL, 'gelatina' ,4), (NULL, 'hamburguesa/Paty' ,4), (NULL, 'helado' ,4), (NULL, 'hielo' ,4), (NULL, 'huevo' ,4), (NULL, 'jamón' ,4), (NULL, 'jugo' ,4), (NULL, 'leche' ,4), (NULL, 'lentejas' ,4), (NULL, 'licuado' ,4), (NULL, 'limonada' ,4), (NULL, 'maní' ,4), (NULL, 'manteca' ,4), (NULL, 'manzana' ,4), (NULL, 'mate' ,4), (NULL, 'melón' ,4), (NULL, 'mermelada' ,4), (NULL, 'milanesa' ,4), (NULL, 'naranja' ,4), (NULL, 'pan' ,4), (NULL, 'papas fritas' ,4),(NULL, 'anteojos/lentes' ,5), (NULL, 'aros' ,5), (NULL, 'babero' ,5), (NULL, 'bombacha' ,5), (NULL, 'botas' ,5), (NULL, 'botón' ,5), (NULL, 'bufanda' ,5), (NULL, 'buzo' ,5), (NULL, 'calzoncillo' ,5),(NULL, 'barba' ,6), (NULL, 'camisa' ,6), (NULL, 'campera' ,6), (NULL, 'cartera' ,6), (NULL, 'cierre' ,6), (NULL, 'collar' ,6), (NULL, 'gorra/gorro' ,6), (NULL, 'guantes' ,6), (NULL, 'hebilla (de pelo)/gomita' ,6), (NULL, 'malla' ,6), (NULL, 'birome/lapicera' ,7), (NULL, 'bolitas' ,7), (NULL, 'burbujas' ,7), (NULL, 'crayones' ,7), (NULL, 'cubos' ,7), (NULL, 'fibras' ,7), (NULL, 'globo' ,7), (NULL, 'hoja/papel' ,7), (NULL, 'juguete/chiche(s)' ,7), (NULL, 'lápiz' ,7), (NULL, 'alfombra' ,8), (NULL, 'almohada' ,8), (NULL, 'balde' ,8), (NULL, 'basura' ,8), (NULL, 'bolsa/bolsita' ,8), (NULL, 'botella' ,8), (NULL, 'caja' ,8), (NULL, 'cámara' ,8), (NULL, 'canasta' ,8), (NULL, 'celular/celu' ,8), (NULL, 'banco' ,9), (NULL, 'bañadera' ,9), (NULL, 'baño' ,9), (NULL, 'biblioteca' ,9), (NULL, 'cajón' ,9), (NULL, 'cama' ,9), (NULL, 'cochera/garage' ,9), (NULL, 'cocina' ,9), (NULL, 'computadora/compu' ,9), (NULL, 'cuna' ,9),(NULL, 'árbol' ,10), (NULL, 'arena' ,10), (NULL, 'bandera' ,10), (NULL, 'cielo' ,10), (NULL, 'cucha' ,10), (NULL, 'estrella' ,10), (NULL, 'flor' ,10), (NULL, 'fuego' ,10), (NULL, 'hamaca' ,10), (NULL, 'hojas' ,10), (NULL, 'banco' ,11), (NULL, 'cerro/montaña' ,11), (NULL, 'iglesia/templo' ,11), (NULL, 'río' ,11), (NULL, 'bosque' ,11), (NULL, 'calesita' ,11), (NULL, 'calle' ,11), (NULL, 'campo' ,11), (NULL, 'casa' ,11), (NULL, 'abuela*' ,12), (NULL, 'abuelo*' ,12), (NULL, 'amiga*' ,12), (NULL, 'amigo*' ,12), (NULL, 'bebé' ,12), (NULL, 'doctor' ,12), (NULL, 'familia' ,12), (NULL, 'circo' ,12), (NULL, 'cumpleaños/cumple' ,12), (NULL, 'escuela/cole' ,12), (NULL, 'a ver…' ,13), (NULL, 'a pasear' ,13), (NULL, 'adiós-chau' ,13), (NULL, 'ahí voy' ,13), (NULL, 'al agua patos…' ,13), (NULL, 'arriba las manos' ,13), (NULL, 'basta' ,13), (NULL, 'besitos' ,13), (NULL, 'bravo' ,13), (NULL, 'buenas noches' ,13), (NULL, 'abrir' ,14), (NULL, 'acabar' ,14), (NULL, 'acompañar' ,14), (NULL, 'acostar(se)' ,14), (NULL, 'agarrar' ,14), (NULL, 'almorzar' ,14), (NULL, 'andar' ,14), (NULL, 'apagar' ,14), (NULL, 'apurar(se)' ,14), (NULL, 'arreglar(se)' ,14), (NULL, 'estar' ,15), (NULL, 'entrar' ,15), (NULL, 'equivocar(se)' ,15), (NULL, 'esconder(se)' ,15), (NULL, 'escribir' ,15), (NULL, 'escuchar' ,15), (NULL, 'esperar' ,15), (NULL, 'ganar' ,15), (NULL, 'gritar' ,15), (NULL, 'guardar' ,15), (NULL, 'alto' ,16), (NULL, 'feliz' ,16), (NULL, 'amarillo' ,16), (NULL, 'feo' ,16), (NULL, 'asco/asqueroso' ,16), (NULL, 'frío' ,16), (NULL, 'azul' ,16), (NULL, 'fuerte' ,16), (NULL, 'blanco' ,16), (NULL, 'gordo' ,16), (NULL, 'a la mañana' ,17), (NULL, 'ahora' ,17), (NULL, 'después' ,17), (NULL, 'mañana' ,17), (NULL, 'a la noche' ,17), (NULL, 'años' ,17), (NULL, 'día' ,17), (NULL, 'noche' ,17), (NULL, 'a la tarde' ,17), (NULL, 'ayer' ,17), (NULL, 'aquel' ,18), (NULL, 'eso' ,18), (NULL, 'aquellos' ,18), (NULL, 'esos' ,18), (NULL, 'aquella' ,18), (NULL, 'esta' ,18), (NULL, 'aquellas' ,18), (NULL, 'estas' ,18), (NULL, 'él' ,18), (NULL, 'este' ,18), (NULL, 'cómo' ,19), (NULL, 'cuándo' ,19), (NULL, 'cuál' ,19), (NULL, 'dónde' ,19), (NULL, 'por qué' ,19), (NULL, 'quién' ,19), (NULL, 'qué' ,19), (NULL, 'a/al' ,20), (NULL, 'en' ,20), (NULL, 'con' ,20), (NULL, 'entre' ,20), (NULL, 'de/del' ,20), (NULL, 'la' ,20), (NULL, 'el' ,20), (NULL, 'las' ,20), (NULL, 'los' ,20), (NULL, 'una' ,20), (NULL, 'así' ,21), (NULL, 'más' ,21), (NULL, 'bien' ,21), (NULL, 'mucho' ,21), (NULL, 'despacio' ,21), (NULL, 'nada' ,21), (NULL, 'mal' ,21), (NULL, 'no' ,21), (NULL, 'sí (afirmación)' ,21), (NULL, 'todavía' ,21), (NULL, 'abajo' ,22), (NULL, 'afuera' ,22), (NULL, 'acá' ,22), (NULL, 'ahí' ,22), (NULL, 'adelante' ,22), (NULL, 'al lado' ,22), (NULL, 'adentro' ,22), (NULL, 'allá' ,22), (NULL, 'no hay' ,22), (NULL, 'otro/otra vez' ,22), (NULL, 'entonces' ,23), (NULL, 'porque' ,23), (NULL, 'o' ,23), (NULL, 'que' ,23), (NULL, 'si (te portás bien)' ,23), (NULL, 'sino' ,23), (NULL, 'también' ,23), (NULL, 'y' ,23) ;
/*!40000 ALTER TABLE `opcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opcionUnica`
--

DROP TABLE IF EXISTS `opcionUnica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `opcionUnica` (
  `idOpcionUnica` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idOpcionUnica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opcionUnica`
--

LOCK TABLES `opcionUnica` WRITE;
/*!40000 ALTER TABLE `opcionUnica` DISABLE KEYS */;
/*!40000 ALTER TABLE `opcionUnica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pregunta`
--

DROP TABLE IF EXISTS `pregunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pregunta` (
  `idPregunta` int(11) NOT NULL AUTO_INCREMENT,
  `detalle` varchar(200) NOT NULL,
  `pagina` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idPregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pregunta`
--

LOCK TABLES `pregunta` WRITE;
/*!40000 ALTER TABLE `pregunta` DISABLE KEYS */;
/*!40000 ALTER TABLE `pregunta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntaOpciones`
--

DROP TABLE IF EXISTS `preguntaOpciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `preguntaOpciones` (
  `idPreguntaOpciones` int(11) NOT NULL AUTO_INCREMENT,
  `idPregunta` int(11) NOT NULL,
  `idOpcionUnica` int(11) NOT NULL,
  PRIMARY KEY (`idPreguntaOpciones`),
  KEY `fk_preguntasOpcionales_idPregunta_idx` (`idPregunta`),
  KEY `fk_preguntasOpcionales_idOpcionUnica_idx` (`idOpcionUnica`),
  CONSTRAINT `fk_preguntasOpcionales_idOpcionUnica` FOREIGN KEY (`idOpcionUnica`) REFERENCES `opcionUnica` (`idOpcionUnica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_preguntasOpcionales_idPregunta` FOREIGN KEY (`idPregunta`) REFERENCES `pregunta` (`idPregunta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntaOpciones`
--

LOCK TABLES `preguntaOpciones` WRITE;
/*!40000 ALTER TABLE `preguntaOpciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `preguntaOpciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesional`
--

DROP TABLE IF EXISTS `profesional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profesional` (
  `idProfesional` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idProfesional`),
  KEY `fk_profesional_usuario_idx` (`idUsuario`),
  CONSTRAINT `fk_profesional_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesional`
--

LOCK TABLES `profesional` WRITE;
/*!40000 ALTER TABLE `profesional` DISABLE KEYS */;
INSERT INTO `profesional` VALUES (1,216,2);
/*!40000 ALTER TABLE `profesional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `responsable` (
  `idResponsable` int(11) NOT NULL AUTO_INCREMENT,
  `fechaNacimiento` date NOT NULL,
  `numeroDocumento` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idResponsable`),
  KEY `fk_paciente_usuario1_idx` (`idUsuario`),
  CONSTRAINT `fk_responsable_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsable`
--

LOCK TABLES `responsable` WRITE;
/*!40000 ALTER TABLE `responsable` DISABLE KEYS */;
INSERT INTO `responsable` VALUES (1,'1994-09-07',32456789,1);
/*!40000 ALTER TABLE `responsable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `contrasenaSal` varchar(200) NOT NULL,
  `contrasenaHash` varchar(200) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Jorge','Perez','responsable@cudeco.com','456y45rghtrhfgrhywsetradminfdgfdsgsfgdHash','5c7d50a2d6496eed7aca643aa4b79681e76b9979af0ec08014aef00c790d76bf8fca5a1673ce78a6c76dcf39b53cb883f1f46f97a07ec614d728518e1f272767'),(2,'Silvia','Bermudez','profesional@cudeco.com','456y45rghtrhfgrhywsetrprofesionalfdgfdsgsfgd','f6eb0e8321a786442c0eb35390b9a4bf78c73bfb4b17f1fb5279f2959368fb80390391d86f443c760406e257b9c423a3cedef00b2a928f87aa810251b02f5948');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-01 17:08:21
