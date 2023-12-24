<?php
include("connection.php");
if(isset($_REQUEST['ul2']))
{
	
	$dfuser=$_REQUEST['ul2']; 
	
$dete=mysql_query("delete from inbox where reciever='$dfuser' ")or die(mysql_error());
if($dete)
{
  
  header("location:welcome.php?profile=message");	
	
	
	}	
else
{
	
	 echo "error";
	
	
	}	

}
?>