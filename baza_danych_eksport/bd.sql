-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: 10.254.94.2    Database: s173152
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.12.04.1-log

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
-- Table structure for table `Actors`
--

DROP TABLE IF EXISTS `Actors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Actors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Id_film` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Actors`
--

LOCK TABLES `Actors` WRITE;
/*!40000 ALTER TABLE `Actors` DISABLE KEYS */;
INSERT INTO `Actors` VALUES (1,'Warren Beatty',1),(2,'Jack Nicholson',1),(3,'Dustin Hoffman',1),(4,'Robert Redford',1),(5,'Jamie Foxx',2),(6,'Christoph Waltz',2),(7,'Leonardo Di Caprio',2),(8,'Kerry Washington',2),(9,'Leonardo Di Caprio',3),(10,'Joseph Gordon-Levitt',3),(11,'Ellen Page',3),(12,'Tom Hardy',3),(13,'Matthew Broderick',4),(14,'Moira Kelly',4),(15,'James Earl Jones',4),(16,'Jeremy Irons',4),(17,'Jean Reno',5),(18,'Gary Oldman',5),(19,'Natalie Portman',5),(20,'Danny Aiello',5),(21,'Mel Gibson',6),(22,'James Robinson',6),(23,'Sean Lawlor',6),(24,'Sandy Nelson',6),(25,'Tom Hanks',7),(26,'Tom Sizemore',7),(27,'Edward Burns',7),(28,'Barry Pepper',7),(29,'Cezary Pazura',8),(30,'Małgorzata Kożuchowska',8),(31,'Jerzy Stuhr',8),(32,'Katarzyna Figura',8),(33,'Maciej Stuhr',9),(34,'Karolina Rosińska',9),(35,'Michał Milowicz',9),(36,'Tadeusz Huk',9),(37,'Brad Pitt',10),(38,'Mélanie Laurent',10),(39,'Christoph Waltz',10),(40,'Eli Roth',10),(41,'Denzel Washington',11),(42,'Robert Duvall',11),(43,'Anne Heche',11),(44,'Ray Liotta',11),(45,'Bruce Willis',12),(46,'Gary Oldman',12),(47,'Ian Holm',12),(48,'Milla Jovovich',12),(49,'Natalie Portman',13),(50,'Hugo Weaving',13),(51,'Stephen Rea',13),(52,'John Hurt',13),(53,'Irene Bedard',14),(54,'David Ogden Stiers',14),(55,'Russell Means',14),(56,'Linda Hunt',14),(57,'Jolanta Fraszyńska',16),(58,'Katarzyna Pysiak',16),(59,'Gedde Watanabe',16),(60,'Pat Morita',16),(61,'Russel Crowe',15),(62,'Joaquin Phoenix',15),(63,'Connie Nielsen',15),(64,'Bogusław Linda',17),(65,'Marek Kondrat',17),(66,'Cezary Pazura',17),(67,'Janusz Gajos',17),(68,'Liya Kebede',18),(69,'Sally Hawkins',18),(70,'Craig Parkinson',18),(71,'Meera Syal',18),(72,'Sean Connery',19),(73,'Alec Baldwin',19),(74,'Scott Glenn',19),(75,'Sam Neill',19),(76,'Tom Cruise',20),(77,'Ken Watanabe',20),(78,'Timothy Spall',20),(79,'Billy Connolly',20),(80,'Tom Cruise',21),(81,'Colin Farrell',21),(82,'Samantha Morton',21),(83,'Max von Sydow',21),(84,'Colin Farrell',22),(85,'Kate Beckinsale',22),(86,'Jessica Biel',22),(87,'Bryan Cranston',22);
/*!40000 ALTER TABLE `Actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Comment`
--

DROP TABLE IF EXISTS `Comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comment`
--

LOCK TABLES `Comment` WRITE;
/*!40000 ALTER TABLE `Comment` DISABLE KEYS */;
INSERT INTO `Comment` VALUES (1,'A Foo Bar','10'),(2,'$title','$text'),(3,'test1','test2'),(4,'test2','test2');
/*!40000 ALTER TABLE `Comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Genres`
--

DROP TABLE IF EXISTS `Genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Id_film` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Genres`
--

LOCK TABLES `Genres` WRITE;
/*!40000 ALTER TABLE `Genres` DISABLE KEYS */;
INSERT INTO `Genres` VALUES (1,'gangsterski',1),(2,'dramat',2),(3,'dramat',3),(4,'animacja',4),(5,'dramat',5),(6,'historyczny',6),(7,'wojenny',7),(8,'sensacyjny',8),(9,'komedia',9),(10,'wojenny',10),(11,'dramat',11),(12,'sci-fi',12),(13,'sci-fi',13),(14,'animacja',14),(15,'dramat',15),(16,'animacja',16),(17,'sensacyjny',17),(18,'dramat',18),(19,'sensacyjny',19),(20,'historyczny',20),(21,'sci-fi',21),(22,'sci-fi',22),(23,'dramat',1);
/*!40000 ALTER TABLE `Genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Movies`
--

DROP TABLE IF EXISTS `Movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Movies`
--

LOCK TABLES `Movies` WRITE;
/*!40000 ALTER TABLE `Movies` DISABLE KEYS */;
INSERT INTO `Movies` VALUES (1,'Ojciec chrzestny','Opowieść o nowojorskiej rodzinie mafijnej. Starzejący się Don Corleone pragnie przekazać władzę swojemu synowi.','1000zł','ojciecchrzestny'),(2,'Django','Łowca nagród Schultz i czarnoskóry niewolnik Django wyruszają w podróż, aby odbić żonę tego drugiego z rąk bezlitosnego Calvina Candie\'ego.','1000zł','django'),(3,'Incepcja','Czasy, gdy technologia pozwala na wchodzenie w świat snów. Złodziej Cobb ma za zadanie wszczepić myśl do śpiącego umysłu.','100zł','incepcja'),(4,'Król Lew','Targany niesłusznymi wyrzutami sumienia po śmierci ojca mały lew Simba skazuje się na wygnanie rezygnując z przynależnego mu miejsca na czele stada.','120zł','krollew'),(5,'Leon zawodowiec','Płatny morderca ratuje dwunastoletnią dziewczynkę, której rodzina została zabita przez skorumpowanych policjantów','200zł','leon'),(6,'Braveheart - Waleczne Serce','W XIII-wiecznej Szkocji William Wallace, po zabójstwie swojej żony, zwołuje rodaków do walki ze znienawidzoną angielską monarchią.','300zł','braveheart'),(7,'Szeregowiec Ryan','W poszukiwaniu zaginionego szeregowca wysłany zostaje doborowy oddział żołnierzy.','100zł','ryan'),(8,'Kiler','Jerzy Kiler, warszawski taksówkarz, przypadkowo zostaje wzięty za płatnego zabójcę i umieszczony w areszcie. Wyciągnie go stamtąd boss świata przestępczego, który ma dla niego nowe zadanie.','300zł','kiler'),(9,'Poranek kojota','Kuba poznaje młodą piosenkarkę i jest nią zauroczony. Nie podoba się to ojcu dziewczyny,   jak również jej chłopakowi','400zł','poranekkojota'),(10,'Bękarty wojny','W okupowanej przez nazistów Francji oddział złożony z Amerykanów żydowskiego pochodzenia   planuje zamach na Hitlera.','300zł','bekartywojny'),(11,'John Q','Ubogi mężczyzna, którego syn jest śmiertelnie chory, terroryzuje oddział szpitala, żeby   wymusić przeprowadzenie operacji, jaka może uratować życie jego dziecka.','800zł','johnq'),(12,'Piąty element','Nowy Jork w XXIII w., były komandos Korben Dallas wplątany zostaje w misję ratowania   świata przed siłami zła absolutnego objawiającymi się raz na pięć tysięcy lat.','980zł','piatyelement'),(13,'V jak vendetta','W totalitarnej Anglii jedyną osobą walczącą o wolność jest bojownik przebrany za Guya   Fawkesa – V, który pewnego dnia uwalnia z rąk agentów rządowych młodą kobietę.','550zł','vendetta'),(14,'Pocahontas','Opowieść o miłości młodej Indianki i angielskiego żołnierza, który przybył do Nowego   Świata z wyprawą kolonizatorów.','450zł','pocahontas'),(15,'Gladiator','Generał Maximus - prawa ręka cesarza, szczęśliwy mąż i ojciec - w jednej chwili traci wszystko. Jako niewolnik-gladiator musi walczyć na arenie o przeżycie.','130zł','gladiator'),(16,'Mulan','Aby ratować ojca przed śmiercią na wojnie, Mulan ucieka z domu i przebrana za mężczyznę   szkoli się w armii.','320zł','mulan'),(17,'Psy','Franz Maurer, były funkcjonariusz Służby Bezpieczeństwa, zaczyna pracę w policji.   Tymczasem jego kolega oferuje swoje usługi przestępcom.','300zł','psy'),(18,'Kwiat pustyni','Dziewczyna z somalijskiej pustyni opuszcza rodzinny kraj i nieoczekiwanie dla samej   siebie wkracza do świata mody.','450zł','kwiatpustyni'),(19,'Polowanie na Czerwony Październik','Radziecki atomowy okręt podwodny wypływa w swój pierwszy rejs. Jego dowódca ogłasza, że   zamierza zdezerterować, co nie podoba się władzom ZSRR, które wysyłają za nim pościg.','1200zł','czerwonypazdziernik'),(20,'Ostatni samuraj','Weteran wojny secesyjnej przypływa do Japonii pod koniec 1870 roku, aby szkolić   żołnierzy cesarza Mutsuhito','1500zł','ostatnisamuraj'),(21,'Raport mniejszości','W 2054 roku można przewidzieć przyszłość, a winnych ukarać, zanim popełnią zbrodnię.   Komisarz John Anderton zostaje oskarżony o morderstwo, do którego jeszcze nie doszło.','1050zł','raportmniejszosci'),(22,'Pamięć absolutna','W niedalekiej przyszłości pewien pracownik fabryki odkrywa, że w istocie jest tajnym   szpiegiem pracującym dla jednego z mocarstw walczących o światową dominację.','1450zł','pamiecabsolutna');
/*!40000 ALTER TABLE `Movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Orders`
--

DROP TABLE IF EXISTS `Orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Term` date NOT NULL,
  `Form` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Conditions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Id_film` int(11) NOT NULL,
  `Id_client` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Orders`
--

LOCK TABLES `Orders` WRITE;
/*!40000 ALTER TABLE `Orders` DISABLE KEYS */;
INSERT INTO `Orders` VALUES (1,'Zapłacone','2015-02-13','Gotówka','całość na miejscu',1,1),(5,'Oczekiwanie na płatność','2010-01-01','Karta kredytowa','Dostawa do domu',1,1),(6,'Oczekiwanie na płatność','2013-01-01','Karta kredytowa','Dostawa do domu',1,3),(7,'Oczekiwanie na płatność','2010-01-01','Gotówka','Odbiór w wypożyczalni',2,3),(8,'Zapłacone','2015-05-07','Gotówka','Dostawa do domu',8,3),(9,'Zapłacone','2015-05-07','Gotówka','Dostawa do domu',3,3),(10,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',7,3),(11,'Oczekiwanie na płatność','2010-01-01','Gotówka','Dostawa do domu',4,4),(12,'Oczekiwanie na płatność','2010-01-01','Karta kredytowa','Dostawa do domu',3,3),(13,'Oczekiwanie na płatność','2010-01-01','Karta kredytowa','Dostawa do domu',3,3),(14,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(15,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(16,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(17,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(18,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(19,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(20,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(21,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(22,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(23,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(24,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(25,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(26,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(27,'Oczekiwanie na płatność','2015-01-01','Gotówka','Dostawa do domu',3,3),(28,'Oczekiwanie na płatność','2010-01-01','Gotówka','Dostawa do domu',4,3),(29,'Oczekiwanie na płatność','2011-01-03','Karta kredytowa','Odbiór w wypożyczalni',4,1),(30,'Oczekiwanie na płatność','2010-01-01','Karta kredytowa','Dostawa do domu',9,3),(31,'Oczekiwanie na płatność','2010-01-01','Karta kredytowa','Dostawa do domu',19,4),(32,'Oczekiwanie na płatność','2010-01-01','Karta kredytowa','Dostawa do domu',19,3),(33,'Oczekiwanie na płatność','2010-01-01','Karta kredytowa','Odbiór w wypożyczalni',19,1),(34,'Oczekiwanie na płatność','2010-01-01','Karta kredytowa','Odbiór w wypożyczalni',19,2),(35,'Oczekiwanie na płatność','2010-01-01','Karta kredytowa','Odbiór w wypożyczalni',19,3),(36,'Oczekiwanie na płatność','2010-01-01','Karta kredytowa','Dostawa do domu',3,3),(37,'Oczekiwanie na płatność','2010-01-01','Karta kredytowa','Dostawa do domu',3,3),(38,'Oczekiwanie na płatność','2010-01-01','Gotówka','Dostawa do domu',7,2),(39,'Oczekiwanie na płatność','2010-01-01','Gotówka','Dostawa do domu',7,2);
/*!40000 ALTER TABLE `Orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Review`
--

DROP TABLE IF EXISTS `Review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_film` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Review`
--

LOCK TABLES `Review` WRITE;
/*!40000 ALTER TABLE `Review` DISABLE KEYS */;
INSERT INTO `Review` VALUES (1,1,'Super film!','super super'),(3,1,'Genialny film!','genialny film'),(4,2,'nudny film','nudny'),(5,1,'monotonny film','monotonny'),(6,3,'spam1','spam1'),(7,3,'spam2','spam2'),(8,10,'drastyczny','drastyczny'),(9,10,'bardzo drastyczny','bardzo drastyczny'),(10,1,'najlepszy film','najlepszy film jaki w zyciu ogladalem'),(35,10,'drastyczny','bardzo drastyczny'),(36,1,'lubie ten film','lubie ten film'),(37,1,'lubie ten film','lubie ten film'),(38,1,'lubie ten film','lubie ten film'),(39,1,'lubie ten film','lubie ten film'),(40,1,'lubie ten film','lubie ten film'),(41,2,'lol','lol'),(42,2,'superowy','superowy'),(43,1,'superowy','superowy'),(44,1,'drastyczny','superowy'),(45,1,'Genialny film!','superowy'),(46,1,'superowy','superowy'),(47,1,'superowy','superowy'),(48,1,'superowy','superowy'),(49,1,'superowy','superowy'),(50,1,'superowy','superowy'),(51,1,'Genialny film!','genialny film'),(52,1,'superowy','superowy'),(53,1,'superowy','superowy'),(54,1,'superowy','superowy'),(55,1,'superowy','superowy'),(56,2,'superowy','superowy'),(57,2,'superowy','superowy'),(58,3,'Genialny film!','genialny film'),(59,7,'dwq','dwq'),(60,3,'superowy','superowy'),(61,1,'w','w'),(62,7,'super','super');
/*!40000 ALTER TABLE `Review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (1,'test','test','test@test.pl','test@test.pl',1,'qqgftz946nko8kog40cw0c40okcookk','F2MuVWJESauYDlknhrdF8KdaxLHrGeErKu2ETqa36LFrZ7SGF58xxX0tylNiAccXu0xVfrNb08mMYOk9+fZebQ==','2015-02-25 11:27:55',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL),(2,'serikus','serikus','serikus@serikus.pl','serikus@serikus.pl',1,'208pu9vkdc80g84goggcs40s8s04wwg','+vQmM370jS715ffSUXH6iONMr6A8HcElGT1ROqk57TTbCf4C/UvNMiGT6oaVa0OedXCzl1VEpYF7Zqlo4mIy4w==','2015-02-02 23:36:07',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL),(3,'czarek','czarek','czarek19937@gmail.com','czarek19937@gmail.com',1,'ev0jtbzx6ps0ckssskcss0w0w440k0s','96LkVqrociaCrFus6IpYcf274APZ71dk2A6pTZIzWEBMYOEkZ7TiC8qEXK+Xq7oz7YWMjX2zeHA47QdPQbGzKw==','2015-03-07 22:19:24',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL),(4,'AlaMakota','alamakota','ala@makota.pl','ala@makota.pl',1,'jkbo3x5ald4o84cs8go0ckoco48cggo','IurVn/95lh2FEOz65DQwZ6RVnrvSGhb4QQpDddAlyJwurkFGmiZLUbDwWkyUDdPqPcWhTeaJ1tKkaqHBD0bgKQ==','2015-02-26 14:31:06',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL),(5,'Radzio','radzio','rad.nocon@gmail.com','rad.nocon@gmail.com',1,'l68egjo114gswgcw0w8co8ocoogcwkw','6aSq9lRQM6AaM3lgbJp6N9hFrF8/2RR6r7cEEUx1A/6r6bif5uusImNRSi+dyafouGNbNFotk4A3NVIGKBc8jg==','2015-02-26 14:34:13',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL);
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-11 10:06:30
