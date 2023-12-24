 <div class="table-responsive">
 <table class="table table-striped table-bordered table-hover table-condensed ">
   
  <tr>
  <td>ID</td>
  <td>Post_data</td>
  <td>Post_like</td>
  <td>Post_comment</td>
  <td>Delete</td>
  </tr>
  <?php
  include("connection.php");
 $post=mysql_query("select * from posts")or die(mysql_error());
   while($row=mysql_fetch_array($post))
   {
	 $post_id=$row['post_id'];
	 ?>
   <tr>
   <td>  <?php  echo $post_id ; ?></td> 
   <td>  <?php echo $row['post_data']; ?></td>
   <td>  <?php echo $row['post_like']; ?></td>
   <td>  <?php echo $row['post_comment']; ?></td>
   <td><a href="post delete.php?postdelete=<?php echo $post_id ?>"><button>Delete</button></a></td> 
	    
	   
	 <?php  
	   
	 }
  ?>
     </tr>
     </table> 
        
        </div>