<?php
// ini_set('display_errors',1);
// error_reporting(E_ALL|E_STRICT);
  mysql_connect("localhost","USERNAME", "PASSWORD");
  mysql_select_db( "gallerydb" );
  $result_set = mysql_query( "SELECT * FROM art order by Accession_Number desc;" );
  $num_messages = mysql_num_rows( $result_set );

?>

<html>
<body>
<p><img src="../images/kirk_logo_short.JPG" width="762" height="193" alt="Kirk Logo" /></p>
<i>There are a total of <?php echo $num_messages ?> entries in the Gallery database.</i>
<br>

<?php

echo "<table border='1'>
<tr>
<th>Title</th>
<th>Accession Number</th>
<th>Classification</th>
<th>Artist</th>
<th>Date of Object</th>
<th>Designer</th>
<th>Country</th>
<th>US State</th>
<th>City</th>
<th>Techniques</th>
<th>Materials</th>
<th>Colors</th>
<th>Style</th>
<th>Size</th>
<th>Description</th>
<th>Source</th>
<th>Association</th>
<th>Gift</th>
<th>Date Acquired</th>
<th>Condition of display</th>
<th>Explain Condition</th>
<th>Location</th>
<th>Entered by</th>
<th>Date Entered</th>
<th>Image name</th>
<th>ID</th>


</tr>";

// Loop over all the posts and print them out.
// NOTE: The SQl table column name is cAse SensiTive, so be careful
 
  while( $row = mysql_fetch_array( $result_set ) ) {
  
  echo "<tr>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['accession_number'] . "</td>";
 echo "<td>" . $row['classification'] . "</td>";
echo "<td>" . $row['artist'] . "</td>";
echo "<td>" . $row['dateofobject'] . "</td>";
echo "<td>" . $row['designer'] . "</td>";
echo "<td>" . $row['country'] . "</td>";
echo "<td>" . $row['usstate'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['techniques'] . "</td>";
echo "<td>" . $row['materials'] . "</td>";
echo "<td>" . $row['colors'] . "</td>";
echo "<td>" . $row['style'] . "</td>";
echo "<td>" . $row['artsize'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['source'] . "</td>";
echo "<td>" . $row['association'] . "</td>";
echo "<td>" . $row['gift'] . "</td>";
echo "<td>" . $row['dateacquired'] . "</td>";
echo "<td>" . $row['displaycondition'] . "</td>";
echo "<td>" . $row['displayconditionexplain'] . "</td>";
echo "<td>" . $row['location'] . "</td>";
echo "<td>" . $row['enteredby'] . "</td>";
echo "<td>" . $row['date_entered'] . "</td>";
echo "<td>" . $row['image'] . "</td>";
echo "<td>" . $row['id'] . "</td>";
  echo "</tr>";
  }
  
echo "</table>";

?>

