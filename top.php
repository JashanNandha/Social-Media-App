
<style>
	.number
			{
				background-color:#069; color:#FFF;
				padding:7px 8px;margin-left:-15px;
				position:absolute;margin-top:-5px;
			
				border-radius:20px;border:2px solid rgba(255,0,0,1);
				/*border-top-right-radius:35px;border:2px solid rgba(255,0,0,1);
				border-bottom-left-radius:35px;border:2px solid rgba(255,0,0,1);*/
				   -webkit-animation:gg 15s infinite;
					
			}
		 
					
			
	
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css"  href="css/store.css" />


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />



</head>

<body>
<?php
session_start();
include("connection.php");
   if (isset($_SESSION['k']))
   {
  
  		$userid=  $_SESSION['k'];
		
?>
<div class="container-fluid top">
<br />
<div class="container">
<div class="row">
<div class="col-lg-4col-md-4 col-sm-4 ">
<form action="search.php" method="post" class="form-inline" >
<input type="text" class="form-control" name="text" placeholder="search for people, place things"  required="required"/>
<input type="submit" class="btn btn-success btn-md" name="sub"  value="Search"
/>
</form>

</div>
<div class="col-lg-3 col-md-3 col-sm-3"  >

<?php
   
   include("connection.php");
  $sel=mysql_query("select * from sign where id='$userid'")or die(mysql_error());
   $row=mysql_fetch_array($sel);
   $path2=$row['dp'];
   $sur  =$row['surname'];
  
   ?>
   <a href="profile.php">
   <img src="<?php echo $path2 ;?>" width="30px" height="30px" class="nn">
  </a><?php $username= $_SESSION['login'];
	$use=strtoupper( $username);
  ?>
  <a href="welcome.php?profile=user"> <?php echo "$use"; ?></a>
 

 </div>
   <script>
    $(document).ready(function(e) 
	{
		$(".sett").click(function()
		{
			
			$(".bttn").slideToggle();
			
			});
			
        
    });
</script>
<div class="col-lg-5 col-md-5 col-sm-5" >
<div style="float:left; width:200px;">
<a href="welcome.php?profile=home"> <button type="button" class="btn btn-primary btn-md">Home</button> </a>
 <a href="welcome.php?profile=message"><button type="button" class="btn btn-primary btn-md">inbox</button> </a>
     <?php
	 $m=mysql_query("select * from friends where r_rec='$userid' and f_status='0'")or die(mysql_error());
	 $num= mysql_num_rows($m);
 
	
		//$row=mysql_fetch_array($m);
	

?>
 
                        
                        	
    <a href="friend req.php"><span class="glyphicon glyphicon-globe" style="font-size:30px;"><?php echo "<font size='1px'class='number'> $num </font>"; ?></span></a>
    <?php


?>


     <?php
		 
//	}
	 ?>
      
    </div>

<!--
<div class="sett">

<h3>Setting</h3>

<div class="bttn">

<a href="index1.php"> Logout</a>
<br/>
   <a href="welcome.php?profile=change"> General setting</a>
   
</div>
</div>
-->
</div>
</div>
<br/>
</div>


   </div>
   <script src="js/jquery-2.1.3.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
  
  <?php
 }
   ?>