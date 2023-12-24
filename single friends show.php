<?php

  include("connection.php");

?>
<style>
.sanp
{
 width:200px;  border:1px solid rgba(234,234,234,1);
		margin-top:10px; margin-left:12px; float:left;	
		text-align:center; text-transform:capitalize;
	
}
.fontname
{
 margin-top:-10px; margin-bottom:0px; text-transform:capitalize;
}
</style>


<?php

 // include("top.php");
?>

<div class="container" >
<div class="row">

<div class="col-lg-10 col-md-10 col-sm-10" style="background-color:rgba(239,239,239,1);border-bottom:4px solid rgba(232,232,232,1) ; height:80px;">
</br>
<img src="image/friends_24.png" /><font  style="font-family:Georgia, 'Times New Roman', Times, serif;font-size:18px;font-weight:bold;margin-top:20px;">&nbsp;&nbsp;Friends</font>
</div>
</div>

<br />
<div class="row">

<div class="col-lg-10 col-md-10 col-sm-10" style="background-color:#EAEAEA;">
<br />

<br /><br />
 
<?php
include("connection.php");

	
	$query=mysql_query("select * from friends inner join sign where friends.r_sender=sign.id and friends.r_rec='$userid'")or die(mysql_error());
	
	
	while($row=mysql_fetch_array($query))
	{
		 $name=$row['name']. " ".$row['surname'];
		
		$p=$row['dp'];
		
		$detid=$row['id'];
		?>
      <div class="sanp">
      
     
      
	 <a href="profile details.php?details=<?php echo $detid ; ?>">	<img src="<?php echo $p ; ?>"  width="150px" height="130px" style="border:5px solid rgba(255,255,255,1);"/> </a><br />
		<?php echo " <font class='fontname'> $name </font> ";?><br />
     <button class="btn btn-success">Friends</button> 
       
       
		</div>
        
       
		
		
		<?php
		
		
		}		
		
	
	
		
	
?>
 
</div>
</div>
</div>


