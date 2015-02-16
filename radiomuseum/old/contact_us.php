<?php
extract($_REQUEST);

if( isset($submit) ) {
	$status = "";
	$success = true;
	$message = "";
	
	foreach( $_REQUEST as $key=>$value ) {
		if( $value=="" ) {
			$status .= "Please enter your $key.<br>";
			$success = false;
		}
		$message .= "$key\t=\t$value\r\n";
	}
	
	if ( $success ) {
		mail( "betsy@wfsu.org", "Request for contact", $message, "From: $email" );
	}
}

?>
<html>
<body>
<h1>Request for contact</h1>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
<table>
<? if( !$success ) { ?>
  <tr><td colspan="2"><font color="red"><?=$status?><br></font></td></tr>		
<? } else { ?>
  <tr><td colspan="2"><font color="blue">Your message has been sent. Thank you!<br></font></td></tr>
<? } ?>

  <tr><td>Name</td><td><input type="text" name="name"/></td></tr>
  <tr><td>Email</td><td><input type="text" name="email"/></td></tr>
  <tr><td>Phone</td><td><input type="text" name="phone"/></td></tr>
  <tr><td colspan="2"><textarea rows="5" name="message"></textarea></td></tr>
  <tr><td colspan="2"><input type="submit" name="submit" value="Submit"/></td></tr>
</table>
</form>

</body>
</html>