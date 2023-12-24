<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
   
   <style>
 
.gs
{
	color:#030;
	
	}	
	
.font
{
	font-size:25px;font-style:oblique;color:#000;
	
	}
    </style>
</head>

<body>
<h1> <font class="font"><center>Update Name</center></font></h1>
<?php
session_start();
//$user=$row['id'];
$userid=  $_SESSION['k'];
include("connection.php");
$my=mysql_query("select * from sign where id ='$userid'")or die(mysql_error());
  $row=mysql_fetch_array($my);
   $birt= $row['birthday'];
if(isset($_POST['sub']))
{
  $d=$_POST['day'];
  $m=$_POST['month'];
  $y=$_POST['year'];
  $dob=$d."/".$m."/".$y;
  $myselect=mysql_query("update sign set birthday='$dob' where id='$userid'")or die(mysql_error());	   
	   $birt=$row['birthday'];
	   if($myselect)
	   {
		  
			
		// echo	"";
		header("location:birthdayud.php");
	   
			 
	   }
  else
  {
	    echo "error";
	  
	  }	   
}
?>

<form action="" method="post">
 <label>Birthday </label>
  <br />
<select name="day" >
<option >Day</option>
<script>
 var i;
 for(i=1;i<=31;i++)
{
	document.write("<option>"+i+"</option>");
	
	}

</script>
</select>
<select name="month" >
<option>Month</option>
<option>Jan</option>
<option>Feb</option>
<option>Mar</option>
<option>Apr</option>
<option>May</option>
<option>Jun</option>
<option>Jul</option>
<option>Aug</option>
<option>Sept</option>
<option>Oct</option>
<option>Nov</option>
<option>Dec</option>
</select>
<select name="year" >
<option>Year</option>
<script>
var i;
for(i=2015;i>=1931;i--)
{
	document.write("<option>"+i+"</option>");
	
	}

</script>
</select>
<br /><br />
<input type="submit" class="btn btn-success btn-md active  " name="sub" value="Update">
</form>
</body>
</html>