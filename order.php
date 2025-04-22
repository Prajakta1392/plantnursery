<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include("connection.php");
     $name=$_POST["sel"];
	$qty=$_POST["qty"];
	 $rate=$_POST["rate"];
	 $am=$_POST["amount"];
	$amount=0;
	$nm=$_POST["nm"];
	
	
	if(isset($_POST["btnCal"]))
	{
		$amount=$qty*$rate;
		//echo $amount;
		//$nm=$_POST["nm"];
		//echo $nm;
		header("Location:order1.php?amt=$amount&nm=$name&qty=$qty&rate=$rate");
	}
	
	if(isset($_POST["btnSubmit"]))
	{
	   
		$sql="insert into order1(pname,qty,rate,amount)values('$nm',$qty,$rate,$am)";
   mysqli_query($conn,$sql);
   echo "record inserted";
	}
  
 
	?>
</body>
</html>
