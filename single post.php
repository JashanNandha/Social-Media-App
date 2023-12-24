<div class="container">


<div class="col-lg-4 col-md-4 col-sm-4" style="background-color:rgba(0,0,102,1);height:500px;">
nbdkjfnd
</div>


<div class="col-lg-5 col-md-5 col-sm-5" style="background-color:rgba(255,255,255,1);">
<?php
include("connection.php");
         $d=$_REQUEST['details'];
		$posts = mysql_query("select * from posts inner join sign where posts.user_id=sign.id  and  posts.user_id=$d ") or die(mysql_error());
		
		 
		while($post_row=mysql_fetch_array($posts))
		
			{
				$picc="upload/".$post_row['image'];
				 $dd=$post_row['post_id'];
				?>
         
                  
        
                    <br />
                    <p style="text-transform:capitalize;">
                <img src="<?php echo $post_row['dp']; ?>"  width="70px" height="70px" style="border:2px solid rgba(204,204,204,1);" /></p>
                <div style="margin-top:-81px;margin-left:76px;color:rgba(0,51,153,1);font-weight:bold; font-size:18px;text-transform:capitalize;"><?php echo $post_row['name']." ".$post_row['surname']; ?>
                  
       </div>
                    <p style="margin-left:80px;">  <?php echo $post_row['time']; ?></p>
                      
                           <p style="text-align:justify;margin-left:5px;margin-top:28px;font-size:20px;">
                        
                            <?php echo $post_row['post_data']; ?>
                            </p>
                            
                <?php
					if(empty($post_row['image']))
					{
						
					}
					else
					{
							?>
                             
                <br />
      <div style="width:400px;height:350px;border:2px solid rgba(204,204,204,1);margin-left:12px;">     <img src="<?php echo $picc ;?>" width="400" height="350"  />    </div>
                            <?php						
					}
					?>
                    <br>
                    
                            
         <hr />
         
       <a href="like friend.php?like=<?php echo $dd ;?>"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;&nbsp;Like&nbsp;&nbsp;<span class="badge" style="background-color:rgba(102,153,255,1);"><?php echo $post_row['post_like'];?></span></a>
   
    <a href="comment friend.php?like=<?php echo $dd ;?>">  <span class="glyphicon glyphicon-comment" ></span>&nbsp;&nbsp;comment&nbsp;&nbsp;<span class="badge" style="background-color:rgba(102,153,255,1);"><?php echo $post_row['post_comment'];?> </span></a>
   <span class="glyphicon glyphicon-share-alt" style="color:#0F0;font-size:20px;" ></span> Share&nbsp;&nbsp;<span class="badge"></span></a>   
                         
  
                <hr />            
               
                <?php
			}
				
	?>

</div>
</div>
