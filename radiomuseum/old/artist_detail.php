<?php
extract($_REQUEST);

mysql_connect("localhost", "root", "ffd82x") 	or die(mysql_error());
mysql_select_db("gallerydb") or die(mysql_error());


$sql = "SELECT * from artist WHERE id='$id'";
$resultset = mysql_query( $sql )	or die(mysql_error());
$row = mysql_fetch_assoc( $resultset );
extract( $row );

?>
<? include("header.php") ?>

<h1><?=$name?></h1>

<table width="100%">
  

<?
$sql = "SELECT art.id, art.title, art.image, art.description, artist.name ".
		"FROM art art, artist artist " .
		"WHERE artist.id='$id' AND artist.id=art.artist_id";
$recordset = mysql_query( $sql )		or die(mysql_error());
?>
	<?
	while( $row=mysql_fetch_assoc($recordset) ) {
		print "<tr><td><h2>".$row['title']."</h2>\$";
		print "<br>" .$row['description'];

		// Display the image if one exists
		if ( isset($row['image']) && $row['image'] != "" ) {
			print '<br><br><img src="'. $row['image'] . '" align="center">';
		}
		print "<br><br><hr></td></tr>\n";
	}
	?>


</table>


<? include("footer.php") ?>
