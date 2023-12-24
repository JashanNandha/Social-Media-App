<?php


   

include("connection.php");
session_start();
$userid=  $_SESSION['k'];
$album_type= $_REQUEST['pathdp'];


//	echo "<h1>$album_type</h1>";
$sql_album = mysql_query("select * from create_album where album_id='$album_type'") or die(mysql_error());
$row2=mysql_fetch_array($sql_album);

	// $album_id=$row2['album_id'];
	
	$p=$row2['img'];
	?>
    <img src="<?php echo $p ?>" />
    <?php

//	$sql= mysql_query("insert into posts(image,user_id) values('$p','$userid')") or die(mysql_error());
	
	//header("location:profile.php");

 ?>
 
