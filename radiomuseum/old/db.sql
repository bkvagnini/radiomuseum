
--
-- Table structure for table `art`
--

DROP TABLE IF EXISTS `art`;
CREATE TABLE `art` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `artist_id` int(10) unsigned NOT NULL default '0',
  `title` varchar(120) NOT NULL default '',
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL default '0',
  `image` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art`
--


/*!40000 ALTER TABLE `art` DISABLE KEYS */;
LOCK TABLES `art` WRITE;
INSERT INTO `art` VALUES (1,7,'Lackland in Farbe','This is an exceptional piece','999',''),(2,8,'Daisycutter Prologue','Acrylic & oil on canvas, 18x60','980','images/Daisycutter.jpg'),(3,11,'Devotion','acrylic, oil pastel, newspaper,\r\nWorld Book encyclopedia,\r\npaper on canvas\r\n36” x 36”    2006','400','images/Stuart_Devotion.jpg'),(4,11,'Stem Rising','acrylic, corrugated cardboard\r\non canvas with original poetry\r\n24” x 24”    200','1100','images/Stuart_SteamRising.jpg'),(5,3,'Embarking','Digital paintihng, 16x10 framed','200','images/Embarking.jpg'),(6,3,'Sleep Walk','Digital painting 22x 30 framed.','590','images/SleepWalk.jpg'),(7,3,'Flowing','Aquatint 13x10 framed.','290','images/Flowing.jpg'),(8,0,'Orange Bulb','Lamp, 9x9x21','475','images/OrangeBulb.jpg'),(9,11,'Measured Steps','acrylic and paper on cardboard\r\n20” x 20”    2006','600','images/Stuart_MeasuredSteps.jpg'),(10,3,'No Parking','Acrylic on parking sign with resin, 25x20','400','images/NoParking.jpg'),(11,10,'Story of La Pecheuse','90x72, mixed media on canvas, 2005, texts by Jiddu Krishnamurti','1900','images/Todd_StoryofLaPechuese.jpg'),(12,10,'Undreaming','48x84, mixed media on canvas, 2005, texts by Jiddu Krishnamurti','1500','images/Todd_Undreaming.jpg'),(13,12,'Green Pink','acrylic on paper,40\"x60\"','1500','images/Elliott_GreenPink.jpg'),(14,12,'Motion Tokyo','pastel & pen on board, 23\"x18\"','275','images/Elliott_MotionTokyo.jpg'),(15,12,'Untitled','acrylic on paper, 40\"x65\"','1250','images/Elliott_Untitled.jpg'),(16,13,'Untitled','acrylic on canvas, 18\"x25\"','325','images/Laura_Untitled.jpg'),(17,13,'Dragonfly','crylic on canvas, 22\"x28\"','450','images/Laura_Dragonfly.jpg');
UNLOCK TABLES;
/*!40000 ALTER TABLE `art` ENABLE KEYS */;

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
CREATE TABLE `artist` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `bio` text NOT NULL,
  `phone` varchar(50) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--


/*!40000 ALTER TABLE `artist` DISABLE KEYS */;
LOCK TABLES `artist` WRITE;
INSERT INTO `artist` VALUES (10,'Todd Brown','Todd T. Brown is a visual artist, musician, and community arts organizer. He has been painting for over 17 years. Over the past three years Todd has dedicated himself to developing an interdisciplinary, intercultural, creative center for the visual and performing arts known as the Red Poppy Art House, located in the mission district of San Francisco. He is also the founder of the MAPP: Mission Arts & Performance Project, a bi-monthly grass roots arts festival that features more than 60 visual artists, musicians, poets and performers, that perform simultaneously in over 10 improvised locations all set within a residential community. \r\n\r\nhttp://www.redpoppyarthouse.org/currentexhibit.html\r\n','415.826.2402','todd@redpoppyarthouse.org'),(11,'stuART Sheldon','Virtually all my work features original poetry, often scribbled into wet paint with a chopstick. I read dictionaries for pleasure and have written poems for as long as I can remember. I taught myself to paint at age 36 to make my poems more engaging, because 8-1/2”x11”  Times New Roman just wasn\'t conveying enough of the joy and pain, sunshine and rain. Out of college I spent five years on Wall Street as a vice-president of investments. But something vital was missing, so I entered the MFA program in Film at University of Miami. Since then I\'ve been an ad exec, copywriter, TV documentary producer/director, magazine publisher and Donald Sutherland\'s personal assistant on Buffy the Vampire Slayer. In 2000 I launched Streaming Media Magazine which won Folio\'s illustrious 2001 Ozzie award for Best Overall Design. I am represented by the San Francisco Museum of Modern Art Artists Gallery. www.stuartsheldon.com\r\n','650-555-7823','stuart@stuartsheldon.com'),(12,'Elliott Easterling','Elliott’s paintings are celebrations of color and form. He approaches the canvas with the same graceful vigor and focused passion with which he tackles life. Free from the confines of any one particular style, his art is in a constant state of evolution. Always pushing himself to the limits, exploring the possibilities of space and time, his creative process is as captivating as the paintings themselves.\r\n\r\nWithin his larger compositions of geometric shapes and curvilinear forms, spontaneous impulse and planned action merge. Many of there were created in a Sonoma garage at the height of summer, bringing the heat and sweat of dance and motion into the works.\r\n\r\nHis action painting style is no less present in his smaller works. Many of the pieces, created during his travels around the world, were rolled and shipped across seas.\r\n','415-555-2341','elliotteasterling@yahoo.com'),(13,'Laura Blair','Born: Monterey, Ca<BR>\r\nResides: Sausalito, Ca.<BR>\r\n<BR>\r\n\r\nThroughout Laura Smith Blair’s life the California Coastline has played an important role. Raised in Monterey she was educated in San Diego and then returned north to live in San Francisco finally settling in beautiful Sausalito. She has spent her days meditating on the sublime ocean and its welcoming sands. From the golden beaches of San Diego to the rugged coast of Northern California her landscape paintings reflect her comfort with the ocean’s powerful nature. With thickly layered paint, soft brush stokes and chalky color her paintings take on an abstract characteristic. Initially attracted to realism Laura has recently begun loosening her lines and relying on sense-impression based images. Truly a California girl Laura’s painting reveal her deep relationship with the magical coastline.\r\n<BR><BR>\r\n\r\nEducation:\r\nBA in Visual Arts, UC San Diego\r\nStudied under master oil painter Dong Sun Kim\r\n<BR><BR>\r\n\r\nAchievements:\r\nFounding Creative Director at The Canvas Gallery & Lounge\r\nMother','','laura@thecanvasgallery.com');
UNLOCK TABLES;
/*!40000 ALTER TABLE `artist` ENABLE KEYS */;

