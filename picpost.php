<?php

include("connection.php");
//$dd=$_REQUEST['url'];
if(isset($_POST['upp']))
{   
	$pi=$_FILES['pic']['name'];
	$tm=$_FILES['pic']['tmp_name'];
	$email = $_SESSION['email'];
	   //$path="up/".$pi;
     $path  = $email."/".$pi;
	$sql2 = mysql_query("update posts SET image='$pi' where id=''") or die(mysql_error());
	  mkdir($path);
      move_uploaded_file("$tm",$path);
   /*?>if(is_dir("up"))
  {
	  move_uploaded_file("$tm",$path); 
   }
   else
   {
	  mkdir("up");
	  move_uploaded_file("$tm",$path); 
	  }	<?php */
	if($sql2)
	{
		//echo "done";
		header("location:welcome.php?profile=home");
	}
   else
   {
	 echo "error";   
	   
	}	
	
	
	}
?>
<form action="" method="post" enctype="multipart/form-data">

image
<input type="file" name="pic" required="required">
<br />
<input type="submit" name="upp" value="Update"  class="btn btn-primary btn-md"/>
</form>
</body>
</html>
