<?php
extract($_REQUEST);

mysql_connect("localhost", "USERNAME", "PASSWORD") 	or die(mysql_error());
mysql_select_db("gallerydb") or die(mysql_error());

if( isset($submit) ) {
	$status = "";

	if( $title=="" ) {
		$status = "Please enter the art title.<br>";
	} else {
		// Connect to the database and insert the new artist
		if( isset( $id) && $id!="" ) {
			$sql = "UPDATE Art SET title='$title', " .
					"price='$price', description='$description', image='$image', artist_id='$artist_id'" .
					"WHERE id='$id'";
		} else {
			$sql = "INSERT INTO Art (title, description, image, artist_id ) ".
				   "VALUES ('$title', '$description', '$image', '$artist_id' )";
		}

		mysql_query( $sql )	or die(mysql_error());

		$status = "SUCCESSFULLY updated $title";
	}
} elseif ( isset($id) ) {

	$sql = "SELECT Art.title, Art.description
					Art.image, Art.artist_id
					FROM Art, Artist WHERE Art.artist_id=Artist.id AND Art.id='$id'";
	$resultset = mysql_query( $sql )	or die(mysql_error());
	$row = mysql_fetch_assoc( $resultset );
	extract( $row );

} else {
	$id=""; $title=""; $description=""; $image=""; $artist_id=0;
}

?>
<? include("admin_header.php") ?>

<h1>The Kirk Collection - Update Screen</h1>

<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
<input type="hidden" name="id" value="<?=$id?>">
<table>
  <? if (isset($status)) {?>
  	<tr><td colspan="2"><b><?=$status?></b><br><br></td></tr>
  <? } ?>
  <tr><td>Title</td><td><input type="text" name="title" value="<?=$title?>" /></td></tr>
  <tr><td>Artist</td>
  	<td><select name="artist_id">
		<option value="">Please Select</option>
		<?php
			$sql = "SELECT * FROM Artist";
			$resultset = mysql_query( $sql )	or die(mysql_error());
			while( $artist = mysql_fetch_assoc( $resultset ) ) {
				if ( $artist['id'] == $artist_id ) $check=" selected=\"SELECTED\" "; else $check="";
				print '<option value="' . $artist['id'] . "\" $check >" . $artist['name'] . "</option>\n";
			}
		?>
  	</select></td>
  </tr>
  <tr><td>Description</td><td><textarea rows="10" cols="60" name="description"
  			value="<?=$description?>" ><?=$description?></textarea></td></tr>
  <tr><td>Image</td><td><input type="text" name="image" value="<?=$image?>" />
	<small>(Path to the file relative to the root of the website)</small></td></tr>

  <tr><td colspan="2"><input type="submit" name="submit" value="Submit"/></td></tr>

</table>

</form>

<? include("admin_footer.php") ?>
