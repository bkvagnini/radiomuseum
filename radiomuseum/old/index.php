<?php
// Connect to the database and insert the new artist
$sql = "SELECT * FROM artist ORDER BY name";
mysql_connect("localhost", "USERNAME", "PASSWORD") 	or die(mysql_error());
mysql_select_db("gallerydb") or die(mysql_error());
$recordset = mysql_query( $sql ) or die(mysql_error());
// print '$recordset';

function art_for_artist( $artist_id ) {
	$sql = "SELECT * FROM art WHERE artist_id='$artist_id' LIMIT 1;";
	$recordset = mysql_query( $sql ) or die(mysql_error());
	// $recordset = mysql_query( $sql ) or die(mysql_error());
	$row = mysql_fetch_assoc( $recordset);
	return $row['image'];
}

?>
<?php include("header.php") ?>

<h1>Welcome To The Kirk Collection Gallery</h1>

<p> Please choose an artist from the list below to view the details. </p>

<table cellpadding="15">

<?php
while( $row=mysql_fetch_assoc($recordset) ) {
	$image = art_for_artist( $row["id"] );
	print '<tr><td><a href="artist_detail.php?id='. $row['id']. 
              '"><img src="'.$image.'" width="150" border="0"><br></td>';
	print '<td><strong><a href="artist_detail.php?id='. $row["id"]. '">' 
			.$row["name"]"</a></strong><br></a>\n";
	print "</td></tr>""\n";
}
?>

</table>

<?php include("footer.php") ?>
