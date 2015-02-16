--   Database: gallerydb
-- ------------------------------------------------------

-- Table structure for table `art`
--

CREATE TABLE art (
  id int(10) unsigned NOT NULL auto_increment,
  artist_id int(10) unsigned NOT NULL default '0',
  title varchar(120) NOT NULL default '',
  accession_number int(10) NOT NULL,
  classification text NOT NULL,
    dateofobject date NOT NULL,
   designer text NOT NULL,
    country text NOT NULL,
	 usstate text NOT NULL,
	  city text NOT NULL,
	  techniques text NOT NULL,
	  materials text NOT NULL,
	  colors text NOT NULL,
	  style text NOT NULL,
	  artsize text NOT NULL,
	  description text NOT NULL,
	  source text NOT NULL,
	  association text NOT NULL,
	  gift text NOT NULL,
	  dateacquired date NOT NULL,
	  displaycondition text NOT NULL,
	  displayconditionexplain text NOT NULL,
	  location text NOT NULL,
	  enteredby text NOT NULL,
	  date_entered date NOT NULL,
	  image blob,
  PRIMARY KEY  (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Table structure for table `artist`
--

CREATE TABLE artist (
  id int(10) unsigned NOT NULL auto_increment,
  name varchar(100) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- sample data
--
-- INSERT INTO art VALUES (1,8,'Lackland in Farbe','0');
-- INSERT INTO art VALUES (2,8,'Daisycutter Prologue','0');
-- INSERT INTO art VALUES (3,10,'Orange Bulb','0');
-- INSERT INTO art VALUES (4,10,'Yellow Bulb','0');

--
-- sample data
--
-- INSERT INTO artist VALUES (1,'Ayu Tomikawa');
-- INSERT INTO artist VALUES (2,'Brandon Smith');
-- INSERT INTO artist VALUES (3,'Chalda Maloff');
-- INSERT INTO artist VALUES (4,'Gonz One');
-- INSERT INTO artist VALUES (5,'Heather Luque');
-- INSERT INTO artist VALUES (6,'Judd Vetrone');
-- INSERT INTO artist VALUES (7,'Ursula Xanthe Young');
-- INSERT INTO artist VALUES (8,'Carsten Stehr');
-- INSERT INTO artist VALUES (10,'Jay Hotch');




