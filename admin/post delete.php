<?php
include("connection.php");
$post=$_REQUEST['postdelete'];

$de=mysql_query("delete from posts where post_id='$post'")or die(mysql_error());

if($de)
{
	header("location:home.php?admin=post");
}
else
{
	
	
	echo error;	
	
	
	
	}
?>