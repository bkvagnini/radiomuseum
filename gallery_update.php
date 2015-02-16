<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Radio Museum Gallery Inventory DB</title>
<link href="style.css" rel="stylesheet" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body style="width:100%;text-align:center;">
<?php 

ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT);
$link= mysql_connect("localhost","USERNAME", "PASSWORD");
 mysql_select_db( "gallerydb", $link );
 
if (isset($_POST["searchfield"])){

	$searchfield = $_POST["searchfield"];
	$searchtext = $_POST["searchtext"];
	
	$sql = "SELECT * FROM art ";

	if ($searchfield == "accession_number")
		$sql .= "WHERE accession_number = $searchtext " ;
	else
		$sql .= "WHERE $searchfield = '$searchtext'";

	$sql .= " ORDER BY lastname, firstname";
	
	$result = mysql_query($sql,$link);
?>
  <h1><img src="../images/kirk_logo_short.JPG" alt="kirk collection logo" width="761" height="176" /></h1>
  <h1>Search Results</h1>
  <table border="1">
<tr>
	<th>ID</th>
	<th colspan="2">Name</th>
	<th>State</th>
	<th>Zip Code</th>
	<th>Age</th>
</tr>
<?php
while ($row = mysql_fetch_array($result,MYSQL_BOTH)){
echo "
<tr>
	<form method='post'>
	<td>{$row['id']}
	<input type='hidden' name='id' value='{$row['id']}' />
	</td>";
	for ($counter = 0; $counter < mysql_num_fields($result); $counter++){
		$thisfield = mysql_fetch_field($result,$counter);
		$thisfieldname = $thisfield->name;
		if ($thisfieldname != "id"){
			echo "<td>
			<input name='$thisfieldname' size='9' value='$row[$counter]' />
			</td>";
		}
	}
	echo "<td><input type='submit' value='Submit Changes' /></td>
	</form>
</tr>";
} ?>
</table>

<?php
} else {
/*
	$clientnum = $_POST["id"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
	$age = $_POST["age"];
*/

$title= dbfix($_POST['Title']);
$accession_number= dbfix($_POST['Accession_Number']);
$classification= dbfix($_POST['Classification']);
$artist= dbfix($_POST['Artist']);
$dateofobject= dbfix($_POST['DateofObject']);
$designer= dbfix($_POST['Designer']);
$country= dbfix($_POST['Country']);
$usstate= dbfix($_POST['State']);
$city= dbfix($_POST['City']);
$techniques= dbfix($_POST['Techniques']);
$materials= dbfix($_POST['Materials']);
$colors= dbfix($_POST['Colors']);
$style= dbfix($_POST['Style']);
$artsize= dbfix($_POST['Size']);
$description= dbfix($_POST['Description']);
$source= dbfix($_POST['Source']);
$association= dbfix($_POST['Association']);
$gift= dbfix($_POST['Gift']);
$dateacquired= dbfix($_POST['DateAcquired']);
$displaycondition= dbfix($_POST['Condition']);
$displayconditionexplain= dbfix($_POST['ConditionExplain']);
$location= dbfix($_POST['Location']);
$enteredby= dbfix($_POST['EnteredBy']);
$date_entered= dbfix($_POST['DateEntered']);
$image= dbfix($_POST['Image']);
// mysql_select_db($dbname);

//dbfix function used for removing characters during the posting process to the db
// usage is $date_entered= dbfix($_POST['DateEntered']); vs $date_entered=$_POST['DateEntered'];
function dbfix($val){
	$temp = trim($val);
	$temp = str_replace("'","\'",$temp);
	return $temp;
}
	$sql = 	"UPDATE 
				clients 
			SET 
				firstname='$firstname', 
				lastname='$lastname', 
				state='$state', 
				zip='$zip',
				age=$age
			WHERE 
				id= $clientnum";

	mysql_query($sql,$link);
?>
<h1 class="header">Gallery Database <?php echo $accession_number ?> Successfully Updated</h1>
<p>Here is the revised record.</p>
<?php
$sql = "SELECT * FROM art where 'accession_number' =$searchtext ORDER BY 'accession_number' ";
$result = mysql_query($sql,$link);
?>
<table border="1">
<tr>
	<th>ID</th>
	<th colspan="2">Name</th>
	<th>State</th>
	<th>Zip Code</th>
	<th>Age</th>
</tr>
<?php
while ($row = mysql_fetch_array($result,$link)){
	echo "<tr>";
	foreach ($row as $field) echo "<td>$field</td>";
	echo "</tr>";
}
?>
</table>
<?php }

include("footer.php");
?>



</body>
</html>
