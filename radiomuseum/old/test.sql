-- MySQL dump 10.9
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	4.1.11-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addressbook`
--

DROP TABLE IF EXISTS `addressbook`;
CREATE TABLE `addressbook` (
  `Name` varchar(50) default NULL,
  `Phone` varchar(50) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addressbook`
--


/*!40000 ALTER TABLE `addressbook` DISABLE KEYS */;
LOCK TABLES `addressbook` WRITE;
INSERT INTO `addressbook` VALUES ('John','555-1212'),('John','555-1212'),('John','555-1212'),('Marko','888-357-1204'),('Marko','1-888-357-1204'),('Marko','1-888-357-1204'),('Marko','1-888-357-1204'),('Marko','1-888-357-1204'),('Marko','1-888-357-1204'),('Marko','1-888-357-1204'),('Marko','1-888-357-1204'),('Marko','1-888-357-1204'),('Marko','1-888-357-1204'),('Marko','1-888-357-1204'),('Mickey','1-800-DisneyLand'),('Mickey','1-800-DisneyLand'),('Tommy','888-544-2323'),('Tommy','888-544-2323'),('Steve','3423-43242'),('null','null'),('null','null'),('null','null'),('Peter','555-1212');
UNLOCK TABLES;
/*!40000 ALTER TABLE `addressbook` ENABLE KEYS */;

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
INSERT INTO `art` VALUES (1,7,'Lackland in Farbe','This is an exceptional piece','999',''),(2,8,'Daisycutter Prologue','Acrylic & oil on canvas, 18x60','980','images/Daisycutter.jpg'),(3,10,'Orange Bulb','Lamp made of metal and glass.','400','images/OrangeBulb.jpg'),(4,11,'Bird Boy','Oil on canvas, 35x48','1100','images/BirdBoy.jpg'),(5,3,'Embarking','Digital paintihng, 16x10 framed','200','images/Embarking.jpg'),(6,3,'Sleep Walk','Digital painting 22x 30 framed.','590','images/SleepWalk.jpg'),(7,3,'Flowing','Aquatint 13x10 framed.','290','images/Flowing.jpg'),(8,0,'Orange Bulb','Lamp, 9x9x21','475','images/OrangeBulb.jpg'),(9,10,'Yellow Bulb','Lamp, 12x12x21','600','images/YellowBulb.jpg'),(10,12,'No Parking','Acrylic on parking sign with resin, 25x20','400','images/NoParking.jpg');
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
INSERT INTO `artist` VALUES (3,'Chalda Maloff','Chalda Maloff\'s art is about the interplay among parts of a whole in a particular environment. As a Human Ecologist, she tends to view all objects in terms of their effects upon one another. Even in the unreal world of her abstracts, the laws of physics still apply: light still reflects off shiny surfaces, moisture still condenses where hot and cold collide. The edge of a shape or boundary line assumes pivotal significance in her art as they mark difference thus establishing classifications.\r\n\r\nThe appearance of spontaneity in her art pieces is an illusion. Working slowly and methodically she digitally builds the forms and shapes, allowing them to interact at their own pace.\r\n','408-655-3322','cm@maloff.com'),(8,'Carsten Stehr','Carsten Stehr’s graceful canvas’ are inspired by his extensive travels and interest in the shifting relationships of form, light and narrative. With a steady mind and hand he absorbs the most esoteric parts of varying cultures and translates them into tangible color and form. Carsten’s peaceful Daisycutter series examine various aspects of contemporary narrative painting. The five canvases’ are part of a twelve part series and leverage both Asian and European painting traditions.\r\nThese works are a play on Western “pastoral” painting; Carsten removes the traditional landscape from the center of the art work and replaces it with a Zen like space of limitless color and light. While the landscapes transform into translucent space, the “pastoral” tradition of narrative remains. The viewer is encouraged to read the individual pieces as parts of a whole, like words of a sentence or film stills of a movie. ','415-555-5433','carsten@thecanvasgallery.com'),(10,'Jay Hotch','Jay’s passion for design lies in the dual challenge to create something that is both beautiful and functional. Communicating ideas of beauty and form through ordinary objects is a struggle, but one that is at the source of Jay’s desire to create.\r\n\r\nFor Jay using found objects in his art also presents the challenge of keeping the integrity of the original object intact while brining new life to something that might be discarded. Lit or unlit, his works provide an interesting mix of texture and mood.\r\n\r\nJay was born in Vietnam to a Vietnamese mother and an Irish-Czech father, and has lived in Minnesota, Kansas, Southern California and now resides is San Francisco. He has formal training both in graphic design and the culinary arts.','415-555-8946','jay@hotmail.com'),(11,'Eric Bailey','Eric Bailey’s free and spontaneous style, with its graceful brushstrokes and sparkling palette, has drawn critical acclaim throughout the bay area. Originally drawn to design and illustration it was not until the later half of his college education that Eric dedicated himself to painting. Inspired by classical art Eric uses the “alla prima” method of oil painting; a method in which the image is completed with the first application of paints to the entire area, instead of being built up by layering. He also works on the whole canvas continuously rather then completing one section at a time. His free form produces brilliant color that appears to be set in motion by the energetic application.\r\nWith a gothic yet highly sensitive touch Eric’s angels and birds are studies of re-birth. His interest in the topic culminates in his signature subject, “the little boy”. With a sweeping grace and subtle sadness Eric’s paintings whisper an ancient tale of hope.','650-555-7823','eric@yahoo.com'),(12,'Elliott Easterling','Elliott’s paintings are celebrations of color and form. He approaches the canvas with the same graceful vigor and focused passion with which he tackles life. Free from the confines of any one particular style, his art is in a constant state of evolution. Always pushing himself to the limits, exploring the possibilities of space and time, his creative process is as captivating as the paintings themselves.\r\n\r\nWithin his larger compositions of geometric shapes and curvilinear forms, spontaneous impulse and planned action merge. Many of there were created in a Sonoma garage at the height of summer, bringing the heat and sweat of dance and motion into the works.\r\n\r\nHis action painting style is no less present in his smaller works. Many of the pieces, created during his travels around the world, were rolled and shipped across seas.\r\n','415-555-2341','eeasterling@hotmail.com');
UNLOCK TABLES;
/*!40000 ALTER TABLE `artist` ENABLE KEYS */;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL auto_increment,
  `subject` varchar(150) default NULL,
  `body` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--


/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
LOCK TABLES `messages` WRITE;
INSERT INTO `messages` VALUES (1,'Some subject','Some body goes here and we dont know who'),(10,'Jayanthi','whats happening'),(11,'George Selling a Widget','Brand new widget for sale'),(19,'Jayanthi','How did i connect to you mysteriously?'),(22,'Jayanthi','Messed up all the time...'),(23,'test','5:10'),(24,'Little Black Dog','The little dog is running on the street...'),(25,'Little Black Dog','The little dog is running on the street...'),(26,'blah','blah');
UNLOCK TABLES;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

