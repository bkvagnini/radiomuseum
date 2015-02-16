<?php
extract($_REQUEST);

if( isset($submit) ) {
	$status = "";

	if( $name=="" ) {
		$status = "Please enter the artist's name.<br>";
	} else {
		// Connect to the database and insert the new artist
		$sql = "INSERT INTO Artist (name)" .
				"VALUES ('$name')";
				mysql_connect("localhost", "USERNAME", "PASSWORD") 	or die(mysql_error());
			mysql_select_db("gallerydb") or die(mysql_error());
		mysql_query( $sql )						or die(mysql_error());
		$status = "SUCCESSFULLY inserted $name";
	}
}

?>
<? include("admin_header.php") ?>

<h1>Kirk Collection Maker/Artist Insert Screen</h1>

<form action="<?=$_SERVER['PHP_SELF']?>" method="get">

<table>
  <? if (isset($status)) {?>
  	<tr><td colspan="2"><b><?=$status?></b><br><br></td></tr>
  <? } ?>
  <tr><td>Name</td><td><input type="text" name="name"/></td></tr>
  <tr><td colspan="2"><input type="submit" name="submit" value="Submit"/></td></tr>

</table>

</form>

<? include("admin_footer.php") ?>
