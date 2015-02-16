<?php
ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT);
  mysql_connect("localhost","USERNAME", "PASSWORD");
  mysql_select_db( "gallerydb" );
  $result_set = mysql_query( "SELECT * FROM art order by Accession_Number desc;" );
  $num_messages = mysql_num_rows( $result_set );

?>

<html>
<body>
<p><img src="../images/kirk_logo_short.JPG" width="762" height="193" alt="Kirk Logo" /></p>
<p>&nbsp;</p>
<p><i>There are a total of <?php echo $num_messages ?> entries in the Gallery database.</i></p>
<p><br>
  
  <?php
echo 
/* does table headers for next section 
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
</tr>
<tr>
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

*/
"<table width="759" height="213" border="1">
  <tr>";
  while( $row = mysql_fetch_array( $result_set ) ) {
  echo "
  
    <td width="86"><label><strong>Object Name </strong></label></td>
    <td width="162" colspan="3"> " echo $row['title'] . "</td>
    <td width="163"><strong>Accession Number </strong></td>
    <td width="328">"echo $row['accession_number'] ." </td>
  </tr>
  
  <tr>
    <td><strong>Classification</strong></td>
    <td colspan="5">" echo $row['classification'] . "</td>
  </tr>
  <tr>
    <td><label><strong>Maker/Artist</strong></label></td>
    <td colspan="5"> $row['artist']</td>
  </tr>
   <tr>
    <td><label><strong>Date of Object</strong></label></td>
    <td colspan="5"> $row['dateofobject']</td>
  </tr>
     <tr>
    <td><label><strong>Designer</strong></label></td>
    <td colspan="5"><$row['designer']</td>
  </tr>
   <tr>
    <td><label><strong>Country</strong></label></td>
    <td>$row['country']</td>
    <td><strong>State</strong></td>
    <td>$row['usstate'] </td>
    <td><strong>City</strong></td>
    <td>$row['city'] </td>
   </tr>
   <tr>
    <td><label><strong>Techniques</strong></label></td>
    <td colspan="5">$row['techniques'] </td>
  </tr>
   <tr>
    <td><label><strong>Materials</strong></label></td>
    <td colspan="5">$row['materials'] </td>
  </tr>
    <tr>
    <td><label><strong>Colors</strong></label></td>
    <td colspan="5">$row['colors'] </td>
  </tr>
      <tr>
    <td><label><strong>Style, Type or Pattern</strong></label></td>
    <td colspan="5">$row['style'] </td>
  </tr>
       <tr>
    <td><label><strong>Size</strong></label></td>
    <td colspan="5">$row['artsize'] </td>
  </tr>
  <tr>
    <td><label><strong>Description</strong></label></td>
    <td colspan="5">$row['description'] </td>
  </tr>
  <tr>
    <td><label><strong>Source</strong></label></td>
    <td colspan="3">$row['source'] </td>
    <td><strong>Association</strong></td>
    <td>$row['association'] </td>
  </tr>
    <tr>
    <td><label><strong>Gift, Loan or Purchase</strong></label></td>
    <td colspan="3">$row['gift'] </td>
    <td><strong>Date Acquired</strong></td>
    <td>$row['dateacquired'] </td>
  </tr>
 
   <tr>
     <td><label><strong>Condition</strong></label></td>
     <td colspan="3">$row['displaycondition'] </td>
     <td><strong>Explain</strong></td>
     <td>$row['displayconditionexplain'] </td>
   </tr>
    <tr>
     <td><label><strong>Location of Art</strong></label></td>
     <td colspan="5">$row['location'] </td>
   </tr>
    <tr>
     <td><label><strong>Entered By </strong></label></td>
     <td colspan="3">$row['enteredby'] </td>
     <td><strong>Date Entered </strong></td>
     <td>$row['date_entered'] </td>
    </tr>
	 <tr>
     <td><label><strong>Image Name</strong></label></td>
     <td colspan="5">$row['image'] </td>
	   <td><label><strong>Record ID</strong></label></td>
     <td colspan="5">$row['id'] </td>
   </tr>
</table>";

// Loop over all the posts and print them out.
// NOTE: The SQl table column name is cAse SensiTive, so be careful
 
 /* original way of working- does single line across
 
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
  */
  }
?>
  
</p>
