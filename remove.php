<?php

  include("connection.php");
   
    $d=$_REQUEST['fr'];
	 
	$de=mysql_query("delete from friends where f_id='$d'")or die(mysql_error());
	
	if($de)
	{
		header("location:friend%20req.php");
		
	} 	  
 else
 {
	 echo "error";
	 
	 }	  

?>