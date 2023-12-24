<script src="js/jquery-2.1.3.min.js"></script>
<style>
.target
{
	width:300px; height:300px; background-color:rgba(167,167,167,1);
	margin-top:50px;
	 
}



</style>
<?php
 include("connection.php");
 
	if(isset($_POST['sub']))
	{
		$type =$_POST['type'];
		$img =$_FILES['imgg']['name'];
		$tmp =$_FILES['imgg']['tmp_name'];
	
$sql =mysql_query("insert into stricker(category,image)values('$type','$img')")or die(mysql_error());
    $path=$type."/";
	if(is_dir($type))
	{
		move_uploaded_file("$tmp",$path.$img);
		
		}
	else
	{
		mkdir($type);
		
		move_uploaded_file("$tmp",$path.$img);
		
		
		}	
		
	//$sql2 = mysql_query("update stricker SET dp='$pi' where id='$str_id'") or die(mysql_error());
	
      
	  if($sql)
	  {
		  
		  echo "done";
	  }
		else
		
		{
			echo "error";
			
			}		  
		  
		
		}
?>



<form action="" method="post" enctype="multipart/form-data" >


      <div class="input-group">
      <select name="type">
      <option>Select</option>
      <option>Animal</option>
      <option>bird</option>
      <option>flowers</option>
      <option>birthday</option>
      <option>celebrate</option>
      </select>
       
</div>
<br />
<input type="file" name="imgg" />
<br />
<button type="submit" class="btn btn-primary" name="sub">Send</button>
</div>
</form>
<hr />
<?php /*?><script>
    $(document).ready(function(e) 
	{
		$(".pp").click(function()
		{
			
			$(".stricker").slideToggle();
			
			});
	});
			</script><?php */?>
            
 <hr />
 <?php /*?><script type="text/javascript"   src="js/jqueryc.js"></script>   
   
    <script type="text/javascript" language="javascript">
	
   $(document).ready(function()
    {      
		$(".clickme").click(function(event)
		{         
			 $(".target").toggle('slow', function()
			{   
		// $(".log").text('Transition Complete');          
			});      
			});
   });   
   </script>   <?php */?>
  <!-- <div class="clickme">Click </div>  
       -->
        
 <hr />           
<!--<div class="stricker"></div>-->
<br />
</hr>
<?php /*?><?php
    include("connection.php");
	$ssq=mysql_query("select * from stricker where category='flowers'")or die(mysql_error());
	while($row2=mysql_fetch_array($ssq))
	{
	
	$t=$row2['category'];
	$path=$t."/".$row2['image'];
	echo"<img src='$path' width='50px' height='50px' class='clickme'>";
	?>
    
	<div class="target">         
     <?php 
	 
	 
	 echo"<img src='$path' width='300px' height='300px' >"; ?>  
     </div>
     <?php
	}
	?><?php */?>
 


<hr />
<br />
<hr />
  

<?php
  include("connection.php");
    if(isset($_POST['sub']))
	
	{
	
		$sender = $_SESSION['k'];
		$to  =$_POST['email'];
		$sms =$_POST['sms'];
		$img  =$_FILES['imgg']['name'];
		$tmp  =$_FILES['imgg']['tmp_name'];
		$sql=mysql_query("select * from sign where email='$to' ")or die(mysql_error());
		$row=mysql_fetch_array($sql);
		$use_id=$row['id'];
		
	$my=mysql_query("insert into inbox(sender,reciever,message,sms_image)values
	('$sender','$use_id','$sms','$img')" )or die (mysql_error());
	  $path="upload/";
	
	   if(is_dir("upload"))
	  {
		   move_uploaded_file("$tmp",$path.$img);
		   
		   
		  }
	 else
	 {
		 mkdir("upload");
		  move_uploaded_file("$tmp",$path.$img);
		} 
	if($my)
	{
		?>
        		   
		    <script>
          $(document).ready(function(e)
		   {
			   $(".gs").fadeOut(1000);
            
        });
          
          </script> 
		
        
        <?php
		echo "<font class='gs'>Done</font>" ;
		
		}
  else
    {
	   echo "error" ;
	  
	  
	  }		
		
		
		
		}
 
?>
<form action="" method="post" enctype="multipart/form-data" >

<br /><br /><br />
 <div class="col-sm-9">
 <br />
      <div class="input-group">
      
        <span class="input-group-addon">To</span>
        <input type="email" class="form-control" name="email" required="required">
</div>
<br />
<textarea class="form-control" rows="8"   name="sms">
</textarea>
<br />
<button type="submit" class="btn btn-primary" name="sub" style="float:right;margin-top:px;">Send</button>

<input type="file" name="imgg" />
</div>
</form>

<!--<div class="container">-->
 <script type="text/javascript"   src="js/jqueryc.js"></script>   
   
    <script type="text/javascript" language="javascript">
	
   $(document).ready(function()
    {      
		$(".clickme").click(function(event)
		{         
			 $(".target").toggle('slow', function()
			{   
		// $(".log").text('Transition Complete');          
			});      
			});
   });   
   </script>   
   <div class="col-lg-9 col-md-9 target ">
<?php
    include("connection.php");
	
	$ssq=mysql_query("select * from stricker ")or die(mysql_error());
	
	while($row2=mysql_fetch_array($ssq))
	{
		
		?>
        
	<?php 	
	$tr=$row2['str_id'];
	$t=$row2['category'];
	$path="admin/".$t."/".$row2['image'];
	 //echo $t ;
     
     echo "<a href='del.php?url=<?php //echo $tr;?>'<img src='$path' width='50px' height='50px'></a>" ;
	?>
    
    
	<!--<div class="target">         
     <?php 
	 // echo"<img src='$path' width='300px' height='300px' >"; ?>  
     </div>-->
     <?php
	}
	?>
    <br /><br />
    </div> 
   
<div class="col-lg-9 col-md-9  ">
<div class="clickme"><img src="image/music_note.png" width="50px" height="50px"/> </div>
</div>















	