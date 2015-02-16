<?php echo '<a href="gallery_entry.htm">Return to Kirk Gallery Entry form</a><br />'; ?>

<?php
ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT);
 mysql_connect("localhost","USERNAME", "PASSWORD");
 mysql_select_db( "gallerydb" );
/* include 'config.php';
include 'opendb.php'; */

// ... do something like insert or select, etc

	// $firstname = dbfix($_POST["firstname"]);

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

function dbfix($val){
	$temp = trim($val);
	$temp = str_replace("'","\'",$temp);
	return $temp;
}

/* $submitted= $_POST['galleryform']; */
$query = "Insert into art (title, accession_number, classification, artist, dateofobject, designer, country, usstate, city, techniques, materials, colors, style, artsize, description, source, association, gift, dateacquired, displaycondition, displayconditionexplain, location, enteredby, date_entered, image)
Values('$title','$accession_number','$classification','$artist','$dateofobject','$designer','$country','$usstate','$city','$techniques','$materials','$colors','$style','$artsize','$description','$source','$association','$gift','$dateacquired','$displaycondition','$displayconditionexplain','$location','$enteredby','$date_entered', '$image')";

mysql_query($query) or die('<h3>Error, insert query failed</h3>');

echo '<h3>Your insert was successful!</h3>';
echo '<br />';
/* echo 'You submitted '. $submitted; */
// include 'closedb.php';
?>
