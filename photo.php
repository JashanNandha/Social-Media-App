<?php
//include("top.php");
?>
<br />
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

<a href="createalbum.php"><button class="btn btn-defult btn-md albumdet" style="margin-left:60%;margin-top:-130px;"  >Create Album</button></a>

<a href="addphoto.php"><button class="btn btn-defult btn-md" style="margin-top:-130px;">Add Photo</button></a>
<a href="add video.php"><button class="btn btn-defult btn-md" style="margin-top:-130px;">Add video</button></a>
</div>
</div>
</div>
<br />
<div class="container" >
<div class="row" >

<div class="col-lg-8 col-md-8 col-sm-8" style="width:85%;height:;background-color:rgba(232,232,232,1);" >

<?php
  include("connection.php");
  if(isset($_REQUEST['photo']))
  {
	 $photos=$_REQUEST['photo'];
	  
	 if($photos=="photos profile") 
	 {
		include("add profile photo.php"); 
	  }
	  
	  else if($photos=="you photo")
	  {
		  
		  include("show add photo");
		  
		  }
	 else  if($photos=="albums") 
	 {
		include("show album test.php"); 
	  }

	else
 	  {
	    }
	
}		 
	  

?>


<br />

<?php
include("connection.php");
//$userid=  $_SESSION['k'];

$sel=mysql_query("select * from sign ")or die(mysql_error());

   while($row=mysql_fetch_array($sel))
   {
	  
   $path2=$row['dp'];
  
   ?>
  
   <!--<div class="item">--><a rel="clearbox[gallery=Gallery,,comment=Water Drop]" href="<?php echo $path2 ;?>" title="Drop"><img class="border" src="<?php echo $path2 ;?>"width="300px" height="230px" alt=""  style="margin-left:10px;border:7px solid #C0C0C0;"/></a><!--</div>-->
  
  
  <?php
   }
   ?>


</div>
</div>
</div>
<br />
 
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
  display:none;position:absolute;margin-top:-450px; margin-left:px;	
	
	
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


<div class="album">

<form action="" method="post" enctype="multipart/form-data" enctype="multipart/form-data">
<input type="" class="form-control" name="type">
<input type="file" name="album" required="required">
<br/>
<input type="submit" name="upp" value="Update"  class="btn btn-primary btn-md"/>
</form>
</div>
<hr />
<div class="albumdet">
<button class="btn btn-defult btn-md" name="upp" style="">Create Album</button>
</div>



  