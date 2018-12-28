# Host: localhost:3308  (Version 5.7.21-log)
# Date: 2018-04-19 14:15:10
# Generator: MySQL-Front 6.0  (Build 1.204)


#
# Structure for table "activities"
#

DROP TABLE IF EXISTS `activities`;
CREATE TABLE `activities` (
  `activityid` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL,
  `activitydate` date DEFAULT NULL,
  `addressform` varchar(45) DEFAULT NULL,
  `addressresult` varchar(45) DEFAULT NULL,
  `nextsteps` text,
  PRIMARY KEY (`activityid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "activities"
#


#
# Structure for table "financecoaches"
#

DROP TABLE IF EXISTS `financecoaches`;
CREATE TABLE `financecoaches` (
  `financecoachid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`financecoachid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "financecoaches"
#


#
# Structure for table "frameworkjobs"
#

DROP TABLE IF EXISTS `frameworkjobs`;
CREATE TABLE `frameworkjobs` (
  `jobid` int(11) NOT NULL AUTO_INCREMENT,
  `jobname` varchar(45) NOT NULL,
  `jobmethod` varchar(45) NOT NULL,
  `lastrun` timestamp NULL DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `queuewait` tinyint(4) DEFAULT NULL,
  `frequencyminutes` int(11) DEFAULT NULL,
  `numtoprocess` int(11) DEFAULT NULL,
  `batchsize` int(11) DEFAULT NULL,
  `processed` int(11) DEFAULT NULL,
  `lastprocessed` int(11) DEFAULT NULL,
  `lasttimestamp` timestamp NULL DEFAULT NULL,
  `exitmessage` varchar(45) DEFAULT NULL,
  `queuedata` text,
  PRIMARY KEY (`jobid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "frameworkjobs"
#


#
# Structure for table "institutions"
#

DROP TABLE IF EXISTS `institutions`;
CREATE TABLE `institutions` (
  `institutionid` int(11) NOT NULL AUTO_INCREMENT,
  `nameofinstitution` varchar(90) DEFAULT NULL,
  `typeofinstitution` varchar(100) DEFAULT NULL,
  `typeofschool` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `homepage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`institutionid`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4;

#
# Data for table "institutions"
#

INSERT INTO `institutions` VALUES (1,'nobis aperiam tenetur','illo','aut','Ludwigstraße 7\n06305 Lindau (Bodensee)','52201','Ludwigsburg','http://mertens.de/nulla-doloribus-sed-ut-voluptas-ut'),(2,'voluptates perspiciatis ipsum','itaque','quod','Fuchsplatz 4/0\n76719 Dormagen','07112','Norden','http://www.ullrich.de/pariatur-omnis-nam-omnis-nihil-minima'),(3,'repudiandae aut nobis','ratione','dolorum','Stahlstr. 00c\n71566 Frankenthal (Pfalz)','58981','Weißenfels','http://gobel.de/'),(4,'ut voluptatem laudantium','occaecati','alias','Seilerring 5/0\n36015 Brühl','68216','Syke','http://www.albrecht.com/accusamus-harum-omnis-et-totam'),(5,'aut fugiat laborum','sequi','beatae','Kieferring 8b\n42485 Gauting','36622','Elsdorf','http://wegener.de/'),(6,'officia dicta non','fugit','quas','Ronny-Schröder-Ring 93b\n73989 Witten','22430','Hofheim am Taunus','https://walter.com/reprehenderit-numquam-sunt-aperiam-autem-amet-aut-et.html'),(7,'optio sed debitis','non','deleniti','Hellmuth-Reichel-Gasse 8b\n25948 Butzbach','36122','Köln','http://bauer.com/et-hic-fuga-provident-qui-repudiandae'),(8,'pariatur odit ab','sapiente','error','Ottmar-Böhme-Straße 0/6\n64316 Marl','72651','Ilmenau','http://www.lemke.com/'),(9,'nam qui eligendi','quos','provident','Schröterallee 74a\n38971 München','98609','Wilhelmshaven','http://www.wolf.com/nihil-quia-est-autem-est-dolorem-eveniet.html'),(10,'laborum facilis autem','esse','suscipit','Henkestraße 5b\n45822 Aschaffenburg','63951','Grimma','http://www.schuler.com/impedit-et-assumenda-omnis-beatae-similique-in.html'),(11,'ad est dignissimos','vero','et','Merzstraße 1a\n06376 Neckarsulm','53720','Wiesbaden','http://www.ott.com/'),(12,'ut iste eaque','consequuntur','est','Lechnerstraße 2a\n89900 Apolda','06719','Traunreut','http://voigt.de/'),(13,'et et optio','mollitia','ipsa','Gerberstraße 707\n30090 Aichach','22871','Übach-Palenberg','http://moritz.com/blanditiis-blanditiis-magni-alias-nesciunt-voluptas-illum'),(14,'eos et et','consequatur','enim','Dörrweg 2/2\n82541 Rathenow','27918','Oer-Erkenschwick','http://link.net/porro-provident-provident-dolores-et-neque-sunt-rerum'),(15,'delectus quia iste','odio','blanditiis','Hans-Jochen-Pfeiffer-Straße 01c\n19462 Bietigheim-Bissingen','13159','Dinslaken','http://westphal.org/libero-debitis-officiis-voluptatum-asperiores-quo-corrupti-repellendus'),(16,'qui quidem omnis','aspernatur','illum','Falkallee 9\n69705 Senden','67191','Quedlinburg','http://www.karl.de/harum-sint-corporis-dolorem.html'),(17,'rem iste quia','illo','debitis','Falko-Raab-Gasse 5/6\n91035 Metzingen','85969','Schleswig','http://www.hecht.com/commodi-reiciendis-illo-iure'),(18,'perferendis dolores et','ea','quo','Dora-Bertram-Allee 5/0\n64832 Nienburg/Weser','28235','Brilon','https://kohler.com/possimus-et-tenetur-sunt-accusamus.html'),(19,'quidem dolor quia','et','ratione','Simona-Breuer-Straße 5b\n72787 Castrop-Rauxel','25581','Neu-Isenburg','http://www.seidl.de/'),(20,'amet qui quia','inventore','eos','Karl-Heinz-Horn-Ring 7c\n29595 Zwickau','52929','Kehl','http://www.rauch.org/'),(21,'soluta ex non','alias','maxime','Brunnerring 4/7\n92489 Salzkotten','85328','Beckum','http://geiger.com/'),(22,'dicta veritatis expedita','aliquid','qui','Diehlallee 423\n31880 Bad Homburg vor der Höhe','60076','Senftenberg','http://bruckner.de/quas-aut-inventore-aut-neque-omnis'),(23,'et esse eos','consectetur','beatae','Merkelweg 9\n23471 Neuss','27098','Schweinfurt','http://www.dittrich.de/voluptatem-ratione-laborum-minima-placeat-voluptatem-et-ea.html'),(24,'eius sint vitae','quia','sed','Wagnerring 6\n67106 Friedberg','90793','Weil am Rhein','https://barth.net/consequuntur-ea-est-harum-et-ut-sequi-eaque.html'),(25,'ut voluptatem maiores','ea','illum','Anna-Wolter-Gasse 19\n47683 Sprockhövel','13421','Bruchköbel','http://thiele.net/aut-aut-consequuntur-voluptas-eos-et-delectus.html'),(26,'voluptatibus sunt aut','est','neque','Lisa-Janssen-Weg 81c\n54759 Braunschweig','96937','Goch','http://www.krauss.com/voluptatem-et-quis-temporibus-magnam-quidem-aut'),(27,'laudantium nobis ipsa','veritatis','illum','Antje-Bittner-Platz 9/7\n07691 Pirna','36990','Spremberg','http://www.mai.de/error-accusantium-nihil-expedita-dolorum'),(28,'enim hic ullam','ea','nihil','Kaiserallee 573\n86992 Höxter','73782','Wesseling','http://www.lindemann.de/'),(29,'dolorem nulla pariatur','nesciunt','mollitia','Kristin-Scherer-Allee 35a\n53772 Sonneberg','73793','Bedburg','https://www.fuchs.com/molestiae-vel-rerum-quis-libero-hic-officia-ducimus-ipsam'),(30,'repudiandae voluptatum ea','similique','similique','Claudio-Mohr-Straße 2a\n72171 Wangen im Allgäu','30288','Osnabrück','http://www.runge.org/est-fuga-facilis-magnam-nesciunt-quo-ipsam'),(31,'minima quaerat asperiores','dolore','porro','Ayse-Fuchs-Weg 2c\n57600 Halberstadt','96756','Pirna','http://www.gabriel.de/et-et-odio-quis.html'),(32,'sit voluptas perferendis','molestiae','explicabo','Giesestr. 5\n29724 Euskirchen','96489','Bremen','http://maurer.com/architecto-ipsum-ut-mollitia-quo-consequatur-quibusdam-possimus'),(33,'et quos est','nulla','expedita','Johann-Pohl-Straße 71\n29919 Lüneburg','72238','Warstein','http://franke.net/et-iusto-mollitia-mollitia-voluptas-in-aut-porro'),(34,'itaque enim et','est','et','Paul-Reichert-Straße 1\n84797 Memmingen','74362','Eschweiler','http://www.fricke.de/recusandae-dicta-numquam-suscipit-commodi-saepe-est'),(35,'quos pariatur temporibus','ipsam','aut','Paul-Sauer-Weg 77\n30994 Troisdorf','94352','Heide','https://www.brandt.com/voluptas-harum-voluptatibus-dolor-dolor'),(36,'est debitis quia','laborum','voluptatem','Thielestr. 163\n17679 Mönchengladbach','49412','Gelnhausen','http://moll.de/'),(37,'aut in velit','itaque','vitae','Silvia-Fleischmann-Straße 8/4\n32418 Heinsberg','32206','Marburg','https://www.kern.com/sint-quis-consequatur-sed-provident-tenetur-ullam-voluptates-aut'),(38,'corrupti facere at','est','non','Webergasse 825\n57552 Göttingen','21171','Eschborn','https://www.arnold.com/nihil-dolorum-quidem-temporibus-est'),(39,'quod vero enim','perferendis','sint','Erhard-Sommer-Allee 30\n90722 Grevenbroich','57028','Karlsruhe','http://weber.de/a-sit-esse-quod-aspernatur-doloremque-molestiae-nobis'),(40,'quos aliquid qui','reiciendis','ut','Eckhard-Hess-Gasse 8\n31258 Soest','45514','München','http://www.behrens.de/et-aut-cupiditate-sit-quia-corporis-eveniet-magni'),(41,'aperiam ab vero','alias','molestias','Volker-Mohr-Ring 8\n68968 Baden-Baden','29602','Zittau','http://kunz.de/aperiam-eaque-velit-nihil-harum'),(42,'ut facere et','voluptates','ea','Konradring 6/5\n60902 Kitzingen','41787','Heide','http://schramm.de/'),(43,'at eos debitis','ut','quia','Heribert-Haase-Weg 46\n44670 Bocholt','28142','Emmerich am Rhein','http://www.haupt.de/'),(44,'deserunt qui et','ipsam','repellendus','Edeltraut-Krebs-Allee 9\n02879 Marburg','60727','Büdingen','http://meissner.org/'),(45,'iste vero sit','placeat','et','Kochweg 90c\n17292 Bramsche','69794','Bayreuth','http://www.nagel.com/amet-harum-exercitationem-sunt-et-explicabo-qui-iusto.html'),(46,'earum ullam temporibus','non','dolor','Dorothee-Wilke-Allee 4/7\n70136 Lüdinghausen','07798','Hemer','http://holz.com/pariatur-ex-tempore-maxime-eligendi-repellendus'),(47,'deleniti vero consequatur','voluptatem','nostrum','Günter-Schweizer-Ring 058\n27739 Burgwedel','82013','Hanau','http://berg.de/nemo-aut-non-et-cum-ut'),(48,'aliquam necessitatibus expedita','natus','commodi','Rafael-Wieland-Straße 79b\n98660 Sondershausen','99613','Ilsede','http://www.forster.de/aut-autem-porro-debitis-ratione-minima-praesentium'),(49,'voluptatem tempora molestias','odit','commodi','Falkgasse 3/6\n30438 Hückelhoven','17254','Bergheim','http://may.de/soluta-sint-voluptas-asperiores-atque-magni'),(50,'quasi voluptas incidunt','ab','aut','Wittestr. 2/8\n24884 Nordhausen','61537','Gaggenau','https://www.paul.de/ab-non-et-et-illum-aut'),(51,'officia voluptas necessitatibus','dolor','nostrum','Sophie-Busch-Weg 20\n80523 Düsseldorf','88697','Dorsten','https://seifert.com/adipisci-cum-quae-magni-esse.html'),(52,'sint ea assumenda','temporibus','distinctio','Schultzgasse 8\n30051 Lüdinghausen','38260','Hannover','https://www.will.com/et-porro-quo-vero-ut-iste'),(53,'aperiam id beatae','porro','veniam','Kleinring 22b\n97489 Bergheim','69852','Laatzen','http://zimmermann.com/dolores-distinctio-aliquid-eveniet-qui-accusamus.html'),(54,'quas sunt commodi','amet','dolorem','Maiplatz 8/3\n57695 Königs Wusterhausen','00060','Hoyerswerda','http://www.reimer.de/iure-itaque-impedit-dicta-minima'),(55,'ut rerum porro','soluta','qui','Sophia-Schulz-Weg 3/5\n02950 Geislingen an der Steige','69231','Rosenheim','http://kurz.com/'),(56,'iste ratione repellat','veritatis','omnis','Almut-Kuhlmann-Weg 20a\n97901 Langen','45277','Neu-Ulm','http://neuhaus.com/at-eos-error-pariatur-fugit-quasi-nam'),(57,'quod minima aut','saepe','ab','Wiesnerplatz 63\n11170 Böblingen','23936','Remseck am Neckar','http://rohde.de/ducimus-optio-vel-perferendis-eaque-delectus-consequuntur'),(58,'sit aut consectetur','et','repudiandae','Irmhild-Schubert-Weg 5\n44812 Weißenfels','55098','Vaihingen an der Enz','http://www.herrmann.de/omnis-quod-consequatur-atque-magni'),(59,'ipsam nam mollitia','omnis','voluptate','Gaby-Kraus-Platz 02\n79286 Stadtallendorf','22434','Unterschleißheim','https://www.friedrich.com/qui-dolore-voluptas-fugit-ducimus-neque-enim-voluptate'),(60,'dolor sapiente in','reiciendis','rerum','Petersenplatz 17a\n05769 Heiligenhaus','57345','Oberursel (Taunus)','http://zander.de/'),(61,'dicta voluptatem et','harum','iure','Eckart-Böttcher-Ring 4a\n24154 Offenburg','17273','Kevelaer','http://www.baum.com/'),(62,'excepturi quia et','laudantium','quasi','Paula-Popp-Platz 95c\n40034 Plauen','14591','Rottweil','http://fricke.com/ducimus-similique-blanditiis-error-in-est.html'),(63,'libero qui distinctio','ut','velit','Peer-Weiss-Platz 9a\n21665 Wangen im Allgäu','81168','Weinstadt','http://meister.net/'),(64,'ex accusantium sapiente','et','est','Oswaldring 082\n87881 Leimen','15580','Achim','http://freitag.de/debitis-tempora-rerum-quis-quia-sed'),(65,'aut sint hic','quia','esse','Bettina-Lechner-Ring 6/3\n02518 Görlitz','24836','Heidenheim an der Brenz','http://schiller.com/beatae-facere-qui-est.html'),(66,'ut dicta cumque','numquam','soluta','Renate-Rothe-Weg 01\n65452 Meißen','56023','Espelkamp','http://www.bender.net/veritatis-minima-illum-quia-dolores-quisquam.html'),(67,'et voluptas qui','exercitationem','ut','Harmsallee 91b\n88977 Pirmasens','12123','Erding','https://www.lechner.org/totam-sed-voluptatem-illo-id'),(68,'voluptatum harum et','rerum','quis','Lisa-Voss-Platz 91\n40387 Zittau','88656','Ennigerloh','http://herzog.de/illo-soluta-deleniti-modi-iure-et-mollitia'),(69,'qui modi sint','error','et','Reiterallee 7c\n93610 Meinerzhagen','31624','Rödermark','http://www.singer.de/'),(70,'sed omnis provident','vero','non','Luzie-Hübner-Straße 2\n69656 Idar-Oberstein','83032','Karben','http://www.heller.com/eveniet-sequi-explicabo-natus-sit-sed.html'),(71,'dignissimos fugiat cum','sint','rem','Baierring 1\n42713 Papenburg','98742','Traunreut','http://oswald.com/'),(72,'est eveniet labore','veniam','asperiores','Schreiberring 8/7\n87892 Aschersleben','72778','Lennestadt','http://www.jost.com/cum-eos-voluptas-amet-omnis-ullam-molestiae-ut-facilis'),(73,'saepe maxime dicta','dolorum','id','Ulrichweg 651\n88299 Heidenheim an der Brenz','69478','Delmenhorst','http://www.wolter.de/voluptatum-vero-molestias-dolores-praesentium-perferendis-odio-sint.html'),(74,'veniam totam eum','molestiae','atque','Meisterweg 053\n53919 Heiligenhaus','65428','Geretsried','http://falk.net/eius-facilis-est-aliquam-ad.html'),(75,'voluptas praesentium velit','quis','molestias','Eckertring 256\n43857 Werl','81824','Oldenburg','https://pietsch.de/assumenda-sed-dolore-nostrum-beatae-occaecati.html'),(76,'dolor aliquam repudiandae','quia','nemo','Dominik-Lauer-Gasse 17\n17165 Meiningen','51006','Pinneberg','http://www.moller.com/ex-dolorem-cum-qui-et.html'),(77,'provident est in','cumque','doloribus','Janßenring 4\n04342 Ostfildern','51036','Burg','https://www.barth.de/qui-et-cum-sit-qui-eaque-libero-repudiandae-pariatur'),(78,'et beatae modi','nesciunt','aliquam','Nickelallee 4/3\n33319 Neckarsulm','39359','Wittmund','http://lechner.com/'),(79,'sint consequatur cupiditate','autem','sint','Siegfried-Haupt-Allee 89c\n12000 Verden (Aller)','37152','Laatzen','https://fiedler.de/officia-praesentium-est-iusto-modi-est-officiis-id-est.html'),(80,'earum aut eaque','officia','aperiam','Leni-Groß-Gasse 09b\n00077 Wiehl','49808','Saarlouis','http://www.voss.de/'),(81,'voluptatem ut hic','iste','consequatur','Wittmannring 2\n00172 Stadtlohn','58739','Reutlingen','http://www.fricke.de/consequuntur-corrupti-aut-et-deserunt-nesciunt-sapiente'),(82,'laboriosam reiciendis maxime','est','beatae','Koppgasse 46\n93230 Einbeck','55135','Blankenburg (Harz)','http://www.wimmer.com/consequatur-nemo-sed-iste-adipisci-in-et-earum'),(83,'voluptatem quibusdam amet','illo','at','Büttnerweg 4\n99820 Apolda','47049','Langenhagen','https://www.ludwig.com/vero-debitis-nihil-aperiam-non-sit'),(84,'dolorem eaque quam','aut','incidunt','Rothstr. 4c\n63445 Frechen','53990','Schwandorf','http://www.moser.de/nihil-eos-saepe-iste-beatae-fuga'),(85,'optio est quis','omnis','facilis','Westphalstraße 345\n38631 Leimen','90665','Greiz','http://kraft.org/'),(86,'repellendus nulla quo','animi','non','Brunsallee 5\n95602 Fürth','13983','Gießen','http://siebert.de/voluptatem-sint-omnis-vel'),(87,'sequi officia rerum','quia','repudiandae','Holzallee 31c\n73769 Herborn','85708','Weilheim in Oberbayern','http://haag.net/velit-quae-voluptates-officiis-perferendis'),(88,'qui autem harum','deleniti','quibusdam','Jolanta-Körner-Gasse 922\n67804 Nürtingen','64047','Herford','http://www.wendt.de/ipsam-libero-temporibus-sint-nam-repellat-ut'),(89,'voluptatibus enim quo','quia','totam','Schultering 179\n04988 Baesweiler','98786','Rinteln','http://www.mack.de/ratione-ut-odio-ipsam-voluptate-architecto.html'),(90,'molestiae qui maxime','qui','reiciendis','Robin-Seeger-Straße 48a\n21487 Seevetal','60971','Osnabrück','http://witt.com/deserunt-minus-enim-laborum.html'),(91,'sint omnis voluptatem','dolorem','occaecati','Ingolf-Steinbach-Platz 16c\n88860 Neunkirchen','85798','Krefeld','http://www.lange.com/doloremque-aut-nulla-animi-est.html'),(92,'reprehenderit neque et','quis','distinctio','Lilo-Eichhorn-Gasse 046\n54751 Saalfeld/Saale','84678','Rosenheim','http://jacobs.net/'),(93,'quo at quia','odio','sed','Wagnerplatz 1c\n15479 Lohne (Oldenburg)','94905','Schwerin','http://ebert.de/rerum-enim-omnis-qui-velit-vel-facilis-eos'),(94,'a unde rerum','sit','mollitia','Ali-Urban-Weg 4\n20568 Eisenhüttenstadt','86576','Bretten','https://www.kroger.de/iure-et-laboriosam-et-non'),(95,'libero ipsam numquam','qui','nesciunt','Bergstraße 70c\n38528 Weinstadt','23699','Bernburg (Saale)','http://lutz.de/necessitatibus-fuga-accusantium-quisquam-odit.html'),(96,'rerum sit molestiae','quibusdam','pariatur','Rosina-Bachmann-Allee 7\n38021 Wetzlar','10470','Kempen','http://www.heim.org/unde-accusamus-reiciendis-aut-est-ea'),(97,'dolorem ut dolor','sit','quia','Heinstr. 9\n32493 Kornwestheim','11535','Kitzingen','http://giese.com/sint-itaque-sunt-illo-ipsa-ad-similique-eius-ea'),(98,'soluta commodi aliquid','est','eveniet','Baumanngasse 0b\n75308 Pfungstadt','19472','Radebeul','http://www.michel.com/omnis-occaecati-id-expedita-nostrum-minima-ea-reiciendis-aut'),(99,'numquam facere veritatis','architecto','consequatur','Jahnring 5\n81055 Schloß Holte-Stukenbrock','93996','Viernheim','http://www.haas.com/reprehenderit-quaerat-soluta-fugiat-earum-velit-impedit-earum'),(100,'earum quis dolore','quam','omnis','Adam-Kruse-Gasse 2\n35322 Rendsburg','30038','Barsinghausen','http://www.kruger.com/consequuntur-harum-inventore-eos'),(101,'Dora Memorial',NULL,'Something','Adresse','Zip','Accra','www.google.com'),(102,'Adom',NULL,'Worlanyo','Adress','Pls','Stag','ffddf'),(103,'Adom',NULL,'Worlanyo','Adress','Pls','Stag','ffddf'),(104,'jdj',NULL,'ksdk','jj','j','j','j'),(105,'jdj',NULL,'ksdk','jj','j','j','j'),(106,'dffdf',NULL,'fdfdf','fdfdfd','fdfd','gfg','fdfdf'),(107,'dffdf',NULL,'fdfdf','fdfdfd','fdfd','gfg','fdfdf'),(108,'Sophizy',NULL,'Sanmotey','POBOX 899','Tema','Accra','www.google.com'),(109,'Samuel',NULL,'Bempong','Obinim','Trema','Stadi','www.tema.com');

#
# Structure for table "logcategories"
#

DROP TABLE IF EXISTS `logcategories`;
CREATE TABLE `logcategories` (
  `logcategory` varchar(32) NOT NULL,
  PRIMARY KEY (`logcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "logcategories"
#

INSERT INTO `logcategories` VALUES ('administrator action'),('customer action'),('information'),('system - general'),('system - scheduled');

#
# Structure for table "materials"
#

DROP TABLE IF EXISTS `materials`;
CREATE TABLE `materials` (
  `matid` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(45) DEFAULT NULL,
  `memberid` int(11) DEFAULT NULL,
  PRIMARY KEY (`matid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "materials"
#


#
# Structure for table "members"
#

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `memberid` int(11) NOT NULL AUTO_INCREMENT,
  `institutionid` int(11) DEFAULT NULL,
  `title` varchar(10) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `street` varchar(90) DEFAULT NULL,
  `postcode` varchar(6) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  `reachability` varchar(45) DEFAULT NULL,
  `subjects` varchar(45) DEFAULT NULL,
  `housenumber` varchar(45) DEFAULT NULL,
  `otherinfomation` text,
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

#
# Data for table "members"
#

INSERT INTO `members` VALUES (1,NULL,'Mr.','Amposah','Shadrach','sha@gmail.com','93999399','Ho','0999','Tema','Yes','Green','A5 90',NULL),(2,NULL,'Mr.','Adom','Worlanyo','email@yahoo.com','787787887','fdfd','fdfd','fdfd','fdfd','fdfd','fdfdf',NULL),(3,NULL,'Mrs.','fghj','hghg','hghg','545445','fgf','fgfg','gfgf','fgf','gfgf','4',NULL);

#
# Structure for table "newsletter"
#

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE `newsletter` (
  `newsletterid` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `receivednewsletters` int(11) DEFAULT NULL,
  `openednewsletters` int(11) DEFAULT NULL,
  `newsletterclicks` int(11) DEFAULT NULL,
  PRIMARY KEY (`newsletterid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "newsletter"
#


#
# Structure for table "orders"
#

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL,
  `activityid` int(11) DEFAULT NULL,
  `financecoachid` int(11) DEFAULT NULL,
  `orderdate` date DEFAULT NULL,
  `ordertype` varchar(10) DEFAULT NULL,
  `theme` varchar(10) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `numberofstudents` int(11) DEFAULT NULL,
  `numberofclasses` int(11) DEFAULT NULL,
  `otherinformation` text,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

#
# Data for table "orders"
#

INSERT INTO `orders` VALUES (1,NULL,NULL,NULL,'2018-04-06','fdfd','fdfd','dffdfd',32,32,'32'),(2,NULL,NULL,NULL,'2018-04-06','fdfd','fdfd','dffdfd',32,32,'32'),(3,NULL,NULL,NULL,'2018-04-04','Tema','Accra','jdj',8,8,'No info'),(4,NULL,NULL,NULL,'2018-04-04','Tema','Accra','jdj',8,8,'No info'),(5,NULL,NULL,NULL,'2018-04-04','Tema','Theme','Vlcl',5,4,'djdjd'),(6,NULL,NULL,NULL,'2018-04-12','ds','d','sd',3,3,''),(7,NULL,NULL,NULL,'2018-04-13','Place','Theme','Class',43,54,'No info');

#
# Structure for table "roles"
#

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `roleid` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(24) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "roles"
#


#
# Structure for table "systemlog"
#

DROP TABLE IF EXISTS `systemlog`;
CREATE TABLE `systemlog` (
  `idsystemlog` int(11) NOT NULL AUTO_INCREMENT,
  `logcategory` varchar(32) NOT NULL DEFAULT 'information',
  `user` varchar(90) NOT NULL DEFAULT 'unknown - error?',
  `logmessage` varchar(1024) NOT NULL,
  `diagnostic` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idsystemlog`),
  KEY `enforce_cats_idx` (`logcategory`),
  CONSTRAINT `enforce_cat` FOREIGN KEY (`logcategory`) REFERENCES `logcategories` (`logcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "systemlog"
#


#
# Structure for table "trainings"
#

DROP TABLE IF EXISTS `trainings`;
CREATE TABLE `trainings` (
  `trainingid` int(11) NOT NULL AUTO_INCREMENT,
  `activityid` int(11) DEFAULT NULL,
  `financecoachid` int(11) DEFAULT NULL,
  `trainingdate` date DEFAULT NULL,
  `organizer` varchar(45) DEFAULT NULL,
  `partner` varchar(45) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  `reference` varchar(90) DEFAULT NULL,
  `theme` varchar(90) DEFAULT NULL,
  `remarks` text,
  PRIMARY KEY (`trainingid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

#
# Data for table "trainings"
#

INSERT INTO `trainings` VALUES (1,NULL,NULL,'2018-04-06','JHGF','JHGF','JHGF','KJHG','KJHG','KJHG','JHG'),(2,NULL,NULL,'2018-04-03','KJHGF','KJHGF','KJHGF','KJHG','KMJHGF','MN','MNB'),(3,NULL,NULL,'2018-04-04','Edited','Partner','Code','Home','Referent','Theme','Something');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `firstname` varchar(24) DEFAULT NULL,
  `lastname` varchar(24) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uid_UNIQUE` (`uid`),
  UNIQUE KEY `username_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "users"
#


#
# Structure for table "user_roles"
#

DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles` (
  `users_uid` int(11) NOT NULL,
  `roles_roleid` int(11) NOT NULL,
  PRIMARY KEY (`users_uid`,`roles_roleid`),
  KEY `fk_user_roles_roles1_idx` (`roles_roleid`),
  CONSTRAINT `fk_user_roles_roles1` FOREIGN KEY (`roles_roleid`) REFERENCES `roles` (`roleid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_roles_users1` FOREIGN KEY (`users_uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "user_roles"
#

