<script src="js/jquery-2.1.3.min.js"></script>

<script src="js/clearbox.js" type="text/javascript"></script>
<script src="scr.js"></script>
<link rel="stylesheet" type="text/css" href="cstyl.css"> 
<div class="container" >
<div class="row" >
<div class="col-lg-8 col-md-8 col-sm-8" style="width:85%;height:85px;background-color:rgba(247,247,247,1);border:1px solid rgba(255,255,255,1);" >
<h3>Photos</h3>
<ul  class="nav navbar nav-tabs" style="margin-bottom:0px;border-right:0px solid #000; font-size:15px;font-style:normal;margin-top:-15px;color:rgba(0,0,0,1);">
<li ><a href="profile.php?profilpage=photos profile">Photos of you</a></li>
<li ><a href="profile.php?profilpage=you photo"> Your  Photos</a></li>
<li ><a href="profile.php?profilpage=albums">Albums</a></li>
<button class="btn btn-defult btn-md albumdet" style="margin-left:60%;margin-top:-130px;">Create Album</button>
<a href="addphoto.php"><button class="btn btn-defult btn-md" style="margin-top:-130px;">Add Photo</button></a>
<a href="add video.php"><button class="btn btn-defult btn-md" style="margin-top:-130px;">Add video</button></a>
</div>
</div>
</div>
<br />

<style>
	.tt
	{
		width:210px; height:230px; 
		margin-top:20px; margin-left:20px; float:left;
	}
	.tt h2
	{
		margin-top:0px; margin-bottom:0px; text-transform:capitalize;
	}
</style>
<div class="container" >
<div class="row" >
<div class="col-lg-8 col-md-8 col-sm-8" style="width:85%;height:;background-color:rgba(232,232,232,1);" >
<?php

//session_start();
	include("connection.php");
	$userid=  $_SESSION['k'];
	 
	$sql= mysql_query("select * from add_photo where photo_userid='$userid'") or die(mysql_error());
	

	while($row5=mysql_fetch_array($sql))
	{
		$photo_id=$row5['photo_id'];
		?>
        
        
    <div class="tt">
     
    <a rel="clearbox[gallery=Gallery,,comment=Water Drop]" href="<?php  echo $row5['add_photo'];?>" title="Mobile upload">
    <img  src="<?php echo $row5['add_photo']; ?>" style="width:210px; height:230px;" class="img-thumbnail"/></a>
    
    <div class="btn-group">
    
            <span class="glyphicon glyphicon-pencil" style="font-size:px;color:rgba(0,0,0,1); margin-top:-25px;margin-left:150px;cursor:pointer;" dropdown-toggle" data-toggle="dropdown" >Edit </span>
            
            	<ul class="dropdown-menu" role="menu" >
     <a href="your_photo_delete.php?photo_d=<?php echo $photo_id; ?>"><center>Delete</center></a><br>
    	</ul>
   </div>
      </div>
        
       
        <?php
	}
	
?>
</div>
</div>
</div>






 
<br /><br />
<div class="container" >
<div class="row" >
<div class="col-lg-8 col-md-8 col-sm-8" style="width:85%;height:85px;background-color:rgba(247,247,247,1);border:1px solid rgba(255,255,255,1);" >
<span class="glyphicon glyphicon-music" style="margin-top:15px;font-size:20px;"></span>
<font style="font-size:24px;font-weight:bold;">Music</font>





</div>
<div class="col-lg-8 col-md-8 col-sm-8" style="width:85%;height:background-color:rgba(232,232,232,1);" >

<hr>
   <table border="0" width="800">
   <?php
   
 //session_start();
	include("connection.php");
	$userid=  $_SESSION['k'];
	 
	$sql= mysql_query("select * from audios where audio_userid='$userid'") or die(mysql_error());
	

	while($row5=mysql_fetch_array($sql))
	{
		
		//$ii=$row5['audio_id'];
	
		?>
        
  <tr>
	
	<td>
     	<audio  controls="controls">
        
        	<source src="<?php echo $row5['audio']; ?>" type="audio/mp3" />
        </audio>
        
    </td>
       	</tr>
           
       
        <?php
	}
	
?>

	</table>
	</div>      

     
    
  
  
   

</div>
</div>
</div>

<!--<div class="item"><a href="example/test.mp3" rel="clearbox[gallery=Gallery@@,,tnhrf=nopreview@@autoslideshow@@,,width=500,,height=150,,title=MP3 music,,comment=Windows Media Player plugin is required!]"><img src="example/no_winmediamp3.gif" alt="music" /></a></div>-->

