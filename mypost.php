<link rel="stylesheet" type="text/css"  href="css/store.css" />

<script src="js/bootstrap.min.js"></script>
<!--<script src="js/jquery-2.1.3.min.js"></script>-->
<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />-->

<style>
/*.friend
{
 width:150px; height:150px; border:1px solid rgba(24,24,24,1);
		margin-top:20px; margin-left:20px; float:left;	
}*/
a:link {
    text-decoration: none;
}
</style>
<script src="js/jquery-2.1.3.min.js"></script>

     
                <script>
      $(document).ready(function(e)  
	{
		
		//$(".divs form").click(function()
		$(".uploadicon").click(function()
		{
			
			$(".file").slideToggle();
			
			});	
        
    });
</script>
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4" style="background-color:rgba(233,233,233,1);">
<?php
include("connection.php");
//$userid=  $_SESSION['k'];
$query=mysql_query("select * from friends inner join sign where friends.r_sender=sign.id and friends.r_rec='$userid' and friends.f_status=1")or die(mysql_error());

//$sel=mysql_query("select * from sign ")or die(mysql_error());

   while($row=mysql_fetch_array($query))
   {
	  
   $path2=$row['dp'];
  
   ?>
   
   
   
  <!--<div class="friend">-->
   <img src="<?php echo $path2 ;?>"width="150px" height="150px" alt=""  style="border:7px solid rgba(255,255,255,1);"/>
    
   	
<!--  </div>-->
  
  <?php
   }
   ?>

<?php


   

include("connection.php");
error_reporting(1);
//session_start();
$userid=  $_SESSION['k'];
$album_type= $_REQUEST['pathdp'];


//	echo "<h1>$album_type</h1>";
$sql_album = mysql_query("select * from create_album where album_id='$album_type'") or die(mysql_error());
while($row2=mysql_fetch_array($sql_album))
{

	// $album_id=$row2['album_id'];
	
	$p=$row2['img'];
	?>
    <img src="<?php echo $p ?>" width="150px" height="150px" alt=""  style="border:7px solid rgba(255,255,255,1);"/>
    <?php
}

//	$sql= mysql_query("insert into posts(image,user_id) values('$p','$userid')") or die(mysql_error());
	
	//header("location:profile.php");

 ?>
 




</div>
<div class="col-lg-7 col-md-7 col-sm-7" style="background-color:rgba(233,233,233,1);">

  <?php
  
 // $email = $_SESSION['email'];
		$posts = mysql_query("select * from posts inner join sign where posts.user_id=sign.id  and  posts.user_id=$userid ") or die(mysql_error());
		
		 
		while($post_row=mysql_fetch_array($posts))
		
			{
				$picc="upload/".$post_row['image'];
				 $dd=$post_row['post_id'];
				?>
           <div class="container post_content ">
          <div class="btn-group pull-right">
   <img src="image/arrow2.gif" class="dropdown-toggle" data-toggle="dropdown" style="margin-top:10px; width:20px;"/>
   <ul class="dropdown-menu" role="menu">
  <li> <a href="postdelete.php?url=<?php  echo $dd ; ?>"><button type="button" class="btn -btn-primary" />Delete</button></a></li>
   </ul>
   </div>
   	
	  <hr />
             

 <br />
                   
        
                    
                    
                <p style="text-transform:capitalize;margin-top:-17px;">
                <img src="<?php echo $post_row['dp']; ?>" style="width:80px; height:80px;border:1px solid rgba(212,212,212,1);" class="img-circle "/> </p>
                </p>
                    <div style="margin-top:-80px;margin-left:80px;font-weight:bold;text-transform:capitalize;font-size:18px;">  <?php echo $post_row['name']." ".$post_row['surname']; ?></div>
                      
                        <br />
                     <div style="margin-left:80px;margin-top:-20px;"> <?php echo $post_row['time']; ?></div>
                       
                            
                            <p style="margin-top:40px; word-wrap: break-word;">
                            <?php echo $post_row['post_data']."<br>"; ?>
                            </p>
                            
                <?php
					if(empty($post_row['image']))
					{
						
					}
					else
					{
							?>
                        <center>
                <img src="<?php echo $picc ;?>" style="width:380px;height:380px;"
               class="img-thumbnail"  /> </center> 
                            <?php						
					}
					?>
                         
               <hr/>             
  <a href="single personl like.php?like=<?php echo $dd ;?>"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;&nbsp;Like&nbsp;&nbsp;<span class="badge" style="background-color:rgba(102,153,255,1);"><?php echo $post_row['post_like'];?></span></a>
   
    <a href="single person comment.php?like=<?php echo $dd ;?>">  <span class="glyphicon glyphicon-comment" ></span>&nbsp;&nbsp;comment&nbsp;&nbsp;<span class="badge" style="background-color:rgba(102,153,255,1);"><?php echo $post_row['post_comment'];?> </span></a>
   <span class="glyphicon glyphicon-share-alt" style="color:#0F0;font-size:20px;" ></span> Share&nbsp;&nbsp;<span class="badge"></span></a>
   <hr />
             <hr  />
              
               <div class=""></div>
                    </div>
                <?php
			}
				
	?>

</div>

</div>
</div>

