<?php
include("top.php");
?>

<div class="container">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
<div class="col-lg-8 col-md-8 col-sm-8" style="background-color:rgba(245,245,245,1);">
<br />


<?php
//include("connection.php");
if(isset($_REQUEST['url']))
{
	
$useid=$_REQUEST['url'];

$select=mysql_query("select * from sign where id=$useid")or die(mysql_error());
?>
<table class="table">
<?php
while($row=mysql_fetch_array($select))
{
	$dpath=$row['dp'];
	?>
    <tr>
	<td width="30%"><img src="<?php echo $dpath ;?> " width="150px" height="130px" /></td>
    <td>
    <div class="col-md-6">
    <address>
   <strong style="text-transform:capitalize;"><?php echo $row['name'].$row['surname']."<br>";  ?></strong><br>
           <?php echo $row['address']."<br>"; ?>
	        <?php echo $row['birthday']."<br>"; ?>  
             <abbr title="Phone">P:</abbr> <?php echo $row['phone']; ?>
       </address>
     </div> 

</div>
	
	</td>
	
	</tr>


	<?php
	
	
	}	
	
}
?>
</table>
</div>

<div class="col-lg-2 col-md-2 col-sm-2">


</div>
</div>
</div>

