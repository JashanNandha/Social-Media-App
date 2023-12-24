<?php
 
   include("connection.php");
   
   $dd=$_REQUEST['new'];
  
   $del=mysql_query("delete from news_add where id='$dd'") or die(mysql_error());
   
      if($del)
	  {
		   header("location:home.php?admin=new");
		  
		  } 
      
	  else
	  {
		 echo "error"; 
		 
		  
		  
		  
		 }		  
?>