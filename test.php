<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="js/jquery-1.3.2.js"></script>
<style>
.target
{
	position:absolute;display:none;
	}
</style>
</head>

<body>

	<div class="col-lg-8 col-md-8" style="background-color:#fff;border:1px solid rgba(233,233,233,1); height:350px; overflow:auto;">
    <?php
	session_start();
include("connection.php");

$s=$_SESSION['k'];

$sel=mysql_query("select * from inbox where reciever ='$s'  ")or die(mysql_error());
//mysql_query("update  inbox SET status=1 where id='$s'") or die( mysql_error());

   while($row=mysql_fetch_array($sel))
   
   {
	  
	  
					
				$ss= mysql_query("select * from sign where id=".$row['sender']."") or die(mysql_error());
				 
				$sender_row=mysql_fetch_array($ss);
				
				
				$a=$sender_row['name']." ".$sender_row['surname'];
				$picdp=$sender_row['dp'];
			     $pathimage="upload/".$row['sms_image'];
				 ?>
				 <img src="<?php echo $picdp;?>" width="50px" height="50px" class="img-circle ""/>
				<?php echo "<font style='text-transform:capitalize'>".$a."</font>";?>
				<?php  echo $row['time'];   ?>
            <br />
       
      <font style="margin-left:60px;"> <?php echo  $row['message']."<br>";  ?></font>
       <br>
	  <center><img src="<?php  echo $pathimage;   ?>"  width="150px" height="150px"></center>
    <hr />
	 <?php  
 	
  }
 ?>
	
 </div>
 <div class="col-lg-9 col-md-9">
 <br>
   <a href="clearchat.php?ul2=<?php echo $s ;?>"><button class="btn btn-defult" style="float:right">Clear chat</button></a>

<br />

</div>
<?php
  include("connection.php");
    if(isset($_POST['sub']))
	
	{
	
		$sender = $_SESSION['k'];
		$to  =$_POST['email'];
		$sms =$_POST['sms'];
		$img  =$_FILES['imgg']['name'];
		$tmp  =$_FILES['imgg']['tmp_name'];
		//$ssq=mysql_query("select * from stricker where str_id='$stricker'")or die(mysql_error());
	//	$row23=mysql_fetch_array($ssq);
		//   $st=$row23['str_id'];
		$sql=mysql_query("select * from sign where email='$to' ")or die(mysql_error());
		$row=mysql_fetch_array($sql);
		$status=0;
		$use_id=$row['id'];
		
		
	$my=mysql_query("insert into inbox(sender,reciever,message,sms_image,stricker,status,)values
	('$sender','$use_id','$sms','$st','$img','$status')" )or die (mysql_error());
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
      
                <script>
      $(document).ready(function(e)  
	{
		
		//$(".divs form").click(function()
		$(".uploadicon").click(function()
		{
			
			$(".file").slideToggle();
			
			});	
		 $(".clickme").click(function(event)
		{         
			 $(".target").toggle('slow', function()
			{   
		// $(".log").text('Transition Complete');          
			});      
			});		
     		
        
    });
</script>
<form action="" method="post" enctype="multipart/form-data" >

<br /><br /><br />
 <div class="col-sm-9">
 <br />
      <div class="input-group">
      
        <span class="input-group-addon">To</span>
        <input type="email" class="form-control" name="email" required="required">
</div>
<br />
<textarea class="form-control" rows="8"   name="sms" style="  word-wrap: break-word;">
</textarea>
<br />
<button type="submit" class="btn btn-primary" name="sub" style="float:right;margin-top:px;">Send</button>
<img src="image/120493_Panasonic FH4,  black_1_388X480_01.jpg"width="20px" height="20px" class="uploadicon" />
<div class="file"><input type="file" name="imgg" /></div>

 <img src="image/music_note.png" width="20px" height="20px" class="clickme">
 
 <div class="target ">
<?php
    include("connection.php");
	$ssq=mysql_query("select * from stricker ")or die(mysql_error());
	
	while($row2=mysql_fetch_array($ssq))
	{
		
		?>
           
	<?php 
	
	 $stricker=$row2['str_id'];
	
	
		$t=$row2['category'];
	$path="admin/".$t."/".$row2['image'];
	 //echo $t ;
     
     echo"<img src='$path' width='50px' height='50px'>";
	
	}
	?>
    <br /><br />
    </div>   

</div>
</form>

<br />
 





</body>
</html>
