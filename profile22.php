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
</style>

 <?php /*?><?php 
	include("connection.php");
	if(isset($_REQUEST['updte']))
	{
		$up=$_REQUEST['update'];
		if($up==user)
		{
			include("updateuser.php");
			}
      else
	  {
		  
		  
		  
		}		
		
		}
	?>
<?php */?>

<title>Untitled Document</title>

<script src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />

<style>
.aa
{
	width:200px; height:200px;
}


</style>


<link rel="stylesheet" type="text/css"  href="css/store.css" />
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css.map" />

<script src="js/jquery-2.1.3.min.js"></script>

<script src="js/clearbox.js" type="text/javascript"></script>
<script src="scr.js"></script>
<link rel="stylesheet" type="text/css" href="cstyl.css"> 


</head>

<body>

<?php
session_start();
$userid=  $_SESSION['k'];

include("connection.php");
   if (isset($_SESSION['k']))
   {
  
  		

?>

<div class="container-fluid top">
<br />
<div class="col-lg-3 col-md-3 col-sm-3" >

<?php
   
   include("connection.php");
  $sel=mysql_query("select * from sign where id='$userid'")or die(mysql_error());
   $row=mysql_fetch_array($sel);
   $path2="up/".$row['dp'];
  
   ?>
   <a href="welcome.php?profile=pic">
   <img src="<?php echo $path2 ;?>" width="30px" height="30px" class="nn">
  </a><?php $username= $_SESSION['login'];
	$use=strtoupper( $username);
  ?>
  <a href="welcome.php?profile=user"> <?php echo "$use"; ?></a>
 

 &nbsp;&nbsp;&nbsp;<a href="welcome.php?profile=home"> <button type="button" class="btn btn-primary btn-md">Home</button></a> 
   </div>
   <script>
    $(document).ready(function(e) 
	{
		$(".sett").click(function()
		{
			
			$(".bttn").slideToggle();
			
			});
			
		$(".uploadicon").click(function()
		{
			
			$(".ff").slideToggle();
			
			});		
        
    });
</script>
<div class="col-lg-4 col-md-4 col-sm-4" >

<div class="sett">
Setting</h3>

<div class="bttn">

<a href="index1.php"> Logout</a>
<br />
   <a href="welcome.php?profile=change"> General setting</a>
   
</div>
</div>
</div>
</div>
</div>

<br />
</div>
</div>
<div class="container-fluid">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12" style="background-color:rgba(84,84,84,1);height:390px;">

<?php
	
include("connection.php");
// $sel=mysql_query("select * from sign where id='$userid'")or die(mysql_error());
$sel=mysql_query("select * from sign  where id='$userid' ")or die(mysql_error());
  $row2=mysql_fetch_array($sel);
  
   
 // $updd=$row2['up_id'];
  $path42="up/".$row2['wall_pic'];
  ?>
<img src="<?php echo $path42 ;?>" width="800" height="350px" style="margin-top:2px;"/>
<br>


<?php
include("connection.php");
if(isset($_POST['upp']))
{
	$pi=$_FILES['pic']['name'];
	$tm=$_FILES['pic']['tmp_name'];
	   
	  $userid=  $_SESSION['k']; 
	//$sql35=mysql_query("insert into image_profile (image_userid)values('$userid')")or die(mysql_error());   

	$sql2 = mysql_query("update sign SET wall_pic='$pi' where id='$userid'") or die(mysql_error());
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
  
 <img src="image/120493_Panasonic FH4,  black_1_388X480_01.jpg" class="uploadicon" width="20px" height="10px" style="margin-top:-250px;margin-left:50px;">  
    <div class="ff" >
<form action="" method="post" enctype="multipart/form-data">


<input type="file" name="pic" required="required">

<input type="submit" name="upp" value="Update"  class="btn btn-primary btn-md"/>
</form>
<a href="deletewall.php?wall="<?php echo $userid; ?>"><button>Remove</button></a>
</div>
  
<?php
$userid=  $_SESSION['k'];
?>

<div class="media-left" width="200px" height="200px" style="margin-top:-210px;margin-left:30px;" >
<a rel="clearbox[gallery=Gallery,,comment=Image Upload,,width=400,,height=350]" href="dp.php" title="Profile Picture">

<img src="<?php echo $path2 ;?>" width="200px" height="200px"/>

</a>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
 }
   ?>
  
  <div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-18" style="background-color:rgba(84,84,84,1);">
<hr>
<button class="btn btn-success btn-md btntime">Time line</button>
<button class="btn btn-success btn-md btntime">About us </button>
<button class="btn btn-success btn-md btntime" >Friend   </button>
<button class="btn btn-success btn-md btntime">Photo    </button>
</div>
</div>
</div>


       
                <script>
      $(document).ready(function(e)  
	{
		$(".se").click(function()
		{
			
			$(".bt").slideToggle();
			
			});
		//$(".divs form").click(function()
		$(".uploadicon").click(function()
		{
			
			$(".file").slideToggle();
			
			});	
        
    });
</script>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-18" style="background-color:rgba(84,84,84,1);">
<hr>

  <?php
  
		$posts = mysql_query("select * from posts inner join sign where posts.user_id=sign.id  and  posts.user_id=$userid ") or die(mysql_error());
		
		 
		while($post_row=mysql_fetch_array($posts))
		
			{
				$picc="upload/".$post_row['image'];
				 $dd=$post_row['post_id'];
				?>
          <div class="container post_content"> 	
         <div class="se">
               <img src="image/arrow2.gif" /> 
                xvxv
               
          <div class="bt"> 
          hhhhchchh    
          <br />     
 
 <a href="postdelete.php?url=<?php  echo $dd ; ?>"><button type="button" class="btn -btn-primary" />Delete</button></a>
 </div> 
               </div>   
	  
             

 <br />
                    <hr />
        
                    <br />
                    <p style="text-transform:capitalize;">
                <img src="<?php echo "up/".$post_row['dp']; ?>" class="post_pic" />
                      <?php echo $post_row['name']." ".$post_row['surname']; ?>
                      
                        <br />
                            <?php echo $post_row['time']; ?>
                       </p>
                            
                            <p style="text-align:justify;">
                            <?php echo $post_row['post_data']; ?>
                            </p>
                            
                <?php
					if(empty($post_row['image']))
					{
						
					}
					else
					{
							?>
                            <center>  
                
                <img src="<?php echo $picc ;?>" width="100px" height="150px"  /> </center>    
                            <?php						
					}
					?>
                            <hr />
                            
   <a href="like.php?like=<?php echo $dd ;?>"><span class="glyphicon glyphicon-apple"></span>Like(<?php echo $post_row['post_like'];?>)</a>
   
    <a href="comment.php?like=<?php echo $dd ;?>">  <span class="glyphicon glyphicon-comment" ></span>comment(<?php echo $post_row['post_comment'];?>)</a>
   <span class="glyphicon glyphicon-share-alt" style="color:#0F0;font-size:20px;" ></span> Share
                            
               <div class=""></div>
                    </div>
                <?php
			}
				
	?>
    
</div>
</div>
</div>


</body>
</html>
<br><br>

