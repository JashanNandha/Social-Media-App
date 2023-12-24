<?php
     include("top.php");

 ?>
<script src="js/jquery-2.1.3.min.js"></script>

<script src="js/clearbox.js" type="text/javascript"></script>
<script src="scr.js"></script>
<link rel="stylesheet" type="text/css" href="cstyl.css">
<style>
	.post_content
	{
		width:100%; height:auto; float:left;background-color:#FFFFFF;
		
		margin-top:10px;
		
	}
	.post_pic
	{
		width:50px; height:50px;
	}
   .user
   {
	  margin-top:-70px;color:rgba(0,0,153,1);margin-left:230px;
	  font-size:20px;font-weight:bold;text-transform:capitalize;
	   
	}
.btnalbum
{
	display:none;position:absolute;
}		
</style>
 <script>
    $(document).ready(function(e) 
	{/*
		$(".sett").click(function()
		{
			
			$(".bttn").slideToggle();
			
			});
*/			
		$(".uploadicon2").click(function()
		{
			
			$(".ff").slideToggle();
			
			});	
			
        
    });
</script>

<div class="container" >
<div class="row" >
<div class="col-lg-12 col-md-12 col-sm-12" style="height:300px;background-color:rgba(232,232,232,1);" >

<?php
	
include("connection.php");


// $sel=mysql_query("select * from sign where id='$userid'")or die(mysql_error());
$sel=mysql_query("select * from sign  where id='$userid' ")or die(mysql_error());
  $row2=mysql_fetch_array($sel);
  
   
 //$updd=$row2['up_id'];
  $path42=$row2['wall_pic'];
  
  ?>
<img src="<?php echo $path42 ;?>" width="102%" height="300px" style= "margin-left:-1%;"/>
<br>


<?php
include("connection.php");
if(isset($_POST['upp']))
{
	$pi=$_FILES['pic']['name'];
	$tm=$_FILES['pic']['tmp_name'];
	   $email = $_SESSION['email'];
	  $userid=  $_SESSION['k']; 
	  
    $path  = $email."/".$pi;
	$sql2 = mysql_query("update sign SET wall_pic='$path' where id='$userid'") or die(mysql_error());
	
	
	
	mkdir($email);
      move_uploaded_file("$tm",$path);
  
	  
	if($sql2)
	{
		//echo "done";
		header("location:profile.php");
	}
   else
   {
	 echo "error";   
	   
	}	
}
	?>
 <!--///* <table style="width:18%;height:40px;margin-top:-300px;border:2px solid rgba(0,0,0,1);	color:rgba(255,255,255,1); margin-left:60px;" >
//<tr >
//<td>*/-->
 
 <!--</td>
</tr>
</table>-->
<div class="ff" >
<form action="" method="post" enctype="multipart/form-data">
<input type="file"  name="pic" required="required">
<input type="submit" name="upp" value="Update"  class="btn btn-primary btn-md"/>
</form>
</div>

<?php
$userid=  $_SESSION['k'];

?>

<div class="item" width="200px" height="200px" style="margin-top:px;margin-left:30px;" >
<a rel="clearbox[gallery=Gallery,,comment=Image Upload,,width=400,,height=350]" href="dp.php" title="Profile Picture">
<img src="<?php echo $path2 ;?>" width="17%" height="170px" style="border:5px solid rgba(255,255,255,1);margin-top:-170px;"/></a>
</div>
<?php
$username= $_SESSION['login'];
 $sur  =$row['surname'];
 
	$use=( $username. $sur);
	?>
   <div class="user"><?php echo $use;?></div>
   <?php 
   ?>
<img src="image/bbb.png"  class="uploadicon2" style="margin-top:-180px;margin-left:30px;" />

</div>

</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12" style="background-color:rgba(234,234,234,1);">
<ul class="list-inline" style="margin-left:50%;margin-top:15px; ">
<!--<a href="profile.php></a>-->
<a href="profile.php?profilpage=time"><button class="btn btn-default btn-md" >Time Line </button></a>
<a href="profile.php?profilpage=about"><button class="btn btn-default btn-md">About us  </button></a>
<a href="profile.php?profilpage=friend"><button class="btn btn-default  btn-md" >Friends   </button></a>
<a href="profile.php?profilpage=photo"><button class="btn btn-default  btn-md">Photos     </button></a>
</ul>
<hr class="alert-danger" />
<?php
include("connection.php");
if(isset($_REQUEST['profilpage']))
{
	$page=$_REQUEST['profilpage'];

	if($page=="time")
	{
		include("mypost.php"); 
	}
	else if($page=="photo")
	{
		include("photo.php");
	}  
	else if($page=="about")
	{
		include("aboutus.php");
	}  
	else if($page=="friend")
	{
	    include("show friend.php");	
	}
	
	else if($page=="photos profile")
	{
		include("add profile photo.php");
	} 
	else if($page=="you photo")
	{
		include("show add photo.php");
	}
	else if($page=="albums")
	{
		include("show album test.php");
	}

	else 
	{
	} 
}
else 
{
	
	
  include("mypost.php");
		
		
} 
?>

</div>
</div>
</div>
</div>

<br />


  



    

