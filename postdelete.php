<?php
 include("connection.php");
   $idd=$_REQUEST['url'];
 $my=mysql_query("delete from posts where post_id='$idd'")or die(mysql_error());
   if($my)
   {
	   
	   
	header("location:welcome.php?profile=home");
   }
   else
   {
	   
	   
	   }
               
          
?>
