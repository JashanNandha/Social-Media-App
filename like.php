<?php
include("connection.php");

$post_id=$_REQUEST['like'];

		
/*$post=mysql_error("select * from sign where ")or die (mysql_error());*/
$select=mysql_query("select * from posts where post_id='$post_id'")or die (mysql_error());
$row=mysql_fetch_array($select);

    $post_like=$row['post_like']+1;

$li=mysql_query("update posts SET post_like='$post_like' where post_id='$post_id'  LIMIT 1 ")or die (mysql_error());	

/*?>
 $num=mysql_num_rows($li);
	
		if($num!=1)
		{
			
		//echo "No result found";
			
			}
			else
			{
<?php */


        //$num=mysql_num_rows($li);
	
		


	
	header("location:welcome.php?profile=home");
	
	
			
	?>		