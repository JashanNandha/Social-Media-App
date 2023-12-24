<style>
	.tt
	{
		width:210px; height:230px; 
		margin-top:20px; margin-left:20px; float:left;
	}
	/*.tt h2
	{
		margin-top:0px; margin-bottom:0px; text-transform:capitalize;
	}
*/
</style>



<div class="container" >
<div class="row" >
<div class="col-lg-8 col-md-8 col-sm-8" style="width:85%;height:;background-color:rgba(232,232,232,1);" >
<?php

//session_start();
	include("connection.php");
	//$userid=  $_SESSION['k'];
	 $f=$_REQUEST['details'];
	$sql= mysql_query("select * from add_photo where photo_userid='$f'") or die(mysql_error());
	

	while($row5=mysql_fetch_array($sql))
	{
		
		?>
        
        
    <div class="tt">
     
    <a rel="clearbox[gallery=Gallery,,comment=Water Drop]" href="<?php  echo $row5['add_photo'];?>" title="Mobile upload">
    <img  src="<?php echo $row5['add_photo']; ?>" width="210px" height="230px"   style=" border:4px solid #666;"  /></a></div>
   
    
       	
           
       
        <?php
	}
	
?>
</div>
</div>
</div>