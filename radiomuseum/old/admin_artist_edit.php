<?php
extract($_REQUEST);

mysql_connect("localhost", "USERNAME", "PASSWORD") 	or die(mysql_error());
mysql_select_db("gallerydb") or die(mysql_error());

if( isset($submit) ) {
	$status = "";

	if( $name=="" ) {
		$status = "Please enter the artist's name.<br>";
	} else {
		// Connect to the database and insert the new artist
		$sql = "UPDATE artist SET name='$name', " .
				"WHERE id='$id'";

		mysql_query( $sql )	or die(mysql_error());

		$status = "SUCCESSFULLY updated $name";
	}
} else {

	$sql = "SELECT * from artist WHERE id='$id'";
	$resultset = mysql_query( $sql )	or die(mysql_error());
	$row = mysql_fetch_assoc( $resultset );
	extract( $row );
}
?>
<?php include("admin_header.php") ?>
<img src="images/kirklogo.jpg"><br>
<h1>Artist Update Screen</h1>

<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
<input type="hidden" name="id" value="<?=$id?>">
<table>
  <?php if (isset($status)) {?>
  	<tr><td colspan="2"><b><?=$status?></b><br><br></td></tr>
  <?php } ?>
  <tr><td>Name</td><td><input type="text" name="name" value="<?=$name?>" /></td></tr>
  <tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Submit"/></td></tr>

</table>

</form>

<?php include("admin_footer.php") ?>
