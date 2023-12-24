<?php
    include("connection.php");
	$tt=$_REQUEST['url'];
	$ssq=mysql_query("select * from stricker where str_id ='$tt'")or die(mysql_error());
	
	while($row3=mysql_fetch_array($ssq))
	{
		
		?>
        
	<?php 	$t=$row3['category'];
	$path="admin/".$t."/".$row2['image'];
	 //echo $t ;
     
     echo"<img src='$path' width='50px' height='50px'>";
	?>
    
    
	<!--<div class="target">         
     <?php 
	 // echo"<img src='$path' width='300px' height='300px' >"; ?>  
     </div>-->
     <?php
	}
	?>
