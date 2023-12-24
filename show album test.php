<script src="js/jquery-2.1.3.min.js"></script>

<script src="js/clearbox.js" type="text/javascript"></script>
<script src="scr.js"></script>
<link rel="stylesheet" type="text/css" href="cstyl.css"> 
<div class="container" >
<div class="row" >
<div class="col-lg-8 col-md-8 col-sm-8" style="width:85%;height:85px;background-color:rgba(232,232,232,1);border-bottom:2px solid rgba(204,204,204,1);border-top:2px solid rgba(204,204,204,1);" >
<h3>Photos</h3>
<ul  class="nav navbar nav-tabs" style="margin-bottom:0px;border-right:0px solid #000; font-size:15px;font-style:normal;margin-top:-15px;color:rgba(0,0,0,1);">
<li ><a href="profile.php?profilpage=photos profile">Photos of you</a></li>
<li ><a href="profile.php?profilpage=you photo"> Your  Photos</a></li>
<li ><a href="profile.php?profilpage=albums">Albums</a></li>

<button class="btn btn-defult btn-md albumdet" style="margin-left:60%;margin-top:-130px;">Create Album</button>
<button class="btn btn-defult btn-md" style="margin-top:-130px;">Add Photo</button>
<button class="btn btn-defult btn-md" style="margin-top:-130px;">Add video</button>
</div>
</div>
</div>
<br />


<style>
	.tt
	{
		width:200px; height:220px; border:1px solid rgba(24,24,24,1);
		margin-top:20px; margin-left:20px; float:left;
	}
	.tt h2
	{
		margin-top:0px; margin-bottom:0px; text-transform:capitalize;
	}
</style>


<?php

	include("connection.php");
	
	//$sqll= mysql_query("select *  from  create_album ") or die(mysql_error());
	 // $row34=mysql_fetch_array($sqll);
	  
	//echo  $aa= $row34['type'].$row34['img'];
	 
	$sql= mysql_query("select DISTINCT type from  create_album  LIMIT 0,6") or die(mysql_error());
	//$sql= mysql_query("select type from  create_album WHERE img BETWEEN 1 and 2") or die(mysql_error());

	while($row=mysql_fetch_array($sql))
	{
		
		?>
        
        
     <div class="tt">
     
       	<h2 align="center"><?php echo $row['type']; ?></h2>
            <a href="album_detail.php?album_type=<?php echo $row['type']; ?>">
 <center>           <img src="up2149681-kit.jpg" width="95%" height="180px"></center>
 </a>
        </div>
        <?php
	}
	
?>
<br />


