<?php

session_start();

include("connection.php");
$dp=$_REQUEST['pathdp'];

$userid=  $_SESSION['k'];




$up=mysql_query("update sign SET  dp='$dp' where id='$userid'")or die(mysql_error());

if($up)
{
	
 header("location:profile.php");	
	
 }
else
{
	echo "error";
} 


?>