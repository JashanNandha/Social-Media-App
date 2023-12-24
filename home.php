<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css"  href="css/store.css" />

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />



<style>

	.post_content
	{
		width:100%; height:auto; float:left;background-color:#FFFFFF;
		
		margin-top:10px;
		
	}
	.post_pic
	{
		
	}
a:link {
    text-decoration: none;
}
	
</style>
</head>

            
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
          
<body>

<br /><br />
<?php
     
?>
<?php
     include("connection.php");
	 if(isset($_POST['sub']))
	 {
	     $user_id=$_SESSION['k'];
		
	   $area=$_POST['area'];
	   $pic=$_FILES['pic']['name'];
	   $tmp=$_FILES['pic']['tmp_name'];
	   $sql=mysql_query("insert into posts (post_data,user_id,image)values('$area','$user_id','$pic')")or die(mysql_error());
	  $pat="upload/";
	   if(is_dir("upload"))
	  {
		   move_uploaded_file("$tmp",$pat.$pic);
		   
		   
		  }
	 else
	 {
		 mkdir("upload");
		  move_uploaded_file("$tmp",$pat.$pic);
		 	 
		}  
	   
	   
	   
	   if($sql)
	   {
		   ?>
           <script>
           $(document).ready(function(e)
		   
		    {
              $(".gg").fadeOut(1000);            
        });
           
           </script>
           <?php
		   header("location:welcome.php?profile=home");
		  // echo "<font class='gg'>Done</font>";
		   }
		   else
		   {
			   echo "error";
			   
			   
			   }
	      
	 }
?>
     


<?php /*?><?php
$postsg = mysql_query("select * from posts") or die(mysql_error());
		
	$rr=mysql_fetch_array($postsg);
	  $pp="upload/".$rr['image'];	 
	if($postsg)
	{
		?>
     <img src="<?php echo "$pp";?>" width="50px" height="50" />   
   
   <?php
	}
	else
	{
		
		
		}
?><?php */?>
<!--<img src="image/like.png" class="imgg"/>-->
<div class="divs form">
<form action="" method="post" enctype="multipart/form-data">

<textarea class="form-control" rows="8"  name="area" style="word-wrap: break-word;" >
</textarea>

<img src="image/120493_Panasonic FH4,  black_1_388X480_01.jpg"width="20px" height="20px" class="uploadicon" />
<div class="file"><input type="file" name="pic"  /></div>
</div>
<button type="submit" class="btn btn-primary" name="sub" style="float:right;margin-top:px;">Post</button>

</form>



 
    <?php
	
		$posts = mysql_query("select * from posts inner join sign where posts.user_id=sign.id  order by post_id desc") or die(mysql_error());
		
		 
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
   	
             

 <br />
                    <hr />
        
                    <br />
                    <p style="text-transform:capitalize;margin-top:-17px;">
                <img src="<?php echo $post_row['dp']; ?>" style="width:80px; height:80px;border:1px solid rgba(212,212,212,1);" class="img-circle "/> </p>
            <div style="margin-left:90px;margin-top:-80px; text-transform:capitalize;">    
                      <?php echo $post_row['name']." ".$post_row['surname']; ?>
                      <br />
                      <?php echo $post_row['time']; ?>
                      </div>
                        
    
                     
            <p style="text-align:justify;margin-top:35px;text-transform:capitalize;margin-left:8px;word-wrap: break-word;">
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
                <img src="<?php echo $picc ;?>" style="width:380px;height:380px;"
               class="img-thumbnail"  /> </center>   
                            <?php						
					}
					?>
                            <hr />
                            
   <a href="like.php?like=<?php echo $dd ;?>"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;&nbsp;Like&nbsp;&nbsp;<span class="badge" style="background-color:rgba(102,153,255,1);"><?php echo $post_row['post_like'];?></span></a>
   
    <a href="comment.php?like=<?php echo $dd ;?>">  <span class="glyphicon glyphicon-comment" ></span>&nbsp;&nbsp;comment&nbsp;&nbsp;<span class="badge" style="background-color:rgba(102,153,255,1);"><?php echo $post_row['post_comment'];?> </span></a>
   <a href="share.php?area=<?php echo $post_row['post_data']; ?>&&pics=<?php echo $post_row['image']; ?>">
   <span class="glyphicon glyphicon-share-alt" style="color:#0F0;font-size:20px;" ></span> Share&nbsp;&nbsp;<span class="badge"></span></a>
   <hr />
             <br />               
               
                    </div>
                <?php
			}
				
	?>
    
</body>
</html>
