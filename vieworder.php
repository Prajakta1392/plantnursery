<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

include("connection.php");
error_reporting(0);//to avoid warning in page
$res=mysqli_query($conn,"select * from order1");
if(mysqli_num_rows($res)>0)
{
echo "<center><table border=1  style='background-color:aqua';>";
echo "<h2>View Order</h2>";
 echo "<tr><th>Product Name</th>
 <th>Quantity</th>
 <th>Rate</th>
 <th>Amount</th></tr>";
while($row=mysqli_fetch_assoc($res))
{

 echo "<tr>";
 echo "<td>".$row['pname']."</td>";
 echo "<td>".$row['qty']."</td>";
 echo "<td>".$row['rate']."</td>";
 echo "<td>".$row['amount']."</td>";
 echo "</tr>";
}
 echo "</table></center>";

}

else
{
		
	echo "no record found";	
}




?>
<a href="Adminpanel.html"><button>BACK</button></a>

</body>
</html>














