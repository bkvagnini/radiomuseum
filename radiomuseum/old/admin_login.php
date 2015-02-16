<?php
extract($_REQUEST);
if( isset($login) && $login=="USERNAME" &&
    isset($password) && $password="PASSWORD" ) {
	session_start();
	$_SESSION['authorized'] = 'yes';
	header( "Location: admin_artist_list.php" );
	exit();
}
?>
<html>
<head><title>The Kirk Collection Gallery Administration</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body align="center">
<img src="images/kirklogo.jpg"><br>
<h1>Kirk Collection Gallery Administration</h1>
<center>
<h1>Please Login</h1>

<form>
<table>

	<tr><td>Login:</td><td><input type="text" name="login"></td></tr>
	<tr><td>Password:</td><td><input type="password" name="password"></td></tr>
	<tr><td>&nbsp;</td><td><input type="submit" value="Login"></td></tr>

</table>
</form>
</center>
</html>
