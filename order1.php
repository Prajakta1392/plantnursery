<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="Home.css" />
</head>

<body>
<div class="head"><center><font face="Courier New, Courier, monospace" color="#000000" size="+4"><b><i><marquee behavior="alternate"><u>Flowering Plant Nursery</u></marquee></font></i></b></center></div>
<div class="p4"><font face="Courier New, Courier, monospace"><b><i>
<a href="viewproduct.php">VIEW PRODUCT</a>
<a href="viewworkshop.php">VIEW WORKSHOP</a>

<a href="order.html">ORDER</a>
<a href="Home.html">LOGOUT</a>


</div>
<script language="JavaScript">
function validate()
{
var nm=document.f.nm.value;
var duration=document.f.sel.value;
var des=document.f.des.value;
var cost=document.f.cost.value;

if(nm=="")
{
alert("Please enter your name.");
return false;
}
if(!nm.match(/^[a-z A-Z]+$/))
{
alert("Enter alphabets only.");
return false;
}
if(sel=="")
{
alert("Please enter select.");
return false;
}
if(des=="")
{
alert("Please enter description. ");
return false;
}

if(cost=="")
{
alert("Please enter cost.");
return false;
}

return true;
}
</script>
<table align="center">
<h1><center>Order Details</center></h1>
<form name="f" method="post" action="order.php" >
<tr>
<td>Enter  product Name:</td>
<td><select id="sel" name="sel"  >
<option value="select">Select</option>
<option value="Tulsi Plant">Tulsi Plant</option>
<option value="Lucky Bamboo">Lucky Bamboo</option>
<option value="Snake Plant">Snake Plant</option>
<option value="Palm Tree">Palm Tree</option>
<option value="Hibiscus">Hibiscus</option>
<option value="Mogra">Mogra</option>
<option value="Rose">Rose</option>
<option value="Dahlia">Dahlia</option>
<option value="Merigold">Merigold</option>

</select>
<input type="text" name="nm" value="<?php  if(isset($_REQUEST["nm"])) echo $_REQUEST["nm"];?>">
</td>
</tr>

<td>Enter quantity:</td>
<td><input type="text" name="qty" value="<?php  if(isset($_REQUEST["qty"])) echo $_REQUEST["qty"];?>"></td>
</tr>
<tr>
<td>Enter Rate:</td>
<td>
<input type="text" name="rate" value="<?php  if(isset($_REQUEST["rate"])) echo $_REQUEST["rate"];?>">
<input type="submit" name="btnCal" value="Calculate"/>
</td>
</tr>
<tr>
<td>Enter Amount:</td>
<td><input type="text" name="amount" value="<?php  if(isset($_REQUEST["amt"])) echo $_REQUEST["amt"];?>"></td>
</tr>
<tr>
<td><input type="submit" name="btnSubmit" value="submit" onClick="return validate()"/></td>
<td><input type="reset" name="reset" value="reset"/></td>
</tr>
</form>
</table>
</body>
</html>
