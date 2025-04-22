<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include("connection.php");
	$nm=$_POST["nm"];
	$email=$_POST["email"];
	$contactno=$_POST["mobileno"];
	$uname=$_POST["uname"];
	$pwd=$_POST["pwd"];
   
   $sql="insert into userreg(name,email,contactno,username,password)values('$nm','$email',$contactno,'$uname',$pwd)";
   mysqli_query($conn,$sql);
   echo "record inserted";
   
	?>
</body>
</html>
