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
   $edu= $row['education'];
if(isset($_POST['sub']))
{
  $edu=$_POST['education'];
  $myselect=mysql_query("update sign set education='$edu' where id='$userid'")or die(mysql_error());	   
	   //$addr=$row['address'];
	   if($myselect)
	   {
		  
			
		// echo	"";
		header("location:educationup.php");
	   
			 
	   }
  else
  {
	    echo "error";
	  
	  }	   
}
?>
<form action="" method="post">
<label>Education</label>
<br />
<input type="text" value="<?php  echo  $edu ?>" class="form-control" name="education" required="required"  >
<br />
<input type="submit" class="btn btn-success btn-md active  " name="sub" value="Update">

</form>