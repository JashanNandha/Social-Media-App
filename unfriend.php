<?php
include("connection.php");


	$dd=$_REQUEST['fre'];
$deactive=mysql_query("update friends SET f_status='1' where f_id='$dd' ")or die (mysql_error());
	
	if($deactive)
	{
		
    header("location:profile.php?profilpage=friend");		
 		
		
}
else
{
	echo "error";
	
	
}
	
	
	


?>