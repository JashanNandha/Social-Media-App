<style>
.name
{
	margin-top:-110px;margin-left:200px;font-size:24px;font-weight:bold;
	text-transform:capitalize;
}

</style>




<?php 
  include("top.php");

?>
<div class="container" >
<div class="row" >
<div class="col-lg-12 col-md-12 col-sm-12" style="height:300px;background-color:rgba(232,232,232,1);" >
<?php
include("connection.php");

	
$useid=$_REQUEST['details'];

$select=mysql_query("select * from sign where id=$useid")or die(mysql_error());

$row=mysql_fetch_array($select);

	$dpath=$row['dp'];
	$name=$row['name'].$row['surname']."<br>";
	?>
    
	
    
    <img src="<?php echo $row['wall_pic']; ?>" width="102%" height="300px" style= "margin-left:-1%;" />

  <img src="<?php echo $dpath ;?>" width="15%" height="170px" style="border:5px solid rgba(255,255,255,1);margin-top:-190px;" />
 <div class="name"> <?php echo $name ; ?></div> 
	
	

	
	
		
	<?php

?>

</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12" style="background-color:rgba(234,234,234,1);">
<ul class="list-inline" style="margin-left:50%;margin-top:15px; ">
<!--<a href="profile.php></a>-->
<a href="profile details.php?details=<?php echo $useid; ?>&&dd2=time"><button class="btn btn-default btn-md" >Time Line </button></a>
<a href="profile details.php?details=<?php echo $useid; ?>&&dd2=about"><button class="btn btn-default btn-md">About us  </button></a>
<a href="profile details.php?details=<?php echo $useid; ?>&&dd2=friend"><button class="btn btn-default  btn-md" >Friends   </button></a>
<a href="profile details.php?details=<?php echo $useid; ?>&&dd2=photos"><button class="btn btn-default  btn-md">Photos     </button></a>
</ul>
<hr class="alert-danger" />

	<?php
		if(isset($_REQUEST['dd2']))
		{
			$yy= $_REQUEST['dd2'];
			if($yy=="about")
			{
				include("single details.php");
			}
		else if($yy=="time")
		{
			 include("single post.php");
		}
	   else if($yy=="friend")
	   {
		   
		  include("single friends show.php");   
	   }
	 else if($yy=="photos")
      {
		include("single photos.php");  
	  } 
	  
	 else
	{
	 	
	}
	 		
		}
		 else
	{
	 include("single post.php");	
	}
	?>

</div>
</div>
</div>
</div>