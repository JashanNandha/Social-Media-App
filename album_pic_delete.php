<?php
  include("connection.php");
  $delalbum=$_REQUEST['album_d'];
 $del=mysql_query("delete from create_album where album_id ='$delalbum'")or die(mysql_error());
 
 if($del)
 {
	 
header("location:profile.php?profilpage=you%20photo");	 
	 
} 
else
{
	
}

?>