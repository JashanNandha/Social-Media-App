<?php
include("connection.php");

$post_id=$_REQUEST['like'];

		
/*$post=mysql_error("select * from sign where ")or die (mysql_error());*/
$select=mysql_query("select * from posts where post_id='$post_id'")or die (mysql_error());
$row=mysql_fetch_array($select);

    $post_comment=$row['post_comment']+1;

$li=mysql_query("update posts SET post_comment='$post_comment' where post_id='$post_id' ")or die (mysql_error());	
            
if($select)
{
	
	header("location:profile.php");
	
	}
 else
 {
	 
   echo "error";	 
	 
 }	
		
?>