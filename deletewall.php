<?php
	
include("connection.php");
// $sel=mysql_query("select * from sign where id='$userid'")or die(mysql_error());
$sel=mysql_query("select * from sign ")or die(mysql_error());
  $row2=mysql_fetch_array($sel);
  
   
 // $updd=$row2['up_id'];
  $path42="up/".$row2['wall_pic'];
  ?>
<!--<img src="<?php /*?><?php echo $path42 ;?><?php */?>" width="800" height="350px" style="margin-top:2px;"/>
<br>-->





<?php
 include("connection.php");
 if(isset($_REQUEST['wall']))
 {
 $wallpaper=$_REQUEST['wall'];
  
 $de=mysql_query("delete from sign where  id='$wallpaper' and wall_pic='$path42'")or die (mysql_error());
 
 
 if($de)
 {
	 
   header("location:profile22.php");	 
}

else
{
 	
} 
 }
?>