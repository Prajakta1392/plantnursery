<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "plantnursery";
$conn = new mysqli($servername,$username,$password,$database);

// if ($conn->connect_error)
if(!$conn)
{
	die("connection failed:".connect_error);
}

 ?>
</head>

</body>
</html>
