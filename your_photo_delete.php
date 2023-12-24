<?php
include("connection.php");

  $photo=$_REQUEST['photo_d'];
  
   $de=mysql_query("delete from add_photo where photo_id='$photo'")or die (mysql_error());
   if($de)
   {
	   header("location:profile.php?profilpage=you%20photo");
	   
	   }
	   else
	   {
		   echo "rty";
		   
		   }

?>