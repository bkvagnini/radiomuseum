<?php
session_start();
// Check if the user is logged in
if( !isset($_SESSION['authorized']) || $_SESSION['authorized'] != 'yes' ) {
	header( "Location: admin_login.php" );
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
[<a href="index.php">HOME</a>]

[<a href="admin_artist_list.php">Artist List</a>]
[<a href="admin_artist_insert.php">New Artist</a>]
[<a href="admin_art_list.php">Art List</a>]
[<a href="admin_art_edit.php">New Art</a>]

<div align="center">
<hr><br>
