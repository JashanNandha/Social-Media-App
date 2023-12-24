<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />
</head>
<style>
.aa
{
	width:200px; height:200px;
}
</style>
<body>

<?php
$userid=  $_SESSION['k'];
?>
<a href="<?php echo $path2 ;?>" rel="lightbox[aa]"><img src="<?php echo $path2 ;?>" width="100px" height="100px" /></a>

 <?php /*?><img src="<?php echo $path2 ;?>" width="100px" height="100px" class="nn"><?php */?>
<?php

include("connection.php");
if(isset($_POST['upp']))
{
	$pi=$_FILES['pic']['name'];
	$tm=$_FILES['pic']['tmp_name'];
	   //$path="up/".$pi;

	$sql2 = mysql_query("update sign SET dp='$pi' where id='$userid'") or die(mysql_error());
	
      move_uploaded_file("$tm","up/".$pi);
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
		header("location:welcome.php?profile=pic");
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
