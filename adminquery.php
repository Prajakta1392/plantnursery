
<?php
include('connection.php');
$name=$_POST["nm"];
$pass=$_POST["pwd"];

    $query = "select password from login where username='$name'";
	 $q2 = "select password from userreg where username='$name'";
	$result=mysqli_query($conn,$query) or die(mysqli_error());
	$rows = mysqli_fetch_row($result);
	$res=mysqli_query($conn,$q2) or die(mysqli_error());
	$ro = mysqli_fetch_row($res);
	$pa=$rows[0];
		$pa2=$ro[0];
		
	   if($pa == $pass)
	   {
	  
			
			
			header('Location: Adminpanel.html');
	
	   }
	   else if($pa2 == $pass)
	   {
	   header('Location: UserPanel.html');
		}
		else
		{
		//	 echo "<script>alert('login unsucessfully')
			
			header('Location:login.html');
			}
          mysqli_close($conn);
    

    

?>
