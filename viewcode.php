
<?php

include("connection.php");
error_reporting(0);//to avoid warning in page
$res=mysqli_query($conn,"select * from feedback");
if(mysqli_num_rows($res)>0)
{
echo"<table align='center' border='2' bgcolor='pink'>";
echo"<tr>";
echo"<th>Name</th>";
echo"<th>Name</th>";
echo"<th>Name</th>";
echo"<th>Name</th>";
echo"<th>Name</th>";
echo"</tr>";
while($row=mysqli_fetch_assoc($res))
{
echo"<tr>";
echo "<td>  $row['name']</td>";
echo "<td>  $row['mobileno']</td>";
echo "<td>  $row['email']</td>";
echo "<td>  $row['message']</td>";
echo "</tr>";


}
echo"</table>";
}
else
{
		
	echo "no record found";	
}





?>

