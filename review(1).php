<?php 


$dbc=mysqli_connect('localhost','root','1234','it');

$query="SELECT * FROM review;";
$result=mysqli_query($dbc,$query) or die('Error in the query');
if(mysqli_num_rows($result) == 0) 
 echo "no reviews yet"; 
echo "<center><table>
<tr>
<th>customer: </th>
<th>restaurant:</th>
<th>review:</th>

</tr>";
while ($row=mysqli_fetch_array($result)) {

echo"<tr>";
echo "<td>" .$row['cust_id']. "</td></br>";
echo "<td>" .$row['Res_id']."</td><br/>";
echo "<td>" .$row['review']."</td><br/>";
echo "</tr>";
echo "</center>";
}
?>


