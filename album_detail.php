<?php
include("top.php");

?>
<script src="js/jquery-2.1.3.min.js"></script>

<script src="js/clearbox.js" type="text/javascript"></script>
<script src="scr.js"></script>
<link rel="stylesheet" type="text/css" href="cstyl.css"> 
<div class="container" >
<br />
<div class="row" >
<div class="col-lg-8 col-md-8 col-sm-8" style="width:85%;background-color:" >




<?php


include("connection.php");
$userid=  $_SESSION['k'];
$album_type= $_REQUEST['album_type'];


	//echo "<h1>$album_type</h1>";
$sql_album = mysql_query("select * from create_album where type='$album_type'") or die(mysql_error());
while($row2=mysql_fetch_array($sql_album))
{
	 $album_id=$row2['album_id'];
	 //$album2_id=$row2['type'];
	

	
	?>
    <div style="width:220px; float:left;">
    
<a rel="clearbox[gallery=Gallery,,comment=Water Drop]" href="<?php  echo $row2['img'] ;?>" title="Drop">
    <img  src="<?php echo $row2['img'];?>"width="200px" height="230px" alt=""  style=" border:4px solid rgba(0,0,0,1);border-radius:6px;"  /></a>
    
    
    <div class="btn-group">
    
            <span class="glyphicon glyphicon-pencil" style="font-size:px;color:rgba(0,0,0,1); margin-top:-25px;margin-left:150px;cursor:pointer;" dropdown-toggle" data-toggle="dropdown" >Edit </span>
            
            	<ul class="dropdown-menu" role="menu" >
                <a href="album_pic_delete.php?album_d=<?php echo $album_id; ?>">Delete</a><br>
                <a href="edit.profile_pic.php?pathdp=<?php echo $row2['img'];?>">Make Profile Photo</a><br>
    <a href="profile.php?pathdp=<?php echo $album_id;?>">Share Photo</a>
    </ul>
   </div>
    
 </div>
    <?php
}
?>

<br /><br />
</div>
</div>
</div>
 
  