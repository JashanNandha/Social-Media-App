
<script src="js/jquery-2.1.3.min.js"></script>


<?php
	
include("connection.php");
  
$sel=mysql_query("select * from image_profile ")or die(mysql_error());
   $row2=mysql_fetch_array($sel);
  $updd=$row2['up_id'];
  $path2="up/".$row2['img'];
  ?>
<img src="<?php echo $path2 ;?>" width="500px" height="300px" style="margin-top:70px;"/>
<br>


 










<?php

include("connection.php");
if(isset($_POST['upp']))
{
	$pi=$_FILES['pic']['name'];
	$tm=$_FILES['pic']['tmp_name'];
	   
	   
	//$sql2=mysql_query("insert into image_profile (img)values('$pi')")or die(mysql_error());   

	$sql2 = mysql_query("update image_profile SET img='$pi' ") or die(mysql_error());
	$path="up/".$pi;
      move_uploaded_file("$tm","up/".$pi);
   if(is_dir("up"))
  {
	  move_uploaded_file("$tm",$path); 
   }
   else
   {
	  mkdir("up");
	  move_uploaded_file("$tm",$path); 
	  }	
	  
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
               <script>
      $(document).ready(function(e)  
	{
	
		//$(".divs form").click(function()
		$(".uploadicon").click(function()
		{
			
			$(".ff").slideToggle();
			
			});	
        
    });
</script>



<form action="" method="post" enctype="multipart/form-data">

<img src="upcottoniht.jpg" width="30px" height="30px" class="uploadicon" />
<div class="ff"><input type="file" name="pic" required="required"></div>

<input type="submit" name="upp" value="Update"  class="btn btn-primary btn-md"/>
</form>
