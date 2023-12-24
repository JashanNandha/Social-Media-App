<?php
session_start();
     include("connection.php");
	
	     $user_id=$_SESSION['k'];
		
	   $area=$_REQUEST['area'];
	  $pic=  $_REQUEST['pics'];
	  
	  
	   $sql=mysql_query("insert into posts (post_data,user_id,image)values('$area','$user_id','$pic')")or die(mysql_error());
	  
	   
	   
	   
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
	      

?>
     


