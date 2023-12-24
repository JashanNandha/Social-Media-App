<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css"  href="css/store.css" />

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

</head>
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
			
  .ff
  {
	  word-wrap:break-word;
	  
	  }			
.dropdown{
	margin-top:-10px;	
	width:100px;
	margin-left:170px;
}
.dropdown-toggle{
	background-color:#337ab7;
	color:#fff !important;}
.dropdown-menu{
	width:150px; 
	position:absolute;
 	right:0px;
	margin-left:-50px;
	} 
 </style>

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
<div class="col-lg-4 col-md-4 col-sm-4 " >
<form action="search.php" method="post" class="form-inline" >
<input type="text" class="form-control" name="text" placeholder="search for people, place things"  required="required"/>
<input type="submit" class="btn btn-success btn-md" name="sub"  value="Search"
/>
</form>

</div>
<div class="col-lg-3 col-md-3 col-sm-3" >

<?php
   
   include("connection.php");
  $sel=mysql_query("select * from sign where id='$userid'")or die(mysql_error());
   $row=mysql_fetch_array($sel);
   $path2=$row['dp'];
  
   ?>
   
   <a href="profile.php">
    
   <img src="<?php echo $path2 ;?>" width="40px" height="40px" class="nn">
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
    <div style="float:left; width:200px;margin-top:-10px;">
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
   <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Setting
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="index1.php">Logout</a></li>
    <li><a class="dropdown-item" href="welcome.php?profile=change">General Setting</a></li>
    
  </div>
</div>
<!--<div class="sett">
Setting</h3>

<div class=" bttn">

<a href="index1.php"> Logout</a>
<br />
<a href="welcome.php?profile=change">General setting</a>
 
 </div>
</div>-->
</div>
</div>
<br />

</div>
</div>


<div class="container-fluid" style="background-color:rgba(237,237,237,1);">
<div class="container">
<div class="row">

<div class="col-lg-2 col-md-2 col-sm-2" style="background-color:rgba(249,249,249,1);height:;">
      <br /><br />
        <?php
	      $fp=fopen("admin/myfile.php","r");
		  
		  while(! feof($fp))
		  {
			  
  			echo fgets($fp)."<br>";  
			  
			}	
		
		?>
     <br /><br />
     <?php
	      $fp=fopen("admin/myfile2.php","r");
		  
		  while(! feof($fp))
		  {
			  
  			echo fgets($fp)."<br>";  
			  
			}	
		
		?>   
       
</div>

<div class="col-lg-8 col-md-8 col-sm-8" style="background-color:rgba(233,233,233,1);"  >

<?php
include("connection.php");
  if(isset($_REQUEST['profile']))
  {
	    
	  $jj=$_REQUEST['profile'];
	  
 	 if($jj=="home")
   {
	  include("home.php");
   }
   else if($jj=="message")
   {
	   
	   include("message.php");
	   
	   
	   }
	else if($jj=="user")
	{
		include("userupdate.php");
		
	}
   else if($jj=="change")
   {
	   include("paaschange.php");
   }	
 else
 {
	 
	 
	 }		
  }
  ?>
</div>
<div class="col-lg-2 col-md-2 col-sm-2" style="background-color:;">
<br /><br />

<table  border="0px" class="table">
<?php
  error_reporting(1);
    include("connection.php");
	
	$select=mysql_query("select * from news_add order by RAND() LIMIT 5")or die(mysql_error());
	
	
	 while($row=mysql_fetch_array($select))
	{
		if($select)
		$d =$row ['id'];
		$na=$row['add_type'];
	  $path2="admin/".$na."/".$row['image'];
	  	?>
				
				
		<img src="<?php echo $path2; ?>" class="img-responsive img-thumbnail"  style="height:200px; width:240px;" > 
    <!--<td><?php //echo $na; ?></td>-->
    </tr>		
				
				
		<?php		
   }
	
		
?>		
				
				 	
	
	
        
	
   
    	

</table>

</div>


</div>
></div>
</div>
<?php
 }
   ?>




</body>
</html>
