<?php
extract($_REQUEST);

if(isset($submit)) {
	$body = "\r\nContact Requested:\r\n\r\n $Name\r\n $Phone\r\n $Email\r\n $Message\r\n";
	mail( "public@marakana.com", "Contact Form", $body, "From: form@TheCanvasGallery.com" );
	mail( $Email, "Contact Form", $body, "From: form@TheCanvasGallery.com" );
	$status = '<br><strong><font color="red">Your message has been sent. Thank you!</font><br><br>';
}

?>
<? include("header.php") ?>

<h1>Contact Us</h1>

<?=$status?>

<p> Please fill our your contact information and we will contact you within 24 hours. </p>

<form>
<table cellpadding="5">

<tr><td>Name</td><td><input type="text" name="Name"></td></tr>
<tr><td>Phone</td><td><input type="text" name="Phone"></td></tr>
<tr><td>Email</td><td><input type="text" name="Email"></td></tr>
<tr><td>Message</td><td><textarea name="Message" rows="5"></textarea></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Send"></td></tr>

</table>
</form>

<? include("footer.php") ?>
