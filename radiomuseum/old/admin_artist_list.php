<?php
// Connect to the database and insert the new artist
mysql_connect("localhost", "USERNAME", "PASSWORD") 	or die(mysql_error());
mysql_select_db("gallerydb") or die(mysql_error());

extract($_REQUEST);
if( isset($action) && $action="delete" ) {
	$sql = "DELETE FROM artist WHERE id='$id'";
	mysql_query( $sql )		or die(mysql_error());
}

$sql = "SELECT * FROM artist ORDER BY name";
$recordset = mysql_query( $sql )		or die(mysql_error());


?>
<?php include("admin_header.php") ?>

<h1>Artist List</h1>

<table cellpadding="5">
<th>Artist</th>

<?php
while( $row=mysql_fetch_assoc($recordset) ) {
	print '<tr><td><a href="admin_artist_edit.php?id='. $row["id"]. '">' .$row["name"] .'</a></td>' .
		'<td><a href="admin_artist_list.php?action=delete&id='. $row["id"]"\">Delete</a></td></tr>";
}
?>

</table>

<?php include("admin_footer.php") ?>
