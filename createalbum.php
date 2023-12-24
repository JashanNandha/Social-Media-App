
<?php

   include("top.php");
?>


<?php
//session_start();
  include("connection.php");
 
  if(isset($_POST['upp']))
  {
	   $userid=  $_SESSION['k'];
       $email=$_SESSION['email'];
	  
     $ty    =$_POST['type'];
	 $album =$_FILES['album']['name'];  
	 $tmp   =$_FILES['album']['tmp_name'];
	 $albumpath=$email."/".$ty."/".$album;

  $my=mysql_query("insert into create_album(type,img,album_userid)values('$ty','$albumpath','$userid') ")or die(mysql_error());	
  mkdir($email);
    mkdir($email."/".$ty);
	move_uploaded_file("$tmp",$albumpath);
	if($my)
	{
		header("location:profile.php?profilpage=photo");
		
		
		}  
   else
   {
	   
	   
	   
	   }		
}

?>
<style>
.album
{
  display:none;position:absolute;	
	
	
}
</style>

<script src="js/jquery-2.1.3.min.js"></script>

<script>
    $(document).ready(function(e) 
	{
		$(".albumdet").click(function()
		{
			
			$(".album").slideToggle();
			
			});
			
			
        
    });
</script>


<!--<div class="album">-->
<div class="container">
<form action="" method="post" enctype="multipart/form-data" enctype="multipart/form-data">
<br /><br />

<input type="text" name="type" required="required">
<br /><br />

<input type="file" name="album" required="required">
<br/>
<input type="submit" name="upp" value="Update"  class="btn btn-primary btn-md"/>
</form>
</div>

<!--<!--<div class="albumdet">
<button class="btn btn-defult btn-md" name="upp" style="">Create Album</button>
</div>-->