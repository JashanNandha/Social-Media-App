<script src="js/jquery-2.1.3.min.js"></script>
<script>
$(document).ready(function(e) {
    

$(".edit2").click(function()
		{
			
			$(".pic").slideToggle();
			
			});
			});
</script>
<style>
.pic
{
	 width:200px;height:px;	color:#000;
	margin-top:-100px;position:absolute;
	
	border-top:none;

	 
	}	
</style>
<?php
	session_start();
include("connection.php");
  
  
  		$userid=  $_SESSION['k'];
		$email = $_SESSION['email'];
		
$userid=  $_SESSION['k'];
$sel=mysql_query("select * from sign where id='$userid'")or die(mysql_error());
   $row=mysql_fetch_array($sel);
   $path2=$row['dp'];
?>
<img src="<?php echo $path2 ;?>" width="500px" height="200px" style="margin-top:70px;"/>
<br>


<?php

include("connection.php");
if(isset($_POST['upp']))
{
	$pi=$_FILES['pic']['name'];
	$tm=$_FILES['pic']['tmp_name'];
	  
	$path  = $email."/".$pi;

	$sql2 = mysql_query("update sign SET dp='$path' where id='$userid'") or die(mysql_error());
	mkdir($email);

      move_uploaded_file("$tm",$path);
   	  
	if($sql2)
	{
		header("location:dp.php");
	}
   else
   {
	 echo "error";   
	   
	}	
	
	
	}
?>
<div class="pic">

<form action="" method="post" enctype="multipart/form-data">


<input type="file" name="pic" required="required">

<input type="submit" name="upp" value="Update"  class="btn btn-primary btn-md"/>
</form>
</div>