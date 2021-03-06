CREATE TABLE `art` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `artist` varchar(30) NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL DEFAULT '',
  `accession_number` int(10) NOT NULL,
  `classification` text NOT NULL,
  `dateofobject` date NOT NULL,
  `designer` text NOT NULL,
  `country` varchar(20) NOT NULL,
  `usstate` text,
  `city` text,
  `techniques` text NOT NULL,
  `materials` text NOT NULL,
  `colors` text NOT NULL,
  `style` text NOT NULL,
  `artsize` text NOT NULL,
  `description` longtext NOT NULL,
  `source` varchar(20) NOT NULL,
  `association` text NOT NULL,
  `gift` text NOT NULL,
  `dateacquired` date NOT NULL,
  `displaycondition` text NOT NULL,
  `displayconditionexplain` text NOT NULL,
  `location` text NOT NULL,
  `enteredby` text NOT NULL,
  `date_entered` date NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=latin1;


