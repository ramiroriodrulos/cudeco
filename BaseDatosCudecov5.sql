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
  `seleccionada` tinyint(1) NOT NULL,
  PRIMARY KEY (`idRespuestaSeccionA`),
  KEY `fk_seccion_cuestionario1_idx` (`idCuestionario`),
  KEY `fk_seccionA_opcion1_idx` (`idOpcion`),
  CONSTRAINT `fk_respuestaSeccionA_idCuestionario` FOREIGN KEY (`idCuestionario`) REFERENCES `cuestionario` (`idCuestionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_respuestaSeccionA_idOpcion` FOREIGN KEY (`idOpcion`) REFERENCES `opcion` (`idOpcion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3927 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RespuestaSeccionA`
--

LOCK TABLES `RespuestaSeccionA` WRITE;
/*!40000 ALTER TABLE `RespuestaSeccionA` DISABLE KEYS */;
INSERT INTO `RespuestaSeccionA` VALUES (3323,1,1,1),(3324,1,2,0),(3325,1,3,0),(3326,1,4,0),(3327,1,5,1),(3328,1,6,0),(3329,1,7,0),(3330,1,8,0),(3331,1,9,0),(3332,1,10,0),(3333,1,11,0),(3334,1,12,1),(3335,1,13,0),(3336,1,14,0),(3337,1,15,0),(3338,1,16,0),(3339,1,17,1),(3340,1,18,1),(3341,1,19,0),(3342,1,20,0),(3343,1,21,0),(3344,1,22,0),(3345,1,23,0),(3346,1,24,1),(3347,1,25,0),(3348,1,26,0),(3349,1,27,0),(3350,1,28,1),(3351,1,29,0),(3352,1,30,0),(3353,1,31,0),(3354,1,32,0),(3355,1,33,0),(3356,1,34,0),(3357,1,35,0),(3358,1,36,0),(3359,1,37,0),(3360,1,38,0),(3361,1,39,0),(3362,1,40,0),(3363,1,41,0),(3364,1,42,0),(3365,1,43,0),(3366,1,44,0),(3367,1,45,0),(3368,1,46,0),(3369,1,47,0),(3370,1,48,0),(3371,1,49,0),(3372,1,50,0),(3373,1,51,0),(3374,1,52,0),(3375,1,53,0),(3376,1,54,0),(3377,1,55,0),(3378,1,56,0),(3379,1,57,0),(3380,1,58,0),(3381,1,59,0),(3382,1,60,0),(3383,1,61,0),(3384,1,62,0),(3385,1,63,0),(3386,1,64,0),(3387,1,65,1),(3388,1,66,0),(3389,1,67,0),(3390,1,68,0),(3391,1,69,0),(3392,1,70,1),(3393,1,71,0),(3394,1,72,1),(3395,1,73,0),(3396,1,74,0),(3397,1,75,0),(3398,1,76,0),(3399,1,77,0),(3400,1,78,0),(3401,1,79,0),(3402,1,80,0),(3403,1,81,0),(3404,1,82,0),(3405,1,83,0),(3406,1,84,1),(3407,1,85,0),(3408,1,86,0),(3409,1,87,1),(3410,1,88,0),(3411,1,89,0),(3412,1,90,0),(3413,1,91,0),(3414,1,92,0),(3415,1,93,0),(3416,1,94,0),(3417,1,95,0),(3418,1,96,0),(3419,1,97,0),(3420,1,98,0),(3421,1,99,0),(3422,1,100,0),(3423,1,101,0),(3424,1,102,0),(3425,1,103,0),(3426,1,104,0),(3427,1,105,0),(3428,1,106,0),(3429,1,107,0),(3430,1,108,0),(3431,1,109,0),(3432,1,110,0),(3433,1,111,0),(3434,1,112,0),(3435,1,113,0),(3436,1,114,0),(3437,1,115,0),(3438,1,116,0),(3439,1,117,0),(3440,1,118,0),(3441,1,119,0),(3442,1,120,0),(3443,1,121,0),(3444,1,122,0),(3445,1,123,0),(3446,1,124,0),(3447,1,125,0),(3448,1,126,0),(3449,1,127,0),(3450,1,128,0),(3451,1,129,0),(3452,1,130,0),(3453,1,131,0),(3454,1,132,0),(3455,1,133,0),(3456,1,134,0),(3457,1,135,0),(3458,1,136,0),(3459,1,137,0),(3460,1,138,0),(3461,1,139,0),(3462,1,140,0),(3463,1,141,1),(3464,1,142,0),(3465,1,143,0),(3466,1,144,1),(3467,1,145,0),(3468,1,146,0),(3469,1,147,0),(3470,1,148,0),(3471,1,149,0),(3472,1,150,0),(3473,1,151,0),(3474,1,152,0),(3475,1,153,0),(3476,1,154,0),(3477,1,155,0),(3478,1,156,0),(3479,1,157,0),(3480,1,158,0),(3481,1,159,0),(3482,1,160,0),(3483,1,161,0),(3484,1,162,0),(3485,1,163,0),(3486,1,164,0),(3487,1,165,0),(3488,1,166,0),(3489,1,167,0),(3490,1,168,0),(3491,1,169,0),(3492,1,170,0),(3493,1,171,0),(3494,1,172,0),(3495,1,173,0),(3496,1,174,0),(3497,1,175,0),(3498,1,176,0),(3499,1,177,0),(3500,1,178,0),(3501,1,179,0),(3502,1,180,0),(3503,1,181,0),(3504,1,182,0),(3505,1,183,0),(3506,1,184,0),(3507,1,185,0),(3508,1,186,0),(3509,1,187,0),(3510,1,188,0),(3511,1,189,0),(3512,1,190,0),(3513,1,191,0),(3514,1,192,0),(3515,1,193,0),(3516,1,194,0),(3517,1,195,0),(3518,1,196,0),(3519,1,197,0),(3520,1,198,0),(3521,1,199,0),(3522,1,200,0),(3523,1,201,0),(3524,1,202,0),(3525,1,203,0),(3526,1,204,0),(3527,1,205,0),(3528,1,206,0),(3529,1,207,0),(3530,1,208,0),(3531,1,209,0),(3532,1,210,0),(3533,1,211,0),(3534,1,212,0),(3535,1,213,0),(3536,1,214,0),(3537,1,215,0),(3538,1,216,0),(3539,1,217,0),(3540,1,218,0),(3541,1,219,0),(3542,1,220,0),(3543,1,221,0),(3544,1,222,0),(3545,1,223,0),(3546,1,224,0),(3547,1,225,0),(3548,1,226,0),(3549,1,227,0),(3550,1,228,0),(3551,1,229,0),(3552,1,230,0),(3553,1,231,0),(3554,1,232,0),(3555,1,233,0),(3556,1,234,0),(3557,1,235,0),(3558,1,236,0),(3559,1,237,0),(3560,1,238,0),(3561,1,239,0),(3562,1,240,0),(3563,1,241,0),(3564,1,242,0),(3565,1,243,0),(3566,1,244,0),(3567,1,245,0),(3568,1,246,0),(3569,1,247,0),(3570,1,248,0),(3571,1,249,0),(3572,1,250,0),(3573,1,251,0),(3574,1,252,0),(3575,1,253,0),(3576,1,254,0),(3577,1,255,0),(3578,1,256,0),(3579,1,257,0),(3580,1,258,0),(3581,1,259,1),(3582,1,260,0),(3583,1,261,0),(3584,1,262,1),(3585,1,263,0),(3586,1,264,1),(3587,1,265,0),(3588,1,266,0),(3589,1,267,0),(3590,1,268,0),(3591,1,269,0),(3592,1,270,0),(3593,1,271,0),(3594,1,272,0),(3595,1,273,0),(3596,1,274,0),(3597,1,275,0),(3598,1,276,0),(3599,1,277,0),(3600,1,278,0),(3601,1,279,0),(3602,1,280,0),(3603,1,281,0),(3604,1,282,0),(3605,1,283,0),(3606,1,284,0),(3607,1,285,0),(3608,1,286,1),(3609,1,287,1),(3610,1,288,0),(3611,1,289,1),(3612,1,290,1),(3613,1,291,0),(3614,1,292,0),(3615,1,293,0),(3616,1,294,0),(3617,1,295,0),(3618,1,296,0),(3619,1,297,0),(3620,1,298,0),(3621,1,299,0),(3622,1,300,0),(3623,1,301,0),(3624,1,302,0),(3625,5,1,1),(3626,5,2,1),(3627,5,3,1),(3628,5,4,0),(3629,5,5,1),(3630,5,6,1),(3631,5,7,0),(3632,5,8,0),(3633,5,9,0),(3634,5,10,0),(3635,5,11,0),(3636,5,12,0),(3637,5,13,0),(3638,5,14,0),(3639,5,15,0),(3640,5,16,0),(3641,5,17,1),(3642,5,18,1),(3643,5,19,0),(3644,5,20,0),(3645,5,21,1),(3646,5,22,0),(3647,5,23,0),(3648,5,24,1),(3649,5,25,0),(3650,5,26,0),(3651,5,27,1),(3652,5,28,0),(3653,5,29,0),(3654,5,30,1),(3655,5,31,0),(3656,5,32,0),(3657,5,33,0),(3658,5,34,0),(3659,5,35,0),(3660,5,36,0),(3661,5,37,0),(3662,5,38,0),(3663,5,39,0),(3664,5,40,0),(3665,5,41,0),(3666,5,42,0),(3667,5,43,0),(3668,5,44,0),(3669,5,45,0),(3670,5,46,0),(3671,5,47,0),(3672,5,48,0),(3673,5,49,0),(3674,5,50,0),(3675,5,51,0),(3676,5,52,0),(3677,5,53,0),(3678,5,54,0),(3679,5,55,0),(3680,5,56,0),(3681,5,57,0),(3682,5,58,0),(3683,5,59,0),(3684,5,60,0),(3685,5,61,0),(3686,5,62,0),(3687,5,63,0),(3688,5,64,0),(3689,5,65,0),(3690,5,66,0),(3691,5,67,0),(3692,5,68,0),(3693,5,69,0),(3694,5,70,0),(3695,5,71,0),(3696,5,72,0),(3697,5,73,0),(3698,5,74,0),(3699,5,75,0),(3700,5,76,0),(3701,5,77,0),(3702,5,78,0),(3703,5,79,0),(3704,5,80,0),(3705,5,81,0),(3706,5,82,0),(3707,5,83,0),(3708,5,84,0),(3709,5,85,0),(3710,5,86,0),(3711,5,87,0),(3712,5,88,0),(3713,5,89,0),(3714,5,90,0),(3715,5,91,0),(3716,5,92,0),(3717,5,93,0),(3718,5,94,0),(3719,5,95,0),(3720,5,96,0),(3721,5,97,0),(3722,5,98,0),(3723,5,99,0),(3724,5,100,0),(3725,5,101,0),(3726,5,102,0),(3727,5,103,0),(3728,5,104,0),(3729,5,105,0),(3730,5,106,0),(3731,5,107,0),(3732,5,108,0),(3733,5,109,0),(3734,5,110,0),(3735,5,111,0),(3736,5,112,0),(3737,5,113,0),(3738,5,114,0),(3739,5,115,0),(3740,5,116,0),(3741,5,117,0),(3742,5,118,0),(3743,5,119,0),(3744,5,120,0),(3745,5,121,0),(3746,5,122,0),(3747,5,123,0),(3748,5,124,0),(3749,5,125,0),(3750,5,126,0),(3751,5,127,0),(3752,5,128,0),(3753,5,129,0),(3754,5,130,0),(3755,5,131,0),(3756,5,132,0),(3757,5,133,0),(3758,5,134,0),(3759,5,135,0),(3760,5,136,0),(3761,5,137,0),(3762,5,138,0),(3763,5,139,0),(3764,5,140,0),(3765,5,141,0),(3766,5,142,0),(3767,5,143,0),(3768,5,144,0),(3769,5,145,0),(3770,5,146,0),(3771,5,147,0),(3772,5,148,0),(3773,5,149,0),(3774,5,150,0),(3775,5,151,0),(3776,5,152,0),(3777,5,153,0),(3778,5,154,0),(3779,5,155,0),(3780,5,156,0),(3781,5,157,0),(3782,5,158,0),(3783,5,159,0),(3784,5,160,0),(3785,5,161,0),(3786,5,162,0),(3787,5,163,0),(3788,5,164,0),(3789,5,165,0),(3790,5,166,0),(3791,5,167,0),(3792,5,168,0),(3793,5,169,0),(3794,5,170,0),(3795,5,171,0),(3796,5,172,0),(3797,5,173,0),(3798,5,174,0),(3799,5,175,0),(3800,5,176,0),(3801,5,177,0),(3802,5,178,0),(3803,5,179,0),(3804,5,180,0),(3805,5,181,0),(3806,5,182,0),(3807,5,183,0),(3808,5,184,0),(3809,5,185,0),(3810,5,186,0),(3811,5,187,0),(3812,5,188,0),(3813,5,189,0),(3814,5,190,0),(3815,5,191,0),(3816,5,192,0),(3817,5,193,0),(3818,5,194,0),(3819,5,195,0),(3820,5,196,0),(3821,5,197,0),(3822,5,198,0),(3823,5,199,1),(3824,5,200,1),(3825,5,201,0),(3826,5,202,1),(3827,5,203,0),(3828,5,204,0),(3829,5,205,0),(3830,5,206,0),(3831,5,207,0),(3832,5,208,0),(3833,5,209,0),(3834,5,210,0),(3835,5,211,0),(3836,5,212,0),(3837,5,213,0),(3838,5,214,0),(3839,5,215,0),(3840,5,216,0),(3841,5,217,0),(3842,5,218,0),(3843,5,219,0),(3844,5,220,0),(3845,5,221,0),(3846,5,222,0),(3847,5,223,0),(3848,5,224,0),(3849,5,225,0),(3850,5,226,0),(3851,5,227,0),(3852,5,228,0),(3853,5,229,0),(3854,5,230,0),(3855,5,231,0),(3856,5,232,0),(3857,5,233,0),(3858,5,234,0),(3859,5,235,0),(3860,5,236,0),(3861,5,237,0),(3862,5,238,0),(3863,5,239,0),(3864,5,240,0),(3865,5,241,0),(3866,5,242,0),(3867,5,243,0),(3868,5,244,0),(3869,5,245,0),(3870,5,246,0),(3871,5,247,0),(3872,5,248,0),(3873,5,249,0),(3874,5,250,0),(3875,5,251,0),(3876,5,252,0),(3877,5,253,0),(3878,5,254,0),(3879,5,255,0),(3880,5,256,0),(3881,5,257,0),(3882,5,258,0),(3883,5,259,0),(3884,5,260,0),(3885,5,261,0),(3886,5,262,0),(3887,5,263,0),(3888,5,264,0),(3889,5,265,0),(3890,5,266,0),(3891,5,267,0),(3892,5,268,0),(3893,5,269,0),(3894,5,270,0),(3895,5,271,0),(3896,5,272,0),(3897,5,273,0),(3898,5,274,0),(3899,5,275,0),(3900,5,276,0),(3901,5,277,0),(3902,5,278,0),(3903,5,279,0),(3904,5,280,0),(3905,5,281,0),(3906,5,282,0),(3907,5,283,0),(3908,5,284,0),(3909,5,285,0),(3910,5,286,0),(3911,5,287,0),(3912,5,288,0),(3913,5,289,0),(3914,5,290,0),(3915,5,291,0),(3916,5,292,0),(3917,5,293,0),(3918,5,294,0),(3919,5,295,0),(3920,5,296,0),(3921,5,297,0),(3922,5,298,0),(3923,5,299,0),(3924,5,300,0),(3925,5,301,0),(3926,5,302,0);
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
INSERT INTO `categoria` VALUES (1,'Sonidos de cosas y animales',1),(2,'Animales de verdad y de juguete',2),(3,'Vehículos de verdad y de juguete',3),(4,'Alimentos y bebidas',3),(5,'Partes del cuerpo',3),(6,'Juguetes',4),(7,'Utensilios de la casa',4),(8,'Muebles y cuartos',4),(9,'Objetos fuera de la casa',5),(10,'Lugares fuera de la casa',5),(11,'Personas',5),(12,'Rutinas, reglas sociales y juegos',6),(13,'Acciones y procesos (verbos)',6),(14,'Estados',6),(15,'Cualidades y atributos',7),(16,'Palabras sobre el tiempo',7),(17,'Pronombres y modificadores',7),(18,'Preguntas',8),(19,'Preposiciones y artículos',8),(20,'Cuantificadores y adverbios',8),(21,'Locativos',9),(22,'Conectivos',9);
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
  `idHijo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCuestionario`),
  KEY `fk_cuestionario_padre1_idx` (`idResponsable`),
  KEY `fk_cuestionario_profesional1_idx` (`idProfesional`),
  KEY `fk_cuestionario_hijo1_idx` (`idHijo`),
  CONSTRAINT `fk_cuestionario_idHijo` FOREIGN KEY (`idHijo`) REFERENCES `hijo` (`idhijo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cuestionario_idProfesional` FOREIGN KEY (`idProfesional`) REFERENCES `profesional` (`idProfesional`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cuestionario_idResponsable` FOREIGN KEY (`idResponsable`) REFERENCES `responsable` (`idResponsable`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuestionario`
--

LOCK TABLES `cuestionario` WRITE;
/*!40000 ALTER TABLE `cuestionario` DISABLE KEYS */;
INSERT INTO `cuestionario` VALUES (1,1,1,'2023-09-28','2023-10-21',7),(3,5,1,'2023-10-21',NULL,NULL),(5,6,1,'2023-10-21','2023-10-21',8);
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
  `dni` int(11) DEFAULT NULL,
  PRIMARY KEY (`idhijo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hijo`
--

LOCK TABLES `hijo` WRITE;
/*!40000 ALTER TABLE `hijo` DISABLE KEYS */;
INSERT INTO `hijo` VALUES (1,'2020-09-14','36','Tomas',60456789),(2,'2023-08-01','1','Pedro',60456799),(3,'2000-01-28','284','Juan',60556789),(5,'2023-09-01','1','Fernando',603562213),(6,'2023-03-28','6','Manuel',60435678),(7,'2023-01-28','8','Manuel',60435678),(8,'2023-01-28','8','Tomas',452254632);
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
) ENGINE=InnoDB AUTO_INCREMENT=303 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opcion`
--

LOCK TABLES `opcion` WRITE;
/*!40000 ALTER TABLE `opcion` DISABLE KEYS */;
INSERT INTO `opcion` VALUES (1,'¡am!',1),(2,'cua-cuá',1),(3,'muu',1),(4,'qui-qui-ri-quí',1),(5,'¡ay!',1),(6,'guau-guau/ba-bau',1),(7,'pio-pío',1),(8,'rum-rum (coche)',1),(9,'bee/mee',1),(10,'miau',1),(11,'¡pum!',1),(12,'tu-tú',1),(13,'abeja',2),(14,'animal',2),(15,'araña',2),(16,'ardilla',2),(17,'ballena',2),(18,'bicho',2),(19,'burro',2),(20,'caballo',2),(21,'cebra',2),(22,'chancho',2),(23,'ciervo/bambi',2),(24,'cocodrilo',2),(25,'conejo',2),(26,'cucaracha',2),(27,'elefante',2),(28,'foca',2),(29,'gallina',2),(30,'gato',2),(31,'gusano',2),(32,'hipopótamo',2),(33,'hormiga',2),(34,'jirafa',2),(35,'lechuza',2),(36,'león',2),(37,'lobo',2),(38,'mariposa',2),(39,'mono',2),(40,'mosca',2),(41,'mosquito',2),(42,'oso',2),(43,'oveja',2),(44,'pájaro',2),(45,'pato',2),(46,'pavo',2),(47,'perro',2),(48,'pescado/pez',2),(49,'pingüino',2),(50,'pollito',2),(51,'rana',2),(52,'ratón/rata',2),(53,'sapo',2),(54,'tigre',2),(55,'tortuga',2),(56,'vaca',2),(57,'víbora',2),(58,'ambulancia',3),(59,'auto',3),(60,'auto de policía',3),(61,'avión',3),(62,'barco',3),(63,'bicicleta/bici',3),(64,'camión',3),(65,'camión de bomberos',3),(66,'cochecito de bebé',3),(67,'helicóptero',3),(68,'micro/colectivo',3),(69,'moto',3),(70,'tractor',3),(71,'tren',3),(72,'triciclo',3),(73,'taxi',3),(74,'aceituna',4),(75,'agua',4),(76,'alfajor',4),(77,'arroz',4),(78,'atún',4),(79,'azúcar',4),(80,'banana',4),(81,'café',4),(82,'calabaza',4),(83,'caramelo',4),(84,'carne',4),(85,'cereales',4),(86,'chicle',4),(87,'choclo',4),(88,'chocolatada',4),(89,'chocolate',4),(90,'chupetín',4),(91,'coca',4),(92,'comida/papa',4),(93,'dulce',4),(94,'durazno',4),(95,'empanada',4),(96,'fideos',4),(97,'frutilla',4),(98,'galletita',4),(99,'gelatina',4),(100,'hamburguesa/Paty',4),(101,'helado',4),(102,'hielo',4),(103,'huevo',4),(104,'jamón',4),(105,'jugo',4),(106,'leche',4),(107,'lentejas',4),(108,'licuado',4),(109,'limonada',4),(110,'maní',4),(111,'manteca',4),(112,'manzana',4),(113,'mate',4),(114,'melón',4),(115,'mermelada',4),(116,'milanesa',4),(117,'naranja',4),(118,'pan',4),(119,'papas fritas',4),(120,'anteojos/lentes',5),(121,'aros',5),(122,'babero',5),(123,'bombacha',5),(124,'botas',5),(125,'botón',5),(126,'bufanda',5),(127,'buzo',5),(128,'calzoncillo',5),(129,'barba',6),(130,'camisa',6),(131,'campera',6),(132,'cartera',6),(133,'cierre',6),(134,'collar',6),(135,'gorra/gorro',6),(136,'guantes',6),(137,'hebilla (de pelo)/gomita',6),(138,'malla',6),(139,'birome/lapicera',7),(140,'bolitas',7),(141,'burbujas',7),(142,'crayones',7),(143,'cubos',7),(144,'fibras',7),(145,'globo',7),(146,'hoja/papel',7),(147,'juguete/chiche(s)',7),(148,'lápiz',7),(149,'alfombra',8),(150,'almohada',8),(151,'balde',8),(152,'basura',8),(153,'bolsa/bolsita',8),(154,'botella',8),(155,'caja',8),(156,'cámara',8),(157,'canasta',8),(158,'celular/celu',8),(159,'banco',9),(160,'bañadera',9),(161,'baño',9),(162,'biblioteca',9),(163,'cajón',9),(164,'cama',9),(165,'cochera/garage',9),(166,'cocina',9),(167,'computadora/compu',9),(168,'cuna',9),(169,'árbol',10),(170,'arena',10),(171,'bandera',10),(172,'cielo',10),(173,'cucha',10),(174,'estrella',10),(175,'flor',10),(176,'fuego',10),(177,'hamaca',10),(178,'hojas',10),(179,'banco',11),(180,'cerro/montaña',11),(181,'iglesia/templo',11),(182,'río',11),(183,'bosque',11),(184,'calesita',11),(185,'calle',11),(186,'campo',11),(187,'casa',11),(188,'abuela*',12),(189,'abuelo*',12),(190,'amiga*',12),(191,'amigo*',12),(192,'bebé',12),(193,'doctor',12),(194,'familia',12),(195,'circo',12),(196,'cumpleaños/cumple',12),(197,'escuela/cole',12),(198,'a ver…',13),(199,'a pasear',13),(200,'adiós-chau',13),(201,'ahí voy',13),(202,'al agua patos…',13),(203,'arriba las manos',13),(204,'basta',13),(205,'besitos',13),(206,'bravo',13),(207,'buenas noches',13),(208,'abrir',14),(209,'acabar',14),(210,'acompañar',14),(211,'acostar(se)',14),(212,'agarrar',14),(213,'almorzar',14),(214,'andar',14),(215,'apagar',14),(216,'apurar(se)',14),(217,'arreglar(se)',14),(218,'estar',15),(219,'entrar',15),(220,'equivocar(se)',15),(221,'esconder(se)',15),(222,'escribir',15),(223,'escuchar',15),(224,'esperar',15),(225,'ganar',15),(226,'gritar',15),(227,'guardar',15),(228,'alto',16),(229,'feliz',16),(230,'amarillo',16),(231,'feo',16),(232,'asco/asqueroso',16),(233,'frío',16),(234,'azul',16),(235,'fuerte',16),(236,'blanco',16),(237,'gordo',16),(238,'a la mañana',17),(239,'ahora',17),(240,'después',17),(241,'mañana',17),(242,'a la noche',17),(243,'años',17),(244,'día',17),(245,'noche',17),(246,'a la tarde',17),(247,'ayer',17),(248,'aquel',18),(249,'eso',18),(250,'aquellos',18),(251,'esos',18),(252,'aquella',18),(253,'esta',18),(254,'aquellas',18),(255,'estas',18),(256,'él',18),(257,'este',18),(258,'cómo',19),(259,'cuándo',19),(260,'cuál',19),(261,'dónde',19),(262,'por qué',19),(263,'quién',19),(264,'qué',19),(265,'a/al',20),(266,'en',20),(267,'con',20),(268,'entre',20),(269,'de/del',20),(270,'la',20),(271,'el',20),(272,'las',20),(273,'los',20),(274,'una',20),(275,'así',21),(276,'más',21),(277,'bien',21),(278,'mucho',21),(279,'despacio',21),(280,'nada',21),(281,'mal',21),(282,'no',21),(283,'sí (afirmación)',21),(284,'todavía',21),(285,'abajo',22),(286,'afuera',22),(287,'acá',22),(288,'ahí',22),(289,'adelante',22),(290,'al lado',22),(291,'adentro',22),(292,'allá',22),(293,'no hay',22),(294,'otro/otra vez',22),(295,'entonces',23),(296,'porque',23),(297,'o',23),(298,'que',23),(299,'si (te portás bien)',23),(300,'sino',23),(301,'también',23),(302,'y',23);
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
INSERT INTO `opcionUnica` VALUES (1,'todavía no',1),(2,'de vez en cuando',1),(3,'muchas veces',1);
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
 INSERT INTO `pregunta` VALUES (1,'¿Tu hijo(a) habla de situaciones del pasado? Por ejemplo,si unos días antes fueron al circo y vieron a un payaso, ¿lo menciona después?',1),(2,'¿Tu hijo(a) habla sobre objetos o personas que no están presentes? Por ejemplo ¿pide un juguete o una comida preferida,o pregunta por una persona cuando no la puede ver?',1),(3,'¿Tu hijo(a) habla de cosas que van a pasar en el futuro? Por ejemplo, al ponerse el abrigo, ¿dice que va a ir a las hamacas o le dice a otra persona que va a ver a su abuelita?',1),(4,'Tu hijo(a) entiende cuando le piden que traiga algo de otro lugar? Por ejemplo, si le preguntan , "¿dónde está tu pelota?" ¿él (la) niño(a) va a buscarla al lugar dónde está?',1),(5,'¿Al señalar o agarrar un objeto, tu hijo(a) dice el nombre de la persona a la que pertenece ese objeto aunque esa persona no esté presente? Por ejemplo, ¿encuentra los anteojos de su papá y dice "papá"?',1);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsable`
--

LOCK TABLES `responsable` WRITE;
/*!40000 ALTER TABLE `responsable` DISABLE KEYS */;
INSERT INTO `responsable` VALUES (1,'1994-09-07',32456789,1),(5,'1990-06-27',3233221,15),(6,'1990-03-23',34563311,16),(7,'1980-08-22',324249291,17),(8,'1978-04-21',42543678,18);
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
  `contrasenaEncriptada` varchar(200) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Jorge','Perez','responsable@cudeco.com','c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec'),(2,'Silvia','Bermudez','profesional@cudeco.com','80558d630ce9ade4b9643572901da5d5ba90020a52cbba2feefaa18c98157897c7721f8bf5e7dced4fa79cc8a885760aad16f5bacb44b875f5b9e15f8aca9073'),(15,'Tamara','Molina','coco@s.com','1a90111e3ba39181fd086900bfb98b9155dcef84cebcfbee822ab72620ec44d10345a6c6cccef2e78a2409e2f1e9b166857c5b2a1bd7fe3cb33600023589121a'),(16,'Tomas','Olivares','prueba@cudeco.com','1a90111e3ba39181fd086900bfb98b9155dcef84cebcfbee822ab72620ec44d10345a6c6cccef2e78a2409e2f1e9b166857c5b2a1bd7fe3cb33600023589121a'),(17,'Pablo','Ferrero','re@cudeo.com','e54ee7e285fbb0275279143abc4c554e5314e7b417ecac83a5984a964facbaad68866a2841c3e83ddf125a2985566261c4014f9f960ec60253aebcda9513a9b4'),(18,'Florencia','Corredo','fcorredo@gmail.com','8713baeac5e37fa400d68f7d3212ece5547f05458946e1c666001cf45d9fcfd859f9b7a89388b8361f09dc436e9ac0b74f5ed1fee2ee9e6ef51993d51f21a681');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;


/* ZONA DE INSERT PARA LA SECCION 2 DEL CUASTIONARIO PARA PARA INCIISO A , B Y C */
/*LAS TABLAS LAS VOY A DENOMINAR EN PRINCIPO CON S PARA IDENTIFICAR SECCION , LETRA PARA INCISO Y LETRA P DE SER PREGUNTA O UNA O SI ES OPCION*/
/*CAMBIAR NOMBRE A TABALA SI ES NECESARIO */

/* Comenzamos con  inciso A de parte 2 del cuestionario */

LOCK TABLES `opcion2` WRITE;
/*!40000 ALTER TABLE `opcion2` DISABLE KEYS */;
 INSERT INTO `opcion2` VALUES  (1, 'termino', 0), (2, 'terminás', 0), (3, 'termina', 0), (4, 'terminamos', 0), (5, 'a comer', 0), (6, 'como', 0), (7, 'comés', 0), (8, 'come', 9, 'comemos', 0), (10, 'arriba', 0), (11, 'subo', 0), (12, 'subís', 0), (13, 'sube', 0), (14, 'subimos', 0), (15, 'terminé', 0), (16, 'terminó', 0), (17, 'comí', 0), (18, 'comió', 0), (19, 'subí', 0), (20, 'subió', 0), (21, 'terminá (la leche)', 0), (22, 'comé (la carne)', 0), (23, 'subí', 0), (24, 'Nene quiere', 1), (25, 'Quiero chupetín.', 1), (26, 'Tuyo esto', 2), (27, 'Este es tuyo', 2), (28, 'Nene malo', 3), (29, 'Soy malo', 3), (31, 'Quiero uvas', 4), (32, 'Agua vamos', 5), (33, 'Vamos al agua', 5), (34, 'A silla', 6), (35, 'En la silla', 6), (36, 'Pollo no', 7), (37, 'No quiero pollo', 7), (38, 'Llorando María', 8), (39, 'María esta llorando', 8), (40, 'Mío lápiz', 9), (41, 'Este es mi lápiz', 9), (42, 'Más leche', 10), (43, 'Dame más leche', 10), (44, 'Papo mami', 11), (45, 'El zapato es de mami', 11), (46, 'No acá', 12), (47, 'Ese no está acá', 12), (48, 'Rompió globo', 13), (49, 'Se rompió el globo', 13), (50, 'Leche quema', 14), (51, 'La leche está caliente', 14), (52, 'Duele panza', 15), (53, 'Me duele la panza', 15), (54, 'Guau-guau grande', 16), (55, 'Tengo un perro grande', 16), (56, 'Calle allá está', 17), (57, 'Allá está la calle', 17), (58. 'Puse a mano', 18), (59, 'Lo puse en mi mano', 18), (60, 'Acabó agua', 19), (61, 'Se me acabó el agua', 19), (62, 'Fue casa', 20), (63, 'Se fue a casa', 20), (64, 'Silla subir', 21), (65, 'Me quiero subir a la silla', 21), (67, 'María papá', 22), (68, 'Quiero ir con papá', 22), (70, 'Dije bravo en el circo', 23), (71, 'Papá calle', 24), (72, 'Papá se fue a trabajar', 24), (73, 'Ya puse', 25), (74, 'Ya se lo puse', 25), (75, 'Manu osito coche', 26), (76, 'Manu dejó el osito en el coche', 26), (77, 'Lápiz dibujar', 27), (78, 'Dibujo con el lápiz', 27), (79, 'Ya pinté', 28), (80, 'Ya terminé de pintar', 28), (81, 'Nene rompió bici Dani', 29), (82, 'El nene rompió la bici de Dani', 29), (83, 'Pone no', 30), (84, 'No lo pongas', 30), (85, 'Vamos comer papas carne', 31), (86, 'Vamos a comer papas y carne', 31), (87, 'Nene llora cayó', 32), (88, 'El nene llora porque se cayó', 32), (89, 'Mamá nene compra', 33), (91, 'Abrí dame galletita', 34), (92, 'Abrí la caja y dame una galletita', 34), (93, 'No toca, quemás', 35), (94, 'No lo toqués porque te quemás', 35), (95, 'Quiero libro papá', 36), (96, 'Quiero el libro que compró papá', 36), (97, 'Pongo agua flores', 37), (98, 'Pongo agua para que crezcan las flores', 37);
/*!40000 ALTER TABLE `pregunta` ENABLE KEYS */;
UNLOCK TABLES;




/* Continuamos con  inciso B de parte 2 del cuestionario */;

LOCK TABLES `tablaS2IBP` WRITE;
/*!40000 ALTER TABLE `tablaS2IBP` DISABLE KEYS */;   
 INSERT INTO `tablaS2IBP` VALUES (1,'¿Tu hijo(a ) y a empezó a combinar palabras, como "papá coche" o "más agua " ? (Marcá sólo una opción)',1);
/*!40000 ALTER TABLE `pregunta` ENABLE KEYS */;
UNLOCK TABLES;


LOCK TABLES `opcionUnica2` WRITE;
/*!40000 ALTER TABLE `opcionUnica` DISABLE KEYS */;
INSERT INTO `opcionUnica` VALUES (1,'todavía no',1),(2,'de vez en cuando',1),(3,'muchas veces',1);
/*!40000 ALTER TABLE `opcionUnica` ENABLE KEYS */;
UNLOCK TABLES;







/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-31 19:07:45
