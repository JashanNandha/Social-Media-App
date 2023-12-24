<?php
  include("top.php");
  if(isset($_SESSION['k']))
  {
?>
<div class="container">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2"></div>


<div class="col-lg-8 col-md-8 col-sm-8" style="background-color:rgba(250,250,250,1);border:2px solid rgba(234,234,234,1);border-radius:2px;">

  <table class="table"  border="0">


                        <?php
                        //session_start();

//$userid= $_SESSION['k'];

include("connection.php");

	$query=mysql_query("select * from friends inner join sign where friends.r_rec='$userid' and friends.f_status=0 and friends.r_sender=sign.id")or die(mysql_error());
	?>
    
    <?php
	while($row=mysql_fetch_array($query))
	{
$d=$row['f_id'];
		?>
     <tr>
     <td>
   
        <img src="<?php echo $row['dp']; ?>"  style="width:150;height:150px;border:4px solid rgba(204,204,255,1);">
       
        </td>
       <td > 
       <div style="margin-top:45px;"><font style="text-transform:capitalize;">
          <?php echo $row['name']; ?>
          </font>
          </div>
          </td>
        <td> 
        <a href="unfriend.php?fre=<?php echo $d;?>"> <input type="button"  value=   "Accept Request" class="btn btn-success btn-md" style="margin-top:45px;">
        </a>
        </td>
        <td> 
        <a href="remove.php?fr=<?php echo $d;?>"> <input type="button"  value="Remove Friend" class="btn btn-success btn-md" style="margin-top:45px;">
        </a>
        
        </td>
      
        </tr>
        <?php
	}
	

?>
</table>

</div>
 
 <div class="col-lg-2 col-md-2 col-sm-2"></div>
 </div>
 </div>                       
                 
<?php
  }
  else
  {
	  header("location:index.php");
  }
?>