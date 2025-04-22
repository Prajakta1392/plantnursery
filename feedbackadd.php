<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<body>

<?php
	include("connection.php");
	$nm=$_POST["nm"];
	$add=$_POST["add"];
	$mobileno=$_POST["mobileno"];
	$email=$_POST["email"];
	$message=$_POST["message"];
   
   $sql="insert into feedback1(name,address,mobileno,email,message)values('$nm','$add','$mobileno','$email','$message')";
   mysqli_query($conn,$sql);
   echo "record inserted";
   
	?>

</body>
</html>
