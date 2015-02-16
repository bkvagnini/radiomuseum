<?php
// Connect to the database and insert the new artist
$sql = "SELECT art.id, art.title, artist.name FROM art art, artist artist " .
		"WHERE artist.id=art.artist_id ORDER BY artist.name";
mysql_connect("localhost", "USERNAME", "PASSWORD") 	or die(mysql_error());
mysql_select_db("gallerydb") or die(mysql_error());
$recordset = mysql_query( $sql )		or die(mysql_error());

?>
<?php include("admin_header.php") ?>

<h1>The Kirk Collection List</h1>

<table cellpadding="5">
<th>Art</th><th>Artist</th>
<?php
while( $row=mysql_fetch_assoc($recordset) ) {
	print '<tr><td><a href="admin_art_edit.php?id='. $row["id"]. '">' .$row["title"] .'</a></td>' .
			"<td>". $row["name"]" "</td><td><div align=right>$"</div></td></tr>\n";
}
?>

</table>

<?php include("admin_footer.php") ?>
